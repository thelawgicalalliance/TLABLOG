<?php
$P = [
  'slug'         => 'section-10-commercial-courts-arbitration-forum.php',
  'title'        => 'Which Court Hears Your Arbitration? – Advocate Manish Jha',
  'meta'         => 'Section 10 of the Commercial Courts Act decides where arbitration applications go in Delhi — Commercial Division, Commercial Court or ordinary civil court.',
  'h1'           => 'Section 10 of the Commercial Courts Act: Finding the Right Court for Arbitration Applications in Delhi',
  'crumb'        => 'Arbitration Forum Finder',
  'kicker'       => 'Commercial & Corporate · 28 October 2026',
  'sub'          => 'A Section 9 petition filed in the wrong registry loses weeks; a Section 34 filed in the wrong court can lose the limitation race altogether. This explainer walks through Section 10 of the Commercial Courts Act, 2015 and how it distributes arbitration applications in Delhi between the High Court\'s Commercial Division, the district Commercial Courts and the ordinary civil side.',
  'date'         => '2026-10-28',
  'date_display' => '28 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Arbitration applications — interim measures under Section 9, challenges under Section 34, appeals under Section 37, enforcement under Section 36 — do not float free; each must land in a specific court, and in Delhi the landing zone is fixed by the interaction of the Arbitration and Conciliation Act, 1996, the Commercial Courts Act, 2015 and the pecuniary jurisdiction of the Delhi High Court\'s ordinary original civil side. Filing in the wrong forum is among the most common, and most avoidable, errors in Delhi arbitration practice. This piece sets out the sorting rules.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notice Replies', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What does Section 10 of the Commercial Courts Act provide?', 'It channels arbitration proceedings that concern commercial disputes of a specified value. Applications and appeals arising from an international commercial arbitration go to the Commercial Division where the High Court has one. Those arising from other arbitrations, which would otherwise lie before any principal civil court of original jurisdiction in a district, go to the Commercial Court exercising territorial jurisdiction; where they would lie before a High Court with ordinary original civil jurisdiction — as in Delhi — they go to its Commercial Division.'],
    ['How does this play out in Delhi in money terms?', 'Delhi is one of the few places where the High Court itself exercises ordinary original civil jurisdiction, currently for matters above Rs 2 crore. Broadly: arbitration applications in commercial disputes where the specified value exceeds Rs 2 crore go to the Delhi High Court\'s Commercial Division; those at or below that threshold but of commercial-dispute character and meeting the Rs 3 lakh floor of the Commercial Courts Act go before the district-level Commercial Courts; and matters below the specified-value floor travel on the ordinary civil side. International commercial arbitrations go to the High Court regardless.'],
    ['Does the arbitration agreement\'s choice of "courts at Delhi" settle the question?', 'It settles territory, not level. A forum-selection clause can choose Delhi over another city where Delhi otherwise has jurisdiction, but which Delhi court — Commercial Division, Commercial Court or civil judge — remains governed by the statutes and the specified value. Parties cannot contract a Rs 50 lakh domestic arbitration into the High Court, or a Rs 5 crore one out of it.'],
    ['Why does Section 42 of the Arbitration Act matter here?', 'Section 42 anchors all subsequent applications arising out of the same arbitration agreement to the court first approached with an application under Part I. A mistaken first filing can therefore have gravitational consequences for the whole life of the arbitration, which is why the forum analysis deserves care at the very first application — usually the Section 9 petition.'],
  ],
  'sources'      => [
    ['label' => 'Commercial Courts Act, 2015 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2156'],
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
  ],
];
$BODY = <<<'HTML'
<h2>Three statutes, one sorting problem</h2>
<p>The Arbitration and Conciliation Act defines "Court" in Section 2(1)(e) as the principal civil court of original jurisdiction in a district — including a High Court exercising ordinary original civil jurisdiction — and, for international commercial arbitration, the High Court. The Commercial Courts Act then overlays a second grid: commercial disputes of a specified value belong to Commercial Courts at the district level and Commercial Divisions in chartered High Courts. Section 10 is the junction where the two grids meet for arbitration matters, and Section 15 sweeps pending matters onto the commercial track. In Delhi the picture has a third layer: the High Court\'s own ordinary original civil jurisdiction, which begins above Rs 2 crore.</p>

<h2>The sorting table</h2>
<table class="law">
<tr><th>Nature of arbitration</th><th>Specified value</th><th>Forum in Delhi</th></tr>
<tr><td>International commercial arbitration</td><td>Any commercial-dispute value</td><td>Commercial Division, Delhi High Court</td></tr>
<tr><td>Domestic arbitration</td><td>Above Rs 2 crore</td><td>Commercial Division, Delhi High Court (ordinary original civil jurisdiction)</td></tr>
<tr><td>Domestic arbitration</td><td>Rs 3 lakh up to Rs 2 crore</td><td>Commercial Court, district level</td></tr>
<tr><td>Domestic arbitration, non-commercial or below the floor</td><td>Below the specified-value floor</td><td>Ordinary civil court per the A&amp;C Act\'s definition</td></tr>
</table>
<p>Two refinements keep the table honest. First, the dispute must be a <em>commercial dispute</em> within Section 2(1)(c) of the Commercial Courts Act for the commercial track to apply at all; arbitration does not by itself make a dispute commercial. Second, the specified value is computed under Section 12 of that Act — for arbitration matters, by the value of the subject matter of the arbitration — and should be stated and justified in the application itself.</p>

<h2>Common filing errors</h2>
<div class="tiles">
<div class="tile"><strong>Chasing the clause, not the statute.</strong> An exclusive-jurisdiction clause chooses a place; the statutes choose the level. Both questions must be answered before filing.</div>
<div class="tile"><strong>Forgetting Section 42.</strong> The first Part I application fixes the court for everything that follows under the same agreement. A hurried Section 9 in a convenient-but-wrong forum will haunt the Section 34.</div>
<div class="tile"><strong>Misvaluing the subject matter.</strong> Understating value to stay in a faster court, or overstating it to reach the High Court, invites a return of the petition and a limitation scramble.</div>
<div class="tile"><strong>Treating appeals as free-standing.</strong> Section 37 appeals in commercial arbitrations follow the Commercial Courts Act\'s appellate architecture — to the Commercial Appellate Division of the High Court — not the general appellate provisions.</div>
</div>

<h2>Why the forum question rewards early work</h2>
<div class="note">
<p>Limitation is unforgiving in arbitration litigation: Section 34 allows three months with a strictly capped extension, and time spent before a wrong forum is recoverable, if at all, only through the discretionary shelter of Section 14 of the Limitation Act. The inexpensive discipline is to decide the forum when the arbitration clause is invoked — identify whether the dispute is commercial, compute and record the specified value, check whether any earlier Part I application has already anchored a court under Section 42, and only then draft. Ten minutes with the sorting table at the start of a brief routinely saves a client months at its end.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
