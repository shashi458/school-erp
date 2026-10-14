
@extends('layouts.app')

@section('title', 'Contact Us | Bright Future School')

@section('content')

<section class="page-banner">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We are happy to answer your questions.</p>
    </div>
</section>

<section class="container section two-column">
    <div>
        <span class="eyebrow">GET IN TOUCH</span>
        <h2>Let's Connect</h2>
        <p>Reach out to our team for general enquiries and admissions.</p>

        <div class="contact-item">
            <span>📍</span>
            <div>
                <h3>School Address</h3>
                <p>123 Education Road, Bengaluru, Karnataka</p>
            </div>
        </div>

        <div class="contact-item">
            <span>☎</span>
            <div>
                <h3>Phone</h3>
                <p>+91 98765 43210</p>
            </div>
        </div>

        <div class="contact-item">
            <span>✉</span>
            <div>
                <h3>Email</h3>
                <p>info@brightfuture.edu</p>
            </div>
        </div>

        <div class="contact-item">
            <span>🕒</span>
            <div>
                <h3>Office Hours</h3>
                <p>Monday – Saturday, 9:00 AM – 4:00 PM</p>
            </div>
        </div>
    </div>

    <div class="form-card">
        <h2>Send Us a Message</h2>
        <p>Demo form for presentation purposes only.</p>

        <form onsubmit="alert('Demo only: connect this form to Laravel before use.'); return false;">
            <label for="name">Your Name</label>
            <input id="name" type="text" placeholder="Enter your name" required>

            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="Enter your email" required>

            <label for="subject">Subject</label>
            <input id="subject" type="text" placeholder="Enter subject" required>

            <label for="message">Message</label>
            <textarea id="message" rows="5" placeholder="Write your message" required></textarea>

            <button type="submit" class="btn btn-primary full-width">
                Send Message
            </button>
        </form>
    </div>
</section>

@endsection
