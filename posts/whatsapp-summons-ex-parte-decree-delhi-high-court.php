<?php
$P = [
  'slug'         => 'whatsapp-summons-ex-parte-decree-delhi-high-court.php',
  'title'        => 'WhatsApp Summons and Ex-Parte Decrees – Advocate Manish Jha',
  'meta'         => 'Delhi High Court in FAO 268/2026: sending summons on WhatsApp is not conclusive proof of service; ex-parte decree set aside under Order IX Rule 13 CPC.',
  'h1'           => 'Transmission Is Not Service: Delhi High Court Sets Aside Ex-Parte Decree Over WhatsApp Summons',
  'crumb'        => 'WhatsApp Service of Summons',
  'kicker'       => 'Delhi High Court · 24 August 2026',
  'sub'          => 'Allowing a first appeal in Nirmaljeet Singh v. Guljeet Singh, the Delhi High Court held that the mere transmission of summons to a mobile number over WhatsApp does not conclusively establish that the defendant actually received notice — and set aside an ex-parte decree of Rs. 10 lakh.',
  'date'         => '2026-09-01',
  'date_display' => '1 September 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Electronic service of court process became routine during the pandemic and has stayed. But a WhatsApp tick is not a process server\'s verified report, and the gap between the two decided this appeal. In FAO 268/2026, decided on 24 August 2026, Justice Manoj Kumar Ohri examined what a court must be satisfied of before proceeding ex parte on the strength of electronic transmission — and what a defendant seeking to set aside the resulting decree under Order IX Rule 13 CPC must show.</p>',
  'related'      => ['civil-law.php' => 'Civil Litigation', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court Practice', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Is service of summons by WhatsApp legally permissible?', 'Electronic modes can supplement service, and courts have permitted them, particularly since the pandemic. What this judgment clarifies is the evidentiary limit: the existence of a mobile number linked to a party and the fact of transmission are distinct from proof that the summons was actually received by that party. Transmission alone is not conclusive service.'],
    ['What is the remedy against an ex-parte decree?', 'An application under Order IX Rule 13 CPC before the decreeing court, showing either that summons was not duly served or that the defendant was prevented by sufficient cause from appearing. An appeal under Order XLIII lies against refusal. Limitation runs from the decree or, where summons was not duly served, from knowledge of the decree.'],
    ['What tipped the balance in this case?', 'The process server\'s own report recorded that the call on the number was answered by a third person, a relative, and not the defendant; the defendant consistently denied receipt and claimed knowledge of the decree only in July 2025. The Court held this record demanded more cautious examination than treating transmission as conclusive.'],
    ['Did the defendant get relief unconditionally?', 'No. The Court set aside the ex-parte judgment and decree as against the appellant subject to costs of Rs. 20,000, and the amount already deposited remains with the trial court pending further orders — a reminder that Order IX Rule 13 relief is routinely balanced with terms.'],
  ],
  'sources'      => [
    ['label' => 'High Court of Delhi — case status (FAO 268/2026, decided 24 August 2026)', 'url' => 'https://delhihighcourt.nic.in/'],
    ['label' => 'Judgment copy — Nirmaljeet Singh v. Guljeet Singh & Ors., FAO 268/2026 (PDF)', 'url' => 'https://www.livelaw.in/pdf_upload/2026/08/31/mko24082026fao2682026174802-697186.pdf'],
    ['label' => 'Report — LiveLaw', 'url' => 'https://www.livelaw.in/high-court/delhi-high-court/whatsapp-transmission-of-summons-not-conclusive-proof-of-actual-notice-delhi-high-court-547993'],
  ],
];
$BODY = <<<'HTML'
<h2>The background</h2>

<p>The dispute concerned adjoining premises in West Patel Nagar, New Delhi. The plaintiff sued a neighbour alleging unauthorised construction, pipe installation causing seepage and encroachment on parking, seeking damages and injunctive relief. Summons was stated to have been sent to the defendant over WhatsApp during the COVID-19 lockdown. He did not appear, was proceeded against ex parte in June 2022, and in November 2023 the trial court decreed Rs. 10,00,000 in damages with injunctive relief.</p>

<p>The defendant's application under Order IX Rule 13 CPC was dismissed in May 2026. He appealed to the High Court under Order XLIII, contending that he had never been served and learnt of the decree only in July 2025.</p>

<h2>What the Court held</h2>

<p>Justice Manoj Kumar Ohri allowed the appeal. The reasoning rests on a distinction that will now be quoted in many an Order IX Rule 13 application: <em>"The existence of the mobile number and the factum of transmission are distinct from proof that the summons were actually received."</em> Three features of the record drove the conclusion.</p>

<div class="flow">
  <div class="fstep"><h3>Third-party answer</h3><p>The process server's report itself recorded that the number was answered not by the defendant but by a relative — the transmission never demonstrably reached the party.</p></div>
  <div class="fstep"><h3>Consistent denial</h3><p>The defendant denied receipt throughout and asserted knowledge of the decree only in July 2025 — a position the record did not contradict.</p></div>
  <div class="fstep"><h3>Substantial justice</h3><p>Where service is genuinely doubtful, the policy of the CPC favours decision on merits over decree by default; technical service should not extinguish the right to defend.</p></div>
</div>

<p>The order refusing to set aside the decree was reversed; the ex-parte judgment and decree of November 2023 were set aside as against the appellant on payment of Rs. 20,000 costs within four weeks, with the deposited amount to abide further orders of the trial court.</p>

<h2>Electronic service after this judgment</h2>

<table class="law">
  <tr><th>Fact proved</th><th>What it establishes</th></tr>
  <tr><td>Mobile number associated with defendant</td><td>Only association — not that the defendant operates or checks the number.</td></tr>
  <tr><td>Message transmitted / delivered ticks</td><td>Transmission to a device — not receipt or knowledge by the defendant personally.</td></tr>
  <tr><td>Response from the number by the defendant, or conduct showing knowledge</td><td>The material that actually supports due service and justifies proceeding ex parte.</td></tr>
</table>

<div class="note">
  <p><strong>Practice note:</strong> Plaintiffs who rely on electronic service should build a record: the source of the number (pleadings, agreements, prior correspondence), delivery and read receipts, any reply, and parallel attempts at ordinary and registered-post service. Defendants challenging an ex-parte decree should move promptly upon knowledge, plead the precise service defect, and expect terms — costs or deposit — as the price of restoration.</p>
</div>

<p>For appellate practice, the case is also a clean illustration of the FAO jurisdiction: an appeal under Order XLIII Rule 1 against refusal to set aside an ex-parte decree, decided not on sympathy but on the quality of the service record. The judgment was delivered on 24 August 2026 by Justice Manoj Kumar Ohri of the High Court of Delhi in FAO 268/2026.</p>
HTML;
include __DIR__ . '/post-layout.php';
