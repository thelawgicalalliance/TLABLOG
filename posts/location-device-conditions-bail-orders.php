<?php
$P = [
  'slug'         => 'location-device-conditions-bail-orders.php',
  'title'        => 'Phone & Location Bail Conditions – Advocate Manish Jha',
  'meta'         => 'Location-sharing and phone conditions in bail and anticipatory bail orders after Frank Vitus v. NCB: what courts may require, the privacy limit, and seeking modification.',
  'h1'           => 'Tracked on Bail? Phone and Location Conditions After Frank Vitus',
  'crumb'        => 'Device Conditions in Bail',
  'kicker'       => 'Explainer · Criminal Law',
  'sub'          => 'Courts routinely direct a released accused to keep a phone reachable — but the Supreme Court has drawn a constitutional line at conditions that surveil.',
  'date'         => '2026-10-20',
  'date_display' => '20 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Modern bail orders increasingly speak the language of technology: keep your mobile phone switched on, share your number with the investigating officer, keep location services enabled, drop a pin. Some of these conditions are sensible tools of supervision; others cross into continuous surveillance of a person who is presumed innocent. In <em>Frank Vitus v. Narcotics Control Bureau</em>, 2024 INSC 479, the Supreme Court confronted the practice directly, deleting a Google Maps PIN condition and holding that bail conditions enabling the police to track an accused\'s every movement violate the right to privacy under Article 21. This explainer sets out where the line now runs.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'cyber-law.php' => 'Cyber Law', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Can a court require an accused on bail to share live location with the police?', 'In Frank Vitus v. Narcotics Control Bureau, 2024 INSC 479, the Supreme Court deleted a condition requiring the accused to drop a Google Maps PIN for the investigating officer, holding both that the condition was technologically redundant and, more fundamentally, that any condition enabling the police continuously to track the movements of an accused on bail would infringe the right to privacy under Article 21. Continuous location surveillance is therefore not a permissible bail condition.'],
    ['Are conditions to keep a phone on and reachable still valid?', 'Conditions requiring the accused to keep a working mobile number, inform the investigating officer of changes, and remain reachable serve the legitimate purpose of securing availability for investigation and trial, and remain common in Delhi practice — recent orders of the Delhi High Court granting anticipatory bail continue to include reachability and reporting conditions. The constitutional problem identified in Frank Vitus attaches to continuous tracking, not to reachability.'],
    ['What makes a bail condition legally impermissible?', 'The Supreme Court in Frank Vitus reiterated the governing tests: conditions must stay within the statutory purposes — securing attendance, protecting the investigation, preventing repetition of offences — and cannot be fanciful, arbitrary or freakish, cannot be impossible to comply with, and cannot be so onerous that they frustrate the bail itself. Constitutional rights of the accused may be curtailed only to the minimum extent necessary.'],
    ['How does an accused challenge an onerous condition without risking the bail?', 'By an application for modification of conditions before the court that granted bail, or by challenging the specific condition before the superior court — the grant of bail itself is not reopened by such a challenge. Orders deleting or softening conditions on this footing are routine; Frank Vitus itself was an appeal confined to two conditions of a bail already granted.'],
  ],
  'sources'      => [
    ['label' => 'Frank Vitus v. Narcotics Control Bureau, 2024 INSC 479 — Indian Kanoon', 'url' => 'https://indiankanoon.org/doc/95281330/'],
    ['label' => 'Anticipatory bail order with reachability conditions, Delhi High Court (Bail Appln. 4096/2026, 29.09.2026)', 'url' => 'https://delhihighcourt.nic.in/app/showFileJudgment/58729092026BA40962026_204626.pdf'],
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory source of conditions</h2>
<p>Conditions on regular bail flow from Section 480(3) of the Bharatiya Nagarik Suraksha Sanhita, 2023 (formerly Section 437(3) CrPC): attendance in accordance with the bond, not committing a similar offence, and not inducing or threatening witnesses or tampering with evidence — with a residual power to impose conditions "in the interest of justice". Anticipatory bail conditions flow from Section 482(2). In <em>Frank Vitus</em> the Supreme Court stressed that the residual phrase cannot be read as a blank cheque: conditions must serve the statute\'s own purposes, and the constitutional rights of an accused awaiting trial can be curtailed only to the minimum extent required.</p>

<h2>What Frank Vitus decided</h2>
<div class="tiles">
  <div class="tile"><h4>The PIN condition fell</h4><p>The condition required the accused to drop a Google Maps PIN so the investigating officer could locate him. On Google\'s own affidavit the PIN does not enable real-time tracking — making the condition redundant — and a condition that did enable constant tracking would violate Article 21. The Court deleted it, holding such surveillance "cannot be a condition of bail".</p></div>
  <div class="tile"><h4>The embassy certificate softened</h4><p>For foreign nationals, a certificate of assurance from the embassy is not an invariable requirement; where the embassy declines or delays, the court can dispense with it and rely on passport surrender and reporting conditions instead.</p></div>
  <div class="tile"><h4>The general tests restated</h4><p>Conditions cannot be fanciful, arbitrary or freakish; cannot be impossible; cannot frustrate the bail itself; and cooperation with the investigation does not oblige the accused to confess.</p></div>
</div>

<h2>The permissible toolkit after the judgment</h2>
<table class="law">
  <tr><th>Condition</th><th>Status</th></tr>
  <tr><td>Periodic reporting to the police station or trial court</td><td>Permissible — expressly cited as a legitimate example</td></tr>
  <tr><td>Not leaving the country, or NCT of Delhi, without leave; passport deposit</td><td>Permissible, tailored to flight risk</td></tr>
  <tr><td>No contact with the complainant or witnesses; staying out of specified areas</td><td>Permissible for witness protection</td></tr>
  <tr><td>Keeping a working phone number, informing the IO of changes, remaining reachable</td><td>Common and generally sustainable — supervision, not surveillance</td></tr>
  <tr><td>Continuous location sharing, tracking pins, movement surveillance</td><td>Impermissible — violates Article 21 privacy per Frank Vitus</td></tr>
  <tr><td>Conditions impossible to perform, or so onerous they defeat release</td><td>Impermissible</td></tr>
</table>
<p>The grey zone in current practice is the direction to keep "location services enabled" — seen, for instance, among the otherwise standard conditions in recent Delhi High Court anticipatory bail orders. Read as a reachability measure that facilitates contact when the IO lawfully needs it, it sits on the permissible side; read as an always-on feed of the accused\'s movements to the State, it collides with the Frank Vitus principle. The practical course for the defence is to seek clarification or modification so the condition is expressly confined to reachability and compliance verification, not continuous tracking.</p>

<h2>Seeking modification: the route and the record</h2>
<div class="flow">
  <div class="fstep"><strong>Identify the offending condition</strong> — surveillance-type tracking, an impossible technical requirement, or an onerous combination (daily reporting plus device conditions plus travel bars).</div>
  <div class="fstep"><strong>Apply to the granting court</strong> — a modification application does not reopen the bail; it addresses the condition alone, citing the statutory purposes and the privacy principle.</div>
  <div class="fstep"><strong>Offer the proportionate substitute</strong> — reachability on a declared number, defined reporting, address verification: supervision the State legitimately needs, in exchange for deleting what it does not.</div>
  <div class="fstep"><strong>Escalate if refused</strong> — the superior court can be approached against the condition specifically, as was done in Frank Vitus itself.</div>
</div>

<h2>Why the line matters</h2>
<p>Bail jurisprudence rests on the presumption of innocence: release is the rule because punishment cannot precede conviction. A condition that converts release into round-the-clock surveillance punishes in a different currency — privacy instead of liberty — and does so without trial. The Supreme Court\'s insistence that conditions track the statute\'s purposes, and no further, keeps the bargain honest on both sides: the State gets the supervision that secures trial and protects witnesses; the accused keeps the constitutional remainder.</p>
<div class="note">
  <p>This article summarises reported authority and general practice for information. Conditions in any particular order must be addressed on that order\'s terms; this is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
