<?php
$P = [
  'slug'         => 'section-42-arbitration-which-court-jurisdiction.php',
  'title'        => 'Section 42: One Court for Arbitration – Advocate Manish Jha',
  'meta'         => 'Section 42 of the Arbitration Act anchors all court applications for an arbitration in the court first approached. How the rule works, and what it does not cover.',
  'h1'           => 'First Court Seized, Only Court Seized: Section 42 of the Arbitration Act',
  'crumb'        => 'Arbitration — Section 42',
  'kicker'       => 'Practice Explainer · Arbitration',
  'sub'          => 'Section 42 of the Arbitration and Conciliation Act, 1996 prevents parallel court fronts: once a Part I application is made to a competent court, that court alone hears every subsequent application arising out of the same arbitration agreement.',
  'date'         => '2026-09-17',
  'date_display' => '17 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Arbitrations generate court work in instalments — an interim measures application before the tribunal is formed, a challenge to the award after it is delivered, execution after that. Left unregulated, each instalment could land in a different court: the seat court, the court where assets lie, the court where a party resides. Section 42 of the Arbitration and Conciliation Act, 1996 exists to stop precisely that. It provides that, notwithstanding anything contained elsewhere in Part I or in any other law, where an application under Part I has been made in a Court, that Court alone shall have jurisdiction over the arbitral proceedings, and all subsequent applications arising out of the arbitration agreement and the proceedings must be made in that Court and no other. For commercial parties in Delhi, understanding what triggers the section — and what does not — is basic litigation hygiene.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What does Section 42 actually fix?', 'Forum consistency. The first application under Part I of the Act made to a competent court anchors exclusive jurisdiction there for the entire life of that arbitration — later applications under Sections 9, 14, 29A, 34 or 36 arising out of the same agreement must go to the same court.'],
    ['Does a Section 11 appointment application trigger Section 42?', 'No. Section 11 applications are made to the High Court or the Supreme Court (or their designates) in their special statutory capacity, not to a "Court" as defined in Section 2(1)(e) of the Act. They therefore do not anchor jurisdiction under Section 42 for subsequent applications.'],
    ['What if the first application was filed in a court without jurisdiction?', 'An application made to a court that lacks jurisdiction does not attract Section 42 — the section presupposes a competent court. Parties cannot manufacture an anchor by filing first in a convenient but incompetent forum; objections to jurisdiction should be raised at the earliest.'],
    ['How does the seat of arbitration interact with Section 42?', 'The designation of a seat generally operates like an exclusive jurisdiction clause: the courts of the seat supervise the arbitration. In practice the two doctrines work together — the seat identifies the competent court, and Section 42 then holds all Part I applications in the first such court approached. Careful drafting of the seat clause avoids most disputes in this area.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The text and its purpose</h2>
<p>Section 42 opens with a double non-obstante — "notwithstanding anything contained elsewhere in this Part or in any other law for the time being in force" — and then states the rule: where with respect to an arbitration agreement any application under Part I has been made in a Court, that Court alone shall have jurisdiction over the arbitral proceedings, and all subsequent applications arising out of that agreement and the proceedings shall be made in that Court and in no other Court. The mischief it targets is forum-shopping in instalments: a party obtaining interim relief in one district, then challenging the award in another, while execution is resisted in a third.</p>

<h2>What counts as the anchoring application</h2>
<table class="law">
<tr><th>Application</th><th>Does it anchor jurisdiction under Section 42?</th></tr>
<tr><td>Section 9 (interim measures) filed in a competent court</td><td>Yes. This is the most common anchor — a pre-arbitration Section 9 fixes the court for the life of the reference.</td></tr>
<tr><td>Section 34 (setting aside) as the first court application</td><td>Yes. If no earlier Part I application was made, the Section 34 court becomes the exclusive forum for subsequent applications.</td></tr>
<tr><td>Section 11 (appointment of arbitrator)</td><td>No. It is made to the High Court or Supreme Court in a distinct statutory capacity, not to a "Court" under Section 2(1)(e), and does not anchor.</td></tr>
<tr><td>Section 8 (reference by a judicial authority)</td><td>No. The application is addressed to whatever judicial authority is seized of the suit; it is not a Part I application to a "Court" in the Section 42 sense.</td></tr>
<tr><td>Application filed in a court lacking jurisdiction</td><td>No. Section 42 presupposes a competent court; an incompetent filing anchors nothing.</td></tr>
</table>
<div class="note"><p>"Court" for domestic arbitrations means the principal civil court of original jurisdiction in a district, including a High Court exercising ordinary original civil jurisdiction — in Delhi, the District Judge (Commercial Court) or the High Court of Delhi depending on the specified value and subject matter. For international commercial arbitrations, it means the High Court.</p></div>

<h2>Working the rule in practice</h2>
<div class="tiles">
<div class="tile"><h4>Plan the first filing</h4><p>The first Part I application is a jurisdictional commitment. Choose the forum as if choosing it for the Section 34 challenge and execution resistance to come — because you are.</p></div>
<div class="tile"><h4>Audit the opponent\'s anchor</h4><p>Faced with a filing in an inconvenient court, examine competence: pecuniary value, subject-matter, and the seat. An anchor in an incompetent court can and should be dislodged early.</p></div>
<div class="tile"><h4>Draft the seat clause</h4><p>A clean seat designation with exclusive jurisdiction language pre-empts most Section 42 skirmishes: the competent court is identified before any dispute begins.</p></div>
<div class="tile"><h4>Mind the exceptions</h4><p>Do not assume a Section 11 or Section 8 proceeding has fixed the forum — it has not. The anchor is the first true Part I application in a competent Court.</p></div>
</div>

<h2>The Delhi dimension</h2>
<p>Delhi\'s twin-tier commercial structure makes the section practically important. Arbitration applications below the High Court\'s ordinary original threshold travel to the District Judge (Commercial Courts), while higher-value matters go to the High Court of Delhi; a Section 9 filed at either level fixes that level — and that court — for the arbitration\'s remaining court work, subject always to the competence requirement. Parties who file the first application casually discover the consequences at the Section 34 stage, when the convenient forum is no longer available. Section 42 rewards the litigant who thinks about the last application while drafting the first.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
