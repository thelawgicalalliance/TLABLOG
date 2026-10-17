<?php
$P = [
  'slug'         => 'transit-remand-interstate-arrest-procedure.php',
  'title'        => 'Transit Remand in Inter-State Arrests – Advocate Manish Jha',
  'meta'         => 'What a transit remand is, when police arresting outside their State must obtain one, the arrestee\'s rights at that hearing, and how defects affect bail.',
  'h1'           => 'Arrested in One State for Another State\'s FIR: The Law and Practice of Transit Remand',
  'crumb'        => 'Criminal — Arrest & Remand',
  'kicker'       => 'Practice Explainer · Criminal Law',
  'sub'          => 'Cyber-fraud and matrimonial FIRs routinely send police teams across State lines. The transit remand hearing before a local Magistrate is the one judicial checkpoint between the arrest and a long journey in police custody — and it is more than a formality.',
  'date'         => '2026-10-17',
  'date_display' => '17 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">When a police team from another State arrests a person in Delhi — or a Delhi Police team arrests someone in another State — the Constitution does not pause for geography. The arrestee must still be produced before the nearest Magistrate within twenty-four hours, and that production takes the form of a transit remand hearing: the local Magistrate decides whether the police may carry the arrestee to the jurisdiction of the FIR. This explainer sets out where the requirement comes from, what the Magistrate examines, what rights the arrestee has at that hearing, and what happens when the police skip it.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud Defence', 'delhi-high-court.php' => 'Delhi High Court Practice'],
  'faqs'         => [
    ['Is a transit remand always mandatory?', 'The constitutional requirement is production before a Magistrate within twenty-four hours of arrest, excluding journey time. Where the arresting team cannot reach the jurisdictional Magistrate within that window — the usual position in inter-State arrests — production before the nearest local Magistrate for transit remand is the only lawful course. Skipping it, and travelling beyond twenty-four hours, renders the detention illegal.'],
    ['Can the arrestee apply for bail at the transit stage?', 'The transit Magistrate\'s primary function is to authorise or refuse movement in custody, and bail on the merits is ordinarily for the jurisdictional court. But counsel can oppose transit custody, point out defects in the arrest papers, seek medical examination, and in appropriate cases seek transit bail or anticipatory protection from the local High Court or Sessions Court so that the person travels to the FIR court as a free litigant rather than in custody.'],
    ['What documents must the arresting team show?', 'The FIR or its copy, the arrest memo prepared at the place of arrest with attestation, written grounds of arrest in a language the arrestee understands, the case diary entries justifying the arrest, and the medical examination record. The Magistrate is expected to verify these before authorising transit custody, and defects at this stage are the foundation of later challenges.'],
    ['What if the police skip the transit remand?', 'Courts have treated the omission — especially combined with delayed production or defective grounds of arrest — as a violation of Articles 21 and 22, and have granted bail on that ground without examining the merits, occasionally with compensation and departmental action against the officers. The illegality does not end the prosecution, but it can secure liberty and permanently mark the investigation.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — arrest and production provisions (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
    ['label' => 'Constitution of India — Articles 21 and 22 (India Code)', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The legal spine</h2>
<p>Three layers combine. Article 22(2) of the Constitution and Section 58 of the BNSS require production before the nearest Magistrate within twenty-four hours of arrest, excluding the time necessary for the journey. The warrant-execution scheme of the BNSS — carrying forward Sections 80 and 81 of the CrPC — has always contemplated that a person arrested outside the issuing court's jurisdiction is taken before a local Magistrate, who then directs how the arrestee travels. And Section 47 of the BNSS, with Article 22(1), requires that the grounds of arrest be communicated — in current practice, furnished in writing, in a language the arrestee understands. The transit remand hearing is where all three layers are tested at once.</p>

<h2>What the transit Magistrate actually checks</h2>
<div class="check">
<p><strong>The transit checklist</strong></p>
<ul>
<li>Identity of the arresting team and the FIR under which the arrest was made</li>
<li>Arrest memo prepared at the place of arrest, attested by the arrestee or a relative</li>
<li>Written grounds of arrest, in a language the arrestee understands</li>
<li>Medical examination of the arrestee before the journey</li>
<li>Whether the twenty-four-hour clock has been honoured, measured from actual detention</li>
<li>The period of transit custody sought, which should match the realistic travel time</li>
</ul>
</div>
<p>The hearing is summary but not empty. The Magistrate authorises custody for the journey — not an open-ended remand — and can refuse where the papers are defective, direct that the arrestee be medically examined, record injuries, note the arrestee's complaints, and permit a local lawyer and family member to appear. Everything recorded at this hearing becomes evidence in later bail and trial proceedings.</p>

<h2>The Delhi angles</h2>
<p>Delhi sees both directions of this traffic. Outstation teams — commonly in cyber-fraud, matrimonial and economic-offence FIRs — arrest residents of Delhi and seek transit remand from the Duty Magistrate of the district where the arrest took place. Delhi Police teams, in turn, arrest across the country, and the legality of those arrests is tested when the accused reaches the Delhi courts. Two practical consequences follow.</p>
<p>For families in Delhi who learn of an outstation arrest, the first hours matter: ascertain the FIR number and police station, reach the district court where the production will occur, and ensure counsel appears at the transit hearing. Where arrest is anticipated but has not yet occurred — the usual position when an outstation FIR surfaces through a notice or a visit — the remedies are anticipatory bail in the FIR court's jurisdiction, or transit anticipatory bail from the local High Court to cover the journey to that forum.</p>
<p>For the defence at the bail stage, the transit record is a goldmine. Discrepancies between the real time of detention and the paper arrest, grounds of arrest in the wrong language, unattested memos, and journeys that exceeded the authorised transit period all go to the legality of the arrest itself — and courts have granted bail on that footing alone, holding that a later remand does not cure an earlier unlawful detention.</p>

<h2>Where transit remand fits in the larger bail map</h2>
<p>Transit remand is not a verdict on guilt; it is custody-logistics under judicial supervision. The merits are fought in the jurisdictional court — regular bail after production there, or anticipatory bail before arrest. But because the transit stage is the first judicial event in the case, it often fixes the factual record of the arrest for everything that follows. Treating it as a formality is the single most common — and most expensive — mistake made on both sides of these cases.</p>

<div class="note">
<p>This is a general explainer on transit remand practice in inter-State arrests under the BNSS and the Constitution. It is informational and is not legal advice; the handling of any particular arrest depends on its facts, the offences invoked and the forum.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
