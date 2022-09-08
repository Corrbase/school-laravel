@extends('layouts.admin')

@section('style')

    <style>

        @-webkit-keyframes moving-gradient {
            0% {
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

    @include('admin.includes.students.create-students')
    @include('admin.includes.students.paginate-navbar')
    @include('admin.includes.students.paginate-loader')

    <div id="table_data"></div>

@endsection

@section('script')

    <script src="{{ asset('js/admin/students/students.js') }}">

    </script>

@endsection
