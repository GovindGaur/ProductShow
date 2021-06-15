<?php

namespace Modules\SellerShow\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SellerShow\Entities\SellerLogin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\SellerShow\Entities\SellerProduct;
// use Illuminate\Support\Facades\View;

class SellerController extends Controller
{
   public function test(){
   
    return view('sellershow::Sellerlogin');
   
    }
   public function Sellerlogin(Request $req){
      $user= Sellerlogin::where(['email' => $req->email])->first();
      
      if (!$user || !Hash::check($req->password, $user->password)) {
        return redirect('/Sellerlogin');
    } else {
            $req->session()->put('seller', $user);
        return redirect('/dashboard');
    }
   }
  
   public function sellerregister(Request $req){
    //   return $req->input();
            $user = new Sellerlogin;
            $user->name = $req->name;    
            $user->email = $req->email;    
            $user->mobile_number = $req->mobilenumber;    
            $user->password = Hash::make($req->password);   
            $user->save();
            return redirect('/Sellerlogin'); 
    
    }

   public function seller_header(){
            return view('sellershow::seller_header');
   }

   public function product_show(){
            return view('sellershow::seller_add_product');
   }
  
   public function product_upload(Request $req){
            if(Session()->has('seller')){
                // Session::get('seller')['id'];
                $req->validate([
                    'productName' => 'required',
                ]);
                if ($req->hasFile('file')) {
        
                $req->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
        
                // Save the file locally in the storage/public/ folder under a new folder named /product
                $req->file->store('public/SellerProductImages');
                // Store the record, using the new file hashname which will be it's new filename identity.
                $SellerProduct = new SellerProduct;
            
                $SellerProduct->seller_id=$req->Session()->get('seller')['id'];
                $SellerProduct->product_name = $req->productName;    
                $SellerProduct->product_price = $req->productPrice;    
                $SellerProduct->product_desc = $req->productDesc; 
                $SellerProduct->product_categery = $req->productCategery;   
                $SellerProduct->product_sub_categery = $req->productSubCategery; 
                $SellerProduct->product_image = $req->file->hashName();
                // $req->session()->put('SellerProduct', $SellerProduct);
                $SellerProduct->save(); // Finally, save the record.
            }
            }
        else
        {
            return redirect('/seller_header');
        }
    //       $req->validate([
    //          'productName' => 'required',
    //      ]);

    //      if ($req->hasFile('file')) {

    //       $req->validate([
    //           'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
    //       ]);

    //       // Save the file locally in the storage/public/ folder under a new folder named /product
    //       $req->file->store('public/images');
    //       // Store the record, using the new file hashname which will be it's new filename identity.
    //       $SellerProduct = new SellerProduct;
    
    //       $SellerProduct->seller_id=$req->Session()->get('seller')['id'];
    //       $SellerProduct->product_name = $req->productName;    
    //       $SellerProduct->product_price = $req->productPrice;    
    //       $SellerProduct->product_desc = $req->productDesc; 
    //       $SellerProduct->product_categery = $req->productCategery;   
    //       $SellerProduct->product_image = $req->file->hashName();
    //         // dd($SellerProduct);
    //       $SellerProduct->save(); // Finally, save the record.
    //   }
           return redirect('/getProduct');   
   }
   
   public function Selleredit($id){
            // $id = $_GET['id'];
            $Seller_data = SellerProduct::find($id);
            // dd($Seller_data);
            return view('sellershow::seller_edit')->with(['Seller_data'=>$Seller_data]);
  
   }
   public function SellerUpdate(Request $req){ 
            $req->validate([
                'file' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            if ($req->hasFile('file'))   
            $req->file->store('public/SellerProductImages'); 
            $SellerProduct = SellerProduct::find($req->id );
            $SellerProduct->product_name = $req->productName;    
            $SellerProduct->product_price = $req->productPrice;    
            $SellerProduct->product_desc = $req->product_desc; 
            $SellerProduct->product_categery = $req->productCategery;   
            $SellerProduct->product_sub_categery = $req->productSubCategery; 
            $SellerProduct->product_image = $req->file->hashName();
            $SellerProduct->update();
            return redirect('/getProduct');
            
        
   } 
   public function getProduct(){
            $Sellerid = Session()->get('seller')['id'];
            // dd($Sellerid);seller_id
            $SellerProduct  = DB::table('sellerproduct')->select('*')->where('seller_id',$Sellerid)->get();
            return view('sellershow::seller_product_list')->with(['SellerProduct'=>$SellerProduct]);
  }
  
    public function dashboard(){
            return view('sellershow::dashboard');
 
    }
    public function Sellerdelete($id){
            // $id = $_GET['id']; 
            $todo = SellerProduct::find($id);
            $todo->delete();
            return redirect()->back();
     }
}