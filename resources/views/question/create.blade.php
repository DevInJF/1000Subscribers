@extends('layouts.app')

@section('content')
<section class="dashboard">
	<div class="row">
		<div class="small-12 large-6 large-offset-3 end columns">
			<h2 class="text-center">Create Question</h2>
			{!! Form::open(['url' => 'question', 'class' => 'callout']) !!}
				<label for="question">Question
					<input type="text" name="question" id="question">
				</label>
				<label for="number">Section Number
					<select name="section_id">
						@foreach($sections as $section)
							<option value="{{ $section->id }}">Module {{ $section->module->number }}: {{ $section->module->title }} - {{ $section->title }}</option>
						@endforeach
					</select>
				</label>
				<button type="submit" class="button expanded">Create Question</button>
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection