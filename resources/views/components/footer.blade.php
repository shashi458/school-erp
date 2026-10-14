
<footer class="site-footer" id="contact">
    <div class="footer-main">
        <div>
            <h3>{{ $school['name'] }}</h3>
            <p>{{ $school['tagline'] }}</p>
        </div>

        <div class="footer-links">
            <a href="#about">About</a>
            <a href="#academics">Academics</a>
            <a href="#admissions">Admissions</a>
            <a href="#notices">Notices</a>
        </div>
    </div>

    <div class="footer-bottom">
        © {{ date('Y') }} {{ $school['name'] }}.
        All rights reserved.
    </div>
</footer>
