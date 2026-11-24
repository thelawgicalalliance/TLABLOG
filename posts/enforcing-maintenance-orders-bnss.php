<?php
$P = [
  'slug'         => 'enforcing-maintenance-orders-bnss.php',
  'title'        => 'When Maintenance Is Not Paid: Enforcement – Advocate Manish Jha',
  'meta'         => 'How Sections 144(3) and 147 BNSS enforce maintenance orders: warrants, a month&rsquo;s jail per default, the one-year rule and recovery of arrears.',
  'h1'           => 'Enforcing a Maintenance Order: Warrants, Arrears and the One-Year Rule',
  'crumb'        => 'Maintenance: Enforcement',
  'kicker'       => 'Family Court Practice · 24 November 2026',
  'sub'          => 'The BNSS carries forward the CrPC&rsquo;s enforcement machinery intact — including the rule that jailing a defaulter is a mode of recovery, not a discharge of the debt.',
  'date'         => '2026-11-24',
  'date_display' => '24 November 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Orders under Section 144 of the Bharatiya Nagarik Suraksha Sanhita, 2023 — the successor to Section 125 CrPC — are meant to be summary and swift. Their enforcement machinery sits in two places: Section 144(3) itself, which arms the Magistrate with warrants and imprisonment for each month&rsquo;s default, and Section 147 (formerly Section 128 CrPC), which governs where and how the order is enforced once made. Knowing the sequence, the time bar, and what imprisonment does and does not achieve is what converts an order into money.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Disputes', 'domestic-violence.php' => 'Domestic Violence', 'child-custody.php' => 'Child Custody', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What can the Magistrate do when maintenance goes unpaid?', 'On an application, the Magistrate issues a warrant for levying the amount due in the manner provided for levying fines — attachment and sale of movables, among other modes — and may sentence the defaulter to imprisonment up to one month for each month&rsquo;s unpaid allowance, or until payment if sooner.'],
    ['Does imprisonment wipe out the arrears?', 'No. The Supreme Court settled in Kuldip Kaur v. Surinder Singh, (1989) 1 SCC 405, that imprisonment is a mode of enforcement, not a mode of satisfaction: the defaulter emerges from custody still owing every rupee, and fresh warrants can follow for the continuing liability.'],
    ['What is the one-year rule?', 'The first proviso to Section 144(3) BNSS, carried over from Section 125(3) CrPC: no warrant issues for recovery of any amount unless the application is made within one year from the date it became due. Claimants who let arrears pile up must therefore apply periodically; dormant years can become irrecoverable through the warrant route.'],
    ['Where is a maintenance order enforced if the parties have moved?', 'Under Section 147 BNSS, the order may be enforced by any Magistrate in any place where the person against whom it is made resides, on a copy of the order and proof of non-payment — the claimant does not have to chase the original court.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — Sections 144 to 147 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The enforcement sequence</h2>
<div class="flow">
  <div class="fstep"><strong>Quantify the default.</strong> Compute arrears month by month from the order — interim or final — including any escalation the order provides. Maintenance ordinarily runs from the date of application unless the order says otherwise, so the computation often begins earlier than payers assume.</div>
  <div class="fstep"><strong>Apply within the year.</strong> File the enforcement application under Section 144(3) BNSS before the Family Court or Magistrate, within one year of each instalment falling due. A running default needs periodic applications; one omnibus petition years later meets the time bar.</div>
  <div class="fstep"><strong>Warrant first.</strong> The court issues a warrant for levying the amount as if it were a fine — attachment of movables, and in Family Court practice, directions to employers for salary attachment and to banks for account particulars.</div>
  <div class="fstep"><strong>Imprisonment as pressure.</strong> If the amount or part remains unpaid after execution of the warrant, the defaulter may be sentenced to imprisonment up to one month per month of unpaid allowance — with the arrears surviving the sentence in full.</div>
</div>

<h2>What each tool actually achieves</h2>
<table class="law">
  <tr><th>Tool</th><th>Reaches</th><th>Limits</th></tr>
  <tr><td>Warrant for levy (S.144(3))</td><td>Movables, attachable assets; salary through employer in practice</td><td>Needs identifiable assets; the one-year application rule applies</td></tr>
  <tr><td>Imprisonment (S.144(3))</td><td>Coercive pressure — one month per defaulted month</td><td>Does not extinguish arrears (Kuldip Kaur); repeated sentences require repeated process</td></tr>
  <tr><td>Enforcement at the defaulter&rsquo;s residence (S.147)</td><td>Any Magistrate where the defaulter resides</td><td>Requires a copy of the order and proof of non-payment</td></tr>
  <tr><td>Decree-style execution (Family Courts Act, S.18)</td><td>Orders of Family Courts executable as civil decrees — attachment of immovables, garnishee</td><td>Civil execution timelines; best for large accumulated arrears</td></tr>
</table>

<h2>The defaulter&rsquo;s standard answers, and their worth</h2>
<p>Three defences recur. &ldquo;I am unemployed&rdquo; rarely moves the needle at the enforcement stage: the remedy against an order said to be unaffordable is modification under Section 146 BNSS on proof of changed circumstances, not unilateral non-payment — Delhi courts impute at least minimum-wage earning capacity to the able-bodied. &ldquo;She is living separately without reason&rdquo; is a merits argument foreclosed by the order; it belongs, if anywhere, in modification or in the pending matrimonial case. &ldquo;The parties have settled&rdquo; requires the settlement to be recorded and the order varied — private set-offs against stridhan, gifts or school fees do not discharge the ordered amount unless the court accepts them.</p>

<h2>Practical notes for claimants</h2>
<p>Keep a payment ledger from day one; enforcement applications succeed on arithmetic, not indignation. Seek directions for salary particulars and bank statements in the first enforcement hearing — disclosure converts a chase into a calculation, but it arrives only when asked for. Where the defaulter has immovable property or a business, weigh the Family Courts Act execution route alongside Section 144(3): the warrant-and-imprisonment cycle pressures a salaried defaulter well, but a propertied one responds faster to attachment. And remember that interim maintenance is enforceable on the same machinery — default is not a reason to wait for the final order.</p>
<div class="note">This explainer is general information on the enforcement framework, not advice on any particular matter; the appropriate route depends on the order&rsquo;s terms, the forum and the defaulter&rsquo;s circumstances.</div>
HTML;
include __DIR__ . '/post-layout.php';
