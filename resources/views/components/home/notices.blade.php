
<section class="section notices-section" id="notices">
    <div class="section-heading">
        <div>
            <span class="eyebrow">STAY INFORMED</span>
            <h2>Latest News & Notices</h2>
            <p>Stay up to date with school announcements.</p>
        </div>
    </div>

    <div class="notice-grid">
        @forelse ($notices as $notice)
            <article class="notice-card">
                <div class="notice-meta">
                    <span class="notice-category">
                        {{ $notice['category'] }}
                    </span>

                    <time>{{ $notice['date'] }}</time>
                </div>

                <h3>{{ $notice['title'] }}</h3>

                <p>{{ $notice['description'] }}</p>

                <a href="#contact" class="text-link">
                    Read More →
                </a>
            </article>
        @empty
            <p>No notices available at the moment.</p>
        @endforelse
    </div>
</section>
