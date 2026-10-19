<?php
$P = [
  'slug'         => 'revision-treated-as-appeal-bnss-442-5.php',
  'title'        => 'Wrong Label, Right Court – Advocate Manish Jha',
  'meta'         => 'Filed a revision where an appeal lay, or vice versa? Section 442(5) BNSS (401(5) CrPC) lets the High Court treat a revision as an appeal in the interests of justice.',
  'h1'           => 'Revision Filed Where an Appeal Lay: The Conversion Power Under Section 442(5) BNSS',
  'crumb'        => 'Revision ⇄ Appeal',
  'kicker'       => 'Explainer · Criminal Appeals & Revisions',
  'sub'          => 'The BNSS bars revision where an appeal lies and is not filed — and then softens the bar: the High Court may treat the revision application as a petition of appeal where the error is honest and justice requires it.',
  'date'         => '2026-10-19',
  'date_display' => '19 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">The remedies map of criminal procedure is unforgiving at the edges. Appeals and revisions run in parallel channels with different scopes, different limitation clocks and sometimes different forums — and a matter filed in the wrong channel can be met with a preliminary objection that outlives the merits. Section 442 of the Bharatiya Nagarik Suraksha Sanhita, 2023 (the successor to Section 401 CrPC) contains both the trap and the escape. Sub-section (4) bars a revision at the instance of a party who could have appealed but did not; sub-section (5) permits the High Court, where it is satisfied the revision was made under an erroneous belief that no appeal lay and that it is necessary in the interests of justice, to treat the revision application as a petition of appeal and deal with it accordingly.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'bns-converter.php' => 'BNS Converter'],
  'faqs'         => [
    ['When does the bar in Section 442(4) BNSS apply?', 'When an appeal lies under the Sanhita against the order complained of, the aggrieved party did not file it, and then seeks revision instead. The bar targets the party who had the appellate remedy — it prevents revision from becoming a device to evade appellate limitation or the discipline of an appeal.'],
    ['What must be shown for conversion under Section 442(5)?', 'Two things on the statutory text: that the revision was filed under the erroneous belief that no appeal lay (an honest mistake about the remedy, not a tactical choice), and that treating it as an appeal is necessary in the interests of justice. Courts also expect the application to have been filed within a time frame that an appeal, with condonation, could absorb.'],
    ['Does the power work in reverse — an appeal treated as a revision?', 'The express conversion in Section 442(5) runs from revision to appeal. But where an appeal turns out to be incompetent, High Courts have the revisional and inherent jurisdiction to examine legality on the same papers in an appropriate case; the cleaner course, however, is always to identify the correct remedy before filing.'],
    ['Which orders commonly cause the confusion?', 'Orders on charge (discharge versus framing), orders in maintenance proceedings, interlocutory orders dressed as final ones, acquittals where special leave or victim appeal routes apply, and sentences passed by Magistrates where the appellate forum is the Sessions Court rather than the High Court. Each sits near a boundary where the right channel depends on the precise order and who is aggrieved.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — Section 442 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the channels are kept separate</h2>
<div class="compare">
  <div class="col old">
    <h3>Appeal</h3>
    <p>A statutory right where conferred, with rehearing on facts and law, powers to re-appreciate evidence, and defined limitation. The appellate court substitutes its judgment where the first court went wrong.</p>
  </div>
  <div class="arrow">vs</div>
  <div class="col new">
    <h3>Revision</h3>
    <p>A supervisory, discretionary jurisdiction to examine the correctness, legality or propriety of findings and orders — not a second appeal on facts. No party can demand it as of right, and it cannot be used to do what an unfiled appeal would have done.</p>
  </div>
</div>

<p>Section 442(4) protects this architecture. Without it, every party who missed an appeal — or preferred to avoid its court fee, its record requirements or its limitation — would refile the same grievance as a revision. The provision closes that detour for the party who had the appeal.</p>

<h2>The conversion power and its logic</h2>
<p>Sub-section (5) recognises that remedies law is genuinely difficult at the margins, and that punishing an honest mislabel with the loss of all scrutiny serves no one. The conditions are tailored to that purpose. The erroneous-belief requirement separates the practitioner who misread a boundary provision from the litigant who sat out the appeal period and tried the side door — conduct, timing and the state of the law on the point all feed that assessment. The interests-of-justice requirement asks whether the underlying grievance deserves appellate examination: a conversion application attached to a hopeless challenge gains nothing from the power. Where both are satisfied, the High Court treats the revision application as a petition of appeal and "deals with the same accordingly" — meaning the matter proceeds with the full scope of an appeal, not the narrower revisional lens.</p>

<div class="note">
  <p><strong>The practical corollary:</strong> plead the alternative at filing. Where the remedy boundary is genuinely debatable, a prayer in the revision petition itself — that in the event an appeal is held to lie, the petition be treated as one under Section 442(5) — converts a potential preliminary dismissal into a case-management direction. The reverse precaution also matters: an appellant facing a maintainability objection should be ready to invite the court to examine the order revisionally on the same record.</p>
</div>

<h2>Getting the channel right the first time</h2>
<div class="flow">
  <div class="fstep"><strong>1. Identify the order precisely.</strong> Conviction, acquittal, sentence, discharge, charge, interim or final — the label in the order sheet, not the litigant's description, controls the remedy.</div>
  <div class="fstep"><strong>2. Identify who is aggrieved.</strong> Accused, State, complainant and victim each have different routes; the victim's appeal under Section 413 BNSS and the State's routes under Sections 418 and 419 changed the pre-2009 landscape the older habits were formed in.</div>
  <div class="fstep"><strong>3. Check the forum ladder.</strong> Some orders travel to the Sessions Court first; a revision to the High Court against such an order invites the further bar on second revisions by the same party.</div>
  <div class="fstep"><strong>4. Mind the interlocutory bar.</strong> Purely interlocutory orders are outside revision altogether; the challenge, if any, runs under Section 528 BNSS on a far stricter standard.</div>
</div>

<h2>Limits worth remembering</h2>
<div class="check">
  <p>Conversion is discretionary, not automatic — a court unconvinced of the honest error simply applies the bar. The power belongs to the High Court's handling of revisions; it does not resurrect appellate limitation independently, so gross delay still needs its own condonation case. And nothing in Section 442 permits the revisional court to convert an acquittal into a conviction — that outer limit on revisional power remains intact whatever the label on the petition.</p>
</div>

<div class="note">
  <p><strong>Note:</strong> this explainer states the statutory framework for general information only. The CrPC equivalents are Sections 401(4) and 401(5). It is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
