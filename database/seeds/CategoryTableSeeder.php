<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['id' => '1',
             'name' => 'お菓子・食品',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['id' => '2',
             'name' => '生活雑貨・インテリア',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['id' => '3',
             'name' => 'おもちゃ・ぬいぐるみ',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['id' => '4',
             'name' => '文具・ステーショナリー',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['id' => '5',
             'name' => 'ファッション雑貨',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
