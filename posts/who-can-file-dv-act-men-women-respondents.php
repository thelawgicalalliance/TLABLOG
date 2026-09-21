<?php
$P = [
  'slug'         => 'who-can-file-dv-act-men-women-respondents.php',
  'title'        => 'Can A Man Invoke The DV Act? – Advocate Manish Jha',
  'meta'         => 'Who can file and who can be sued under the DV Act: why only women are aggrieved persons, how Harsora widened respondents, and the remedies available to men.',
  'h1'           => 'Who Files, Who Defends: The DV Act\'s Asymmetry and the Remedies Left for Men',
  'crumb'        => 'DV Act — Parties',
  'kicker'       => 'Practice Explainer · DV Act, 2005',
  'sub'          => 'The DV Act protects women only — but after the Supreme Court\'s decision in Hiral P. Harsora, it can be invoked against women and non-adults as respondents. Men facing domestic abuse must look to other remedies, which exist.',
  'date'         => '2026-09-21',
  'date_display' => '21 September 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Two questions arrive in matrimonial chambers with equal frequency and opposite directions: "Can my mother-in-law be made a party to my DV case?" and "I am the one being abused — can I file a DV case against my wife?" The answers turn on the Protection of Women from Domestic Violence Act\'s deliberately asymmetric design: the class of protected persons is confined to women, while the class of respondents, after the Supreme Court\'s intervention, is wide open. Understanding both halves prevents misconceived filings on one side and missed defences on the other.</p>',
  'related'      => ['domestic-violence.php' => 'Domestic Violence', 'matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', '498-lawyer-in-delhi.php' => '498A Defence', 'child-custody.php' => 'Child Custody'],
  'faqs'         => [
    ['Can a man file an application under the DV Act?', 'No. Section 2(a) defines an "aggrieved person" as any woman who is, or has been, in a domestic relationship with the respondent and alleges domestic violence. A husband or male partner cannot maintain a Section 12 application. A male child can, however, be protected through his mother\'s application, since "child" under the Act includes any person below eighteen.'],
    ['Can women be made respondents in a DV case?', 'Yes. In Hiral P. Harsora v. Kusum Narottamdas Harsora (2016), the Supreme Court struck down the words "adult male" from the definition of respondent in Section 2(q) as violative of Article 14, holding that the restriction would let perpetrators act through female relatives and defeat the Act\'s purpose. Mothers-in-law, sisters-in-law and other female relatives can accordingly be arrayed as respondents.'],
    ['What remedies does a man facing spousal abuse actually have?', 'Divorce or judicial separation on the ground of cruelty under Section 13(1)(ia) HMA; criminal law where offences are made out (assault, defamation, criminal intimidation under the BNS); quashing and defence remedies where implicated in false cases; and, for harassment through litigation, compensatory costs. What he does not have is the DV Act\'s summary machinery of protection, residence and monetary orders.'],
    ['Does a wife\'s DV case bar the husband\'s own proceedings?', 'No. A pending DV application does not prevent the husband from pursuing divorce, custody or his own criminal complaints. Courts may consolidate or coordinate proceedings, and conduct in one forum — including demonstrably false allegations — can be relevant as cruelty in the matrimonial forum.'],
  ],
  'sources'      => [ ['label' => 'Hiral P. Harsora v. Kusum Narottamdas Harsora — Supreme Court of India (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/114237665/'], ['label' => 'Protection of Women from Domestic Violence Act, 2005 — India Code', 'url' => 'https://www.indiacode.nic.in/'] ],
];
$BODY = <<<'HTML'
<h2>The protected class: women only</h2>
<p>Section 2(a) of the Act confines the status of "aggrieved person" to a woman in a domestic relationship who alleges domestic violence. The choice is legislative and deliberate: the statute was enacted as a gender-specific protective measure, and courts have consistently declined to read men into it. Practically, this means a Section 12 application filed by a husband is liable to be dismissed at the threshold, whatever its factual merits — his grievances must be routed through other laws.</p>

<h2>The respondent class: widened by Harsora</h2>
<p>As enacted, Section 2(q) defined a respondent as an "adult male person" in a domestic relationship with the aggrieved person, with a proviso allowing complaints against a husband's relatives. In <em>Hiral P. Harsora v. Kusum Narottamdas Harsora</em> (Supreme Court, 6 October 2016), the Court struck down the words "adult male", holding they "do not square with Article 14 of the Constitution of India". The Court reasoned that the restriction created invidious distinctions between similarly situated persons and would allow perpetrators to evade the Act by acting through female intermediaries — rendering protection and residence orders ineffective. After severance, the Act operates against respondents of any sex and, in appropriate cases, non-adults.</p>

<div class="compare">
<div class="col old"><h4>Before Harsora</h4><p>Respondent = adult male in a domestic relationship; female relatives reachable only through the proviso, in complaints by wives or partners.</p></div>
<div class="arrow">→</div>
<div class="col new"><h4>After Harsora</h4><p>Respondent = any person in a domestic relationship with the aggrieved woman — husbands, in-laws male and female, and other household members.</p></div>
</div>

<h2>What the asymmetry means in practice</h2>
<div class="tiles">
<div class="tile"><h4>For applicants</h4><p>A woman may implead the relatives whose conduct is actually complained of — but each respondent needs specific allegations. Vague, omnibus arraying of the whole household invites quashing and weakens the core case.</p></div>
<div class="tile"><h4>For female respondents</h4><p>A mother-in-law or sister-in-law arrayed as a respondent is a party to a civil-protective proceeding, not an accused in a criminal trial. Defences focus on the absence of a domestic relationship, the absence of specific allegations, and the reliefs\' scope — for instance, a residence order under Section 19(1)(b) directing removal from the shared household cannot be passed against a woman.</p></div>
<div class="tile"><h4>For men facing abuse</h4><p>The gap in summary protection is real, but not a legal vacuum: cruelty-based matrimonial relief, ordinary criminal law, and the courts\' power to award costs against abusive litigation remain available, and evidence should be preserved with the same discipline the DV Act demands of applicants.</p></div>
</div>

<h2>Delhi practice pointers</h2>
<p>In Delhi, Section 12 applications are heard by the Magistrates\' courts designated as Mahila Courts, and appeals lie to the Sessions Court under Section 29. Applications naming female relatives are routine after <em>Harsora</em>, but the Delhi courts scrutinise the pleadings respondent by respondent: dates, acts and the domestic relationship must be shown for each. Counsel defending should test every respondent\'s inclusion against that standard at the earliest stage, including by seeking discharge from the array where allegations are absent or absurd.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
