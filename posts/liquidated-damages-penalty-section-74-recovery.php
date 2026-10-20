<?php
$P = [
  'slug'         => 'liquidated-damages-penalty-section-74-recovery.php',
  'title'        => 'Liquidated Damages: Section 74 – Advocate Manish Jha',
  'meta'         => 'Liquidated damages and penalty clauses under Section 74 of the Contract Act: reasonable compensation, proof of loss, forfeiture clauses and drafting lessons for recovery suits.',
  'h1'           => 'Liquidated Damages and Penalty Clauses: How Section 74 Actually Works',
  'crumb'        => 'Liquidated Damages',
  'kicker'       => 'Explainer · Commercial & Corporate',
  'sub'          => 'A stipulated damages figure is a ceiling and a starting point — not an automatic entitlement. Section 74 rewards parties who can still show what the breach cost them.',
  'date'         => '2026-10-20',
  'date_display' => '20 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Most commercial contracts fix the consequences of breach in advance: a per-week sum for delayed delivery, forfeiture of earnest money, a lump figure for walking out of the deal. Indian law gathers all of these under Section 74 of the Indian Contract Act, 1872, which cuts through the old English distinction between "liquidated damages" and "penalties" with one working rule — the innocent party gets <em>reasonable compensation not exceeding the stipulated amount</em>. The clause caps recovery; it does not guarantee it.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'property-disputes.php' => 'Property Disputes', 'civil-law.php' => 'Civil Litigation'],
  'faqs'         => [
    ['If the contract fixes damages, must the claimant still prove loss?', 'As a general rule, yes — the claimant must show the kind and broad extent of loss the breach caused, and the court awards reasonable compensation within the stipulated ceiling. The statutory words "whether or not actual damage or loss is proved" relieve the claimant of precise arithmetic where loss is real but hard to quantify; they do not reward a party that suffered no loss at all.'],
    ['What is the difference between liquidated damages and a penalty?', 'A liquidated damages clause is a genuine pre-estimate of the likely loss; a penalty is a sum fixed in terrorem to punish breach. Under Section 74 the label matters less than in English law, because in either case the court awards only reasonable compensation up to the named amount. A genuine pre-estimate, however, is far more likely to be enforced as stated, since it is itself the best evidence of reasonableness.'],
    ['Can earnest money or a security deposit be forfeited on breach?', 'Forfeiture of a reasonable amount of earnest money, as a recognised incident of a sale transaction, is generally permissible. But where the forfeiture clause operates as a stipulation by way of penalty — for example, forfeiting a large deposit disproportionate to any conceivable loss — Section 74 applies and the forfeiting party can be confined to reasonable compensation.'],
    ['Do liquidated damages apply if the claimant caused part of the delay?', 'A party cannot recover liquidated damages for delay to which it materially contributed. In construction practice, employer-caused delays, drawings issued late or site handed over late are standard defences to LD deductions, and extension-of-time machinery in the contract must be worked honestly before the clause is invoked.'],
  ],
  'sources'      => [
    ['label' => 'Indian Contract Act, 1872 (Sections 73–75) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi District Courts', 'url' => 'https://delhidistrictcourts.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory scheme: Sections 73 and 74 together</h2>
<p>Section 73 is the general rule: the party who suffers from a breach is entitled to compensation for loss that naturally arose in the usual course of things, or that the parties knew when they contracted to be the likely result of breach — but nothing for remote or indirect loss. Section 74 then addresses the case where the contract itself names a sum payable on breach, or contains "any other stipulation by way of penalty".</p>
<table class="law">
  <tr><th>Element of Section 74</th><th>Effect</th></tr>
  <tr><td>A sum is named in the contract as payable on breach</td><td>The claimant is entitled to reasonable compensation <em>not exceeding</em> that sum.</td></tr>
  <tr><td>"Whether or not actual damage or loss is proved to have been caused"</td><td>Precise proof of quantum is not insisted upon where loss is inherently difficult to measure; the stipulated figure then guides the award.</td></tr>
  <tr><td>"Or any other stipulation by way of penalty"</td><td>Disguised penalties — enhanced interest on default, disproportionate forfeitures — are also cut down to reasonable compensation.</td></tr>
  <tr><td>Ceiling function</td><td>The named sum is the maximum; the court cannot award more under the clause, however large the actual loss (the claim must then be framed differently).</td></tr>
</table>

<h2>Where the clause is enforced as written</h2>
<p>Courts respect a stipulated figure most readily where three things line up: the clause is a genuine pre-estimate made by commercial parties of comparable strength; the loss from breach is real but inherently hard to compute — loss of marketability, delayed commissioning of a plant, reputational or opportunity loss; and the figure is proportionate to the contract value and the risk. In such cases the claimant is not driven to prove loss rupee by rupee, because demanding exact proof of the unprovable would defeat the purpose of fixing damages in advance.</p>

<h2>Where it is cut down</h2>
<div class="tiles">
  <div class="tile"><h4>No loss at all</h4><p>If the evidence shows the breach caused no loss — the goods were resold at a profit, the project finished on time anyway — reasonable compensation can be nil or nominal despite the clause.</p></div>
  <div class="tile"><h4>Punitive design</h4><p>A figure fixed to terrorise rather than estimate — default interest leaping to extortionate rates, forfeiture of an entire deposit for a trivial breach — is a penalty, and only reasonable compensation survives.</p></div>
  <div class="tile"><h4>Claimant's own contribution</h4><p>Delay or non-performance attributable to the claimant's own defaults erodes or defeats the claim; LD clauses do not reward a party for obstacles it created.</p></div>
</div>

<h2>Common commercial settings</h2>
<div class="check">
  <ul>
    <li><strong>Construction and supply contracts:</strong> per-week delay LDs, usually capped at a percentage of contract value. The cap, the extension-of-time clause and the employer's own delays are the three battlegrounds.</li>
    <li><strong>Agreements to sell immovable property:</strong> forfeiture of earnest money on the buyer's default. Reasonable earnest, genuinely paid as security for performance, stands on better footing than inflated "deposits".</li>
    <li><strong>Loan and finance documents:</strong> default interest above the contract rate is a classic Section 74 stipulation; only a reasonable uplift is protected.</li>
    <li><strong>Service and franchise agreements:</strong> lock-in and early-exit charges are tested for proportionality against the provider\'s real unrecovered costs.</li>
  </ul>
</div>

<h2>Pleading and proving an LD claim</h2>
<div class="flow">
  <div class="fstep"><strong>Plead the clause and the breach</strong> — identify the stipulation, the breach event and the computation under it.</div>
  <div class="fstep"><strong>Plead the loss</strong> — even with a clause, plead the nature of loss suffered and why quantification is difficult, so the clause can do its work.</div>
  <div class="fstep"><strong>Prove causation</strong> — connect the breach to the loss and rebut any contributory-delay defence with contemporaneous records.</div>
  <div class="fstep"><strong>Claim within the ceiling</strong> — the clause caps the claim; loss beyond it needs an independent footing under Section 73, if the contract permits.</div>
  <div class="fstep"><strong>Interest and costs</strong> — claim contractual or statutory interest separately; in commercial suits, the costs regime follows the event.</div>
</div>

<h2>Drafting lessons for businesses</h2>
<p>For the party likely to claim, the clause should read as an estimate, not a threat: record in the contract <em>why</em> the figure is a genuine pre-estimate, tie it to identifiable heads of likely loss, and graduate it to the seriousness of breach. For the party likely to pay, negotiate an aggregate cap, carve out delays caused by the other side, and insist that the LD remedy be the exclusive remedy for delay. Both sides benefit from a clause that a court can respect without rewriting — because under Section 74 a court can, and will, rewrite the ones it cannot.</p>
<div class="note">
  <p>This article states general principles of Indian contract law for information. The enforceability of a particular clause always turns on its wording and the evidence; it is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
