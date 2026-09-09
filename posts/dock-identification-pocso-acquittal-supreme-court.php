<?php
$P = [
  'slug'         => 'dock-identification-pocso-acquittal-supreme-court.php',
  'title'        => 'No Dock Identification, Acquittal in POCSO – Advocate Manish Jha',
  'meta'         => 'Supreme Court acquits a POCSO life convict because the victim never identified him in court, holding that a TIP is corroborative, not substantive, evidence.',
  'h1'           => 'Supreme Court: Courtroom Identification Is Substantive; TIP Is Only Corroborative',
  'crumb'        => 'Dock Identification Ruling',
  'kicker'       => 'Supreme Court · 7 September 2026',
  'sub'          => 'A life sentence under the POCSO Act has been set aside because the prosecution never had the child victim identify the accused during her deposition.',
  'date'         => '2026-09-09',
  'date_display' => '9 September 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">In <em>Dhanraj v. State of Rajasthan</em>, 2026 INSC 958 (Criminal Appeal No. 135 of 2026, decided 7 September 2026), a Bench of Justices Sandeep Mehta and Manmohan acquitted a man who had been sentenced to life imprisonment for the rape of a five-year-old child, holding that the failure to have the victim identify the accused in court was a fatal flaw in the prosecution case. The judgment is a stern reminder that a Test Identification Parade conducted during investigation is not substantive evidence of identity — identification of the accused by the witness in court is.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'delhi-high-court.php' => 'Delhi High Court', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What is the evidentiary value of a Test Identification Parade?', 'A TIP is part of the investigation. It tests the memory and capacity of a witness and serves to corroborate the identification made in court, but it is not substantive evidence. The Supreme Court reiterated in this case that the substantive evidence of identity is the witness\'s identification of the accused before the trial court.'],
    ['Why was the accused acquitted despite a TIP identification?', 'Because the child victim was never asked to identify the accused during her deposition, even though she said she could recognise him. The accused was not named in the FIR, the sketch prepared during investigation was never produced, there was no DNA corroboration, and the medical evidence on the age of injuries did not match the prosecution\'s timeline. The cumulative deficiencies left the identity unproved beyond reasonable doubt.'],
    ['Does an acquittal like this mean the offence did not occur?', 'No. It means the prosecution failed to prove, to the criminal standard, that the person on trial committed the offence. The Court in fact attributed the omission of dock identification to the negligence of the prosecution and the trial court\'s failure to remedy it during the recording of evidence.'],
    ['What stage had the case reached before the Supreme Court intervened?', 'The Special Judge (POCSO), Ajmer had convicted the accused, and the Rajasthan High Court affirmed the conviction on 20 August 2025. The Supreme Court, hearing the criminal appeal after grant of leave under Article 136, set aside both judgments and directed release; the appellant had spent over nine years in custody.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Dhanraj v. State of Rajasthan, 2026 INSC 958 (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/39030013/'],
    ['label' => 'Report — LiveLaw (2026 LiveLaw (SC) 906)', 'url' => 'https://www.livelaw.in/top-stories/victim-didnt-identify-accused-in-court-supreme-court-acquits-man-convicted-for-rape-of-5-year-old-549015'],
  ],
];
$BODY = <<<'HTML'
<h2>The prosecution case and its unravelling</h2>
<p>An FIR was registered on 7 December 2016 at Ajmer against an unknown person for the rape of a five-year-old girl. The appellant was arrested on 5 February 2017 after being identified in a Test Identification Parade, was charged under Sections 363, 366A, 323, 376 and 376(2)(i)(j) of the IPC and Sections 3/4 and 5(m)/6 of the POCSO Act, and was convicted and sentenced to imprisonment for life. The Rajasthan High Court dismissed his appeal on 20 August 2025.</p>
<p>Before the Supreme Court, the conviction collapsed on the question of identity. During her deposition the child said she could identify the man "if he comes in front of me" — yet neither the Public Prosecutor nor the Presiding Officer had her do so, although the accused was physically present in the dock. The Court described this as sheer negligence on the part of the prosecutor, compounded by the trial court's failure to remedy an omission that could have been cured in a moment.</p>

<h2>The legal principle restated</h2>
<div class="check">
<p><strong>Dock identification is the substantive evidence of identity.</strong> Where the accused is a stranger to the witness, what proves identity at trial is the witness identifying the accused in court.</p>
<p><strong>A TIP is corroborative only.</strong> Identification proceedings conducted during investigation test the witness's memory and lend assurance to a later courtroom identification; they cannot substitute for it.</p>
<p><strong>Cumulative doubt compels acquittal.</strong> The accused was not named in the FIR, the victim admitted the police had told her his name, the investigation sketch was never exhibited, there was no DNA corroboration, and the medical officer's estimate that the injuries were five to seven days old contradicted the alleged date of the incident.</p>
</div>

<h2>Old code and new: where the law on identification stands</h2>
<table class="law">
<tr><th>Subject</th><th>Earlier regime</th><th>Current regime</th></tr>
<tr><td>Identification parades</td><td>Section 54A CrPC; Section 9, Indian Evidence Act 1872 (facts establishing identity are relevant)</td><td>Section 57 BNSS; Section 7, Bharatiya Sakshya Adhiniyam 2023</td></tr>
<tr><td>Substantive proof of identity</td><td colspan="2">Identification of the accused by the witness in court — unchanged by the new codes</td></tr>
<tr><td>Presumptions in POCSO trials</td><td colspan="2">Sections 29–30 POCSO operate only after foundational facts, including identity, are established by the prosecution</td></tr>
</table>
<p>The point in the last row deserves emphasis. The reverse presumptions under the POCSO Act do not relieve the prosecution of proving that it was the accused who committed the act. Where identity itself is doubtful, the presumptions never come into play.</p>

<h2>Lessons for trial practice</h2>
<p>For the prosecution, the case is a checklist of avoidable errors: have every identifying witness perform a dock identification; exhibit the material generated during investigation; and ensure that forensic corroboration, where collected, actually reaches the record. For the defence, it underlines that appellate courts — including the Supreme Court in an appeal arising from special leave under Article 136 — will interfere even with concurrent findings where the conviction rests on an evidentiary void rather than a possible view of the evidence.</p>
<div class="note">
<p>The judgment also carries a sobering institutional message: the appellant spent more than nine years in custody before the gap in the prosecution evidence was recognised. Rigorous attention to the basics of proof at the trial stage is the only real safeguard against such outcomes, in either direction.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
