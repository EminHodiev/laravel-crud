@extends('layouts.app')
@section('title')
    Изменения программиста
@endsection

@section('content')
    <form action="{{route('programmers.update',$programmer)}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">first_name:</label>
                <input type="text" name="name" value="{{$programmer->first_name}}" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">last_name:</label>
            <input class="form-control" value=" {{$programmer->last_name}}" type="text" name="surname">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">email:</label>
            <input class="form-control" type="text" value=" {{$programmer->email}}" name="birthday">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">phone:</label>
            <input class="form-control" type="text" value=" {{$programmer->phone}}" name="speciality">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">professional_title:</label>
            <input class="form-control" type="text" value=" {{$programmer->professional_title}}" name="gender">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">experience:</label>
            <input class="form-control" type="text" value=" {{$programmer->experience}}" name="gender">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">education:</label>
            <input class="form-control" type="text" value=" {{$programmer->education}}" name="gender">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">skills:</label>
            <input class="form-control" type="text" value=" {{$programmer->skills}}" name="gender">
        </div>
        <input type="submit" value="Update" class="btn btn-primary form-control">
    </form>

@endsection
