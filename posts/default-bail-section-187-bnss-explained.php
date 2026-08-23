<?php
$P = [
  'slug'         => 'default-bail-section-187-bnss-explained.php',
  'title'        => 'Default Bail under Section 187 BNSS – Advocate Manish Jha',
  'meta'         => 'How default bail works under Section 187(3) BNSS (formerly Section 167(2) CrPC): the 60 and 90 day limits, when the right arises and how it is lost.',
  'h1'           => 'Default Bail under Section 187(3) BNSS: The 60 and 90 Day Rule Explained',
  'crumb'        => 'Default Bail (S. 187 BNSS)',
  'kicker'       => 'Explainer · Bail Practice',
  'sub'          => 'When the investigating agency does not file its chargesheet within the statutory period, the accused earns a right to be released on bail — this explainer sets out how that right arises, how it is claimed, and how it can be lost.',
  'date'         => '2026-08-23',
  'date_display' => '23 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Default bail — also called statutory or compulsive bail — is not granted on the merits of the case at all. It flows purely from the calendar: if the investigation is not completed and a chargesheet is not filed within the period fixed by Section 187(3) of the Bharatiya Nagarik Suraksha Sanhita, 2023 (formerly the proviso to Section 167(2) CrPC), the accused becomes entitled to be released on bail, whatever the gravity of the allegation. This explainer covers the general framework for BNS/IPC offences; special statutes with extended timelines, such as the UAPA, are dealt with separately on this site.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'delhi-high-court.php' => 'Delhi High Court', 'bns-converter.php' => 'BNS Converter'],
  'faqs'         => [
    ['Is default bail decided on the merits of the case?', 'No. Default bail under Section 187(3) BNSS does not depend on the strength of the prosecution case. It arises purely because the chargesheet was not filed within the statutory period of 60 or 90 days. The Magistrate does not weigh the evidence; the only questions are whether the period has expired, whether the chargesheet remains unfiled, and whether the accused has applied and is prepared to furnish bail.'],
    ['From when is the 60 or 90 day period counted?', 'As a matter of settled practice, the period is computed from the date of the first remand order, not from the date of arrest. Counsel should obtain the order sheets, identify the date on which the accused was first produced and remanded, and compute the period from that date, keeping a careful day count throughout the custody period.'],
    ['Can default bail be cancelled after the chargesheet is filed?', 'Filing of the chargesheet after release does not by itself undo default bail. Bail granted under Section 187(3) BNSS can be cancelled only on the grounds on which bail is ordinarily cancelled, such as tampering with evidence, threatening witnesses, absconding, or breach of conditions, and not merely because the investigation was later completed.'],
    ['Does the accused have to file a written application for default bail?', 'The right does not operate automatically; the accused must avail it. In practice, a written application before the court holding custody is the safest course, expressly invoking Section 187(3) BNSS, setting out the remand chronology, and stating readiness to furnish bail. The application should be filed immediately upon expiry of the period, before the chargesheet is filed.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'District Courts of Delhi', 'url' => 'https://delhidistrictcourts.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The remand framework on first production</h2>
<p>When a person is arrested, Article 22 of the Constitution and the BNSS require production before a Magistrate within twenty-four hours of arrest, excluding journey time. From that point, continued detention is possible only under judicial authorisation. Section 187 BNSS (formerly Section 167 CrPC) is the provision under which a Magistrate authorises detention while the investigation is pending.</p>
<p>Two kinds of custody are possible during this period. <strong>Police custody</strong> places the accused with the investigating agency for interrogation. <strong>Judicial custody</strong> places the accused in prison under the control of the court. Police custody is tightly capped: it cannot exceed fifteen days in aggregate in relation to the same case. Everything beyond that must be judicial custody.</p>

<h2>What the BNSS changed about police custody</h2>
<p>Under the old CrPC regime, the settled understanding was that police custody had to be sought within the first fifteen days of remand, after which only judicial custody was possible. The BNSS has altered this. Section 187(2) BNSS permits the fifteen days of police custody to be taken <em>in whole or in parts</em> at any time during the initial forty days (for cases governed by the sixty-day limit) or the initial sixty days (for cases governed by the ninety-day limit) of the detention period. In practical terms, an accused released into judicial custody early in the investigation may still face a police custody application weeks later, so long as the aggregate of fifteen days and the initial-period window are respected. Defence counsel must therefore track both the total police custody already availed and the stage of the investigation at which any fresh application is made.</p>

<h2>The outer limits: 60 and 90 days</h2>
<p>Section 187(3) BNSS fixes the maximum period for which an accused can be kept in custody pending investigation. If the chargesheet (the police report under Section 193 BNSS, formerly Section 173 CrPC) is not filed within this period, further detention becomes impermissible provided the accused applies for bail and is prepared to furnish it.</p>
<table class="law">
  <thead>
    <tr><th>Category of offence</th><th>Outer limit for filing chargesheet</th></tr>
  </thead>
  <tbody>
    <tr><td>Offences punishable with death, imprisonment for life, or imprisonment for a term of ten years or more</td><td>90 days from the first remand</td></tr>
    <tr><td>All other offences</td><td>60 days from the first remand</td></tr>
  </tbody>
</table>
<p>The classification turns on the punishment prescribed for the offence alleged in the remand papers. Where multiple offences are invoked, the offence carrying the highest punishment ordinarily determines which limit applies. As a matter of settled practice, the period is computed from the date of the first remand order rather than the date of arrest, so the remand chronology in the order sheets is the working document for any default bail computation.</p>

<h2>When the right arises — and what makes it indefeasible</h2>
<p>On the expiry of the sixtieth or ninetieth day without a chargesheet, the accused acquires a right to be released on bail. Three things must coincide for the right to crystallise into release:</p>
<div class="check">
<ul>
  <li>The statutory period has expired without the chargesheet being filed;</li>
  <li>The accused has <strong>applied</strong> for default bail, invoking Section 187(3) BNSS; and</li>
  <li>The accused is <strong>prepared to furnish bail</strong> as directed by the court.</li>
</ul>
</div>
<p>Once these conditions are met before the chargesheet arrives, the right is treated as indefeasible: the court has no discretion to refuse it on the ground that the offence is serious or that the investigation is at a delicate stage. The merits of the allegation are simply irrelevant at this stage.</p>

<h2>How the right is lost</h2>
<p>The right is equally capable of being extinguished. It is the settled position that if the chargesheet is filed <em>before</em> the accused avails the right — that is, before an application is made and the accused offers to furnish bail — the entitlement to default bail comes to an end. Thereafter, bail must be sought on merits under the ordinary provisions. The window between the expiry of the period and the filing of the chargesheet can be a matter of hours, which is why vigilance about the day count is central to defence practice. An application filed on the very day the period expires, coupled with an express statement of readiness to furnish bail, is the standard protective step.</p>

<h2>Practical steps in Delhi courts</h2>
<div class="flow">
  <div class="fstep"><h4>1. Fix the start date</h4><p>Obtain certified copies or inspect the order sheets to identify the date of the first remand. Compute the 60 or 90 day period from that date and diarise the expiry.</p></div>
  <div class="fstep"><h4>2. Verify the applicable limit</h4><p>Check the punishment prescribed for each offence in the FIR and remand applications, since the 90-day limit applies only where the offence is punishable with death, life imprisonment, or ten years or more.</p></div>
  <div class="fstep"><h4>3. File promptly on expiry</h4><p>Move a written application under Section 187(3) BNSS before the Magistrate having custody of the case (or the Sessions Court where the matter stands committed), stating the chronology and readiness to furnish bail.</p></div>
  <div class="fstep"><h4>4. Furnish bail without delay</h4><p>Keep sureties, documents, and bail bonds ready in advance so that release is not delayed after the order, and the right is fully availed before any chargesheet is filed.</p></div>
</div>
<div class="note">
<p>Default bail is a facet of the fundamental right to personal liberty under Article 21. But it rewards only the vigilant: the accused who computes the period correctly, applies on time, and furnishes bail promptly. A day lost in moving the application can mean the difference between statutory release and a contested bail hearing on merits.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
