<?php
$P = [
  'slug'         => 'article-136-arbitration-matters-limits.php',
  'title'        => 'SLPs in Arbitration Matters: The Gate – Advocate Manish Jha',
  'meta'         => 'Where Article 136 fits in arbitration litigation: no second appeals under Section 37(3), SLPs against Section 11 and Section 34/37 orders, and why leave is rare.',
  'h1'           => 'The Last Door Is Narrow: Article 136 and Arbitration Litigation',
  'crumb'        => 'SLP: Arbitration Matters',
  'kicker'       => 'Practice Explainer · 27 November 2026',
  'sub'          => 'The Arbitration Act deliberately rations appeals — Section 37(3) bars a second appeal but saves Article 136, making the SLP the only route to the Supreme Court and a deliberately difficult one.',
  'date'         => '2026-11-27',
  'date_display' => '27 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Arbitration promises finality, and the Arbitration and Conciliation Act, 1996 polices that promise by rationing appeals. Section 37 lists the only appealable orders; Section 37(3) then bars any second appeal &mdash; while expressly saving the right to approach the Supreme Court under Article 136 of the Constitution. The special leave petition is therefore the sole remaining door after a Section 37 court has spoken, and the Supreme Court keeps it deliberately narrow: leave is discretionary, interference with concurrent arbitration findings is rare, and the Court repeatedly reminds litigants that an SLP is not a third look at the award. This explainer sets out where Article 136 realistically fits in arbitration litigation.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Which arbitration orders can even reach the Supreme Court?', 'Appealable orders under Section 37 — refusing or granting interim measures under Section 9, setting aside or refusing to set aside an award under Section 34, refusing to refer parties to arbitration under Section 8, and the Section 17 and competence orders listed in Section 37(2) — after the appellate court decides. Because Section 37(3) bars a second appeal, the only further step from a Section 37 judgment is an SLP under Article 136.'],
    ['What about orders appointing arbitrators under Section 11?', 'The Act gives no appeal against Section 11 orders. Challenges have historically travelled to the Supreme Court by special leave, and the Court entertains them sparingly — principally where the referral court exceeded the limited jurisdiction the Act and its amendments leave it, such as examining anything beyond the existence of the arbitration agreement.'],
    ['What persuades the Supreme Court to grant leave in an arbitration SLP?', 'Questions with systemic consequences: the scope of public policy and patent illegality under Section 34, limitation questions like the computation of the three-month window, the boundaries of Section 9 and Section 11 jurisdiction, enforcement of foreign awards, and conflicts between High Courts. Error correction on facts, reappreciation of evidence before the arbitrator, or dissatisfaction with damages rarely move the Court.'],
    ['Does filing an SLP stay enforcement of the award?', 'No. There is no automatic stay at any stage of award litigation, and after the 2015 and 2021 amendments even a Section 34 challenge requires a specific stay order, with deposit conditions common in money awards. An SLP without an interim order leaves the award-holder free to execute, so a stay application with realistic deposit offers must accompany the petition.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court of India — official website', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Union of India v. Surat Singh & Sons, 2026:UHC:10796-DB — a recent Section 37(1)(b) appeal (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/71296519/'],
  ],
];
$BODY = <<<'HTML'
<h2>The appellate map, compressed</h2>
<div class="flow">
  <div class="fstep"><strong>Tribunal to Section 34 court.</strong> The award is challenged, on the statute&rsquo;s limited grounds, before the court defined in Section 2(1)(e) — in commercial-value matters, the Commercial Court or Commercial Division.</div>
  <div class="fstep"><strong>Section 34 court to Section 37 court.</strong> One appeal, within the 60-day discipline of Section 13(1A) of the Commercial Courts Act for commercial matters.</div>
  <div class="fstep"><strong>Then only Article 136.</strong> Section 37(3): no second appeal — &ldquo;but nothing in this section shall affect or take away any right to appeal to the Supreme Court.&rdquo; The SLP is a constitutional residue, not a statutory entitlement.</div>
</div>

<h2>Why leave is hard in arbitration matters</h2>
<p>Article 136 is discretionary everywhere, but arbitration adds two headwinds. First, the subject-matter doctrine: the 1996 Act&rsquo;s object is minimal judicial interference, and the Supreme Court reads its own jurisdiction in that light, declining to do under Article 136 what Section 34 forbids the courts below. Second, concurrency: by the time an SLP arrives, an arbitrator and usually two courts have examined the dispute; concurrent findings on evidence are nearly immovable. The petitions that survive raise questions about the system &mdash; what &ldquo;patent illegality&rdquo; covers, when limitation begins, what a referral court may examine &mdash; not grievances about the award.</p>

<h2>Framing the arbitration SLP</h2>
<table class="law">
  <tr><th>Element</th><th>What works</th></tr>
  <tr><td>Question of law</td><td>State it as a proposition of arbitration law with consequences beyond the parties, ideally anchored in a conflict between High Courts or an unsettled amendment question</td></tr>
  <tr><td>Jurisdictional focus</td><td>Show the court below exceeded or abdicated its statutory role — re-wrote the contract, re-appreciated evidence under Section 34, or refused relief the Act mandated</td></tr>
  <tr><td>Conduct and deposits</td><td>Arrive with clean hands on interim orders and offer security; the Court&rsquo;s equity jurisdiction notices who protected the award-holder&rsquo;s fruits</td></tr>
  <tr><td>Timing</td><td>Limitation for SLPs is short and condonation in commercial matters is unsympathetic; the diary begins the day the Section 37 judgment is pronounced</td></tr>
</table>

<h2>A caution about expectations</h2>
<p>Clients often treat the SLP as the natural fourth round. In arbitration, it is better understood as an exceptional audit of legal method. The realistic plan is built at the Section 34 stage &mdash; where grounds are framed, evidence objections preserved and deposit strategy set &mdash; because everything afterward narrows. When the Section 37 court has affirmed, the honest advice in most cases is that the award has reached its destination.</p>
<div class="note">This explainer describes the general framework for information. It is not legal advice; whether any particular arbitration order merits a special leave petition requires case-specific assessment.</div>
HTML;
include __DIR__ . '/post-layout.php';
