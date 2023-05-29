
<form action="{{ url('/pelicula') }}" method="post" enctype="multipart/form-data" >
@csrf

@include('pelicula.form', ['modo'=>'Crear']):


</form>