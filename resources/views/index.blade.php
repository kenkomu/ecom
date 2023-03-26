@extends('layouts.main')

@section('title')

  Fashion Shop
    
@endsection

@section('content')
     <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="caption">
                <h2>High Quality</h2>
                <div class="line-dec mx-auto"></div>
                <p> Best Prices - Outstanding brands</p>
                <div class="main-button">
                  <a href="{{ route('products') }}">Shop Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner Ends Here -->
  
      <!-- Featured Starts Here -->
      <div class="featured-items">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Featured Items</h1>
              </div>
            </div>
            <div class="row col-md-12">

                @foreach ($products as $product)
                <div class="col-md-3 mt-3">

                  <a href="single-product.html">
                    <div class="featured-item text-center">
                      <img  src="{{asset('/images/'.$product->image) }}">
                      <h4>{{ $product->name }}</h4>
                      @if ($product->sale_price)
                        <h5>{{ $product->sale_price }} $</h5>
                        <h6 style="text-decoration: line-through;">{{ $product->price }} $</h6>                          
                      @else
                        <h6>{{ $product->price }} $</h6>                         
                      @endif
                      <form action="{{ route('addToCart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                        <input type="submit" name="addToCart" class=" mt-3 btn btn-primary" value="Add to cart" >
                      </form>
                    </div>
                  </a> 
                </div>

                @endforeach

            </div>
          </div>
        </div>
      </div>
      <!-- Featred Ends Here -->
  
  
      <!-- Features Starts Here -->
      <div class="features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Outstanding Brands</h1>
              </div>
            </div>
            <div class="col-md-12">
              <div class="main-content">
                <div class="container">
      
                     <img style="width: 200px; height: 100px" class="mx-3 my-1" 
                     src="{{ asset('images/brand1.jpeg')  }}"/>
                  
                     <img style="width: 200px; height: 100px" class="mx-3 my-1" 
                     src="{{ asset('images/brand2.jpeg')  }}"/>
  
                     <img style="width: 200px; height: 100px" class="mx-3 my-1" 
                     src="{{ asset('images/brand3.jpeg')  }}"/>
  
                     <img style="width: 200px; height: 100px" class="mx-3 my-1" 
                     src="{{ asset('images/brand4.jpeg')  }}"/>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Features Form Ends Here -->
  
  
  
           <!-- Women Starts Here -->
      <div class="featured-items">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Women Items</h1>
              </div>
            </div>
            <div class="row col-md-12">
               
              @foreach ($women_products as $product)
              <div class="col-md-3 mt-3">

                <a href="single-product.html">
                  <div class="featured-item text-center">
                    <img  src="{{asset('/images/'.$product->image) }}">
                    <h4>{{ $product->name }}</h4>
                    @if ($product->sale_price)
                      <h5>{{ $product->sale_price }} $</h5>
                      <h6 style="text-decoration: line-through;">{{ $product->price }} $</h6>                          
                    @else
                      <h6>{{ $product->price }} $</h6>                         
                    @endif
                    <form action="{{ route('addToCart') }}" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->name }}">
                      <input type="hidden" name="image" value="{{ $product->image }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                      <input type="hidden" name="quantity" value="1">
                      <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                      <input type="submit" name="addToCart" class=" mt-3 btn btn-primary" value="Add to cart" >
                    </form>
                  </div>
                </a> 
              </div>

              @endforeach

            </div>
          </div>
  
          <div class="text-center mt-4">
            <a href="" class="btn btn-primary">More</a>
          </div>
  
        </div>
      </div>
      <!-- Women Ends Here -->
    
  
  
      <!-- Features Starts Here -->
      <div class="features middle-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-content">
                <div class="container">
      
                     <div class="container middle-banner-text">
                        <h4>MID SEASON'S SALE</h4>
                        <h1>Autumn Collection <br> UP to 30% OFF</h1>
                        <button class="text-uppercase btn btn-primary">shop now</button>
                      </div>
                             
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Features Form Ends Here -->

      <!-- Men Starts Here -->
          <div class="featured-items">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Men Items</h1>
                  </div>
                </div>
                <div class="row col-md-12">
                    
                  @foreach ($men_products as $product)
                  <div class="col-md-3 mt-3">
    
                    <a href="single-product.html">
                      <div class="featured-item text-center">
                        <img  src="{{asset('/images/'.$product->image) }}">
                        <h4>{{ $product->name }}</h4>
                        @if ($product->sale_price)
                          <h5>{{ $product->sale_price }} $</h5>
                          <h6 style="text-decoration: line-through;">{{ $product->price }} $</h6>                          
                        @else
                          <h6>{{ $product->price }} $</h6>                         
                        @endif
                        <form action="{{ route('addToCart') }}" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $product->id }}">
                          <input type="hidden" name="name" value="{{ $product->name }}">
                          <input type="hidden" name="image" value="{{ $product->image }}">
                          <input type="hidden" name="price" value="{{ $product->price }}">
                          <input type="hidden" name="quantity" value="1">
                          <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                          <input type="submit" name="addToCart" class=" mt-3 btn btn-primary" value="Add to cart" >
                        </form>
                      </div>
                    </a> 
                  </div>
    
                  @endforeach
    
                </div>
              </div>
      
              <div class="text-center mt-4">
                <a href="" class="btn btn-primary">More</a>
              </div>
      
            </div>
          </div>
       <!-- Men Ends Here -->
          
@endsection