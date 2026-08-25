<?php
$P = [
  'slug'         => 'bailable-non-bailable-offences-bnss-478.php',
  'title'        => 'Bailable vs Non-Bailable Offences – Advocate Manish Jha',
  'meta'         => 'What makes an offence bailable or non-bailable under the BNSS, the right to bail under Section 478, the indigent-person rule, and how the First Schedule classification works.',
  'h1'           => 'Bailable and Non-Bailable Offences: The Section 478 BNSS Framework',
  'crumb'        => 'Bailable vs Non-Bailable',
  'kicker'       => 'Explainer · Bail',
  'sub'          => 'In a bailable offence, bail is a right the police and the court must honour; in a non-bailable offence, it is a judicial discretion. The classification comes from the First Schedule, and the right from Section 478 BNSS.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">The first question in every arrest is not whether bail will be granted but which regime applies. The Bharatiya Nagarik Suraksha Sanhita, 2023 divides all offences into bailable and non-bailable. For the former, Section 478 BNSS — the successor to Section 436 CrPC — confers an enforceable right to be released; for the latter, release is governed by the discretionary regimes of Sections 480 and 483. This explainer covers how the classification is made, what the right under Section 478 includes — notably the indigent-person rule — and where the line has practical bite in Delhi.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'bns-converter.php' => 'BNS–IPC Converter', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Who decides whether an offence is bailable?', 'The First Schedule to the BNSS. For offences under the Bharatiya Nyaya Sanhita, the Schedule specifies against each section whether it is bailable and cognizable and which court tries it. For offences under other laws, the Schedule\'s residuary part classifies by punishment: broadly, offences punishable with less than three years or with fine only are bailable, unless the special statute itself says otherwise.'],
    ['Can police refuse bail in a bailable offence?', 'No. Section 478(1) BNSS obliges the officer in charge or the court to release a person accused of a bailable offence on bail as of right, and the officer may release on a personal bond without sureties. Refusal is an illegality remediable immediately before the Magistrate, and continued detention can expose the detaining officer to consequences.'],
    ['What is the indigent-person rule in Section 478?', 'Where a person is unable to furnish surety within a week of arrest in a bailable offence, the proviso permits the officer or court to presume the person indigent and release him on a personal bond without sureties. The one-week outer limit converts poverty from a reason for jail into a reason for relaxed release conditions.'],
    ['Does a bailable offence ever lead to bail being cancelled?', 'Yes, in a limited sense. Under Section 478(2) read with Section 491, if the person fails to comply with the conditions of the bail bond — chiefly appearance — the court may refuse release on a subsequent occasion in the same case and may forfeit the bond. The right under Section 478 is a right to release, not a licence to abscond.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Bharatiya Nyaya Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Two regimes, one Schedule</h2>
<p>Section 2(1)(c) BNSS defines a bailable offence as one shown as bailable in the First Schedule or made bailable by any other law, and a non-bailable offence as any other offence. The classification is legislative, not judicial: no court can treat a non-bailable offence as bailable, and no seriousness in fact can convert a bailable offence into a non-bailable one. What changes between the two regimes is the nature of the decision.</p>
<div class="compare">
  <div class="col old">
    <h3>Bailable — S. 478 BNSS</h3>
    <p>Release is a statutory right. The police officer or court <em>shall</em> release on bail, and may accept a personal bond without sureties. No merits inquiry into the allegation is involved.</p>
  </div>
  <div class="arrow">→</div>
  <div class="col new">
    <h3>Non-bailable — Ss. 480 / 483 BNSS</h3>
    <p>Release is a judicial discretion, weighed on the gravity of the offence, the material collected, flight risk, and the risk of tampering — before the Magistrate under Section 480 or the Sessions Court and High Court under Section 483.</p>
  </div>
</div>

<h2>How to read the First Schedule</h2>
<p>For every offence under the Bharatiya Nyaya Sanhita, 2023, the First Schedule states whether it is cognizable, whether it is bailable, and by which court it is triable. The two classifications are independent: an offence can be cognizable yet bailable, or non-cognizable yet non-bailable. For offences under special and local laws that are silent on the point, the Schedule's second part classifies by the quantum of punishment — as broad guidance, offences punishable with imprisonment of three years or more are non-bailable, and those punishable with less than three years or with fine only are bailable — always subject to the special statute's own scheme, which prevails.</p>
<p>The practical consequence for advising a client is that the section number alone settles the first, most important question. Counsel consulting on an FIR should map every section invoked to its Schedule entry before anything else: a single non-bailable section in an otherwise bailable FIR changes the entire strategy, bringing anticipatory bail and arrest-safeguard considerations into play.</p>

<h2>The content of the Section 478 right</h2>
<div class="flow">
  <div class="fstep"><strong>Arrest or appearance triggers it.</strong> The right arises when a person accused of a bailable offence is arrested or detained without warrant, or appears or is brought before a court, and is prepared to give bail.</div>
  <div class="fstep"><strong>Police-station release.</strong> The officer in charge can and should release at the police station itself; production before a Magistrate is not a precondition.</div>
  <div class="fstep"><strong>Personal bond option.</strong> The officer or court may dispense with sureties and take a personal bond — the default for minor offences in practice.</div>
  <div class="fstep"><strong>Indigence presumed after a week.</strong> If the person cannot furnish surety within a week of arrest, the proviso permits treating him as indigent and releasing him on personal bond without sureties.</div>
</div>

<h2>Where the line matters most in Delhi practice</h2>
<p>Three recurring situations show the classification's bite. First, in matrimonial and neighbourhood disputes, FIRs often mix bailable offences (voluntarily causing hurt, criminal intimidation simpliciter) with non-bailable ones (cruelty under Section 85 BNS); the non-bailable section drives custody risk. Second, in cheque-bounce prosecutions under Section 138 of the Negotiable Instruments Act — a bailable offence — arrest is not the concern, but appearance and bond discipline are, since non-appearance invites warrants and forfeiture. Third, for out-of-town clients, the bailable classification means an arrest need never ripen into custody if bail papers and a surety are kept ready at the first police-station stage.</p>

<div class="note">
<p><strong>Note:</strong> The BNSS applies to proceedings on and after 1 July 2024; the corresponding CrPC provisions (Sections 436 and 437) continue to govern older matters. The classification of BNS offences must always be checked against the current First Schedule text rather than IPC-era memory.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
