@if(Session::has('role'))
@extends('layouts.dashboard_nav')
    @section('content')

        <style>
            a{
                color: white;
                text-decoration: none;
            }

            .card{
                padding: 50px;
                margin: 2%;
                border-radius: 3%;
                background-color: rgba(26, 11, 77, 0.76);
                color: white;
            }
            a.card:hover{
                padding: 5%;
                color: white;
                text-decoration: none;
                text-align: center;

            }
            .col-md-4{
                text-align: center;
            }
            .col-md-12{
                margin-bottom: 100px;
            }
        </style>
        @if(Session::get('role') == 'admin')
        <div class="justify-content-center m-auto">
            <div class="row col-md-12">
                @if (Session::has('message'))
                <div class="alert alert-success">
                    <span>
                        {{Session::get('message')}}
                    </span>
                    {{Session::forget('message')}}
                </div>
            @endif
                <div class="row cards" style="margin-top: 100px">
                    <a class="card col-md-2" href="/viewschools">
                        Schools
                        <h1>{{$schools}}</h1>
                    </a>
                    <a class="card col-md-3" href="/viewall">
                        Missing Items
                        <h1>{{$items}}</h1>
                    </a>
                    <a class="card col-md-3" href="/viewadmins">
                        Admins
                        <h1>{{$admins}}</h1>
                    </a>

                    <a class="card col-md-2" href="/viewmessages">
                        Messages
                        <h1>{{$messages}}</h1>
                    </a>
                </div>
            </div>

        </div>
        @else
        <div class="justify-content-center ">
            <div class="row col-md-12 m-auto">
                <div class="row cards" style="margin-top: 100px">
                    <a class="card col-md-3" href="/viewschools">
                        Schools
                        <h1>{{$schools}}</h1>
                    </a>
                    <a class="card col-md-4" href="/viewall">
                        Missing Items
                        <h1>{{$items}}</h1>
                    </a>
                    <a class="card col-md-3" href="/viewadmins">
                        Admins
                        <h1>{{$admins}}</h1>
                    </a>

                </div>
            </div>

        </div>
        @endif
    @endsection('content')

    @else

        @section('content')
        <style>
            .card{
                padding: 50px;
                margin: 2%;
                background-color: rgba(26, 11, 77, 0.76);
                color: white;
            }
            .card:hover{
                padding: 6%;

            }
            .col-md-4{
                text-align: center;
            }
        </style>
        <div class="justify-content-center">
            <div class="row col-md-12 m-auto">
                <div class="row cards" style="margin-top: 100px">
                    <div class="card col-md-8 m-auto" style="background-color: white">
                        <h1 style="color: red; text-align: center">FOBIDDEN <br> Access Denied</h1>
                    </div>
                </div>
            </div>

        </div>
        @endif

{{-- for schools --}}


{{-- @endsection --}}