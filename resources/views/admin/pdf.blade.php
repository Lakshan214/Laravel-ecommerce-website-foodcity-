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
    <div class="row">
      <div class="col-md-12">
        <div class="card card-body printableArea">
          
            <h3><b>INVOICE</b> <span class="pull-right">#{{$order_Details->id}}</span></h3>
          <hr />
          <div class="row">
            <div class="col-md-12">
              <div class="pull-left">
                <address>
                  <h3>
                    <a href="{{url('/')}}"> &nbsp;<b class="text-danger">Order Details</b></a>
                  </h3>
                  <p class="text-muted ms-1">
                    {{$order_Details->Name}}  <br />
                    {{$order_Details->address}}<br />
                    {{$order_Details->phone}}<br />
                    {{$order_Details->email}}<br/>
                    
                  </p>
                 
                </address>
              
              </div>

              <div class="pull-right text-end">
                <address>
                
                  <p class="mt-4">
                    <b>Invoice Date :</b>
                    <i class="mdi mdi-calendar">{{$order_Details->created_at}}</i> 
                  </p>
                  
                </address>
              </div>
            
             
            <div class="col-md-12">
              <div class="table-responsive mt-5" style="clear: both">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">Product Name</th>
                   
                      <th >Quantity</th>
                      <th >Price</th>
                      <th >Customer Signechar </th>
                      <th>Dilivery Signechar</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                   
                    

                   
                        
                    
                    <tr>
                   
                      <td>{{$order_Details->Product_name}}</td>
                      <td>{{$order_Details->Quantity}}</td>
                      <td>{{$order_Details->price}}</td>
                      <td>____________</td>
                      <td>____________</td>
                      
                  
                      
                     
                      
                    </tr>
                    
                   
                   
               
                  
                  </tbody>
                 
                </table>

             

              </div>
            </div>
          
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
