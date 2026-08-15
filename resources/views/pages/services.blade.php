@extends('layouts.app')

@section('title', 'Services — NexaWorks')

@section('content')
<section class="page-hero services-hero">
    <div class="container narrow">
        <span class="eyebrow">Our services</span>
        <h1>Ideas into <em>experiences.</em></h1>
        <p>Six capabilities, one focused team. We bring strategy, design, and technology together to solve real business problems.</p>
    </div>
</section>

<section class="section section-white">
    <div class="container service-list">
        <article class="service-row"><span>01</span><div class="big-icon">◌</div><div><h2>Web Development</h2><p>Responsive corporate websites, portals, and web applications engineered for performance and maintainability.</p><div class="tags"><i>Laravel</i><i>PHP</i><i>JavaScript</i></div></div><b>↗</b></article>
        <article class="service-row"><span>02</span><div class="big-icon">⌁</div><div><h2>Mobile Development</h2><p>Mobile-first experiences that make important tasks fast, intuitive, and enjoyable.</p><div class="tags"><i>Flutter</i><i>iOS</i><i>Android</i></div></div><b>↗</b></article>
        <article class="service-row"><span>03</span><div class="big-icon">✦</div><div><h2>UI/UX Design</h2><p>Research, wireframes, prototypes, and polished interfaces that turn complexity into clarity.</p><div class="tags"><i>Figma</i><i>Research</i><i>Prototyping</i></div></div><b>↗</b></article>
        <article class="service-row"><span>04</span><div class="big-icon">◇</div><div><h2>Cloud Solutions</h2><p>Reliable digital infrastructure and deployment strategies that help products scale with confidence.</p><div class="tags"><i>Cloud</i><i>DevOps</i><i>Security</i></div></div><b>↗</b></article>
        <article class="service-row"><span>05</span><div class="big-icon">⌬</div><div><h2>Cybersecurity</h2><p>Practical security thinking woven into the product lifecycle, from access control to secure development.</p><div class="tags"><i>Security</i><i>Audits</i><i>Best practices</i></div></div><b>↗</b></article>
        <article class="service-row"><span>06</span><div class="big-icon">↗</div><div><h2>IT Consulting</h2><p>Technology guidance for organizations that want to make smarter decisions and ship with less friction.</p><div class="tags"><i>Strategy</i><i>Architecture</i><i>Planning</i></div></div><b>↗</b></article>
    </div>
</section>
@endsection
