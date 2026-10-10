<?php
$P = [
  'slug'         => 'slp-limitation-ninety-days-condonation.php',
  'title'        => 'The SLP Limitation Clock – Advocate Manish Jha',
  'meta'         => 'Limitation for special leave petitions: the ninety-day period, exclusion of time for certified copies, condonation practice, and the cost of filing late.',
  'h1'           => 'Ninety Days, Properly Counted: Limitation for Special Leave Petitions',
  'crumb'        => 'Supreme Court Practice — SLPs',
  'kicker'       => 'Practice Explainer · Supreme Court Rules, 2013',
  'sub'          => 'An SLP filed on day ninety-one begins with an apology. This explainer covers how the period is computed, what time stands excluded for certified copies, and how the Supreme Court actually treats condonation applications.',
  'date'         => '2026-10-10',
  'date_display' => '10 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Article 136 of the Constitution contains no limitation period — the time limits for special leave petitions come from the Supreme Court Rules, 2013, which prescribe ninety days from the judgment or order challenged, with a shorter window where a certificate of fitness was first sought from the High Court and refused. The computation rules are litigant-friendly, the condonation jurisprudence is not: delay in approaching the Supreme Court is explained day by day or paid for in dismissal, costs, or a merits hearing conducted under the shadow of laches.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'blog.php' => 'All Articles'],
  'faqs'         => [
    ['What is the limitation period for an SLP?', 'Under the Supreme Court Rules, 2013, a special leave petition is to be filed within ninety days from the date of the judgment or order sought to be challenged. Where the party first applied to the High Court for a certificate of appeal to the Supreme Court and the certificate was refused, the petition is to be filed within sixty days of the refusal. The periods apply to civil and criminal SLPs alike, subject to the Rules.'],
    ['Does the time spent obtaining a certified copy count?', 'No. The principle of Section 12 of the Limitation Act — exclusion of the time requisite for obtaining a copy of the judgment — is part of the computation. The practical discipline is to apply for the certified copy immediately upon pronouncement: time before the application and after the copy is ready is not excluded, and the copy application\'s date-stamps become part of the limitation affidavit.'],
    ['How is delay condoned in the Supreme Court?', 'By an application under the Rules supported by an affidavit explaining each period of delay. The Court\'s approach is discretionary and fact-driven: genuinely explained delays — illness, misleading advice, time lost in a wrong but bona fide forum — are regularly condoned, while bureaucratic lethargy receives progressively less indulgence, and the Court has repeatedly refused to treat government petitioners as a privileged class whose files may move slowly. Costs as a condition of condonation are common.'],
    ['Is a late SLP ever strategically viable?', 'Sometimes unavoidably — a party learns of an order late, or a settlement collapses after the window. But delay interacts with Article 136\'s discretionary character: even where delay is condoned, extraordinary jurisdiction is less readily exercised for a petitioner who sat on his rights, and third-party interests crystallised in the interim (auctions, appointments, possession) weigh heavily. The working rule is simple: compute early, file within time, and treat condonation as an emergency exit rather than a route.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court of India — Rules and practice', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Limitation Act, 1963 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Computing the period</h2>
<div class="flow">
<div class="fstep"><strong>Start point.</strong> The date of the impugned judgment or final order. For review-route petitioners, note that challenging the main judgment after an unsuccessful review raises its own timing questions — the safest practice is to protect limitation against the main judgment rather than rely on the review\'s pendency.</div>
<div class="fstep"><strong>Exclude copy time.</strong> From the date the certified copy was applied for to the date it was ready for delivery. Apply the day of pronouncement or as soon after as possible; preserve the court fee receipts and the copy\'s endorsement page, which the Registry scrutinises.</div>
<div class="fstep"><strong>Count ninety days.</strong> Sixty where a certificate was refused — a trap for parties who tried the certificate route first.</div>
<div class="fstep"><strong>File, then cure.</strong> Filing within time with curable defects is far better than filing late in perfect form: limitation is tested against the original presentation, while defects are cured on the Registry\'s timelines (with refiling delay a separate, and separately explained, subject).</div>
</div>

<h2>The condonation affidavit that works</h2>
<div class="tiles">
<div class="tile"><strong>Chronology, not rhetoric</strong><p>A dated table from the impugned order to the filing: when the copy was applied for and received, when instructions were given, when the draft was settled. Gaps are explained, not papered over with &ldquo;procedural formalities&rdquo;.</p></div>
<div class="tile"><strong>Specific causes</strong><p>Illness with records; the earlier bona fide proceeding with its orders; the communication failure with its correspondence. The affidavit is evidence and reads as such.</p></div>
<div class="tile"><strong>Candour about fault</strong><p>Where the delay is counsel-side or office-side, saying so plainly fares better than fiction; the Court distinguishes the litigant\'s diligence from the system\'s friction.</p></div>
<div class="tile"><strong>Prejudice addressed</strong><p>Where third-party rights arose during the delay, confront them: offer protective terms. Silence on supervening events is treated as concealment.</p></div>
</div>

<div class="note">
<p>Separate clocks, often confused: delay in <em>filing</em> (the ninety days), delay in <em>refiling</em> after return by the Registry for defects, and delay in <em>service</em> or taking steps. Each is computed and explained separately, and a petition comfortably within the first can founder on an unexplained year in the second. Diarise all three.</p>
</div>

<h2>Criminal SLPs and surrender</h2>
<p>In criminal matters the limitation analysis travels with the surrender requirement: a convict\'s petition is ordinarily entertained on surrender or with an exemption application, and time spent arranging neither extends the ninety days. Where suspension of sentence was pursued before the High Court after conviction, the SLP against the conviction still runs from the impugned judgment — parallel applications below do not stop the Supreme Court clock.</p>

<h2>Checklist before filing</h2>
<div class="check">
<p><strong>Dates fixed:</strong> pronouncement date, copy-application date, copy-ready date, filing date — all consistent across the synopsis, the limitation paragraph and the affidavit.</p>
<p><strong>Limitation paragraph:</strong> the petition\'s standard paragraph stating that it is within time (or accompanied by a condonation application) is accurate, not formulaic.</p>
<p><strong>Condonation application:</strong> filed with the SLP, not after the Registry objects; supported by affidavit; praying specifically for the number of days.</p>
<p><strong>Interim urgency:</strong> where dispossession, recovery or arrest looms, the delay narrative and the urgency narrative must cohere — urgency discovered on day eighty-nine invites questions.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
