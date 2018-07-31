@extends ('welcome')

    @section('contenu')
    
        <h3>Formulaire à remplir</h3>
    
        <div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-body"> 
				{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group {!! $errors->has('first_name') ? 'has-error' : '' !!}">
						{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
						{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('last_name') ? 'has-error' : '' !!}">
						{!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
						{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('content') ? 'has-error' : '' !!}">
						{!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
						{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
        
    @endsection