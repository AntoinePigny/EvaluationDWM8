@extends('layouts.base')
@section('title', 'Nouvel Artiste')
@section('main')
    <section class="container">

        <h1 class="col-12">Ajoutez un artiste</h1>
        {!! Form::open(['url' => '/newartist/insert']) !!}
        <div class="col-12 form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('name', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Disques') }}}
            {{{ Form::select('records', $records, null, ['size' => count($records), 'multiple' => true], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Pays de Naissance') }}}
            {{{ Form::select('country', $countries, null, [], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Age') }}}
            {{{ Form::number('age', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::submit('Enregistrer') }}}
        </div>
        {!! Form::close() !!}
    </section>

@endsection