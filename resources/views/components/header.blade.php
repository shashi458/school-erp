
<header class="site-header">
    <a href="{{ route('home') }}" class="brand">
        <span class="brand-logo">BF</span>

        <span class="brand-text">
            <strong>{{ $school['name'] }}</strong>
            <small>{{ $school['tagline'] }}</small>
        </span>
    </a>

    <nav class="main-nav" aria-label="Main navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="#about">About</a>
        <a href="#academics">Academics</a>
        <a href="#admissions">Admissions</a>
        <a href="#notices">Notices</a>
        <a href="#contact">Contact</a>
    </nav>

    <a href="#admissions" class="btn btn-primary">
        Apply Now
    </a>
</header>
