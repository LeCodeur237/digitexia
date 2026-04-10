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
</style>

<footer>
  <div class="footer-grid">
    <div>
      <img src="{{ asset('logo/logo-footer.png') }}" alt="DigiTexia" class="footer-logo">
      <p class="fbrand-bio">DigiTexia specializes in high-impact digital solutions, guiding organizations through every stage of their technological evolution.</p>
      <div class="socials">
        <a href="https://www.facebook.com/digitexia/" class="soc" title="Facebook">f</a>
        <a href="https://twitter.com/" class="soc" title="Twitter / X"><i class="ti ti-brand-x"></i></a>
        <a href="https://www.linkedin.com/" class="soc" title="LinkedIn">in</a>
        <a href="https://www.tiktok.com/" class="soc" title="TikTok">tt</a>
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
        <div class="fc-row"><span class="fc-ico"><i class="ti ti-phone"></i></span>(+237) 650 94 5280</div>
        <div class="fc-row"><span class="fc-ico"><i class="ti ti-map-pin"></i></span>Yaoundé, Cameroon</div>
      </div>
    </div>
  </div>

  <div class="fbot">
    <span>&copy; 2025 DigiTexia. All rights reserved.</span>
    <span>Powered by <a href="https://groupsnowwhite.com/" class="muted-link">Snow White Group</a></span>
  </div>
</footer>
