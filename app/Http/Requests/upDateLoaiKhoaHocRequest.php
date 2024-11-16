<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class upDateLoaiKhoaHocRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'id'              => 'required|exists:loai_khoa_hocs,id',
            'ten_khoa_hoc'    => 'required|min:4|max:30',
            'slug_khoa_hoc'   => 'required|min:5|max:45|unique:loai_khoa_hocs,slug_khoa_hoc,'. $this->id. 'id,',
            'hinh_anh'        => 'required',
            'mo_ta_ngan'      => 'required|min:100',
            'tinh_trang'      => 'required|boolean',
        ];
    }
    public function messages(): array
    {
        return [
            'id.required'              => 'ID không được để trống.',
            'id.exists'                => 'ID không tồn tại trong hệ thống.',
            'ten_khoa_hoc.required'    => 'Tên khóa học không được để trống.',
            'ten_khoa_hoc.min'         => 'Tên khóa học phải có ít nhất 4 ký tự.',
            'ten_khoa_hoc.max'         => 'Tên khóa học không được vượt quá 30 ký tự.',
            'slug_khoa_hoc.required'   => 'Slug khóa học không được để trống.',
            'slug_khoa_hoc.min'        => 'Slug khóa học phải có ít nhất 5 ký tự.',
            'slug_khoa_hoc.max'        => 'Slug khóa học không được vượt quá 45 ký tự.',
            'slug_khoa_hoc.unique'     => 'Slug khóa học này đã tồn tại, vui lòng chọn slug khác.',
            'hinh_anh.required'        => 'Hình ảnh không được để trống.',
            'mo_ta_ngan.required'      => 'Mô tả ngắn không được để trống.',
            'mo_ta_ngan.min'           => 'Mô tả ngắn phải có ít nhất 100 ký tự.',
            'tinh_trang.required'      => 'Tình trạng không được để trống.',
            'tinh_trang.boolean'       => 'Tình trạng phải là kiểu boolean (1 hoặc 0).',
        ];
    }
}
