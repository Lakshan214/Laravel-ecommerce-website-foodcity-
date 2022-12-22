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
<style>.body{
    font-family: Arial;
  font-size: 17px;
  
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: rgb(65, 61, 61);
  padding: 12px;
  margin: 10px 0;
  border: 2px;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid rgb(26, 20, 20);
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.div{
   padding: 30px;

}
</style>   
  
</head>
<body>

  @include('sweetalert::alert')

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
<div class="container py-5">
  <!-- For demo purpose -->
  <div class="row mb-4">
      <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-6">Bootstrap Payment Forms</h1>
      </div>
  </div> <!-- End -->
  <div class="row">
      <div class="col-lg-6 mx-auto">
          <div class="card ">
              <div class="card-header">
                  <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                      <!-- Credit card form tabs -->
                      
                  </div> <!-- End -->
                  <!-- Credit card form content -->
                  <div class="tab-content">
                      <!-- credit card info-->
                      <div id="credit-card" class="tab-pane fade show active pt-3">
                          <form  action="{{url('Pyment')}}"method="GET">
                              @csrf
                            <div class="form-group"> <label for="username">
                                      <h6>Card Owner</h6>
                                  </label> <input   type="text" onfocus="this.value=''" name="username" placeholder="Card Owner Name" required class="form-control ">  </div>
                              <div class="form-group"> <label for="cardNumber">
                                      <h6>Card number</h6>
                                  </label>
                                  <div class="input-group"> <input type="number"  onfocus="this.value=''"name="cardNumber" placeholder="Valid card number" min="1000000000000000" max="9999999999999999" class="form-control " required>
                                      <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-8">
                                      <div class="form-group"> <label><span class="hidden-xs">
                                                  <h6>Expiration Date</h6>
                                              </span></label>
                                          <div class="input-group"> <input type="number"  onfocus="this.value=''" placeholder="MM" name="mm" min="1" max="12" class="form-control" required> <input type="number"  onfocus="this.value=''"placeholder="YY" min="23" max="31" name="year" class="form-control" required> </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                              <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                          </label> <input type="number"  onfocus="this.value=''" required class="form-control"min="100" max="999"name="ccv" > </div>
                                  </div>
                              </div>
                              
                               
                                <div class="card-footer">  
                                  
                                    <button type="submit"   class="subscribe btn btn-primary btn-block shadow-sm" name="submit">
                                      Confirm Payment 
                                    </button> 
                                    
                                    
                                </form>
                      </div>
                  </div> <!-- End -->
                  
                 
              </div>
          </div>
      </div>
  </div>




</body>
</html>
  