<table class="table">

    <div>
        <div>
            Students:
        {{ $data->total() }}
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
        <th scope="col">delete</th>
        <th scope="col">students</th>
    </tr>
    </thead>
    <tbody >
    @foreach($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->sname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->age}}</td>
            <td>
                <a href="javascript:void(0)" class="link-danger" id="delete" data-type="{{ $item->id }}">
                    <i class="fa-solid fa-user"></i><span class="p-2">Delete</span>
                </a>
            </td>
            <td>
                <a href="/admin/teacher/students/{{$item->teacher_id}}" class="link-danger">
                    <i class="fa-solid fa-user"></i><span class="p-2">Students</span>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>


</table>

<div id="navigator">
    <div class="d-flex align-items-center justify-content-between w-25">
        <a type="button" href="javascript:void(0)" class="btn @if($data->currentPage() == 1) disabled @endif btn-primary" onclick="previous()">Prevoius</a>
        <div>
            <div class="">
                @if($data->currentPage() <= 3)

                    @if($data->currentPage() == 1)

                        {{ $data->currentPage() }}

                        @if($data->currentPage() == $data->lastPage())

                        @elseif($data->currentPage() + 1 == $data->lastPage())
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>

                        @elseif($data->currentPage() + 2 == $data->lastPage())

                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +2 }}" class="mm-pagination-link">{{ $data->currentPage() +2 }}</a>
                        @elseif(!(4 == $data->lastPage()))

                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +2 }}" class="mm-pagination-link">{{ $data->currentPage() +2 }}</a>
                            ...
                            <a href="javascript:void(0)" data-page="{{ $data->lastPage() }}" class="mm-pagination-link">{{ $data->lastPage() }}</a>

                        @else
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +2 }}" class="mm-pagination-link">{{ $data->currentPage() +2 }}</a>
                        @endif
                    @endif
                    @if($data->currentPage() == 2)
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() -1 }}" class="mm-pagination-link">{{ $data->currentPage() -1 }}</a>

                        {{ $data->currentPage() }}

                        @if($data->currentPage() == $data->lastPage())

                        @elseif($data->currentPage() + 1 == $data->lastPage())
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                        @elseif($data->currentPage() + 2 == $data->lastPage())
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                        @elseif(4 == $data->lastPage())
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +2 }}" class="mm-pagination-link">{{ $data->currentPage() +2 }}</a>
                        @else
                            <a href="javascript:void(0)" data-page={{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            ...
                            <a href="javascript:void(0)" data-page="{{ $data->lastPage() }}" class="mm-pagination-link">{{ $data->lastPage() }}</a>
                        @endif
                    @endif
                    @if($data->currentPage() == 3)
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() -2 }}" class="mm-pagination-link">{{ $data->currentPage() -2 }}</a>
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() -1 }}" class="mm-pagination-link">{{ $data->currentPage() -1 }}</a>

                        {{ $data->currentPage() }}

                        @if($data->currentPage() == $data->lastPage())

                        @elseif($data->currentPage() + 1 == $data->lastPage())
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                        @elseif($data->currentPage() + 2 == $data->lastPage())
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +2 }}" class="mm-pagination-link">{{ $data->currentPage() +2 }}</a>
                        @else
                            <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1 }}" class="mm-pagination-link">{{ $data->currentPage() +1 }}</a>
                            ...
                            <a href="javascript:void(0)" data-page="{{ $data->lastPage() }}" class="mm-pagination-link">{{ $data->lastPage() }}</a>
                        @endif
                    @endif
                @endif
            </div>
            <div>
                @if($data->currentPage() >= 4)
                    <a href="javascript:void(0)" data-page="{{ 1 }}" class="mm-pagination-link"data-page="{{ 1 }}" class="mm-pagination-link">{{ 1 }}</a>
                    ...
                    @if($data->currentPage() == $data->lastPage())
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() -1 }}" class="mm-pagination-link">{{ $data->currentPage() -1 }}</a>
                        {{ $data->currentPage() }}

                    @elseif($data->currentPage() == $data->lastPage() - 1)
                        <a href="javascript:void(0)" data-page="{{ $data->lastPage() -2}}" class="mm-pagination-link">{{ $data->lastPage() -2}}</a>
                        {{$data->currentPage()}}
                        <a href="javascript:void(0)" data-page="{{ $data->lastPage() }}" class="mm-pagination-link">{{ $data->lastPage() }}</a>
                    @elseif($data->currentPage() == $data->lastPage() - 2)
                        {{$data->currentPage()}}
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1}}" class="mm-pagination-link">{{ $data->currentPage() +1}}</a>
                        <a href="javascript:void(0)" data-page="{{ $data->lastPage() }}" class="mm-pagination-link">{{ $data->lastPage() }}</a>
                    @elseif($data->currentPage() <= $data->lastPage() - 3)
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() -1}}" class="mm-pagination-link">{{ $data->currentPage() -1}}</a>
                        {{$data->currentPage()}}
                        <a href="javascript:void(0)" data-page="{{ $data->currentPage() +1}}" class="mm-pagination-link">{{ $data->currentPage() +1}}</a>
                        ...
                        <a href="javascript:void(0)" data-page="{{ $data->lastPage() }}" class="mm-pagination-link">{{ $data->lastPage() }}</a>
                    @endif
                @endif
            </div>
        </div>

        <a type="button" href="javascript:void(0)" class="btn @if($data->lastPage() == $data->currentPage()) disabled @endif btn-primary" onclick="next()">Next</a>

    </div>
</div>


