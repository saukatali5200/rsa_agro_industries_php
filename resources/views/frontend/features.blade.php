@extends('frontend.layouts.layout')
@section('content')

  <div class="page-hero">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> Core Capabilities</div>
      <h1>Everything you need to<br><em>evaluate at scale</em></h1>
      <p>From handwriting recognition to detailed cognitive assessments, ReadX handles the entire evaluation pipeline
        end-to-end.</p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="features-grid reveal">
        <div class="feature-card">
          <div class="feature-icon blue"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
              <circle cx="12" cy="12" r="3" />
            </svg></div>
          <h3>Vision-Language AI Engine</h3>
          <p>1.2T parameter Mixture-of-Experts model with 38B activated per pass. Purpose-built for understanding
            handwritten content across scripts.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon teal"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
              <path d="M14 2v6h6M16 13H8m8 4H8m2-8H8" />
            </svg></div>
          <h3>Multi-Dimensional Assessment</h3>
          <p>Goes far beyond simple scoring — evaluates factual accuracy, conceptual depth, procedural correctness, and
            presentation quality.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon amber"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round">
              <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
            </svg></div>
          <h3>Intelligent Feedback</h3>
          <p>Generates detailed, actionable feedback narratives with strength identification, weakness analysis, and
            personalized improvement strategies.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon rose"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
            </svg></div>
          <h3>Bloom's Taxonomy Integration</h3>
          <p>Automatically classifies demonstrated cognitive levels from Remember to Create, enabling longitudinal
            tracking of learning progression.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon blue"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <rect x="3" y="3" width="18" height="18" rx="2" />
              <path d="M3 9h18M9 21V9" />
            </svg></div>
          <h3>Confidence Scoring</h3>
          <p>Multi-level confidence estimation on recognition, assessment, and aggregated results — route low-confidence
            cases for human review automatically.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon teal"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <path d="M22 6l-10 7L2 6" />
            </svg></div>
          <h3>REST API &amp; Integrations</h3>
          <p>Comprehensive APIs for LMS, SIS, and identity management integration. Supports SAML 2.0, OAuth 2.0, and LTI
            standards out of the box.</p>
        </div>
      </div>

      <div class="detail-grid reveal">
        <div class="detail-card">
          <h3>On-Premises &amp; Cloud Deployment</h3>
          <p>Deploy ReadX entirely within your institution's infrastructure for full data sovereignty, or use our managed
            cloud for instant scalability. Hybrid modes are fully supported with data residency controls.</p>
        </div>
        <div class="detail-card">
          <h3>Role-Based Access Control</h3>
          <p>Granular permissions for administrators, evaluators, coordinators, and auditors. SAML 2.0 and OAuth 2.0 SSO
            integrations ensure secure, seamless authentication across your existing identity infrastructure.</p>
        </div>
        <div class="detail-card">
          <h3>Audit Trail &amp; Compliance</h3>
          <p>Every evaluation action is timestamped and logged with immutable audit trails. SOC 2 Type II certified. Full
            FERPA compliance with configurable data retention policies.</p>
        </div>
        <div class="detail-card">
          <h3>Real-Time Analytics Dashboard</h3>
          <p>Live dashboards surfacing cohort performance, evaluator consistency scores, subject-wise breakdowns, and
            Bloom's taxonomy distributions — exportable to CSV, PDF, or your BI tool of choice.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <section>
    <div class="container">
      <div class="section-header-center reveal">
        <div class="section-label">Processing Pipeline</div>
        <h2 class="section-title">From scan to score in seconds</h2>
        <p class="section-desc">An 8-stage pipeline transforms raw answer sheet images into comprehensive assessment
          reports.</p>
      </div>
      <div class="pipeline reveal">
        <div class="pipeline-step">
          <div class="step-number">01</div>
          <h4>Image Capture</h4>
          <p>Acquisition from scanners, cameras, or uploads with quality assessment</p>
        </div>
        <div class="pipeline-step">
          <div class="step-number">02</div>
          <h4>Preprocessing</h4>
          <p>Geometric correction, normalization, skew removal, and binarization</p>
        </div>
        <div class="pipeline-step">
          <div class="step-number">03</div>
          <h4>Recognition</h4>
          <p>Handwriting recognition via Vision Transformer with MoE architecture</p>
        </div>
        <div class="pipeline-step">
          <div class="step-number">04</div>
          <h4>Assessment</h4>
          <p>Scoring, feedback generation, Bloom's taxonomy, and report delivery</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <section>
    <div class="container">
      <div class="section-header-center reveal">
        <div class="section-label">Multilingual</div>
        <h2 class="section-title">Reads every student's hand</h2>
        <p class="section-desc">Native support for three languages with cross-lingual understanding for mixed-language
          answers.</p>
      </div>
      <div class="langs-row reveal">
        <div class="lang-card">
          <div class="lang-script">Aa</div>
          <h4>English</h4>
          <div class="accuracy">WER 7.2%</div>
        </div>
        <div class="lang-card">
          <div class="lang-script">&#2361;&#2367;&#2306;</div>
          <h4>Hindi (Devanagari)</h4>
          <div class="accuracy">WER 8.1%</div>
        </div>
        <div class="lang-card">
          <div class="lang-script">&#2602;&#2672;</div>
          <h4>Punjabi (Gurmukhi)</h4>
          <div class="accuracy">WER 9.4%</div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <div class="cta-strip">
    <div class="container reveal">
      <h2>Ready to see it in action?</h2>
      <p>Book a live demo and see ReadX evaluate real answer sheets in under 20 seconds.</p>
      <a href="contact.html" class="btn-primary">Request a Demo <svg width="16" height="16" viewBox="0 0 16 16"
          fill="none">
          <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg></a>
    </div>
  </div>
@endsection