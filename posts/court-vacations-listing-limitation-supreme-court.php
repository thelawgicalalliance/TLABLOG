<?php
$P = [
  'slug'         => 'court-vacations-listing-limitation-supreme-court.php',
  'title'        => 'When The Court Is On Vacation – Advocate Manish Jha',
  'meta'         => 'Vacation benches, urgent listings and periods expiring during court vacations: how the Supreme Court and High Courts handle holidays, with the Kamran guidance for registries.',
  'h1'           => 'Litigating Through the Vacation: Benches, Listings and Expiring Timelines',
  'crumb'        => 'Court Vacations & Listing',
  'kicker'       => 'Practice Explainer · Supreme Court & High Courts',
  'sub'          => 'Vacations suspend routine hearings, not justice — but using the vacation list to steal a march on an absent opponent now carries visible appellate risk.',
  'date'         => '2026-10-21',
  'date_display' => '21 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Courts close; disputes do not. Every summer and winter, the Supreme Court and the High Courts run on vacation benches — skeletal rosters meant for matters that genuinely cannot wait: arrests, demolitions, irreversible transactions. Around them operate two quieter sets of rules that practitioners ignore at their peril: the rules for what may be listed in vacation at all, and the rules for computing periods that expire while the court is closed. The Supreme Court\'s decision in <em>Senior Intelligence Officer v. Mohammed Kamran</em>, 2026 INSC 1140 (16 October 2026), has sharpened both, deprecating a bail matter listed in the winter vacation on counsel\'s memo without notice, and guiding registries to exclude vacations when court-fixed periods expire within them. This explainer collects the working rules.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['What qualifies for listing before a vacation bench?', 'Genuine urgency that cannot await reopening: threatened arrest or deportation, imminent demolition or dispossession, time-sensitive commercial injuries such as encashment of bank guarantees, and habeas corpus. The test is irreversibility — a matter that will merely be older, not worse, after the vacation belongs on the regular list.'],
    ['Can a matter be listed in vacation without the other side knowing?', 'It can happen, and that is exactly what the Supreme Court deprecated in Kamran: a criminal petition listed during the High Court\'s winter vacation on a memo from counsel, without adequate notice to the opposite party, was described as an attempt to gain an unfair advantage, and the order obtained was set aside in part. Urgency obtained ex parte must be genuine and disclosed, or the relief is vulnerable.'],
    ['What happens when a limitation period expires during a vacation?', 'For statutes of limitation, Section 4 of the Limitation Act, 1963 permits filing on the day the court reopens where the prescribed period expires on a day the court is closed. For periods fixed by a court order — say, two weeks to file objections — Kamran guides that the registry should ordinarily exclude the vacation in computing the period, unless the bench itself made the matter returnable within the vacation or before a vacation bench.'],
    ['Do vacation orders have lesser force?', 'No. An order of a vacation bench is an order of the court, fully binding and appealable like any other. What differs is the scope of hearing — vacation benches decide urgency and interim protection, leaving the main matter to the regular bench, which retains full freedom at the final hearing.'],
  ],
  'sources'      => [
    ['label' => 'Judgment, Senior Intelligence Officer v. Mohammed Kamran — Supreme Court of India (2026 INSC 1140)', 'url' => 'https://www.sci.gov.in/view-pdf/?diary_no=142792026&type=j&order_date=2026-10-16&from=latest_judgements_order'],
    ['label' => 'Limitation Act, 1963 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>How vacation listing actually works</h2>
<p>In the Supreme Court, partial court working days and the summer and winter breaks are governed by the Court\'s rules and annual calendar; vacation benches sit on notified days, and listing requires an application showing urgency, scrutinised by the Registrar. In the Delhi High Court, vacation rosters are notified before each break, with designated vacation judges for civil and criminal work, and urgent mentioning routed through the registry under the practice directions in force. The common architecture is a filter: counsel must articulate why the matter cannot await reopening, and the registry or the vacation judge decides whether the urgency is real.</p>

<h2>The discipline Kamran adds</h2>
<div class="tiles">
  <div class="tile"><h4>Urgency must be shown, not assumed</h4><p>A matter listed in vacation on a bare memo, without adequate notice to the opposite party, invites appellate reversal — the listing itself becomes evidence of forum manoeuvring.</p></div>
  <div class="tile"><h4>Ordinarily, wait for reopening</h4><p>The Supreme Court indicated that matters of the kind before it should ideally be listed after the court reopens; vacation is for necessity, not convenience.</p></div>
  <div class="tile"><h4>Registries get a computation rule</h4><p>Where a period fixed by the court expires during a vacation, the registry should ordinarily exclude the vacation; where the bench expressly makes a matter returnable in vacation or before a vacation bench, the listing follows the order, subject to the High Court\'s rules.</p></div>
</div>

<h2>Expiring timelines: the two regimes</h2>
<div class="compare">
  <div class="col old"><h4>Statutory limitation</h4><p>Section 4, Limitation Act: where the prescribed period expires on a day the court is closed, the filing may be made on the reopening day. The provision saves the filing; it does not enlarge the period for anything else.</p></div>
  <div class="arrow">→</div>
  <div class="col new"><h4>Court-fixed periods</h4><p>Directions such as "counter-affidavit in two weeks" are governed by the order and the court\'s rules; after Kamran, the default registry approach is to exclude the intervening vacation, so a party is not defaulted by the calendar of the court itself.</p></div>
</div>

<h2>Practical checklist before the break</h2>
<div class="check">
  <ul>
    <li><strong>Audit deadlines falling in the vacation</strong> — filings protected by Section 4 can wait for reopening; compliances under court orders should either be completed before the break or clarified by a direction while the regular bench still sits.</li>
    <li><strong>Anticipate the opponent\'s urgency.</strong> If an adverse ex parte move is foreseeable — an arrest, an encashment, an eviction — consider a caveat so that no vacation order issues unheard.</li>
    <li><strong>Prepare the urgency note honestly.</strong> State what will be irreversibly lost before reopening, disclose every connected proceeding and prior order, and serve the other side wherever feasible; Kamran shows that concealment can cost the relief later.</li>
    <li><strong>Use the vacation deliberately.</strong> For the diligent, breaks are drafting time: appeals, SLPs and objections filed on reopening day are commonly those that the vacation was used to perfect.</li>
  </ul>
</div>
<p>The vacation list is a safety valve, and like every safety valve it works only if used for emergencies. The courts have signalled, with increasing firmness, that they will protect parties from the calendar — and protect the calendar from the parties.</p>
<div class="note"><p>This article is for general information only and is not legal advice. Vacation listing procedures are governed by the rules and practice directions of each court, which should be checked for the current break.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
