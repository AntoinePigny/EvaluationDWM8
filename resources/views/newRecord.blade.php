@extends('layouts.base')
@section('title', 'Nouveau Disque')
@section('main')
    <section class="container">

        <h1 class="col-12">Ajoutez un disque</h1>
        {!! Form::open(['url' => '/newrecord/insert']) !!}
        <div class="col-12 form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('name', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Artiste(s)') }}}
            {{{ Form::select('artists', $artists, null, ['size' => count($artists), 'multiple' => true], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Label') }}}
            {{{ Form::select('label', $labels, null, [], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Stock') }}}
            {{{ Form::number('stock', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::submit('Enregistrer') }}}
        </div>
        {!! Form::close() !!}
    </section>

@endsection