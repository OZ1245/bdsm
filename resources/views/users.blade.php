{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('role_id', 'Role_id:') !!}
			{!! Form::text('role_id') !!}
		</li>
		<li>
			{!! Form::label('active', 'Active:') !!}
			{!! Form::text('active') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}