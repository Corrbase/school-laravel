@extends('layouts.admin')

@section('content')

    <div class="d-flex">
        <div class="w-100 p-4">
            <div class="d-flex justify-content-between align-items-center">

                <a href="/admin/teachers">Go back</a>
                <h2 class="fs-3 pb-2">Teacher -
                    <span class="text-muted">
                        {{$teacher->name}}
                        {{$teacher->sname}}
                    </span>
                </h2>
                    <img class="col-1" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" alt="">
            </div>
            <div class=" w-100 p-4">
                <div>
                    <div>
                        <a href="/admin/teacher/edit/{{ $teacher->id }}" class="p-2">
                            <i class="fa-solid fa-pen-to-square"></i><span class="p-2">Edit</span>
                        </a>
                    </div>
                    <ul class="list-group ">
                        <li class="list-group-item">
                            Age - {{$teacher->age}}
                        </li>
                        <li class="list-group-item">
                          Email - {{$teacher->email}}
                        </li>
                        <li class="list-group-item">
                         Gender - {{$teacher->gender}}
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="">
                    <h2 class="fs-3">
                        Students
                    </h2>
                    <table class="table">

                        <div class="mt-6 pb-3 pt-3 ">

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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teacher->students as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->sname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->age}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
