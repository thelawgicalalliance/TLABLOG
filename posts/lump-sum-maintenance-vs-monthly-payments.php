<?php
$P = [
  'slug'         => 'lump-sum-maintenance-vs-monthly-payments.php',
  'title'        => 'Lump Sum Or Monthly Maintenance – Advocate Manish Jha',
  'meta'         => 'When Indian courts order one-time lump sum maintenance instead of monthly payments — statutory bases, advantages, risks and how settlements are structured.',
  'h1'           => 'One Cheque or a Lifetime of Instalments: Lump Sum Maintenance Explained',
  'crumb'        => 'Matrimonial & Family — Maintenance',
  'kicker'       => 'Practice Explainer · Section 25 HMA · Section 144 BNSS · DV Act',
  'sub'          => 'Monthly maintenance keeps parties tethered to each other and to the execution court. This explainer examines when a one-time lump sum is available, how courts and settling parties arrive at the figure, and the traps on both sides of the bargain.',
  'date'         => '2026-10-12',
  'date_display' => '12 October 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Every maintenance order creates a relationship that outlives the marriage: payment, default, execution, enhancement, and back again. A lump sum severs that tether. Indian law permits one-time maintenance in several settings — permanent alimony under Section 25 of the Hindu Marriage Act, monetary relief under the DV Act, and, most commonly, negotiated settlements folded into mutual consent divorces. Whether a lump sum serves a client depends on who is paying, who is receiving, and how honestly the figure is built.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Disputes', 'domestic-violence.php' => 'Domestic Violence', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Which provisions allow lump sum maintenance?', 'Section 25 HMA expressly permits a gross sum or periodical payments as permanent alimony. Monetary relief under Section 20 of the DV Act can include lump sum components. Under Section 144 BNSS the statutory language speaks of a monthly allowance, so one-time arrangements there usually arrive through settlement recorded before the court rather than contested adjudication.'],
    ['How is a lump sum figure usually computed?', 'There is no fixed formula. Negotiations typically capitalise a sustainable monthly figure over the expected duration of the obligation, adjusted for the payer&rsquo;s assets, the recipient&rsquo;s age, housing and earning capacity, inflation, and the time value of receiving money now. Courts fixing gross sums look at the same factors through the lens of the parties&rsquo; standard of living.'],
    ['Can maintenance be claimed again after accepting a lump sum?', 'A full and final settlement, voluntarily made with proper disclosure and recorded by the court, is ordinarily binding. But the protective purpose of maintenance law means courts have, in situations of later destitution or where the settlement was vitiated by concealment or pressure, declined to treat a waiver as an absolute bar — which is precisely why payers must document fairness and disclosure.'],
    ['What protects the payer after paying a lump sum?', 'The settlement terms: a comprehensive recital of all pending proceedings and their withdrawal or quashing, a clear full-and-final clause covering past, present and future claims under all statutes, payment through traceable banking channels, and the settlement being recorded in the decree or order itself rather than resting in a private agreement.'],
  ],
  'sources'      => [
    ['label' => 'Hindu Marriage Act, 1955 (Section 25) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Protection of Women from Domestic Violence Act, 2005 (Section 20) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The two architectures</h2>
<div class="compare">
<div class="col old"><h3>Monthly maintenance</h3><p>Tracks need and capacity over time; can be enhanced or reduced as circumstances change; survives on continuing jurisdiction — and continuing friction, default risk and execution petitions.</p></div>
<div class="arrow">→</div>
<div class="col new"><h3>Lump sum</h3><p>A clean break: certainty for the recipient, finality for the payer, no monthly dependence on the goodwill of a former spouse. But it is fixed — inflation, illness and bad investment all fall on the recipient.</p></div>
</div>

<h2>Where each side&rsquo;s interest lies</h2>
<p>For recipients, the case for a lump sum is strongest where the payer&rsquo;s income is volatile, concealable or mobile — business income, cash earnings, or an NRI payer beyond easy execution. A monthly order against such a respondent is a lifetime of enforcement litigation; a banked lump sum is not. The case is weakest for young recipients with long horizons: a sum that looks large today must outlast decades of inflation, and once spent, the full-and-final clause stands in the way of a second claim.</p>
<p>For payers, the lump sum buys what monthly payments never deliver: an end. No enhancement applications as salary grows, no arrears accumulating through disputed periods, no monthly contact with the dispute. The price is liquidity — and the discipline of doing it properly, because a settlement procured by understating income or assets is the classic ground on which finality later unravels.</p>

<h2>Building the number</h2>
<div class="flow">
<div class="fstep"><strong>Start from the sustainable monthly figure</strong> a court would plausibly award on the proven incomes and standard of living.</div>
<div class="fstep"><strong>Choose the horizon</strong> — the recipient&rsquo;s age, remarriage prospects, the children&rsquo;s milestones (education, marriage) each shape the multiplier.</div>
<div class="fstep"><strong>Adjust for assets transferred</strong> — a residence conveyed to the wife or a flat&rsquo;s sale proceeds shared reduces the cash component and is often the real centre of the deal.</div>
<div class="fstep"><strong>Discount for present value, add for inflation risk</strong> — the parties are trading certainty against time; the figure should say so explicitly.</div>
<div class="fstep"><strong>Separate the children&rsquo;s component</strong> — a child&rsquo;s right to maintenance is the child&rsquo;s own and cannot be bargained away by the parents; structure it distinctly.</div>
</div>

<h2>Drafting the settlement</h2>
<div class="check">
<p><strong>A sound lump sum settlement records:</strong> full disclosure by both sides of income and assets; the complete list of pending cases — maintenance, DV, Section 498A/BNS 85, divorce — and the agreed mechanism for each (withdrawal, quashing, decree); staged payment tied to procedural milestones, such as part on the first motion and the balance on the second motion of a mutual consent divorce; payment by traceable instruments; and a full-and-final clause that names the statutes it covers rather than waving at claims generally.</p>
</div>

<div class="note">
<p>A caution for both sides: courts recording settlements increasingly test them for voluntariness and adequacy, and a child&rsquo;s maintenance clause is always open to review in the child&rsquo;s interest. Finality in matrimonial money is earned by fairness and documentation at the time of settlement — not by the tightness of the waiver clause alone. Nothing here is a substitute for advice on specific facts.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
