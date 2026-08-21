<?php
$P = [
  'slug'         => 'udyam-registration-msme-classification-remedies.php',
  'title'        => 'Udyam Registration & MSME Remedies – Advocate Manish Jha',
  'meta'         => 'Udyam registration and the revised MSME classification from 1 April 2025 — who is micro, small or medium, and which legal remedies registration unlocks.',
  'h1'           => 'Udyam Registration: The Gateway to MSME Remedies',
  'crumb'        => 'Udyam & MSME Status',
  'kicker'       => 'Practice Explainer · MSME',
  'sub'          => 'Classification decides remedy — the revised investment and turnover thresholds, and why registration timing shapes a delayed-payment claim.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Every MSME remedy — the forty-five-day payment ceiling, the penal compound interest, the Facilitation Council reference, the pre-deposit that burdens a buyer\'s challenge — belongs to enterprises that qualify as "suppliers" under the MSMED Act, 2006. Qualification runs through classification and registration: the enterprise must be micro or small on the statutory criteria, and must hold the registration that today takes the form of Udyam. This explainer covers the revised thresholds effective 1 April 2025, the registration mechanics, and the legal significance of both.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'civil-law.php' => 'Civil Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['What are the current MSME classification limits?', 'With effect from 1 April 2025, the composite criteria stand revised: micro — investment in plant and machinery or equipment up to ₹2.5 crore and turnover up to ₹10 crore; small — investment up to ₹25 crore and turnover up to ₹100 crore; medium — investment up to ₹125 crore and turnover up to ₹500 crore. Both limbs must be satisfied, and crossing either moves the enterprise up a category.'],
    ['Do medium enterprises get the delayed-payment remedies?', 'No. The delayed-payment chapter — Sections 15 to 25 — protects "suppliers", defined around micro and small enterprises. Medium enterprises enjoy other benefits of the ecosystem but not the statutory interest and Facilitation Council machinery for their receivables.'],
    ['Is Udyam registration difficult or expensive?', 'Neither. Registration on the Udyam portal is free, paperless and based on self-declaration, linked to PAN and GST data. Turnover and investment figures flow from returns, and the certificate carries a permanent registration number. Renewal is not required, though information is updated annually from linked databases.'],
    ['Can a supplier claim MSMED benefits for contracts made before registration?', 'The safer footing is supplies made after registration, and courts have held that registration cannot operate retrospectively to sweep in earlier transactions. An unregistered supplier retains ordinary remedies — a civil or commercial suit, or arbitration under its contract — but not the special statutory machinery.'],
  ],
  'sources'      => [
    ['label' => 'Udyam Registration portal — Ministry of MSME', 'url' => 'https://udyamregistration.gov.in/'],
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2013'],
  ],
];
$BODY = <<<'HTML'
<h2>Classification after 1 April 2025</h2>

<p>The MSMED Act classifies enterprises by notification under Section 7, and the criteria have evolved from investment-only tests to today's composite investment-and-turnover standard. The revision effective 1 April 2025 enlarged the thresholds substantially:</p>

<table class="law">
  <tr><th>Category</th><th>Investment in plant & machinery / equipment</th><th>Turnover</th></tr>
  <tr><td>Micro</td><td>Up to ₹2.5 crore</td><td>Up to ₹10 crore</td></tr>
  <tr><td>Small</td><td>Up to ₹25 crore</td><td>Up to ₹100 crore</td></tr>
  <tr><td>Medium</td><td>Up to ₹125 crore</td><td>Up to ₹500 crore</td></tr>
</table>

<p>Export turnover is excluded from the turnover computation, a deliberate incentive to exporting units. The enlargement matters for litigation practice: enterprises that outgrew "small" under the old limits — and with it the delayed-payment machinery — may find themselves back inside the protected class for supplies made after the revision took effect.</p>

<h2>Why registration is legally significant</h2>

<p>Registration is not a mere formality; it is the act that connects an enterprise to the statutory definition of "supplier". Three practice points follow. First, timing: the protection is properly claimed for supplies made while the enterprise held the status, and registration after the transactions in question invites a contest. Second, evidence: the Udyam certificate, invoices bearing the registration number, and the classification for the relevant year are the foundational exhibits in any Facilitation Council reference. Third, candour: an enterprise that has crossed the thresholds cannot continue to invoke micro or small status for later supplies; classification is dynamic, and the portal's annual updation reflects that.</p>

<h2>What the status unlocks — and what it does not</h2>

<div class="tiles">
  <div class="tile"><h3>Unlocked</h3><p>The Section 15 payment ceiling, Section 16 compound interest, reference to the Facilitation Council under Section 18 with its conciliation-then-arbitration sequence, and the buyer's 75% pre-deposit under Section 19 on any challenge.</p></div>
  <div class="tile"><h3>Not unlocked</h3><p>Immunity from defences — quality disputes, short supply and limitation still fall for adjudication; nor does registration convert a genuinely contested claim into an uncontested one.</p></div>
</div>

<h2>Traders and the boundary of the scheme</h2>

<p>Wholesale and retail traders were brought within Udyam registration by the Ministry's 2021 office memorandum, but for limited purposes — principally access to priority-sector lending. The delayed-payment chapter is built around enterprises engaged in manufacture or production of goods or rendering of services, and whether a pure trading transaction attracts the machinery remains a contested question that Councils and courts examine on the facts. Enterprises whose business mixes trading with manufacturing or services should ensure their registration and their invoices describe the activity accurately.</p>

<h2>A compliance note for buyers</h2>

<p>Buyer-side diligence has acquired new urgency: Section 43B(h) of the Income-tax Act ties the deduction of purchases from micro and small enterprises to payment within the Section 15 timeline, and disclosure requirements compel companies to report MSME dues. Contracts and vendor-onboarding forms now routinely require suppliers to declare their Udyam status and category, and to notify changes. For buyers, knowing which vendors are micro or small is no longer procurement housekeeping — it is the difference between a forty-five-day liability bearing penal compound interest and an ordinary trade payable.</p>

<div class="note">
<p>Where payment disputes have already crystallised, the choice of remedy — Facilitation Council reference, commercial suit, or arbitration under the contract — turns on registration status, the size of the claim and the state of the defence. The companion explainers on this site on delayed-payment recovery through Samadhaan and on challenging Council awards map that terrain.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
