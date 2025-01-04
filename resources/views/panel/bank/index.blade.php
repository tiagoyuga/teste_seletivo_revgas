@extends('panel._layouts.panel')

@section('_titulo_pagina_', 'Lista de '.$label)

@section('content')

    @include('panel.bank.nav')

    <div class="card">
        <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0">Filtros</h4>
        </div>

        <div class="card-body table-responsive">

            <form method="post" class="form-horizontal" id="frm_save" autocomplete="off"
                  action="{{ route('home') }}">
                {{ method_field('GET') }}
                {{ csrf_field() }}

                <!-- inicio dos campos -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label" for="code">Código</label>
                        <input type="text" name="code" id="code" class="form-control"
                               value="{{ old('code', request('code')) }}">
                    </div>
                </div>

                <button class="btn btn-primary" id="bt_salvar_adicionar" type="submit">
                    <i class="fa fa-search"></i>
                    Pesquisar
                </button>

            </form>
        </div>
    </div>

    <div class="card">

        <div class="card-body table-responsive">

            @if($data->count())

                <table class="table table-striped table-bordered table-hover data-table" id="table">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Nome</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr id="tr-{{ $item->id }}">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{--<!--@include('panel._assets.paginate')-->--}}
            @else
                <div class="alert alert-danger">
                    Não temos nada para exibir. Caso tenha realizado uma busca você pode realizar
                    uma nova com outros termos ou
                    <a class="alert-link" href="{{ route('home') }}">
                        limpar sua pesquisa.
                    </a>
                </div>
            @endif
        </div>
    </div>

@endsection

@section('styles')

@endsection

@section('scripts')

@endsection
