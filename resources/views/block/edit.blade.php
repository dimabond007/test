@extends('layout.master')
@section('menu')
	@parent
@endsection

@section('content')
	{!! Form::model($block,array('route'=>array('block.update',$block->id),'method'=>'PUT'))!!}
	<div class="form-group">

		<div class="form form-group">
			{!! Form::label('topicid','Select topic') !!}
			{!! Form::select('topicid',$topics,$block->topicid,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('title','Title')!!}
			{!! Form::text('title',$block->title,array('class'=>'form-control'))!!}
		</div>

		<div class="form form-group">
			{!! Form::label('content','Add content') !!}
			{!! Form::textarea('content',$block->content,['class'=>'form-control']) !!}
		</div>

		<div class="form form-group">
			{!! Form::label('imagepath','Add image') !!}
			{!! Form::file('imagepath',$block->imagepath,['class'=>'form-control']) !!}
		</div>
		{!! Form::submit('Edit the Block',array('class'=>'btn btn-primary'))!!} 
	</div>
	{!! Form::close()!!}
@endsection
