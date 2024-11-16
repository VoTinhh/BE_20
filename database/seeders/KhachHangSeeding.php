<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeding extends Seeder
{
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'ho_va_ten' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0912345678',
                'ngay_sinh' => '1995-06-15',
            ],
            [
                'ho_va_ten' => 'Trần Thị B',
                'email' => 'tranthib@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654321',
                'ngay_sinh' => '1998-11-23',
            ],
            [
                'ho_va_ten' => 'Lê Văn C',
                'email' => 'levanc@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0901122334',
                'ngay_sinh' => '1992-03-10',
            ]
        ]);
    }
}
