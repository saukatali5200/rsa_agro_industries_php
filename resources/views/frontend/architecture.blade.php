@extends('frontend.layouts.layout')
@section('content')

  <div class="page-hero">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> The Engine</div>
      <h1>Built on a<br><em>1.2 trillion parameter</em> foundation</h1>
      <p>A Mixture-of-Experts Vision-Language Model purpose-built for handwritten document understanding and educational
        assessment at scale.</p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="arch-wrapper reveal">
        <div class="arch-visual">
          <div class="arch-block"><span>Vision Encoder</span><span class="tag">32 layers &middot; ViT</span></div>
          <div class="arch-block"><span>Multimodal Fusion Bridge</span><span class="tag">12 layers &middot;
              Cross-Attn</span></div>
          <div class="arch-block"><span>MoE Routing Engine</span><span class="tag">top-2 &middot; load-balanced</span>
          </div>
          <div class="arch-block"><span>Language Decoder</span><span class="tag">40 layers &middot; 128K vocab</span>
          </div>
          <div class="arch-block"><span>Assessment &amp; Feedback</span><span class="tag">Bloom's &middot; RLHF</span>
          </div>
        </div>
        <div class="arch-detail">
          <h3>Sparse activation meets<br>deep understanding</h3>
          <p>The ReadX AI Engine activates only 3.2% of its 1.2T parameters per inference pass — achieving the performance
            of massive dense models at a fraction of the compute cost. Expert networks specialize naturally during
            training for different scripts, content types, and assessment functions.</p>
          <p>Trained on curated benchmarks (IAM, IIIT-INDIC-HW-WORDS, DohaScript) combined with LLM-generated synthetic
            data using Chain-of-Thought augmentation and contrastive learning.</p>
          <div class="arch-specs">
            <div class="arch-spec">
              <div class="val">1.2T</div>
              <div class="lbl">Total Parameters</div>
            </div>
            <div class="arch-spec">
              <div class="val">38B</div>
              <div class="lbl">Active Per Pass</div>
            </div>
            <div class="arch-spec">
              <div class="val">128K</div>
              <div class="lbl">Vocab Tokens</div>
            </div>
            <div class="arch-spec">
              <div class="val">3.2%</div>
              <div class="lbl">Activation Ratio</div>
            </div>
          </div>
        </div>
      </div>

      <div class="training-grid reveal">
        <div class="training-card">
          <div class="tc-label">Training Data</div>
          <h4>IAM Handwriting DB</h4>
          <p>115,320 isolated forms and lines in English, used for base handwriting recognition pretraining.</p>
        </div>
        <div class="training-card">
          <div class="tc-label">Training Data</div>
          <h4>IIIT-INDIC-HW-WORDS</h4>
          <p>250,000+ Hindi and Punjabi word images covering Devanagari and Gurmukhi scripts with varied writing styles.
          </p>
        </div>
        <div class="training-card">
          <div class="tc-label">Training Data</div>
          <h4>Synthetic CoT Augmentation</h4>
          <p>LLM-generated answer-evaluation pairs with Chain-of-Thought reasoning, used for RLHF fine-tuning of the
            assessment head.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <section>
    <div class="container">
      <div class="section-label reveal">Deployment</div>
      <h2 class="section-title reveal">Runs wherever you need it</h2>
      <p class="section-desc reveal">ReadX supports three deployment modes — choose what fits your institution's
        infrastructure and data residency requirements.</p>
      <div class="deploy-grid reveal">
        <div class="deploy-card">
          <div class="deploy-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <rect x="2" y="3" width="20" height="14" rx="2" />
              <line x1="8" y1="21" x2="16" y2="21" />
              <line x1="12" y1="17" x2="12" y2="21" />
            </svg></div>
          <h4>On-Premises</h4>
          <p>Full deployment within your data center. Complete data sovereignty, air-gapped support, and custom hardware
            configurations.</p>
        </div>
        <div class="deploy-card">
          <div class="deploy-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg></div>
          <h4>Managed Cloud</h4>
          <p>Hosted on ReadX infrastructure with 99.9% SLA, auto-scaling, and zero maintenance overhead. Ready in hours.
          </p>
        </div>
        <div class="deploy-card">
          <div class="deploy-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round">
              <path d="M18 10h-1.26A8 8 0 109 20h9a5 5 0 000-10z" />
            </svg></div>
          <h4>Hybrid</h4>
          <p>Process sensitive data on-prem while using cloud for burst capacity. Data residency controls configurable per
            data class.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <div class="cta-strip">
    <div class="container reveal">
      <h2>Want the full technical whitepaper?</h2>
      <p>Get our architecture deep-dive PDF — model design, training methodology, and benchmark methodology.</p>
      <a href="contact.html" class="btn-primary">Request Whitepaper <svg width="16" height="16" viewBox="0 0 16 16"
          fill="none">
          <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg></a>
    </div>
  </div>

@endsection