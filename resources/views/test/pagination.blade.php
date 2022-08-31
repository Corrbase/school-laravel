<table class="table">

    <div>
        <a href="">
            {{ $data->currentPage() }}
        </a>



        @if($data->currentPage() !== $data->lastPage())
            @if($data->currentPage() +1 !== $data->lastPage())
                <a href="">
                    {{ $data->currentPage() +1 }}
                </a>
                ...
            @endif
        <a href="">
            {{ $data->lastPage() }}
        </a>
        @endif

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
