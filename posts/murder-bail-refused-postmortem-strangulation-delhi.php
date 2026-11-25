<?php
$P = [
  'slug'         => 'murder-bail-refused-postmortem-strangulation-delhi.php',
  'title'        => 'Post-Mortem Defeats Bail Theory in Murder Case – Advocate Manish Jha',
  'meta'         => 'Delhi High Court refuses bail to a wife accused of strangling her husband: the post-mortem answered the alcohol-death theory and call records cut both ways.',
  'h1'           => 'When the Post-Mortem Answers the Defence: Murder Bail Refused',
  'crumb'        => 'Murder Bail Refused',
  'kicker'       => 'Delhi High Court · 23 November 2026',
  'sub'          => 'A defence theory of death by alcohol could not survive medical findings of asphyxia by neck compression — and the call records relied on as alibi were read as evidence of motive.',
  'date'         => '2026-11-25',
  'date_display' => '25 November 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">In <em>Hema v. State of NCT of Delhi</em>, BAIL APPLN. 3723/2026, decided on 23 November 2026, the Delhi High Court (Mr. Justice Girish Kathpalia) dismissed a regular bail application in a case under Section 302 of the Indian Penal Code arising from FIR No. 718/2022, Police Station Mandawali. The applicant, accused of strangling her husband, had advanced two arguments — that the death was caused by alcohol, and that her call records with a co-accused showed she could not have committed the act. The Court rejected both, and the order shows how medical evidence and electronic records are weighed at the bail stage when they point in opposite directions to the defence theory.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What was the allegation against the applicant?', 'The prosecution alleged that the applicant strangled her husband, in the background of an affair with a co-accused. The FIR was registered in 2022 at Police Station Mandawali under Section 302 IPC, the offence of murder.'],
    ['What was the defence argument for bail?', 'Two-fold: that the deceased died of alcohol consumption rather than violence, and that the applicant&rsquo;s call records with the co-accused showed she could not have been committing the act at the relevant time.'],
    ['Why did the Court refuse bail?', 'The post-mortem recorded asphyxia caused by compression of the neck along with a liver injury, which answered the alcohol theory. The son&rsquo;s testimony supported the prosecution case. And the call records with the co-accused, far from assisting the applicant, were treated as material supporting the alleged motive.'],
    ['Does the refusal decide the trial?', 'No. The Court added the standard rider that the trial court must form its own independent view on the evidence. Observations at the bail stage are tentative assessments of prima facie material and do not bind the trial.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Delhi High Court (BAIL APPLN. 3723/2026, 23 November 2026)', 'url' => 'https://delhihighcourt.nic.in/app/showFileJudgment/60823112026BA37232026_172511.pdf'],
  ],
];
$BODY = <<<'HTML'
<h2>The rival narratives</h2>
<p>The prosecution&rsquo;s case was stark: the applicant, in the background of a relationship with a co-accused, strangled her husband. The defence offered an alternative account of the death itself — the deceased, it was argued, died of alcohol, not violence — and buttressed it with the applicant&rsquo;s call detail records, said to show her engaged on calls with the co-accused in a way inconsistent with her committing the physical act alleged.</p>

<h2>How the Court tested each limb</h2>
<div class="compare">
  <div class="col old">
    <h3>Defence theory</h3>
    <p>Death by alcohol consumption; call records as a timeline shield showing the applicant could not have strangled the deceased.</p>
  </div>
  <div class="arrow">&rarr;</div>
  <div class="col new">
    <h3>The Court&rsquo;s reading</h3>
    <p>The post-mortem recorded asphyxia from compression of the neck, with an associated liver injury — findings that do not sit with an alcohol death. The call records, showing contact with the co-accused, supported the alleged motive rather than negating participation.</p>
  </div>
</div>
<p>The Court also noted the testimony of the couple&rsquo;s son, which supported the prosecution version. With the medical evidence, the ocular support and the motive material aligned, no case for regular bail was made out. The application was dismissed with the customary rider that the trial court must decide the case independently, uninfluenced by the observations made at the bail stage.</p>

<h2>The larger point: bail arguments must survive the record</h2>
<p>Bail courts do not conduct mini-trials, but they do read the record — and a defence theory that is contradicted by the post-mortem is worse than no theory at all, because it invites the court to measure the defence against the medical findings and find it wanting. The same is true of electronic records. Call detail records are a double-edged instrument: tendered to establish an alibi or physical impossibility, they simultaneously establish association, frequency and timing of contact, which in a case built on an alleged relationship between accused persons is the very material of motive.</p>
<table class="law">
  <tr><th>Material</th><th>Offered to show</th><th>What it showed the Court</th></tr>
  <tr><td>Post-mortem report</td><td>(Defence) death by alcohol</td><td>Asphyxia by neck compression; liver injury — violence, not intoxication</td></tr>
  <tr><td>Call detail records</td><td>(Defence) applicant occupied on calls, could not have committed the act</td><td>Sustained contact with the co-accused — supporting motive</td></tr>
  <tr><td>Son&rsquo;s testimony</td><td>&mdash;</td><td>Support for the prosecution version</td></tr>
</table>

<h2>Practice notes</h2>
<div class="check">
  <p><strong>Read the post-mortem first.</strong> In homicide bail applications, the cause-of-death findings set the boundaries of any alternative-death theory. A theory the autopsy contradicts should not be led at all.</p>
  <p><strong>Model the CDRs both ways.</strong> Before relying on call records, work out what the prosecution will do with the same data. If the records prove association with a co-accused, they may cost more than they earn.</p>
  <p><strong>Family witnesses carry weight early.</strong> At the bail stage, the statement of a family member present in the household is treated as significant prima facie material, whatever its eventual fate in cross-examination.</p>
</div>
<div class="note">This note summarises a judgment of the Delhi High Court for general information. Bail outcomes turn on the specific record of each case; nothing here is advice on any particular matter.</div>
HTML;
include __DIR__ . '/post-layout.php';
