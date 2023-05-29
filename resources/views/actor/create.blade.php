
<form action="{{ url('/actor') }}" method="post" enctype="multipart/form-data" >
@csrf

@include('actor.form', ['modo'=>'Crear']):


</form>