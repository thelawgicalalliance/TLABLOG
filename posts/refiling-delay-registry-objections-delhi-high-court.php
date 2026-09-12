<?php
$P = [
  'slug'         => 'refiling-delay-registry-objections-delhi-high-court.php',
  'title'        => 'Refiling Delay & Registry Objections – Advocate Manish Jha',
  'meta'         => 'Delay in filing versus delay in refiling in the Delhi High Court: registry objections, non-est filings, condonation standards and how appeals are kept alive.',
  'h1'           => 'The Appeal You Filed but Didn\'t: Registry Objections, Refiling Delay and Non-Est Filings',
  'crumb'        => 'Refiling Delay',
  'kicker'       => 'Practice Explainer · Appellate Procedure',
  'sub'          => 'Filing within limitation is only half the job — an appeal that languishes under objections, or was so defective as to be non-est, can be as dead as one never filed.',
  'date'         => '2026-09-12',
  'date_display' => '12 September 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Every appellate practitioner in Delhi knows the rhythm: the appeal is e-filed on the last permissible day, the Registry marks objections — deficient court fee, missing certified copy, illegible annexures, defective vakalatnama — and the file goes back for curing. Weeks later, sometimes months, it is refiled. The limitation question then splits in two: delay in <em>filing</em>, governed by the Limitation Act and condonable on sufficient cause; and delay in <em>refiling</em>, governed by the court\'s rules and practice, judged more liberally — unless the original filing was so skeletal that it was no filing at all, a "non-est" filing that gives no anchor date. The distinctions decide real cases, especially under the Commercial Courts Act where condonation windows are tight. This explainer organises the law and the working practice.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Litigation', 'business-corporate-law.php' => 'Business & Corporate', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What is the difference between delay in filing and delay in refiling?', 'Delay in filing means the appeal was presented after the limitation period expired — condonation requires sufficient cause under Section 5 of the Limitation Act (where applicable). Delay in refiling means the appeal was presented in time but returned under objections and cured late — courts treat this more indulgently, since limitation was in principle met, though gross and unexplained refiling delay can still be declined.'],
    ['What makes a filing "non-est"?', 'A filing so fundamentally defective that it cannot be regarded as an appeal at all — for instance, bundles missing the appeal paper-book\'s essential components, unsigned pleadings, or placeholder uploads made only to grab a date. A non-est filing gives no valid presentation date, so the "refiling" is really the first filing, and limitation is tested against it — often fatally.'],
    ['Why does this matter more in commercial appeals?', 'Because the Commercial Courts Act\'s appeal timelines are policed strictly and the room for condonation is narrow. A commercial appeal parked under objections while the condonable window runs out, or a token filing later branded non-est, can extinguish the remedy altogether.'],
    ['How should refiling delay be explained?', 'Stage by stage: each objection, the date it was notified, the step taken, and the date of each re-presentation — supported by the e-filing log. Generic affidavits blaming clerks fail; a documented chronology showing continuous, if imperfect, prosecution succeeds. The e-filing system\'s records make both diligence and negligence provable, so accuracy is non-negotiable.'],
  ],
  'sources'      => [
    ['label' => 'High Court of Delhi — official website (rules, practice directions, e-filing)', 'url' => 'https://delhihighcourt.nic.in/web/'],
  ],
];
$BODY = <<<'HTML'
<h2>The life of a defective filing</h2>
<div class="flow">
<div class="fstep"><strong>Presentation.</strong> The appeal is e-filed; the diary number and date fix the presentation for limitation purposes — provided the filing is genuine and substantially complete.</div>
<div class="fstep"><strong>Scrutiny and objections.</strong> The Registry examines the filing against the rules: court fee, certified/typed copies, pagination, translations, vakalatnama, affidavits, deficit documents. Objections are notified electronically.</div>
<div class="fstep"><strong>Cure and refiling.</strong> The defects are cured within the time the rules and practice directions allow, failing which the filing may be treated as fresh or the lapse must be explained by a condonation-of-refiling-delay application.</div>
<div class="fstep"><strong>Registration.</strong> Only on clearing scrutiny does the matter get a regular number and travel to the bench — with any condonation applications listed first.</div>
</div>

<h2>The three doctrinal boxes</h2>
<table class="law">
<tr><th>Situation</th><th>Governing approach</th><th>Risk level</th></tr>
<tr><td>Filed in time; cured and refiled with modest delay</td><td>Refiling delay condoned liberally on a stage-wise explanation</td><td>Low</td></tr>
<tr><td>Filed in time; refiling delayed long and unexplained</td><td>Condonation discretionary; negligence and prejudice weigh; commercial matters strictest</td><td>Moderate to high</td></tr>
<tr><td>Original filing non-est (skeletal, unsigned, placeholder)</td><td>No valid presentation; limitation runs to the refiling date; Section 5 standards (or the statute\'s outer cap) apply</td><td>Severe — often fatal</td></tr>
</table>

<div class="note">
<p>The non-est doctrine is the sharp edge. Filings made purely to stop the clock — a memo of appeal without the impugned judgment, unsigned bundles, or uploads a fraction of the real record — invite the finding that nothing was filed. The first presentation must be an appeal a court could in principle hear, even if imperfect.</p>
</div>

<h2>Preventive practice</h2>
<div class="tiles">
<div class="tile"><strong>File complete, not just early.</strong> Build the paper-book to scrutiny standards the first time: correct court fee, certified copy applied for (with the application number on record), signed and attested pleadings.</div>
<div class="tile"><strong>Diarise objection timelines.</strong> Treat each objection notification like a limitation date; the e-filing portal\'s timestamps will either vindicate or convict the office that handled the file.</div>
<div class="tile"><strong>Cure in tranches if needed.</strong> Where one defect (say, a certified copy) awaits a third party, refile curing everything else and explain the outstanding item — continuous prosecution is the theme courts reward.</div>
<div class="tile"><strong>Keep the client informed.</strong> A matter "filed" but unregistered for months is a professional-risk zone; contemporaneous client communication about objection status is both good practice and self-protection.</div>
</div>

<h2>When the delay has already happened</h2>
<p>Draft the condonation application as a chronology, not an apology: a table of dates from presentation through each objection and refiling, exhibiting the e-filing logs, with the human explanation for each gap. Address prejudice — none accrues to the respondent from registry-stage delay in most cases — and, in commercial appeals, confront the stricter regime directly rather than hoping the bench overlooks it. Finally, where the original filing\'s completeness might be attacked as non-est, meet the point head-on by demonstrating what the first bundle contained. The difference between an appeal heard on merits and a limitation dismissal frequently lies in nothing grander than this paperwork discipline.</p>
HTML;
include __DIR__ . '/post-layout.php';
