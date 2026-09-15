<?php
$P = [
  'slug'         => 'court-fees-valuation-commercial-suits-delhi.php',
  'title'        => 'Court Fees in Commercial Suits – Advocate Manish Jha',
  'meta'         => 'Valuation, Specified Value and court fees in commercial suits in Delhi: how Section 12 routes the suit, ad valorem fees, undervaluation and refunds.',
  'h1'           => 'Valuation, Specified Value and Court Fees in Commercial Suits in Delhi',
  'crumb'        => 'Valuation & Court Fees',
  'kicker'       => 'Practice Explainer · Commercial Law',
  'sub'          => 'A commercial plaint is valued twice — once to find the right court, and once to pay the State — and confusing the two exercises is a common and costly drafting error.',
  'date'         => '2026-09-15',
  'date_display' => '15 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Every commercial suit filed in Delhi answers two valuation questions before it is heard on merits. The first is jurisdictional: what is the Specified Value of the dispute under the Commercial Courts Act, 2015, which decides whether the suit belongs before a commercial court at the district level or on the original side of the Delhi High Court. The second is fiscal: what court fee must be paid on the plaint under the court-fees legislation. The two computations serve different masters and follow different rules, and a plaint that muddles them risks return, rejection or an order to make good the deficit.</p>',
  'related'      => [
    'delhi-high-court.php'       => 'Delhi High Court',
    'civil-law.php'              => 'Civil Law',
    'business-corporate-law.php' => 'Business & Corporate Law',
  ],
  'faqs'         => [
    ['What is the Specified Value and why does it matter?', 'The Specified Value is the value of the subject matter of a commercial dispute, determined under Section 12 of the Commercial Courts Act, 2015. A dispute qualifies for the commercial track only if the Specified Value is at least rupees three lakh. In Delhi it also fixes the forum: commercial disputes above rupees two crore go to the ordinary original civil jurisdiction of the Delhi High Court, and those below it to commercial courts at the district level.'],
    ['Is interest counted when valuing a money claim?', 'Yes, up to the date of filing. In a suit for recovery of money, the value is the money claimed together with interest computed up to the date of institution. Interest that accrues after filing does not enter the computation, though it may still be claimed in the suit. The same aggregate figure ordinarily forms the basis on which ad valorem court fee is paid in a money suit.'],
    ['What happens if the plaint is undervalued or the fee is deficient?', 'The court can direct the plaintiff to correct the valuation or make good the deficit fee within a fixed time, and failure to comply exposes the plaint to rejection. Where the valuation shows the suit was filed in the wrong forum, the plaint is returned for presentation to the proper court. Deliberate undervaluation to choose a friendlier forum draws serious judicial displeasure.'],
    ['Is court fee refunded if the dispute settles?', 'The framework encourages settlement by providing for refund of court fee where the suit is settled through modes such as mediation. Where a commercial suit is referred and the parties arrive at a settlement, the plaintiff can seek a refund under the applicable refund provisions. The extent of refund depends on the governing legislation and the stage of settlement, and should be verified for the specific case.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>Two valuations, two purposes</h2>
<div class="tiles">
<div class="tile"><h4>Valuation for jurisdiction</h4><p>The Specified Value under Section 12 of the Commercial Courts Act, 2015 measures the subject matter of the dispute. It decides whether the commercial regime applies at all — the threshold is rupees three lakh — and which forum in Delhi will hear the suit.</p></div>
<div class="tile"><h4>Valuation for court fees</h4><p>The court fee payable on the plaint is governed by the court-fees legislation. In money suits the fee is ad valorem, rising with the amount claimed. It is a levy for instituting the suit, not a test of jurisdiction.</p></div>
</div>
<p>The two figures often coincide in a simple recovery suit, because both are built on the amount claimed. But they are legally distinct exercises. The Specified Value obeys Section 12 of the Commercial Courts Act; the court fee obeys the fee statute and its schedules. A plaintiff must plead both: a statement of the Specified Value to establish the commercial forum, and a valuation for court fee with the fee actually paid.</p>

<h2>How Section 12 computes the Specified Value</h2>
<p>Section 12 of the Commercial Courts Act supplies the measure for different kinds of relief. In a suit for recovery of money, the Specified Value is the money claimed, inclusive of interest computed up to the date of filing. In a suit relating to movable property or to a right in movable property, it is the market value of the property or of the right. In a dispute relating to immovable property or a right therein, it is the market value of the property or the right. Where the relief sought is intangible, the value is estimated on the basis of the market value of the rights involved. In arbitration-related applications on the commercial side, the value of the subject matter of the arbitration supplies the measure.</p>
<div class="note"><p>Interest stops counting at the gate. Interest up to the date of institution enters the Specified Value and the fee valuation in a money claim; interest after filing, though recoverable in the decree, does not inflate either figure. Compute the pre-filing interest precisely and state the cut-off date in the plaint.</p></div>

<h2>How the Specified Value routes the suit in Delhi</h2>
<table class="law">
<tr><th>Specified Value</th><th>Forum in Delhi</th></tr>
<tr><td>Below rupees three lakh</td><td>Not a commercial dispute for the purposes of the Act; the claim follows the ordinary civil track.</td></tr>
<tr><td>Rupees three lakh and above, up to rupees two crore</td><td>Commercial courts at the district level, applying the streamlined procedure of the Commercial Courts Act.</td></tr>
<tr><td>Above rupees two crore</td><td>Ordinary original civil jurisdiction of the Delhi High Court, exercised through its commercial division.</td></tr>
</table>
<p>The routing consequence makes the Specified Value the first strategic decision in drafting. It also makes it a target: defendants scrutinise the valuation to argue that the suit is before the wrong forum. The safest plaint shows its arithmetic — principal, interest to the date of filing, and the aggregate — so that the Specified Value is transparent on the face of the record. Before institution, remember also that suits not contemplating urgent interim relief must first exhaust pre-institution mediation under Section 12A of the Act.</p>

<h2>Consequences of undervaluation</h2>
<div class="flow">
<div class="fstep">Objection or suo motu scrutiny. Undervaluation surfaces on the defendant's objection or on the court's own examination of the plaint at the threshold.</div>
<div class="fstep">Opportunity to correct. The court ordinarily grants time to amend the valuation and pay the deficit court fee within a fixed period.</div>
<div class="fstep">Rejection or return. Failure to make good the deficit within the time allowed exposes the plaint to rejection; where the corrected value shows the suit lies elsewhere, the plaint is returned for presentation to the proper court.</div>
<div class="fstep">Costs of the detour. Time lost to a valuation battle is time lost on the commercial timetable, and a returned plaint restarts before the correct forum.</div>
</div>

<h2>Counterclaims and settlement refunds</h2>
<p>A defendant who raises a counterclaim in a commercial suit is, for fiscal purposes, a plaintiff in respect of that claim: the counterclaim must be valued on the same principles and carries its own court fee on the amount or value claimed. A set-off pleaded in defence is likewise examined for the fee it attracts. Practitioners should budget for this at the written-statement stage, since the 120-day discipline of commercial suits leaves no room for a late, properly stamped counterclaim.</p>
<p>The regime also rewards settlement. Where a commercial dispute is resolved through mediation or another recognised mode of settlement after institution, the plaintiff may seek refund of court fee under the applicable refund provisions. The mechanism reflects a deliberate policy: the State returns part of its levy when the parties spare the court a trial. The quantum and conditions of refund depend on the governing provisions and the stage at which settlement occurs, and should be checked for each case rather than assumed.</p>
<p>Valuation is unglamorous drafting work, but it is the foundation on which forum, fee and timetable all rest. A commercial plaint that states its Specified Value with visible arithmetic, pays its fee on the correct basis and anticipates the counterclaim position rarely loses a month to objections that better drafting would have foreclosed.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
