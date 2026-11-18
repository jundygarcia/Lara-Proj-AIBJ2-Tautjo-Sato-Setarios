@extends('layouts.app')

@section('title', 'About')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section class="about-hero">
        <h1>About Kape Karon</h1>
        <p>Freshly brewed, made with love in Butuan.</p>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush