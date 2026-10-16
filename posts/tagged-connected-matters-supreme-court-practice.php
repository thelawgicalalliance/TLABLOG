<?php
$P = [
  'slug'         => 'tagged-connected-matters-supreme-court-practice.php',
  'title'        => 'Tagged Matters in the Supreme Court – Advocate Manish Jha',
  'meta'         => 'What it means when your SLP is tagged with a pending batch in the Supreme Court: how tagging happens, its effect on hearing, interim relief and strategy.',
  'h1'           => 'Your Case, Someone Else\'s Batch: Tagging and Connected Matters in Supreme Court Practice',
  'crumb'        => 'Supreme Court — Practice',
  'kicker'       => 'Practice Explainer · Supreme Court',
  'sub'          => 'Few orders change an SLP\'s destiny as quietly as two words: "Tag with." How the Supreme Court groups cases raising common questions, what a litigant gains and loses inside a batch, and how to protect interim interests while the lead matter is fought by others.',
  'date'         => '2026-10-16',
  'date_display' => '16 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">A special leave petition raising a question already pending before the Supreme Court rarely lives an independent life. On the first listing — sometimes even at the Registry stage — the Court may direct that it be tagged with the earlier matter, and from that moment the petition moves with a batch: same bench, same hearing date, usually the same fate on the common question. Tagging serves the institution — one authoritative answer instead of scattered, potentially conflicting ones — but it has real consequences for the individual litigant, from years of waiting on another case\'s calendar to the risk that the batch is decided on facts that are not yours.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court Practice', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'business-corporate-law.php' => 'Business & Corporate Law'],
  'faqs'         => [
    ['How does a case get tagged?', 'Three common routes: the Registry identifies the overlap from the petition\'s question of law and places it before the Court with a tagging note; a party applies for tagging, pointing to the pending lead matter; or the bench itself, on seeing the issue, directs "tag with" a named case or batch. Tagging is a judicial or judicially-sanctioned act, not a mere clerical grouping.'],
    ['Does tagging mean my case will be decided by the batch judgment?', 'On the common question of law, effectively yes — the lead judgment governs, and tagged matters are then disposed of in its terms. But case-specific issues survive: after the common question is answered, a tagged matter with distinct facts can be heard on its remaining points or remanded. Protecting that distinctness in the pleadings is the key defensive move.'],
    ['Can I get interim relief while tagged?', 'Yes, and this is the most important practical point: tagging does not freeze interim jurisdiction. Interim applications in a tagged matter can be moved and heard — stay of recovery, protection from arrest, status quo — often by reference to the interim regime already operating in the lead matter, with parity the natural argument.'],
    ['Can a tagged case be de-tagged?', 'The Court can de-tag a matter that does not actually share the common question, or where urgency justifies separate hearing — a liberty issue, a time-sensitive commercial collapse. A reasoned application showing the mismatch or the urgency is the route; de-tagging sought merely to jump the queue fails.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court of India — case status and connected matters (official portal)', 'url' => 'https://www.sci.gov.in/case-status/'],
    ['label' => 'Supreme Court Rules, 2013 (Supreme Court of India)', 'url' => 'https://www.sci.gov.in/rules-2/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the Court tags</h2>
<p>The Supreme Court\'s docket contains clusters: hundreds of petitions on one tax provision, one service rule, one land-acquisition notification, one question of bail policy. Deciding them separately risks inconsistent rulings from different benches and multiplies hearing time. Tagging solves both problems — the first matter (or a chosen lead) frames the question, the batch supplies the Court with the full range of fact patterns, and one judgment settles the law for all. For the system it is efficiency; for the individual petitioner it is a trade: you surrender control over how the common question is argued, and in exchange you inherit the outcome of an argument conducted, often, by the best-resourced counsel in the batch.</p>

<h2>Life inside a batch</h2>
<div class="flow">
<div class="fstep"><strong>Identification</strong><p>Your petition\'s question of law matches a pending matter; the Registry note or a bench order directs tagging.</p></div>
<div class="fstep"><strong>Synchronisation</strong><p>Your case now lists when the lead lists. Adjournments, references to larger benches and part-heard status in the lead ripple through the whole batch.</p></div>
<div class="fstep"><strong>Common hearing</strong><p>The lead matter is argued; tagged counsel typically address only what is distinct about their cases, if heard at all before the common question is answered.</p></div>
<div class="fstep"><strong>Disposal in terms</strong><p>After the lead judgment, tagged matters are disposed of "in terms of" it — with liberty, where facts differ, to pursue surviving issues.</p></div>
</div>

<h2>Protecting your position</h2>
<p>Three disciplines separate the well-handled tagged matter from the abandoned one. First, interim protection: ascertain the interim orders operating in the lead matter and seek parity immediately — a batch where some petitioners enjoy a stay of recovery and others do not is a parity application waiting to be filed. Second, distinctness on the record: file the additional documents and, where needed, a short note identifying the facts that distinguish your case, so that disposal "in terms of" the lead judgment does not flatten a genuine difference. Counsel who first articulate a distinction at the disposal hearing are usually too late. Third, vigilance: tagged matters can sleep for years and then be listed overnight when the lead is ready; monitor the lead matter\'s progress, not just your own case number, and keep the client\'s urgency documented in case a de-tagging or early-hearing application becomes necessary.</p>

<h2>When tagging helps — and when to resist it</h2>
<p>Tagging is often the petitioner\'s friend: a small litigant rides the argumentation of the batch, shares the stay regime, and avoids the costs of a solo constitutional fight. It deserves resistance in two situations. Where the overlap is superficial — your case turns on its facts and only nominally touches the pending question — tagging buys delay without benefit, and a de-tagging application with a precise comparison of questions is worth filing. And where time is the whole case — liberty matters, limitation-sensitive commercial disputes, demolition or dispossession threats — the correct course is an application for interim relief and early hearing notwithstanding the tag, because the batch\'s calendar will not wait for your emergency, and the Court, properly moved, will not make your emergency wait for the batch.</p>

<div class="note">
<p>This is a general explainer on a feature of Supreme Court listing practice and is not legal advice. The handling of connected matters is governed by the Supreme Court Rules, 2013, the Handbook on Practice and Procedure and the Court\'s administrative instructions as applied from time to time.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
