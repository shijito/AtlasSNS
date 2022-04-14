@extends('layouts.login')

@section('content')

<div class="form-group">
  {!! Form::open(['url' => '/create']) !!}
  {{ csrf_field() }}
    <div class="form-group">
      {!! Form::input('text','tweet', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。']) !!}
    </div>
    <div>
      <input type="image" src="images/post.png" class="btn btn-success pull-right">
    </div>
  {!! Form::close() !!}
</div>

@endsection
