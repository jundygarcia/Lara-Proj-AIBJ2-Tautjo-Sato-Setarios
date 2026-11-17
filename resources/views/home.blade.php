@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <h1>Welcome to Kape Karon</h1>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush