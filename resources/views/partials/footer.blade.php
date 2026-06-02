<style>
  footer {
    color: var(--text-main);
    background: var(--card-bg);
    border-top: 1px solid var(--border-color);
    transition: background-color .3s ease, color .3s ease, border-color .3s ease;
  }

  footer a {
    color: var(--text-main);
    transition: color .3s ease, opacity .3s ease;
  }

  footer a:hover {
    color: var(--blue-lt);
  }

  footer .fbrand-bio,
  footer .fcol ul a,
  footer .fbot,
  footer .muted-link,
  footer .fc-row,
  footer .newsletter-note {
    color: var(--text-muted);
  }

  footer .socials .soc,
  footer .fc-ico {
    color: var(--text-main);
    background: var(--surface-bg);
    border-color: var(--border-color);
  }

  footer .footer-logo {
    filter: none;
  }

  footer .footer-newsletter {
    position: relative;
    overflow: hidden;
    padding: 3rem 5% 3.25rem;
    border-bottom: 1px solid var(--border-color);
    background:
      radial-gradient(circle at 82% 18%, rgba(37, 99, 235, 0.14), transparent 24%),
      radial-gradient(circle at 12% 82%, rgba(16, 185, 129, 0.10), transparent 22%),
      linear-gradient(135deg, var(--surface-soft) 0%, rgba(18, 70, 240, 0.02) 100%);
  }

  footer .footer-newsletter::before {
    content: "";
    position: absolute;
    inset: auto -90px -90px auto;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    background: radial-gradient(circle, var(--accent-soft) 0%, transparent 70%);
    opacity: 0.6;
    filter: blur(26px);
    pointer-events: none;
  }

  footer .footer-newsletter-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
    position: relative;
    z-index: 1;
  }

  footer .footer-newsletter-copy {
    flex: 1 1 320px;
    max-width: 560px;
  }

  footer .newsletter-label {
    display: inline-flex;
    align-items: center;
    padding: .4rem .9rem;
    border-radius: 999px;
    background: var(--blue-dim);
    color: var(--blue-lt);
    font-size: .7rem;
    font-weight: 800;
    letter-spacing: .12em;
    text-transform: uppercase;
    margin-bottom: .85rem;
  }

  footer .footer-newsletter-copy h5 {
    font-family: 'Clash Display', sans-serif;
    margin: 0 0 .75rem;
    color: var(--text-main);
    font-size: clamp(1.45rem, 2vw, 2.05rem);
    font-weight: 700;
    line-height: 1.1;
  }

  footer .footer-newsletter-copy p {
    margin: 0;
    color: var(--text-muted);
    line-height: 1.8;
    font-size: .9rem;
  }

  footer .footer-newsletter-form {
    display: flex;
    gap: .8rem;
    flex: 1 1 400px;
    flex-wrap: nowrap;
    width: 100%;
    max-width: 540px;
  }

  footer .footer-newsletter-input {
    flex: 1 1 240px;
    padding: 1rem 1.1rem;
    border-radius: 14px;
    border: 1px solid var(--border-color);
    background: var(--surface-bg);
    color: var(--text-main);
    font-size: 1rem;
    transition: all .2s ease;
  }

  footer .footer-newsletter-input:focus {
    outline: none;
    border-color: var(--blue-bdr);
    box-shadow: 0 0 0 4px var(--accent-soft);
  }

  footer .footer-newsletter-input::placeholder {
    color: var(--text-soft);
  }

  footer .footer-newsletter-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: .5rem;
    padding: 1rem 1.6rem;
    border-radius: 14px;
    border: none;
    background: var(--blue);
    color: var(--on-accent) !important;
    font-weight: 700;
    white-space: nowrap;
    cursor: pointer;
    transition: all .2s ease;
    box-shadow: 0 4px 12px rgba(18, 70, 240, .2);
  }

  footer .footer-newsletter-button:hover {
    background: var(--blue-lt);
    color: var(--on-accent) !important;
    transform: translateY(-1px);
    box-shadow: 0 8px 20px rgba(18, 70, 240, .3);
  }

  footer .newsletter-note {
    display: block;
    max-width: 1240px;
    margin: .85rem auto 0;
    font-size: .72rem;
    line-height: 1.5;
  }

  footer .footer-divider {
    border-top: 1px solid var(--border-color);
  }

  footer .footer-main {
    max-width: 1240px;
    margin: 0 auto;
    padding: 3rem 0 2.5rem;
  }

  @media (max-width: 900px) {
    footer .footer-newsletter-form {
      max-width: 100%;
    }
  }

  @media (max-width: 600px) {
    footer .footer-newsletter {
      padding: 2.5rem 5% 2.75rem;
    }

    footer .footer-newsletter-form {
      flex-wrap: wrap;
    }

    footer .footer-newsletter-button {
      width: 100%;
      height: 50px;
    }
  }
</style>

<footer>
  <div class="footer-newsletter">
    <div class="footer-newsletter-inner">
      <div class="footer-newsletter-copy">
        <span class="newsletter-label">{{ __('Newsletter') }}</span>
        <h5>{{ __('Newsletter Heading') }}</h5>
        <p>{{ __('Newsletter Lead') }}</p>
      </div>

      <form class="footer-newsletter-form" id="footerNewsletterForm">
        <input
          type="email"
          name="newsletter_email"
          id="footerNewsletterEmail"
          class="footer-newsletter-input"
          placeholder="{{ __('Newsletter Email Placeholder') }}"
          aria-label="{{ __('Newsletter Email Placeholder') }}"
          required
        >
        <button type="submit" class="footer-newsletter-button">
          {{ __('Subscribe') }}
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
            <path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </form>
    </div>
    <span class="newsletter-note">{{ __('Footer Newsletter Note') }}</span>
  </div>

  <div class="footer-main">
    <div class="footer-grid">
      <div>
        <img src="{{ asset('logo/logo-footer.png') }}" alt="DigiTexia" class="footer-logo">
        <p class="fbrand-bio">{{ __('Business Bio') }}</p>
        <div class="socials">
          <a href="https://www.facebook.com/digitexia/" class="soc" title="{{ __('Facebook') }}">f</a>
          <a href="https://www.linkedin.com/" class="soc" title="{{ __('LinkedIn') }}">in</a>
        </div>
      </div>

      <div class="fcol">
        <h5>{{ __('Quick Links') }}</h5>
        <ul>
          <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
          <li><a href="{{ url('/solutions') }}">{{ __('Solutions') }}</a></li>
          <li><a href="{{ url('/the-problem') }}">{{ __('The Problem') }}</a></li>
          <li><a href="{{ url('/life-at-digi') }}">{{ __('Blog') }}</a></li>
          <li><a href="{{ url('/contact-us') }}">{{ __('Contact') }}</a></li>
        </ul>
      </div>

      <div class="fcol">
        <h5>{{ __('Products') }}</h5>
        <ul>
          <li><a href="{{ url('/solutions/flexicare') }}">FlexiCare</a></li>
          <li><a href="{{ url('/solutions/inventorypro') }}">InventoryPro</a></li>
          <li><a href="{{ url('/solutions/perfomia') }}">Perfomia</a></li>
          <li><a href="{{ url('/solutions/medtrace') }}">MedTrace</a></li>
        </ul>
      </div>

      <div class="fcol">
        <h5>{{ __('Contact Info') }}</h5>
        <div class="fcontact">
          <div class="fc-row"><span class="fc-ico"><i class="ti ti-mail"></i></span><a href="mailto:contactdigitexia@gmail.com">contactdigitexia@gmail.com</a></div>
          <div class="fc-row"><span class="fc-ico"><i class="ti ti-phone"></i></span>(+237) 650 945 280 / 691 095 590</div>
          <div class="fc-row"><span class="fc-ico"><i class="ti ti-map-pin"></i></span>Yaounde, Cameroon</div>
        </div>
      </div>
    </div>

    <div class="fbot">
      <span>&copy; 2025 DigiTexia. {{ __('All rights reserved') }}</span>
      <span>{{ __('Powered by') }} <a href="https://groupsnowwhite.com/" class="muted-link">Snow White Group</a></span>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('footerNewsletterForm');
  if (!form) return;

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('footerNewsletterEmail').value.trim();
    const subject = 'Newsletter subscription - DigiTexia';
    const body = [
      'Hello DigiTexia,',
      '',
      'I would like to subscribe to the DigiTexia newsletter.',
      '',
      `Email: ${email || 'Please contact me for my email address.'}`
    ].join('\n');

    window.location.href = `mailto:contactdigitexia@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
  });
});
</script>
