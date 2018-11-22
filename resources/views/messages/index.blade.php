    @if(auth()->guest())
      <?php return back(); ?>
    @endif
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
    @if(auth()->check())
      <nav>
          <a href="/logout">Cerrar Session de {{ auth()->user()->name }}</a>
      </nav>
    @endif
    @if(auth()->guest())
      <a href="/login">IR A LOGIN</a>
    @endif
    <div class="container">
      <h1>Todos los mensajes</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th>Enviado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
            <tr>
              <td> {{$mensaje->id}} </td>
              <td> {{$mensaje->name}} </td>
              <td> {{$mensaje->email}} </td>
              <td> {{$mensaje->phone}} </td>
              <td> {{$mensaje->messages}} </td>
              <td>
                  <a href="{{route('messages.edit', $mensaje->id)}}">Editar</a>
                  <form method="POST" action="{{ route('messages.destroy', $mensaje->id) }}">
                  {!! csrf_field() !!}
                  {!! method_field('DELETE') !!}
                      <button type="submit">Eliminar</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>

  </body>
</html>
