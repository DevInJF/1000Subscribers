@extends('layouts.app')

@section('content')
<section class="dashboard-header">
	<div class="row">
		<div class="small-12 columns">
			<h3 class="subheader"><a href="/module/{{$question->section->module->id }}">Module {{ $question->section->module->number }}</a> : <a href="/section/{{ $question->section->id }}">{{ $question->section->module->title }}</a></h3>
			<h2>{{ $question->section->title }}</h2>
		</div>
	</div>
</section>
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $question->question }}</h2>
		</div>
		@if($question->description)
		<div class="small-12 large-7 columns">
			{!! $question->description !!}
		</div>
		@endif
		<div class="small-12 large-5 columns end">
			{!! Form::open(['url' => 'answer', 'class' => 'callout']) !!}
				<label for="answer">
					<textarea name="answer" rows="8"></textarea>
				</label>
				<input type="hidden" name="question_id" value="{{ $question->id }}">
				<button type="submit" class="button expanded">Submit Answer</button>
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection