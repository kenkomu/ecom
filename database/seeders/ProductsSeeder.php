<?php

namespace Database\Seeders;
use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

              $products = [ 

                [ 
                'name' => 'White T-shirt',
                'description' => 'Awesome white T-shirt.',
                'price' => 49.99,
                'sale_price' => 29.99,
                'quantity' => 5,
                'category' => 'Shirt',
                'type' => 'Women',
                'image' => 't-shirt3.jpg',
                'image2' => null
                ],                    

                [
                'name' => 'Black T-shirt',
                'description' => 'Awesome black T-shirt.',
                'price' => 49.99,
                'sale_price' => null,
                'quantity' => 3,
                'category' => 'Shirt',
                'type' => 'Women',
                'image' => 't-shirt1.jpg',
                'image2' => 't-shirt2.jpg'
                ],

                [
                'name' => 'Pink T-shirt',
                'description' => 'Awesome pink T-shirt.',
                'price' => 39.99,
                'sale_price' => 29.99,
                'quantity' => 3,
                'category' => 'Shirt',
                'type' => 'Women',
                'image' => 'pink-t-shirt.png',
                'image2' => 'pink-t-shirt2.png'
                ],

                [
                'name' => 'Short pink shirt',
                'description' => 'Awesome short pink shirt. ',
                'price' => 29.99,
                'sale_price' => null,
                'quantity' => 5,
                'category' => 'Shirt',
                'type' => 'Women',
                'image' => 'pink-t-shirt3.png',
                'image2' => 'pink-t-shirt4.png'
                ],

                [
                'name' => 'White trousers',
                'description' => 'Awesome white trousers for women.',
                'price' => 78.99,
                'sale_price' => null,
                'quantity' => 5,
                'category' => 'Trousers',
                'type' => 'Women',
                'image' => 'white-trousers-1.png',
                'image2' => 'white-trousers-2.png'
                ],

                [
                'name' => 'Coat',
                'description' => 'Awesome coat for women.',
                'price' => 99.99,
                'sale_price' => null,
                'quantity' => 2,
                'category' => 'Coat',
                'type' => 'Women',
                'image' => 'coat.png',
                'image2' => 'coat-2.png'
                ],

                [
                'name' => 'Blue T-shirt',
                'description' => 'Awesome blue T-shirt fot men.',
                'price' => 29.99,
                'sale_price' => null,
                'quantity' => 3,
                'category' => 'Shirt',
                'type' => 'Men',
                'image' => 'blue-t-shirt.png',
                'image2' => 'blue-t-shirt2.png'
                ],

                [
                'name' => 'Beige trousers',
                'description' => 'Awesome beige trousers for men.',
                'price' => 59.99,
                'sale_price' => null,
                'quantity' => 1,
                'category' => 'Trousers',
                'type' => 'Men',
                'image' => 'baige-trousers.png',
                'image2' => 'baige-trousers2.png'
                ],

                [
                'name' => 'Man shoes',
                'description' => 'Awesome man shoes.',
                'price' => 120.99,
                'sale_price' => null,
                'quantity' => 3,
                'category' => 'Shoes',
                'type' => 'Men',
                'image' => 'shoes1.png',
                'image2' => 'shoes2.png'
                ]
         ];
            

         foreach ($products as $product) {
            Product::create($product);
        }


               
    
    }
}
