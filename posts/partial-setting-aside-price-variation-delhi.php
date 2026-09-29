<?php
$P = [
  'slug'         => 'partial-setting-aside-price-variation-delhi.php',
  'title'        => 'Award Partly Set Aside, Claim Revived – Advocate Manish Jha',
  'meta'         => 'Delhi High Court partially sets aside an arbitral award: rejecting a contractor&rsquo;s price variation claim by misreading the contract was patently illegal.',
  'h1'           => 'Severing the Bad From the Good: Price Variation Claim Revived as Award Is Partially Set Aside',
  'crumb'        => 'Arbitration — Partial Setting Aside',
  'kicker'       => 'Delhi High Court · 28 September 2026',
  'sub'          => 'In Dwarika Projects Ltd. v. New Okhla Industrial Development Authority (O.M.P.(COMM) 182/2019), the High Court held the arbitrator&rsquo;s rejection of a price variation claim patently illegal for misreading the contract, set aside that part alone, and remitted the quantum to fresh arbitration while preserving the rest of the award.',
  'date'         => '2026-09-29',
  'date_display' => '29 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Section 34 of the Arbitration and Conciliation Act, 1996 is usually described as an all-or-nothing jurisdiction. Increasingly, though, courts sever the offending portion of an award and leave the rest standing — provided the good and the bad are genuinely separable. A Delhi High Court judgment of 28 September 2026 is a textbook illustration: one claim&rsquo;s rejection was annulled for patent illegality and sent back for quantification, while the awarded claims survived untouched.</p>',
  'related'      => ['business-corporate-law.php' => 'Business &amp; Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'property-disputes.php' => 'Property Disputes', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What was the contract and the dispute?', 'A bridge construction contract of about Rs. 18.09 crore awarded by NOIDA. The work, due in December 2010, was completed in May 2012 after delays. The sole arbitrator&rsquo;s award of December 2018 allowed two claims totalling about Rs. 1.03 crore but rejected the contractor&rsquo;s price variation claim of about Rs. 2.29 crore.'],
    ['Why was the rejection of price variation &ldquo;patently illegal&rdquo;?', 'The arbitrator read the rate clause as fixing prices absolutely, ignoring its own qualifying words — &ldquo;barring adjustment (which may be plus or minus) to be made as provided for herein.&rdquo; The contract expressly contemplated price variation; a construction that erases express language is not interpretation but misreading, attracting Section 34(2A).'],
    ['Did delay by the contractor defeat price variation for the extended period?', 'No. Reading the relevant clauses together, the Court held price variation remained payable even where the extension was attributable to the contractor — the clauses changed the method of calculation for the extended period, not the entitlement itself.'],
    ['What happens next?', 'The question of quantum of price variation goes to fresh arbitration under the applicable formula. The rest of the award — the allowed claims and costs — stands, since the severed portion was independent of them.'],
  ],
  'sources'      => [
    ['label' => 'Dwarika Projects Ltd. v. NOIDA, Delhi High Court, 28 September 2026 — full text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/52975767/'],
  ],
];
$BODY = <<<'HTML'
<h2>The dispute in outline</h2>
<p>Dwarika Projects built a bridge for NOIDA under a contract of roughly Rs. 18.09 crore. Scheduled completion of December 2010 slipped to May 2012. In the arbitration that followed over the final bill, the sole arbitrator&rsquo;s award of 10 December 2018 allowed Claims 1 and 3 (about Rs. 1.03 crore) but rejected Claim 4 — price variation of about Rs. 2.29 crore. The contractor challenged the rejection under Section 34; the matter was decided by Justice Mini Pushkarna on 28 September 2026.</p>

<h2>Where the arbitrator went wrong</h2>
<div class="flow">
<div class="fstep"><strong>The qualifying words were ignored.</strong> Clause 50.1 fixed rates but expressly &ldquo;barring adjustment (which may be plus or minus) to be made as provided for herein.&rdquo; Treating the rates as immutable required deleting that language — a misreading, not a permissible construction.</div>
<div class="fstep"><strong>Extension did not extinguish entitlement.</strong> Clauses 51.2 and 7.5, read together, showed that price variation continued into the extended period even where the delay lay at the contractor&rsquo;s door; what changed was the computation method.</div>
<div class="fstep"><strong>Patent illegality followed.</strong> An award that contradicts the contract&rsquo;s express terms offends Section 28(3) and falls within the patent illegality ground in Section 34(2A) for domestic awards.</div>
</div>

<h2>The remedy: surgical, not wholesale</h2>
<p>The Court did three things, and the combination is what makes the judgment notable:</p>
<div class="tiles">
<div class="tile"><h3>Set aside the rejection of Claim 4</h3><p>The price variation claim was revived — for both the original and the extended contract period.</p></div>
<div class="tile"><h3>Remitted quantum to fresh arbitration</h3><p>Because a Section 34 court cannot itself compute and award the amount, quantification under the contractual formula goes back to arbitration.</p></div>
<div class="tile"><h3>Preserved the remainder</h3><p>The allowed claims, the delay-attribution findings on issues like electrical poles and steel sourcing, and the cost directions survived: they were plausible findings independent of the severed part.</p></div>
</div>
<div class="note">
<p>Severability is the quiet doctrine here. Where distinct claims rest on distinct reasoning, annulling one need not doom the rest — sparing parties a complete re-arbitration of matters correctly decided.</p>
</div>

<h2>Price variation clauses: the recurring battlefield</h2>
<table class="law">
<tr><th>Clause pattern</th><th>Litigation risk</th></tr>
<tr><td>Fixed rates with adjustment carve-outs</td><td>Tribunals reading &ldquo;fixed&rdquo; absolutely — the error corrected in this case</td></tr>
<tr><td>Variation during extended periods</td><td>Confusing entitlement with computation where delay is contractor-attributable</td></tr>
<tr><td>Indexed formulas</td><td>Disputes over base indices and notification dates — draft with worked examples</td></tr>
</table>

<h2>Takeaways</h2>
<div class="check">
<p>For contractors: a rejected claim is not necessarily dead — where the tribunal&rsquo;s reading defies the clause, Section 34 offers a real, targeted remedy. For employers: resist over-broad defences that invite tribunals to rewrite rate clauses; the correction, when it comes, is expensive. For both: plead severability expressly, so that a successful challenge does not unravel the parts of the award each side can live with.</p>
</div>
<p>This article is for general information only and is not legal advice. Section 34 challenges carry strict limitation; parties should obtain advice on their own matter.</p>
HTML;
include __DIR__ . '/post-layout.php';
