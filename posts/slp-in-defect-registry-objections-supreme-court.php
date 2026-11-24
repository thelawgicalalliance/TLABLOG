<?php
$P = [
  'slug'         => 'slp-in-defect-registry-objections-supreme-court.php',
  'title'        => 'When an SLP Is &ldquo;In Defect&rdquo; – Advocate Manish Jha',
  'meta'         => 'What it means when an SLP lies in defect in the Supreme Court Registry: diary numbers, curing objections, refiling delay and the risks of letting it linger.',
  'h1'           => 'Diary Number to Case Number: The Life of an SLP in the Registry',
  'crumb'        => 'Supreme Court: Registry Practice',
  'kicker'       => 'Supreme Court Practice · 24 November 2026',
  'sub'          => 'A petition &ldquo;in defect&rdquo; exists in the Registry but not before the Court — a limbo with real consequences for limitation, interim protection and opposing parties who track it.',
  'date'         => '2026-11-24',
  'date_display' => '24 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Every filing in the Supreme Court begins as a diary number. Only after the Registry&rsquo;s scrutiny — and the curing of every noted defect — does a Special Leave Petition get registered, receive its SLP number and become capable of listing before a Bench. The phrase &ldquo;the SLP is in defect&rdquo;, familiar from case-status pages and from courts tracking a threatened challenge, describes the gap between those two events. Understanding that gap is part of Article 136 practice.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Litigation', 'blog.php' => 'All Articles'],
  'faqs'         => [
    ['What kinds of defects does the Registry note?', 'The recurring ones: missing or improperly certified copies of the impugned judgment, unlisted annexures or illegible pages, deficiencies in court fee, affidavits not sworn or notarised in proper form, missing memo of parties particulars, absence of the limitation statement, and — where the filing is late — the absence or inadequacy of an application for condonation of delay.'],
    ['Does filing in defect stop limitation?', 'The initial lodgment within the limitation period protects the filing date, but the protection is not unconditional: defects must be cured within the time allowed by the Registry, and inordinate delay in refiling needs its own explanation. Courts distinguish delay in filing from delay in refiling, and an SLP re-presented months later invites a condonation application for the refiling delay as well.'],
    ['Can an SLP in defect support interim protection?', 'No order can be passed in a matter not yet registered and listed. A party needing urgent interim protection must cure defects and seek early listing; conversely, a respondent facing coercive action often points out — as happens routinely in High Courts — that the opposing SLP lies in defect and therefore presents no live challenge.'],
    ['What happens if defects are never cured?', 'The Registry places chronically defective matters before the Judge in Chambers or treats them under its rules for lodgment, and petitions can stand dismissed for non-prosecution of defects. The diary number then marks an attempt, not a challenge — a distinction opposing counsel will press.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — Supreme Court of India', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The scrutiny pipeline</h2>
<div class="flow">
  <div class="fstep"><strong>Lodgment.</strong> The petition is e-filed or presented, pays its fee, and receives a diary number with the filing date — the date that matters for limitation.</div>
  <div class="fstep"><strong>Scrutiny.</strong> The Registry examines the petition against the Supreme Court Rules, 2013 and the practice directions: form, annexures, certified copy, affidavits, court fee, the limitation position and the condonation application where needed.</div>
  <div class="fstep"><strong>Defect memo.</strong> Objections are notified electronically to the advocate-on-record, with time to cure. Each re-presentation is re-scrutinised; fresh defects can be noted.</div>
  <div class="fstep"><strong>Registration.</strong> Once cleared, the matter is registered, assigned its SLP (Civil) or SLP (Criminal) number, and proceeds to listing. Until then it is, in the working phrase, &ldquo;in defect&rdquo;.</div>
</div>

<h2>Why the status matters beyond the Registry</h2>
<p>The &ldquo;in defect&rdquo; status is not mere housekeeping; it is a fact courts act on. High Courts deciding whether to extend interim protection, defer proceedings or await the Supreme Court&rsquo;s view regularly ask whether the threatened SLP is registered or still lying in defect — a defective filing demonstrates intent but presents no pending challenge. In November 2026, for instance, the Calcutta High Court, extending interim protection in a high-profile batch of criminal matters, expressly noted that the State&rsquo;s SLP against earlier orders remained in defect. Execution courts take the same view of decrees: a defective SLP is no answer to a warrant of attachment.</p>

<h2>The two delays, kept distinct</h2>
<table class="law">
  <tr><th>Delay</th><th>What it is</th><th>How it is addressed</th></tr>
  <tr><td>Delay in filing</td><td>Lodgment beyond the limitation period for the SLP</td><td>Application for condonation of delay in filing, with day-wise explanation; decided by the Court</td></tr>
  <tr><td>Delay in refiling</td><td>Defects cured and the matter re-presented beyond the time allowed by the Registry</td><td>Application for condonation of refiling delay; scrutinised less strictly, but not waived — long unexplained gaps are fatal</td></tr>
</table>
<p>The practical discipline follows from the table: calendar the Registry&rsquo;s cure period the day the defect memo arrives; cure in one comprehensive re-presentation rather than piecemeal; and where the certified copy is awaited, file with an application for exemption rather than letting the diary number age. For respondents, the discipline is the mirror image: obtain the case status, and if the challenge lies in defect, place that fact on record wherever the SLP is being used as a shield.</p>

<h2>A note on criminal matters</h2>
<p>In criminal SLPs the stakes of defect-limbo are liberty-sized. Surrender requirements and the exemption application, the certified copy of both judgments where the High Court affirmed a conviction, and the condonation application in belated challenges are the usual registry flashpoints. An accused relying on a proposed SLP to seek suspension of sentence or parole-stage indulgence should expect the State — and the court — to check the registration status first.</p>
<div class="note">This explainer describes general Supreme Court registry practice for information; the Supreme Court Rules, 2013 and current practice directions govern any specific filing, and the Registry&rsquo;s requirements are applied matter by matter.</div>
HTML;
include __DIR__ . '/post-layout.php';
