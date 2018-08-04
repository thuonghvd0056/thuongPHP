<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'

            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 2',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 3',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 4',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 5',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 6',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 7',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 8',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 9',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 10',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 11',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 12',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 13',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 14',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 15',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 16',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 17',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 18',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'apartment name'=>'EHOME 4 BẮC SÀI GÒN 19',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general information'=>'Giáp ranh Thủ Đức',
                'detailed information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
        ]);
    }
}
