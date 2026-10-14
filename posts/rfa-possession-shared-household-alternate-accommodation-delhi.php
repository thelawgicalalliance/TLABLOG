<?php
$P = [
  'slug'         => 'rfa-possession-shared-household-alternate-accommodation-delhi.php',
  'title'        => 'Possession Decree, Widow\'s Shelter – Advocate Manish Jha',
  'meta'         => 'Delhi High Court upholds a possession decree in an RFA but makes it executable only after the owner secures alternate accommodation for his widowed daughter-in-law.',
  'h1'           => 'Owner Wins, But Shelter First: RFA Balances Title Against a Widow\'s Shared-Household Right',
  'crumb'        => 'Civil — First Appeals',
  'kicker'       => 'Delhi High Court · 12 October 2026',
  'sub'          => 'Justice Neena Bansal Krishna partly allows a first appeal: the father-in-law\'s possession decree stands, but execution waits until he provides the widowed daughter-in-law comparable accommodation or ₹15,000 monthly rent — and the unproved mesne profits award falls.',
  'date'         => '2026-10-14',
  'date_display' => '14 October 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Can a property owner evict his widowed daughter-in-law from the house where she has lived since her marriage? In <em>Raj Kumar @ Babbal (Deceased) through LRs v. Sh. Attar Singh</em> (RFA 778/2023, decided on 12 October 2026), the Delhi High Court answered with a carefully balanced yes-but: the owner\'s title and his decree for possession were upheld, yet the decree was made executable only after he secures suitable alternate accommodation for the widow — or pays ₹15,000 per month towards rent — because the suit property is her shared household under the Protection of Women from Domestic Violence Act, 2005, and maintenance under Hindu law includes residence.</p>',
  'related'      => ['property-disputes.php' => 'Property Disputes', 'civil-law.php' => 'Civil Law', 'domestic-violence.php' => 'Domestic Violence', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Could the appellants challenge the plaintiff\'s ownership?', 'No. The original defendant — the plaintiff\'s son — had admitted his father\'s ownership, and the appellants, who came on record as his legal representatives, stepped into his shoes. Section 116 of the Evidence Act estopped them from disputing the title of the person who had permitted the occupation. The 1988 purchase documents therefore went unchallenged in substance.'],
    ['How did the DV Act enter a civil possession suit?', 'The widow had entered the property on marriage, lived there as part of the joint family for over two decades, and had no other shown residence. The Court held the property is her "shared household" under Section 2(s), and her right of residence under Section 17(1) is independent of her husband\'s title and survived his death. A 2006 "disowning" notice did not alter it.'],
    ['Does the shared-household right defeat eviction altogether?', 'No. Section 17(2) permits eviction in accordance with the procedure established by law, and a properly instituted possession suit qualifies. But the trial court had decided the case purely on title and licence without examining the statutory right — an error the High Court corrected by conditioning execution on alternate accommodation, following the balancing approach in Ravneet Kaur.'],
    ['Why was the ₹10,000 monthly mesne profits award set aside?', 'Because it rested on no evidence of letting value — only on the property\'s nature and locality — and the plaintiff had himself valued the property modestly in cross-examination. Moreover, occupants protected by the shared-household right could not be branded unauthorised occupants liable for damages.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Raj Kumar @ Babbal (Thr. LRs) v. Attar Singh, Delhi High Court, 12.10.2026 (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/27235083/'],
    ['label' => 'Protection of Women from Domestic Violence Act, 2005 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2031'],
  ],
];
$BODY = <<<'HTML'
<h2>The family, the property, the suit</h2>
<p>The plaintiff purchased the Paschim Vihar property in 1988 through the familiar Delhi bundle — agreement to sell, general power of attorney, special power of attorney, receipt and will — and allowed his son and the son\'s family to live there, on his case as licensees. The son sublet portions and refused to vacate; a legal notice of December 2012 terminated the licence, and a suit for possession with damages of ₹10,000 per month followed. The son\'s defence was struck off for non-payment of costs, and after his death in 2015 his widow and daughters were brought on record. The trial court decreed possession and mesne profits; their own applications to defend independently were dismissed, and they appealed under Section 96 CPC.</p>

<h2>Two rights, one roof</h2>
<div class="compare">
<div class="col old"><strong>The owner\'s case</strong><p>Unchallenged title since 1988, a licence lawfully terminated, and occupants estopped under Section 116 of the Evidence Act from disputing the ownership their predecessor admitted. On classic property principles, possession follows.</p></div>
<div class="arrow">→</div>
<div class="col new"><strong>The widow\'s case</strong><p>A shared household under Section 2(s) of the DV Act, occupied since marriage and for over two decades; a Section 17(1) right of residence independent of her husband\'s title and surviving his death; and, under the Hindu Adoptions and Maintenance Act, a father-in-law\'s obligation to maintain a widowed daughter-in-law — maintenance that includes residence.</p></div>
</div>

<h2>The balance the Court struck</h2>
<p>Neither right was allowed to annihilate the other. The decree for possession stands — Section 17(2) itself contemplates eviction through due process, and a possession suit is due process. But execution is stayed in effect until the plaintiff provides the widow suitable alternate accommodation in the same or a nearby locality, commensurate with her present home, or pays rent of ₹15,000 per month sufficient to secure one. The Executing Court must verify compliance before the decree bites. The mesne profits award fell for want of proof. The result mirrors the balancing in <em>Ravneet Kaur</em>: the owner, who has lived elsewhere for two decades, recovers his property; the widow, who has nowhere else shown, is not rendered homeless in the process.</p>

<h2>What practitioners should take from the judgment</h2>
<div class="check">
<p>For owners suing family occupants: plead and prove letting value if damages are sought — locality assertions are not evidence — and anticipate the shared-household defence even in a title suit, because the High Court will examine it on appeal if the trial court does not. For widows and daughters-in-law: the residence right under Section 17 does not require ownership or a pending DV case to be asserted defensively, but it is a shield against homelessness, not a title; the realistic outcome is alternate accommodation, and the record should be built around comparability of residence. For both: a defence struck off below does not silence legal representatives on pure questions of law arising from admitted facts.</p>
</div>

<div class="note">
<p>First appeals under Section 96 CPC permit re-appreciation of both fact and law, which is what allowed the High Court to supply the statutory analysis the trial court omitted while preserving its core finding on title.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
