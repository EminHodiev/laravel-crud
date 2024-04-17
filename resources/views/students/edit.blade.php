@extends('layouts.app')
@section('title')
    Изменение студента
@endsection

@section('content')
    <form action="{{route('student.update',$student)}}" method="post">
    @csrf
        @method('PUT')
    <label>Name</label>
    <input type="text" name="name" value="{{$student->name}}" class="form-control" id="">
    <label>Surname</label>
    <input type="text" name="surname" value="{{$student->surname}}" class="form-control" id="">
    <label>Adress</label>
    <input type="text" name="adress" value="{{$student->adress}}" class="form-control" id="">
        <input type="submit" value="Update" class="btn btn-primary form-control">
    </form>
@endsection
