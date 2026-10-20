<?php
$P = [
  'slug'         => 'bail-multiple-firs-same-transaction.php',
  'title'        => 'Bail Across Multiple FIRs – Advocate Manish Jha',
  'meta'         => 'When one transaction spawns several FIRs: why bail must be sought in each case, the problem of revolving-door arrests, clubbing of FIRs and strategies for the defence.',
  'h1'           => 'One Incident, Many FIRs: The Bail Problem of Successive Registrations',
  'crumb'        => 'Bail & Multiple FIRs',
  'kicker'       => 'Explainer · Criminal Law',
  'sub'          => 'Bail granted in one FIR does not open the jail gate if three more are waiting — a reality that calls for mapping every case before moving the first application.',
  'date'         => '2026-10-20',
  'date_display' => '20 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">In financial frauds, matrimonial disputes that spread across jurisdictions, and public-order incidents, a single course of events often generates multiple first information reports — different complainants, different police stations, sometimes different States. For the accused, this multiplies everything: arrests, remands, bail applications, sureties and conditions. An order of bail operates only in the case in which it is passed, so liberty requires success in every case. This explainer maps the law on multiple FIRs and the practical strategy for bail across them.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud Defence', 'banking-fraud.php' => 'Banking Fraud'],
  'faqs'         => [
    ['If bail is granted in one FIR, can the accused still be arrested in another?', 'Yes. Bail is case-specific: it binds the State only in the crime number in which it is granted. An accused released in FIR No. 1 can be formally arrested in FIR No. 2 arising even from the same facts, and must seek bail there afresh. This is why the defence must identify every registered case — through police status reports, court searches and the complainant\'s litigation history — before celebrating a single bail order.'],
    ['Is it legal to register several FIRs for the same incident?', 'For the same offence arising from the same transaction against the same accused, a second FIR is impermissible — the information is to be treated as a statement in the investigation of the first. But distinct offences, distinct victims (as in cheating of many investors), counter-versions of the same occurrence, and offences in different jurisdictions can each support a separate FIR. The line between a barred second FIR and a permissible fresh one is where much of this litigation is fought, through quashing petitions.'],
    ['Can all the FIRs be clubbed or transferred to one place?', 'Investigation of similar FIRs can be consolidated by orders of constitutional courts, and the Supreme Court has in appropriate cases — notably multi-State disputes — directed that subsequent FIRs be treated with the first or transferred for joint investigation or trial. Within a State, the High Court\'s powers under Section 528 BNSS and its writ jurisdiction are the usual route. Clubbing is discretionary and fact-driven, not a right.'],
    ['What is "revolving-door" custody and how do courts respond?', 'It is the practice of arresting an accused in a fresh case each time bail is secured in the last, keeping custody continuous without any single case justifying it. Constitutional courts have viewed the pattern as an abuse undermining Article 21, and respond with devices such as common bail orders covering listed FIRs, directions that no coercive steps be taken in unregistered or future cases on the same facts without leave, and in proper cases, quashing of successive FIRs.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court — official site', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>How multiplicity happens</h2>
<div class="tiles">
  <div class="tile"><h4>Many victims, one scheme</h4><p>Investment frauds and property cheating produce an FIR per complainant, often across police stations and States. Each is a distinct offence against a distinct victim, so each FIR is ordinarily valid.</p></div>
  <div class="tile"><h4>Cross-versions</h4><p>A brawl or matrimonial confrontation yields an FIR from each side. Counter-cases are legally permissible; they are tried separately but usually by the same court for consistency.</p></div>
  <div class="tile"><h4>Spread jurisdictions</h4><p>The same continuing offence — a matrimonial dispute, a defamatory campaign, a cyber fraud — generates FIRs wherever consequences land, each police station asserting its own jurisdiction.</p></div>
  <div class="tile"><h4>Improper duplication</h4><p>Sometimes the second FIR is simply the first in new clothing — same offence, same transaction, same accused. That is barred, and the remedy is quashing, with the second information treated as a statement in the first investigation.</p></div>
</div>

<h2>The governing principles</h2>
<p>Three strands of settled law define the field. First, the rule against a second FIR: for the same cognizable offence or the same occurrence and transaction, there can be only one FIR, and successive FIRs by or against the same parties on the same facts are impermissible. Second, the sameness test: courts compare the two informations to see whether they relate to the same incident and transaction or to distinct occurrences; distinct offences and counter-versions survive the test. Third, the bail consequence: because each surviving FIR is an independent case, the accused needs bail in each, and custody in any one case defeats release in all.</p>

<h2>The defence playbook</h2>
<div class="flow">
  <div class="fstep"><strong>Map the exposure</strong> — obtain a complete list of FIRs: police dossiers, online court searches, RTI where feasible, and disclosure sought in the first bail application itself.</div>
  <div class="fstep"><strong>Classify each FIR</strong> — same-transaction duplicates (quashing candidates), distinct-victim cases (bail in each), counter-cases (bail plus consolidation before one court).</div>
  <div class="fstep"><strong>Sequence the applications</strong> — move first where custody is operating; secure interim protection in the remainder, including anticipatory bail where arrest has not yet occurred.</div>
  <div class="fstep"><strong>Seek protective directions</strong> — in writ or Section 528 BNSS proceedings, ask that any future FIR on the same facts not lead to arrest without leave of the court, where the pattern of successive registration is demonstrable.</div>
  <div class="fstep"><strong>Press for consolidation</strong> — joint investigation or trial before one forum limits conflicting orders and repeated custody.</div>
</div>

<h2>What courts weigh in multi-FIR bail</h2>
<table class="law">
  <tr><th>Factor</th><th>Bearing on bail</th></tr>
  <tr><td>Aggregate custody already undergone</td><td>Custody across connected cases is viewed cumulatively when Article 21 and trial delay are urged</td></tr>
  <tr><td>Parity of allegations</td><td>Bail reasoning in one FIR carries persuasive weight in materially identical FIRs</td></tr>
  <tr><td>Pattern of registration</td><td>FIRs surfacing one by one, timed to each release, suggest abuse and invite protective orders</td></tr>
  <tr><td>Genuine multiplicity</td><td>Large numbers of independent victims cut the other way, indicating scale of the alleged offence</td></tr>
  <tr><td>Conduct on earlier bails</td><td>Compliance with conditions in the first cases is the strongest practical argument in the later ones</td></tr>
</table>

<h2>Conditions and sureties across cases</h2>
<p>Multiplicity also multiplies conditions: separate bonds and sureties in each case, multiple reporting requirements, and travel restrictions issued by different courts. Under Section 485 of the Bharatiya Nagarik Suraksha Sanhita, 2023, the court may, and in the case of an indigent person must, consider reducing sureties\' burden, and applications to permit the same surety or to consolidate reporting conditions before one police station are routinely made and frequently allowed. Where conditions imposed in parallel cases conflict — differing reporting days, inconsistent travel limits — a modification application in the stricter case, disclosing all parallel orders, is the clean solution; concealment of parallel cases in any bail application, by contrast, is a recognised ground for cancellation.</p>

<h2>The complainant's side of the ledger</h2>
<p>Multiple FIRs are not always oppression; for genuinely separate victims they are the law working as intended. Complainants in such cases legitimately resist blanket protective orders by showing that their transaction is distinct — different representations, different payments, different dates — and that treating all cases as one would erase their individual grievance. The battle, as ever, is fought on the sameness test, with documents.</p>
<div class="note">
  <p>This article states general principles of criminal procedure for information. Strategy in any real cluster of cases depends on their specific facts and forums; this is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
