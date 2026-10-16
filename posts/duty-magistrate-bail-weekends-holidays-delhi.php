<?php
$P = [
  'slug'         => 'duty-magistrate-bail-weekends-holidays-delhi.php',
  'title'        => 'Bail on a Court Holiday in Delhi – Advocate Manish Jha',
  'meta'         => 'Arrested on a weekend or court holiday in Delhi? How Duty Magistrates handle remand and bail, what can be done immediately, and what must wait.',
  'h1'           => 'Arrested on a Saturday Night: Duty Magistrates, Remand and Bail When Delhi\'s Courts Are Closed',
  'crumb'        => 'Criminal — Bail Practice',
  'kicker'       => 'Practice Explainer · Criminal Law',
  'sub'          => 'The twenty-four-hour production rule does not take weekends off. Delhi\'s district courts run a Duty Magistrate system for holidays — and knowing what that judge can and cannot do is the difference between a night in the lock-up and a week in judicial custody.',
  'date'         => '2026-10-16',
  'date_display' => '16 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Arrests do not follow the court calendar; if anything, they cluster around it. An accused picked up on a Saturday evening or the night before a public holiday must still be produced before a Magistrate within twenty-four hours — Article 22(2) of the Constitution and Section 58 of the BNSS admit no holiday exception. Delhi\'s district courts answer this with Duty Magistrates: judicial officers assigned by roster to sit on Sundays and holidays, usually at their residence office or a designated court room, to deal with productions, remands and urgent bail work. What follows is a practical map of that system for the first seventy-two hours of a criminal case.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court Practice', 'bns-converter.php' => 'BNS–IPC Converter'],
  'faqs'         => [
    ['Can a Duty Magistrate grant bail?', 'Yes, within limits. In bailable offences, bail is a right under Section 478 BNSS and the Duty Magistrate grants it on production. In non-bailable offences triable by Magistrates, the Duty Magistrate exercises the powers of the jurisdictional Magistrate under Section 480 BNSS, though in serious matters the common course is a short remand with the bail application listed before the regular court on the next working day.'],
    ['What exactly happens at a holiday production?', 'The investigating officer produces the accused with the arrest memo, grounds of arrest, medical examination report and case diary extracts. The Duty Magistrate checks compliance with arrest safeguards, hears a remand application — police custody or judicial custody — and the defence\'s opposition, and passes a remand order. Defects in the production, such as missing grounds of arrest, are the defence\'s first and best material.'],
    ['Can anticipatory bail be filed on a holiday?', 'The Sessions Court and High Court also maintain vacation and duty arrangements for urgent matters. A genuinely urgent anticipatory bail — imminent arrest, named FIR — can be mentioned before the Duty Sessions Judge. Interim protection on a holiday is exceptional, not routine, and the application must demonstrate why it cannot await the next working day.'],
    ['Does a weekend arrest extend police custody limits?', 'No. The limits on police custody and the default-bail clock under Section 187 BNSS run from arrest and first remand, independent of holidays. Time in custody over a weekend counts; it is not paused because the regular court was closed.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — Sections 58, 187, 478 and 480 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
    ['label' => 'District Courts of Delhi — official website', 'url' => 'https://delhidistrictcourts.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The constitutional spine</h2>
<p>Three rules hold the system together. First, a person arrested must be informed of the grounds of arrest — a requirement the BNSS and recent practice treat with increasing strictness, including the expectation that grounds be furnished in writing. Second, the arrestee must be produced before the nearest Magistrate within twenty-four hours of arrest, excluding journey time (Section 58 BNSS; Article 22(2)). Third, detention beyond twenty-four hours is lawful only under a remand order (Section 187 BNSS). None of these bends for a holiday, which is precisely why the Duty Magistrate exists: the judiciary must be available whenever the power of arrest is.</p>

<h2>How the duty system works in Delhi</h2>
<div class="flow">
<div class="fstep"><strong>Roster</strong><p>Each district court complex publishes a roster assigning a Duty Magistrate (and a Duty Sessions Judge) for Sundays and holidays, by rotation.</p></div>
<div class="fstep"><strong>Production</strong><p>The IO brings the accused with the arrest memo, grounds of arrest, MLC and case diary. Productions commonly happen at the Duty Magistrate\'s designated venue rather than the regular court room.</p></div>
<div class="fstep"><strong>Remand hearing</strong><p>The Magistrate examines the legality of the arrest and decides between police custody, judicial custody or release — counsel for the accused has the right to be heard and to oppose police custody.</p></div>
<div class="fstep"><strong>Next working day</strong><p>The file travels to the jurisdictional court; substantive bail applications in serious offences are ordinarily listed there, with the remand papers now on record.</p></div>
</div>

<h2>What the first hearing can realistically achieve</h2>
<p>Defence expectations at a holiday production should be calibrated. Release is realistic where the offence is bailable, where the arrest violates the mandatory safeguards, or where the offence carries less than seven years and the arrest does not satisfy the restraint-on-arrest discipline the law now imposes — the Magistrate is required to check necessity, not rubber-stamp it. Police custody can and should be contested immediately: once judicial custody intervenes, the scope for police remand narrows sharply, so the first hearing is often the only real fight over custodial interrogation. What a Duty Magistrate will rarely do is decide a contested regular-bail application in a grave offence; that goes to the regular court, and pressing it prematurely can cost the application its best presentation.</p>

<h2>Preparing in the hours before production</h2>
<p>For families and counsel, the useful work happens before the production, not after. Obtain the FIR number and sections from the police station or the online FIR portal; the provisions determine whether the offence is bailable, who can try it, and what the remand strategy should be. Arrange a lawyer to appear at the production itself — the right to counsel attaches from arrest, and an unopposed police-custody application usually succeeds. Collect the documents that bail courts ask for on day one: proof of residence, employment, medical conditions, and the particulars of proposed sureties. And record the timeline precisely: time of actual detention versus the arrest memo\'s version is the most frequently litigated fact of the first forty-eight hours. The remand produced on a Sunday shapes the bail hearing on Monday; the two are one continuous contest, not separate events.</p>

<div class="note">
<p>This is a general explainer on holiday remand and bail practice in the District Courts of Delhi under the Bharatiya Nagarik Suraksha Sanhita, 2023 (the successor provisions to Sections 57, 167, 436 and 437 CrPC). Rosters and venue arrangements are administrative and change from time to time; verify current arrangements from the concerned court complex.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
