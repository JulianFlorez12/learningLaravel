@extends('layout.layout')

@section('content')

<div class="card">
        <div class="card-header">
          Editar Asesor
        <a href="{{ url('createA') }}" style="margin-left: 750px;" class="btn btn-info">Lista de Asesores</a>
        </div>
        <div class="card-body" width:"50%">
                <form id="formularioAsesores"  method="POST" action="{{ url('createA', $asesores->idvendedor) }}" >

                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                        <div class="form-group col-lg-4">
                            <label for="codigo">Código</label>
                            <div>
                            <input id="codigo" name="codigo" type="text" placeholder="Código" value="{{ $asesores->codigo }}" class="form-control {{ $errors->has('codigo') ? 'is-invalid':'' }}">
                                <strong class="invalid-feedback">{{ $errors->first('codigo') }}</strong>
                            </div>
                        </div>
                      <div class="form-group col-lg-4">
                            <label for="name">Nombre</label>
                         <div>
                         <input id="nombre" name="nombre" type="text" placeholder="Nombre" value="{{ $asesores->nombre }}" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}">
                         <strong class="invalid-feedback">{{ $errors->first('nombre') }}</strong>
                        </div>
                    </div>
                    </div>
                    <div class="card-footer text-muted">
                     <button type="submit"  class="btn btn-info">Guardar</button>
                    </div>
                </form>
        </div>
@endsection
@section('script')
<script src="{{ asset('js/validationAsesores.js') }}"></script>
@endsection
