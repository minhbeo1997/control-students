<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreStudent;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
use App\Models\ClassStudent;
use Illuminate\Mail\Message;
use Illuminate\Support\MessageBag;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('admin.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info()
    {
        {
            return view('admin/info_member');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateInfo()
    {
        {
            return view('update_info_member');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateScore()
    {
        {
            return view('admin.update_score');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        {
            return view('admin.login_admin');
        }
    }

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        return $this->middleware('guest');
    }

    /**
     * @return mixed
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * @param LoginPost $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginPost $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('admin/home');
        } else {
            return redirect()->back()->withErrors(['errorlogin' => trans('customer.error.login')]);
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect(route('login_Admin'));
    }

    /**
     * @param StoreStudent $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Admin $request)
    {
        /** @var TYPE_NAME $user */
        $user = Admin::create(request(['name', 'email', 'password']));

        return redirect()->to('welcome');
    }
    public function indexClass(request $request){
        $ClassStudents = ClassStudent::all();
        return view('admin.update_class', ['ClassStudents' => $ClassStudents]);
    }
    public function updateClass(Request $request, $id){
        $classSubject = ClassStudent::findOrFail($id);
        $classSubject->code_class = $request->code_class;
        $classSubject->name_class = $request->name_class;
        $classSubject->code_subject = $request->code_subject;
        $classSubject->code_teacher = $request->code_teacher;
        $classSubject->save();
        return redirect()->back();
    }
    public function storeClass(Request $request)
    {
        $classSubject = new ClassStudent();
        $classSubject->code_class = $request->code_class;
        $classSubject->name_class = $request->name_class;
        $classSubject->code_subject = $request->code_subject;
        $classSubject->code_teacher = $request->code_teacher;
        $classSubject->save();
        return redirect()->back();
    }
}
