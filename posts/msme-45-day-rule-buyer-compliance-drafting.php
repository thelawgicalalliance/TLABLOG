<?php
$P = [
  'slug'         => 'msme-45-day-rule-buyer-compliance-drafting.php',
  'title'        => 'The 45-Day Rule for Buyers – Advocate Manish Jha',
  'meta'         => 'How the MSMED Act\'s 45-day payment ceiling actually runs — the day of acceptance, deemed acceptance, contract drafting for buyers, and the cost of getting it wrong.',
  'h1'           => 'Counting the Forty-Five Days: MSME Payment Discipline from the Buyer\'s Side',
  'crumb'        => 'MSME 45-Day Compliance',
  'kicker'       => 'Practice Guide · 8 September 2026',
  'sub'          => 'Section 15 sets a ceiling no contract can breach, and the clock starts earlier than most buyers assume — at acceptance, or deemed acceptance, of the goods or services.',
  'date'         => '2026-09-08',
  'date_display' => '8 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Most buyer-side MSME problems are not born in bad faith; they are born in payment cycles designed before anyone read Section 15 of the MSMED Act, 2006. A ninety-day payment term with a registered micro or small supplier is not a negotiated commercial position — it is an unenforceable clause sitting on top of a statutory forty-five day ceiling, with compound interest at three times the bank rate accruing silently underneath. This article approaches the Act from the buyer\'s chair: how the clock actually runs, what "acceptance" and "deemed acceptance" mean, how to draft and operate procurement processes that comply, and what exposure looks like when they do not.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Can a contract lawfully provide for payment beyond 45 days to an MSME supplier?', 'No. Section 15 permits the parties to agree a payment period, but caps any such agreement at forty-five days from the day of acceptance or deemed acceptance. A longer contractual period is ineffective to that extent; the statutory ceiling prevails, and interest under Section 16 runs regardless of what the contract says.'],
    ['When does the clock actually start?', 'On the "day of acceptance": the day of actual delivery of goods or rendering of services — or, where the buyer objects in writing within fifteen days, the day the objection is removed by the supplier. If the buyer raises no written objection within fifteen days, acceptance is deemed to have occurred on the delivery day, and the forty-five days count from there.'],
    ['What is the cost of delay?', 'Compound interest, with monthly rests, at three times the bank rate notified by the Reserve Bank of India, running from the appointed day — automatically, by force of Section 16, without any demand being necessary. The interest is also non-deductible for income tax purposes, and buyers under the Companies Act must disclose outstanding MSME dues and delays in specified filings.'],
    ['Does the ceiling apply to every supplier claiming MSME status?', 'The delayed-payment chapter protects suppliers within the Act\'s definition — in substance, micro and small enterprises with the requisite registration, subject to how the enterprise and transaction fit the statutory scheme. Buyer compliance programmes should verify Udyam registration certificates at onboarding and record supplier classification, rather than discovering it in a Facilitation Council notice.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The mechanics, precisely</h2>
<p>Section 15 obliges the buyer to pay on or before the date agreed in writing — which may not exceed forty-five days from the day of acceptance or deemed acceptance — and, where there is no agreement, before the "appointed day", which is the day following the expiry of fifteen days from acceptance. The definitions in Section 2 do the real work, and they reward close reading.</p>
<table class="law">
  <tr><th>Scenario</th><th>Clock starts</th><th>Payment must be made by</th></tr>
  <tr><td>No written objection to delivery; no agreed credit period</td><td>Day of delivery (deemed acceptance)</td><td>15 days from delivery (the appointed day)</td></tr>
  <tr><td>No objection; agreed credit period of 45 days or less</td><td>Day of delivery</td><td>End of the agreed period</td></tr>
  <tr><td>No objection; agreed credit period beyond 45 days</td><td>Day of delivery</td><td>45 days — the excess is ineffective</td></tr>
  <tr><td>Written objection within 15 days of delivery</td><td>Day the supplier removes the objection</td><td>Agreed period (max 45 days) from that day</td></tr>
</table>
<p>The fifteen-day objection window is the buyer\'s only lawful mechanism for pausing the clock on defective or non-conforming supplies — and it must be exercised <em>in writing</em>, within time, identifying the defect. A quality dispute first raised sixty days after delivery does not stop interest that began accruing weeks earlier.</p>

<h2>Designing a compliant procure-to-pay cycle</h2>
<div class="flow">
  <div class="fstep"><strong>Onboarding.</strong> Collect Udyam certificates; flag micro and small suppliers in the vendor master; set their default payment terms at or inside forty-five days regardless of the standard cycle.</div>
  <div class="fstep"><strong>Goods receipt.</strong> Institutionalise inspection within the fifteen-day window, with template written objections that identify defects and are actually despatched — an internal quality note is not an objection to the supplier.</div>
  <div class="fstep"><strong>Invoice processing.</strong> Measure ageing from acceptance, not from invoice booking; internal approval delays are the buyer\'s problem, not the supplier\'s.</div>
  <div class="fstep"><strong>Escalation and reporting.</strong> Track MSME payables separately for the half-yearly return and financial-statement disclosures, and treat approaching breach dates as compliance events, not routine ageing.</div>
</div>

<h2>What exposure looks like</h2>
<div class="tiles">
  <div class="tile"><strong>The interest engine.</strong> Compound interest with monthly rests at three times the bank rate typically dwarfs contractual interest, and accrues without demand. Settlements that ignore accrued statutory interest leave a live claim behind.</div>
  <div class="tile"><strong>The Facilitation Council.</strong> A supplier\'s reference under Section 18 leads to conciliation and, failing that, arbitration by or through the Council — with any challenge to the award requiring the substantial statutory pre-deposit. Litigation posture, in other words, is expensive from the first step.</div>
  <div class="tile"><strong>Tax and disclosure.</strong> Interest on delayed MSME payments is not deductible, amounts outstanding beyond the statutory period attract adverse income-tax timing consequences, and company-law disclosures make chronic delay visible to auditors and counterparties.</div>
  <div class="tile"><strong>Commercial signalling.</strong> Public procurement policies and large customers increasingly examine MSME payment conduct; a record of Council proceedings is a reputational cost beyond the money.</div>
</div>

<div class="note"><p>Buyers sometimes respond to the regime by demanding suppliers waive their MSMED rights or misdescribe their status. Such devices are legally fragile — the Act\'s protections are statutory and its overriding provision is express — and they convert a payment-cycle problem into a good-faith problem before a Council. Redesigning the cycle is cheaper.</p></div>

<div class="check">
  <p>Cap MSME payment terms at forty-five days in templates, and shorter where cash-flow allows.</p>
  <p>Operate the fifteen-day written-objection window as a disciplined process with proof of despatch.</p>
  <p>Reconcile MSME payables monthly against acceptance dates; treat the appointed day as the real due date.</p>
  <p>Budget any dispute strategy around the statutory interest and pre-deposit — they change settlement mathematics entirely.</p>
</div>

<p>The forty-five day rule is not an aspiration; it is the outer boundary of lawful contracting with micro and small suppliers, backed by an interest regime designed to make delay irrational. Buyers who internalise the day-count avoid both the Councils and the disclosures. This article is general information and is not legal advice on any individual case.</p>
HTML;
include __DIR__ . '/post-layout.php';
