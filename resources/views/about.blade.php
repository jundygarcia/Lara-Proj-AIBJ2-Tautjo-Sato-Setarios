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

        <section class="about-story">
        <h2>How Kape Karon Began</h2>
        <p>
            Kape Karon started as a simple idea: a cozy corner in Butuan where
            friends, students, and neighbors can enjoy a good cup of coffee.
        </p>

        <div id="story-more" class="story-more">
            <p>
                What began as a small neighborhood café grew into a favorite spot
                in the city. We source our beans from local farmers and brew every
                cup fresh each morning.
            </p>
            <p>
                Today, we serve coffee, homemade pastries, and a warm space for
                studying, meeting friends, or simply unwinding.
            </p>
        </div>

        <button id="read-more-btn" class="read-more-btn" type="button">Read More</button>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush