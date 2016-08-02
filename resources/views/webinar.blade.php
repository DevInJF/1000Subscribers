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
<section class="cta">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 end columns">
            <h2 class="text-center">Enrollment opens soon. Until then, learn how to get your first 100 subscribers with the 7-day challenge.</h2>
        </div>
        <div class="small-12 large-8 large-offset-2 end columns">
            <form action="" class="callout">
                <div class="row collapse">
                    <div class="small-12 large-4 columns">
                        <input class="text-center" placeholder="First Name" type="text" name="first_name" id="first_name" required>
                    </div>
                    <div class="small-12 large-4 columns">
                        <input class="text-center" placeholder="Email" type="email" name="email" id="email" required>
                    </div>
                    <div class="small-12 large-4 columns">
                        <button type="submit" class="button small expanded">Start the Challenge</button>
                    </div>
                </div>
            </form>
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