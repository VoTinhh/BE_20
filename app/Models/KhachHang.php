<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'password',
    ];
}
