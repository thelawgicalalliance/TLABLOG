<?php
$P = [
  'slug'         => 'msme-dues-insolvency-ibc-route.php',
  'title'        => 'MSME Dues and the Insolvency Route – Advocate Manish Jha',
  'meta'         => 'Using the IBC to recover MSME dues: Section 9 operational creditor demand, thresholds, Section 240A protections for MSME debtors, and Samadhaan comparison.',
  'h1'           => 'MSME Dues and the IBC: When Insolvency Pressure Works — and When It Backfires',
  'crumb'        => 'MSME Dues & IBC',
  'kicker'       => 'Explainer · MSME',
  'sub'          => 'For an unpaid MSME supplier, the Insolvency and Bankruptcy Code offers a pressure instrument quite different from a Samadhaan reference — a demand notice under Section 8, a petition under Section 9, and the debtor\'s fear of losing the company. The Code also protects MSMEs on the other side, through Section 240A.',
  'date'         => '2026-09-01',
  'date_display' => '1 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A micro or small enterprise chasing payment from a corporate buyer holds more than one key. The MSMED Act, 2006 gives the Facilitation Council route with compound interest. The Commercial Courts give a suit. And the Insolvency and Bankruptcy Code, 2016 gives something psychologically different: the ability to put the buyer\'s corporate existence in issue for non-payment of an undisputed operational debt. Used well, the IBC route produces settlements the other forums cannot; used carelessly, it collapses on the first genuine dispute.</p>',
  'related'      => ['nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'business-corporate-law.php' => 'Commercial & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'blog.php' => 'All Updates'],
  'faqs'         => [
    ['What is the minimum default for an IBC petition?', 'One crore rupees. The threshold for initiating corporate insolvency was raised from one lakh to one crore in 2020, which places many MSME claims below the doorway. Claims under the threshold must aggregate genuine defaults of the same creditor against the same debtor; they cannot be pooled across creditors to manufacture jurisdiction.'],
    ['How does the Section 8 demand notice work?', 'An operational creditor serves a demand notice in the prescribed form for the unpaid operational debt. The corporate debtor has ten days to pay or to notify a pre-existing dispute. If a genuine dispute predating the notice is shown, the Section 9 petition fails — insolvency is not a debt-collection court for contested claims.'],
    ['What is Section 240A and why does it matter?', 'Section 240A relaxes the Code for MSME corporate debtors: the disqualifications in clauses (c) and (h) of Section 29A do not apply to resolution applicants for an MSME, allowing promoters who are not wilful defaulters to bid for their own enterprise, and the Government may notify further exemptions. It exists to keep viable MSMEs alive rather than liquidate them.'],
    ['Should an MSME choose Samadhaan or the IBC?', 'They serve different ends. Samadhaan under Section 18 MSMED adjudicates and awards compound interest at three times the bank rate, but takes time and ends in an award needing enforcement. The IBC does not adjudicate quantum or award MSMED interest; it threatens insolvency for clear defaults above the threshold, and its practical output is often settlement. Clear, large, undisputed debt favours IBC pressure; disputed or interest-heavy claims favour the Council.'],
  ],
  'sources'      => [
    ['label' => 'Insolvency and Bankruptcy Code, 2016 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan portal — Ministry of MSME', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The supplier's three roads</h2>

<p>An MSME with unpaid invoices against a company can pursue the Facilitation Council under Section 18 of the MSMED Act, a commercial suit (or summary suit) in the civil courts, or the operational-creditor machinery of the IBC. The three differ in what they decide, what they cost, and what they threaten:</p>

<table class="law">
  <tr><th>Route</th><th>What it decides</th><th>Its real leverage</th></tr>
  <tr><td>MSEFC / Samadhaan (Section 18 MSMED)</td><td>Adjudicates the claim; awards principal plus compound interest at three times the bank rate</td><td>The interest burden and the 75% pre-deposit the buyer must make to challenge the award</td></tr>
  <tr><td>Commercial suit</td><td>Full adjudication with ordinary interest</td><td>Decree and execution; summary judgment where there is no defence</td></tr>
  <tr><td>IBC Section 9</td><td>Does not adjudicate a disputed claim — admits or rejects insolvency on default</td><td>The existential threat to the debtor company; settlements before and after admission</td></tr>
</table>

<h2>Making a Section 9 case</h2>

<div class="flow">
  <div class="fstep"><h3>Demand notice — Section 8</h3><p>Serve the statutory demand for the operational debt with invoices and proof of delivery. Accuracy matters: the notice defines the debt the petition must mirror.</p></div>
  <div class="fstep"><h3>Ten-day window</h3><p>The debtor either pays, or notifies the existence of a dispute. Only a pre-existing, genuine dispute — raised before the notice, evidenced in correspondence or proceedings — defeats the petition.</p></div>
  <div class="fstep"><h3>Petition — Section 9</h3><p>File before the NCLT with the notice, affidavit of no dispute-notice received, and bank statements evidencing non-payment. The debt and default must be clear; quantum quibbles below the threshold sink jurisdiction.</p></div>
  <div class="fstep"><h3>Admission or settlement</h3><p>Most well-founded petitions settle before admission. On admission, moratorium follows and the claim joins the resolution process — where operational creditors' recoveries depend on the plan.</p></div>
</div>

<p>The route's discipline should be understood before it is chosen. Insolvency is not a recovery suit: if the tribunal finds a plausible pre-existing dispute, the petition fails without deciding who is right. And admission is not victory: once the process opens, the MSME becomes one operational creditor among many, paid what the resolution plan provides. The instrument works best in the shadow it casts, not in the process it starts.</p>

<h2>The other side: MSMEs as corporate debtors</h2>

<p>Section 240A embodies the Code's solicitude for MSME debtors. For a corporate debtor that is an MSME, the disqualifications of Section 29A(c) (NPA-linked) and 29A(h) (guarantee-linked) do not bar a resolution applicant — meaning the promoter of an MSME, unless disqualified on other grounds such as wilful default, can bid to take the enterprise back. The provision recognises that for small enterprises, the promoter is often the only realistic buyer, and liquidation the only alternative. The Central Government may further modify the Code's application to MSMEs by notification. A buyer-company facing a Section 9 petition that is itself an MSME should also examine Udyam status and assert it early: the classification shapes the endgame.</p>

<div class="check">
  <p><strong>Pre-filing checklist for the MSME creditor:</strong></p>
  <ul>
    <li>Default of at least one crore rupees, computed honestly (principal and contractually due amounts; MSMED statutory interest is for the Council, not the NCLT).</li>
    <li>Clean invoice trail: purchase orders, delivery challans, acceptances, ledger confirmations.</li>
    <li>Correspondence audit: any buyer email raising quality or set-off issues before the demand notice is the seed of a "pre-existing dispute" defence.</li>
    <li>Parallel-remedy discipline: a pending Samadhaan reference does not bar a Section 9 petition, but inconsistent positions across forums will be quoted back.</li>
    <li>Settlement architecture: decide in advance the number at which the petition is withdrawn.</li>
  </ul>
</div>

<div class="note">
  <p><strong>Practice note:</strong> For claims below the one-crore threshold — the situation of most micro enterprises — the IBC is unavailable, and the effective pairing is a Samadhaan reference for the interest leverage with a summary or commercial suit where the limitation position or the buyer's solvency counsels speed. The forum choice is strategic, not ideological: the same invoice set can support different instruments at different stages.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
