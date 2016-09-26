@extends('layouts.app')

@section('content')
<section class="dashboard">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
		</div>
	</div>
</section>
@endsection