<?php
$P = [
  'slug'         => 'msefc-reference-evidence-documents.php',
  'title'        => 'Evidence in MSEFC References – Advocate Manish Jha',
  'meta'         => 'The documents that decide MSME delayed-payment references — Udyam registration, invoices, delivery proof and the fifteen-day objection window explained.',
  'h1'           => 'The Evidence That Decides an MSEFC Delayed-Payment Reference',
  'crumb'        => 'MSEFC Evidence',
  'kicker'       => 'Practice Guide · 4 September 2026',
  'sub'          => 'Facilitation Council proceedings are summary in character — the party with the cleaner paper trail usually wins.',
  'date'         => '2026-09-04',
  'date_display' => '4 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">References under Section 18 of the Micro, Small and Medium Enterprises Development Act, 2006 are decided largely on documents. Unlike a civil suit with full-dress trial, the Facilitation Council — and any arbitrator it appoints — works from the record the parties place before it: registration certificates, purchase orders, invoices, delivery proof and correspondence. A supplier who assembles this record before filing on the MSME Samadhaan portal shortens the proceeding by months; a buyer who understands the record can mount the few defences the Act permits. This article catalogues the evidence that matters on each side.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Is Udyam registration essential for a Section 18 reference?', 'Registration as a micro or small enterprise is the gateway to the statutory mechanism, and its timing matters: the enterprise should hold registration covering the period when the goods were supplied or services rendered. Councils examine the certificate and the classification at the relevant time, so the certificate and its date belong at the front of the reference.'],
    ['What is the significance of the 15-day objection window?', 'Under the Act\'s scheme, the "appointed day" from which payment obligations run is tied to the day of acceptance — and an objection to goods or services must be raised in writing within fifteen days of delivery. A buyer who raised no written objection within that window finds it very difficult to build a quality defence later, which is why contemporaneous correspondence is decisive.'],
    ['How is interest computed in these references?', 'Section 16 provides compound interest with monthly rests at three times the bank rate notified by the Reserve Bank, running from the appointed day. A supplier should file a tabulated interest computation invoice by invoice; councils and arbitrators appreciate — and often adopt — a clear calculation sheet.'],
    ['Can a buyer raise a counterclaim before the Council?', 'The adjudicatory stage under Section 18 proceeds under the Arbitration and Conciliation Act, and counterclaims arising from the same transactions have been held maintainable in that framework. A buyer with genuine claims — short supply, defects notified in time, recoveries — should plead and document them rather than merely resisting the reference.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>Why the record decides these cases</h2>
<p>The MSMED Act compresses what would otherwise be a recovery suit into a two-stage process: conciliation, and failing that, arbitration. Both stages are document-driven. There are rarely site inspections or long witness examinations; the tribunal reads the contract trail and the payment trail and decides. The consequence is simple: the reference is largely won at the preparation stage.</p>

<h2>The supplier's bundle</h2>
<div class="check">
  <p><strong>Udyam registration certificate</strong> — covering the supply period, with the classification visible.</p>
  <p><strong>Contract documents</strong> — purchase orders, work orders, rate contracts, emails recording the terms; where terms were oral, the invoices and conduct carry the weight.</p>
  <p><strong>Invoices</strong> — serially listed, with dates, amounts, GST details and due dates.</p>
  <p><strong>Proof of delivery or performance</strong> — delivery challans, lorry receipts, e-way bills, installation or completion certificates, signed timesheets for services.</p>
  <p><strong>Acceptance evidence</strong> — GRNs, quality approvals, or simply the absence of any written objection within fifteen days.</p>
  <p><strong>Account confirmation</strong> — ledger extracts, balance confirmations, TDS deducted on the invoices, GST returns reflecting the transactions.</p>
  <p><strong>Demand trail</strong> — reminders, the demand notice, and the buyer's replies or silence.</p>
  <p><strong>Interest computation</strong> — invoice-wise, compounded monthly at three times the bank rate, from each appointed day.</p>
</div>

<h2>The buyer's realistic defences — and their proof</h2>
<table class="law">
  <tr><th>Defence</th><th>What it needs on paper</th></tr>
  <tr><td>Goods or services deficient</td><td>Written objection within 15 days of delivery; inspection or rejection records; debit notes issued contemporaneously</td></tr>
  <tr><td>Short or non-delivery</td><td>Gate records, GRN discrepancies, correspondence demanding delivery</td></tr>
  <tr><td>Payment already made</td><td>Bank statements, UTR details, ledger mapping payments to invoices</td></tr>
  <tr><td>Supplier not an MSE at supply time</td><td>Registration dates versus invoice dates; classification evidence</td></tr>
  <tr><td>Set-off / counterclaim</td><td>Documented cross-claims arising from the same dealings, pleaded at the arbitral stage</td></tr>
</table>
<p>What does not work: bare denials, quality grievances surfacing for the first time in the reply, or the plea that the buyer's own customer has not paid. The Act deliberately shifts the credit risk of the chain away from the small supplier.</p>

<div class="note"><p>Buyers should remember the consequences that radiate beyond the reference: interest to MSEs is disallowed as a deduction under the Income-tax Act until actually paid, dues must be disclosed in accounts under Sections 22 and 23 of the MSMED Act, and a challenge to any eventual award requires a seventy-five per cent pre-deposit under Section 19. The economics favour early, documented settlement.</p></div>

<h2>Presentation before the Council</h2>
<div class="flow">
  <div class="fstep"><strong>File a paginated, indexed compilation.</strong> Councils sit in committee and value navigable records; a chronological compilation with a synopsis is the single best advocacy investment.</div>
  <div class="fstep"><strong>Lead with the statutory boxes.</strong> Registration, supply, acceptance, non-payment, appointed day — tick each with a document before arguing anything else.</div>
  <div class="fstep"><strong>Quantify precisely.</strong> Principal and interest separated, computation annexed, credits acknowledged. Overclaiming invites needless controversy.</div>
  <div class="fstep"><strong>Use the conciliation stage genuinely.</strong> A recorded, reasonable settlement offer costs nothing and frames the arbitration favourably if conciliation fails.</div>
</div>

<h2>Takeaways</h2>
<p>The Facilitation Council process rewards preparation disproportionately. For suppliers, the bundle described above converts a grievance into a near-mechanical claim; for buyers, the fifteen-day discipline and contemporaneous documentation are the only reliable shield. Either way, the file is the case. This article is general information about MSMED Act practice and is not legal advice in any individual matter.</p>
HTML;
include __DIR__ . '/post-layout.php';
