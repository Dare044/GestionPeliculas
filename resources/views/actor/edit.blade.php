<form action="{{ url('/actor/'.$actor->id ) }}" method="post" enctype="multipart/form-data">
@csrf 
{{ method_field('PATCH') }}

@include('actor.form',['modo'=>'Editar']):

</form>


