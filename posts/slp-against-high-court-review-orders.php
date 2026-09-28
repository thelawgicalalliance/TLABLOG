<?php
$P = [
  'slug'         => 'slp-against-high-court-review-orders.php',
  'title'        => 'SLPs Against Review Orders – Advocate Manish Jha',
  'meta'         => 'Can an SLP be filed against a High Court&rsquo;s order in review? Why the main judgment must be challenged, how review time affects limitation, and the traps in between.',
  'h1'           => 'After the High Court Says No Twice: Special Leave Petitions and Orders Passed in Review',
  'crumb'        => 'Supreme Court — SLP Practice',
  'kicker'       => 'Practice Explainer · 28 September 2026',
  'sub'          => 'A dismissed review petition tempts litigants to challenge only the review order before the Supreme Court — usually a mistake. This explainer maps the maintainability rules, the limitation arithmetic, and the drafting discipline for SLPs that follow a High Court review.',
  'date'         => '2026-09-28',
  'date_display' => '28 September 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">A common sequence in litigation: the High Court decides against a party; a review petition is filed and dismissed; and only then does the party turn to the Supreme Court. At that point a technical question carries real consequences — what exactly should the special leave petition challenge? The review order, the main judgment, or both? The answer determines maintainability, shapes the limitation computation, and often decides whether the petition survives the Registry and the first hearing. This explainer sets out the working rules.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Can an SLP challenge only the order dismissing review?', 'It is hazardous. The settled position is that where review is dismissed, the operative adjudication remains the main judgment; an SLP confined to the review-dismissal order — without challenging the main judgment — is ordinarily not entertained, because setting aside the review order alone would leave the main judgment untouched and the exercise futile.'],
    ['What if the review was allowed and the judgment modified?', 'Then the review order merges with, or itself becomes, the operative decision. The SLP should challenge the judgment as it stands after review — and, where the modification is the grievance, the review order squarely.'],
    ['How does time spent in review affect limitation for the SLP?', 'The SLP against the main judgment must ordinarily be filed within ninety days. A bona fide review pursued diligently is a standard ground for condoning the delay that accrues meanwhile, but it is condonation — discretionary — not exclusion as of right. The application under Section 5 of the Limitation Act must candidly chart every date.'],
    ['Should both orders be challenged in one SLP?', 'Where review was dismissed, the prudent course is a single SLP impugning the main judgment and the review order together, with both certified copies annexed and the delay against the main judgment explained by the review&rsquo;s pendency. The Registry treats the petition as directed against both.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — official text (Supreme Court of India)', 'url' => 'https://www.sci.gov.in/rules-2/'],
    ['label' => 'Order XLVII, Code of Civil Procedure, 1908 — review (India Code)', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the target of the challenge matters</h2>
<p>Article 136 permits special leave against &ldquo;any judgment, decree, determination, sentence or order&rdquo; — wide enough, on its face, to cover an order in review. The difficulty is not the Court&rsquo;s power but the utility of the challenge. When a High Court dismisses review, it decides only that no ground for reconsideration exists within the narrow confines of Order XLVII CPC (or the corresponding criminal and writ-side principles). The rights of the parties remain governed by the main judgment. An SLP that leaves the main judgment unchallenged therefore asks the Supreme Court for an order that changes nothing — and such petitions are routinely dismissed on that short ground.</p>
<div class="note">
<p>The review court&rsquo;s jurisdiction is itself narrow: error apparent on the face of the record, discovery of new and important matter, or other sufficient cause of that character. Arguments that failed as review grounds do not improve by being restated as grounds for special leave against the review order; the Supreme Court examines the main judgment&rsquo;s correctness, not the High Court&rsquo;s refusal to re-examine it.</p>
</div>

<h2>The three configurations</h2>
<table class="law">
<tr><th>What happened in review</th><th>What the SLP should challenge</th></tr>
<tr><td>Review dismissed</td><td>The main judgment, joined with the review order — the main judgment carries the grievance</td></tr>
<tr><td>Review allowed; judgment recalled or modified</td><td>The decision as it stands post-review; where the modification itself aggrieves, the review order is the primary target</td></tr>
<tr><td>Review partly allowed</td><td>Both orders, with the petition articulating which findings survive from each</td></tr>
</table>

<h2>The limitation arithmetic</h2>
<div class="flow">
<div class="fstep"><strong>Ninety days from the main judgment.</strong> The SLP clock against the principal decision starts on its pronouncement, subject to the certified-copy computation under the Supreme Court Rules, 2013.</div>
<div class="fstep"><strong>Review does not stop the clock automatically.</strong> Pursuing review is a ground for condonation, not a statutory exclusion. The delay application must show diligence: prompt filing of the review, active prosecution, and prompt movement to the Supreme Court after its dismissal.</div>
<div class="fstep"><strong>Chart every date.</strong> Judgment date, certified-copy application and readiness dates, review filing, review dismissal, and SLP filing — an unexplained gap at any link invites dismissal on delay alone, whatever the merits.</div>
</div>

<h2>Drafting discipline</h2>
<div class="tiles">
<div class="tile"><h3>Cause title and prayer</h3><p>Impugn both orders by date and number; pray for leave against both. Annex certified copies of each — a petition annexing only the review order draws a Registry defect and, worse, a maintainability objection.</p></div>
<div class="tile"><h3>Candour about the review</h3><p>The synopsis and list of dates must disclose the review and its outcome. Suppression of a failed review — like suppression of any prior proceeding — has repeatedly proved fatal under the Court&rsquo;s duty-of-candour jurisprudence.</p></div>
<div class="tile"><h3>Grounds directed at the main judgment</h3><p>Frame the substantive grounds against the principal decision. Grounds about the review order should be confined to configurations where that order operates — a modification, or a review decided in disregard of natural justice.</p></div>
</div>

<h2>Strategic notes</h2>
<p>Two further considerations shape the decision to seek review at all. First, sequencing: a party who files an SLP, loses, and then seeks review in the High Court faces the additional complication of the merger doctrine and the Supreme Court&rsquo;s own rules against successive challenges — the cleaner sequence is review first, Supreme Court after. Second, cost-benefit: because review rarely succeeds and consumes limitation goodwill, it is worth filing only where a genuine Order XLVII ground exists — an overlooked binding precedent on the record, a computational error, an admitted document misread. Where the real complaint is that the High Court was wrong, Article 136 is the remedy, and the ninety days are better spent preparing it.</p>
<div class="check">
<p>Working rules: challenge the main judgment, join the review order, disclose everything, and treat time spent in review as delay to be explained — never as time that explains itself.</p>
</div>
<p>This article is for general information only and is not legal advice. Maintainability and limitation questions require assessment of the specific orders in each case.</p>
HTML;
include __DIR__ . '/post-layout.php';
