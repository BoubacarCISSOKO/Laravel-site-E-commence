<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // Laptops
        
            Product::create([
                'name' => 'Laptop 1',
                'slug' => 'laptop-1',
                'details' =>  ' inch, TB SSD, 32GB RAM',
                'price' => 249999,
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               
            ]);

            Product::create([
                'name' => 'Laptop 2',
                'slug' => 'laptop-2',
                'details' =>  ' inch, TB SSD, 32GB RAM',
                'price' => 249999,
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               
            ]);

            Product::create([
                'name' => 'Laptop 3',
                'slug' => 'laptop-3',
                'details' =>  ' inch, TB SSD, 32GB RAM',
                'price' => 249999,
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               
            ]);

            Product::create([
                'name' => 'Laptop 4',
                'slug' => 'laptop-4',
                'details' =>  ' inch, TB SSD, 32GB RAM',
                'price' => 249999,
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               
            ]);

            Product::create([
                'name' => 'Laptop 5',
                'slug' => 'laptop-5',
                'details' =>  ' inch, TB SSD, 32GB RAM',
                'price' => 249999,
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               
            ]);

    }
}
