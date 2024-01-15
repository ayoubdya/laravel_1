<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Product::create([
      'cate_id' => 1,
      'name' => 'Product 1',
      'slug' => 'product-1',
      'small_description' => 'Small description for product 1',
      'description' => 'Description for product 1',
      'original_price' => 120,
      'selling_price' => 100,
      'image' => 'product-1.jpg',
      'qty' => 100,
      'tax' => 10,
      'status' => 0,
      'trending' => 1,
      'meta_title' => 'Meta title for product 1',
      'meta_keyword' => 'Meta keyword for product 1',
      'meta_description' => 'Meta description for product 1',
    ]);

    Product::create([
      'cate_id' => 1,
      'name' => 'Product 2',
      'slug' => 'product-2',
      'small_description' => 'Small description for product 2',
      'description' => 'Description for product 2',
      'original_price' => 120,
      'selling_price' => 100,
      'image' => 'product-2.jpg',
      'qty' => 100,
      'tax' => 10,
      'status' => 0,
      'trending' => 1,
      'meta_title' => 'Meta title for product 2',
      'meta_keyword' => 'Meta keyword for product 2',
      'meta_description' => 'Meta description for product 2',
    ]);

    Product::create([
      'cate_id' => 1,
      'name' => 'Product 3',
      'slug' => 'product-3',
      'small_description' => 'Small description for product 3',
      'description' => 'Description for product 3',
      'original_price' => 120,
      'selling_price' => 100,
      'image' => 'product-3.jpg',
      'qty' => 100,
      'tax' => 10,
      'status' => 0,
      'trending' => 1,
      'meta_title' => 'Meta title for product 3',
      'meta_keyword' => 'Meta keyword for product 3',
      'meta_description' => 'Meta description for product 3',
    ]);
  }
}
