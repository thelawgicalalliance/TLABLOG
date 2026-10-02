<?php
$P = [
  'slug'         => 'slp-after-notice-stage-supreme-court.php',
  'title'        => 'After Notice Issues in an SLP – Advocate Manish Jha',
  'meta'         => 'What happens once the Supreme Court issues notice in an SLP: counter affidavits, interim orders, tagging, grant of leave and the path to final hearing.',
  'h1'           => 'Notice Issued — Now What? The Life of an SLP After the First Hearing',
  'crumb'        => 'SLP: Notice Stage',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'Issuance of notice is an invitation to the other side, not a finding — but it opens a distinct procedural phase with its own filings, timelines and strategic choices.',
  'date'         => '2026-10-02',
  'date_display' => '2 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Most special leave petitions die at the first hearing. The ones that survive receive two words — "Issue notice" — that change the character of the case. For the petitioner, the SLP has crossed its highest mortality point; for the respondent, a judgment won below must now be defended in Delhi. This explainer walks through what actually happens between notice and final disposal under Article 136 of the Constitution and the Supreme Court Rules, 2013, and the decisions each side must make along the way.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Litigation', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Does issuance of notice mean the SLP will be allowed?', 'No. Notice only means the Court wants to hear the other side before deciding whether to grant leave. A large share of SLPs are dismissed after counter affidavits are filed; equally, some are disposed of at the notice stage itself by consent or with directions, without leave ever being granted.'],
    ['What should a respondent do on receiving SLP notice?', 'Enter appearance promptly through an Advocate-on-Record, obtain the paper book, and file a counter affidavit within the time granted. If an interim order accompanies the notice — a stay of execution, status quo — the respondent can seek its vacation by application rather than waiting for the next listed date.'],
    ['What changes when leave is granted?', 'The SLP converts into a civil or criminal appeal, the discretionary stage ends, and the matter is heard as an appeal on its own record. From that point the High Court order stands merged in whatever the Supreme Court finally decides, and interim arrangements usually continue until the appeal is disposed of.'],
    ['Can a condition accompany notice or interim relief?', 'Frequently. The Court often makes a stay conditional — deposit of a sum, furnishing security, or an undertaking. Non-compliance dissolves the protection, so conditional orders should be diarised and complied with to the letter and the day.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The first fork: notice simpliciter, or notice with interim relief</h2>
<p>When an SLP survives preliminary hearing, the order usually takes one of three shapes, and each sets a different trajectory.</p>
<div class="tiles">
  <div class="tile"><strong>Notice simpliciter.</strong><br>The respondent is called upon to answer; nothing below is disturbed. Execution of the impugned decree or order can continue unless and until stayed — a point respondents should exploit and petitioners should address by a specific stay application.</div>
  <div class="tile"><strong>Notice with interim order.</strong><br>Stay of the operation of the judgment, stay of dispossession, no coercive steps, or status quo — often expressly "in the meanwhile" and sometimes conditional on deposit or security. The interim order is the real battlefield of many SLPs: cases have settled or collapsed on its strength alone.</div>
  <div class="tile"><strong>Notice on limited questions.</strong><br>The Court sometimes confines notice to one issue — quantum, an interpretation point, sentence — which narrows everything that follows, including what the counter affidavit must engage.</div>
</div>

<h2>The respondent&rsquo;s phase: appearance and counter</h2>
<p>Service is effected through the Registry and, increasingly, by email and approved modes; a respondent who has lodged a caveat under Section 148A CPC principles as adapted to the Supreme Court Rules is heard even at the first hearing. After appearance through an Advocate-on-Record, the working sequence is: obtain the complete paper book, verify the record against the High Court file (SLPs occasionally omit inconvenient annexures), and file the counter affidavit within the period the order grants. The counter is not a second written statement — it answers the special-leave question: why this case raises no point warranting the Supreme Court&rsquo;s interference, with emphasis on concurrent findings, the discretionary nature of the relief below, and any suppression in the petition. A rejoinder from the petitioner typically closes the pleadings.</p>

<h2>Housekeeping that decides outcomes</h2>
<div class="flow">
  <div class="fstep"><strong>Compliance with conditions.</strong> Deposits and undertakings attached to interim orders have hard deadlines; default dissolves protection and sours the Bench. Proof of compliance should be placed on record immediately.</div>
  <div class="fstep"><strong>Applications in the gap.</strong> Vacation or modification of interim orders, exemption applications, impleadment by affected third parties, and applications to bring subsequent events on record all belong to this phase — each by interlocutory application, not by letter or at the next listing.</div>
  <div class="fstep"><strong>Tagging and connected matters.</strong> Where the same judgment or question is already pending, matters are tagged; the lead matter&rsquo;s pace then becomes everyone&rsquo;s pace, and counsel should know which case is the lead and what interim regime governs the batch.</div>
  <div class="fstep"><strong>Office reports.</strong> Before each listing the Registry&rsquo;s office report flags defects, service status and compliance. Reading it the evening before saves adjournments that cost months.</div>
</div>

<h2>The second fork: disposal at notice stage, or leave</h2>
<p>After pleadings, the matter returns for hearing. Three outcomes dominate. The Court may <strong>dismiss</strong> the SLP — with or without reasons — leaving the judgment below intact. It may <strong>dispose of</strong> the petition with consent terms, clarifications or directions, a common end for service, tenancy and settlement-amenable disputes. Or it may <strong>grant leave</strong>: the petition becomes an appeal, is renumbered, and proceeds — sometimes to immediate final hearing where pleadings are complete, otherwise to the regular board. The distinction matters for finality doctrine: only after leave does the appellate jurisdiction truly open, with the consequences for merger and binding effect that follow from the Court&rsquo;s settled jurisprudence on the two stages of Article 136.</p>
<div class="note"><p>Timelines in this phase are substantially within the parties&rsquo; influence: completing service, curing defects, filing the counter on time and seeking early hearing where an interim order causes daily prejudice. A matter diligently prosecuted can move from notice to disposal within a few listings; a neglected one can drift for years on the strength — or the burden — of an interim order neither side moves to test.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
