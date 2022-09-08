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

            </div>
        </div>
    </div>

@endsection
