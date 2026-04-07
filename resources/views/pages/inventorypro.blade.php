@extends('index')

@section('page_title', 'InventoryPro — DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/inventorypro.css') }}">
@endpush

@section('fullpage')
<!-- ─── NAV ─── -->
<nav id="mainNav">
  <div class="nav-brand">
    <div class="nav-logomark"><div class="nav-logomark-inner"></div></div>
    <div class="nav-name">Inventory<span>Pro</span></div>
  </div>
  <ul class="nav-links">
    <li><a href="#why">Problématique</a></li>
    <li><a href="#features">Fonctionnalités</a></li>
    <li><a href="#multi">Multi-agences</a></li>
    <li><a href="#impact">Impact</a></li>
    <li><a href="#gallery">Aperçu</a></li>
    <li><a href="#cta-final">Démo</a></li>
  </ul>
  <div class="nav-right">
    <a href="{{ url('/') }}" class="nav-back">← DigiTexia</a>
    <a href="#cta-final" class="btn btn-primary" style="padding:.55rem 1.25rem;font-size:.82rem">Demander une démo</a>
  </div>
</nav>

<!-- ════════════════════════════════════
     HERO
════════════════════════════════════ -->
<section id="hero">
  <div class="hero-texture"></div>
  <div class="hero-inner">

    <div class="rv">
      <div class="hero-eyebrow">
        <div class="hero-tag"><div class="hero-pulse"></div>Plateforme SaaS · Multi-agences</div>
        <div style="font-family:var(--font-body);font-size:.65rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.35)">Gestion opérationnelle</div>
      </div>

      <h1>Pilotez vos opérations.<br><span class="accent-teal">Centralisez.</span> <span class="accent-sky">Tracez. Décidez.</span></h1>

      <p class="lead">InventoryPro est la plateforme de digitalisation opérationnelle conçue pour les microfinances, coopératives et institutions multi-agences — de la gestion des stocks aux ordonnances de paiement, en passant par le pilotage en temps réel.</p>

      <div class="hero-ctas">
        <a href="#cta-final" class="btn btn-primary">
          Demander une démo
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#features" class="btn btn-teal-outline">Découvrir la solution</a>
      </div>

      <div class="hero-trust">
        <div class="ht-item"><span class="ht-ico"><i class="ti ti-lock"></i></span>Données sécurisées</div>
        <div class="ht-div"></div>
        <div class="ht-item"><span class="ht-ico"><i class="ti ti-building-bank"></i></span>Conçu pour la microfinance</div>
        <div class="ht-div"></div>
        <div class="ht-item"><span class="ht-ico"><i class="ti ti-zap"></i></span>Déploiement rapide</div>
        <div class="ht-div"></div>
        <div class="ht-item"><span class="ht-ico"><i class="ti ti-world"></i></span>Adapté à l'Afrique</div>
      </div>
    </div>

    <!-- Dashboard mockup -->
    <div class="rv d2" style="position:relative">
      <div class="dash-float df1">
        <div class="df-label">Traçabilité</div>
        <div class="df-val" style="color:var(--teal-lt)">100% des opérations</div>
      </div>
      <div class="dash-float df2">
        <div class="df-label">Validation en attente</div>
        <div class="df-val" style="color:#FCD34D">4 ordonnances</div>
      </div>

      <div class="hero-dash">
        <div class="hd-bar">
          <div class="hd-dots">
            <div class="hd-dot" style="background:#F87171"></div>
            <div class="hd-dot" style="background:#FCD34D"></div>
            <div class="hd-dot" style="background:#6EE7B7"></div>
          </div>
          <div class="hd-title">InventoryPro — Tableau de bord</div>
          <div class="hd-live"><div class="hd-live-dot"></div>En direct</div>
        </div>

        <div class="hd-body">
          <div class="hd-tabs">
            <div class="hd-tab active">Vue globale</div>
            <div class="hd-tab">Stocks</div>
            <div class="hd-tab">Paiements</div>
            <div class="hd-tab">Agences</div>
          </div>

          <!-- KPIs -->
          <div class="hd-kpis">
            <div class="hd-kpi">
              <div class="hd-kpi-val">1 247</div>
              <div class="hd-kpi-lbl">Mouvements stock</div>
              <div class="hd-kpi-delta up">↑ +18% ce mois</div>
            </div>
            <div class="hd-kpi">
              <div class="hd-kpi-val">98.4%</div>
              <div class="hd-kpi-lbl">Taux de traçabilité</div>
              <div class="hd-kpi-delta up">↑ Objectif atteint</div>
            </div>
            <div class="hd-kpi">
              <div class="hd-kpi-val">34</div>
              <div class="hd-kpi-lbl">Demandes en cours</div>
              <div class="hd-kpi-delta dn">↓ −12 vs hier</div>
            </div>
            <div class="hd-kpi">
              <div class="hd-kpi-val">8</div>
              <div class="hd-kpi-lbl">Agences actives</div>
              <div class="hd-kpi-delta up">↑ Toutes en ligne</div>
            </div>
          </div>

          <!-- Charts -->
          <div class="hd-charts">
            <div class="hd-chart">
              <div class="hd-chart-lbl">Entrées / Sorties — 8 semaines</div>
              <div class="spark-bars">
                <div class="spark-bar" style="height:45%;background:rgba(13,148,136,.3)"></div>
                <div class="spark-bar" style="height:60%;background:rgba(13,148,136,.3)"></div>
                <div class="spark-bar" style="height:40%;background:rgba(13,148,136,.3)"></div>
                <div class="spark-bar" style="height:75%;background:rgba(13,148,136,.4)"></div>
                <div class="spark-bar" style="height:55%;background:rgba(13,148,136,.4)"></div>
                <div class="spark-bar" style="height:85%;background:rgba(13,148,136,.5)"></div>
                <div class="spark-bar" style="height:70%;background:rgba(13,148,136,.5)"></div>
                <div class="spark-bar" style="height:100%;background:linear-gradient(to top,var(--teal),var(--teal-lt))"></div>
              </div>
            </div>
            <div class="hd-chart">
              <div class="hd-chart-lbl">État des demandes</div>
              <div class="prog-list">
                <div class="prog-item">
                  <div class="prog-lbl">Validées</div>
                  <div class="prog-track"><div class="prog-fill" style="width:78%;background:var(--teal-lt)"></div></div>
                  <div class="prog-val">78%</div>
                </div>
                <div class="prog-item">
                  <div class="prog-lbl">En attente</div>
                  <div class="prog-track"><div class="prog-fill" style="width:14%;background:#FCD34D"></div></div>
                  <div class="prog-val">14%</div>
                </div>
                <div class="prog-item">
                  <div class="prog-lbl">Rejetées</div>
                  <div class="prog-track"><div class="prog-fill" style="width:8%;background:#F87171"></div></div>
                  <div class="prog-val">8%</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Recent ops table -->
          <div class="hd-table">
            <div class="hd-table-head">
              <div class="hd-th">Opération</div>
              <div class="hd-th">Agence</div>
              <div class="hd-th">Date</div>
              <div class="hd-th">Statut</div>
            </div>
            <div class="hd-row">
              <div class="hd-td">Sortie matériel informatique</div>
              <div class="hd-td">Agence Centre</div>
              <div class="hd-td">Auj. 09:14</div>
              <div class="hd-td"><span class="hd-badge hb-green">Validé</span></div>
            </div>
            <div class="hd-row">
              <div class="hd-td">Ordonnance paiement #0441</div>
              <div class="hd-td">Agence Nord</div>
              <div class="hd-td">Auj. 08:52</div>
              <div class="hd-td"><span class="hd-badge hb-yellow">En attente</span></div>
            </div>
            <div class="hd-row">
              <div class="hd-td">Entrée fournitures bureau</div>
              <div class="hd-td">Siège social</div>
              <div class="hd-td">Hier 17:30</div>
              <div class="hd-td"><span class="hd-badge hb-green">Validé</span></div>
            </div>
            <div class="hd-row">
              <div class="hd-td">Demande matériel — Pôle IT</div>
              <div class="hd-td">Agence Est</div>
              <div class="hd-td">Hier 15:10</div>
              <div class="hd-td"><span class="hd-badge hb-blue">En cours</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ── Trust strip ── -->
<section id="trust-strip">
  <div class="ts-inner">
    <div class="ts-label">Ils nous font confiance</div>
    <div class="ts-logos">
      <div class="ts-logo">
        <div class="ts-logo-mark" style="background:#EFF6FF;border-color:#BFDBFE;color:#1D4ED8">C</div>
        CREMIN-CAM
      </div>
      <div class="ts-logo">
        <div class="ts-logo-mark" style="background:#F0FDF4;border-color:#BBF7D0;color:#15803D">E</div>
        Elles Plus Africa
      </div>
      <div class="ts-logo">
        <div class="ts-logo-mark" style="background:#FFF7ED;border-color:#FDE68A;color:#B45309">O</div>
        Orin Consulting
      </div>
      <div class="ts-logo">
        <div class="ts-logo-mark" style="background:#F8FAFC;border-color:#CBD5E1;color:#475569">S</div>
        Snow White Group
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════
     WHY
════════════════════════════════════ -->
<section id="why">
  <div class="why-inner">
    <div class="section-header rv">
      <span class="tag tag-navy"><i class="ti ti-alert-triangle"></i> Pourquoi cette solution</span>
      <h2>Les opérations manuelles coûtent cher. La désorganisation aussi.</h2>
      <p>Sans outil dédié, les institutions financières perdent un temps précieux sur des tâches administratives, accumulent les erreurs et manquent de visibilité sur leurs opérations réelles.</p>
    </div>

    <div class="why-layout">
      <div class="rv">
        <div class="tag tag-navy">Problèmes identifiés</div>
        <div class="why-problems">
          <div class="wp-item">
            <div class="wp-ico"><i class="ti ti-clock-hour-3"></i></div>
            <div><div class="wp-title">Lenteur des validations</div><div class="wp-desc">Les demandes circulent par email ou papier — les workflows de validation prennent des jours au lieu de minutes.</div></div>
          </div>
          <div class="wp-item">
            <div class="wp-ico"><i class="ti ti-eye-off"></i></div>
            <div><div class="wp-title">Manque de visibilité opérationnelle</div><div class="wp-desc">Impossible de savoir en temps réel l'état des stocks, des demandes ou des paiements dans chaque agence.</div></div>
          </div>
          <div class="wp-item">
            <div class="wp-ico"><i class="ti ti-folder"></i></div>
            <div><div class="wp-title">Dispersion des données</div><div class="wp-desc">Les informations sont éparpillées dans des fichiers Excel, emails et cahiers — aucune source de vérité unique.</div></div>
          </div>
          <div class="wp-item">
            <div class="wp-ico"><i class="ti ti-alert-circle"></i></div>
            <div><div class="wp-title">Erreurs manuelles récurrentes</div><div class="wp-desc">La ressaisie manuelle multiplie les erreurs de saisie, les doublons et les incohérences comptables.</div></div>
          </div>
          <div class="wp-item">
            <div class="wp-ico"><i class="ti ti-search"></i></div>
            <div><div class="wp-title">Faible traçabilité des opérations</div><div class="wp-desc">En cas d'audit ou de litige, retrouver l'historique d'une opération devient un exercice fastidieux et risqué.</div></div>
          </div>
        </div>
        <div class="result-box">
          <div class="result-ico"><i class="ti ti-chart-bar-off"></i></div>
          <div class="result-text">Résultat : perte de temps, erreurs coûteuses, faible productivité et risque opérationnel élevé.</div>
        </div>
      </div>

      <div class="rv d2">
        <div class="ws-tag"><i class="ti ti-sparkles"></i> La réponse d'InventoryPro</div>
        <div class="ws-glow"></div>
        <div class="why-solution">
          <div class="ws-title">Une plateforme. Tout centralisé. Tout tracé.</div>
          <div class="ws-sub">InventoryPro digitalise l'intégralité de vos processus opérationnels — des mouvements de stock aux ordonnances de paiement — sur une plateforme unifiée, sécurisée et accessible à chaque agence selon son périmètre.</div>
          <div class="ws-items">
            <div class="ws-item"><div class="ws-check"><i class="ti ti-check"></i></div><div class="ws-text">Gestion centralisée des entrées et sorties de stock</div></div>
            <div class="ws-item"><div class="ws-check"><i class="ti ti-check"></i></div><div class="ws-text">Workflow de validation numérique par rôle</div></div>
            <div class="ws-item"><div class="ws-check"><i class="ti ti-check"></i></div><div class="ws-text">Traçabilité complète de chaque opération</div></div>
            <div class="ws-item"><div class="ws-check"><i class="ti ti-check"></i></div><div class="ws-text">Tableaux de bord en temps réel par agence</div></div>
            <div class="ws-item"><div class="ws-check"><i class="ti ti-check"></i></div><div class="ws-text">Notifications et alertes automatiques</div></div>
            <div class="ws-item"><div class="ws-check"><i class="ti ti-check"></i></div><div class="ws-text">Accès sécurisé selon le profil et le périmètre</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════
     FEATURES
════════════════════════════════════ -->
<section id="features">
  <div class="feat-inner">
    <div class="section-header rv">
      <span class="tag tag-teal"><i class="ti ti-settings"></i> Fonctionnalités clés</span>
      <h2>Tout ce qu'il faut pour piloter vos opérations.</h2>
      <p>7 modules intégrés qui couvrent chaque aspect de la gestion opérationnelle — de la réception du matériel à la clôture des opérations.</p>
    </div>

    <div class="feat-grid">
      <div class="feat-card fc-teal rv d1">
        <div class="fc-ico"><i class="ti ti-package"></i></div>
        <div class="fc-title">Gestion des Stocks</div>
        <div class="fc-desc">Suivez en temps réel tous les mouvements d'entrée et de sortie de stock, par agence, par pôle et par catégorie de produit.</div>
        <div class="fc-items">
          <div class="fc-item"><span class="fc-bullet"></span>Entrées & sorties tracées automatiquement</div>
          <div class="fc-item"><span class="fc-bullet"></span>Historique complet des mouvements</div>
          <div class="fc-item"><span class="fc-bullet"></span>Alertes de seuil critique de stock</div>
          <div class="fc-item"><span class="fc-bullet"></span>Valorisation du stock en temps réel</div>
        </div>
      </div>

      <div class="feat-card fc-sky rv d2">
        <div class="fc-ico"><i class="ti ti-clipboard-list"></i></div>
        <div class="fc-title">Demandes de Matériel</div>
        <div class="fc-desc">Digitalisez entièrement le processus de demande — de la soumission à la livraison, avec validation par workflow selon les rôles.</div>
        <div class="fc-items">
          <div class="fc-item"><span class="fc-bullet"></span>Formulaire de demande standardisé</div>
          <div class="fc-item"><span class="fc-bullet"></span>Workflow de validation multi-niveaux</div>
          <div class="fc-item"><span class="fc-bullet"></span>Suivi du statut en temps réel</div>
          <div class="fc-item"><span class="fc-bullet"></span>Historique complet par demandeur</div>
        </div>
      </div>

      <div class="feat-card fc-gold rv d3">
        <div class="fc-ico"><i class="ti ti-credit-card"></i></div>
        <div class="fc-title">Ordonnances de Paiement</div>
        <div class="fc-desc">Gérez les ordonnances de paiement de bout en bout — création, soumission, validation hiérarchique et archivage sécurisé.</div>
        <div class="fc-items">
          <div class="fc-item"><span class="fc-bullet"></span>Création d'ordonnances numérisées</div>
          <div class="fc-item"><span class="fc-bullet"></span>Circuit de validation par rôle</div>
          <div class="fc-item"><span class="fc-bullet"></span>Archivage horodaté et sécurisé</div>
          <div class="fc-item"><span class="fc-bullet"></span>Rapports de paiement exportables</div>
        </div>
      </div>

      <div class="feat-card fc-green rv d1">
        <div class="fc-ico"><i class="ti ti-bell"></i></div>
        <div class="fc-title">Notifications Temps Réel</div>
        <div class="fc-desc">Ne manquez plus aucune action requise. InventoryPro alerte les bons intervenants au bon moment sur chaque événement opérationnel.</div>
        <div class="fc-items">
          <div class="fc-item"><span class="fc-bullet"></span>Alertes de validation en attente</div>
          <div class="fc-item"><span class="fc-bullet"></span>Notifications de seuil de stock</div>
          <div class="fc-item"><span class="fc-bullet"></span>Rappels d'échéances automatiques</div>
          <div class="fc-item"><span class="fc-bullet"></span>Digest quotidien par email</div>
        </div>
      </div>

      <div class="feat-card fc-navy rv d2">
        <div class="fc-ico"><i class="ti ti-chart-bar"></i></div>
        <div class="fc-title">Tableaux de Bord par Agence</div>
        <div class="fc-desc">Chaque agence dispose de son propre tableau de bord. La direction accède à une vue consolidée de l'ensemble du réseau.</div>
        <div class="fc-items">
          <div class="fc-item"><span class="fc-bullet"></span>KPI opérationnels en temps réel</div>
          <div class="fc-item"><span class="fc-bullet"></span>Vue agence & vue consolidée groupe</div>
          <div class="fc-item"><span class="fc-bullet"></span>Graphiques et tendances</div>
          <div class="fc-item"><span class="fc-bullet"></span>Rapports automatisés exportables</div>
        </div>
      </div>

      <div class="feat-card fc-purple rv d3">
        <div class="fc-ico"><i class="ti ti-shield-lock"></i></div>
        <div class="fc-title">Contrôle des Accès par Rôle</div>
        <div class="fc-desc">Chaque utilisateur accède uniquement aux données et fonctions correspondant à son rôle et son périmètre géographique.</div>
        <div class="fc-items">
          <div class="fc-item"><span class="fc-bullet"></span>Rôles granulaires configurables</div>
          <div class="fc-item"><span class="fc-bullet"></span>Accès limité par agence/pôle</div>
          <div class="fc-item"><span class="fc-bullet"></span>Journal complet des connexions</div>
          <div class="fc-item"><span class="fc-bullet"></span>Authentification sécurisée</div>
        </div>
      </div>

      <div class="feat-card fc-teal rv d1" style="grid-column:span 2">
        <div style="display:flex;gap:1.5rem;align-items:flex-start">
          <div class="fc-ico" style="flex-shrink:0"><i class="ti ti-receipt-2"></i></div>
          <div style="flex:1">
            <div class="fc-title">Suivi & Traçabilité Complète</div>
            <div class="fc-desc">Chaque action effectuée dans InventoryPro est enregistrée avec horodatage, identifiant utilisateur et détail de l'opération — pour une traçabilité irréprochable et une auditabilité totale.</div>
            <div class="fc-items" style="display:grid;grid-template-columns:1fr 1fr;gap:.4rem">
              <div class="fc-item"><span class="fc-bullet"></span>Journalisation de chaque action</div>
              <div class="fc-item"><span class="fc-bullet"></span>Historique complet non modifiable</div>
              <div class="fc-item"><span class="fc-bullet"></span>Audit trail par utilisateur</div>
              <div class="fc-item"><span class="fc-bullet"></span>Export pour contrôles internes</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════
     MULTI-AGENCY
════════════════════════════════════ -->
<section id="multi">
  <div class="multi-bg"></div>
  <div class="multi-inner">

    <div class="multi-text rv">
      <span class="tag tag-teal" style="background:rgba(20,184,166,.1);border-color:var(--teal-bdr);color:var(--teal-lt)"><i class="ti ti-building"></i> Architecture multi-agences</span>
      <h2>Pensé pour les structures qui gèrent plusieurs agences ou pôles.</h2>
      <p class="lead" style="color:rgba(255,255,255,.55);margin-bottom:2.5rem">InventoryPro a été architecturé dès le départ pour répondre aux exigences des réseaux multi-entités — avec une gouvernance rigoureuse, une centralisation des données et une sécurité des accès adaptée à chaque niveau hiérarchique.</p>
      <div class="multi-pillars">
        <div class="mp-item">
          <div class="mp-ico"><i class="ti ti-folders"></i></div>
          <div><div class="mp-title">Données cloisonnées par périmètre</div><div class="mp-desc">Chaque agence ou pôle accède uniquement à ses propres données — aucune confusion, aucune fuite entre entités.</div></div>
        </div>
        <div class="mp-item">
          <div class="mp-ico"><i class="ti ti-eye"></i></div>
          <div><div class="mp-title">Supervision centralisée pour la direction</div><div class="mp-desc">Le siège dispose d'une vue consolidée de l'ensemble du réseau — KPI globaux, alertes transverses, comparatifs inter-agences.</div></div>
        </div>
        <div class="mp-item">
          <div class="mp-ico"><i class="ti ti-scale"></i></div>
          <div><div class="mp-title">Gouvernance et conformité intégrées</div><div class="mp-desc">Les workflows de validation respectent la hiérarchie interne — chaque décision est tracée, documentée et auditable.</div></div>
        </div>
        <div class="mp-item">
          <div class="mp-ico"><i class="ti ti-link"></i></div>
          <div><div class="mp-title">Synchronisation en temps réel</div><div class="mp-desc">Toutes les agences travaillent sur la même plateforme — les mises à jour sont instantanément visibles par les parties autorisées.</div></div>
        </div>
        <div class="mp-item">
          <div class="mp-ico"><i class="ti ti-shield-check"></i></div>
          <div><div class="mp-title">Sécurité des accès à chaque niveau</div><div class="mp-desc">Du directeur général à l'agent de terrain, chaque profil dispose exactement des accès nécessaires à sa fonction — ni plus, ni moins.</div></div>
        </div>
      </div>
    </div>

    <!-- Agency diagram -->
    <div class="rv d2" style="position:relative">
      <div class="agency-diagram">
        <svg class="ad-svg" viewBox="0 0 360 360" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- lines from center -->
          <line x1="180" y1="180" x2="180" y2="50" stroke="rgba(20,184,166,.2)" stroke-width="1" stroke-dasharray="4 4"/>
          <line x1="180" y1="180" x2="310" y2="110" stroke="rgba(20,184,166,.2)" stroke-width="1" stroke-dasharray="4 4"/>
          <line x1="180" y1="180" x2="310" y2="260" stroke="rgba(20,184,166,.2)" stroke-width="1" stroke-dasharray="4 4"/>
          <line x1="180" y1="180" x2="180" y2="310" stroke="rgba(20,184,166,.2)" stroke-width="1" stroke-dasharray="4 4"/>
          <line x1="180" y1="180" x2="50" y2="260" stroke="rgba(20,184,166,.2)" stroke-width="1" stroke-dasharray="4 4"/>
          <line x1="180" y1="180" x2="50" y2="110" stroke="rgba(20,184,166,.2)" stroke-width="1" stroke-dasharray="4 4"/>
        </svg>

        <div class="ad-center">Siège<br>Central</div>

        <div class="ad-node adn1"><div class="ad-node-ico"><i class="ti ti-building"></i></div><div class="ad-node-name">Agence Nord</div><div class="ad-node-status"><i class="ti ti-point-filled"></i> En ligne</div></div>
        <div class="ad-node adn2"><div class="ad-node-ico"><i class="ti ti-building-bank"></i></div><div class="ad-node-name">Agence Est</div><div class="ad-node-status"><i class="ti ti-point-filled"></i> En ligne</div></div>
        <div class="ad-node adn3"><div class="ad-node-ico"><i class="ti ti-building-store"></i></div><div class="ad-node-name">Agence Sud</div><div class="ad-node-status"><i class="ti ti-point-filled"></i> En ligne</div></div>
        <div class="ad-node adn4"><div class="ad-node-ico"><i class="ti ti-building-factory"></i></div><div class="ad-node-name">Pôle Opérations</div><div class="ad-node-status"><i class="ti ti-point-filled"></i> Actif</div></div>
        <div class="ad-node adn5"><div class="ad-node-ico"><i class="ti ti-briefcase"></i></div><div class="ad-node-name">Pôle Finance</div><div class="ad-node-status"><i class="ti ti-point-filled"></i> Actif</div></div>
        <div class="ad-node adn6"><div class="ad-node-ico"><i class="ti ti-device-laptop"></i></div><div class="ad-node-name">Pôle IT</div><div class="ad-node-status"><i class="ti ti-point-filled"></i> Actif</div></div>
      </div>
    </div>

  </div>
</section>

<!-- ════════════════════════════════════
     IMPACT
════════════════════════════════════ -->
<section id="impact">
  <div class="impact-inner">
    <div class="section-header rv">
      <span class="tag tag-sky"><i class="ti ti-trending-up"></i> Impact & Résultats</span>
      <h2>Des résultats opérationnels concrets, dès les premières semaines.</h2>
      <p>Les institutions qui déploient InventoryPro constatent des améliorations mesurables sur l'ensemble de leur chaîne opérationnelle.</p>
    </div>

    <div class="impact-grid">
      <div class="impact-card rv d1">
        <span class="ic-ico"><i class="ti ti-zap"></i></span>
        <div class="ic-num">−70%</div>
        <div class="ic-label">de temps de traitement des demandes et validations</div>
      </div>
      <div class="impact-card rv d2">
        <span class="ic-ico"><i class="ti ti-circle-x"></i></span>
        <div class="ic-num">−85%</div>
        <div class="ic-label">d'erreurs de saisie grâce à la digitalisation des processus</div>
      </div>
      <div class="impact-card rv d3">
        <span class="ic-ico"><i class="ti ti-eye"></i></span>
        <div class="ic-num">100%</div>
        <div class="ic-label">de visibilité opérationnelle sur l'ensemble du réseau</div>
      </div>
      <div class="impact-card rv d4">
        <span class="ic-ico"><i class="ti ti-clock-hour-4"></i></span>
        <div class="ic-num">+40%</div>
        <div class="ic-label">de gain de temps administratif pour les équipes terrain</div>
      </div>
    </div>

    <!-- CREMIN-CAM case study -->
    <div class="rv" style="margin-top:3rem;background:#fff;border:1px solid var(--bdr);border-radius:20px;padding:2.5rem;box-shadow:var(--shadow-md);position:relative;overflow:hidden">
      <div style="position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--teal),var(--sky))"></div>
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1.5rem;margin-bottom:1.75rem;padding-bottom:1.75rem;border-bottom:1px solid var(--bdr)">
        <div style="display:flex;align-items:center;gap:1rem">
          <div style="width:52px;height:52px;border-radius:12px;background:var(--teal-dim);border:1px solid var(--teal-bdr);display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:.72rem;font-weight:700;color:var(--teal);line-height:1.2;text-align:center;flex-shrink:0">CRE<br>MIN</div>
          <div>
            <div style="font-family:var(--font-display);font-size:1.1rem;font-weight:700;color:var(--navy)">CREMIN-CAM</div>
            <div style="font-family:var(--font-body);font-size:.78rem;color:var(--muted)">Institution financière de proximité · Cameroun</div>
          </div>
        </div>
        <div class="tag tag-teal" style="margin-bottom:0">Cas client</div>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-bottom:1.75rem">
        <div style="text-align:center;padding:1.1rem;background:var(--slate);border:1px solid var(--bdr);border-radius:10px">
          <div style="font-family:var(--font-display);font-size:1.6rem;font-weight:900;color:var(--teal)">−40%</div>
          <div style="font-family:var(--font-body);font-size:.75rem;color:var(--muted);margin-top:.25rem">Délais de traitement</div>
        </div>
        <div style="text-align:center;padding:1.1rem;background:var(--slate);border:1px solid var(--bdr);border-radius:10px">
          <div style="font-family:var(--font-display);font-size:1.6rem;font-weight:900;color:var(--sky)">100%</div>
          <div style="font-family:var(--font-body);font-size:.75rem;color:var(--muted);margin-top:.25rem">Traçabilité des opérations</div>
        </div>
        <div style="text-align:center;padding:1.1rem;background:var(--slate);border:1px solid var(--bdr);border-radius:10px">
          <div style="font-family:var(--font-display);font-size:1.6rem;font-weight:900;color:var(--navy)">+3</div>
          <div style="font-family:var(--font-body);font-size:.75rem;color:var(--muted);margin-top:.25rem">Agences connectées</div>
        </div>
      </div>
      <div style="font-family:var(--font-body);font-size:.875rem;color:var(--ink-soft);line-height:1.8;font-style:italic;padding:1.1rem 1.25rem;border-left:3px solid var(--teal);background:var(--slate);border-radius:0 8px 8px 0">
        "Avant InventoryPro, nos opérations de stock et de paiement étaient gérées dans des tableurs partagés par email. Aujourd'hui, chaque mouvement est tracé, chaque validation se fait en quelques clics et nos directeurs ont une vision en temps réel. La différence est immédiate."
      </div>
    </div>

    <!-- Gallery row -->
    <div class="gallery-row rv" style="margin-top:2.5rem">
      <div class="gal-item">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-chart-bar"></i></span>
            <div class="img-ph-label">Tableau de bord principal<br>— Vue directeur</div>
            <div class="img-ph-hint">Capture de l'interface · Recommandé : 840 × 280 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Dashboard consolidé</div><div class="gal-cap-sub">Vue globale des opérations et KPI en temps réel</div></div>
      </div>
      <div class="gal-item">
        <div class="gal-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-package"></i></span>
            <div class="img-ph-label">Module gestion<br>des stocks</div>
            <div class="img-ph-hint">400 × 280 px</div>
          </div>
        </div>
        <div class="gal-cap"><div class="gal-cap-title">Gestion des stocks</div><div class="gal-cap-sub">Entrées, sorties et historique</div></div>
      </div>
    </div>

  </div>
</section>

<!-- ════════════════════════════════════
     TRUST / TESTIMONIALS
════════════════════════════════════ -->
<section id="trust">
  <div class="trust-inner">
    <div class="rv">
      <span class="tag tag-teal"><i class="ti ti-shield-check"></i> Confiance & Sécurité</span>
      <h2>Une plateforme sur laquelle vous pouvez compter.</h2>
      <p class="lead" style="margin-bottom:2rem">InventoryPro a été conçu pour répondre aux exigences de sécurité, de traçabilité et de conformité des institutions financières. Votre infrastructure opérationnelle mérite mieux que des solutions génériques.</p>
      <div class="trust-badges">
        <div class="tb-item"><div class="tb-ico"><i class="ti ti-lock"></i></div><div><div class="tb-label">Données sécurisées</div><div class="tb-sub">Chiffrement bout en bout</div></div></div>
        <div class="tb-item"><div class="tb-ico"><i class="ti ti-receipt-2"></i></div><div><div class="tb-label">Audit trail complet</div><div class="tb-sub">Chaque action journalisée</div></div></div>
        <div class="tb-item"><div class="tb-ico"><i class="ti ti-settings"></i></div><div><div class="tb-label">99.9% disponibilité</div><div class="tb-sub">Infrastructure fiable</div></div></div>
        <div class="tb-item"><div class="tb-ico"><i class="ti ti-world"></i></div><div><div class="tb-label">Conçu pour l'Afrique</div><div class="tb-sub">Adapté aux réalités terrain</div></div></div>
        <div class="tb-item"><div class="tb-ico"><i class="ti ti-clipboard-list"></i></div><div><div class="tb-label">Conformité intégrée</div><div class="tb-sub">Processus normés et traçables</div></div></div>
        <div class="tb-item"><div class="tb-ico"><i class="ti ti-school"></i></div><div><div class="tb-label">Formation incluse</div><div class="tb-sub">Accompagnement DigiTexia</div></div></div>
      </div>
    </div>

    <div class="testimonials rv d2">
      <div class="test-card">
        <div class="test-stars"><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i></div>
        <p class="test-quote">InventoryPro a radicalement changé notre gestion quotidienne. Nos agents n'ont plus besoin d'envoyer des emails pour chaque demande — tout se fait en ligne, avec validation automatique selon le niveau hiérarchique. Un vrai gain de temps.</p>
        <div class="test-author">
          <div class="test-av"><div class="img-ph" style="height:100%"><div class="img-ph-ico" style="font-size:.7rem"><i class="ti ti-user"></i></div></div></div>
          <div><div class="test-name">Directeur des Opérations</div><div class="test-role">Institution financière de proximité · Cameroun</div></div>
        </div>
      </div>
      <div class="test-card">
        <div class="test-stars"><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i></div>
        <p class="test-quote">La traçabilité offerte par InventoryPro nous a permis de passer notre audit interne sans aucune difficulté. Chaque opération est documentée, horodatée, et retrouvable en quelques secondes. C'est exactement ce dont nous avions besoin.</p>
        <div class="test-author">
          <div class="test-av"><div class="img-ph" style="height:100%"><div class="img-ph-ico" style="font-size:.7rem"><i class="ti ti-user"></i></div></div></div>
          <div><div class="test-name">Responsable Contrôle Interne</div><div class="test-role">Coopérative d'épargne et de crédit</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════
     GALLERY FULL
════════════════════════════════════ -->
<section id="gallery">
  <div class="gal-inner">
    <div class="section-header rv">
      <span class="tag tag-navy"><i class="ti ti-photo-scan"></i> Aperçu de la plateforme</span>
      <h2>InventoryPro en images.</h2>
      <p>Remplacez ces emplacements par vos captures d'écran réelles de la plateforme.</p>
    </div>
    <div class="gal-grid-full">
      <div class="gf-item wide rv d1">
        <div class="gf-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-device-desktop"></i></span>
            <div class="img-ph-label">Tableau de bord principal — Historique global des opérations</div>
            <div class="img-ph-hint">Recommandé : 840 × 240 px</div>
          </div>
        </div>
        <div class="gf-cap"><div class="gf-cap-title">Historique global des opérations</div><div class="gf-cap-sub">Tous les mouvements, filtrables par agence, date et type</div></div>
      </div>
      <div class="gf-item rv d2">
        <div class="gf-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-device-mobile"></i></span>
            <div class="img-ph-label">Vue mobile<br>InventoryPro</div>
            <div class="img-ph-hint">400 × 240 px</div>
          </div>
        </div>
        <div class="gf-cap"><div class="gf-cap-title">Interface mobile</div><div class="gf-cap-sub">Accès complet depuis smartphone</div></div>
      </div>
      <div class="gf-item rv d1">
        <div class="gf-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-credit-card"></i></span>
            <div class="img-ph-label">Module ordonnances<br>de paiement</div>
            <div class="img-ph-hint">400 × 240 px</div>
          </div>
        </div>
        <div class="gf-cap"><div class="gf-cap-title">Ordonnances de paiement</div><div class="gf-cap-sub">Création, validation et archivage</div></div>
      </div>
      <div class="gf-item rv d2">
        <div class="gf-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-shield-lock"></i></span>
            <div class="img-ph-label">Gestion des rôles<br>& permissions</div>
            <div class="img-ph-hint">400 × 240 px</div>
          </div>
        </div>
        <div class="gf-cap"><div class="gf-cap-title">Contrôle des accès</div><div class="gf-cap-sub">Rôles, permissions et périmètres</div></div>
      </div>
      <div class="gf-item rv d3">
        <div class="gf-frame">
          <div class="img-ph">
            <span class="img-ph-ico"><i class="ti ti-clipboard-list"></i></span>
            <div class="img-ph-label">Demandes de matériel<br>& workflow</div>
            <div class="img-ph-hint">400 × 240 px</div>
          </div>
        </div>
        <div class="gf-cap"><div class="gf-cap-title">Demandes & validations</div><div class="gf-cap-sub">Workflow numérique multi-niveaux</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════
     FINAL CTA
════════════════════════════════════ -->
<section id="cta-final">
  <div class="cta-glow"></div><div class="cta-grid"></div>
  <div class="cta-inner rv">
    <span class="tag tag-teal" style="margin-bottom:1.5rem"><i class="ti ti-bullseye"></i> Passez à l'action</span>
    <h2>Transformez la gestion opérationnelle de votre institution.</h2>
    <p class="lead">InventoryPro est opérationnel en quelques semaines, pas en mois. Discutons de vos besoins spécifiques et construisons ensemble la solution adaptée à votre structure.</p>
    <div class="cta-btns">
      <a href="mailto:contactdigitexia@gmail.com?subject=Demande%20d%C3%A9mo%20InventoryPro" class="btn btn-white">
        Demander une démonstration
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn btn-teal-outline">Nous contacter</a>
    </div>
    <div class="cta-guarantees">
      <div class="cg-item"><i class="ti ti-circle-check"></i> Démo gratuite et sans engagement</div>
      <div class="cg-item"><i class="ti ti-circle-check"></i> Réponse sous 24 heures</div>
      <div class="cg-item"><i class="ti ti-circle-check"></i> Déploiement clé en main</div>
      <div class="cg-item"><i class="ti ti-circle-check"></i> Support long terme DigiTexia</div>
    </div>
  </div>
</section>

<!-- ─── FOOTER ─── -->
<footer>
  <div class="footer-top">
    <div>
      <div class="fb-brand">
        <div class="fb-logomark"><div style="width:16px;height:16px;border-radius:3px;background:linear-gradient(135deg,var(--teal-lt),#7DD3FC)"></div></div>
        <div class="fb-name">Inventory<span>Pro</span></div>
      </div>
      <div class="fb-desc">Plateforme de pilotage opérationnel multi-agences — conçue pour les microfinances, coopératives et institutions financières africaines. Une solution DigiTexia.</div>
      <div class="fb-contacts">
        <div class="fb-c"><span class="fb-c-ico"><i class="ti ti-phone"></i></span>(+237) 650 945 280 / 691 095 590</div>
        <div class="fb-c"><span class="fb-c-ico"><i class="ti ti-mail"></i></span>contactdigitexia@gmail.com</div>
        <div class="fb-c"><span class="fb-c-ico">🌐</span>www.digitexia.org</div>
        <div class="fb-c"><span class="fb-c-ico"><i class="ti ti-map-pin"></i></span>Yaoundé, Cameroun</div>
      </div>
    </div>
    <div class="fc-col">
      <h5>Navigation</h5>
      <ul>
        <li><a href="#why">Problématique</a></li>
        <li><a href="#features">Fonctionnalités</a></li>
        <li><a href="#multi">Multi-agences</a></li>
        <li><a href="#impact">Impact</a></li>
        <li><a href="#gallery">Aperçu</a></li>
      </ul>
    </div>
    <div class="fc-col">
      <h5>DigiTexia</h5>
      <ul>
        <li><a href="{{ url('/') }}">Site principal</a></li>
        <li><a href="{{ url('/solutions') }}">Nos solutions</a></li>
        <li><a href="{{ url('/why-us') }}">Pourquoi nous</a></li>
        <li><a href="{{ url('/team-members') }}">Notre équipe</a></li>
        <li><a href="{{ url('/contact-us') }}">Contact</a></li>
      </ul>
    </div>
    <div class="fc-col">
      <h5>Autres solutions</h5>
      <ul>
        <li><a href="{{ url('/solutions/perfomia') }}">PERFOMIA</a></li>
        <li><a href="{{ url('/solutions/flexicare') }}">FlexiCare</a></li>
        <li><a href="{{ url('/solutions') }}">DigiPerformance</a></li>
        <li><a href="{{ url('/solutions') }}">DigiCourier</a></li>
        <li><a href="{{ url('/solutions') }}">DigiHealth Bracelet</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 InventoryPro — Une solution <a href="{{ url('/') }}">DigiTexia Corporate</a>. Tous droits réservés.</span>
    <span style="display:flex;align-items:center;gap:.4rem"><span style="width:5px;height:5px;border-radius:50%;background:var(--teal);display:inline-block"></span>Powered by DigiTexia · Yaoundé, Cameroon</span>
  </div>
</footer>

<script>
/* ─── Scroll reveal ─── */
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('vis'); obs.unobserve(e.target); } });
}, { threshold: 0.07 });
document.querySelectorAll('.rv').forEach(el => obs.observe(el));

/* ─── Nav scroll ─── */
const nav = document.getElementById('mainNav');
window.addEventListener('scroll', () => nav.classList.toggle('sc', window.scrollY > 60));

/* ─── Animate progress bars on scroll ─── */
const progObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if(e.isIntersecting){
      e.target.querySelectorAll('.prog-fill').forEach(b => {
        const w = b.style.width; b.style.width = '0';
        setTimeout(() => b.style.width = w, 150);
      });
      progObs.unobserve(e.target);
    }
  });
}, { threshold: 0.4 });
document.querySelectorAll('.hd-chart').forEach(el => progObs.observe(el));
</script>
@endsection





