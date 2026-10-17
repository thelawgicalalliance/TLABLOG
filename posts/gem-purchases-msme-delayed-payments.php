<?php
$P = [
  'slug'         => 'gem-purchases-msme-delayed-payments.php',
  'title'        => 'GeM Orders and MSME Dues – Advocate Manish Jha',
  'meta'         => 'Delayed payments on Government e-Marketplace contracts: how MSMED Act remedies interact with GeM terms, incident management, and Samadhaan references.',
  'h1'           => 'Sold Through GeM, Still Unpaid: MSMED Act Remedies for Government e-Marketplace Suppliers',
  'crumb'        => 'Commercial — MSME',
  'kicker'       => 'Practice Explainer · MSME Recovery',
  'sub'          => 'The Government e-Marketplace has made public procurement accessible to small suppliers — and generated its own species of delayed-payment dispute. The platform\'s terms, the buyer\'s internal processes and the MSMED Act operate in parallel, and the supplier who understands all three recovers fastest.',
  'date'         => '2026-10-17',
  'date_display' => '17 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A large share of micro and small enterprises in Delhi now reach government buyers through the Government e-Marketplace (GeM) — supplying goods and services to ministries, PSUs, hospitals and municipal bodies against purchase orders generated on the portal. When payment stalls after delivery and acceptance, suppliers often assume the portal\'s own terms are the only recourse. They are not. The MSMED Act, 2006 attaches to the transaction by force of statute: the buyer must pay within the period Section 15 fixes — forty-five days at the outside — and default triggers compound interest under Section 16 and the Facilitation Council remedy under Section 18. This explainer maps how the two systems fit together.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Does selling through GeM change my MSMED Act rights?', 'No. The MSMED Act\'s delayed-payment provisions operate notwithstanding anything inconsistent in any other law or instrument — Section 24 gives Sections 15 to 23 overriding effect. A registered supplier who has delivered goods or rendered services to a buyer does not lose the statutory time limit, the statutory interest or the Section 18 reference merely because the purchase order issued through a portal with its own dispute terms.'],
    ['What does the GeM process itself offer?', 'The platform\'s contract terms build in timelines for inspection, acceptance (the CRAC — consignee receipt and acceptance certificate) and payment, and an incident-management system for raising non-payment and other breaches against the buyer. These steps are worth exhausting in parallel: they are fast, documented, and the acceptance records they generate become the core evidence in any later Samadhaan reference.'],
    ['Where do I file a Samadhaan reference for a GeM transaction?', 'Before the Micro and Small Enterprises Facilitation Council of the place where the supplier is located — Section 18(4) fixes jurisdiction by the supplier\'s location, so a Delhi supplier files before the Delhi MSEFC through the MSME Samadhaan portal regardless of where the government buyer sits. The reference proceeds first to conciliation and then, failing settlement, to arbitration under the Act.'],
    ['Is interest really payable by a government buyer?', 'Section 16 makes no exception for government departments or PSUs: interest runs at three times the RBI-notified bank rate, compounded monthly, from the appointed day. Buyers under the MSMED Act also cannot deduct this interest as a business expense. In practice, documented statutory-interest exposure is the strongest settlement lever a small supplier holds against a public buyer.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — Sections 15–24 (India Code)', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan — delayed payment monitoring portal (Ministry of MSME)', 'url' => 'https://samadhaan.msme.gov.in/'],
    ['label' => 'Government e-Marketplace — official portal', 'url' => 'https://gem.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Two systems, one transaction</h2>
<div class="compare">
<div class="col old"><h3>The GeM layer</h3><p>Portal-generated contract, inspection and acceptance workflow, CRAC issuance, payment timelines, incident management against defaulting buyers — administrative, fast, but ultimately persuasive rather than adjudicatory.</p></div>
<div class="arrow">→</div>
<div class="col new"><h3>The MSMED layer</h3><p>Statutory payment deadline (Section 15), compound interest at three times the bank rate (Section 16), Facilitation Council conciliation-then-arbitration (Section 18), and overriding effect over inconsistent terms (Section 24) — slower, but binding and enforceable as an award.</p></div>
</div>
<p>The layers are cumulative, not alternative. The portal workflow fixes the facts — what was ordered, delivered, inspected and accepted, and when. The statute converts those facts into an enforceable money claim with interest. Suppliers who litigate GeM disputes without the portal record, or who chase the portal process without ever invoking the statute, use half their rights.</p>

<h2>The timeline that decides everything</h2>
<p>Under Section 15, the buyer must pay on or before the date agreed in writing — which cannot exceed forty-five days from the day of acceptance or deemed acceptance — or, absent an agreed date, before the appointed day. The GeM workflow maps onto this neatly: the CRAC date ordinarily marks acceptance, and the agreed payment timeline runs from it. From the day the period expires, Section 16 interest accrues automatically, with no demand needed in law. Suppliers should nonetheless demand in writing: a dated notice citing the invoice, the CRAC and Sections 15–16 concentrates minds within a government buyer's payment chain, and creates the paper trail the Council will later read.</p>

<h2>Running the Samadhaan reference against a public buyer</h2>
<div class="flow">
<div class="fstep"><strong>Assemble the record</strong><p>Udyam certificate, GeM purchase order, invoices, delivery and inspection records, the CRAC, the account statement and the demand notice.</p></div>
<div class="fstep"><strong>File on the portal</strong><p>Lodge the reference on the Samadhaan portal before the MSEFC of the supplier's location, quantifying principal and Section 16 interest separately.</p></div>
<div class="fstep"><strong>Conciliation</strong><p>The Council first attempts settlement; government buyers frequently pay principal at this stage, and the interest claim becomes the negotiation.</p></div>
<div class="fstep"><strong>Arbitration and award</strong><p>Failing settlement, the dispute proceeds to arbitration under the Act, ending in an award enforceable like any arbitral award — with the buyer's challenge gated by the 75% pre-deposit rule of Section 19.</p></div>
</div>

<h2>Practical cautions</h2>
<p>Three recurring issues deserve attention. First, registration and timing: the delayed-payment chapter protects suppliers for transactions covered by their Udyam registration, so keep the registration current and aligned with what is actually sold through the portal. Second, documentation of acceptance: where a consignee neither accepts nor objects, the statute's deemed-acceptance rule (no written objection within fifteen days of delivery) fills the gap — but the delivery proof must be airtight. Third, set-offs and quality objections raised after acceptance: a buyer who issued a clean CRAC and objected only when the Council's notice arrived argues from weakness, and the Council can be invited to view such defences accordingly. None of this requires hostility with a buyer the enterprise hopes to keep; the statute is designed to make payment discipline, not litigation, the normal outcome.</p>

<div class="note">
<p>This is a general explainer on the interaction between Government e-Marketplace procurement and the delayed-payment provisions of the MSMED Act, 2006. Portal workflows and procurement terms are administrative and change from time to time; verify the current versions on the official portals. This article is informational and is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
