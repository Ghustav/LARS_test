@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  You are logged in as an admin.

                  <a href="{{ route("users.index") }}">Database management</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
