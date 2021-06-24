<?php

namespace Modules\UserShow\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\UserShow\Entities\RazoryReceipt;
use Razorpay\Api\Api;
use Session;
use Exception;
use Mail;

class RazorypayController extends Controller
{
public function index(Request $request)
    {        
        $amount = $request->p;
        // dd($amount);
        $data['amount'] = $amount;
        return view('usershow::razorpayView',$data);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $amount = $request->RazoryAmount;
        // $grandAmont=  $amount*100;
        // dd($amount);
        $input = $request->all();
        // $input =$request->RazoryAmount;
        // dd($input);
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        // dd($amount);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$amount));
                
                return view('usershow::razorypayreceipt')->with(['response'=>$response]);
                
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        // $this->SendMail($req);
        // Session::put('success', 'Payment successful');
        // return redirect()->back();
    }

  public function SaveRazorydata(Request $req)
    {
        $RazoryReceipt =  new RazoryReceipt;
        $RazoryReceipt->payment_id= $req->payment_id;
        $RazoryReceipt->entity= $req->entity;
        $RazoryReceipt->currency= $req->currency;
        $RazoryReceipt->payment_method= $req->method;
        $RazoryReceipt->bank_name= $req->bank;
        $RazoryReceipt->status= $req->status;
        $RazoryReceipt->captured= $req->captured;
        $RazoryReceipt->description= $req->description;
        $RazoryReceipt->fee= $req->fee;
        $RazoryReceipt->tax= $req->tax;
        $RazoryReceipt->amount= $req->amount;
        $RazoryReceipt->save();
        // $this->SendMail($req);
        $this->html_email($req);
        return redirect('/');
    }
  
    public function SendMail(Request $req) {
        $Entity = $req->entity;
        $payment_id= $req->payment_id;
        $entity= $req->entity;
        $currency= $req->currency;
        $payment_method= $req->method;
        $bank_name= $req->bank;
        $status= $req->status;
        $captured= $req->captured;
        $description= $req->description;
        $fee= $req->fee;
        $tax= $req->tax;
        $amount= $req->amount;
  
        $mailBody = "<h1>Transaction Receipt</h1><p>Payment Id: ". $payment_id."</p>
        <p>Entity: ".$Entity."</p><p>bank_name: ".$bank_name."</p><p>status: ".$status."</p>";
        $data = array('name'=>"Virat Gandhi");
        $data = [
           'name'=>"Virat Gandhi",
           'content' => $mailBody,
       ];
        Mail::send([], [], function ($message) use($mailBody) {
           $message->to('gaurgovind1263@gmail.com', 'Govind Gaur')->subject
              ('Video Detail')
              ->setBody($mailBody, 'text/html'); // assuming text/plain
           $message->from('gaurgovind1263@gmail.com','Govind Gaur');
        });
        echo "Basic Email Sent. Check your inbox.";
     }


     public function html_email($req) {
       
        $data = array(
            'payment_id'=>$req->payment_id,
            'Entity'=> $req->entity,
            'currency'=>$req->currency,
            'payment_method'=>$req->method,
            'bank_name'=>$req->bank,
            'status'=>$req->status,
            'captured'=>$req->captured,
            'description'=>$req->description,
            'fee'=> $req->fee,
            'tax'=>$req->tax,
            'amount'=>$req->amount
        );
        // dd($data);
        Mail::send('usershow::RazorSendmail', $data, function($message) {
           $message->to('gaurgovind1263@gmail.com', 'Govind')->subject
              ('Payment Receipt');
           $message->from('gaurgovind1263@gmail.com','Govind');
        });
        return redirect('http://127.0.0.1:8000/');
        // echo "HTML Email Sent. Check your inbox.";
       
     }

    
}