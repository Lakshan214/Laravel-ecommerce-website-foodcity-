<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>SmartWay Admin </title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="admin/assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="admin/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="admin/dist/css/style.min.css" rel="stylesheet" />
   

    <style>
       #product {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#product td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#product tr:nth-child(even){background-color: #f2f2f2;}

#product tr:hover {background-color: #ddd;}

#product th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white 
}
  #product img{
    width: 50px;
    height: 50px;

  }
           
 </style> 
   
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- Topbar header -  -->
      @include('admin.header')

      <!-- End Topbar header -->
     
      <!-- Left Sidebar   -->
      @include('admin.sidebar')
      <!-- End Left Sidebar   -->
      
      <!-- body sction   -->
      

      <div class="page-wrapper">
        <div class="page-breadcrumb">

            <table id="product">
                <tr>
                    <th>Product Name</th>
                    <th>Product image</th>
                    <th>Product Catagory</th>
                    <th>Product quantity</th>
                    <th>Product Price</th>
                    <th>Product Descrtiptton</th>
                    <th>Delete</th>
                    <th>Edite</th>
                </tr>  
                 
             @foreach($product as $product)
                <tr>
                  <td>{{$product->Name}}</td>
                  <td>
                    <img  src="/product/{{$product->image}}">
                  </td>
                  <td>{{$product->Catagory}}</td>
                  <td>{{$product->quantity}}</td>
                  <td>{{$product->Price}}</td>
                  <td>{{$product->Descrtiptton}}</td>
                  <td><a onclick="return confirm('Ara you Sure..!!')"class="btn btn-danger" href="{{url('DeleteProduct',$product->id)}}">Delete</a></td>
                  <td><a class="btn btn-success"href="{{url('UpdateProduct',$product->id)}}">Edit</a></td>
              </tr> 
               @endforeach 
            </table>   

        </div>
      </div>     
      
    
      
    </div>
    @include('admin.script')
    
  </body>
</html>
