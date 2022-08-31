@extends('layouts.admin')

@section('style')
    <style>
        .lds-dual-ring {
            display: inline-block;
            width: 80px;
            height: 80px;
        }
        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 5% auto;
            border-radius: 50%;
            border: 6px solid #fff;
            border-color: #fff transparent #fff transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }


        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0,.8);
            z-index: 999;
            opacity: 1;
            transition: all 0.5s;
        }
    </style>

@endsection


@section('content')

    <div class="d-flex align-items-center">
        <input type="text" id="search" class="input-group-text m-2"  onkeyup="search()"  placeholder="search">
        <div>
            <select class="form-select" name="page_num" id="page_num">
                <option value="5" onclick="alert(111)">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
    </div>

    <div id="table_data"></div>

    <div id="loader" class="lds-dual-ring d-none overlay">hello</div>


@endsection

@section('script')

    <script>
        let pd_data   = {
            page: 1,
            search: $('#search').val(),
            page_num: 5
        };

        paginate(pd_data)


        $('#page_num').on('change', function() {
            pd_data.page_num = $(this).val();
            pd_data.page = 1;
            paginate(pd_data);
        });



        // let next = document.getElementsByClassName('page-next');

        function search(){
            pd_data.search = $('#search').val()
            pd_data.page = 1;
            var searchTimeout;
            window.clearTimeout(searchTimeout);
            searchTimeout = window.setTimeout(function(){
                paginate(pd_data);
            }, 500);

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
    </script>

@endsection
