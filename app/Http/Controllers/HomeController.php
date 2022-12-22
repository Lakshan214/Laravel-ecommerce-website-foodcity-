<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
use App\Models\Order;
use App\Http\Controllers\comment;
use App\Models\payment;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Contracts\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use Illuminate\Support\Facades\DB;
 





class HomeController extends Controller
{
  public function index()
  {  
    //$Catagory1=Catagory::all();
    $product=product::all();
    return view('home.userpage',compact('product'));
  }



    public function redirect()
    {
      $userType=Auth::user()->userType;
       
       if($userType=='1')
       {   
           $total_product=product::all()->count();
           $total_ordert=Order::all()->count();
           $total_user=User::all()->count();
           $Order=Order::all();
          

          
           $total_delivered=Order::where('Dilivery_stutes','=','Delivered')->get()->count();
           
           $total_processing=Order::where('Dilivery_stutes','=','prosseing')->get()->count();
           return view('admin.home',compact('total_product','total_ordert','total_user','total_delivered','total_processing'));
       }
       else
       {   
          
           $product=product::all();
           return view('home.userpage',compact('product'));
       }
    } 

    /*--------------------------------Cart--------------------------------------------------*/


    public function add_Cart(Request $request ,$id){

       if(Auth::id()){
       $user=Auth::user();
       $userid=$user->id;

       $product=product::find($id);

       $product_exist_id=cart::where('product_id','=',$id)->where('use_id','=',$userid)->get('id')->first();

       if($product_exist_id!= null){

           $cart=cart::find($product_exist_id)->first();
           $Quantity=$cart->Quantity;

           $cart->Quantity=$Quantity;
           $cart->Quantity=$Quantity+ $request->quntity;

        
           $cart->price=$product->Price * $cart->Quantity;

           $cart->save();

           Alert::success('product Added Successfuly','We have addeed product to the cart ');
           return redirect()->back();

       }else
       {

        $cart=new cart;

        $cart->Name=$user->name;
        $cart->email=$user->email;
        $cart->phone=$user->phone;
        $cart->address=$user->address;
        $cart->use_id=$user->id;
        $cart->Product_name=$product->Name;
        $cart->price=$product->Price;
        $cart->image=$product->image;
        $cart->product_id=$product->id;
        $cart->Quantity=$request->quntity;
        $cart->price=$product->Price*$request->quntity;
         
      $cart->save();
      Alert::success('product Added Successfuly','We have addeed product to the cart ');
      return redirect()->back();

       }     
       
      }

      else{

        return redirect('login');
      } 

    }
    public function  show_cart(){

  
      if(Auth::id()){
        $id=Auth::user()->id;
    
        $cart=cart::where('use_id','=',$id)->get();
        
        return view('home.showCart',compact('cart'));
       }
       else{
    
         return redirect('login');
       }

      }
      
    public function show_order(){
    if (Auth::id()){
      
      $user=Auth::user();
      $userid=$user->id;
      
     
      $Order=Order::where('User_id','=',$userid)->get();
      
      return View('home.order',compact('Order') );

    }

    else
    {

      return redirect('login');
    }
    }

     
     

  public function remove_cart($id)
{
    $cart=cart::find($id);

    $cart->delete();
   return redirect()->back();

  
}

public function orderSave(){

  $user=Auth::user();
  $userid=$user->id;

  $data=cart::where('use_id','=',$userid)->get();

  foreach($data as $data){
    $Order=new Order;

      $Order->Name=$data->Name;
      $Order->email=$data->email;
      $Order->phone=$data->phone;
      $Order->address=$data->address;
      $Order->user_id=$data->use_id;
     
       $Order->Product_name=$data->Product_name;
       $Order->price=$data->price;
       $Order->image=$data->image;
       $Order->Quantity=$data->Quantity;
       $Order->product_id=$data->product_id;

       $Order->Dilivery_stutes="prosseing";

       $Order->save();
       
      


  }
  return View('home.pyment');

}

public function Product_search(Request $request){



$serach_text=$request->search;

$product=product::where('Name','LIKE',"%$serach_text%")->orwhere('Catagory','LIKE',"%$serach_text%")->get();

return view('home.allproduct',compact('product'));


}     
  

   

public function viewAllProduct(){

   $product=product::all();
   return View('home.allproduct',compact('product'));
 }


 
 public function Dilivery($id){

  $Order=Order::find($id);

  

  $Order->delete();

Alert::success('Thank for your Order !!','keeping in touch with us  ');
  return redirect()->back();
  
     

 }   
  
   
 
public function printhome_pdf(){
  
    $item=cart::get();
     $data=[

        'order'=>$item,
        'Date'=>date('m/d/y'),
    ];
 
    $pdf=PDF::class::loadView('home.pdf', $data);

    cart::truncate();
    return $pdf->download('invoice.pdf');

  
  
 

}

public function Late_Dilivery($id){

  $Order=Order::find($id);

  
 $Order->Pyement_stutes='Late Dilivery';
 $Order->Dilivery_stutes='Late Dilivery';
 
 $Order->save();

 Alert::success('Sorry for the Delay!!!','We will compleat your Dilivery as soon as Posbale ');
  return redirect()->back();
  
     

 } 

 public function Pyment(Request $request){

  $product=new payment();
  $product->Name=$request->username;
  $product->cardno=$request->cardNumber;
  $product->Exyear=$request->year;
  $product->month=$request->mm;
  $product->ccv=$request->ccv;

  $product->save();

  Alert::success('Payment Successfuly','please check your order and download your bill ');
  return redirect('/');
 }


 
 

 }

