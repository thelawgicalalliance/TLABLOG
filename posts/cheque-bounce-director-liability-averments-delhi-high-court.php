<?php
$P = [
  'slug'         => 'cheque-bounce-director-liability-averments-delhi-high-court.php',
  'title'        => 'Director Liability in Cheque Cases – Advocate Manish Jha',
  'meta'         => 'Delhi High Court declines to quash a Section 138 NI Act case against a director: specific averments of involvement in the transactions defeat the petition.',
  'h1'           => 'Specific Averments Keep a Director in a Cheque Bounce Case: Delhi High Court',
  'crumb'        => 'NI Act — Director Liability',
  'kicker'       => 'Delhi High Court · 3 September 2026',
  'sub'          => 'The Court held that where the complaint specifically avers the director\'s involvement in the underlying transactions, vicarious liability under Section 141 cannot be undone at the quashing stage.',
  'date'         => '2026-09-10',
  'date_display' => '10 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>Mona Jain v. M/s Kaycee Polymers Pvt. Ltd.</em>, CRL.M.C. 5220/2026 (decided 3 September 2026), Justice Prateek Jalan of the High Court of Delhi dismissed a petition under Section 528 of the BNSS 2023 seeking quashing of cheque dishonour proceedings against a company director. Cheques totalling about Rs. 12.5 lakhs issued for material purchases had bounced for insufficient funds or stopped payment. The director\'s defence — that she was arrayed merely by designation — failed because the complaint went further: it contained specific averments of her involvement in the transactions. The decision maps the settled Section 141 boundary: designation alone does not create liability, but specific averments of role, taken as true at the threshold, are enough to face trial.</p>',
  'related'      => ['business-corporate-law.php' => 'Commercial &amp; Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'banking-fraud.php' => 'Banking Disputes', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['When is a director vicariously liable for a company\'s bounced cheque?', 'Under Section 141 of the NI Act, liability attaches to every person who, at the time of the offence, was in charge of and responsible to the company for the conduct of its business — and to directors with whose consent, connivance or neglect the offence occurred. The complaint must aver this specifically; a bare recital of directorship is insufficient.'],
    ['Can a director get proceedings quashed by saying she had no role?', 'Only where the complaint itself lacks the statutory averments, or where unimpeachable material of sterling quality shows non-involvement — such as a certified record of resignation before the cheques were issued. A factual denial of role contradicted by specific complaint averments is a matter for trial, not quashing.'],
    ['What should a Section 138 complaint against directors contain?', 'The primary responsibility is on the complainant to make the specific averments required by law: that the accused was in charge of and responsible for the conduct of the company\'s business at the relevant time, with particulars connecting the person to the transaction — negotiations, orders, correspondence or signatures.'],
    ['Is the signatory of the cheque in a different position?', 'Yes. The signatory\'s liability follows directly from having drawn the cheque on the company\'s account, and courts treat the signatory\'s continuation in the proceedings as near-inevitable. Non-signatory directors are where the Section 141 averment battles are actually fought.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Mona Jain v. Kaycee Polymers Pvt. Ltd., Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/156414092/'],
  ],
];
$BODY = <<<'HTML'
<h2>The dispute</h2>
<p>Kaycee Polymers supplied material to M/s Monica Gold Pipes Pvt. Ltd. and received company cheques totalling approximately Rs. 12,55,737, which were dishonoured — some for insufficient funds, some because payment had been stopped. Complaints under Section 138 read with Section 141 of the Negotiable Instruments Act followed against the company and its directors, including the petitioner. She approached the High Court contending that she had been roped in merely because she held the office of director.</p>

<h2>The Court's reasoning</h2>
<p>Justice Prateek Jalan dismissed the petition. The complaint, on its reading, did not rest on designation: it contained specific averments establishing the petitioner's involvement in the transactions underlying the cheques. At the quashing stage those averments must be taken as true; whether they survive evidence is the trial's business.</p>
<div class="note">
<p>"The primary responsibility is on the complainant to make specific averments as are required under the law in the complaint so as to make the accused vicariously liable." Where the complainant discharges that responsibility, the corresponding consequence follows: the accused must answer the case at trial.</p>
</div>

<h2>The Section 141 grid</h2>
<table class="law">
<tr><th>Accused</th><th>What the complaint must show</th><th>Prospects of quashing</th></tr>
<tr><td>Company</td><td>Commission of the Section 138 offence — dishonour, notice, non-payment</td><td>Only on merits-destroying grounds (no debt, notice defects, limitation)</td></tr>
<tr><td>Signatory director</td><td>Drawing of the cheque on the company's account</td><td>Minimal — liability follows the signature</td></tr>
<tr><td>Managing director / whole-time director</td><td>Office plus the statutory averment; the office itself implies charge of the business</td><td>Low at the threshold</td></tr>
<tr><td>Non-executive / other directors</td><td>Specific averment of being in charge and responsible, or consent/connivance/neglect, with particulars of role</td><td>Real — where averments are formulaic or contradicted by unimpeachable record (e.g., resignation preceding the cheques)</td></tr>
</table>

<h2>Where quashing still works</h2>
<p>The judgment does not close the Section 528 BNSS door for directors; it locates it. Quashing remains available where the complaint recites the statutory formula with no factual content connecting the director to the business or the transaction, and where the director produces unimpeachable, incontrovertible material — a Form DIR-12 resignation accepted before the cheques were drawn, records showing the person was a nominee with no executive function — that renders the prosecution an abuse of process. What will not work is a plea of non-involvement that merely contradicts specific complaint averments: that contest belongs to cross-examination, not to a quashing petition.</p>

<h2>Drafting lessons on both sides</h2>
<div class="tiles">
<div class="tile"><strong>For complainants.</strong> Plead the role, not just the office: who negotiated the supply, who issued purchase orders, whose correspondence acknowledged the debt, who assured payment. Specificity at the complaint stage is what preserved this prosecution.</div>
<div class="tile"><strong>For directors.</strong> If the record genuinely exculpates — resignation, non-executive status, no dealings — assemble the documentary proof and move early. If the defence is factual denial, conserve resources for trial; a doomed quashing petition only adds a reasoned order against you.</div>
<div class="tile"><strong>For companies.</strong> Board hygiene matters: accurate ROC filings on who holds executive charge determine, years later, which individuals carry criminal exposure for a bounced cheque.</div>
</div>
HTML;
include __DIR__ . '/post-layout.php';
