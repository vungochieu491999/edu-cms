<?php

namespace Edumad\Backend\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Edumad\Models\User;
use Edumad\Requests\UserRequest;
use Edumad\Traits\ImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

    public function getProfile($id)
    {
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        $user = User::find($id);

        return view('core/backend::users.profile.index',compact('user'));
    }

    public function create()
    {
        page_title()->setTitle(trans('core/backend::users.add'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.partials.add');
    }

    public function store(UserRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $password = !empty($data['password'])?$data['password']:env('DEFAULT_PASSWORD_USER','123456');
            $roleId   = !empty($data['role_id'])?$data['role_id']:env('DEFAULT_ROLE_ID',1);

            $dataUploadImg = $this->storageImageUpload($request, 'avatar', 'users');
            if (!empty($dataUploadImg)) {
                $data['avatar_name'] = $dataUploadImg['file_name'];
                $data['avatar_path'] = $dataUploadImg['file_path'];
            }
            $data['first_name'] = $request['first_name'];
            $data['last_name']  = $request['last_name'];
            $data['email']      = $request['email'];
            $data['password']   = Hash::make($password);
            $user = User::create($data);
            $user->roles()->attach($roleId);
            DB::commit();
            return redirect()->route('users.profile',$user->id)->with('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $e){
            DB::rollBack();
            $url_file = substr($data['avatar'], 1); // xoa dau / trong url
            if (File::exists($url_file)) {
                unlink($url_file);
            }
            Log::error('Message :' . $e->getMessage() . '--- Line: ' . $e->getLine());
        }
    }

    public function edit()
    {
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.partials.add');
    }

    public function update(UserRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $password = !empty($data['password'])?$data['password']:env('DEFAULT_PASSWORD_USER','123456');
            $roleId   = !empty($data['role_id'])?$data['role_id']:env('DEFAULT_ROLE_ID',1);

            $dataUploadImg = $this->storageImageUpload($request, 'avatar', 'users');
            if (!empty($dataUploadImg)) {
                $data['avatar_name'] = $dataUploadImg['file_name'];
                $data['avatar_path'] = $dataUploadImg['file_path'];
            }
            $data['first_name'] = $request['first_name'];
            $data['last_name']  = $request['last_name'];
            $data['email']      = $request['email'];
            $data['password']   = Hash::make($password);
            $user = User::create($data);
            $user->roles()->attach($roleId);
            DB::commit();
            return redirect()->route('users.profile',$user->id)->with('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $e){
            DB::rollBack();
            $url_file = substr($data['avatar'], 1); // xoa dau / trong url
            if (File::exists($url_file)) {
                unlink($url_file);
            }
            Log::error('Message :' . $e->getMessage() . '--- Line: ' . $e->getLine());
        }
    }

    public function delete($id)
    {
        try{
            DB::beginTransaction();
            $user = User::find($id)->forceDelete();
            DB::commit();
            return redirect()->route('users.profile',$user->id)->with('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $e){
            DB::rollBack();
            Log::error('Message :' . $e->getMessage() . '--- Line: ' . $e->getLine());
        }
    }

    public function trashView(){
        page_title()->setTitle(trans('core/backend::users.users'));
        body_class()->setBodyClass(config('core.base.class_name.body_add_user_class'));

        return view('core/backend::users.partials.trash_view');
    }

    public function softDelete($id){
        try{
            DB::beginTransaction();
            $user = User::find($id)->delete();
            DB::commit();
            return redirect()->route('users.profile',$user->id)->with('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $e){
            DB::rollBack();
            Log::error('Message :' . $e->getMessage() . '--- Line: ' . $e->getLine());
        }
    }

    public function trashRestore($id){
        try{
            DB::beginTransaction();
            $user = User::find($id)->restore();
            DB::commit();
            return redirect()->route('users.profile',$user->id)->with('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $e){
            DB::rollBack();
            Log::error('Message :' . $e->getMessage() . '--- Line: ' . $e->getLine());
        }
    }
}
