<?php
$P = [
  'slug'         => 'security-for-costs-order-xxv-commercial-suits.php',
  'title'        => 'Security for Costs in Civil Suits – Advocate Manish Jha',
  'meta'         => 'Order XXV CPC explained: when defendants can seek security for costs from plaintiffs, foreign plaintiffs, consequences of default, and commercial suit practice.',
  'h1'           => 'Making the Plaintiff Stand Good for Costs: Order XXV CPC in Commercial Practice',
  'crumb'        => 'Security for Costs',
  'kicker'       => 'Practice Explainer · Order XXV CPC',
  'sub'          => 'A defendant dragged into litigation by a plaintiff with no reachable assets in India has a targeted answer — an order for security for costs, with dismissal of the suit as the sanction for default.',
  'date'         => '2026-09-12',
  'date_display' => '12 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Costs orders are only as good as the assets they can be executed against. When the plaintiff is a foreign entity, an NRI without Indian immovable property, or a shell with nothing in its name, a defendant can win the suit and still be left holding an irrecoverable costs decree. Order XXV of the Code of Civil Procedure exists for this situation: the court may order the plaintiff to give security for the defendant\'s costs, and must consider doing so in defined cases involving plaintiffs outside India without sufficient immovable property here. In commercial litigation — where the Commercial Courts Act has sharpened the costs regime generally — the application is an underused piece of defensive craft. This explainer covers when it lies, how courts exercise the discretion, and what follows default.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'civil-law.php' => 'Civil Litigation', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['When can a court order security for costs?', 'Order XXV Rule 1 empowers the court, at any stage, on the defendant\'s application or its own motion, to order the plaintiff to give security for the defendant\'s costs within a fixed time. The power is discretionary in general, but the rule specifically directs that such an order shall be made where the sole plaintiff (or all plaintiffs) resides outside India and does not possess sufficient immovable property within India, apart from the suit property.'],
    ['Does it apply to foreign companies and NRIs?', 'That is its core constituency. A plaintiff company incorporated abroad, or an individual settled overseas, suing in Delhi without sufficient Indian immovable property, is squarely within the mandatory limb. The defendant should place on record the plaintiff\'s residence/incorporation and the absence of disclosed Indian assets — often demonstrable from the plaint and its own filings.'],
    ['What happens if security is not furnished?', 'Order XXV Rule 2: the court shall dismiss the suit unless the plaintiff is permitted to withdraw. Dismissal for default of security operates as a serious sanction, though the rule allows restoration on an application showing sufficient cause for the failure, on terms.'],
    ['Is the remedy available in arbitration-related and commercial proceedings?', 'The CPC applies to commercial suits with the Act\'s modifications, and the costs-shifting philosophy of Section 35 CPC (as amended for commercial disputes) makes security applications more consequential, since realistic costs awards are now the norm rather than the exception. In arbitral proceedings, tribunals draw on their own powers over interim measures and costs; the Order XXV application belongs to court litigation.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — official text (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191'],
  ],
];
$BODY = <<<'HTML'
<h2>The problem the rule solves</h2>
<p>Litigation is an asymmetric bet when one side has nothing to lose. A plaintiff beyond the practical reach of execution can prosecute a weak claim, extract settlement value from the defendant\'s litigation costs, and face no consequence on dismissal. Order XXV rebalances that bet: it converts the plaintiff\'s continued prosecution of the suit into a funded commitment, by requiring money or security in court that will answer the defendant\'s costs if the claim fails.</p>

<h2>The two limbs</h2>
<div class="compare">
<div class="col old"><h3>Discretionary limb</h3><p>Any suit, any plaintiff: the court "may" order security for costs where the justice of the case demands — habitually vexatious claims, admitted impecuniosity coupled with speculative claims, or conduct suggesting the suit is leverage rather than adjudication.</p></div>
<div class="arrow">&rarr;</div>
<div class="col new"><h3>Mandatory-inclination limb</h3><p>Plaintiff(s) residing outside India without sufficient immovable property in India (other than the suit property): the rule says such an order "shall" be made. This is the workhorse in cross-border commercial disputes.</p></div>
</div>

<h2>Building the application</h2>
<div class="tiles">
<div class="tile"><strong>Prove the residence element.</strong> The plaint\'s own address block, incorporation documents, and the plaintiff\'s verification often establish foreign residence without further evidence.</div>
<div class="tile"><strong>Address the property element.</strong> The burden dynamics favour the defendant: assert the absence of disclosed Indian immovable property and put the plaintiff to disclosure. Suit property itself does not count.</div>
<div class="tile"><strong>Quantify realistically.</strong> Propose a figure referenced to the actual costs trajectory — court fees, counsel\'s fees under the commercial costs regime, expert costs. Token figures invite token orders.</div>
<div class="tile"><strong>Time it early.</strong> The power exists "at any stage", but an application at the threshold — with the written statement or soon after — reads as principled; one on the eve of trial reads as tactical delay and may be dealt with accordingly.</div>
</div>

<div class="note">
<p>Security for costs is not a merits filter and must not be argued as one. The court is not asked to disbelieve the claim, only to ensure that the defendant\'s eventual costs decree is executable. Framing the application in that neutral register improves its reception markedly.</p>
</div>

<h2>Default and its consequences</h2>
<p>If security is not furnished within the time fixed, Rule 2 directs dismissal of the suit — unless the plaintiff withdraws. A plaintiff dismissed for default may apply for restoration by proving it was prevented by sufficient cause from furnishing security, and courts impose terms on restoration. For defendants, a dismissal under Order XXV is a complete answer to the claim as framed; for plaintiffs, the rule is a reminder that access to Indian courts, while open to all, carries the ordinary responsibility of answering for costs.</p>

<h2>Strategic place in Delhi commercial defence</h2>
<p>In the Delhi High Court\'s commercial division and the district commercial courts, the application pairs naturally with other threshold defences: challenges to valuation, Order VII Rule 11 objections, and demands for discovery under Order XI. Where the plaintiff is offshore — increasingly common in IP, shareholder and trading disputes — the Order XXV application should be a standing item on the defence checklist. Even where the court fixes a modest amount, the order changes the economics of the litigation and signals early that the defendant intends to make costs consequences real.</p>
HTML;
include __DIR__ . '/post-layout.php';
