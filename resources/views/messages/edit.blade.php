<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mensajes recibidos</title>

  </head>
    <body>
    	<form method="POST" action="{{ route('messages.update', $mensaje->id) }}">
    		{!! method_field('PUT') !!}
    		{!! csrf_field() !!}
    		<p>
    			<label for="name">
    				Name
    				<input type="text" name="name" value="{{ $mensaje->name }}">
    			</label>
    		</p>
    		<p>
    			<label for="email">
    				email
    				<input type="email" name="email" value="{{ $mensaje->email }}">
    			</label>
    		</p>
    		<p>
    			<label for="phone">
    				phone
    				<input type="tel" name="phone" value="{{ $mensaje->phone }}">
    			</label>
    		</p>
    		<p>
    			<label for="message">
    				Mensaje
    				<textarea type="text" name="message">{{ $mensaje->messages }}</textarea>
    			</label>
    		</p>
    		<input type="submit" value="Enviar">
    	</form>

    </body>
</html>