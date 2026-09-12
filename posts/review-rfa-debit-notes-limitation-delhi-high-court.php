<?php
$P = [
  'slug'         => 'review-rfa-debit-notes-limitation-delhi-high-court.php',
  'title'        => 'Review in a Recovery Appeal Fails – Advocate Manish Jha',
  'meta'         => 'Delhi High Court dismisses review of an RFA in a goods-recovery dispute: unproved debit notes, cheques as limitation acknowledgment, and the narrow scope of review.',
  'h1'           => 'No Error Apparent: Debit Notes, Cheque Acknowledgments and the Limits of Review in Recovery Appeals',
  'crumb'        => 'Review — Recovery Suit',
  'kicker'       => 'Delhi High Court · 10 September 2026',
  'sub'          => 'A review petition cannot re-argue an appeal — unproved debit notes stay unproved, and cheques issued toward invoices remain acknowledgments extending limitation.',
  'date'         => '2026-09-12',
  'date_display' => '12 September 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">In <em>Adigear International v. Sunita Jain</em>, Review Petition 307/2026 in RFA 172/2020 (decided 10 September 2026), Justice Neena Bansal Krishna of the Delhi High Court dismissed a review petition arising out of a commercial recovery dispute over allegedly defective goods. The petitioner-firm claimed the goods had been returned through debit notes and that the supplier\'s claim was time-barred. The Court held there was no error apparent on the face of the record: the debit notes lacked any corroborating evidence of actual return of goods, and cheques issued by the buyer operated as acknowledgments for limitation purposes. The order is a compact refresher on two workhorses of recovery litigation — proof of return of goods, and acknowledgment of debt — and on how little a review petition can achieve.</p>',
  'related'      => ['civil-law.php' => 'Civil Litigation', 'business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What must a buyer prove to rely on debit notes for returned goods?', 'Not merely the buyer\'s own books. Courts look for corroboration that the goods physically went back and that the seller received the debit notes — transport records, delivery challans, acknowledgments, correspondence. Here the Court found "no cogent evidence to prove that these Debit Notes were ever received by the plaintiff", so the entries could not reduce the claim.'],
    ['How do cheques affect limitation in recovery suits?', 'A payment, including by cheque, made before the expiry of limitation and appearing in the payer\'s hand or records operates under Section 19 of the Limitation Act to start a fresh period from the payment; writings acknowledging liability work similarly under Section 18. Cheques issued against outstanding invoices therefore routinely save suits filed beyond three years from the original invoices.'],
    ['What is the scope of review under Order XLVII Rule 1 CPC?', 'Review lies for an error apparent on the face of the record, discovery of new and important evidence not available earlier despite due diligence, or other sufficient reason of that character. It is not a rehearing: points argued and rejected in the appeal, or points that could have been argued, cannot be re-agitated.'],
    ['Was the confirmation letter not new evidence?', 'The Court discarded it because it was never put to the plaintiff for explanation during trial — a party cannot spring a document at the review stage that it failed to confront the other side with when evidence was being recorded.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Adigear International v. Sunita Jain, Delhi High Court, Review Pet. 307/2026 in RFA 172/2020 (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/105454381/'],
  ],
];
$BODY = <<<'HTML'
<h2>The underlying dispute</h2>
<p>A supplier sued a partnership firm for the price of goods supplied under invoices spanning September 2012 to December 2014. The firm defended on two fronts: the goods were defective and had been returned through three debit notes, and the suit was barred by limitation. The trial court decreed the suit; the regular first appeal failed; and the firm then sought review of the appellate judgment.</p>

<h2>The findings that stood</h2>
<div class="tiles">
<div class="tile"><strong>Debit notes without delivery proof are book entries.</strong> No transporter\'s receipt, no acknowledgment by the seller, no correspondence contemporaneous with the alleged returns. Unilateral entries in a buyer\'s records do not discharge a proved supply.</div>
<div class="tile"><strong>Cheques acknowledged the debt.</strong> Cheques issued against the running account constituted acknowledgment for limitation, refreshing the period and defeating the limitation defence built on the invoice dates alone.</div>
<div class="tile"><strong>A document never confronted is a document lost.</strong> The confirmation letter pressed in review had never been presented to the plaintiff for explanation at trial — it could not be resurrected later.</div>
</div>

<h2>Review is not a second appeal</h2>
<div class="note">
<p>The test remains error apparent on the face of the record — an error self-evident without long reasoning, not one that must be established by re-arguing the appeal. Where the appellate court has appraised the evidence and reached a plausible conclusion, review is unavailable, however strongly the losing party disagrees.</p>
</div>
<p>The petition failed precisely because each ground invited reappreciation: whether debit notes should have been believed, whether the limitation finding was right. Those are appeal arguments — and the appeal was over. The remedy against an unfavourable RFA judgment, where a substantial question of law exists, lies elsewhere, not in repackaging the merits as "errors".</p>

<h2>Lessons for traders and their advocates</h2>
<p>For buyers who reject or return goods: paper the return in real time — challans, transporter records, a covering letter with proof of dispatch, and insistence on the seller\'s acknowledgment. A debit note standing alone will not carry the day years later. For sellers on running accounts: every cheque received, even one that bounces, is potential limitation gold; plead payments and acknowledgments specifically, with dates, in the plaint. For both: treat the trial as the only chance to confront documents — Delhi\'s appellate and review benches are consistently unwilling to let parties repair evidentiary gaps after judgment. And before filing review, apply the honest test: can the error be shown in two sentences without reopening the evidence? If not, the petition is likely to add costs, not change outcomes.</p>
HTML;
include __DIR__ . '/post-layout.php';
