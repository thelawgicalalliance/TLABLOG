<?php
$P = [
  'slug'         => 'cheque-bounce-appeal-suspension-sentence-deposit.php',
  'title'        => 'Cheque Bounce Appeals and the 20% Deposit – Advocate Manish Jha',
  'meta'         => 'Appealing a Section 138 NI Act conviction: suspension of sentence, bail, and the Section 148 power to order deposit of at least 20% of the compensation.',
  'h1'           => 'After a Cheque Bounce Conviction: Appeal, Bail and the Section 148 Deposit',
  'crumb'        => 'Cheque Bounce Appeals',
  'kicker'       => 'Explainer · Appeals & Bail',
  'sub'          => 'A conviction under Section 138 of the Negotiable Instruments Act is appealable — but since 2018 the appellate court can require the appellant to deposit at least twenty per cent of the fine or compensation.',
  'date'         => '2026-09-03',
  'date_display' => '3 September 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Cheque dishonour prosecutions under Section 138 of the Negotiable Instruments Act, 1881 end, more often than most offences, in conviction — the presumptions do heavy lifting for the complainant. What follows conviction is a distinctive appellate regime: suspension of the sentence and bail are usually granted, but the Negotiable Instruments (Amendment) Act, 2018 armed appellate courts with Section 148, under which the appellant can be directed to deposit a minimum of twenty per cent of the fine or compensation awarded by the trial court. This explainer walks through the road from conviction to appeal in Delhi.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'legal-notice-replies.php' => 'Legal Notices', 'banking-fraud.php' => 'Banking Fraud'],
  'faqs'         => [
    ['Where does an appeal against a Section 138 conviction lie?', 'Convictions are recorded by Magistrates, so the appeal lies to the Court of Session under the appellate chapter of the BNSS. The appeal must be filed within the limitation period from the date of judgment, with an application for suspension of sentence and bail moved alongside, since the convict is otherwise liable to serve the sentence.'],
    ['Is the 20% deposit automatic in every appeal?', 'Section 148 says the appellate court "may" order a deposit of a minimum of twenty per cent of the fine or compensation. The power is ordinarily exercised — the amendment was enacted to discourage dilatory appeals — but it is not mechanical: the court retains discretion to dispense with or mould the deposit in exceptional cases for reasons recorded, and the deposit is in addition to any interim compensation paid under Section 143A at trial.'],
    ['What happens to the deposited amount?', 'The deposit may be released to the complainant during the appeal. If the appeal succeeds, the complainant must repay the amount with interest as directed by the court. The deposit is thus security and interim relief, not a final adjudication.'],
    ['Can the sentence and the compensation both be suspended?', 'Suspension of the substantive sentence pending appeal is routine on furnishing bail bonds. The compensation direction is where Section 148 operates: courts commonly make suspension of sentence effective subject to the deposit within a fixed time, and default in deposit can result in dismissal of the suspension relief and enforcement of the sentence.'],
  ],
  'sources'      => [
    ['label' => 'Negotiable Instruments Act, 1881 (Sections 138, 143A, 148) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Negotiable Instruments (Amendment) Act, 2018 — eGazette', 'url' => 'https://egazette.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the 2018 amendment changed appellate practice</h2>
<p>Before 2018, a convicted drawer could file an appeal, obtain suspension of sentence on modest bonds, and postpone payment for the years the appeal took — turning the appellate docket into an instalment-free extension of credit. Parliament responded with two provisions: Section 143A, permitting interim compensation of up to twenty per cent at the trial stage once the accused pleads not guilty, and Section 148, permitting the appellate court to direct deposit of a minimum of twenty per cent of the fine or compensation in an appeal by the drawer against conviction. The two operate cumulatively: the appellate deposit is in addition to interim compensation paid at trial.</p>

<h2>The sequence after conviction</h2>
<div class="flow">
  <div class="fstep"><h3>1. Judgment and sentence</h3><p>Magistrates typically impose imprisonment up to two years and/or fine up to twice the cheque amount, and most operative orders are framed as compensation to the complainant under the criminal procedure compensation power.</p></div>
  <div class="fstep"><h3>2. Appeal to Sessions</h3><p>Filed within limitation with certified copies; grounds attack the presumptions, service of the statutory notice, the debt or liability, and the financial capacity findings.</p></div>
  <div class="fstep"><h3>3. Suspension of sentence and bail</h3><p>Moved immediately; courts grant suspension on bonds in the ordinary run of cases because the offence is regulatory and the sentence short.</p></div>
  <div class="fstep"><h3>4. Section 148 deposit</h3><p>The appellate court fixes the deposit — twenty per cent is the floor, not the ceiling — payable within the time fixed by the court, extendable on sufficient cause.</p></div>
  <div class="fstep"><h3>5. Release to complainant</h3><p>The court may release the deposit to the complainant pending appeal; repayment with interest follows if the conviction is set aside.</p></div>
</div>

<h2>Arguing about the deposit</h2>
<p>For appellants, the realistic objectives are three. First, quantum and structure: where the compensation is large, courts can be persuaded to stagger the deposit or fix it at the statutory minimum. Second, genuine incapacity: the discretion under Section 148 is judicial, and demonstrated inability to pay — supported by disclosed financials rather than assertion — can justify departure from the usual order in an exceptional case, for reasons recorded. Third, adjustment: interim compensation already paid under Section 143A, and any amounts paid in settlement attempts, should be brought to the court\'s notice for adjustment in the overall framework. For complainants, the mirror objectives are release of the deposit and early hearing; the deposit regime has made appellate settlement conferences far more productive than they were before 2018.</p>

<h2>Settlement remains the exit at every stage</h2>
<p>Section 147 makes every offence under the Act compoundable, and compounding is possible at the appellate stage. In practice, a large fraction of Section 138 appeals end in settlement: the deposit already lying with the court supplies a corpus, and closure spares the drawer the conviction\'s consequences. Where compounding occurs late, courts have required graded costs, so earlier is cheaper. A drawer with a genuine defence should fight; a drawer buying time should understand that the 2018 architecture is designed to make time expensive.</p>

<div class="check">
<ul>
  <li><strong>Diarise the deposit deadline</strong> — default converts a routine suspension order into a live custody risk.</li>
  <li><strong>Seek adjustment</strong> of Section 143A interim compensation already paid.</li>
  <li><strong>Document incapacity</strong> if pressing for departure from the usual deposit — bald pleas fail.</li>
  <li><strong>Explore compounding early</strong>; the discount for early settlement is real.</li>
</ul>
</div>

<div class="note">
<p><strong>Practice note:</strong> A revision or a further appeal does not restart the clock: the Section 148 logic follows the case up the ladder, and courts expect the deposit discipline to be maintained while any superior forum is moved. The first document to settle in any Section 138 appellate strategy is a cash-flow plan for the deposit — the legal grounds come second.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
