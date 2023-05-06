@extends('layouts.app')

@section('content')
<div class="container">

{!! Form::model($students,['route' => ['students.update',$students],'method' => 'put']) !!}
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">IDno</label>
  {!! Form::text('IDno', null, ['class' => $errors->has('IDno') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('IDno') 
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Age</label>
  {!! Form::text('age', null, ['class' => $errors->has('age') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('age')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

<div class="mb-3">
    {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
  </div>

{!! Form::close() !!}

</div>
@endsection