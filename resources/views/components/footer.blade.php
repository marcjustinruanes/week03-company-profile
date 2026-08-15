<footer class="footer">
    <div class="container footer-grid">
        <div>
            <a class="brand footer-brand" href="{{ route('home') }}">
                <span class="brand-mark"><span></span><span></span><span></span></span>
                <span>Nexa<span>Works</span></span>
            </a>
            <p class="footer-copy">We turn complex technology into simple, useful digital experiences.</p>
        </div>

        <div>
            <p class="footer-label">Explore</p>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div>
            <p class="footer-label">Connect</p>
            <a href="#">LinkedIn ↗</a>
            <a href="#">Instagram ↗</a>
            <a href="#">Facebook ↗</a>
        </div>

        <div>
            <p class="footer-label">Contact</p>
            <a href="mailto:hello@nexaworks.example">hello@nexaworks.example</a>
            <a href="tel:+639001234567">+63 900 123 4567</a>
            <span>Manila, Philippines</span>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>© {{ date('Y') }} NexaWorks. All rights reserved.</span>
        <span>Built with Laravel MVC.</span>
    </div>
</footer>
