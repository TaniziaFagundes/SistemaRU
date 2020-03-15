@extends('main')

@section('cabecalho')
    Criar Conta
@endsection

@section('conteudo')
{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate"
                       placeholder="Matheus Inacio Nascimento Dantas">
                <label for="nome">Nome Completo:</label>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="matricula" name="matricula" type="text" class="validate"
                           placeholder="21750861">
                    <label for="matricula">Matricula:</label>
                </div>
            </div>

            <div class="input-field col s6">
                <input id="curso" name="curso" type="text" class="validate"
                       placeholder="Engenharia de Software">
                <label for="curso">Curso:</label>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="senha" name="senha" type="password" class="validate"
                           placeholder="****">
                    <label for="senha">Senha:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Criar Conta
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
