@extends('layouts.app')

@section('content')

  <div class="col-sm-8">
    <h4>
      {{ $user['name'] }}
      <a href="{{ route('users.index') }}" class="btn btn-primary links top-right">Back</a>
    </h4>

    <!--<div class="pull-right btn btn-primary links">
      <a href="{{ route('users.create') }}">Add</a>
    </div>-->

    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>E-mail</th>
          <th>Latitude</th>
          <th>Longitude</th>
          <th colspan="3">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>{{ $user->email }}</strong></td>
          <td>{{ $user->Latitude }}</td>
          <td>{{ $user->Longitude }}</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-sm-4">
  </div>

@endsection
