<?php
$P = [
  'slug'         => 'slp-dismissal-effect-kunhayammed-merger.php',
  'title'        => 'What an SLP Dismissal Really Decides – Advocate Manish Jha',
  'meta'         => 'Kunhayammed v. State of Kerala explains the effect of SLP dismissals: in limine, by speaking order, and after leave — merger, Article 141 and review, explained.',
  'h1'           => 'Dismissed — But What Died? The Kunhayammed Rules on SLP Dismissals and the Doctrine of Merger',
  'crumb'        => 'SLP Dismissals',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'A one-line "dismissed" at the SLP stage is not an affirmation of the High Court\'s judgment — and a speaking dismissal binds without merging. The three-judge bench framework in Kunhayammed still governs what survives an Article 136 refusal, including the High Court\'s own review jurisdiction.',
  'date'         => '2026-11-03',
  'date_display' => '3 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Every week the Supreme Court dismisses hundreds of special leave petitions, and every week litigants misread what those dismissals decided. The governing framework remains <em>Kunhayammed v. State of Kerala</em>, (2000) 6 SCC 359, decided on 19 July 2000 by a bench of Justices K.T. Thomas, D.P. Mohapatra and R.C. Lahoti. Its central insight is that Article 136 has two stages — the discretionary grant of leave, and the appellate hearing that follows — and the doctrine of merger attaches only to the second. A refusal of leave, however worded, leaves the impugned judgment standing on its own feet; it is only when leave is granted and the appeal decided that the lower court\'s decision merges into the Supreme Court\'s order, whatever the result.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Litigation', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Does an in limine dismissal of an SLP affirm the High Court judgment?', 'No. A non-speaking dismissal means only that the Supreme Court declined to exercise its discretionary jurisdiction. It creates no merger, declares no law, and operates as res judicata on nothing beyond the fact that leave was refused. The High Court judgment continues to bind by its own force.'],
    ['What changes when the dismissal gives reasons?', 'A speaking refusal of leave still causes no merger — but the reasons declare law under Article 141 and bind the parties and all courts below as the Supreme Court\'s view of the point. The practical difference: the High Court order survives, yet its correctness on the reasoned point is settled.'],
    ['Can a High Court review its judgment after an SLP against it is dismissed?', 'Yes, if leave was refused — Kunhayammed itself permitted review of a judgment whose SLP had been dismissed, because nothing had merged. But once leave is granted and the appeal is entertained, the High Court loses jurisdiction to review, for its judgment has merged into the Supreme Court\'s order.'],
    ['Does an SLP dismissal bar a later writ petition or curative attempt?', 'A dismissal in limine does not, by itself, bar other remedies that independently lie — which is why review petitions before the High Court remain maintainable. What a litigant cannot do is treat the dismissal as a fresh cause to reagitate the same challenge before the same forum; and successive SLPs against the same order face their own, separate bar.'],
  ],
  'sources'      => [
    ['label' => 'Kunhayammed & Ors. v. State of Kerala, (2000) 6 SCC 359 — Supreme Court of India (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/1940266/'],
  ],
];
$BODY = <<<'HTML'
<h2>The two stages of Article 136</h2>
<p>The jurisdiction is discretionary at the threshold: the Court first decides whether to grant special leave, and only upon grant does the matter convert into an appeal to be heard on merits. Merger — the principle that a lower decision is subsumed in the superior forum\'s operative order — presupposes an exercise of appellate jurisdiction over the subject matter. Refusing leave exercises no such jurisdiction, which is why nothing merges; granting leave and deciding the appeal does, which is why everything merges, even on a simple affirmance.</p>

<h2>The outcomes mapped</h2>
<table class="law">
  <tr><th>What the Supreme Court did</th><th>Merger?</th><th>Binding effect</th><th>High Court review?</th></tr>
  <tr><td>Dismissed SLP in limine (no reasons)</td><td>No</td><td>None beyond refusal of leave</td><td>Available</td></tr>
  <tr><td>Dismissed SLP by speaking order</td><td>No</td><td>Reasons declare law under Article 141; bind parties and courts below</td><td>Technically available, but constrained by the declared law</td></tr>
  <tr><td>Granted leave, dismissed the appeal</td><td>Yes</td><td>Supreme Court\'s order is the only operative decree</td><td>Lost — review lies, if at all, to the Supreme Court</td></tr>
  <tr><td>Granted leave, allowed or modified</td><td>Yes</td><td>As above</td><td>Lost</td></tr>
</table>

<h2>Where the distinctions bite in practice</h2>
<div class="tiles">
  <div class="tile"><strong>Execution and compliance.</strong> After a refusal of leave, the decree to execute is the High Court\'s; after a merger, it is the Supreme Court\'s order — which controls limitation, interest computations and the forum for clarifications.</div>
  <div class="tile"><strong>Precedent management.</strong> "SLP dismissed" against a judgment does not elevate that judgment; opposing counsel who cite the dismissal as approval are overreading it, and the point is worth making expressly.</div>
  <div class="tile"><strong>Review strategy.</strong> A party that lost in the High Court and failed at the SLP stage in limine still holds the review remedy before the High Court — often the only way to place the error that the SLP\'s summary stage never examined.</div>
  <div class="tile"><strong>Withdrawal calculus.</strong> Withdrawing an SLP simpliciter leaves the field like a refusal does; parties intending a review below commonly seek liberty while withdrawing, to pre-empt maintainability skirmishes.</div>
</div>

<h2>Drafting around the doctrine</h2>
<div class="check">
<ul>
  <li><strong>Read the dismissal order literally:</strong> the presence or absence of reasons, and of phrases disposing of the "appeal" rather than the "petition", determines which row of the table the case sits in.</li>
  <li><strong>In later proceedings, plead the stage:</strong> whether leave had been granted is the first fact a court applying merger needs — annex the Supreme Court\'s order, not a description of it.</li>
  <li><strong>Protect the review window:</strong> the thirty-day clock for review before the High Court runs regardless of the SLP\'s fate; file protectively where both tracks are contemplated.</li>
</ul>
</div>

<div class="note">
<p><strong>Practice note:</strong> Kunhayammed\'s framework has been applied and refined for a quarter century, including to orders recording reasons while refusing leave and to the res judicata effect of summary dispositions. When the effect of a Supreme Court order is contested, the safest course is always the same: place the order itself on record and argue from its text and stage, not from its result.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
