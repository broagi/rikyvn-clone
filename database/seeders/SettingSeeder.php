<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('settings')->insert([
        ['key' => 'email',
        'name' => 'Email',
        'value' => 'Rikysupport@gmail.com',
        'type' => 'text'
       ],
       ['key' => 'address',
       'name'=> 'Address',
        'value' => '123 Nguyễn Đình Chiểu, Phường 11, Quận 3, TPHCM',
        'type' => 'text'
       ],
       ['key' => 'hotline',
       'name'=> 'Hotline',
        'value' => '123456789',
        'type' => 'text'
       ],
       ['key' => 'welcome_video',
       'name'=> 'Welcome Video',
        'value' => '',
        'type' => 'video'
       ]
        ]);
    }
}
