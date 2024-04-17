@extends('layouts.app')
@section('title')
    Доб.студента
@endsection

@section('content')
    <form action="{{route('student.store')}}" method="post">
        @csrf

        <label>Name</label>
        <input type="text" name="name" class="form-control" id="">
        <label>Surname</label>
        <input type="text" name="surname" class="form-control" id="">
        <label>Adress</label>
        <input type="text" name="adress" class="form-control" id="">
        <input type="submit" value="Download" class="btn btn-primary form-control">
    </form>
@endsection
