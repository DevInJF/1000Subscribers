@extends('layouts.app')

@section('content')
<section class="dashboard-header">
	<div class="row">
		<div class="small-12 columns">
			<h3 class="subheader"><a href="/module/{{ $section->module->id }}">Module {{ $section->module->number }} : {{ $section->module->title }}</a></h3>
			<h2>{{ $section->title }}</h2>
		</div>
	</div>
</section>
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
			<table>
				<thead>
					<tr>
						<td>Question</td>
						<td>Completed</td>
					</tr>
				</thead>
				<tbody>
				@foreach($section->questions as $question)
					<tr>
						<td><a href="/question/{{ $question->id }}">{{ $question->question}}</a></td>
						<td></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection