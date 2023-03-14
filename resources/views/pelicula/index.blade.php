Mostrar Formulario
@if (Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('pelicula/create') }}">Registrar nueva Pelicula</a>

<table class="table table-light">
  <thead class= "thead-light">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Productora</th>
      <th>Genero</th>
      <th>Descripcion</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach ( $peliculas as $pelicula ) 
    <tr>
        <td>{{ $pelicula->id }}</td>
        <td>{{ $pelicula->Nombre}}</td>
        <td>{{ $pelicula->Productora}}</td>
        <td>{{ $pelicula->Genero}}</td>
        <td>{{ $pelicula->Descripcion}}</td>
        <td>
            
        
        <a href="{{ url ('/pelicula/'.$pelicula->id.'/edit') }}">
            Editar
        </a>     
            
        
        <form action= "{{ url('/pelicula/'.$pelicula->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
        <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">
    </form>


    </td>
    </tr>
    @endforeach
    </tbody>
</table>