<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('rooms')->insert([
            [
                'id' => 1,
                'room_type'=> 'Phòng Thường',
                'image'=> 'img_1.jpg',
                'price' => 350000,
                'description'=> 'description 1',
                'status'  => 0,
            ],
            [
                'id' => 2,
                'room_type'=> 'Phòng Gia Đình',
                'image'=> 'img_2.jpg',
                'price' => 500000,
                'description'=> 'description 2',
                'status'  => 0,
            ],
            [
                'id' => 3,
                'room_type'=> 'Phòng Đơn',
                'image'=> 'img_3.jpg',
                'price' => 250000,
                'description'=> 'description 3',
                'status'  => 0,
            ],
            [
                'id' => 4,
                'room_type'=> 'Phòng Đôi',
                'image'=> 'img_1.jpg',
                'price' => 300000,
                'description'=> 'description 4',
                'status'  => 0,
            ],
            [
                'id' => 5,
                'room_type'=> 'Phòng Cao Cấp',
                'image'=> 'img_2.jpg',
                'price' => 800000,
                'description'=> 'description 5',
                'status'  => 0,
            ]
        ]);
    }
}
