<?php
$P = [
  'slug'         => 'msme-ecommerce-marketplace-delayed-payments.php',
  'title'        => 'MSME Dues From Marketplaces – Advocate Manish Jha',
  'meta'         => 'Can MSME sellers on e-commerce marketplaces use the MSMED Act for delayed settlements, withheld payouts and chargebacks? The buyer question, forum and strategy explained.',
  'h1'           => 'Marketplace Payouts and the MSMED Act: Delayed-Payment Remedies for Online Sellers',
  'crumb'        => 'Commercial & Corporate — MSME',
  'kicker'       => 'Practice Explainer · MSMED Act, 2006 · E-commerce supply chains',
  'sub'          => 'Withheld settlements, chargebacks and rolling reserves are the delayed-payment disputes of the platform economy. Whether an online seller can invoke the MSEFC depends on one question the contracts try to blur: who is the buyer?',
  'date'         => '2026-10-13',
  'date_display' => '13 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A growing share of MSME receivables no longer comes from purchase orders issued by identifiable buyers, but from marketplace settlements: payout cycles, deductions, chargebacks and reserves administered by platforms. When those payouts are delayed or withheld, sellers naturally ask whether the MSMED Act\'s delayed-payment machinery — Section 15\'s deadline, Section 16\'s compound interest, Section 18\'s Facilitation Council — is available. The answer turns on the structure of the arrangement, and it differs across models.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'cyber-law.php' => 'Cyber Law'],
  'faqs'         => [
    ['Is a marketplace a "buyer" under the MSMED Act?', 'Only if it buys. Section 2(d) defines a buyer as one who buys goods or receives services for consideration. In an inventory or B2B model — where the platform entity or its wholesale arm purchases stock from the seller — it is a buyer, and the Act applies to its invoices. In a pure marketplace model, the platform is an intermediary facilitating sale to the end customer, and the seller\'s MSMED claim against the platform itself must be built, if at all, on the services and payment-collection obligations the platform has contractually assumed.'],
    ['Do payment-cycle clauses in seller agreements override Section 15?', 'No written agreement can stretch the credit period beyond forty-five days from acceptance or deemed acceptance; Section 15 caps it. Where the platform is truly a buyer, a settlement cycle that operates beyond that cap does not insulate it from interest under Section 16.'],
    ['What about chargebacks and deductions from payouts?', 'They function like the debit notes of traditional trade. Their legitimacy depends on the contract and on contemporaneous documentation of the customer claim. In an MSEFC reference or arbitration, bulk, unexplained deductions fare poorly; itemised, policy-backed chargebacks supported by return records fare better.'],
    ['Does an arbitration clause in the seller agreement block the MSEFC?', 'No. The settled position is that Section 18 of the MSMED Act overrides a private arbitration clause at the supplier\'s option: an eligible supplier may make a reference to the Facilitation Council notwithstanding the clause, and the Council\'s process then follows the statute.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan — delayed payment portal', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>First, map the model</h2>
<div class="compare">
<div class="col old"><h3>Inventory / B2B purchase</h3><p>The platform\'s buying entity issues purchase orders and takes title to the goods. It is a buyer under Section 2(d); invoices, acceptance and the forty-five-day cap work exactly as in conventional supply. MSEFC jurisdiction is straightforward.</p></div>
<div class="arrow">→</div>
<div class="col new"><h3>Pure marketplace</h3><p>Title passes from seller to end customer; the platform collects payment and remits settlements after deductions. The platform is not a buyer of the goods — the claim against it is contractual (and, for its collection services, potentially a services claim), and the MSEFC route needs careful framing.</p></div>
</div>
<p>Many arrangements are hybrids — a wholesale arm buys part of the stock while the marketplace lists the rest. The remedy must follow the paper for each stream of invoices, not the brand name on the app.</p>

<h2>Building the delayed-payment case</h2>
<div class="flow">
<div class="fstep"><strong>Udyam first</strong> — registration as a micro or small enterprise on the date of the relevant supply is the gateway to Chapter V; keep the certificate aligned with the entity that raises invoices.</div>
<div class="fstep"><strong>Reconstruct acceptance</strong> — delivery into the platform\'s fulfilment centre, quality-check confirmations and listing go-live dates serve as the acceptance trail; written objections within fifteen days are what prevent deemed acceptance.</div>
<div class="fstep"><strong>Quantify from the ledger</strong> — settlement reports are the account books of this trade. Extract invoice-wise dues, deductions, reserves and the dates money actually landed, and compute Section 16 interest from the appointed day.</div>
<div class="fstep"><strong>Demand, then refer</strong> — a structured demand notice inviting the platform to justify each deduction, followed by a Samadhaan reference where the response fails, puts the seller on the statutory track.</div>
</div>

<h2>The platform\'s defences — and their limits</h2>
<p>Platforms defend on three fronts: that they are not buyers; that deductions are contractual; and that disputes belong to the agreement\'s arbitration clause and chosen courts. The first defence is structural and must be met with the documentation of the actual model. The second is a merits battle fought on the quality of the chargeback records. The third is the weakest where the Act applies: Section 18 operates notwithstanding anything in any other law, and Section 24 gives Sections 15 to 23 overriding effect over inconsistent contracts. Exclusive-jurisdiction and foreign-law clauses do not dislodge a Facilitation Council properly seized at the supplier\'s location.</p>

<div class="check">
<p><strong>Seller\'s file for a marketplace dispute:</strong> Udyam certificate; the seller agreement and every policy incorporated by reference; purchase orders or fulfilment inward records; settlement reports for the disputed period; the deduction and chargeback ledger; correspondence raising disputes; the demand notice; and an interest computation under Sections 15–16. Sellers who treat settlement reports as disposable dashboards, rather than downloading and preserving them monthly, routinely find the evidence gone when the account is suspended.</p>
</div>

<div class="note">
<p>The delayed-payment law was written for invoices and purchase orders, but its logic — small suppliers should not finance large counterparties involuntarily — applies with full force to the platform economy. The seller\'s task is translation: show the adjudicator which entity bought, what was accepted and when, and what remains unpaid. Where that translation is done on documents, the forty-five-day discipline and treble-rate compound interest follow the seller onto the marketplace.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
