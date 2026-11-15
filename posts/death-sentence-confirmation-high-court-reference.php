<?php
$P = [
  'slug'         => 'death-sentence-confirmation-high-court-reference.php',
  'title'        => 'Why Death Sentences Go to the High Court – Advocate Manish Jha',
  'meta'         => 'No death sentence is executed until the High Court confirms it. The reference procedure under the BNSS — submission, fresh scrutiny, and the two-judge rule.',
  'h1'           => 'The Automatic Second Look: Death Sentence Confirmation References',
  'crumb'        => 'Procedure: Death References',
  'kicker'       => 'Procedure Explainer · Criminal Appeals',
  'sub'          => 'A Sessions Court may pronounce a death sentence, but it cannot give it effect: the record goes to the High Court of its own force, and the sentence is executed only if the High Court, on an independent re-examination, confirms it.',
  'date'         => '2026-11-15',
  'date_display' => '15 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Among the oldest safeguards in Indian criminal procedure is the rule that capital punishment is never the act of a single court. When a Court of Session passes a sentence of death, the proceedings are submitted to the High Court as a matter of course — a &ldquo;death reference&rdquo; — and the sentence cannot be executed unless the High Court confirms it. The Bharatiya Nagarik Suraksha Sanhita, 2023 carries this scheme forward from the CrPC (where it occupied Sections 366 to 371), in its chapter on the submission of death sentences for confirmation, beginning with Section 407.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'bns-converter.php' => 'BNS Converter'],
  'faqs'         => [
    ['Does the reference depend on the convict filing an appeal?', 'No. The reference is automatic: Section 407 BNSS obliges the Court of Session itself to submit the proceedings to the High Court, and the sentence is not executed unless confirmed. The convict almost always appeals as well, and the High Court hears the reference and the appeal together — but even a convict who files nothing gets the High Court&rsquo;s full scrutiny.'],
    ['How wide is the High Court&rsquo;s power on a reference?', 'As wide as the case requires. The confirmation chapter empowers the High Court to examine the entire record, to direct further inquiry or the taking of additional evidence on any point bearing on guilt or innocence, and then to confirm the sentence, pass any other sentence warranted by law, annul the conviction and convict for any offence the Sessions Court could have convicted for, order a new trial on an amended charge, or acquit. The reference is a re-appraisal of the whole case, not a review for error alone.'],
    ['Who must decide a death reference?', 'A Bench of at least two judges. The BNSS, continuing the CrPC rule, requires that confirmation or any new sentence in a reference be made by at least two judges of the High Court where it consists of two or more judges, with the statutory mechanism for resolving a difference of opinion between them.'],
    ['What happens after the High Court decides?', 'If the sentence is confirmed, execution still awaits the appellate and clemency chain: an appeal to the Supreme Court, and mercy jurisdiction under Articles 72 and 161. If the High Court commutes, acquits or orders retrial, that outcome governs, subject to any appeal by the State. In practice, confirmation hearings examine not just guilt but the sentencing question — whether the case truly falls in the rarest category, with the convict&rsquo;s circumstances brought on record.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>How the reference works</h2>
<div class="flow">
  <div class="fstep"><strong>Sentence below, submission up.</strong> The Court of Session pronounces the death sentence and, under Section 407 BNSS, submits the proceedings to the High Court. The warrant does not issue on the trial court&rsquo;s judgment; the sentence is inchoate until confirmation.</div>
  <div class="fstep"><strong>The record is reopened, not rubber-stamped.</strong> The High Court examines the evidence for itself. If any point bearing on guilt or innocence needs it, the court can direct further inquiry or take additional evidence — itself, or through the Sessions Court.</div>
  <div class="fstep"><strong>Every outcome remains open.</strong> Confirmation; a different sentence; conviction for a different offence; a new trial; or acquittal. The reference court&rsquo;s menu is the full menu.</div>
  <div class="fstep"><strong>Two judges, minimum.</strong> The decision must be of at least two judges, with the statute providing for the course to follow when the Bench divides.</div>
</div>

<h2>Reference and appeal, heard together</h2>
<p>In practice the convict&rsquo;s appeal and the State&rsquo;s reference travel as one case. The pairing matters for strategy on both sides. For the defence, the reference guarantees plenary scrutiny even where the appeal&rsquo;s grounds are narrow — the High Court must satisfy itself independently that both conviction and sentence are sustainable. For the prosecution, the reference is not a formality to be defended lightly: confirmation requires the court&rsquo;s affirmative satisfaction, and the sentencing record — aggravating and mitigating circumstances, the convict&rsquo;s background, conduct in custody, the possibility of reform — must be complete. Modern confirmation practice increasingly requires sentencing material to be gathered and placed before the court, including reports bearing on the convict&rsquo;s psychological state and jail conduct, so that the choice between death and life is made on evidence rather than impression.</p>

<h2>The wider appellate map</h2>
<table class="law">
  <tr><th>Stage</th><th>Forum and instrument</th></tr>
  <tr><td>Trial and sentence</td><td>Court of Session — death sentence subject to confirmation.</td></tr>
  <tr><td>Confirmation + appeal</td><td>High Court — reference under the BNSS confirmation chapter, heard with the convict&rsquo;s appeal; Bench of at least two judges.</td></tr>
  <tr><td>Further appeal</td><td>Supreme Court — including the statutory appeal where the High Court reverses an acquittal and imposes death, and Article 136 jurisdiction otherwise.</td></tr>
  <tr><td>Clemency</td><td>President (Article 72) and Governor (Article 161) — mercy jurisdiction after the judicial chain concludes.</td></tr>
</table>

<h2>Points of practice</h2>
<div class="check">
  <p>For defence teams, the reference stage is the moment to repair the trial record: applications for additional evidence on points bearing on guilt, and comprehensive mitigation material on sentence, belong here — waiting for the Supreme Court is waiting too long.</p>
  <p>The convict&rsquo;s presence and representation must be real: confirmation hearings proceed on full arguments, and amicus appointments are made where private counsel is absent, but a prepared defence is not a substitute to be hoped for from the court&rsquo;s own motion.</p>
  <p>For the State, the file submitted under Section 407 must be complete — exhibits, depositions, and the sentencing material — because gaps at the reference stage translate into remands and delay in a jurisdiction where delay itself becomes a ground.</p>
</div>
<div class="note">This explainer summarises the confirmation scheme for general information, using the BNSS framework with its CrPC lineage. It is not advice in any pending matter; capital cases are intensely fact-specific and demand representation at every stage.</div>
HTML;
include __DIR__ . '/post-layout.php';
