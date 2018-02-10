@extends('layouts.app')

@section('content')

  <div class="col-sm-8">
    <h4>
      Add a new user to the database.
      <a href="{{ route('users.index') }}" class="btn btn-primary links top-right">Back</a>
    </h4>

    <!--<div class="pull-right btn btn-primary links">
      <a href="{{ route('users.create') }}">Add</a>
    </div>-->

    @include('Users.fragment.error')

    {!! Form::open(['route' => 'users.store']) !!}

      @include('Users.fragment.form')

    {!! Form::close() !!}
  </div>
  <div class="col-sm-4">
  </div>

@endsection
