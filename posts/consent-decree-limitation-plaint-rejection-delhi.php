<?php
$P = [
  'slug'         => 'consent-decree-limitation-plaint-rejection-delhi.php',
  'title'        => 'Consent Decree No Fresh Cause: Delhi HC – Advocate Manish Jha',
  'meta'         => 'Delhi High Court upholds rejection of a plaint under Order VII Rule 11, holding a consent decree cannot revive a time-barred claim through clever drafting.',
  'h1'           => 'Clever Drafting Cannot Reset the Clock: Delhi High Court on Consent Decrees and Limitation',
  'crumb'        => 'Civil Appeals — Limitation',
  'kicker'       => 'Delhi High Court · 17 September 2026',
  'sub'          => 'In Prem Mehani v. Harish Batra, the High Court dismissed a first appeal against rejection of a plaint, holding that a 2012 consent decree could not furnish a fresh cause of action for claims that accrued in 2006–2008 and were allowed to lapse.',
  'date'         => '2026-09-21',
  'date_display' => '21 September 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Order VII Rule 11 of the Code of Civil Procedure is the civil court\'s gatekeeper: where a plaint, on its own averments, discloses a time-barred claim, the suit ends at the threshold. On 17 September 2026, Justice Amit Bansal of the High Court of Delhi applied that discipline in <em>Prem Mehani &amp; Anr v. Harish Batra &amp; Ors</em>, RFA 277/2019 with EX.F.A. 12/2019, dismissing appeals against the rejection of a plaint that sought to unwind a 2012 consent decree over family property in Okhla Industrial Area — and naming the technique it rejected: a pleading built by "clever drafting" to manufacture a fresh cause of action.</p>',
  'related'      => ['property-disputes.php' => 'Property Disputes', 'civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court Practice', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What was the suit that got rejected?', 'The appellants, claiming a 25% interest in leasehold family property under a 2001 family settlement, sued to invalidate a 2012 consent decree passed in a specific performance suit founded on a 2006 agreement to sell executed by other family members. They alleged the decree was obtained by fraud and concealment.'],
    ['Why did the court hold the suit time-barred?', 'Because the plaintiffs\' own materials showed knowledge of the rival claim from a 2006 legal notice and a 2008 specific performance suit, yet they filed nothing for years — no counterclaim, no impleadment application, no suit. The court held that "the consent decree...cannot furnish a fresh cause of action so as to revive a claim which had already accrued"; the real cause of action arose in 2006–2008, and the 2013 suit came too late.'],
    ['Can limitation be decided at the Order VII Rule 11 stage?', 'Yes, where the bar appears from the averments of the plaint itself read with the documents relied on in it. The court does not weigh defence evidence at this stage, but it also does not accept artful pleading at face value: it identifies the real cause of action, and if that is barred on the plaint\'s own showing, rejection follows.'],
    ['Does fraud always postpone limitation?', 'Section 17 of the Limitation Act postpones limitation until the fraud is, or could with reasonable diligence have been, discovered. A party shown to have had actual knowledge of the essential facts years earlier cannot invoke fraud to explain away its silence — which is why the 2006 notice and the 2008 suit proved decisive here.'],
  ],
  'sources'      => [ ['label' => 'Prem Mehani & Anr v. Harish Batra & Ors — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/137846486/'] ],
];
$BODY = <<<'HTML'
<h2>The family property and the rival transactions</h2>
<p>The dispute concerned leasehold property in Okhla Industrial Area held through a family partnership. A family settlement of 2001 was said to allocate a 25% interest to the first appellant. In 2006, however, other family members executed an agreement to sell in favour of outside purchasers; a legal notice followed the same year, a specific performance suit in 2008, and a consent decree in 2012. In 2013, the appellants sued to invalidate that decree as fraudulent. The trial court rejected the plaint under Order VII Rule 11 CPC; the appeals brought the question to the High Court.</p>

<h2>Finding the real cause of action</h2>
<p>The appellants framed their suit as a challenge to the 2012 decree itself — a fresh grievance, freshly timed. Justice Bansal declined the frame. The plaint and its documents showed the appellants knew of the rival agreement from the 2006 notice and of the litigation from the 2008 suit, and did nothing: no counterclaim, no application to be impleaded, no protective suit. On that record, the consent decree merely gave judicial form to a transaction the appellants had knowingly allowed to mature. The court held the decree "cannot furnish a fresh cause of action so as to revive a claim which had already accrued," and characterised the 2013 pleading as "nothing but... clever drafting" designed to circumvent limitation.</p>

<h2>The doctrine in one table</h2>
<table class="law">
<tr><th>Question</th><th>Answer the court applied</th></tr>
<tr><td>When does the cause of action arise?</td><td>When the plaintiff's right is first invaded to his knowledge — here, 2006–2008 — not when a later judicial order formalises the invasion.</td></tr>
<tr><td>Can pleading choices change that?</td><td>No. Courts read the plaint as a whole to find the real grievance; a suit aimed in substance at a stale claim is barred however it is labelled.</td></tr>
<tr><td>What is the effect of silence?</td><td>Knowledge plus inaction constitutes laches and lets limitation run; the law assists the vigilant, not those who sleep over their rights.</td></tr>
<tr><td>Result</td><td>Plaint rejected under Order VII Rule 11(d); rejection affirmed in first appeal, and the execution appeal fell with it.</td></tr>
</table>

<h2>Practice notes</h2>
<div class="check">
<p>Object early or explain forever. A person who learns of a transaction affecting his claimed share must act within limitation from that knowledge — by suit, counterclaim or impleadment in pending proceedings — rather than wait for the outcome and attack it collaterally.</p>
<p>For defendants, Order VII Rule 11 remains the most economical weapon against revival suits: build the application on the plaint's own admissions of knowledge and the documents it relies upon.</p>
<p>Consent decrees between some family members do not bind non-parties\' independent rights — but a non-party who wants to assert such rights must do so within time measured from when the underlying transaction came to his knowledge, not from the decree.</p>
</div>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
