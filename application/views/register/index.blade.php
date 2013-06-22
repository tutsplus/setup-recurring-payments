<div class="page-header">
	<h1>Register</h1>
</div>

{{Form::open()}}

{{Form::label('name', 'Name')}}
{{Form::text('name')}}

{{Form::label('email', 'Email')}}
{{Form::email('email')}}

{{Form::label('password', 'Password')}}
{{Form::password('password')}}

<div class="form-actions">
{{Form::submit('Register', array('class' => 'btn btn-success'))}}
</div>

{{Form::close()}}