@extends('layouts.main')

@section('title')
    Payment complete
@endsection

@section('content')

@extends('layouts.main')

@section('title')
    Payment
@endsection

@section('content')
    <section class="container mt-2 my-3 py-5"> 
             <div class="container mt-5 text-center">
                   <h4>Thank You</h4>

                    @if (Session::has('order_id') && Session::get('order_id') != null)
                        <h4 style="color: blue;" class="my-5">Order Id: {{ Session::get('order_id') }}</h4>
                        <p>Please keep order id in safe place for future reference.</p>

                    @endif
                      
             </div>
    </section>


@endsection
    
@endsection