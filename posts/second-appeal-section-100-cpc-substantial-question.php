<?php
$P = [
  'slug'         => 'second-appeal-section-100-cpc-substantial-question.php',
  'title'        => 'Second Appeals: The Section 100 Filter – Advocate Manish Jha',
  'meta'         => 'Regular Second Appeals lie only on a substantial question of law under Section 100 CPC. What qualifies, how the question is framed, and how RSAs are argued.',
  'h1'           => 'Not a Third Round on Facts: The Substantial Question of Law in Second Appeals',
  'crumb'        => 'Second Appeals',
  'kicker'       => 'Explainer · Civil Appeals',
  'sub'          => 'Two courts have weighed the evidence; Section 100 CPC lets the High Court intervene only where a substantial question of law arises — and the appeal lives or dies by the questions framed at admission. What the filter means, where perversity fits, and how to draft the memorandum.',
  'date'         => '2026-11-03',
  'date_display' => '3 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">The Regular Second Appeal is the most misunderstood tier of the civil hierarchy. Litigants arrive expecting a fresh look at the evidence; Section 100 of the Code of Civil Procedure, 1908 promises nothing of the kind. Since the 1976 amendment, a second appeal lies to the High Court only if the case involves a <em>substantial question of law</em>; the memorandum must state it precisely, the court must formulate it at admission, and the hearing is confined to the question formulated — subject to the court\'s power, for reasons recorded, to hear the appeal on another substantial question. Concurrent findings of fact bind the High Court; the craft of second-appeal practice is knowing when a finding of fact conceals an error of law.</p>',
  'related'      => ['civil-law.php' => 'Civil Litigation', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What makes a question of law "substantial"?', 'Broadly: the question must be debatable, not settled by the Supreme Court or self-evident from the statute, and its answer must materially affect the outcome between the parties. It need not be of general public importance — substantiality as between the parties suffices — but it must be a question of law, not a complaint about the weighing of evidence.'],
    ['Can a finding of fact ever be challenged in a second appeal?', 'Only through a legal doorway: the finding rests on no evidence, ignores material or admissible evidence, relies on inadmissible evidence, misconstrues a document of title whose interpretation is itself law, or is so perverse that no reasonable court could reach it. Perversity is a narrow gate, and reciting the word is not the same as passing through it.'],
    ['What happens if the High Court decides without framing a question?', 'The judgment is vulnerable. The formulation of a substantial question is a jurisdictional precondition under Section 100(4); deciding a second appeal without framing one, or outside the framed question without recording reasons under the proviso to Section 100(5), is itself an error the Supreme Court routinely corrects.'],
    ['Is there a second appeal in Delhi for every civil case?', 'No. Apart from the Section 100 filter, Section 102 CPC bars second appeals where the subject matter of the original suit is for recovery of money not exceeding twenty-five thousand rupees, and special statutes — including the Commercial Courts Act for commercial disputes — frequently exclude or reroute the remedy. The forum and maintainability check comes before the merits.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 (Section 100) — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191'],
  ],
];
$BODY = <<<'HTML'
<h2>The architecture of the appeal</h2>
<div class="flow">
  <div class="fstep"><strong>1. The memorandum.</strong> Section 100(3): the memorandum must precisely state the substantial question of law involved. Vague grounds — "the judgment is against the weight of evidence" — concede the maintainability battle at the threshold.</div>
  <div class="fstep"><strong>2. Admission and formulation.</strong> Section 100(4): if satisfied, the High Court formulates the question. This formulation is the charter of the appeal; everything afterwards is argued within it.</div>
  <div class="fstep"><strong>3. The hearing.</strong> Section 100(5): the respondent may argue that the case does not involve the formulated question; the court may, for reasons recorded, hear on any other substantial question it formulates.</div>
  <div class="fstep"><strong>4. Disposal.</strong> Section 103 permits the High Court to determine issues of fact itself in defined situations — where evidence is on record and the courts below wrongly omitted or were legally wrong in deciding them.</div>
</div>

<h2>What qualifies — and what does not</h2>
<table class="law">
  <tr><th>Usually substantial</th><th>Usually not</th></tr>
  <tr><td>Construction of a deed, will or statute decisive of rights</td><td>Preference of one witness over another</td></tr>
  <tr><td>Burden of proof wrongly placed and outcome-determinative</td><td>Quantum of damages within a lawful range</td></tr>
  <tr><td>Findings recorded ignoring a registered document or admission</td><td>Re-appreciation of the same oral evidence</td></tr>
  <tr><td>Decree outside the pleadings; relief barred by a statute</td><td>"Perversity" asserted without identifying ignored evidence</td></tr>
  <tr><td>Concurrent findings vitiated by inadmissible evidence</td><td>New factual case never pleaded below</td></tr>
</table>

<h2>Perversity: the narrow gate</h2>
<p>Most second appeals that deserve to succeed travel through the perversity doorway, and most that fail die there too. The discipline is specificity: a perversity ground must identify the exhibit ignored, the admission overlooked, or the inadmissible material relied upon, and show that the finding cannot stand without it. The High Court is not asked to prefer a different view — it is shown that the view taken was not legally open. Framing the proposed question in that form ("whether the finding of adverse possession, recorded without adverting to the registered lease deed Ex.P-4, is vitiated in law") does more for admission than three pages of narrative.</p>

<h2>Strategy on both sides</h2>
<div class="check">
<ul>
  <li><strong>For appellants:</strong> draft the substantial questions before drafting anything else; the grounds should exist to support the questions, not the reverse. Annex the key documents the courts below allegedly ignored.</li>
  <li><strong>For respondents:</strong> the first line of defence is Section 100(5) — argue that the formulated question does not truly arise or is concluded by authority; the second is that the question, even answered for the appellant, does not change the decree.</li>
  <li><strong>Interim protection:</strong> admission of an RSA does not stay the decree; a separate, reasoned application is needed, and in possession matters it should be moved with the appeal itself.</li>
  <li><strong>Mind the limitation and the forum:</strong> ninety days from the decree, with condonation needing real explanation; and check whether a special statute has displaced the remedy altogether.</li>
</ul>
</div>

<div class="note">
<p><strong>Practice note:</strong> A second appeal argued as a facts appeal fails twice — on the merits and on costs. The most persuasive RSA briefs are short: the question, the two or three documents that answer it, and the authority that makes it substantial.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
