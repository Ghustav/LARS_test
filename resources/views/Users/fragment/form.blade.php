<div class="form-group">
  {!! Form::label('name', 'User name') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'E-mail') !!}
  {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('latitude', 'Latitude') !!}
  {!! Form::number('Latitude', null, ['min' => '-90.0000', 'max' => '90.0000', 'class' => 'form-control', 'step'=>'any']) !!}
</div>

<div class="form-group">
  {!! Form::label('longitude', 'Longitude') !!}
  {!! Form::number('Longitude', null, ['min' => '-90.0000', 'max' => '90.0000', 'class' => 'form-control', 'step'=>'any']) !!}
</div>

<div class="form-group">
  {!! Form::label('password', 'Password') !!}
  {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>
