<?php
$P = [
  'slug'         => 'criminal-appeals-bnss-chapter-xxxi-forums.php',
  'title'        => 'Criminal Appeal Forums under BNSS – Advocate Manish Jha',
  'meta'         => 'Which court hears a criminal appeal under the BNSS: Section 415 forums for convictions, the victim\'s appeal under Section 413, petty-case bars and the appeal timeline.',
  'h1'           => 'Who Appeals Where: The Criminal Appeal Map under Chapter XXXI BNSS',
  'crumb'        => 'Criminal Appeal Forums',
  'kicker'       => 'Explainer · Appeals',
  'sub'          => 'A conviction by a Magistrate travels to the Sessions Court; a conviction in a sessions trial travels to the High Court; and the victim now has an appeal of her own — the BNSS forum rules mapped, with their CrPC ancestry.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">The right of appeal in criminal cases is purely statutory — Section 413 of the Bharatiya Nagarik Suraksha Sanhita, 2023 says so in terms: no appeal lies except as provided by the Sanhita or another law. Chapter XXXI then builds the entire appellate architecture: which convictions are appealable, to which forum, by whom, and within what limits. For practitioners transitioning from the CrPC, the structure is familiar but renumbered. This explainer lays out the forum map for accused and victim alike, the petty-case exclusions, and the first procedural steps that decide whether an appellant waits for the appeal in custody or on bail.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'bns-converter.php' => 'BNS–IPC Converter'],
  'faqs'         => [
    ['Where does an appeal against a Magistrate\'s conviction go?', 'To the Court of Session, under Section 415(3) BNSS (the successor to Section 374(3) CrPC) — covering convictions by a Judicial Magistrate of the first or second class, and sentences under Section 364 or orders under Section 401. In Delhi this is the district Sessions Court, and the appeal is commonly assigned to an Additional Sessions Judge.'],
    ['When does a criminal appeal lie directly to the High Court?', 'Under Section 415(2) BNSS, against a conviction in a trial held by a Sessions Judge or an Additional Sessions Judge, and against sentences of imprisonment exceeding seven years passed by any other court. Appeals against acquittal also go to the High Court, but through the leave gateway of Section 419 BNSS.'],
    ['Can the victim appeal without becoming the complainant?', 'Yes. The proviso to Section 413 BNSS carries forward the victim\'s right to appeal against an order acquitting the accused, convicting for a lesser offence, or imposing inadequate compensation. This right is the victim\'s own and does not depend on the State also appealing, though its contours follow the statutory text and the case law developed under the identical CrPC proviso.'],
    ['Which cases cannot be appealed at all?', 'Sections 416 and 417 BNSS bar appeals where the accused pleaded guilty (except as to the legality or extent of sentence where permitted) and in petty cases — for instance, a High Court sentence of imprisonment up to six months or fine up to one thousand rupees, and comparably small sentences of lower courts, subject to the section\'s qualifications. Revision remains the safety valve in non-appealable cases.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court', 'url' => 'https://delhihighcourt.nic.in/'],
    ['label' => 'District Courts of Delhi', 'url' => 'https://delhidistrictcourts.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The forum map</h2>
<table class="law">
  <tr><th>Order challenged</th><th>Appellate forum</th><th>BNSS</th><th>CrPC ancestry</th></tr>
  <tr><td>Conviction by JMFC / JM-II; sentence u/s 364; order u/s 401</td><td>Court of Session</td><td>S. 415(3)</td><td>S. 374(3)</td></tr>
  <tr><td>Conviction in a sessions trial; sentence above 7 years by any other court</td><td>High Court</td><td>S. 415(2)</td><td>S. 374(2)</td></tr>
  <tr><td>Conviction by the High Court in extraordinary original jurisdiction</td><td>Supreme Court</td><td>S. 415(1)</td><td>S. 374(1)</td></tr>
  <tr><td>Acquittal</td><td>High Court, with leave</td><td>S. 419</td><td>S. 378</td></tr>
  <tr><td>Inadequate sentence</td><td>High Court, at the State's instance</td><td>S. 418</td><td>S. 377</td></tr>
  <tr><td>Victim's appeal (acquittal, lesser offence, inadequate compensation)</td><td>The court to which an appeal ordinarily lies against conviction</td><td>Proviso to S. 413</td><td>Proviso to S. 372</td></tr>
</table>

<h2>The victim's appeal: a right with its own life</h2>
<p>The proviso to Section 413 continues one of the most significant reforms of the last two decades: the victim's independent right of appeal against acquittal, conviction for a lesser offence, or inadequate compensation. It belongs to the victim as defined in the Sanhita, operates without the leave requirement that constrains State appeals against acquittal in the corresponding channel, and lies to the court to which an appeal against the order of conviction would ordinarily go. In matrimonial cruelty, cheating and NI Act-adjacent prosecutions — where the State's appetite for appeal is often limited — this proviso is the practical route by which a complainant-victim keeps a case alive.</p>

<h2>What cannot be appealed</h2>
<div class="check">
<ul>
  <li><strong>Guilty pleas (S. 416):</strong> a convict who pleaded guilty cannot appeal against the conviction; where sentence follows the plea in the higher courts, the appeal is confined to the extent or legality of the sentence, per the section's scheme.</li>
  <li><strong>Petty cases (S. 417):</strong> minimal sentences — the section's thresholds by court — are non-appealable unless combined with other punishment, subject to its provisos.</li>
  <li><strong>Safety valves:</strong> where appeal is barred, revision under Sections 438-442 BNSS and, in exceptional cases, the High Court's inherent power under Section 528 remain available within their own limits.</li>
</ul>
</div>

<h2>The first seven days of an appeal</h2>
<div class="flow">
  <div class="fstep"><strong>Certified copy and limitation.</strong> Limitation runs under the Limitation Act, 1963 (thirty to ninety days depending on the appeal), with copy-time excluded; obtain the certified copy immediately on pronouncement.</div>
  <div class="fstep"><strong>Memorandum and record.</strong> The appeal is filed with the judgment copy; grounds should engage the evidence, since first appeals are rehearings on fact and law.</div>
  <div class="fstep"><strong>Suspension of sentence.</strong> An application under Section 430 BNSS (old S. 389 CrPC) for suspension of sentence and bail pending appeal is the appellant's urgent business — covered in detail in a separate explainer on this site.</div>
  <div class="fstep"><strong>Notice and hearing.</strong> The appellate court issues notice, calls the trial record, and hears the appeal under the powers of Section 427 BNSS — which include reversing, altering or remanding, but not enhancing the sentence without an opportunity to show cause.</div>
</div>

<h2>Delhi-specific routing</h2>
<p>In Delhi, appeals from Magistrates' convictions are filed before the Sessions Court of the district concerned and are listed before Additional Sessions Judges by assignment; appeals to the High Court from sessions convictions are filed on the criminal appellate side of the Delhi High Court, where connected applications — suspension of sentence, exemption, early hearing — are moved with the appeal. Practitioners should also remember the e-filing and paper-book conventions of each forum, defects in which remain the most common non-substantive cause of delay in getting an appeal listed.</p>

<div class="note">
<p><strong>Note:</strong> Section numbers are given under the BNSS with their CrPC equivalents for matters instituted before 1 July 2024. General information only, not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
