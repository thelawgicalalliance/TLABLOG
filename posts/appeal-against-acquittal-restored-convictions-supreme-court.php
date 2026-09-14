<?php
$P = [
  'slug'         => 'appeal-against-acquittal-restored-convictions-supreme-court.php',
  'title'        => 'SC Restores Convictions of Two Acquitted – Advocate Manish Jha',
  'meta'         => 'Supreme Court partly reverses a High Court acquittal in an unlawful assembly murder case, restoring two convictions while upholding one acquittal.',
  'h1'           => 'Appeals Against Acquittal: Supreme Court Restores Two Convictions, Upholds One Acquittal',
  'crumb'        => 'Acquittal Reversed in Part',
  'kicker'       => 'Supreme Court · 8 September 2026',
  'sub'          => 'The judgment shows the accused-by-accused method: sufficient evidence restored two convictions, while a Section 319 addition\'s inconsistencies saved a third.',
  'date'         => '2026-09-14',
  'date_display' => '14 September 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">In <em>Santosh Singh v. State of Madhya Pradesh</em> (Criminal Appeal Nos. 1303-1305 of 2022 with Criminal Appeal No. 1306 of 2022, 2026 INSC 972, decided on 8 September 2026), the Supreme Court partly allowed appeals arising from a High Court acquittal in an unlawful assembly murder case. Convictions of two accused (A6 and A12) were restored; the acquittal of a third (A13) was upheld. The decision is a working demonstration of how the Supreme Court deals with acquittals: not wholesale, but role by role, witness by witness.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'bns-converter.php' => 'BNS Converter'],
  'faqs'         => [
    ['On what basis were the two convictions restored?', 'The Court found sufficient evidence establishing A6\'s role in holding the victim and A12\'s exhortation to fire. Medical evidence corroborated the trajectory of the fatal gunshot wound, supporting the eyewitness accounts, and the trial court\'s convictions were restored.'],
    ['Why was A13\'s acquittal maintained despite his carrying a gun?', 'A13 had been added to the trial later under Section 319 CrPC, and the witness statements before and after his inclusion were inconsistent. Despite evidence that he carried a double-barrel gun, those inconsistencies rendered the evidence insufficient for conviction, and the benefit went to him.'],
    ['What role does constructive liability play in such cases?', 'Where an unlawful assembly\'s common object is established, Section 149 IPC (now Section 190 BNS) makes each member liable for offences committed in prosecution of that object — which is why individualised proof of the role of each accused, such as holding the victim or exhorting the firing, becomes the battleground.'],
    ['Is interference with acquittals routine in the Supreme Court?', 'No. Reversal requires the Court to be satisfied that the acquittal is unsupportable on the evidence — but as this case shows, where eyewitness testimony is corroborated by medical evidence, the Court will restore convictions even while preserving the acquittal of a co-accused whose evidence stands on weaker footing.'],
  ],
  'sources'      => [ ['label' => 'Santosh Singh v. State of Madhya Pradesh, Criminal Appeal Nos. 1303-1305 of 2022, 2026 INSC 972 (Supreme Court of India, 8 September 2026) — Indian Kanoon', 'url' => 'https://indiankanoon.org/doc/160770652/'] ],
];
$BODY = <<<'HTML'
<h2>The Case</h2>
<p>A group attack left one person dead. The trial court convicted several accused for offences including Sections 302, 148 and 149 IPC; the High Court acquitted some of them. Appeals reached the Supreme Court challenging the acquittals of three accused — identified in the record as A6, A12 and A13 — before a Bench of Justices J. B. Pardiwala and K. Vinod Chandran.</p>

<h2>Three Accused, Three Analyses</h2>
<div class="tiles">
<div class="tile"><strong>A6 — conviction restored.</strong> The evidence established his specific role: holding the victim while the assault proceeded. Participation with an assigned role in the transaction attracted liability, and the trial court\'s conviction was revived.</div>
<div class="tile"><strong>A12 — conviction restored.</strong> The witnesses attributed to him the exhortation to fire. Instigation at the scene, in an unlawful assembly whose object materialised in the killing, sustained his conviction.</div>
<div class="tile"><strong>A13 — acquittal upheld.</strong> He entered the trial late, summoned under Section 319 CrPC. The witness statements before and after his inclusion did not match, and despite evidence that he carried a double-barrel gun, the inconsistencies left the proof short of the criminal standard.</div>
</div>

<h2>The Corroboration That Mattered</h2>
<p>The medical evidence corroborated the trajectory of the fatal gunshot wound, and that alignment between the ocular and the medical account anchored the restoration of the two convictions. Appellate reversal of an acquittal demands a record on which the acquittal cannot reasonably stand; corroborated, role-specific eyewitness testimony supplied exactly that for A6 and A12 — and its absence in comparable quality preserved A13\'s acquittal.</p>

<h2>Section 319 Additions: A Recurring Weak Seam</h2>
<p>The saving of A13 illustrates a structural point. When a person is summoned as an additional accused under Section 319 CrPC (now Section 358 BNSS), the evidence naming him is scrutinised across its versions — the FIR, the Section 161 statements, the pre-summoning depositions and the post-summoning evidence. Where the narrative about that person shifts after his arrival in the array, courts treat the shift itself as a ground of doubt. Prosecutions that intend to rope in additional accused must ensure the earliest statements already carry the substance later relied upon.</p>

<h2>Practice Points</h2>
<div class="check">
<ul>
<li>In multi-accused appeals, argue each accused as a separate case: the Supreme Court decides role by role, and outcomes legitimately diverge on the same incident.</li>
<li>Alignment of medical and ocular evidence is the strongest single factor in acquittal-reversal appeals; disalignment is the strongest shield.</li>
<li>For accused added under Section 319, chart the evolution of every witness\'s account across stages — inconsistency across versions is a defence in itself.</li>
</ul>
</div>
<p>This article is for general information only and is not legal advice or a solicitation. The cited judgment should be read in full from the official record.</p>
HTML;
include __DIR__ . '/post-layout.php';
