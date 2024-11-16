<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaiHocCreateRequest;
use App\Http\Requests\BaiHocDeleteRequest;
use App\Http\Requests\BaiHocUpDateRequest;
use App\Models\BaiHoc;
use Illuminate\Http\Request;

class BaiHocController extends Controller
{
    public function store(BaiHocCreateRequest $request)
    {
        BaiHoc::create([
            'id_khoa_hoc'   =>$request->id_khoa_hoc,
            'tieu_de'       =>$request->tieu_de,
            'bai_hoc_so'    =>$request->bai_hoc_so,
            'link_bai_hoc'  =>$request->link_bai_hoc,
            'is_thu_phi'    =>$request->is_thu_phi,
            'tinh_trang'    =>$request->tinh_trang
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Tạo mới bài học ' . $request->tieu_de . ' bài ' . $request->bai_hoc_so. ' thành công!'
        ]);
    }
    public function getdata()
    {
        $data = BaiHoc::get()->all();
        return response()->json([
            'data'    =>  $data,
        ]);
    }
    public function destroy(BaiHocDeleteRequest $request)
    {
        BaiHoc::where('id',$request->id)->delete();
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Bạn đã xóa bài học ' . $request->tieu_de . ' bài ' . $request->bai_hoc_so. ' thành công!'
        ]);
    }
    public function update(BaiHocUpDateRequest $request)
    {
        BaiHoc::where('id',$request->id)->update([
            'id_khoa_hoc'   =>$request->id_khoa_hoc,
            'tieu_de'       =>$request->tieu_de,
            'bai_hoc_so'    =>$request->bai_hoc_so,
            'link_bai_hoc'  =>$request->link_bai_hoc,
            'is_thu_phi'    =>$request->is_thu_phi,
            'tinh_trang'    =>$request->tinh_trang
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã cập nhật bài học ' . $request->tieu_de . ' bài ' . $request->bai_hoc_so. ' thành công!'
        ]);
    }
}
