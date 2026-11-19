<?php
$P = [
  'slug'         => 'after-arbitral-award-set-aside-section-43-4.php',
  'title'        => 'After the Award Falls: What Happens Next – Advocate Manish Jha',
  'meta'         => 'When a court sets aside an arbitral award under Section 34, the dispute does not die. Fresh arbitration, the Section 43(4) limitation exclusion, and the parties\' options.',
  'h1'           => 'Setting Aside Is Not Settlement: The Dispute&rsquo;s Life After a Section 34 Annulment',
  'crumb'        => 'Arbitration: After Set-Aside',
  'kicker'       => 'Explainer · Arbitration Law',
  'sub'          => 'Clients assume that an award set aside means the claim is finished. Usually it means the opposite: the claim revives in an undecided state, the arbitration agreement still binds, and Section 43(4) hands back the time the annulled proceedings consumed.',
  'date'         => '2026-11-19',
  'date_display' => '19 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">The Section 34 petition succeeds; the award is set aside. For the award-debtor this feels like victory, and for the claimant like the end of years of effort. Both reactions overshoot. Setting aside an award annuls the adjudication, not the claim and not the arbitration agreement. Unless the court&rsquo;s reasoning destroys the claim&rsquo;s foundation itself, the dispute returns to the position before the arbitrator ruled — and the Arbitration and Conciliation Act, 1996 anticipates exactly this sequel: Section 43(4) excludes, from any fresh limitation computation, the time spent between the commencement of the arbitration and the date of the court&rsquo;s set-aside order.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'Commercial Forums', 'delhi-high-court.php' => 'Delhi High Court Practice'],
  'faqs'         => [
    ['Does a set-aside order decide the claim?', 'No. Section 34 review is confined to the statutory grounds — jurisdiction, procedure, public policy, patent illegality. An order setting aside an award on such grounds annuls the decision without adjudicating the underlying dispute, which remains alive and undecided. Only where the court&rsquo;s ground necessarily negates the claim itself (for instance, no arbitration agreement ever existed and no claim lies) does the sequel change character.'],
    ['What does Section 43(4) actually give the claimant?', 'Time. Where an award is set aside, the period between the commencement of the arbitration and the date of the court&rsquo;s order is excluded in computing the limitation prescribed for commencing proceedings — including fresh arbitration — with respect to the submitted dispute. The claim&rsquo;s clock, in other words, resumes roughly where it stood when the first arbitration began.'],
    ['Must the dispute go back to arbitration, or can a suit be filed?', 'The arbitration agreement survives the award&rsquo;s annulment in the ordinary case, so the dispute remains arbitrable and either party can invoke it afresh; a suit filed in its teeth invites a Section 8 reference. The parties may of course agree otherwise, and where the set-aside rested on the agreement&rsquo;s invalidity, the civil court becomes the only forum.'],
    ['Can the same arbitrator hear the fresh reference?', 'There is no automatic bar, but practice leans against it where the annulment reflected on the conduct of the proceedings. The appointment mechanism in the agreement operates afresh; parties frequently agree on a new tribunal precisely to inoculate the second award against a repeat challenge. Distinguish all this from Section 34(4), under which the court — before deciding the challenge — may remit the award to the same tribunal to eliminate curable grounds.'],
  ],
];
$BODY = <<<'HTML'
<h2>Three different endings, three different sequels</h2>
<div class="tiles">
  <div class="tile"><strong>Award upheld.</strong> Enforcement under Section 36 as a decree; the sequel is execution strategy, not fresh proceedings.</div>
  <div class="tile"><strong>Award remitted (Section 34(4)).</strong> Not a set-aside at all: the court adjourns the challenge and the same tribunal resumes to eliminate the curable defect — reasons supplied, procedure corrected — after which the challenge is decided against the corrected award.</div>
  <div class="tile"><strong>Award set aside.</strong> The adjudication is erased. The claim, the defences and (ordinarily) the arbitration agreement all survive, and the parties choose the next move: fresh arbitration, negotiated settlement, or — where arbitrability itself fell — the civil court.</div>
</div>

<h2>The limitation mechanics</h2>
<p>Limitation is the sequel&rsquo;s first technical question, and Section 43 answers it in layers. Section 43(1) applies the Limitation Act to arbitrations as it applies to court proceedings; Section 43(2) fixes commencement at the date the Section 21 notice is deemed received. Then Section 43(4) performs the rescue: where the court orders that an award be set aside, the period between the commencement of the arbitration and the date of that order is excluded when computing limitation for fresh proceedings on the dispute. The exclusion is of that defined period — time consumed before the arbitration commenced still counts, and time after the set-aside order runs normally. The practical instruction for claimants is therefore unchanged by victory or defeat: diarise limitation from the set-aside order&rsquo;s date and move with speed, because the statute restores consumed time, not leisure.</p>

<h2>Strategic choices for each side</h2>
<div class="flow">
  <div class="fstep"><strong>Claimant.</strong> Re-invoke promptly under Section 21 with a notice that addresses the defect which felled the first award — jurisdictional foundations pleaded fully, claims quantified cleanly, procedure proposed to avoid the old vice. Where the set-aside is under appeal (Section 37), weigh whether to await the appeal or commence protectively; commencing costs little and guards the calendar.</div>
  <div class="fstep"><strong>Respondent.</strong> Assess whether the set-aside ground kills the claim or merely the award. If the former, resist fresh proceedings at the threshold; if the latter, prepare for round two on the merits and preserve interim-measure defences — amounts deposited or secured under Section 9 during round one need fresh orders to remain held.</div>
  <div class="fstep"><strong>Both.</strong> Re-price settlement. An annulled award is nobody&rsquo;s victory: the claimant has spent years for nothing enforceable, the respondent faces the same claim again with interest still running on whatever is ultimately found due. The window after set-aside is statistically the dispute&rsquo;s best settlement moment.</div>
</div>

<h2>Collateral questions worth checking</h2>
<div class="check">
  <p>Interim measures: orders under Sections 9 and 17 made &ldquo;during&rdquo; the first arbitration do not automatically police the interregnum — seek continuation or fresh protection.</p>
  <p>Partial set-asides: where severable parts of an award fall and the rest stands, enforcement and fresh proceedings must be mapped claim by claim.</p>
  <p>Appeals: a Section 37 appeal against the set-aside can restore the award; fresh arbitration commenced meanwhile should be structured to abate gracefully if that happens.</p>
  <p>Costs and deposits of the first arbitration lie where the tribunal&rsquo;s orders and the set-aside leave them — recovery of wasted costs is rarely automatic and should be claimed expressly in round two.</p>
</div>
<div class="note">This explainer states the statutory framework in general terms for information only and is not advice in any pending challenge or arbitration.</div>
HTML;
include __DIR__ . '/post-layout.php';
