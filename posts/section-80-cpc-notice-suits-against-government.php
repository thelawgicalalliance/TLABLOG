<?php
$P = [
  'slug'         => 'section-80-cpc-notice-suits-against-government.php',
  'title'        => 'Two Months\' Notice to the State – Advocate Manish Jha',
  'meta'         => 'Section 80 CPC requires two months\' prior notice before suing the government or public officers. Contents, the urgent-leave exception, waiver, and drafting practice.',
  'h1'           => 'Section 80 CPC: The Mandatory Notice Before Suing the Government',
  'crumb'        => 'Section 80 Notice',
  'kicker'       => 'Procedure & Practice · Civil',
  'sub'          => 'A suit against the government or a public officer for official acts filed without the statutory notice is not merely irregular — it is barred, subject only to the leave route in Section 80(2).',
  'date'         => '2026-10-01',
  'date_display' => '1 October 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Before the State can be sued, it must be warned. Section 80 of the Code of Civil Procedure, 1908 bars the institution of a suit against the Government, or against a public officer in respect of an act purporting to be done in official capacity, until two months after a written notice stating the cause of action, the plaintiff&rsquo;s particulars and the relief claimed has been delivered to the prescribed authority. The provision looks like a formality; in practice it decides maintainability, limitation strategy and sometimes the outcome itself.</p>',
  'related'      => ['civil-law.php' => 'Civil Litigation', 'property-disputes.php' => 'Property Disputes', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Whom must the notice be delivered to?', 'Section 80(1) prescribes the recipient by case: for suits against the Central Government, a Secretary to that Government (with special provision for railways); for a State Government, a Secretary or the Collector of the district; and for a public officer, the officer personally or at their office. Serving the wrong office is a recurring and avoidable defect.'],
    ['Can a suit be filed urgently without waiting two months?', 'Yes — Section 80(2) permits a suit for urgent or immediate relief to be instituted with the leave of the court without serving notice, but no relief, interim or otherwise, is granted without hearing the government, and if the court finds no urgent relief is needed, it returns the plaint for presentation after compliance.'],
    ['Can the government waive a defective or absent notice?', 'The notice is for the State\'s benefit, and the benefit can be waived — but waiver must be established, not assumed. Section 80(3) separately saves suits from dismissal for mere error or defect in the notice where the essential identifying particulars were conveyed and the suit substantially matches the cause and relief noticed.'],
    ['Does the two-month notice period extend limitation?', 'Section 15(2) of the Limitation Act, 1963 excludes the notice period in computing limitation for a suit for which notice is a statutory precondition. The notice should nonetheless be issued well before the limitation horizon, since the exclusion covers the prescribed period of notice, not the plaintiff\'s own delays.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 (Section 80; Order XXVII) — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191'],
  ],
];
$BODY = <<<'HTML'
<h2>What the notice must contain</h2>
<div class="check">
  <p><strong>Section 80(1) requires the notice to state:</strong></p>
  <p>— the cause of action, with the material facts and dates;</p>
  <p>— the name, description and place of residence of the plaintiff;</p>
  <p>— the relief which the plaintiff claims.</p>
</div>
<p>The plaint must then plead that the notice was delivered or left at the proper office, and the suit must correspond to the notice — a plaintiff cannot notice one grievance and sue on another. The safest drafting practice is to write the notice as a compressed plaint: parties, facts in chronology, the legal wrong, the relief, and a clear statement that a suit will follow on expiry of two months absent redress.</p>

<h2>The urgent-relief route under Section 80(2)</h2>
<div class="flow">
  <div class="fstep"><strong>Apply for leave with the plaint.</strong> Where demolition, dispossession, encashment or some other imminent act cannot wait two months, the plaint is accompanied by an application for leave under Section 80(2), spelling out the urgency with dates.</div>
  <div class="fstep"><strong>The State is heard first.</strong> The court cannot grant any relief — even ad interim — without giving the government or officer a reasonable opportunity of showing cause.</div>
  <div class="fstep"><strong>Refusal is not dismissal.</strong> If the court concludes no urgent relief is warranted, it returns the plaint for presentation after the notice runs its course — the claim survives; the shortcut fails.</div>
</div>

<h2>Where litigants go wrong</h2>
<div class="tiles">
  <div class="tile"><strong>Wrong addressee.</strong> Notices addressed to the department&rsquo;s field office instead of the Secretary or Collector named in Section 80(1), or to a public officer&rsquo;s department rather than the officer, invite maintainability objections years later.</div>
  <div class="tile"><strong>Mismatch between notice and plaint.</strong> New causes of action and enlarged reliefs added at the plaint stage, never noticed, expose the suit to partial or total objection. If the case grows, a fresh notice is the clean cure.</div>
  <div class="tile"><strong>Treating instrumentalities as &ldquo;the Government&rdquo;.</strong> Statutory corporations, companies and authorities are generally not &ldquo;the Government&rdquo; for Section 80, though their own statutes often contain analogous notice provisions with different periods. The governing statute of the defendant must be checked each time.</div>
  <div class="tile"><strong>Ignoring the officer limb.</strong> The notice is required for suits against a public officer only in respect of acts purporting to be done in official capacity; suits about purely personal conduct stand outside it. Where the capacity is arguable, serving notice costs two months — omitting it can cost the suit.</div>
</div>

<h2>Consequences of non-compliance</h2>
<p>A suit instituted without the required notice, and without Section 80(2) leave, is barred by law for the purposes of Order VII Rule 11(d), and the plaint is liable to be rejected. Because rejection operates at the threshold, the defect surfaces precisely when the plaintiff can least afford it — often after limitation has run on a fresh filing, though a rejected plaint can be re-presented after compliance where limitation permits. The notice regime rewards the methodical: issue the notice early, calendar the two months, preserve proof of delivery, and file with the acknowledgment annexed.</p>
<div class="note"><p>Government suits in Delhi also engage Order XXVII CPC (suits by or against the Government), which governs the authorised signatories and the government pleader&rsquo;s role, and courts commonly allow the State longer procedural accommodations in practice. None of that softens Section 80: the notice remains the plaintiff&rsquo;s own burden, and the two-month wait is the price of a clean institution.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
