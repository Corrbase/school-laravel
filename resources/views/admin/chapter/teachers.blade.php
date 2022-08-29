@extends('layouts.admin')

@section('content')

    <div class="d-flex">
        <div class="w-100 p-4">
            <h2 class="text-danger fs-3 pb-2">Teacher</h2>
            <table class="table">

            <div class="mt-6 pb-3 pt-3 ">
                <div>
                    {{$teacher->links()}}
                </div>
                <div>
                    <a href=""></a>
                </div>

            </div>

                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">email</th>
                    <th scope="col">gender</th>
                    <th scope="col">age</th>
                    <th scope="col">profile</th>
                    <th scope="col">students</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teacher as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->sname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->age}}</td>
                        <td>
                            <a href="/admin/teacher/{{$item->id}}" class="link-danger">
                                <i class="fa-solid fa-user"></i><span class="p-2">Profile</span>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/teacher/students/{{$item->id}}" class="link-danger">
                                <i class="fa-solid fa-user"></i><span class="p-2">Students</span>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
