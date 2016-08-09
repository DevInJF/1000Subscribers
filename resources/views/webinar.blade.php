@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="row">
        <div class="small-12 columns">
            <h1>The Ultimate List-Building Webinar</h1>
            <h2 class="subheader">Learn how to grow your email list in this fun and concise hour-long training</h2>
            <p><a href="" class="button large"><i class="fa fa-shopping-cart"></i> Purchase webinar for just $7</a></p>
        </div>
    </div>
</section>
<section class="content gray">
    <div class="row">
        <div class="small-12 columns">
            <h2 class="text-center">What would happen if you started today?</h2>
        </div>
        <div class="small-12 large-6 large-offset-3 columns end">
            <p>Imagine if you gave yourself permission to stop dreaming about making money from your blog and actually taking that step.</p>
            <p><strong>If you start today, then by {{ date('F jS', strtotime("+90 days")) }} you will have 1,000 new subscribers on your mailing list and more than $1,000 in additional revenue that you didn&rsquo;t have before.</strong></p>
            <p>Each day you wait pushes that success date further back.</p>
        </div>
    </div>
</section>
<div class="reveal" id="exampleModal1" data-reveal>
  <h1>Awesome. I Have It.</h1>
  <p class="lead">Your couch. It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection