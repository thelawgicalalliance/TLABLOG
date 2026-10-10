<?php
$P = [
  'slug'         => 'single-judge-or-division-bench-delhi-high-court.php',
  'title'        => 'Single Judge Or Division Bench? – Advocate Manish Jha',
  'meta'         => 'Which Delhi High Court appeals go before a Single Judge and which before a Division Bench: RFA, FAO, MAT.APP, LPA, commercial appeals and criminal appeals mapped.',
  'h1'           => 'One Judge or Two: How Appellate Work Is Distributed in the Delhi High Court',
  'crumb'        => 'Procedure & Practice — Appeals',
  'kicker'       => 'Practice Explainer · Delhi High Court appellate structure',
  'sub'          => 'The bench strength that hears an appeal is fixed by statute, the Letters Patent and the High Court\'s rules — and it determines everything from drafting style to the further remedies available. A practical map of the common appeal types.',
  'date'         => '2026-10-10',
  'date_display' => '10 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Litigants are often surprised that their first appeal is heard by one judge while their neighbour\'s goes straight to two. Bench composition in the Delhi High Court is not administrative accident: statutes such as the Family Courts Act and the Commercial Courts Act mandate Division Benches for certain appeals, the Letters Patent creates the intra-court appeal from Single Judge to Division Bench, and the High Court\'s own rules and roster distribute the rest. Knowing the bench before filing shapes the memorandum, the interim strategy, and the route onwards to the Supreme Court.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Law', 'criminal-law.php' => 'Criminal Law', 'blog.php' => 'All Articles'],
  'faqs'         => [
    ['Which appeals must, by statute, be heard by two judges?', 'Two prominent examples: appeals from Family Court judgments under Section 19 of the Family Courts Act, 1984 (the MAT.APP.(F.C.) series) — Section 19(6) requires a bench of two or more judges; and appeals under the Commercial Courts Act, 2015 (RFA(COMM), FAO(COMM), EFA(COMM), and arbitration appeals routed through it), which go to the Commercial Appellate Division, constituted of Division Benches. Death sentence matters — confirmation references and the connected appeals — are likewise heard by at least two judges under the BNSS.'],
    ['What is an LPA and when does it lie?', 'The Letters Patent Appeal is the intra-court appeal from a judgment of a Single Judge to a Division Bench of the same High Court, preserved in Delhi under Clause X of the Letters Patent. Its commonest field is writ proceedings: an LPA lies from a Single Judge\'s judgment in a writ petition (subject to the settled exclusions, such as orders in criminal jurisdiction and, ordinarily, supervisory orders under Article 227). Statutes can exclude it — Section 100A CPC bars a further intra-court appeal where a Single Judge has decided an appeal.'],
    ['Where do ordinary civil appeals — RFA and FAO — go?', 'Regular First Appeals against decrees of district-level civil courts and First Appeals from Orders under Order 43 CPC are, as a general rule of distribution, heard on the appellate side by Single Judges, with the High Court Rules and the Chief Justice\'s roster governing allocation. Second appeals under Section 100 CPC are heard by Single Judges. By contrast, their commercial counterparts — RFA(COMM) and FAO(COMM) — are Division Bench matters because the Commercial Courts Act says so.'],
    ['Why does bench strength matter strategically?', 'It fixes the next tier. From a Single Judge in a writ matter, an LPA may be available — a full intra-court round before any Supreme Court petition. From a Division Bench, the realistic next step is a special leave petition under Article 136. It also affects interim practice (two judges must agree), the formality of hearings, and in commercial appeals the strict limitation and case-management discipline of the Commercial Appellate Division.'],
  ],
  'sources'      => [
    ['label' => 'Delhi High Court — Rules and appellate jurisdiction', 'url' => 'https://delhihighcourt.nic.in/'],
    ['label' => 'Family Courts Act, 1984 and Commercial Courts Act, 2015 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The quick map</h2>
<table class="law">
<tr><th>Appeal type (Delhi HC prefix)</th><th>From</th><th>Bench</th><th>Source of the rule</th></tr>
<tr><td>RFA</td><td>Decrees of civil courts</td><td>Single Judge (as distributed)</td><td>CPC S. 96; High Court Rules and roster</td></tr>
<tr><td>RSA</td><td>First appellate decrees</td><td>Single Judge</td><td>CPC S. 100</td></tr>
<tr><td>FAO</td><td>Appealable orders</td><td>Single Judge (as distributed)</td><td>CPC S. 104 / O. 43; Rules and roster</td></tr>
<tr><td>RFA(COMM) / FAO(COMM) / EFA(COMM)</td><td>Commercial Courts and Commercial Divisions</td><td>Division Bench</td><td>Commercial Courts Act, S. 13 — Commercial Appellate Division</td></tr>
<tr><td>MAT.APP.(F.C.)</td><td>Family Court judgments</td><td>Division Bench</td><td>Family Courts Act, S. 19(6)</td></tr>
<tr><td>LPA</td><td>Single Judge judgments (chiefly writ)</td><td>Division Bench</td><td>Letters Patent, Cl. X; subject to S. 100A CPC</td></tr>
<tr><td>CRL.A.</td><td>Sessions convictions etc.</td><td>Single Judge generally; two or more judges where the BNSS so requires, including death sentence matters</td><td>BNSS; High Court Rules</td></tr>
<tr><td>ARB.A. / arbitration appeals (S. 37)</td><td>Arbitration courts / Commercial Division</td><td>Commercial Appellate Division (DB) where the Commercial Courts Act routes them</td><td>A&amp;C Act S. 37 read with Commercial Courts Act S. 13</td></tr>
</table>
<p>The table states the ordinary pattern; the authoritative allocation is always the Delhi High Court Rules and the roster notified by the Chief Justice, which practitioners should verify for the matter in hand.</p>

<h2>Three structural ideas behind the table</h2>
<div class="tiles">
<div class="tile"><strong>Statutory Division Benches</strong><p>Where Parliament wanted appellate decisions of particular weight — family law outcomes, commercial money, capital sentences — it mandated plural benches. No roster can route these to one judge.</p></div>
<div class="tile"><strong>The intra-court appeal</strong><p>The LPA gives Delhi litigants a second look within the High Court itself from Single Judge judgments, principally in writ matters. Its boundaries — no LPA from criminal jurisdiction, none from a pure Article 227 order, none where Section 100A CPC bars it — are jurisdictional and fought at the threshold.</p></div>
<div class="tile"><strong>Roster for the rest</strong><p>Ordinary civil and criminal appellate work is distributed by the Rules and the roster. The distribution can change; the prefix on the cause list, not habit, is the safe guide.</p></div>
</div>

<h2>Practical consequences</h2>
<div class="check">
<p><strong>Drafting:</strong> a Division Bench memorandum in a commercial or matrimonial appeal should be built for two readers and a tighter clock — the Commercial Appellate Division works to statutory disposal timelines, and MAT.APP. benches expect focused challenges to findings rather than a re-run of the trial.</p>
<p><strong>Interim relief:</strong> before a DB, interim orders need two minds; counsel should be ready with the narrowest sustainable protection rather than the widest conceivable one.</p>
<p><strong>Mapping the route up:</strong> parties planning the litigation should count the tiers at the outset. A writ matter may travel Single Judge → LPA → SLP; a commercial appeal travels Commercial Court → Division Bench → SLP, with no intra-court stop; a Family Court decree goes straight to a Division Bench and then only to the Supreme Court.</p>
<p><strong>Objections:</strong> maintainability before the wrong bench strength is a genuine objection, not pedantry — an appeal filed as an FAO that belonged to the Commercial Appellate Division invites return and limitation complications.</p>
</div>

<div class="note">
<p>None of this affects where the appeal is <em>filed</em> — the Registry receives all — but it decides where it is <em>heard</em>, and sophisticated respondents scrutinise the label. When in doubt, the safer course is to characterise the dispute (commercial or not, Family Court or not, writ or supervisory) before choosing the appellate vehicle, because the vehicle chooses the bench.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
