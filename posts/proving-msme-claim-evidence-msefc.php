<?php
$P = [
  'slug'         => 'proving-msme-claim-evidence-msefc.php',
  'title'        => 'Proving An MSME Claim Before MSEFC – Advocate Manish Jha',
  'meta'         => 'The documents that win delayed-payment references before the MSME Facilitation Council: Udyam proof, purchase orders, invoices, delivery evidence, ledgers and interest computation.',
  'h1'           => 'The Evidence That Wins An MSEFC Reference: Building A Delayed-Payment Claim Document By Document',
  'crumb'        => 'MSME — Delayed Payments',
  'kicker'       => 'Practice Explainer · 26 September 2026',
  'sub'          => 'Section 18 of the MSMED Act gives a supplier a powerful forum, but the Facilitation Council decides on paper. A claim assembled with the right documents — from Udyam registration to the interest worksheet — is half won before the first hearing.',
  'date'         => '2026-09-26',
  'date_display' => '26 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Micro and small enterprises pursuing delayed payments under the Micro, Small and Medium Enterprises Development Act, 2006 often treat the reference to the Facilitation Council as a form to be filled rather than a case to be proved. That is a mistake. The Council&rsquo;s conciliation and the arbitration that follows under Section 18(3) are decided on documents; oral assertion fills no gaps. This explainer catalogues the record a supplier should assemble before filing on the Samadhaan portal — and the weaknesses buyers most commonly exploit.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notice Replies', 'blog.php' => 'Blog'],
  'faqs'         => [
    ['Is Udyam registration necessary, and from when?', 'The supplier&rsquo;s status as a micro or small enterprise anchors the Council&rsquo;s jurisdiction, and registration at the time of the supply is the safest position. The certificate, with its classification and date, should be the first annexure; disputes about registration timing relative to the contract are among the most litigated threshold points.'],
    ['What establishes the &ldquo;appointed day&rdquo; from which interest runs?', 'Under the Act, payment falls due as agreed (subject to the statutory ceiling of forty-five days from acceptance) or, absent agreement, within fifteen days of acceptance or deemed acceptance. Proof of the day of acceptance — delivery challans, GRNs, or the absence of any written objection within fifteen days of delivery — fixes the appointed day and the interest start point.'],
    ['How is interest under Section 16 computed?', 'At three times the bank rate notified by the Reserve Bank, compounded with monthly rests, from the appointed day until payment. A month-by-month worksheet for each invoice, filed with the claim, saves the Council arithmetic and signals a professionally prepared case.'],
    ['Do WhatsApp messages and emails count?', 'Yes — correspondence in which the buyer acknowledges receipt of goods, promises payment or raises no quality objection is often the most persuasive material on the file, precisely because it is contemporaneous. Preserve it with dates and, in arbitration, be ready to prove electronic records in accordance with the Bharatiya Sakshya Adhiniyam.'],
  ],
  'sources'      => [
    ['label' => 'MSME Samadhaan — delayed payment portal', 'url' => 'https://samadhaan.msme.gov.in/'],
    ['label' => 'Udyam Registration portal', 'url' => 'https://udyamregistration.gov.in/'],
    ['label' => 'India Code — MSMED Act, 2006', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Think like the tribunal</h2>
<p>The Council — and the arbitrator it becomes or appoints under Section 18(3) — must answer a short chain of questions: Was the claimant a supplier under the Act? Did it supply goods or services to the buyer? Were they accepted? What price was payable, by when? What remains unpaid? What interest has accrued? Each link needs a document. The claim should be organised so that every question is answered by a numbered annexure, in order.</p>

<h2>The document checklist</h2>
<table class="law">
<tr><th>Element</th><th>Primary proof</th><th>Common defect</th></tr>
<tr><td>Supplier status</td><td>Udyam certificate showing micro/small classification at the relevant time</td><td>Registration obtained after the supplies; classification since upgraded</td></tr>
<tr><td>Contract terms</td><td>Purchase orders, rate contracts, email confirmations</td><td>Supplies made on oral orders; terms reconstructed from invoices alone</td></tr>
<tr><td>Supply and acceptance</td><td>Delivery challans with receipt signatures, GRNs, e-way bills, installation or service completion reports</td><td>Challans unsigned; no proof goods reached the buyer&rsquo;s premises</td></tr>
<tr><td>No timely objection</td><td>Correspondence trail showing no written objection within fifteen days of delivery</td><td>Ignoring the buyer&rsquo;s quality emails instead of answering them</td></tr>
<tr><td>Outstanding amount</td><td>Invoice set, ledger account, buyer&rsquo;s balance confirmations, GST returns reflecting the invoices</td><td>Ledger and invoices inconsistent; credit notes unaccounted</td></tr>
<tr><td>Interest</td><td>Invoice-wise worksheet at three times the bank rate, compounded monthly from each appointed day</td><td>Lump-sum interest claims with no computation</td></tr>
</table>

<h2>Anticipating the buyer&rsquo;s defences</h2>
<div class="tiles">
<div class="tile"><strong>Quality disputes.</strong> The classic answer to a delayed-payment claim. Its strength depends entirely on contemporaneity: rejection memos and complaint emails from the supply period carry weight; objections voiced first in the reply to the claim rarely do.</div>
<div class="tile"><strong>Accounts reconciliation.</strong> Buyers plead payments, debit notes and set-offs. A supplier who files a clean, complete ledger — with every credit given — pre-empts the argument and keeps the focus on the unpaid balance.</div>
<div class="tile"><strong>Jurisdictional objections.</strong> Registration timing, the buyer&rsquo;s location, the character of the transaction. These are met in the claim itself: plead the registration date, the place of supply, and the supplier&rsquo;s location within the Council&rsquo;s territory.</div>
</div>
<div class="note"><p>Conciliation under Section 18(2) is not a formality to be endured. It is the stage where a documented claimant extracts settlements, because the buyer&rsquo;s advisers can read the file as well as the Council can. Suppliers who arrive with the worksheet and the annexures settle better and faster than those who arrive with grievances.</p></div>

<h2>After the award</h2>
<p>If conciliation fails, the dispute proceeds to arbitration under the Act, and the resulting award is enforceable like any arbitral award — with the significant statutory tilt that a buyer challenging it must first deposit seventy-five per cent of the awarded amount under Section 19. The evidentiary discipline described above pays a second dividend here: awards built on complete documentary records survive challenge, while awards resting on assertion invite remand and delay. The supplier&rsquo;s file, assembled before filing, remains the case&rsquo;s backbone from Samadhaan portal to execution court.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
