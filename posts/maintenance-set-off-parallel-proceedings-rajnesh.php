<?php
$P = [
  'slug'         => 'maintenance-set-off-parallel-proceedings-rajnesh.php',
  'title'        => 'One Spouse, Many Maintenance Orders – Advocate Manish Jha',
  'meta'         => 'How courts adjust maintenance when claims run in parallel under the DV Act, Section 144 BNSS and the HMA — the Rajnesh v Neha disclosure and set-off rules.',
  'h1'           => 'Parallel Maintenance Claims And The Set-Off Rule',
  'crumb'        => 'Maintenance — Set-Off',
  'kicker'       => 'Procedure &amp; Practice · Maintenance Law',
  'sub'          => 'A wife may lawfully pursue maintenance under the DV Act, Section 144 BNSS and Section 24 HMA at once — but Rajnesh v. Neha obliges disclosure of every earlier award and directs courts to adjust or set off amounts across proceedings.',
  'date'         => '2026-10-03',
  'date_display' => '3 October 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Maintenance in Indian law flows through several channels at once: Section 144 of the BNSS (formerly Section 125 CrPC), monetary relief under Section 20 of the Protection of Women from Domestic Violence Act, 2005, maintenance pendente lite under Section 24 of the Hindu Marriage Act, and permanent alimony under Section 25. The statutes are independent and pursuing more than one is not barred — but it is also not a route to collecting the same month&rsquo;s support twice. In <em>Rajnesh v. Neha</em>, decided on 4 November 2020, the Supreme Court built the machinery that keeps parallel claims honest: mandatory disclosure of earlier awards and adjustment or set-off across proceedings.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Law', 'domestic-violence.php' => 'Domestic Violence', 'child-custody.php' => 'Child Custody', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Can a wife claim maintenance under more than one law at the same time?', 'Yes. The remedies under the DV Act, the BNSS and the HMA are distinct and cumulative in the sense that none excludes the others. What the law forbids is duplication of the same support: each later court must account for what an earlier order already provides.'],
    ['What must be disclosed in the later proceeding?', 'Rajnesh v. Neha requires the applicant to disclose any maintenance awarded in a previously instituted proceeding. Both parties must also file the standardised Affidavit of Disclosure of Assets and Liabilities, and the respondent&rsquo;s reply is due within the timeline the judgment fixes, failing which the court may act on the applicant&rsquo;s affidavit.'],
    ['How does the set-off actually work?', 'The later court fixes what fair maintenance would be on the material before it, then grants an adjustment for amounts payable under the earlier order — so the orders together, not separately, deliver the fair figure. If circumstances have changed, the proper course is modification before the forum that passed the earlier order, not a fresh overlapping award.'],
    ['From what date does maintenance run?', 'Rajnesh v. Neha settled that maintenance in all proceedings should ordinarily be awarded from the date of application, ending the earlier divergence between date-of-order and date-of-application practice. Arrears computation and enforcement then follow the statute under which each order was made.'],
  ],
  'sources'      => [
    ['label' => 'Rajnesh v. Neha, Supreme Court of India, 4 November 2020 — full text', 'url' => 'https://indiankanoon.org/doc/117541087/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why parallel claims exist at all</h2>
<p>Each statute serves a different design. Section 144 BNSS is a summary, secular remedy against vagrancy, available regardless of religion. The DV Act compensates for domestic violence and protects residence, with monetary relief under Section 20 as one component. Sections 24 and 25 of the HMA operate inside matrimonial litigation, calibrated to the proceedings between the spouses. Because the purposes differ, Parliament never forced an election among them — Section 36 of the DV Act says its remedies are in addition to other laws. The price of that generosity is coordination, and coordination is what the disclosure-and-set-off framework supplies.</p>

<h2>The Rajnesh machinery</h2>
<div class="flow">
<div class="fstep"><strong>Disclosure of prior awards.</strong> An applicant who has already obtained maintenance in one proceeding is under a legal obligation to state it in the next. Suppression invites adverse consequences — reduction, dismissal, even costs — and modern family courts check.</div>
<div class="fstep"><strong>The uniform affidavit.</strong> Both sides file the Affidavit of Disclosure of Assets and Liabilities in the format the judgment annexes — income, assets, liabilities, dependants and lifestyle markers — giving every forum the same financial picture.</div>
<div class="fstep"><strong>Adjustment or set-off.</strong> The subsequent court takes the earlier award into account and adjusts, so the household&rsquo;s total obligation reflects one fair assessment rather than an accumulation of forums.</div>
</div>

<h2>Worked illustration</h2>
<table class="law">
<tr><th>Proceeding</th><th>Order</th><th>Net effect</th></tr>
<tr><td>DV Act, Section 20 (first in time)</td><td>₹25,000 per month as interim monetary relief</td><td>₹25,000 payable</td></tr>
<tr><td>Section 144 BNSS (later)</td><td>Fair maintenance assessed at ₹40,000; ₹25,000 already covered</td><td>Additional ₹15,000, not ₹40,000</td></tr>
<tr><td>Section 24 HMA (during divorce)</td><td>Court assesses litigation-period support; prior orders disclosed and adjusted</td><td>No duplication; total stays at the assessed fair figure</td></tr>
</table>

<div class="note"><p>Practice pointer: respondents should annex every existing order and proof of payment to the very first reply — the set-off argument is strongest when the court can see actual compliance. Applicants should disclose first and explain why the existing amount is insufficient, rather than leaving the earlier order for the other side to reveal; credibility, once lost on disclosure, infects the quantum hearing too.</p></div>

<h2>Enforcement is statute-specific</h2>
<p>Coordination at the award stage does not merge the orders. Each is enforced under its own statute — Section 144 orders through the BNSS machinery including warrants, DV Act orders under Section 20(6) and the enforcement routes the Act and rules provide, and HMA orders through the matrimonial court. A respondent facing multiple orders should seek consolidation of the operative figure through modification applications in the respective forums, placing the set-off position on each record, so that execution proceedings in one court do not proceed in ignorance of payments made under another.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
