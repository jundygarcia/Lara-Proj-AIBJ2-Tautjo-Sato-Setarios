@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <section class="hero">
        <div class="hero-content">
            <h1>Kape Karon</h1>
            <p>Freshly brewed, made with love in Butuan.</p>
            <a href="/contact" class="hero-btn">Visit Us</a>
        </div>
    </section>

    <section class="our-story">
        <h2>Our Story</h2>
        <p>Kape Karon is a cozy neighborhood café serving locally sourced coffee, fresh pastries, and a warm place to sit and unwind.</p>

        <div class="features">
            <div class="feature">
                <h3>Fresh Coffee</h3>
                <p>Brewed fresh every morning from locally grown beans.</p>
            </div>
            <div class="feature">
                <h3>Cozy Space</h3>
                <p>A relaxing spot for studying, meeting friends, or unwinding.</p>
            </div>
            <div class="feature">
                <h3>Local Pastries</h3>
                <p>Baked daily and made to go with every cup.</p>
            </div>
        </div>
    </section>

    <button id="theme-toggle" class="theme-toggle" type="button">🌙 Dark mode</button>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush