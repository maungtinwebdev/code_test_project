@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url("/student/create")}}" method="POST">
            @csrf
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control"><br>

            <label>Father's Name</label>
            <input type="text" name="father_name" placeholder="Father's Name" class="form-control"><br>

            <label>Grade</label>
            <input type="number" name="grade" placeholder="Grade" class="form-control"><br>

            <label>Phone</label>
            <input type="number" name="phone_number" placeholder="Phone Number" class="form-control"><br>

            <label>Address</label>
            <input type="text" name="address" placeholder="Address" class="form-control"><br>

            <button type="submit" class="btn btn primary">CREATE</button>
        </form>
    </div>
@endsection
