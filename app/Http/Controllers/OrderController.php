<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
    //    $request->validate([
    //        'name' => 'required | string |max:255',
    //        'email' => 'required | email',
    //        'phone' => 'required',
    //        'city' => 'required | string',
    //        'address' => 'required | string | max:255'
    //    ]); 

      if ($request->session()->has('cart')) {
          
           $name = $request->input('name');
           $email = $request->input('email');
           $phone = $request->input('phone');
           $city = $request->input('city');
           $address = $request->input('address');
           $date = date('Y-m-d');
           $status = 'not paid';
           $cost = $request->session()->get('total_price');

           $cart = $request->session()->get('cart');

           $order_id = Order::insertGetId([

               'name' => $name,
               'email' => $email,
               'phone' => $phone,
               'city' => $city,
               'address' => $address,
               'date' => $date,
               'status' => $status,
               'cost' => $cost

           ],'id');

           // This data will be stored in table 'order_items', we can have many products in
           // one order, so they will have same order_id in order_items table
           foreach ($cart as $id => $product) {
               
                   $product = $cart[$id];
                   $product_id = $product['id'];
                   $product_name = $product['name'];
                   $product_price = $product['price'];
                   $product_image = $product['image'];
                   $product_quantity = $product['quantity'];

                DB::table('order_items')->insert([

                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_image' => $product_image,
                    'product_quantity' => $product_quantity,
                    'order_date' =>  $date    

                ]);
           }

           // Store order id in session

           $request->session()->put('order_id', $order_id);

           return view('payment');

        }else{
            return redirect('/');
        }
       
       
    }

    public function payment()
    {
        return view('payment');
    }

    public function verifyPayment(Request $request, $transaction_id)
    {
        $request->session()->put('transaction_id', $transaction_id);

        return redirect('/complete_payment');
    }

    public function completePayment(Request $request)
    {
        // will display the thank you page

        if ($request->session()->has('order_id') && $request->session()->has('transaction_id')) {
            
            $order_id = $request->session()->get('order_id');
            $transaction_id = $request->session()->get('transaction_id');
            $order_status = 'paid';
            $payment_date = date('Y-m-d');

            // Change order status from 'not paid' to 'paid'.
            $affected = Order::where('id', $order_id)->update(['status' => $order_status]);

            // Store payment info in table payments
            DB::table('payments')
            ->insert(['order_id'=>$order_id, 'transaction_id'=>$transaction_id, 'date'=>$payment_date]);

          // Remove everything from session
          $request->session()->flush();

          return redirect('/thank_you')->with('order_id', $order_id);
          
        
        }else{
            return redirect('/');
        }
    }


    public function thankYou()
    {
        return view('thank_you');
    }
}
