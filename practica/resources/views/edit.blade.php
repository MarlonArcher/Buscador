@extends('template')
@section('content')
<form action="{{url('productos/'.$producto['codigo'])}}" method="POST">
    @method("PUT")
    @csrf
    <input type="text" value="{{$producto['codigo']}}" name="codigoProducto" id="codigoProducto" readonly>
    <input type="text" value="{{$producto['cantidad']}}" name="cantidad" id="cantidad">
    <input type="text" value="{{$producto['codigoBod']}}" name="codigoBod" id="codigoBod" readonly>
    <button type="submit">Guardar</button>
</form>
@endsection