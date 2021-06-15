<?php

namespace Modules\UserShow\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\UserShow\Entities\Userlogin;
use Modules\UserShow\Entities\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function Userlogin(Request $req){
       $user = Userlogin::where(['email'=>$req->email])->first();    
        if(!$user || Hash::check($req->password,$req->email)){
            return redirect('/Userloginshow');
        }
        else
        {
            $req->Session()->put('user',$user);
            return redirect('/');
        }
   }

   public function UserRegister(Request $req){
    //   return $req->input();
            $user = new Userlogin;
            $user->name = $req->name;    
            $user->email = $req->email;    
            $user->mobile_number = $req->mobilenumber;    
            $user->password = Hash::make($req->password);   
            $user->save();
            return redirect('/Userloginshow'); 
    
    }

 public function Dashborad(){
    $UserProduct =DB::table('sellerproduct')->orderBy('id', 'desc')->take(10)->get(); 
    $UserProductMobile =  DB::table('sellerproduct')->orderBy('id', 'desc')->take(4)->where('product_categery','Mobile')->get(); 
    return view('usershow::UserDashboard')->with(['UserProduct'=>$UserProduct,'UserProductMobile'=>$UserProductMobile]);
 }
    public function FetchAllProduct(Request $req){
        $UserProduct_categewr = $req->product_categery;
        $UserProduct =DB::table('sellerproduct')->orderBy('id', 'desc')->get();
        return view('usershow::UserAllProdctShow')->with(['UserProduct'=>$UserProduct]);
        }

    public function FetchmMbileData(){
        $UserProductMobile =  DB::table('sellerproduct')->select('*')->where('product_categery','Mobile')->get();  
        return view('usershow::AllMobileShow')->with(['UserProductMobile'=>$UserProductMobile]);
    }
    public function search(Request $request)
    {
        $data = DB::table('sellerproduct')->where('product_name','like','%'.$request->input('search').'%')->get() ;
        return view('usershow::UserSearch',['product'=>$data]);
     
    }

    public function addToCart(Request $req){
        if($req->session()->has('user')){
             $cart = new Cart;
             $cart->user_id = $req->session()->get('user')['id'];
             $cart->product_id = $req->product_id;
             $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/Userloginshow');
        }
     }
     
    static public function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    public function CartList(){
        $user_id = Session::get('user')['id'];
        $CartList =  DB::table('cart')
        ->join('sellerproduct','cart.product_id','sellerproduct.id')
        ->where('cart.user_id',$user_id)
        ->select('sellerproduct.*','cart.id as cart_id')
        ->get();
        return view('usershow::UserCartList')->with(['CartList'=>$CartList]);
    }

    public function RemoveCart($id){
        $todo = Cart::find($id);
        $todo->delete();
        return redirect()->back();       
        }
   
}