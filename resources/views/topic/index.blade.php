@extends('layout.master')
@section('menu')
	@parent
@endsection

@section('content')
	<div class="row">
		<div class="col-lg-3 dleft">
			
			{!! Form::open(['action'=>'TopicController@search'])!!}
			<div class="input-group">
			{!! Form::text('search','',['class'=>'form-control']) !!}
			<span class="input-group-btn">
			<button class="btn btn-success" type="submit">
				Search
			</button>
		</span>
			</div>
			{!! Form::close() !!}
			<ul style="list-style-type:none" class="list-group">
				@foreach($topics as $t)
				<li class="list-group-item">
					<a href="{{url('topic/'.$t->id)}}">
						<button class="btn btn-primary form-control">
						{{$t->topicname}}
					</button>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="col-lg-9 dright">
			@if($id!=0)
				@foreach($blocks as $b)
					<div class="content" >
						<div>
							<h2>
								{{$b->title}}
							</h2>
							
						</div>
						@if($b->imagePath !="")
						<a style="float:left; margin-right:20px" href="{{url($b->imagePath)}}" class="wrap-image">
							<img src="{{asset($b->imagePath)}}" height="150px" alt="">
						</a>
						@endif

						<pre class="pre_text" >{{$b->content}}</pre>
						{!! Form::model($b,array('route'=>array('block.update',$b->id),'method'=>'PUT'))!!}
							<a style="float:right;" href="{{url('block/'.$b->id.'/edit')}}" class="btn btn-xs btn-info">Edit</a>
						{!! Form::close()!!}
						
						{!! Form::open(array('route'=>array('block.destroy',$b->id)))!!}
							{!! Form::hidden('_method','DELETE')!!}
							{!! Form::submit("Delete",['style'=>'float:right;','class'=>'btn btn-xs btn-danger']) !!}
						{!! Form::close()!!}
							<br style="clear:right">

					</div>
					<hr>
				@endforeach
			@endif
		</div>
	</div>
@endsection
