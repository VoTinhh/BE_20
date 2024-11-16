<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaiHocSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bai_hocs')->delete();
        DB::table('bai_hocs')->truncate();
        DB::table('bai_hocs')->insert([
            [
                'id_khoa_hoc'   =>'1',
                'tieu_de'       =>'Làm quen với môi trường',
                'bai_hoc_so'    =>'1',
                'link_bai_hoc'  =>'https://www.youtube.com/embed/JzFeAHU2Yvo',
                'is_thu_phi'    =>'1',
                'tinh_trang'    =>'1',
            ],
            [
                'id_khoa_hoc'   =>'2',
                'tieu_de'       =>'Viết Request',
                'bai_hoc_so'    =>'10',
                'link_bai_hoc'  =>'https://www.youtube.com/embed/ecmP4Elda1I',
                'is_thu_phi'    =>'0',
                'tinh_trang'    =>'1',
            ],
            [
                'id_khoa_hoc'   =>'3',
                'tieu_de'       =>'Single-File Components (SFC) là gì? ',
                'bai_hoc_so'    =>'3',
                'link_bai_hoc'  =>'https://www.youtube.com/embed/ipXoxkj3KSA',
                'is_thu_phi'    =>'0',
                'tinh_trang'    =>'1',
            ],
        ]);
    }
}
