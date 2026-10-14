
@extends('layouts.app')

@section('title', 'Academics | Bright Future School')

@section('content')

<section class="page-banner">
    <div class="container">
        <h1>Academic Programmes</h1>
        <p>Learning pathways designed for every stage of development.</p>
    </div>
</section>

<section class="container section">
    <div class="section-heading">
        <span>OUR PROGRAMMES</span>
        <h2>Explore Our Classes</h2>
    </div>

    <div class="card-grid">
        <div class="feature-card">
            <div class="feature-icon">🧸</div>
            <h3>Pre-Primary</h3>
            <p>Play-based activities, communication and early learning.</p>
            <p><strong>Classes:</strong> Nursery, LKG, UKG</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">📖</div>
            <h3>Primary School</h3>
            <p>Core subjects, creative activities and essential skills.</p>
            <p><strong>Classes:</strong> I – V</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🧪</div>
            <h3>Middle School</h3>
            <p>Concept-based learning, projects and problem-solving.</p>
            <p><strong>Classes:</strong> VI – VIII</p>
        </div>
    </div>
</section>

@endsection
