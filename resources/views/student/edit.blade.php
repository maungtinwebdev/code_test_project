@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('/student/{id}')}}" method="put">
            @csrf
            <label>Name</label>
            <input type="text" name="name" value="{{$student->name}}" placeholder="Name" class="form-control"><br>

            <label>Father's Name</label>
            <input type="text" name="father_name" value="{{$student->father_name}}" placeholder="Father's Name" class="form-control"><br>

            <label>Grade</label>
            <input type="number" name="grade" value="{{$student->grade}}" placeholder="Grade" class="form-control"><br>

            <label>Phone</label>
            <input type="number" name="phone_number" value="{{$student->phone_number}}" placeholder="Phone Number" class="form-control"><br>

            <label>Address</label>
            <input type="text" name="address" value="{{$student->address}}" placeholder="Address" class="form-control"><br>

            <button type="submit" class="btn btn primary">UPDATE</button>
        </form>
    </div>
@endsection
