<?php
$P = [
  'slug'         => 'lpa-delhi-high-court-maintainability.php',
  'title'        => 'When Does an LPA Lie in Delhi HC – Advocate Manish Jha',
  'meta'         => 'Letters Patent Appeals in the Delhi High Court: which single-judge orders can be appealed to a Division Bench, the writ-jurisdiction distinction, and the statutory bars.',
  'h1'           => 'The Letters Patent Appeal in the Delhi High Court: When It Lies and When It Is Barred',
  'crumb'        => 'LPA Maintainability',
  'kicker'       => 'Explainer · Appeals',
  'sub'          => 'The intra-court appeal from a Single Judge to a Division Bench is a creature of the Letters Patent and the Delhi High Court Act — and its maintainability turns on which jurisdiction the Single Judge was exercising.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Litigants often assume that every order of a Single Judge of the High Court can be carried to a Division Bench. The Letters Patent Appeal — the LPA — is narrower than that assumption. Its availability in Delhi depends on the source of the Single Judge\'s jurisdiction: original or appellate, writ under Article 226 or supervisory under Article 227, general law or a special statute with its own finality clause. This explainer sets out the working rules that determine whether an LPA is the right remedy, the traps that most commonly defeat maintainability, and the alternatives when the LPA door is shut.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Law', 'business-corporate-law.php' => 'Business & Corporate', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['Does an LPA lie against every writ order of a Single Judge?', 'No. The settled distinction is between Article 226 and Article 227: a judgment of a Single Judge exercising writ jurisdiction under Article 226 is ordinarily appealable intra-court, but an order passed in the supervisory jurisdiction under Article 227 is not. Where a petition invokes both, courts examine the substance of the relief and of the order actually passed, not the cause-title label.'],
    ['Is an LPA available against an order of a Single Judge deciding a first appeal?', 'Generally no. The Letters Patent scheme does not permit a second intra-court appeal against a judgment rendered by a Single Judge in the exercise of appellate jurisdiction over district court decrees, absent the historical certification route. The remedy against such appellate judgments lies, where at all, before the Supreme Court.'],
    ['Which statutes bar LPAs expressly?', 'Several. Section 13(2) of the Commercial Courts Act, 2015 confines appeals in commercial matters to those provided by the Act itself, overriding the Letters Patent. Section 19 of the Family Courts Act, 1984 provides its own appellate route. Arbitration matters are governed exclusively by Sections 37 and 50 of the 1996 Act. Each such special scheme displaces the LPA to the extent it occupies the field.'],
    ['What is the limitation period for an LPA in Delhi?', 'Thirty days from the judgment appealed against, under the Delhi High Court Rules governing Letters Patent Appeals, with condonation available on sufficient cause. The appeal is heard by a Division Bench, and interim protection does not continue automatically — a specific stay application should accompany the memorandum.'],
  ],
  'sources'      => [
    ['label' => 'Delhi High Court Act, 1966 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court — Rules and Practice', 'url' => 'https://delhihighcourt.nic.in/'],
    ['label' => 'Commercial Courts Act, 2015 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Where the LPA comes from</h2>
<p>The Delhi High Court, constituted by the Delhi High Court Act, 1966, inherited the Letters Patent of the Lahore High Court, whose Clause 10 provides the intra-court appeal: an appeal from the judgment of one Judge of the Court to a Division Bench, subject to the Clause's own exceptions. The Act preserves this structure, and the High Court's Rules regulate its exercise. The result is a remedy that exists not because the CPC grants it but because the Court's constitutional charter does — which is precisely why special statutes can, and do, exclude it.</p>

<h2>The core maintainability grid</h2>
<table class="law">
  <tr><th>Single Judge acting in…</th><th>LPA to Division Bench?</th></tr>
  <tr><td>Original civil jurisdiction (suits on the Original Side)</td><td>Yes, against judgments — subject to the Commercial Courts Act where the suit is commercial</td></tr>
  <tr><td>Writ jurisdiction under Article 226</td><td>Yes, ordinarily</td></tr>
  <tr><td>Supervisory jurisdiction under Article 227</td><td>No</td></tr>
  <tr><td>Appellate jurisdiction (RFA/RSA from district courts)</td><td>No — no second intra-court appeal</td></tr>
  <tr><td>Criminal jurisdiction</td><td>No — the Letters Patent excepts criminal jurisdiction</td></tr>
  <tr><td>Arbitration jurisdiction (Ss. 34, 11, etc.)</td><td>No — the 1996 Act's appeal scheme is exhaustive</td></tr>
</table>

<h2>The 226/227 borderland</h2>
<p>The most litigated maintainability question is the writ borderland. Petitions challenging orders of tribunals and subordinate courts are frequently styled under Articles 226 and 227 together, and the Single Judge's order may not announce which power it exercised. The working test looks to substance: what relief was sought, against whom, and what did the Single Judge actually do? An order quashing administrative action on public-law grounds bears the stamp of Article 226 and supports an appeal; an order merely correcting a subordinate court within supervisory limits bears the stamp of Article 227 and does not. Drafting matters here — a petitioner who may one day want an intra-court appeal should frame and argue the petition under Article 226 wherever the facts honestly permit.</p>

<h2>Statutory exclusions: the modern battleground</h2>
<div class="check">
<ul>
  <li><strong>Commercial Courts Act, 2015:</strong> Section 13(2) bars appeals — including Letters Patent appeals — otherwise than in accordance with the Act. Appeals from Commercial Division orders lie only as Section 13 read with its proviso permits (broadly, judgments, decrees and the enumerated Order XLIII and arbitration-related orders).</li>
  <li><strong>Family Courts Act, 1984:</strong> Section 19 creates its own appeal to the High Court and excludes other routes in its field.</li>
  <li><strong>Arbitration and Conciliation Act, 1996:</strong> Sections 37 and 50 are a complete code; no LPA lies where they are silent.</li>
  <li><strong>Service and tribunal statutes:</strong> where a statute channels challenges through a tribunal and onward by its own route, the LPA cannot be used to re-enter the High Court by the side door.</li>
</ul>
</div>

<h2>Practical sequencing when the LPA is doubtful</h2>
<p>Because a wrongly chosen LPA consumes limitation for the right remedy, careful counsel resolve maintainability before filing, not after objection. Where the order under challenge is arguably under Article 227 or within a special statute's exclusive scheme, the candidates are: a petition for special leave to the Supreme Court; the special statute's own appeal; or, for interlocutory grievances, awaiting the final order and appealing that. Where doubt is genuine, the memorandum should plead the jurisdictional facts supporting Article 226 characterisation with precision — the Division Bench's first question will be exactly that.</p>

<div class="note">
<p><strong>Note:</strong> This explainer summarises working principles of intra-court appellate practice in the Delhi High Court for general information. Maintainability is acutely fact-specific, and the governing instruments — the Letters Patent, the Delhi High Court Act and the special statute concerned — must be read against the particular order in each case.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
