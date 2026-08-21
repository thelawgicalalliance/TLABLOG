<?php
$P = [
  'slug'         => 'section-29a-arbitration-time-limit-extension.php',
  'title'        => 'Arbitration Timelines: Section 29A – Advocate Manish Jha',
  'meta'         => 'Section 29A of the Arbitration Act — the twelve-month award deadline, consent extension, court extensions, fee reduction and substitution of arbitrators.',
  'h1'           => 'Section 29A: The Clock on Domestic Arbitral Awards',
  'crumb'        => 'Arbitration — Section 29A',
  'kicker'       => 'Practice Explainer · Arbitration',
  'sub'          => 'Twelve months from completion of pleadings, six more by consent, and thereafter only the court can extend — with powers over fees and even the tribunal itself.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Arbitration promised speed and often delivered the opposite — proceedings that outlasted the disputes they were meant to resolve. Section 29A of the Arbitration and Conciliation Act, 1996, introduced in 2015 and recalibrated in 2019, is Parliament\'s response: a statutory deadline for domestic awards, a limited consensual extension, and thereafter judicial control, including the power to trim the tribunal\'s fees for delay it caused and to substitute arbitrators. Every arbitration clause negotiated in Delhi, and every pending domestic reference, operates in the shadow of this clock.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Law', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['When does the twelve-month period begin?', 'From the date of completion of pleadings under Section 23(4) — which itself requires the statement of claim and defence to be completed within six months of the arbitrators receiving notice of their appointment. The award in a domestic arbitration must follow within twelve months of that completion date.'],
    ['What happens when the period expires without an award?', 'The mandate of the arbitral tribunal terminates, unless the court has extended the period before or after expiry. An application under Section 29A(4) can be filed after expiry, and the mandate stands revived if extension is granted; but proceeding to an award with no extension in place is the classic route to a fatally defective award.'],
    ['Can the court penalise the tribunal or the parties for delay?', 'Yes. While extending time, the court may reduce the arbitrator\'s fees by up to five per cent for each month of delay attributable to the tribunal, may impose terms and costs on the parties, and may even substitute one or all of the arbitrators — with the proceedings continuing from the stage reached, on the existing record.'],
    ['Does Section 29A apply to international commercial arbitration?', 'Not mandatorily. After the 2019 amendment, international commercial arbitrations seated in India are outside the mandatory twelve-month rule; the tribunal should merely endeavour to make the award within twelve months of completion of pleadings. Fast-track arbitrations under Section 29B carry their own six-month timeline.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
    ['label' => 'Delhi High Court — case status and rules', 'url' => 'https://delhihighcourt.nic.in/web/'],
  ],
];
$BODY = <<<'HTML'
<h2>The scheme in sequence</h2>

<div class="flow">
  <div class="fstep"><strong>Pleadings — Section 23(4)</strong> — statement of claim and defence completed within six months of the arbitrators receiving written notice of appointment.</div>
  <div class="fstep"><strong>Twelve months — Section 29A(1)</strong> — the award in a domestic arbitration to be made within twelve months from completion of pleadings.</div>
  <div class="fstep"><strong>Six months by consent — Section 29A(3)</strong> — the parties may, by consent, extend once, by up to six months. No court is involved.</div>
  <div class="fstep"><strong>Court extension — Section 29A(4)–(5)</strong> — further extension only by the court, for sufficient cause and on terms; the mandate terminates unless extended.</div>
</div>

<p>An incentive completes the design: where the award is made within six months, the tribunal may receive such additional fees as the parties agree. The statute thus pushes at both ends — reward for speed, consequences for delay.</p>

<h2>The court's toolkit on an extension application</h2>

<p>The extension jurisdiction is not a rubber stamp; it is a supervisory checkpoint at which the court examines where the time went. Its express powers while extending:</p>

<div class="tiles">
  <div class="tile"><h3>Terms and conditions</h3><p>Extension on a schedule — fixed dates for remaining witnesses, arguments and award — is the norm in Delhi practice, not an open-ended enlargement.</p></div>
  <div class="tile"><h3>Fee reduction</h3><p>Up to five per cent of the tribunal's fees per month of delay attributable to the tribunal — after giving the arbitrator an opportunity of being heard.</p></div>
  <div class="tile"><h3>Substitution</h3><p>The court may substitute one or all arbitrators; the proceedings continue from the stage already reached, on the evidence and material already on record.</p></div>
  <div class="tile"><h3>Costs</h3><p>Exemplary costs can be imposed on a party whose conduct caused the delay — dilatory applications and manufactured adjournments carry a price.</p></div>
</div>

<h2>Which court, and when</h2>

<p>"Court" for Section 29A carries the Act's definition — for most domestic arbitrations, the principal civil court of original jurisdiction, which in Delhi means the High Court where its ordinary original jurisdiction is engaged by the arbitration agreement and subject-matter value, and the district courts otherwise. Applications should be filed before expiry wherever possible: although an application after expiry is maintainable and the mandate revives on extension, the interregnum creates avoidable disputes about steps taken in between. A tribunal approaching the deadline mid-hearing should have the parties' consent extension exhausted and the court application ready, so that the proceedings never stand mandate-less.</p>

<h2>Strategic behaviour the section has produced</h2>

<p>Section 29A has changed conduct in predictable and less predictable ways. Claimants front-load their cases, knowing the clock disciplines everyone. Respondents inclined to attrition discover that delay now has an auditable author — extension applications require the court to ask whose conduct consumed the time, and the answer shapes terms, costs and fees. Institutional arbitrations administer the timeline through their rules; ad hoc tribunals must self-manage it, which is an argument frequently made for institutional administration in higher-value Delhi references. And settlement discussions cluster around extension checkpoints, when both sides confront the costs of a further round before a supervising judge.</p>

<div class="note">
<p>For parties resisting enforcement later, the mandate question is a genuine ground: an award made after the mandate terminated, with no extension in place, is vulnerable in Section 34 proceedings. Award-holders should therefore ensure the extension orders form part of the record; challengers should reconstruct the timeline — pleadings completion, consent extension, court orders — as the first forensic step.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
