@extends('layouts.app')

@section('content')
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
			<h3 class="subheader"><a href="/module/{{$question->section->module->id }}">Module {{ $question->section->module->number }}</a> : <a href="/section/{{ $question->section->id }}">{{ $question->section->module->title }}</a> - {{ $question->section->title }}</h3>
			<h2>{{ $question->question }}</h2>
			{!! Form::open(['url' => 'answer']) !!}
				<label for="answer">Your Answer
					<textarea name="answer" rows="8"></textarea>
				</label>
				<input type="hidden" name="question_id" value="{{ $question->id }}">
				<button type="submit" class="button">Submit Answer</button>
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection