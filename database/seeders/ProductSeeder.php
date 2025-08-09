<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Keripik Pisang Manis',
                'description' => 'Keripik pisang dengan rasa manis yang lezat, dibuat dari pisang raja pilihan',
                'price' => 15000,
                'category' => 'keripik-pisang',
                'variants' => ['Manis', 'Renyah'],
                'is_bestseller' => true
            ],
            [
                'name' => 'Keripik Pisang Asin',
                'description' => 'Keripik pisang asin yang gurih dan renyah, cocok untuk camilan sehat',
                'price' => 15000,
                'category' => 'keripik-pisang',
                'variants' => ['Asin', 'Gurih'],
                'is_bestseller' => false
            ],
            [
                'name' => 'Keripik Pisang Coklat',
                'description' => 'Keripik pisang dengan lapisan coklat premium yang menggugah selera',
                'price' => 18000,
                'category' => 'keripik-pisang',
                'variants' => ['Coklat', 'Premium'],
                'is_bestseller' => true
            ],
            [
                'name' => 'Keripik Talas',
                'description' => 'Keripik talas segar dengan cita rasa unik dan tekstur yang renyah',
                'price' => 16000,
                'category' => 'keripik-umbi',
                'variants' => ['Talas', 'Sehat'],
                'is_bestseller' => false
            ],
            [
                'name' => 'Keripik Singkong',
                'description' => 'Keripik singkong tradisional dengan bumbu rahasia yang menggoda',
                'price' => 14000,
                'category' => 'keripik-umbi',
                'variants' => ['Tradisional', 'Pedas'],
                'is_bestseller' => false
            ],
            [
                'name' => 'Keripik Ubi Ungu',
                'description' => 'Keripik ubi ungu yang kaya antioksidan dan memiliki warna menarik',
                'price' => 17000,
                'category' => 'keripik-umbi',
                'variants' => ['Ubi Ungu', 'Antioksidan'],
                'is_bestseller' => false
            ],
            [
                'name' => 'Keripik Nangka',
                'description' => 'Keripik nangka dengan aroma yang harum dan rasa yang unik',
                'price' => 19000,
                'category' => 'keripik-buah',
                'variants' => ['Nangka', 'Harum'],
                'is_bestseller' => true
            ],
            [
                'name' => 'Keripik Bayam',
                'description' => 'Keripik bayam yang sehat dan bergizi tinggi untuk camilan sehat',
                'price' => 20000,
                'category' => 'keripik-sayur',
                'variants' => ['Bayam', 'Sehat'],
                'is_bestseller' => false
            ],
            [
                'name' => 'Keripik Jamur',
                'description' => 'Keripik jamur tiram yang renyah dengan cita rasa yang lezat',
                'price' => 22000,
                'category' => 'keripik-sayur',
                'variants' => ['Jamur', 'Protein'],
                'is_bestseller' => false
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}