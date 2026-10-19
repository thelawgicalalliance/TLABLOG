<?php
$P = [
  'slug'         => 'set-off-legal-equitable-commercial-suits.php',
  'title'        => 'Set-Off in Recovery Suits – Advocate Manish Jha',
  'meta'         => 'Legal set-off under Order VIII Rule 6 CPC, equitable set-off from connected transactions, and counterclaims: how a defendant\'s own dues reduce a money claim.',
  'h1'           => 'Legal and Equitable Set-Off: The Defendant\'s Arithmetic in a Commercial Recovery Suit',
  'crumb'        => 'Set-Off in Suits',
  'kicker'       => 'Explainer · Commercial Litigation',
  'sub'          => 'A defendant sued for money often holds claims of its own. Whether those claims shrink the decree at the threshold depends on which of three instruments they fit: legal set-off, equitable set-off, or counterclaim.',
  'date'         => '2026-10-19',
  'date_display' => '19 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Commercial relationships rarely produce debts running in one direction. The supplier suing for unpaid invoices may owe debit notes for short supply; the contractor claiming its final bill may face the employer\'s back-charges. The Code of Civil Procedure gives the defendant three distinct ways to bring its own money claims into the plaintiff\'s suit — legal set-off under Order VIII Rule 6, the judge-made doctrine of equitable set-off, and the counterclaim under Order VIII Rule 6A — and in a commercial suit, with its 120-day written statement regime, the choice has to be made early and correctly.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'civil-law.php' => 'Civil Litigation', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What are the requirements of a legal set-off?', 'Order VIII Rule 6 permits set-off where the defendant claims an ascertained sum of money legally recoverable from the plaintiff, both parties fill the same character as in the suit, and the sum is within the pecuniary limits of the court\'s jurisdiction. It is claimed at the first hearing in the written statement, is treated as a plaint in a cross-suit, and carries court fee accordingly. It is a matter of right when its conditions are met.'],
    ['How is equitable set-off different?', 'Equitable set-off is discretionary and covers what the rule leaves out: unascertained sums — typically damages — arising out of the same transaction or transactions so connected that it would be inequitable to make the defendant pay the plaintiff first and sue separately later. Cross-demands from one contract, or one continuous dealing, are its natural home; unconnected dealings are not.'],
    ['When is a counterclaim the better vehicle?', 'When the defendant\'s claim exceeds the plaintiff\'s, arises from a different transaction, or seeks relief beyond mere reduction of the decree. Order VIII Rule 6A lets the defendant claim any right to relief in respect of a cause of action accruing before the defence is filed; it survives even if the suit is dismissed or withdrawn, which a pure defence of set-off does not.'],
    ['Do these devices work in arbitration and MSEFC proceedings too?', 'Arbitral tribunals routinely entertain set-offs and counterclaims within the scope of the arbitration agreement. In statutory arbitrations under the MSMED Act, the buyer\'s cross-claims are heard as defences and counterclaims in the Section 18(3) arbitration, subject to that Act\'s framework. In each forum, the connectedness of the cross-demand to the claim remains the organising question.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — Order VIII Rules 6 and 6A (India Code, official text)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191?view_type=browse'],
    ['label' => 'Commercial Courts Act, 2015 — official text (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2156'],
  ],
];
$BODY = <<<'HTML'
<h2>The three instruments compared</h2>
<table class="law">
  <tr><th>Feature</th><th>Legal set-off (O.VIII R.6)</th><th>Equitable set-off</th><th>Counterclaim (O.VIII R.6A)</th></tr>
  <tr><td>Nature of sum</td><td>Ascertained money</td><td>May be unascertained (damages)</td><td>Any money or other relief</td></tr>
  <tr><td>Connection to plaintiff's claim</td><td>Not required</td><td>Same or connected transaction — essential</td><td>Not required</td></tr>
  <tr><td>Right or discretion</td><td>Right, if conditions met</td><td>Court's discretion on equity</td><td>Right, subject to court's power to order separate trial</td></tr>
  <tr><td>Court fee</td><td>Payable as on a plaint</td><td>Generally payable when it operates as a cross-claim</td><td>Payable as on a plaint</td></tr>
  <tr><td>If suit is withdrawn</td><td>Falls as a defence; adjudicated set-off has decree effect</td><td>Falls with the suit as a defence</td><td>Survives and proceeds to decree</td></tr>
</table>

<h2>Legal set-off: the strict gate</h2>
<p>The rule's conditions are applied as written. The sum must be ascertained — fixed by contract, account or admission, not awaiting assessment; a claim for damages for defective goods is not an ascertained sum, however confidently computed. It must be legally recoverable — a time-barred cross-debt fails, and limitation for the set-off is tested as on the date the written statement claiming it is filed. The parties must sue and be sued in the same character — a personal debt cannot be set off against a claim made as trustee. And the whole must fit the court's pecuniary jurisdiction, because the written statement claiming set-off is treated as a plaint in a cross-suit, decree and all. Where every element fits, the defendant has a right to the adjustment, and the court records a decree on the balance.</p>

<h2>Equitable set-off: connection is everything</h2>
<p>The doctrine answers a commercial reality the rule misses: most genuine cross-demands are damages, not liquidated debts. Its organising principle is connection — cross-demands arising out of the same transaction, or dealings so linked that driving the defendant to a separate suit would be unjust. The contractor sued for an advance can set off its damages for wrongful termination of the same contract; the distributor sued on invoices can set off claims from the same supply line. What the doctrine will not do is net out the parties' entire commercial history: demands from unconnected contracts, or claims the defendant has slept on, are left to their own suits. Being discretionary, it rewards clean presentation — a tabulated computation, contemporaneous correspondence, and a pleading that shows the two demands growing out of one relationship.</p>

<div class="note">
  <p><strong>In commercial suits, timing is unforgiving.</strong> Set-off and counterclaim travel in the written statement, and the Commercial Courts Act regime forfeits the right to file a written statement beyond 120 days from service of summons. A defendant who lets the written statement lapse loses not only the defence but the vehicle for its cross-claims in that suit. Diarise from the date of service, not the first hearing.</p>
</div>

<h2>Choosing the vehicle: a working sequence</h2>
<div class="flow">
  <div class="fstep"><strong>1. Quantify.</strong> Is the cross-claim an ascertained sum? If yes and within jurisdiction, plead legal set-off — it is the only one of the three that is a matter of right without a connection requirement.</div>
  <div class="fstep"><strong>2. Trace the transaction.</strong> If the sum is unliquidated but grows out of the same dealing, plead equitable set-off in the alternative, with the connecting facts spelled out.</div>
  <div class="fstep"><strong>3. Check the surplus.</strong> If the cross-claim exceeds the plaintiff's demand or needs independent relief, add a counterclaim — only a counterclaim yields an affirmative decree for the excess and survives the suit's withdrawal.</div>
  <div class="fstep"><strong>4. Pay the fee and verify.</strong> Court fee on set-off and counterclaim, and in commercial suits the statement of truth, apply as to a plaint; defects here are the commonest procedural casualties.</div>
</div>

<div class="check">
  <p>Plead all three in the alternative where the facts permit — courts decide the label, but only on pleaded material. And plaintiffs should anticipate the arithmetic: a pre-suit reconciliation that credits undisputed debit notes deprives the defence of its best optics and narrows the trial to the genuinely contested balance.</p>
</div>

<div class="note">
  <p><strong>Note:</strong> this explainer is for general information only and is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
