@extends('layout.master')
@section('menu')
	@parent
@endsection

@section('content')
	<div class="row">
		<div class="label label-info">{{$page}}</div>
		<div>
		@if(count(session('errors'))>0)
			<div class="alert alert-danger">
				@foreach(session('errors')->all() as $er)
				{{$er}}
				<br>
				@endforeach
			</div>
		@endif
		@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
		@endif
	</div>
	</div>
	<div class="row">
		{!! Form::model($topic,array('action'=>'TopicController@store')) !!}
		<div class="form form-group">
			{!! Form::label('topicname','Topic name') !!}
			{!! Form::text('topicname','',['class'=>'form-control']) !!}
		</div>
		<button class="btn btn-success" type='submit'>Add Topic</button>
		{!! Form::close() !!}
	</div>

@endsection
