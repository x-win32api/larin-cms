@extends('layouts.base')
@section('title',  $title)
{{--
titile суда передаем из контроллера
ctrl + / - автосоздание комментария
--}}
@section('content')

@include('shared.advantages')
@include('shared.uslugi')
@include('shared.price')
@include('shared.comanda')
@include('shared.partners')
@include('shared.ask')

@endsection
