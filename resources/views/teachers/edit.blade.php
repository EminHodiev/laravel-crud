@extends('layouts.app')
@section('title')
    Изменения учителя
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-primary">
            {{session('message')}}
        </div>
    @endif
    <form action="{{route('teacher.update',$teacher)}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Напишите имя:</label>
                <input type="text" name="name" value="{{$teacher->name}}" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Напишите фамилию:</label>
            <input class="form-control" value=" {{$teacher->surname}}" type="text" name="surname">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите дату рождения:</label>
            <input class="form-control" type="text" value=" {{$teacher->birthday}}" name="birthday">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите специальность:</label>
            <input class="form-control" type="text" value=" {{$teacher->speciality}}" name="speciality">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите пол:</label>
            <input class="form-control" type="text" value=" {{$teacher->gender}}" name="gender">
        </div>
        <input type="submit" value="Update" class="btn btn-primary form-control">
    </form>

@endsection
