
<h2>{{ $modo  }} Pelicula</h2>

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($pelicula->Nombre)?$pelicula->Nombre:'' }}" id="Nombre">
<br>

<label for="Genero"> Genero </label>
<input type="text" name="Genero"  value="{{ isset($pelicula->Genero)?$pelicula->Genero:'' }}" id="Genero">
<br>

<label for="Productora"> Productora </label>
<input type="text" name="Productora" value="{{  isset($pelicula->Productora)?$pelicula->Productora:'' }} " id="Productora">
<br>

<label for="Descripcion"> Descripcion </label>
<input type="text" name="Descripcion" value="{{ isset($pelicula->Descripcion)?$pelicula->Descripcion:'' }} " id="Descripcion">
<br>

<input type="submit" value=" {{ $modo  }}  Pelicula">

<a href="{{ url('pelicula') }}">Regresar</a>

