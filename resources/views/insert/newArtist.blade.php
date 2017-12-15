@extends('layouts.base')
@section('title', 'Nouvel Artiste')
@section('main')
    <section class="container">
        <section class="container">
            <div class="form-container">
                <h1 class="col-12">Nouvel Artiste</h1>
                {!! Form::open(['url' => '/newartist/insert']) !!}
                <div class="form-group">
                    {{{ Form::label('name', 'Nom', ['class' => 'form-label']) }}}
                    {{{ Form::text('name', null, ['class' => 'form-control']) }}}
                </div>
                <div class="form-group">
                    {{{ Form::label('age', 'Age', ['class' => 'form-label']) }}}
                    {{{ Form::number('age', null, ['class' => 'form-control']) }}}
                </div>
                <div class="form-group">
                    {{{ Form::label('records', 'Disque(s)', ['class' => 'form-label']) }}}
                    {{{ Form::select('records[]', $records, null, ['multiple' => 'multiple', 'class' => 'js-example-basic-multiple form-control']) }}}
                </div>
                <div class="form-group">
                    {{{ Form::label( 'country','Pays de naissance',['class' => 'form-label']) }}}
                    {{{ Form::select('country', $countries, null, ['placeholder' => 'Choisissez un pays', 'class' => 'js-example-basic-single form-control']) }}}
                </div>
                {{{ Form::submit('Enregistrer', ['class' => 'submit-button']) }}}
                {!! Form::close() !!}
            </div>
    </section>

@endsection