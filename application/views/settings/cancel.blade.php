<div class="page-header">
	<h1>Cancel Subscription</h1>
</div>

<p class="lead">Are you sure you want to cancel your subscription?</p>

<p class="lead">You can re-activate your subscription at any time.</p>

{{Form::open()}}
<div class="form-actions">
	{{Form::submit('Cancel Subscription', array('class' => 'btn btn-danger'))}}
	{{Form::hidden('paypal_id', $subscription->paypal_id)}}
	{{HTML::link("settings", "I've changed my mind", array('class' => 'btn'))}}
</div>
{{Form::close()}}