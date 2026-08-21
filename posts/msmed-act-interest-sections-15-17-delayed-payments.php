<?php
$P = [
  'slug'         => 'msmed-act-interest-sections-15-17-delayed-payments.php',
  'title'        => 'MSMED Act Interest: Sections 15–17 – Advocate Manish Jha',
  'meta'         => 'The MSMED Act interest regime — the 45-day ceiling under Section 15, compound interest at three times the RBI bank rate, and the tax provisions behind it.',
  'h1'           => 'The Interest Engine of the MSMED Act: Sections 15, 16 and 17',
  'crumb'        => 'MSME — Statutory Interest',
  'kicker'       => 'Practice Explainer · MSME',
  'sub'          => 'Compound interest at three times the bank rate, monthly rests, non-deductible for tax — the MSMED Act makes delay the most expensive credit a buyer can take.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">The Micro, Small and Medium Enterprises Development Act, 2006 does not merely give small suppliers a forum; it rewrites the economics of delayed payment. Sections 15 to 17 impose a payment deadline that no contract can stretch beyond forty-five days, attach compound interest at three times the Reserve Bank\'s notified bank rate from the day after the deadline, and make that interest non-deductible for income tax. For buyers, the provisions convert casual delay into an expensive liability; for micro and small suppliers, they are the leverage that makes recovery practical.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'civil-law.php' => 'Civil Law'],
  'faqs'         => [
    ['Can a contract provide for payment beyond 45 days?', 'No. Section 15 permits the parties to agree on a payment period, but the proviso caps any agreed period at forty-five days from the day of acceptance or deemed acceptance. A ninety-day credit term in a purchase order is, as against a micro or small supplier, ineffective beyond the statutory ceiling.'],
    ['How is the interest under Section 16 calculated?', 'From the appointed day — or the day after the agreed date — the buyer pays compound interest with monthly rests at three times the bank rate notified by the Reserve Bank of India. The rate applies notwithstanding anything in any agreement or any other law, so contractual interest clauses cannot dilute it.'],
    ['Who counts as a "supplier" entitled to this regime?', 'A micro or small enterprise which has filed a memorandum — today, Udyam registration. Medium enterprises are outside the delayed-payment chapter. The classification thresholds of investment and turnover were revised with effect from 1 April 2025, materially widening the class of enterprises that qualify.'],
    ['Can the buyer deduct the interest paid as a business expense?', 'No. Section 23 of the MSMED Act provides that interest payable or paid under the Act is not allowed as a deduction in computing income. Separately, Section 43B(h) of the Income-tax Act, 1961 defers deduction of the principal itself where payment to a micro or small enterprise is made beyond the Section 15 time limit.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2013'],
    ['label' => 'MSME Samadhaan — delayed payment portal', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Section 15: the deadline no contract can move</h2>

<p>Section 15 fixes the buyer's obligation: payment on or before the date agreed in writing, and where there is no agreement, before the appointed day — the day following the expiry of fifteen days from acceptance or deemed acceptance of the goods or services. The proviso is the provision's teeth: an agreed credit period "shall not exceed forty-five days from the day of acceptance or the day of deemed acceptance". The ceiling is statutory policy, not a default rule, and buyer-drafted terms cannot contract out of it.</p>

<p>"Deemed acceptance" matters as much as the deadline. Where the buyer raises no objection in writing to the goods or services within fifteen days of delivery, acceptance is deemed; a buyer cannot park invoices indefinitely by neither accepting nor rejecting. Objections must therefore be contemporaneous and written — a discipline that decides many Facilitation Council references.</p>

<h2>Section 16: interest as deterrent</h2>

<p>Where payment is not made within the Section 15 period, Section 16 applies "notwithstanding anything contained in any agreement between the buyer and the supplier or in any law for the time being in force": the buyer pays compound interest, with monthly rests, at three times the bank rate notified by the RBI, computed from the appointed day or the agreed date. Three features deserve emphasis:</p>

<div class="tiles">
  <div class="tile"><h3>Automatic accrual</h3><p>Interest runs by force of statute from the day after default — no demand, notice or award is needed to start the clock.</p></div>
  <div class="tile"><h3>Compounding, monthly</h3><p>Monthly rests mean the liability grows geometrically; on old dues the interest routinely exceeds the principal.</p></div>
  <div class="tile"><h3>Override</h3><p>Contractual interest clauses, waivers and "no-interest" terms are displaced; the statutory rate governs.</p></div>
</div>

<p>Section 17 completes the scheme: for goods supplied or services rendered, the buyer is liable to pay the amount with interest as provided under Section 16. Together they form the substantive claim that a Facilitation Council reference under Section 18 — or a suit, where the supplier chooses ordinary remedies — enforces.</p>

<h2>The tax dimension</h2>

<p>Parliament reinforced the interest regime through tax law twice over. Section 23 of the MSMED Act denies the buyer any income-tax deduction for interest paid under the Act — the penalty cannot be softened into a business expense. And since Assessment Year 2024-25, Section 43B(h) of the Income-tax Act defers the deduction of the purchase amount itself: sums payable to micro and small enterprises are deductible only in the year of actual payment where the Section 15 timeline is breached. Compliance teams have learnt what litigation counsel long knew — the cheapest way to deal with MSME dues is to pay them on time.</p>

<h2>Practical notes for both sides</h2>

<p>For suppliers: keep Udyam registration current and quote it on invoices; document delivery and acceptance; and compute interest claims precisely — monthly rests at three times the prevailing bank rate, tabulated invoice-wise — because Councils award what is proved, not what is asserted. For buyers: written, timely objections to defective supplies preserve defences; ledger confirmations and part-payments have interest consequences; and settlement negotiations should account for the fact that the statutory interest cannot be traded away in advance, though a supplier may compromise a crystallised claim.</p>

<div class="note">
<p>The recovery machinery for these claims — reference to the Micro and Small Enterprises Facilitation Council under Section 18, conciliation followed by arbitration, and the seventy-five per cent pre-deposit that Section 19 exacts from a buyer challenging an award — is covered in the companion pieces on this site on MSME delayed-payment recovery and on challenging Facilitation Council awards.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
