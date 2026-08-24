<?php
$P = [
  'slug'         => 'fao-appealable-orders-order-43-cpc.php',
  'title'        => 'FAO: Appealable Orders under Order 43 – Advocate Manish Jha',
  'meta'         => 'First Appeals from Orders in Delhi: the Section 104 and Order 43 Rule 1 CPC catalogue of appealable orders, forum and limitation, and the revision alternative.',
  'h1'           => 'First Appeals from Orders: The Section 104 and Order 43 Catalogue',
  'crumb'        => 'FAO (Order 43 CPC)',
  'kicker'       => 'Explainer · Appeals',
  'sub'          => 'Not every order can be appealed — this explainer maps the closed list of appealable orders under Section 104 and Order 43 Rule 1 CPC, the forum and limitation for an FAO in Delhi, and what to do with orders outside the list.',
  'date'         => '2026-08-24',
  'date_display' => '24 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Civil litigation produces two kinds of adjudication: decrees, which decide rights conclusively and carry a regular first appeal, and orders, which manage and decide everything else. For orders, the Code of Civil Procedure, 1908 adopts a catalogue approach — Section 104 read with Order 43 Rule 1 lists the orders from which a First Appeal from Order (FAO) lies, and no appeal lies from any other order. Knowing the list, the forum and the limitation is elementary appellate hygiene; knowing what to do with the orders outside the list is where strategy begins. This explainer covers both.</p>',
  'related'      => ['civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court', 'property-disputes.php' => 'Property Disputes', 'mact-lawyer-in-delhi.php' => 'MACT Claims'],
  'faqs'         => [
    ['Which are the most commonly invoked entries of Order 43 Rule 1?', 'In everyday Delhi practice: clause (r) — orders granting, refusing or vacating temporary injunctions under Order 39; clause (c) — refusal to set aside dismissal for default under Order 9; clause (d) — refusal to set aside an ex parte decree under Order 9 Rule 13; clause (k) — orders on abatement under Order 22; and clauses dealing with attachment, receivers, and restitution-related orders.'],
    ['Where does an FAO lie in Delhi?', 'To the court to which a regular first appeal from the decree in the suit would lie. Appeals from orders of civil judges and district courts go to the District Judge or the Delhi High Court according to the suit\'s valuation and the applicable pecuniary limits; FAOs under special statutes — such as motor accident appeals — lie to the High Court as those statutes provide.'],
    ['What is the limitation for an FAO?', 'Under the Limitation Act, 1963, ninety days when the appeal lies to the High Court and thirty days when it lies to another court, computed from the date of the order, with the usual exclusions for obtaining certified copies and the discretion to condone delay on sufficient cause.'],
    ['What about orders not listed in Order 43 Rule 1?', 'They are not appealable, but Section 105 preserves the objection: any error in a non-appealable order affecting the decision of the case can be raised in the appeal against the eventual decree. In the meanwhile, the narrow supervisory remedies — revision under Section 115 CPC where jurisdictional error exists, or Article 227 in exceptional cases — are the only interlocutory routes, and both are sparingly exercised.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Limitation Act, 1963 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory scheme: a closed list</h2>
<p>Section 104(1) CPC declares that appeals lie from the orders it enumerates — including orders under Section 35A (compensatory costs), Section 91 and 92 refusals, orders imposing fines or directing arrest in certain contexts — "and from no other orders", save as provided in the body of the Code, which is where Order 43 Rule 1 supplies the working catalogue. Section 104(2) adds a second rule of finality: no appeal lies from any order passed in appeal under the section. The message is structural — interlocutory appellate traffic is rationed to the orders whose consequences are serious enough to justify immediate correction.</p>

<h2>The working catalogue</h2>
<p>Order 43 Rule 1 contains the entries that matter daily. Grouped functionally:</p>
<div class="tiles">
  <div class="tile"><strong>Life and death of the suit</strong> — orders returning a plaint for presentation to another court (a); refusing to set aside dismissal for default (c); refusing to set aside an ex parte decree (d); orders on abatement (k).</div>
  <div class="tile"><strong>Interim protection</strong> — orders under Order 39 Rules 1, 2, 2A, 4 and 10 on temporary injunctions and interim deposits (r); orders appointing or refusing receivers under Order 40 (s); attachment-related orders under Order 38 (q).</div>
  <div class="tile"><strong>Execution-adjacent</strong> — orders under Section 47-related contexts as the Code provides, restitution under Section 144 through clause (w) contexts, and objections to drawn-up processes in the listed entries.</div>
  <div class="tile"><strong>Appellate management</strong> — orders under Order 41 Rule 19 (re-admission of appeal) and Rule 21 (re-hearing), and remand orders under Order 41 Rule 23 where a decree is reversed in appeal (u).</div>
</div>
<p>The catalogue must be read with the commercial-courts overlay: for commercial disputes, Section 13 of the Commercial Courts Act, 2015 permits appeals from orders only as enumerated in Order 43 as applied to such suits, together with Section 37 of the Arbitration Act — the same list, filtered through a stricter gate.</p>

<h2>Forum and limitation in Delhi</h2>
<table class="law">
  <thead>
    <tr><th>Question</th><th>Answer</th></tr>
  </thead>
  <tbody>
    <tr><td>Forum</td><td>The court competent to hear the first appeal from the decree in that suit — District Judge or High Court, tracking pecuniary jurisdiction; special statutes designate their own appellate forum</td></tr>
    <tr><td>Limitation</td><td>Ninety days (to the High Court) / thirty days (to other courts) from the order, excluding time for certified copies</td></tr>
    <tr><td>Interim relief</td><td>No automatic stay; a specific application is required, decided on the Order 41 Rule 5 principles applied mutatis mutandis</td></tr>
    <tr><td>Cross-objections</td><td>Available in appeals from orders as the Code applies Order 41 machinery to FAOs, with the appellate court's leave shaping practice</td></tr>
  </tbody>
</table>

<h2>Orders outside the list: preserve, don't litigate</h2>
<p>The commonest appellate error is spending months challenging an unappealable order through misconceived proceedings. The Code's own answer is Section 105: an interlocutory error is not lost by the absence of an immediate appeal — it can be urged as a ground in the appeal from the decree, if it affected the outcome. The narrow interlocutory alternatives are revision under Section 115 CPC, confined to jurisdictional errors in cases where no appeal lies and where the order, if allowed to stand, would occasion irreparable consequences within the section's terms, and the supervisory jurisdiction under Article 227 — a jurisdiction of correction, not of appeal, exercised for grave dereliction or perversity. Both are exceptions; neither is a detour around the catalogue.</p>

<div class="note">
<p><strong>Practice note:</strong> When an adverse order lands mid-suit, answer four questions in order: Is it a deemed decree (rejection of plaint, certain Order 22 outcomes) — in which case the regular appeal applies? Is it in the Order 43 list? If yes, which forum and which limitation — thirty or ninety days? If no, does it meet the demanding thresholds of Section 115 or Article 227, or should the objection simply be recorded and preserved under Section 105? Writing the answers into the file note at the time of the order prevents both missed limitation and doomed challenges.</p>
</div>

<h2>The takeaway</h2>
<p>The FAO jurisdiction is a closed catalogue with open consequences: the listed orders are precisely those capable of ending a case or altering it irreversibly, and the Code gives them immediate appellate attention while deferring everything else to the decree stage. Mastery here is mostly a matter of classification done quickly and correctly — decree or order, listed or unlisted, thirty days or ninety — followed by the discipline to preserve rather than pursue the unlisted grievance. Few skills return more appellate value per page of the Code.</p>
HTML;
include __DIR__ . '/post-layout.php';
