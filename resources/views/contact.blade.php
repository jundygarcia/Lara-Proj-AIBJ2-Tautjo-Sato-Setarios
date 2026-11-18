@extends('layouts.app')
@section('title', 'Contact')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('content')
    {{-- Contact page - created by Gio Setarios --}}
    <section class="contact-page">
        <h1>Contact Kape Karon</h1>
        <p>We would love to hear from you.</p>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
