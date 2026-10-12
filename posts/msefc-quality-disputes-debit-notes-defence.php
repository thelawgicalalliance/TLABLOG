<?php
$P = [
  'slug'         => 'msefc-quality-disputes-debit-notes-defence.php',
  'title'        => 'Debit Notes In MSEFC Claims – Advocate Manish Jha',
  'meta'         => 'How quality disputes, debit notes and set-off defences play out in MSEFC delayed-payment proceedings under the MSMED Act — for suppliers and buyers alike.',
  'h1'           => 'The Buyer Says the Goods Were Bad: Quality Disputes and Debit Notes Before the MSEFC',
  'crumb'        => 'Commercial & Corporate — MSME',
  'kicker'       => 'Practice Explainer · MSMED Act, 2006 — Sections 2(b), 15–18',
  'sub'          => 'The commonest defence to an MSME delayed-payment claim is not denial of supply but an attack on quality — debit notes, rejection memos and set-off claims. This explainer examines how that battle is actually fought and decided in MSEFC proceedings.',
  'date'         => '2026-10-12',
  'date_display' => '12 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Few MSEFC references are defended with a simple &ldquo;we did not buy.&rdquo; The real battleground is quality: the buyer produces debit notes, rejection memos and complaint emails, asserts deductions or a set-off, and argues that nothing — or far less — is due. The MSMED Act, 2006 anticipated this. Its definition of the appointed day, its deemed-acceptance rule, and the arbitral character of Section 18 proceedings together decide how much weight a late-blooming quality dispute really carries.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What is the deemed-acceptance rule under the MSMED Act?', 'Under the Act&rsquo;s scheme of "appointed day" and "day of acceptance", a buyer who wishes to object to goods or services must do so in writing within fifteen days of delivery. Absent a written objection in that window, the goods are deemed accepted, and the payment clock runs — capped at a maximum of forty-five days from acceptance or deemed acceptance.'],
    ['Can a buyer raise quality objections for the first time before the MSEFC?', 'The buyer can raise any defence, but its weight depends on the paper trail. Objections first articulated after the supplier&rsquo;s demand — unsupported by contemporaneous written complaints within the statutory window — are routinely treated as afterthoughts. Debit notes generated en masse after a Samadhaan filing carry particularly little conviction.'],
    ['Are set-off and counterclaims maintainable in Section 18 proceedings?', 'The Section 18 arbitration stage follows the Arbitration and Conciliation Act, 1996 as if under an arbitration agreement, and buyer counterclaims and set-off defences are entertained and adjudicated in that framework. The buyer does not lose its defences by the supplier&rsquo;s choice of forum — but it must prove them like any claimant.'],
    ['How should a supplier pre-empt a quality defence?', 'By building the record at delivery: signed delivery challans, inspection or quality-check acknowledgements, the absence of any written complaint in the fifteen-day window, subsequent purchase orders or part payments (which are inconsistent with wholesale rejection), and a demand notice that invites the buyer to state its objections — forcing the defence into the open early.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan — delayed payment portal', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why quality is the default defence</h2>
<p>The MSMED Act stacks the substantive odds in the supplier&rsquo;s favour: a statutory payment deadline, compound interest at three times the bank rate under Section 16, and an arbitral process the buyer did not choose. Denying the purchase is usually hopeless against invoices and transport records. What remains is to attack the goods: assert rejection, deduct through debit notes, and claim damages as set-off. Sometimes the complaint is genuine; often it is a response engineered after the demand arrived. The tribunal&rsquo;s task — and counsel&rsquo;s — is to tell the two apart on documents and timing.</p>

<h2>The fifteen-day fulcrum</h2>
<div class="compare">
<div class="col old"><h3>Objection within the window</h3><p>A written complaint within fifteen days of delivery keeps the quality dispute alive, defers the day of acceptance, and gives the buyer a real platform for deductions and counterclaims.</p></div>
<div class="arrow">→</div>
<div class="col new"><h3>Silence, then debit notes</h3><p>No written objection in the window means deemed acceptance. Debit notes raised months later — especially after the Samadhaan reference — read as litigation artefacts, not commercial records.</p></div>
</div>

<h2>How the MSEFC weighs the defence</h2>
<div class="flow">
<div class="fstep"><strong>Timing</strong> — when was the quality objection first put in writing, relative to delivery, to the invoice due date, and to the supplier&rsquo;s demand?</div>
<div class="fstep"><strong>Contemporaneity</strong> — do emails, inspection reports, photographs or return challans from the time of supply support the complaint, or does the file begin at the reply stage?</div>
<div class="fstep"><strong>Conduct</strong> — did the buyer keep ordering, consume the goods, resell them or make part payments? Conduct inconsistent with rejection undercuts the defence.</div>
<div class="fstep"><strong>Quantification</strong> — a set-off must be proved and quantified like a claim: rate of deduction, basis, and causation. Round-figure debit notes without working papers seldom survive.</div>
</div>

<h2>For buyers: running the defence properly</h2>
<p>A buyer with a genuine grievance should behave like a claimant from day one: written rejection within the statutory window, segregation and return (or preservation) of the defective lot, independent inspection where the value justifies it, and debit notes raised contemporaneously with supporting calculations. In the Section 18 arbitration, the defence should be pleaded as a counterclaim where damages exceed deductions — and the buyer should remember that an eventual challenge to an adverse award comes at the price of the seventy-five per cent pre-deposit under Section 19.</p>

<div class="check">
<p><strong>Supplier&rsquo;s evidence bundle for a quality-contested reference:</strong> Udyam registration certificate; purchase orders and amendments; invoices with delivery proof; any quality or inspection sign-offs; the ledger showing part payments; the complete written correspondence, highlighting the absence (or lateness) of quality complaints; and interest computation under Sections 15 and 16 from the appointed day.</p>
</div>

<div class="note">
<p>The structural lesson for both sides is that MSEFC proceedings reward the party whose records were made in the ordinary course of business. The Act&rsquo;s timelines convert documentation habits into legal outcomes: for suppliers, an organised delivery-and-demand trail; for buyers, the discipline of objecting in writing within fifteen days — or accepting that the goods, in law, were accepted.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
