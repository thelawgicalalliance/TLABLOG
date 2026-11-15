<?php
$P = [
  'slug'         => 'section-25-arbitration-party-default-ex-parte.php',
  'title'        => 'When a Party Ignores the Arbitration – Advocate Manish Jha',
  'meta'         => 'Section 25 of the Arbitration Act: claimant default terminates the case, respondent default forfeits the defence, and absence lets the tribunal proceed to award.',
  'h1'           => 'Empty Chairs, Full Awards: Party Default Under Section 25',
  'crumb'        => 'Arbitration: Section 25',
  'kicker'       => 'Procedure Explainer · Arbitration',
  'sub'          => 'Arbitration cannot be stalled by staying away. Section 25 of the Arbitration and Conciliation Act, 1996 prescribes exactly what happens when the claimant defaults, when the respondent defaults, and when a party simply stops appearing.',
  'date'         => '2026-11-15',
  'date_display' => '15 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A respondent who believes the arbitration is &ldquo;illegal&rdquo; and boycotts it; a claimant who invokes the clause and then loses interest; a party that files pleadings but vanishes before evidence — tribunals meet all three regularly. The Arbitration and Conciliation Act, 1996 answers each with Section 25, a short provision with sharp consequences. Parties who understand it litigate differently; parties who do not discover its effects only when an ex parte award arrives for enforcement.</p>',
  'related'      => ['business-corporate-law.php' => 'Business &amp; Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What happens if the claimant does not file the statement of claim?', 'Under Section 25(a), if the claimant fails to communicate the statement of claim in accordance with Section 23(1) without sufficient cause, the tribunal shall terminate the proceedings. The claim dies procedurally — though the underlying cause of action is not adjudicated, so the claimant&rsquo;s position on limitation for any fresh attempt becomes the real casualty.'],
    ['And if the respondent files no defence?', 'Section 25(b): the tribunal continues the proceedings without treating the failure as an admission of the claimant&rsquo;s allegations — and, since the 2015 amendment, has the discretion to treat the respondent&rsquo;s right to file the statement of defence as forfeited. The claimant must still prove its case; silence concedes nothing, but the respondent loses the pleading through which it would have contested it.'],
    ['Can the tribunal pass an award if a party stops appearing?', 'Yes. Under Section 25(c), where a party fails to appear at an oral hearing or to produce documentary evidence, the tribunal may continue the proceedings and make the award on the evidence before it. An ex parte award so made is a real award — enforceable under Section 36 like any other once the challenge window closes.'],
    ['Can a defaulting party come back?', 'The gate is "sufficient cause": a tribunal satisfied that the default is explained can accept late pleadings or recall the ex parte procedure for the future stages. After the award, the only route is a challenge under Section 34 on its limited grounds — including that the party was unable to present its case — which demands a genuine explanation, not a boycott repented of after the result.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The three defaults, mapped</h2>
<table class="law">
  <tr><th>Default</th><th>Provision</th><th>Consequence</th></tr>
  <tr><td>Claimant fails to communicate the statement of claim</td><td>Section 25(a)</td><td>Proceedings terminated — mandatory, absent sufficient cause.</td></tr>
  <tr><td>Respondent fails to communicate the statement of defence</td><td>Section 25(b)</td><td>Proceedings continue; failure is not an admission; tribunal may treat the right to file the defence as forfeited (2015 amendment).</td></tr>
  <tr><td>Any party fails to appear at hearing or produce evidence</td><td>Section 25(c)</td><td>Tribunal may continue and make the award on the evidence before it.</td></tr>
</table>
<p>The design is deliberately asymmetric. The claimant&rsquo;s default kills the reference because without a claim there is nothing to try. The respondent&rsquo;s default does not hand the claimant a decree — unlike a civil court&rsquo;s power to pronounce judgment on a deemed admission, the tribunal must still be persuaded by evidence. What the respondent loses is participation at the pleading stage; what it keeps, if it reappears, is whatever the tribunal in its discretion still permits.</p>

<h2>The boycott mistake</h2>
<p>The most expensive strategic error in arbitration practice remains the principled boycott: a respondent convinced that the clause is invalid, the arbitrator biased or the claims barred, who registers a protest and withdraws. Section 25(c) means the proceedings simply continue; Section 16 means jurisdictional objections not raised within the statutory stages risk being lost; and the eventual ex parte award meets the respondent at the Section 34 stage, where the grounds are narrow and the boycott itself undermines the plea of inability to present a case. The correct course for a party with jurisdictional objections is to raise them before the tribunal under Section 16, participate under protest, and preserve every objection on the record — attendance is not acquiescence.</p>

<h2>For the party in the room</h2>
<div class="flow">
  <div class="fstep"><strong>Build the record of service.</strong> Every notice, order and hearing date must demonstrably reach the absent party — through the modes the clause and the tribunal&rsquo;s orders prescribe. Ex parte awards survive or fall on proof of notice.</div>
  <div class="fstep"><strong>Prove, do not merely assert.</strong> The absent respondent&rsquo;s silence is not an admission; lead the documents and the witness evidence as if the chair were occupied, and have the award record that the tribunal acted on evidence.</div>
  <div class="fstep"><strong>Invite participation at each stage.</strong> Tribunals routinely record a fresh opportunity at every phase — pleadings, evidence, arguments. Each recorded invitation makes the eventual award harder to dislodge.</div>
  <div class="fstep"><strong>Mind the costs architecture.</strong> Defaults inflate costs; the costs regime under Section 31A allows the tribunal to make the defaulting party&rsquo;s conduct count in the final allocation.</div>
</div>

<h2>For the party tempted to stay away</h2>
<div class="check">
  <p>File something: even a skeletal defence preserved by the tribunal&rsquo;s indulgence is worth more than the forfeiture Section 25(b) now permits.</p>
  <p>If a hearing is genuinely impossible to attend, seek an adjournment in writing, in advance, with cause — tribunals distinguish sharply between explained absence and abandonment.</p>
  <p>Jurisdictional convictions belong in a Section 16 application, not in an empty chair; losing the application still preserves the objection for the Section 34 stage.</p>
  <p>After an ex parte award, act immediately: the three-month window under Section 34(3), extendable by thirty days at most, is unforgiving, and enforcement under Section 36 follows swiftly once it closes.</p>
</div>
<div class="note">This explainer describes the statutory defaults under the 1996 Act in general terms. Institutional rules chosen by the parties may add notice requirements and cure periods, and the procedural history of each arbitration controls how Section 25 applies to it.</div>
HTML;
include __DIR__ . '/post-layout.php';
