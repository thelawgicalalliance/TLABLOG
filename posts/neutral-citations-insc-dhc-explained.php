<?php
$P = [
  'slug'         => 'neutral-citations-insc-dhc-explained.php',
  'title'        => 'Neutral Citations Explained – Advocate Manish Jha',
  'meta'         => 'What 2026 INSC and 2026:DHC numbers mean, how neutral citations work at the Supreme Court and High Courts, and how to cite and verify judgments reliably.',
  'h1'           => 'Reading 2026 INSC And 2026:DHC: Neutral Citations And The Discipline Of Verifying Judgments',
  'crumb'        => 'Supreme Court Practice — Procedure',
  'kicker'       => 'Practice Explainer · Supreme Court & High Court citation practice',
  'sub'          => 'Every Supreme Court judgment now carries an INSC number, and High Courts including Delhi issue their own neutral citations. This explainer covers how the systems work, why they matter for SLPs and appeals, and the verification habits that keep citations honest in the age of AI-generated references.',
  'date'         => '2026-10-05',
  'date_display' => '5 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">For decades, citing an Indian judgment meant citing a reporter — a volume some courts possessed and others did not, behind subscriptions some litigants could afford and others could not. The neutral citation changes that. A string such as <em>2026 INSC 1072</em> identifies a Supreme Court judgment uniquely, permanently and without reference to any commercial publisher; High Courts, Delhi prominent among them, run parallel systems of their own. Understanding the format — and the verification discipline it enables — is now part of basic litigation hygiene.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'blog.php' => 'All Articles'],
  'faqs'         => [
    ['What does a neutral citation contain?', 'Three elements: the year, a court code, and a sequential number — 2026 INSC 1072 is the 1072nd reportable judgment of the Supreme Court of India delivered in 2026. High Court formats follow the pattern year:code:number, the code identifying the court, with Delhi\'s judgments carrying the DHC code. The number attaches to the judgment itself, not to any reporter\'s pagination.'],
    ['Why do neutral citations matter in SLP and appellate practice?', 'Because the Supreme Court and High Courts increasingly expect them in synopses, lists of dates and written submissions, and because they let the Registry and the Bench pull the cited judgment directly from official repositories. A neutral citation also travels across databases — the same judgment is findable on the court\'s website, eSCR and free services without translating between reporters.'],
    ['Where can cited judgments be verified for free?', 'The Supreme Court\'s website and its eSCR service publish judgments with INSC numbers; High Court websites, including the Delhi High Court\'s judgments portal, publish theirs with neutral citations; and the eCourts ecosystem links orders to case numbers. A citation that cannot be traced in any official repository should be treated as unverified, whatever its source.'],
    ['Do neutral citations replace law reports?', 'No. The Supreme Court Reports and private reporters continue, and some courts still ask for the official report where one exists. The neutral citation is the judgment\'s permanent identifier; the report remains a venue where it is printed. Careful written submissions give the neutral citation alongside any reporter citation, so the court can verify either way.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court of India — judgments and eSCR', 'url' => 'https://www.sci.gov.in/judgements/'],
    ['label' => 'Delhi High Court — judgments portal', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Anatomy of the formats</h2>
<table class="law">
<tr><th>Citation</th><th>What it identifies</th></tr>
<tr><td>2026 INSC 1072</td><td>Supreme Court of India, 1072nd judgment of 2026 — unique and publisher-independent</td></tr>
<tr><td>2026:DHC:XXXX</td><td>A Delhi High Court judgment of 2026 bearing that serial in the Court&rsquo;s neutral citation register</td></tr>
<tr><td>2026:UHC:8893 / 2026:HHC:41819</td><td>Neutral citations of other High Courts — Uttarakhand and Himachal Pradesh in these examples — on the same year:code:number pattern</td></tr>
<tr><td>(2026) X SCC YYY</td><td>A commercial reporter citation — a place the judgment is printed, not its court-issued identity</td></tr>
</table>
<p>The court code is the load-bearing element: it makes the citation meaningful without any volume on any shelf. Because the number is issued by the court itself, it cannot be orphaned by a publisher&rsquo;s discontinuation, and it is the same for the lawyer in Delhi, the litigant in person in Dibrugarh and the judge reading either&rsquo;s submissions.</p>

<h2>The verification discipline</h2>
<p>Neutral citations arrive at a moment when the profession needs them for a second reason: fabricated citations. Courts in India and abroad have encountered submissions citing judgments that do not exist — a failure mode of careless AI-assisted research that has already drawn judicial censure and costs. The working rule that follows is simple and absolute: no judgment is cited unless it has been traced to an official repository — the Supreme Court&rsquo;s own site or eSCR for INSC numbers, the High Court&rsquo;s judgments portal for its neutral citations — or to a recognised full-text source, and read. A neutral citation that resolves to nothing is not a weak authority; it is no authority, and tendering it risks the advocate&rsquo;s credibility in the one forum where credibility compounds.</p>

<div class="check">
<p><strong>A citation checklist for written submissions:</strong> trace the neutral citation in an official repository; read the judgment, not the headnote; confirm the proposition appears in the court&rsquo;s reasoning rather than in a summary of arguments; note the Bench strength where the point is contested; and give the neutral citation alongside any reporter citation so the Bench can verify instantly.</p>
</div>

<h2>Using them well in practice</h2>
<p>In Supreme Court filings, the neutral citation belongs in the list of dates, the synopsis and the written submissions wherever a judgment is relied on; in the High Court and the district courts, the same habit is spreading through e-filing, which indexes judgments by these identifiers. Two further habits pay dividends. First, when relying on a very recent judgment, carry the INSC or High Court neutral citation even if no reporter has printed it yet — the citation proves the judgment&rsquo;s existence and date without waiting for publication. Second, when a judgment is cited against you, run the same verification in reverse; mis-citation is as often an opponent&rsquo;s error as a machine&rsquo;s, and the fastest way to deflate a submission is to show the Bench what the cited paragraph actually says.</p>

<div class="note"><p>Practice pointer: maintain the chamber&rsquo;s internal research notes with neutral citations as the primary key, reporter citations as secondary. Notes organised this way survive database migrations, subscription lapses and reporter delays — and they make every future verification a thirty-second task.</p></div>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
