<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'キャンプ飯',
                'sort_order' => 1,
            ],
            [
                'name' => 'アニメ飯',
                'sort_order' => 2,
            ],
            [
                'name' => 'セット販売',
                'sort_order' => 3,
            ],
            ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '熱盛り',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '肉',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => '魚',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ジブリ飯',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ゆるキャン',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'その他',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            ]);

    
        }
}