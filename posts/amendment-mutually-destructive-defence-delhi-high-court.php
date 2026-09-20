<?php
$P = [
  'slug'         => 'amendment-mutually-destructive-defence-delhi-high-court.php',
  'title'        => 'No U-Turn In Pleadings: Delhi HC – Advocate Manish Jha',
  'meta'         => 'Delhi High Court refuses amendment of a written statement that would replace a categorical denial with a mutually destructive defence in a commercial recovery suit.',
  'h1'           => 'From Total Denial to Purchase Orders: The Amendment That Came Three Years Too Late',
  'crumb'        => 'Commercial — Amendment of Pleadings',
  'kicker'       => 'Delhi High Court · 18 September 2026',
  'sub'          => 'In Holisticc Construction Pvt Ltd v. Floritech Buildcon Pvt Ltd (CM(M) 3094/2024), Justice Ajay Digpaul upheld the rejection of an application under Order VI Rule 17 CPC by which the defendant sought to abandon its categorical denial and set up a contrary defence based on its own pre-suit documents.',
  'date'         => '2026-09-20',
  'date_display' => '20 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A defendant in a recovery suit denied everything: no liability, no invoices received, no purchase orders. Three years later, the same defendant sought to amend its written statement to plead that it had in fact issued three purchase orders — and that the supplier\'s invoices exceeded what those orders authorised. The Delhi High Court\'s decision of 18 September 2026 in <em>Holisticc Construction Pvt Ltd v. Floritech Buildcon Pvt Ltd</em>, on a petition under Article 227, holds the line: pleadings may take alternate positions, but not mutually destructive ones, and a categorical admission or denial cannot be resiled from without a credible explanation.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What was the underlying suit?', 'The respondent, a supplier of stone materials, sued for recovery of ₹17,42,216. The petitioner-defendant\'s written statement categorically denied any payment obligation and denied receiving invoices or purchase orders. The amendment application, filed about three years later, sought to plead that the defendant had issued purchase orders worth ₹43,36,162 and that invoices of ₹76,20,362 exceeded the authorised amounts.'],
    ['Why was the amendment refused?', 'Because the new defence was mutually destructive of the original one. A party that has categorically denied any transaction cannot later build a defence on the very documents it denied, particularly documents that predate the suit and were always within its own records. The explanation that the purchase orders came to the defendant\'s knowledge later was found unconvincing for a corporate entity.'],
    ['Are alternate pleas ever permitted?', 'Yes — the CPC allows alternate and even inconsistent pleas, and amendments are ordinarily granted liberally before trial begins. The prohibition is narrower: pleas that destroy each other, or amendments that withdraw a clear admission to the opposite party\'s prejudice, are not permitted under the cover of Order VI Rule 17.'],
    ['What is the High Court\'s role under Article 227 here?', 'Supervisory, not appellate. The High Court examined whether the trial court\'s refusal was perverse or jurisdictionally flawed, found it was neither, and dismissed the petition without expressing any opinion on the merits of the recovery claim.'],
  ],
  'sources'      => [ ['label' => 'Judgment — Delhi High Court (Indian Kanoon record)', 'url' => 'https://indiankanoon.org/doc/70385955/'] ],
];
$BODY = <<<'HTML'
<h2>The litigation history</h2>
<p>Floritech Buildcon supplied stone materials and sued Holisticc Construction for ₹17,42,216. The written statement was an exercise in total denial: no payment obligation, no invoices, no purchase orders. Three years into the suit, the defendant moved under Order VI Rule 17 CPC to amend, now asserting that it had itself issued three purchase orders totalling ₹43,36,162 — and constructing from them a defence that the plaintiff's invoices of ₹76,20,362 exceeded the authorised supply. The trial court dismissed the application, and the defendant carried the matter to the High Court under Article 227 of the Constitution.</p>

<h2>What the High Court held</h2>
<p>Justice Ajay Digpaul dismissed the petition. Two propositions anchor the decision. First, while a party may take alternate pleas, they cannot be mutually destructive of each other: a defence of "no transaction at all" and a defence of "a transaction on these limited terms" cannot coexist. Second, a categorical admission cannot be resiled from without a reasonable explanation — and a company claiming that its own purchase orders, issued before the suit, surfaced only years later offered no credible account of that discovery. The Court also distinguished the precedents relied upon, which concerned amendments founded on subsequent events or genuinely new circumstances, not on the denial of pre-existing facts within the applicant's own records.</p>

<h2>The two lines the order draws</h2>
<div class="compare">
<div class="col old"><h4>Permitted</h4><p>Alternate pleas ("no contract; alternatively, the contract was performed"); amendments clarifying or elaborating an existing defence; amendments founded on events after the written statement; pre-trial amendments generally, given the liberal standard.</p></div>
<div class="arrow">→</div>
<div class="col new"><h4>Refused</h4><p>Pleas that destroy each other; withdrawal of categorical admissions or denials without explanation; defences built on documents the party always possessed but chose to deny; amendments that fundamentally alter the defence after years of litigation.</p></div>
</div>

<h2>Why commercial litigants should care</h2>
<p>Recovery suits between suppliers and contractors turn on documents — purchase orders, invoices, ledgers, delivery challans. The first pleading is therefore a commitment: a written statement drafted as a blanket denial forecloses the more nuanced quantum defences that the documents might genuinely support. This judgment shows the cost of that drafting choice. Once the denial was on record, the documents that could have grounded a partial defence became unusable, because deploying them meant contradicting the party's own sworn position.</p>

<h2>Practical notes</h2>
<div class="check">
<p>Audit the client's complete documentary record before the written statement is filed — the purchase orders you deny today cannot found your defence tomorrow.</p>
<p>Plead quantum defences in the alternative from the outset: liability denied; without prejudice, the invoices exceed the ordered quantities. That structure is permissible; a later U-turn is not.</p>
<p>In commercial suits the timelines are tighter still — the 120-day outer limit for written statements makes early document work non-negotiable.</p>
<p>Remember the supervisory ceiling: an Article 227 petition against an amendment order must show perversity, not merely argue the discretion afresh.</p>
</div>

<h2>The wider frame</h2>
<p>Order VI Rule 17 remains a liberal provision, and courts routinely allow amendments necessary for determining the real questions in controversy. The discipline this decision enforces is about candour, not rigidity: the amendment power exists to complete the record, not to let a litigant rewrite its case when the first version stops being convenient. For advocates drafting defences in Delhi's commercial courts, the message is to front-load the documentary analysis — the pleading filed first is the one the client lives with.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
