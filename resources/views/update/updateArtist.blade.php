@extends('layouts.base')
@section('title', 'Update Artist')
@section('main')
    <section class="container">

        <div class="form-container">
            <h1 class="">Mise a jour d'un artiste</h1>
            {!! Form::open(['url' => '/artist/update']) !!}
            {{{ Form::hidden('id', $artist->id) }}}
            <div class="form-group">
                {{{ Form::label('name', 'Nom', ['class' => 'form-label']) }}}
                {{{ Form::text('name', $artist->name, ['class' => 'form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('age', 'Age', ['class' => 'form-label']) }}}
                {{{ Form::number('age', $artist->age, ['class' => 'form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label('records', 'Disque(s)', ['class' => 'form-label']) }}}
                {{{ Form::select('records[]', $records, $artist->records, ['multiple' => 'multiple', 'class' => 'js-example-basic-multiple form-control']) }}}
            </div>
            <div class="form-group">
                {{{ Form::label( 'country','Pays de naissance',['class' => 'form-label']) }}}
                @if ($artist->country)
                    {{{ Form::select('country', $countries, $artist->country->id, ['placeholder' => 'Choisissez un pays', 'class' => 'js-example-basic-single form-control']) }}}
                @else
                    {{{ Form::select('country', $countries, null, ['placeholder' => 'Choisissez un pays', 'class' => 'js-example-basic-single form-control']) }}}
                @endif
            </div>
            {{{ Form::submit('Enregistrer', ['class' => 'submit-button']) }}}
            {!! Form::close() !!}
        </div>
    </section>

@endsection