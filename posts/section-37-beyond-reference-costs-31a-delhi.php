<?php
$P = [
  'slug'         => 'section-37-beyond-reference-costs-31a-delhi.php',
  'title'        => 'Award Beyond the Reference Stays Cut – Advocate Manish Jha',
  'meta'         => 'Delhi High Court Division Bench upholds partial setting aside of an award where the arbitrator exceeded the referred dispute and granted costs without Section 31A analysis.',
  'h1'           => 'Two Quiet Disciplines of Arbitration: Stay Within the Reference, and Reason Your Costs',
  'crumb'        => 'Arbitration · Section 37',
  'kicker'       => 'Delhi High Court · 29 October 2026',
  'sub'          => 'A contractor won part of its claims against a public sector employer, lost a slice of the award under Section 34, and appealed. The Division Bench has affirmed the pruning: an arbitrator cannot adjudicate deductions never put in issue, and a costs award untested against the Section 31A(3) factors is patently illegal.',
  'date'         => '2026-11-04',
  'date_display' => '4 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>C R Sons Infra Projects Ltd v. Ircon International Ltd</em>, FAO(OS) (COMM) 60/2019 (decided 29 October 2026), a Division Bench of the Delhi High Court comprising Justice Avneesh Jhingan and Justice Amit Sharma dismissed a Section 37 appeal against a Single Judge\'s decision partly setting aside an arbitral award of 27 February 2018. Two deletions were affirmed: a component of Rs 9,28,205 under Claim 1, where the arbitrator had examined final-bill deductions that the claimant had never challenged in its pleadings, and a costs award of Rs 5.5 lakh made without reference to the factors in Section 31A(3) of the Arbitration and Conciliation Act, 1996.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['What does it mean for an arbitrator to travel beyond the reference?', 'An arbitral tribunal derives jurisdiction from the disputes actually referred, as framed by the pleadings. Where a claimant never challenged the final bill or its deductions, an award analysing those deductions on merits decides something never put in issue — a recognised ground for setting aside that part of the award.'],
    ['Why did the Konkan Railway principle not save the award?', 'That principle protects an arbitrator\'s choice between plausible interpretations from judicial second-guessing. The Bench held it had no application because the defect here was jurisdictional — the arbitrator exceeded the scope of the referred dispute — not a matter of choosing one plausible view over another.'],
    ['What does Section 31A(3) require for costs?', 'The provision makes costs discretionary but structured: the tribunal must have regard to the conduct of the parties, their relative success and failure, frivolous counter-claims or claims, and reasonable offers to settle. A lump-sum costs award that ignores partial success and findings of frivolousness is vulnerable as patently illegal.'],
    ['How narrow is a Section 37 appeal?', 'Very. The appellate court examines only whether the Section 34 court stayed within its permitted scope; it does not reassess the merits of the award independently. Two concurrent layers of restraint protect awards — and equally protect reasoned decisions pruning them.'],
  ],
  'sources'      => [
    ['label' => 'C R Sons Infra Projects Ltd v. Ircon International Ltd, FAO(OS) (COMM) 60/2019 — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/128645259/'],
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
  ],
];
$BODY = <<<'HTML'
<h2>The dispute</h2>
<p>Ircon engaged C R Sons after a tender for construction of corporate office buildings at District Centre, Saket, under a Letter of Acceptance of July 2004 and an agreement of August 2004 containing an arbitration clause. Of eight claims pressed in arbitration, the award of 27 February 2018 allowed two in part, for a total of Rs 48,71,765.94 — including Rs 11,83,921.94 under Claim 1 for work done but not paid, and Rs 5.5 lakh as costs. On Ircon's Section 34 petition, the Single Judge on 14 December 2018 set aside Rs 9,28,205 of the Claim 1 figure and the entire costs award. The contractor's Section 37 appeal challenged both deletions.</p>

<h2>The jurisdictional defect in Claim 1</h2>
<p>The fatal fact was a silence in the pleadings: C R Sons had not challenged the final bill or the deductions made in it. The arbitrator nonetheless examined those deductions on merits and awarded the corresponding amount. Both the Single Judge and the Division Bench treated this as an excess of the referred dispute rather than a contestable view of evidence. The distinction matters because the shield available to arbitrators — that a plausible view cannot be disturbed — guards interpretation, not jurisdiction. An award on an issue never referred is not a plausible view of anything; it is a decision the tribunal had no mandate to make.</p>

<h2>Costs are discretionary, not arbitrary</h2>
<div class="check">
<ul>
  <li><strong>The statutory frame:</strong> Section 31A, introduced in 2015, codifies a costs-follow-the-event regime for arbitrations, subject to the factors in sub-section (3).</li>
  <li><strong>What the arbitrator overlooked:</strong> the claimant had succeeded only partially, and most of its claims had been found meritless — circumstances squarely relevant under Section 31A(3).</li>
  <li><strong>The consequence:</strong> a costs award made without engaging those factors was held vitiated by patent illegality, and its deletion was affirmed.</li>
</ul>
</div>

<h2>The discipline of the double filter</h2>
<p>The Bench restated the architecture that now governs award challenges in commercial matters: the Section 34 court applies the limited grounds of challenge, and the Section 37 court checks only that the first court stayed within them. For award-holders, the message is reassuring — merits re-litigation remains barred at both levels. For award-debtors, the case identifies the two genuinely load-bearing grounds that survive the filters: jurisdictional excess measured against the pleadings, and reasoning failures the statute itself makes mandatory, such as the Section 31A(3) factors. Neither ground requires the court to disagree with the arbitrator about facts; both require only a comparison of the award against the mandate.</p>
<table class="law">
  <tr><th>Stage</th><th>Question asked</th><th>Question forbidden</th></tr>
  <tr><td>Section 34</td><td>Does a statutory ground — excess of reference, patent illegality — exist?</td><td>Is the award correct on merits?</td></tr>
  <tr><td>Section 37</td><td>Did the Section 34 court stay within its scope?</td><td>Would we have decided the challenge differently?</td></tr>
</table>
<div class="note">
<p><strong>Practice note:</strong> Claimants in construction arbitrations should plead every bill, deduction and withholding they intend to dispute — the pleadings are the tribunal's boundary map. And tribunals awarding costs after 2015 should record, however briefly, their engagement with the Section 31A(3) factors; the absence of that paragraph cost the winner Rs 5.5 lakh here.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
