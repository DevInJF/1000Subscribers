@extends('layouts.app')

@section('content')
<section class="dashboard-header">
	<div class="row">
		<div class="small-12 columns">
			<h2>Dashboard</h2>
		</div>
	</div>
</section>
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
		</div>
		<div class="small-12 large-8 columns">
			<h3>Modules</h3>
			<table>
				<thead>
					<tr>
						<td>Module</td>
						<td>Section</td>
						<td>Completed</td>
					</tr>
				</thead>
				<tbody>
					@foreach($sections as $section)
					<tr>
						<td>{{ $section->module->number }}</td>
						<td><a href="/section/{{ $section->id }}">{{ $section->title }}</a></td>
						<td></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="small-12 large-4 columns">
			<div class="sidebar">
				<h3>Activity</h3>
			</div>
		</div>
	</div>
</section>
@endsection