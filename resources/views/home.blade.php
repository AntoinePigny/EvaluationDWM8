@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
    <section class="home-menu-container">
        <p class="home-category-label">Disques</p>
        <div class="home-category-button records">
            <a href="{{url('/records')}}"></a>
        </div>
        <p class="home-category-label">Artistes</p>
        <div class="home-category-button artists">
            <a href="{{url('/artists')}}"></a>
        </div>
        <p class="home-category-label">Labels</p>
        <div class="home-category-button labels">
            <a href="{{url('/labels')}}"></a>
        </div>
    </section>
@endsection