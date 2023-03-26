@extends('layouts.main')

@section('title')
    Cart
@endsection

@section('content')
    

<section class="cart container mt-2 my-3 py-5">

    

    <div class="container mt-2">
        <h4>Your Cart</h4>
    </div>

    <table class="pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>


        @if (Session::has('cart'))
                                 
            @foreach(Session::get('cart') as $id=>$product)
                
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="{{ asset('images/'.$product['image']) }}">
                            <div>
                                <p>{{ $product['name'] }}</p>
                                <small><span>Price: {{ $product['price'] }}</span></small>
                                <br>
                                <form method="POST" action="{{ route('removeFromCart', ['id'=> $product['id']]) }}">
                                    @csrf 
                                    <input type="submit" name="remove_btn" class="remove-btn" value="Remove">
                                </form>
                            </div>
                        </div>
                    </td>

                    <td>
                        <form action="{{ route('editProductQuantity', ['id'=>$product['id']]) }}" method="POST">
                            @csrf
                            <input type="number" name="quantity" value="{{ $product['quantity'] }}">
                            <input type="submit" name="edit_product_quantity_btn" value="edit" class="edit-btn">
                        </form>
                    </td>
                    <td>
                        <span class="product-price">{{ $product['quantity'] * $product['price']}} $</span>
                        
                    </td>
                </tr>


            @endforeach 


        @endif
       

    </table>


    <div class="cart-total">
        <table>
            <tr>
                @if (Session::has('total_price'))
                    <td>Total</td>
                    <td>{{ Session::get('total_price') }} $</td>  
                @endif                
            </tr>
        </table>
    </div>
    
    
    <div class="checkout-container">
        @if (Session::has('total_price'))
          @if (Session::get('total_price') != null)

            <form action="{{ route('checkout') }}" method="GET"> 
                <input type="submit"  name="checkout" class="btn checkout-btn" value="Checkout">
            </form>	

          @endif


        @endif
      
    
    </div>






</section>



@endsection