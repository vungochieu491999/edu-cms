<?php

return [
    'accepted' => 'Trường :attribute phải được chấp nhận.',
    'active_url' => 'Trường :attribute không phải là một URL hợp lệ.',
    'after' => 'Trường :attribute phải là một ngày sau ngày :date.',
    'after_or_equal' => 'Trường :attribute phải là ngày lớn hơn hoặc bằng :date.',
    'alpha' => 'Trường :attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash' => 'Trường :attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num' => 'Trường :attribute chỉ có thể chứa chữ cái và số.',
    'array' => 'Kiểu dữ liệu của trường :attribute phải là dạng mảng.',
    'before' => 'Trường :attribute phải là một ngày trước ngày :date.',
    'before_or_equal' => 'Trường :attribute phải là ngày nhỏ hơn hoặc bằng :date.',
    'between' => [
        'numeric' => 'Trường :attribute phải nằm trong khoảng :min - :max.',
        'file' => 'Dung lượng tập tin trong trường :attribute phải từ :min - :max kB.',
        'string' => 'Trường :attribute phải từ :min - :max ký tự.',
        'array' => 'Trường :attribute phải có từ :min - :max phần tử.',
    ],
    'boolean' => 'Trường :attribute phải là đúng hoặc sai.',
    'confirmed' => 'Giá trị xác nhận trong trường :attribute không khớp.',
    'date' => 'Trường :attribute không phải là định dạng của ngày tháng.',
    'date_equals' => 'Trường :attribute phải là định dạng ngày và bằng :date.',
    'date_format' => 'Trường :attribute không giống với định dạng :format.',
    'different' => 'Trường :attribute và :other phải khác nhau.',
    'digits' => 'Độ dài của trường :attribute phải gồm :digits chữ số.',
    'digits_between' => 'Độ dài của trường :attribute phải nằm trong khoảng :min đến :max chữ số.',
    'email' => 'Trường :attribute phải là một địa chỉ email hợp lệ.',
    'exists' => 'Trường selected :attribute is invalid.',
    'file' => 'Trường :attribute must be a file.',
    'filled' => 'Trường :attribute field must have a value.',
    'gt' => [
        'numeric' => 'Trường :attribute must be greater than :value.',
        'file' => 'Trường :attribute must be greater than :value kilobytes.',
        'string' => 'Trường :attribute must be greater than :value characters.',
        'array' => 'Trường :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Trường :attribute must be greater than or equal :value.',
        'file' => 'Trường :attribute must be greater than or equal :value kilobytes.',
        'string' => 'Trường :attribute must be greater than or equal :value characters.',
        'array' => 'Trường :attribute must have :value items or more.',
    ],
    'image' => 'Trường :attribute must be an image.',
    'in' => 'Trường selected :attribute is invalid.',
    'in_array' => 'Trường :attribute field does not exist in :other.',
    'integer' => 'Trường :attribute must be an integer.',
    'ip' => 'Trường :attribute must be a valid IP address.',
    'ipv4' => 'Trường :attribute must be a valid IPv4 address.',
    'ipv6' => 'Trường :attribute must be a valid IPv6 address.',
    'json' => 'Trường :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'Trường :attribute must be less than :value.',
        'file' => 'Trường :attribute must be less than :value kilobytes.',
        'string' => 'Trường :attribute must be less than :value characters.',
        'array' => 'Trường :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Trường :attribute must be less than or equal :value.',
        'file' => 'Trường :attribute must be less than or equal :value kilobytes.',
        'string' => 'Trường :attribute must be less than or equal :value characters.',
        'array' => 'Trường :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Trường :attribute must not be greater than :max.',
        'file' => 'Trường :attribute must not be greater than :max kilobytes.',
        'string' => 'Trường :attribute must not be greater than :max characters.',
        'array' => 'Trường :attribute must not have more than :max items.',
    ],
    'mimes' => 'Trường :attribute must be a file of type: :values.',
    'mimetypes' => 'Trường :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Trường :attribute must be at least :min.',
        'file' => 'Trường :attribute must be at least :min kilobytes.',
        'string' => 'Trường :attribute must be at least :min characters.',
        'array' => 'Trường :attribute must have at least :min items.',
    ],
    'multiple_of' => 'Trường :attribute must be a multiple of :value.',
    'not_in' => 'Trường selected :attribute is invalid.',
    'not_regex' => 'Trường :attribute format is invalid.',
    'numeric' => 'Trường :attribute phải là sô.',
    'present' => 'Trường :attribute field must be present.',
    'regex' => 'Trường :attribute format is invalid.',
    'required' => 'Trường :attribute không được để trống.',
    'required_if' => 'Trường :attribute field is required when :other is :value.',
    'required_unless' => 'Trường :attribute field is required unless :other is in :values.',
    'required_with' => 'Trường :attribute field is required when :values is present.',
    'required_with_all' => 'Trường :attribute field is required when :values are present.',
    'required_without' => 'Trường :attribute field is required when :values is not present.',
    'required_without_all' => 'Trường :attribute field is required when none of :values are present.',
    'prohibited' => 'Trường :attribute field is prohibited.',
    'prohibited_if' => 'Trường :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'Trường :attribute field is prohibited unless :other is in :values.',
    'same' => 'Trường :attribute và :other không trùng khớp.',
    'size' => [
        'numeric' => 'Trường :attribute must be :size.',
        'file' => 'Trường :attribute must be :size kilobytes.',
        'string' => 'Trường :attribute must be :size characters.',
        'array' => 'Trường :attribute must contain :size items.',
    ],
    'starts_with' => 'Trường :attribute must start with one of the following: :values.',
    'string' => 'Trường :attribute must be a string.',
    'timezone' => 'Trường :attribute must be a valid zone.',
    'unique' => 'Dữ liệu của :attribute đã tồn tại, vui lòng nhập dữ liệu khác.',
    'uploaded' => 'Trường :attribute failed to upload.',
    'url' => 'Trường :attribute format is invalid.',
    'uuid' => 'Trường :attribute must be a valid UUID.',

    'custom' => [
        'email' => [
            'email' => 'Địa chỉ email không hợp lệ',
            'required' => 'Email không được để trống!',
            'unique' => 'Email đã được sử dụng, vui lòng chọn email khác!',
        ],
        'password' =>
            [
                'min' => 'Mật khẩu phải ít nhất :min kí tự.',
                'required' => 'Mật khẩu không được để trống!',
            ],
        'repassword' =>
            [
                'same' => 'Mật khẩu và xác nhận mật khẩu không trùng khớp',
            ],
        'username' =>
            [
                'min' => 'Tên phải ít nhất 6 kí tự',
                'required' => 'Tên đăng nhập không được để trống!',
                'unique' => 'Tên này đã được sử dụng, vui lòng chọn tên khác!',
            ],
    ],


    'attributes' => [],

];
