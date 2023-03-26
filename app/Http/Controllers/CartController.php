<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
       return view('cart');
    }

    public function addToCart(Request $request)
    {     
        // if user already has a product added to cart
        if($request->session()->has('cart')){

            $cart = $request->session()->get('cart');

         //     check if that product has been added to cart or not   
            
         $products_array_id = array_column($cart,'id'); // []  return all products in cart
         $id = $request->input('id');

         // If it's not already in the cart then add it to cart 
         if (!in_array($id, $products_array_id)) {   // check is this $id already is in $products_array_id

                    $id = $request->input('id');
                    $name = $request->input('name');
                    $image = $request->input('image');
                    $price = $request->input('price');
                    $quantity = $request->input('quantity');
                    $sale_price = $request->input('sale_price');

                    if ($sale_price != null) {
                        
                        $price_to_charge = $sale_price;

                    }else{
                        
                        $price_to_charge = $price;

                    }


                    $product_array = [
                        'id' => $id,
                        'name' => $name,
                        'image' => $image,
                        'price' => $price_to_charge,
                        'quantity' => $quantity,
                        'sale_price' => $sale_price
                    ];

                    $cart[$id] = $product_array;
                    $request->session()->put('cart', $cart);


                    

         }else{
             // if product is already in the cart show alert message.
              echo '<script>
                         alert("Product is already in the Cart");
                    </script>';

         }

              $this->calculateTotalCart($request);

               return view('cart');


        // if this is the first product to be added, then create a cart    
        }else{

              $cart = [];
                          
              $id = $request->input('id');
              $name = $request->input('name');
              $image = $request->input('image');
              $price = $request->input('price');
              $quantity = $request->input('quantity');
              $sale_price = $request->input('sale_price');

              if ($sale_price != null) {
                  
                    $price_to_charge = $sale_price;

              }else{
                   
                    $price_to_charge = $price;

              }


              $product_array = [
                  'id' => $id,
                  'name' => $name,
                  'image' => $image,
                  'price' => $price_to_charge,
                  'quantity' => $quantity,
                  'sale_price' => $sale_price
              ];

              $cart[$id] = $product_array;
              $request->session()->put('cart', $cart); 

              $this->calculateTotalCart($request);


              return redirect('/cart');

        }
    }


    public function calculateTotalCart(Request $request)
    {
        $total_price = 0;
        $total_quantity = 0;
        $cart = $request->session()->get('cart');

        foreach($cart as $id => $product){
           $product = $cart[$id];
           $price = $product['price'];
           $quantity = $product['quantity'];

           $total_price = $total_price + ($price * $quantity);
           $total_quantity = $total_quantity + $quantity;

        }

        $request->session()->put('total_price', $total_price);
        $request->session()->put('total_quantity', $total_quantity);
    }


    public function removeFromCart(Request $request, $id )
    {
     
        if ($request->session()->has('cart')) {
        
            $cart = $request->session()->get('cart');
            $product_id = $request['id']; 
            unset($cart[$product_id]);
            session()->put('cart', $cart);
            $this->calculateTotalCart($request);

        }
       
        return redirect('/cart');                         

    }

    public function edit_product_quantity(Request $request, $id)
    {
        if ($request->session()->has('cart')) {
             
            $product_id = $id;
            $product_quantity = $request->input('quantity');

            //dd($product_quantity);

            $cart = $request->session()->get('cart');

            if (array_key_exists($product_id, $cart)) {
                
                $cart[$product_id]['quantity'] = $product_quantity;

                $request->session()->put('cart', $cart);

                $this->calculateTotalCart($request);
                
            
            }

        }

        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
 