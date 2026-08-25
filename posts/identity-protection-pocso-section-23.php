<?php
$P = [
  'slug'         => 'identity-protection-pocso-section-23.php',
  'title'        => 'Identity Protection under POCSO – Advocate Manish Jha',
  'meta'         => 'Section 23 POCSO and Section 72 BNS prohibit disclosing a child victim\'s identity — in media reports, court records and even social media posts. The full scheme explained.',
  'h1'           => 'Protecting the Child\'s Identity: Section 23 POCSO and the Wider Anonymity Regime',
  'crumb'        => 'POCSO Identity Protection',
  'kicker'       => 'Explainer · POCSO',
  'sub'          => 'The prohibition on revealing a child victim\'s identity binds journalists, publishers, litigants and ordinary social-media users alike — and breach is itself an offence, punishable even without proof of harm.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">The Protection of Children from Sexual Offences Act, 2012 protects more than the child\'s body; it protects the child\'s future. Section 23 makes it an offence to disclose, in any form of media, the identity of a child victim — name, address, photograph, family details, school, neighbourhood or any other particulars that could reveal who the child is. The prohibition is reinforced by Section 72 of the Bharatiya Nyaya Sanhita, 2023 (the successor to Section 228A IPC) for sexual offence victims generally, and by the in-camera trial mandate of Section 37 POCSO. This explainer maps the scheme, its narrow exception, and the compliance duties it imposes on everyone who touches such a case — including lawyers.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'child-custody.php' => 'Child Custody', 'cyber-law.php' => 'Cyber Law', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What exactly does Section 23 POCSO prohibit?', 'Section 23(1) bars reports or comments on a child in any media that may lower the child\'s reputation or infringe privacy; Section 23(2) bars disclosure, in any form of media, of the child\'s identity — including name, address, photograph, family details, school, neighbourhood or any other particulars capable of leading to identification. The bar covers studios and photographic facilities as well.'],
    ['Is there any exception allowing disclosure?', 'One, and it is judicial: the proviso to Section 23(2) permits disclosure where the Special Court trying the case authorises it, for reasons recorded in writing, if satisfied that disclosure is in the interest of the child. Neither the police, nor the family, nor the media can authorise disclosure themselves.'],
    ['What is the punishment for breach?', 'Under Section 23(4), a publisher or owner of the media outlet is jointly and severally liable, and the offence is punishable with imprisonment of not less than six months which may extend to one year, or fine, or both. Prosecution does not require proof that the child suffered actual harm from the disclosure.'],
    ['Does the bar apply to social media posts by private individuals?', 'Yes. Section 23 speaks of disclosure in any form of media, and Section 72 BNS punishes whoever prints or publishes identifying matter — language wide enough to cover posts, reels, messages forwarded to groups and comment threads. Well-meant posts naming a victim to demand justice are themselves offences, a point courts have had to make repeatedly in high-profile cases.'],
  ],
  'sources'      => [
    ['label' => 'Protection of Children from Sexual Offences Act, 2012 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Bharatiya Nyaya Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The three layers of anonymity</h2>
<table class="law">
  <tr><th>Provision</th><th>Scope</th><th>Who it binds</th></tr>
  <tr><td>Section 23 POCSO</td><td>Identity of a child victim of sexual offences; adverse or privacy-infringing reportage</td><td>All media, publishers, studios, individuals</td></tr>
  <tr><td>Section 72 BNS (old S. 228A IPC)</td><td>Identity of victims of specified sexual offences, adult or child</td><td>Whoever prints or publishes identifying matter</td></tr>
  <tr><td>Section 37 POCSO</td><td>In-camera trial before the Special Court</td><td>The court and all participants in the trial</td></tr>
</table>
<p>The layers overlap deliberately. Section 23 reaches particulars that identify indirectly — the school, the father's occupation, the lane — because in a dense neighbourhood those details do the naming without the name. Section 72 BNS supplies the general criminal prohibition; POCSO adds the child-specific regime and the publisher's joint and several liability.</p>

<h2>What "identity" includes in practice</h2>
<div class="check">
<ul>
  <li>Name, photograph, or video of the child — including blurred images that remain recognisable;</li>
  <li>Names or photographs of parents and siblings, the family's address, and identifiable descriptions of the home;</li>
  <li>The school, class, tuition centre or colony, where these narrow the field to identification;</li>
  <li>Case particulars that, matched with local knowledge, single out the child — the accused's identity itself can do this where he is a family member, which is why reportage of intra-family cases needs particular restraint.</li>
</ul>
</div>

<h2>Duties inside the courtroom</h2>
<p>Anonymity is not only a media duty; it is a litigation discipline. Cause lists and orders in POCSO matters describe victims by initials or as the victim/prosecutrix; charge-sheets and judgments are drafted to avoid identifying particulars in operative portions likely to circulate; certified-copy applications by strangers are scrutinised. Counsel on both sides share the obligation: pleadings, bail applications and grounds of appeal should use initials, and documents containing identity — the birth certificate, school records, the Section 183 BNSS statement — are filed, not quoted. The in-camera mandate of Section 37 extends the protection to the trial itself, and the child's evidence is recorded away from the accused's direct gaze under the child-friendly procedures of Sections 33 to 38.</p>

<h2>Media reportage: the narrow safe path</h2>
<p>Section 23(1) permits reporting on cases — public scrutiny of the justice system is not suspended — but forbids reports that lower the child's reputation or infringe privacy, and Section 23(2) forbids identification outright. The compliant report describes the offence, the stage of proceedings and the court's orders without the identifying matrix. The proviso's judicial gate is the only exception: a Special Court may authorise disclosure in writing where that is in the child's own interest — a power used rarely, for instance to trace a missing child.</p>

<h2>Enforcement and consequences</h2>
<p>Breach is a cognizable route to prosecution under Section 23(4) POCSO, with the publisher or owner jointly and severally liable with the reporting individual, and punishment of six months to one year's imprisonment or fine or both. Courts also act on the civil side: directions to platforms to take down identifying content are now routine, and contempt jurisdiction supplements the statute where disclosures defy specific orders. The practical advice is uniform for journalists, litigants and bystanders alike: when in doubt, leave every identifying detail out.</p>

<div class="note">
<p><strong>Note:</strong> This explainer states the statutory scheme for general information. It does not refer to any matter conducted by the chamber, and nothing in it is legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
