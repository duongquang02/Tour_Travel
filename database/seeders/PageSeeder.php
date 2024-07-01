<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('pages')->insert([
        'type' => 'aboutus',
        'detail' => 'Nội dung trang Giới thiệu chúng tôi...',
    ]);

    DB::table('pages')->insert([
        'type' => 'contact',
        'detail' => 'Nội dung trang Liên hệ...',
    ]);
}

}
