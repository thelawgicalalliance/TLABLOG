<?php
$P = [
  'slug'         => 'transfer-petitions-supreme-court-matrimonial.php',
  'title'        => 'Matrimonial Transfer Petitions In SC – Advocate Manish Jha',
  'meta'         => 'How Supreme Court transfer petitions work in matrimonial cases: Section 25 CPC, grounds that persuade, interim stays, alternatives and post-transfer steps.',
  'h1'           => 'Moving the Battlefield: Transfer Petitions in the Supreme Court in Matrimonial Litigation',
  'crumb'        => 'Supreme Court — Transfer Petitions',
  'kicker'       => 'Procedure Explainer · Supreme Court Practice',
  'sub'          => 'When spouses litigate in different states, the Supreme Court\'s transfer jurisdiction — Section 25 CPC for civil cases and the corresponding criminal transfer power — decides where the war will actually be fought, and matrimonial cases dominate this docket.',
  'date'         => '2026-09-19',
  'date_display' => '19 September 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">A wife files a maintenance case in the city where she has returned to her parents; the husband files for divorce where the couple last resided, several hundred kilometres away. Neither can realistically litigate in both places. The instrument that resolves this standoff is the transfer petition in the Supreme Court — a distinct species of proceeding, different from an SLP, by which cases pending in one state are moved to another. Matrimonial disputes form the bulk of this docket, and knowing how these petitions actually work is part of the toolkit of any family-law practice.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', 'child-custody.php' => 'Child Custody', 'delhi-high-court.php' => 'Delhi High Court', 'domestic-violence.php' => 'Domestic Violence'],
  'faqs'         => [
    ['Which provision governs a transfer petition in the Supreme Court?', 'For civil proceedings — divorce, maintenance under personal law, custody — Section 25 CPC empowers the Supreme Court to transfer a case from one High Court or civil court in one state to another. For criminal proceedings, the corresponding power to transfer cases and appeals across states lies with the Supreme Court under the transfer provision of the criminal procedure code (Section 406 CrPC for older cases, with its BNSS successor for new ones). Transfers within a state are sought before the High Court instead.'],
    ['What grounds actually persuade the Court in matrimonial transfers?', 'The convenience of the wife has long been treated with particular solicitude — her lack of independent income, care of a young child, health, distance and safety concerns in travelling to the husband\'s forum, and the pendency of related cases in her forum all weigh in. The Court balances these against the husband\'s circumstances and, where several cases pend between the parties, often consolidates them in one court.'],
    ['Does filing a transfer petition stay the case sought to be transferred?', 'Not automatically, but the Supreme Court routinely grants interim stay of proceedings in the case sought to be transferred, and parties commonly obtain protection against ex parte progress. Until a stay is granted, the lower court can proceed, so timing the petition matters.'],
    ['Are there alternatives to physically transferring the case?', 'The Court has explored video-conferencing as an alternative to transfer, and later clarified in Santhini v. Vijaya Venketesh that in family court matters video-conferencing is not an automatic substitute where a party objects, restoring emphasis on the in-person character of matrimonial adjudication. Undertakings — the husband paying travel and stay costs for each hearing — are another middle path the Court sometimes accepts in lieu of transfer.'],
  ],
  'sources'      => [ ['label' => 'Supreme Court of India — official website (case status and e-filing)', 'url' => 'https://www.sci.gov.in/'] ],
];
$BODY = <<<'HTML'
<h2>What a transfer petition is — and is not</h2>
<p>A transfer petition is an original proceeding in the Supreme Court: it does not challenge any order (that is the province of the SLP) but asks that a pending case be moved from one state's courts to another's. The civil power comes from Section 25 CPC, under which the Supreme Court may transfer any suit, appeal or other proceeding if it is expedient for the ends of justice; the criminal power to move cases and appeals between High Courts and between courts subordinate to different High Courts is the Supreme Court's under the criminal code's transfer provision. Petitions are registered as TP(C) or TP(Crl.) and are typically listed relatively quickly, with notice and interim orders following in the ordinary course.</p>

<h2>The matrimonial docket</h2>
<p>The classic pattern is jurisdictional crossfire. Matrimonial statutes deliberately give the wife accessible forums — a divorce petition can be presented where the wife resides, and maintenance and DV proceedings lie where the aggrieved person resides — while the husband's petitions are often filed where the couple last lived together. The result is parallel litigation in two states, and the transfer petition is the mechanism that consolidates it. In deciding these, the Court has consistently shown solicitude for the wife's convenience: distance, dependence, a young child, safety apprehensions, and the cluster of related proceedings already pending in her forum. That solicitude is a weighting, not a rule — husbands do succeed where the equities run their way, and the Court increasingly looks for the arrangement that lets one court decide everything between the parties.</p>

<h2>Building the petition</h2>
<div class="flow">
<div class="fstep"><strong>The pending-case map.</strong> List every proceeding between the parties — divorce, maintenance, DV, criminal complaints, custody — with forums and stages. Consolidation arguments are won on this map.</div>
<div class="fstep"><strong>The hardship affidavit.</strong> Concrete, verifiable hardship: travel time and cost, the child's school schedule, medical records, employment constraints, any incidents bearing on safety. Generalities persuade no one.</div>
<div class="fstep"><strong>Interim protection.</strong> Seek stay of the proceeding sought to be transferred, and protection against ex parte steps, at the first listing.</div>
<div class="fstep"><strong>The fallback positions.</strong> Be ready for the middle paths — costs-of-travel undertakings, video appearance for interim stages, or transfer of one case to meet the other rather than the petitioner's first choice of forum.</div>
</div>

<h2>Opposing a transfer</h2>
<p>Resistance succeeds by attacking the hardship case with specifics: the petitioner's actual travel history, income and mobility; the respondent's own counter-hardships; the stage of the trial (transfers late in evidence face resistance); and offers that neutralise the claimed difficulty, such as bearing travel expenses or consenting to virtual appearance for formal dates. Where the petitioner's forum choice looks tactical — a forum with no real connection to the parties — saying so with documents matters more than saying so with emphasis.</p>

<h2>After the transfer</h2>
<div class="check">
<p>The transferee court receives the record and continues from the stage reached — transfer does not restart the case, though practical delays in record transmission are common and worth monitoring.</p>
<p>Orders already passed — interim maintenance, injunctions — continue to operate unless modified by the transferee court.</p>
<p>Where consolidation was the object, apply promptly in the transferee court for joint trial or coordinated listing of the connected matters.</p>
</div>
<p>For Delhi litigants, the transfer jurisdiction cuts both ways: cases are transferred into Delhi's Family Courts when the balance of convenience points here, and out of Delhi when it does not. Either way, the petition is decided on the practical geography of the parties' lives — which is why the file that wins is the one that documents that geography best.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
