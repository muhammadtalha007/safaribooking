@extends('layouts.landing-app')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .rate {
            /*float: right;*/
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }

    </style>

    <main class="main">

        <div class="container container--main" style="margin-top: 50px;margin-bottom: 50px">
            <div class="row">
                <div class="col col-12">
                    <div class="row content">
                        <h1 style="color: green">Thankyou for your review. Your Review published successfully. </h1>
                        <br>
                        <br>
                        <br>
                        <a href="{{url('')}}" style="margin-top: 40px">Go to home</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
