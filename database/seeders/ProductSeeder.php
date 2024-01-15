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
        //
        Product::create([
          'title' => 'XCOM: Enemy Unknown',
          'rating' => 'Very Positive',
          'releasedate' => '10/9/2012',
          'gameimg' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/200510/capsule_sm_120.jpg?t=1587584126',
          'discountpercentage' => '90%',
          'regularprice' => 29.99,
          'discountprice' => 2.99,
        ]);
        Product::create([
            'title' => 'Firewatch',
            'rating' => 'Very Positive',
            'releasedate' => '1/1/2016',
            'gameimg' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/383870/capsule_sm_120.jpg?t=1688484486',
            'discountpercentage' => '90%',
            'regularprice' => 19.99,
            'discountprice' => 1.99,
          ]);
    }
}
