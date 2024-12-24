@extends('layout')
@section('menu')
<div>
<div class="card">
  @foreach($student_data as $each)
  <a href="/student/{{$each->name}}"><h5 class="card-header">Student Details</h5></a>
  <div class="card-body">
        <h5 class="card-title">{{$each->name}}</h5>
        <p class="card-text">{{$each->personal_details}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  @endforeach
  </div>
</div>
@endsection 

