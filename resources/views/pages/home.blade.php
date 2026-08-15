@extends('layouts.app')

@section('title', 'NexaWorks — Digital solutions that move businesses forward')

@section('content')
<section class="hero">
    <div class="hero-glow glow-one"></div>
    <div class="hero-glow glow-two"></div>
    <div class="container hero-grid">
        <div class="hero-copy">
            <div class="eyebrow"><span class="pulse"></span> Digital studio · Philippines</div>
            <h1>Technology that feels <em>simple.</em></h1>
            <p class="hero-text">NexaWorks helps ambitious teams build better websites, apps, and digital systems — with strategy, design, and technology working as one.</p>
            <div class="hero-actions">
                <a class="button button-dark" href="{{ route('contact') }}">Start a project <span>↗</span></a>
                <a class="text-link" href="{{ route('services') }}">Explore our services <span>→</span></a>
            </div>
            <div class="trust-row">
                <div><strong>40+</strong><span>Projects shipped</span></div>
                <div><strong>12</strong><span>Industries served</span></div>
                <div><strong>98%</strong><span>Client satisfaction</span></div>
            </div>
        </div>

        <div class="hero-art">
            <div class="orb orb-back"></div>
            <div class="dashboard-card">
                <div class="card-top">
                    <span>PROJECT / 024</span><span class="status"><i></i> Live</span>
                </div>
                <div class="chart">
                    <div class="chart-label">Growth overview <strong>+28.4%</strong></div>
                    <svg viewBox="0 0 500 190" preserveAspectRatio="none" aria-hidden="true">
                        <path class="gridline" d="M0 40 H500 M0 95 H500 M0 150 H500"/>
                        <path class="area" d="M0 155 C55 145 62 112 110 125 S170 92 210 104 S270 54 315 76 S365 60 405 38 S460 48 500 12 V190 H0 Z"/>
                        <path class="line" d="M0 155 C55 145 62 112 110 125 S170 92 210 104 S270 54 315 76 S365 60 405 38 S460 48 500 12"/>
                    </svg>
                </div>
                <div class="mini-metrics">
                    <div><span>Revenue</span><strong>₱2.84M</strong></div>
                    <div><span>Users</span><strong>48.2K</strong></div>
                    <div><span>Conversion</span><strong>7.8%</strong></div>
                </div>
            </div>
            <div class="floating-note"><span class="note-icon">✦</span><div><strong>Designed to work</strong><small>Beautiful. Useful. Scalable.</small></div></div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-heading split">
            <div><span class="eyebrow">What we do</span><h2>From first idea<br>to <em>real impact.</em></h2></div>
            <p>We combine business thinking, human-centered design, and modern engineering to create digital products people actually enjoy using.</p>
        </div>

        <div class="service-preview-grid">
            <a href="{{ route('services') }}" class="service-preview">
                <span class="service-number">01</span><span class="service-icon">◌</span>
                <h3>Web Development</h3><p>Fast, responsive websites built around your goals.</p><span class="arrow">↗</span>
            </a>
            <a href="{{ route('services') }}" class="service-preview">
                <span class="service-number">02</span><span class="service-icon">⌁</span>
                <h3>Mobile Development</h3><p>Useful mobile experiences designed for everyday life.</p><span class="arrow">↗</span>
            </a>
            <a href="{{ route('services') }}" class="service-preview">
                <span class="service-number">03</span><span class="service-icon">✦</span>
                <h3>UI/UX Design</h3><p>Interfaces that feel clear, intentional, and human.</p><span class="arrow">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="statement-section">
    <div class="container statement">
        <span class="eyebrow">Our point of view</span>
        <h2>Good technology disappears.<br><em>Great design makes it feel obvious.</em></h2>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-box">
        <div><span class="eyebrow">Have an idea?</span><h2>Let's make something<br>worth <em>remembering.</em></h2></div>
        <a class="button button-light" href="{{ route('contact') }}">Tell us about it <span>↗</span></a>
    </div>
</section>
@endsection
