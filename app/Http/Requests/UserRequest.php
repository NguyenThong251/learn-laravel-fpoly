<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Validation\Rules\Password;
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false; // mặc định là false phải chuyển thành true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'admin_email' => 'required|email',
            'admin_password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'admin_email.required' => 'Vui lòng nhập địa chỉ :attribute .',
            'admin_email.email' => 'Địa chỉ email không hợp lệ.',
            'admin_password.required' => 'Vui lòng nhập :attribute .',
            'admin_password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'admin_password.letters' => 'Mật khẩu phải chứa ít nhất một chữ cái.',
            'admin_password.mixedCase' => 'Mật khẩu phải chứa ít nhất một chữ hoa và một chữ thường.',
            'admin_password.numbers' => 'Mật khẩu phải chứa ít nhất một số.',
            'admin_password.symbols' => 'Mật khẩu phải chứa ít nhất một ký tự đặc biệt.',
            'admin_password.uncompromised' => 'Mật khẩu đã bị xâm phạm, vui lòng chọn mật khẩu khác.',
        ];
    }
    public function attributes(): array
    {
        return [
            'admin_email' => 'email',
            'admin_password' => 'mật khẩu',

        ];
    }
    // public function messages(): array
    // {
    //     return [
    //         'admin_email.required' => 'Vui lòng nhập địa chỉ :attribute .',
    //         'admin_email.email' => 'Địa chỉ email không hợp lệ.',
    //         'admin_password.required' => 'Vui lòng nhập :attribute .',
    //     ];
    // }

    // public function attributes(): array
    // {
    //     return [
    //         'admin_email' => 'email',
    //         'admin_password' => 'mật khẩu',
    //     ];
    // }
    
    protected function after(): array
{
    return [
        function (Validator $validator) {
            if ($validator -> errors() -> count() > 0) {
                $validator->errors()->add(
                            'msg',
                            'Đã có lỗi xảy ra vui lòng kiểm tra lại!'
                        );
                    }
        }
    ];
}
// phương thức tự động tạo ngày giờ
// protected function prepareForValidation(): void
// {
//     $this->merge([
//         // 'slug' => Str::slug($this->slug),
//         'create_at' => date('Y-m-d H:i:s')
//     ]);
// }
protected function failedAuthorization()
{
    throw new AuthorizationException('Bạn không có quyền truy cập');
}
}