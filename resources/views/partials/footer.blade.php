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
  footer .fc-row {
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
    width: 100%;
    border-radius: 0;
    border: none;
    backdrop-filter: blur(20px);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2.5rem;
    flex-wrap: wrap;
    position: relative;
    margin: 0;
    padding-bottom: 4rem;
    box-shadow: none;
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

  footer .footer-newsletter-copy {
    flex: 1 1 300px;
  }

  footer .footer-newsletter-copy h5 {
    font-family: 'Clash Display', sans-serif;
    margin: 0 0 .75rem;
    color: var(--text-main);
    font-size: clamp(1.5rem, 2vw, 2.1rem);
    font-weight: 700;
    line-height: 1.1;
  }

  footer .footer-newsletter-copy p {
    margin: 0;
    color: var(--text-muted);
    line-height: 1.8;
    font-size: .88rem;
  }

  footer .footer-newsletter-form {
    display: flex;
    gap: .8rem;
    flex: 1 1 400px;
    flex-wrap: nowrap;
    width: 100%;
    max-width: 560px;
  }

  footer .footer-newsletter-input {
    flex: 1 1 240px;
    padding: 1rem 1.1rem;
    border-radius: 16px;
    border: none;
    background: var(--surface-bg);
    color: var(--text-main);
    font-size: 1rem;
    transition: all .2s ease;
  }

  footer .footer-newsletter-input:focus {
    outline: none;
    box-shadow: 0 0 0 4px var(--accent-soft);
  }

  footer .footer-newsletter-input::placeholder {
    color: var(--text-soft);
  }

  footer .footer-newsletter-button {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 1.8rem;
    border-radius: 16px;
    border: none;
    background: var(--blue);
    color: var(--on-accent) !important;
    font-weight: 700;
    white-space: nowrap;
    cursor: pointer;
    transition: all .3s cubic-bezier(.4, 0, .2, 1);
    box-shadow: 0 4px 12px rgba(18, 70, 240, .2);
  }

  @media (max-width: 600px) {
    footer .footer-newsletter-form { flex-wrap: wrap; }
    footer .footer-newsletter-button { width: 100%; height: 50px; justify-content: center; }
  }

  footer .footer-newsletter-button:hover {
    background: var(--blue-lt);
    color: var(--on-accent) !important;
    transform: translateY(-1px);
    box-shadow: 0 8px 20px rgba(18, 70, 240, .3);
  }

  /* Force le texte en blanc en mode light pour contrer les règles globales */
  html.light-mode footer .footer-newsletter-button,
  body.light-mode footer .footer-newsletter-button {
    color: #ffffff !important;
  }

  footer .footer-divider {
    border-top: 1px solid var(--border-color);
    margin-bottom: 4rem;
  }
</style>

<footer>
  <div class="footer-newsletter">
    <div class="footer-newsletter-copy">
      <span class="newsletter-label">Newsletter</span>
      <h5>Recevez nos actualités et inspirations digitales.</h5>
      <p>Abonnez-vous pour recevoir des conseils pratiques, des études de cas et des mises à jour sur nos projets directement dans votre boîte mail.</p>
    </div>
    <form action="#" method="post" class="footer-newsletter-form">
      <input type="email" name="newsletter_email" class="footer-newsletter-input" placeholder="Votre adresse email" required>
      <button type="submit" class="footer-newsletter-button">
        S'abonner
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
    </form>
  </div>

  <div class="footer-divider"></div>

  <div class="footer-grid">
    <div>
      <img src="{{ asset('logo/logo-footer.png') }}" alt="DigiTexia" class="footer-logo">
      <p class="fbrand-bio">DigiTexia specializes in high-impact digital solutions, guiding organizations through every stage of their technological evolution.</p>
      <div class="socials">
        <a href="https://www.facebook.com/digitexia/" class="soc" title="Facebook">f</a>
        <a href="https://www.linkedin.com/" class="soc" title="LinkedIn">in</a>
      </div>
    </div>

    <div class="fcol">
      <h5>Quick Links</h5>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/solutions') }}">Solutions</a></li>
        <li><a href="{{ url('/the-problem') }}">The Problem</a></li>
        <li><a href="{{ url('/life-at-digi') }}">Blog</a></li>
        <li><a href="{{ url('/contact-us') }}">Contact</a></li>
      </ul>
    </div>

    <div class="fcol">
      <h5>Products</h5>
      <ul>
        <li><a href="{{ url('/solutions/flexicare') }}">FlexiCare</a></li>
        <li><a href="{{ url('/solutions/inventorypro') }}">InventoryPro</a></li>
        <li><a href="{{ url('/solutions/perfomia') }}">Perfomia</a></li>
        <li><a href="{{ url('/solutions/medtrace') }}">MedTrace</a></li>
      </ul>
    </div>

    <div class="fcol">
      <h5>Contact Info</h5>
      <div class="fcontact">
        <div class="fc-row"><span class="fc-ico"><i class="ti ti-mail"></i></span><a href="mailto:contact@digitexia.com">contact@digitexia.com</a></div>
        <div class="fc-row"><span class="fc-ico"><i class="ti ti-phone"></i></span>(+237) 650 945 280 / 691 095 590</div>
        <div class="fc-row"><span class="fc-ico"><i class="ti ti-map-pin"></i></span>Yaoundé, Cameroon</div>
      </div>
    </div>
  </div>

  <div class="fbot">
    <span>&copy; 2025 DigiTexia. All rights reserved.</span>
    <span>Powered by <a href="https://groupsnowwhite.com/" class="muted-link">Snow White Group</a></span>
  </div>
</footer>
