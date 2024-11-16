<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiKhoaHocSeeding extends Seeder
{
    public function run(): void
    {
        DB::table('loai_khoa_hocs')->delete();
        DB::table('loai_khoa_hocs')->truncate();
        DB::table('loai_khoa_hocs')->insert([
            [
                'ten_khoa_hoc' => 'Lập trình PHP cơ bản',
                'slug_khoa_hoc' => 'lap-trinh-php-co-ban',
                'hinh_anh' => 'https://cdn.codegym.vn/wp-content/uploads/2022/12/hoc-php.png',
                'mo_ta_ngan' => 'Khóa học "Lập trình PHP cơ bản" giúp học viên làm quen với ngôn ngữ lập trình PHP, một trong những công cụ phổ biến nhất để phát triển web. Khóa học này bao gồm các chủ đề như cú pháp cơ bản của PHP, biến, toán tử, hàm, cấu trúc điều kiện và vòng lặp. Học viên cũng sẽ tìm hiểu về việc xử lý form, làm việc với cơ sở dữ liệu MySQL, và phát triển các ứng dụng web động. Với hướng dẫn từng bước từ cơ bản đến nâng cao, khóa học này phù hợp cho những ai mới bắt đầu học lập trình hoặc muốn mở rộng kiến thức về phát triển web. Được hướng dẫn bởi các giảng viên có kinh nghiệm, học viên sẽ được tiếp cận với các bài tập thực hành thực tế và các ví dụ minh họa dễ hiểu để nhanh chóng nắm vững kiến thức. Sau khóa học, học viên sẽ có thể tạo ra các ứng dụng web cơ bản, nắm bắt các kỹ năng lập trình cần thiết để chuyển sang các framework PHP tiên tiến hơn như Laravel.',
                'tinh_trang' => 1,
            ],
            [
                'ten_khoa_hoc' => 'Lập trình Laravel nâng cao',
                'slug_khoa_hoc' => 'lap-trinh-laravel-nang-cao',
                'hinh_anh' => 'https://tecktrending.com/wp-content/uploads/2020/06/Kh%C3%B3a-h%E1%BB%8Dc-Laravel-t%E1%BA%A1i-h%C3%A0-n%E1%BB%99i.jpg',
                'mo_ta_ngan' => 'Khóa học "Lập trình Laravel nâng cao" dành cho những ai đã có kiến thức cơ bản về PHP và muốn phát triển kỹ năng sâu hơn với framework Laravel. Khóa học tập trung vào các chủ đề nâng cao như làm việc với hệ thống quan hệ trong cơ sở dữ liệu, tối ưu hóa các query phức tạp, và quản lý dữ liệu hiệu quả. Học viên sẽ học cách triển khai các dịch vụ bên ngoài, tối ưu hóa hiệu suất, và tạo ra các ứng dụng web quy mô lớn. Các khái niệm như bảo mật, xác thực người dùng, và xây dựng API RESTful cũng sẽ được đề cập một cách chi tiết. Khóa học bao gồm các bài tập thực hành phong phú và dự án cuối khóa nhằm giúp học viên nắm chắc kiến thức và áp dụng vào công việc thực tế. Đây là một lựa chọn tuyệt vời cho các lập trình viên muốn nâng cao sự hiểu biết về Laravel và chuẩn bị cho các dự án lớn hoặc làm việc trong môi trường chuyên nghiệp.',
                'tinh_trang' => 1,
            ],
            [
                'ten_khoa_hoc' => 'VueJS cho người mới bắt đầu',
                'slug_khoa_hoc' => 'vuejs-cho-nguoi-moi-bat-dau',
                'hinh_anh' => 'https://i0.wp.com/software.centrix.asia/wp-content/uploads/2024/06/vuejs-tren-udemy.jpg?ssl=1',
                'mo_ta_ngan' => 'Khóa học "VueJS cho người mới bắt đầu" là một lựa chọn lý tưởng cho những ai muốn bước vào thế giới phát triển giao diện người dùng hiện đại. Khóa học sẽ giới thiệu các khái niệm cơ bản của Vue, từ cách tạo các component đơn giản đến cách quản lý state và props. Học viên sẽ học cách sử dụng template syntax của Vue, làm việc với các sự kiện, và xây dựng các ứng dụng đơn trang (SPA) mượt mà. Ngoài ra, khóa học cũng sẽ đi sâu vào cách tối ưu hóa hiệu suất và xây dựng các ứng dụng có thể dễ dàng bảo trì và mở rộng. Với phương pháp học tập thực hành, học viên sẽ làm quen với quy trình phát triển dự án và nhận biết cách tổ chức mã nguồn hiệu quả. Được thiết kế cho người mới bắt đầu, khóa học không yêu cầu kinh nghiệm trước về Vue nhưng sẽ trang bị đầy đủ kiến thức nền tảng để học viên tự tin tiến xa hơn trong lập trình giao diện.',
                'tinh_trang' => 1,
            ]
        ]);
    }
}
