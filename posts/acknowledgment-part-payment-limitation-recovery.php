<?php
$P = [
  'slug'         => 'acknowledgment-part-payment-limitation-recovery.php',
  'title'        => 'Acknowledgment and Limitation in Recovery – Advocate Manish Jha',
  'meta'         => 'How Sections 18 and 19 of the Limitation Act extend time in money recovery suits: acknowledgments, part payments, balance confirmations, emails and ledgers.',
  'h1'           => 'Keeping the Claim Alive: Acknowledgment and Part Payment under the Limitation Act',
  'crumb'        => 'Acknowledgment & Limitation',
  'kicker'       => 'Explainer · Recovery Suits',
  'sub'          => 'Three years passes quickly in a running commercial relationship — but a signed balance confirmation, a part payment, or the right email can start limitation running afresh.',
  'date'         => '2026-09-03',
  'date_display' => '3 September 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Most money claims — price of goods sold, work done, loans without security — carry a three-year limitation period. Commercial relationships, however, rarely fail on a single date: supplies continue, promises are made, small payments trickle in, and by the time the creditor sues, the defendant&rsquo;s first plea is limitation. Sections 18 and 19 of the Limitation Act, 1963 answer it: a written acknowledgment of liability signed before expiry of limitation, or a part payment within the period, gives the creditor a fresh start. The doctrine is simple; the evidentiary detail decides cases.</p>',
  'related'      => ['civil-law.php' => 'Civil Law', 'business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['What counts as an acknowledgment under Section 18?', 'A written admission of a subsisting liability, signed by the debtor or an authorised agent, made before the original limitation expires. It need not promise to pay, quantify the exact amount, or be addressed to the creditor — it must admit that the jural relationship of debtor and creditor subsists. Balance confirmations, letters seeking time, ledger entries signed on reconciliation, and one-time settlement proposals have all qualified on their facts.'],
    ['Do emails and WhatsApp messages work?', 'Electronic records can constitute acknowledgment: the Information Technology Act treats electronic signatures and records as satisfying signature and writing requirements, and courts have accepted emails and electronic communications as acknowledgments where authorship and authenticity are established. The practical battle is proof — preserve the native record and metadata, and be ready with a certificate under the electronic evidence provisions.'],
    ['How is part payment different?', 'Under Section 19, a payment on account of a debt before expiry of limitation gives fresh limitation from the payment — but the proviso requires that an acknowledgment of the payment appear in the handwriting of, or in a writing signed by, the person making it. Cheques satisfy this naturally; cash payments need a signed voucher or receipt trail. TDS deductions and bank transfer narrations are argued both ways and turn on the record.'],
    ['Can acknowledgment revive a debt that is already time-barred?', 'No. Both sections operate only if made before the expiry of the original or already-extended period. A promise to pay a time-barred debt is enforceable only as a fresh contract under Section 25(3) of the Indian Contract Act — express, in writing and signed — a different and narrower creature.'],
  ],
  'sources'      => [
    ['label' => 'Limitation Act, 1963 (Sections 18, 19) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Indian Contract Act, 1872 (Section 25(3)) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The clock, and the three ways it restarts</h2>
<p>For the common commercial articles — price of goods, work done, money lent — limitation is three years from when the debt falls due, with the running-account article giving three years from the close of the year in which the last item admitted or proved was entered. Against that baseline, the Act provides three extenders: acknowledgment in writing (Section 18), part payment (Section 19), and — often forgotten — the exclusion of time spent in bona fide proceedings in a wrong forum (Section 14). Each has technical conditions, and pleadings must invoke them specifically: a plaint that is silent on how the suit is within time, where the invoices are older than three years, invites rejection.</p>

<h2>Section 18: what the writing must contain</h2>
<p>The essential elements are four: a writing; signed by the party against whom the right is claimed, or an agent duly authorised; made before the expiration of the prescribed period; and containing an admission of a subsisting liability in respect of the right claimed. Courts construe the admission liberally — words are read in context, and an intention to admit the jural relationship suffices even if accompanied by a refusal to pay the full amount, a plea for time, or a dispute about quantum. But liberality has limits: a without-prejudice offer to buy peace over a disputed claim, a denial coupled with a counter-claim, or a document admitting only a past — not subsisting — liability will not do. The signature requirement is strict enough that unsigned ledger printouts, standing alone, are perilous; the authorised-agent question, in company cases, turns on the signatory\'s actual role.</p>

<h2>The documents that decide these cases</h2>
<div class="tiles">
  <div class="tile"><h3>Balance confirmations</h3><p>The audit-season confirmation signed by the debtor is the classic acknowledgment. Diarise the practice: obtain confirmations annually, signed and dated, referencing the account.</p></div>
  <div class="tile"><h3>Settlement correspondence</h3><p>Letters and emails proposing schedules, seeking waivers of interest, or requesting time admit the relationship. Mark genuine offers to compromise "without prejudice" — and understand that the label is not magic either way; substance governs.</p></div>
  <div class="tile"><h3>Cheques and transfers</h3><p>A cheque towards the account is both part payment and a signed writing. A dishonoured cheque still evidences acknowledgment on its facts, besides its own cause of action.</p></div>
  <div class="tile"><h3>Statutory filings</h3><p>Admissions of debt in balance sheets and statutory filings have been treated as acknowledgments on their facts — an entry showing the creditor\'s debt as outstanding can extend limitation, subject to accompanying notes and context.</p></div>
</div>

<h2>Running accounts: the quiet trap</h2>
<p>Suppliers on continuous terms often assume that any later supply refreshes the whole account. The mutual, open and current account article requires genuine mutuality — reciprocal demands, not merely successive credits and payments in one direction. Where mutuality is absent, each invoice can carry its own limitation, and the account\'s tail goes out of time invoice by invoice while the relationship continues. The safe architecture combines annual signed confirmations of the closing balance with appropriation records showing how each payment was applied — under Sections 59 to 61 of the Contract Act, an unappropriated payment may be applied to the oldest debts, including, in the classic rule, time-barred items, and the creditor\'s appropriation practice should be deliberate rather than accidental.</p>

<div class="check">
<ul>
  <li><strong>Calendar limitation per invoice</strong>, not per relationship; review the ageing report quarterly with limitation in mind.</li>
  <li><strong>Obtain signed balance confirmations annually</strong> — and store the originals.</li>
  <li><strong>Bank every part payment</strong> and record its application; avoid unreceipted cash.</li>
  <li><strong>Plead Sections 18/19 specifically</strong> in the plaint, with the documents identified — limitation extensions are proved, not presumed.</li>
</ul>
</div>

<div class="note">
<p><strong>Practice note:</strong> In commercial suits the limitation plea is tested early — at the threshold under Order VII Rule 11 and again at summary judgment. A creditor whose file contains one signed confirmation for each year of the account will clear both stages; a creditor relying on memory of assurances will not. The discipline is clerical, and it is worth more than most clauses in the contract.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
