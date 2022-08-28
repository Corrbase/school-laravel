@extends('layouts.admin')

@section('content')

    <div class="w-50 p-2">
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
                <th scope="col">age</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teacher as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->sname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->age}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
    <div class="w-50 p-2">

    </div>

@endsection
