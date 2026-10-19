<?php
$P = [
  'slug'         => 'litigation-expenses-section-24-hma.php',
  'title'        => 'Litigation Expenses in Divorce – Advocate Manish Jha',
  'meta'         => 'Section 24 HMA is not only monthly maintenance: the expenses-of-proceeding component funds the weaker spouse\'s litigation — what it covers, how to claim it.',
  'h1'           => 'The Other Half of Section 24 HMA: Litigation Expenses for the Spouse Who Cannot Fund the Case',
  'crumb'        => 'Litigation Expenses (S.24 HMA)',
  'kicker'       => 'Explainer · Maintenance',
  'sub'          => 'Section 24 of the Hindu Marriage Act lets either spouse without independent income sufficient for support claim both maintenance pendente lite and the expenses of the proceeding — a component often under-pleaded and under-claimed.',
  'date'         => '2026-10-19',
  'date_display' => '19 October 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Matrimonial litigation is a war of attrition, and attrition favours the spouse with the deeper pocket. Section 24 of the Hindu Marriage Act, 1955 answers this with two distinct components: a monthly sum for support during the proceeding, and the "expenses of the proceeding" — money to actually run the case. The monthly component is litigated constantly; the expenses component is frequently forgotten, pleaded as an afterthought, or claimed once and never revisited. This explainer treats it as what it is: a parity device that keeps the contest fair.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', 'domestic-violence.php' => 'Domestic Violence', 'child-custody.php' => 'Child Custody', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Who can claim under Section 24?', 'Either spouse — wife or husband — who has no independent income sufficient for their support and the necessary expenses of the proceeding. The provision is gender-neutral by its text; what the applicant must show is the income gap, not gender. The claim lies in any proceeding under the HMA: divorce, judicial separation, restitution, nullity.'],
    ['What do "expenses of the proceeding" include?', 'The realistic costs of conducting that proceeding: court fees, drafting and counsel\'s fees at a reasonable level, process and certified-copy charges, and the incidental costs of attending hearings. Courts assess reasonableness against the issues involved and the respondent\'s means; the provision funds a fair defence or prosecution of the case, not luxury litigation.'],
    ['Can expenses be claimed more than once in the same case?', 'The order operates for the proceeding in which it is made, and courts retain the power to award further or supplementary expenses where the litigation genuinely expands — a trial that follows failed mediation, or voluminous evidence. Separate proceedings, such as an appeal, call for their own Section 24 application in that court. A single lump figure claimed at the start rarely matches the shape the case eventually takes.'],
    ['How fast must a Section 24 application be decided?', 'The proviso added in 2001 directs that the application be disposed of, as far as possible, within sixty days from service of notice on the respondent. Delhi Family Courts treat interim maintenance and expenses applications as priority business, usually on an income-and-asset affidavit from both sides.'],
  ],
  'sources'      => [
    ['label' => 'Hindu Marriage Act, 1955 — Section 24 (India Code, official text)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1560'],
  ],
];
$BODY = <<<'HTML'
<h2>Two components, one object</h2>
<div class="compare">
  <div class="col old">
    <h3>Maintenance pendente lite</h3>
    <p>A monthly sum for the applicant's support during the proceeding, fixed on the parties' incomes and standard of living, usually payable from the date of application.</p>
  </div>
  <div class="arrow">+</div>
  <div class="col new">
    <h3>Expenses of the proceeding</h3>
    <p>A sum — commonly lump or staged — that funds the conduct of the litigation itself, so that the case is not lost by default of resources before it is decided on merits.</p>
  </div>
</div>

<p>The object of both is the same: neither spouse should be able to win the matrimonial case simply by outspending the other. The expenses component is the more surgical of the two, because it is tied to the litigation's actual demands rather than to monthly living costs.</p>

<h2>Pleading the claim properly</h2>
<p>The weakest expenses claims say only "₹X towards litigation expenses". The strongest read like a modest bill of costs: court fee paid on the petition or likely to be paid; a reasonable counsel's fee for the stage the case is at; charges for summoning witnesses or obtaining records; and travel where hearings require it. Delhi practice runs on the comprehensive income-and-asset affidavit both sides must file in maintenance litigation, and the expenses claim should be reconciled with it — an applicant who discloses her finances candidly and itemises the litigation's costs gives the court something concrete to grant, and gives the respondent little to attack.</p>

<div class="flow">
  <div class="fstep"><strong>1. File early.</strong> The application lies "in any proceeding" under the Act and is best moved at the first appearance, since its whole point is to fund what follows.</div>
  <div class="fstep"><strong>2. Attach the affidavit.</strong> The income-and-asset affidavit is the evidentiary spine; inconsistencies between the affidavit and the claim sink both components.</div>
  <div class="fstep"><strong>3. Itemise.</strong> Break the expenses into heads with amounts; reasonableness is argued head by head.</div>
  <div class="fstep"><strong>4. Revisit at new stages.</strong> Evidence, appeals and remands are fresh demands — move supplementary applications in the court seized of each stage rather than absorbing the cost silently.</div>
</div>

<h2>How courts calibrate the figure</h2>
<p>Three variables dominate. The respondent's means set the ceiling of what is fair to order; the complexity of the proceeding sets the measure of what is needed; and the applicant's own resources set the floor of what must be supplemented. An employed applicant with real but modest income may fail on the monthly component yet still obtain expenses, because the statutory test is income "sufficient for her or his support <em>and</em> the necessary expenses of the proceeding" — a person can be able to feed herself and still be unable to fund a contested trial. Orders are enforceable like other maintenance orders, and persistent default has a sharp procedural consequence Delhi courts do apply: the defaulting spouse's defence or petition can be struck off until compliance.</p>

<h2>Boundaries of the remedy</h2>
<div class="check">
  <p>Section 24 operates only within HMA proceedings; parties married under other personal laws look to the corresponding provisions in their statutes, and the DV Act's monetary relief covers litigation costs in its own proceedings. The order is interim machinery — it ends with the proceeding, when permanent alimony under Section 25 takes over the field. And the component is compensatory, not punitive: inflated fee claims invite reduction and cost the applicant credibility on the monthly component decided alongside.</p>
</div>

<div class="note">
  <p><strong>Note:</strong> this explainer is for general information only and is not legal advice. Figures in individual cases turn on the parties' disclosed incomes and the court's assessment.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
