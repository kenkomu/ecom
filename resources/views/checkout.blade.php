@extends('layouts.main')

@section('content')


    <!-- Checkout -->
    <section class="my-2 py-3 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Check Out</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" action="{{ route('placeOrder') }}" method="POST">
                @csrf
               
                <div class="form-group checkout-small-element">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Your name" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Your email address" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="phone">Your Phone</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Your phone number" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="city">Your City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="Your city" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="adress">Your Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Your address" required>
                </div>


                @if(Session::has('total_price'))
                 @if(Session::get('total_price') != null)

                    <div class="form-group checkout-btn-container">
                        <p>Total amount: {{Session::get('total_price')}} $</p>
                        <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Submit">
                    </div>
                 @endif
                @endif
            </form>
        </div>
    </section>


 




@endsection