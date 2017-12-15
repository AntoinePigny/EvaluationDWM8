@extends('layouts.base')

@section('title', 'Liste des disques')
@section('main')
    <section class="flex-container">
        <h1 class="artist-list-title">Les Artistes</h1>
        <h2 class="artist-list-flavor">(not by Santigold)</h2>
        <table class="container-table">
            <thead>
            <tr>
                <th>Nom de l'artiste</th>
                <th>Album(s)</th>
                <th>Age</th>
                <th>Pays de Naissance</th>
                <th>Delete</th>
                <th>Mise à jour</th>
            </tr>
            </thead>
            <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td>
                        @foreach($artist->records as $record)
                            <p>{{$record->name}}</p>
                        @endforeach
                    </td>
                    <td>{{ $artist->age }}</td>
                    @if($artist->country)
                        <td>{{$artist->country->label}}</td>
                    @else <td>Apatride</td>
                    @endif

                    <td>
                        <form method="get"  class="form-in-table" action="/artist/delete/{{$artist->id}}">
                            {{ csrf_field() }}
                            <button type="submit" class="delete-button">
                                DELETE
                            </button>
                        </form>
                    </td>
                    <td>
                        <div class="form-in-table">
                            <form method="get" action="/artist/update/{{$artist->id}}">
                                {{ csrf_field() }}
                                <button type="submit" class="update-button">
                                   UPDATE
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{url('/newartist')}}">Nv Artiste</a>
    </section>
@endsection