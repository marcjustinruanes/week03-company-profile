@extends('layouts.app')

@section('title', 'Contact — NexaWorks')

@section('content')
<section class="page-hero contact-hero">
    <div class="container narrow">
        <span class="eyebrow">Let's talk</span>
        <h1>Have something<br><em>in mind?</em></h1>
        <p>Tell us what you're building, what is not working, or simply what you wish could be better.</p>
    </div>
</section>

<section class="section section-white">
    <div class="container contact-grid">
        <div class="contact-info">
            <span class="eyebrow">Reach out</span>
            <h2>Start with a<br><em>conversation.</em></h2>
            <div class="contact-item"><span>Email</span><a href="mailto:hello@nexaworks.example">hello@nexaworks.example</a></div>
            <div class="contact-item"><span>Phone</span><a href="tel:+639001234567">+63 900 123 4567</a></div>
            <div class="contact-item"><span>Studio</span><p>Manila, Philippines</p></div>
        </div>

        <form class="contact-form" onsubmit="return false;">
            <div class="form-row"><label>First name<input type="text" placeholder="Juan"></label><label>Last name<input type="text" placeholder="Dela Cruz"></label></div>
            <label>Email address<input type="email" placeholder="juan@example.com"></label>
            <label>What can we help with?<select><option>Select a service</option><option>Web Development</option><option>Mobile Development</option><option>UI/UX Design</option><option>Cloud Solutions</option><option>Cybersecurity</option><option>IT Consulting</option></select></label>
            <label>Tell us a little more<textarea rows="5" placeholder="A few details about your project..."></textarea></label>
            <button class="button button-dark" type="submit">Send inquiry <span>↗</span></button>
            <small>This form is UI-only for the academic project.</small>
        </form>
    </div>
</section>
@endsection
