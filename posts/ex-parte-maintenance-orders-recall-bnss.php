<?php
$P = [
  'slug'         => 'ex-parte-maintenance-orders-recall-bnss.php',
  'title'        => 'Setting Aside Ex Parte Maintenance Orders – Advocate Manish Jha',
  'meta'         => 'Ex parte maintenance under Section 144 BNSS: when courts proceed without the respondent, the three-month window to apply for setting aside, and good cause.',
  'h1'           => 'Decided in Your Absence: Ex Parte Maintenance Orders and the Three-Month Window to Set Them Aside',
  'crumb'        => 'Maintenance — Ex Parte Orders',
  'kicker'       => 'Procedure Explainer · Section 145 BNSS',
  'sub'          => 'A respondent who wilfully avoids service can be proceeded against ex parte in maintenance cases — but the statute itself provides the remedy: an application within three months, on good cause shown, to have the ex parte order set aside.',
  'date'         => '2026-09-21',
  'date_display' => '21 September 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Maintenance files are full of respondents who learn of an order only when the recovery warrant or the salary attachment arrives. Some were genuinely never served; others gambled on avoidance and lost. The law governing both situations is compact: the maintenance court may proceed ex parte against a person wilfully avoiding service or neglecting to attend, and the same provision gives that person a defined escape route — an application to set aside the ex parte order within three months, on good cause shown. How that window works, and what counts as good cause, decides a large volume of Delhi Family Court litigation.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', 'domestic-violence.php' => 'Domestic Violence', 'legal-notice-replies.php' => 'Legal Notices', 'child-custody.php' => 'Child Custody'],
  'faqs'         => [
    ['When can a maintenance court proceed ex parte?', 'Under Section 145(2) of the BNSS (formerly Section 126(2) CrPC), if the court is satisfied that the respondent is wilfully avoiding service or wilfully neglecting to attend despite service, it may hear and determine the case ex parte. The satisfaction must be recorded on material — service reports, process history — not assumed from a single failed summons.'],
    ['What is the time limit to apply for setting aside an ex parte maintenance order?', 'Three months from the date of the order, under the proviso to Section 145(2) BNSS. The applicant must show good cause for his absence, and the court may impose terms — including payment of costs to the opposite party — while setting aside the order and restoring the case.'],
    ['What amounts to "good cause"?', 'Genuine lack of knowledge of the proceedings is the classic ground: service at a wrong or outdated address, substituted service by publication in a newspaper the respondent could not reasonably have seen, or service on a relative who never communicated it. Illness and circumstances beyond control also qualify. What does not qualify is demonstrated evasion — refusal of summons, service on the respondent personally, or knowledge shown through conduct.'],
    ['Does setting aside wipe out the maintenance already ordered?', 'Setting aside restores the case for fresh adjudication, but courts frequently protect the applicant wife or children in the interim — the arrears question is then decided in the restored proceedings. A respondent who applies beyond three months must ordinarily challenge the order in revision instead, where the delay itself will be scrutinised.'],
  ],
  'sources'      => [ ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — official text (India Code)', 'url' => 'https://www.indiacode.nic.in/'] ],
];
$BODY = <<<'HTML'
<h2>The statutory scheme</h2>
<p>Maintenance under Section 144 BNSS (the successor of Section 125 CrPC) is a summary, preventive jurisdiction, and its procedure — Section 145 BNSS, formerly Section 126 CrPC — is built for speed. Evidence is taken in the presence of the respondent or, where personal attendance is dispensed with, of his pleader. But the provision anticipates the respondent who makes himself unavailable: on recorded satisfaction of wilful avoidance of service or wilful neglect to attend, the court may proceed to hear and determine the case ex parte. The order that results is fully enforceable — recovery of arrears, attachment, even detention for wilful default — which is why the set-aside mechanism matters.</p>

<h2>The three-month proviso</h2>
<div class="flow">
<div class="fstep"><strong>Trigger.</strong> An ex parte maintenance order — interim or final — has been made against the respondent.</div>
<div class="fstep"><strong>Window.</strong> An application to set aside must be made within three months of the date of the order. The period is statutory; courts treat it strictly, and a respondent outside it is generally relegated to revision.</div>
<div class="fstep"><strong>Standard.</strong> Good cause for the absence must be shown — the focus is on why the respondent did not appear, not on the merits of the maintenance claim.</div>
<div class="fstep"><strong>Terms.</strong> Setting aside may be conditioned on costs, and Delhi courts often couple restoration with directions that protect the applicant — such as continuation of interim maintenance pending the restored hearing.</div>
</div>

<h2>The service battleground</h2>
<p>Most set-aside applications are won or lost on the service record. The respondent's affidavit should reconstruct it precisely: the addresses on the file and who lived there, each process report and its result, whether substituted service was ordered and in which publication, and when and how the respondent actually learned of the order. On the other side, applicants resisting restoration should marshal the process history to show a pattern — summons refused, addresses changed without disclosure, appearance through relatives — because a court persuaded of evasion will hold the absence wilful and the three-month remedy unavailable on merits.</p>

<h2>Strategic notes for respondents</h2>
<div class="check">
<p>Move immediately on knowledge. Even within the three months, unexplained gaps between learning of the order and applying corrode the claim of good cause.</p>
<p>Do not ignore enforcement. A pending set-aside application does not by itself stay recovery; seek interim protection expressly, and comply with any interim maintenance directed — defaults are viewed severely and can result in the defence being struck off in related proceedings.</p>
<p>Beyond three months, the remedy shifts to revision before the Sessions Court or the High Court, where both the ex parte procedure and the merits can be examined — but delay must be accounted for, and revision courts do not lightly disturb maintenance orders that the respondent's own conduct produced.</p>
</div>
<p>The same ex parte logic and set-aside discipline apply to interim maintenance under the Domestic Violence Act and to Family Court proceedings generally, though the governing provisions differ. In every forum, the underlying rule is constant: maintenance jurisdiction will not let an evasive respondent stall a dependent spouse or child, but it equally will not let an order stand against a person who genuinely never had his day in court.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
