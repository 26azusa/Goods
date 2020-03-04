<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('item')->insert([
             ['id' => '1',
              'name' => 'パスタスナック',
              'description' => 'カリカリ食感でおつまみにぴったりなスナックです。',
              'image_path' => '64GLWUHOhXvJQM2ESXrYtCtzY576e5RPkLPQYo45.jpeg',
              'quantity' => '90g',
              'price' => '550',
              'category_id' => '1',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['id' => '2',
              'name' => 'ボールペンセット',
              'description' => 'パークフードをモチーフにしたボールペンです。',
              'image_path' => 'AHL6RnuVNqhec7qGYc9RhwBUdneJzSpcHeCd9Waf.jpeg',
              'quantity' => '5本',
              'price' => '1200',
              'category_id' => '4',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
