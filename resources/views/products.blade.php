@extends('layouts.main')

@section('title')
    Products
@endsection

@section('content')
     <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Featured Items</h1>
              </div>
            </div>
            <div class="col-md-8 col-sm-12">
              <div id="filters" class="button-group">
                <a href="{{ route('products') }}" class="btn btn-primary" data-filter="*">All Products</a>
                <a href="{{ route('newestProducts') }}" class="btn btn-primary" data-filter=".new">Newest</a>
                <a href="{{ route('lowestPrice') }}" class="btn btn-primary" data-filter=".low">Low Price</a>
                <a href="{{ route('highestPrice') }}" class="btn btn-primary" data-filter=".high">Hight Price</a>
                <a href="{{ route('menClothing') }}" class="btn btn-primary" data-filter=".men">Man</a>
                <a href="{{ route('womenClothing') }}" class="btn btn-primary" data-filter=".women">Women</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="featured container no-gutter">
  
          <div class="row posts">
              
            @foreach ($products as $product)
            <div id="{{ $product->id }}" class="item new col-md-3">
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
            </div>
            @endforeach
             

          </div>
      </div>

      <div class="text-center mt-5">
        {!! $products->links() !!}
      </div>
  


      {{-- <div class="page-navigation">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul>
                <li class="current-page"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- Featred Page Ends Here -->
  
@endsection