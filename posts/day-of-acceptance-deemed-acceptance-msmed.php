<?php
$P = [
  'slug'         => 'day-of-acceptance-deemed-acceptance-msmed.php',
  'title'        => 'The 15-Day Window in MSME Dues – Advocate Manish Jha',
  'meta'         => 'Day of acceptance and deemed acceptance under the MSMED Act: how the 15-day objection window fixes the appointed day, the 45-day outer limit and statutory interest.',
  'h1'           => 'Day of Acceptance, Deemed Acceptance and the Appointed Day: The Clockwork Inside Section 15 MSMED',
  'crumb'        => 'MSME — Delayed Payments',
  'kicker'       => 'Practice Explainer · 28 September 2026',
  'sub'          => 'Every delayed-payment computation under the MSMED Act starts from a date most parties never consciously fix: the day of acceptance. This explainer walks through Section 2(b), the 15-day objection window, and how the appointed day drives the 45-day limit and Section 16 interest.',
  'date'         => '2026-09-28',
  'date_display' => '28 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Suppliers invoking the MSME Samadhaan mechanism, and buyers defending it, usually argue about quantum and quality — but the arithmetic of a delayed-payment claim is governed by dates, and the master date is the &ldquo;appointed day&rdquo;. That date, in turn, depends on when the goods or services were <em>accepted</em>, or deemed accepted, under Section 2(b) of the Micro, Small and Medium Enterprises Development Act, 2006. A buyer who lets fifteen days pass in silence has, in law, accepted the supply on the day it was delivered — whatever quality dispute it raises months later. This explainer unpacks the machinery.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What is the &ldquo;appointed day&rdquo;?', 'Under Section 2(b) MSMED Act, it is the day following immediately after the expiry of fifteen days from the day of acceptance — or the day of deemed acceptance — of goods or services. It is the default due date where the parties have no written agreement on payment terms, and the reference point from which delay is measured.'],
    ['When is a supply &ldquo;deemed&rdquo; accepted?', 'Where the buyer makes no objection in writing within fifteen days of delivery of goods or rendering of services, the day of actual delivery or rendering is deemed the day of acceptance. A written objection within the window postpones acceptance to the day the supplier removes the objection.'],
    ['Can a contract provide a longer credit period?', 'Only up to a point. Section 15 permits a written agreement on the payment date, but caps it: the agreed period cannot exceed forty-five days from the day of acceptance or deemed acceptance. A 60- or 90-day credit clause is read down to forty-five for interest purposes.'],
    ['What happens after the due date passes?', 'Section 16 imposes compound interest, with monthly rests, at three times the RBI-notified bank rate, from the appointed day or the agreed date — notwithstanding anything in the contract. Section 17 makes the buyer liable for the amount with that interest, and Section 18 opens the facilitation council route.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — official text (India Code)', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan — delayed payment monitoring portal (Ministry of MSME)', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory clockwork</h2>
<div class="flow">
<div class="fstep"><strong>Day 0 — delivery or rendering.</strong> Goods are delivered or services rendered. The buyer&rsquo;s fifteen-day objection window opens.</div>
<div class="fstep"><strong>Days 1&ndash;15 — the objection window.</strong> If the buyer objects <em>in writing</em> to the goods or services within fifteen days, acceptance is suspended; it occurs when the supplier removes the objection. Silence exhausts the window.</div>
<div class="fstep"><strong>Deemed acceptance.</strong> No written objection within fifteen days means the day of delivery or rendering is deemed the day of acceptance — retrospectively fixing Day 0 as the acceptance date.</div>
<div class="fstep"><strong>The appointed day.</strong> The day immediately following expiry of fifteen days from acceptance or deemed acceptance. With no written credit term, payment is due before this day.</div>
<div class="fstep"><strong>The 45-day ceiling.</strong> A written agreement may fix a later due date, but never beyond forty-five days from acceptance or deemed acceptance. Beyond the operative date, Section 16 interest runs automatically.</div>
</div>

<h2>Why the window decides real disputes</h2>
<p>Most delayed-payment references feature a buyer who resists on quality: goods were defective, services incomplete, invoices inflated. The first question a facilitation council — or the arbitrator on a Section 18(3) reference — asks is documentary: <em>where is the written objection, and is it within fifteen days of delivery?</em> Emails and letters raised months later, or oral complaints recollected in the reply, do not stop the deeming. Conversely, a genuine written objection within the window shifts the entire timeline — acceptance, appointed day, and interest start — to the date the supplier cured the objection, which can shrink an interest claim dramatically.</p>
<div class="note">
<p>The objection must be to the goods or services — a substantive quality or completeness objection — communicated in writing to the supplier. Internal quality notes, unsent inspection reports, or disputes about price rather than the supply itself do not engage Section 2(b).</p>
</div>

<h2>Positions each side should build</h2>
<div class="tiles">
<div class="tile"><h3>Suppliers</h3><p>Prove delivery with dated documents — signed challans, e-way bills, service completion certificates, delivery emails. In the claim, compute acceptance date, appointed day and interest invoice-wise; councils act on tables, not totals. Preserve any buyer communications showing the window passed silently.</p></div>
<div class="tile"><h3>Buyers</h3><p>Institutionalise the window: inspection within fifteen days, written objections dispatched and provable, and a cure-tracking record. In defence, distinguish objections within the window from later grievances — and remember the 45-day ceiling defeats reliance on longer contractual credit periods.</p></div>
</div>

<h2>The consequences that flow from the dates</h2>
<table class="law">
<tr><th>Provision</th><th>What the acceptance date drives</th></tr>
<tr><td>S. 15 — liability to pay</td><td>Due date: before the appointed day, or the agreed date capped at 45 days from acceptance/deemed acceptance</td></tr>
<tr><td>S. 16 — interest</td><td>Compound interest with monthly rests at three times the RBI bank rate, from the day after the due date, overriding the contract</td></tr>
<tr><td>S. 17 — recovery</td><td>The buyer&rsquo;s liability is the principal <em>with</em> S.16 interest — the package a council reference recovers</td></tr>
<tr><td>S. 18 — reference</td><td>Conciliation, then institutional arbitration; the computation sheet built on the acceptance dates is the claim&rsquo;s backbone</td></tr>
<tr><td>S. 23 — tax treatment</td><td>Interest paid or payable under S.16 is not deductible for the buyer&rsquo;s income-tax purposes — a hidden multiplier on delay</td></tr>
</table>

<h2>Practical notes for Delhi suppliers</h2>
<p>References for supplies to Delhi-based buyers are filed through the MSME Samadhaan portal to the facilitation council with jurisdiction over the supplier&rsquo;s location. Before filing, a supplier should reconcile three artefacts per invoice: the delivery proof, the absence (or cure) of a written objection, and the ledger of part-payments — since payments received are first appropriated as the law and accounting practice require, and councils scrutinise running accounts closely. Buyers served with a council notice should treat the acceptance-date table as the battlefield: conceding the dates often concedes the case, because the interest formula then operates mechanically.</p>
<div class="check">
<p>The single habit that prevents most MSMED disputes: written, dated, dispatched objection within fifteen days of delivery — or payment within forty-five. Everything else in the Act&rsquo;s delayed-payment chapter follows from those two clocks.</p>
</div>
<p>This article is for general information only and is not legal advice. Delayed-payment claims turn on the invoice-wise documentary record of each supply relationship.</p>
HTML;
include __DIR__ . '/post-layout.php';
