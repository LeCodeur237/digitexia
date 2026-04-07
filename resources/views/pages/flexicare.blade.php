@extends('index')

@section('page_title', 'FlexiCare — Services à domicile à la demande')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/flexicare.css') }}">
@endpush

@section('fullpage')


<!-- ─── NAV ─── -->
<nav id="mainNav">
  <div class="nav-brand">
    <div class="nav-brand-logo">F</div>
    <div class="nav-brand-name">Flexi<span>Care</span></div>
  </div>
  <ul class="nav-mid">
    <li><a href="#how">Comment ça marche</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#audiences">Clients & Prestataires</a></li>
    <li><a href="#pro-app">FlexiCare Pro</a></li>
    <li><a href="#download">Télécharger</a></li>
  </ul>
  <div class="nav-right">
    <a href="/" class="nav-digi"><i class="ti ti-arrow-left"></i> DigiTexia</a>
    <a href="#download" class="btn btn-pri" style="padding:.55rem 1.25rem;border-radius:8px;font-size:.82rem">Télécharger l'app</a>
  </div>
</nav>

<!-- ════════════════════════════════
     HERO
════════════════════════════════ -->
<section id="hero">
  <div class="hero-ambient"></div>
  <div class="hero-grid-lines"></div>

  <div class="hero-inner">
    <div class="rv">
      <div class="hero-eyebrow">
        <div class="hero-badge"><div class="hb-dot"></div>Disponible sur iOS & Android</div>
        <div class="hero-platform-tag">Plateforme de services à domicile</div>
      </div>

      <h1>Vos services à domicile, <span class="accent">à la demande.</span></h1>

      <p class="lead">FlexiCare connecte les particuliers avec des prestataires de services à domicile de confiance — tout en créant des opportunités économiques concrètes pour les professionnels. Rapide, sécurisé, et conçu pour l'Afrique.</p>

      <div class="hero-ctas">
        <a href="#download" class="btn btn-pri">
          Télécharger gratuitement
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#how" class="btn btn-ghost">Comment ça marche</a>
      </div>

      <div class="hero-stores">
        <div class="store-btn">
          <div class="store-ico"><i class="ti ti-brand-apple"></i></div>
          <div>
            <div class="store-sub">Disponible sur</div>
            <div class="store-name">App Store</div>
          </div>
        </div>
        <div class="store-btn">
          <div class="store-ico"><i class="ti ti-brand-google-play"></i></div>
          <div>
            <div class="store-sub">Disponible sur</div>
            <div class="store-name">Google Play</div>
          </div>
        </div>
      </div>

      <div class="hero-stats" style="margin-top:2.5rem">
        <div class="hstat">
          <div class="hstat-num">100+</div>
          <div class="hstat-lbl">Prestataires</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">4.8 <i class="ti ti-star-filled"></i></div>
          <div class="hstat-lbl">Note moyenne</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">2H</div>
          <div class="hstat-lbl">Délai moyen</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">0 XAF</div>
          <div class="hstat-lbl">Frais cachés</div>
        </div>
      </div>
    </div>

    <!-- Phone mockup -->
    <div class="hero-visual rv d3">
      <div class="phone-glow"></div>
      <div class="phone-frame">
        <div class="phone-notch"></div>
        <div class="phone-screen">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-device-mobile"></i></span>
            <div class="img-ph-label">Écran d'accueil<br>FlexiCare</div>
            <div class="img-ph-hint">Remplacez par votre capture d'écran<br>Format recommandé : 390 × 844 px</div>
          </div>
        </div>
      </div>

      <!-- Floating info cards -->
      <div class="phone-float pf-1">
        <div class="pf-ico"><i class="ti ti-circle-check"></i></div>
        <div class="pf-label">Nouvelle mission</div>
        <div class="pf-val pf-purple">Mme. NGONA — Séraphine</div>
      </div>

      <div class="phone-float pf-2">
        <div class="pf-ico"><i class="ti ti-star-filled"></i></div>
        <div class="pf-label">Avis client</div>
        <div class="pf-val pf-green">5.0 — Excellent service</div>
      </div>

      <div class="phone-float pf-3">
        <div class="pf-label">Prestation terminée</div>
        <div class="pf-val pf-rose">+15 000 XAF <i class="ti ti-currency-franc"></i></div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════
     HOW IT WORKS
════════════════════════════════ -->
<section id="how">
  <div class="how-bg"></div>
  <div class="how-inner">
    <div class="section-header rv">
      <div class="tag">Comment ça marche</div>
      <h2>Simple. Rapide. Fiable.</h2>
      <p class="lead">En 3 étapes seulement, accédez à des centaines de prestataires qualifiés près de chez vous.</p>
    </div>

    <div class="steps-track">
      <div class="step-item rv d1">
        <div class="step-num"><i class="ti ti-search"></i></div>
        <div class="step-tag">Étape 01</div>
        <div class="step-title">Choisissez votre prestation</div>
        <div class="step-desc">Parcourez notre catalogue de services, sélectionnez votre prestataire selon ses avis, sa disponibilité et sa proximité.</div>
      </div>
      <div class="step-item rv d2">
        <div class="step-num"><i class="ti ti-calendar"></i></div>
        <div class="step-tag">Étape 02</div>
        <div class="step-title">Réservez et confirmez</div>
        <div class="step-desc">Choisissez votre créneau horaire, confirmez votre commande. Le prestataire accepte et se déplace chez vous.</div>
      </div>
      <div class="step-item rv d3">
        <div class="step-num"><i class="ti ti-credit-card"></i></div>
        <div class="step-tag">Étape 03</div>
        <div class="step-title">Payez une fois terminé</div>
        <div class="step-desc">Vous ne payez qu'une fois la tâche accomplie à votre satisfaction. Paiement sécurisé via l'application.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════
     SCREENSHOTS + FEATURES
════════════════════════════════ -->
<section id="screenshots">
  <div class="sc-inner">
    <div class="sc-layout">

      <div class="sc-text rv">
        <div class="tag">Fonctionnalités</div>
        <h2>Une expérience pensée pour vous.</h2>
        <p class="lead" style="margin-bottom:2.5rem">FlexiCare a été conçu pour simplifier chaque étape — de la recherche d'un prestataire jusqu'à l'évaluation finale.</p>

        <div class="feat-tabs">
          <button class="ftab active" onclick="setTab(this)">
            <div class="ftab-ico"><i class="ti ti-map-2"></i></div>
            <div>
              <div class="ftab-title">Géolocalisation en temps réel</div>
              <div class="ftab-desc">Suivez l'arrivée de votre prestataire sur la carte, en direct.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico"><i class="ti ti-star-filled"></i></div>
            <div>
              <div class="ftab-title">Prestataires vérifiés & notés</div>
              <div class="ftab-desc">Chaque professionnel est évalué par la communauté pour garantir la qualité.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico"><i class="ti ti-clipboard-list"></i></div>
            <div>
              <div class="ftab-title">Historique de vos demandes</div>
              <div class="ftab-desc">Retrouvez toutes vos prestations passées et recomposez votre commande en un clic.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico"><i class="ti ti-messages"></i></div>
            <div>
              <div class="ftab-title">Messagerie intégrée</div>
              <div class="ftab-desc">Communiquez directement avec votre prestataire avant et pendant l'intervention.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico"><i class="ti ti-lock"></i></div>
            <div>
              <div class="ftab-title">Paiement sécurisé à la fin</div>
              <div class="ftab-desc">Vous ne déboursez rien avant que la prestation soit terminée et validée par vous.</div>
            </div>
          </button>
        </div>
      </div>

      <!-- Phone gallery -->
      <div class="rv d2" style="display:flex;justify-content:center">
        <div class="phone-gallery">
          <div class="pg-phone side">
            <div class="img-ph">
              <span class="img-ph-ico"><i class="ti ti-device-mobile"></i></span>
              <div class="img-ph-label">Écran liste<br>des prestataires</div>
              <div class="img-ph-hint">320 × 640 px</div>
            </div>
          </div>
          <div class="pg-phone main">
            <div class="img-ph">
              <span class="img-ph-ico"><i class="ti ti-device-mobile"></i></span>
              <div class="img-ph-label">Écran principal<br>/ carte & carte</div>
              <div class="img-ph-hint">390 × 844 px</div>
            </div>
          </div>
          <div class="pg-phone side">
            <div class="img-ph">
              <span class="img-ph-ico"><i class="ti ti-device-mobile"></i></span>
              <div class="img-ph-label">Écran détail<br>prestation</div>
              <div class="img-ph-hint">320 × 640 px</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════
     FOR CLIENTS & PROVIDERS
════════════════════════════════ -->
<section id="audiences">
  <div class="aud-inner">
    <div class="section-header rv">
      <div class="tag">Deux applications, une plateforme</div>
      <h2>FlexiCare pour tous.</h2>
      <p class="lead">Que vous soyez un particulier à la recherche d'aide ou un professionnel qui veut développer son activité, FlexiCare est fait pour vous.</p>
    </div>

    <div class="aud-grid">

      <!-- CLIENTS -->
      <div class="aud-card clients rv d1">
        <div class="aud-ico-wrap"><i class="ti ti-home"></i></div>
        <div class="aud-title">Pour les Clients</div>
        <div class="aud-sub">Trouvez rapidement le bon prestataire pour chaque besoin à domicile — en toute confiance, sans mauvaise surprise.</div>
        <div class="aud-benefits">
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-search"></i></span><div class="aud-ben-txt"><strong>Accès instantané à des centaines de prestataires</strong>Plombiers, électriciens, ménagistes, baby-sitters, jardiniers…</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">📍</span><div class="aud-ben-txt"><strong>Géolocalisation précise</strong>Prestataires disponibles près de chez vous, triés par proximité.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-credit-card"></i></span><div class="aud-ben-txt"><strong>Paiement après validation</strong>Vous payez uniquement si la prestation vous satisfait — aucun risque.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-star-filled"></i></span><div class="aud-ben-txt"><strong>Avis communautaires vérifiés</strong>Choisissez en connaissance de cause grâce aux évaluations authentiques.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-clipboard-list"></i></span><div class="aud-ben-txt"><strong>Historique & renouvellement</strong>Retrouvez et repassez commande chez vos prestataires favoris en un clic.</div></div>
        </div>
        <a href="#download" class="btn btn-pri" style="width:100%;justify-content:center">Télécharger FlexiCare →</a>
      </div>

      <!-- PROVIDERS -->
      <div class="aud-card providers rv d2">
        <div class="aud-ico-wrap" style="background:var(--teal-dim);border-color:rgba(20,184,166,.28)"><i class="ti ti-tools"></i></div>
        <div class="aud-title">Pour les Prestataires</div>
        <div class="aud-sub">Développez votre activité, trouvez de nouveaux clients, et gérez vos missions efficacement avec FlexiCare Pro.</div>
        <div class="aud-benefits">
          <div class="aud-ben"><span class="aud-ben-ico">📲</span><div class="aud-ben-txt"><strong>Recevez des missions directement</strong>Soyez notifié en temps réel dès qu'un client près de vous a besoin de vos services.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-folder"></i></span><div class="aud-ben-txt"><strong>Gestion complète de votre agenda</strong>Planifiez et organisez vos interventions depuis l'application Pro.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-currency-franc"></i></span><div class="aud-ben-txt"><strong>Revenus sécurisés et transparents</strong>Paiement garanti dès validation de la mission — suivi en temps réel.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">📈</span><div class="aud-ben-txt"><strong>Développez votre réputation</strong>Chaque bonne évaluation booste votre visibilité sur la plateforme.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico"><i class="ti ti-shield-check"></i></span><div class="aud-ben-txt"><strong>Profil vérifié et sécurisé</strong>Votre identité et vos compétences sont vérifiées pour la confiance de tous.</div></div>
        </div>
        <a href="#pro-app" class="btn btn-dark" style="width:100%;justify-content:center;border-color:rgba(20,184,166,.3)">Rejoindre FlexiCare Pro →</a>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════
     SERVICES CATEGORIES
════════════════════════════════ */
<section id="services">
  <div class="srv-inner">
    <div class="section-header rv">
      <div class="tag">Catégories de services</div>
      <h2>Tout ce dont vous avez besoin, chez vous.</h2>
      <p class="lead">Des dizaines de catégories de services disponibles à la demande, assurés par des professionnels vérifiés et notés par la communauté.</p>
    </div>

    <div class="srv-grid">
      <div class="srv-card rv d1">
        <span class="srv-ico"><i class="ti ti-broom"></i></span>
        <div class="srv-name">Ménage & Nettoyage</div>
        <div class="srv-desc">Nettoyage régulier, grand ménage, lavage de vitres, désinfection.</div>
        <span class="srv-badge">Populaire</span>
      </div>
      <div class="srv-card rv d2">
        <span class="srv-ico"><i class="ti ti-baby-carriage"></i></span>
        <div class="srv-name">Garde d'enfants</div>
        <div class="srv-desc">Baby-sitters qualifiées, aide aux devoirs, garde à domicile.</div>
      </div>
      <div class="srv-card rv d3">
        <span class="srv-ico"><i class="ti ti-tools"></i></span>
        <div class="srv-name">Plomberie</div>
        <div class="srv-desc">Réparations, installations, dépannages urgents.</div>
      </div>
      <div class="srv-card rv d4">
        <span class="srv-ico"><i class="ti ti-bolt"></i></span>
        <div class="srv-name">Électricité</div>
        <div class="srv-desc">Installations, dépannages, mises aux normes électriques.</div>
        <span class="srv-badge">Disponible 24h</span>
      </div>
      <div class="srv-card rv d1">
        <span class="srv-ico"><i class="ti ti-leaf"></i></span>
        <div class="srv-name">Jardinage</div>
        <div class="srv-desc">Entretien de jardins, taille, arrosage, aménagement.</div>
      </div>
      <div class="srv-card rv d2">
        <span class="srv-ico"><i class="ti ti-chef-hat"></i></span>
        <div class="srv-name">Cuisine à domicile</div>
        <div class="srv-desc">Cuisinier à domicile, préparation de repas, traiteur.</div>
      </div>
      <div class="srv-card rv d3">
        <span class="srv-ico"><i class="ti ti-stethoscope"></i></span>
        <div class="srv-name">Aide aux personnes</div>
        <div class="srv-desc">Accompagnement des personnes âgées ou à mobilité réduite.</div>
      </div>
      <div class="srv-card rv d4">
        <span class="srv-ico"><i class="ti ti-palette"></i></span>
        <div class="srv-name">Peinture & Rénovation</div>
        <div class="srv-desc">Peinture intérieure, petits travaux, rénovation légère.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════
     GALLERY
════════════════════════════════ -->
<section id="gallery">
  <div class="gal-inner">
    <div class="section-header rv">
      <div class="tag">Aperçu de l'application</div>
      <h2>Découvrez FlexiCare en images.</h2>
      <p class="lead">Remplacez ces emplacements par vos captures d'écran réelles de la plateforme.</p>
    </div>

    <div class="gal-grid">

      <div class="gal-item tall rv d1">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-device-mobile"></i></span>
            <div class="img-ph-label">Écran d'accueil<br>— Page principale</div>
            <div class="img-ph-hint">Recommandé : 400 × 700 px</div>
          </div>
        </div>
        <div class="gal-caption">
          <div class="gal-cap-title">Page d'accueil client</div>
          <div class="gal-cap-sub">Découvrez les services disponibles près de vous</div>
        </div>
      </div>

      <div class="gal-item rv d2">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-map-2"></i></span>
            <div class="img-ph-label">Vue carte<br>& géolocalisation</div>
            <div class="img-ph-hint">400 × 280 px</div>
          </div>
        </div>
        <div class="gal-caption">
          <div class="gal-cap-title">Carte des prestataires</div>
          <div class="gal-cap-sub">Trouvez un professionnel proche de chez vous</div>
        </div>
      </div>

      <div class="gal-item rv d3">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico">👤</span>
            <div class="img-ph-label">Profil prestataire<br>& avis clients</div>
            <div class="img-ph-hint">400 × 280 px</div>
          </div>
        </div>
        <div class="gal-caption">
          <div class="gal-cap-title">Profil prestataire</div>
          <div class="gal-cap-sub">Notes, avis, expérience et disponibilités</div>
        </div>
      </div>

      <div class="gal-item rv d2">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-clipboard-list"></i></span>
            <div class="img-ph-label">Mes dernières<br>demandes</div>
            <div class="img-ph-hint">400 × 280 px</div>
          </div>
        </div>
        <div class="gal-caption">
          <div class="gal-cap-title">Historique des demandes</div>
          <div class="gal-cap-sub">Toutes vos prestations passées et en cours</div>
        </div>
      </div>

      <div class="gal-item rv d3">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-messages"></i></span>
            <div class="img-ph-label">Messagerie<br>client ↔ prestataire</div>
            <div class="img-ph-hint">400 × 280 px</div>
          </div>
        </div>
        <div class="gal-caption">
          <div class="gal-cap-title">Messagerie intégrée</div>
          <div class="gal-cap-sub">Discutez directement avec votre prestataire</div>
        </div>
      </div>

      <div class="gal-item rv d4">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-credit-card"></i></span>
            <div class="img-ph-label">Écran paiement<br>sécurisé</div>
            <div class="img-ph-hint">400 × 280 px</div>
          </div>
        </div>
        <div class="gal-caption">
          <div class="gal-cap-title">Paiement sécurisé</div>
          <div class="gal-cap-sub">Réglez après validation — sans risque</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     DOWNLOAD CTA
════════════════════════════════ -->
<section id="download">
  <div class="dl-bg"></div><div class="dl-grid-lines"></div>
  <div class="dl-inner rv">
    <div class="tag">Télécharger l'application</div>
    <h2>Prêt à simplifier votre quotidien ?</h2>
    <p class="lead">FlexiCare est disponible gratuitement sur iOS et Android. Rejoignez la communauté et accédez à des centaines de prestataires vérifiés près de chez vous.</p>

    <div class="dl-stores">
      <div class="dl-store">
        <div class="dl-store-ico"><i class="ti ti-brand-apple"></i></div>
        <div>
          <div class="dl-store-sub">Télécharger sur</div>
          <div class="dl-store-name">App Store</div>
        </div>
      </div>
      <div class="dl-store">
        <div class="dl-store-ico"><i class="ti ti-brand-google-play"></i></div>
        <div>
          <div class="dl-store-sub">Disponible sur</div>
          <div class="dl-store-name">Google Play</div>
        </div>
      </div>
    </div>

    <div class="dl-qr-wrap">
      <div class="dl-qr">
        <div class="img-ph">
          <span class="img-ph-ico">◼</span>
          <div class="img-ph-label" style="font-size:.55rem">QR Code</div>
        </div>
      </div>
      <div class="dl-qr-text">
        <strong>Scanner pour télécharger</strong>
        Pointez votre appareil photo sur le QR code pour accéder directement au téléchargement.
      </div>
    </div>

    <div class="dl-web">Aussi disponible sur <strong>&nbsp;web.flexicare.app</strong>&nbsp;— sans installation</div>
  </div>
</section>

<!-- ════════════════════════════════
     CONTACT STRIP
════════════════════════════════ -->
<section id="contact-strip">
  <div class="cs-inner">
    <div class="cs-brand">
      <div class="cs-logo">F</div>
      <div>
        <div class="cs-name">Flexi<span>Care</span></div>
        <div class="cs-tagline">Une solution DigiTexia · Technology & Innovation</div>
      </div>
    </div>
    <div class="cs-contacts">
      <a href="tel:+237650945280" class="cs-contact">
        <div class="cs-cico"><i class="ti ti-phone"></i></div>
        (+237) 650 945 280
      </a>
      <a href="mailto:contact@digitexia.com" class="cs-contact">
        <div class="cs-cico"><i class="ti ti-mail"></i></div>
        contact@digitexia.com
      </a>
      <a href="https://digitexia.org" class="cs-contact">
        <div class="cs-cico"><i class="ti ti-world"></i></div>
        https://digitexia.org
      </a>
    </div>
    <a href="/" class="btn btn-ghost" style="padding:.6rem 1.25rem;border-radius:8px;font-size:.82rem">← Site DigiTexia</a>
  </div>
</section>

<!-- ─── FOOTER ─── -->
<footer>
  <div class="footer-bottom">
    <div class="footer-left">© 2025 FlexiCare — Une solution <a href="/">DigiTexia Corporate</a>. Tous droits réservés.</div>
    <div class="footer-links">
      <a href="#">Conditions d'utilisation</a>
      <a href="#">Politique de confidentialité</a>
      <a href="#contact-strip">Contact</a>
    </div>
    <div class="footer-digi">
      <div class="footer-digi-dot"></div>
      Powered by DigiTexia · Yaoundé, Cameroon
    </div>
  </div>
</footer>

<script>
/* ─── Scroll reveal ─── */
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('vis'); obs.unobserve(e.target); } });
}, { threshold: 0.08 });
document.querySelectorAll('.rv').forEach(el => obs.observe(el));

/* ─── Nav ─── */
const navEl = document.getElementById('mainNav');
window.addEventListener('scroll', () => navEl.classList.toggle('sc', window.scrollY > 50));

/* ─── Feature tabs ─── */
function setTab(btn) {
  document.querySelectorAll('.ftab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
}
</script>

@endsection
