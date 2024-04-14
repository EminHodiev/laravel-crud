@extends('layouts.app')
@section('title')
    Доб.учителей
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-primary">
           {{session('message')}}
        </div>
    @endif
    <form action="{{route('teacher.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Напишите имя:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Напишите фамилию:</label>
            <input class="form-control" type="text" name="surname">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите дату рождения:</label>
            <input class="form-control" type="date" name="birthday">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите специальность:</label>
            <input class="form-control" type="text" name="speciality">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите пол:</label>
            <input class="form-control" type="text" name="gender">
        </div>
        <input type="submit" value="Download" class="btn btn-primary form-control">
    </form>

@endsection
