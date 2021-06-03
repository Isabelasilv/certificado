@extends('layouts.app')
@section('content')
<div class="container">

         {{-- @if($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $message)
                    <p>{{ $message}}</p>
                @endforeach
            </div>
        @endif --}}

        <form id="frmpessoa" name="frmpessoa" action="{{ route('pessoa.store') }}" method="POST">
        @csrf

        <div class="form-group col-6">
          <label for="escola">Nome da escola</label>
          <input type="text" class="form-control {{ $errors->has('escola') ? 'is-invalid' : '' }}" id="escola" name="escola" placeholder="Informe o nome da escola">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('escola', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>


        <div class="form-group col-6">
          <label for="nome">Nome do palestrante</label>
          <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome" name="nome" placeholder="Informe o nome do palestrante">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('nome', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form-group col-6">
          <label for="tema">Tema da palestra</label>
          <input type="text" class="form-control {{ $errors->has('tema') ? 'is-invalid' : '' }}" id="tema" name="tema" placeholder="Informe o tema da palestra">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('tema', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form-group col-6">
            <label for="data">Data</label>
            <input type="text" class="form-control {{ $errors->has('data') ? 'is-invalid' : '' }} "  id="data" name="data"  placeholder="Informe a data">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('data', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form-group col-6">
            <label for="horas">Horas de duração</label>
            <input type="text" class="form-control {{ $errors->has('horas') ? 'is-invalid' : '' }} "  id="horas" name="horas"  placeholder="Informe as horas de duração">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('horas', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection