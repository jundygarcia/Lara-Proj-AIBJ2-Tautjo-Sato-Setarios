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

        <section class="mv-section">
        <div class="mv-card">
            <h3>Our Mission</h3>
            <p>
                To serve fresh, locally sourced coffee and pastries in a warm,
                welcoming space, while supporting local farmers and our community.
            </p>
        </div>
        <div class="mv-card">
            <h3>Our Vision</h3>
            <p>
                To be Butuan's most loved neighborhood café, where every visit
                feels like coming home.
            </p>
        </div>
    </section>

        <section class="team-section">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-card">
                <div class="avatar">JT</div>
                <h3>Jundy Tautjo</h3>
                <p>Founder &amp; Head Barista</p>
            </div>
            <div class="team-card">
                <div class="avatar">MS</div>
                <h3>Mirai Sato</h3>
                <p>Café Manager</p>
            </div>
            <div class="team-card">
                <div class="avatar">GS</div>
                <h3>Gio Setarios</h3>
                <p>Pastry Chef</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush