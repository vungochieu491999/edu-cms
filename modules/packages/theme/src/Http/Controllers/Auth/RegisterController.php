<?php


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    /*
        |--------------------------------------------------------------------------
        | Register Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles the registration of new users as well as their
        | validation and creation. By default this controller uses a trait to
        | provide this functionality without requiring any additional code.
        |
        */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.packages/public
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        body_class()->setBodyClass(config('core.base.class_name.body_register_class'));

        return view('core/backend::auth.register');
    }
}
