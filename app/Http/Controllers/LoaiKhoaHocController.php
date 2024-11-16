<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoaiKhoaHocRequestCreate;
use App\Http\Requests\upDateLoaiKhoaHocRequest;
use App\Http\Requests\XoaLoaiKhoaHocRequest;
use App\Models\LoaiKhoaHoc;
use Illuminate\Http\Request;

class LoaiKhoaHocController extends Controller
{
    public function store(LoaiKhoaHocRequestCreate $request){
        LoaiKhoaHoc::create([
            'ten_khoa_hoc'         =>$request->ten_khoa_hoc,
            'slug_khoa_hoc'        =>$request->slug_khoa_hoc,
            'hinh_anh'             =>$request->hinh_anh,
            'mo_ta_ngan'           =>$request->mo_ta_ngan,
            'tinh_trang'           =>$request->tinh_trang,
        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Đã thêm mới loại khóa ' . $request->ten_khoa_hoc . ' thành công.'
        ]);
    }
    public function getData(){
        $data = LoaiKhoaHoc::get();
        return response()->json([
            'data1' => $data
        ]);
    }
    public function destroy(XoaLoaiKhoaHocRequest $request)
    {
        LoaiKhoaHoc::where('id',$request->id)->delete();
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Bạn đã xóa loại khóa ' . $request->ten_khoa_hoc . ' thành công!'
        ]);
    }
    public function update(upDateLoaiKhoaHocRequest $request)
    {
        LoaiKhoaHoc::where('id', $request->id)->update([
            'ten_khoa_hoc'         =>$request->ten_khoa_hoc,
            'slug_khoa_hoc'        =>$request->slug_khoa_hoc,
            'hinh_anh'             =>$request->hinh_anh,
            'mo_ta_ngan'           =>$request->mo_ta_ngan,
            'tinh_trang'           =>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Bạn đã cập nhật loại khóa ' . $request->ten_khoa_hoc . ' thành công'
        ]);
    }
}
