<?php
$P = [
  'slug'         => 'named-arbitrator-unilateral-appointment-set-aside-delhi.php',
  'title'        => 'Named Arbitrator, Unilateral Appointment – Advocate Manish Jha',
  'meta'         => 'Delhi High Court holds an award void where a lender alone invoked a pre-named arbitrator after disputes arose, applying Section 12(5) safeguards to NBFC loans.',
  'h1'           => 'A Name in the Clause Does Not Cure a One-Sided Appointment: Delhi High Court on Section 12(5)',
  'crumb'        => 'Arbitration — Unilateral Appointment',
  'kicker'       => 'Delhi High Court · 16 September 2026',
  'sub'          => 'In Matsya Fincap Pvt Ltd v. Mohd Hassinuddin, a Division Bench upheld the setting aside of an ex parte award where the finance company alone invoked and appointed the arbitrator named in its loan agreement, without any post-dispute written waiver under Section 12(5).',
  'date'         => '2026-09-21',
  'date_display' => '21 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Lenders\' standard-form arbitration clauses often name the arbitrator in advance, and when default comes, the lender writes to that person, obtains an ex parte award, and moves to execution. On 16 September 2026, a Division Bench of the High Court of Delhi comprising Justice Anil Kshetarpal and Justice Shail Jain closed the gap that practice exploits. In <em>Matsya Fincap Pvt Ltd v. Mohd Hassinuddin</em>, FAO (COMM) 221/2024, the Bench dismissed a finance company\'s appeal under Section 37 of the Arbitration and Conciliation Act, 1996, affirming that an award rendered by a pre-named arbitrator whom one party alone invoked and appointed after disputes arose cannot survive the safeguards of Section 12(5).</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'banking-fraud.php' => 'Banking Disputes'],
  'faqs'         => [
    ['Does naming the arbitrator in the agreement make the appointment bilateral?', 'Not by itself. The Bench held that a named arbitrator may validly constitute the tribunal where the designation represents the parties\' mutual and continuing consent — but where the record shows that one party alone invokes the clause and appoints the named person after the dispute has arisen, the court must test the appointment against the statutory safeguards. Here the award itself recorded that the lender sent a letter of intent appointing the arbitrator, which demonstrated a unilateral procedure.'],
    ['What is required to waive the bar under Section 12(5)?', 'An express agreement in writing made after the disputes have arisen. A clause in the original contract, or the respondent\'s mere silence, does not amount to waiver. Without such a post-dispute written waiver, the ineligibility attaching to a unilaterally appointed arbitrator goes to the root of the tribunal\'s jurisdiction.'],
    ['When does limitation run for a Section 34 challenge to an ex parte award?', 'From the date the award is received by the party, not from the date it was passed. The borrower pleaded that he learned of the award only in execution proceedings; since the statutory period runs from receipt, his petition was held within time.'],
    ['Where can such an award be challenged when the clause names an outstation venue?', 'The Bench rejected the lender\'s objection that only the courts at Alwar had jurisdiction, noting that the objection was never raised before the District Judge and no material showed Alwar as the seat: the lender\'s office, the execution of the guarantee and the borrower\'s residence were all in Delhi. Venue recitals in standard forms do not automatically oust the courts with a real connection to the dispute.'],
  ],
  'sources'      => [ ['label' => 'Matsya Fincap Pvt Ltd v. Mohd Hassinuddin — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/109965572/'] ],
];
$BODY = <<<'HTML'
<h2>The loan, the award, the challenge</h2>
<p>Matsya Fincap, a finance company, advanced ₹2,00,000 under a loan agreement of May 2019, repayable at ₹2,34,000 in ninety daily instalments with 36% per annum late-payment charges; the respondent stood guarantor. On default, the company invoked arbitration before the sole arbitrator named in its agreement, who rendered an ex parte award of ₹5,18,600 at Alwar in October 2020. The guarantor, on learning of the award in execution, challenged it under Section 34; the District Judge set it aside, and the company appealed under Section 37 read with Section 13 of the Commercial Courts Act, 2015.</p>

<h2>The central holding</h2>
<p>The company's principal defence was that the arbitrator was pre-designated in the agreement, making the appointment bilateral. The Bench looked past the drafting to the actual procedure: "the Award itself records that the Appellant sent a Letter of Intent to appoint the learned Sole Arbitrator" — one party alone had invoked the clause and installed the named person after disputes arose, with no post-dispute written waiver under the proviso to Section 12(5). The Bench articulated the governing distinction: a named arbitrator can validly act where the designation reflects the parties' mutual and continuing consent, but where the record shows unilateral invocation and appointment, the statutory safeguards apply with full force. Its conclusion was categorical: "An arbitral award rendered by a tribunal constituted contrary to the mandatory statutory requirements cannot be sustained merely on the ground of party autonomy."</p>

<h2>The procedural defences that failed</h2>
<div class="tiles">
<div class="tile"><h4>Territorial jurisdiction</h4><p>The Alwar-seat objection was raised for the first time in appeal and was unsupported by material; the agreement's execution, the lender's office and the borrower's residence all pointed to Delhi.</p></div>
<div class="tile"><h4>Limitation</h4><p>Time under Section 34(3) runs from receipt of the award. A borrower who first learns of an ex parte award in execution is not shut out by the award's date.</p></div>
<div class="tile"><h4>Merits arguments</h4><p>Questions under the Rajasthan Money-Lenders Act became academic: the defective constitution of the tribunal was by itself fatal to the award.</p></div>
</div>

<h2>What this means for lenders and borrowers</h2>
<p>For NBFCs and other institutional lenders, the message is structural: standard-form clauses naming an arbitrator no longer deliver enforceable ex parte awards unless the counterparty joins the appointment after disputes arise or a genuinely neutral appointment mechanism — institutional appointment or a court order under Section 11 — is used. Portfolios of awards built on unilateral appointments face the same fate in execution-stage challenges. For borrowers and guarantors, the decision is a checklist: examine who actually invoked and appointed the arbitrator, when the appointment letter was sent, and whether any written waiver postdates the dispute. Delhi's commercial courts are applying these safeguards strictly, and the receipt-based limitation rule keeps the Section 34 door open for those who discover the award only when execution knocks.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
