<?php
$P = [
  'slug'         => 'robbery-conviction-altered-grievous-hurt-supreme-court.php',
  'title'        => 'S.394 Falls, S.325 Stands – Advocate Manish Jha',
  'meta'         => 'Supreme Court sets aside a Section 394 IPC robbery conviction for want of proof of the stolen jewellery, altering it to grievous hurt under the cognate-offence rule.',
  'h1'           => 'No Recovery, No Robbery: Supreme Court Alters a 1993 Conviction from Section 394 to Section 325',
  'crumb'        => 'Criminal Law — Appeals',
  'kicker'       => 'Supreme Court · 7 October 2026 · 2026 INSC 1091',
  'sub'          => 'In Appa v. State of Maharashtra, the Supreme Court held the robbery element unproved for want of recovery or identification of the jewellery, altered the conviction to grievous hurt for a knocked-out tooth, and reduced the sentence to time served.',
  'date'         => '2026-10-13',
  'date_display' => '13 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Criminal appeals are won and lost element by element. In <em>Appa v. State of Maharashtra</em> (2026 INSC 1091, decided 7 October 2026), the Supreme Court dissected a conviction under Section 394 IPC — voluntarily causing hurt in committing robbery — arising from a 1993 farmhouse attack, found the robbery limb unproved, and used the cognate-offence principle to convict instead under Section 325 IPC for the grievous hurt that the evidence did establish.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Why was the robbery conviction set aside?', 'Because the prosecution never proved the taking. The gold mangalsutra and dorle allegedly snatched were never recovered, no receipt or other proof of their existence or value was produced, and beads found at the scene were not linked to the ornaments. Identification of the assailant was accepted — but identity alone does not prove robbery.'],
    ['What is the cognate-offence principle under Section 222 CrPC?', 'Where the offence proved is a minor, cognate offence of the offence charged — built from a subset of the same ingredients on the same facts — the court may convict for the minor offence without a fresh charge. The corresponding provision is Section 245 of the BNSS. Here, the hurt component of Section 394 survived as grievous hurt under Section 325.'],
    ['Why was the loss of a tooth treated as grievous hurt?', 'Section 320 IPC enumerates fracture or dislocation of a tooth among the categories of grievous hurt. The complainant\'s upper incisor was knocked out in the assault, which placed the injury squarely within the statutory definition, independent of the shallow hand wound that the Court declined to treat as grievous.'],
    ['Does the passage of three decades automatically reduce a sentence?', 'No. Citing Mathai v. State of Kerala, the Court noted that long passage of time is a relevant but not determinative factor. On these facts — about ten months already undergone, the robbery element gone, and the surviving offence being Section 325 — imprisonment for the period already served, with the fine maintained, met the ends of justice.'],
  ],
  'sources'      => [
    ['label' => 'Appa v. State of Maharashtra, Supreme Court, 7 October 2026, 2026 INSC 1091 — full text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/156524610/'],
    ['label' => 'Supreme Court of India — official website', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The case, element by element</h2>
<p>The incident dated to a January 1993 night, when four men entered a farmhouse. The complainant\'s account was that the appellant threatened her with a knife, injured her hand, struck her face hard enough to knock out a tooth, and snatched her gold ornaments, while the other accused dealt with her husband and daughter. The trial court convicted under Section 394 IPC; the Bombay High Court affirmed, and the matter reached the Supreme Court by special leave.</p>
<p>The bench of Justices Prashant Kumar Mishra and Shree Chandrashekhar separated what the evidence proved from what the charge assumed.</p>

<table class="law">
<tr><th>Element</th><th>Evidence</th><th>Finding</th></tr>
<tr><td>Identity of the assailant</td><td>Victim\'s testimony; no test identification parade</td><td>Proved — absence of a TIP not fatal on these facts</td></tr>
<tr><td>Robbery (taking of ornaments)</td><td>No recovery, no receipt or proof of the jewellery, scene beads unlinked</td><td>Not proved — Section 394 cannot stand</td></tr>
<tr><td>Grievous hurt (hand wound)</td><td>Shallow wound; weapon neither recovered nor linked</td><td>Not established as grievous</td></tr>
<tr><td>Grievous hurt (tooth)</td><td>Upper incisor knocked out in the assault</td><td>Proved — within Section 320\'s enumerated categories</td></tr>
</table>

<h2>The alteration of conviction</h2>
<p>With robbery gone but hurt proved, the Court invoked the principle embodied in Section 222 CrPC (now Section 245 BNSS): an accused charged with a graver offence may be convicted of a minor cognate offence made out on the same facts, since the defence to the greater necessarily covered the lesser. Relying on <em>Rafiq Ahmed v. State of U.P.</em>, the Court altered the conviction from Section 394 to Section 325 IPC. On sentence, it reduced the substantive term to the roughly ten months already undergone, left the fine of Rs. 1,000 intact, and directed release.</p>

<h2>Why the decision matters in appellate practice</h2>
<div class="check">
<p><strong>For appellate counsel:</strong> attack the property limb of robbery and dacoity convictions with the recovery record — absence of recovery, of proof of the article\'s existence and value, and of any link evidence is often fatal to the aggravated offence even where the assault is well proved. Equally, be prepared for the cognate-offence fallback: the realistic appellate outcome in such cases is rarely outright acquittal, but an alteration that can transform the sentence.</p>
</div>

<div class="note">
<p>Three decades separated the incident from the final judgment, and the Court was careful to say that time alone neither compels nor forbids leniency. What drove the outcome was the discipline of proof: each statutory ingredient either stood on evidence or fell without it. That discipline — not sympathy, not delay — is what altered a robbery conviction into one for grievous hurt and ended the case with time served.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
