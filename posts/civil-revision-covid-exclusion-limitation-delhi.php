<?php
$P = [
  'slug'         => 'civil-revision-covid-exclusion-limitation-delhi.php',
  'title'        => 'COVID Window Saves a Recovery Suit – Advocate Manish Jha',
  'meta'         => 'Delhi High Court, in revision, upholds a ₹1 crore recovery suit as within time: the COVID exclusion of 15.03.2020–28.02.2022 restores the full balance period.',
  'h1'           => 'The Pandemic Clock-Stop Still Matters: Full Balance of Limitation, Not Just 90 Days',
  'crumb'        => 'Revisions — Limitation',
  'kicker'       => 'Delhi High Court · 25 September 2026',
  'sub'          => 'In Anupam Gupta v. Hershit Kumar Gupta (C.R.P. 186/2026), the High Court declined to disturb a trial court&rsquo;s finding that a Rs. 1 crore recovery suit was within limitation, holding that the period excluded by the Supreme Court&rsquo;s COVID orders — 15 March 2020 to 28 February 2022 — enlarges limitation by the entire balance remaining, not merely ninety days.',
  'date'         => '2026-09-29',
  'date_display' => '29 September 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Years after the pandemic, the Supreme Court&rsquo;s suo motu limitation orders continue to decide cases. Their arithmetic is still misunderstood: opponents routinely argue that a claimant emerging from the excluded window received only a 90-day grace period. A Delhi High Court revision decided on 25 September 2026 restates the correct position for suits whose limitation was running through the window — the excluded period simply does not count, and the claimant gets the full unexpired balance on the other side.</p>',
  'related'      => ['civil-law.php' => 'Civil Law', 'business-corporate-law.php' => 'Business &amp; Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What did the Supreme Court&rsquo;s COVID orders actually direct?', 'In the suo motu limitation proceedings, the period from 15 March 2020 to 28 February 2022 stands excluded in computing limitation for all judicial and quasi-judicial proceedings. Where the balance period on 1 March 2022 was shorter than 90 days, a minimum of 90 days was allowed; where the balance was longer, the longer balance applies. The orders also expressly extended to periods under special statutes, including Sections 23(4) and 29A of the Arbitration and Conciliation Act, 1996.'],
    ['How did that apply to this suit?', 'The lending transaction dated from October 2018, so the three-year limitation for the money claim was running when the window opened in March 2020. Excluding the window, the unexpired balance became available again from 1 March 2022 — comfortably covering the suit filed in October 2023 after a demand of July 2023.'],
    ['Why was the challenge in a civil revision?', 'The defendant attacked the trial court&rsquo;s interlocutory ruling that the suit was within time. The High Court, in its revisional jurisdiction, found no jurisdictional error in the trial court&rsquo;s computation and declined to interfere.'],
    ['Is the 90-day figure ever relevant?', 'Yes — but only as a floor. It protects litigants whose balance period on 1 March 2022 was less than 90 days. It does not cap those whose unexpired balance was longer, which is the error the Court corrected here.'],
  ],
  'sources'      => [
    ['label' => 'Anupam Gupta v. Hershit Kumar Gupta, Delhi High Court, 25 September 2026 — full text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/98546523/'],
  ],
];
$BODY = <<<'HTML'
<h2>The dispute</h2>
<p>The plaintiff sued for recovery of Rs. 1,00,00,000 arising out of a loan transaction of October 2018. Repayment demands continued after the defendant&rsquo;s father passed away in 2021; a formal demand letter went out on 12 July 2023 and the suit followed in October 2023. The defendant contended the claim was time-barred. The trial court held it within limitation after applying the Supreme Court&rsquo;s COVID-19 exclusion, and the defendant carried the point to the High Court in C.R.P. 186/2026.</p>

<h2>Justice Anish Dayal&rsquo;s analysis</h2>
<div class="flow">
<div class="fstep"><strong>Identify what was running.</strong> Limitation for the money claim was alive and running when the national clock-stop began on 15 March 2020.</div>
<div class="fstep"><strong>Exclude the window.</strong> The Supreme Court&rsquo;s final order directs that 15.03.2020 to 28.02.2022 &ldquo;shall stand excluded&rdquo; in computing limitation — for ordinary proceedings and equally for special-statute periods, the order naming Sections 23(4) and 29A of the Arbitration Act in terms.</div>
<div class="fstep"><strong>Restore the full balance.</strong> The excluded period necessarily becomes available after the window closes: the claimant&rsquo;s limitation is enlarged by the entire unexpired balance, with 90 days operating only as a minimum for those left with less.</div>
</div>
<p>On that computation, the suit was in time, and the revision failed.</p>

<h2>The computation, visualised</h2>
<table class="law">
<tr><th>Scenario on 01.03.2022</th><th>Time available after the window</th></tr>
<tr><td>Balance period exceeded 90 days when the window opened</td><td>The full unexpired balance — the situation in this case</td></tr>
<tr><td>Balance period was under 90 days</td><td>A minimum of 90 days from 01.03.2022</td></tr>
<tr><td>Cause of action arose inside the window</td><td>Limitation effectively begins running from 01.03.2022</td></tr>
</table>
<div class="note">
<p>The exclusion is not condonation. It operates automatically as a matter of computation under the Supreme Court&rsquo;s Article 142 directions — no application under Section 5 of the Limitation Act is needed for the excluded period itself.</p>
</div>

<h2>Why this still matters in 2026</h2>
<p>Claims with long limitation periods — money suits, specific performance, execution, arbitration invocations — are still arriving in court with pandemic-era arithmetic embedded in them. Defendants will keep testing the point; trial courts will keep being asked to dismiss at the threshold. This revision adds Delhi High Court weight to the correct method and confirms that revisional interference is unavailable where the trial court has computed the exclusion faithfully.</p>

<h2>Practice checklist</h2>
<div class="check">
<p>Plead the COVID exclusion expressly in the plaint or application, with a dated computation table. Anchor the start date of limitation precisely — acknowledgment or part payment under Sections 18 and 19 of the Limitation Act may independently extend it. And when defending, attack the start date or the character of the claim, not the settled arithmetic of the exclusion.</p>
</div>
<p>This article is for general information only and is not legal advice. Limitation questions are unforgiving of error; parties should obtain advice on their own matter.</p>
HTML;
include __DIR__ . '/post-layout.php';
