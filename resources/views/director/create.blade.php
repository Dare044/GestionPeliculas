
<form action="{{ url('/director') }}" method="post" enctype="multipart/form-data" >
@csrf

@include('director.form', ['modo'=>'Crear']):


</form>