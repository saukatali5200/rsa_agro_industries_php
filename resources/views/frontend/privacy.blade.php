@extends('frontend.layouts.layout')
@section('content')

<section class="simple-legal">
  <div class="container">
    <div class="simple-legal-wrap">

      <div class="simple-legal-header">
        <span class="section-label">Legal</span>
        <h1>Privacy Policy</h1>
        <p>Last updated: March 18, 2026 &nbsp;·&nbsp; ReadX Technologies Pvt. Ltd.</p>
      </div>

      <div class="simple-legal-body">

        <p>ReadX Technologies Pvt. Ltd. ("ReadX", "we", "us") is committed to protecting your privacy. This policy explains how we collect, use, and protect personal information when you use our platform, website, and related services.</p>

        <h2>1. Information We Collect</h2>
        <p>We collect information you provide directly — such as your name, work email, organisation name, and job title when you register or contact us. We also automatically collect usage data including pages visited, features used, device type, browser, and IP address to help us improve the platform.</p>
        <p>When answer sheets are uploaded for evaluation, we process image data, extracted text, scoring outputs, and AI-generated feedback on behalf of your institution. For paid plans, billing information is handled by our PCI-DSS compliant payment processor — we do not store card numbers on our servers.</p>

        <h2>2. How We Use Your Data</h2>
        <p>We use your information to provide and operate the ReadX platform, process answer sheets as instructed by your institution, send account and system notifications, respond to support requests, and improve our AI models through anonymised analytics. We may also send product updates, which you can opt out of at any time.</p>
        <p>We do not sell your personal data to third parties, and we do not use student answer sheet data for advertising purposes.</p>

        <h2>3. Data Sharing</h2>
        <p>We share data only with trusted service providers who help us operate our infrastructure — such as cloud hosting and analytics platforms. These vendors are bound by data processing agreements and may only use data to provide services to us. We may also disclose data when required by law, court order, or to protect the rights and safety of ReadX and our customers. In the event of a merger or acquisition, affected users will be notified before any data transfer.</p>

        <h2>4. Student Data</h2>
        <p>ReadX processes student data strictly as a data processor acting on behalf of your institution. Student answer sheet data is never used to train our AI models without explicit written consent. Our Anonymous Blind Evaluation system removes all personally identifiable information before evaluation begins, and re-association happens only post-evaluation through a dual-key authorisation flow. Each institution's data is processed in fully isolated environments with no cross-tenant access.</p>
        <p>Our platform is designed to comply with FERPA (US) and India's Digital Personal Data Protection Act 2023.</p>

        <h2>5. Data Retention</h2>
        <p>Account data is retained for the duration of your active subscription plus 12 months after closure. Answer sheet images are deleted within 90 days of processing unless a longer period is agreed in writing. Evaluation reports are retained for the contract term plus 24 months for audit purposes. Usage logs are retained for 12 months. You may request earlier deletion by emailing <a href="mailto:privacy@readx.tech">privacy@readx.tech</a>.</p>

        <h2>6. Security</h2>
        <p>ReadX is SOC 2 Type II certified. We use TLS 1.3 for data in transit and AES-256 for data at rest. All internal systems require multi-factor authentication and role-based access control. We conduct regular third-party penetration testing and maintain 24/7 security monitoring. In the event of a data breach, we will notify affected users within 72 hours as required by law.</p>

        <h2>7. Cookies</h2>
        <p>We use essential cookies for authentication and platform functionality, analytics cookies to understand platform usage, and preference cookies to remember your settings. We do not use advertising or cross-site tracking cookies. You can manage cookie preferences through your browser settings at any time.</p>

        <h2>8. Your Rights</h2>
        <p>Depending on your jurisdiction, you may have the right to access, correct, delete, or export your personal data, and to object to or restrict certain processing. To exercise any of these rights, contact us at <a href="mailto:privacy@readx.tech">privacy@readx.tech</a>. We will respond within 30 days.</p>

        <h2>9. International Data Transfers</h2>
        <p>ReadX processes data primarily in India and the UAE. If your data is transferred outside your home jurisdiction, we ensure appropriate safeguards are in place, including Standard Contractual Clauses or other legally recognised mechanisms.</p>

        <h2>10. Children's Privacy</h2>
        <p>Our platform is accessed by institutional administrators and educators, not directly by students. We do not knowingly collect personal data directly from individuals under 18 outside of an institutional context. Student data is processed solely at the direction of the contracting institution.</p>

        <h2>11. Changes to This Policy</h2>
        <p>We may update this policy from time to time. For material changes, we will notify you via email and platform notice at least 14 days before they take effect. Continued use after that date constitutes acceptance.</p>

        <h2>12. Contact</h2>
        <p>For questions or requests regarding this policy, contact our Data Protection Officer:</p>
        <p>
          <strong>ReadX Technologies Pvt. Ltd.</strong><br>
          SCO 45, Sector 17C, Chandigarh – 160 017, India<br>
          Email: <a href="mailto:privacy@readx.tech">privacy@readx.tech</a><br>
          Phone: +91 98765 43210
        </p>

      </div><!-- /.simple-legal-body -->
    </div><!-- /.simple-legal-wrap -->
  </div>
</section>

@endsection
