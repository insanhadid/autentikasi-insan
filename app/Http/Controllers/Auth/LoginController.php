<?php


namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'dosen')
            {
                return redirect()->route('dosenHome');
            }
            else if (auth()->user()->type == 'superadmin')
            {
                return redirect()->route('superAdminHome');
            }
            else if (auth()->user()->type == 'admin')
            {
                return redirect()->route('adminHome');
            }
            else if (auth()->user()->type == 'tendik')
            {
                return redirect()->route('tendikHome');
            }
            else if (auth()->user()->type == 'akademik')
            {
                return redirect()->route('akademikHome');
            }
            else if (auth()->user()->type == 'keuangan')
            {
                return redirect()->route('keuanganHome');
            }
            else if (auth()->user()->type == 'direktur')
            {
                return redirect()->route('direkturHome');
            }
            else if (auth()->user()->type == 'wakil1')
            {
                return redirect()->route('wakil1Home');
            }
            else if (auth()->user()->type == 'wakil2')
            {
                return redirect()->route('wakil2Home');
            }
            else if (auth()->user()->type == 'wakil3')
            {
                return redirect()->route('wakil3Home');
            }
            else if (auth()->user()->type == 'lppm')
            {
                return redirect()->route('lppmHome');
            }
            else if (auth()->user()->type == 'sdm')
            {
                return redirect()->route('sdmHome');
            }
            else
            {
                return redirect()->route('home');
            }
            }
            else
            {
                return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
            }
    }
}
