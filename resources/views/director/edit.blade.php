<form action="{{ url('/director/'.$director->id ) }}" method="post" enctype="multipart/form-data">
@csrf 
{{ method_field('PATCH') }}

@include('director.form',['modo'=>'Editar']):

</form>


