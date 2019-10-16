@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добро пожаловать в Административную панель сайта</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
                
            </div>
            <div class="nav-admin">
                <div class="action">
                    <img  class="a" src="{{ url('img/icon/home.png') }}" alt="">
                    <a href="{{route('index')}}" class="btn btn-success">Перейти на сайт</a>
                </div>
            
                <div class="action">    
                    <img class="a" src="{{ url('img/icon/tour.png') }}" alt="" >
                    <a href="{{route('tours.index')}}" class="btn btn-success">Туры</a>
                </div>
                <div class="action">
                    <img class="a" src="{{ url('img/icon/country.png') }}" alt="" >
                    <a href="{{route('countries.index')}}" class="btn btn-success">Страны</a>
                </div>
                <div class="action">
                    <img class="a" src="{{ url('img/icon/curort.png') }}" alt="" >
                    <a href="{{route('curorts.index')}}" class="btn btn-success">Курорты</a>
                </div>
                <div class="action">
                    <img class="a" src="{{ url('img/icon/calendar.png') }}" alt="" >
                    <a href="{{route('departuredates.index')}}" class="btn btn-success">Даты отправки</a>
                </div>
                <div class="action">
                    <img class="a" src="{{ url('img/icon/type.png') }}" alt="" >
                    <a href="{{route('types.index')}}" class="btn btn-success">Типы туров</a>
                </div>
            </div>
@endsection
