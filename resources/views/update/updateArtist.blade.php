@extends('layouts.base')
@section('title', 'New Cat')
@section('main')
    <section class="container">

        <h1 class="col-12">Mise a jour d'un disque</h1>
        {!! Form::open(['url' => '/record/update']) !!}
        {{{ Form::hidden('id', $record->id) }}}
        <div class="col-12 form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('name', $record->name, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Artiste(s)') }}}
            {{{ Form::select('artists[]', $artists, $record->artists, ['size' => count($artists), 'multiple' => true], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Genre(s)') }}}
            {{{ Form::select('genres[]', $genres, $record->genres, ['size' => count($genres), 'multiple' => true], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Label') }}}
            {{{ Form::select('label', $labels, $record->label->id, [], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Stock') }}}
            {{{ Form::number('stock', $record->stock, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::submit('Enregistrer') }}}
        </div>
        {!! Form::close() !!}
    </section>

@endsection