@extends('frontend.layouts.layout')
@section('content')
    <!-- ====== HERO ====== -->
    <section class="hero">
        <div class="hero-orb-1"></div>
        <div class="hero-orb-2"></div>
        <div class="container">
            <div class="hero-badge"><span class="dot"></span> AI-Powered EdTech Platform</div>
            <h1>Redefining how<br><em>answer sheets</em> are evaluated</h1>
            <p>ReadX is an intelligent evaluation platform that transforms handwritten answer sheet assessment using a
                proprietary Vision-Language AI engine &mdash; delivering human-grade accuracy with unprecedented speed.</p>
            <div class="hero-actions">
                <button class="btn-primary" onclick="document.getElementById('cta').scrollIntoView({behavior:'smooth'})">
                    Request a Demo
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button class="btn-outline"
                    onclick="document.getElementById('architecture').scrollIntoView({behavior:'smooth'})">
                    Explore the Engine
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 3v10m0 0l-4-4m4 4l4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="number">94%+</div>
                    <div class="label">Recognition Accuracy</div>
                </div>
                <div class="hero-stat">
                    <div class="number">0.94</div>
                    <div class="label">Pearson Correlation</div>
                </div>
                <div class="hero-stat">
                    <div class="number">1,200</div>
                    <div class="label">Sheets / Hour</div>
                </div>
                <div class="hero-stat">
                    <div class="number">3</div>
                    <div class="label">Languages Supported</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== FEATURES ====== -->
    <section id="features">
        <div class="container">
            <div class="section-header-center reveal">
                <div class="section-label">Core Capabilities</div>
                <h2 class="section-title">Everything you need to<br>evaluate at scale</h2>
                <p class="section-desc">From handwriting recognition to detailed cognitive assessments, ReadX handles the
                    entire evaluation pipeline end-to-end.</p>
            </div>
            <div class="features-grid reveal">
                <div class="feature-card">
                    <div class="feature-icon blue">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <h3>Vision-Language AI Engine</h3>
                    <p>1.2T parameter Mixture-of-Experts model with 38B activated per pass. Purpose-built for understanding
                        handwritten content across scripts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon teal">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <path d="M14 2v6h6M16 13H8m8 4H8m2-8H8" />
                        </svg>
                    </div>
                    <h3>Multi-Dimensional Assessment</h3>
                    <p>Goes far beyond simple scoring &mdash; evaluates factual accuracy, conceptual depth, procedural
                        correctness, and presentation quality.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon amber">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg>
                    </div>
                    <h3>Intelligent Feedback</h3>
                    <p>Generates detailed, actionable feedback narratives with strength identification, weakness analysis,
                        and personalized improvement strategies.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon rose">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h3>Bloom's Taxonomy Integration</h3>
                    <p>Automatically classifies demonstrated cognitive levels from Remember to Create, enabling longitudinal
                        tracking of learning progression.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon blue">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 21V9" />
                        </svg>
                    </div>
                    <h3>Confidence Scoring</h3>
                    <p>Multi-level confidence estimation on recognition, assessment, and aggregated results &mdash; route
                        low-confidence cases for human review automatically.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon teal">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <path d="M22 6l-10 7L2 6" />
                        </svg>
                    </div>
                    <h3>REST API &amp; Integrations</h3>
                    <p>Comprehensive APIs for LMS, SIS, and identity management integration. Supports SAML 2.0, OAuth 2.0,
                        and LTI standards out of the box.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- ====== HOW IT WORKS ====== -->
    <section>
        <div class="container">
            <div class="section-header-center reveal">
                <div class="section-label">Processing Pipeline</div>
                <h2 class="section-title">From scan to score in seconds</h2>
                <p class="section-desc">An 8-stage pipeline transforms raw answer sheet images into comprehensive,
                    multi-dimensional assessment reports.</p>
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

    <!-- ====== INNOVATIONS ====== -->
    <section id="innovations">
        <div class="container">
            <div class="section-header-center reveal">
                <div class="section-label">Proprietary Innovations</div>
                <h2 class="section-title">What makes ReadX different</h2>
                <p class="section-desc">Protected intellectual property innovations that solve real problems in answer sheet
                    evaluation workflows.</p>
            </div>
            <div class="innovation-grid reveal">
                <div class="innovation-card">
                    <div class="innovation-tag patent">Patent Pending</div>
                    <h3>Seamless Answer Stitching</h3>
                    <p>Automatically detects multi-page answers and assembles them into a unified continuous-scroll view
                        &mdash; eliminating fragmented page navigation and reducing evaluator cognitive load.</p>
                </div>
                <div class="innovation-card">
                    <div class="innovation-tag ip">Core IP</div>
                    <h3>AI-Based Question Identification</h3>
                    <p>Intelligent semantic mapping that automatically identifies which question an answer belongs to
                        &mdash; even when students forget to write question numbers or write incorrect ones.</p>
                </div>
                <div class="innovation-card">
                    <div class="innovation-tag patent">Patent Pending</div>
                    <h3>Evaluator Consistency Prompts</h3>
                    <p>Cross-reference marking system that surfaces previously evaluated similar answers during grading,
                        promoting consistent marking standards across evaluators and assessment cycles.</p>
                </div>
                <div class="innovation-card">
                    <div class="innovation-tag ip">Core IP</div>
                    <h3>Anonymous Blind Evaluation</h3>
                    <p>Complete identity separation with NRC-based extraction, encrypted storage, and anonymous identifier
                        assignment &mdash; ensuring fully unbiased, confidential evaluation.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- ====== ARCHITECTURE ====== -->
    <section id="architecture">
        <div class="container">
            <div class="reveal">
                <div class="section-label">The Engine</div>
                <h2 class="section-title">ReadX AI Engine</h2>
                <p class="section-desc">A Mixture-of-Experts Vision-Language Model purpose-built for handwritten document
                    understanding and educational assessment.</p>
            </div>
            <div class="arch-wrapper reveal">
                <div class="arch-visual">
                    <div class="arch-block">
                        <span>Vision Encoder</span>
                        <span class="tag">32 layers &middot; ViT</span>
                    </div>
                    <div class="arch-block">
                        <span>Multimodal Fusion Bridge</span>
                        <span class="tag">12 layers &middot; Cross-Attn</span>
                    </div>
                    <div class="arch-block">
                        <span>MoE Routing Engine</span>
                        <span class="tag">top-2 &middot; load-balanced</span>
                    </div>
                    <div class="arch-block">
                        <span>Language Decoder</span>
                        <span class="tag">40 layers &middot; 128K vocab</span>
                    </div>
                    <div class="arch-block">
                        <span>Assessment &amp; Feedback</span>
                        <span class="tag">Bloom's &middot; RLHF</span>
                    </div>
                </div>
                <div class="arch-detail">
                    <h3>Sparse activation meets<br>deep understanding</h3>
                    <p>The ReadX AI Engine activates only 3.2% of its 1.2T parameters per inference pass &mdash; achieving
                        the performance of massive dense models at a fraction of the compute cost. Expert networks
                        specialize naturally during training for different scripts, content types, and assessment functions.
                    </p>
                    <p>Trained on curated benchmarks (IAM, IIIT-INDIC-HW-WORDS, DohaScript) combined with LLM-generated
                        synthetic data using Chain-of-Thought augmentation and contrastive learning.</p>
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
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- ====== BENCHMARKS ====== -->
    <section id="benchmarks">
        <div class="container">
            <div class="section-header-center reveal">
                <div class="section-label">Performance</div>
                <h2 class="section-title">Benchmarked against the best</h2>
                <p class="section-desc">ReadX outperforms baseline transformers and commercial OCR on every key metric
                    across all supported languages.</p>
            </div>
            <div class="benchmarks-grid reveal">
                <div class="bench-card">
                    <div class="bench-value blue">3.2%</div>
                    <div class="bench-label">Character Error Rate (IAM)</div>
                    <div class="bench-bar">
                        <div class="bench-bar-fill blue" style="width: 92%"></div>
                    </div>
                    <div class="bench-compare">45% better than baseline</div>
                </div>
                <div class="bench-card">
                    <div class="bench-value teal">0.94</div>
                    <div class="bench-label">Assessment Correlation</div>
                    <div class="bench-bar">
                        <div class="bench-bar-fill teal" style="width: 94%"></div>
                    </div>
                    <div class="bench-compare">Exceeds human inter-rater (0.89)</div>
                </div>
                <div class="bench-card">
                    <div class="bench-value amber">4.3<span style="font-size:1.2rem">/5</span></div>
                    <div class="bench-label">Feedback Quality Score</div>
                    <div class="bench-bar">
                        <div class="bench-bar-fill amber" style="width: 86%"></div>
                    </div>
                    <div class="bench-compare">96% of expert quality</div>
                </div>
                <div class="bench-card">
                    <div class="bench-value blue">18.2s</div>
                    <div class="bench-label">P50 Processing Latency</div>
                    <div class="bench-bar">
                        <div class="bench-bar-fill blue" style="width: 75%"></div>
                    </div>
                    <div class="bench-compare">Full eval per sheet</div>
                </div>
                <div class="bench-card">
                    <div class="bench-value teal">2.3</div>
                    <div class="bench-label">Mean Absolute Error</div>
                    <div class="bench-bar">
                        <div class="bench-bar-fill teal" style="width: 97%"></div>
                    </div>
                    <div class="bench-compare">On 100-point scale</div>
                </div>
                <div class="bench-card">
                    <div class="bench-value amber">90%+</div>
                    <div class="bench-label">GPU Utilization</div>
                    <div class="bench-bar">
                        <div class="bench-bar-fill amber" style="width: 90%"></div>
                    </div>
                    <div class="bench-compare">Near-linear multi-GPU scaling</div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- ====== LANGUAGES ====== -->
    <section>
        <div class="container">
            <div class="section-header-center reveal">
                <div class="section-label">Multilingual</div>
                <h2 class="section-title">Reads every student's hand</h2>
                <p class="section-desc">Native support for three languages with cross-lingual understanding for
                    mixed-language answers.</p>
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

    <!-- ====== CTA ====== -->
    <section class="cta-section" id="cta">
        <div class="container reveal">
            <div class="section-label">Get Started</div>
            <h2>Ready to transform<br>your evaluation workflow?</h2>
            <p>Deploy ReadX on-premises, in the cloud, or hybrid &mdash; and start evaluating at scale within weeks.</p>
            <div class="hero-actions">
                <button class="btn-primary" onclick="window.location='contact.html'">
                    Contact Sales
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <a href="https://readx.tech/docs" class="btn-outline">
                    Read Documentation
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 12l8-8m0 0H5m7 0v7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection