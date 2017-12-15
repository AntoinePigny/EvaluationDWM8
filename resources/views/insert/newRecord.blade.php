@extends('layouts.base')
@section('title', 'Nouveau Disque')
@section('main')
    <section class="container">
        <div class="form-container">
            <h1 class="col-12">Nouveau disque</h1>
            {!! Form::open(['url' => '/newrecord/insert']) !!}
            <div class="form-group">
                {{{ Form::label('name', 'Nom',['class' => 'form-label']) }}}
                {{{ Form::text('name', null, ['class' => 'form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('artists', 'Artiste(s)', ['class' => 'form-label']) }}}
                {{{ Form::select('artists[]', $artists, null, ['multiple' => 'multiple', 'class' => 'js-example-basic-multiple form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('genres', 'Genre(s)',['class' => 'form-label'])}}}
                {{{ Form::select('genres[]', $genres, null, ['multiple' => 'multiple', 'class' => 'js-example-basic-multiple form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('label', 'Label',['class' => 'form-label']) }}}
                {{{ Form::select('label', $labels, null, ['placeholder' => 'Choisissez un label', 'class' => 'js-example-basic-single form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('stock', 'Stock',['class' => 'form-label']) }}}
                {{{ Form::number('stock', null, ['class' => 'form-control']) }}}
            </div>
            {{{ Form::submit('Enregistrer', ['class' => 'submit-button']) }}}
            {!! Form::close() !!}
        </div>
    </section>

@endsection