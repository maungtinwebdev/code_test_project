@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Student Table</h1>
        <div class="row">
            <div class="col-7">
                <a href="{{url('/student/add')}}" class="btn btn-primary">+ Add Student Record</a>
            </div>
            <div class="col-5">
                <form action="/posts/search" method="GET">
                    @csrf
                    <input type="text" name="query" placeholder="Search for students..." class="input-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
        </div>
        </div>
        <h2>Numbers of Stundent =>{{count($students)}}</h2>
        {{-- <a href="{{url("/student/add")}}" class="btn btn-primary">+ Add Student Record</a> --}}

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Father' Name</th>
                    <th>Grade</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)

                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->father_name}}</td>
                    <td>{{$student->grade}}</td>
                    <td>{{$student->phone_number}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <a href="{{url("/student/$student->id")}}" class="btn btn-warning ">Edit</a>
                        <a href="{{url("/student/delete/$student->id")}}" class="btn btn-danger">Del</a>
                    </td>

                </tr>

                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
