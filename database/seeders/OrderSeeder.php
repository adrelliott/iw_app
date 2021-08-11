<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Get all contacts and products
        $contacts = \App\Models\Contact::all();
        $products = \App\Models\Product::all();

        // Create some orders for each contact
        foreach ($contacts as $contact) {
            for ($x = 0; $x <= rand(0, 4); $x++) {
                // Set the order up
                $order_id = \App\Models\Order::insertGetId(['contact_id' => $contact->id, 'created_at' => now()]);
                $order = \App\Models\Order::find($order_id);
                $order->brand_id = rand(1, 3);
                $order->sib_ref = rand(1000, 9999);
                $order->pplus_ref = $faker->regexify('[0-9a-zA-Z]{6}');


                // create a random number of line items
                for ($x = 0; $x <= rand(1, 3); $x++) {
                    $product = $products->random();
                    $quantity = rand(1, 5);
                    $line_total = $quantity * $product->price;
                    $order->total = $order->total + $line_total;

                    \App\Models\LineItem::insert([
                      'product_id' => $product->id,
                      'order_id' => $order->id,
                        'quantity' => $quantity,
                        'line_total' => $quantity * $product->price
                    ]);
                }

                $order->save();
            }
        }
    }
}
