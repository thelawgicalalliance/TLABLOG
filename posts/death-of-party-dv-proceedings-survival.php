<?php
$P = [
  'slug'         => 'death-of-party-dv-proceedings-survival.php',
  'title'        => 'Death Of A Party In DV Cases – Advocate Manish Jha',
  'meta'         => 'What happens to a Domestic Violence Act case when the respondent or the aggrieved person dies — which reliefs survive, which abate, and how legal heirs are affected.',
  'h1'           => 'When a Party Dies Mid-Case: Survival and Abatement in DV Act Proceedings',
  'crumb'        => 'Matrimonial & Family — DV Act',
  'kicker'       => 'Practice Explainer · Protection of Women from Domestic Violence Act, 2005',
  'sub'          => 'DV proceedings sit between civil and criminal law, and so does the effect of a party\'s death: protection orders die with the person they restrained, but accrued monetary claims and residence rights can have a life beyond.',
  'date'         => '2026-10-13',
  'date_display' => '13 October 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">The Protection of Women from Domestic Violence Act, 2005 creates a bundle of reliefs — protection, residence, monetary relief, custody and compensation — enforced through criminal courts but civil in substance. When the respondent or the aggrieved person dies during the proceedings, no single rule of abatement applies to that bundle. Each relief must be examined for what it is: a personal restraint, a property-linked right, or a money claim that has already accrued.</p>',
  'related'      => ['domestic-violence.php' => 'Domestic Violence', 'matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', 'child-custody.php' => 'Child Custody', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['Does a DV case abate entirely when the respondent dies?', 'Not necessarily. Reliefs that operate personally against the deceased — protection orders, counselling directions — become infructuous. But monetary relief already accrued, including arrears of maintenance ordered under Section 20, is in the nature of a debt and can be pursued against the estate in the deceased\'s hands, and a residence claim tied to a shared household may survive against those who hold the property.'],
    ['What happens if the aggrieved person dies?', 'Reliefs personal to her — protection, residence, custody of her person — end. Accrued monetary orders in her favour, being property, pass to her legal heirs, who can execute for arrears that had crystallised before her death. A compensation claim under Section 22 that was never adjudicated generally does not survive as a fresh claim by heirs.'],
    ['Can legal heirs be substituted in DV proceedings?', 'There is no express substitution machinery in the DV Act; courts borrow the civil principle that the cause of action determines survival. For recovery of crystallised arrears, substitution of the estate\'s representatives is routinely permitted; for personal restraints, substitution is meaningless and refused.'],
    ['Does a pending Section 31 breach prosecution survive the respondent\'s death?', 'No. A prosecution for breach of a protection order is criminal in character, and criminal liability is personal — it ends with the accused\'s death, like any other prosecution.'],
  ],
  'sources'      => [
    ['label' => 'Protection of Women from Domestic Violence Act, 2005 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Supreme Court of India — official website', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the usual abatement rules do not map neatly</h2>
<p>In civil suits, Order XXII CPC supplies a complete code: the right to sue either survives to or against legal representatives, or the suit abates. In criminal cases, the death of the accused ends the prosecution. DV proceedings borrow the Magistrate\'s courtroom and much of criminal procedure through Section 28, but the reliefs they produce are substantially civil. The sensible approach — and the one courts across the country have converged on — is to apply the old maxim <em>actio personalis moritur cum persona</em> relief by relief: personal actions die with the person; property-based and debt-based claims do not.</p>

<h2>Relief by relief</h2>
<table class="law">
<tr><th>Relief</th><th>Respondent dies</th><th>Aggrieved person dies</th></tr>
<tr><td>Protection order (s.18)</td><td>Infructuous — restrained only the deceased</td><td>Infructuous — protected only the deceased</td></tr>
<tr><td>Residence order (s.19)</td><td>May survive against heirs holding the shared household, since the right attaches to the household, not only the person</td><td>Ends; heirs have no derivative right to reside</td></tr>
<tr><td>Monetary relief (s.20)</td><td>Accrued arrears recoverable from the estate; future maintenance ends</td><td>Accrued arrears pass to her heirs; future claims end</td></tr>
<tr><td>Custody order (s.21)</td><td>Reworked in the child\'s welfare; guardianship court may take over</td><td>Same — welfare of the child governs afresh</td></tr>
<tr><td>Compensation (s.22)</td><td>If already awarded, executable against the estate; if pending, generally does not survive</td><td>Awarded sums pass to heirs; unadjudicated claims lapse</td></tr>
</table>

<h2>The shared-household complication</h2>
<p>The hardest cases involve residence. A widow\'s right to reside in the shared household frequently matures, on the husband\'s death, into a contest with his heirs — in-laws who now hold or claim the property. The DV Act\'s definition of respondent is wide enough to reach relatives who were parties to the domestic relationship, and a residence order can therefore be sought or continued against them in their own right, not merely as heirs. Conversely, where the only respondent was the deceased husband and the property belongs to third parties, the aggrieved person may need to re-frame her claim — joining the relatives as respondents or asserting rights under succession law — rather than ride on the old order.</p>

<div class="flow">
<div class="fstep"><strong>First</strong> — identify what had crystallised before the death: arrears quantified by order are a debt; everything prospective is not.</div>
<div class="fstep"><strong>Second</strong> — identify who now holds the shared household, and whether they were or can be made respondents in their own capacity.</div>
<div class="fstep"><strong>Third</strong> — move the Magistrate promptly: for substitution and execution against the estate, or, for respondents\' heirs, for a declaration that personal reliefs have worked themselves out.</div>
</div>

<div class="note">
<p>Neither side should assume that death wipes the slate. For claimants, accrued arrears are an enforceable asset of the estate they inherit or a debt of the estate they pursue. For families of a deceased respondent, personal restraints end, but property held from the shared household can carry the dispute into a second generation — which is why settlements in DV matters should always deal expressly with residence and arrears, not just the monthly figure.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
