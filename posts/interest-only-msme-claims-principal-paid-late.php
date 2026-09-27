<?php
$P = [
  'slug'         => 'interest-only-msme-claims-principal-paid-late.php',
  'title'        => 'MSME Interest-Only Claims – Advocate Manish Jha',
  'meta'         => 'Buyer paid the principal late? The MSMED Act still entitles the supplier to compound interest. How interest-only references before the MSEFC work.',
  'h1'           => 'Paid Late, Not Paid In Full: Interest-Only Claims Under The MSMED Act',
  'crumb'        => 'MSME — Delayed Payments',
  'kicker'       => 'Practice Explainer · 27 September 2026',
  'sub'          => 'Sections 15 to 17 of the MSMED Act make the buyer&rsquo;s liability to pay compound interest on delayed payments statutory and non-waivable — which means a supplier whose invoices were eventually cleared can still pursue the interest alone.',
  'date'         => '2026-09-27',
  'date_display' => '27 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A recurring situation in supplier practice: the buyer strings out payments for months beyond the agreed credit period, then clears the principal once the supplier threatens action — and treats the file as closed. It is not. Under the Micro, Small and Medium Enterprises Development Act, 2006, interest on delayed payment accrues by force of statute, survives payment of the principal, and can be pursued on its own before the Micro and Small Enterprises Facilitation Council. This explainer sets out how interest-only claims work and what they require.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notice Replies', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['The buyer has paid all invoices, though late. Is a claim still maintainable?', 'Yes, for the statutory interest. Section 16 makes the buyer liable to pay compound interest with monthly rests at three times the RBI-notified bank rate on the delayed amount for the period of delay, and Section 17 entitles the supplier to recover that interest. Late payment of principal extinguishes the principal, not the accrued interest.'],
    ['Can the buyer rely on a contract clause waiving interest?', 'Section 24 of the MSMED Act gives Sections 15 to 23 overriding effect notwithstanding anything inconsistent in any other law or instrument. Courts have consistently treated the statutory interest as incapable of being contracted out of by the buyer.'],
    ['From when does interest run?', 'From the "appointed day" — the day following expiry of the agreed credit period, which Section 15 caps at forty-five days from acceptance or deemed acceptance — or, absent an agreement, from the day following the fifteen-day statutory window. The delay period runs until actual payment.'],
    ['Is the interest tax-deductible for the buyer?', 'No. Section 23 of the MSMED Act specifically disallows deduction of this interest in computing the buyer&rsquo;s income under the Income-tax Act — one of several provisions designed to make delay expensive rather than convenient.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — full text', 'url' => 'https://indiankanoon.org/doc/22957994/'],
    ['label' => 'MSME Samadhaan — delayed payment monitoring portal', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory chain: Sections 15, 16, 17 and 18</h2>
<table class="law">
<tr><th>Provision</th><th>What it does</th></tr>
<tr><td>Section 15</td><td>Obliges the buyer to pay on or before the agreed date (maximum credit period forty-five days from acceptance), or within fifteen days where there is no agreement.</td></tr>
<tr><td>Section 16</td><td>Imposes compound interest, with monthly rests, at three times the bank rate notified by the RBI, on the delayed amount for the period of delay — automatically, "notwithstanding anything contained in any agreement".</td></tr>
<tr><td>Section 17</td><td>Entitles the supplier to recover the amount due <em>with the Section 16 interest</em> — the recovery hook for interest-only claims.</td></tr>
<tr><td>Section 18</td><td>Provides the forum: a reference to the Facilitation Council, conciliation first, arbitration thereafter, with a ninety-day aspiration for disposal.</td></tr>
</table>
<p>Nothing in this chain conditions the interest claim on the principal remaining unpaid. The liability crystallises day by day during the delay; payment of principal stops further accrual but does not erase what has accrued.</p>

<h2>Building an interest-only reference</h2>
<div class="flow">
<div class="fstep"><strong>Reconstruct the ledger.</strong> For each invoice: date of delivery, date of acceptance or deemed acceptance, agreed credit period, due date, and the actual date and amount of each payment received. The delay window for each invoice is the space between the last two.</div>
<div class="fstep"><strong>Compute the statutory interest.</strong> Apply three times the bank rate, compounded with monthly rests, invoice by invoice, from the appointed day to the date of actual payment. Annex the computation as a schedule — Councils act on arithmetic they can verify.</div>
<div class="fstep"><strong>Confirm registration coverage.</strong> The supplier should hold Udyam registration covering the supplies in question; registration status at the time of supply is scrutinised, and claims for periods outside coverage draw objections.</div>
<div class="fstep"><strong>File on Samadhaan.</strong> The online reference triggers Section 18: conciliation first, then arbitration by or through the Council if conciliation fails.</div>
</div>

<h2>What buyers argue — and how it usually fares</h2>
<div class="compare">
<div class="col old"><h3>Buyer&rsquo;s objection</h3><p>&ldquo;Accounts were settled — the supplier accepted the principal without protest, so nothing survives.&rdquo;</p></div>
<div class="arrow">&rarr;</div>
<div class="col new"><h3>The statutory answer</h3><p>The interest arises from the Act, not the contract, and Section 24 overrides inconsistent arrangements. Acceptance of principal is not, without more, a discharge of a liability the parties could not contract away in the first place. A specific, documented accord on the interest itself is a different — and rarer — matter.</p></div>
</div>

<div class="note"><p>Perspective matters on quality disputes too: a buyer who genuinely disputed the goods should have raised objections within the fifteen-day window contemplated by Section 2(b)&rsquo;s deemed-acceptance mechanics. Objections invented after years of silence, once an interest claim lands, seldom impress a Council.</p></div>

<h2>A realistic word on recovery</h2>
<p>Interest-only claims are legally sound but commercially charged: they are often brought against buyers with whom the supplier still trades. Many suppliers therefore bank the computation and deploy it as negotiating leverage — a documented Section 16 schedule attached to a demand notice concentrates minds — reserving the Samadhaan reference for relationships already ended. Both are legitimate uses of a liability the statute deliberately made expensive to ignore.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
