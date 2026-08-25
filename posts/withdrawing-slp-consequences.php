<?php
$P = [
  'slug'         => 'withdrawing-slp-consequences.php',
  'title'        => 'Withdrawing an SLP: Consequences – Advocate Manish Jha',
  'meta'         => 'What happens when a Special Leave Petition is withdrawn: liberty clauses, the bar on refiling, review before the High Court, and how withdrawal differs from dismissal.',
  'h1'           => 'Withdrawing a Special Leave Petition: What It Preserves and What It Forfeits',
  'crumb'        => 'Withdrawal of SLP',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'Withdrawal is a tactical instrument in Article 136 practice — but an SLP withdrawn without liberty is ordinarily gone for good, and the terms recorded in the withdrawal order decide everything that follows.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Not every Special Leave Petition should be pressed to an order. Counsel reading a bench\'s mind may withdraw to avoid an adverse observation; a petitioner may withdraw to pursue review before the High Court, to await a pending larger-bench decision, or to accept a settlement. But withdrawal under Article 136 has its own law of consequences: what is preserved depends almost entirely on the liberty recorded in the order, and an unqualified withdrawal will ordinarily bar a second attempt. This explainer examines the varieties of withdrawal, their effects on the judgment below, and the drafting of withdrawal requests.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['Can a withdrawn SLP be filed again?', 'Ordinarily no. On settled principles of public policy applied to constitutional remedies, a petitioner who unconditionally withdraws a petition is treated as having abandoned the challenge and cannot refile it; a fresh SLP against the same order after unqualified withdrawal is not entertained. The exception is a withdrawal with liberty — where the order itself preserves the right to return on defined contingencies.'],
    ['Does withdrawal of an SLP affect the High Court judgment?', 'No. Withdrawal leaves the impugned judgment untouched and unapproved: there is no merger, and the Supreme Court has decided nothing. The judgment below continues to operate with its own precedential force. This is one reason respondents often consent readily to withdrawal — they keep their judgment without the risk of the appeal.'],
    ['Can a petitioner withdraw an SLP to file a review before the High Court?', 'Yes, and this is the standard sequence. Supreme Court practice requires that a review before the High Court be pursued before or instead of the SLP in appropriate cases, and petitioners frequently seek withdrawal with liberty to apply for review. The liberty should be sought expressly, and the review then filed promptly, with the withdrawal order explaining the time spent in the Supreme Court for limitation purposes.'],
    ['Is withdrawal possible after notice has been issued or leave granted?', 'Withdrawal remains possible with the Court\'s permission at any stage, but the calculus changes. After leave, the SLP has become an appeal, and its withdrawal is governed by the Court\'s appellate discipline; terms — including costs — may be imposed, and observations already made in earlier orders remain on the record.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — Supreme Court of India', 'url' => 'https://www.sci.gov.in/rules-2/'],
    ['label' => 'Supreme Court of India — Case Status and Orders', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Three species of withdrawal</h2>
<div class="tiles">
  <div class="tile"><h3>Simpliciter</h3><p>"Dismissed as withdrawn", nothing more. The challenge is abandoned; a second SLP against the same order is ordinarily barred; the judgment below stands untouched.</p></div>
  <div class="tile"><h3>With liberty</h3><p>Withdrawal coupled with recorded liberty — to file a review below, to revive if a stated contingency occurs, to pursue another remedy. The liberty clause is the petitioner's lifeline; its wording is everything.</p></div>
  <div class="tile"><h3>On settlement</h3><p>Withdrawal recording a compromise. The order may append or note the terms; enforcement thereafter is a matter of the settlement and any decree or undertaking, not of Article 136.</p></div>
</div>

<h2>Why unqualified withdrawal bars a return</h2>
<p>The rule against refiling rests on public policy rather than res judicata in the strict sense: a litigant who invokes an extraordinary discretionary jurisdiction and then abandons it cannot treat the Court as a testing ground, waiting for a more receptive bench. The same policy that governs withdrawal of writ petitions applies with added force to Article 136, which is doubly discretionary. The bar attaches to the remedy abandoned — a fresh SLP against the same order — and not to other remedies that remain lawfully open, which is precisely what a carefully drawn liberty clause secures.</p>

<h2>No merger, no approval</h2>
<p>An order permitting withdrawal decides nothing about the merits. There is no merger of the High Court's judgment into any order of the Supreme Court, no affirmation, and no law declared under Article 141. The judgment below neither gains nor loses authority. Counsel citing judgments should know this line well: a High Court ruling that survived an SLP only because the SLP was withdrawn stands exactly as it did the day it was pronounced — no more, no less. The position after a non-speaking dismissal in limine is discussed in a companion explainer on this site; withdrawal is a step further removed, since even the discretion to refuse leave was never exercised.</p>

<h2>Drafting the withdrawal request</h2>
<div class="check">
<ul>
  <li><strong>Say why.</strong> A withdrawal to pursue review or another statutory remedy should state the purpose, so the order records it and the liberty follows naturally.</li>
  <li><strong>Ask for the liberty in terms.</strong> "With liberty to file a review petition before the High Court" or "with liberty to revive in the event the reference in [pending matter] is answered" — vague liberty invites disputes later.</li>
  <li><strong>Deal with time.</strong> Request that the order note the period during which the SLP remained pending, to support exclusion of that time in the subsequent proceeding under the principles of the Limitation Act.</li>
  <li><strong>Mind interim orders.</strong> Interim protection granted in the SLP dies with the withdrawal unless the order says otherwise; sequencing matters where demolition, recovery or arrest protection is in play.</li>
</ul>
</div>

<h2>Strategic uses — and one caution</h2>
<p>Withdrawal is legitimately used to reroute a case to the correct remedy, to consolidate challenges, to await an imminent larger-bench pronouncement, or to preserve a client from adverse observations that would haunt the record. The caution is symmetrical: a withdrawal made to shop for a different bench, disguised behind a formal liberty request, is the precise mischief the refiling bar exists to prevent, and courts see through it. The honest and effective practice is to decide the remedy question before filing — and, where withdrawal becomes necessary, to leave the courtroom with an order whose terms have been thought through to the next forum.</p>

<div class="note">
<p><strong>Note:</strong> This explainer describes general principles of Supreme Court practice. The effect of any particular withdrawal depends on the order actually passed, and nothing here is legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
