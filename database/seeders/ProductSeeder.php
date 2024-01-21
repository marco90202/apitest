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
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/200510/capsule_sm_120.jpg?t=1587584126',
      'savings' => '90.6',
      'normalPrice' => 29.99,
      'salePrice' => 2.99,
    ]);
    Product::create([
      'title' => 'Firewatch',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/383870/capsule_sm_120.jpg?t=1688484486',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
    Product::create([
      'title' => 'Sid Meiers Civilization VI',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/289070/capsule_sm_120.jpg?t=1680898825',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
    Product::create([
      'title' => 'When Ski Lifts Go Wrong',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/638000/capsule_sm_120.jpg?t=1668073718',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
    Product::create([
      'title' => 'When Ski Lifts Go Wrong',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/638000/capsule_sm_120.jpg?t=1668073718',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
    Product::create([
      'title' => 'When Ski Lifts Go Wrong',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/638000/capsule_sm_120.jpg?t=1668073718',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
    Product::create([
      'title' => 'When Ski Lifts Go Wrong',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/638000/capsule_sm_120.jpg?t=1668073718',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
    Product::create([
      'title' => 'When Ski Lifts Go Wrong',
      'steamRatingText' => 'Very Positive',
      'releaseDate' => 1694390400,
      'thumb' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/638000/capsule_sm_120.jpg?t=1668073718',
      'savings' => '90.6',
      'normalPrice' => 19.99,
      'salePrice' => 1.99,
    ]);
  }
}
