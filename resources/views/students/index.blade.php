@extends('layouts.app')
@section('title')
    Таблица студентов
@endsection

@section('content')
    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>surname</th>
            <th>adress</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->adress}}</td>
            <td>
                <form action="{{route('student.destroy',$student->id )}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>
            </td>
            <td>
                <form action="{{route('student.edit',$student->id )}}" method="get">
                    @csrf
                    <input type="submit" value="edit" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
