<?php
$P = [
  'slug'         => 'dv-act-appeals-section-29-sessions.php',
  'title'        => 'Appealing a DV Act Order: Section 29 – Advocate Manish Jha',
  'meta'         => 'Section 29 of the DV Act gives a thirty-day appeal to the Court of Session against a Magistrate&rsquo;s orders — what is appealable, how interim orders are treated, and what the Sessions Court can do.',
  'h1'           => 'Section 29 of the DV Act: The Appeal to the Sessions Court',
  'crumb'        => 'DV Act: Appeals',
  'kicker'       => 'Family Court Practice · 26 November 2026',
  'sub'          => 'Every order under the DV Act — protection, residence, monetary, custody, compensation, even many interim ones — has a thirty-day route to the Court of Session.',
  'date'         => '2026-11-26',
  'date_display' => '26 November 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">The Protection of Women from Domestic Violence Act, 2005 concentrates its trial-level work before the Magistrate, but it builds in a full appellate tier: Section 29 provides that there shall lie an appeal to the Court of Session within thirty days from the date on which the order made by the Magistrate is served on the aggrieved person or the respondent, whichever is later. For respondents facing onerous interim maintenance and for aggrieved women refused protection, Section 29 is the first — and often the decisive — corrective forum. This explainer maps what can be appealed, by whom, within what time, and with what consequences for the order under challenge.</p>',
  'related'      => ['domestic-violence.php' => 'Domestic Violence', 'matrimonial-lawyer-in-delhi.php' => 'Matrimonial Disputes', '498-lawyer-in-delhi.php' => 'Section 498A Defence', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Which orders can be appealed under Section 29?', 'Orders made by the Magistrate under the Act — protection orders (Section 18), residence orders (Section 19), monetary relief (Section 20), custody orders (Section 21), compensation (Section 22) and interim or ex parte orders under Section 23. Courts have generally treated substantive interim orders, such as interim maintenance, as appealable because they affect rights, while purely procedural directions are not.'],
    ['What is the limitation period and when does it start?', 'Thirty days from the date the order is served on the aggrieved person or the respondent, whichever is later. Service, not pronouncement, starts the clock. Delay can be sought to be condoned, but an appellant should not bank on it: an affidavit explaining each day helps.'],
    ['Does filing an appeal stay the Magistrate&rsquo;s order?', 'No. There is no automatic stay. The Sessions Court can grant a stay or modify the arrangement pending appeal, and in maintenance matters it frequently conditions a stay on deposit or continued payment of all or part of the awarded amount.'],
    ['What comes after the Sessions Court?', 'There is no second appeal in the Act itself. The losing party&rsquo;s remedy against the appellate order is ordinarily a petition before the High Court — invoking Section 528 BNSS (inherent powers, formerly Section 482 CrPC) or supervisory jurisdiction under Article 227, within the narrow limits those jurisdictions allow.'],
  ],
  'sources'      => [
    ['label' => 'Section 29, Protection of Women from Domestic Violence Act, 2005 (text)', 'url' => 'https://indiankanoon.org/doc/1771195/'],
    ['label' => 'Protection of Women from Domestic Violence Act, 2005 (full text)', 'url' => 'https://indiankanoon.org/doc/542601/'],
  ],
];
$BODY = <<<'HTML'
<h2>Where Section 29 sits in the DV Act&rsquo;s scheme</h2>
<p>The DV Act is a civil-protective statute administered through criminal courts. The Magistrate (in Delhi, usually the Mahila Court of the Judicial Magistrate First Class or Metropolitan Magistrate) passes the operative orders; Section 31 criminalises breach of a protection order; and Section 29 provides the appellate valve. Because the Act travels through the criminal-court hierarchy, the appeal goes to the Court of Session — not to the District Judge on the civil side, and not to the Family Court.</p>

<h2>What is appealable — and the interim-order question</h2>
<p>Section 29 speaks simply of &ldquo;the order made by the Magistrate&rdquo;. In practice, three categories arise:</p>
<div class="tiles">
  <div class="tile"><strong>Final orders.</strong> Orders allowing or dismissing the Section 12 application, and the specific reliefs under Sections 18 to 22, are squarely appealable by whichever side is aggrieved.</div>
  <div class="tile"><strong>Interim orders under Section 23.</strong> Substantive interim orders — interim maintenance, interim residence directions, ex parte protection orders — decide valuable rights for the duration of the case and are routinely entertained in appeal. The thirty-day clock applies to them with equal force.</div>
  <div class="tile"><strong>Procedural directions.</strong> Adjournments, directions to file replies or affidavits of income, and similar case-management orders are not orders &ldquo;under the Act&rdquo; in the relevant sense; challenging them in appeal usually fails at the threshold.</div>
</div>

<h2>How the Sessions Court approaches a DV appeal</h2>
<p>The appeal is a rehearing on the record of the Magistrate. The Sessions Court can confirm, modify or set aside the order, and can remand where the Magistrate decided without the material the statute expects — for instance, interim maintenance fixed without the affidavits of income and assets that Delhi courts require in matrimonial litigation. Three practical features matter:</p>
<table class="law">
  <tr><th>Feature</th><th>Practical consequence</th></tr>
  <tr><td>No automatic stay</td><td>The respondent must keep complying until a stay is granted; arrears accrue and are recoverable even if the appeal later succeeds in part</td></tr>
  <tr><td>Conditional stays</td><td>Stays of monetary orders are often conditioned on deposit of arrears or continued payment at a reduced figure</td></tr>
  <tr><td>Fresh material</td><td>The appellate court ordinarily decides on the Magistrate&rsquo;s record; genuinely new, material documents need an application explaining why they were not produced below</td></tr>
</table>

<h2>Common grounds that succeed — and ones that do not</h2>
<div class="check">
  <p><strong>Jurisdictional and threshold errors.</strong> No domestic relationship with the particular respondent, no shared household on the aggrieved person&rsquo;s own pleading, or reliefs granted against persons never arrayed — these are the strongest appellate grounds.</p>
  <p><strong>Quantum unsupported by the record.</strong> Maintenance fixed without engaging with the income affidavits, or compensation untethered to any finding of domestic violence, invites interference.</p>
  <p><strong>Mere re-argument of facts.</strong> Asking the Sessions Court to re-appreciate disputed testimony at the interim stage rarely works; interim findings are tentative by design.</p>
</div>
<p>For respondents, the disciplined course is to comply, appeal within thirty days, and seek a realistic conditional stay. For aggrieved persons whose reliefs were refused or under-granted, Section 29 is equally available — the provision is two-way, and appellate courts regularly enhance as well as reduce.</p>
<div class="note">This explainer sets out the general scheme of appeals under Section 29 of the DV Act for information. It is not legal advice; the maintainability and prospects of any appeal depend on the specific order and record.</div>
HTML;
include __DIR__ . '/post-layout.php';
