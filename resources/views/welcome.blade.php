@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 end columns">
            <h1>Get 1,000 Subscribers. <br>Make $1,000. <br>Do It in 90 Days.</h1>
            <h2>Stop wondering how to build an audience and get it done while making money along the way.</p>
        </div>
    </div>
</section>
<section class="cta">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 end columns">
            <h2 class="text-center">Enrollment opens soon. Until then, learn how to get your first 100 subscribers with this free course.</h2>
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
                        <button type="submit" class="button small expanded">Start Free Course</button>
                    </div>
                </div>
            </form>
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
            <p>If you start today, then by October 2nd you will have 1,000 new subscribers on your mailing list and more than $1,000 in additional revenue that you didn&rsquo;t have before.</p>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="small-12 columns">
            <h3 class="text-center">Opening This Fall</h3>
        </div>
        <div class="small-12 large-6 large-offset-3 columns end">
            <p>Interested? Doors open in Fall, but it won&rsquo;t be open enrollment and the door won&rsquo;t be open 24/7.</p>
            <p>Because this is a community that expects action, doors will only open 4x a year.</p>
            <form action="" method="post" class="callout">
                <div class="row">
                    <div class="small-12 large-6 columns">
                        <label for="first_name">First Name
                            <input type="text" name="first_name" id="first_name" required>
                        </label>
                    </div>
                    <div class="small-12 large-6 columns">
                        <label for="email">Email
                            <input type="email" name="email" id="email" required>
                        </label>
                    </div>
                    <div class="small-12 columns">
                        <button type="submit" class="button expanded">Stay Updated When Doors Open</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection