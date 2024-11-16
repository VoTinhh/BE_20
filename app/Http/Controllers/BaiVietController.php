<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaiVietCreateRequest;
use App\Http\Requests\BaiVietDeleteRequest;
use App\Http\Requests\BaiVietUpdateRequest;
use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function store(Request $request)
    {
        BaiViet::create([
            'tieu_de'           =>$request->tieu_de,
            'slug_tieu_de'      =>$request->slug_tieu_de,
            'hinh_anh'          =>$request->hinh_anh,
            'mo_ta_ngan'        =>$request->mo_ta_ngan,
            'noi_dung'          =>$request->noi_dung,
            'tinh_trang'        =>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Tạo mới bài viết thành công!'
        ]);
    }
    public function getdata()
    {
        $data = BaiViet::get()->all();
        return response()->json([
            'data'    =>  $data,
        ]);
    }
    public function destroy(BaiVietDeleteRequest $request)
    {
        BaiViet::where('id',$request->id)->delete();
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Bạn đã xóa bài học thành công!'
        ]);
    }
    public function update(BaiVietUpdateRequest $request)
    {
        BaiViet::where('id',$request->id)->update([
            'tieu_de'           =>$request->tieu_de,
            'slug_tieu_de'      =>$request->slug_tieu_de,
            'hinh_anh'          =>$request->hinh_anh,
            'mo_ta_ngan'        =>$request->mo_ta_ngan,
            'noi_dung'          =>$request->noi_dung,
            'tinh_trang'        =>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã cập nhật bài học thành công!'
        ]);
    }
}
