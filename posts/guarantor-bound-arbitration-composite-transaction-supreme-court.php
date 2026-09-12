<?php
$P = [
  'slug'         => 'guarantor-bound-arbitration-composite-transaction-supreme-court.php',
  'title'        => 'Guarantor Bound by Arbitration: SC – Advocate Manish Jha',
  'meta'         => 'Supreme Court holds a personal guarantee forms part of a composite loan transaction, binding the guarantor to the arbitration clause via Section 7(5).',
  'h1'           => 'Personal Guarantee, Composite Transaction: Supreme Court Restores Guarantor to Arbitration',
  'crumb'        => 'Guarantor in Arbitration',
  'kicker'       => 'Supreme Court · 8 September 2026',
  'sub'          => 'A guarantee executed as a pre-condition of loan disbursement is not an isolated contract — the arbitration clause of the loan agreement reaches the guarantor through incorporation by reference.',
  'date'         => '2026-09-12',
  'date_display' => '12 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>National Skill Development Corporation v. Surya Wires Private Limited</em>, 2026 INSC 977 (decided 8 September 2026), a Bench of Justice P.S. Narasimha and Justice Alok Aradhe held that a managing director who signed personal guarantees as a mandatory pre-disbursement condition of loan agreements was bound by the arbitration clause in those agreements, even though the guarantees contained no arbitration clause of their own and he had not signed the principal loan documents in his personal capacity. Reversing the Delhi High Court and the sole arbitrator, the Court restored the guarantor to the arbitral proceedings. The decision is a significant application of Section 7(5) of the Arbitration and Conciliation Act, 1996 and the composite-transaction doctrine to everyday lending structures.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Can a person who never signed the main contract be forced into arbitration?', 'Yes, in defined situations. Where the documents the person did sign are incorporated into the principal contract — or the transaction is structured as a single composite whole — the arbitration clause can bind them. Section 7(5) of the 1996 Act expressly permits an arbitration clause to be incorporated into a contract by reference to another document.'],
    ['What made this transaction "composite"?', 'The loan agreements defined "Facility Agreements" to include the personal guarantees, listed them in a schedule, required them as a pre-condition of disbursement, and declared that their provisions were to be read "as if set out herein in extension". Near-simultaneous execution reinforced that the parties intended one unified transaction, not a cluster of independent contracts.'],
    ['What is the test for incorporation by reference?', 'Broadly: a clear reference to the document containing the arbitration clause, a manifest intention to incorporate it, and suitability of the clause to disputes under both instruments. Deeming language treating the ancillary document as part of the principal agreement will ordinarily satisfy the test.'],
    ['What should guarantors and lenders take from this?', 'Guarantors should assume that guarantees embedded in a financing package will travel with the package\'s dispute-resolution clause, and jurisdictional objections premised on non-signatory status will face headwinds. Lenders should draft definitional and incorporation clauses deliberately, since they now carry decisive weight.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — National Skill Development Corporation v. Surya Wires Pvt. Ltd., 2026 INSC 977 (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/77346563/'],
  ],
];
$BODY = <<<'HTML'
<h2>The dispute</h2>
<p>The National Skill Development Corporation disbursed loans to Surya Wires under agreements of December 2016 and August 2017. Each loan agreement was accompanied by ancillary documents — among them personal guarantees executed by the company's managing director in his individual capacity, required before any money moved. When the borrower defaulted, NSDC invoked arbitration against the borrower and the guarantor. The guarantor objected that he had signed no arbitration agreement: the guarantees contained no arbitration clause, and he was not a party to the loan agreements personally. The sole arbitrator accepted the objection and deleted him from the array; the Delhi High Court affirmed.</p>

<h2>The Supreme Court's analysis</h2>
<p>The Bench reversed on three interlocking grounds.</p>
<div class="tiles">
<div class="tile"><strong>Composite transaction.</strong> Where parties structure a deal through multiple contemporaneous documents, the court asks whether they function as components of one bargain. Guarantees demanded as a condition of disbursement are integral to the lending transaction, not free-standing promises. The Court found the parties "intended the entire cluster of documents to constitute a single, composite transaction".</div>
<div class="tile"><strong>Incorporation by reference — Section 7(5).</strong> The loan agreements defined the guarantees as "Facility Agreements", scheduled them, and declared their provisions were to be read as if set out in the loan agreement itself. That deeming fiction incorporated the arbitration clause into the guarantees.</div>
<div class="tile"><strong>Non-signatory status immaterial.</strong> Once the definitional and incorporation clauses expressly swept the guarantees into the principal agreement, the guarantor's non-signature of the loan document could not defeat the arbitration agreement he had, in substance, joined.</div>
</div>

<h2>The operative result</h2>
<p>The orders of the sole arbitrator and the Delhi High Court were quashed, and the guarantor stands restored to the arbitral proceedings. The claim against borrower and guarantor will now be tried together — precisely the efficiency the composite-transaction doctrine exists to protect, avoiding parallel proceedings and inconsistent findings on the same debt.</p>

<div class="note">
<p>The judgment does not make every guarantor arbitrable. Where a guarantee is genuinely independent — executed later, on different terms, with its own dispute-resolution regime, or outside the definitional sweep of the principal contract — the non-signatory objection retains force. Drafting, sequence and structure decide.</p>
</div>

<h2>Drafting and strategy notes for Delhi practice</h2>
<p>For financing documentation passing through Delhi's commercial courts and arbitral institutions, three practical consequences follow. First, definitional clauses ("Facility Agreements", "Transaction Documents") are now jurisdictional instruments; treat them with the same care as the arbitration clause itself. Second, guarantors advising on personal exposure should negotiate expressly if they wish disputes against them carved out into courts — silence will pull them into arbitration. Third, claimants should plead the composite structure at the Section 11 and reference stage itself, laying out execution chronology and cross-references, so that jurisdictional challenges under Section 16 can be met on a documented record.</p>
HTML;
include __DIR__ . '/post-layout.php';
