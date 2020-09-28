<h1 class="display-3">FERRETERIA LA NUEVA</h1>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
  </div>
</div>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>

    <tbody>
    @foreach($productos as $producto)
        <tr scope="row">
            <td>{{$loop->iteration}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->categoria}}</td>
            <td>{{$producto->precio}}</td>
        </tr>
    @endforeach
    </tbody>


</table>
<a href="{{ url('productos/create') }}" class="btn btn-success" class="btn btn-primary">Insertar Producto</a>
<br/>
<br/>

