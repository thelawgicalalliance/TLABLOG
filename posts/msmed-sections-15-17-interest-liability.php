<?php
$P = [
  'slug'         => 'msmed-sections-15-17-interest-liability.php',
  'title'        => 'The MSMED Interest Machine – Advocate Manish Jha',
  'meta'         => 'Sections 15 to 17 MSMED Act: when payment falls due, how compound interest at three times the bank rate accrues with monthly rests, and why the liability cannot be contracted away.',
  'h1'           => 'Sections 15, 16 and 17 MSMED: How the Statutory Interest Actually Accrues',
  'crumb'        => 'MSMED Interest: Ss.15-17',
  'kicker'       => 'Practice Explainer · MSMED Act',
  'sub'          => 'The delayed-payment liability is automatic: due date fixed by Section 15, compound interest at three times the RBI bank rate under Section 16, and recovery of both under Section 17.',
  'date'         => '2026-10-21',
  'date_display' => '21 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Most discussions of the Micro, Small and Medium Enterprises Development Act, 2006 begin with the Facilitation Council. But the Council only enforces a liability that three earlier provisions create. Section 15 fixes the date on which a buyer\'s payment falls due; Section 16 makes delayed payment carry compound interest with monthly rests at three times the bank rate notified by the Reserve Bank; and Section 17 entitles the supplier to recover the amount with that interest. The liability is statutory and automatic — it arises from the delay itself, operates notwithstanding anything in the contract, and keeps compounding while the dispute is fought. This explainer works through the mechanics that make MSME claims grow so fast.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['When does payment to an MSME supplier legally fall due?', 'Section 15 requires the buyer to pay on or before the date agreed in writing, which cannot exceed forty-five days from the day of acceptance or the day of deemed acceptance; where there is no written agreement, payment must be made before the appointed day — the day following the expiry of fifteen days from acceptance or deemed acceptance. The 45-day ceiling is mandatory: a longer credit period in the contract is cut down by the statute.'],
    ['How is interest under Section 16 computed?', 'From the appointed day or the agreed date, the buyer pays compound interest with monthly rests on the outstanding amount, at three times the bank rate notified by the Reserve Bank of India. The interest runs notwithstanding anything contained in any agreement or in any other law — a contractual clause waiving or reducing interest does not stop the statutory accrual.'],
    ['Can the buyer deduct or absorb this interest as a business cost?', 'No relief is available even in tax: Section 23 of the Act provides that interest payable or paid under the Act is not allowed as a deduction in computing the buyer\'s taxable income. Combined with Section 24, which gives Sections 15 to 23 overriding effect over inconsistent laws, the scheme is designed to make delay genuinely expensive.'],
    ['What is the role of Section 17 and the Facilitation Council?', 'Section 17 declares the buyer liable to pay the amount due with interest as provided under Section 16 — it is the recovery hook. Where the dispute is live, Section 18 lets any party refer it to the Micro and Small Enterprises Facilitation Council, which attempts conciliation and then arbitrates; the award carries the statutory interest, and a buyer challenging it must pre-deposit seventy-five per cent under Section 19.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan (Delayed Payment Monitoring) Portal — Ministry of MSME', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Step one: Section 15 fixes the due date</h2>
<p>The clock starts not from the invoice but from acceptance. The Act works with two defined moments: the <em>day of acceptance</em> — the day of actual delivery, or, where the buyer objects in writing within fifteen days, the day the objection is removed — and the <em>day of deemed acceptance</em>, which is the day of delivery where no written objection is made within fifteen days. From there, Section 15 produces a due date on a simple rule:</p>
<div class="tiles">
  <div class="tile"><h4>Written agreement</h4><p>Payment is due on the agreed date, but the agreement cannot push payment beyond forty-five days from acceptance or deemed acceptance. A 90-day credit clause is valid only up to day 45.</p></div>
  <div class="tile"><h4>No written agreement</h4><p>Payment is due before the <em>appointed day</em> — the day after fifteen days from acceptance or deemed acceptance expire.</p></div>
</div>

<h2>Step two: Section 16 prices the delay</h2>
<p>Miss the due date, and interest begins to run by force of statute: compound interest, with monthly rests, at <strong>three times the bank rate notified by the Reserve Bank of India</strong>. Three features of this provision drive outcomes in litigation:</p>
<div class="check">
  <ul>
    <li><strong>It overrides the contract.</strong> The section operates "notwithstanding anything contained in any agreement between the buyer and the supplier or in any law for the time being in force" — clauses waiving interest, capping it, or substituting a milder rate do not bind the supplier.</li>
    <li><strong>It compounds monthly.</strong> Unlike ordinary commercial interest, the monthly rests mean the principal effectively grows twelve times a year; claims left undisputed for several years can see interest overtake, then dwarf, the principal.</li>
    <li><strong>It is automatic.</strong> No demand, notice or adjudication is needed for the liability to arise; the Council or court later quantifies what the statute has already created.</li>
  </ul>
</div>

<h2>Step three: Section 17 makes it recoverable</h2>
<p>Section 17 completes the triad: for goods supplied or services rendered, the buyer "shall be liable to pay the amount with interest thereon as provided under section 16." It is this combined amount — principal plus statutory interest — that a reference under Section 18 places before the Facilitation Council, and that an eventual award or decree carries. The buyer\'s procedural burdens are equally deliberate: a challenge to the award requires a seventy-five per cent pre-deposit under Section 19, and Section 23 denies the buyer any income-tax deduction for the interest paid.</p>

<h2>The scheme at a glance</h2>
<table class="law">
  <tr><th>Provision</th><th>Function</th><th>Key rule</th></tr>
  <tr><td>Section 15</td><td>Due date</td><td>Agreed date capped at 45 days; 15-day appointed-day rule without written agreement</td></tr>
  <tr><td>Section 16</td><td>Interest</td><td>Compound, monthly rests, 3× RBI bank rate, contract notwithstanding</td></tr>
  <tr><td>Section 17</td><td>Recovery</td><td>Buyer liable for amount due plus Section 16 interest</td></tr>
  <tr><td>Section 18</td><td>Forum</td><td>Reference to MSEFC: conciliation, then arbitration</td></tr>
  <tr><td>Sections 19, 23, 24</td><td>Teeth</td><td>75% pre-deposit to challenge; no tax deduction; overriding effect</td></tr>
</table>

<h2>Practice notes for suppliers and buyers</h2>
<p>Suppliers should document acceptance — delivery challans, acknowledgments, the absence of any written objection within fifteen days — because the interest computation stands or falls on those dates, and should claim interest computed with monthly rests rather than a flat figure. Buyers, conversely, should put quality objections in writing within the fifteen-day window, since a timely objection defers acceptance itself; once the window passes, the realistic strategies are settlement, prompt payment of principal to stop the compounding, and a reasoned defence before the Council rather than a limitation-era challenge after the award, when the pre-deposit wall is already up. For both sides, the central fact is the same: under this statute, time is not neutral. Every month of delay is priced, compounded and ultimately collected.</p>
<div class="note"><p>This article is for general information only and is not legal advice. Registration status, the nature of the supply and the documentation in each case determine how these provisions apply.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
