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
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin:auto;
}

#customers td, #customers th {
  border: 2px solid rgb(11, 8, 24);
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: rgb(194, 199, 194);}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background: green;
  color: white;
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
            
           @if (session()->has('message'))
           <div class="alert alert-success">
           
            {{(session()->get('message'))}}
            <button type="button"class="close" data-dismiss="alert" aria-hidden="true">x</button>
          
           </div>
               
           @endif 

             
                <div class="card-body">
                  <h4 class="card-title">Add catagory</h4>
                  <div class="form-group row">
                    <label
                      for="fname"
                      class="col-sm-3 text-end control-label col-form-label"
                      >Catagory Name</label
                    >
                    <div class="col-sm-9">
                        
                <form class="form-horizontal" action="{{url('/add_catagory')}}"method="POST" enctype="multipart/form-data">

                      @csrf   
                      <input
                        type="text"class="form-control" name="CatName"
                        placeholder="catagory Name Here"
                      />
                    </div>
                  </div>
                 
                    <div class="border-top">
                    <div class="card-body">
                    <button type="submit" class="btn btn-success text-green" name="submit" >
                        Add Catagory
                     </button>
                    </div>
                    </div>
                </form> 
                </div>

                   
                </div>

                <table id="customers">
                    <tr>
                        <td>Catagory name</td>
                        <td>Action</td>
                    </tr> 

                    @foreach ($data as $data )
                        
                    
                    <tr>
                        <td>{{$data->CatagoryName}}</td>
                        <td>
                            <a onclick="return confirm('Ara you Sure..!!')" class="btn btn-danger"href="{{url('deletCat',$data->id)}}">Delete</a>
                        </td>
                    </tr>  
                    
                    @endforeach

               </table>
             
        </div>
   </div>            
     
      @include('admin.script')
      
    </div>
   
    
  </body>
</html>
