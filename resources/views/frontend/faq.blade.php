@extends('frontend.layouts.layout')
@section('content')

  <!-- ====== PAGE HERO ====== -->
  <div class="page-hero">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> Help Centre</div>
      <h1>Frequently asked<br><em>questions</em></h1>
      <p>Everything you need to know about ReadX — from getting started to enterprise deployments. Can't find what you're looking for? <a href="{{ route('Front.contact') }}" style="color:var(--accent-blue);">Contact us.</a></p>
    </div>
  </div>

  <div class="section-divider"></div>

  <!-- ====== FAQ CATEGORIES ====== -->
  <section>
    <div class="container">

      <!-- Category tabs -->
      <div class="faq-tabs reveal">
        <button class="faq-tab active" data-cat="all">All</button>
        <button class="faq-tab" data-cat="general">General</button>
        <button class="faq-tab" data-cat="technical">Technical</button>
        <button class="faq-tab" data-cat="pricing">Pricing & Plans</button>
        <button class="faq-tab" data-cat="security">Security & Data</button>
        <button class="faq-tab" data-cat="integration">Integration</button>
      </div>

      <!-- FAQ Accordion -->
      <div class="faq-accordion reveal">

        <!-- GENERAL -->
        <div class="faq-accordion-item" data-cat="general">
          <button class="faq-question">
            <span>What is ReadX and who is it for?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX is an AI-powered answer sheet evaluation platform designed for educational institutions — universities, schools, examination boards, and EdTech companies. It automates the grading of handwritten answer sheets using a proprietary Vision-Language AI engine, delivering human-grade accuracy at unprecedented speed.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="general">
          <button class="faq-question">
            <span>How long does a typical pilot take to set up?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Most institutions are fully onboarded within two to three weeks. Our team handles integration with your existing LMS or SIS, and we provide sandbox access from day one so your team can evaluate quality before go-live. A dedicated customer success manager is assigned from the first day of onboarding.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="general">
          <button class="faq-question">
            <span>What languages does ReadX support?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX currently supports English, Hindi (Devanagari script), and Punjabi (Gurmukhi script) with word error rates of 7.2%, 8.1%, and 9.4% respectively. Our cross-lingual encoder also handles code-switching natively — a student who writes in English and switches mid-paragraph to Hindi is fully supported without any special configuration. Additional language support is on our roadmap.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="general">
          <button class="faq-question">
            <span>What kind of support is included post-deployment?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>All enterprise plans include dedicated customer success management, 24/7 priority incident support, quarterly model update cycles, and access to our private Slack channel for direct engineering support. We also provide regular performance reports and proactive recommendations to improve your evaluation workflows.</p>
          </div>
        </div>

        <!-- TECHNICAL -->
        <div class="faq-accordion-item" data-cat="technical">
          <button class="faq-question">
            <span>What AI model powers ReadX?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX runs on a proprietary 1.2 trillion parameter Mixture-of-Experts (MoE) Vision-Language Model. Only 38B parameters are activated per inference pass — achieving the performance of large dense models at a fraction of compute cost. The model was trained on IAM, IIIT-INDIC-HW-WORDS, DohaScript, and LLM-generated synthetic data using Chain-of-Thought augmentation.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="technical">
          <button class="faq-question">
            <span>How does ReadX handle multi-page answer sheets?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Our patent-pending Seamless Answer Stitching engine automatically detects multi-page answers and assembles them into a unified continuous view. It uses spatial and semantic continuity signals to reconstruct answer threads across pages — no manual tagging or page ordering required. This eliminates fragmented navigation and dramatically reduces evaluator cognitive load.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="technical">
          <button class="faq-question">
            <span>What happens when a student doesn't write the question number?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX's AI-Based Question Identification module handles this automatically. A cross-attention alignment module compares each answer segment against the question paper's semantic space and computes attribution probabilities. The correct attribution rate exceeds 97.3% on held-out test sets — even when question numbers are missing or incorrect.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="technical">
          <button class="faq-question">
            <span>Is the platform available for on-premises deployment?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Absolutely. ReadX supports on-premises, private cloud, and hybrid deployment modes to satisfy data residency and institutional security requirements. Our engineering team will guide you through architecture options and handle the full deployment. On-prem deployments typically take 3–4 weeks including testing and go-live.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="technical">
          <button class="faq-question">
            <span>What image quality is required for accurate results?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX's preprocessing pipeline handles geometric correction, normalization, skew removal, and binarization automatically. We recommend a minimum of 200 DPI for scanned documents. Camera captures are supported too — our quality assessment module flags low-quality inputs before processing and provides guidance for re-capture when needed.</p>
          </div>
        </div>

        <!-- PRICING -->
        <div class="faq-accordion-item" data-cat="pricing">
          <button class="faq-question">
            <span>How is ReadX priced?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX is priced based on monthly evaluation volume (number of answer sheets processed). We offer tiered plans starting from under 1,000 sheets/month for smaller institutions up to 100,000+ sheets/month for large boards and universities. Custom enterprise pricing is available for on-premises deployments. Contact our sales team for a tailored quote.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="pricing">
          <button class="faq-question">
            <span>Can we trial the API before committing?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Yes — we offer a free API sandbox with 500 evaluation credits so your engineering team can test end-to-end integration with real answer sheets. Request sandbox access through our contact form with "API / Integration" selected as the inquiry type. No credit card required, and sandbox access is typically provisioned within 24 hours.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="pricing">
          <button class="faq-question">
            <span>Is there a minimum contract term?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Standard plans are available on monthly and annual billing cycles. Annual plans come with a 20% discount. Enterprise and on-premises contracts typically run for 1–3 years with negotiable renewal terms. Pilot programmes are available on a 30-day basis before committing to a full plan.</p>
          </div>
        </div>

        <!-- SECURITY -->
        <div class="faq-accordion-item" data-cat="security">
          <button class="faq-question">
            <span>How does ReadX protect student data?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX is SOC 2 Type II certified and FERPA-compliant. Answer sheet images are encrypted in transit (TLS 1.3) and at rest (AES-256), processed in isolated tenant environments, and never used to retrain the model without explicit written consent. All data is deleted from our systems within 90 days of processing unless a longer retention period is agreed upon.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="security">
          <button class="faq-question">
            <span>How does Anonymous Blind Evaluation work?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Before evaluation begins, our NRC-based extraction module identifies and removes all personally identifiable information (name, roll number, photograph) from answer sheets. This data is encrypted and stored in an isolated vault. Evaluators only see an anonymous identifier. Re-association happens post-evaluation through a dual-key authorization flow, ensuring the process is fully unbiased and auditable.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="security">
          <button class="faq-question">
            <span>Where is data stored and processed?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>By default, data is processed and stored in Indian data centres to comply with local data residency requirements. For our MENA customers, UAE-based processing is available. On-premises deployments keep all data entirely within your own infrastructure. We do not transfer student data across jurisdictions without explicit consent.</p>
          </div>
        </div>

        <!-- INTEGRATION -->
        <div class="faq-accordion-item" data-cat="integration">
          <button class="faq-question">
            <span>What systems can ReadX integrate with?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX provides comprehensive REST APIs for integration with Learning Management Systems (LMS), Student Information Systems (SIS), and identity management platforms. We support SAML 2.0, OAuth 2.0, and LTI standards out of the box. Pre-built connectors are available for Moodle, Canvas, Blackboard, and major Indian university ERP systems.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="integration">
          <button class="faq-question">
            <span>How do I upload answer sheets — scanner or camera?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>ReadX accepts uploads from flatbed scanners, document scanners, mobile cameras, and direct file uploads (JPEG, PNG, PDF, TIFF). Bulk upload via SFTP and S3-compatible storage is supported for high-volume deployments. Our mobile capture app (iOS and Android) includes real-time quality feedback to ensure acceptable image quality before upload.</p>
          </div>
        </div>

        <div class="faq-accordion-item" data-cat="integration">
          <button class="faq-question">
            <span>Can ReadX export results to our existing gradebook?</span>
            <span class="faq-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>Yes. Results can be exported in CSV, Excel, JSON, and PDF report formats. Direct gradebook sync is available for LMS integrations. Our webhooks system can push results in real time to any downstream system as soon as evaluation completes — no manual export steps required.</p>
          </div>
        </div>

      </div><!-- /.faq-accordion -->
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== CTA STRIP ====== -->
  <div class="cta-strip">
    <div class="container reveal">
      <h2>Still have questions?</h2>
      <p>Our team is happy to answer anything not covered here — usually within one business day.</p>
      <a href="{{ route('Front.contact') }}" class="btn-primary">
        Contact Us
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>

  <script>
  // ── FAQ Category Tabs ──────────────────────────────────────
  document.querySelectorAll('.faq-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.faq-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const cat = tab.dataset.cat;
      document.querySelectorAll('.faq-accordion-item').forEach(item => {
        item.style.display = (cat === 'all' || item.dataset.cat === cat) ? 'block' : 'none';
      });
    });
  });

  // ── FAQ Accordion ──────────────────────────────────────────
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-accordion-item');
      const isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-accordion-item.open').forEach(el => el.classList.remove('open'));
      // Open clicked if was closed
      if (!isOpen) item.classList.add('open');
    });
  });
  </script>

@endsection
