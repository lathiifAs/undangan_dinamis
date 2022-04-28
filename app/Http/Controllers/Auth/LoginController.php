<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Auth;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo;
    public function redirectTo()
    {
        // var_dump(Auth::user()->role);die;
        switch(Auth::user()->role){
            case 'admin':
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
            case 'rt':
                $this->redirectTo = '/rt';
                return $this->redirectTo;
                break;
            case 'bumdes':
                $this->redirectTo = '/bumdes';
                return $this->redirectTo;
                break;
            case 'bpd':
                $this->redirectTo = '/bpd';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }

        // return $next($request);
    }

    public function username()
    {
        return 'username';
    }

}
