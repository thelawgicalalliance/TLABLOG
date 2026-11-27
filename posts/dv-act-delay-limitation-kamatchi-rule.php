<?php
$P = [
  'slug'         => 'dv-act-delay-limitation-kamatchi-rule.php',
  'title'        => 'Delay in Filing a DV Act Case: The Law – Advocate Manish Jha',
  'meta'         => 'Is a Domestic Violence Act application time-barred after one year? The Supreme Court&rsquo;s Kamatchi ruling, what delay actually affects, and how both sides should plead it.',
  'h1'           => 'Old Allegations, Fresh Application: Why Limitation Does Not Bar a DV Act Case — and What Delay Still Costs',
  'crumb'        => 'DV Act: Delay & Limitation',
  'kicker'       => 'Practice Explainer · 27 November 2026',
  'sub'          => 'Kamatchi settled that Section 468 CrPC does not apply to a Section 12 application — but delay never becomes irrelevant; it migrates from maintainability to credibility.',
  'date'         => '2026-11-27',
  'date_display' => '27 November 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">For years, respondents argued that a Domestic Violence Act application filed more than a year after the last alleged incident was time-barred, borrowing the one-year limitation for offences punishable with fine or short imprisonment. The Supreme Court closed that route in <em>Kamatchi v. Lakshmi Narayanan</em> (Criminal Appeal No. 627 of 2022, decided 13 April 2022): an application under Section 12 is not a complaint for an offence, no offence exists when it is filed, and the limitation clock under the criminal procedure code has nothing to attach to. But the ruling did not make delay costless &mdash; it relocated the argument. This explainer covers both halves.</p>',
  'related'      => ['domestic-violence.php' => 'Domestic Violence', 'matrimonial-lawyer-in-delhi.php' => 'Matrimonial Disputes', 'child-custody.php' => 'Child Custody', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What exactly did Kamatchi decide?', 'The Madras High Court had quashed a Section 12 application because it was filed more than a year after the wife left the matrimonial home. The Supreme Court set that aside, holding the High Court wrongly equated a Section 12 application with the lodging of a criminal complaint. Limitation under Section 468 CrPC would matter only for prosecuting the offence of breaching a protection order under Section 31 — an offence that arises only after an order exists and is violated.'],
    ['So can incidents from ten years ago found a DV application?', 'They can be pleaded, but the Supreme Court itself said the gap is for the Magistrate to weigh — including whether the applicant alleges a continuing wrong. Economic abuse, dispossession from the shared household and withholding of maintenance are commonly pleaded as continuing; a single remote incident with years of admitted normalcy afterwards carries far less weight.'],
    ['What is the BNSS position?', 'The same logic transposes: the limitation chapter of the BNSS (Sections 513 to 519, replacing Sections 467 to 473 CrPC) governs cognizance of offences. A Section 12 DV application still is not a complaint of an offence, so the bar does not apply to it. Prosecution for breach of a protection order under Section 31 remains the point where limitation arithmetic begins.'],
    ['How should each side handle delay in practice?', 'Applicants should plead the timeline candidly and explain gaps — continued cohabitation, attempts at reconciliation, fear, dependence — and identify which acts are continuing. Respondents should stop pressing maintainability and instead use the gap forensically: confront the applicant with contemporaneous records, absence of complaints, and conduct inconsistent with the allegations, all of which go to credibility and to the discretion in moulding reliefs.'],
  ],
  'sources'      => [
    ['label' => 'Kamatchi v. Lakshmi Narayanan (2022) — judgment text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/147915185/'],
    ['label' => 'Protection of Women from Domestic Violence Act, 2005 — text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/542601/'],
  ],
];
$BODY = <<<'HTML'
<h2>The doctrinal point, in three steps</h2>
<div class="flow">
  <div class="fstep"><strong>Section 468 CrPC barred cognizance of offences.</strong> Its clock ran from the date of the offence and barred cognizance beyond the prescribed period for lighter offences. The BNSS carries the same scheme forward.</div>
  <div class="fstep"><strong>A Section 12 application alleges no offence.</strong> It asks a Magistrate for protective, residential, monetary and custodial reliefs. The Supreme Court in Kamatchi: filing it is not lodging a complaint, and when it is filed there is no offence to be time-barred.</div>
  <div class="fstep"><strong>The offence comes later, if at all.</strong> Breach of a protection order (Section 31) is the Act&rsquo;s offence. Only when such a breach is prosecuted does limitation enter — computed from the breach, not from the ancient matrimonial history.</div>
</div>

<h2>Where delay still bites</h2>
<p>Nothing in <em>Kamatchi</em> obliges a Magistrate to treat stale allegations as weighty. The Court expressly left the significance of the long gap to the trial Magistrate, including the question whether the applicant alleges a continuing wrong. In practice, delay operates at three pressure points:</p>
<table class="law">
  <tr><th>Stage</th><th>Effect of unexplained delay</th></tr>
  <tr><td>Interim relief under Section 23</td><td>Magistrates calibrate urgency; a years-old grievance presented as an emergency invites a conservative interim order</td></tr>
  <tr><td>Evidence</td><td>Memory, documents and witnesses decay; the respondent&rsquo;s cross-examination writes itself around the silence</td></tr>
  <tr><td>Final reliefs</td><td>Compensation under Section 22 and monetary relief under Section 20 are discretionary in quantum; credibility discounts flow through</td></tr>
</table>

<h2>The continuing-wrong doctrine, used precisely</h2>
<p>The phrase does real work only when the pleaded facts fit it. Deprivation of the shared household continues while the deprivation lasts; withholding maintenance continues month by month; economic abuse through blocked accounts or seized documents continues while the blockage stands. By contrast, a discrete incident of physical violence years ago does not &ldquo;continue&rdquo; because its memory does. Applications drafted with this discipline survive scrutiny; those that stamp &ldquo;continuing&rdquo; on everything invite the Magistrate to believe nothing.</p>

<h2>A note on parallel remedies</h2>
<p>Because the DV Act supplements other laws (Section 36), an aggrieved person who delayed a DV application may still have pursued &mdash; or may yet pursue &mdash; maintenance under Section 144 BNSS, a cruelty complaint, or matrimonial relief, each with its own timing rules. The respondent&rsquo;s file should map all proceedings on one timeline; inconsistencies between the forums are often the most productive material delay produces.</p>
<div class="note">This explainer describes the general legal position for information. It is not legal advice; how delay plays out depends on the pleadings and record of each case.</div>
HTML;
include __DIR__ . '/post-layout.php';
