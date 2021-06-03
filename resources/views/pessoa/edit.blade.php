@extends('layouts.app')
@section('content')

<div class="container">
<form id="frmpessoa" name="frmpessoa" action="{{ route('pessoa.update') }}" method="POST">
@csrf
@method('PUT')
 <div class="form-group">
 <label for="escola">Nome da escola</label>
 <input type="escola" class="form-control" id="escola" name="escola" value="{{ $pessoa->escola }}">
 </div>

 <div class="form-group">
 <label for="nome">Nome do palestrante</label>
 <input type="nome" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}">
 </div>

 <div class="form-group">
 <label for="tema">Tema da palestra</label>
 <input type="tema" class="form-control" id="tema" name="tema" value="{{ $pessoa->tema }}">
 </div>

 <div class="form-group">
 <label for="data">Data</label>
 <input type="data" class="form-control" id="data" value="{{ $pessoa->data }}">
 </div>

 <div class="form-group">
 <label for="horas">Horas de duração</label>
 <input type="horas" class="form-control" id="horas" value="{{ $pessoa->horas }}">
 </div>
 
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>

</div>
@endsection

 