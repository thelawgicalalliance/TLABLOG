<?php
$P = [
  'slug'         => 'date-from-which-maintenance-runs-arrears.php',
  'title'        => 'From Which Date Maintenance Runs – Advocate Manish Jha',
  'meta'         => 'From which date is maintenance payable — application, order or demand? How arrears are computed, the one-year warrant rule under Section 144(3) BNSS, and set-offs.',
  'h1'           => 'From Which Date Does Maintenance Run? Effective Date and Arrears',
  'crumb'        => 'Maintenance: Effective Date',
  'kicker'       => 'Explainer · Maintenance',
  'sub'          => 'The difference between maintenance from the date of application and from the date of the order can amount to years of arrears — this explainer sets out how the effective date is fixed and how arrears are recovered.',
  'date'         => '2026-08-24',
  'date_display' => '24 August 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Maintenance litigation is rarely decided quickly. An application under Section 144 of the Bharatiya Nagarik Suraksha Sanhita, 2023 (formerly Section 125 CrPC) or under Section 24 of the Hindu Marriage Act, 1955 may take months to reach an interim order and years to reach a final one. The date from which the award operates therefore matters as much as the monthly figure itself. This explainer covers the effective-date question, the computation and recovery of arrears, and the strict timeline that governs enforcement warrants.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Law', 'domestic-violence.php' => 'Domestic Violence', 'child-custody.php' => 'Child Custody', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Is maintenance normally awarded from the date of application or the date of the order?', 'The settled practice, applied uniformly in Delhi courts, is that maintenance is ordinarily awarded from the date of the application. This prevents the respondent from benefiting by prolonging the proceedings. A court departing from that norm — awarding only from the date of the order — is expected to record reasons for doing so.'],
    ['How are arrears recovered if the respondent does not pay?', 'The order is enforced under Section 144(3) BNSS: the Magistrate may issue a warrant for levying the amount due in the manner provided for fines, and may sentence the defaulter to imprisonment up to one month for each month\'s unpaid allowance. Civil execution against salary and assets is also available for orders under the HMA and the DV Act.'],
    ['Is there a time limit for enforcement?', 'Yes, and it is unforgiving. The first proviso to Section 144(3) BNSS requires the application for a warrant to be made within one year from the date the amount became due. Arrears older than a year, if never pursued, can become irrecoverable through the warrant route — so enforcement applications should be filed periodically, not saved up.'],
    ['Do interim payments already made get adjusted?', 'Yes. Amounts paid under interim orders, or under a parallel maintenance order in another proceeding, are set off against the final award for the overlapping period. Courts insist on a proper accounting from both sides so the respondent is not made to pay twice and the claimant is not short-changed.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Hindu Marriage Act, 1955 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'District Courts of Delhi', 'url' => 'https://delhidistrictcourts.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The three candidate dates</h2>
<p>In principle a maintenance award could operate from any of three points: the date the entitlement arose (for instance, the date of separation or of the demand), the date the application was filed, or the date of the order. The statutory text of Section 144 BNSS leaves the choice to the court. Practice has, however, hardened into a clear norm: the award ordinarily runs from the <strong>date of the application</strong>.</p>
<p>The logic is simple. The claimant approached the court because she could not maintain herself then — not months or years later when the order finally came. If maintenance ran only from the order, every adjournment would transfer money from the dependent spouse to the defaulting one. Delhi Family Courts therefore treat date-of-application as the default, with reasons required for any departure.</p>

<h2>Interim orders and the final award</h2>
<div class="flow">
  <div class="fstep"><strong>1. Application filed.</strong> The effective-date clock usually starts here. The affidavit of assets and liabilities required from both parties in Delhi follows soon after.</div>
  <div class="fstep"><strong>2. Interim order.</strong> A monthly figure is fixed pending disposal. Payments begin, typically from the application date, generating an immediate arrear for the pre-order months.</div>
  <div class="fstep"><strong>3. Final order.</strong> The court fixes the final quantum — which may be higher or lower than the interim figure — and states the date from which it operates.</div>
  <div class="fstep"><strong>4. Reconciliation.</strong> Interim payments are adjusted against the final award month by month; a differential arrear or refund position emerges and is quantified.</div>
</div>

<h2>Computing arrears correctly</h2>
<p>Arrears are computed month by month from the effective date to the date of computation, crediting every payment actually made. Three recurring complications deserve care:</p>
<div class="check">
<ul>
  <li><strong>Overlapping orders.</strong> Where maintenance has been granted both under Section 144 BNSS and under Section 20 of the DV Act or Section 24 HMA, the amounts are adjusted against each other for the same period — the claimant receives the highest single entitlement, not the aggregate of all orders.</li>
  <li><strong>Part payments and in-kind support.</strong> School fees paid directly, rent paid to a landlord, or EMIs on the shared household are frequently claimed as credits. Whether they count depends on the terms of the order; a respondent seeking credit should obtain a direction to that effect rather than assume it.</li>
  <li><strong>Revision or appeal.</strong> A stay of the maintenance order suspends enforcement, but unless the appellate court says otherwise, arrears continue to accrue and become payable if the order survives.</li>
  </ul>
</div>

<h2>The one-year warrant rule</h2>
<p>Section 144(3) BNSS carries forward the enforcement scheme of Section 125(3) CrPC. If the respondent fails without sufficient cause to comply, the Magistrate may issue a warrant to levy the amount as if it were a fine, and may imprison the defaulter for up to one month for each month's default. But the first proviso imposes a limitation: <strong>no warrant shall issue unless the application is made within one year from the date the amount became due</strong>.</p>
<table class="law">
  <thead>
    <tr><th>Situation</th><th>Position on recovery</th></tr>
  </thead>
  <tbody>
    <tr><td>Default less than a year old, warrant application filed</td><td>Warrant may issue; imprisonment up to one month per month of default possible</td></tr>
    <tr><td>Default older than one year, no application ever made</td><td>Warrant route barred for those months; recovery must be pursued by other lawful means, if available</td></tr>
    <tr><td>Application filed in time, pending for years</td><td>The bar does not apply — what matters is the date of the application, not the date the court acts on it</td></tr>
  </tbody>
</table>
<div class="note">
<p><strong>Practice note:</strong> Claimants should diarise enforcement: file execution or warrant applications at intervals of well under a year, listing each month's default. Respondents facing imprisonment for default should note that imprisonment is a mode of enforcement, not a discharge — the arrears remain payable even after the sentence is served.</p>
</div>

<h2>Alteration and its effect on past dues</h2>
<p>Under Section 146 BNSS (formerly Section 127 CrPC), maintenance can be increased, reduced or cancelled on proof of a change in circumstances. An alteration ordinarily operates from the date of the alteration application or order, as the court directs; it does not silently rewrite history. Arrears that accrued under the original order remain due unless the court, for recorded reasons, grants relief against them.</p>

<h2>The takeaway</h2>
<p>The monthly figure gets the attention, but the effective date and the enforcement calendar decide what is actually received. Claimants should press for maintenance from the date of application, keep a running ledger of payments, and enforce within the one-year window. Respondents should pay through banking channels, seek express credit directions for in-kind payments, and pursue alteration promptly when circumstances genuinely change — silent default is the one strategy the statute punishes with imprisonment.</p>
HTML;
include __DIR__ . '/post-layout.php';
