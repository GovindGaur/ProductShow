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
        $user_id = Session::get('user')['id'];
        // dd($user_id);
        $UserProduct = DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.user_id as CartUser_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->take(8)->get(); 

        $UserProductMobile =  DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->take(4)->where('product_categery','Mobile')->get(); 
        
        $UserProductElectricity =  DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->take(4)->where('product_categery','Electricity')->get(); 
        // dd($UserProductElectricity);
        $UserProductElectronics =  DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->take(4)->where('product_categery','Electronics')->get(); 
        // dd($UserProductElectronics);
        return view('usershow::UserDashboard')->with(['UserProduct'=>$UserProduct,'UserProductMobile'=>$UserProductMobile,'UserProductElectricity'=>$UserProductElectricity,'UserProductElectronics'=>$UserProductElectronics]);
        // 
    }
    public function FetchAllProduct(Request $req){
        $UserProduct = DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.user_id as CartUser_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->get(); 
        return view('usershow::UserAllProdctShow')->with(['UserProduct'=>$UserProduct]);
        }

    public function FetchmMbileData(){
        // $UserProductMobile =  DB::table('sellerproduct')->select('*')->where('product_categery','Mobile')->get();  
        $UserProductMobile =  DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->take(4)->where('product_categery','Mobile')->get(); 
        return view('usershow::AllMobileShow')->with(['UserProductMobile'=>$UserProductMobile]);
    }

    public function FetchElectronicsData(){
        // $UserProductElectronics =  DB::table('sellerproduct')->select('*')->where('product_categery','Electronics')->get();  
        $UserProductElectronics =  DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->where('product_categery','Electronics')->get(); 
        return view('usershow::AllElectronicsShow')->with(['UserProductElectronics'=>$UserProductElectronics]);
    }

    public function FetchElectricityData(){
        $UserProductElectricity =  DB::table('sellerproduct')
        ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
        ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
        // ->where('user_id', $user_id)
        ->orderBy('sellerproduct.id', 'desc')->where('product_categery','Electricity')->get(); 
        return view('usershow::AllElectricity')->with(['UserProductElectricity'=>$UserProductElectricity]);
    }

    public function search(Request $request)
    {
        if(empty($request->input('search')))
        {
           return view('usershow::404page');
            // echo "data not found";
        }else
        {
            $data =  DB::table('sellerproduct')
            ->leftJoin('cart','sellerproduct.id', 'cart.Product_id')
            ->select('sellerproduct.*','cart.id as cart_id','cart.Product_id as Cart_Product_id')
            ->where('product_name','like','%'.$request->input('search').'%')->get();
            // ->->where('product_categery','Electricity')->get(); 
            
            // $data = DB::table('sellerproduct')->where('product_name','like','%'.$request->input('search').'%')->get() ;

            return view('usershow::UserSearch',['product'=>$data]);
        }
       
     
    }

    public function addToCart(Request $req){
        if($req->session()->has('user')){
             $cart = new Cart;
             $cart->user_id = $req->session()->get('user')['id'];
             $cart->product_id = $req->product_id;
             $cart->save();
             return json_encode($cart);
            //  return response()->json($cart->toArray());
            //  return json_encode(array('statusCode'=>200));
            // return redirect('/');
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
        return redirect('/');       
        }

        public function displayCart(Request $req){
            $product_id =  $req->product_id;;
            // $product_id = Session::get('user')['id'];//    dd($product_id);
            $CartList =  DB::table('sellerproduct')
            ->join('cart','sellerproduct.id','cart.Product_id')
            ->where('cart.product_id',$product_id)
            ->select('sellerproduct.*','cart.id as cart_id')
            ->get();
            dd($CartList);
        }
   
}