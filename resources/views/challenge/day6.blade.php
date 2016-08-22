@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="row">
        <div class="small-12 columns">
        	<h3 class="subheader">List-Building Challenge Day 1:</h3>
            <h1>The Power of Giveaways</h1>
            <h2 class="subheader">Everybody Loves a Chance at Free Stuff</h2>
        </div>
    </div>
</section>
<section class="content">
	<div class="row">
		<div class="small-12 columns">
			<div class="callout">
				<p>Did you end up here because someone was kind enough to link this page? That&rsquo;s cool, but you&rsquo;ll want to sign up yourself so you can experience all 7 days of this list-building challenge.</p>
				<p><a data-open="emailModal" class="button expanded">Start Your Free 7-Day Challenge</a></p>
			</div>
			<div class="callout">
				<p>Did you end up here because someone was kind enough to link this page? That&rsquo;s cool, but you&rsquo;ll want to sign up yourself so you can experience all 7 days of this list-building challenge.</p>
				<p><a data-open="emailModal" class="button expanded">Start Your Free 7-Day Challenge</a></p>
			</div>
		</div>
	</div>
</section>
<section class="content toc">
	<div class="row">
		<div class="small-12 columns">
			<ul class="no-bullet days">
				<li><a href="/challenge/optimizing-your-homepage">Day 1: <span>Optimizing Your Homepage</span></a></li>
				<li><a href="/challenge/great-content">Day 2: <span>Reverse Engineering Great Content</span></a></li>
				<li><a href="/challenge/power-guest-posting">Day 3: <span>The Power of Guest Posting</span></a></li>
				<li><a href="/challenge/using-content-upgrades">Day 4: <span>Utilizing Content Upgrades</span></a></li>
				<li><a href="/challenge/boosting-conversions">Day 5: <span>Conversion Optimization</span></a></li>
				<li class="active">Day 6: <span>Using Giveaways</span></li>
				<li class="passive">Day 7: <span>Wonderful Webinars</span></li>
			</ul>
		</div>
	</div>
</section>
@include('modal')
@endsection