<?php
$P = [
  'slug'         => 'arbitration-award-set-aside-no-notice-calcutta.php',
  'title'        => 'Award Passed Behind Their Back Set Aside – Advocate Manish Jha',
  'meta'         => 'Calcutta High Court sets aside a 2017 arbitral award: no Section 21 notice, no service of claim or award, destroyed records — and a Section 34 filing held within time.',
  'h1'           => 'No Notice, No Service, No Records: An Arbitral Award Falls Four Years After It Was Made',
  'crumb'        => 'Arbitration: Award Set Aside',
  'kicker'       => 'Calcutta High Court · 25 November 2026',
  'sub'          => 'Because a signed award was never delivered to the parties under Section 31(5), the Section 34 clock never started — and what the record showed of the proceeding led the court to find fraud and a denial of natural justice.',
  'date'         => '2026-11-27',
  'date_display' => '27 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">An award made in 2017, challenged in 2021, set aside in 2026 &mdash; and the limitation objection failed. In <em>Leonine Estates Pvt. Ltd. v. Ritman Infra Ltd.</em> (AP No. 491 of 2021, decided 25 November 2026), Justice Shampa Sarkar of the Calcutta High Court held that the three-month window under Section 34(3) of the Arbitration and Conciliation Act, 1996 never opened, because a signed copy of the award was never delivered to the parties as Section 31(5) requires. On the merits, the court found the proceeding had been conducted behind the petitioners&rsquo; back: no Section 21 notice, no service of the statement of claim, communications sent to a removed director&rsquo;s home, and an arbitrator who later wrote that he had destroyed the records.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'property-disputes.php' => 'Property Disputes', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['How was a 2021 challenge to a 2017 award within time?', 'Section 34(3) runs from the date the party received the award. Under Section 31(5), a signed copy must be delivered to each party — delivery to an agent or advocate is not enough. The court, relying on the ARK Builders line of authority, found no proof of such delivery; the petitioners learnt of the award only from an Order VII Rule 11 application served on 23 March 2021 and filed the challenge on 26 November 2021.'],
    ['What were the natural justice findings?', 'There was no evidence the petitioners received the Section 21 notice invoking arbitration or the statement of claim. All communications went to the residential address of a person whose removal as director was established by Forms DIR-12, and whose authority to represent the companies was not shown. The court held the award was passed behind the petitioners&rsquo; back and violated natural justice.'],
    ['What role did the destroyed records play?', 'Neither side could produce the pleadings, and the arbitrator wrote in September 2025 that he had destroyed the records of the proceeding. The court drew an adverse presumption from the withheld and missing pleadings, and found the making of the award induced and affected by fraud, rendering it contrary to Indian law under the ONGC v. Western Geco, Associate Builders and Ssangyong framework.'],
    ['Why was the Commercial Division objection rejected?', 'The respondents argued the challenge belonged in the Commercial Division. The court held the dispute arose from an unregistered agreement for sale of land with a tin shed — not immovable property used exclusively in trade or commerce — so it fell outside Section 2(1)(c)(vii) of the Commercial Courts Act, 2015.'],
  ],
  'sources'      => [
    ['label' => 'Leonine Estates Pvt. Ltd. v. Ritman Infra Ltd., AP No. 491 of 2021 — judgment text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/98693747/'],
  ],
];
$BODY = <<<'HTML'
<h2>The transaction and the award</h2>
<p>Ritman Infra invoked an arbitration clause in a sale agreement dated 8 December 2014 concerning land with a tin shed at Madurdaha. An award followed on 16 October 2017. The petitioner companies say they knew nothing of any of it &mdash; not the invocation, not the claim, not the award &mdash; until a court filing in another proceeding surfaced in March 2021. Within months they moved under Section 34.</p>

<h2>The limitation battle</h2>
<p>Everything turned on Section 31(5): &ldquo;after the arbitral award is made, a signed copy shall be delivered to each party.&rdquo; The court applied the settled rule that <em>party</em> means the party itself. The only service attempted was a letter to G.D. Sharma at his residence &mdash; but Forms DIR-12 established he had been removed as director, the companies had shifted their registered office, and nothing showed his authority to receive for them. No delivery, no starting point; no starting point, no limitation bar. The three-month-plus-thirty-days discipline of Section 34(3) is strict once the clock starts, but it is the award-holder&rsquo;s burden to start it.</p>

<h2>What the merits revealed</h2>
<div class="flow">
  <div class="fstep"><strong>No Section 21 notice.</strong> The claimant could not satisfy the court that the arbitration was ever validly invoked against the petitioners.</div>
  <div class="fstep"><strong>No statement of claim served.</strong> And when the court asked for the pleadings, neither side produced them.</div>
  <div class="fstep"><strong>Records destroyed.</strong> The arbitrator&rsquo;s letter of 11 September 2025 said he had destroyed the records of the proceeding — leaving the award unsupported by any verifiable process.</div>
  <div class="fstep"><strong>The findings.</strong> Natural justice violated; adverse presumption drawn; the making of the award induced and affected by fraud; the award contrary to the fundamental policy of Indian law.</div>
</div>

<h2>Takeaways for arbitration users</h2>
<table class="law">
  <tr><th>For</th><th>Lesson</th></tr>
  <tr><td>Award-holders</td><td>Prove delivery of the signed award to each party — a dispatch register and acknowledgment are worth more than the award itself when enforcement is resisted years later</td></tr>
  <tr><td>Claimants</td><td>Serve the Section 21 notice and claim at the registered office and preserve the proof; service on individuals of doubtful authority poisons everything downstream</td></tr>
  <tr><td>Arbitrators</td><td>Retain the record; its destruction invites adverse presumptions against the whole proceeding</td></tr>
  <tr><td>Respondents discovering an old award</td><td>Move immediately on discovery and document how knowledge arose — the Section 31(5) argument is powerful but fact-hungry</td></tr>
</table>
<p>The award was set aside and the application allowed. The forum point carries a quieter lesson for Delhi practice too: whether a dispute over immovable property is &ldquo;commercial&rdquo; under Section 2(1)(c)(vii) depends on actual exclusive use in trade or commerce, not on the parties being companies.</p>
<div class="note">This report summarises a judgment of the Calcutta High Court dated 25 November 2026 for general information. It is not legal advice.</div>
HTML;
include __DIR__ . '/post-layout.php';
