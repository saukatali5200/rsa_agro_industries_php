@extends('frontend.layouts.layout')
@section('content')

  <!-- ====== PAGE HERO ====== -->
  <div class="page-hero">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> Performance</div>
      <h1>Benchmarked against<br><em>the best in class</em></h1>
      <p>ReadX outperforms baseline transformers and commercial OCR on every key metric across all supported languages — verified on public and held-out evaluation sets.</p>
    </div>
  </div>

  <div class="section-divider"></div>

  <!-- ====== BENCHMARK METRICS ====== -->
  <section>
    <div class="container">
      <div class="section-header-center reveal" style="margin-bottom: 3.5rem;">
        <div class="section-label">Core Metrics</div>
        <h2 class="section-title">Numbers that matter</h2>
        <p class="section-desc">Every metric measured on standardised public benchmarks and independently verified held-out test sets.</p>
      </div>

      <div class="benchmarks-grid reveal">
        <div class="bench-card">
          <div class="bench-value blue">3.2%</div>
          <div class="bench-label">Character Error Rate (IAM)</div>
          <div class="bench-bar"><div class="bench-bar-fill blue" style="width: 92%"></div></div>
          <div class="bench-compare">45% better than baseline transformer</div>
        </div>
        <div class="bench-card">
          <div class="bench-value teal">0.94</div>
          <div class="bench-label">Assessment Pearson Correlation</div>
          <div class="bench-bar"><div class="bench-bar-fill teal" style="width: 94%"></div></div>
          <div class="bench-compare">Exceeds human inter-rater score of 0.89</div>
        </div>
        <div class="bench-card">
          <div class="bench-value amber">4.3<span style="font-size:1.2rem">/5</span></div>
          <div class="bench-label">Feedback Quality Score</div>
          <div class="bench-bar"><div class="bench-bar-fill amber" style="width: 86%"></div></div>
          <div class="bench-compare">96% of expert evaluator quality</div>
        </div>
        <div class="bench-card">
          <div class="bench-value blue">18.2s</div>
          <div class="bench-label">P50 Processing Latency</div>
          <div class="bench-bar"><div class="bench-bar-fill blue" style="width: 75%"></div></div>
          <div class="bench-compare">Full end-to-end eval per answer sheet</div>
        </div>
        <div class="bench-card">
          <div class="bench-value teal">2.3</div>
          <div class="bench-label">Mean Absolute Error</div>
          <div class="bench-bar"><div class="bench-bar-fill teal" style="width: 97%"></div></div>
          <div class="bench-compare">On a 100-point scoring scale</div>
        </div>
        <div class="bench-card">
          <div class="bench-value amber">90%+</div>
          <div class="bench-label">GPU Utilisation</div>
          <div class="bench-bar"><div class="bench-bar-fill amber" style="width: 90%"></div></div>
          <div class="bench-compare">Near-linear multi-GPU scaling</div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== LANGUAGE BENCHMARKS ====== -->
  <section>
    <div class="container">
      <div class="section-header-center reveal" style="margin-bottom: 3.5rem;">
        <div class="section-label">Multilingual Performance</div>
        <h2 class="section-title">Accuracy across every script</h2>
        <p class="section-desc">Benchmarked on IAM (English), IIIT-INDIC-HW-WORDS (Hindi), and DohaScript (Punjabi) datasets.</p>
      </div>

      <div class="langs-row reveal">
        <div class="lang-card">
          <div class="lang-script">Aa</div>
          <h4>English</h4>
          <div class="accuracy">WER 7.2%</div>
          <p style="font-size:0.83rem;color:var(--text-muted);margin-top:0.9rem;line-height:1.6;">Tested on IAM Handwriting Database. Best-in-class for cursive and mixed-case scripts.</p>
        </div>
        <div class="lang-card">
          <div class="lang-script">&#2361;&#2367;&#2306;</div>
          <h4>Hindi (Devanagari)</h4>
          <div class="accuracy">WER 8.1%</div>
          <p style="font-size:0.83rem;color:var(--text-muted);margin-top:0.9rem;line-height:1.6;">Benchmarked on IIIT-INDIC-HW-WORDS. Handles conjunct characters and matras natively.</p>
        </div>
        <div class="lang-card">
          <div class="lang-script">&#2602;&#2672;</div>
          <h4>Punjabi (Gurmukhi)</h4>
          <div class="accuracy">WER 9.4%</div>
          <p style="font-size:0.83rem;color:var(--text-muted);margin-top:0.9rem;line-height:1.6;">Evaluated on DohaScript corpus. First commercial model with native Gurmukhi support.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== COMPARISON TABLE ====== -->
  <section>
    <div class="container">
      <div class="section-header-center reveal" style="margin-bottom: 3.5rem;">
        <div class="section-label">Competitive Comparison</div>
        <h2 class="section-title">ReadX vs the alternatives</h2>
        <p class="section-desc">How ReadX stacks up against leading commercial OCR and open-source transformer baselines.</p>
      </div>

      <div class="bench-table-wrap reveal">
        <table class="bench-table">
          <thead>
            <tr>
              <th>Metric</th>
              <th class="highlight">ReadX</th>
              <th>Commercial OCR</th>
              <th>Baseline Transformer</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CER (IAM)</td>
              <td class="highlight good">3.2%</td>
              <td>6.1%</td>
              <td>5.8%</td>
            </tr>
            <tr>
              <td>Assessment Correlation</td>
              <td class="highlight good">0.94</td>
              <td>0.71</td>
              <td>0.78</td>
            </tr>
            <tr>
              <td>Hindi WER</td>
              <td class="highlight good">8.1%</td>
              <td>14.3%</td>
              <td>12.6%</td>
            </tr>
            <tr>
              <td>Punjabi WER</td>
              <td class="highlight good">9.4%</td>
              <td>N/A</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Feedback Quality (1–5)</td>
              <td class="highlight good">4.3</td>
              <td>N/A</td>
              <td>2.9</td>
            </tr>
            <tr>
              <td>P50 Latency</td>
              <td class="highlight good">18.2s</td>
              <td>32.4s</td>
              <td>44.1s</td>
            </tr>
            <tr>
              <td>Bloom's Taxonomy</td>
              <td class="highlight good">✓ Native</td>
              <td>✗</td>
              <td>✗</td>
            </tr>
            <tr>
              <td>Multi-page Stitching</td>
              <td class="highlight good">✓ Automatic</td>
              <td>✗</td>
              <td>✗</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ====== CTA STRIP ====== -->
  <div class="cta-strip">
    <div class="container reveal">
      <h2>Want to see these numbers live?</h2>
      <p>Request a benchmark demo with your own answer sheet samples — no synthetic data, no cherry-picking.</p>
      <a href="{{ route('Front.contact') }}" class="btn-primary">
        Request a Demo
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>

@endsection
