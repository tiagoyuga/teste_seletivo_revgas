@extends('panel._layouts.panel')

@section('_titulo_pagina_', (isset($item) ? 'Edição' : 'Cadastro') . ' de '.$label)

@section('content')

    @include('panel.config.nav')

    <div class="card">

        <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0">@yield('_titulo_pagina_')</h4>
        </div>

        <div class="card-body">

            <form method="post" class="form-horizontal" id="frm_save" autocomplete="off"
                  action="{{ isset($item) ? route('config.update', $item->id) : route('config.store') }}">
                {{ method_field(isset($item) ? 'PUT' : 'POST') }}
                {{ csrf_field() }}

                <!-- inicio dos campos -->

                <div class="row mb-3">
                    <div class="col-md-3 @if ($errors->has('dias_para_cancelamento')) is-invalid has-error @endif">
                        <label class="form-label" for="dias_para_cancelamento">Dias para cancelamento</label>
                        <input type="text" name="dias_para_cancelamento" id="dias_para_cancelamento" class="form-control
                                    @if (count($errors)) is-valid @endif
                                    @if ($errors->has(dias_para_cancelamento)) is-invalid has-error @endif
                                    "
                               value="{{ old('dias_para_cancelamento', (isset($item) ? $item->dias_para_cancelamento : '')) }}">
                        {!! $errors->first('dias_para_cancelamento','<span class="help-block m-b-none">:message</span>') !!}
                    </div>

                    <div class="col-md-3 @if ($errors->has('limite_dias_retorno')) is-invalid has-error @endif">
                        <label class="form-label" for="limite_dias_retorno">Limite dias retorno</label>
                        <input type="text" name="limite_dias_retorno" id="limite_dias_retorno" class="form-control
                                    @if (count($errors)) is-valid @endif
                                    @if ($errors->has(limite_dias_retorno)) is-invalid has-error @endif
                                    "
                               value="{{ old('limite_dias_retorno', (isset($item) ? $item->limite_dias_retorno : '')) }}">
                        {!! $errors->first('limite_dias_retorno','<span class="help-block m-b-none">:message</span>') !!}
                    </div>

                </div>

                <!-- fim dos campos -->
                <div class="mb-3 mt-3">
                    <input id="routeTo" name="routeTo" type="hidden" value="{{ old('routeTo', 'index') }}">
                    <button class="btn btn-primary" id="bt_salvar" type="submit">
                        <i class="fa fa-save"></i>
                        {{ isset($item) ? 'Salvar Alterações' : 'Salvar' }}
                    </button>

                    @if(!isset($item))
                        <button class="btn btn-default" id="bt_salvar_adicionar" type="submit">
                            <i class="fa fa-save"></i>
                            Salvar e adicionar novo
                        </button>
                    @else
                        <a class="btn btn-default" id="ln_listar_form" href="{{ route('config.index') }}">
                            <i class="fa fa-list-ul"></i>
                            Listar
                        </a>
                    @endif
                </div>
                <!-- FIM -->
            </form>
        </div>
    </div>
@endsection


@section('styles')

@endsection


@section('scripts')
    @include('panel._assets.scripts-form')
    {!! $validator->selector('#frm_save') !!}
@endsection
