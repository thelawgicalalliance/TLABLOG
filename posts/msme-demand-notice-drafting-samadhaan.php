<?php
$P = [
  'slug'         => 'msme-demand-notice-drafting-samadhaan.php',
  'title'        => 'MSME Demand Notice Drafting – Advocate Manish Jha',
  'meta'         => 'Drafting the demand notice before an MSME Samadhaan reference: statutory foundations, interest computation, annexures, and mistakes that weaken the claim.',
  'h1'           => 'The Letter Before the Law: Drafting an MSME Delayed-Payment Demand Notice',
  'crumb'        => 'MSME Demand Notice',
  'kicker'       => 'Practice Explainer · Commercial Law',
  'sub'          => 'A well-drafted demand notice often recovers the money without a reference — and when it does not, it becomes the first exhibit of a disciplined claim.',
  'date'         => '2026-09-16',
  'date_display' => '16 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">The MSMED Act, 2006 does not make a demand notice a precondition to a reference before the Micro and Small Enterprises Facilitation Council — a supplier may file on the Samadhaan portal directly. Yet in practice, the notice is where most recoveries actually happen. Buyers who receive a letter that correctly invokes Sections 15 and 16, computes compound interest at three times the bank rate, and demonstrates that the supplier understands the machinery, frequently pay or settle rather than face a reference in which the interest keeps compounding. Drafting that letter well is therefore a core commercial skill — and drafting it badly can hand the buyer defences he did not have.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'civil-law.php' => 'Civil Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['Is a demand notice mandatory before filing on MSME Samadhaan?', 'No statutory provision requires it; the reference under Section 18 can be filed directly. But a notice serves three purposes: it often produces payment, it creates a record of demand and the buyer\'s response or silence, and it forecloses the buyer\'s later suggestion that the dispute came out of nowhere or that quality objections existed all along.'],
    ['What interest should the notice claim?', 'The statutory interest under Section 16: compound interest with monthly rests at three times the bank rate notified by the Reserve Bank of India, running from the appointed day or the agreed date for each unpaid supply. The notice should state the computation date and that interest continues to accrue — and should not undercut the statute by claiming a lower contractual rate.'],
    ['Should the notice come from the enterprise or from counsel?', 'Either is legally effective. A counsel\'s notice signals seriousness and is common where the relationship has broken down; an enterprise\'s own letter suits ongoing relationships. What matters is content: the statutory foundation, the invoice-wise particulars and the udyam registration details carry the weight, whoever signs.'],
    ['Does the notice affect limitation?', 'A notice by itself does not stop limitation running. What helps limitation is the buyer\'s response: a written acknowledgment of the debt, or part payment, gives a fresh start under the general law of limitation. Notices should therefore be framed to invite engagement with the ledger — and every acknowledgment preserved.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>What the notice is doing, legally and commercially</h2>
<p>A delayed-payment demand notice performs four functions at once. Commercially, it converts a drifting receivable into a priced problem for the buyer: the Section 16 interest, once computed and displayed, is usually a multiple of what the buyer imagined owing. Legally, it crystallises the record — the amount demanded, the invoices identified, the statutory basis invoked. Evidentially, it baits the buyer's defences into the open early: a reply raising quality disputes for the first time, years after deliveries were accepted without protest, is itself an exhibit for the supplier. And procedurally, it lays the foundation for the Samadhaan reference, whose online form is easier to complete well when the notice has already organised the claim.</p>

<h2>The anatomy of a strong notice</h2>
<div class="flow">
<div class="fstep"><strong>Identity and registration.</strong> State the supplier's udyam registration number and category (micro or small), and the date of registration — the foundation of Chapter V rights.</div>
<div class="fstep"><strong>The supplies.</strong> Identify the purchase orders or running account, and annex an invoice-wise schedule: invoice number, date, delivery date, acceptance or deemed acceptance date, due date, and amount outstanding.</div>
<div class="fstep"><strong>The statutory default.</strong> Recite Section 15 — payment due within the agreed period not exceeding forty-five days from acceptance or deemed acceptance — and the buyer's failure against each due date.</div>
<div class="fstep"><strong>The interest.</strong> Set out the Section 16 computation to a stated date, with the rate source (three times the RBI-notified bank rate, compounded monthly) and a statement that accrual continues.</div>
<div class="fstep"><strong>The demand and the road ahead.</strong> Demand principal and interest within a stated period, and state that failing payment the supplier will invoke Section 18 before the Facilitation Council through the MSME Samadhaan portal.</div>
</div>
<div class="check"><p>Annexure set: udyam certificate; invoice schedule with computation; copies of key invoices and delivery challans; ledger extract; prior correspondence and reminders; any acknowledgments, reconciliations or part-payment records.</p></div>

<h2>Mistakes that weaken good claims</h2>
<table class="law">
<tr><th>Drafting error</th><th>Why it hurts</th></tr>
<tr><td>Claiming a lump sum from a single notional date</td><td>The MSMED clock runs supply by supply; a global figure invites attack on the whole computation and signals an undisciplined claim.</td></tr>
<tr><td>Demanding contractual interest at a lower rate</td><td>Section 16 overrides inconsistent agreements; a notice that pleads the weaker rate hands the buyer an argument that the supplier elected against the statute.</td></tr>
<tr><td>Omitting the udyam details or claiming the wrong category</td><td>Chapter V rights belong to registered micro and small enterprises; sloppiness here invites a threshold objection in the reference.</td></tr>
<tr><td>Overstating by including disputed debit notes without explanation</td><td>Every inflated line item becomes the buyer's exhibit; concede genuine adjustments and claim the clean balance with confidence.</td></tr>
<tr><td>Threats beyond the law</td><td>Threats of criminal action or coercive publicity in a routine payment dispute expose the notice to complaints of abuse and add nothing to recovery.</td></tr>
</table>

<h2>Reading the reply — and the silence</h2>
<p>The buyer's response tells the supplier what the reference will look like. An acknowledgment with a payment plan restarts limitation and often merits a short, documented indulgence. A reply raising quality disputes should be tested against the fifteen-day objection window: were the objections made in writing at the time of delivery, or manufactured for the reply? Silence is itself an answer — annexed to the Samadhaan reference, an unanswered statutory notice with a precise computation is quiet but persuasive evidence that the buyer has no defence, only a cash-flow preference. In each scenario, the notice has done its work: the supplier enters the Council proceedings with the record already shaped in his favour.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
