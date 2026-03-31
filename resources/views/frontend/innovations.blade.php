@extends('frontend.layouts.layout')
@section('content')

  <div class="page-hero">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="container">
      <div class="hero-badge"><span class="dot"></span> Proprietary Innovations</div>
      <h1>What makes ReadX<br><em>fundamentally different</em></h1>
      <p>Protected intellectual property innovations that solve real, hard problems in answer sheet evaluation workflows —
        backed by filed patents and years of R&amp;D.</p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="innovation-grid reveal">
        <div class="innovation-card">
          <div class="innovation-tag patent">Patent Pending</div>
          <h3>Seamless Answer Stitching</h3>
          <p>Automatically detects multi-page answers and assembles them into a unified continuous-scroll view —
            eliminating fragmented page navigation and reducing evaluator cognitive load.</p>
          <div class="inno-detail">Traditional systems force evaluators to manually track continued answers across pages,
            introducing errors and fatigue. ReadX's stitching engine uses spatial and semantic continuity signals to
            reconstruct answer threads with zero manual intervention.</div>
        </div>
        <div class="innovation-card">
          <div class="innovation-tag ip">Core IP</div>
          <h3>AI-Based Question Identification</h3>
          <p>Intelligent semantic mapping that automatically identifies which question an answer belongs to — even when
            students forget to write question numbers or write incorrect ones.</p>
          <div class="inno-detail">A cross-attention alignment module compares each answer segment against the question
            paper's semantic space, computing question attribution probabilities. Correct attribution rate exceeds 97.3%
            on held-out test sets.</div>
        </div>
        <div class="innovation-card">
          <div class="innovation-tag patent">Patent Pending</div>
          <h3>Evaluator Consistency Prompts</h3>
          <p>Cross-reference marking system that surfaces previously evaluated similar answers during grading, promoting
            consistent marking standards across evaluators and assessment cycles.</p>
          <div class="inno-detail">An embedding similarity index retrieves the top-5 semantically similar evaluated
            answers in real time. Evaluators see prior scores and feedback, dramatically reducing inter-rater variance —
            measured at 34% improvement in consistency on pilot deployments.</div>
        </div>
        <div class="innovation-card">
          <div class="innovation-tag ip">Core IP</div>
          <h3>Anonymous Blind Evaluation</h3>
          <p>Complete identity separation with NRC-based extraction, encrypted storage, and anonymous identifier
            assignment — ensuring fully unbiased, confidential evaluation.</p>
          <div class="inno-detail">Name, roll number, and personally identifiable information are extracted, encrypted,
            and stored in an isolated vault before evaluation begins. The evaluator never sees the student's identity.
            Re-association happens only post-evaluation through a dual-key authorization flow.</div>
        </div>
      </div>

      <div class="ip-stats reveal">
        <div class="ip-stat">
          <div class="val">2</div>
          <div class="lbl">Patents Filed</div>
        </div>
        <div class="ip-stat">
          <div class="val">4</div>
          <div class="lbl">Core IP Assets</div>
        </div>
        <div class="ip-stat">
          <div class="val">97.3%</div>
          <div class="lbl">Q-Attribution Accuracy</div>
        </div>
        <div class="ip-stat">
          <div class="val">34%</div>
          <div class="lbl">Consistency Improvement</div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <div class="cta-strip">
    <div class="container reveal">
      <h2>Curious how these work under the hood?</h2>
      <p>Request a technical walkthrough with our engineering team — no sales pitch, just deep dives.</p>
      <a href="contact.html" class="btn-primary">Request Technical Demo <svg width="16" height="16" viewBox="0 0 16 16"
          fill="none">
          <path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg></a>
    </div>
  </div>
@endsection