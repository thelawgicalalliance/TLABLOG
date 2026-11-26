<?php
$P = [
  'slug'         => 'pre-institution-mediation-section-12a-commercial.php',
  'title'        => 'Section 12A Mediation Before Commercial Suits – Advocate Manish Jha',
  'meta'         => 'Pre-institution mediation under Section 12A Commercial Courts Act is mandatory since Patil Automation: when it applies, the urgent-relief exception, and how the process runs in Delhi.',
  'h1'           => 'The Compulsory First Stop: Pre-Institution Mediation Under Section 12A of the Commercial Courts Act',
  'crumb'        => 'Commercial: Section 12A',
  'kicker'       => 'Commercial Courts Practice · 26 November 2026',
  'sub'          => 'A commercial suit that does not contemplate urgent interim relief cannot be instituted without first exhausting mediation — and plaints filed in breach are liable to rejection.',
  'date'         => '2026-11-26',
  'date_display' => '26 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Section 12A of the Commercial Courts Act, 2015 requires a plaintiff whose suit does not contemplate any urgent interim relief to exhaust the remedy of pre-institution mediation before filing. In <em>Patil Automation Pvt. Ltd. v. Rakheja Engineers Pvt. Ltd.</em>, the Supreme Court declared the provision mandatory, holding that suits instituted in violation are liable to have their plaints rejected under Order VII Rule 11 CPC — even at the court&rsquo;s own instance. For recovery and contract litigation in Delhi&rsquo;s commercial courts, Section 12A is now a jurisdictional checkpoint that shapes strategy from the demand-notice stage onward.</p>',
  'related'      => ['business-corporate-law.php' => 'Business &amp; Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'civil-law.php' => 'Civil Litigation', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Which suits does Section 12A cover?', 'Commercial disputes of a specified value — Rs 3 lakh and above — triable under the Commercial Courts Act: trade and commerce contracts, distribution and franchise agreements, intellectual property, construction, shareholder and joint-venture disputes, among others listed in Section 2(1)(c). If the suit, as framed, does not contemplate urgent interim relief, mediation first is compulsory.'],
    ['What counts as &ldquo;urgent interim relief&rdquo;?', 'Relief whose deferral would defeat the suit&rsquo;s purpose — an injunction against invocation of a bank guarantee, restraint on alienation of the suit property, seizure of infringing goods. Courts examine the plaint&rsquo;s own case: a cosmetic interim application bolted on to dodge mediation can be seen through, and the question is tested on the pleadings as filed.'],
    ['How does the mediation actually proceed?', 'The plaintiff applies to the authority notified under the Legal Services Authorities Act — in Delhi, the District Legal Services Authority for the concerned district. Notice issues to the opposite party; if both participate, the process must conclude within three months, extendable by two more with consent. A settlement has the status of an arbitral award on agreed terms under Section 30(4) of the Arbitration and Conciliation Act, 1996. If the opposite party stays away, a non-starter report issues and the suit can be filed.'],
    ['Does time spent in mediation eat into limitation?', 'No. Section 12A(5) excludes the mediation period from limitation computation under the Limitation Act — a point worth pleading expressly in the plaint&rsquo;s limitation paragraph.'],
  ],
  'sources'      => [
    ['label' => 'Patil Automation Pvt. Ltd. v. Rakheja Engineers Pvt. Ltd. (Supreme Court, 17 August 2022)', 'url' => 'https://indiankanoon.org/doc/164693074/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why Parliament made mediation the gatekeeper</h2>
<p>The Commercial Courts Act&rsquo;s 2018 amendment inserted Section 12A to decongest commercial dockets and institutionalise settlement before litigation hardens positions. The Supreme Court in <em>Patil Automation</em> read the legislative design strictly: the word &ldquo;shall&rdquo;, the statutory object, and the detailed machinery (rules, trained mediators, timelines) all pointed to a mandatory character. The consequences are concrete — plaints filed without compliance are rejected, and the rejection can be ordered suo motu, though a fresh suit after compliance remains possible since rejection is not a decision on merits.</p>

<h2>The decision tree before filing</h2>
<div class="flow">
  <div class="fstep"><strong>Is the dispute &ldquo;commercial&rdquo; and of specified value?</strong> Check Section 2(1)(c) and the Rs 3 lakh threshold. If not, the ordinary civil procedure applies and Section 12A never engages.</div>
  <div class="fstep"><strong>Does the suit genuinely contemplate urgent interim relief?</strong> If yes — and the plaint&rsquo;s own averments support urgency — the suit may be instituted directly. The interim application must be authentic: urgency manufactured to bypass mediation invites rejection of the plaint and costs.</div>
  <div class="fstep"><strong>If no urgency: apply for mediation.</strong> File before the notified authority with the requisite fee; await the opposite party&rsquo;s response; participate in sessions; and obtain either a settlement or a failure/non-starter report, which must be annexed to the eventual plaint.</div>
</div>

<h2>Strategic texture for both sides</h2>
<table class="law">
  <tr><th>Position</th><th>Considerations</th></tr>
  <tr><td>Plaintiff with a money claim</td><td>Mediation adds roughly two to five months. Use the window: a detailed claim notice with documents often extracts part-payment or an acknowledgment that strengthens the eventual suit</td></tr>
  <tr><td>Plaintiff needing interim relief</td><td>Plead the urgency with particulars — threatened dissipation, imminent encashment, ongoing infringement — and seek the relief at the first hearing; a dormant interim prayer undermines the exemption</td></tr>
  <tr><td>Defendant invited to mediate</td><td>Non-appearance produces a non-starter report and surrenders a costless chance to test the claim; appearance without settlement costs little and reveals the opponent&rsquo;s documents and theory</td></tr>
  <tr><td>Defendant facing a non-compliant suit</td><td>Raise Section 12A at the threshold through Order VII Rule 11; the objection is jurisdictional in character and does not await trial</td></tr>
</table>

<h2>Common pitfalls in Delhi practice</h2>
<div class="tiles">
  <div class="tile"><strong>Wrong authority.</strong> The application must go to the authority notified for the defendant&rsquo;s or cause-of-action jurisdiction; misdirected applications waste limitation-sensitive weeks even though the mediation period itself is excluded.</div>
  <div class="tile"><strong>Settlement left unstamped as an award.</strong> A Section 12A settlement has arbitral-award status — draft it with operative precision (amounts, dates, default clauses), because it is enforceable as a decree.</div>
  <div class="tile"><strong>Forgetting counterclaims.</strong> A defendant&rsquo;s commercial counterclaim is itself a commercial dispute; where it contemplates no urgent relief, parties increasingly route it through mediation to insulate it from the same objection.</div>
</div>
<div class="note">This explainer describes the Section 12A regime in general terms for information. It is not legal advice; whether a particular suit contemplates urgent interim relief is assessed on its own pleadings.</div>
HTML;
include __DIR__ . '/post-layout.php';
