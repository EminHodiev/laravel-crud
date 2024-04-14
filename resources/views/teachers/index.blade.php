@extends('layouts.app')
@section('title')
    <h3>Таблица учителей</h3>
@endsection

@section('content')
    @if(session('message'))
      <div class="alert alert-danger">
          {{session('message')}}
      </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>speciality</th>
            <th>gender</th>
            <th>birthday</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->surname}}</td>
                <td>{{$teacher->speciality}}</td>
                <td>{{$teacher->gender}}</td>
                <td>{{$teacher->birthday}}</td>
                <td>
                    <form action="{{route('teacher.destroy', $teacher->id)}}" method="post">
                        @csrf
                        @method('delete')
                    <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('teacher.edit', $teacher->id)}}" method="get">
                        @csrf
                        <input type="submit" value="update" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
