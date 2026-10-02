<?php
$P = [
  'slug'         => 'cheque-bounce-notice-dispatch-correct-address-supreme-court.php',
  'title'        => 'Cheque Notice: Dispatch Is the Giving – Advocate Manish Jha',
  'meta'         => 'Supreme Court restores an NI Act conviction: statutory notice sent to the drawer\'s correct address satisfies Section 138 even if a family member received it.',
  'h1'           => 'Giving Is Not Receiving: Supreme Court on Section 138 Notice Served on the Drawer\'s Mother',
  'crumb'        => 'Section 138 Notice',
  'kicker'       => 'Supreme Court · 30 September 2026',
  'sub'          => 'In Sainaba v. State of Kerala, dispatch by registered post to the correct address raised the presumption of service — and the drawer, not the payee, carried the burden of rebutting it.',
  'date'         => '2026-10-02',
  'date_display' => '2 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Cheque dishonour prosecutions are won and lost on the statutory notice. In <strong>Sainaba v. State of Kerala</strong> (2026 INSC 1069, decided 30 September 2026), a Bench of Justice Manmohan and Justice Ahsanuddin Amanullah restored a conviction under Section 138 of the Negotiable Instruments Act, 1881, holding that once the demand notice is dispatched by registered post to the drawer\'s correct residential address, the requirement of "giving notice" under proviso (b) stands satisfied — even where the drawer\'s mother, not the drawer, took delivery.</p>',
  'related'      => ['business-corporate-law.php' => 'Commercial & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'banking-fraud.php' => 'Banking Disputes', 'online-fraud-lawyer-in-delhi.php' => 'Financial Fraud'],
  'faqs'         => [
    ['What notice does Section 138 require after a cheque bounces?', 'Proviso (b) to Section 138 requires the payee to make a demand for the cheque amount by giving a written notice to the drawer within thirty days of learning of the dishonour. The cause of action arises if the drawer fails to pay within fifteen days of receipt of that notice, and the complaint must follow within one month thereafter (Section 142).'],
    ['Is the complainant required to prove the drawer personally received the notice?', 'No. The Court held that "giving" notice is complete on dispatch to the correct address by registered post. Section 27 of the General Clauses Act, 1897 and Section 114 of the Evidence Act, 1872 (see now Section 119 of the Bharatiya Sakshya Adhiniyam, 2023) raise a rebuttable presumption of service, which the drawer must displace.'],
    ['How can a drawer rebut the presumption of service?', 'By proving the address was wrong, that the notice never reached in the ordinary course, or other circumstances showing absence of knowledge — a burden on the drawer, discharged by evidence, not by the bare assertion that someone else in the household signed for the letter.'],
    ['Does this change anything for notices received by family members?', 'It confirms that delivery at the correct address to a family member does not defeat the prosecution. The Court observed that allowing drawers to escape by avoiding personally receiving correctly-addressed notices would defeat the object of the statute.'],
  ],
  'sources'      => [
    ['label' => 'Sainaba v. State of Kerala, 2026 INSC 1069 — Supreme Court, 30 September 2026 (full text)', 'url' => 'https://indiankanoon.org/doc/150235290/'],
  ],
];
$BODY = <<<'HTML'
<h2>The question in the appeal</h2>
<p>The payee&rsquo;s complaint had ended in conviction, but the drawer resisted on a familiar ground: the statutory notice was received by his mother at his residential address, so notice was never &ldquo;given&rdquo; to <em>him</em>. The matter reached the Supreme Court by special leave from Kerala, and the Court used it to restate the architecture of service under the proviso to Section 138.</p>

<h2>Dispatch, presumption, rebuttal</h2>
<div class="flow">
  <div class="fstep"><strong>Step one — dispatch.</strong> The payee&rsquo;s obligation under proviso (b) is to <em>give</em> notice: dispatching the written demand by registered post to the drawer&rsquo;s correct address within thirty days completes the payee&rsquo;s part.</div>
  <div class="fstep"><strong>Step two — presumption.</strong> Section 27 of the General Clauses Act and Section 114 of the Evidence Act (now Section 119 BSA) presume due service of a correctly addressed, prepaid and posted letter in the ordinary course.</div>
  <div class="fstep"><strong>Step three — rebuttal.</strong> The drawer may rebut: by showing the address was wrong, that he had no knowledge of the delivery, or that the ordinary course was interrupted. The burden sits on the drawer, not on the complainant to prove personal receipt.</div>
</div>
<div class="compare">
  <div class="col old"><strong>Drawer&rsquo;s argument</strong><br>Notice must reach the drawer personally; delivery to his mother at the house is not notice to him, so no cause of action ever arose.</div>
  <div class="arrow">→</div>
  <div class="col new"><strong>Supreme Court</strong><br>&ldquo;Giving&rdquo; and &ldquo;receiving&rdquo; are distinct. Dispatch to the correct address raises the presumption of service; family-member receipt at that address does not displace it. Any other rule lets drawers defeat the statute by simply avoiding the postman.</div>
</div>
<p>On this reasoning the appeal was allowed and the conviction and sentence restored.</p>

<h2>Where this fits in the Section 138 scheme</h2>
<p>The decision continues a consistent line that reads the notice requirement purposively. The provision exists to give an honest drawer one final chance to pay within fifteen days; it is not an obstacle course for the payee. Equally, the drawer&rsquo;s protection is real: the fifteen-day clock runs from receipt, the presumption of service is rebuttable, and a drawer who pays within the window commits no offence. The balance collapses only when courts demand proof of personal, signed receipt — which is precisely what this judgment forecloses.</p>

<h2>Drafting and litigation notes</h2>
<div class="tiles">
  <div class="tile"><strong>For payees:</strong> dispatch to the address on the cheque, the account records or the agreement; use registered post with acknowledgement and keep the receipt and tracking record. State the cheque particulars, the dishonour memo date and a clear demand of the cheque amount — defects in the demand remain a separate, live defence.</div>
  <div class="tile"><strong>For drawers:</strong> the viable defences are substantive — absence of a legally enforceable debt, rebuttal of the Section 139 presumption, wrong address, or payment within fifteen days. Technical objections about who signed for the letter at a correct address now carry little weight.</div>
  <div class="tile"><strong>For both:</strong> timelines are jurisdictional in effect — thirty days to notice, fifteen days to pay, one month to complain. A dated chart of each event should be the first page of every brief.</div>
</div>
<div class="note"><p>Cheque dishonour remains a criminal offence under the NI Act, which continues in force alongside the new criminal codes; the BNSS governs the procedure of trial. Businesses in Delhi should also remember the parallel civil and summary routes for recovery — prosecution and recovery serve different ends and often run together.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
