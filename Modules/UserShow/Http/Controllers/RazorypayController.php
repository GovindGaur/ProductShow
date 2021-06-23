<?php

namespace Modules\UserShow\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Razorpay\Api\Api;
use Session;
use Exception;

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
        // dd($grandAmont);
        $input = $request->all();
        // $input =$request->RazoryAmount;
        // dd($input);
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        // dd($amount);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$amount)); 
               
                // dd($response);
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        // Session::put('success', 'Payment successful');
        // return redirect()->back();
    }
}