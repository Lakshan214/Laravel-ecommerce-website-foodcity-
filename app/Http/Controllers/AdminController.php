<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Order;
use App\Models\product;
use PDF;

/*----------------------catagory-------------------------------*/

class AdminController extends Controller
{
    public function catagory()
  {
      $data =Catagory::all();

      return view('admin.catagory',compact('data'));
  }

  public function add_catagory(Request $request)
  {
    $data=new catagory;
    $data->CatagoryName=$request->CatName;
    
    $data->save();
    return redirect()->back()->with ('message',' Added Sucessfully!!');
      
  }

  public function deletcat($id)
  {
      $data=Catagory::find($id);

      $data->delete();
     return redirect()->back();

    
  }


  /*----------------------End catagory-------------------------------*/

   /*----------------------Product-------------------------------*/

  public function view_product ()
{   
    $catagory=catagory::all();
    return view('admin.product',compact('catagory'));

}
  
public function add_product(Request $request)
{
  $product=new product();
  $product->Name=$request->pname;
  $product->Catagory=$request->Pcatagory;
  $product->quantity=$request->PQuntty;
  $product->Price=$request->Pprice;
  $product->Descrtiptton=$request->Pdescripton;

  $imagename=$request->image;
  $imagename=time().'.'.$request->image->extension();
  $request->image->move('product',$imagename);  
  $product->image=$imagename;
 
  
  $product->save();
  return redirect()->back()->with ('message',' Added Sucessfully!!');
    
}

 /*----------------------End Product-------------------------------*/


  /*----------------------Show Product-------------------------------*/
public function show_product ()
{   
    
  $product=product::all();
 
  return view('admin.show_product',compact('product'));

}


public function DeleteProduct($id)
{
    $data=product::find($id);

    $data->delete();
   return redirect()->back();

  
}

public function UpdateProduct($id){
  

      

  $product=product::find($id);
  $catagory=catagory::all();

  return view('admin.updataProduct',compact('product'),compact('catagory'));
}


public function Edit_product(Request $request,$id){

  $product=product::find($id);
  $product->Name=$request->pname;
  $product->Catagory=$request->Pcatagory;
  $product->quantity=$request->PQuntty;
  $product->Price=$request->Pprice;
  $product->Descrtiptton=$request->Pdescripton;

  $image=$request->image;

  if($image)
  {
  $image=time().'.'.$request->image->extension();
  $request->image->move('product',$image);  
  $product->image=$image;
 
  }
  
  
  $product->save();
  return redirect()->back();
  

}

  /*---------------------- END Show Product-------------------------------*/


    /*----------------------Order-------------------------------*/

public function order(){
  $order=order::all();
  return view('admin.order',compact('order'));
}

public function delivery($id){

  $order=order::find($id);
  
  $order->Dilivery_stutes='Delivered';

  $order->save();
  return redirect()->back();

}

public function search(Request $request){

  $searchText=$request->search;
  $order=order::where('name','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->orWhere('Product_name','LIKE',"%$searchText%")->get();

  return view('admin.order',compact('order'));


}




public function print_pdf($id){

 
  $order_Details = order::find($id);

  

  $pdf_file = PDF::class::loadView('admin.pdf', compact('order_Details'));
  return $pdf_file->download('invoice.pdf');
  

 

}


}
  /*----------------------End Oder-------------------------------*/