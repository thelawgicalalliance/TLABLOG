<?php
$P = [
  'slug'         => 'urgent-listing-mentioning-supreme-court.php',
  'title'        => 'Urgent Listing in the Supreme Court – Advocate Manish Jha',
  'meta'         => 'How urgent listing works in the Supreme Court of India: mentioning before the CJI court, listing proformas, oral and email mentioning, and what counts as urgency.',
  'h1'           => 'Getting a Matter Heard Tomorrow: The Mechanics of Mentioning and Urgent Listing in the Supreme Court',
  'crumb'        => 'Urgent Listing',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'Between filing and listing lies the stage most clients never see — and the one that decides whether a demolition, a surrender date or an auction is met in time. How urgency is claimed, who decides it, and what a mentioning should actually say.',
  'date'         => '2026-11-03',
  'date_display' => '3 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Supreme Court filings move to the courtroom on an administrative conveyor: registration, defect curing, and listing in the ordinary course under the Supreme Court Rules, 2013 and the Handbook on Practice. For most matters that rhythm is adequate. But some cases cannot wait their turn — a surrender falling due under a High Court order, an imminent demolition, an auction scheduled for the coming week, a transplant or termination with a medical clock. For these, Supreme Court practice has developed the machinery of urgent listing: the listing proforma filed with the petition, and the mentioning — oral or by email — through which counsel asks the Chief Justice\'s court (or the designated mentioning procedure in force) to advance the matter. Using it well is a skill; using it casually invites refusal and costs.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Litigation', 'bail-lawyer-in-delhi.php' => 'Bail Matters'],
  'faqs'         => [
    ['Who can mention a matter for urgent listing?', 'The Advocate-on-Record, or a counsel authorised by the AOR, mentions the matter; the AOR system is central because the Registry verifies urgency claims against the record the AOR certifies. Party-in-person mentioning is permitted subject to the procedure the Court notifies from time to time.'],
    ['What counts as genuine urgency?', 'A date-bound, irreversible event: surrender or arrest timelines, demolition or dispossession, auctions and tender openings, medical deadlines, imminent elections or examinations, and expiry of interim protection. Generalised hardship, commercial anxiety or the age of the case rarely qualifies — the test is what becomes infructuous if the matter waits.'],
    ['What should a mentioning actually contain?', 'Three sentences: the diary or case number, the irreversible event with its date, and the precise order sought (listing on a named day, before an appropriate bench). Overstated urgency damages credibility; a mentioning that misstates the record can draw costs or worse.'],
    ['Is a mentioning the same as seeking interim relief?', 'No. Mentioning secures a date, nothing more. Interim relief is sought in the listed hearing on the interlocutory application already filed; counsel should ensure the IA and all annexures are complete before mentioning, since an advanced date with a defective file is a date wasted.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/15938'],
    ['label' => 'Supreme Court of India — official website (practice and procedure notifications)', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The pipeline from filing to listing</h2>
<div class="flow">
  <div class="fstep"><strong>1. Filing and diary number.</strong> The petition enters the Registry and receives a diary number; scrutiny follows, and defects are notified for curing within the permitted time.</div>
  <div class="fstep"><strong>2. The listing proforma.</strong> Filed with the petition, it is where urgency is first claimed in writing — the event, its date, and the supporting annexure. An urgency never claimed in the proforma is harder to assert later at the mentioning stage.</div>
  <div class="fstep"><strong>3. Registration and ordinary listing.</strong> Cleared matters are listed per the computerised roster and the categories notified by the Registry.</div>
  <div class="fstep"><strong>4. Mentioning.</strong> Where the ordinary course would defeat the matter, the AOR mentions it — orally before the Chief Justice\'s court at the notified time, or through the email/proforma mentioning procedure in force — seeking a specific early date.</div>
</div>

<h2>What persuades, and what does not</h2>
<table class="law">
  <tr><th>Persuasive</th><th>Unpersuasive</th></tr>
  <tr><td>Surrender date fixed by the impugned order, with the order annexed</td><td>"The matter is very old"</td></tr>
  <tr><td>Demolition/dispossession notice with a date</td><td>Apprehension without a scheduled event</td></tr>
  <tr><td>Auction, tender or admission deadline documented</td><td>Commercial urgency stated in the abstract</td></tr>
  <tr><td>Expiry of interim protection granted below</td><td>Urgency created by the party\'s own delay in filing</td></tr>
</table>

<h2>Craft points for the mentioning itself</h2>
<div class="check">
<ul>
  <li><strong>Lead with the date, not the merits:</strong> the mentioning court is deciding when, not whether. Argument on merits at the mentioning stage wastes the sixty seconds available.</li>
  <li><strong>Have the file complete:</strong> defects cured, interim application on record, service where required. The commonest outcome of a successful mentioning on an incomplete file is an adjournment on the advanced date.</li>
  <li><strong>Be scrupulously accurate:</strong> the bench may call for the file; a misdescribed order or concealed prior dismissal converts an urgency plea into a credibility problem for the case and the counsel.</li>
  <li><strong>Know the current procedure:</strong> mentioning practice is adjusted by notification from time to time — oral lists, email proformas, registrar-level screening. Check the latest circulars on the Supreme Court website before relying on last year\'s routine.</li>
</ul>
</div>

<h2>After the date is secured</h2>
<p>An advanced listing is a promise to be ready. Brief the arguing counsel for the interim prayer specifically; prepare a one-page compilation with the impugned order, the event document and the precise interim order sought; and inform the opposite party\'s counsel where service has been effected — courts react poorly to urgency sought ex parte when the caveat index shows an appearance. If the mentioning is declined, the ordinary course resumes; repeated mentioning of the same matter without changed circumstances is strongly discouraged and remembered.</p>

<div class="note">
<p><strong>Practice note:</strong> The urgency machinery exists for the case that cannot wait, and it works because most counsel use it honestly. The strongest long-term asset in this corner of practice is a record of mentionings that were exactly as urgent as claimed.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
