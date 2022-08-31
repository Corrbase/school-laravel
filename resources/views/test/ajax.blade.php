@extends('layouts.admin')

@section('content')

    <form action="/testr" id="register_form">
        <input class='formVal' type="text" name="first_name" placeholder="First Name">
        <input class='formVal' type="text" name="last_name" placeholder="LastName">
        <input type="submit" value="submit_now" onclick="call(); return false;">
    </form>

    <input type="text" id="search" onkeyup="search()"  placeholder="search">
    <div class="mt-6 pb-3 pt-3 ">
        <div>
            <div>
                <a href="javascript:void(0)" onclick="previous()">Prevoius</a>
                <a href="javascript:void(0)" onclick="next()">Next</a>
            </div>
            <div>
                <select name="page_num" id="page_num">
                    <option value="5" onclick="alert(111)">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
            </div>

        </div>
        <div>
            <a href=""></a>
        </div>

    </div>
    <div id="table_data">
        @include('test.pagination')
    </div>

    <div id="lala"></div>

@endsection

@section('script')

    <script>
        let pd_data   = {
            page: 1,
            search: $('#search').val(),
            page_num: 5
        };
        $('#page_num').on('change', function() {
            pd_data.page_num = $(this).val();
            pd_data.page = 1;
            paginate(pd_data);
        });



        // let next = document.getElementsByClassName('page-next');

        function search(){
            pd_data.search = $('#search').val()
            pd_data.page = 1;
            paginate(pd_data)
        }
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

        {{--function myFunction()--}}
        {{--{--}}


        {{--    var elements = document.getElementsByClassName("formVal");--}}
        {{--    var formData = new FormData();--}}
        {{--    for(var i=0; i<elements.length; i++)--}}
        {{--    {--}}
        {{--        formData.append(elements[i].name, elements[i].value);--}}
        {{--    }--}}
        {{--    formData.append('_token', "{{ csrf_token() }}");--}}
        {{--    var xmlHttp = new XMLHttpRequest();--}}
        {{--    xmlHttp.onreadystatechange = function()--}}
        {{--    {--}}
        {{--        if(xmlHttp.readyState == 4 && xmlHttp.status == 200)--}}
        {{--        {--}}
        {{--                alert(xmlHttp.responseText);--}}
        {{--        }--}}
        {{--    }--}}
        {{--    xmlHttp.open("post", "/testr");--}}
        {{--    xmlHttp.send(formData);--}}
        {{--}--}}
    </script>

@endsection
