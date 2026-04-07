@extends('index')

@section('page_title', 'FlexiCare — Services à domicile à la demande')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>

:root {
  --p:       #7C3AED;   /* purple primary */
  --p-lt:    #9B5FFF;
  --p-dim:   rgba(124,58,237,.12);
  --p-bdr:   rgba(124,58,237,.28);
  --p-glow:  rgba(124,58,237,.35);
  --rose:    #F43F5E;
  --rose-dim:rgba(244,63,94,.1);
  --amber:   #F59E0B;
  --teal:    #14B8A6;
  --teal-dim:rgba(20,184,166,.1);
  --ink:     #0F0A1E;
  --ink-2:   #1A1230;
  --ink-3:   #231840;
  --white:   #FAFBFF;
  --off:     #F4F1FF;
  --muted:   #7B6FA0;
  --muted-lt:#A89FBF;
  --bdr:     rgba(255,255,255,0.08);
  --bdr-lt:  rgba(255,255,255,0.04);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'DM Sans',sans-serif;background:var(--ink);color:var(--white);overflow-x:hidden;-webkit-font-smoothing:antialiased}

/* grain overlay */
body::before{content:'';position:fixed;inset:0;pointer-events:none;z-index:9998;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  opacity:.6}

a{text-decoration:none;color:inherit}
img{display:block;width:100%;height:100%;object-fit:cover}

/* ── Typography ── */
h1,h2,h3,h4{font-family:'Syne',sans-serif;letter-spacing:-.02em;line-height:1.08}
h1{font-size:clamp(2.8rem,5.5vw,5rem);font-weight:800}
h2{font-size:clamp(2rem,3.5vw,3rem);font-weight:700}
h3{font-size:clamp(1.1rem,1.8vw,1.4rem);font-weight:700}
.lead{font-size:1.05rem;font-weight:300;color:var(--muted-lt);line-height:1.8}

/* ── Buttons ── */
.btn{display:inline-flex;align-items:center;gap:.55rem;font-family:'DM Sans',sans-serif;font-size:.9rem;font-weight:600;padding:.875rem 1.875rem;border-radius:100px;border:none;cursor:pointer;transition:all .22s}
.btn-pri{background:var(--p);color:#fff;box-shadow:0 0 40px var(--p-glow)}
.btn-pri:hover{background:var(--p-lt);transform:translateY(-2px);box-shadow:0 0 60px rgba(124,58,237,.5)}
.btn-ghost{background:rgba(255,255,255,.06);color:var(--white);border:1px solid var(--bdr)}
.btn-ghost:hover{background:rgba(255,255,255,.12);border-color:rgba(255,255,255,.18);transform:translateY(-2px)}
.btn-dark{background:var(--ink-2);color:var(--white);border:1px solid var(--bdr)}
.btn-dark:hover{background:var(--ink-3);border-color:var(--p-bdr);transform:translateY(-2px)}

/* ── Tags ── */
.tag{display:inline-flex;align-items:center;gap:.4rem;font-size:.65rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;padding:.3rem .9rem;border-radius:100px;background:var(--p-dim);border:1px solid var(--p-bdr);color:var(--p-lt);margin-bottom:1.4rem}

/* ── Animations ── */
.rv{opacity:0;transform:translateY(28px);transition:opacity .7s ease,transform .7s ease}
.rv.vis{opacity:1;transform:translateY(0)}
.rv.d1{transition-delay:.1s}.rv.d2{transition-delay:.2s}.rv.d3{transition-delay:.3s}
.rv.d4{transition-delay:.4s}.rv.d5{transition-delay:.5s}.rv.d6{transition-delay:.6s}

/* ── Image placeholder mixin ── */
.img-ph{
  background:linear-gradient(135deg,var(--ink-3) 0%,var(--ink-2) 100%);
  border:2px dashed rgba(124,58,237,.35);
  border-radius:inherit;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  gap:.75rem;text-align:center;padding:1.5rem;
  position:relative;overflow:hidden;
}
.img-ph::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(circle at 50% 50%,rgba(124,58,237,.07) 0%,transparent 70%);
}
.img-ph-ico{font-size:2.2rem;opacity:.6}
.img-ph-label{font-family:'Syne',sans-serif;font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--p-lt);opacity:.8;line-height:1.45;z-index:1}
.img-ph-hint{font-size:.65rem;color:var(--muted);z-index:1;line-height:1.4}

/* ════════════════════════════════
   NAV
════════════════════════════════ */
nav{
  position:fixed;top:0;left:0;right:0;z-index:500;
  height:70px;display:flex;align-items:center;justify-content:space-between;
  padding:0 5%;
  background:rgba(15,10,30,.7);backdrop-filter:blur(20px);
  border-bottom:1px solid var(--bdr);transition:background .3s;
}
nav.sc{background:rgba(15,10,30,.97)}
.nav-brand{display:flex;align-items:center;gap:.75rem}
.nav-brand-logo{
  width:38px;height:38px;border-radius:10px;
  background:linear-gradient(135deg,var(--p),var(--p-lt));
  display:flex;align-items:center;justify-content:center;
  font-family:'Syne',sans-serif;font-size:1rem;font-weight:800;color:#fff;
}
.nav-brand-name{font-family:'Syne',sans-serif;font-size:1.1rem;font-weight:800}
.nav-brand-name span{color:var(--p-lt)}
.nav-mid{display:flex;gap:1.75rem;list-style:none}
.nav-mid a{font-size:.85rem;color:var(--muted-lt);transition:color .2s}
.nav-mid a:hover{color:var(--white)}
.nav-right{display:flex;align-items:center;gap:.75rem}
.nav-digi{font-size:.75rem;color:var(--muted);display:flex;align-items:center;gap:.4rem;transition:color .2s}
.nav-digi:hover{color:var(--white)}
.nav-digi::before{content:'←';font-size:.7rem}
@media(max-width:820px){.nav-mid{display:none}}

/* ════════════════════════════════
   HERO
════════════════════════════════ */
#hero{
  min-height:100vh;display:flex;align-items:center;
  padding:100px 5% 80px;position:relative;overflow:hidden;
}
.hero-ambient{position:absolute;inset:0;pointer-events:none;
  background:
    radial-gradient(ellipse 60% 70% at 80% 50%,rgba(124,58,237,.18) 0%,transparent 65%),
    radial-gradient(ellipse 40% 40% at 10% 30%,rgba(244,63,94,.08) 0%,transparent 55%),
    radial-gradient(ellipse 50% 50% at 50% 100%,rgba(20,184,166,.06) 0%,transparent 60%)}
.hero-grid-lines{position:absolute;inset:0;pointer-events:none;
  background-image:linear-gradient(rgba(124,58,237,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(124,58,237,.05) 1px,transparent 1px);
  background-size:60px 60px;
  mask-image:radial-gradient(ellipse 90% 80% at 50% 50%,black 10%,transparent 80%)}

.hero-inner{
  max-width:1280px;margin:0 auto;width:100%;
  display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;
  position:relative;z-index:1;
}

.hero-eyebrow{display:flex;align-items:center;gap:.75rem;margin-bottom:1.5rem}
.hero-badge{display:flex;align-items:center;gap:.45rem;background:var(--p-dim);border:1px solid var(--p-bdr);border-radius:100px;padding:.35rem 1rem .35rem .5rem;font-size:.7rem;font-weight:600}
.hb-dot{width:7px;height:7px;border-radius:50%;background:var(--p-lt);animation:blink 2s ease-in-out infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
.hero-platform-tag{font-size:.65rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted-lt)}

#hero h1{margin-bottom:1.5rem}
#hero h1 .accent{
  background:linear-gradient(135deg,var(--p-lt) 0%,#C084FC 50%,var(--rose) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
#hero .lead{max-width:480px;margin-bottom:2.5rem}

.hero-ctas{display:flex;gap:.85rem;flex-wrap:wrap;margin-bottom:3rem}
.hero-stores{display:flex;gap:.65rem;flex-wrap:wrap}
.store-btn{
  display:flex;align-items:center;gap:.65rem;
  background:rgba(255,255,255,.06);border:1px solid var(--bdr);
  border-radius:12px;padding:.65rem 1.1rem;transition:all .2s;cursor:pointer;
}
.store-btn:hover{background:rgba(255,255,255,.1);border-color:rgba(255,255,255,.2);transform:translateY(-2px)}
.store-ico{font-size:1.3rem;flex-shrink:0}
.store-sub{font-size:.55rem;color:var(--muted-lt);text-transform:uppercase;letter-spacing:.06em}
.store-name{font-family:'Syne',sans-serif;font-size:.82rem;font-weight:700;line-height:1.1}

/* hero stats */
.hero-stats{display:flex;gap:0;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;background:rgba(255,255,255,.02)}
.hstat{flex:1;padding:1.1rem;text-align:center;border-right:1px solid var(--bdr)}
.hstat:last-child{border-right:none}
.hstat-num{font-family:'Syne',sans-serif;font-size:1.4rem;font-weight:800;background:linear-gradient(135deg,var(--p-lt),#C084FC);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.hstat-lbl{font-size:.65rem;color:var(--muted);margin-top:.2rem}

/* hero phone mockup area */
.hero-visual{position:relative;display:flex;justify-content:center;align-items:center}

/* phone frame */
.phone-frame{
  width:260px;height:520px;
  border-radius:40px;
  border:2px solid rgba(255,255,255,.12);
  background:var(--ink-3);
  overflow:hidden;position:relative;
  box-shadow:0 40px 100px rgba(0,0,0,.6),0 0 0 8px rgba(124,58,237,.08),inset 0 0 0 1px rgba(255,255,255,.05);
}
.phone-notch{width:90px;height:24px;background:var(--ink);border-radius:0 0 16px 16px;position:absolute;top:0;left:50%;transform:translateX(-50%);z-index:10}
.phone-screen{position:absolute;inset:0;overflow:hidden}
.phone-screen .img-ph{border-radius:40px;border-style:none;height:100%}

/* floating cards around phone */
.phone-float{position:absolute;background:rgba(20,10,45,.9);backdrop-filter:blur(16px);border:1px solid rgba(124,58,237,.25);border-radius:14px;padding:.75rem 1rem;white-space:nowrap;box-shadow:0 12px 40px rgba(0,0,0,.4)}
.pf-1{top:60px;right:-20px;animation:floatY 3s ease-in-out infinite}
.pf-2{bottom:100px;left:-30px;animation:floatY 3.5s ease-in-out infinite .5s}
.pf-3{bottom:30px;right:-15px;animation:floatY 2.8s ease-in-out infinite 1s}
@keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
.pf-label{font-size:.58rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--muted-lt)}
.pf-val{font-family:'Syne',sans-serif;font-size:.85rem;font-weight:700;margin-top:.15rem}
.pf-ico{font-size:1.1rem;margin-bottom:.2rem}
.pf-green{color:var(--teal)}
.pf-purple{color:var(--p-lt)}
.pf-rose{color:var(--rose)}

/* glow behind phone */
.phone-glow{position:absolute;width:320px;height:320px;border-radius:50%;background:radial-gradient(circle,rgba(124,58,237,.25) 0%,transparent 70%);top:50%;left:50%;transform:translate(-50%,-50%);z-index:-1;animation:glowPulse 4s ease-in-out infinite}
@keyframes glowPulse{0%,100%{opacity:.6;transform:translate(-50%,-50%) scale(1)}50%{opacity:1;transform:translate(-50%,-50%) scale(1.1)}}

/* ════════════════════════════════
   HOW IT WORKS
════════════════════════════════ */
#how{padding:100px 5%;position:relative;overflow:hidden}
.how-bg{position:absolute;inset:0;pointer-events:none;background:radial-gradient(ellipse 60% 50% at 50% 100%,rgba(124,58,237,.08) 0%,transparent 65%)}
.how-inner{max-width:1280px;margin:0 auto}
.section-header{text-align:center;margin-bottom:5rem}
.section-header h2{margin-bottom:.85rem}
.section-header .lead{max-width:500px;margin:0 auto}

.steps-track{display:grid;grid-template-columns:repeat(3,1fr);gap:0;position:relative;max-width:900px;margin:0 auto}
.steps-track::before{content:'';position:absolute;top:44px;left:calc(100%/6);right:calc(100%/6);height:1px;background:linear-gradient(90deg,var(--p-bdr),rgba(244,63,94,.3));z-index:0}

.step-item{display:flex;flex-direction:column;align-items:center;text-align:center;padding:0 1.5rem;position:relative;z-index:1}
.step-num{
  width:88px;height:88px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:2rem;margin-bottom:1.5rem;
  border:1px solid;transition:all .3s;position:relative;
}
.step-num::after{content:'';position:absolute;inset:-4px;border-radius:50%;opacity:0;transition:opacity .3s}
.step-item:hover .step-num::after{opacity:1}

.step-item:nth-child(1) .step-num{background:var(--p-dim);border-color:var(--p-bdr)}
.step-item:nth-child(1) .step-num::after{background:radial-gradient(circle,var(--p-dim),transparent)}
.step-item:nth-child(2) .step-num{background:rgba(244,63,94,.1);border-color:rgba(244,63,94,.25)}
.step-item:nth-child(2) .step-num::after{background:radial-gradient(circle,rgba(244,63,94,.1),transparent)}
.step-item:nth-child(3) .step-num{background:var(--teal-dim);border-color:rgba(20,184,166,.25)}
.step-item:nth-child(3) .step-num::after{background:radial-gradient(circle,var(--teal-dim),transparent)}

.step-title{font-family:'Syne',sans-serif;font-size:1rem;font-weight:700;margin-bottom:.5rem}
.step-desc{font-size:.855rem;color:var(--muted-lt);line-height:1.7}
.step-tag{display:inline-block;font-size:.6rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.2rem .7rem;border-radius:100px;margin-bottom:.65rem;border:1px solid}
.step-item:nth-child(1) .step-tag{background:var(--p-dim);border-color:var(--p-bdr);color:var(--p-lt)}
.step-item:nth-child(2) .step-tag{background:var(--rose-dim);border-color:rgba(244,63,94,.25);color:var(--rose)}
.step-item:nth-child(3) .step-tag{background:var(--teal-dim);border-color:rgba(20,184,166,.25);color:var(--teal)}

/* ════════════════════════════════
   APP SCREENSHOTS
════════════════════════════════ */
#screenshots{padding:100px 5%;background:linear-gradient(180deg,var(--ink) 0%,var(--ink-2) 50%,var(--ink) 100%)}
.sc-inner{max-width:1280px;margin:0 auto}
.sc-layout{display:grid;grid-template-columns:1fr 1.2fr;gap:5rem;align-items:center}

.sc-text{}
.sc-text h2{margin-bottom:1rem}
.sc-text .lead{margin-bottom:2.5rem}

/* feature tabs */
.feat-tabs{display:flex;flex-direction:column;gap:.65rem}
.ftab{
  display:flex;align-items:flex-start;gap:1rem;
  padding:1.1rem 1.25rem;border-radius:14px;border:1px solid var(--bdr);
  cursor:pointer;transition:all .22s;background:transparent;width:100%;text-align:left;
  font-family:'DM Sans',sans-serif;
}
.ftab:hover,.ftab.active{background:var(--p-dim);border-color:var(--p-bdr);transform:translateX(5px)}
.ftab-ico{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;background:rgba(255,255,255,.04);border:1px solid var(--bdr);transition:all .2s}
.ftab.active .ftab-ico{background:var(--p-dim);border-color:var(--p-bdr)}
.ftab-title{font-family:'Syne',sans-serif;font-size:.88rem;font-weight:700;margin-bottom:.2rem}
.ftab-desc{font-size:.79rem;color:var(--muted-lt);line-height:1.5}

/* phone gallery */
.phone-gallery{display:flex;gap:1.25rem;justify-content:center;align-items:flex-end}
.pg-phone{
  border-radius:30px;
  border:1px solid rgba(255,255,255,.1);
  overflow:hidden;
  box-shadow:0 24px 64px rgba(0,0,0,.5);
  flex-shrink:0;
  transition:transform .3s;
}
.pg-phone:hover{transform:translateY(-8px)}
.pg-phone.main{width:200px;height:400px}
.pg-phone.side{width:160px;height:320px;opacity:.7;transition:all .3s}
.pg-phone.side:hover{opacity:1}
.pg-phone .img-ph{height:100%;border-radius:0;border:none}

/* ════════════════════════════════
   FOR CLIENTS vs PROVIDERS — dual section
════════════════════════════════ */
#audiences{padding:100px 5%}
.aud-inner{max-width:1280px;margin:0 auto}
.aud-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;margin-top:4rem}

.aud-card{
  border-radius:24px;padding:2.75rem;
  position:relative;overflow:hidden;
  border:1px solid var(--bdr);
}
.aud-card.clients{background:linear-gradient(135deg,var(--p-dim) 0%,rgba(192,132,252,.05) 100%)}
.aud-card.providers{background:linear-gradient(135deg,var(--teal-dim) 0%,rgba(20,184,166,.04) 100%)}
.aud-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px}
.aud-card.clients::before{background:linear-gradient(90deg,var(--p),#C084FC)}
.aud-card.providers::before{background:linear-gradient(90deg,var(--teal),#06B6D4)}

.aud-ico-wrap{width:60px;height:60px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;margin-bottom:1.5rem;border:1px solid}
.clients .aud-ico-wrap{background:var(--p-dim);border-color:var(--p-bdr)}
.providers .aud-ico-wrap{background:var(--teal-dim);border-color:rgba(20,184,166,.28)}
.aud-title{font-family:'Syne',sans-serif;font-size:1.4rem;font-weight:800;margin-bottom:.5rem}
.aud-sub{font-size:.875rem;color:var(--muted-lt);line-height:1.7;margin-bottom:2rem}

.aud-benefits{display:flex;flex-direction:column;gap:.65rem;margin-bottom:2rem}
.aud-ben{display:flex;align-items:center;gap:.85rem;font-size:.875rem;padding:.7rem;border-radius:10px;border:1px solid rgba(255,255,255,.05);background:rgba(255,255,255,.025);transition:all .2s}
.aud-ben:hover{background:rgba(255,255,255,.05)}
.aud-ben-ico{font-size:1rem;flex-shrink:0;width:32px;text-align:center}
.aud-ben-txt{color:var(--muted-lt);line-height:1.45}
.aud-ben-txt strong{color:var(--white);display:block;font-size:.82rem}

/* ════════════════════════════════
   SERVICES CATEGORIES
════════════════════════════════ */
#services{padding:100px 5%;background:var(--ink-2);border-top:1px solid var(--bdr);border-bottom:1px solid var(--bdr)}
.srv-inner{max-width:1280px;margin:0 auto}
.srv-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;margin-top:4rem}

.srv-card{
  background:var(--ink-3);border:1px solid var(--bdr);border-radius:18px;
  padding:1.75rem;text-align:center;cursor:pointer;
  transition:all .25s;position:relative;overflow:hidden;
}
.srv-card::before{content:'';position:absolute;inset:0;opacity:0;transition:opacity .25s}
.srv-card:hover{transform:translateY(-5px);border-color:var(--p-bdr);box-shadow:0 16px 48px rgba(0,0,0,.3)}
.srv-card:hover::before{opacity:1;background:var(--p-dim)}
.srv-ico{font-size:2.2rem;margin-bottom:1rem;display:block}
.srv-name{font-family:'Syne',sans-serif;font-size:.92rem;font-weight:700;margin-bottom:.4rem}
.srv-desc{font-size:.755rem;color:var(--muted-lt);line-height:1.5}
.srv-badge{display:inline-block;font-size:.58rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:.18rem .6rem;border-radius:100px;background:var(--p-dim);border:1px solid var(--p-bdr);color:var(--p-lt);margin-top:.65rem}

/* ════════════════════════════════
   FULL SCREENSHOTS GALLERY
════════════════════════════════ */
#gallery{padding:100px 5%}
.gal-inner{max-width:1280px;margin:0 auto}
.gal-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:4rem}

.gal-item{
  border-radius:20px;overflow:hidden;
  border:1px solid var(--bdr);
  transition:all .28s;cursor:pointer;
}
.gal-item:hover{transform:translateY(-6px) scale(1.02);box-shadow:0 20px 56px rgba(0,0,0,.4);border-color:var(--p-bdr);z-index:2}
.gal-item.tall{grid-row:span 2}
.gal-frame{height:280px;position:relative}
.gal-item.tall .gal-frame{height:100%}
.gal-frame .img-ph{height:100%;border-radius:0;border:none}
.gal-caption{padding:.85rem 1rem;background:var(--ink-2);border-top:1px solid var(--bdr)}
.gal-cap-title{font-size:.78rem;font-weight:600;margin-bottom:.15rem}
.gal-cap-sub{font-size:.67rem;color:var(--muted-lt)}

/* ════════════════════════════════
   PRO APP (PROVIDER SIDE)
════════════════════════════════ */
#pro-app{padding:100px 5%;background:var(--ink-2);border-top:1px solid var(--bdr);border-bottom:1px solid var(--bdr)}
.pro-inner{max-width:1280px;margin:0 auto;display:grid;grid-template-columns:1.1fr 1fr;gap:5rem;align-items:center}

.pro-visual{display:flex;gap:1rem;justify-content:center}
.pro-phone{width:180px;height:360px;border-radius:28px;overflow:hidden;border:1px solid var(--bdr);box-shadow:0 20px 60px rgba(0,0,0,.45);flex-shrink:0}
.pro-phone .img-ph{height:100%;border-radius:0;border:none}
.pro-phone:nth-child(2){margin-top:40px;opacity:.75;transition:opacity .2s}
.pro-phone:nth-child(2):hover{opacity:1}

.pro-text{}
.pro-text h2{margin-bottom:1rem}
.pro-text .lead{margin-bottom:2rem}
.pro-points{display:flex;flex-direction:column;gap:.85rem}
.pro-point{display:flex;gap:1rem;align-items:flex-start;padding:.9rem 1.1rem;background:var(--ink-3);border:1px solid var(--bdr);border-radius:12px;transition:all .2s}
.pro-point:hover{border-color:var(--teal-dim);background:var(--teal-dim)}
.pp-ico{font-size:1.1rem;flex-shrink:0;margin-top:.05rem}
.pp-title{font-size:.88rem;font-weight:600;margin-bottom:.18rem}
.pp-desc{font-size:.78rem;color:var(--muted-lt);line-height:1.5}

/* ════════════════════════════════
   TESTIMONIALS
════════════════════════════════ */
#testimonials{padding:100px 5%}
.test-inner{max-width:1280px;margin:0 auto}
.test-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;margin-top:4rem}

.test-card{
  background:var(--ink-2);border:1px solid var(--bdr);border-radius:20px;
  padding:2rem;transition:all .25s;cursor:default;
}
.test-card:hover{border-color:var(--p-bdr);transform:translateY(-4px);box-shadow:0 16px 48px rgba(0,0,0,.3)}
.test-stars{display:flex;gap:.2rem;margin-bottom:1.25rem}
.test-star{font-size:.85rem}
.test-quote{font-size:.895rem;color:var(--muted-lt);line-height:1.75;font-style:italic;margin-bottom:1.5rem;flex:1}
.test-quote::before{content:'\201C';font-family:'Syne',sans-serif;font-size:2rem;color:var(--p-lt);line-height:0;vertical-align:-.5rem;margin-right:.1rem}
.test-author{display:flex;align-items:center;gap:.85rem;padding-top:1.25rem;border-top:1px solid var(--bdr)}
.test-av{
  width:42px;height:42px;border-radius:50%;overflow:hidden;
  border:2px solid var(--p-bdr);flex-shrink:0;
}
.test-av .img-ph{border-radius:50%;border:none;gap:.2rem}
.test-av .img-ph-ico{font-size:.9rem}
.test-name{font-family:'Syne',sans-serif;font-size:.85rem;font-weight:700}
.test-role{font-size:.72rem;color:var(--muted)}

/* ════════════════════════════════
   DOWNLOAD CTA
════════════════════════════════ */
#download{padding:100px 5%;position:relative;overflow:hidden}
.dl-bg{position:absolute;inset:0;
  background:radial-gradient(ellipse 80% 80% at 50% 50%,rgba(124,58,237,.15) 0%,transparent 65%),
             radial-gradient(ellipse 40% 40% at 90% 10%,rgba(244,63,94,.07) 0%,transparent 50%);
}
.dl-grid-lines{position:absolute;inset:0;pointer-events:none;
  background-image:linear-gradient(rgba(124,58,237,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(124,58,237,.06) 1px,transparent 1px);
  background-size:60px 60px;mask-image:radial-gradient(ellipse 80% 70% at 50% 50%,black 20%,transparent 80%)}
.dl-inner{max-width:900px;margin:0 auto;text-align:center;position:relative;z-index:1}
.dl-inner h2{font-size:clamp(2.2rem,4vw,3.5rem);margin-bottom:1rem}
.dl-inner .lead{max-width:520px;margin:0 auto 3rem}

.dl-stores{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-bottom:3rem}
.dl-store{
  display:flex;align-items:center;gap:.85rem;
  background:rgba(255,255,255,.06);border:1px solid var(--bdr);
  border-radius:16px;padding:.9rem 1.5rem;
  transition:all .22s;cursor:pointer;
}
.dl-store:hover{background:rgba(255,255,255,.1);border-color:var(--p-bdr);transform:translateY(-3px);box-shadow:0 12px 36px rgba(0,0,0,.3)}
.dl-store-ico{font-size:1.8rem}
.dl-store-sub{font-size:.58rem;text-transform:uppercase;letter-spacing:.06em;color:var(--muted-lt)}
.dl-store-name{font-family:'Syne',sans-serif;font-size:.95rem;font-weight:700;margin-top:.1rem}

/* qr code placeholder */
.dl-qr-wrap{display:flex;align-items:center;gap:2rem;justify-content:center}
.dl-qr{
  width:120px;height:120px;border-radius:16px;overflow:hidden;
  border:2px dashed var(--p-bdr);flex-shrink:0;
}
.dl-qr .img-ph{border-radius:14px;border:none;gap:.35rem}
.dl-qr .img-ph-ico{font-size:1.6rem}
.dl-qr-text{font-size:.825rem;color:var(--muted-lt);text-align:left;line-height:1.65;max-width:200px}
.dl-qr-text strong{color:var(--white);display:block;margin-bottom:.25rem;font-family:'Syne',sans-serif}

/* also available on web */
.dl-web{display:inline-flex;align-items:center;gap:.5rem;margin-top:2rem;font-size:.82rem;color:var(--muted-lt);padding:.55rem 1.25rem;background:rgba(255,255,255,.04);border:1px solid var(--bdr);border-radius:100px}
.dl-web strong{color:var(--white)}

/* ════════════════════════════════
   CONTACT STRIP
════════════════════════════════ */
#contact-strip{padding:60px 5%;background:var(--ink-2);border-top:1px solid var(--bdr)}
.cs-inner{max-width:1280px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap}
.cs-brand{display:flex;align-items:center;gap:.85rem}
.cs-logo{width:44px;height:44px;border-radius:12px;background:linear-gradient(135deg,var(--p),var(--p-lt));display:flex;align-items:center;justify-content:center;font-family:'Syne',sans-serif;font-size:1.1rem;font-weight:800;color:#fff}
.cs-name{font-family:'Syne',sans-serif;font-size:1.15rem;font-weight:800}
.cs-name span{color:var(--p-lt)}
.cs-tagline{font-size:.78rem;color:var(--muted)}
.cs-contacts{display:flex;gap:1.5rem;flex-wrap:wrap}
.cs-contact{display:flex;align-items:center;gap:.55rem;font-size:.845rem;color:var(--muted-lt);transition:color .2s}
.cs-contact:hover{color:var(--white)}
.cs-cico{width:30px;height:30px;background:var(--p-dim);border:1px solid var(--p-bdr);border-radius:7px;display:flex;align-items:center;justify-content:center;font-size:.7rem;flex-shrink:0}

/* ─── FOOTER ─── */
footer{background:var(--ink-2);border-top:1px solid var(--bdr);padding:2.5rem 5%}
.footer-bottom{max-width:1280px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem}
.footer-left{font-size:.78rem;color:var(--muted)}
.footer-left a{color:var(--muted);transition:color .2s}.footer-left a:hover{color:var(--white)}
.footer-links{display:flex;gap:1.5rem}
.footer-links a{font-size:.78rem;color:var(--muted);transition:color .2s}
.footer-links a:hover{color:var(--white)}
.footer-digi{font-size:.75rem;color:var(--muted);display:flex;align-items:center;gap:.4rem}
.footer-digi-dot{width:5px;height:5px;border-radius:50%;background:var(--p)}

/* ─── RESPONSIVE ─── */
@media(max-width:1024px){
  .hero-inner,.sc-layout,.pro-inner{grid-template-columns:1fr;gap:3rem}
  .hero-visual{margin-top:2rem}
  .aud-grid,.test-grid{grid-template-columns:1fr}
  .srv-grid{grid-template-columns:repeat(2,1fr)}
  .gal-grid{grid-template-columns:repeat(2,1fr)}
  .gal-item.tall{grid-row:span 1}
  .gal-item.tall .gal-frame{height:280px}
  .steps-track::before{display:none}
}
@media(max-width:640px){
  .steps-track{grid-template-columns:1fr;max-width:340px}
  .srv-grid,.gal-grid{grid-template-columns:1fr}
  .dl-stores{flex-direction:column;align-items:center}
  .cs-inner{flex-direction:column;text-align:center}
  .cs-contacts{justify-content:center}
}

</style>
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
    <a href="/" class="nav-digi">DigiTexia</a>
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
          <div class="store-ico">🍎</div>
          <div>
            <div class="store-sub">Disponible sur</div>
            <div class="store-name">App Store</div>
          </div>
        </div>
        <div class="store-btn">
          <div class="store-ico">▶️</div>
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
          <div class="hstat-num">4.8★</div>
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
            <span class="img-ph-ico">📱</span>
            <div class="img-ph-label">Écran d'accueil<br>FlexiCare</div>
            <div class="img-ph-hint">Remplacez par votre capture d'écran<br>Format recommandé : 390 × 844 px</div>
          </div>
        </div>
      </div>

      <!-- Floating info cards -->
      <div class="phone-float pf-1">
        <div class="pf-ico">✅</div>
        <div class="pf-label">Nouvelle mission</div>
        <div class="pf-val pf-purple">Mme. NGONA — Séraphine</div>
      </div>

      <div class="phone-float pf-2">
        <div class="pf-ico">⭐</div>
        <div class="pf-label">Avis client</div>
        <div class="pf-val pf-green">5.0 — Excellent service</div>
      </div>

      <div class="phone-float pf-3">
        <div class="pf-label">Prestation terminée</div>
        <div class="pf-val pf-rose">+15 000 XAF 💰</div>
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
        <div class="step-num">🔍</div>
        <div class="step-tag">Étape 01</div>
        <div class="step-title">Choisissez votre prestation</div>
        <div class="step-desc">Parcourez notre catalogue de services, sélectionnez votre prestataire selon ses avis, sa disponibilité et sa proximité.</div>
      </div>
      <div class="step-item rv d2">
        <div class="step-num">📅</div>
        <div class="step-tag">Étape 02</div>
        <div class="step-title">Réservez et confirmez</div>
        <div class="step-desc">Choisissez votre créneau horaire, confirmez votre commande. Le prestataire accepte et se déplace chez vous.</div>
      </div>
      <div class="step-item rv d3">
        <div class="step-num">💳</div>
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
            <div class="ftab-ico">🗺️</div>
            <div>
              <div class="ftab-title">Géolocalisation en temps réel</div>
              <div class="ftab-desc">Suivez l'arrivée de votre prestataire sur la carte, en direct.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico">⭐</div>
            <div>
              <div class="ftab-title">Prestataires vérifiés & notés</div>
              <div class="ftab-desc">Chaque professionnel est évalué par la communauté pour garantir la qualité.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico">📋</div>
            <div>
              <div class="ftab-title">Historique de vos demandes</div>
              <div class="ftab-desc">Retrouvez toutes vos prestations passées et recomposez votre commande en un clic.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico">💬</div>
            <div>
              <div class="ftab-title">Messagerie intégrée</div>
              <div class="ftab-desc">Communiquez directement avec votre prestataire avant et pendant l'intervention.</div>
            </div>
          </button>
          <button class="ftab" onclick="setTab(this)">
            <div class="ftab-ico">🔒</div>
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
              <span class="img-ph-ico">📱</span>
              <div class="img-ph-label">Écran liste<br>des prestataires</div>
              <div class="img-ph-hint">320 × 640 px</div>
            </div>
          </div>
          <div class="pg-phone main">
            <div class="img-ph">
              <span class="img-ph-ico">📱</span>
              <div class="img-ph-label">Écran principal<br>/ carte & carte</div>
              <div class="img-ph-hint">390 × 844 px</div>
            </div>
          </div>
          <div class="pg-phone side">
            <div class="img-ph">
              <span class="img-ph-ico">📱</span>
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
        <div class="aud-ico-wrap">🏠</div>
        <div class="aud-title">Pour les Clients</div>
        <div class="aud-sub">Trouvez rapidement le bon prestataire pour chaque besoin à domicile — en toute confiance, sans mauvaise surprise.</div>
        <div class="aud-benefits">
          <div class="aud-ben"><span class="aud-ben-ico">🔍</span><div class="aud-ben-txt"><strong>Accès instantané à des centaines de prestataires</strong>Plombiers, électriciens, ménagistes, baby-sitters, jardiniers…</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">📍</span><div class="aud-ben-txt"><strong>Géolocalisation précise</strong>Prestataires disponibles près de chez vous, triés par proximité.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">💳</span><div class="aud-ben-txt"><strong>Paiement après validation</strong>Vous payez uniquement si la prestation vous satisfait — aucun risque.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">⭐</span><div class="aud-ben-txt"><strong>Avis communautaires vérifiés</strong>Choisissez en connaissance de cause grâce aux évaluations authentiques.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">📋</span><div class="aud-ben-txt"><strong>Historique & renouvellement</strong>Retrouvez et repassez commande chez vos prestataires favoris en un clic.</div></div>
        </div>
        <a href="#download" class="btn btn-pri" style="width:100%;justify-content:center">Télécharger FlexiCare →</a>
      </div>

      <!-- PROVIDERS -->
      <div class="aud-card providers rv d2">
        <div class="aud-ico-wrap" style="background:var(--teal-dim);border-color:rgba(20,184,166,.28)">👷</div>
        <div class="aud-title">Pour les Prestataires</div>
        <div class="aud-sub">Développez votre activité, trouvez de nouveaux clients, et gérez vos missions efficacement avec FlexiCare Pro.</div>
        <div class="aud-benefits">
          <div class="aud-ben"><span class="aud-ben-ico">📲</span><div class="aud-ben-txt"><strong>Recevez des missions directement</strong>Soyez notifié en temps réel dès qu'un client près de vous a besoin de vos services.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">🗂️</span><div class="aud-ben-txt"><strong>Gestion complète de votre agenda</strong>Planifiez et organisez vos interventions depuis l'application Pro.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">💰</span><div class="aud-ben-txt"><strong>Revenus sécurisés et transparents</strong>Paiement garanti dès validation de la mission — suivi en temps réel.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">📈</span><div class="aud-ben-txt"><strong>Développez votre réputation</strong>Chaque bonne évaluation booste votre visibilité sur la plateforme.</div></div>
          <div class="aud-ben"><span class="aud-ben-ico">🛡️</span><div class="aud-ben-txt"><strong>Profil vérifié et sécurisé</strong>Votre identité et vos compétences sont vérifiées pour la confiance de tous.</div></div>
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
        <span class="srv-ico">🧹</span>
        <div class="srv-name">Ménage & Nettoyage</div>
        <div class="srv-desc">Nettoyage régulier, grand ménage, lavage de vitres, désinfection.</div>
        <span class="srv-badge">Populaire</span>
      </div>
      <div class="srv-card rv d2">
        <span class="srv-ico">👶</span>
        <div class="srv-name">Garde d'enfants</div>
        <div class="srv-desc">Baby-sitters qualifiées, aide aux devoirs, garde à domicile.</div>
      </div>
      <div class="srv-card rv d3">
        <span class="srv-ico">🔧</span>
        <div class="srv-name">Plomberie</div>
        <div class="srv-desc">Réparations, installations, dépannages urgents.</div>
      </div>
      <div class="srv-card rv d4">
        <span class="srv-ico">⚡</span>
        <div class="srv-name">Électricité</div>
        <div class="srv-desc">Installations, dépannages, mises aux normes électriques.</div>
        <span class="srv-badge">Disponible 24h</span>
      </div>
      <div class="srv-card rv d1">
        <span class="srv-ico">🌿</span>
        <div class="srv-name">Jardinage</div>
        <div class="srv-desc">Entretien de jardins, taille, arrosage, aménagement.</div>
      </div>
      <div class="srv-card rv d2">
        <span class="srv-ico">🍳</span>
        <div class="srv-name">Cuisine à domicile</div>
        <div class="srv-desc">Cuisinier à domicile, préparation de repas, traiteur.</div>
      </div>
      <div class="srv-card rv d3">
        <span class="srv-ico">👩‍⚕️</span>
        <div class="srv-name">Aide aux personnes</div>
        <div class="srv-desc">Accompagnement des personnes âgées ou à mobilité réduite.</div>
      </div>
      <div class="srv-card rv d4">
        <span class="srv-ico">🖌️</span>
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
            <span class="img-ph-ico">📱</span>
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
            <span class="img-ph-ico">🗺️</span>
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
            <span class="img-ph-ico">📋</span>
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
            <span class="img-ph-ico">💬</span>
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
            <span class="img-ph-ico">💳</span>
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
     FLEXICARE PRO
════════════════════════════════ -->
<section id="pro-app">
  <div class="pro-inner">

    <div class="pro-visual rv">
      <div class="pro-phone">
        <div class="img-ph">
          <span class="img-ph-ico">📱</span>
          <div class="img-ph-label">FlexiCare Pro<br>— Tableau de bord</div>
          <div class="img-ph-hint">Écran principal prestataire<br>360 × 720 px</div>
        </div>
      </div>
      <div class="pro-phone">
        <div class="img-ph">
          <span class="img-ph-ico">📱</span>
          <div class="img-ph-label">FlexiCare Pro<br>— Gestion missions</div>
          <div class="img-ph-hint">Écran missions actives<br>360 × 720 px</div>
        </div>
      </div>
    </div>

    <div class="pro-text rv d2">
      <div class="tag" style="background:var(--teal-dim);border-color:rgba(20,184,166,.28);color:var(--teal)">FlexiCare Pro — Application prestataire</div>
      <h2>Développez votre activité avec FlexiCare Pro.</h2>
      <p class="lead" style="margin-bottom:2rem">L'application dédiée aux professionnels pour recevoir, gérer et valoriser leurs missions à domicile — avec tous les outils nécessaires pour travailler efficacement.</p>
      <div class="pro-points">
        <div class="pro-point">
          <div class="pp-ico">🔔</div>
          <div>
            <div class="pp-title">Alertes de missions en temps réel</div>
            <div class="pp-desc">Recevez instantanément les demandes de clients proches de votre position et acceptez en un tap.</div>
          </div>
        </div>
        <div class="pro-point">
          <div class="pp-ico">📊</div>
          <div>
            <div class="pp-title">Tableau de bord de performance</div>
            <div class="pp-desc">Suivez vos revenus, vos missions accomplies et vos évaluations depuis un seul écran.</div>
          </div>
        </div>
        <div class="pro-point">
          <div class="pp-ico">🗓️</div>
          <div>
            <div class="pp-title">Gestion de disponibilités</div>
            <div class="pp-desc">Définissez vos créneaux disponibles pour n'être sollicité que quand vous le souhaitez.</div>
          </div>
        </div>
        <div class="pro-point">
          <div class="pp-ico">💰</div>
          <div>
            <div class="pp-title">Suivi des paiements</div>
            <div class="pp-desc">Visualisez vos gains en temps réel — aucune surprise, toujours transparents.</div>
          </div>
        </div>
        <div class="pro-point">
          <div class="pp-ico">🏆</div>
          <div>
            <div class="pp-title">Système de badges et niveaux</div>
            <div class="pp-desc">Plus vous travaillez, plus votre profil gagne en visibilité et en crédibilité sur la plateforme.</div>
          </div>
        </div>
      </div>
      <div style="margin-top:2rem">
        <a href="#download" class="btn btn-pri" style="background:var(--teal);box-shadow:0 0 36px rgba(20,184,166,.3)">Rejoindre FlexiCare Pro</a>
      </div>
    </div>

  </div>
</section>

<!-- ════════════════════════════════
     TESTIMONIALS
════════════════════════════════ -->
<section id="testimonials">
  <div class="test-inner">
    <div class="section-header rv">
      <div class="tag">Témoignages</div>
      <h2>Ce qu'ils disent de FlexiCare.</h2>
      <p class="lead">Des clients et prestataires qui font confiance à FlexiCare chaque jour.</p>
    </div>

    <div class="test-grid">
      <div class="test-card rv d1">
        <div class="test-stars">⭐⭐⭐⭐⭐</div>
        <p class="test-quote">J'ai trouvé une ménagiste disponible en moins d'une heure. Le service était parfait et j'ai payé après, sans stress. FlexiCare m'a vraiment simplifié la vie.</p>
        <div class="test-author">
          <div class="test-av">
            <div class="img-ph">
              <div class="img-ph-ico" style="font-size:.7rem">👤</div>
            </div>
          </div>
          <div>
            <div class="test-name">Marie-Claire N.</div>
            <div class="test-role">Cliente — Yaoundé</div>
          </div>
        </div>
      </div>

      <div class="test-card rv d2">
        <div class="test-stars">⭐⭐⭐⭐⭐</div>
        <p class="test-quote">Depuis que j'utilise FlexiCare Pro, mes revenus ont doublé. Je gère mes missions moi-même et les paiements arrivent directement. C'est vraiment une opportunité pour nous les prestataires.</p>
        <div class="test-author">
          <div class="test-av">
            <div class="img-ph">
              <div class="img-ph-ico" style="font-size:.7rem">👤</div>
            </div>
          </div>
          <div>
            <div class="test-name">Jean-Paul K.</div>
            <div class="test-role">Prestataire Plombier — Yaoundé</div>
          </div>
        </div>
      </div>

      <div class="test-card rv d3">
        <div class="test-stars">⭐⭐⭐⭐⭐</div>
        <p class="test-quote">L'application est très simple à utiliser. J'apprécie particulièrement de pouvoir voir les avis des autres clients avant de choisir mon prestataire. Je recommande à toutes les familles.</p>
        <div class="test-author">
          <div class="test-av">
            <div class="img-ph">
              <div class="img-ph-ico" style="font-size:.7rem">👤</div>
            </div>
          </div>
          <div>
            <div class="test-name">Yvonne M.</div>
            <div class="test-role">Cliente — Douala</div>
          </div>
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
        <div class="dl-store-ico">🍎</div>
        <div>
          <div class="dl-store-sub">Télécharger sur</div>
          <div class="dl-store-name">App Store</div>
        </div>
      </div>
      <div class="dl-store">
        <div class="dl-store-ico">▶️</div>
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
        <div class="cs-cico">📞</div>
        (+237) 650 945 280
      </a>
      <a href="mailto:contact@digitexia.com" class="cs-contact">
        <div class="cs-cico">✉️</div>
        contact@digitexia.com
      </a>
      <a href="https://https://digitexia.org" class="cs-contact">
        <div class="cs-cico">🌐</div>
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
