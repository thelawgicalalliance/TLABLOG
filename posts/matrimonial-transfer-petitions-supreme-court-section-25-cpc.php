<?php
$P = [
  'slug'         => 'matrimonial-transfer-petitions-supreme-court-section-25-cpc.php',
  'title'        => 'Transfer Petitions in the Supreme Court – Advocate Manish Jha',
  'meta'         => 'How matrimonial transfer petitions work in the Supreme Court under Section 25 CPC: grounds, the wife\'s convenience principle, procedure, interim protection and video-conferencing.',
  'h1'           => 'Moving the Case, Not the Spouse: Matrimonial Transfer Petitions in the Supreme Court',
  'crumb'        => 'SC Transfer Petitions',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'When spouses litigate in different States, the Supreme Court\'s power under Section 25 CPC to transfer civil cases across State lines becomes the busiest door in matrimonial practice. Here is how the jurisdiction works.',
  'date'         => '2026-11-02',
  'date_display' => '2 November 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">A husband files for divorce where he works; the wife, back in her parental home a thousand kilometres away, must defend it — often alongside her own maintenance or domestic violence proceedings filed where she lives. Only one court can consolidate litigation scattered across States: the Supreme Court, through its transfer jurisdiction. For civil proceedings — divorce, restitution, guardianship — the power lies in Section 25 of the Code of Civil Procedure, 1908, which authorises the Supreme Court to transfer any suit, appeal or other proceeding from one High Court or civil court in a State to another in a different State, where it is satisfied the order is expedient for the ends of justice. A large share of the transfer petitions on the Court\'s weekly lists are matrimonial, and a distinctive body of practice has grown around them.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial & Family Law', 'child-custody.php' => 'Child Custody', 'domestic-violence.php' => 'Domestic Violence', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Which court transfers a case between two districts in the same State?', 'The High Court, under Section 24 CPC for civil matters. The Supreme Court\'s Section 25 power operates only across State lines — from a civil court in one State to a civil court in another. Choosing the wrong forum is the commonest threshold error in transfer practice.'],
    ['Is the wife\'s convenience decisive?', 'It is weighty, not automatic. The Court has repeatedly treated the wife\'s circumstances — distance, income, young children, safety concerns, pending proceedings at her location — as the dominant consideration in matrimonial transfers, while making clear there is no absolute rule. Each petition is decided on its own hardship matrix.'],
    ['What happens to the trial while the transfer petition is pending?', 'The petitioner ordinarily seeks a stay of proceedings in the transferor court; interim orders commonly stay further proceedings or dispensation with personal appearance. Without a stay, the trial continues, and a decree passed meanwhile can render the petition infructuous — so interim relief should be sought at filing.'],
    ['Can video-conferencing answer a transfer petition?', 'Increasingly, yes. The Court has in many matters declined transfer while directing that the outstation party be examined through video-conferencing or exempted from personal appearance, treating technology as a less drastic alternative. Petitions should therefore address why VC participation is inadequate on the specific facts.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — Section 25 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191'],
    ['label' => 'Supreme Court of India — Rules and Practice (official site)', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory frame</h2>
<p>Section 25 CPC vests the inter-State transfer power exclusively in the Supreme Court, exercisable on a party's application, supported by affidavit, where transfer is "expedient for the ends of justice". The provision carries its own costs discipline: if the Court finds the application frivolous or vexatious, it may order compensation. For criminal proceedings between States — a Section 498A case here, a cross-FIR there — the parallel power to transfer cases and appeals, found in Section 406 of the former CrPC and carried into the corresponding provision of the BNSS, is invoked by a separate transfer petition (criminal); matrimonial disputes frequently require both, filed and heard together.</p>

<h2>The hardship matrix the Court actually weighs</h2>
<div class="check">
<ul>
  <li><strong>Distance and means:</strong> the real travel burden between the two forums, measured against the applicant's income and support structure.</li>
  <li><strong>Children:</strong> a nursing infant or school-going child in the applicant's sole care is among the strongest transfer facts.</li>
  <li><strong>Safety and atmosphere:</strong> specific, documented apprehensions at the respondent's forum — not bare assertions.</li>
  <li><strong>Consolidation:</strong> multiple proceedings between the same spouses — divorce, maintenance, DV Act, guardianship — pending at the applicant's location; one court deciding all is itself an end of justice.</li>
  <li><strong>Comparative hardship:</strong> the respondent's circumstances count too; transfer relocates the burden rather than eliminating it, and the Court asks who can better bear it.</li>
</ul>
</div>

<h2>Procedure, from filing to disposal</h2>
<div class="flow">
  <div class="fstep"><strong>1. Petition and affidavit:</strong> a transfer petition (civil) under Section 25 CPC, setting out both proceedings, the hardship facts and the relief, with an application for stay or exemption from appearance.</div>
  <div class="fstep"><strong>2. Notice:</strong> the Court issues notice to the respondent; proceedings below are commonly stayed in the interim.</div>
  <div class="fstep"><strong>3. Mediation window:</strong> matrimonial transfer petitions are the Supreme Court's most frequent gateway to settlement — the Court regularly refers couples to the Supreme Court Mediation Centre, and a comprehensive settlement often disposes of every pending case at once.</div>
  <div class="fstep"><strong>4. Disposal:</strong> transfer allowed, or declined with protective directions — video-conferencing, exemption from appearance, or costs of travel for each hearing imposed on the other spouse.</div>
</div>

<h2>Drafting the petition that succeeds</h2>
<p>Transfer petitions are decided on affidavits, usually in minutes of hearing time. The drafting consequences are direct. Hardship must be particularised — train and flight realities, the child's school calendar, the applicant's employment leave structure — not recited as adjectives. Every pending proceeding between the parties, including criminal complaints, should be disclosed with case numbers and stages; suppression is punished with dismissal and costs. The prayer should be framed for consolidation where multiple cases exist. And because the respondent will offer video-conferencing as the answer, the petition should anticipate it: witnesses who must be examined physically, documents at the applicant's location, or features of the trial that remote participation cannot fairly accommodate.</p>

<div class="note">
<p><strong>Practice note:</strong> File the transfer petition before substantive progress in the transferor court — issues framed and evidence begun weigh against transfer — and always pair it with an interim stay application. Where the real object is consolidation rather than relocation, say so expressly: a prayer to transfer the respondent's case to the court already seized of the applicant's own proceedings is the version of the relief the Court grants most readily.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
