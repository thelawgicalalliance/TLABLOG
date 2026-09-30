<?php
$P = [
  'slug'         => 'execution-court-arbitration-referable-hamdard-delhi.php',
  'title'        => 'Execution Court or Arbitrator? – Advocate Manish Jha',
  'meta'         => 'Delhi High Court declines to appoint an auditor in execution of the Hamdard family settlement decree, holding the dispute is referable to arbitration.',
  'h1'           => 'When the Execution Court Steps Back: Family Settlement Disputes Sent to the Arbitrator',
  'crumb'        => 'Execution vs Arbitration',
  'kicker'       => 'Delhi High Court · 29 September 2026',
  'sub'          => 'In execution proceedings over the decree splitting the Hamdard businesses, the Court holds that questions intertwined with asset segregation belong before the arbitrator already in place.',
  'date'         => '2026-09-30',
  'date_display' => '30 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">What happens when a compromise decree and an arbitration run side by side, and a fresh dispute erupts that could plausibly go to either? In <strong>Hammad Ahmed v. Abdul Majeed &amp; Ors.</strong> (EX.P. 66/2025, decided 29 September 2026), Justice Tushar Rao Gedela of the Delhi High Court declined to appoint an independent auditor in execution of the decree that divided the Hamdard group\'s businesses between two charitable trusts, holding that the underlying controversy — how the properties are to be segregated — was already squarely within a pending arbitration, and the decree-holder must seek his remedy there.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['Can an execution court decide every dispute arising after a compromise decree?', 'No. An execution court enforces the decree as it stands; it does not rewrite or supplement it. Where the parties have referred implementation disputes to arbitration, or where the new controversy is intertwined with issues already pending before an arbitrator, the execution court will ordinarily leave those questions to that forum rather than decide them collaterally.'],
    ['What was the immediate dispute in this case?', 'One side had unilaterally filed Form 10AB — the periodic income-tax filing connected to registration of charitable trusts — without consulting the decree-holder, and the tax authority rejected it citing discrepancies in property descriptions. The decree-holder sought appointment of an independent auditor in execution; the Court found the property-description issue inseparable from the asset-segregation dispute pending in arbitration.'],
    ['Why did urgency matter to the outcome?', 'The Court noted that Form 10AB is a five-yearly compliance, so there was no immediate prejudice requiring the execution court\'s intervention. Absent urgency, and with an arbitral forum already seized of the intertwined dispute, the balance favoured relegating the applicant to the arbitrator with liberty to seek appropriate directions there.'],
    ['Does refusing relief in execution mean the applicant is without remedy?', 'No. The Court expressly left it open to the decree-holder to approach the arbitrator with appropriate applications. Interim and procedural directions of that kind — including, where justified, expert or auditor assistance — can be sought from the arbitral tribunal under its own powers.'],
  ],
  'sources'      => [ ['label' => 'Hammad Ahmed v. Abdul Majeed & Ors. — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/147947303/'] ],
];
$BODY = <<<'HTML'
<h2>Background: a decree, a division, and a filing</h2>
<p>The parties&rsquo; Family Settlement Deed dated 22 October 2019, decreed by the Court on 13 December 2019, divided the operations of Hamdard Laboratories India between two charitable trusts — one taking the medicines business, the other the foods business. Implementation has not been smooth: earlier orders of 20 September 2022 and 29 May 2025 had already channelled disputes over segregation of properties into arbitration.</p>
<p>The present flashpoint was Form 10AB, the filing by which charitable institutions renew their registration-linked tax status. Judgment-debtors filed it unilaterally on 30 September 2025. The Income Tax authorities rejected the filing, citing discrepancies in the description of properties — precisely the subject on which the two sides disagree. The decree-holder returned to the execution court asking for an independent auditor to be appointed so that the filing could be made on an agreed factual basis.</p>

<h2>The Court&rsquo;s reasoning</h2>
<p>Justice Gedela dismissed the application on two connected grounds.</p>
<div class="tiles">
  <div class="tile"><strong>No urgency.</strong> Form 10AB is a five-yearly requirement. A rejected filing on account of description discrepancies did not create the kind of imminent prejudice that would compel the execution court to act at once.</div>
  <div class="tile"><strong>Wrong forum.</strong> The property descriptions cannot be settled without deciding how the assets are to be segregated between the trusts — and that dispute is already in arbitration under the earlier orders. As the Court put it, the filing of Form 10AB is &ldquo;intrinsically intertwined with the segregation of properties&rdquo;, so &ldquo;the prayers sought&hellip; are referable to arbitration.&rdquo;</div>
</div>
<p>The decree-holder was accordingly directed to approach the arbitrator for appropriate relief, rather than obtain through execution what is, in substance, an interim measure in the arbitral dispute.</p>

<h2>The larger principle</h2>
<p>Execution is meant to be the tail end of litigation, but in complex family and business settlements it often becomes a second front. This decision illustrates the discipline courts apply to keep the fronts separate:</p>
<div class="flow">
  <div class="fstep"><strong>Is the relief within the decree?</strong> If the decree itself commands the act sought, execution is the right forum.</div>
  <div class="fstep"><strong>Is it a new or intertwined dispute?</strong> If granting the relief requires deciding questions the parties have referred to arbitration, the execution court will not decide them collaterally.</div>
  <div class="fstep"><strong>Is there urgency the arbitral forum cannot address?</strong> Only genuine, immediate prejudice justifies the execution court stepping in despite the pending reference.</div>
</div>
<p>The approach respects both the sanctity of the consent decree and the parties&rsquo; chosen dispute-resolution machinery. It also carries a drafting lesson: settlement deeds that divide operating businesses should specify who makes statutory and tax filings for shared or transitional assets, and on what factual basis, so that routine compliance does not become fresh litigation.</p>
<div class="note"><p>For parties administering split businesses under a decree, unilateral statutory filings on contested facts invite rejection and cost time. Where descriptions or valuations are disputed, an agreed protocol — or an early application to the arbitrator — is almost always cheaper than an execution battle.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
