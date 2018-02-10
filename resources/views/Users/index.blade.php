@extends('layouts.app')

@section('content')

  <div class="col-sm-8">
    <h8>
      CRUD panel for database management.
      <a href="{{ route('users.create') }}" class="btn btn-primary top-right">Add</a>
    </h8>

    <!--<div class="pull-right btn btn-primary links">
      <a href="{{ route('users.create') }}">Add</a>
    </div>-->

    @include('Users.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>E-mail</th>
          <th>Name</th>
          <th>Latitude</th>
          <th>Longitude</th>
          <th colspan="3">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td><strong>{{ $user->email }}</strong></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->Latitude }}</td>
            <td>{{ $user->Longitude }}</td>
              <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary links" style="color:#FFFF">check</a>
              </td>
              <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary links" style="color:#FFFF">edit</a>
              </td>
              <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-primary links"> delete</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! $users->render() !!}
  </div>
  <div class="col-sm-4">
  </div>

@endsection
