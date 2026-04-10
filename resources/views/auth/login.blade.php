@extends('index')

@section('page_title', 'Login — DigiTexia')

@push('styles')
<style>
  .login-shell {
    min-height: 100vh;
    display: grid;
    place-items: center;
    padding: 3rem 5%;
    background:
      radial-gradient(ellipse 55% 55% at 50% 20%, var(--accent-soft) 0%, transparent 58%),
      radial-gradient(ellipse 35% 40% at 20% 80%, var(--success-soft) 0%, transparent 55%),
      var(--bg-primary);
  }

  .login-card {
    width: min(100%, 420px);
    padding: 1.6rem;
    border-radius: 20px;
    border: 1px solid var(--border-color);
    background: var(--card-bg);
    box-shadow: var(--shadow-elev);
    backdrop-filter: blur(18px);
    color: var(--text-main);
  }

  .login-card h1 {
    font-family: 'Clash Display', sans-serif;
    font-size: clamp(1.6rem, 3vw, 2.35rem);
    line-height: 1.05;
    letter-spacing: -.03em;
    margin-bottom: .55rem;
    color: var(--text-main);
  }

  .login-card p {
    color: var(--text-muted) !important;
    line-height: 1.6;
    margin-bottom: 1rem;
    font-size: .92rem;
  }

  .login-card .tag,
  .login-card .login-meta,
  .login-card label,
  .login-card .cam-note,
  .login-card .cam-prefix {
    color: var(--text-main) !important;
  }

  .login-card .lead {
    color: var(--text-muted);
  }

  .login-field {
    margin-bottom: .8rem;
  }

  .login-field label {
    display: block;
    font-size: .66rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--text-main) !important;
    margin-bottom: .35rem;
  }

  .phone-wrap {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: .6rem;
    align-items: center;
  }

  .cam-prefix {
    padding: .82rem .95rem;
    border-radius: 10px;
    border: 1px solid var(--border-color);
    background: var(--surface-bg);
    font-size: .92rem;
    font-weight: 700;
    letter-spacing: .02em;
    white-space: nowrap;
  }

  .login-field input {
    width: 100%;
    padding: .82rem .95rem;
    border-radius: 10px;
    border: 1px solid var(--input-border);
    background: var(--input-bg);
    color: var(--text-main);
    outline: none;
    font-size: .92rem;
  }

  .login-field input:focus {
    border-color: var(--accent-border);
    box-shadow: var(--input-shadow);
  }

  .login-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
    flex-wrap: wrap;
  }

  .login-meta {
    margin-top: .85rem;
    font-size: .75rem;
    color: var(--text-muted);
  }

  .login-actions label {
    color: var(--text-muted) !important;
  }

  .login-card .btn-pri {
    background: var(--accent) !important;
    color: var(--text-main) !important;
    box-shadow: 0 0 24px var(--accent-soft);
  }

  .login-card .btn-pri:hover {
    background: var(--accent-lt) !important;
    color: var(--text-main) !important;
  }

  .login-card input::placeholder {
    color: var(--text-soft);
  }

  .login-card .tag {
    letter-spacing: .08em;
  }

  .login-card .login-actions,
  .login-card .login-meta {
    color: var(--text-muted) !important;
  }

  .toast-wrap {
    position: fixed;
    top: 1.25rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    width: min(92vw, 420px);
    pointer-events: none;
  }

  .toast {
    pointer-events: auto;
    display: flex;
    align-items: flex-start;
    gap: .75rem;
    padding: .9rem 1rem;
    border-radius: 14px;
    background: var(--card-bg);
    border: 1px solid var(--danger-border);
    box-shadow: var(--shadow-toast);
    color: var(--danger-fg);
    backdrop-filter: blur(18px);
  }

  .toast-ico {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    background: var(--danger-soft);
    border: 1px solid var(--danger-border);
  }

  .toast-text {
    flex: 1;
    font-size: .88rem;
    line-height: 1.45;
  }

  .toast-close {
    background: transparent;
    border: none;
    color: var(--danger-fg);
    cursor: pointer;
    font-size: 1rem;
    line-height: 1;
    padding: 0;
    margin-top: .1rem;
  }
</style>
@endpush

@section('fullpage')
@if ($errors->any())
  <div class="toast-wrap" id="loginToast" role="alert" aria-live="assertive">
    <div class="toast">
      <div class="toast-ico"><i class="ti ti-alert-triangle"></i></div>
      <div class="toast-text">{{ $errors->first() }}</div>
      <button type="button" class="toast-close" aria-label="Dismiss notification" onclick="document.getElementById('loginToast')?.remove()">×</button>
    </div>
  </div>
@endif

<section class="login-shell">
  <div class="login-card rv">
    <div class="tag" style="margin-bottom:.75rem; color: var(--text-main) !important;">Private access</div>

    <form method="POST" action="{{ route('login.store') }}">
      @csrf
      <div class="login-field">
        <label for="phone" style="color: var(--text-main) !important">Phone number</label>
        <div class="phone-wrap">
          <span class="cam-prefix" style="color: var(--text-main) !important">+237</span>
          <input id="phone" name="phone_local" type="tel" value="{{ old('phone_local') }}" placeholder="650 945 280" required autofocus>
        </div>
      </div>
      <div class="login-field">
        <label for="password" style="color: var(--text-main) !important">Password</label>
        <input id="password" name="password" type="password" required>
      </div>
      <div class="login-actions">
          <label style="display:flex;align-items:center;gap:.5rem;color:var(--text-main);font-size:.85rem">
            <input type="checkbox" name="remember" value="1" style="width:16px;height:16px">
            Remember me
          </label>
          <button type="submit" class="btn-pri" style="padding:.75rem 1.25rem">Login</button>
        </div>
      </form>

    <div class="login-meta">Cameroon only.</div>
  </div>
</section>
@endsection
