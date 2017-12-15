@extends('layouts.base')

@section('title', 'Liste des disques')
@section('main')
    <section class="flex-container">
        <h1>Stock 'n Roll</h1>
        <table class="container-table">
            <thead>
            <tr>
                <th class="column-title">Nom du Disque</th>
                <th class="column-title">Artiste(s)</th>
                <th class="column-title">Genres</th>
                <th class="column-title">Label</th>
                <th class="column-title">Stock(unités)</th>
                <th class="column-title">Delete</th>
                <th class="column-title">Mise à jour</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->name }}</td>
                    <td>
                        @foreach($record->artists as $artist)
                            <p>{{$artist->name}}</p>
                        @endforeach
                    </td>
                    <td>
                        @foreach($record->genres as $genre)
                            <span>{{$genre->name}}</span>
                        @endforeach
                    </td>
                    @if($record->label)
                        <td>{{$record->label->name}}</td>
                    @else <td>Indépendant</td>
                    @endif
                    <td>
                        <div class="cell-flex">
                            {!! Form::open(['url' => '/record/updateStock']) !!}
                            {{{ Form::hidden('id', $record->id) }}}
                            {{{ Form::number('stock', $record->stock, []) }}}
                            {{{ Form::submit('OK') }}}
                        </div>
                    </td>
                    <td>
                        <form method="get" action="/record/delete/{{$record->id}}">
                            {{ csrf_field() }}
                            <button type="submit">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="get" action="/record/update/{{$record->id}}">
                            {{ csrf_field() }}
                            <button type="submit">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{url('/newrecord')}}">Nv Disque</a>
    </section>
@endsection