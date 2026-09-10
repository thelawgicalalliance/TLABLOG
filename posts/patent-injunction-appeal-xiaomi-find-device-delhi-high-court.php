<?php
$P = [
  'slug'         => 'patent-injunction-appeal-xiaomi-find-device-delhi-high-court.php',
  'title'        => 'No Injunction in Find Device Patent Row – Advocate Manish Jha',
  'meta'         => 'Delhi High Court Division Bench refuses an interim injunction against Xiaomi\'s Find Device feature: claim elements missing, so no prima facie infringement.',
  'h1'           => 'Claim Elements Decide Everything: Injunction Against Xiaomi\'s Find Device Refused',
  'crumb'        => 'Patent Injunction Appeal',
  'kicker'       => 'Delhi High Court · 7 September 2026',
  'sub'          => 'A commercial appeal against refusal of interim relief failed because the accused feature lacked essential elements of the asserted claim — a template for element-by-element infringement analysis.',
  'date'         => '2026-09-10',
  'date_display' => '10 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>Conqueror Innovations Private Limited &amp; Anr. v. Xiaomi Technology India Private Limited</em>, FAO(OS) (COMM) 147/2025 (decided 7 September 2026), a Division Bench of the High Court of Delhi comprising Justice V. Kameswar Rao and Justice Manmeet Pritam Singh Arora dismissed an appeal against a single judge\'s refusal of interim injunctions in a patent infringement suit. The appellants, holders of Patent No. 244963 for a "Communication Device Finder System" aimed at locating stolen phones, alleged that Xiaomi\'s "Find Device" feature infringed their claims. The Bench disagreed: essential elements of the independent claim were absent from the accused feature, so no prima facie case of infringement arose. The judgment is a clean illustration of how commercial courts test patent infringement at the interlocutory stage — element by element, against the claim as granted.</p>',
  'related'      => ['business-corporate-law.php' => 'Commercial &amp; Corporate', 'cyber-law.php' => 'Cyber Law', 'delhi-high-court.php' => 'Delhi High Court', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What must a patentee show to get an interim injunction?', 'The classical trinity — prima facie case, balance of convenience and irreparable harm — with the prima facie enquiry in patent cases centring on two questions: is the patent prima facie valid, and does the accused product map onto the claims? Failure on claim mapping, as here, ends the application regardless of the other factors.'],
    ['What is element-by-element claim mapping?', 'Infringement requires the accused product to embody every essential element of at least one claim. Courts break the independent claim into its integers and ask whether each is present in the accused product. If even one essential element is missing and no equivalence is shown, there is no infringement.'],
    ['Which elements were missing in Xiaomi\'s feature?', 'The Court found the suit patent required non-erasable storage of message centre numbers and a silent auto-answer mode — incoming calls answered at the first ring without the user\'s knowledge so the caller could hear the holder of the stolen device. Xiaomi\'s Find Device feature lacked these, defeating the infringement case on elements E2 and E3 of Claim 1.'],
    ['What appeal lies against interim orders in patent suits?', 'Orders on interim injunction applications in commercial suits before the single judge are appealable to a Division Bench — here through an FAO(OS)(COMM) under the Commercial Courts Act framework read with the Letters Patent. The appellate court interferes only where the discretion below was exercised arbitrarily or on wrong principle.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Conqueror Innovations v. Xiaomi Technology India, Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/94201436/'],
  ],
];
$BODY = <<<'HTML'
<h2>The technology and the claim</h2>
<p>The appellants' patent — No. 244963, for a "Communication Device Finder System" — described a system to help owners trace and recover stolen mobile devices. Central to the asserted independent claim were features including storage of message centre numbers in a form the thief could not erase, and an "auto answer mode." The specification defined that mode starkly: all incoming calls to the device are answered at the first ring without the user's knowledge, allowing the caller to hear the conversation of the person holding the stolen device. The appellants alleged that Xiaomi's "Find Device" functionality — a mainstream anti-theft feature — infringed these claims, and sought interim injunctions, which the learned single judge refused.</p>

<h2>The Division Bench's analysis</h2>
<div class="check">
<p><strong>The claim was dissected into elements.</strong> The Bench identified the essential integers of Independent Claim 1 — including elements E2 and E3 covering non-erasable storage and silent auto-answering.</p>
<p><strong>The accused feature was measured against them.</strong> Xiaomi's Find Device does not silently auto-answer calls or maintain the claimed non-erasable message-centre architecture. The functionality operates differently in precisely the respects the claim made essential.</p>
<p><strong>Missing elements ended the case.</strong> With essential elements absent, infringement was impossible at the prima facie level, and the refusal of interim relief was affirmed.</p>
</div>
<p>The appellate approach is as instructive as the outcome: the Bench did not re-run the discretion afresh but tested whether the single judge's conclusion on claim mapping was sound. It was, and the appeal failed.</p>

<h2>Why element analysis dominates interlocutory patent fights</h2>
<p>Patent plaintiffs naturally argue at the level of function — "their feature finds stolen phones, so does ours; the patent covers finding stolen phones." Courts resist that altitude. The monopoly is defined by the claims, not by the problem solved, and two products solving the same problem by different mechanisms do not infringe each other's patents. The interlocutory stage is decided on the claim chart: plaintiffs who cannot map every essential element onto the defendant's product at the outset will not obtain an injunction, however striking the functional resemblance.</p>

<h2>Practice pointers for commercial litigants</h2>
<div class="tiles">
<div class="tile"><strong>For patentees.</strong> Draft claims with litigation in mind: over-specified claims (silent auto-answer at first ring) are easy to design around and hard to assert. In court, lead with a rigorous claim chart and technical evidence, not functional rhetoric.</div>
<div class="tile"><strong>For defendants.</strong> The cheapest complete defence is a missing element. A focused technical affidavit showing how the accused feature actually works — and which claim integers it lacks — can end the interim battle and often the war.</div>
<div class="tile"><strong>For both.</strong> Interim outcomes shape settlement value. A refusal affirmed in appeal, as here, resets negotiations around the realistic worth of the claim rather than the threat of an injunction.</div>
</div>

<h2>The wider context</h2>
<p>Patent and other IP disputes are "commercial disputes" under the Commercial Courts Act, 2015, routed to the commercial division of the High Court with the Act's case-management discipline. The Find Device litigation shows that framework working as intended: a technically dense interim application decided on defined legal criteria, and an appellate layer that polices principle rather than re-arguing technology.</p>
HTML;
include __DIR__ . '/post-layout.php';
