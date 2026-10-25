<?php
$P = [
  'slug'         => 'section-39-arbitration-lien-award-costs.php',
  'title'        => 'The Tribunal\'s Lien on Its Award – Advocate Manish Jha',
  'meta'         => 'Section 39 of the Arbitration Act lets a tribunal withhold its award until costs are paid — and lets a party get the award released by paying into court.',
  'h1'           => 'When the Arbitrator Will Not Release the Award: Section 39 of the Arbitration and Conciliation Act',
  'crumb'        => 'Arbitration — Section 39',
  'kicker'       => 'Practice Explainer · 25 October 2026',
  'sub'          => 'Section 39 gives the arbitral tribunal a lien on the award for its unpaid costs, and gives parties a court remedy: payment of the demanded costs into court, delivery of the award, and a judicial inquiry into what the tribunal may reasonably retain.',
  'date'         => '2026-10-25',
  'date_display' => '25 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Arbitration ends, the award is signed — and then it sits in the arbitrator\'s drawer because fees remain unpaid. The Arbitration and Conciliation Act, 1996 anticipates precisely this standoff. Section 39(1) arms the tribunal with a lien on the arbitral award for any unpaid costs of the arbitration; Section 39(2) arms the parties with a counterweight: the court may order the tribunal to deliver the award on payment of the demanded costs into court, and then inquire into what the tribunal is reasonably entitled to keep, refunding the balance. This explainer walks through how the mechanism works, where it fits alongside the deposit regime of Section 38, and the practical choices a party faces when an award is held back.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'delhi-high-court.php' => 'Delhi High Court Practice', 'blog.php' => 'All Updates'],
  'faqs'         => [
    ['Can the tribunal lawfully refuse to release the award?', 'Yes. Section 39(1) expressly subjects the delivery of the award to the tribunal\'s lien for unpaid costs of the arbitration. The lien is the tribunal\'s only practical security for its fees once proceedings end, and withholding delivery until costs are paid is the mechanism the statute itself contemplates.'],
    ['What if the demanded fees are exorbitant?', 'Section 39(2) is the remedy: a party applies to the court, pays the demanded costs into court, and the tribunal must deliver the award. The court then holds such inquiry as it thinks fit, directs payment to the tribunal of a reasonable sum by way of costs, and refunds any balance to the applicant. The party gets its award without conceding the fee dispute.'],
    ['Does the remedy apply where fees were agreed in writing?', 'Section 39(3) carves out fees fixed by written agreement: a party who has agreed the tribunal\'s fees in writing cannot use the Section 39(2) route to reopen them. This is why fee schedules in arbitration clauses, institutional rules and first procedural orders matter — they define what remains contestable later.'],
    ['How does this interact with limitation for challenging the award?', 'Time for a Section 34 challenge runs from receipt of the award by the party. An award withheld under a Section 39 lien has not been received, which is one more reason to move promptly under Section 39(2) rather than letting a fee standoff drift: the challenge window, the enforcement timeline and post-award interest are all downstream of delivery.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
    ['label' => 'Delhi International Arbitration Centre — fee schedules and rules', 'url' => 'https://dhcdiac.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory mechanism</h2>

<div class="flow">
  <div class="fstep"><h3>Lien arises</h3><p>Costs of the arbitration remain unpaid at the time the award is ready; Section 39(1) gives the tribunal a lien on the award for those costs.</p></div>
  <div class="fstep"><h3>Demand and refusal</h3><p>The tribunal declines to deliver the award except on payment of the costs it demands.</p></div>
  <div class="fstep"><h3>Application to court</h3><p>A party applies under Section 39(2); the court orders delivery of the award on payment of the demanded costs into court.</p></div>
  <div class="fstep"><h3>Inquiry and adjustment</h3><p>The court inquires, awards the tribunal such costs as are reasonable, and refunds the balance to the applicant.</p></div>
</div>

<h2>Where Section 39 sits in the costs architecture</h2>

<table class="law">
  <tr><th>Provision</th><th>Function</th></tr>
  <tr><td>Section 38</td><td>Deposits during the arbitration: the tribunal fixes advances on costs, payable in equal shares; if one party defaults, the other may pay, and the tribunal may suspend or terminate proceedings on non-payment</td></tr>
  <tr><td>Section 31(8) and Section 31A</td><td>Costs of the arbitration as between the parties: the costs-follow-the-event regime, conduct-sensitive adjustments, and the content of a costs order</td></tr>
  <tr><td>Section 39</td><td>Security for the tribunal's own unpaid costs: lien on the award, court-supervised release, judicial moderation of the demand</td></tr>
  <tr><td>Institutional rules</td><td>In institutional arbitrations, fee schedules and deposit mechanics are administered by the institution, which largely pre-empts Section 39 standoffs</td></tr>
</table>

<p>The provision is, in substance, a safeguard running in both directions. The tribunal — which cannot sue comfortably for fees in respect of its own adjudication — gets a self-executing security. The parties — who cannot be held hostage to an unreviewable demand — get delivery against payment into court and a neutral determination of reasonableness. The carve-out in Section 39(3) keeps the bargain honest: fees fixed by written agreement bind, and the inquiry is reserved for demands that were never agreed.</p>

<h2>Practical guidance</h2>

<p>For parties, three habits avoid most Section 39 disputes. First, settle the fee framework at the outset — adopt an institutional schedule or record the tribunal's fees in the first procedural order, since an agreed fee forecloses later contests and later surprises alike. Second, keep deposits under Section 38 current; a tribunal carrying unpaid advances into the award stage is a standoff waiting to happen, and a counterparty's default is better answered by paying its share under protest and recovering it in the award than by letting proceedings stall. Third, if the award is withheld, move under Section 39(2) promptly rather than negotiating indefinitely: payment into court releases the award, preserves challenge and enforcement timelines, and transfers the fee argument to a forum that can actually decide it.</p>

<p>For award-holders on the winning side, remember that the lien attaches to the award, not to your opponent: either party may need to fund the release and seek adjustment — against the tribunal through the inquiry, and against the opposing party through the costs allocation in the award itself.</p>

<div class="note"><p>This is a general explainer on Section 39 of the Arbitration and Conciliation Act, 1996. Fee disputes are shaped by the arbitration agreement, any institutional rules and the procedural record of each case; nothing here is legal advice.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
