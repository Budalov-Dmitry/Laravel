@extends('layouts.admin')
@section('title')
    Список новостей
@endsection
@section('header')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Новости</h1>
            <a class="font-bold pl-2" href="{{ route('admin.news.create') }}">Добавить новость</a>
        </div>
@endsection
@section('content')
            @foreach($news as $newsItem)
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h2 class="font-bold uppercase text-gray-600">{{ $newsItem->title }}</h2>
                        <p class=" text-1xl">{{$newsItem->description}}</p>
                        <a style="float: right;" href="{{ route('admin.news.edit', ['news' => $newsItem->id]) }}">Редактировать</a> &nbsp;
                        <br>
                        <a  href="#" style="color:#b81717; float: right;">Удалить</a>
                    </div>
                </div>
            </div>
            @endforeach
@endsection
