@extends('frontend.layouts.layout')
@section('content')

  <!-- ====== PAGE HERO ====== -->
  <div class="page-hero">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> We're Hiring</div>
      <h1>Build the future of<br><em>education with us</em></h1>
      <p>Join a team of researchers, engineers, and educators on a mission to make high-quality evaluation accessible to every student — regardless of where they study.</p>
    </div>
  </div>

  <div class="section-divider"></div>

  <!-- ====== WHY READX ====== -->
  <section>
    <div class="container">
      <div class="section-header-center reveal" style="margin-bottom: 3.5rem;">
        <div class="section-label">Why ReadX</div>
        <h2 class="section-title">Why join us</h2>
        <p class="section-desc">We're a small team doing work that matters — and we're just getting started.</p>
      </div>
      <div class="perks-grid reveal">
        <div class="perk-card">
          <div class="perk-icon blue">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Flexible Hours</h3>
          <p>We care about output, not clock-watching. Work when you do your best thinking — we're async-first.</p>
        </div>
        <div class="perk-card">
          <div class="perk-icon teal">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3>Remote Friendly</h3>
          <p>Work from anywhere in India. We have offices in Chandigarh and Bengaluru for those who prefer in-person collaboration.</p>
        </div>
        <div class="perk-card">
          <div class="perk-icon amber">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <h3>Deep Technical Work</h3>
          <p>Work on genuinely hard problems in vision-language AI, multilingual NLP, and large-scale evaluation systems.</p>
        </div>
        <div class="perk-card">
          <div class="perk-icon rose">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Small Team, Big Impact</h3>
          <p>No bureaucracy, no layers. Your work ships fast and directly affects thousands of students and educators.</p>
        </div>
        <div class="perk-card">
          <div class="perk-icon blue">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Learning Budget</h3>
          <p>₹50,000/year for courses, conferences, books, or anything that helps you grow. No approval required under ₹5,000.</p>
        </div>
        <div class="perk-card">
          <div class="perk-icon teal">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          </div>
          <h3>Health & Wellness</h3>
          <p>Comprehensive health insurance for you and your family, mental health support, and 25 days paid leave per year.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== OPEN ROLES ====== -->
  <section>
    <div class="container">
      <div class="section-header-center reveal" style="margin-bottom: 3.5rem;">
        <div class="section-label">Open Roles</div>
        <h2 class="section-title">Current openings</h2>
        <p class="section-desc">We hire for potential and passion as much as experience. If you don't see a perfect fit, send us an open application.</p>
      </div>

      <!-- Engineering -->
      <div class="careers-dept reveal">
        <div class="dept-header">
          <div class="dept-icon blue">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <h3>Engineering</h3>
          <span class="dept-count">3 roles</span>
        </div>
        <div class="jobs-list">
          <div class="job-card">
            <div class="job-info">
              <h4>Senior ML Engineer — Vision-Language Models</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Remote / Bengaluru</span>
                <span class="job-tag">5+ years</span>
              </div>
              <p>Own training pipelines for our MoE VLM. Experience with large-scale distributed training (FSDP / DeepSpeed), multimodal architectures, and OCR/HTR research required.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
          <div class="job-card">
            <div class="job-info">
              <h4>Backend Engineer — Platform & APIs</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Remote / Chandigarh</span>
                <span class="job-tag">3+ years</span>
              </div>
              <p>Build and scale the core evaluation pipeline, REST APIs, and async job processing systems. Strong Python (FastAPI / Django), PostgreSQL, and Redis experience required.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
          <div class="job-card">
            <div class="job-info">
              <h4>Frontend Engineer — Platform UI</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Remote</span>
                <span class="job-tag">2+ years</span>
              </div>
              <p>Build the evaluator-facing dashboard, reporting interfaces, and admin tools. React, TypeScript, and strong design sensibility required. Experience with complex data UIs is a plus.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
        </div>
      </div>

      <!-- Research -->
      <div class="careers-dept reveal">
        <div class="dept-header">
          <div class="dept-icon teal">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <h3>Research</h3>
          <span class="dept-count">2 roles</span>
        </div>
        <div class="jobs-list">
          <div class="job-card">
            <div class="job-info">
              <h4>NLP Research Scientist — Multilingual Assessment</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Remote / Bengaluru</span>
                <span class="job-tag">PhD or 4+ years</span>
              </div>
              <p>Research multilingual evaluation models for Hindi, Punjabi, and Indic scripts. Prior work in low-resource NLP, cross-lingual transfer, or educational NLP strongly preferred.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
          <div class="job-card">
            <div class="job-info">
              <h4>Research Engineer — Synthetic Data & RLHF</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Remote</span>
                <span class="job-tag">2+ years</span>
              </div>
              <p>Build pipelines for synthetic data generation, Chain-of-Thought augmentation, and RLHF fine-tuning for educational assessment tasks. Strong Python and ML fundamentals required.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
        </div>
      </div>

      <!-- Product & Design -->
      <div class="careers-dept reveal">
        <div class="dept-header">
          <div class="dept-icon amber">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          </div>
          <h3>Product & Design</h3>
          <span class="dept-count">1 role</span>
        </div>
        <div class="jobs-list">
          <div class="job-card">
            <div class="job-info">
              <h4>Product Designer — EdTech Workflows</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Remote / Chandigarh</span>
                <span class="job-tag">3+ years</span>
              </div>
              <p>Design intuitive evaluation workflows, data visualisation, and admin interfaces for educators and institutional administrators. Proficiency in Figma and experience with complex enterprise UX required.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
        </div>
      </div>

      <!-- Customer Success -->
      <div class="careers-dept reveal">
        <div class="dept-header">
          <div class="dept-icon rose">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Customer Success</h3>
          <span class="dept-count">1 role</span>
        </div>
        <div class="jobs-list">
          <div class="job-card">
            <div class="job-info">
              <h4>Customer Success Manager — Enterprise</h4>
              <div class="job-meta">
                <span class="job-tag">Full-time</span>
                <span class="job-tag">Chandigarh / Delhi</span>
                <span class="job-tag">3+ years</span>
              </div>
              <p>Own onboarding and success for enterprise institutions. You'll be the bridge between our customers and product — gathering feedback, driving adoption, and ensuring retention. EdTech or SaaS B2B experience preferred.</p>
            </div>
            <a href="{{ route('Front.contact') }}" class="job-apply-btn">Apply</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== OPEN APPLICATION ====== -->
  <div class="cta-strip">
    <div class="container reveal">
      <h2>Don't see the right role?</h2>
      <p>We always want to hear from exceptional people. Send us an open application and tell us how you'd contribute.</p>
      <a href="mailto:careers@readx.tech" class="btn-primary">
        Send Open Application
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>

@endsection
