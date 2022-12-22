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
      .close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  padding: 12px 16px;
  transform: translate(0%, -50%);
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

             
          @if(session()->has('message'))
          <div class="alert alert-success alert-dismissable fade show">
              

              {{ session()->get('message') }}
              <button  data-dismiss="alert" aria-label="Close"><span class="close">&times;</span></button>

          </div>
          @endif  
          
           
            
          
           
            <div class="container-fluid">
                <div class="card">
                  <div class="card-body wizard-content">
                    <h4 class="card-title">ADD PRODUCT</h4>
                    <h6 class="card-subtitle"></h6>
                      <div>

                    <form action="{{url('/add_product')}}"method="POST" enctype="multipart/form-data"> 
                        
                        @csrf
                        <section>
                          <label for="userName">Product Name:</label>
                          <input
                            name="pname"
                            type="text"
                            class="required form-control"
                            required=""
                          />
                          <label for="password">Product image:</label>
                          <input
                            name="image"
                            type="file"
                            class="required form-control"
                            required=""
                          />
                          <label for="confirm">Product Catagory:</label>
                          <select required="" name="Pcatagory">
                            @foreach ($catagory as $catagory )
                              <option value=" {{$catagory->CatagoryName}}">
                                   {{$catagory->CatagoryName}}
                              </option>  
                            @endforeach  
                          </select> <br>
                          
                          <label for="surname">Product Quantity: </label>
                          <input
                           
                            name="PQuntty"
                            type="number"
                            class="required form-control"
                            required=""
                          />
                          <label for="email">Product Price:</label>
                          <input
                            name="Pprice"
                            type="number"
                            class="required email form-control"
                            required=""
                          />
                          <label for="address">Product description:</label>
                          <input
                            name="Pdescripton"
                            type="text"
                            class="form-control"
                            required=""
                          />
                          
                        
                        </section>

                        <div class="border-top">
                            <div class="card-body">
                            <button type="submit" class="btn btn-success text-green" name="submit" >
                                Add Product
                             </button>
                           
                          </div>
                        </div>
                      </div>
                    </form>
                  
                  </div>
                </div>
                
              </div>
        </div>
      </div>     
      
     
      @include('admin.script')
      
    </div>
   
    
  </body>
</html>
