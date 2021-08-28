<?php

namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
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
                'name' => 'Galaxy S30',
                'description' => 'Samsung Brand',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Samsung',
                'price' => 100
            ],
            [
                'name' => 'iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Iphone',
                'price' => 500
            ],
            [
                'name' => 'Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Google',
                'price' => 400
            ],
            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=LG',
                'price' => 200
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}