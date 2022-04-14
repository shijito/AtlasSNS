@extends('layouts.login')

@section('content')

<div class="form-group">
  {!! Form::open(['url' => '/search']) !!}
  {{ csrf_field() }}
    <div class="form-group">
      {!! Form::input('text','search', null, ['required', 'class' => 'form-control', 'placeholder' => '検索']) !!}
    </div>
    <div>
      <input type="image" src="images/post.png" class="btn btn-success pull-right">
    </div>
  {!! Form::close() !!}
</div>


@endsection
