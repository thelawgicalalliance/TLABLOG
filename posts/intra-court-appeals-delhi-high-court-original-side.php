<?php
$P = [
  'slug'         => 'intra-court-appeals-delhi-high-court-original-side.php',
  'title'        => 'Intra-Court Appeals in Delhi HC – Advocate Manish Jha',
  'meta'         => 'FAO(OS), RFA(OS) and the Commercial Appellate Division: how appeals from a Single Judge of the Delhi High Court to a Division Bench actually work.',
  'h1'           => 'From Single Judge to Division Bench: The Architecture of Intra-Court Appeals on the Delhi High Court\'s Original Side',
  'crumb'        => 'Appeals — Delhi High Court',
  'kicker'       => 'Practice Explainer · Appellate Practice',
  'sub'          => 'The Delhi High Court is one of the few High Courts with ordinary original civil jurisdiction — which means a losing party\'s first appeal often lies within the same building. Mapping FAO(OS), RFA(OS), their commercial variants, and the appeals the statute has shut.',
  'date'         => '2026-10-16',
  'date_display' => '16 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Because the Delhi High Court exercises ordinary original civil jurisdiction in suits above its pecuniary threshold — currently rupees two crore — a substantial volume of first-instance litigation is decided by Single Judges of the High Court itself. The appellate structure above them is internal: appeals go to a Division Bench of the same court. These intra-court appeals travel under distinct labels — RFA(OS) from judgments and decrees, FAO(OS) from appealable orders, and their (COMM) variants under the Commercial Courts Act, 2015 — and each label carries its own source of right, limitation and limits. Knowing which door to knock, and which doors the legislature has closed, is half of original-side appellate practice.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court Practice', 'business-corporate-law.php' => 'Business & Corporate Law', 'civil-law.php' => 'Civil Law', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['What is the difference between RFA(OS) and FAO(OS)?', 'RFA(OS) is the regular first appeal from a judgment and decree of a Single Judge exercising original civil jurisdiction. FAO(OS) is the appeal from orders — principally those made appealable by Order XLIII of the CPC and by the Letters Patent as applied to the court — such as orders on interim injunctions, appointment of receivers or setting aside ex parte proceedings.'],
    ['How do commercial matters change the picture?', 'For commercial disputes of specified value, Section 13 of the Commercial Courts Act, 2015 governs: appeals from the Commercial Division of the High Court lie to the Commercial Appellate Division within sixty days, but only from judgments, decrees and the orders specifically enumerated — Order XLIII orders and Section 37 arbitration orders. Section 13(2) shuts every other appellate route, so many interlocutory orders in commercial suits are simply unappealable.'],
    ['Do arbitration matters get an intra-court appeal?', 'Only where Section 37 of the Arbitration and Conciliation Act, 1996 allows it. An appeal lies, for instance, from an order setting aside or refusing to set aside an award under Section 34, or granting or refusing interim measures under Section 9 — and in commercial arbitrations the FAO(OS)(COMM) goes to the Commercial Appellate Division. Orders outside the Section 37 list are not appealable, and a second appeal is barred.'],
    ['What about writ matters — is that not the LPA?', 'Yes. Appeals from a Single Judge\'s judgment in writ proceedings travel as Letters Patent Appeals, a separate species with its own rules about which writ orders are appealable. This article concerns the civil original side — suits and commercial matters — where the RFA(OS)/FAO(OS) framework, not the LPA, does the work.'],
  ],
  'sources'      => [
    ['label' => 'Commercial Courts Act, 2015 — Section 13 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2156'],
    ['label' => 'Delhi High Court Act, 1966 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1626'],
  ],
];
$BODY = <<<'HTML'
<h2>Why Delhi has internal appeals at all</h2>
<p>Most High Courts receive civil cases only on appeal from the district judiciary. Delhi is different: the Delhi High Court Act, 1966 preserved ordinary original civil jurisdiction for suits above a pecuniary threshold, which has been raised over the years to rupees two crore. A money suit for three crore is therefore tried by a Single Judge of the High Court sitting as a court of first instance. The appellate tier that would normally be the High Court must then be found within the High Court — a Division Bench — through the Letters Patent as applied to Delhi and the appellate provisions of the CPC. Hence the (OS) suffix: Original Side.</p>

<h2>The four main vehicles</h2>
<div class="tiles">
<div class="tile"><strong>RFA(OS)</strong><p>First appeal from a Single Judge\'s judgment and decree in an ordinary (non-commercial) original-side suit, to a Division Bench, with full reappraisal of fact and law.</p></div>
<div class="tile"><strong>FAO(OS)</strong><p>Appeal from appealable orders of the Single Judge — the Order XLIII catalogue and orders appealable under the Letters Patent — typically interim injunction and receiver orders.</p></div>
<div class="tile"><strong>RFA(OS)(COMM) / FAO(OS)(COMM)</strong><p>The commercial variants under Section 13(1A) of the Commercial Courts Act: appeals from the Commercial Division to the Commercial Appellate Division, within sixty days, confined to the enumerated orders.</p></div>
<div class="tile"><strong>FAO(OS) in arbitration</strong><p>Appeals permitted by Section 37 of the Arbitration and Conciliation Act — and only those — from a Single Judge\'s arbitration orders.</p></div>
</div>

<h2>The closed corridors</h2>
<p>The modern trend is restrictive, and two closures matter most in practice. First, Section 13(2) of the Commercial Courts Act bars appeals from orders of the Commercial Division otherwise than in accordance with the Act — so case-management directions, discovery orders, amendment orders and most procedural rulings in commercial suits cannot be appealed at all; grievances must wait for the final judgment or, exceptionally, be tested in the Supreme Court under Article 136. Second, in arbitration-related matters the Section 37 list is exhaustive and expressly bars second appeals, and the general law gives no intra-court appeal where a Single Judge acts in a jurisdiction whose statute excludes it. The practical consequence: before drafting an appeal from any original-side order, counsel must identify the precise source of the right of appeal — CPC, Letters Patent, Commercial Courts Act or Section 37 — because filing under the wrong label invites an office objection at best and dismissal as not maintainable at worst.</p>

<h2>Limitation, stay and strategy</h2>
<p>Limitation differs by vehicle: sixty days governs commercial appeals under Section 13, while the general original-side appeals follow the Limitation Act periods applicable to appeals to a High Court. In commercial appeals, condonation discipline is strict — the sixty days are treated as a real boundary, consistent with the Act\'s expedition purpose. On stay, an appeal does not operate as one automatically: a money decree of the Commercial Division will be executed unless the Appellate Division grants a stay, usually on deposit or security. Strategically, the narrowness of the interlocutory appeal routes pushes original-side litigation toward two pressure points — the interim injunction hearing (appealable) and the trial itself — and parties should assume that most procedural rulings in between will never see a Division Bench.</p>

<div class="note">
<p>This is a general explainer on intra-court appellate structure on the civil original side of the Delhi High Court and is not legal advice. Maintainability questions are label-sensitive and fact-specific; the governing provisions include the Delhi High Court Act, 1966, the Letters Patent as applicable to Delhi, the CPC, the Commercial Courts Act, 2015 and Section 37 of the Arbitration and Conciliation Act, 1996.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
