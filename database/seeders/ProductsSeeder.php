<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products')->insert([
        //     'name' => 'Samsung Galaxy S9',
        //     'description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
        //     'photo' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
        //     'price' => 698.88
        // ]);

        // // Add other product entries...

        // // Example:
        // DB::table('products')->insert([
        //     'name' => 'iPhone 12 Pro',
        //     'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
        //     'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-pro-blue-hero?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1604021661000',
        //     'price' => 983.00
        // ]);

        // // Add other product entries...

        // // Product 1: Running Shoes
        // DB::table('products')->insert([
        //     'name' => 'Nike Air Zoom Pegasus 38',
        //     'description' => 'High-performance running shoes with responsive cushioning and a breathable upper.',
        //     'photo' => 'https://example.com/nike-pegasus-38.jpg',
        //     'price' => 129.99
        // ]);

        // // Product 2: Basketball Shoes
        // DB::table('products')->insert([
        //     'name' => 'Adidas Dame 7 Basketball Shoes',
        //     'description' => 'Designed for quick moves and agility on the basketball court, endorsed by Damian Lillard.',
        //     'photo' => 'https://example.com/adidas-dame-7.jpg',
        //     'price' => 109.95
        // ]);

        // // Product 3: Yoga Mat
        // DB::table('products')->insert([
        //     'name' => 'Liforme Yoga Mat',
        //     'description' => 'High-quality non-slip yoga mat for a comfortable and stable practice.',
        //     'photo' => 'https://example.com/liforme-yoga-mat.jpg',
        //     'price' => 89.00
        // ]);

        // // Product 4: Sports Watch
        // DB::table('products')->insert([
        //     'name' => 'Garmin Forerunner 945',
        //     'description' => 'Advanced GPS running/triathlon smartwatch with music and heart rate monitoring.',
        //     'photo' => 'https://example.com/garmin-forerunner-945.jpg',
        //     'price' => 549.99
        // ]);

        // // Product 5: Sunglasses
        // DB::table('products')->insert([
        //     'name' => 'Ray-Ban Aviator Sunglasses',
        //     'description' => 'Classic aviator sunglasses with UV protection and stylish design.',
        //     'photo' => 'https://example.com/ray-ban-aviator.jpg',
        //     'price' => 149.95
        // ]);

        // // Product 6: Leather Sneakers
        // DB::table('products')->insert([
        //     'name' => 'Converse Chuck Taylor All Star Leather Sneakers',
        //     'description' => 'Timeless leather sneakers with the iconic Chuck Taylor design.',
        //     'photo' => 'https://example.com/converse-leather-sneakers.jpg',
        //     'price' => 79.99
        // ]);

        // // Add more products as needed...

        // // Product 7: Backpack
        // DB::table('products')->insert([
        //     'name' => 'North Face Jester Backpack',
        //     'description' => 'Versatile backpack for outdoor activities with multiple compartments.',
        //     'photo' => 'https://example.com/north-face-backpack.jpg',
        //     'price' => 69.50
        // ]);
        DB::table('products')->insert([
                'name' => 'Jacket',
                'description' => 'Versatile backpack for outdoor activities with multiple compartments.',
                'photo' => 'jacket.jpg',
                'price' => 39.50
            ]);
        
        DB::table('products')->insert([
                'name' => 'tracksuit',
                'description' => 'Versatile backpack for outdoor activities with multiple compartments.',
                'photo' => 'tracksuit.jpg',
                'price' => 49.00
            ]);
        // DB::table('products')->insert([
        //         'name' => 'tracksuit',
        //         'description' => 'Versatile backpack for outdoor activities with multiple compartments.',
        //         'photo' => 'jacket.jpg',
        //         'price' => 69.50
        //     ]);
        // DB::table('products')->insert([
        //         'name' => 'tracksuit',
        //         'description' => 'Versatile backpack for outdoor activities with multiple compartments.',
        //         'photo' => 'jacket.jpg',
        //         'price' => 89.50
        //     ]);
        // DB::table('products')->insert([
        //         'name' => 'tracksuit',
        //         'description' => 'Versatile backpack for outdoor activities with multiple compartments.',
        //         'photo' => 'jacket.jpg',
        //         'price' => 79.50
        //     ]);


    }
}
