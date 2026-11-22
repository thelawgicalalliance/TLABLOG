<?php
$P = [
  'slug'         => 'udyam-registration-msme-thresholds-recovery.php',
  'title'        => 'Udyam Registration and MSME Recovery – Advocate Manish Jha',
  'meta'         => 'Who counts as a micro or small enterprise, how Udyam registration works, and why the certificate matters when recovering delayed payments under the MSMED Act.',
  'h1'           => 'The Gateway Document: Udyam Registration and the Right to MSMED Act Remedies',
  'crumb'        => 'MSME: Udyam Registration',
  'kicker'       => 'Practice Explainer · MSMED Act',
  'sub'          => 'The delayed-payment machinery of the MSMED Act belongs to &ldquo;suppliers&rdquo; — micro and small enterprises — and the Udyam certificate is how an enterprise proves it belongs. The thresholds, the process, and the litigation stakes.',
  'date'         => '2026-11-22',
  'date_display' => '22 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Every remedy in Chapter V of the MSMED Act, 2006 — the forty-five-day payment rule, compound interest at three times the bank rate, the Facilitation Council reference — belongs to a &ldquo;supplier&rdquo;, and the Act defines a supplier as a micro or small enterprise that has filed a memorandum under Section 8. In today&rsquo;s terms, that memorandum is Udyam registration. For businesses, the registration is a few hours of paperwork; in recovery litigation, it is frequently the first battleground, because buyers resisting claims attack the claimant&rsquo;s status before they ever address the invoice.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['What are the current classification thresholds?', 'Classification is composite — both investment in plant and machinery or equipment and turnover. Under the revised criteria notified with effect from 1 April 2025, a micro enterprise is one with investment up to Rs 2.5 crore and turnover up to Rs 10 crore; a small enterprise up to Rs 25 crore investment and Rs 100 crore turnover; and a medium enterprise up to Rs 125 crore investment and Rs 500 crore turnover. Crossing either limit moves the enterprise to the next category.'],
    ['Do medium enterprises get the delayed-payment remedies?', 'No. The Chapter V machinery — Sections 15 to 24 — is built around the defined term &ldquo;supplier&rdquo;, which covers micro and small enterprises. A medium enterprise enjoys other benefits of the ecosystem but cannot invoke the Facilitation Council for delayed payments as a supplier.'],
    ['How does Udyam registration work?', 'Through the Government of India&rsquo;s Udyam portal: self-declaration based on Aadhaar, with PAN and GST-linked verification of investment and turnover figures drawn from income tax and GST returns. No fee is payable and no documents are uploaded; the system generates a permanent Udyam Registration Number and certificate. Enterprises must keep their information updated, and classification adjusts with the filed figures.'],
    ['Why does the certificate matter in litigation?', 'Because status as a micro or small enterprise at the relevant time anchors the claim. Buyers routinely contest whether the claimant was registered, in which category, and from what date — and the timing of registration relative to the contract has been repeatedly litigated up to the Supreme Court. A current, accurate Udyam certificate, with the history of classification, is the cleanest answer.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>From EM-II and SSI to Udyam</h2>
<p>The MSMED Act&rsquo;s Section 8 contemplates a memorandum to be filed by enterprises; the machinery for it has evolved from the old entrepreneur&rsquo;s memorandum and Udyog Aadhaar to the present Udyam system. The shift matters for recovery practice because older registrations were self-declared without tax-data verification, while Udyam draws investment and turnover from PAN, income tax and GST records — making the classification both easier to obtain and harder to dispute. Existing enterprises were required to migrate to Udyam, so a claimant relying on a legacy registration should be prepared to show its continuity into the Udyam regime.</p>

<h2>The classification grid</h2>
<table class="law">
  <tr><th>Category</th><th>Investment in plant &amp; machinery/equipment</th><th>Turnover</th></tr>
  <tr><td>Micro</td><td>Up to Rs 2.5 crore</td><td>Up to Rs 10 crore</td></tr>
  <tr><td>Small</td><td>Up to Rs 25 crore</td><td>Up to Rs 100 crore</td></tr>
  <tr><td>Medium</td><td>Up to Rs 125 crore</td><td>Up to Rs 500 crore</td></tr>
</table>
<p>These are the revised limits in force since 1 April 2025, which substantially enlarged the earlier 2020 thresholds. The composite test means an enterprise is classified by whichever criterion places it higher; export turnover enjoys favourable treatment in the computation under the applicable notifications. For litigation purposes, what usually matters is the category — micro or small — at the time the goods were supplied or services rendered, so enterprises whose figures hover near a boundary should preserve the year-wise record of their classification.</p>

<h2>Why buyers attack status first</h2>
<div class="tiles">
  <div class="tile"><strong>It is a threshold objection.</strong> If the claimant was not a micro or small enterprise supplier, the Council reference fails without any examination of the unpaid invoices.</div>
  <div class="tile"><strong>Timing arguments.</strong> Registration obtained after the contract, or after the supplies, generates disputes about which claims the registration covers — an issue on which the Supreme Court&rsquo;s recent jurisprudence has been evolving, and which the Delhi High Court has also addressed in the context of references already made. Precision about dates — of registration, contract, supplies and invoices — decides these fights.</div>
  <div class="tile"><strong>Category arguments.</strong> Buyers may contend the claimant&rsquo;s true investment or turnover exceeded the limits; the tax-linked Udyam data usually answers this, which is why accurate filings matter beyond compliance.</div>
  <div class="tile"><strong>The trading question.</strong> The Act protects manufacturers and service providers; enterprises engaged purely in trading occupy a contested position under the scheme and the registration guidelines, and claims by traders invite specific objections.</div>
</div>

<h2>Practical counsel for suppliers</h2>
<p>Register before you supply, not after you are unpaid. Quote the Udyam Registration Number on invoices and purchase orders, because it fixes the buyer with knowledge of the counterparty&rsquo;s status and strengthens the interest claim under Sections 15 and 16 from the first day of default. Keep the registration current as figures change — a lapsed or inaccurate registration hands the buyer its first argument. And when a dispute matures toward a Section 18 reference, assemble the status record first: certificate, classification history, and the documents tying the specific supplies to the registered enterprise. The merits of a delayed-payment claim are usually simple; it is the gateway that gets litigated.</p>
<div class="note">Thresholds and procedural requirements are set by notification and change from time to time; the figures above reflect the criteria effective 1 April 2025 and should be verified against the current notifications before acting. This article is general information, not advice in any matter.</div>
HTML;
include __DIR__ . '/post-layout.php';
