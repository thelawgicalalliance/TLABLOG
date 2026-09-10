<?php
$P = [
  'slug'         => 'prolongation-costs-set-aside-section-34-dda-delhi-high-court.php',
  'title'        => 'Unreasoned Prolongation Costs Set Aside – Advocate Manish Jha',
  'meta'         => 'Delhi High Court partly sets aside a DDA arbitral award under Section 34: prolongation costs without evidentiary foundation and claims beyond excepted matters fail.',
  'h1'           => 'Prolongation Costs Without Evidence Cannot Stand: Delhi High Court on Section 34',
  'crumb'        => 'Section 34 — DDA Award',
  'kicker'       => 'Delhi High Court · 2 September 2026',
  'sub'          => 'Upholding most of a construction award, the Court set aside a prolongation-cost claim that identified no supporting material and a claim that trespassed on an excepted matter.',
  'date'         => '2026-09-10',
  'date_display' => '10 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>DDA v. M/s Swastic Construction Co.</em>, O.M.P. (COMM) 143/2016 (decided 2 September 2026), Justice Om Prakash Shukla of the High Court of Delhi ruled on the Delhi Development Authority\'s challenge to an arbitral award arising out of a contract for slip roads and flyover remodelling work at Noida Mor. The Court upheld the bulk of the award but set aside two claims — a prolongation-cost award unsupported by any identified material, and an award on a matter the contract had excluded from arbitration. The judgment is a compact illustration of where the narrow Section 34 jurisdiction bites and where it does not.</p>',
  'related'      => ['business-corporate-law.php' => 'Commercial &amp; Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Litigation', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Can a court under Section 34 re-appreciate the arbitrator\'s view of evidence?', 'No. Section 34 of the Arbitration and Conciliation Act, 1996 does not permit the court to sit in appeal over the award. Interference is confined to grounds such as patent illegality and conflict with public policy — for instance, findings with no evidentiary foundation at all, or awards travelling outside the contract.'],
    ['Why were the prolongation costs set aside in this case?', 'Because the award did not identify any material from which either the expenditure incurred during the prolonged period or the rate adopted could reasonably be found. An award that supplies no discernible evidentiary basis for a quantified claim is vulnerable as patently illegal, even under the deferential Section 34 standard.'],
    ['What is an "excepted matter" in a construction contract?', 'Contracts such as standard government works contracts designate certain decisions — often those of a named authority, like deductions or determinations under a specific clause — as final and outside arbitration. An arbitrator who adjudicates an excepted matter acts beyond jurisdiction, and that part of the award can be severed and set aside.'],
    ['Does setting aside part of an award affect the rest of it?', 'No. Severable parts of an award stand or fall independently. Courts routinely uphold claims that are well founded while setting aside only the offending claims, as the Delhi High Court did here.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — DDA v. Swastic Construction Co., Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/50362827/'],
  ],
];
$BODY = <<<'HTML'
<h2>The dispute</h2>
<p>The contract required completion of slip roads and remodelling work by 10 May 2010; the work was actually completed on 25 February 2011. Disputes over the final bill, escalation, withheld amounts and prolongation costs went to a sole arbitrator, who by an award dated 30 May 2014 allowed various sums across eleven claims. The DDA challenged the award under Section 34 of the Arbitration and Conciliation Act, 1996.</p>

<h2>What survived and what fell</h2>
<div class="compare">
<div class="col old"><strong>Upheld.</strong> Claims 1 to 5 — including final-bill and withheld-amount claims — and part of Claim 10. The Court held that where the arbitrator's conclusions rest on a plausible reading of the contract and the record, the possibility of an alternative interpretation is no ground to interfere.</div>
<div class="arrow">→</div>
<div class="col new"><strong>Set aside.</strong> Claim 8 (Rs. 9,45,000 as prolongation costs), because "the award does not identify material from which either the expenditure or the rate adopted can reasonably be found"; and Claim 9 (Rs. 19,353), because the arbitrator adjudicated a matter excluded from arbitration by Clause 25-B — an excepted matter — and thereby exceeded jurisdiction.</div>
</div>
<p>The Court emphasised that Section 34 permits interference only where an award travels outside the boundaries of the contract or lacks any evidentiary foundation — not merely because the court might have read the material differently.</p>

<h2>Proving prolongation costs: the standing weakness</h2>
<p>Prolongation claims are among the most commonly awarded and most commonly set-aside heads in construction arbitration. The reason is visible in this judgment: contractors often prove that the employer caused delay, then leap to a computed figure — a percentage of contract value, or a monthly rate — without proving the actual expenditure referable to the extended period. An arbitrator who adopts such a figure without anchoring it in identified material produces an award that cannot survive even deferential review.</p>
<div class="flow">
<div class="fstep"><strong>Establish responsibility.</strong> Show that the delay is attributable to the employer, with extension-of-time records and hindrance registers.</div>
<div class="fstep"><strong>Prove the loss.</strong> Place on record establishment costs, machinery and overhead expenditure actually incurred during the prolonged period — ledgers, muster rolls, plant logs.</div>
<div class="fstep"><strong>Justify the rate.</strong> If a formula is used, the award must explain why the formula reasonably approximates the proven expenditure. A bare figure is the vulnerability.</div>
</div>

<h2>Excepted matters: a jurisdictional line, not a merits question</h2>
<p>The setting aside of Claim 9 turned not on evidence but on jurisdiction. Where the contract makes a designated authority's decision on a specified matter final, that matter is outside the arbitrator's remit altogether. The lesson for claimants is to screen claims against the excepted-matters clause before referring them; the lesson for award-debtors is that an excepted-matter objection survives into Section 34 even where the merits of the claim look sympathetic.</p>

<h2>The takeaway</h2>
<p>Fifteen years after the work was done, the parties' rights were finally settled not by re-arguing the merits but by two structural questions: was there evidence identified in the award, and was the claim arbitrable under the contract? Section 34 practice in Delhi continues to reward parties who build their arbitration record with those two questions in mind from the first pleading.</p>
HTML;
include __DIR__ . '/post-layout.php';
