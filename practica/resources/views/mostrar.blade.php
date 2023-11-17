@extends('template')
@section('content')
<form action="{{url('productos')}}" method = "GET">
    <input type="text" name="nombreBodega" id="nombreBodega">
    <button type="Submit">Buscar</button>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Bodega</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datos as $item)
    <tr>
        <th scope="row">{{$item["codigo"]}}</th>
        <td>{{$item["nombre"]}}</td>
        <td>{{$item["precio"]}}</td>
        <td>{{$item["cantidad"]}}</td>
        <td>{{$item["codigoBod"]}}</td>
        <td><a href="{{ url('productos/'. $item['codigo']) .'/edit' }}">Editar</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection