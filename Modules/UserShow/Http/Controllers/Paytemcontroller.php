<?php

namespace Modules\UserShow\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
// use App\Paytm;
use Modules\UserShow\Entities\Paytm;

class Paytemcontroller extends Controller
{
   // display a form for payment
   public function initiate(Request $request)
   {
    //    dd($request->p);
    if(session()->has('user')){ 
    $amount = $request->p;
        // dd($amount);
        $data['amount'] = $amount;
        return view('usershow::paytm',$data);
    }
    else{
        return redirect('/Userloginshow');
    }
   }

   public function pay(Request $request)
   {
    //    $amount = 1500; //Amount to be paid
       $amount = $request->amount;
       $userData = [
           'name' => $request->name, // Name of user
           'mobile' => $request->mobile, //Mobile number of user
           'email' => $request->email, //Email of user
           'fee' => $amount,
           'order_id' => $request->mobile."_".rand(1,1000) //Order id
       ];

       $paytmuser = Paytm::create($userData); // creates a new database record

       $payment = PaytmWallet::with('receive');

       $payment->prepare([
           'order' => $userData['order_id'], 
           'user' => $paytmuser->id,
           'mobile_number' => $userData['mobile'],
           'email' => $userData['email'], // your user email address
           'amount' => $amount, // amount will be paid in INR.
           'callback_url' => route('status') // callback URL
       ]);
    //    dd(env('PAYTM_MERCHANT_KEY'));
       return $payment->receive();  // initiate a new payment
   }

   public function paymentCallback()
   {
       $transaction = PaytmWallet::with('receive');

       $response = $transaction->response();
       
       $order_id = $transaction->getOrderId(); // return a order id
     
       $transaction->getTransactionId(); // return a transaction id
       $data['response'] =$response;
      
       // update the db data as per result from api call
       if ($transaction->isSuccessful()) {
           Paytm::where('order_id', $order_id)->update(['status' => 1, 'transaction_id' => $transaction->getTransactionId()]);
        //    return redirect(route('initiate.payment'))->with('message', "Your payment is successfull.");
        return view('usershow::paytm_receipt', $data);
       } else if ($transaction->isFailed()) {
           Paytm::where('order_id', $order_id)->update(['status' => 0, 'transaction_id' => $transaction->getTransactionId()]);
           return redirect(route('initiate.payment'))->with('message', "Your payment is failed.");
           
       } else if ($transaction->isOpen()) {
           Paytm::where('order_id', $order_id)->update(['status' => 2, 'transaction_id' => $transaction->getTransactionId()]);
           return redirect(route('initiate.payment'))->with('message', "Your payment is processing.");
       }
       $transaction->getResponseMessage(); //Get Response Message If Available
       
       // $transaction->getOrderId(); // Get order id
   }
}