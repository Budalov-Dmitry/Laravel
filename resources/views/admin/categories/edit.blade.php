@extends('layouts.admin')
@section('title') Редактировать запись @endsection
@section('header')
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Редактировать запись</h1>
            </div>
        </div>
@endsection
@section('content')
    <div style="background-color: white" class="p-6">
        <form method="post" action="{{ route('admin.categories.update', ['category' => $category]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Наименование</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
                @error('title') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description">{!! $category->description !!}</textarea>
                @error('description') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success" style="float: right;">Сохранить</button>
        </form>
    </div>
@endsection
