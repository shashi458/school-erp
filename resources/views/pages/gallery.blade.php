
@extends('layouts.app')

@section('title', 'Gallery | Bright Future School')

@section('content')

<section class="page-banner">
    <div class="container">
        <h1>School Gallery</h1>
        <p>A glimpse into learning, creativity and school life.</p>
    </div>
</section>

<section class="container section">
    <div class="section-heading">
        <span>OUR CAMPUS LIFE</span>
        <h2>Moments That Matter</h2>
    </div>

    <div class="gallery-grid">
        <div class="gallery-item gallery-one">
            <span>📚</span>
            <h3>Classroom Learning</h3>
        </div>

        <div class="gallery-item gallery-two">
            <span>⚽</span>
            <h3>Sports Activities</h3>
        </div>

        <div class="gallery-item gallery-three">
            <span>🎨</span>
            <h3>Art & Creativity</h3>
        </div>

        <div class="gallery-item gallery-four">
            <span>🔬</span>
            <h3>Science Activities</h3>
        </div>

        <div class="gallery-item gallery-five">
            <span>🎉</span>
            <h3>School Celebrations</h3>
        </div>

        <div class="gallery-item gallery-six">
            <span>🌱</span>
            <h3>Nature & Environment</h3>
        </div>
    </div>
</section>

@endsection
