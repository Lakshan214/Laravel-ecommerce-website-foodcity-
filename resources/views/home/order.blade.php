<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
   
    
   
    <!-- Custom CSS -->
    <link href="admin/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="admin/dist/css/style.min.css" rel="stylesheet" />
   
  </head>

  <body>
    @include('sweetalert::alert')

    <div class="row">
      <div class="col-md-12">
        <div class="card card-body printableArea">
          
          <h3></h3>
          <hr />
          <div class="row">
            <div class="col-md-12">
              <div class="pull-left">
                <address>
                  <h3>
                    <a href="{{url('/')}}"> &nbsp;<b class="text-danger">Smart Way</b></a>
                  </h3>
                  <p class="text-muted ms-1">
                   Hello !! if your oder ricived Within 4 hours plzz click on Dilivery Success if not click on Late Dilivery
                    
                  </p>
                 
                </address>
               
              </div>
            
             
            <div class="col-md-12">
              <div class="table-responsive mt-5" style="clear: both">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">Product Name</th>

                      <th >Img</th>
                      <th >Quantity</th>
                      <th >Price</th>
                      <th >Dilivery or Not</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                   
                    
                    <?php $total=0;?>
                    @foreach ($Order as $Order)
                        
                    
                    <tr>
                   
                      <td>{{$Order->Product_name}}</td>
                      <td><img height="70" width="70" src="/product/{{$Order->image}}"></td>
                      <td>{{$Order->Quantity}}</td>
                      <td>{{$Order->price}}</td>
                      <td>{{$Order->Dilivery_stutes}}</td>
                      <td>
                        @if ($Order->Dilivery_stutes=='prosseing' )  
                        
                           <p>  Dilivery Success</p>  
                         
                      @else
                      
                      <a href="{{url('Dilivery',$Order->id)}}" class="btn btn-success text-green"  >
                        Dilivery Success
                    </a>
                      @endif

                     
                    
                    </td>

                    <td>
                      @if ($Order->Dilivery_stutes=='prosseing' )  
                      
                         <p>  Late Dilivery</p>  
                       
                    @else
                    
                    <a href="{{url('Late-Dilivery',$Order->id)}}" class="btn btn-warning"  >
                      Late Dilivery
                  </a>
                    @endif

                   
                  
                  </td>
                      
                    </tr>
                    
                   
                    <?php $total=$total+$Order->price?>
                    @endforeach
                  
                  </tbody>
                 
                </table>
              </div>
            </div>
            <div class="col-md-12">
              <div class="pull-right mt-4 text-end">
                <p>Sub - Total amount: {{$total}}.00</p>
               
                <hr />
                <h3><b>Total :</b> Rs.{{$total}}.00</h3>
              </div>
              <div class="clearfix"></div>
              <hr />
              <div class="text-end">
                <a href="{{url('printhome-pdf')}}" class="btn btn-danger" type="submit">
                  download your bill
                </a>
              </div>
          
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
    

    
  
     
      @include('admin.script')
      
    </div>
   
    
  </body>
</html>
