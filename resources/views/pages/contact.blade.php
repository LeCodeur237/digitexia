@extends('index')

@section('page_title', 'Contact Us — DigiTexia Technology & Innovation')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/contact-digitexia.css') }}">
@endpush

@section('contain')
<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     HERO
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="hero">
  <div class="hero-bg"></div><div class="hero-grid"></div>
  <div class="hero-inner">

    <div class="hero-left rv">
      <div class="breadcrumb">
        <a href="{{ url('/') }}">Home</a><span>›</span>
        <span class="curr">Contact</span>
      </div>
      <span class="tag">Contact Us</span>
      <h1>Let's start a <em>conversation.</em></h1>
      <p class="lead">Need a demo, a quote, or a partnership call? Send us a message and we will reply fast.</p>
      <div class="response-badge">
        <div class="rb-dot"></div>
        Replies within 24 hours
      </div>
    </div>

    <div class="rv d2">
      <div class="quick-chips">
        <a href="tel:+237650945280" class="qchip">
          <div class="qchip-ico" style="background:var(--blue-dim);border-color:var(--blue-bdr)"><i class="ti ti-phone"></i></div>
          <div>
            <div class="qchip-label">Call</div>
            <div class="qchip-val">(+237) 650 945 280</div>
          </div>
        </a>
        <a href="tel:+237691095590" class="qchip">
          <div class="qchip-ico" style="background:var(--blue-dim);border-color:var(--blue-bdr)"><i class="ti ti-phone-call"></i></div>
          <div>
            <div class="qchip-label">Second line</div>
            <div class="qchip-val">(+237) 691 095 590</div>
          </div>
        </a>
        <a href="mailto:contactdigitexia@gmail.com" class="qchip">
          <div class="qchip-ico" style="background:var(--green-dim);border-color:var(--green-bdr)"><i class="ti ti-mail"></i></div>
          <div>
            <div class="qchip-label">Email</div>
            <div class="qchip-val">contactdigitexia@gmail.com</div>
          </div>
        </a>
        <a href="https://www.digitexia.org" target="_blank" class="qchip">
          <div class="qchip-ico" style="background:var(--gold-dim);border-color:var(--gold-bdr)"><i class="ti ti-world"></i></div>
          <div>
            <div class="qchip-label">Website</div>
            <div class="qchip-val">www.digitexia.org</div>
          </div>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     MAIN CONTACT SECTION
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="contact-main">
  <div class="contact-inner">

    <!-- LEFT: Info -->
    <div class="info-stack rv">

      <!-- Address -->
      <div class="info-card" style="--acc:var(--blue)">
        <div style="--acc:var(--blue)"></div>
        <style>.info-card:nth-child(1)::before{background:var(--blue)}.info-card:nth-child(2)::before{background:var(--green)}.info-card:nth-child(3)::before{background:var(--gold)}.info-card:nth-child(4)::before{background:#EC4899}.info-card:nth-child(5)::before{background:#6366F1}</style>
        <div class="ic-ico" style="background:var(--blue-dim);border-color:var(--blue-bdr)"><i class="ti ti-map-pin"></i></div>
        <div class="ic-title">Our Office</div>
        <div class="ic-value">Yaoundé, Cameroon</div>
        <div class="ic-sub">DigiTexia Corporate · Pan-African software studio</div>
      </div>

      <!-- Phone -->
      <div class="info-card">
        <div class="ic-ico" style="background:var(--green-dim);border-color:var(--green-bdr)"><i class="ti ti-phone"></i></div>
        <div class="ic-title">Phone</div>
        <div class="ic-value"><a href="tel:+237650945280">(+237) 650 945 280</a></div>
        <div class="ic-value"><a href="tel:+237691095590">(+237) 691 095 590</a></div>
        <div class="ic-sub">Mon-Fri, 8:00-18:00 WAT</div>
      </div>

      <!-- Email -->
      <div class="info-card">
        <div class="ic-ico" style="background:var(--gold-dim);border-color:var(--gold-bdr)"><i class="ti ti-mail"></i></div>
        <div class="ic-title">Email</div>
        <div class="ic-value"><a href="mailto:contactdigitexia@gmail.com">contactdigitexia@gmail.com</a></div>
        <div class="ic-sub">General enquiries, partnerships, and project requests.</div>
      </div>

      <!-- Hours -->
      <div class="info-card">
        <div class="ic-ico" style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25)"><i class="ti ti-clock"></i></div>
        <div class="ic-title">Office Hours</div>
        <div class="hours-grid">
          <div class="hours-row"><span class="hours-day">Monday</span><span class="hours-time">8:00-18:00</span></div>
          <div class="hours-row"><span class="hours-day">Tuesday</span><span class="hours-time">8:00-18:00</span></div>
          <div class="hours-row"><span class="hours-day">Wednesday</span><span class="hours-time">8:00-18:00</span></div>
          <div class="hours-row"><span class="hours-day">Thursday</span><span class="hours-time">8:00-18:00</span></div>
          <div class="hours-row"><span class="hours-day">Friday</span><span class="hours-time">8:00-17:00</span></div>
          <div class="hours-row"><span class="hours-day">Saturday</span><span class="hours-time">9:00-13:00</span></div>
          <div class="hours-row"><span class="hours-day">Sunday</span><span class="hours-time closed">Closed</span></div>
          <div class="hours-row" style="background:var(--green-dim);border-color:var(--green-bdr)">
            <span class="hours-day" style="color:var(--green)">Emergency</span>
            <span class="hours-time" style="color:var(--green)">On request</span>
          </div>
        </div>
      </div>

      <!-- Social -->
      <div class="info-card">
        <div class="ic-ico" style="background:rgba(99,102,241,.1);border-color:rgba(99,102,241,.25)"><i class="ti ti-share-3"></i></div>
        <div class="ic-title">Find us online</div>
        <div class="ic-sub">Follow DigiTexia for product updates and short insights.</div>
        <div class="social-row">
          <a href="https://www.facebook.com/" class="soc-link" target="_blank">fb</a>
          <a href="https://twitter.com/" class="soc-link" target="_blank">ð•</a>
          <a href="https://www.linkedin.com/" class="soc-link" target="_blank">in</a>
          <a href="https://www.tiktok.com/" class="soc-link" target="_blank">tt</a>
          <a href="https://www.digitexia.org" class="soc-link" target="_blank">ðŸŒ</a>
        </div>
        <div class="team-avail">
          <div class="avail-av"><i class="ti ti-user"></i></div>
          <div class="avail-av"><i class="ti ti-code"></i></div>
          <div class="avail-text"><strong>Anne & Lucien DZOU</strong> and the team are ready to help.</div>
        </div>
      </div>

    </div>

    <!-- RIGHT: Form -->
    <div class="form-card rv d2">
      <div id="formContent">
        <div class="form-head">
          <h3>Send a message</h3>
          <p>Tell us what you need. We will reply fast.</p>
        </div>

        <!-- Subject tabs -->
        <div class="subject-tabs">
          <button class="stab active" onclick="selectTab(this)"><i class="ti ti-message-circle"></i> General</button>
          <button class="stab" onclick="selectTab(this)"><i class="ti ti-rocket"></i> Project</button>
          <button class="stab" onclick="selectTab(this)"><i class="ti ti-handshake"></i> Partnership</button>
          <button class="stab" onclick="selectTab(this)"><i class="ti ti-box"></i> Demo</button>
          <button class="stab" onclick="selectTab(this)"><i class="ti ti-briefcase"></i> Careers</button>
        </div>

        <div class="form-grid">
          <div class="form-field">
            <label class="form-label">First name <span class="required">*</span></label>
            <input type="text" class="form-input" placeholder="Jean" id="firstName">
          </div>
          <div class="form-field">
            <label class="form-label">Last name <span class="required">*</span></label>
            <input type="text" class="form-input" placeholder="Kamga" id="lastName">
          </div>
          <div class="form-field">
            <label class="form-label">Email <span class="required">*</span></label>
            <input type="email" class="form-input" placeholder="you@company.com" id="email">
          </div>
          <div class="form-field">
            <label class="form-label">Phone</label>
            <input type="tel" class="form-input" placeholder="(+237) 6XX XXX XXX" id="phone">
          </div>
          <div class="form-field">
            <label class="form-label">Organization</label>
            <input type="text" class="form-input" placeholder="Company name" id="org">
          </div>
          <div class="form-field">
            <label class="form-label">Country</label>
            <select class="form-select" id="country">
              <option value="" disabled selected>Select country</option>
              <option>Cameroon</option>
              <option>Nigeria</option>
              <option>CÃ´te d'Ivoire</option>
              <option>Senegal</option>
              <option>Ghana</option>
              <option>Kenya</option>
              <option>South Africa</option>
              <option>France</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-field full">
            <label class="form-label">Subject</label>
            <input type="text" class="form-input" placeholder="Short summary" id="subject">
          </div>
          <div class="form-field full">
            <label class="form-label">Message <span class="required">*</span></label>
            <textarea class="form-textarea" placeholder="Tell us what you need." id="message" oninput="updateChar(this)"></textarea>
            <div class="char-count"><span id="charCount">0</span> / 1000 characters</div>
          </div>
        </div>

        <div class="form-submit-row">
          <button class="submit-btn" onclick="submitForm()">
            <span id="btnText">Send</span>
            <svg id="btnArrow" width="16" height="16" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="form-secure"><i class="ti ti-shield-lock"></i> Private and confidential.</div>
        </div>
      </div>

      <!-- Success state -->
      <div class="form-success" id="formSuccess">
        <div class="success-ico">âœ…</div>
        <div class="success-title">Message sent.</div>
        <div class="success-sub">Thanks. We will reply within 24 hours.<br><br>In the meantime, explore our <a href="{{ url('/solutions') }}" style="color:var(--blue-lt)">solutions</a> or read our <a href="{{ url('/blog') }}" style="color:var(--blue-lt)">latest insights</a>.</div>
        <button onclick="resetForm()" style="margin-top:1.5rem;background:transparent;border:1px solid var(--bdr);color:var(--muted-lt);font-family:'Plus Jakarta Sans',sans-serif;font-size:.85rem;padding:.65rem 1.5rem;border-radius:8px;cursor:pointer;transition:all .2s" onmouseover="this.style.borderColor='rgba(255,255,255,.2)';this.style.color='var(--white)'" onmouseout="this.style.borderColor='var(--bdr)';this.style.color='var(--muted-lt)'">Send another</button>
      </div>
    </div>

  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     FAQ
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="faq">
  <div class="faq-inner">

    <div class="rv">
      <span class="tag">FAQ</span>
      <h2>Quick answers.</h2>
      <p class="lead">If it is not here, message us directly.</p>
      <div class="faq-contact-cta">
        <div class="faq-cta-row">
          <div class="faq-cta-ico">ðŸ“ž</div>
          <span>(+237) 650 945 280 / 691 095 590</span>
        </div>
        <div class="faq-cta-row">
          <div class="faq-cta-ico"><i class="ti ti-mail"></i></div>
          <span>contactdigitexia@gmail.com</span>
        </div>
      </div>
    </div>

    <div class="faq-list rv d2">

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Who do you work with?</span>
          <div class="faq-chevron">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 3.5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="faq-a"><p class="faq-a-text">Private companies, NGOs, foundations, public institutions, healthcare, logistics, and retail. If you need to digitize or streamline operations, we can help.</p></div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">How long does it take?</span>
          <div class="faq-chevron">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 3.5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="faq-a"><p class="faq-a-text">Most projects start in weeks, then improve in short iterations.</p></div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Products or custom work?</span>
          <div class="faq-chevron">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 3.5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="faq-a"><p class="faq-a-text">Both. We ship ready-made products and build custom solutions when needed.</p></div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Do you stay after launch?</span>
          <div class="faq-chevron">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 3.5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="faq-a"><p class="faq-a-text">Yes. We handle support, maintenance, training, and improvements after launch.</p></div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Do you work outside Cameroon?</span>
          <div class="faq-chevron">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 3.5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="faq-a"><p class="faq-a-text">Yes. We work remotely across Africa and are expanding our presence country by country.</p></div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">How do we start?</span>
          <div class="faq-chevron">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 3.5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="faq-a"><p class="faq-a-text">Send the form or email us at contactdigitexia@gmail.com. We will schedule a discovery call and send a tailored proposal. The first consultation is free.</p></div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     LOCATION / MAP
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="location">
  <div class="loc-inner">
    <div class="loc-layout">

      <div class="rv">
        <div class="map-frame">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127650.8521609765!2d11.4590!3d3.8480!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf7a309a7977%3A0x7f1b0a7cc74a9b8d!2sYaound%C3%A9%2C%20Cameroon!5e0!3m2!1sen!2scm!4v1700000000000!5m2!1sen!2scm"
            allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <div class="map-overlay-badge">
            <div class="mob"></div>
            <div>
              <div style="font-size:.68rem;font-weight:700;color:var(--white)">DigiTexia Corporate</div>
              <div style="font-size:.62rem;color:var(--muted-lt)">Yaoundé, Cameroon</div>
            </div>
          </div>
        </div>
      </div>

      <div class="loc-info rv d2">
        <div class="loc-head">
          <span class="tag">Our Location</span>
          <h2>Find us in Yaoundé.</h2>
          <p class="lead">Based in Central Africa, we serve clients across the continent.</p>
        </div>
        <div class="loc-row">
          <div class="loc-ico"><i class="ti ti-map-pin"></i></div>
          <div>
            <div class="loc-label">Address</div>
            <div class="loc-val">Yaoundé, Cameroon<br>Central Africa</div>
          </div>
        </div>
        <div class="loc-row">
          <div class="loc-ico"><i class="ti ti-phone"></i></div>
          <div>
            <div class="loc-label">Phone</div>
            <div class="loc-val">
              <a href="tel:+237650945280">(+237) 650 945 280</a><br>
              <a href="tel:+237691095590">(+237) 691 095 590</a>
            </div>
          </div>
        </div>
        <div class="loc-row">
          <div class="loc-ico"><i class="ti ti-mail"></i></div>
          <div>
            <div class="loc-label">Email</div>
            <div class="loc-val"><a href="mailto:contactdigitexia@gmail.com">contactdigitexia@gmail.com</a></div>
          </div>
        </div>
        <div class="loc-row">
          <div class="loc-ico"><i class="ti ti-world"></i></div>
          <div>
            <div class="loc-label">Website</div>
            <div class="loc-val"><a href="https://www.digitexia.org" target="_blank">www.digitexia.org</a></div>
          </div>
        </div>
        <div class="loc-row" style="background:var(--green-dim);border-color:var(--green-bdr)">
          <div class="loc-ico" style="background:var(--green-dim);border-color:var(--green-bdr)"><i class="ti ti-globe"></i></div>
          <div>
            <div class="loc-label" style="color:var(--green)">Pan-African Coverage</div>
            <div class="loc-val">Serving organizations across Africa, remotely and on-site.</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â”€â”€â”€ FOOTER â”€â”€â”€ -->
@push('scripts')
<script>
const obs = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('vis');
      obs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.rv').forEach(el => obs.observe(el));

const navEl = document.getElementById('mainNav');
if (navEl) {
  window.addEventListener('scroll', () => navEl.classList.toggle('sc', window.scrollY > 50));
}
</script>
@endpush
@endsection

