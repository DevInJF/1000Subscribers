@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="row">
        <div class="small-12 columns">
            <h1>Get 1,000 Subscribers. Make $1,000. Do It in 90 Days.</h1>
            <h2 class="subheader">Learn how to build an audience and get it done while making money along the way.</h2>
            <p><a data-open="emailModal" class="button large">Start Your Free 7-Day Challenge</a></p>
        </div>
    </div>
</section>
<!--
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
-->
<section class="content">
    <div class="row">
        <div class="small-12 columns">
            <h2>The first and last course you&rsquo;ll need to build an awesome list that makes money when you want it to</h2>
            <p><em>1,000 Subscribers</em> is a different kind of course. It goes over great detail about the how of building your mailing list, but it also goes deep into the why.</p>
            <p>Why would someone want to join your list? Why would someone want to eventually buy something from you?</p>
            <p><strong>Building a mailing list should go far beyond putting 100 pop-ups on your site.</strong></p>
            <p>Your goal is to create something of substance that has people sharing with their friends and family.</p>
            <p><em>1,000 Subscribers</em> covers all of that, but before it comes out, you should take the 7-Day Challenge.</p>
            <h3>The 7-Day List-Building Challenge</h3>
            <p><strong>Is it possible to improve your site so that you get more subscribers instantly?</strong> Yes.</p>
            <p><strong>Is it possible to start building systems that will help you discover the meaning of <em>passive income</em>?</strong> Yes.</p>
            <p>This challenges provides you with all of the necessary tools and steps required to take your mailing list growth to new heights.</p>
            <h3>You will leave this challenge with...</h3>
            <ul>
                <li><strong>A larger, healthier and happier list</strong></li>
                <li><strong>A complete system that will help you see repeat success with each and every lead magnet you create</strong></li>
                <li><strong>The skills to create autoresponders that do the selling for you</strong></li>
            </ul>
            <h3>Why do you need a list?</h3>
            <p>You are a smart person that asks the right kinds of questions. If you want to run a successful online blog that helps you create the lifestyle of your dreams then your only option is to have a good mailing list.</p>
            <p>You don&rsquo;t necessarily need a large one, but you do need a good one.</p>
            <p>A good one is filled with people that are itching to buy your solutions.</p>
            <p>They want to know about everything that you do so they can be sure they are the first in line to purchase.</p>
            <p>People don&rsquo;t randomly buy services or infoproducts. <strong>They have to be educated first. They need to trust you first.</strong></p>
            <p>This is all done through your list.</p>
            <p><strong>No list, no education.</strong></p>
            <p><strong>No list, no trust.</strong></p>
            <p><strong>No list, no money.</strong></p>
        </div>
    </div>
</section>
<section class="cta">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 end columns">
            <h2 class="text-center">Enrollment opens soon. Until then, learn how to get your first 100 subscribers with the 7-day challenge.</h2>
        </div>
        <div class="small-12 large-8 large-offset-2 end columns">
            <form id="ck_subscribe_form" class="ck_subscribe_form callout" action="https://app.convertkit.com/landing_pages/82628/subscribe" data-remote="true">
                <input type="hidden" name="id" value="82628" id="landing_page_id">
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
<div class="reveal" id="emailModal" data-reveal>
    <h3 class="text-center">Time to push yourself</h3>
    <p class="text-center">In 7 days you&rsquo;ll learn all the tools needed to increase your subscriber count with relevant people.</p>
  <script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
  <div class="ck_form_container ck_inline" data-ck-version="6">
    <div class="ck_form ck_naked">
    <div class="ck_form_fields">
      <div id="ck_success_msg" style="display:none;">
        <p>Success! Now check your email to confirm your subscription.</p>
      </div>

      <!--  Form starts here  -->
      <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/82628/subscribe" data-remote="true">
        <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
        <input type="hidden" name="id" value="82628" id="landing_page_id">
        <div class="ck_errorArea">
          <div id="ck_error_msg" style="display:none">
            <p>There was an error submitting your subscription. Please try again.</p>
          </div>
        </div>
        <div class="ck_control_group ck_email_field_group">
          <label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
        <div class="row">
            <div class="small-12 large-6 columns">
                <input type="text" name="first_name" class="ck_first_name text-center" id="ck_firstNameField" placeholder="First Name">
            </div>
            <div class="small-12 large-6 columns">
                <input type="email" name="email" class="ck_email_address text-center" id="ck_emailField" placeholder="Email Address" required>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="small-12 columns">
                <button class="button expanded" id="ck_subscribe_button">
                  I&#x27;m Ready!
                </button>
            </div>
        </div>
      </form>
    </div>

  </div>

  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection