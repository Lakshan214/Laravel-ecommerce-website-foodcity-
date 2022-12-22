<div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        
  <div class="tab-pane fade active show" id="menu-starters">

    @if (session()->has('message'))
    <div class="alert alert-success">
    
     {{(session()->get('message'))}}
     <button type="button"class="close" data-dismiss="alert" aria-hidden="true">x</button>
   
    </div>
        
    @endif 
  
    <div class="tab-header text-center">
   <form action="{{url('product-search')}}"method="GET">
    @csrf
          <input style="width:500px;" type="text" name="search" placeholder="Search for somthing">
          <input type="submit" value="search" class="button button1">
            
   </form>
    </div>
    

    <div class="row gy-5">
      

      @foreach ($product as $products )
      
      <div class="col-lg-4 menu-item">
        <a href="/product/{{$products->image}}" class="glightbox"><img src="product/{{$products->image}}"  class="menu-img img-fluid" alt=""></a>
        <h4>{{$products->Name}}</h4>
        <p class="ingredients">
          {{$products->Descrtiptton}}
        </p>
        <p class="price">
          Rs.{{$products->Price}}.00
        </p>
        <form  action="{{url('add-Cart',$products->id)}}"method="POST">
          @csrf
          <p><input type="number"  name="quntity"value="1" min="1" style="width: 100px"></p>
          <button type="submit"class="button button1">Add to Cart</button>
          <button type="submit"class="button button2">Buy Now</button>
        </form>
      </div><!--Item -->
      @endforeach

   </div><!-- Menu Item -->
    

</div>