@extends('layouts.app')

@section('content')
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $section->title }}</h2>
			<table>
				@foreach($section->questions as $question)
					<tr>
						<td><a href="/question/{{ $question->id }}">{{ $question->question}}</a></td>
						<td></td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection