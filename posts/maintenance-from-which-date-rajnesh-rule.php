<?php
$P = [
  'slug'         => 'maintenance-from-which-date-rajnesh-rule.php',
  'title'        => 'From Which Date Is Maintenance Payable? – Advocate Manish Jha',
  'meta'         => 'Date of application or date of order? How courts decide the start date of maintenance after Rajnesh v. Neha, and how arrears are computed and adjusted.',
  'h1'           => 'From Which Date Is Maintenance Payable? The Rule After Rajnesh v. Neha',
  'crumb'        => 'Maintenance Start Date',
  'kicker'       => 'Practice Explainer · Family Law',
  'sub'          => 'The start date of a maintenance award often matters more than the monthly figure — it decides the arrears.',
  'date'         => '2026-09-14',
  'date_display' => '14 September 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">A maintenance order has two components that decide what is actually paid: the monthly quantum, and the date from which it runs. Because maintenance litigation routinely takes years, the difference between an award "from the date of the order" and one "from the date of the application" can amount to lakhs of rupees in arrears. In <em>Rajnesh v. Neha</em> (Supreme Court, 4 November 2020), the Supreme Court laid down uniform guidelines on this question for all maintenance proceedings. This explainer sets out how the start date is determined and how overlapping awards are adjusted.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', 'domestic-violence.php' => 'Domestic Violence', 'child-custody.php' => 'Child Custody', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What is the general rule on the start date of maintenance?', 'Following Rajnesh v. Neha (2020), maintenance in all maintenance proceedings is ordinarily to be awarded from the date of the application. This protects the claimant from the consequences of judicial delay, since the need for support exists from the day the application is made, not the day the court finally decides it.'],
    ['Can interim maintenance also relate back to the application date?', 'Yes. Interim maintenance is typically made payable from the date of the application. When the final order is passed, amounts already paid as interim maintenance are adjusted against the arrears computed under the final award.'],
    ['What if maintenance has been awarded in two different proceedings?', 'Rajnesh v. Neha requires the applicant to disclose earlier maintenance awards in any subsequent proceeding — for example under the DV Act, Section 125 CrPC (now Section 144 BNSS) or Section 24 HMA. The later court takes the earlier award into account and grants adjustment or set-off, so the payer does not pay twice over for the same period.'],
    ['How are arrears of maintenance enforced?', 'The order can be enforced under Section 128 CrPC (now Section 147 BNSS) and by the other remedies available in law. The Supreme Court in Rajnesh emphasised that enforcement may follow the mechanisms available for recovery, and courts routinely secure compliance before hearing the defaulter further.'],
  ],
  'sources'      => [ ['label' => 'Rajnesh v. Neha, AIR 2021 SC 569 (Supreme Court of India, 4 November 2020) — Indian Kanoon', 'url' => 'https://indiankanoon.org/doc/117541087/'] ],
];
$BODY = <<<'HTML'
<h2>Why the Start Date Was a Problem</h2>
<p>Before 2020, practice varied widely. Some courts awarded maintenance from the date of the order, some from the date of the application, and some from the date of the summons. Since a contested maintenance case can take years, an award "from the date of the order" quietly rewarded delay: the longer the respondent stretched the proceedings, the less he ultimately paid. The Supreme Court in <em>Rajnesh v. Neha</em> confronted this divergence and issued directions intended to apply across the different maintenance statutes.</p>

<h2>The Rule</h2>
<div class="note"><p>Maintenance is ordinarily awarded <strong>from the date of the application</strong>. Section 125(2) CrPC itself contemplates that maintenance may be awarded "from the date of the order, or from the date of the application" — and Rajnesh v. Neha channels that discretion towards the application date as the norm, so that the claimant does not bear the cost of the court\'s own timeline.</p></div>
<p>The same judgment built the supporting architecture that makes the rule workable: compulsory affidavits of disclosure of assets and liabilities from both parties, a maximum of four weeks for the respondent's reply with courts limiting opportunities to two, and the power to proceed on the applicant's affidavit alone where the respondent withholds his disclosure.</p>

<h2>How Arrears Are Computed</h2>
<div class="flow">
<div class="fstep"><strong>Step 1 —</strong> Identify the date of the application in the proceeding concerned (Section 144 BNSS, Section 24 HMA, Section 12 DV Act, or Section 18 HAMA).</div>
<div class="fstep"><strong>Step 2 —</strong> Multiply the awarded monthly amount across the period from that date to the date of the order.</div>
<div class="fstep"><strong>Step 3 —</strong> Deduct interim maintenance actually paid for the same period under any order in any proceeding.</div>
<div class="fstep"><strong>Step 4 —</strong> The balance is payable as arrears, usually in instalments fixed by the court; future maintenance runs month to month.</div>
</div>

<h2>Overlapping Proceedings and Set-Off</h2>
<p>Matrimonial conflict often produces parallel maintenance claims — an application under the DV Act, another under Section 144 BNSS, and pendente lite maintenance under Section 24 of the Hindu Marriage Act. <em>Rajnesh v. Neha</em> requires the applicant to disclose every earlier award in the subsequent proceeding, and requires the later court to take the earlier award into account, granting adjustment or set-off. The principle is compensation, not accumulation: the claimant is entitled to adequate support, not to multiple full awards for the same period.</p>

<h2>Quantum: The Factors That Fix the Figure</h2>
<div class="check">
<p>Under Rajnesh v. Neha, quantum is guided by:</p>
<ul>
<li>the status of the parties and their standard of living during the marriage;</li>
<li>the reasonable needs of the wife and dependent children, including education;</li>
<li>the applicant\'s own qualifications, employment history and actual earnings;</li>
<li>career sacrifices made for the family, such as giving up employment for child-care;</li>
<li>the respondent\'s actual income and financial capacity, tested against his disclosure affidavit.</li>
</ul>
</div>

<h2>The BNSS Transition</h2>
<p>For proceedings instituted after 1 July 2024, Section 125 CrPC reads as Section 144 of the Bharatiya Nagarik Suraksha Sanhita, 2023, and enforcement under Section 128 CrPC corresponds to Section 147 BNSS. The Rajnesh framework — disclosure affidavits, award from the date of application, and set-off across proceedings — continues to govern, since it construes the maintenance jurisdiction itself rather than any provision peculiar to the old Code.</p>
<p>This article is for general information only and is not legal advice or a solicitation. Individual outcomes depend on the disclosures and evidence in each case.</p>
HTML;
include __DIR__ . '/post-layout.php';
