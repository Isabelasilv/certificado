@extends('layouts.app')

@section('content')

<div class="container">
<h2>Certificado</h2>
<hr>
<a href="{{ url('pessoa/create') }}" class="btn btn-success">Novo Certificado</a>
<br/><br/>
<table class="table">
 <thead class="thead-dark">
 <tr>

 <th scope="col">Id</th>
 <th scope="col">Nome da escola</th>
 <th scope="col">Nome do palestrante</th>
 <th scope="col">Tema da palestra</th>
 <th scope="col">Data</th>
 <th scope="col">Horas de duração</th>
 <th scope="col">Opções</th>

 </tr>
 </thead>
 @foreach($pessoa as $pessoas)
 <tbody>
 <tr>
 <th>{{ $pessoas->id }}</th>
 <th>{{ $pessoas->escola }}</th>
 <td>{{ $pessoas->nome }}</td>
 <td>{{ $pessoas->tema }}</td>
 <td>{{ $pessoas->data }}</td>
 <td>{{ $pessoas->horas }}</td>
 <td>
    <a href="{{ route('pessoa.edit',$pessoas->id)}}" class="btn btn-primary btn-sm">Editar</a>
    <a href="{{ route('pessoa.show',$pessoas->id)}}" class="btn btn-dark btn-sm">Vizualizar</a>
    <a href="{{ url('pessoa/delete', ['id'=>$pessoas->id])}}" class="btn btn-danger btn-sm">Remover</a>
 </td>
 </tr>
 </td>
 </tbody>
 @endforeach
 </table>
 </div>
@endsection