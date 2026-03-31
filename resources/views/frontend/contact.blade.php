@extends('frontend.layouts.layout')
@section('content')

  <!-- ====== PAGE HERO ====== -->
  <div class="page-hero">
    <div class="hero-orb-1"></div>
    <div class="hero-orb-2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> We'd love to hear from you</div>
      <h1>Let's build the future of<br><em>intelligent evaluation</em></h1>
      <p>Whether you're exploring a pilot, need a technical deep-dive, or want to discuss a partnership — our team
        responds within one business day.</p>
    </div>
  </div>

  <div class="section-divider"></div>

  <!-- ====== MAIN CONTACT SECTION ====== -->
  <section>
    <div class="container">
      <div class="contact-layout reveal">

        <!-- LEFT: Info -->
        <div class="contact-info">
          <div class="section-label">Get in Touch</div>
          <h2 class="section-title">How can we<br>help you?</h2>
          <p class="section-desc">Pick the channel that works best for you. For enterprise enquiries and demos, the form
            on the right gets you directly to our solutions team.</p>

          <div class="contact-channels">
            <div class="channel-card">
              <div class="channel-icon blue">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <path d="M22 6l-10 7L2 6" />
                </svg>
              </div>
              <div class="channel-body">
                <strong>Email Us</strong>
                <a href="mailto:info@readx.tech">info@readx.tech</a>
              </div>
            </div>

            <div class="channel-card">
              <div class="channel-icon teal">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.67A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg>
              </div>
              <div class="channel-body">
                <strong>Sales Enquiries</strong>
                <span>+91 98765 43210</span>
              </div>
            </div>

            <div class="channel-card">
              <div class="channel-icon amber">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg>
              </div>
              <div class="channel-body">
                <strong>Response Time</strong>
                <span>Within 1 business day &mdash; Mon–Fri, 9am–6pm IST</span>
              </div>
            </div>
          </div>

          <div class="social-row">
            <!-- LinkedIn -->
            <a href="#" class="social-btn" title="LinkedIn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
                <circle cx="4" cy="4" r="2" />
              </svg>
            </a>
            <!-- Twitter/X -->
            <a href="#" class="social-btn" title="X (Twitter)">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
              </svg>
            </a>
            <!-- GitHub -->
            <a href="#" class="social-btn" title="GitHub">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22" />
              </svg>
            </a>
            <!-- YouTube -->
            <a href="#" class="social-btn" title="YouTube">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M22.54 6.42a2.78 2.78 0 00-1.94-1.96C18.88 4 12 4 12 4s-6.88 0-8.6.46A2.78 2.78 0 001.46 6.42 29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.4 19.54C5.12 20 12 20 12 20s6.88 0 8.6-.46a2.78 2.78 0 001.94-1.96A29 29 0 0023 12a29 29 0 00-.46-5.58z" />
                <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0A0A0F" />
              </svg>
            </a>
          </div>
        </div>

        <!-- RIGHT: Form -->
        <div class="contact-form-wrap">

          <!-- Success message (hidden by default) -->
          <div class="form-success" id="formSuccess">
            <div class="check-icon">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
            </div>
            <h3>Message received!</h3>
            <p>Thank you for reaching out. A member of our team will get back to you within one business day. In the
              meantime, feel free to explore our <a href="index.html" style="color: var(--accent-blue);">platform
                documentation</a>.</p>
          </div>

          <!-- Form (shown by default) -->
          <form id="contactForm" onsubmit="handleSubmit(event)" novalidate>
            <div style="margin-bottom: 2rem;">
              <div class="section-label">Send a Message</div>
              <h3 style="font-family: var(--font-display); font-weight: 400; font-size: 1.6rem; letter-spacing: -0.01em;">
                Tell us about your needs</h3>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" placeholder="Priya" required>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" placeholder="Sharma" required>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Work Email *</label>
              <input type="email" id="email" name="email" placeholder="priya@institution.edu" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="organization">Organization *</label>
                <input type="text" id="organization" name="organization" placeholder="University / School / Board"
                  required>
              </div>
              <div class="form-group">
                <label for="role">Your Role</label>
                <input type="text" id="role" name="role" placeholder="e.g. Head of Examinations">
              </div>
            </div>

            <div class="form-group">
              <label for="inquiry">Inquiry Type *</label>
              <select id="inquiry" name="inquiry" required>
                <option value="" disabled selected>Select the best fit…</option>
                <option value="demo">Request a Demo</option>
                <option value="pilot">Pilot Programme</option>
                <option value="enterprise">Enterprise Licensing</option>
                <option value="api">API / Integration</option>
                <option value="research">Research Collaboration</option>
                <option value="press">Press &amp; Media</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div class="form-group">
              <label for="volume">Expected Monthly Volume</label>
              <select id="volume" name="volume">
                <option value="" disabled selected>Approximate answer sheets / month…</option>
                <option value="<1k">Under 1,000</option>
                <option value="1k-10k">1,000 – 10,000</option>
                <option value="10k-100k">10,000 – 100,000</option>
                <option value="100k+">100,000+</option>
                <option value="unsure">Not sure yet</option>
              </select>
            </div>

            <div class="form-group" style="margin-bottom: 0;">
              <label for="message">Message *</label>
              <textarea id="message" name="message"
                placeholder="Tell us about your evaluation workflow, the languages you need to support, your timeline, and any specific challenges you're facing…"
                required></textarea>
            </div>

            <div class="form-submit-row">
              <p class="form-note">We never share your information with third parties.</p>
              <button type="submit" class="btn-primary" id="submitBtn">
                Send Message
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== OFFICES ====== -->
  <section>
    <div class="container">
      <div class="section-header-center reveal" style="text-align:center; margin-bottom: 3.5rem;">
        <div class="section-label">Offices</div>
        <h2 class="section-title">Where to find us</h2>
      </div>
      <div class="offices-grid reveal">
        <div class="office-card">
          <div class="office-flag">🇮🇳</div>
          <h4>Chandigarh</h4>
          <div class="office-role">Headquarters &amp; R&amp;D</div>
          <address>ReadX Technologies Pvt. Ltd.<br>SCO 45, Sector 17C<br>Chandigarh – 160 017<br>India</address>
        </div>
        <div class="office-card">
          <div class="office-flag">🇮🇳</div>
          <h4>Bengaluru</h4>
          <div class="office-role">Engineering Hub</div>
          <address>91springboard, Koramangala<br>5th Block, 1st Cross Rd<br>Bengaluru – 560 034<br>India</address>
        </div>
        <div class="office-card">
          <div class="office-flag">🇦🇪</div>
          <h4>Dubai</h4>
          <div class="office-role">MENA &amp; Global Partnerships</div>
          <address>DIFC Innovation Hub<br>Gate Avenue, Level 3<br>Dubai International Financial Centre<br>UAE</address>
        </div>
      </div>
    </div>
  </section>

@endsection