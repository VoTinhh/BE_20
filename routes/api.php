<?php

use App\Http\Controllers\BaiHocController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiKhoaHocController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/admin/loai-khoa-hoc/create', [LoaiKhoaHocController::class, 'store']);
Route::post('/admin/loai-khoa-hoc/delete', [LoaiKhoaHocController::class, 'destroy']);
Route::post('/admin/loai-khoa-hoc/update', [LoaiKhoaHocController::class, 'update']);
Route::get('/admin/loai-khoa-hoc/data', [LoaiKhoaHocController::class, 'getData']);

Route::post('/admin/bai-viet/create', [BaiVietController::class, 'store']);
Route::get('/admin/bai-viet/data', [BaiVietController::class, 'getData']);
Route::post('/admin/bai-viet/delete', [BaiVietController::class, 'destroy']);
Route::post('/admin/bai-viet/update', [BaiVietController::class, 'update']);

Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData']);
Route::post('/khach-hang/create', [KhachHangController::class, 'store']);
Route::post('/khach-hang/delete', [KhachHangController::class, 'destroy']);
Route::post('/khach-hang/update', [KhachHangController::class, 'update']);

Route::post('/admin/bai-hoc/create', [BaiHocController::class, 'store']);
Route::get('/admin/bai-hoc/data', [BaiHocController::class, 'getdata']);
Route::post('/admin/bai-hoc/delete', [BaiHocController::class, 'destroy']);
Route::post('/admin/bai-hoc/update', [BaiHocController::class, 'update']);
