<?php
$P = [
  'slug'         => 'section-26-arbitration-tribunal-appointed-experts.php',
  'title'        => 'The Tribunal\'s Own Expert: Section 26 – Advocate Manish Jha',
  'meta'         => 'Section 26 of the Arbitration Act lets the tribunal appoint its own expert, require party cooperation, and have the expert testify. How the power works in practice.',
  'h1'           => 'When the Arbitrator Needs an Engineer: Experts Under Section 26',
  'crumb'        => 'Arbitration: Section 26',
  'kicker'       => 'Procedure Explainer · Arbitration',
  'sub'          => 'Construction delays, share valuations, software defects — arbitral disputes often turn on questions no lawyer-arbitrator can resolve unaided. Section 26 of the Arbitration and Conciliation Act, 1996 supplies the answer: a tribunal-appointed expert, with party safeguards built in.',
  'date'         => '2026-11-15',
  'date_display' => '15 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Party-appointed experts arrive with the case of the party that pays them. Tribunals know it, and the Arbitration and Conciliation Act, 1996 gives them an institutional alternative: Section 26 empowers the arbitral tribunal — unless the parties have agreed otherwise — to appoint one or more experts to report on specific issues, to require the parties to give the expert information and access, and to have the expert participate in a hearing where the parties may question him. Used well, the provision shortens technical disputes; used carelessly, it creates grounds of challenge. This explainer covers both.</p>',
  'related'      => ['business-corporate-law.php' => 'Business &amp; Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Can parties exclude tribunal-appointed experts?', 'Yes. Section 26 opens with "unless otherwise agreed by the parties" — the power is a default, not a mandate. Parties who want technical issues decided solely on their own expert evidence can so provide in the arbitration clause or procedural order. Institutional rules adopted by the parties may also shape or supplement the power.'],
    ['What must the parties do once an expert is appointed?', 'Section 26(1)(b) lets the tribunal require a party to give the expert any relevant information, or to produce or provide access to relevant documents, goods or property for inspection. Refusal is a default the tribunal may weigh — and under the Act&rsquo;s default provisions the proceedings continue and the award can be made on the material available.'],
    ['Is the expert&rsquo;s report binding on the tribunal?', 'No. The report is evidence, not adjudication. The decision remains the tribunal&rsquo;s own, and an award that simply outsources the dispute to the expert without the tribunal&rsquo;s independent evaluation invites challenge. The safeguards in Section 26(2) and (3) — the hearing, questioning, and access to the expert&rsquo;s materials — exist precisely so the report can be tested like any other evidence.'],
    ['Can the parties test the expert?', 'Yes, twice over. Under Section 26(2), if a party requests it (or the tribunal considers it necessary), the expert must participate in an oral hearing after delivering the report, where the parties may put questions and present their own expert witnesses on the points in issue. Under Section 26(3), on request, the expert must make available for examination the documents, goods or property in his possession that he used for the report.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The provision in outline</h2>
<div class="flow">
  <div class="fstep"><strong>Appointment — Section 26(1)(a).</strong> The tribunal may appoint one or more experts to report to it on specific issues it determines. Specificity is the discipline: the order of appointment should frame the questions, not hand over the dispute.</div>
  <div class="fstep"><strong>Cooperation — Section 26(1)(b).</strong> The tribunal may require a party to give the expert relevant information, or produce or provide access to documents, goods or other property for inspection — the site visit, the books, the source code.</div>
  <div class="fstep"><strong>Testing — Section 26(2).</strong> After the report, if a party requests or the tribunal considers it necessary, the expert participates in an oral hearing where parties may question him and field their own expert witnesses on the points in issue.</div>
  <div class="fstep"><strong>Transparency — Section 26(3).</strong> On request, the expert makes available to the parties the documents, goods or property in his possession which he was provided to prepare the report.</div>
</div>

<h2>Where tribunal experts earn their fee</h2>
<table class="law">
  <tr><th>Dispute type</th><th>Typical Section 26 use</th></tr>
  <tr><td>Construction and infrastructure</td><td>Delay analysis, measurement and quality verification, valuation of extra items — often by joint inspection of the works.</td></tr>
  <tr><td>Shareholder and business valuation disputes</td><td>Independent valuation where the parties&rsquo; experts diverge by multiples rather than margins.</td></tr>
  <tr><td>Technology contracts</td><td>Assessment of deliverables, defects and compliance against specifications, including inspection of code and systems.</td></tr>
  <tr><td>Accounts-heavy claims</td><td>Reconciliation of running accounts, interest computations and audit of claimed costs.</td></tr>
</table>

<h2>Safeguards that keep the award safe</h2>
<p>Because the expert is the tribunal&rsquo;s own, the dangers are of delegation and of asymmetric information. Three disciplines protect the eventual award. First, a precise mandate: issues framed in the procedural order, agreed where possible, with a timeline and fee arrangement settled in advance. Second, symmetrical communication: everything the expert receives from one party goes to the other; site inspections happen on notice to both; the report is circulated in full. Third, a real opportunity to test: the Section 26(2) hearing is the parties&rsquo; statutory right on request, and declining it to save time is false economy — an award resting on an untested report is an award carrying avoidable risk under Section 34&rsquo;s due-process grounds, since each party must be given a full opportunity to present its case.</p>

<h2>Practice notes</h2>
<div class="check">
  <p>Address Section 26 at the first procedural hearing: decide whether the clause or institutional rules modify it, whether a tribunal expert is likely, and how costs of the expert will be shared and ultimately allocated.</p>
  <p>Draft the expert&rsquo;s questions the way issues are framed — narrow, answerable, and tied to the pleadings — and resist mandates that ask the expert who should win.</p>
  <p>Treat cooperation duties seriously: obstruction of inspections reads badly, is recorded, and shifts the tribunal&rsquo;s factual assumptions against the obstructing party.</p>
  <p>Keep party-appointed experts in play: Section 26 expressly contemplates them testifying on the points in issue, and the strongest challenges to a tribunal expert&rsquo;s report are built by a party&rsquo;s own expert working from the Section 26(3) materials.</p>
</div>
<div class="note">This explainer describes the statutory default under the 1996 Act for general information. Institutional rules and party agreements can and do vary the framework, and the procedural orders in each arbitration govern the specifics.</div>
HTML;
include __DIR__ . '/post-layout.php';
