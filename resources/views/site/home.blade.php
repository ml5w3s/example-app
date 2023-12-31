@extends('site.layout')

@section('title','Produtos')

@section('conteudo')
<div class="row container">

    @foreach ($produtos as $produto)
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="{{ $produto->imagem }}">
                <span class="card-title">Card Title</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection