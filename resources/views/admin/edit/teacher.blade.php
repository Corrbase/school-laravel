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
            <div class=" w-100 p-4">
                <form action="/admin/r/edit/{{$teacher->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2 class="fs-4">Edit <span class="fw-bold">{{$teacher->name}}</span>'s account</h2>


                    <div class="form-outline mb-4">
                        <label class="form-label" for="name"><span class="text-muted">(min symbols: 3)</span></label>
                        <input  value="{{$teacher->name}}" name="name" type="text" id="name" class="form-control form-control-lg" />

                        @error('title')
                        <p class="text-xs mt-1" style="color: red">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="sname"><span class="text-muted">LastName (min symbols: 3)</span></label>
                        <input  value="{{$teacher->sname}}" name="sname" type="text" id="sname" class="form-control form-control-lg" />

                        @error('sname')
                        <p class="text-xs mt-1" style="color: red">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="email"><span class="text-muted">(min symbols: 3)</span></label>
                        <input  value="{{$teacher->email}}" name="email" type="text" id="email" class="form-control form-control-lg" />

                        @error('email')
                        <p class="text-xs mt-1" style="color: red">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="age"><span class="text-muted">age(min symbols: 3)</span></label>
                        <input  value="{{$teacher->age}}" name="age" type="number" min="18" max="80" id="age" class="form-control form-control-lg" />

                        @error('age')
                        <p class="text-xs mt-1" style="color: red">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="gender"><span class="text-muted">gender(min symbols: 3)</span></label>
                        <select id="cars" class="form-select" name="gender"  >
                            <option value="male">male</option>
                            <option value="female">female</option>

                        </select>
                        @error('gender')
                        <p class="text-xs mt-1" style="color: red">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <button class="btn btn-outline-danger " type="submit">
                        Edit
                    </button>





                </form>
            </div>
        </div>
    </div>

@endsection
