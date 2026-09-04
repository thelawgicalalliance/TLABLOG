<?php
$P = [
  'slug'         => 'interim-partial-awards-arbitration-act.php',
  'title'        => 'Interim & Partial Awards – Advocate Manish Jha',
  'meta'         => 'Interim and partial awards under Section 31(6) of the Arbitration Act — how they differ from Section 17 orders, and how each is enforced or challenged.',
  'h1'           => 'Interim and Partial Awards in Arbitration: Uses, Enforcement and Challenge',
  'crumb'        => 'Interim & Partial Awards',
  'kicker'       => 'Practice Guide · 4 September 2026',
  'sub'          => 'An arbitral tribunal need not decide everything at once — and what it decides finally, even mid-way, is an award with all that follows.',
  'date'         => '2026-09-04',
  'date_display' => '4 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Arbitration is usually imagined as a single arc ending in one final award. In practice, the Arbitration and Conciliation Act, 1996 permits the tribunal to decide the dispute in instalments: Section 31(6) empowers it to make an interim arbitral award on any matter on which it may make a final award. Used well, interim and partial awards shorten proceedings and unlock admitted amounts years early. Used carelessly, they multiply challenges. This article explains the instrument, its distinction from procedural orders, and the enforcement and limitation consequences that flow from calling something an "award".</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What is the difference between an interim award and a Section 17 order?', 'Finality of adjudication. A Section 17 order grants interim protection — security, preservation, injunctions — pending the case, and can be varied as circumstances change. An interim award under Section 31(6) conclusively decides some part of the dispute: liability, limitation, an admitted sum. The award is enforceable and challengeable like any award; the order is enforceable as an order of court but decides nothing finally.'],
    ['Can an interim award be challenged immediately?', 'Yes — and it usually must be. An interim award is an arbitral award within Section 2(1)(c), so a setting-aside application under Section 34 lies against it, and the limitation of three months (plus the condonable thirty days) runs from its receipt. A party that waits for the final award to attack the interim one risks being told the challenge is time-barred.'],
    ['When are partial awards most useful?', 'Where an admitted or clearly established component of the claim can be severed — admitted running-account balances, invoices acknowledged in writing, a distinct claim head ripe for decision — and where threshold issues such as limitation or the existence of the contract can dispose of large parts of the case early.'],
    ['Are there risks in splitting the case?', 'Splitting badly creates overlap: findings in the interim award that entangle undecided issues invite challenges and inconsistency. Tribunals therefore sever only issues that are genuinely independent, and record precisely what stands decided and what remains open.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The statutory foundation</h2>
<p>Three provisions carry the scheme. Section 2(1)(c) defines "arbitral award" to include an interim award. Section 31(6) authorises the tribunal, at any time during the proceedings, to make an interim arbitral award on any matter with respect to which it may make a final arbitral award. And Section 32 makes clear that the proceedings terminate only with the final award — so the tribunal remains seized of the rest of the dispute after deciding a part. The nomenclature varies — "interim award", "partial award", "first partial final award" — but the legal test is uniform: has some issue between the parties been finally determined? If yes, the instrument is an award whatever its label; if it merely regulates procedure or grants provisional protection, it is not.</p>

<h2>What can sensibly be decided early</h2>
<div class="tiles">
  <div class="tile"><strong>Admitted amounts.</strong> Balances confirmed in writing, invoices never disputed, retention money withheld without demur — an interim award converts these into enforceable money relief while the contested claims proceed.</div>
  <div class="tile"><strong>Threshold defences.</strong> Limitation, accord and satisfaction, or the validity of termination can be decided as preliminary issues; a partial award either ends the case or clears the underbrush.</div>
  <div class="tile"><strong>Liability before quantum.</strong> The classic bifurcation: a first award on liability, a second on figures — common in construction and supply disputes with heavy quantification evidence.</div>
  <div class="tile"><strong>Severable claim heads.</strong> Where one contract generates distinct claims — price escalation, delay damages, wrongful encashment — a ripe head can be awarded without waiting for the rest.</div>
</div>

<h2>Consequences of the "award" label</h2>
<table class="law">
  <tr><th>Feature</th><th>Interim / partial award</th><th>Section 17 order</th></tr>
  <tr><td>Nature</td><td>Final adjudication of the issue decided</td><td>Provisional protection, variable</td></tr>
  <tr><td>Challenge</td><td>Section 34, within its strict limitation</td><td>Appeal under Section 37(2)(b)</td></tr>
  <tr><td>Enforcement</td><td>Section 36, as a decree, once the challenge window runs</td><td>Enforceable as an order of the court</td></tr>
  <tr><td>Form requirements</td><td>Section 31 — writing, signature, reasons, date and place</td><td>Order requirements only</td></tr>
  <tr><td>Effect on tribunal</td><td>Functus officio on the decided issue</td><td>Tribunal may modify</td></tr>
</table>
<p>The limitation point deserves emphasis. Because the Section 34 clock runs from receipt of each award, interim awards fragment the challenge timetable. Parties must calendar each award separately; consolidating grievances for one omnibus challenge at the end is a recognised route to losing them.</p>

<div class="note"><p>Drafting practice for tribunals and counsel alike: an interim award should self-identify as an award, comply fully with Section 31's formal requirements, and delineate with precision the issues decided and those reserved. Ambiguity about finality is the seed of most litigation over these instruments.</p></div>

<h2>Strategic use in Delhi-seated arbitrations</h2>
<p>For claimants, an application inviting the tribunal to award admitted amounts under Section 31(6) is one of the most underused tools in domestic arbitration — cash flow arrives years before the final award, and respondents lose the leverage of delay. For respondents, a preliminary award on limitation or maintainability can spare the cost of a full merits hearing. Either way, the enforcement court and the challenge court in a Delhi-seated arbitration will ordinarily be the Commercial Courts or the High Court of Delhi depending on the specified value and the parties, and the discipline of the Commercial Courts regime extends to these satellite proceedings.</p>

<h2>Takeaways</h2>
<div class="check">
  <p>Substance over label: final determination of an issue makes an award, whatever it is called.</p>
  <p>Challenge interim awards when received — the Section 34 clock does not wait.</p>
  <p>Seek early awards on admitted sums; resist entangled, overlapping splits.</p>
  <p>Ensure every partial award records exactly what is decided and what remains.</p>
</div>
<p>This article is general information about arbitration practice and is not legal advice in any individual matter.</p>
HTML;
include __DIR__ . '/post-layout.php';
