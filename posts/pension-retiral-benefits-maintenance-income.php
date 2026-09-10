<?php
$P = [
  'slug'         => 'pension-retiral-benefits-maintenance-income.php',
  'title'        => 'Pension and Maintenance Claims – Advocate Manish Jha',
  'meta'         => 'Can maintenance be claimed from a retired husband? How pension, retiral benefits and post-retirement income are treated in maintenance cases in Delhi courts.',
  'h1'           => 'Maintenance After Retirement: Pension and Retiral Benefits as Income',
  'crumb'        => 'Pension &amp; Maintenance',
  'kicker'       => 'Procedure &amp; Practice · Maintenance',
  'sub'          => 'Retirement changes the arithmetic of a maintenance case but not its principles — pension is income, retiral corpus is an asset, and pleas of incapacity are tested, not presumed.',
  'date'         => '2026-09-10',
  'date_display' => '10 September 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">Maintenance disputes do not retire when the husband does. Family Courts in Delhi regularly face the argument that a husband who has superannuated can no longer pay — or should pay drastically less — because his salary has ceased. The answer the courts give is more textured: pension is income for maintenance purposes; retiral benefits are assets whose deployment and yield can be examined; and the obligation to maintain a wife who cannot maintain herself, under Section 125 CrPC (now Section 144 of the BNSS 2023) or the matrimonial statutes, survives the last working day. This explainer sets out how retirement actually plays out across the maintenance framework.</p>',
  'related'      => ['matrimonial-lawyer-in-delhi.php' => 'Matrimonial Matters', 'domestic-violence.php' => 'Domestic Violence', 'child-custody.php' => 'Child Custody', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Is pension counted as income for maintenance?', 'Yes. Pension is periodic income in the payer\'s hands and enters the maintenance calculation like salary, though usually at a lower absolute level. Courts fix maintenance as a reasonable proportion of the pension after accounting for the husband\'s own needs, medical expenses and other dependants.'],
    ['Can retiral benefits like gratuity, provident fund and leave encashment be considered?', 'They are assets rather than recurring income, but they are not invisible. Courts examine what the retiree did with the corpus — investments and deposits generate interest income that counts, and dissipating the corpus to plead poverty invites adverse inference. Arrears of maintenance can also be recovered from such amounts in execution.'],
    ['Does maintenance fixed before retirement automatically reduce on retirement?', 'No. The payer must apply for modification — under Section 127 CrPC / Section 146 BNSS for magistrate-ordered maintenance, or before the matrimonial court for orders under the HMA — proving the changed financial position. Until modified, the existing order continues and arrears accumulate.'],
    ['Can a wife claim maintenance for the first time after the husband retires?', 'Yes. The right depends on her inability to maintain herself and his means — and "means" includes pension, investment income and assets. Retirement lowers quantum arguments; it does not extinguish the claim.'],
  ],
  'sources'      => [
    ['label' => 'Code of Criminal Procedure, 1973 — Section 125 (Indian Kanoon, statute text)', 'url' => 'https://indiankanoon.org/doc/1056396/'],
    ['label' => 'Hindu Marriage Act, 1955 — Section 25 (Indian Kanoon, statute text)', 'url' => 'https://indiankanoon.org/doc/95286/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory canvas</h2>
<p>Nothing in the maintenance provisions distinguishes a working payer from a retired one. Section 125 CrPC — carried forward as Section 144 BNSS — obliges a person having "sufficient means" to maintain a wife unable to maintain herself; permanent alimony under Section 25 of the Hindu Marriage Act is fixed having regard to the respondent's "income and other property"; interim maintenance under Section 24 HMA and monetary relief under Section 20 of the DV Act use similarly broad language. Pension is income; property that yields interest is property; and the affidavit of assets and liabilities that both parties must file in Delhi maintenance litigation captures all of it.</p>

<h2>How courts treat the components of a retirement package</h2>
<table class="law">
<tr><th>Component</th><th>Character</th><th>Treatment in maintenance cases</th></tr>
<tr><td>Monthly pension</td><td>Recurring income</td><td>Directly enters the quantum calculation, like salary at a reduced level</td></tr>
<tr><td>Provident fund, gratuity, commutation, leave encashment</td><td>Capital / retiral corpus</td><td>Yield (interest, annuity) counts as income; the corpus itself is relevant to capacity and is reachable in execution for arrears</td></tr>
<tr><td>Post-retirement employment or consultancy</td><td>Recurring income</td><td>Fully countable; courts expect disclosure and draw adverse inference from concealment</td></tr>
<tr><td>Rent from property acquired during service</td><td>Recurring income</td><td>Fully countable</td></tr>
</table>

<h2>The recurring litigation patterns</h2>
<div class="tiles">
<div class="tile"><strong>The modification application.</strong> A husband paying salary-based maintenance who superannuates should move promptly for modification with complete disclosure — pension payment order, corpus statements, medical expenses. Courts respond to candour with realistic recalibration; they respond to bare pleas of "retired, cannot pay" with dismissal.</div>
<div class="tile"><strong>The disappearing corpus.</strong> Retirees who receive substantial terminal benefits and then plead emptiness are the maintenance courts' least favourite litigants. Transfers to children, sudden "loans" to relatives, and undocumented expenses are routinely disbelieved, and capacity is assessed on what the corpus should reasonably yield.</div>
<div class="tile"><strong>The earning-capacity answer.</strong> Where the retiree is professionally qualified and healthy, courts may consider earning capacity, not just actual receipts — retirement from one employment is not incapacity to earn, particularly for early retirees.</div>
</div>

<h2>Execution against pension and retiral dues</h2>
<p>Maintenance arrears are recoverable through the enforcement machinery — including warrants under Section 125(3) CrPC / Section 144 BNSS framework and civil execution for matrimonial decrees. While service law historically protected pension from attachment for ordinary debts, maintenance stands on a different footing in practice: courts direct deductions at source from pension disbursing authorities and appropriate portions of terminal dues toward arrears. A wife holding an unpaid maintenance order against a retiree should place the pension particulars on record and seek a source-deduction direction rather than pursue serial contempt applications.</p>

<h2>Strategy notes for both sides</h2>
<div class="check">
<p><strong>For wives.</strong> Obtain the husband's service and pension particulars through the affidavit of assets; seek disclosure of the terminal-benefit statement issued at superannuation; and ask for source deduction where default is chronic.</p>
<p><strong>For husbands.</strong> Retirement is a genuine changed circumstance — but it must be proved, quantified and pleaded through a modification application, with the pension payment order and corpus deployment fully documented. Unilateral reduction of payments only builds arrears that execution will find.</p>
<p><strong>For both.</strong> Settlement at the retirement threshold — a one-time payment from the corpus in lieu of continuing monthly obligations, recorded in court — is often the rational endgame, and Delhi courts readily incorporate such packages into consent orders.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
