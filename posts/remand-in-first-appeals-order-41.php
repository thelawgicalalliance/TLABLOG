<?php
$P = [
  'slug'         => 'remand-in-first-appeals-order-41.php',
  'title'        => 'Remand in First Appeals: The Narrow Gate – Advocate Manish Jha',
  'meta'         => 'When can a first appellate court order a retrial? Order XLI Rules 23, 23A and 25 CPC, the preference for final decision, and how to argue both sides.',
  'h1'           => 'Order XLI Rules 23 to 25: When a First Appeal Ends in a Retrial',
  'crumb'        => 'Civil Appeals: Remand',
  'kicker'       => 'Civil Practice · 24 November 2026',
  'sub'          => 'Remand restarts litigation that has already run for years, so the CPC treats it as the exception: the appellate court must decide finally where the record permits, and may remit only through three defined doors.',
  'date'         => '2026-11-24',
  'date_display' => '24 November 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">A first appeal under Section 96 CPC is a rehearing on facts and law — which is precisely why the Code limits the appellate court&rsquo;s power to send the suit back. Order XLI arms it with every tool needed to finish the case: it can reappreciate evidence (Rule 24), frame and refer issues while retaining the appeal (Rule 25), and take additional evidence in defined circumstances (Rule 27). Remand under Rules 23 and 23A is what remains when those tools cannot repair the trial that was actually held.</p>',
  'related'      => ['civil-law.php' => 'Civil Litigation', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What is the difference between Rule 23 and Rule 23A?', 'Rule 23 applies where the trial court disposed of the suit on a preliminary point — limitation, maintainability, res judicata — and the appellate court reverses that finding: the suit goes back for trial on the remaining issues. Rule 23A, added in 1976, covers reversal of a decree passed otherwise than on a preliminary point, but only where a retrial is considered necessary.'],
    ['Can an appellate court remand simply because the trial judgment is poorly reasoned?', 'No. If the evidence on record is sufficient, Rule 24 obliges the appellate court to re-appreciate it and pronounce final judgment itself. Remand for a fuller or better judgment, where the parties led their evidence, substitutes delay for adjudication and is routinely set aside.'],
    ['What is the Rule 25 alternative?', 'Where the trial court omitted to frame or try an issue essential to the decision, the appellate court frames it and refers it for trial, directing return of the evidence and findings within a fixed time — while keeping the appeal on its own file. The suit is not reopened wholesale; only the gap is filled.'],
    ['Is an order of remand appealable?', 'Yes. Order XLIII Rule 1(u) CPC provides an appeal against an order of remand under Rule 23 or 23A, and in Delhi practice such appeals regularly test whether the appellate court should instead have decided the matter finally.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — Order XLI — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The three doors, and what lies behind each</h2>
<table class="law">
  <tr><th>Provision</th><th>Trigger</th><th>Consequence</th></tr>
  <tr><td>Rule 23</td><td>Suit decided below on a preliminary point; that point reversed in appeal</td><td>Full remand: the suit revives for trial on the issues never decided</td></tr>
  <tr><td>Rule 23A</td><td>Decree on merits reversed, and a retrial is considered necessary — the trial itself was vitiated (no issues, no real opportunity, fundamentally flawed procedure)</td><td>Remand on the same terms as Rule 23</td></tr>
  <tr><td>Rule 25</td><td>An essential issue was not framed or tried, but the rest of the trial stands</td><td>Limited reference: the issue goes down for findings; the appeal stays with the appellate court</td></tr>
</table>
<p>Alongside these sit the anti-remand provisions. Rule 24 directs the appellate court to resettle issues if need be and <em>finally determine</em> the suit where the evidence on record is sufficient. Rule 26 makes the referred findings under Rule 25 open to challenge by memorandum of objections, avoiding a second appeal cycle. The design is coherent: every curable defect is cured within the appeal; only an incurable trial goes back.</p>

<h2>What makes a retrial &ldquo;necessary&rdquo;</h2>
<p>Rule 23A&rsquo;s necessity standard is where most remand battles are fought. Retrial is necessary when the first trial never really happened as law requires: issues were not framed at all and the parties went to evidence blind; a party was denied the opportunity to lead evidence on a decisive question; the trial proceeded on an admitted misjoinder of the real controversy; or the decree rests on material taken without the parties&rsquo; knowledge. Retrial is not necessary merely because the judgment is thin, the appreciation of evidence debatable, or one more document would have helped — the first is cured by appellate reasoning under Rule 24, the second is the appeal&rsquo;s ordinary work, and the third is governed by the discipline of Rule 27 on additional evidence.</p>

<h2>Arguing for and against remand</h2>
<div class="compare">
  <div class="col old">
    <h3>Seeking remand</h3>
    <p>Identify the structural defect, not the wrong result: the unframed issue, the shut-out evidence, the preliminary-point disposal. Show that the defect infects the whole decree, that the record as it stands cannot support a final decision either way, and that Rule 25&rsquo;s narrower reference cannot fill the gap.</p>
  </div>
  <div class="arrow">&rarr;</div>
  <div class="col new">
    <h3>Resisting remand</h3>
    <p>Invoke Rule 24: the parties led their evidence, the record is complete, and the appellate court is as well placed as the trial court to decide. Offer Rule 25 as the proportionate alternative for any genuinely missing issue, and press the age of the litigation — remand hands the successful party&rsquo;s decree back to the queue.</p>
  </div>
</div>

<h2>Consequential points practitioners overlook</h2>
<p>Three details repay attention. First, on remand the suit returns to the trial court&rsquo;s file subject to the appellate court&rsquo;s directions; evidence already recorded remains evidence unless the remand order says otherwise, so the scope of the retrial should be negotiated into the order itself. Second, court fee paid on the appeal memorandum is refundable where the remand is under Rule 23, a small but real client service. Third, a remand order is itself appealable under Order XLIII Rule 1(u) — which means a party aggrieved by an unnecessary remand must appeal then, not after the second round concludes, or face the bar of Section 105(2) CPC against questioning it later.</p>
<div class="note">This explainer states the general civil procedure position for information; the availability of remand in a given appeal turns on the trial record and the forum&rsquo;s appellate practice.</div>
HTML;
include __DIR__ . '/post-layout.php';
