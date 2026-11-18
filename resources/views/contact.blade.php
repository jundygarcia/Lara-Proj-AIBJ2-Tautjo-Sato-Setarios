@extends('layouts.app')
@section('title', 'Contact')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('content')
    {{-- Contact page - created by Gio Setarios --}}
    <section class="contact-page">
        <div class="contact-heading">
            <h1>Contact Kape Karon</h1>
            <p>We would love to hear from you. Send us a message or plan your visit.</p>
        </div>

        <div class="contact-grid">
            {{-- Contact form - created by Gio Setarios --}}
            <section class="contact-card contact-form-card" aria-labelledby="contact-form-heading">
                <h2 id="contact-form-heading">Send us a message</h2>
                <form id="contact-form" class="contact-form" novalidate>
                    <div class="form-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" autocomplete="name" aria-describedby="name-error">
                        <span class="error-message" id="name-error"></span>
                    </div>

                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="email" aria-describedby="email-error">
                        <span class="error-message" id="email-error"></span>
                    </div>

                    <div class="form-field">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" aria-describedby="subject-error">
                        <span class="error-message" id="subject-error"></span>
                    </div>

                    <div class="form-field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" aria-describedby="message-error"></textarea>
                        <span class="error-message" id="message-error"></span>
                    </div>

                    <button class="contact-submit" type="submit">Send message</button>
                </form>
            </section>

            {{-- Contact details - created by Gio Setarios --}}
            <aside class="contact-card contact-details" aria-labelledby="contact-details-heading">
                <h2 id="contact-details-heading">Visit or call us</h2>
                <div class="detail-item">
                    <h3>Address</h3>
                    <p>J.C. Aquino Avenue, Butuan City, Agusan del Norte, Philippines</p>
                </div>
                <div class="detail-item">
                    <h3>Phone</h3>
                    <p><a href="tel:+63855551234">+63 85 555 1234</a></p>
                </div>
                <div class="detail-item">
                    <h3>Email</h3>
                    <p><a href="mailto:hello@kapekaron.com">hello@kapekaron.com</a></p>
                </div>
                <div class="detail-item">
                    <h3>Opening hours</h3>
                    <p>Monday - Saturday: 7:00 AM - 8:00 PM</p>
                    <p>Sunday: 8:00 AM - 6:00 PM</p>
                </div>
            </aside>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
