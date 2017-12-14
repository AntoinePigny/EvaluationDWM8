@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
    <section class="flex-container">
        <h1>Stock 'n Roll</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Nom du Disque</th>
                <th>Artiste(s)</th>
                <th>Label</th>
                <th>Stock(unités)</th>
                <th>Delete</th>
                <th>Upuh-datuh !!</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->name }}</td>
                    <td>
                        @foreach($record->artists as $artist)
                            <span>{{$artist->name}}</span>
                        @endforeach</td>
                    @if($record->label)
                        <td>{{$record->label->name}}</td>
                    @else <td>Indépendant</td>
                    @endif
                    <td>{{ $record->stock }}</td>

                {{--
                        <form method="get" action="/newcat/delete/{{$cat->id}}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-info">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="get" action="/newcat/update/{{$cat->id}}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-info">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection