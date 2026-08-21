<?php
$P = [
  'slug'         => 'slp-dismissal-effect-doctrine-of-merger.php',
  'title'        => 'What an SLP Dismissal Really Means – Advocate Manish Jha',
  'meta'         => 'The legal effect of an SLP dismissal — in limine versus speaking orders, the doctrine of merger, and which remedies survive before the High Court after it.',
  'h1'           => 'Dismissal of an SLP: What It Decides, and What It Leaves Open',
  'crumb'        => 'SLP Dismissal — Effect',
  'kicker'       => 'Practice Explainer · Supreme Court Practice',
  'sub'          => 'Most SLPs are dismissed in a line — and that line neither affirms the High Court judgment on merits nor extinguishes every remedy below.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">"SLP dismissed." The two most common words in the Supreme Court\'s daily orders are also among the most misunderstood. Whether that dismissal settles the dispute forever, whether the High Court\'s judgment merges into the Supreme Court\'s order, and whether a review before the High Court remains open — all depend on how the special leave petition was dismissed. The distinctions, worked out in a settled body of doctrine, decide real cases: execution objections, review petitions, and pleas of res judicata all turn on them.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Law', 'criminal-law.php' => 'Criminal Law', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['Does an in limine dismissal of an SLP affirm the High Court judgment?', 'No. A non-speaking dismissal at the threshold means only that the Supreme Court declined to exercise its discretionary jurisdiction under Article 136. It is not an adjudication on merits, does not attract the doctrine of merger, and the High Court\'s judgment continues to operate on its own strength.'],
    ['When does the doctrine of merger apply?', 'Once leave is granted, the matter becomes an appeal, and the final order of the Supreme Court — whether affirming, reversing or modifying — replaces the High Court\'s judgment, which merges into it. Thereafter only the Supreme Court\'s order exists in law, and remedies must be addressed to it alone.'],
    ['Can a review be filed in the High Court after an SLP is dismissed?', 'Yes, where the dismissal was in limine and without reasons. Since nothing merged and nothing was decided, the High Court\'s review jurisdiction survives. After a dismissal with a speaking order, the law declared binds; and after dismissal post-leave, review lies only to the Supreme Court, not the High Court.'],
    ['Does a speaking dismissal create binding law?', 'Where the Supreme Court gives reasons while dismissing — even briefly — the reasons declare law under Article 141 and bind parties and courts on the point decided. The doctrine of merger still does not apply to the decree below, but the declared law operates, including as res judicata between the parties on what was actually decided.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court of India — case status and orders', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Supreme Court Rules, 2013 — Supreme Court of India', 'url' => 'https://www.sci.gov.in/rules-2/'],
  ],
];
$BODY = <<<'HTML'
<h2>Three fates of an SLP — three different legal worlds</h2>

<p>Article 136 confers a discretionary jurisdiction in two stages: first, whether to grant special leave; second, if leave is granted, the hearing of the appeal itself. Everything about the effect of a dismissal follows from where in that sequence it occurs.</p>

<table class="law">
  <tr><th>How the SLP ended</th><th>Merger?</th><th>Effect</th></tr>
  <tr><td>Dismissed in limine, no reasons</td><td>No</td><td>Only the discretion to entertain was refused; the High Court judgment stands on its own; review before the High Court survives</td></tr>
  <tr><td>Dismissed with a speaking order</td><td>No merger of the decree</td><td>The reasons bind as declared law under Article 141 and as res judicata on what was decided; the discretion remained unexercised as to leave</td></tr>
  <tr><td>Leave granted, appeal decided</td><td>Yes</td><td>The High Court judgment merges into the Supreme Court's final order; all future remedies address that order alone</td></tr>
</table>

<h2>Why merger matters in practice</h2>

<p>The doctrine of merger holds that there cannot be, at the same time, two operative orders governing the same subject matter. When a superior forum decides an appeal, the lower order ceases to exist independently. The consequences are concrete. Execution proceeds on the operative order — after merger, that is the Supreme Court's. Limitation for consequential steps runs from the operative order. And the forum for review or clarification changes: a party cannot ask the High Court to revisit a judgment that no longer has independent existence.</p>

<p>Conversely, where there was no merger — the in limine dismissal — the High Court's judgment remains the operative act, and the High Court retains full seisin of remedies directed at it. This is why a review petition in the High Court after an unexplained SLP dismissal is maintainable, a proposition that surprises many litigants and some execution courts.</p>

<h2>The withdrawal wrinkle and repeated SLPs</h2>

<p>Adjacent doctrines complete the picture. An SLP withdrawn simpliciter, without liberty, leaves the judgment below untouched but exposes a fresh SLP on the same cause to objections of abandonment. Where liberty is granted — commonly, to pursue a review pending or proposed before the High Court — the subsequent SLP after the review's outcome is protected by that liberty. Prudent Supreme Court practice therefore builds the sequence deliberately: where a review before the High Court has substance, either file it first, or withdraw the SLP with express liberty before pursuing it.</p>

<div class="flow">
  <div class="fstep"><strong>Assess the dismissal order</strong> — in limine or speaking? Before or after leave? The order's own words control, and certified copies matter.</div>
  <div class="fstep"><strong>Map surviving remedies</strong> — High Court review after a bare dismissal; Supreme Court review and curative jurisdiction after a decision on merits; nothing twice over.</div>
  <div class="fstep"><strong>Plead the effect precisely</strong> — in execution, in res judicata pleas and in successive proceedings, characterise the dismissal accurately; overstating it invites reversal.</div>
</div>

<h2>A note on criminal matters</h2>

<p>The same structure governs criminal SLPs. A bare dismissal of an SLP against a conviction does not merge the High Court's judgment, and remedies such as review before the High Court in its own jurisdiction, or curative relief in the Supreme Court after its review, follow the identical logic. In bail matters, dismissal of an SLP "at this stage" — familiar language in practice — expressly preserves the renewed application before the appropriate forum on changed circumstances.</p>

<div class="note">
<p>The drafting lesson for counsel is one of candour and precision: every subsequent proceeding — review, execution, fresh petition — must disclose the earlier SLP and its exact disposal. Characterising a discretionary refusal as an affirmance, or the reverse, is the species of imprecision that costs credibility, and sometimes the case.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
