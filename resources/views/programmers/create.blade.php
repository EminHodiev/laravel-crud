@extends('layouts.app')
@section('title')
    Доб.учителей
@endsection

@section('content')
    <form action="{{route('programmers.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">first_name:</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">last_name:</label>
            <input class="form-control" type="text" name="last_name">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">email:</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">phone:</label>
            <input class="form-control" type="number" name="phone">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">professional_title:</label>
            <input class="form-control" type="text" name="professional_title">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">experience:</label>
            <input class="form-control" type="text" name="experience">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">education:</label>
            <input class="form-control" type="text" name="education">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">skills:</label>
            <input class="form-control" type="text" name="skills">
        </div>
        <input type="submit" value="Download" class="btn btn-primary form-control">
    </form>

@endsection
