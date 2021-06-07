<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Swedish Massage',
            'price' => 39,
        ]);
        Product::create([
            'name' => 'Full Body Massage',
            'price' => 42,
        ]);
        Product::create([
            'name' => 'Foot Massage',
            'price' => 29,
        ]);
        Product::create([
            'name' => 'Chocolate Massage',
            'price' => 17,
        ]);
        Product::create([
            'name' => 'Signature Facial',
            'price' => 22,
        ]);
        Product::create([
            'name' => 'Organic Facial',
            'price' => 40,
        ]);
        Product::create([
            'name' => 'Deep Cleansing Facial',
            'price' => 31,
        ]);
        Product::create([
            'name' => 'Anti Aging Facial',
            'price' => 19,
        ]);
        Product::create([
            'name' => 'Papaya Wrap',
            'price' => 51,
        ]);
        Product::create([
            'name' => 'Cucumber Wrap',
            'price' => 29,
        ]);
        Product::create([
            'name' => 'Whitening Wrap',
            'price' => 39,
        ]);
        Product::create([
            'name' => 'Signature Wrap',
            'price' => 20,
        ]);
        Product::create([
            'name' => 'Manicure',
            'price' => 39,
        ]);
        Product::create([
            'name' => 'Pedicure',
            'price' => 42,
        ]);
        Product::create([
            'name' => 'Rice Body Scrub',
            'price' => 29,
        ]);
        Product::create([
            'name' => 'Corn Cub Scrub',
            'price' => 17,
        ]);
    }
}
