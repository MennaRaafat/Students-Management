@extends('layouts.app')

@section('content')
<div class="container">
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<table class="table border mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Track</th>
      <th scope="col">IDno</th>
      <th scope="col">Age</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

@foreach($students as $students)

<tbody>
    <tr>
      <th scope="row">{{$students->id}}</th>
      <td>{{$students->name}}</td>
      <td>{{$students->track->name}}</td>
      <td>{{$students->IDno}}</td>
      <td>{{$students->age}}</td>
      <td><a class="btn btn-success" href="{{ route('students.edit', $students) }}">Update</a></td>
      <td>
        {!! Form::open(['route' => ['students.delete',$students],'method' => 'delete']) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-danger']);!!}
        {!! Form::close() !!}

<!-- <form action="{{ route('students.delete', $students) }}" method="post">
    @method('delete')
    @csrf
<button type="submit" class="btn btn-danger">delete</button> -->
</form>

    </td>
    </tr>
</tbody>

@endforeach
</table>
</div>
@endsection
