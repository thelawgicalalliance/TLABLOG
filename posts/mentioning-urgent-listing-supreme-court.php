<?php
$P = [
  'slug'         => 'mentioning-urgent-listing-supreme-court.php',
  'title'        => 'Mentioning & Urgent Listing in SC – Advocate Manish Jha',
  'meta'         => 'How urgent matters get listed in the Supreme Court: the mentioning practice, listing proformas, the Registrar\'s role, vacation benches and what counts as real urgency.',
  'h1'           => 'Mentioning and Urgent Listing in the Supreme Court: How Urgency Actually Works',
  'crumb'        => 'Mentioning & Urgent Listing',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'Between filing an SLP and its first hearing stands the listing machinery — and for matters that cannot wait their turn, the mentioning practice is the pressure valve, governed by convention, circulars and the Chief Justice\'s control of the roster.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Nothing in Article 136 promises speed. A Special Leave Petition filed today takes its place in a queue managed by the Registry under the Supreme Court Rules, 2013 and the Handbook on Practice — and for most matters the queue works well enough. But some cases cannot wait: a demolition fixed for tomorrow, a surrender date about to expire, an execution of decree that would render the SLP infructuous. For these, Supreme Court practice provides the mentioning route — a request for urgent listing placed before the Court, in the form the prevailing circulars prescribe. This explainer describes the machinery, the standards of urgency it applies, and the professional discipline it demands.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['Who can mention a matter for urgent listing?', 'The Advocate-on-Record for the party, or a senior or arguing counsel duly instructed through the AOR; a party-in-person may also seek urgent listing through the Registry\'s channel. Because the AOR is the officer responsible to the Court for the case, the mentioning request — whatever its oral form — must be backed by the AOR\'s certification of urgency.'],
    ['What form does a mentioning request take?', 'The prevailing practice runs on written proformas: an urgent listing application or mentioning proforma stating the case particulars, the date by which listing is sought, and the precise ground of urgency, certified by the AOR. Oral mentioning before the bench survives for exceptional cases, but the Court has repeatedly channelled routine urgency into the written route so that the Registry can verify and process requests in order.'],
    ['What counts as genuine urgency?', 'An imminent, irreversible event that would defeat the petition itself: scheduled demolition or dispossession, an approaching surrender or arrest date, execution of the impugned order, deportation, cancellation of an examination or appointment about to take effect. Generalised hardship, commercial inconvenience or the client\'s anxiety do not qualify, and overstated urgency damages counsel\'s credibility for the occasion when urgency is real.'],
    ['What happens during court vacations?', 'Vacation benches sit for urgent matters, and the Registry operates a parallel urgent-listing channel with its own proforma and the Vacation Officer\'s scrutiny. The standard of urgency is stricter: the applicant must show the matter cannot await reopening, and the practice directions in force for that vacation govern the procedure.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 and practice circulars — Supreme Court of India', 'url' => 'https://www.sci.gov.in/rules-2/'],
    ['label' => 'Supreme Court of India — Notices and Circulars', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The default path, and why it is sometimes too slow</h2>
<p>After an SLP clears the Registry's scrutiny — defects cured, diary number ripened into a registered case — it is listed in the ordinary course under the computerised allocation the Chief Justice, as master of the roster, controls. The interval is usually measured in days or a few weeks. The mentioning practice exists for the narrow band of cases in which that interval itself would decide the case: where, by the time the matter is called, the flat would be demolished, the petitioner arrested, the property sold, the vote counted. Urgency, in Supreme Court practice, means the risk of the petition becoming infructuous or liberty being lost — not the importance of the case, which the queue already serves.</p>

<h2>How the machinery processes a request</h2>
<div class="flow">
  <div class="fstep"><strong>Certification.</strong> The Advocate-on-Record certifies the ground of urgency — the date-bound event and its consequence — in the urgent listing application or mentioning proforma.</div>
  <div class="fstep"><strong>Registry scrutiny.</strong> The Registrar (Listing) verifies the case's readiness — defects, service, office objections — and the stated urgency against the record.</div>
  <div class="fstep"><strong>Orders on listing.</strong> The request is placed for directions per the prevailing circular — administratively or before the appropriate bench — and, if accepted, the matter is assigned an early date, sometimes the next working day.</div>
  <div class="fstep"><strong>Hearing.</strong> On the assigned date the matter is taken up for admission and interim relief; the urgency that earned the date must be made good in the interim prayer.</div>
</div>

<h2>The professional discipline of mentioning</h2>
<div class="check">
<ul>
  <li><strong>Accuracy above advocacy.</strong> The urgency stated must be exact — dates, orders, consequences. A mentioning founded on an overstated or manufactured urgency is a serious professional lapse, and benches remember.</li>
  <li><strong>Readiness is part of urgency.</strong> A petition riddled with curable defects cannot complain of the queue; cure first, mention after.</li>
  <li><strong>Candour about the other side.</strong> Where the respondent has a caveat on record, the caveator must be served; urgency does not suspend the caveat discipline.</li>
  <li><strong>One channel at a time.</strong> Parallel requests — written proforma plus repeated oral mentions plus letters — invite the Registry's displeasure and rarely accelerate anything.</li>
</ul>
</div>

<h2>Interim relief: the point of the exercise</h2>
<p>Urgent listing is a means; the end is usually an interim order that holds the field — stay of demolition or dispossession, exemption from surrender, status quo on the property, stay of the operation of the impugned judgment. The papers should therefore be built for the interim hearing: the impugned order and its operative consequence flagged, the irreparability of the harm demonstrated, undertakings ready where the Court is likely to require them, and the conduct of the petitioner clean — because interim relief under Article 136 is equitable, and equity examines the applicant first.</p>

<h2>A note on High Court practice</h2>
<p>The Delhi High Court operates its own urgent-listing regime — mentioning before the appropriate bench or through the Registry's urgent forms, with the roster judge's permission governing out-of-turn listing. The standards are cognate: date-bound irreversibility, certified accurately. Practitioners moving between the two courts should mind the differences of form — each court's current circular, not habit, defines the correct route in any given month.</p>

<div class="note">
<p><strong>Note:</strong> Listing procedure is governed by circulars that change from time to time; the current practice directions of the Supreme Court Registry should always be checked before filing. General information, not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
