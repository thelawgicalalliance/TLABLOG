<?php
$P = [
  'slug'         => 'retention-money-security-deposits-msmed.php',
  'title'        => 'Retention Money & the MSMED Act – Advocate Manish Jha',
  'meta'         => 'Can buyers withhold retention money and security deposits from MSME suppliers? How the MSMED Act\'s 45-day rule interacts with retention clauses.',
  'h1'           => 'Held Back by Contract: Retention Money, Security Deposits and the MSMED Act',
  'crumb'        => 'MSME Retention Money',
  'kicker'       => 'Practice Explainer · Commercial Law',
  'sub'          => 'Retention clauses are standard in supply and works contracts — but for micro and small enterprises, the MSMED Act\'s payment discipline and overriding effect reshape what a buyer can lawfully hold back, and for how long.',
  'date'         => '2026-09-16',
  'date_display' => '16 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Retention money is a fixture of Indian commercial contracting: five or ten per cent of each bill withheld until a defect-liability period ends, or a security deposit refundable on satisfactory completion. For suppliers registered as micro or small enterprises, these clauses collide with a statute built around a hard payment deadline. Section 15 of the MSMED Act, 2006 requires payment for goods supplied or services rendered within the agreed period, capped at forty-five days from acceptance, and Section 24 gives Sections 15 to 23 overriding effect over anything inconsistent in any other law for the time being in force. Where the contract and the statute pull apart, the resolution matters to every running bill.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'civil-law.php' => 'Civil Law', 'legal-notice-replies.php' => 'Legal Notices', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['Can a buyer contractually retain part of an MSME supplier\'s bill beyond 45 days?', 'The tension is real. Section 15 caps the credit period at forty-five days from acceptance, and Section 24 overrides inconsistent arrangements. A retention clause that simply defers payment of an admitted part of the price beyond the cap sits uneasily with the statute, and Facilitation Councils frequently treat withheld retention as part of the delayed payment attracting Section 16 interest once the supply stands accepted.'],
    ['Are all retentions the same?', 'No, and the distinction drives outcomes. Retention that is merely deferred price for completed, accepted supplies is the weakest case for the buyer. Retention referable to genuine unperformed obligations — an unexpired defect-liability period in a works contract, unresolved documented defects — presents a real dispute about whether the amount has become "due", which the Council or arbitral stage resolves on evidence.'],
    ['What should an MSME supplier do about retention at the contract stage?', 'Negotiate retention down or replace it with a performance bank guarantee, which secures the buyer without starving the supplier\'s cash flow. Where retention is unavoidable, define the release events datewise, require certification within fixed periods, and provide that certification not withheld unreasonably — so the release date is provable rather than perpetual.'],
    ['Can retention disputes go to the Facilitation Council?', 'Yes. A claim for withheld retention on accepted supplies is a claim for an amount due under Section 17 and can be referred under Section 18 with the rest of the dues. The buyer\'s case that the retention has not fallen due is a defence examined in conciliation and, failing settlement, in the arbitral stage.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>Two logics in collision</h2>
<p>Retention clauses answer a genuine commercial anxiety: the buyer wants leverage for latent defects discovered after payment. The MSMED Act answers a different and equally genuine one: small suppliers die of receivables, and Parliament chose a bright-line payment discipline over contractual flexibility. Section 15 fixes the outer limit — forty-five days from the day of acceptance or deemed acceptance — "notwithstanding anything contained in any agreement". Section 16 prices the breach at compound interest, monthly rests, three times the bank rate. Section 24 then gives the scheme overriding effect. A clause that quietly parks ten per cent of every accepted bill for eighteen months is, in substance, an agreement for a credit period the statute forbids.</p>

<h2>The analytical key: has the amount become due?</h2>
<p>The workable line runs through the concept of an amount "due". Where goods have been delivered and accepted — actually, or by the fifteen-day deemed-acceptance rule — the price of that supply is due, and the statute governs when it must be paid. Retention of a slice of that price is deferral of a due amount, and the statutory clock and interest apply to it. By contrast, where the contract makes a distinct payment contingent on a future performance event — completion of a defect-liability period during which the supplier must attend to defects, achievement of a milestone, submission of documents — the buyer's argument is that the amount is not yet due at all. That is a dispute about accrual, not a licence for delay, and it is tested on the evidence: was there a real defect-liability obligation, were defects actually notified in writing, did the release event occur?</p>
<div class="compare">
<div class="col old"><h4>Deferred price</h4><p>Supply accepted; retention is simply part of the price held back on the calendar. Statutory deadline and Section 16 interest apply.</p></div>
<div class="arrow">→</div>
<div class="col new"><h4>Contingent obligation</h4><p>Release tied to a genuine, documented performance event that has not occurred. The buyer defends accrual — and bears the burden of proving the contingency is real and subsisting.</p></div>
</div>

<h2>How these disputes play out at the Council</h2>
<table class="law">
<tr><th>Scenario</th><th>Likely treatment</th></tr>
<tr><td>Retention on accepted goods, no defect ever notified</td><td>Treated as delayed payment; principal plus Section 16 interest from each supply's due date.</td></tr>
<tr><td>Defect-liability retention in a works or composite contract, period expired, no defects recorded</td><td>Amount due on expiry of the period; interest runs from that release date.</td></tr>
<tr><td>Documented defects notified within the contractual and statutory windows</td><td>A genuine dispute on the merits; the Council or arbitral tribunal quantifies what was truly payable and when.</td></tr>
<tr><td>Security deposit demanded in cash and never returned after completion</td><td>Recoverable as an amount due with interest from the release event; unexplained retention after completion fares badly.</td></tr>
</table>
<div class="note"><p>Suppliers should claim retention amounts expressly in the Samadhaan reference, with their release dates and the interest computation from those dates. Amounts omitted from the reference are amounts the conciliation will never discuss.</p></div>

<h2>Drafting and documentation for both sides</h2>
<p>For MSME suppliers: resist open-ended retention; propose a performance bank guarantee instead; where retention stays, fix release events by date, cap certification timelines, and record completion and handover in writing the day they happen. Invoice retention separately or show it distinctly in each invoice, so the ledger itself proves what was held back and against what. For buyers: a retention clause is only as good as the defect record behind it. Notify defects in writing within the fifteen-day window and the contractual mechanism, maintain inspection records, and release retention punctually when periods expire — because under this statute, every unjustified day of holding has a compounding price.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
