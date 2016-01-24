<?php namespace Todoparrot;    
  
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
class CategoryTableSeeder extends Seeder {
 
  public function run()
  {
    
    Category::create([
      'name' => 'Atpūta'
    ]);
    
    Category::create([
      'name' => 'Darbs'
    ]);

     Category::create([
      'name' => 'Iepirkumi'
    ]);

  }
 
}