@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Contact Us</h1>
                <div class="row">
                 <div class="col-md-8 offset-md-2">
                     <h4></h4>
                 </div>
                </div>
                

            </div>
        </div>
    </div>
</div>
<div class="container mb-5">

    <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-5">
            <h5 class="mt-5" style="color: #3a8bcd">If you have any sugestions, or you want to contact us,
                 please fill out this contact form to send message.</h5>
		<br><br>



                <form action="" method="POST">
                  @csrf
		  <input type="text" name="name" class="form-control forms" 
                  @if(Auth::user()) 
		    value={{ Auth::user()->name }}
                  @else
                    placeholder="Your name"
		  @endif 
		  ><br>

		  <input type="email" name="email" class="form-control forms"
                  @if(Auth::user()) 
		    value={{ Auth::user()->email }}
		  @else
		    placeholder="Your email"
                  @endif		    
                  ><br>
                  <textarea name="message" cols="30" rows="10" class="form-control forms" placeholder="Your message"></textarea><br>
                  <button type="submit" class="btn btn-primary form-control form-button">Send message</button>

                </form>
        </div>
    </div>



</div>
    
@endsection