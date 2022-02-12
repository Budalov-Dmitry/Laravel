@extends('layouts.main')
@section('content')
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Букв.код</th>
        <th>Валюта</th>
        <th>Единиц</th>
        <th>Курс</th>
        <th>Изменение курса</th>
    </tr>
    </thead>
    <tbody>
    @forelse($data->Valute as $Valute)
        <tr>
            <td>{{ $Valute->CharCode }}</td>
            <td>{{$Valute->Name}}</td>
            <td>{{$Valute->Nominal}}</td>
            <td>{{$Valute->Value}}</td>
            <td>{{ $Valute->changes }}</td>
            <td>

            </td>
        </tr>
    @empty
        <tr><td colspan="6">Записей нет</td> </tr>
    @endforelse
    </tbody>
</table>
@endsection
