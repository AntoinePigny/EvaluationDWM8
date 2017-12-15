@extends('layouts.base')
@section('title', 'Update Record')
@section('main')
    <section class="container">
        <div class="form-container">
            <h1 class="col-12">Mise a jour d'un disque</h1>
            {!! Form::open(['url' => '/record/update']) !!}
            {{{ Form::hidden('id', $record->id) }}}
            <div class="form-group">
                {{{ Form::label('name', 'Nom',['class' => 'form-label']) }}}
                {{{ Form::text('name', $record->name, ['class' => 'form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('artists', 'Artiste(s)', ['class' => 'form-label']) }}}
                {{{ Form::select('artists[]', $artists, $record->artists, ['multiple' => 'multiple', 'class' => 'js-example-basic-multiple form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('genres', 'Genre(s)',['class' => 'form-label'])}}}
                {{{ Form::select('genres[]', $genres, $record->genres, ['multiple' => 'multiple', 'class' => 'js-example-basic-multiple form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('label', 'Label',['class' => 'form-label']) }}}
                @if ($record->label)
                    {{{ Form::select('label', $labels, $record->label->id, ['placeholder' => 'Choisissez un label', 'class' => 'js-example-basic-single form-control']) }}}
                @else
                    {{{ Form::select('label', $labels, null, ['placeholder' => 'Choisissez un label', 'class' => 'js-example-basic-single form-control']) }}}
                @endif
            </div>
            <div class="form-group">
                {{{ Form::label('stock', 'Stock',['class' => 'form-label']) }}}
                {{{ Form::number('stock', $record->stock, ['class' => 'form-control']) }}}
            </div>
                {{{ Form::submit('Enregistrer', ['class' => 'submit-button']) }}}
            {!! Form::close() !!}
        </div>
    </section>

@endsection