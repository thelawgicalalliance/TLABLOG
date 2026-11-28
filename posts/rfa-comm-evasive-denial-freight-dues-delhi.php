<?php
$P = [
  'slug'         => 'rfa-comm-evasive-denial-freight-dues-delhi.php',
  'title'        => 'Evasive Denials Sink a Defence – Advocate Manish Jha',
  'meta'         => 'Delhi High Court upholds a freight-dues decree in a commercial appeal: evasive denials under Order VIII amount to admission, and minor e-certificate gaps are hyper-technical.',
  'h1'           => 'Deny Specifically or Be Deemed to Admit: Commercial Appeal Over Freight Dues Fails on the Pleadings',
  'crumb'        => 'RFA(COMM): Freight Dues',
  'kicker'       => 'Delhi High Court · 26 November 2026',
  'sub'          => 'The defendant paid under the contract he denied, never said which invoices he disputed, and had admitted the outstanding-bills email — the Division Bench held the claim stood admitted under Order VIII.',
  'date'         => '2026-11-28',
  'date_display' => '28 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>Uma Shankar Bhatt (Proprietor, Sam Logistics) v. Three Aces Global Logistics Pvt. Ltd.</em>, RFA(COMM) 139/2026, decided on 26 November 2026, a Division Bench of the Delhi High Court — Justice Prathiba M. Singh and Justice Dinesh Bhatt — dismissed a commercial appeal against a decree of Rs 9,47,918 for air-freight services. The judgment is a compact lesson in commercial pleading: under Order VIII of the CPC, as it applies to commercial suits, a general or evasive denial is no denial at all, and the facts not specifically traversed stand admitted.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices', 'property-disputes.php' => 'Civil Disputes'],
  'faqs'         => [
    ['What was the suit about?', 'A logistics company sued for Rs 9,47,918.40 as unpaid air-freight charges, with interest. The defendant admitted making payments of about Rs 6.1 lakh under the same engagement but disputed the balance, and said one London shipment had been released despite his instruction to hold it. The Commercial Court at Saket decreed the suit with 10% interest, and the Division Bench has affirmed.'],
    ['Why did the defence fail?', 'The defendant&rsquo;s own case admitted the contract — he had paid under it. His written statement contained only general denials of the account: he produced no rival statement of account and never identified which invoices he disputed. He had also admitted an email of 19 February 2022 listing the outstanding bills. Under Order VIII Rules 3A, 4 and 5 CPC, the claim to that extent stood admitted.'],
    ['What about the electronic-evidence objection?', 'The invoices and emails carried a certificate under Section 63 of the Bharatiya Sakshya Adhiniyam, 2023 — the successor to Section 65B of the Evidence Act. The Bench held the certificate broadly met the statutory requirements, and that missing hash values or IP details were hyper-technical objections that did not displace it.'],
    ['Was the hold instruction a defence?', 'No. The shipper had warned that storage charges were mounting, the defendant never followed up on his hold instruction, and a carrier cannot be expected to warehouse goods indefinitely. Releasing the shipment was held not wrongful.'],
  ],
  'sources'      => [
    ['label' => 'Uma Shankar Bhatt v. Three Aces Global Logistics Pvt. Ltd., RFA(COMM) 139/2026 (Delhi High Court DB, 26 November 2026) — official judgment PDF (Delhi High Court)', 'url' => 'https://delhihighcourt.nic.in/app/showFileJudgment/78026112026RFAC1392026_182325.pdf'],
    ['label' => 'High Court of Delhi — official website', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>A small decree, a large principle</h2>
<p>Not every instructive judgment involves crores. This appeal under Section 13(1A) of the Commercial Courts Act, 2015 arose from a freight-recovery suit of under Rs 10 lakh, decreed by the Commercial Court at Saket in November 2025. What makes the Division Bench&rsquo;s affirmance worth reading is its application of the commercial-suit pleading regime — the rules that decide many money suits before any witness is sworn.</p>

<h2>The three failures of the written statement</h2>
<div class="flow">
  <div class="fstep"><strong>The contract was admitted by conduct.</strong> The defendant denied the arrangement yet admitted paying about Rs 6.1 lakh under it. A party cannot pay under a contract and simultaneously deny its existence.</div>
  <div class="fstep"><strong>The account was never specifically traversed.</strong> Order VIII Rule 3A, inserted for commercial disputes, demands denial invoice by invoice, with reasons. The defendant filed no statement of account of his own and never said which bills he contested. The denial was evasive, and Rule 5 deems the fact admitted.</div>
  <div class="fstep"><strong>His own email confirmed the dues.</strong> The admitted email of 19 February 2022 listed the outstanding bills — the plaintiff&rsquo;s ledger in the defendant&rsquo;s inbox.</div>
</div>

<h2>Electronic records: substance over checklist</h2>
<p>The appellant attacked the certificate accompanying the plaintiff&rsquo;s invoices and correspondence — now governed by Section 63 of the Bharatiya Sakshya Adhiniyam, 2023 in place of Section 65B of the Evidence Act. The Bench&rsquo;s response is notable: a certificate that identifies the records, the device and the responsible person, and broadly satisfies the statutory conditions, is not undone by the absence of hash values or IP particulars. Objections of that kind, it held, are hyper-technical. The decision signals how the Delhi High Court is reading the BSA&rsquo;s certification requirement in routine commercial litigation: as a safeguard of authenticity, not an obstacle course.</p>

<h2>Drafting checklist for the defendant&rsquo;s side</h2>
<div class="check">
  <p><strong>Before filing a written statement in a commercial suit, confirm that it:</strong></p>
  <p>&bull; traverses each invoice or ledger entry specifically, with the reason for denial;</p>
  <p>&bull; annexes the defendant&rsquo;s own statement of account where the balance is disputed;</p>
  <p>&bull; deals squarely with every email or letter the defendant has sent acknowledging dues;</p>
  <p>&bull; takes electronic-evidence objections of substance, not form, and takes them early;</p>
  <p>&bull; pleads any instruction said to have been breached — and the follow-up to it — with dates.</p>
</div>
<div class="note">This report summarises a judgment of the High Court of Delhi dated 26 November 2026 for general information. It is not legal advice.</div>
HTML;
include __DIR__ . '/post-layout.php';
