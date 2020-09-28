 <h3 class="display-3">AGREGAR PRODUCTO</h3>           
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



<form action="{{ url('/productos')}}"  method="post" enctype="multipart/form-data">

{{ csrf_field() }}

<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input class="form-control" id="Nombre" type="text" name="Nombre" value="">
</div>


<div class="form-group">
<label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
<input class="form-control" id="Descricpion" type="text" name="Descripcion" value="">
</div>

<div class="form-group">
<label for="categoria" class="control-label">{{'Categoria'}}</label>
<input class="form-control" id="categoria" type="text" name="Categoria" value="">
</div>

<div class="form-group">
<label for="precio" class="control-label">{{'Precio'}}</label>
<input class="form-control" id="precio" type="text" name="Precio" value="">
</div>

<input type="submit" class="btn btn-dark" value="Agregar">
<a href="{{ url('productos') }}" class="btn btn-primary" type="button">Listar</a>
</form>
