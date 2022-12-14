@extends('layouts.admin')

@section('content')

    <div class="d-flex">
        <div class="w-100 p-4">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/admin/teacher/{{ $teacher->id }}">Go back</a>
                <h2 class="fs-3 pb-2">Teacher -
                    <span class="text-muted">
                        {{$teacher->name}}
                        {{$teacher->sname}}
                    </span>
                </h2>
                <img class="col-1" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" alt="">
            </div>
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
