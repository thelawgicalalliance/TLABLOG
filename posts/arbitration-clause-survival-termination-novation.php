<?php
$P = [
  'slug'         => 'arbitration-clause-survival-termination-novation.php',
  'title'        => 'Does The Arbitration Clause Survive? – Advocate Manish Jha',
  'meta'         => 'Termination, repudiation, novation and settlement affect contracts differently — and the arbitration clause differently again. Separability and survival explained.',
  'h1'           => 'Termination, Novation, Settlement: When the Arbitration Clause Survives the Contract',
  'crumb'        => 'Arbitration — Clause Survival',
  'kicker'       => 'Practice Explainer · 24 September 2026',
  'sub'          => 'Section 16 of the Arbitration and Conciliation Act treats the arbitration clause as an agreement independent of the contract that houses it. That doctrine of separability answers most survival questions — but not all of them, and the exceptions decide real cases.',
  'date'         => '2026-09-24',
  'date_display' => '24 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A contract dies in many ways: performance, breach and acceptance of repudiation, termination under an exit clause, frustration, mutual rescission, novation into a new bargain, or settlement of the disputes it produced. Each time, one question follows the obsequies — can a party still invoke the arbitration clause? The Arbitration and Conciliation Act, 1996 answers through the doctrine of separability, codified in Section 16(1): the arbitration clause is treated as an agreement independent of the other terms, and a decision that the contract is null and void does not entail <em>ipso jure</em> the invalidity of the arbitration clause. This article maps how that principle plays out across the common endings of commercial contracts.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notice Replies', 'delhi-high-court.php' => 'Delhi High Court Practice', 'blog.php' => 'All Articles'],
  'faqs'         => [
    ['Why does termination not kill the arbitration clause?', 'Because the clause&rsquo;s very purpose is to govern disputes about the contract — including disputes about whether it was validly terminated and what follows from termination. If ending the contract ended the clause, every respondent could defeat arbitration by the act that created the dispute. Separability keeps the dispute-resolution machinery standing amid the wreckage of the substantive bargain.'],
    ['What is the effect of novation on the clause?', 'Novation substitutes a new contract for the old one, extinguishing the old contract altogether. Whether arbitration survives then depends on the new bargain: if the substituted contract contains its own arbitration clause, disputes travel there; if it contains none, a party asserting that the old clause persists faces the argument that it perished with the contract it inhabited. Because novation is often itself disputed, tribunals routinely decide — under the competence-competence power in Section 16 — whether a true novation occurred at all.'],
    ['Does a settlement agreement end the right to arbitrate?', 'A full and final settlement discharging the contract by accord and satisfaction typically leaves nothing arbitrable under the original clause — though disputes about whether the settlement was validly obtained (coercion, economic duress) or whether it actually covered the claim can themselves fall to the tribunal. Careful settlements say expressly what happens to the arbitration agreement and to pending or future claims.'],
    ['Who decides these survival questions — court or tribunal?', 'Primarily the tribunal. Section 16 empowers the arbitral tribunal to rule on its own jurisdiction, including objections that the contract — and with it the clause — stands discharged, novated or settled. At the referral stage courts confine themselves to a prima facie view of the existence of the arbitration agreement, leaving deeper survival questions to the arbitrators.'],
  ],
  'sources'      => [ ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/'] ],
];
$BODY = <<<'HTML'
<h2>The doctrinal spine: separability and competence-competence</h2>
<p>Two provisions do the structural work. Section 16(1)(a) directs that an arbitration clause which forms part of a contract shall be treated as an agreement independent of the contract&rsquo;s other terms; Section 16(1)(b) adds that a tribunal&rsquo;s decision that the contract is null and void shall not entail the invalidity of the arbitration clause. Alongside sits competence-competence: the tribunal rules on its own jurisdiction, so most attacks on the clause&rsquo;s survival are argued to the arbitrators first, with court control reserved for the challenge and enforcement stages.</p>

<h2>How the common endings compare</h2>
<table class="law">
<tr><th>How the contract ended</th><th>Fate of the arbitration clause</th></tr>
<tr><td>Performance completed</td><td>Clause survives for disputes about performance already rendered — defects, retention, final bills.</td></tr>
<tr><td>Termination for breach / repudiation accepted</td><td>Clause survives robustly; the validity and consequences of termination are precisely what it exists to decide.</td></tr>
<tr><td>Frustration / force majeure discharge</td><td>Clause survives to determine whether frustration occurred and to adjust the parties&rsquo; consequent rights.</td></tr>
<tr><td>Contract void ab initio</td><td>Clause not automatically invalid — s. 16(1)(b); the tribunal may rule on the contract&rsquo;s voidness. Attacks aimed specifically at the making of the arbitration agreement itself stand on a different footing.</td></tr>
<tr><td>Novation / substitution by new agreement</td><td>The danger zone: extinguishment of the old contract can carry the clause with it, subject to the terms of the new bargain; disputed novation goes to the tribunal.</td></tr>
<tr><td>Full and final settlement</td><td>Accord and satisfaction generally exhausts the clause for settled claims; validity and scope of the settlement can remain arbitrable.</td></tr>
</table>

<h2>Where parties get into trouble</h2>
<div class="check">
<p><strong>Superseding agreements drafted in silence.</strong> Renewal, restructuring or master-agreement migrations that omit any dispute-resolution clause create the novation trap: the old clause arguably extinguished, the new bargain arbitration-less. Every superseding document should either restate the arbitration agreement or expressly preserve it.</p>
<p><strong>Settlements that settle too vaguely.</strong> &ldquo;Full and final&rdquo; language without claim-mapping breeds the next dispute — whether a particular claim was within the settlement. Recite the claims settled, the claims surviving, and the forum for disputes about the settlement itself.</p>
<p><strong>Termination letters that disclaim arbitration.</strong> Parties sometimes terminate &ldquo;the contract including its arbitration clause.&rdquo; The unilateral disclaimer is ineffective — one party cannot cancel a dispute-resolution agreement by announcement — but it seeds jurisdictional skirmishing that costs a year.</p>
<p><strong>Assignments and business transfers.</strong> Whether the clause travels with assigned rights or transferred businesses depends on the assignment&rsquo;s terms and the obligations&rsquo; nature; transaction documents should deal with the arbitration agreement expressly rather than by hope.</p>
</div>

<div class="note"><p>Drafting insurance costs one sentence: a survival clause providing that the dispute-resolution provisions survive termination, expiry, discharge or supersession of the agreement, and apply to any dispute arising out of or in connection with it, including disputes as to its validity, termination or replacement. Tribunals and courts reach that result unaided in most cases — but the sentence removes the argument.</p></div>

<h2>The takeaway</h2>
<p>The arbitration clause is built to outlive its contract; separability ensures that breach, termination and even voidness rarely disturb it. Its true mortal enemies are consensual: novation without re-agreement and settlement without precision. Parties who carry the clause forward expressly in every superseding document, and who settle with claim-level clarity, never have to litigate where their disputes will be litigated.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
