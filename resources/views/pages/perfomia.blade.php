@extends('index')

@section('page_title', 'Perfomia — DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Cabinet+Grotesk:wght@400;500;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/perfomia.css') }}">
@endpush

@section('fullpage')


<!-- ─── NAV ─── -->
<nav id="mainNav" class="perfomia-nav">
  <div class="nav-brand">
    <div class="nav-logo-mark">P</div>
    <div class="nav-name">PERFO<span>MIA</span></div>
  </div>
  <ul class="nav-links">
    <li><a href="#problem">Problématique</a></li>
    <li><a href="#features">Fonctionnalités</a></li>
    <li><a href="#impact">Impact</a></li>
    <li><a href="#pricing">Tarifs</a></li>
    <li><a href="#gallery">Aperçu</a></li>
    <li><a href="#cta-final">Démo</a></li>
  </ul>
  <div class="nav-right">
    <a href="{{ url('/') }}" class="nav-back"><i class="ti ti-arrow-left"></i> DigiTexia</a>
    <a href="#cta-final" class="btn btn-em nav-cta">Demander une démo</a>
  </div>
</nav>

<!-- ══════════════════════════════
     HERO
══════════════════════════════ -->
<section id="hero">
  <div class="hero-ambient"></div>
  <div class="hero-lines"></div>

  <div class="hero-inner">
    <div class="rv">
      <div class="hero-kicker">
        <div class="hk-badge"><div class="hk-dot"></div>SaaS · Microfinance</div>
        <div class="hk-cat">Plateforme de gestion intelligente</div>
      </div>

      <h1><span class="hi">PERFOMIA</span> — La solution <span class="ha">intelligente</span> pour les microfinances modernes.</h1>

      <p class="lead">Optimisez la gestion de vos opérations, améliorez la performance de vos équipes et prenez des décisions basées sur la data. Conçu pour les réalités africaines.</p>

      <div class="hero-ctas">
        <a href="#cta-final" class="btn btn-em">
          Demander une démo
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#features" class="btn btn-ghost">Voir les fonctionnalités</a>
      </div>

      <div class="trust-strip">
        <div class="trust-item"><i class="ti ti-building-bank trust-ico"></i>Conçu pour la microfinance</div>
        <div class="trust-div"></div>
        <div class="trust-item"><i class="ti ti-world trust-ico"></i>Adapté à l'Afrique</div>
        <div class="trust-div"></div>
        <div class="trust-item"><i class="ti ti-zap trust-ico"></i>Déploiement rapide</div>
        <div class="trust-div"></div>
        <div class="trust-item"><i class="ti ti-shield-lock trust-ico"></i>Données sécurisées</div>
      </div>
    </div>

    <!-- Dashboard mockup -->
    <div class="rv d2" style="position:relative">
      <div class="dash-float df1">
        <div class="df-label">Productivité équipe</div>
        <div class="df-val" style="color:var(--em-lt)"><i class="ti ti-trending-up"></i> +42% ce mois</div>
      </div>
      <div class="dash-float df2">
        <div class="df-label">IA — Alerte détectée</div>
        <div class="df-val" style="color:var(--gold-lt)">3 dossiers à risque</div>
      </div>

      <div class="dash-mock">
        <div class="dm-topbar">
          <div class="dm-dots">
            <div class="dm-dot" style="background:#F87171"></div>
            <div class="dm-dot" style="background:#FCD34D"></div>
            <div class="dm-dot" style="background:#6EE7B7"></div>
          </div>
          <div class="dm-title">PERFOMIA Dashboard</div>
          <div class="dm-status"><div class="dm-status-dot"></div>En direct</div>
        </div>

        <div class="dm-body">
          <!-- KPIs -->
          <div class="dm-kpi-row">
            <div class="dm-kpi">
              <div class="dm-kpi-val">247</div>
              <div class="dm-kpi-lbl">Dossiers actifs</div>
              <div class="dm-kpi-delta up"><i class="ti ti-trending-up"></i> 12%</div>
            </div>
            <div class="dm-kpi">
              <div class="dm-kpi-val">94%</div>
              <div class="dm-kpi-lbl">Taux de traitement</div>
              <div class="dm-kpi-delta up"><i class="ti ti-trending-up"></i> 8%</div>
            </div>
            <div class="dm-kpi">
              <div class="dm-kpi-val">18</div>
              <div class="dm-kpi-lbl">Agents actifs</div>
              <div class="dm-kpi-delta up"><i class="ti ti-trending-up"></i> 3</div>
            </div>
            <div class="dm-kpi">
              <div class="dm-kpi-val">2.4h</div>
              <div class="dm-kpi-lbl">Délai moyen</div>
              <div class="dm-kpi-delta dn"><i class="ti ti-trending-down"></i> 38%</div>
            </div>
          </div>

          <!-- Charts -->
          <div class="dm-chart-row">
            <div class="dm-chart">
              <div class="dm-chart-title">Performance mensuelle</div>
              <div class="bar-chart">
                <div class="bar" style="height:40%;background:var(--em-dim);border:1px solid var(--em-bdr)"></div>
                <div class="bar" style="height:55%;background:var(--em-dim);border:1px solid var(--em-bdr)"></div>
                <div class="bar" style="height:35%;background:var(--em-dim);border:1px solid var(--em-bdr)"></div>
                <div class="bar" style="height:70%;background:var(--em-dim);border:1px solid var(--em-bdr)"></div>
                <div class="bar" style="height:50%;background:var(--em-dim);border:1px solid var(--em-bdr)"></div>
                <div class="bar" style="height:80%;background:linear-gradient(to top,var(--em),var(--em-lt))"></div>
                <div class="bar" style="height:90%;background:linear-gradient(to top,var(--em),var(--em-lt))"></div>
                <div class="bar" style="height:100%;background:linear-gradient(to top,var(--em),#6EE7B7)"></div>
              </div>
            </div>
            <div class="dm-chart">
              <div class="dm-chart-title">Répartition tâches</div>
              <div class="donut-wrap">
                <div class="donut-ring"><div class="donut-inner" style="color:var(--em-lt)">94%</div></div>
                <div class="donut-legend">
                  <div class="dl-row"><div class="dl-dot" style="background:var(--em)"></div>Terminées</div>
                  <div class="dl-row"><div class="dl-dot" style="background:var(--gold-lt)"></div>En cours</div>
                  <div class="dl-row"><div class="dl-dot" style="background:#3B82F6"></div>En attente</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Agents -->
          <div class="dm-agents">
            <div class="dm-agents-title">Top agents — Ce mois</div>
            <div class="agent-row">
              <div class="agent-av">👤</div>
              <div class="agent-name">Kamga J.</div>
              <div class="agent-score-bar"><div class="agent-score-fill" style="width:95%"></div></div>
              <div class="agent-pct">95%</div>
            </div>
            <div class="agent-row">
              <div class="agent-av">👤</div>
              <div class="agent-name">Nguema A.</div>
              <div class="agent-score-bar"><div class="agent-score-fill" style="width:88%"></div></div>
              <div class="agent-pct">88%</div>
            </div>
            <div class="agent-row">
              <div class="agent-av">👤</div>
              <div class="agent-name">Bella M.</div>
              <div class="agent-score-bar"><div class="agent-score-fill" style="width:82%"></div></div>
              <div class="agent-pct">82%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════
     PROBLEM
══════════════════════════════ -->
<section id="problem">
  <div class="prob-inner">
    <div class="prob-layout">

      <div class="rv">
        <div class="tag" style="background:rgba(220,38,38,.1);border-color:rgba(220,38,38,.25);color:#F87171"><i class="ti ti-alert-triangle"></i> Le problème</div>
        <h2>Les microfinances perdent du temps et de l'argent chaque jour.</h2>
        <p class="lead" style="margin-bottom:2rem">Sans outil adapté, les opérations se font manuellement, la performance reste invisible, et les décisions se prennent à l'aveugle.</p>

        <div class="prob-pains">
          <div class="pain-item">
            <div class="pain-ico"><i class="ti ti-folder"></i></div>
            <div><div class="pain-title">Suivi manuel des dossiers clients</div><div class="pain-desc">Les dossiers circulent sur papier ou dans des fichiers Excel éparpillés — sources constantes d'erreurs et de retards.</div></div>
          </div>
          <div class="pain-item">
            <div class="pain-ico"><i class="ti ti-chart-bar-off"></i></div>
            <div><div class="pain-title">Impossibilité de mesurer la performance des agents</div><div class="pain-desc">Aucune donnée centralisée pour évaluer qui travaille bien, qui a du mal, et pourquoi.</div></div>
          </div>
          <div class="pain-item">
            <div class="pain-ico"><i class="ti ti-layers-difference"></i></div>
            <div><div class="pain-title">Opérations non centralisées</div><div class="pain-desc">Chaque agence, chaque équipe utilise ses propres méthodes — aucune vision globale n'est possible.</div></div>
          </div>
          <div class="pain-item">
            <div class="pain-ico"><i class="ti ti-clock-hour-4"></i></div>
            <div><div class="pain-title">Délais excessifs dans le traitement</div><div class="pain-desc">Les demandes s'accumulent, les clients attendent, les équipes s'épuisent sur des tâches répétitives.</div></div>
          </div>
          <div class="pain-item">
            <div class="pain-ico"><i class="ti ti-chart-dots"></i></div>
            <div><div class="pain-title">Faible exploitation des données</div><div class="pain-desc">Des informations précieuses existent mais ne sont jamais analysées pour améliorer les processus.</div></div>
          </div>
        </div>

        <div class="consequence">
          <div class="con-title">Résultat direct</div>
          <div class="con-items">
            <div class="con-item"><i class="ti ti-clock-hour-3 con-ico"></i>Perte de temps massive</div>
            <div class="con-item"><i class="ti ti-circle-x con-ico"></i>Erreurs fréquentes</div>
            <div class="con-item"><i class="ti ti-chart-bar con-ico"></i>Faible productivité</div>
            <div class="con-item"><i class="ti ti-currency-franc con-ico"></i>Manque à gagner</div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="sol-panel">
          <div class="tag"><i class="ti ti-sparkles"></i> La solution</div>
          <div class="sol-title">PERFOMIA change la donne.</div>
          <div class="sol-sub">Une plateforme intelligente construite spécifiquement pour les microfinances — qui centralise, automatise et optimise chaque aspect de vos opérations.</div>
          <div class="sol-items">
            <div class="sol-item"><div class="sol-check"><i class="ti ti-check"></i></div><div class="sol-text">Suivi des tâches en temps réel</div></div>
            <div class="sol-item"><div class="sol-check"><i class="ti ti-check"></i></div><div class="sol-text">Gestion centralisée des opérations</div></div>
            <div class="sol-item"><div class="sol-check"><i class="ti ti-check"></i></div><div class="sol-text">Analyse des performances du personnel</div></div>
            <div class="sol-item"><div class="sol-check"><i class="ti ti-check"></i></div><div class="sol-text">Assistance IA pour la prise de décision</div></div>
            <div class="sol-item"><div class="sol-check"><i class="ti ti-check"></i></div><div class="sol-text">Automatisation des processus internes</div></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════
     FEATURES
══════════════════════════════ -->
<section id="features">
  <div class="feat-inner">
    <div class="section-header rv">
      <div class="tag"><i class="ti ti-settings-cog"></i> Fonctionnalités clés</div>
      <h2>Tout ce dont votre microfinance a besoin, dans une seule plateforme.</h2>
      <p class="lead">4 modules intégrés qui couvrent l'intégralité de vos besoins opérationnels — du suivi des agents aux décisions stratégiques.</p>
    </div>

    <div class="feat-modules">

      <div class="feat-module fm-green rv d1">
        <div class="fm-icon"><i class="ti ti-users"></i></div>
        <div class="fm-title">Gestion du Personnel</div>
        <div class="fm-desc">Suivez la performance de chaque agent en temps réel. Attribuez des tâches, mesurez les résultats, et identifiez les opportunités d'amélioration avant qu'elles ne deviennent des problèmes.</div>
        <div class="fm-items">
          <div class="fm-item"><span class="fm-bullet"></span>Attribution automatique des tâches selon la charge</div>
          <div class="fm-item"><span class="fm-bullet"></span>Suivi individuel et collectif en temps réel</div>
          <div class="fm-item"><span class="fm-bullet"></span>Évaluation automatique des performances</div>
          <div class="fm-item"><span class="fm-bullet"></span>Alertes sur les anomalies de productivité</div>
        </div>
      </div>

      <div class="feat-module fm-gold rv d2">
        <div class="fm-icon"><i class="ti ti-folder"></i></div>
        <div class="fm-title">Gestion des Opérations</div>
        <div class="fm-desc">Centralisez 100% de vos dossiers clients et opérations. Fini les fichiers éparpillés — tout est accessible, traçable, et sécurisé en un seul endroit.</div>
        <div class="fm-items">
          <div class="fm-item"><span class="fm-bullet"></span>Suivi centralisé des dossiers clients</div>
          <div class="fm-item"><span class="fm-bullet"></span>Historique complet de toutes les actions</div>
          <div class="fm-item"><span class="fm-bullet"></span>Alertes automatiques sur les échéances</div>
          <div class="fm-item"><span class="fm-bullet"></span>Recherche et filtrage instantanés</div>
        </div>
      </div>

      <div class="feat-module fm-blue rv d1">
        <div class="fm-icon"><i class="ti ti-chart-bar"></i></div>
        <div class="fm-title">Tableau de Bord Intelligent</div>
        <div class="fm-desc">Visualisez vos KPI critiques en temps réel. Des rapports automatisés qui vous donnent une vision claire de votre performance — sans effort de compilation.</div>
        <div class="fm-items">
          <div class="fm-item"><span class="fm-bullet"></span>KPI en temps réel sur un seul écran</div>
          <div class="fm-item"><span class="fm-bullet"></span>Statistiques de performance par équipe</div>
          <div class="fm-item"><span class="fm-bullet"></span>Rapports automatisés exportables</div>
          <div class="fm-item"><span class="fm-bullet"></span>Comparaisons périodiques et tendances</div>
        </div>
      </div>

      <div class="feat-module fm-purple rv d2">
        <div class="fm-icon"><i class="ti ti-robot"></i></div>
        <div class="fm-title">Intelligence Artificielle</div>
        <div class="fm-desc">PERFOMIA embarque un moteur d'IA qui analyse vos données en continu, détecte les anomalies avant qu'elles ne s'aggravent, et vous suggère des actions concrètes d'optimisation.</div>
        <div class="fm-items">
          <div class="fm-item"><span class="fm-bullet"></span>Détection automatique des anomalies</div>
          <div class="fm-item"><span class="fm-bullet"></span>Suggestions d'optimisation basées sur les données</div>
          <div class="fm-item"><span class="fm-bullet"></span>Aide à la décision stratégique</div>
          <div class="fm-item"><span class="fm-bullet"></span>Prédiction des risques sur les dossiers</div>
        </div>
      </div>

    </div>

    <!-- Dashboard screenshot -->
    <div class="dashboard-section rv d2" style="margin-top:4rem">
      <div class="ds-header">
        <div>
          <div class="ds-header-title">Interface PERFOMIA — Vue directeur</div>
          <div class="ds-header-sub">Vue d'ensemble de l'activité en temps réel</div>
        </div>
        <div class="tag" style="margin-bottom:0">Tableau de bord principal</div>
      </div>
      <div class="ds-content">
        <div class="img-ph">
          <span class="img-ph-ico"><i class="ti ti-device-desktop"></i></span>
          <div class="img-ph-label">Tableau de bord principal PERFOMIA<br>Vue directeur / Vue complète des KPIs</div>
          <div class="img-ph-hint">Remplacez par une capture de votre dashboard · Recommandé : 1280 × 340 px</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════
     IMPACT
══════════════════════════════ -->
<section id="impact">
  <div class="impact-inner">
    <div class="section-header rv">
      <div class="tag-gold"><i class="ti ti-trending-up"></i> Impact & Résultats</div>
      <h2>Des résultats mesurables, pas des promesses.</h2>
      <p class="lead">Les microfinances qui déploient PERFOMIA constatent des améliorations significatives dès les premières semaines d'utilisation.</p>
    </div>

    <div class="impact-grid">
      <div class="impact-card rv d1">
        <span class="ic-ico"><i class="ti ti-rocket"></i></span>
        <div class="ic-num">+30-50%</div>
        <div class="ic-label">de productivité globale des équipes</div>
      </div>
      <div class="impact-card rv d2">
        <span class="ic-ico"><i class="ti ti-clock-hour-4"></i></span>
        <div class="ic-num">−40%</div>
        <div class="ic-label">de délais de traitement des dossiers</div>
      </div>
      <div class="impact-card rv d3">
        <span class="ic-ico"><i class="ti ti-circle-x"></i></span>
        <div class="ic-num">−65%</div>
        <div class="ic-label">d'erreurs humaines dans les processus</div>
      </div>
      <div class="impact-card rv d4">
        <span class="ic-ico"><i class="ti ti-chart-dots"></i></span>
        <div class="ic-num">100%</div>
        <div class="ic-label">des décisions basées sur des données réelles</div>
      </div>
      <div class="impact-card rv d5">
        <span class="ic-ico"><i class="ti ti-coins"></i></span>
        <div class="ic-num">+ROI</div>
        <div class="ic-label">amélioration de la rentabilité opérationnelle</div>
      </div>
    </div>

    <!-- Case Study CREMIN-CAM -->
    <div class="impact-case rv">
      <div class="case-header">
        <div class="case-logo">CRE<br>MIN</div>
        <div>
          <div class="case-name">CREMIN-CAM</div>
          <div class="case-sub">Institution financière de proximité · Cameroun</div>
        </div>
        <div class="case-badge">Cas client</div>
      </div>
      <div class="case-stats">
        <div class="cs-stat">
          <div class="cs-stat-num">−40%</div>
          <div class="cs-stat-lbl">Délais de traitement des dossiers</div>
        </div>
        <div class="cs-stat">
          <div class="cs-stat-num">+35%</div>
          <div class="cs-stat-lbl">Productivité des agents</div>
        </div>
        <div class="cs-stat">
          <div class="cs-stat-num">100%</div>
          <div class="cs-stat-lbl">Opérations centralisées</div>
        </div>
      </div>
      <div class="case-quote">
        "PERFOMIA a transformé notre façon de travailler. Nos agents savent exactement ce qu'ils ont à faire, nos directeurs voient la performance en temps réel, et nos dossiers clients ne se perdent plus jamais. Le déploiement a été rapide et l'équipe DigiTexia nous a accompagnés à chaque étape."
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════
     FOR WHO
══════════════════════════════ -->
<section id="forwhom">
  <div class="fw-inner">
    <div class="section-header rv">
      <div class="tag-blue"><i class="ti ti-building-bank"></i> Pour qui ?</div>
      <h2>PERFOMIA est fait pour votre organisation.</h2>
      <p class="lead">Conçu pour toutes les structures qui gèrent des crédits, des clients et des équipes — quelle que soit leur taille.</p>
    </div>

    <div class="fw-grid">
      <div class="fw-card rv d1">
        <div class="fw-ico"><i class="ti ti-building-bank"></i></div>
        <div>
          <div class="fw-title">Institutions de microfinance</div>
          <div class="fw-desc">Les IMF qui cherchent à moderniser leurs opérations, centraliser leurs données et améliorer la performance de leurs équipes de terrain.</div>
        </div>
      </div>
      <div class="fw-card rv d2">
        <div class="fw-ico"><i class="ti ti-handshake"></i></div>
        <div>
          <div class="fw-title">Coopératives d'épargne et de crédit</div>
          <div class="fw-desc">Les COOPEC et mutuelles qui veulent digitaliser leur gestion sans investissement technologique massif.</div>
        </div>
      </div>
      <div class="fw-card rv d1">
        <div class="fw-ico"><i class="ti ti-building-estate"></i></div>
        <div>
          <div class="fw-title">Établissements financiers de proximité</div>
          <div class="fw-desc">Toute structure financière de petite ou moyenne taille qui veut se doter d'outils dignes des grandes institutions.</div>
        </div>
      </div>
      <div class="fw-card rv d2">
        <div class="fw-ico"><i class="ti ti-clipboard-list"></i></div>
        <div>
          <div class="fw-title">Toute organisation gérant des crédits</div>
          <div class="fw-desc">Associations de crédit, fonds communautaires, ou tout organisme qui suit des dossiers clients et des remboursements.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════
     PRICING
══════════════════════════════ -->
<section id="pricing">
  <div class="price-inner">
    <div class="section-header rv">
      <div class="tag">💰 Tarification</div>
      <h2>Des offres adaptées à chaque structure.</h2>
      <p class="lead">Choisissez le pack qui correspond à votre taille et à vos ambitions. Aucun engagement à long terme — commencez dès aujourd'hui.</p>
    </div>

    <div class="price-grid">

      <!-- Standard -->
      <div class="price-card standard rv d1">
        <div class="pc-band standard"></div>
        <div class="pc-body">
          <div class="pc-badge">Standard</div>
          <div class="pc-name">Pack Standard</div>
          <div class="pc-price-row">
            <div class="pc-amount">100 000</div>
            <div class="pc-currency">FCFA</div>
          </div>
          <div class="pc-period">/ mois</div>
          <div class="pc-desc">Idéal pour démarrer et digitaliser vos opérations de base.</div>
          <div class="pc-features">
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Gestion des tâches</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Tableau de bord de base</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Suivi des agents</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Alertes automatiques</div>
            <div class="pc-feat na"><div class="pc-feat-ico"><i class="ti ti-minus"></i></div>Intelligence artificielle</div>
            <div class="pc-feat na"><div class="pc-feat-ico"><i class="ti ti-minus"></i></div>Rapports avancés</div>
            <div class="pc-feat na"><div class="pc-feat-ico"><i class="ti ti-minus"></i></div>Support dédié</div>
          </div>
          <a href="#cta-final" class="btn btn-ghost pc-cta">Choisir Standard</a>
        </div>
      </div>

      <!-- Professionnel — featured -->
      <div class="price-card pro featured rv d2">
        <div class="pc-band pro"></div>
        <div class="pc-body">
          <div class="pc-badge" style="background:var(--em);border-color:var(--em-lt);color:#fff">⭐ Recommandé</div>
          <div class="pc-name">Pack Professionnel</div>
          <div class="pc-price-row">
            <div class="pc-amount">150 000</div>
            <div class="pc-currency">FCFA</div>
          </div>
          <div class="pc-period">/ mois</div>
          <div class="pc-desc">La puissance complète de PERFOMIA avec l'IA pour des décisions plus intelligentes.</div>
          <div class="pc-features">
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Toutes les fonctionnalités Standard</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Intelligence artificielle</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Rapports avancés automatisés</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Détection d'anomalies IA</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Analyse prédictive des risques</div>
            <div class="pc-feat na"><div class="pc-feat-ico"><i class="ti ti-minus"></i></div>Personnalisation complète</div>
            <div class="pc-feat na"><div class="pc-feat-ico"><i class="ti ti-minus"></i></div>Support dédié 24/7</div>
          </div>
          <a href="#cta-final" class="btn btn-em pc-cta">Choisir Professionnel</a>
        </div>
      </div>

      <!-- Premium -->
      <div class="price-card premium rv d3">
        <div class="pc-band premium"></div>
        <div class="pc-body">
          <div class="pc-badge">Premium</div>
          <div class="pc-name">Pack Premium</div>
          <div class="pc-price-row">
            <div class="pc-amount">350 000</div>
            <div class="pc-currency">FCFA</div>
          </div>
          <div class="pc-period">/ mois</div>
          <div class="pc-desc">La solution sur-mesure pour les grandes institutions avec un accompagnement total.</div>
          <div class="pc-features">
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Toutes les fonctionnalités Pro</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Personnalisation complète</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Support dédié prioritaire</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Formation des équipes incluse</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Intégrations personnalisées</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>SLA garanti</div>
            <div class="pc-feat ok"><div class="pc-feat-ico"><i class="ti ti-check"></i></div>Roadmap personnalisée</div>
          </div>
          <a href="#cta-final" class="btn btn-gold pc-cta">Choisir Premium</a>
        </div>
      </div>

    </div>

    <!-- Integration -->
    <div class="integration-card rv">
      <div class="integ-left">
        <div class="tag-gold" style="margin-bottom:1rem"><i class="ti ti-tools"></i> Mise en place</div>
        <h3>Intégration & Déploiement</h3>
        <p class="lead">Un déploiement clé en main, géré de A à Z par l'équipe DigiTexia — pour que vous soyez opérationnels rapidement, sans friction.</p>
        <div class="integ-price">
          <div class="integ-amount">500 000 FCFA</div>
          <div class="integ-label">frais unique d'intégration</div>
        </div>
        <div class="integ-note">Investissement unique — aucun frais récurrent lié au déploiement.</div>
        <a href="#cta-final" class="btn btn-gold">Démarrer le déploiement</a>
      </div>
      <div class="integ-items">
        <div class="integ-item"><span class="integ-ico"><i class="ti ti-settings"></i></span>Installation du système</div>
        <div class="integ-item"><span class="integ-ico"><i class="ti ti-adjustments-horizontal"></i></span>Paramétrage sur mesure</div>
        <div class="integ-item"><span class="integ-ico"><i class="ti ti-upload"></i></span>Import de vos données</div>
        <div class="integ-item"><span class="integ-ico"><i class="ti ti-test-pipe"></i></span>Tests & validation</div>
        <div class="integ-item"><span class="integ-ico"><i class="ti ti-school"></i></span>Formation des équipes</div>
        <div class="integ-item"><span class="integ-ico"><i class="ti ti-shield-check"></i></span>Support de démarrage</div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════
     WHY PERFOMIA
══════════════════════════════ -->
<section id="why">
  <div class="why-inner">

    <div class="rv">
      <div class="tag"><i class="ti ti-bullseye"></i> Pourquoi PERFOMIA ?</div>
      <h2>Conçu pour l'Afrique. Pensé pour le terrain.</h2>
      <p class="lead" style="margin-bottom:2rem">PERFOMIA n'est pas un logiciel importé et adapté à la va-vite. C'est une solution construite depuis le début pour répondre aux réalités spécifiques des microfinances africaines.</p>
      <div class="why-points">
        <div class="why-point">
          <div class="wp-ico"><i class="ti ti-world"></i></div>
          <div><div class="wp-title">Conçu pour l'Afrique</div><div class="wp-desc">Interface en français, adapté aux réalités locales, optimisé pour les connexions variables.</div></div>
        </div>
        <div class="why-point">
          <div class="wp-ico"><i class="ti ti-zap"></i></div>
          <div><div class="wp-title">Déploiement rapide, valeur immédiate</div><div class="wp-desc">Selon DigiTexia, un projet digital ne doit pas prendre des mois avant de produire de la valeur. PERFOMIA est opérationnel en semaines, pas en années.</div></div>
        </div>
        <div class="why-point">
          <div class="wp-ico"><i class="ti ti-robot"></i></div>
          <div><div class="wp-title">IA embarquée, pas en option</div><div class="wp-desc">L'intelligence artificielle est intégrée nativement — pas une couche ajoutée après coup.</div></div>
        </div>
        <div class="why-point">
          <div class="wp-ico"><i class="ti ti-shield-check"></i></div>
          <div><div class="wp-title">Support long terme garanti</div><div class="wp-desc">DigiTexia reste à vos côtés après le déploiement — maintenance, évolutions, formation continue.</div></div>
        </div>
        <div class="why-point">
          <div class="wp-ico"><i class="ti ti-chart-line"></i></div>
          <div><div class="wp-title">Évolutif avec votre croissance</div><div class="wp-desc">Passez d'un pack à l'autre selon vos besoins — PERFOMIA grandit avec votre institution.</div></div>
        </div>
      </div>
    </div>

    <div class="why-visual rv d2">
      <div class="wv-chip wvc1">
        <div class="wv-chip-label"><i class="ti ti-robot"></i> IA — Analyse en cours</div>
        <div class="wv-chip-val green">3 optimisations suggérées</div>
      </div>
      <div class="wv-chip wvc2">
        <div class="wv-chip-label"><i class="ti ti-chart-line"></i> Performance équipe</div>
        <div class="wv-chip-val gold"><i class="ti ti-trending-up"></i> +42% ce mois</div>
      </div>
      <div class="wv-laptop">
        <div class="wv-laptop-bar">
          <div class="wvlb-dot" style="background:#F87171"></div>
          <div class="wvlb-dot" style="background:#FCD34D"></div>
          <div class="wvlb-dot" style="background:#6EE7B7"></div>
        </div>
        <div class="wv-laptop-screen">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-device-desktop"></i></span>
            <div class="img-ph-label">Vue directeur PERFOMIA<br>Tableau de bord de performance</div>
            <div class="img-ph-hint">Remplacez par votre capture · 900 × 300 px</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════
     GALLERY
══════════════════════════════ -->
<section id="gallery">
  <div class="gal-inner">
    <div class="section-header rv">
      <div class="tag"><i class="ti ti-photo-scan"></i> Aperçu de l'application</div>
      <h2>PERFOMIA en images.</h2>
      <p class="lead">Remplacez ces emplacements par vos captures d'écran réelles de la plateforme.</p>
    </div>

    <div class="gal-grid">
      <div class="gal-item wide rv d1">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-chart-dots"></i></span>
            <div class="img-ph-label">Tableau de bord principal — Vue directeur</div>
            <div class="img-ph-hint">Capture de l'interface principale · Recommandé : 840 × 260 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Dashboard directeur</div><div class="gal-cap-sub">Vue KPI complète en temps réel</div></div>
      </div>

      <div class="gal-item rv d2">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-users"></i></span>
            <div class="img-ph-label">Module<br>Gestion du personnel</div>
            <div class="img-ph-hint">400 × 260 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Performance des agents</div><div class="gal-cap-sub">Suivi individuel et collectif</div></div>
      </div>

      <div class="gal-item rv d1">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-folder"></i></span>
            <div class="img-ph-label">Module<br>Dossiers clients</div>
            <div class="img-ph-hint">400 × 260 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Gestion des dossiers</div><div class="gal-cap-sub">Suivi centralisé et historique complet</div></div>
      </div>

      <div class="gal-item rv d2">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-robot"></i></span>
            <div class="img-ph-label">Module IA<br>Analyse & suggestions</div>
            <div class="img-ph-hint">400 × 260 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Intelligence artificielle</div><div class="gal-cap-sub">Détection d'anomalies et suggestions</div></div>
      </div>

      <div class="gal-item rv d3">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-chart-line"></i></span>
            <div class="img-ph-label">Rapports<br>automatisés</div>
            <div class="img-ph-hint">400 × 260 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Rapports avancés</div><div class="gal-cap-sub">Statistiques exportables automatiquement</div></div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════
     FINAL CTA
══════════════════════════════ -->
<section id="cta-final">
  <div class="cta-ambient"></div><div class="cta-grid-lines"></div>
  <div class="cta-inner rv">
    <div class="tag"><i class="ti ti-bullseye"></i> Passez à l'action</div>
    <h2>Transformez votre microfinance dès aujourd'hui.</h2>
    <p class="lead">Rejoignez les institutions qui ont choisi PERFOMIA pour moderniser leurs opérations, améliorer la performance de leurs équipes et prendre des décisions basées sur la data.</p>
    <div class="cta-btns">
      <a href="mailto:contactdigitexia@gmail.com?subject=Demande%20d%C3%A9mo%20PERFOMIA" class="btn btn-em">
        Demander une démonstration
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn btn-ghost">Nous contacter</a>
    </div>
    <div class="cta-guarantee">
      <div class="cta-g-item">✅ Démo gratuite sans engagement</div>
      <div class="cta-g-item">✅ Réponse sous 24h</div>
      <div class="cta-g-item">✅ Accompagnement personnalisé</div>
      <div class="cta-g-item">✅ Déploiement clé en main</div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════
     FOOTER STRIP
══════════════════════════════ -->
<section id="footer-strip">
  <div class="fs-inner">
    <div class="fs-brand">
      <div class="fs-logo">P</div>
      <div>
        <div class="fs-name">PERFO<span>MIA</span></div>
        <div class="fs-tag">Une solution DigiTexia · Technology & Innovation</div>
      </div>
    </div>
    <div class="fs-contacts">
      <a href="tel:+237650945280" class="fs-c"><div class="fs-c-ico"><i class="ti ti-phone"></i></div>(+237) 650 945 280</a>
      <a href="mailto:contactdigitexia@gmail.com" class="fs-c"><div class="fs-c-ico"><i class="ti ti-mail"></i></div>contactdigitexia@gmail.com</a>
      <a href="https://www.digitexia.org" class="fs-c"><div class="fs-c-ico"><i class="ti ti-world"></i></div>www.digitexia.org</a>
    </div>
      <a href="{{ url('/') }}" class="btn btn-ghost nav-ghost-link"><i class="ti ti-arrow-left"></i> Site DigiTexia</a>
  </div>
</section>

<footer>
  <div class="foot-bot">
    <div class="foot-left">© 2025 PERFOMIA — Une solution <a href="{{ url('/') }}">DigiTexia Corporate</a>. Tous droits réservés.</div>
    <div class="foot-links">
      <a href="#">Conditions d'utilisation</a>
      <a href="#">Confidentialité</a>
      <a href="{{ url('/contact-us') }}">Contact</a>
    </div>
    <div style="font-size:.72rem;color:var(--muted);display:flex;align-items:center;gap:.4rem">
      <i class="ti ti-point-filled" style="color:var(--em)"></i>
      Powered by DigiTexia · Yaoundé, Cameroon
    </div>
  </div>
</footer>

<script>
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('vis'); obs.unobserve(e.target); } });
}, { threshold: 0.07 });
document.querySelectorAll('.rv').forEach(el => obs.observe(el));

const navEl = document.getElementById('mainNav');
window.addEventListener('scroll', () => navEl.classList.toggle('sc', window.scrollY > 50));

// Animate score bars when visible
const barObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if(e.isIntersecting){
      e.target.querySelectorAll('.agent-score-fill').forEach(b => {
        const w = b.style.width; b.style.width = '0';
        setTimeout(() => b.style.width = w, 100);
      });
      barObs.unobserve(e.target);
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('.dm-agents').forEach(el => barObs.observe(el));
</script>

@endsection
