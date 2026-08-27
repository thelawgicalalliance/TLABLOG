<?php
$P = [
  'slug'         => 'msme-classification-investment-turnover-criteria.php',
  'title'        => 'MSME Classification Criteria – Advocate Manish Jha',
  'meta'         => 'Micro, small or medium? The composite investment-and-turnover test, the revised 2025 thresholds, and why classification decides access to MSMED Act remedies.',
  'h1'           => 'Micro, Small or Medium: The Classification Rules That Decide Your Remedies',
  'crumb'        => 'MSME Classification',
  'kicker'       => 'Practice Explainer · MSME',
  'sub'          => 'Classification under Section 7 MSMED Act is not a formality: the delayed-payment remedy belongs to micro and small enterprises, and the composite investment-turnover criteria — revised with effect from 1 April 2025 — fix where an enterprise stands.',
  'date'         => '2026-08-27',
  'date_display' => '27 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Every MSMED Act dispute begins with a threshold question that many suppliers cannot answer precisely: what exactly is the enterprise — micro, small or medium — and was it that on the relevant date? The question is decisive, because the delayed-payment machinery of Sections 15 to 18 is built for "suppliers", a term tied to micro and small enterprises, and because benefits from priority lending to procurement preferences travel with the class. Classification now runs on a composite test of investment in plant and machinery or equipment and turnover, administered through Udyam registration.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'banking-fraud.php' => 'Banking Disputes', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What are the current classification thresholds?', 'With effect from 1 April 2025, the notified composite criteria were revised upward: a micro enterprise is one with investment up to ₹2.5 crore and turnover up to ₹10 crore; a small enterprise up to ₹25 crore investment and ₹100 crore turnover; a medium enterprise up to ₹125 crore investment and ₹500 crore turnover. Both limbs must be satisfied; crossing either limit pushes the enterprise into the next class.'],
    ['Does a medium enterprise get the delayed-payment remedy?', 'The Section 18 delayed-payment reference is designed around "supplier" as defined in Section 2(n), which centres on micro and small enterprises. Medium enterprises enjoy other benefits of the ecosystem but stand outside the core Sections 15–17 interest regime. This is precisely why classification on the date of the supply matters so much in Facilitation Council proceedings.'],
    ['How are investment and turnover computed?', 'Through self-declaration on the Udyam portal linked to income-tax and GST data: investment is tied to the depreciated cost of plant and machinery or equipment as per returns, and turnover excludes exports. All units under one PAN are aggregated as one enterprise. Misdeclaration attracts consequences under the Act, and the figures are verifiable in Council proceedings.'],
    ['What happens when an enterprise outgrows its class?', 'The Udyam framework provides for reclassification: on crossing the ceiling, the enterprise moves up (with a transition period during which benefits of the earlier class continue as notified), and moving down requires the figures to fall for the relevant period. For disputes, the operative question is the enterprise\'s class when the goods were supplied or services rendered — a point buyers routinely test.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 (Sections 2, 7, 8) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Udyam Registration portal — Ministry of MSME', 'url' => 'https://udyamregistration.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>From two tests to one composite test</h2>

<p>Until 2020, manufacturing and service enterprises were classified differently, on investment alone. The notified framework under Section 7 then moved to a single composite criterion — investment <em>and</em> turnover — applied uniformly to manufacturers and service providers, with the higher of the two limbs determining the class. In 2025 the ceilings were revised substantially upward, effective 1 April 2025, roughly two-and-a-half times the investment limits and doubling turnover limits, so that growing enterprises are not pushed out of the protective net merely by inflation and scale.</p>

<table class="law">
  <tr><th>Class</th><th>Investment in plant &amp; machinery / equipment (up to)</th><th>Turnover (up to)</th></tr>
  <tr><td>Micro</td><td>₹2.5 crore</td><td>₹10 crore</td></tr>
  <tr><td>Small</td><td>₹25 crore</td><td>₹100 crore</td></tr>
  <tr><td>Medium</td><td>₹125 crore</td><td>₹500 crore</td></tr>
</table>

<p>Two computation rules carry most disputes. First, aggregation: all units against one PAN count as one enterprise, so a supplier cannot ring-fence a small unit for classification while the group crosses the ceiling. Second, the exclusions: export turnover is excluded from the turnover limb — a deliberate incentive — and investment is read from tax records rather than gross invoice values of machinery.</p>

<h2>Why classification is litigated</h2>

<div class="tiles">
  <div class="tile"><h3>Standing before the Council</h3><p>Buyers resisting a Section 18 reference attack the supplier\'s class first: was it truly micro or small, with valid registration, when the supply was made? A supplier with tidy Udyam records and consistent GST filings clears the objection quickly; one with mismatched figures fights about jurisdiction before ever reaching the money.</p></div>
  <div class="tile"><h3>Timing of registration</h3><p>The interplay between the date of registration and the date of supply is a recurring battleground: the prudent course for any supplier is to register before contracting and keep the registration current, so that no part of the claim depends on contested retrospectivity.</p></div>
  <div class="tile"><h3>Benefit eligibility</h3><p>Beyond disputes, class determines access: procurement preferences and reservation policies for micro and small enterprises, priority-sector lending tags, and various scheme benefits are class-linked, making an accurate Udyam profile a compliance asset in itself.</p></div>
</div>

<h2>A compliance checklist for suppliers</h2>

<div class="check">
  <ul>
    <li>Register on Udyam before taking on credit-sale exposure; print the certificate date into your contract files.</li>
    <li>Reconcile the portal\'s investment and turnover data with ITR and GST filings each year; discrepancies surface in Council proceedings.</li>
    <li>Quote your Udyam number on invoices and purchase orders — it puts buyers on notice of the statutory interest regime.</li>
    <li>Track the class on each supply date; if the enterprise is transitioning between classes, take advice before framing a delayed-payment claim.</li>
    <li>Group structure matters: same-PAN units aggregate, and restructuring after a dispute arises convinces no one.</li>
  </ul>
</div>

<div class="note">
<p>Classification is the key that turns the MSMED Act\'s locks. An hour spent keeping the Udyam record accurate is worth more than many hearings spent defending a claim whose foundation the buyer can question.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
