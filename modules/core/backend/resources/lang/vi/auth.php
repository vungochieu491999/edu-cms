<?php

return [
    'login'              => [
        'username'          => 'Tên tài khoản',
        'email'             => 'Email',
        'password'          => 'Mật khẩu',
        'title'             => 'Đăng nhập tài khoản',
        'remember'          => 'Ghi nhớ đăng nhập?',
        'login'             => 'Đăng nhập',
        'placeholder'       => [
            'username' => 'Nhập tên tài khoản của bạn',
            'email'    => 'Nhập email của bạn',
            'email_or_phone'  => 'Nhập email hoặc số điện thoại đăng ký của bạn',
        ],
        'success'           => 'Đăng nhập thành công!',
        'fail'              => 'Sai tên tài khoản hoặc mật khẩu.',
        'not_active'        => 'Tài khoản của bạn chưa được kích hoạt!',
        'banned'            => 'Tài khoản này đã bị khóa.',
        'logout_success'    => 'Đăng xuất thành công!',
        'dont_have_account' => 'Bạn chưa có tài khoản, vui lòng liên hệ tư vấn viên để được hỗ trợ!',
    ],
    'forgot_password'    => [
        'title'   => 'Quên mật khẩu',
        'message' => '<p>Bạn thực sự quên mật khẩu?</p><p>Vui lòng nhập email đăng ký tài khoản tại đây. Hệ thống chúng tôi sẽ gửi bạn thông tin để xác thực lại mật khẩu.</p>',
        'submit'  => 'Gửi',
    ],
    'reset'              => [
        'new_password'   => 'Mật khẩu mới',
        'repassword'     => 'Nhập lại mật khẩu',
        'email'          => 'Email',
        'title'          => 'Đổi mật khẩu',
        'update'         => 'Update',
        'wrong_token'    => 'This link is invalid or expired. Please try using reset form again.',
        'user_not_found' => 'This username is not exist.',
        'success'        => 'Reset password successfully!',
        'fail'           => 'Token is invalid, the reset password link has been expired!',
        'reset'          => [
            'title' => 'Email đổi mật khẩu',
        ],
        'send'           => [
            'success' => 'A email was sent to your email account. Please check and complete this action.',
            'fail'    => 'Can not send email in this time. Please try again later.',
        ],
        'new-password'   => 'Mật khẩu mới',
    ],
    'email'              => [
        'reminder' => [
            'title' => 'Email đổi mật khẩu',
        ],
    ],
    'repassword'         => 'Nhập lại mật khẩu',
    'failed'             => 'Không tìm thấy thông tin đăng nhập hợp lệ',
    'throttle'           => 'Vượt quá số lần đăng nhập cho phép. Vui lòng thử lại sau vài giây.',
    'not_member'         => 'Not a member yet?',
    'register_now'       => 'Đăng ký',
    'lost_your_password' => 'Bạn quên tài khoản?',
    'login_title'        => 'Đăng nhập tài khoản',
    'login_via_social'   => 'Đăng nhập bằng tài khoản xã hội',
    'back_to_login'      => 'Quay về màn hình đăng nhập',
];
