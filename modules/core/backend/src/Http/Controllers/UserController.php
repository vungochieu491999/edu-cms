<?php

namespace Edumad\Backend\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Edumad\Requests\StoreUserRequest;
use Edumad\Traits\ImageTrait;
use Illuminate\Http\Request;

class UserController extends BaseController
{

    use ImageTrait;

    public function __contruct(){}

    /**
     * Display all users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Throwable
     */
    public function getIndex()
    {
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.profile.index');
    }

    public function getProfile()
    {
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.profile.index');
    }

    public function create()
    {
        page_title()->setTitle(trans('core/backend::users.add'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.partials.add');
    }

    public function store(Request $request)
    {
    dump($request->all());
        $dataUploadImg = $this->storageImageUpload($request, 'avatar', 'users');
        dd($dataUploadImg);
        if (!empty($dataUploadImg)) {
            $data = $request->all();
            $data['slug'] = str_slug($request->name);
            $data['img_name'] = $dataUploadImg['file_name'];
            $data['img_path'] = $dataUploadImg['file_path'];
            Product::create($data);
            return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công');
        }
    }

    public function edit()
    {
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.partials.add');
    }

    public function update(StoreUserRequest $request)
    {
        $dataUploadImg = $this->storageImageUpload($request, 'img', 'user');
        if (!empty($dataUploadImg)) {
            $data = $request->all();
            $data['slug'] = str_slug($request->name);
            $data['img_name'] = $dataUploadImg['file_name'];
            $data['img_path'] = $dataUploadImg['file_path'];
            Product::create($data);
            return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công');
        }
    }

    public function delete()
    {
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.partials.add');
    }

    public function trashView(){}

    public function trashDelete(){}

    public function trashRestore(){}

    public function trashConfirmDelete(){}
}
