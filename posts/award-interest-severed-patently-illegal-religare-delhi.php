<?php
$P = [
  'slug'         => 'award-interest-severed-patently-illegal-religare-delhi.php',
  'title'        => 'Award Interest Severed by Court – Advocate Manish Jha',
  'meta'         => 'Delhi High Court severs the interest component of an arbitral award as patently illegal while preserving the principal: Section 34 and the doctrine of severability.',
  'h1'           => 'The Award Survives, Its Interest Does Not: Severance Under Section 34 in a Loan Recovery Arbitration',
  'crumb'        => 'Arbitration — Interest & Severance',
  'kicker'       => 'Delhi High Court · 10 September 2026',
  'sub'          => 'In Religare Finvest Ltd v. Atelier Automobiles Pvt Ltd, the High Court held the arbitrator\'s unreasoned departure from the contractual interest rate patently illegal, set aside the interest directions, and left the principal award standing.',
  'date'         => '2026-09-18',
  'date_display' => '18 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Interest is where arbitral awards most often overreach — and, increasingly, where courts perform surgery rather than demolition. In <em>Religare Finvest Limited v. Atelier Automobiles Pvt. Ltd.</em>, O.M.P. (COMM) 533/2023, decided on 10 September 2026, Justice Avneesh Jhingan of the High Court of Delhi set aside the interest components of an award in a loan-recovery arbitration as patently illegal — the arbitrator had departed from the contractual rate of 14% and structured post-award interest without the reasoned analysis Sections 31(3) and 31(7) of the Arbitration and Conciliation Act demand — while preserving the principal award of nearly ₹10 crore.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'banking-fraud.php' => 'Banking & Financial Disputes', 'delhi-high-court.php' => 'Delhi High Court', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['Can a court modify interest in an arbitral award under Section 34?', 'Section 34 is a power to set aside, not to rewrite. But where the offending component is distinct and separable — as an interest direction usually is — courts sever and set aside that component alone, leaving the rest of the award enforceable. That is what happened here: the principal survived; the interest directions fell.'],
    ['What makes an interest award "patently illegal"?', 'Ignoring the contract is the classic route. Section 31(7)(a) makes the contractual rate govern pre-award interest where the parties have agreed one; an arbitrator who deviates from it must explain why, within the law. An unreasoned departure — or a post-award structure that disregards the statutory scheme — crosses from error into patent illegality.'],
    ['Does accepting payment of the principal waive the right to challenge interest?', 'No. The court rejected the estoppel argument: receiving the undisputed principal does not bar a party from challenging the distinct and severable interest component. Acceptance of what is admittedly due is not acquiescence in what is disputed.'],
    ['What should arbitrators do to insulate interest awards?', 'Identify the contractual rate, apply it or record reasons anchored in the contract and Section 31(7) for any deviation, state the periods and amounts to which each rate applies, and deal with post-award interest expressly. Interest is part of the award\'s reasoning obligations under Section 31(3), not an afterthought.'],
  ],
  'sources'      => [ ['label' => 'Religare Finvest Ltd v. Atelier Automobiles Pvt Ltd — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/93714781/'] ],
];
$BODY = <<<'HTML'
<h2>The arbitration</h2>
<p>Religare Finvest, a non-banking financial company, had lent ₹11.5 crore to the borrower at a contractual rate of 13%, later revised to 14%. On default it recalled the loan and went to arbitration claiming a little over ₹10.13 crore. The arbitrator awarded ₹9.98 crore, but structured the interest on his own terms: 10% during the proceedings and 10% post-award, with repayment permitted in thirty-six instalments. The lender challenged the interest architecture under Section 34.</p>

<h2>What the court held</h2>
<p>The court found the interest directions unsupported by any reasoned analysis. The parties had agreed a rate; Section 31(7)(a) makes that agreement the governing rule for the pre-award period; and the arbitrator recorded no reasons for halving it. The post-award interest, too, had not been calculated in accordance with the statutory scheme. These were not errors within jurisdiction but patent illegality — the award, on these components, ignored both the contract and the statute. The court rejected the borrower's estoppel argument that the lender, having accepted the principal, could not attack the interest: the components are severable, and accepting the undisputed part of an award does not immunise the disputed part.</p>
<div class="compare">
<div class="col old"><h4>The award as rendered</h4><p>Principal ₹9.98 crore; interest at 10% pendente lite and post-award, against a contractual rate of 14%; 36 instalments — all without reasons for the deviation.</p></div>
<div class="arrow">→</div>
<div class="col new"><h4>After Section 34</h4><p>Principal award preserved; interest directions set aside as patently illegal and severed from the surviving award.</p></div>
</div>

<h2>Severability: the scalpel in Section 34 practice</h2>
<p>The larger doctrinal interest of the judgment lies in its method. Indian courts have grown steadily more comfortable severing offending components of awards — an interest direction, a distinct head of claim — rather than setting aside entire awards for a single infirmity. The proviso to Section 34(2)(a)(iv) itself contemplates partial setting aside where matters submitted to arbitration can be separated from those not so submitted, and the severance logic has extended naturally to discrete, quantifiable components. For award-holders, this means a flawed interest clause need not cost the principal; for challengers, it means a Section 34 petition can be targeted — and courts will not treat a challenge to interest as an attack on the award's core.</p>

<h2>Interest discipline under Section 31(7)</h2>
<p>The statutory scheme is short but strict. For the period between cause of action and award, the parties' agreement on interest governs; the tribunal's discretion operates only in the absence of agreement. For the post-award period, the statute supplies a default — two per cent higher than the current rate of interest prevalent on the date of the award — unless the award directs otherwise. An arbitrator minded to soften the burden on an award-debtor (instalments, reduced rates) must therefore do it through reasoning tethered to the contract and the statute. Sympathy unexplained is, in Section 34 terms, illegality.</p>

<h2>Practical notes</h2>
<div class="check">
<p>Claimants: plead the contractual interest clause specifically and prove the rate revisions; make the Section 31(7) framework part of written submissions.</p>
<p>Award-debtors: a challenge aimed at interest alone is often the highest-value, lowest-risk Section 34 strategy — the principal is rarely vulnerable.</p>
<p>Both: diarise the deposit and enforcement consequences — severance means the surviving award is enforceable while the severed component is gone, not stayed.</p>
</div>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
