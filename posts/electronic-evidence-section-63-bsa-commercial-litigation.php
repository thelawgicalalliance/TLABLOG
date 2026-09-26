<?php
$P = [
  'slug'         => 'electronic-evidence-section-63-bsa-commercial-litigation.php',
  'title'        => 'Section 63 BSA In Commercial Cases – Advocate Manish Jha',
  'meta'         => 'Proving emails, WhatsApp chats and server records in commercial litigation under Section 63 of the Bharatiya Sakshya Adhiniyam: the certificate, the expert, and common failures.',
  'h1'           => 'Proving Electronic Records In Commercial Litigation: Section 63 BSA After Section 65B',
  'crumb'        => 'Evidence — Electronic Records',
  'kicker'       => 'Practice Explainer · 26 September 2026',
  'sub'          => 'Commercial cases are now decided on emails, chats and system data. The Bharatiya Sakshya Adhiniyam, 2023 carries forward the certificate regime for electronic records — with a tightened format that parties ignore at the cost of their best evidence.',
  'date'         => '2026-09-26',
  'date_display' => '26 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Ask what actually proves a modern commercial case — a supply dispute, a recovery suit, an arbitration over project delays — and the answer is rarely a witness&rsquo;s memory. It is the email fixing the deadline, the WhatsApp message acknowledging the debt, the ERP entry recording delivery. All of these are electronic records, and none of them proves itself. Section 63 of the Bharatiya Sakshya Adhiniyam, 2023, the successor to Section 65B of the Evidence Act, prescribes exactly how such records enter evidence — and the printout without its certificate remains the most common self-inflicted wound in commercial trials.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'cyber-law.php' => 'Cyber Law', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What does Section 63 BSA actually require?', 'Information from a computer or communication device becomes admissible as a &ldquo;document&rdquo; through its printout or copy only if the statutory conditions about the device&rsquo;s regular use and proper operation are met, and the record is accompanied by a certificate in the prescribed form identifying the record, describing how it was produced, and giving the device&rsquo;s particulars.'],
    ['Who signs the certificate under the new law?', 'The Adhiniyam&rsquo;s Schedule format contemplates the certificate being signed by the person in charge of the computer or communication device or the management of the relevant activities, and by an expert, and it provides for hash-value authentication of the record. This is a tightening of the older single-signatory practice, and certificates should follow the Schedule&rsquo;s format.'],
    ['When should the certificate be prepared?', 'At the time the record is extracted — not on the eve of evidence. Contemporaneous certification, with hash values generated at extraction, forecloses tampering arguments and spares the party the scramble of locating, years later, someone competent to certify a defunct system.'],
    ['Do these rules apply in arbitration?', 'Arbitral tribunals are not strictly bound by the Evidence Act or its successor, but tribunals and the courts that scrutinise awards take authenticity seriously, and the Section 63 discipline is the accepted gold standard. Certifying electronic records in arbitration is inexpensive insurance for the award&rsquo;s enforceability.'],
  ],
  'sources'      => [
    ['label' => 'India Code — Bharatiya Sakshya Adhiniyam, 2023', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court — judgments portal', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The architecture: original versus output</h2>
<p>The law distinguishes the electronic record itself — the data on the server, phone or drive — from the outputs by which litigants actually use it: printouts, PDF exports, forensic copies. The record in its native environment is primary; the outputs are admissible in its place only through the statutory gateway. Section 63 of the BSA supplies that gateway, deeming the output a document — admissible without production of the original device — where its conditions are satisfied and the certificate accompanies it. The conditions track the familiar Section 65B logic: the device was regularly used for the relevant activity, the information was regularly fed into it in the ordinary course, the device was operating properly (or its malfunction did not affect the record), and the output reproduces information so fed.</p>

<h2>What changed with the BSA</h2>
<div class="compare">
<div class="col old"><strong>Section 65B, Evidence Act</strong><p>Certificate by a person occupying a responsible official position in relation to the device; no prescribed form; hash values a matter of good practice.</p></div>
<div class="arrow">&rarr;</div>
<div class="col new"><strong>Section 63, BSA 2023</strong><p>Certificate in the form prescribed in the Schedule, contemplating signature by the person in charge of the device or relevant management <em>and</em> an expert, with hash-value authentication of the record built into the format. Semiconductor memories and communication devices expressly covered.</p></div>
</div>
<div class="note"><p>The substance of admissibility has not been relaxed anywhere: the certificate remains a condition of admissibility for secondary outputs of electronic records, not an ornament. Commercial parties should treat every disclosed email chain, chat export and system report as incomplete until its certificate is on the file.</p></div>

<h2>Building a compliant record, transaction by transaction</h2>
<div class="flow">
<div class="fstep"><strong>Identify the source.</strong> For each electronic document in the disclosure list, record where it lives: which mailbox, which phone, which server, whose custody. The certificate must describe this, and vagueness here is what cross-examination feeds on.</div>
<div class="fstep"><strong>Extract forensically where stakes justify it.</strong> For the documents on which the case turns, export in native format, generate hash values at extraction, and note date, time and operator. For phone chats, a full export with media beats screenshots every time.</div>
<div class="fstep"><strong>Prepare the Schedule-form certificate.</strong> Signed by the person in charge of the device or the relevant activity&rsquo;s management and by an expert, identifying the record, the manner of production and the device particulars, with the hash values stated.</div>
<div class="fstep"><strong>File certificate with the record.</strong> In commercial suits, the disclosure regime expects the documentary case up front; the certificates belong with the documents, not with the closing arguments.</div>
</div>

<h2>The recurring failure modes</h2>
<p>Three patterns account for most electronic-evidence casualties in commercial trials. The first is the orphan printout — an email or ledger filed without any certificate, objected to at the evidence stage, with the trial court then asked to decide the suit while its central document hangs in admissibility limbo. The second is the wrong certifier — a certificate signed by counsel&rsquo;s clerk or a director with no relationship to the system, which collapses on the first question in cross-examination. The third is the eve-of-trial certificate for a system that has since been replaced, where the signatory cannot honestly attest to the device&rsquo;s operation years earlier. Each failure is avoidable by the same habit: certify at extraction, when the facts are fresh and the system is alive.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
