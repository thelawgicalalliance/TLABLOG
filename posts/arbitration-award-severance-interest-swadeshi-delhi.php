<?php
$P = [
  'slug'         => 'arbitration-award-severance-interest-swadeshi-delhi.php',
  'title'        => 'Severing An Arbitral Award – Advocate Manish Jha',
  'meta'         => 'Delhi High Court partly sets aside an arbitral award under Section 34, severing unclaimed interest while upholding an early-completion bonus and GST reimbursement.',
  'h1'           => 'Cut the Bad, Keep the Good: Section 34 Severance After Gayatri Balasamy',
  'crumb'        => 'Commercial — Arbitration',
  'kicker'       => 'Delhi High Court · 12 October 2026',
  'sub'          => 'Justice Manoj Jain upholds a contractor\'s ₹7.46 crore early-completion bonus and a conditional GST direction, but severs interest awarded on a claim for which interest was never sought — applying the Supreme Court\'s majority view on partial setting aside.',
  'date'         => '2026-10-14',
  'date_display' => '14 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Must a court that finds one flaw in an arbitral award demolish the whole structure? Since the Supreme Court\'s majority ruling in <em>Gayatri Balasamy</em>, the answer is no: an invalid portion that is severable can be excised, leaving the rest intact. <em>Union of India v. Swadeshi Civil Infrastructure Pvt. Ltd.</em> (O.M.P. (COMM) 563/2025, decided on 12 October 2026) is a clean illustration. Justice Manoj Jain of the Delhi High Court, testing an award arising from the construction of 76 multi-storey flats for Members of Parliament, upheld the contractor\'s early-completion bonus and GST reimbursement but set aside interest granted on a claim for which no interest had ever been sought.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What was the bonus dispute about?', 'The contract promised a bonus under Clause 2A for early completion. The Tribunal, after allotting hindrance days under various clauses, awarded ₹7,46,53,850. The Union argued that 138 days allowed under Clause 5.2 — a force majeure-type provision — should not count towards the bonus because Clause 2A does not mention Clause 5.2. The Court held the omission insignificant: Clause 5.2 bars damages for extended time, not a bonus, and delays of that kind suspend timelines, so early completion still earns the reward.'],
    ['Why was the interest component severed?', 'Because the contractor had never claimed interest on Claim 2. An award of relief never sought travels beyond the scope of the reference and is illegal to that extent. Under the majority view in Gayatri Balasamy, a court under Section 34 may sever an invalid, separable portion rather than set aside the entire award — which is exactly what was done.'],
    ['What did the Court say about the GST claim?', 'The Tribunal had directed reimbursement of GST only where it is actually payable. Since the direction was conditional — GST may attach to components like price escalation but not to compensation — there was nothing offending to correct, and the claim survived scrutiny under Sections 73 and 74 of the Contract Act as raised.'],
    ['Does Section 34 allow the court to re-appreciate the Tribunal\'s contract reading?', 'No. The Court expressly declined to sit as an appellate forum: a plausible interpretation of contract clauses by the arbitrator binds the parties unless it is perverse or patently illegal. The bonus finding was neither illogical nor illegal, so it stood.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Union of India v. Swadeshi Civil Infrastructure, Delhi High Court, 12.10.2026 (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/150140027/'],
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
  ],
];
$BODY = <<<'HTML'
<h2>The project and the award</h2>
<p>The agreement of July 2018 covered construction of 76 multi-storeyed flats at Dr. B.D. Marg, New Delhi. The arbitral award of June 2025 resolved a familiar bundle of construction claims; the Union challenged only three. Claim 1 was the early-completion bonus; Claim 4, interest; Claim 7, GST reimbursement. Notably, the parties had agreed to a documents-only arbitration without oral evidence, and the Union did not dispute the hindrance-day arithmetic — 144 days under Clause 5.3, 114 for additional work, 138 under Clause 5.2 — only its legal consequence for the bonus.</p>

<h2>Three claims, three outcomes</h2>
<table class="law">
<tr><th>Claim</th><th>Tribunal</th><th>Section 34 result</th></tr>
<tr><td>Claim 1 — early-completion bonus</td><td>₹7,46,53,850 awarded under Clause 2A</td><td>Upheld: Clause 5.2 suspends timelines without forfeiting the bonus; the reading was neither illogical nor illegal</td></tr>
<tr><td>Claim 4 — interest</td><td>Interest granted, including on Claim 2</td><td>Partly set aside: interest on Claim 2 was never claimed, hence beyond the reference; severed under the Gayatri Balasamy majority</td></tr>
<tr><td>Claim 7 — GST</td><td>Reimbursement directed where actually payable</td><td>Upheld: a conditional direction leaves taxability to be worked out component-wise and needs no interference</td></tr>
</table>

<h2>Severance as the new normal</h2>
<p>Before the Supreme Court\'s pronouncement on modification and partial setting aside, respondents under Section 34 pressed an all-or-nothing logic: one jurisdictional flaw, they argued, infected the award entirely. The present judgment shows how the doctrine now operates in practice. The infirmity — interest on an unclaimed head — was identified, tested for separability, found severable, and excised with surgical economy, while eight-figure findings on the merits were left untouched. For award-holders, the development dramatically reduces the hostage value of small defects; for challengers, it concentrates the battle on genuinely separable illegality, because a scattershot petition no longer threatens the award\'s core.</p>

<h2>Drafting and pleading lessons from the bonus fight</h2>
<div class="check">
<p>Employers drafting incentive clauses should state expressly which categories of extension count towards — or against — a completion bonus; silence, as Clause 2A\'s silence on Clause 5.2 shows, is construed by arbitrators and courts, not by the party who later regrets it. Contractors should plead every head of interest claim explicitly, claim by claim: the severed interest here was lost not on merits but because it was never asked for. And both sides should remember that a documents-only arbitration binds them to the paper record — hindrance registers, extension correspondence and running-account entries decide these cases.</p>
</div>

<div class="note">
<p>Challenges under Section 34 must be filed within three months (extendable by thirty days) of receipt of the award, and the grounds are confined to those enumerated — patent illegality, scope, natural justice, and conflict with public policy. An appeal from a Section 34 outcome lies under Section 37, where the scope of review is narrower still.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
