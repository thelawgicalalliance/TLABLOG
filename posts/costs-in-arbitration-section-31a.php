<?php
$P = [
  'slug'         => 'costs-in-arbitration-section-31a.php',
  'title'        => 'Costs in Arbitration: Section 31A – Advocate Manish Jha',
  'meta'         => 'Section 31A of the Arbitration Act codifies the costs-follow-the-event regime: what costs cover, when the loser pays, conduct-based exceptions and pre-dispute cost clauses.',
  'h1'           => 'Costs in Arbitration: The Section 31A Regime Explained',
  'crumb'        => 'Arbitration Costs (S. 31A)',
  'kicker'       => 'Explainer · Arbitration',
  'sub'          => 'Since 2015, Indian arbitration has had a codified costs discipline: the unsuccessful party ordinarily pays, conduct can displace the rule, and agreements to pre-allocate costs are valid only if made after the dispute arises.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Costs were long an afterthought in Indian arbitration — nominal sums awarded without analysis, bearing no relation to what parties actually spent. The Arbitration and Conciliation (Amendment) Act, 2015 changed the framework by inserting Section 31A, a self-contained costs code applying both to arbitral tribunals and to courts acting under the Act. It defines what costs include, adopts the principle that the unsuccessful party pays, lists the circumstances that justify a different order, and strikes down pre-dispute agreements that make one party pay regardless of outcome. This explainer works through the regime and its use in practice.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['What do "costs" include under Section 31A?', 'Reasonable costs relating to the fees and expenses of the arbitrators, courts and witnesses; legal fees and expenses; administration fees of the institution supervising the arbitration; and any other expenses incurred in connection with the arbitral or court proceedings and the award. The touchstone throughout is reasonableness, which the tribunal assesses on the material placed before it.'],
    ['Is the losing party always ordered to pay?', 'The general rule in Section 31A(2) is that the unsuccessful party pays the successful party\'s costs — but the tribunal or court may make a different order for reasons recorded in writing. Section 31A(3) directs attention to conduct, partial success, and rejected settlement offers among the circumstances that can shift or reduce the burden.'],
    ['Can a contract provide that each party bears its own costs whatever the result?', 'A clause made before the dispute arose that requires a party to pay the whole or part of the costs of the arbitration in any event is valid only if such an agreement is made after the dispute in question has arisen — Section 31A(5). Standard-form clauses pre-allocating costs irrespective of outcome therefore do not bind the tribunal.'],
    ['Do reasonable settlement offers really affect costs?', 'Yes. Section 31A(3)(c) expressly makes a reasonable offer to settle, refused by the other party, a relevant circumstance. A party that refuses a documented offer and ultimately recovers no more than was offered risks bearing the costs of the proceedings from the date of the offer — a lever increasingly used in commercial arbitrations seated in Delhi.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 (Section 31A) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi International Arbitration Centre — Delhi High Court', 'url' => 'https://dhcdiac.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Where Section 31A applies</h2>
<p>Section 31A(1) reaches further than many notice: it governs the costs regime "in relation to any arbitration proceeding or a proceeding under any of the provisions of this Act pertaining to the arbitration proceedings" — that is, the arbitration itself and the satellite court litigation under the Act, including Section 9 interim measures, Section 11 appointments, Section 34 challenges and Section 37 appeals. Courts in these proceedings apply Section 31A, notwithstanding the CPC's general costs provisions.</p>

<h2>The default rule and its displacement</h2>
<div class="compare">
  <div class="col old">
    <h3>The general rule</h3>
    <p>Costs follow the event: the unsuccessful party pays the successful party's reasonable costs — arbitrators' fees, institutional charges, legal fees, witness expenses.</p>
  </div>
  <div class="arrow">→</div>
  <div class="col new">
    <h3>Different order, recorded reasons</h3>
    <p>The tribunal or court may depart from the rule for reasons in writing — partial success, divisible claims, disproportionate conduct, or a refused settlement offer that the result did not better.</p>
  </div>
</div>
<p>Section 31A(3) directs the decision-maker to the parties' conduct in the round: whether a claim was exaggerated, whether interlocutory skirmishing inflated the record, whether a party frustrated timelines, and whether a reasonable offer to settle was made and refused. Section 31A(4) then details the forms an order may take — a proportion of costs, costs from or until a certain date, costs of particular steps — allowing surgical allocation rather than a single global figure.</p>

<h2>The Section 31A(5) trap in standard contracts</h2>
<p>Commercial contracts routinely carry clauses on arbitration costs — each party bears its own; the claimant bears all; costs shared equally. Section 31A(5) neutralises the pre-dispute versions: an agreement that a party is to pay the whole or part of the costs of the arbitration <em>in any event</em> is valid only if made after the dispute has arisen. The policy is evident — a stronger party should not be able to price its counterparty out of arbitration at the drafting stage by making costs recovery impossible. Post-dispute costs agreements, by contrast, are respected, and parties settling procedural matters at the first case management conference can validly agree cost-sharing there.</p>

<h2>Getting costs in practice: the successful party's homework</h2>
<div class="check">
<ul>
  <li><strong>Keep the ledger from day one.</strong> Fee invoices, institutional charges, witness and expert expenses, transcription and venue costs — claims unsupported by vouchers are trimmed under the reasonableness standard.</li>
  <li><strong>File a costs submission.</strong> After the hearing, place a schedule of costs with supporting documents and address proportionality; tribunals cannot award what they are not shown.</li>
  <li><strong>Deploy settlement offers deliberately.</strong> A written, reasonable, time-bound offer creates a costs consequence that survives its refusal — and should be drafted with that consequence in mind.</li>
  <li><strong>Address conduct on the record.</strong> Adjournments sought and opposed, documents withheld and compelled — contemporaneous objections build the Section 31A(3) case.</li>
</ul>
</div>

<h2>Costs and the award's afterlife</h2>
<p>A costs award is part of the award and enforceable with it under Section 36; challenges to costs travel under Section 34 within its confined grounds, and after the Constitution Bench's clarification of the narrow modification power, a costs head that is severable and demonstrably erroneous on its face may be dealt with surgically rather than by annulling the award. Tribunals assist enforcement by stating the costs reasoning distinctly — and parties assist themselves by asking for exactly that.</p>

<div class="note">
<p><strong>Note:</strong> Institutional rules — including those of the Delhi International Arbitration Centre — contain their own costs schedules that operate alongside Section 31A. General information, not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
