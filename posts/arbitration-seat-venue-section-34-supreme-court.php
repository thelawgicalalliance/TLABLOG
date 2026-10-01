<?php
$P = [
  'slug'         => 'arbitration-seat-venue-section-34-supreme-court.php',
  'title'        => 'Sitting Somewhere Is Not a Seat – Advocate Manish Jha',
  'meta'         => 'Supreme Court holds that merely conducting arbitral proceedings at a place does not make it the juridical seat, restoring Section 34 petitions before the Sundargarh court.',
  'h1'           => 'Venue Is Not Seat: Supreme Court Restores Section 34 Petitions to the District Court',
  'crumb'        => 'Seat vs Venue',
  'kicker'       => 'Supreme Court · 23 September 2026',
  'sub'          => 'Justice Sanjay Kumar and Justice Sanjeev Sachdeva hold that without party agreement or a designation, the place where the tribunal happened to sit does not capture supervisory jurisdiction.',
  'date'         => '2026-10-01',
  'date_display' => '1 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Where do you challenge an arbitral award when the contract names no seat and the tribunal simply sat where it was convenient? In <strong>Mahanadi Coalfields Ltd &amp; Ors. v. GSCO Infrastructure Pvt. Ltd.</strong> (Civil Appeal arising out of SLP (C) No. 21375 of 2025, decided 23 September 2026), the Supreme Court held that the mere conduct of arbitral proceedings at a particular place does not, by itself, make it the juridical seat — and restored Section 34 petitions to the District Judge, Sundargarh, where the contract had been performed.</p>',
  'related'      => ['business-corporate-law.php' => 'Commercial & Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Litigation', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['What is the difference between the seat and the venue of arbitration?', 'The seat is the juridical home of the arbitration: it fixes which courts exercise supervisory jurisdiction, including over challenges under Section 34. The venue is only the physical place where hearings are held. As this judgment puts it, the seat determines the supervising courts while the venue merely denotes where sittings happen.'],
    ['If no seat is agreed, which court hears a Section 34 challenge?', 'The court that would have jurisdiction over the underlying dispute under the ordinary rules — here, the court within whose territory the contract work was executed. The dispute resolution clause, any express designation of a seat, and the place of the cause of action all feed the analysis.'],
    ['Does the High Court that appointed the arbitrator become the seat court?', 'No. A Section 11 appointment by a High Court does not convert that High Court\'s location into the seat, and the tribunal\'s choice to sit at a convenient city — often where the arbitrator is based — does not either, absent agreement of the parties.'],
    ['Why does the first filing matter in arbitration jurisdiction?', 'Under Section 42 of the Arbitration and Conciliation Act, 1996, once an application under Part I is made in a competent court, that court alone has jurisdiction over subsequent applications in the same arbitration. Identifying the correct court at the outset therefore shapes the entire supervisory life of the case.'],
  ],
  'sources'      => [
    ['label' => 'Mahanadi Coalfields Ltd v. GSCO Infrastructure Pvt. Ltd. — judgment dated 23 September 2026 (full text PDF)', 'url' => 'https://www.livelaw.in/pdf_upload/2026/09/23/3959920252026-09-23-702122.pdf'],
    ['label' => 'Report — LiveLaw (2026 LiveLaw (SC) 978)', 'url' => 'https://www.livelaw.in/supreme-court/arbitration-high-courts-location-doesnt-become-arbitrations-seat-just-because-hc-appointed-arbitrator-supreme-court-551524'],
  ],
];
$BODY = <<<'HTML'
<h2>How the jurisdictional knot formed</h2>
<p>Mahanadi Coalfields issued a tender in November 2012 for hiring heavy earth-moving machinery for mining operations in Sundargarh district, Odisha. GSCO won the work; the contract contained no arbitration clause and, consequently, no seat. When disputes arose, the Orissa High Court appointed a sole arbitrator in March 2019 under Section 11(6). The tribunal held its proceedings at Cuttack and delivered an award in GSCO&rsquo;s favour in October 2021.</p>
<p>MCL challenged the award under Section 34 — before the District Court at Sundargarh, where the work had been executed. The Orissa High Court held the petitions not maintainable there, reasoning that Cuttack, where the arbitration had been conducted, was the seat. The Supreme Court took the opposite view.</p>

<h2>What the Supreme Court held</h2>
<div class="compare">
  <div class="col old"><strong>High Court&rsquo;s approach</strong><br>Proceedings were held at Cuttack, so Cuttack became the seat, and only the courts there could entertain the Section 34 challenge.</div>
  <div class="arrow">→</div>
  <div class="col new"><strong>Supreme Court&rsquo;s approach</strong><br>Cuttack was merely the venue. Nothing — not the agreement (there was none on this point) and not the appointment order — designated Cuttack as the seat. Convenience of sittings is not a jurisdictional act.</div>
</div>
<p>The Court distilled the enquiry for cases without a designated seat: look to the contract&rsquo;s dispute-resolution terms, to any express agreement on a seat, and, failing both, to the courts having territorial jurisdiction over the dispute — here, Sundargarh, where the subject work was executed. The judgment under appeal was set aside and the Section 34 petitions restored to the District Judge, Sundargarh, for expeditious decision.</p>

<h2>Why this matters beyond Odisha</h2>
<p>A large share of domestic arbitrations — particularly under government works contracts and older agreements — run without any seat clause. In practice the tribunal sits where the arbitrator finds convenient, frequently the city of the High Court that made the appointment. This judgment stops that convenience from silently relocating supervisory jurisdiction away from the courts naturally connected to the dispute. Three practice points follow.</p>
<div class="flow">
  <div class="fstep"><strong>Draft the seat.</strong> A single sentence — &ldquo;the seat of arbitration shall be New Delhi&rdquo; — avoids the entire contest. Where exclusive jurisdiction is intended, say so expressly.</div>
  <div class="fstep"><strong>Audit the appointment order.</strong> If the Section 11 court designates a seat, that designation controls. If it is silent, do not assume the High Court&rsquo;s city has become the seat.</div>
  <div class="fstep"><strong>File Section 34 where jurisdiction truly lies.</strong> A challenge filed in the wrong court risks limitation complications under Section 34(3); the choice deserves analysis at the outset, not after an objection.</div>
</div>
<div class="note"><p>For Delhi practice: where parties have designated New Delhi as the seat, Delhi courts exercise exclusive supervisory jurisdiction regardless of where hearings occurred — and conversely, after this judgment, hearings held in Delhi for convenience do not by themselves bring a challenge within Delhi&rsquo;s jurisdiction. Which Delhi forum hears a Section 34 petition then depends on the specified value, with Commercial Courts and the Commercial Division of the High Court dividing the field.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
