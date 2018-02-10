@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="embed-responsive embed-responsive-16by9">
            <div id="map_canvas" class="embed-responsive-item">
                {!! Mapper::render() !!}
            </div>
        </div>
    </div>
</div>
@stop
