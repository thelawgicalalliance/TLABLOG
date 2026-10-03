<?php
$P = [
  'slug'         => 'criminal-appeal-absence-no-dismissal-default.php',
  'title'        => 'No Default Dismissals On Appeal – Advocate Manish Jha',
  'meta'         => 'A criminal appeal cannot be dismissed just because the appellant or counsel is absent. What appellate courts must do, and how to restore a derailed appeal.',
  'h1'           => 'Nobody Appeared: What Happens To A Criminal Appeal?',
  'crumb'        => 'Criminal Appeals — Absence',
  'kicker'       => 'Procedure &amp; Practice · Criminal Appeals',
  'sub'          => 'Unlike a civil appeal, a criminal appeal cannot be dismissed for default of appearance — the appellate court must decide it on the merits, after perusing the record, and may appoint counsel at State expense where the appellant is unrepresented.',
  'date'         => '2026-10-03',
  'date_display' => '3 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Appeals go quiet for many reasons: the convict is in custody and loses contact with counsel, a legal-aid brief changes hands, families run out of funds. When the appeal is finally called and no one answers, the court&rsquo;s powers diverge sharply from civil practice. A criminal appeal, once admitted, cannot be dismissed simply for non-prosecution. Liberty is at stake, and the law requires a decision on the merits — reached after examining the record — not a punishment for absence.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Why can civil appeals be dismissed for default but not criminal appeals?', 'The civil rules — Order XLI CPC — expressly permit dismissal for the appellant&rsquo;s non-appearance, with a restoration mechanism. The criminal appellate chapter contains no such power once the appeal is admitted: it contemplates summary dismissal only after the appellant or counsel has had a reasonable opportunity of being heard, and final disposal after perusal of the record. The Supreme Court has consistently read this as excluding dismissal for default in criminal appeals.'],
    ['What are the appellate court&rsquo;s options when no one appears?', 'It may adjourn to secure representation, direct notice to the appellant — including through the jail superintendent for appellants in custody — request legal-services counsel or appoint an amicus, or decide the appeal on merits with the assistance available. What it cannot properly do is dismiss the appeal unheard as a sanction for absence.'],
    ['Can the court decide the appeal against an absent appellant?', 'Yes. The protection is against dismissal for default, not against adverse decisions. A court that has perused the record and heard whoever is available can dismiss the appeal on merits. That is why absence remains dangerous: the appeal may be decided without the appellant&rsquo;s best case being put.'],
    ['What if an appeal was dismissed in the appellant&rsquo;s absence without the record being considered?', 'The order is vulnerable. Remedies include an application before the same court pointing out the defect, and challenge before the higher court. Where dismissal occurred because counsel failed to appear, courts are generally receptive to recall, since the litigant should not suffer for the advocate&rsquo;s default.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code (official text)', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory design</h2>
<p>Chapter XXXI of the Bharatiya Nagarik Suraksha Sanhita, 2023 — carrying forward the scheme of Chapter XXIX of the CrPC — builds criminal appeals around two safeguards. First, an appeal may be dismissed summarily only after the appellant or his counsel has had a reasonable opportunity of being heard; for appellants in jail, the Sanhita preserves the right to present the appeal through the officer in charge of the prison. Second, where the appeal is not dismissed summarily, the court must send for the record, give notice, and dispose of the appeal after considering it. Nothing in the chapter authorises termination of an admitted appeal because a name went uncalled-for at 10:30 in the morning.</p>

<h2>Civil and criminal appeals compared</h2>
<div class="compare">
<div class="col old"><strong>Civil appeal.</strong> Order XLI permits dismissal for default when the appellant does not appear, with an application for re-admission on sufficient cause. The dispute is between private parties; the sanction is procedural discipline.</div>
<div class="arrow">&rarr;</div>
<div class="col new"><strong>Criminal appeal.</strong> The State&rsquo;s judgment of conviction — and often a sentence of imprisonment — is under challenge. The appellate court owes an independent duty to examine the record, so absence shifts the mode of hearing, never the entitlement to one.</div>
</div>

<h2>How courts in practice handle the silent appeal</h2>
<div class="flow">
<div class="fstep"><strong>First listing without appearance.</strong> The court typically adjourns with a direction — fresh notice to the appellant, intimation through the jail superintendent if the appellant is in custody, or a reference to the Legal Services Authority.</div>
<div class="fstep"><strong>Continued absence.</strong> An amicus curiae or legal-aid counsel is appointed, served with the paper book, and heard. The State is heard in response.</div>
<div class="fstep"><strong>Disposal.</strong> The court decides on merits after perusing the judgment, the evidence and the submissions actually advanced. The resulting order stands on the record, not on the default.</div>
</div>

<div class="note"><p>Practice pointer: families of convicts serving sentences should ensure the appeal file carries current addresses and that any change of counsel is formally recorded — most &ldquo;silent appeals&rdquo; trace back to a communication break, and the court&rsquo;s protective framework is no substitute for the appellant&rsquo;s own best argument being advanced. Counsel taking over an old appeal should first confirm it has not been decided in absence, and if it has, move promptly for recall.</p></div>

<h2>The principle beneath the rule</h2>
<p>The rule against default dismissals expresses a broader axiom of criminal justice: consequences flow from the merits, not from procedural lapses of the person whose liberty is at stake. The same axiom underlies legal aid at State expense, the hearing of jail appeals presented without counsel, and the appellate court&rsquo;s duty to re-appreciate evidence in a first appeal against conviction. An advocate&rsquo;s absence can slow a criminal appeal; under the scheme of the Sanhita it cannot, by itself, end one.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
