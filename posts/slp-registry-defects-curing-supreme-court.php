<?php
$P = [
  'slug'         => 'slp-registry-defects-curing-supreme-court.php',
  'title'        => 'Curing SLP Defects – Advocate Manish Jha',
  'meta'         => 'Registry defects in Supreme Court SLPs: the scrutiny process under the Supreme Court Rules 2013, common objections, timelines for curing, and when defective SLPs lapse.',
  'h1'           => 'Before the Bench Sees It: Registry Scrutiny and the Curing of Defects in SLPs',
  'crumb'        => 'Procedure & Practice — Supreme Court',
  'kicker'       => 'Practice Explainer · Supreme Court Rules, 2013 — Order XV',
  'sub'          => 'Every special leave petition passes through the Registry\'s scrutiny before it reaches a bench. Understanding the defect-and-cure cycle — and its deadlines — is the difference between an SLP heard on merits and one that quietly lapses.',
  'date'         => '2026-10-13',
  'date_display' => '13 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Litigants think of a special leave petition as a document argued before judges; the Registry of the Supreme Court encounters it first as a bundle to be verified against the Supreme Court Rules, 2013. Lodging is not registration: between the two lies scrutiny, where defects are marked, notified and — within prescribed time — cured. An SLP filed on the eighty-ninth day and left to languish under objections can be worse than one never filed, because the lapse is silent and the limitation long spent.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What happens if defects are not cured in time?', 'Under Order XV of the Supreme Court Rules, the Registrar may require defects to be remedied within a fixed time. Where the petitioner fails despite opportunity, the Registrar can decline registration, and petitions have been treated as lapsed or placed before the Court for dismissal on that ground. Restoration is possible but discretionary, and the accumulated delay then needs condonation.'],
    ['Do the days under Registry objections count against limitation?', 'The SLP is treated as filed on the date of lodging if the filing was genuine; the cure period is a refiling question, not a fresh filing. But where the original lodging was so skeletal as to be non-est, the effective filing date shifts to completion — and with the ninety-day limitation under Article 133 of the Limitation Act\'s schedule read with the Rules, that shift usually means a condonation application.'],
    ['What are the most common defects marked by the Registry?', 'Deficient court fee; missing certified or impugned-order copies and their legible, properly margined typed versions; annexures not referred to in the list of dates; absence of the advocate-on-record\'s certificate; missing affidavits or improperly sworn ones; blanks in the paper book; missing translation of vernacular documents; and omission of the statement that no other SLP against the same order has been filed.'],
    ['Can a petitioner challenge the Registry\'s refusal to register?', 'Yes. Orders of the Registrar declining registration are not final adjudications; the Rules provide for placing the matter before the Court, and an aggrieved party may seek judicial orders against the Registrar\'s decision. In practice, the faster route is almost always to cure and re-lodge rather than litigate the objection.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — Supreme Court of India', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Limitation Act, 1963 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The life of an SLP before its first listing</h2>
<div class="flow">
<div class="fstep"><strong>Lodging</strong> — the petition is e-filed or presented and receives a diary number; limitation is tested against this date for a genuine, substantially complete filing.</div>
<div class="fstep"><strong>Scrutiny</strong> — the Registry checks the petition against the Rules: format, fee, annexures, affidavits, certificates, the list of dates, and the impugned order\'s copy.</div>
<div class="fstep"><strong>Defect notification</strong> — objections are uploaded; the advocate-on-record cures them within the allowed window, seeking extension where needed.</div>
<div class="fstep"><strong>Registration or lapse</strong> — on clearance the SLP gets its number and proceeds to listing; on persistent default it is declined registration or placed before the Court for appropriate orders.</div>
</div>

<h2>Why the AOR system concentrates responsibility</h2>
<p>Only an advocate-on-record may file and act in the Supreme Court, and the Rules make the AOR answerable for the petition\'s compliance — from the certificate that the SLP raises the questions set out, to the accuracy of the statement about prior petitions against the same order. Defect management is therefore not clerical delegation but professional obligation: a lapsed SLP for uncured defects lands on the AOR\'s record, and the client\'s remedy against the lapse is painfully indirect. Outstation counsel briefing an AOR should build the cure cycle into their coordination, especially for petitions filed near the limitation\'s edge.</p>

<h2>Strategic notes for petitioners near the deadline</h2>
<div class="check">
<p><strong>Filing close to day ninety:</strong> front-load the certified-copy application in the High Court the day the impugned order is pronounced; prepare the list of dates and annexure set in parallel rather than after the copy arrives; have court fee computed and affidavits sworn before lodging; and after lodging, treat each defect notification as a same-week task. If the certified copy itself is the missing piece, file with the downloaded copy and an application for exemption, and cure with the certified copy when issued — an acknowledged and accepted practice, as long as the application is honest about the status.</p>
</div>

<h2>When defects meet condonation</h2>
<p>Defective filings interact with delay in two ways. A petition lodged in time but registered after months of curing ordinarily needs, at most, condonation of refiling delay — granted liberally where the cure trail is documented. A petition whose first lodging is found to be a shell — no signatures, no fee, orders missing — risks the non-est finding, shifting its filing date and requiring condonation of filing delay under the far stricter sufficient-cause standard, where the Supreme Court\'s recent jurisprudence on casual condonation applications has grown notably severe. The dividing line is substance at lodging: an honest, materially complete petition cures its way to registration; a placeholder does not.</p>

<div class="note">
<p>None of this is glamorous law, but Article 136 practice is won or lost in these corridors more often than the law reports suggest. A chamber that treats Registry scrutiny as part of advocacy — anticipating objections, curing them on a clock, and papering every step — buys its client the only thing that matters at this stage: a petition that actually reaches the bench it was written for.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
