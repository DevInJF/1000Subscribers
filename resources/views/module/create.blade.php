@extends('layouts.app')

@section('content')
<section class="dashboard">
	<div class="row">
		<div class="small-12 large-6 large-offset-3 end columns">
			<h2 class="text-center">Create Module</h2>
			{!! Form::open(['url' => 'module', 'class' => 'callout']) !!}
				<label for="title">Module Title
					<input type="text" name="title" id="title">
				</label>
				<label for="number">Module Number
					<input type="text" name="number" id="number">
				</label>
				<button type="submit" class="button expanded">Create Module</button>
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection