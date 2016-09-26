@extends('layouts.app')

@section('content')
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
			<h2>Module {{ $module->number }}: {{ $module->title }}</h2>
			<table>
				<thead>
					<tr>
						<td>Section</td>
						<td>Completed</td>
					</tr>
				</thead>
				<tbody>
					@foreach($module->sections as $section)
						<tr>
							<td><a href="/section/{{ $section->id }}">{{ $section->title }}</a></td>
							<td></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection