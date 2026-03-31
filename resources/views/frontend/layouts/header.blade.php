<nav>
  <div class="container">
    <a href="{{ route('Front.index') }}" class="logo-mark">
      <div class="logo-icon">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="lg1" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#4F7CFF" />
              <stop offset="100%" stop-color="#36D6C3" />
            </linearGradient>
          </defs>
          <path d="M10 6L4 12L10 18" stroke="url(#lg1)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M14 6L20 12L14 18" stroke="url(#lg1)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
          <line x1="4" y1="12" x2="20" y2="12" stroke="url(#lg1)" stroke-width="1.5" stroke-linecap="round" opacity="0.4" />
        </svg>
      </div>
      <span class="logo-text">Read<span class="x">X</span></span>
    </a>
    <button class="nav-toggle" onclick="document.querySelector('.nav-links').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>
    <div class="nav-links">
      <a href="{{ route('Front.index') }}">Home</a>
      <a href="{{ route('Front.features') }}">Features</a>
      <a href="{{ route('Front.innovations') }}">Innovations</a>
      <a href="{{ route('Front.architecture') }}">Architecture</a>
      <a href="{{ route('Front.benchmarks') }}">Benchmarks</a>
      <a href="{{ route('Front.contact') }}">Contact</a>
    </div>
  </div>
</nav>
