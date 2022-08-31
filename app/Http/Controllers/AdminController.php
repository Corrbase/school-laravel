<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    // views

    public function admin(Teacher $teacher){

        return view('admin/index', );
    }

    public function teachers()
    {

        return view('admin/chapter/teachers', [

                'teacher' => Teacher::latest()->simplePaginate(10, ['*'], 'teacher' ),

        ]);
    }

    public function students()
    {
        return view('admin/chapter/students', [
                'student' => Student::latest()->simplePaginate(10, ['*'], 'student' ),
        ]);
    }

    public function teacher(Teacher $teacher){
        return view('admin/hidden/teacher', [
            'teacher' => $teacher,
        ]);
    }

    public function teacher_edit(Teacher $teacher)
    {
        return view('admin/edit/teacher', [
            'teacher' => $teacher,
        ]);
    }

    public function teacher_students(Teacher $teacher)
    {

        return view('admin/hidden/students', [
            'teacher' => $teacher
        ]);
    }

    public function test()
    {
        return view('test.ajax');
    }

    public function request(Request $request)
    {
        if($request->ajax()) {
            $search = $_POST['search'];

            if (isset($_POST['page_num']))
            {
                $page_num =  $_POST['page_num'];
            }

                $data = Student::latest()->filter([$_POST['search']])->paginate($_POST['page_num']);

            if ($data['item'] == null){
                $_POST['page'] = $data->lastPage();
                $data = Student::latest()->filter([$_POST['search']])->paginate($_POST['page_num']);
            }
                return view('test.pagination', ['data' => $data])->render();
        }
    }


    //requests

    public function login_r(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);



        if(auth('admin')->attempt($formFields)) {
//            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function teacher_edit_r(Request $request, Teacher $teacher)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'sname' => ['required', 'min:3', 'max:50'],
            'email' => ['email'],
            'age' => ['numeric'],
            'gender' => ['required']
        ]);
        $teacher->update($data);

        return back()->with('message', 'Listing deleted successfully');
    }
}
