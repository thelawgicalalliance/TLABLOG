<?php
$P = [
  'slug'         => 'msme-form-1-half-yearly-return-companies.php',
  'title'        => 'MSME Form-1: The Half-Yearly Return – Advocate Manish Jha',
  'meta'         => 'Companies with dues to micro and small suppliers beyond 45 days must file MSME Form-1 with the MCA. Who must file, what it discloses, and the consequences of default.',
  'h1'           => 'MSME Form-1: How the Companies Act Makes Delayed Payments Visible',
  'crumb'        => 'MSME Form-1 Returns',
  'kicker'       => 'Explainer · MSME',
  'sub'          => 'The delayed-payment regime is not only about interest and Facilitation Councils — a company sitting on micro and small enterprise dues past 45 days must report itself to the Registrar every six months.',
  'date'         => '2026-09-03',
  'date_display' => '3 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Most discussion of the Micro, Small and Medium Enterprises Development Act, 2006 focuses on the supplier&rsquo;s remedies — statutory interest and the Facilitation Council. A quieter instrument operates on the buyer&rsquo;s side of the ledger. Under Section 405 of the Companies Act, 2013 and a 2019 government order, every company receiving goods or services from micro and small enterprises whose payments remain outstanding beyond forty-five days must file a half-yearly return — MSME Form-1 — with the Registrar of Companies, naming the suppliers, the amounts, and the reasons for delay. For suppliers and their counsel, these filings are discovery handed over in advance.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Which companies must file MSME Form-1?', 'All companies — public or private, listed or unlisted — that have received goods or services from micro or small enterprises and whose payments to such suppliers have remained outstanding for more than forty-five days from the date of acceptance or deemed acceptance. Companies with no such outstanding dues are outside the requirement.'],
    ['What does the return disclose?', 'The amounts outstanding beyond forty-five days as at the end of each half year, the identity of the micro or small supplier, and the reasons for the delay. The return is filed for the April-September period and the October-March period, within the timelines prescribed under the order and the MCA\'s filing framework.'],
    ['What happens if a company does not file?', 'Non-filing or false disclosure attracts penalties under the Companies Act framework governing returns called for by the Central Government, falling on the company and its officers in default. Separately — and often more painfully — the gap between MSME Form-1 disclosures, audited accounts and the buyer\'s stance in recovery litigation is fertile cross-examination material.'],
    ['How does a supplier use these filings?', 'MSME Form-1 filings are public documents accessible through the MCA portal. A supplier pursuing a Samadhaan reference or a suit can obtain the buyer\'s filings to show admitted outstandings, the buyer\'s own stated reasons for delay, and inconsistency with defences later raised — and an absence of filing despite admitted dues is itself a point.'],
  ],
  'sources'      => [
    ['label' => 'Companies Act, 2013 (Section 405) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 (Sections 15-16, 22-23) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Ministry of Corporate Affairs — MCA portal', 'url' => 'https://www.mca.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The disclosure architecture around the 45-day rule</h2>
<p>Section 15 of the MSMED Act fixes the outer limit for payment to micro and small suppliers: the agreed date, subject to a ceiling of forty-five days from acceptance or deemed acceptance. Around that rule, Parliament and the Government have built four disclosure obligations that operate on buyers, each with a different audience.</p>
<table class="law">
  <thead><tr><th>Instrument</th><th>Who reports</th><th>To whom</th><th>What it reveals</th></tr></thead>
  <tbody>
    <tr><td>MSME Form-1 (Section 405, Companies Act; 2019 Order)</td><td>Companies with 45-day+ dues to micro/small suppliers</td><td>Registrar of Companies, half-yearly</td><td>Supplier-wise outstandings and reasons for delay</td></tr>
    <tr><td>Sections 22-23, MSMED Act</td><td>Buyers required to get accounts audited</td><td>In the annual audited accounts</td><td>Principal and interest due, interest paid or accrued to micro/small suppliers; interest not deductible for income tax</td></tr>
    <tr><td>Section 43B(h), Income-tax Act</td><td>All buyers</td><td>Tax computation</td><td>Amounts unpaid beyond the Section 15 timeline deductible only in the year of actual payment</td></tr>
    <tr><td>TReDS obligations</td><td>Notified classes of buyers</td><td>Trade receivables platforms</td><td>Onboarding for invoice discounting of MSME receivables</td></tr>
  </tbody>
</table>

<h2>What MSME Form-1 requires, concretely</h2>
<p>The return operates half-yearly: outstandings as at 30 September are reported in the return for April-September, and as at 31 March for October-March. The company identifies each micro or small supplier, states the amount outstanding beyond forty-five days, and — the clause with litigation consequences — states the <em>reasons for the delay</em>. That field forces an election early: a company that writes &ldquo;quality dispute&rdquo; commits itself; one that writes &ldquo;funds constraint&rdquo; concedes the debt; one that files nothing while carrying admitted MSME creditors in its accounts invites questions it will not enjoy answering. Officers certifying the return should treat it with the seriousness of any statutory filing, because inconsistency between the form, the audited accounts and later pleadings is durable and public.</p>

<h2>The supplier\'s use of the buyer\'s own filings</h2>
<div class="check">
<ul>
  <li><strong>Before the Facilitation Council:</strong> a buyer\'s MSME Form-1 showing the claimant\'s invoices as outstanding, with reasons unrelated to any defect, undercuts a later-invented quality defence.</li>
  <li><strong>In a commercial suit:</strong> disclosures in the form and in Section 22 accounts can support summary judgment — the defence must explain its own admissions.</li>
  <li><strong>In insolvency:</strong> consistency between the form and the demand strengthens the operational creditor\'s case that the debt is undisputed.</li>
  <li><strong>In settlement:</strong> the 43B(h) tax disallowance and audit disclosure give the buyer independent financial reasons to clear MSME dues — leverage worth stating in the demand notice.</li>
</ul>
</div>

<h2>Compliance guidance for buyers</h2>
<p>For companies, the sensible programme has four elements. Identify: obtain and record suppliers\' Udyam status at onboarding, and require notification of changes, because the obligations attach to micro and small suppliers and classification can change. Track: age creditors against acceptance dates, not invoice dates, since deemed acceptance runs from delivery absent written objection within the statutory window. Reconcile: the MSME Form-1, the Section 22 disclosures in the accounts and the tax computation under Section 43B(h) must tell one story. Decide: where a genuine dispute exists, document it contemporaneously — a written objection within the acceptance window, recorded in the reasons field — because a dispute first surfacing in litigation reads as an afterthought.</p>

<div class="note">
<p><strong>Practice note:</strong> The disclosure regime has quietly shifted the balance of proof in delayed-payment disputes. Cases are increasingly decided on the buyer\'s own paper trail — or its absence. Suppliers should make MCA searches a standard first step in any recovery brief; buyers should assume that everything filed will one day be read back to them in cross-examination.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
