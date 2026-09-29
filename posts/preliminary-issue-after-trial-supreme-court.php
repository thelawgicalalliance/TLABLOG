<?php
$P = [
  'slug'         => 'preliminary-issue-after-trial-supreme-court.php',
  'title'        => 'Preliminary Issues Have a Deadline – Advocate Manish Jha',
  'meta'         => 'Supreme Court (2026 INSC 1020) on Order XIV Rule 2(2) CPC: once trial of the issues generally begins, limitation cannot be carved out as a preliminary issue.',
  'h1'           => 'Order XIV Rule 2(2) After the Trial Has Begun: The Supreme Court Draws the Line',
  'crumb'        => 'Supreme Court — Civil Procedure',
  'kicker'       => 'Supreme Court · 21 September 2026',
  'sub'          => 'In John Mathew v. Santha Paul, 2026 INSC 1020, the Supreme Court held that the power to try a question of law as a preliminary issue ends once the court has embarked upon trial of the issues generally — restoring for full trial a suit that had been dismissed as time-barred midway through evidence.',
  'date'         => '2026-09-29',
  'date_display' => '29 September 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Order XIV Rule 2 of the Code of Civil Procedure embodies a compromise: judgments should ordinarily be pronounced on all issues, but a court &ldquo;may&rdquo; try a pure issue of law — jurisdiction or a legal bar such as limitation — first, postponing the rest. The provision is silent about timing. Can a defendant invoke it after evidence is under way? A judgment of Justices K.V. Viswanathan and Arun Palli, delivered on 21 September 2026, answers with a firm no.</p>',
  'related'      => ['civil-law.php' => 'Civil Law', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What does Order XIV Rule 2(2) permit?', 'Where issues of law and fact both arise, the court may try an issue of law first if it relates to the jurisdiction of the court or to a bar created by law — limitation being the classic example — and may postpone settlement of the other issues until that issue is decided.'],
    ['What was the timing problem in this case?', 'The suit, filed in 2013 to challenge a sale deed executed under a power of attorney, had all issues framed by July 2015. Only in September 2018 — after the plaintiff had completed his evidence and the defendants had begun theirs — was the limitation issue taken up as preliminary, leading to dismissal of the suit under Article 59 of the Limitation Act.'],
    ['What is the test the Supreme Court laid down?', 'Not whether all issues stand framed, but whether the court has &ldquo;embarked upon the trial of the issues generally.&rdquo; Once evidence is being taken on all issues together, the power to segregate one issue for prior decision is spent.'],
    ['What happened to the suit?', 'It was restored for a complete trial on the merits. The limitation question survives — but it will now be decided along with all other issues on the full evidence, not as a mid-trial shortcut.'],
  ],
  'sources'      => [
    ['label' => 'John Mathew v. Santha Paul, 2026 INSC 1020 — judgment PDF (sci.gov.in)', 'url' => 'https://api.sci.gov.in/supremecourt/2025/65391/65391_2025_13_1501_74475_Judgement_21-Sep-2026.pdf'],
    ['label' => 'John Mathew v. Santha Paul — full text (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/196010236/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the question matters</h2>
<p>Preliminary issues are a double-edged device. Used early, they can save years: a suit plainly barred by limitation should not consume a full trial. Used late, they fragment proceedings, invite piecemeal appeals and — as this case shows — can abruptly terminate a suit in which both sides have already invested their evidence. The text of Order XIV Rule 2(2) sets no express time-limit, and trial courts have differed on how late is too late.</p>

<h2>The Supreme Court&rsquo;s answer</h2>
<div class="flow">
<div class="fstep"><strong>The dividing line is the commencement of general trial.</strong> Framing of all issues does not by itself foreclose the power; what forecloses it is the court having &ldquo;embarked upon the trial of the issues generally&rdquo; — evidence being adduced on all issues concurrently.</div>
<div class="fstep"><strong>Past that point, segregation is impermissible.</strong> With the plaintiff&rsquo;s evidence complete and the defence evidence begun, the trial court could no longer pluck out limitation for prior determination. The dismissal built on that course could not stand.</div>
<div class="fstep"><strong>The discretion itself survives — before trial.</strong> The Court clarified that framing all issues does not exhaust the discretion to try a preliminary jurisdictional or legal-bar issue first. Timing, not framing, is decisive.</div>
</div>

<h2>The operative sequence</h2>
<table class="law">
<tr><th>Stage of the suit</th><th>Preliminary issue under O.XIV R.2(2)?</th></tr>
<tr><td>Before or at framing of issues</td><td>Available for pure law issues of jurisdiction or legal bar</td></tr>
<tr><td>After framing, before evidence begins</td><td>Still available — framing alone does not foreclose it</td></tr>
<tr><td>After the court embarks on trial of issues generally</td><td>Power spent; all issues proceed to judgment together — the holding of this case</td></tr>
</table>
<div class="note">
<p>The underlying policy is Rule 2(1) itself: judgment should ordinarily be pronounced on all issues, so that an appellate court has complete findings and the litigation is not decided in instalments. The preliminary-issue route is the exception, and exceptions are construed with discipline.</p>
</div>

<h2>Practice implications</h2>
<div class="tiles">
<div class="tile"><h3>For defendants</h3><p>Raise limitation and jurisdiction candidly and early — in the written statement, at framing, and by a prompt application. A bar kept in reserve as a mid-trial ambush is now procedurally unavailable as a preliminary issue.</p></div>
<div class="tile"><h3>For plaintiffs</h3><p>A late segregation application can be opposed on this authority alone. If evidence on all issues is under way, the limitation question travels with the merits to final judgment.</p></div>
<div class="tile"><h3>For trial courts</h3><p>The judgment supplies a clean administrative rule: decide whether to try a legal bar first before opening the general trial. Afterwards, complete the trial and decide everything together.</p></div>
</div>
<div class="check">
<p>Limitation objections do not weaken with time — but the procedural vehicles for raising them do. Calendar them at the start of every defence.</p>
</div>
<p>This article is for general information only and is not legal advice. Procedural strategy depends on the stage and record of each suit; parties should obtain advice on their own matter.</p>
HTML;
include __DIR__ . '/post-layout.php';
