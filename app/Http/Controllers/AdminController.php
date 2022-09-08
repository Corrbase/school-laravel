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

    // testing

    public function search_teacher(Request $request)
    {

        $teachers = Teacher::where(function ($query) {
            $query->where('name', 'like', '%' . request()->term . '%');
        })->get();

        $result = [];
        foreach ($teachers as $category) {

            $data = [
                'id' => $category->id,
                'text' => $category->name,
            ];
            array_push($result, $data);

        }

        return $result;
        }


    // views

    public function admin(Teacher $teacher){

        return view('admin.index', );
    }

    public function teachers()
    {

        return view('admin.teacher.teachers', [

                'teacher' => Teacher::latest()->simplePaginate(10, ['*'], 'teacher' ),
s
        ]);
    }

    public function students()
    {
        return view('admin.students.students');
    }

    public function teacher(Teacher $teacher){
        return view('admin.teacher.teacher', [
            'teacher' => $teacher,
        ]);
    }

    public function teacher_edit(Teacher $teacher)
    {
        return view('admin.edit.teacher', [
            'teacher' => $teacher,
        ]);
    }

    public function teacher_students(Teacher $teacher)
    {

        return view('admin.students.teacher_students', [
            'teacher' => $teacher
        ]);
    }


    public function students_r(Request $request)
    {
        if($request->ajax()) {
            $filters = [
                'search' => $request->get('search'),
                'class_num' => $request->get('class_num')
            ];

//                dd(Student::latest()->filter($filters));
                $data = Student::latest()->search([$_POST['search']])->class_teacher([$_POST['class_teacher']])->class_num([$_POST['class_num']])->paginate($_POST['page_num']);

            if ($data['item'] == null){
                $_POST['page'] = $data->lastPage();
                $data = Student::latest()->search([$_POST['search']])->class_teacher([$_POST['class_teacher']])->class_num([$_POST['class_num']])->paginate($_POST['page_num']);
            }
                return view('admin.students.pagination', ['data' => $data])->render();
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

    public function studentDelete(Request $request)
    {
        $student = Student::find($request->get('student_id'));
        if ($student) {
            $student->delete();

            return response()->json([
                'success' => true,
                'message' => "Successfully deleted.",
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => "Student doesn't exist!",
            ]);
        }
    }
}
