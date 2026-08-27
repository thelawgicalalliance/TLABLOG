<?php
$P = [
  'slug'         => 'article-136-concurrent-findings-interference.php',
  'title'        => 'SLPs and Concurrent Findings – Advocate Manish Jha',
  'meta'         => 'The Supreme Court rarely disturbs concurrent findings of fact under Article 136. When it will interfere, and how SLPs against concurrent decrees are framed.',
  'h1'           => 'Concurrent Findings of Fact: The Steepest Hill an SLP Can Climb',
  'crumb'        => 'SLPs & Concurrent Findings',
  'kicker'       => 'Practice Explainer · Supreme Court',
  'sub'          => 'When two courts have agreed on the facts, Article 136 does not offer a third trial. The narrow recognised grounds — perversity, ignored evidence, misapplied burden, legal misdirection — are the only realistic gates.',
  'date'         => '2026-08-27',
  'date_display' => '27 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">The most common advice a Supreme Court practitioner gives is also the least welcome: two courts have found the facts against you, and the Supreme Court is not a third court of facts. Article 136 of the Constitution confers a discretionary power to grant special leave against any judgment or order, but the Court\'s settled self-discipline is that concurrent findings of fact — trial court and first appellate court, or High Court affirming below — are not reopened except on recognised, narrow grounds. Framing an SLP against concurrent findings is therefore an exercise in locating a true legal fault line, not in re-arguing the evidence more eloquently.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Litigation', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['What counts as a "concurrent finding of fact"?', 'A finding on a factual issue — possession, execution of a document, the credibility of a witness, the occurrence of an event — reached by the trial court and affirmed by the appellate court on its own consideration. Affirmance need not be verbatim; agreement in substance is enough. Pure questions of law, and mixed questions where the legal component predominates, stand outside the doctrine.'],
    ['When will the Supreme Court nonetheless interfere?', 'On grounds the Court itself has repeatedly catalogued: findings that are perverse — based on no evidence or ones no reasonable court could reach; material evidence ignored or inadmissible evidence relied upon; the burden of proof misplaced; findings vitiated by a wrong legal test; or violations of natural justice and jurisdictional error. The SLP must identify which of these applies and show it from the record.'],
    ['Does the doctrine apply in criminal appeals too?', 'Yes, with equal force — concurrent findings of guilt are not re-examined as a matter of course. But the liberty dimension matters: where the conviction rests on evidence that is legally infirm, or courts below overlooked material creating reasonable doubt, the Supreme Court has intervened even against concurrent convictions. The gate is the same; the stakes make the Court\'s scrutiny more anxious.'],
    ['How should an SLP against concurrent findings be drafted?', 'Lead with the legal infirmity, not the facts: the question of law presented, the specific finding challenged, and the precise defect (perversity, ignored evidence, wrong test) with record references. Reproduce the key passages of both judgments; a petition that shows the two courts\' reasoning and puts its finger on the flaw survives scrutiny better than a narrative retelling of the case.'],
  ],
  'sources'      => [
    ['label' => 'Constitution of India, Article 136 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Supreme Court of India — case status and judgments', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the Court restrains itself</h2>

<p>Article 136 is deliberately unfenced: "special leave to appeal from any judgment, decree, determination, sentence or order in any cause or matter". The fences are judge-made, and the concurrent-findings discipline is the oldest of them. The reasons are structural. The trial court saw the witnesses; the first appeal re-weighed the record in full; a second re-weighing adds error-risk rather than accuracy. The Supreme Court\'s function under Article 136 is corrective of grave injustice and clarificatory of law — not a general third tier. Petitions that ignore this and re-argue facts are dismissed in limine, often with the single line that no question of law arises.</p>

<h2>The recognised gates, in working order</h2>

<div class="tiles">
  <div class="tile"><h3>Perversity</h3><p>A finding based on no evidence, on conjecture, or one that no reasonable tribunal could reach on the record. The petition must demonstrate the void — cite the issue, show the evidentiary record, and show the finding floating free of it.</p></div>
  <div class="tile"><h3>Ignored or inadmissible material</h3><p>Material evidence overlooked (a registered document, an admission, an FSL report) or reliance on legally inadmissible material. The defect must be material — capable of changing the outcome, not merely present.</p></div>
  <div class="tile"><h3>Wrong legal test</h3><p>Facts found through a misdirected lens: burden of proof misplaced, a presumption misapplied, a statutory standard diluted. This is the most durable gate, because it converts a factual grievance into a genuine question of law.</p></div>
  <div class="tile"><h3>Process failures</h3><p>Natural justice violations, jurisdictional error, findings beyond pleadings — defects in how the concurrence was produced rather than in what it concluded.</p></div>
</div>

<h2>Framing strategy at the SLP stage</h2>

<p>Three practical disciplines follow. First, the questions of law must be real questions of law: an experienced bench identifies re-dressed factual challenges instantly, and credibility once lost infects the genuinely good ground in the petition. Second, the record must do the work: annex the pleadings, the key exhibits and both judgments, and pin every assertion of perversity or overlooked evidence to a page. Third, calibrate the prayer: where the infirmity affects one finding rather than the whole decree, a targeted challenge — coupled, where apt, with a remand prayer — is more credible than demolition of everything two courts agreed upon.</p>

<h2>For respondents: defending concurrence</h2>

<p>The respondent\'s caveat-stage and counter-affidavit strategy mirrors the doctrine: demonstrate that every "question of law" is a factual grievance in costume; show that the allegedly ignored evidence was considered (with paragraph references); and invoke the settled restraint. Where leave is nonetheless granted, the concurrent findings remain a formidable asset through the final hearing — the appellant carries the burden of dislodging them within the same narrow gates.</p>

<div class="note">
<p>The doctrine is restraint, not abdication: where the record shows a real perversity or legal misdirection, Article 136 remains fully equal to correcting it. The craft lies in knowing — and saying candidly to the client — which side of that line a case truly falls on.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
