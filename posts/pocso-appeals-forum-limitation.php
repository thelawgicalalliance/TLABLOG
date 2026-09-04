<?php
$P = [
  'slug'         => 'pocso-appeals-forum-limitation.php',
  'title'        => 'Appeals in POCSO Cases – Advocate Manish Jha',
  'meta'         => 'Appeals against POCSO convictions and acquittals — the forum under BNSS, who may appeal, suspension of sentence pending appeal, and how such appeals are argued.',
  'h1'           => 'Appeals in POCSO Cases: Forum, Parties and Suspension of Sentence',
  'crumb'        => 'POCSO Appeals',
  'kicker'       => 'Practice Guide · 4 September 2026',
  'sub'          => 'POCSO verdicts are appealed like other Sessions verdicts — but minimum sentences, victim rights and evidentiary presumptions give these appeals a distinct texture.',
  'date'         => '2026-09-04',
  'date_display' => '4 September 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Trials under the Protection of Children from Sexual Offences Act, 2012 are conducted by Special Courts of Sessions rank, and their judgments — convictions and acquittals alike — travel to the High Court of Delhi in appeal. The appellate framework now sits in the Bharatiya Nagarik Suraksha Sanhita, 2023, but the distinctive features of POCSO litigation — statutory presumptions, minimum sentences, child witnesses and identity protection — shape how these appeals are filed, argued and decided. This article maps the framework.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'bns-converter.php' => 'BNS Converter'],
  'faqs'         => [
    ['Where does an appeal against a POCSO conviction lie?', 'A person convicted at a trial held by a Special Court of Sessions rank appeals to the High Court under Section 415 of the BNSS (the successor to Section 374 CrPC). The appeal is a full rehearing on facts and law: the High Court re-appreciates the evidence, including the child\'s testimony and the medical and forensic record.'],
    ['Can an acquittal in a POCSO case be appealed?', 'Yes. The State may appeal against acquittal with the leave contemplated by Section 419 BNSS (formerly Section 378 CrPC). The victim also has a statutory right of appeal against an acquittal under the proviso to Section 413 BNSS. Appellate courts, however, interfere with acquittals only where the trial court\'s view is not a possible one on the evidence.'],
    ['Is suspension of sentence pending appeal available in POCSO matters?', 'The power under Section 430 BNSS (formerly Section 389 CrPC) applies, but courts exercise it cautiously in child sexual offence convictions, weighing the gravity, the minimum sentence imposed, the evidence\'s strength and the risk to the victim. Where suspension is granted, conditions protecting the victim — distance, non-contact — are standard.'],
    ['Do identity-protection rules apply in the High Court too?', 'Yes. Section 23 of the POCSO Act and the settled practice of anonymisation continue through the appellate stage: cause titles use initials, and disclosure of the child\'s identity in pleadings or judgments is prohibited. Filings that breach this are objected to by the Registry and can invite consequences.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The appellate map</h2>
<table class="law">
  <tr><th>Verdict</th><th>Who appeals</th><th>Forum and provision</th></tr>
  <tr><td>Conviction by Special Court</td><td>The convict</td><td>High Court — Section 415 BNSS (374 CrPC)</td></tr>
  <tr><td>Acquittal</td><td>The State, with leave</td><td>High Court — Section 419 BNSS (378 CrPC)</td></tr>
  <tr><td>Acquittal or conviction for a lesser offence</td><td>The victim (through guardian in a child's case)</td><td>High Court — proviso to Section 413 BNSS (372 CrPC)</td></tr>
  <tr><td>High Court decision</td><td>Either side</td><td>Supreme Court — Article 136, or certification where available</td></tr>
</table>
<p>Limitation for criminal appeals runs from the date of the judgment, with time for obtaining certified copies excluded; delay can be condoned on sufficient cause, and appeals by convicts in custody receive an understanding reading. The safer course in every case is to apply for the certified copy the day judgment is pronounced.</p>

<h2>What conviction appeals in POCSO cases turn on</h2>
<div class="tiles">
  <div class="tile"><strong>The child's testimony.</strong> A conviction can rest on the sole testimony of the child if it inspires confidence. Appeals therefore dissect consistency across the statements, the deposition, and the cross-examination — and whether the trial court tested reliability or merely invoked the principle.</div>
  <div class="tile"><strong>Age proof.</strong> Applicability of the Act depends on the victim being a child, determined by the documentary hierarchy the law prescribes. Appeals regularly succeed or fail on school records, birth certificates and ossification evidence.</div>
  <div class="tile"><strong>The presumptions.</strong> Sections 29 and 30 POCSO raise presumptions once foundational facts are proved. Appellate argument focuses on whether the foundation was actually laid, and whether the defence rebuttal was properly weighed.</div>
  <div class="tile"><strong>Medical and forensic record.</strong> The presence, absence and handling of medical evidence — and gaps between the FSL report and the allegation — remain fertile appellate ground.</div>
</div>

<h2>Acquittal appeals: the double presumption</h2>
<p>An acquittal reinforces the presumption of innocence, and the appellate court will not substitute its view for a plausible one taken by the trial court. In POCSO acquittal appeals — whether by the State or the victim — the appellant must show that the trial court's reasoning is perverse, ignores material evidence, or misapplies the statutory presumptions, not merely that another view was possible. The victim's appellate right is a significant feature of the modern framework: it means a prosecution failure does not leave the child's family without recourse.</p>

<div class="note"><p>Sentencing appeals have a special constraint in POCSO matters: the Act prescribes minimum sentences for most offences, and courts have no power to go below the statutory minimum on sympathy. Appellate relief on sentence therefore usually means altering the conviction to a different offence, not shaving the minimum.</p></div>

<h2>Interim relief pending appeal</h2>
<p>For a convict, the immediate questions are suspension of sentence and bail under Section 430 BNSS. Courts weigh the length of sentence, the appeal's prospects, custody already undergone and the realistic time to hearing — while treating child sexual offences with particular caution and imposing victim-protective conditions where relief is granted. For the State or victim appealing an acquittal, the mirror-image question — whether the acquitted person should be called upon at all before leave is granted — is governed by the leave stage itself, which filters unmeritorious appeals early.</p>

<h2>Practical checklist for POCSO appeals</h2>
<div class="check">
  <p>Apply for certified copies immediately; diarise limitation from pronouncement.</p>
  <p>Maintain anonymisation throughout — cause title, grounds, annexures.</p>
  <p>Build the appeal on the record: statement-to-deposition comparisons, age documents, presumption foundations.</p>
  <p>For suspension applications, address gravity and victim protection squarely rather than avoiding them.</p>
  <p>Remember the victim's independent appellate remedy when the State does not move.</p>
</div>
<p>This article is general information about appellate practice in POCSO matters before the Delhi courts and is not legal advice in any individual case.</p>
HTML;
include __DIR__ . '/post-layout.php';
