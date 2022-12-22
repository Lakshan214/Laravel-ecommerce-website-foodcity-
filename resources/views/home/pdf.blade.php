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
          
            <h3><b>INVOICE</b> <span class="pull-right">#26</span></h3>
          <hr />
          <div class="row">
            <div class="col-md-12">
              <div class="pull-left">
                <address>
                  <h3>
                    <a href="{{url('/')}}"> &nbsp;<b class="text-danger">Smart Way</b></a>
                  </h3>
                  <p class="text-muted ms-1">
                    228,Senanayake Mawatha,  <br />
                    Anuradhapura, <br />
                    025 4567 877 <br />
                    SmartWay@gmail.com<br/>
                    
                    
                  </p>
                 
                </address>

                <div class="pull-right text-end">
                  <address>
                  
                    <p class="mt-4">
                      <b>Invoice Date :</b>
                      <i class="mdi mdi-calendar">{{$Date}}</i> 
                    </p>
                    
                  </address>
                </div>
              
              </div>
            
             
            <div class="col-md-12">
              <div class="table-responsive mt-5" style="clear: both">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Address</th>
                      <th >Product Name</th>
                      <th >Quantity</th>
                      <th >Price</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                   
                    
                  <?php $total=0;?>
                  @foreach ($order as $item)
                      
                 
                        
                    
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->Name}}</td>
                      <td>{{$item->address}}</td>
                      <td>{{$item->Product_name}}</td>
                      <td>{{$item->Quantity}}</td>
                      <td>{{$item->price}}</td>
                    
                      
                      
                    </tr>
                    
                   
                    <?php $total=$total+$item->price?>
                    @endforeach
                  
                  </tbody>
                 
                </table>
              </div>
            </div>
            <div class="col-md-12">
              <div class="pull-right mt-4 text-end">
                <p>Sub - Total amount:{{$total}} .00</p>
               
                <hr />
                <h3><b>Total :</b> Rs.{{$total}}.00</h3>
              </div>
              <div class="clearfix"></div>
              <hr />
              
          
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
    

    
  
     
      @include('admin.script')
      
    </div>
   
    
  </body>
</html>
