<?php
$P = [
  'slug'         => 'msme-dues-personal-guarantees-directors.php',
  'title'        => 'MSME Dues & Personal Guarantees – Advocate Manish Jha',
  'meta'         => 'When directors or promoters can be pursued for a buyer company\'s MSME dues — the corporate veil, personal guarantees, cheque liability and realistic recovery routes.',
  'h1'           => 'The Company Owes, But Who Pays? Directors, Guarantors and MSME Dues',
  'crumb'        => 'MSME Dues & Guarantors',
  'kicker'       => 'Practice Guide · 8 September 2026',
  'sub'          => 'The MSMED Act binds the buyer — usually a company. Reaching the individuals behind it requires a guarantee, a cheque, or conduct the law treats as personal.',
  'date'         => '2026-09-08',
  'date_display' => '8 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A recurring disappointment for MSME suppliers: the Facilitation Council award, or the decree, is against the buyer company — and the company has no assets, while its promoters visibly prosper. Can the directors be made to pay? The honest starting point is that they ordinarily cannot: the company is a separate legal person, and the MSMED Act\'s delayed-payment machinery operates against the "buyer", which is the company itself. But commercial documentation and conduct frequently create personal exposure — guarantees, dishonoured cheques signed in circumstances attracting personal liability, and dealings that justify piercing the corporate veil. This article maps where personal liability genuinely arises, and how a supplier should build for it from the first invoice.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'banking-fraud.php' => 'Banking & Financial Disputes', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Can an MSEFC award be executed against directors personally?', 'Not ordinarily. The reference under Section 18 of the MSMED Act is against the buyer, and where the buyer is a company the award binds the company. Directors who neither contracted personally nor guaranteed the dues are not judgment-debtors, and execution against their personal assets is impermissible absent a separate legal basis.'],
    ['What does a personal guarantee change?', 'Everything. A guarantee makes the guarantor\'s liability co-extensive with the buyer\'s under the Indian Contract Act, 1872, and the supplier can sue the guarantor directly — usually without first exhausting remedies against the company. A well-drafted guarantee taken at the start of the relationship is the single most effective protection for a supplier extending credit.'],
    ['Do cheque bounce cases reach the signatories?', 'Yes. Where the buyer\'s cheque is dishonoured, the prosecution under Section 138 of the Negotiable Instruments Act reaches the company and, under Section 141, every person in charge of and responsible for its business at the relevant time — commonly including signatory directors. This is often the most practical pressure point in MSME recoveries.'],
    ['When will courts pierce the corporate veil?', 'Sparingly — where the corporate form is a facade for fraud, where funds have been siphoned to promoters, or where companies are used interchangeably to defeat creditors. Veil-piercing is a fact-heavy, evidence-led plea; it is a last resort, not a default recovery theory.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The default rule: the buyer is the company</h2>
<p>The MSMED Act, 2006 defines the "buyer" as whoever buys goods or services from a supplier — and when the purchase order comes from a private limited company, the statutory obligations of Sections 15 and 16 (timely payment and compound interest on delay), the Section 18 reference, and the resulting award all attach to that company. Directors are agents of the company, not parties to its purchases. A supplier who has dealt only with the company\'s paper holds rights only against the company\'s assets. Everything else in this article is about how to lawfully change that position.</p>

<h2>Routes to personal liability</h2>
<div class="tiles">
  <div class="tile"><strong>Personal guarantees.</strong> The cleanest route. Under the Contract Act the surety\'s liability is co-extensive with the principal debtor\'s; the supplier may proceed against the guarantor without exhausting the company first, and the guarantee survives the company\'s decline. Take it at onboarding, keep it current, and reference the running account it secures.</div>
  <div class="tile"><strong>Negotiable instruments.</strong> A dishonoured cheque triggers Section 138 NI Act liability for the company and, through Section 141, for the persons in charge of its affairs. The criminal process — with its interim compensation and appellate deposit provisions — supplies negotiating leverage that pure money claims lack.</div>
  <div class="tile"><strong>Contracting capacity.</strong> Where an individual signed the contract without disclosing agency, or the "company" was unincorporated at the time, the individual may be personally bound on ordinary contract principles. Scrutinise who actually signed, and how.</div>
  <div class="tile"><strong>Fraud-based claims.</strong> Where supplies were induced by representations known to be false, or the buyer\'s management stripped assets while dues mounted, civil claims framed in fraud and, in appropriate cases, criminal complaints reach the individuals — but the pleading and proof standards are exacting.</div>
</div>

<h2>The insolvency dimension</h2>
<p>Where the buyer company slides into insolvency, the supplier\'s claim becomes an operational debt in the resolution process, and recoveries are often modest. Two personal-liability doors remain relevant. First, guarantors: insolvency of the principal does not extinguish the guarantee, and proceedings against personal guarantors can continue on their own track. Second, the resolution process itself can expose antecedent transactions — preferential, undervalued or fraudulent — that route recovery back from those who benefited. Suppliers with significant exposure should file claims promptly and monitor the process rather than writing it off.</p>

<h2>Building personal coverage from day one</h2>
<div class="flow">
  <div class="fstep"><strong>Onboarding.</strong> Credit application signed by the promoter; personal guarantee for the credit limit; Udyam registration details exchanged; agreed payment terms within the statutory forty-five day ceiling.</div>
  <div class="fstep"><strong>During the relationship.</strong> Invoices referencing the MSMED Act; acceptance documented; post-dated cheques or standing instruments for the running account, refreshed as balances move.</div>
  <div class="fstep"><strong>At the first default.</strong> A demand notice to the company and guarantor together; cheque presentation timed with limitation in mind; interest computed under Section 16 from the appointed day.</div>
  <div class="fstep"><strong>Escalation.</strong> Section 18 reference against the company, NI Act complaints against company and signatories, and suit against the guarantor — coordinated, because each proceeding strengthens the others.</div>
</div>

<div class="note"><p>Suppliers sometimes name directors as parties in Facilitation Council references hoping the award will simply include them. The safer course is to found personal claims on their own proper bases and forums — a guarantee suit, an NI Act complaint — rather than risk an award vulnerable to challenge for having reached non-buyers.</p></div>

<div class="check">
  <p>The company\'s obligations bind the company; plan personal coverage contractually, not retrospectively.</p>
  <p>Guarantees and cheques are the two instruments that convert corporate dues into personal accountability.</p>
  <p>Veil-piercing and fraud claims exist but demand evidence — gather the financial trail before pleading them.</p>
  <p>In insolvency, file the operational-debt claim and keep the guarantor proceedings alive independently.</p>
</div>

<p>The separate personality of the buyer company is a rule of law, not a trick played on suppliers — and the law supplies ample instruments for those who plan ahead. This article is general information and is not legal advice on any individual case.</p>
HTML;
include __DIR__ . '/post-layout.php';
