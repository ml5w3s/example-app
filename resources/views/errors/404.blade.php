@extends('site.layout')
@section('title','Essa é página de Erro')
@section('conteudo')

@component('components.sidebar')
    @slot('paragrafo')
        Texto do slot
    @endslot

    @include('includes.mensagem', ['titulo' => 'Mensagem do include!'])
    
@endsection