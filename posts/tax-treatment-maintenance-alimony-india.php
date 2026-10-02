<?php
$P = [
  'slug'         => 'tax-treatment-maintenance-alimony-india.php',
  'title'        => 'Alimony and the Taxman – Advocate Manish Jha',
  'meta'         => 'How maintenance and alimony are generally treated for income tax in India: lump-sum settlements versus monthly payments, and the drafting choices that matter.',
  'h1'           => 'Lump Sum or Monthly? The Tax Dimension of Alimony and Maintenance',
  'crumb'        => 'Alimony & Tax',
  'kicker'       => 'Explainer · Maintenance',
  'sub'          => 'The structure of a settlement — one-time transfer or recurring payment — can change its tax character for the recipient, while the payer ordinarily gets no deduction either way.',
  'date'         => '2026-10-02',
  'date_display' => '2 October 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Settlement discussions in matrimonial cases concentrate on one number — the amount — and routinely ignore a second question that can change its real value: how will the taxman treat it? The Income-tax Act, 1961 contains no provision headed "alimony", so the field is governed by general principles of what counts as income, as developed in tax rulings over the decades. The broad architecture is settled enough to plan around, and it rewards parties who think about structure before signing the settlement deed.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Law', 'domestic-violence.php' => 'Domestic Violence', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Is monthly maintenance taxable in the recipient\'s hands?', 'The position generally applied by the tax authorities, following long-standing High Court rulings, is that recurring maintenance received periodically partakes of the character of income and is taxable in the recipient\'s hands. Because assessments turn on the precise facts and the current state of the law, the figure negotiated should be tested with a tax professional before it is finalised.'],
    ['Is a one-time lump-sum alimony taxable?', 'A lump-sum settlement received on divorce has generally been treated as a capital receipt — not income — and transfers between spouses are outside the gift-tax net under Section 56(2)(x) of the Income-tax Act because a spouse is a "relative". The timing of the transfer relative to the divorce and the terms of the deed matter, so the drafting deserves tax review.'],
    ['Does the paying spouse get a deduction?', 'No. Maintenance and alimony are personal obligations; the Income-tax Act gives the payer no deduction for them against salary, business or other income. The payer\'s real relief lies in negotiating structure and quantum, not in tax treatment.'],
    ['What about assets transferred instead of cash?', 'Transfers of property between spouses in a divorce settlement raise further questions — capital-gains exposure for the transferor, clubbing provisions for transfers during marriage under Section 64, and stamp duty on conveyances. Each asset class behaves differently, which is why composite settlements should be vetted jointly by matrimonial and tax counsel.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>Why the statute is silent and what fills the gap</h2>
<p>Nothing in the Income-tax Act, 1961 expressly taxes or exempts alimony. The analysis therefore proceeds from first principles: income under Section 2(24) is a word of broad import, capital receipts are outside it unless specifically brought in, and receipts without consideration are taxed under Section 56(2)(x) subject to the exemption for receipts from a &ldquo;relative&rdquo;, which includes a spouse. Out of these materials, the courts and the department have built a working framework that most practitioners summarise in one sentence: <em>recurring maintenance looks like income; a one-time capital settlement generally does not.</em></p>

<h2>The two structures compared</h2>
<div class="compare">
  <div class="col old"><strong>Monthly / periodic maintenance</strong><br>Paid under an order (Section 144 BNSS, Section 24&ndash;25 HMA, DV Act) or under a settlement. Generally treated as a taxable revenue receipt in the recipient&rsquo;s hands; no deduction for the payer. The recipient&rsquo;s effective take-home is the ordered amount minus tax at her slab.</div>
  <div class="arrow">→</div>
  <div class="col new"><strong>Lump-sum settlement</strong><br>A one-time amount in full and final settlement of maintenance claims. Generally treated as a capital receipt outside the definition of income, and outside Section 56(2)(x) where received from the spouse. No deduction for the payer here either.</div>
</div>
<p>The asymmetry is obvious, and it explains a quiet pattern in mutual-consent divorces: recipients often prefer a larger one-time figure to a stream of taxable monthly payments, while payers weigh that against liquidity. Neither preference is improper — structuring a lawful settlement tax-efficiently is legitimate planning — but the deed should say clearly what the payment is: a capital sum in full and final settlement of all maintenance and alimony claims, referable to the decree.</p>

<h2>Points that change the analysis</h2>
<div class="tiles">
  <div class="tile"><strong>Timing of transfers.</strong><br>Transfers between persons who are still spouses sit inside the &ldquo;relative&rdquo; exemption and the clubbing rules of Section 64; transfers after decree are between ex-spouses, where the exemption language no longer fits and the capital-versus-income characterisation does the work. Settlements signed at the first motion but performed after decree need particular care.</div>
  <div class="tile"><strong>Property instead of money.</strong><br>Conveying a flat in settlement raises capital-gains questions for the transferor and stamp-duty costs; releasing rights in a jointly held property has its own treatment. The tax cost of an asset transfer can differ sharply from a cash payment of equal value.</div>
  <div class="tile"><strong>Arrears and interest.</strong><br>Arrears of periodic maintenance retain the character of the underlying payments; interest awarded on delayed payment is a separate receipt with its own treatment. Both deserve a line in the computation before a figure is accepted.</div>
  <div class="tile"><strong>Child maintenance.</strong><br>Amounts paid for a child&rsquo;s upkeep are received by the custodial parent for the child&rsquo;s benefit; how they are framed in the order affects whose hands, if any, the receipt is assessed in. The settlement should separate the child&rsquo;s component from the spouse&rsquo;s.</div>
</div>

<h2>Drafting checklist for settlement deeds</h2>
<div class="check">
  <p>State the character of each payment: one-time capital settlement, periodic maintenance, child support — separately and expressly.</p>
  <p>Record that the lump sum is in full and final settlement of past, present and future maintenance claims, and tie it to the decree or the quashing order it funds.</p>
  <p>Schedule asset transfers with values, and allocate stamp duty and tax costs by agreement rather than silence.</p>
  <p>Have the final draft reviewed by a chartered accountant or tax counsel before signing — tax law changes, and the characterisation questions here are ultimately for the tax authorities and tax courts on each year&rsquo;s law.</p>
</div>
<div class="note"><p>This article states the general framework for awareness; it is not tax advice, and the tax result in any particular settlement depends on its facts, documents and the law in force for the relevant assessment year. Matrimonial counsel and a tax adviser working together before the settlement is signed will almost always save more than the consultation costs.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
