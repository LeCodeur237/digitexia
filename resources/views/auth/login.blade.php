@extends('index')

@section('page_title', 'Login — DigiTexia')

@push('styles')
<style>
  .login-hero {
    padding: 130px 5% 80px;
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(ellipse 60% 55% at 50% 20%, rgba(18,70,240,.14) 0%, transparent 65%),
      radial-gradient(ellipse 35% 40% at 15% 75%, rgba(22,199,132,.08) 0%, transparent 60%),
      var(--ink);
  }

  .login-grid {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.15fr .95fr;
    gap: 2rem;
    align-items: center;
  }

  .login-copy h1 {
    font-family: 'Clash Display', sans-serif;
    font-size: clamp(2.4rem, 5vw, 4.2rem);
    line-height: 1.04;
    letter-spacing: -.035em;
    margin-bottom: 1rem;
    color: var(--white);
  }

  .login-copy h1 em {
    font-style: normal;
    background: linear-gradient(135deg,#6BA4FF 0%,var(--blue-lt) 40%,var(--green) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .login-copy .lead {
    max-width: 620px;
    margin-bottom: 2rem;
  }

  .login-points {
    display: grid;
    gap: .75rem;
    max-width: 540px;
  }

  .login-point {
    display: flex;
    align-items: flex-start;
    gap: .75rem;
    padding: .95rem 1rem;
    border-radius: 14px;
    border: 1px solid var(--bdr);
    background: rgba(255,255,255,.03);
  }

  .login-point-ico {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    border: 1px solid var(--blue-bdr);
    background: var(--blue-dim);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #93C5FD;
  }

  .login-point-title {
    font-weight: 700;
    margin-bottom: .15rem;
  }

  .login-point-desc {
    color: var(--muted-lt);
    font-size: .9rem;
    line-height: 1.6;
  }

  .login-card {
    padding: 2rem;
    border-radius: 22px;
    border: 1px solid var(--bdr);
    background: rgba(14,20,34,.92);
    box-shadow: 0 24px 60px rgba(0,0,0,.35);
    backdrop-filter: blur(18px);
  }

  .login-card h2 {
    margin-bottom: .5rem;
  }

  .login-card .sub {
    color: var(--muted-lt);
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .login-field {
    margin-bottom: 1rem;
  }

  .login-field label {
    display: block;
    font-size: .75rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: .45rem;
  }

  .login-field input {
    width: 100%;
    padding: .9rem 1rem;
    border-radius: 12px;
    border: 1px solid var(--bdr);
    background: var(--ink-3);
    color: var(--white);
    outline: none;
  }

  .login-field input:focus {
    border-color: var(--blue-bdr);
  }

  .login-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    margin-top: 1.25rem;
    flex-wrap: wrap;
  }

  .login-note {
    margin-top: 1rem;
    font-size: .82rem;
    color: var(--muted);
  }

  @media (max-width: 980px) {
    .login-grid {
      grid-template-columns: 1fr;
    }
  }
</style>
@endpush

@section('contain')
<section class="login-hero">
  <div class="login-grid">
    <div class="login-copy rv">
      <div class="tag" style="margin-bottom:1rem">Authenticated access</div>
      <h1>Login to <em>publish</em> and manage the blog.</h1>
      <p class="lead">This area is for DigiTexia authors and editors who manage articles, drafts, and publication workflows.</p>

      <div class="login-points">
        <div class="login-point">
          <div class="login-point-ico"><i class="ti ti-pencil"></i></div>
          <div>
            <div class="login-point-title">Drafts and publishing</div>
            <div class="login-point-desc">Create posts, schedule publication, and keep the editorial flow organized.</div>
          </div>
        </div>
        <div class="login-point">
          <div class="login-point-ico"><i class="ti ti-shield-lock"></i></div>
          <div>
            <div class="login-point-title">Protected access</div>
            <div class="login-point-desc">Only approved users can access the publishing tools and content management area.</div>
          </div>
        </div>
        <div class="login-point">
          <div class="login-point-ico"><i class="ti ti-layout-dashboard"></i></div>
          <div>
            <div class="login-point-title">Simple workflow</div>
            <div class="login-point-desc">A clean admin space for posts, metadata, comments, and publication settings.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="login-card rv d2">
      <span class="tag" style="margin-bottom:1rem">Admin login</span>
      <h2>Enter your credentials</h2>
      <p class="sub">Use your DigiTexia account to access the blog admin area.</p>

      @if ($errors->any())
        <div style="margin-bottom:1rem;padding:1rem;border-radius:12px;background:rgba(220,38,38,.1);border:1px solid rgba(220,38,38,.25);color:#FCA5A5">
          {{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="login-field">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="login-field">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" required>
        </div>
        <div class="login-actions">
          <label style="display:flex;align-items:center;gap:.5rem;color:var(--muted-lt);font-size:.85rem">
            <input type="checkbox" name="remember" value="1" style="width:16px;height:16px">
            Remember me
          </label>
          <button type="submit" class="btn-pri">Login</button>
        </div>
      </form>

      <div class="login-note">
        Need access? Contact the DigiTexia team.
      </div>
    </div>
  </div>
</section>
@endsection
