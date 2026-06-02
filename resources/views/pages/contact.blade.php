@extends('index')

@section('page_title', 'Contact | DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/contact-digitexia.css') }}">
<style>
  .rv {
    opacity: 1;
    transform: none;
  }

  .rv.vis {
    opacity: 1;
    transform: none;
  }

  #hero h1,
  #hero .lead,
  .contact-copy h1,
  .contact-card h2,
  .form-head h3,
  .contact-point-title,
  #contact-main h2,
  #contact-main h3,
  #faq h2,
  #location h2,
  .ic-title,
  .loc-label,
  .faq-q-text,
  .form-head h3,
  .faq-contact-cta,
  .form-success .success-title {
    color: var(--text-main) !important;
  }

  .contact-points {
    display: grid;
    gap: .85rem;
    margin-top: 1.75rem;
    max-width: 520px;
  }

  .contact-point {
    display: flex;
    align-items: flex-start;
    gap: .75rem;
    padding: .95rem 1rem;
    border-radius: 14px;
    border: 1px solid var(--bdr);
    background: var(--surface-soft);
    text-decoration: none;
    transition: border-color .2s ease, background .2s ease, transform .18s ease;
  }

  .contact-point:hover {
    border-color: var(--blue-bdr);
    background: var(--blue-dim);
    transform: translateY(-2px);
  }

  .contact-point-ico {
    width: 30px;
    height: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    background: var(--blue-dim);
    border: 1px solid var(--blue-bdr);
    color: var(--accent-fg);
  }

  .contact-point-title {
    font-weight: 700;
    margin-bottom: .15rem;
  }

  .contact-point-desc {
    font-size: .9rem;
    color: var(--muted-lt);
    line-height: 1.6;
  }

  .contact-shell {
    padding: 130px 5% 100px;
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(ellipse 60% 55% at 50% 20%, var(--accent-soft) 0%, transparent 65%),
      radial-gradient(ellipse 35% 40% at 15% 75%, var(--success-soft) 0%, transparent 60%),
      var(--ink);
  }

  .contact-grid {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1.05fr;
    gap: 2rem;
    align-items: start;
  }

  .contact-copy h1 {
    font-family: 'Clash Display', sans-serif;
    font-size: clamp(2.4rem, 5vw, 4.1rem);
    line-height: 1.04;
    letter-spacing: -.035em;
    margin-bottom: 1rem;
  }

  .contact-copy h1 em {
    font-style: normal;
    background: linear-gradient(135deg,var(--accent-soft) 0%,var(--blue-lt) 40%,var(--green) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .contact-copy .lead {
    max-width: 560px;
  }

  .contact-card {
    padding: 2rem;
    border-radius: 22px;
    border: 1px solid var(--bdr);
    background: var(--card-bg);
    box-shadow: var(--shadow-elev);
    backdrop-filter: blur(18px);
    position: relative;
    overflow: hidden;
  }

  .contact-card::before {
    content: "";
    position: absolute;
    inset: 0 0 auto;
    height: 3px;
    background: linear-gradient(90deg, var(--blue), var(--green));
  }

  .contact-card h2 {
    margin-bottom: .5rem;
  }

  .contact-card .sub {
    color: var(--muted-lt);
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .contact-mini-row {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: .85rem;
    margin-top: 2rem;
  }

  .contact-mini {
    padding: 1rem;
    border-radius: 14px;
    border: 1px solid var(--bdr);
    background: var(--surface-soft);
  }

  .contact-mini .label {
    font-size: .68rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: .35rem;
  }

  .contact-mini .value {
    color: var(--text-main);
    font-size: .9rem;
    line-height: 1.5;
  }

  .form-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: .85rem;
    margin-bottom: .85rem;
  }

  .form-field {
    display: flex;
    flex-direction: column;
    gap: .4rem;
  }

  .form-field.full {
    grid-column: span 2;
  }

  .form-label {
    font-size: .68rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--muted);
  }

  .form-input,
  .form-select,
  .form-textarea {
    width: 100%;
    background: var(--ink-3);
    border: 1px solid var(--bdr);
    border-radius: 10px;
    padding: .82rem 1rem;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: .875rem;
    color: var(--text-main);
    outline: none;
    transition: border-color .2s, box-shadow .2s;
  }

  .form-input:focus,
  .form-select:focus,
  .form-textarea:focus {
    border-color: var(--blue-bdr);
    box-shadow: 0 0 0 3px var(--accent-soft);
  }

  .form-textarea {
    min-height: 150px;
    resize: vertical;
  }

  .form-submit-row {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 1rem;
  }

  .form-secure {
    font-size: .72rem;
    color: var(--muted);
    display: flex;
    align-items: center;
    gap: .4rem;
  }

  html.light-mode .contact-shell {
    background:
      radial-gradient(ellipse 60% 55% at 50% 20%, rgba(37, 99, 235, .08) 0%, transparent 65%),
      radial-gradient(ellipse 35% 40% at 15% 75%, rgba(16, 185, 129, .08) 0%, transparent 60%),
      var(--bg-primary);
  }

  html.light-mode .contact-card,
  html.light-mode .contact-point,
  html.light-mode .contact-mini {
    background: var(--card-bg);
    border-color: var(--border-color);
  }

  html.light-mode .contact-point:hover {
    background: var(--surface-soft);
    border-color: var(--border-strong);
  }

  html.light-mode .form-input,
  html.light-mode .form-select,
  html.light-mode .form-textarea {
    background: var(--surface-soft);
    border-color: var(--border-color);
    color: var(--text-main);
  }

  html.light-mode .form-input::placeholder,
  html.light-mode .form-textarea::placeholder {
    color: var(--text-soft);
  }

  @media (max-width: 1024px) {
    .contact-grid {
      grid-template-columns: 1fr;
    }

    .contact-mini-row {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 640px) {
    .form-grid,
    .form-field.full {
      grid-template-columns: 1fr;
      grid-column: span 1;
    }
  }
</style>
@endpush

@section('contain')
<section class="contact-shell">
  <div class="contact-grid">
    <div class="contact-copy rv">
      <div class="breadcrumb">
        <a href="{{ url('/') }}">Home</a><span>&rsaquo;</span>
        <span class="curr">Contact</span>
      </div>
      <span class="tag">Contact DigiTexia</span>
      <h1>Let's assess your <em>digital priority.</em></h1>
      <p class="lead">Tell us what you want to improve: manual workflows, visibility, customer experience, reporting, or a custom digital platform.</p>

      <div class="contact-points">
        <a class="contact-point" href="tel:+237650945280">
          <div class="contact-point-ico"><i class="ti ti-phone"></i></div>
          <div>
            <div class="contact-point-title">Call us</div>
            <div class="contact-point-desc">(+237) 650 945 280 or (+237) 691 095 590</div>
          </div>
        </a>
        <a class="contact-point" href="mailto:contactdigitexia@gmail.com">
          <div class="contact-point-ico"><i class="ti ti-mail"></i></div>
          <div>
            <div class="contact-point-title">Email</div>
            <div class="contact-point-desc">contactdigitexia@gmail.com</div>
          </div>
        </a>
        <div class="contact-point">
          <div class="contact-point-ico"><i class="ti ti-map-pin"></i></div>
          <div>
            <div class="contact-point-title">Location</div>
            <div class="contact-point-desc">Yaounde, Cameroon</div>
          </div>
        </div>
      </div>

      <div class="contact-mini-row">
        <div class="contact-mini">
          <div class="label">Response time</div>
          <div class="value">Within 24 hours</div>
        </div>
        <div class="contact-mini">
          <div class="label">Availability</div>
          <div class="value">Mon - Fri, 8:00 - 18:00</div>
        </div>
        <div class="contact-mini">
          <div class="label">Best for</div>
          <div class="value">Assessments, projects, partnerships</div>
        </div>
      </div>
    </div>

    <div class="contact-card rv d2">
      <div class="form-head">
        <div class="tag" style="margin-bottom:1rem">Request assessment</div>
        <h2>Tell us what you want to solve</h2>
        <p class="sub">Share the business context. We will reply with the clearest next step.</p>
      </div>

      <form id="contactForm">
        <div class="form-grid">
          <div class="form-field">
            <label class="form-label">First name</label>
            <input type="text" id="firstName" class="form-input" placeholder="Jean">
          </div>
          <div class="form-field">
            <label class="form-label">Last name</label>
            <input type="text" id="lastName" class="form-input" placeholder="Kamga">
          </div>
          <div class="form-field">
            <label class="form-label">Email</label>
            <input type="email" id="email" class="form-input" placeholder="you@company.com">
          </div>
          <div class="form-field">
            <label class="form-label">Phone</label>
            <input type="tel" id="phone" class="form-input" placeholder="(+237) 6XX XXX XXX">
          </div>
          <div class="form-field full">
            <label class="form-label">Subject</label>
            <input type="text" id="subject" class="form-input" placeholder="Assessment request, project brief, or partnership">
          </div>
          <div class="form-field full">
            <label class="form-label">Message</label>
            <textarea id="message" class="form-textarea" placeholder="Tell us what you need to improve, what currently slows your team down, and what result you expect."></textarea>
          </div>
        </div>

        <div class="form-submit-row">
          <button type="submit" class="btn-pri">Send message</button>
          <div class="form-secure"><i class="ti ti-shield-lock"></i> Private and confidential.</div>
        </div>
      </form>
    </div>
  </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const subject = document.getElementById('subject').value.trim() || 'Assessment request';
    const message = document.getElementById('message').value.trim();

    const body = [
      'Hello DigiTexia,',
      '',
      'I would like to discuss a digital assessment.',
      '',
      `Name: ${firstName} ${lastName}`.trim(),
      `Email: ${email}`,
      `Phone: ${phone}`,
      '',
      'Message:',
      message || 'Please contact me to discuss my project.'
    ].join('\n');

    window.location.href = `mailto:contactdigitexia@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
  });
});
</script>
@endpush
@endsection
