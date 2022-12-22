<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SmartWay- home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="home/img/favicon.png" rel="icon">
  <link href="home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="home/vendor/aos/aos.css" rel="stylesheet">
  <link href="home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="home/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  #customers {
   font-family: Arial, Helvetica, sans-serif;
   border-collapse: collapse;
   width: 100%;
   margin-top: 7%
 }
 
 #customers td, #customers th {
   border: 1px solid #ddd;
   padding: 8px;
 }
 
 #customers tr:nth-child(even){background-color: #f2f2f2;}
 
 #customers tr:hover {background-color: #ddd;}
 
 #customers th {
   padding-top: 12px;
   padding-bottom: 12px;
   text-align: left;
   background-color: lightcoral;
   color: white;

  

  }
  #customers img{
    width: 50px;
    height: 50px;
 }
 .total{

  text-align: center;
  padding: 20px;
  font-size: 25px;
  color: red;
 }
 </style>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      
        <h1>Smart<span>Way</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><form class="example" action="/action_page.php">
              
          </form></li>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('show-cart')}}">cart </a></li>
          <a class="btn-book-a-table" href="{{url('viewAllProduct')}}">Product</a>
          
          @if (Route::has('login'))

          @auth
          <li><x-app-layout>
         </x-app-layout></li>

          @else
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Sign in</a></li>

         @endauth
         @endif
          
          
        </ul>
      </nav><!-- .navbar -->

      

    </div>
</header>
  <!-- End Header -->
 
  
 <table id="customers">
  <tr>
    <th>Product Name</title></th>
    <th>Product Quantity</th>
    <th>Price</th>
    <th>Image</th>
    <th>Action</th>
    
  </tr>
  <?php $total=0;?>
  @foreach ($cart as $carts)
      
 
  <tr>
    <td>{{($carts->Product_name)}}</td>
    <td>{{($carts->Quantity)}}</td>
    <td>{{($carts->price)}}</td>
    <td><img class="img" src="/product/{{$carts->image}}" ></td>
    
    <td><a onclick="return confirm('Ara you Sure remove cart..!!')"class="btn btn-danger" href="{{url('remove-cart',$carts->id)}}">Remove</a></td>
   
</tr> 
<?php $total=$total+$carts->price?>
  @endforeach
  
 </table> 
   <div class="total">
     <h1>Total Price: {{$total}}.00</h1><br>
     <a class="btn btn-success" href="{{url('order-save')}}">Pay to Card</a>
   </div>         
        

  



  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>