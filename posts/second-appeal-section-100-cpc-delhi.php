<?php
$P = [
  'slug'         => 'second-appeal-section-100-cpc-delhi.php',
  'title'        => 'Second Appeals: Section 100 CPC – Advocate Manish Jha',
  'meta'         => 'Second appeals to the Delhi High Court under Section 100 CPC — what a substantial question of law is, and when concurrent findings can be disturbed.',
  'h1'           => 'Second Appeals Under Section 100 CPC: The Substantial Question of Law',
  'crumb'        => 'Second Appeal — RSA',
  'kicker'       => 'Practice Explainer · High Court Appeals',
  'sub'          => 'A second appeal is not a third trial — it lies only on a substantial question of law, formulated at admission, and the hearing is confined to it.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">By the time a civil case has been tried and then decided in first appeal, the facts have been found twice. Section 100 of the Code of Civil Procedure permits one further appeal to the High Court — but only where the case involves a substantial question of law. The provision is the narrowest gateway in the civil appellate structure, and most Regular Second Appeals in the Delhi High Court are won or lost at the point of framing that question. This explainer covers what qualifies, what does not, and how the jurisdiction is actually exercised.</p>',
  'related'      => ['civil-law.php' => 'Civil Law', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['What makes a question of law "substantial"?', 'A question that is debatable, not settled by binding precedent, and materially affects the rights of the parties in the case — or one on which authorities conflict. A question already answered by the Supreme Court, or one whose answer cannot change the decree, is not substantial however interesting it may be.'],
    ['Can the High Court re-appreciate evidence in a second appeal?', 'Not as a rule. Concurrent findings of fact bind the High Court unless the findings are perverse — based on no evidence, on inadmissible evidence, or recorded by ignoring vital evidence — or unless a wrong legal standard infected the fact-finding. Those exceptions are themselves questions of law and must be framed as such.'],
    ['Is there a monetary floor for second appeals?', 'Section 102 CPC bars second appeals in suits for recovery of money where the subject matter does not exceed twenty-five thousand rupees. Commercial disputes follow their own appellate track under the Commercial Courts Act, and several special statutes exclude second appeals altogether — the first question is always whether the RSA lies at all.'],
    ['What happens at the admission stage?', 'The memorandum must precisely state the substantial questions proposed. If the court is satisfied, it formulates the questions and the appeal is heard on them — the respondent may argue at the hearing that no such question arises. The court may later frame additional questions, for reasons recorded, but the appellant cannot travel beyond the formulation as of right.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191'],
    ['label' => 'Delhi High Court — case status and rules', 'url' => 'https://delhihighcourt.nic.in/web/'],
  ],
];
$BODY = <<<'HTML'
<h2>The design of Section 100</h2>

<p>The section's structure enforces its philosophy. The appeal lies only if the High Court "is satisfied that the case involves a substantial question of law"; the memorandum must "precisely state" that question; the court "shall formulate that question" at admission; and the appeal "shall be heard on the question so formulated". Sub-section (5) preserves a safety valve — the court may hear the appeal on any other substantial question of law, not formulated earlier, for reasons to be recorded — but the valve is for the court, not a licence for the appellant to re-argue facts.</p>

<h2>Substantial questions: the working taxonomy</h2>

<table class="law">
  <tr><th>Usually qualifies</th><th>Usually does not</th></tr>
  <tr><td>Construction of a document of title on which the rights of parties turn</td><td>Sufficiency or weight of the evidence believed by the courts below</td></tr>
  <tr><td>Application of a wrong legal standard — burden of proof misplaced, presumption ignored, admissibility wrongly decided</td><td>A finding of fact assailed only as erroneous, without perversity</td></tr>
  <tr><td>Perversity: findings based on no evidence or ignoring material evidence — pleaded and demonstrated as such</td><td>Concurrent findings on possession, adverse possession, benami or intention, reached on appreciation of evidence</td></tr>
  <tr><td>Limitation, res judicata, maintainability — where the answer governs the decree</td><td>Questions settled by binding precedent, or academic questions whose answer changes nothing</td></tr>
</table>

<p>The taxonomy has a common thread: the second appellate court corrects errors of law that shaped the outcome; it does not substitute its own view of the evidence for that of two courts that saw the witnesses.</p>

<h2>First appeal and second appeal: the division of labour</h2>

<div class="compare">
  <div class="col old">
    <h3>First appeal (Section 96 / RFA)</h3>
    <p>A rehearing on fact and law. The first appellate court re-appreciates the entire evidence and must record its own findings on every issue — it is the last court of fact.</p>
  </div>
  <div class="arrow">→</div>
  <div class="col new">
    <h3>Second appeal (Section 100 / RSA)</h3>
    <p>Law only. The findings of fact arrive settled; the question is whether an error of law — including perversity, itself a legal category — vitiates them.</p>
  </div>
</div>

<p>This division explains a recurring appellate outcome: where the first appellate court has affirmed a trial decree with a cursory, non-speaking judgment, the substantial question in the RSA is often the first appellate court's own failure to discharge its duty — and the matter is remanded for a real first appeal rather than decided afresh by the High Court.</p>

<h2>Practice notes for the Delhi High Court</h2>

<p>Three disciplines pay for themselves in RSA practice. First, draft the questions before drafting anything else: a memorandum that buries one genuine question of law under ten complaints about facts invites dismissal in limine. Second, tie every question to the record — the finding said to be perverse, the document said to be misconstrued, with page references — because substantiality is judged against this case, not in the abstract. Third, respect limitation and the decree's operation: ninety days run from the first appellate decree, and interim protection against execution must be sought expressly; filing an RSA does not stay the decree.</p>

<div class="note">
<p>Section 103 CPC gives the High Court a limited power to determine issues of fact itself — where the evidence is on record and the issue was either not determined below or wrongly determined by reason of the error of law identified. It is the mechanism that lets a successful RSA end in a final decree rather than an automatic remand, and a prayer invoking it belongs in the memorandum where the record permits.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
