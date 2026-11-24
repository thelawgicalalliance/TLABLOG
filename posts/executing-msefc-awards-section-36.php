<?php
$P = [
  'slug'         => 'executing-msefc-awards-section-36.php',
  'title'        => 'Executing an MSEFC Award, Step by Step – Advocate Manish Jha',
  'meta'         => 'How a supplier turns an MSEFC award into money: Section 36 execution, filing where the buyer&rsquo;s assets lie, and the 75% deposit shield explained.',
  'h1'           => 'From Award to Recovery: Executing an MSEFC Award',
  'crumb'        => 'MSME: Award Execution',
  'kicker'       => 'MSME Practice · 24 November 2026',
  'sub'          => 'Winning before the Facilitation Council is half the matter; this is the procedural map for the other half — execution, the 75% deposit shield, and where buyers can and cannot stall.',
  'date'         => '2026-11-24',
  'date_display' => '24 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">An award of the Micro and Small Enterprises Facilitation Council under Section 18 of the MSMED Act, 2006 — whether made by the Council itself or by an institution to which it refers the dispute — takes effect as an arbitral award under the Arbitration and Conciliation Act, 1996. That single design choice answers most execution questions: the supplier enforces it the way any domestic award is enforced, under Section 36, as if it were a decree of the court.</p>',
  'related'      => ['business-corporate-law.php' => 'Business &amp; Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'civil-law.php' => 'Civil Litigation', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['When does an MSEFC award become enforceable?', 'Once the time for applying to set it aside under Section 34 has expired, or such an application stands refused, the award is enforced under Section 36 CPC-style as if it were a decree. A buyer&rsquo;s Section 34 application does not by itself stay execution — a stay must be specifically sought and granted, and for an MSEFC award Section 19 of the MSMED Act makes any set-aside application conditional on depositing 75% of the awarded amount.'],
    ['Where is the execution petition filed?', 'Following Sundaram Finance Ltd. v. Abdul Samad, (2018) 3 SCC 622, an award holder may file execution directly in any court where the judgment-debtor&rsquo;s assets or money lie; no transfer of decree from the &ldquo;seat&rdquo; court is required. For money claims of commercial value, the commercial court having territorial jurisdiction over the assets is the usual forum.'],
    ['What can the supplier attach?', 'The ordinary Order XXI CPC menu applies: bank accounts, receivables owed to the buyer by third parties (garnishee orders), movable assets, and immovable property. Execution against government and PSU buyers follows the same route, subject to the CPC&rsquo;s notice provisions for decrees against the government.'],
    ['Can the buyer resist execution on merits?', 'Only within the narrow grounds the executing court recognises — it cannot go behind the award. The buyer&rsquo;s substantive challenge belongs in Section 34, where the 75% pre-deposit applies; raising award-merit objections at the execution stage is routinely rejected.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory bridge: Section 18(3) to Section 36</h2>
<p>When conciliation before the Council fails, Section 18(3) of the MSMED Act sends the dispute to arbitration, and declares that the Arbitration and Conciliation Act, 1996 applies <em>as if</em> the arbitration were in pursuance of an agreement under Section 7(1) of that Act. The award that results is therefore an arbitral award in the full statutory sense: Section 31 governs its form and interest, Section 34 its challenge, and Section 36 its enforcement. There is no separate &ldquo;MSEFC execution&rdquo; procedure, and none is needed — the award is enforced in accordance with the CPC, in the same manner as if it were a decree of the court.</p>

<h2>The execution route, in order</h2>
<div class="flow">
  <div class="fstep"><strong>Obtain the award and compute the claim.</strong> Interest under Section 16 MSMED — compound interest with monthly rests at three times the RBI-notified bank rate — typically continues until payment, as the award provides; recompute as on the filing date.</div>
  <div class="fstep"><strong>Confirm the award&rsquo;s enforceability.</strong> Either the Section 34 window has closed, or a challenge is pending without any stay. Under Section 19 MSMED, a buyer&rsquo;s set-aside application is not even entertained without a 75% deposit, and courts may release part of the deposit to the supplier pending the challenge.</div>
  <div class="fstep"><strong>Choose the forum by the money, not the seat.</strong> File where the buyer&rsquo;s assets, accounts or receivables are located (Sundaram Finance v. Abdul Samad). Attach the award, the enforceability affidavit, and an assets disclosure application if details are thin.</div>
  <div class="fstep"><strong>Deploy Order XXI.</strong> Garnishee attachment of bank accounts and trade receivables is usually the fastest; attachment before judgment-style urgency is unavailable, but prompt attachment applications and examination of the judgment-debtor under Order XXI Rule 41 fill the gap.</div>
</div>

<h2>The buyer&rsquo;s position, honestly stated</h2>
<p>A buyer served with execution of an MSEFC award has three lawful responses, each narrow. It can pay. It can pursue — or have pending — a Section 34 challenge with the 75% deposit made and a stay obtained, in which case execution abides the challenge. Or it can raise the limited objections an executing court may hear, such as satisfaction already recorded or want of jurisdiction apparent on the face of the record. What it cannot do is re-argue the supply, the invoices or the interest computation before the executing court: the executing court cannot go behind the award, and attempts to convert execution into a second Section 34 draw costs.</p>

<h2>Common friction points</h2>
<table class="law">
  <tr><th>Situation</th><th>The working rule</th></tr>
  <tr><td>Buyer in insolvency (CIRP admitted)</td><td>The IBC moratorium suspends execution; the supplier files its claim with the resolution professional instead</td></tr>
  <tr><td>Award silent on post-award interest</td><td>Section 31(7)(b) of the 1996 Act supplies post-award interest unless the award directs otherwise</td></tr>
  <tr><td>Buyer&rsquo;s assets in several states</td><td>Execution may be filed where assets are; successive or simultaneous petitions require disclosure to each court</td></tr>
  <tr><td>Part deposit under Section 19 lying in court</td><td>The supplier can seek release of the deposited amount, typically against security, pending the Section 34 decision</td></tr>
</table>
<div class="note">This article is a general procedural overview for information, not legal advice on any specific recovery; execution strategy depends on the award&rsquo;s terms, the buyer&rsquo;s solvency and the forum&rsquo;s practice.</div>
HTML;
include __DIR__ . '/post-layout.php';
