<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Encore\Admin\Facades\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Case_;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * @param  array  $data
     * @return \App\Models\User
     * @return \App\Models\Admin
     * 
     */
    protected function create(array $data)
    {
        User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => false,
        ]);
        return Admin::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => true,
        ]);
    }
}
