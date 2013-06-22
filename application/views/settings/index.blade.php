<div class="page-header">
	<h1>Settings</h1>
</div>

@if(Session::get('cancelled'))
<div class="alert alert-success">
	Your subscription was cancelled successfully.
</div>
@endif

<div class="row">
	<div class="span4">
		<div class="plan<?php if(!$subscription) : ?> active<?php endif ?>">
			Free
			<span>
				<a href="/settings/cancel" title="Switch Plans" class="btn btn-primary">Go Free</a>
			</span>
		</div>
	</div>
	<div class="span4">
		<div class="plan<?php if($subscription && $subscription->subscription == 1) : ?> active<?php endif ?>">
			Standard

			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="YOUR BUTTON ID">
				<input type="submit" value="$5 per month" name="submit" class="btn btn-primary">
				<input type="hidden" name="custom" value='{{json_encode(array('user_id' => Auth::user()->id))}}'>
				<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>

		</div>
	</div>
	<div class="span4">
		<div class="plan<?php if($subscription && $subscription->subscription == 2) : ?> active<?php endif ?>">
			Premium
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="YOUR BUTTON ID">
				<input type="submit" value="$10 per month" name="submit" class="btn btn-primary">
				<input type="hidden" name="custom" value='{{json_encode(array('user_id' => Auth::user()->id))}}'>
				<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</div>

@if($subscription)
<div class="row">
	<div class="span12">
		<hr>
		<p class="expires">Your subscription expires on <strong>{{date('d/m/Y', strtotime($subscription->expires))}}</strong></p>
	</div>
</div>
@endif