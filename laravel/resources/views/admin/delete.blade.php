@extends('admin.padrao')
@section('cabecalho')
    Deletar Conta
@endsection
@section('conteudo')
{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate"
                       placeholder="teste">
                <label for="nome">Nome:</label>
            </div>
        </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="senha" name="senha" type="password" class="validate"
                           placeholder="****">
                    <label for="senha">Senha:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Excluir conta
                <i class="material-icons right"></i>
            </button>
        </div>
    </form>
</div>
@endsection
