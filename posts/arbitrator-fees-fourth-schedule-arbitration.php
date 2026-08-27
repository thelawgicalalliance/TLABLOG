<?php
$P = [
  'slug'         => 'arbitrator-fees-fourth-schedule-arbitration.php',
  'title'        => 'Arbitrator Fees: Fourth Schedule – Advocate Manish Jha',
  'meta'         => 'Who fixes an arbitrator\'s fees, what the Fourth Schedule model provides, and how parties can control arbitration costs through agreement and institutional rules.',
  'h1'           => 'Arbitrator\'s Fees in Domestic Arbitration: The Fourth Schedule and the Party\'s Toolkit',
  'crumb'        => 'Arbitrator Fees',
  'kicker'       => 'Practice Explainer · Arbitration',
  'sub'          => 'Fee disputes sour arbitrations faster than merits disputes. The Arbitration and Conciliation Act\'s Fourth Schedule supplies a model scale tied to the sum in dispute — and party agreement or institutional rules remain the cleanest control.',
  'date'         => '2026-08-27',
  'date_display' => '27 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">The economics of arbitration are decided at three moments: when the clause is drafted, when the tribunal is constituted, and when fees are fixed. The Arbitration and Conciliation Act, 1996 addresses the last through the Fourth Schedule — a model scale of arbitrators\' fees graded to the sum in dispute — and through the costs regime of Section 31(8) read with Section 31A. Yet parties are repeatedly surprised mid-arbitration by fee escalations, per-sitting charges and cancellation fees. This explainer maps who fixes the fee, what the Schedule provides, and the practical instruments parties have to keep arbitration costs proportionate.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Who decides the arbitrator\'s fee?', 'In order of primacy: the parties\' agreement (including incorporated institutional rules, which the statute expressly protects); failing that, arrangements settled with the tribunal at the outset; and, where a court appoints an arbitrator in an ad hoc arbitration, the fee determined with reference to the Fourth Schedule\'s model rates. The one thing best avoided is leaving the question open until the arbitration is under way.'],
    ['How does the Fourth Schedule structure fees?', 'As a slab scale on the "sum in dispute": a base fee plus a percentage of the amount above each threshold, rising through slabs and tapering at the top — with the highest slab capping the model fee, and a twenty-five per cent addition where a sole arbitrator (rather than a panel member) hears the case. The Schedule is a model: it applies of its own force only where the statutory scheme or rules framed under it make it applicable, but courts and parties treat it as the benchmark of reasonableness in ad hoc references.'],
    ['Can an arbitrator unilaterally raise the fee mid-proceeding?', 'Unilateral revision is improper: fees rest on consensus or the governing scale, and a tribunal cannot dictate its own enhanced fee over a party\'s objection. The practical remedy for a party facing escalation is to object on record, propose the Schedule or the agreed terms as the measure, and, in extremis, raise the matter in the mandate-and-appointment framework of the Act. Institutional arbitration avoids the problem wholesale, since the institution\'s published scale governs.'],
    ['Are arbitrator fees recoverable as costs?', 'Yes. Under Sections 31(8) and 31A, costs — which include arbitrators\' fees — follow the event as the general rule: the unsuccessful party ordinarily pays, subject to the tribunal\'s reasoned order otherwise, and agreements to share costs regardless of outcome are valid only if made after the dispute arose. Fee outlay is therefore part of claim strategy, not just overhead.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 (Sections 11, 31(8), 31A and Fourth Schedule) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi International Arbitration Centre — Delhi High Court', 'url' => 'https://dhcdiac.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The three fee regimes in practice</h2>

<div class="tiles">
  <div class="tile"><h3>Institutional</h3><p>The institution\'s schedule governs — published slabs, administrative fees, and rules on deposits and cancellation. Predictability is the chief virtue: parties can price the arbitration before starting it, and fee disputes go to the institution, not the tribunal itself.</p></div>
  <div class="tile"><h3>Ad hoc with agreement</h3><p>The clause or a post-dispute protocol fixes the fee: lump sum, per-slab by reference to the Fourth Schedule, or per-hearing with a cap. Whatever the model, it binds because it was agreed — the drafting moment is the control moment.</p></div>
  <div class="tile"><h3>Ad hoc without agreement</h3><p>The exposed case. Fees are settled at the preliminary meeting or fixed with reference to the Fourth Schedule where the appointment flows from the court\'s process. Ambiguity here produces the classic mid-stream disputes — revisions, per-sitting additions, and reading-fee claims.</p></div>
</div>

<h2>Reading the Fourth Schedule correctly</h2>

<p>Three features of the model scale reward attention. First, it is keyed to the <em>sum in dispute</em> — so how claims and counterclaims are quantified materially affects the fee base, and inflation of claims carries a fee cost as well as a court-fee cost. Second, the scale tapers: the marginal percentage falls as slabs rise, and the top slab operates as a ceiling on the model fee, so the Schedule is proportionate by design. Third, the sole-arbitrator addition (twenty-five per cent) reflects that one person carries the whole burden — a factor to weigh when choosing between a sole arbitrator and a three-member tribunal, where three fees, even at lower individual burden, usually exceed one.</p>

<h2>Cost-control instruments parties actually have</h2>

<div class="check">
  <ul>
    <li><strong>Draft the clause with a fee anchor:</strong> incorporate an institution\'s rules, or state that fees shall be as per the Fourth Schedule — the single sentence that prevents most disputes.</li>
    <li><strong>Settle terms at the first meeting:</strong> fee per arbitrator, treatment of counterclaims, hearing-fee structure, cancellation terms, and the point at which tranches fall due — recorded in the first procedural order.</li>
    <li><strong>Use deposits consciously:</strong> Section 38 deposits are shared equally in the default scheme; track them against the agreed scale and object contemporaneously to unexplained calls.</li>
    <li><strong>Choose tribunal size by proportionality:</strong> a sole arbitrator under a clear fee anchor is often the economically rational choice for mid-value disputes.</li>
    <li><strong>Remember Section 31A at the end:</strong> a reasoned costs award can restore fee outlay to the successful party — plead and prove costs like any other claim.</li>
  </ul>
</div>

<h2>Delhi\'s institutional option</h2>

<p>For parties arbitrating in Delhi, the Delhi International Arbitration Centre — established under the aegis of the High Court — offers the institutional solution with a published fee schedule, administrative supervision, and hearing infrastructure. For court-appointed arbitrations under Section 11, fee discipline by reference to the Fourth Schedule\'s model has become standard expectation, and parties are well within their rights to raise the Schedule as the measure of reasonableness at the tribunal\'s first sitting.</p>

<div class="note">
<p>Nothing in fee management is adversarial towards arbitrators — clear terms protect the tribunal\'s dignity as much as the parties\' budgets. The failure mode is silence: an arbitration that begins without a fee understanding has scheduled its own first dispute.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
