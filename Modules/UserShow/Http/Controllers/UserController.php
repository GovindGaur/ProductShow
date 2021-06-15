<?php

namespace Modules\UserShow\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\UserShow\Entities\Userlogin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function Userlogin(Request $req){
      $user = Userlogin::where(['email'=>$req->email])->first();    
    if(!$user || Hash::check($req->password,$req->email)){
        return redirect('/');
    }
    else
    {
        $req->Session()->put('user',$user);
        return redirect('/UserHeader');
    }
   }
    public function FetchAllProduct(Request $req){
        $UserProduct_categewr = $req->product_categery;
        // dd($UserProduct_categewr);
        //     $Sellerid = Session()->get('User')['id'];product_categery
    // $UserProduct = DB::table('sellerproduct')->select('*')->get();
    $UserProduct =DB::table('sellerproduct')->orderBy('id', 'desc')->take(10)->get();
    return view('usershow::UserAllProdctShow')->with(['UserProduct'=>$UserProduct]);
        // return view('usershow::UserAllProdctShow');
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
}