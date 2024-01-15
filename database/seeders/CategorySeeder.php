<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Category::create([
      'name' => 'Category 1',
      'slug' => 'category-1',
      'description' => 'Description for category 1',
      'status' => 0,
      'popular' => 0,
      'image' => 'category-1.jpg',
      'meta_title' => 'Meta title for category 1',
      'meta_keyword' => 'Meta keyword for category 1',
      'meta_description' => 'Meta description for category 1',
    ]);

    Category::create([
      'name' => 'Category 2',
      'slug' => 'category-2',
      'description' => 'Description for category 2',
      'status' => 0,
      'popular' => 0,
      'image' => 'category-2.jpg',
      'meta_title' => 'Meta title for category 2',
      'meta_keyword' => 'Meta keyword for category 2',
      'meta_description' => 'Meta description for category 2',
    ]);
  }
}
