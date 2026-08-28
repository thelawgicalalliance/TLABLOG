<?php
$P = [
  'slug'         => 'passport-travel-conditions-anticipatory-bail.php',
  'title'        => 'Passport & Travel Conditions in Bail – Advocate Manish Jha',
  'meta'         => 'Passport surrender and travel restraints are standard anticipatory bail conditions. What courts may order, what only passport authorities can, and how to travel.',
  'h1'           => 'Passports, Look-Out Circulars and Leave to Travel: The Mobility Conditions of Anticipatory Bail',
  'crumb'        => 'Travel Conditions in Bail',
  'kicker'       => 'Practice Explainer · Anticipatory Bail',
  'sub'          => 'Between passport surrender, no-departure conditions and look-out circulars, an accused\'s mobility is often the first casualty of a criminal case — and the most frequently litigated condition afterwards.',
  'date'         => '2026-08-28',
  'date_display' => '28 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Almost every anticipatory bail order in Delhi carries a mobility clause: surrender the passport, do not leave the country without leave of the court, sometimes do not leave the National Capital Region without informing the investigating officer. For business people, professionals and NRIs, these conditions outlast the drama of the FIR and shape years of life. This explainer maps the legal architecture — what bail courts can condition, what only the passport authority can lawfully do, how look-out circulars interact with bail, and the practice of seeking permission to travel abroad while a case is pending.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'online-fraud-lawyer-in-delhi.php' => 'Online & Economic Fraud', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Can a bail court "impound" my passport?', 'Strictly, no. Impounding a passport is governed by Section 10(3) of the Passports Act, 1967 and is the passport authority\'s function; a criminal court\'s power is to require deposit or surrender of the passport as a bail condition and to restrain travel. The distinction matters: a passport deposited with the court under a bail condition remains valid, and the route to using it is an application to the same court, not to the passport office.'],
    ['Are blanket "no foreign travel" conditions lawful?', 'Conditions must bear a rational relation to securing attendance and protecting the investigation; courts increasingly calibrate rather than prohibit. The standard Delhi formulation — no departure from India without prior leave of the court — preserves the restraint while leaving a door. An accused with genuine, recurring business travel should seek that formulation at the grant stage instead of litigating a flat prohibition later.'],
    ['How does permission to travel abroad actually work?', 'By application to the court seized of the matter, disclosing the itinerary, purpose, duration and contact details abroad, with an undertaking to return and appear. Courts commonly require the travel documents, sometimes an additional surety or deposit, and a returning-date affidavit. A clean record of past permissions honoured is the strongest single factor; a single overstay can end the facility for the life of the case.'],
    ['What is a look-out circular and can bail conditions dissolve it?', 'An LOC is an executive instrument by which immigration authorities are alerted to stop or report a person\'s departure; it is issued at the instance of the investigating agency, not the court. Anticipatory bail does not automatically terminate an LOC, but an order permitting travel, or recording that the accused is cooperating and need not be detained at the airport, is the foundation for seeking the LOC\'s withdrawal or suitable modification — if necessary by a specific prayer to the court.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 (Sections 480(3), 482(2)) — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
    ['label' => 'Passports Act, 1967 (Section 10) — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1655'],
  ],
];
$BODY = <<<'HTML'
<h2>Where the power to condition comes from</h2>

<p>Section 482(2) BNSS authorises the court granting anticipatory bail to impose conditions in the light of the facts of the case — including availability for interrogation, non-inducement of witnesses, and, expressly, that the person shall not leave India without the previous permission of the court. Regular bail carries the parallel power under Section 480(3). Mobility conditions are thus not judicial improvisation; they are the statute's own template for managing flight risk — the first limb of the triple test — without custody.</p>

<h2>The three instruments, kept distinct</h2>

<table class="law">
  <tr><th>Instrument</th><th>Who controls it</th><th>Legal effect</th></tr>
  <tr><td>Bail condition (deposit of passport; no departure without leave)</td><td>The criminal court</td><td>Binds the accused personally; breach risks cancellation of bail; relaxed by application to the same court</td></tr>
  <tr><td>Impounding under Section 10(3), Passports Act</td><td>Passport authority (after due process)</td><td>Suspends the document itself; challenged before the authority and in writ jurisdiction</td></tr>
  <tr><td>Look-out circular</td><td>Investigating agency through the Bureau of Immigration</td><td>Operates at the border regardless of bail; withdrawn or modified at the agency's instance or on court direction</td></tr>
</table>

<p>Conflating these produces the classic airport surprise: an accused holding bail with no travel bar is nonetheless stopped on an LOC, or applies to a passport office for renewal not realising the booklet lies deposited with a court. Each instrument needs its own strategy, and a departure abroad should be cleared against all three.</p>

<h2>Negotiating the condition at the grant stage</h2>

<p>The moment of grant is the moment of maximum design freedom. Counsel for an accused with international obligations should place the travel profile before the court at the outset — employment abroad, business commitments, family circumstances — and seek the calibrated formulation: deposit of passport with liberty to apply for its release for specific travel, or no departure without prior leave, rather than an unqualified surrender for the pendency of the case. Where the accused is a foreign national or OCI cardholder, residence and reporting conditions substitute for the passport's retention, and the order should say so expressly. Prosecutors, for their part, legitimately press for tighter mobility where the case involves cross-border funds, absconding co-accused or prior evasion — and courts listen.</p>

<h2>Living with the condition</h2>

<div class="check">
<p><strong>The travel-permission playbook:</strong> apply well before the travel date, with itinerary, purpose and proof (invitation letters, bookings, medical papers); disclose every earlier permission and its compliance; offer verifiable anchors abroad and an address on record; propose security proportionate to the case — an additional surety, occasionally a deposit; and on return, file a compliance affidavit without being asked. The second application is decided by the record of the first.</p>
</div>

<div class="note">
<p>Breach is the one unforgivable event. Overstaying a permitted trip, travelling on a second passport, or quietly relocating converts a manageable case into a proclaimed-offender proceeding under Section 84 BNSS, with attachment to follow — and it forecloses every future indulgence. However inconvenient the condition, the route to relief runs through the court that imposed it, never around it.</p>
</div>

<p>The chamber of Advocate Manish Jha appears in anticipatory bail, regular bail and economic-offence matters — including travel-permission and LOC-related applications — before the District Courts of Delhi and the High Court of Delhi. This article is for general information; it is not legal advice and does not create an advocate-client relationship.</p>
HTML;
include __DIR__ . '/post-layout.php';
