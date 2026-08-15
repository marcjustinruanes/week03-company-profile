<header class="site-header">
    <nav class="nav container">
        <a class="brand" href="{{ route('home') }}" aria-label="NexaWorks home">
            <span class="brand-mark"><span></span><span></span><span></span></span>
            <span>Nexa<span>Works</span></span>
        </a>

        <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <div class="nav-links">
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
            <a class="nav-cta" href="{{ route('contact') }}">Let's talk <span>↗</span></a>
        </div>
    </nav>
</header>
