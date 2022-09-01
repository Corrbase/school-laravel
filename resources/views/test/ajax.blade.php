@extends('layouts.admin')

@section('style')
    <style>
        @-webkit-keyframes moving-gradient {0% {
            background-position: -250px 0;
        }
        100% {
            background-position: 250px 0;
        }
        }
        .table-s {
            width: 100%;
        }
        .table-s tr {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
        }
        .table-s tr td {
            height: 40px;
            vertical-align: middle;
            padding: 8px;
        }
        .table-s tr td span {
            display: block;
        }
        .table-s tr td.td-1 {
        }
        .table-s tr td.td-1 span {
            height: 20px;
        }
        .table-s tr td.td-2 {
        }
        .table-s tr td.td-2 span {
            background-color: rgba(0, 0, 0, .15);
            height: 40px;
        }
        .table-s tr td.td-3 {
        }
        .table-s tr td.td-3 span {
            height: 12px;
            background: linear-gradient(to right, #eee 20%, #ddd 50%, #eee 80%);
            background-size: 500px 100px;
            animation-name: moving-gradient;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }
        .table-s tr td.td-5 {

        }
        .table-s tr td.td-5 span {
            background-color: rgba(0, 0, 0, .15);
            width: 100%;
            height: 30px;
        }

    </style>

@endsection


@section('content')

    <div class="d-flex align-items-center">
        <input type="text" id="search" class="input-group-text m-2" onkeyup="search()" placeholder="search">
        <div>
            <select class="form-select" name="page_num" id="page_num">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
    </div>

    <div id="loader" class="d-none">
        <div>
            students:
        </div>
        <table class="table-s table">
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
            <tbody class="tbody">

            <tr class="tr">

                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
            </tr>
            <tr class="tr">

                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
            </tr>
            <tr class="tr">

                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
            </tr>
            <tr class="tr">

                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
            </tr>
            <tr class="tr">

                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
                <td class="td-3"><span></span></td>
            </tr>

            </tbody>
        </table>
    </div>
    <div id="table_data"></div>






@endsection

@section('script')

    <script>
        let pd_data   = {
            page: 1,
            search: '',
            page_num: 5
        };



        paginate(pd_data)


        $('#page_num').on('change', function() {
            pd_data.page_num = $(this).val();
            pd_data.page = 1;
            paginate(pd_data);
        });



        // let next = document.getElementsByClassName('page-next');

        var searchTimeout;
        function search() {
            console.log($('#search').val())
            window.clearTimeout(searchTimeout);
            searchTimeout = window.setTimeout(function(){
                pd_data.search = $('#search').val()
                pd_data.page = 1;
                paginate(pd_data);
            }, 500);
        }

        $('.mm-pagination-link').on('click', function (e) {
            console.log(
                $(this).data('page')
            )
        })

        function previous(){
            pd_data.page -= 1
            paginate(pd_data)
        }
        function next(){
            pd_data.page += 1
            paginate(pd_data)
        }
        function call(){
            $.ajax({
                url: "{{ route('testr') }}",
                type:"POST",
                data:{
                    page: page,
                    _token: "{{ csrf_token() }}"
                },
                success:function(response){
                    console.log(response);
                    if(response) {
                        $('.success').text(response.success);
                        $("#ajaxform")[0].reset();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>

@endsection
