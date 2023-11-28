<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('settings')->insert([
        ['key' => 'site_name',
        'name' => 'Site Name',
        'value' => 'RiKy.vn',
        'type' => 'text'
       ],
       ['key' => 'site_description',
       'name'=> 'Site Description',
        'value' => 'Riky Marketing là công ty tư vấn, huấn luyện đào tạo Marketing Online tại Việt Nam. Hỗ trợ các Cá Nhân, Doanh Nghiệp, Nghệ Sĩ nắm bắt cơ hội kinh doanh trực tuyến và khai thác tối đa ứng dụng của Internet vào hoạt động kinh doanh.',
        'type' => 'text'
       ],
       ['key' => 'site_keyword',
       'name'=> 'Site Keyword',
        'value' => 'Marketing, Ecommerce, Training',
        'type' => 'text'
      ],
      ['key' => 'site_logo',
       'name'=> 'Site Logo',
        'value' => '',
        'type' => 'photo'
    ],
    ['key' => 'site_favicon',
       'name'=> 'Site Favicon',
        'value' => '',
        'type' => 'photo'
       ]
        ]);
    }
}
