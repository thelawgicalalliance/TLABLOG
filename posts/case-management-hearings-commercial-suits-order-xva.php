<?php
$P = [
  'slug'         => 'case-management-hearings-commercial-suits-order-xva.php',
  'title'        => 'Case Management in Commercial Suits – Advocate Manish Jha',
  'meta'         => 'Order XV-A CPC gives commercial courts a scheduling spine: the first case management hearing, fixed timelines for evidence and arguments, and costs for default.',
  'h1'           => 'Case Management Hearings in Commercial Suits: Order XV-A Explained',
  'crumb'        => 'Case Management Hearings',
  'kicker'       => 'Explainer · Commercial Courts',
  'sub'          => 'The Commercial Courts Act grafted a scheduling discipline onto the CPC: after pleadings and admission-denial of documents, the court fixes the suit\'s entire calendar at a case management hearing — and enforces it with costs.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">The traditional civil suit drifts from date to date; the commercial suit is meant to run on rails. The instrument of that discipline is Order XV-A of the Code of Civil Procedure, inserted for commercial disputes by the Commercial Courts Act, 2015. It obliges the court to hold a case management hearing once pleadings and the admission-denial of documents are complete, to frame issues and fix a timetable covering everything from the recording of evidence to final arguments — and it arms the court with costs, foreclosure of rights and even dismissal to hold parties to that timetable. This explainer walks through the scheme as it operates in the commercial courts of Delhi.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'delhi-high-court.php' => 'Delhi High Court', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['When must the first case management hearing be held?', 'Order XV-A Rule 1 requires the court to hold the first case management hearing not later than four weeks from the date of filing of the affidavit of admission or denial of documents by all parties. The hearing presupposes completed pleadings and the document-admission exercise under Order XI, which is why the front-loading of disclosure in commercial suits matters so much.'],
    ['What orders can the court pass at the hearing?', 'Rule 2 lists them: framing issues, listing witnesses, fixing dates for examination-in-chief and cross-examination, directing evidence by affidavit, fixing the time each party has for oral submissions, and setting the dates for written and oral arguments. The court effectively writes the procedural judgment of the suit in advance.'],
    ['Is there an outer limit for completing the trial?', 'Yes in design: arguments are to be heard not later than six months from the date of the first case management hearing, and the court is to ensure the recording of evidence is carried on, as far as possible, on a day-to-day basis once it begins. Adjournment discipline under the Act is correspondingly strict.'],
    ['What happens if a party defaults on the timetable?', 'Rule 6 gives the court real teeth: it may impose costs, foreclose a party\'s right to file affidavits, lead evidence or address arguments on the defaulted step, and in cases of wilful, repeated failure, even dismiss the plaint or allow the suit as if ex parte. Commercial courts in Delhi use these powers, and drafting practice should assume they will be used.'],
  ],
  'sources'      => [
    ['label' => 'Commercial Courts Act, 2015 (with the CPC amendments in its Schedule) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court (Original Side) — Commercial Division', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Where Order XV-A sits in the commercial suit's life</h2>
<div class="flow">
  <div class="fstep"><strong>Pleadings.</strong> Plaint with Order XI disclosure; written statement within the outer limit of 120 days, with the defendant's own disclosure.</div>
  <div class="fstep"><strong>Admission-denial.</strong> Each party files an affidavit admitting or denying the opposite side's documents, statement-wise, under Order XI.</div>
  <div class="fstep"><strong>First case management hearing.</strong> Within four weeks of the admission-denial affidavits: issues framed, the trial calendar fixed.</div>
  <div class="fstep"><strong>Trial on the calendar.</strong> Evidence on the fixed dates, day-to-day so far as possible; arguments within six months of the first hearing; judgment thereafter.</div>
</div>

<h2>What actually gets decided at the hearing</h2>
<p>The case management hearing is not a formality; it is the suit's constitutional moment. The court examines the pleadings and the admitted documents, frames the issues, and then fixes — with dates, not generalities — the sequence of the trial: which witnesses will be examined and when, whether their evidence-in-chief will be by affidavit, how long cross-examination will take, when written arguments will be exchanged, and how much time each side will have for oral submissions. The court may also, at this stage, weed the case: issues that can be decided on admissions, or suits fit for summary judgment under Order XIII-A, can be redirected before a full trial is calendared.</p>
<table class="law">
  <tr><th>Power at the CMH</th><th>Practical effect</th></tr>
  <tr><td>Framing of issues</td><td>Defines the trial; parties should come with draft issues</td></tr>
  <tr><td>Witness lists and dates</td><td>No ambush witnesses; substitutions need leave</td></tr>
  <tr><td>Evidence by affidavit</td><td>Chief-examination compressed; trial time spent on cross</td></tr>
  <tr><td>Time-boxed oral arguments</td><td>Submissions planned to a clock, supported by written notes</td></tr>
  <tr><td>Costs and foreclosure for default</td><td>Delay has a price payable in the suit itself</td></tr>
</table>

<h2>The enforcement machinery</h2>
<p>Order XV-A Rule 6 is the provision that changes behaviour. Where a party fails to comply with the case management order, the court may condemn it in costs, foreclose the defaulted step — the affidavit not filed on time stays off the record, the witness not produced on the fixed date is given up — and, for wilful and repeated default, strike out pleadings altogether. Read with the commercial costs regime in Section 35 CPC (as substituted for commercial disputes), the message of the scheme is that the timetable is the court's order, not a mutual aspiration.</p>

<h2>Preparing for the hearing: a checklist</h2>
<div class="check">
<ul>
  <li>Complete admission-denial candidly — blanket denials of obviously genuine documents invite costs and are deprecated by the rules themselves.</li>
  <li>Bring draft issues, a witness list with the gist of each witness's evidence, and a realistic estimate of cross-examination time.</li>
  <li>Identify at the threshold whether any issue can be decided on admissions or by summary judgment, and say so at the CMH.</li>
  <li>Calendar internally against the six-month arguments horizon; instructions, translations and expert reports must be procured to the court's dates, not the client's convenience.</li>
</ul>
</div>

<div class="note">
<p><strong>Note:</strong> Order XV-A applies to suits governed by the Commercial Courts Act, 2015 — commercial disputes of the specified value — in the commercial courts of the Delhi district judiciary and the Commercial Division of the Delhi High Court. Ordinary civil suits continue under the unamended CPC provisions.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
