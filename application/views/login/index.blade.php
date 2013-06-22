<div class="page-header">
	<h1>Login</h1>
</div>

@if(Session::get('error'))
	
<div class="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Oops!</strong> Your email address or password were incorrect.
</div>

@endif

{{Form::open()}}

{{Form::label('username', 'Email Address')}}
{{Form::email('username')}}

{{Form::label('password', 'Password')}}
{{Form::password('password')}}

<div class="form-actions">
{{Form::submit('Login', array('class' => 'btn btn-success'))}}
</div>

{{Form::close()}}