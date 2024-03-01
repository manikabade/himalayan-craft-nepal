<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            [
                'Title'                 => 'Craft Himalayan Trade Nepal',
                'alias'                 => 'Craft Himalayan Trade Nepal',
                'working_day'           => 'Sunday',
                'working_time'          => '10:00AM-5:00PM',
                'closed_day'            => 'sunday',
                'closed_time'           => '6:00PM-9:00AM',
                'description'           => 'Craft Himalayan Trade Nepal',
                'email'                 =>'doctorapp@gmail.com',
                'phone'                 =>'0123455897',
                'copyright'             =>'Craft Himalayan Trade Nepal',
                'facebook'              =>'www.facebook.com',
                'twitter'               =>'www.twitter.com',
                'youtube'               =>'www.youtube.com',
                'insta'                 =>'www.insta.com',
                'footer_text'           =>'Craft Himalayan Trade Nepal',
                'logo'           =>'logo.png',
                'photo'           =>'photo.png',
            ],
        ]);
    }
}

