
@extends('layouts.app')

@section('title', 'Home | Bright Future School')

@section('content')

<section class="hero">
    <div class="container hero-content">
        <span class="hero-label">WELCOME TO BRIGHT FUTURE SCHOOL</span>
        <h1>Inspiring Young Minds.<br>Creating Bright Futures.</h1>
        <p>
            Quality education, modern learning and strong values
            to help every student achieve their dreams.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('admission') }}" class="btn btn-primary">
                Apply for Admission
            </a>
            <a href="{{ route('about') }}" class="btn btn-outline">
                Explore Our School
            </a>
        </div>
    </div>
</section>

<section class="container section">
    <div class="section-heading">
        <span>WHY CHOOSE US</span>
        <h2>Education Beyond Classrooms</h2>
        <p>We help students grow academically, socially and creatively.</p>
    </div>

    <div class="card-grid">
        <div class="feature-card">
            <div class="feature-icon">📚</div>
            <h3>Quality Education</h3>
            <p>Strong academic foundations with student-focused learning.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🔬</div>
            <h3>Modern Learning</h3>
            <p>Practical activities that encourage curiosity and discovery.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🏆</div>
            <h3>Overall Development</h3>
            <p>Sports, arts and activities that build confidence and teamwork.</p>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">
        <div><h2>500+</h2><p>Students</p></div>
        <div><h2>30+</h2><p>Teachers</p></div>
        <div><h2>15+</h2><p>Years of Learning</p></div>
        <div><h2>100%</h2><p>Focus on Growth</p></div>
    </div>
</section>

<section class="container section cta-section">
    <h2>Give Your Child a Bright Future</h2>
    <p>Discover a supportive learning environment for your child.</p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Our School</a>
</section>

@endsection
