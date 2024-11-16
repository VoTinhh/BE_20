<?php

namespace App\Http\Controllers;

use App\Http\Requests\KhachHangDangKyRequest;
use App\Http\Requests\upDateKhachHangRequest;
use App\Http\Requests\XoaKhachHangRequest;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function store(KhachHangDangKyRequest $request){
        KhachHang::create([
            'ho_va_ten'     =>$request->ho_va_ten,
            'email'         =>$request->email,
            'password'      =>$request->password,
            'so_dien_thoai' =>$request->so_dien_thoai,
            'ngay_sinh'     =>$request->ngay_sinh,
        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Bạn Đã Tạo Tài Khoản  ' . $request->email . '  Thành Công'
        ]);
    }
    public function getData(){
        $data = KhachHang::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function destroy(XoaKhachHangRequest $request)
    {
        KhachHang::where('id', $request->id)->delete();
        return response()->json([
            'status'    =>  1,      
            'message'   =>  'Đã xóa khách hàng ' . $request->ten_khoa_hoc . ' thành công'
        ]);
    }
    public function update(upDateKhachHangRequest $request)
    {
        KhachHang::where('id',$request->id)->update([
            'ho_va_ten'     =>$request->ho_va_ten,
            'email'         =>$request->email,
            'password'      =>$request->password,
            'so_dien_thoai' =>$request->so_dien_thoai,
            'ngay_sinh'     =>$request->ngay_sinh,
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã cập nhật khách hàng ' . $request->ten_khoa_hoc . ' thành công'
        ]);
    }
}
