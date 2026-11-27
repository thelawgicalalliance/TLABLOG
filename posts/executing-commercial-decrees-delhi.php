<?php
$P = [
  'slug'         => 'executing-commercial-decrees-delhi.php',
  'title'        => 'Executing a Commercial Decree in Delhi – Advocate Manish Jha',
  'meta'         => 'Winning a commercial suit is half the job: asset discovery, attachment, garnishee orders, arrest and objections — how decree execution actually works in Delhi courts.',
  'h1'           => 'From Decree to Money: Executing a Commercial Decree in Delhi',
  'crumb'        => 'Commercial: Execution',
  'kicker'       => 'Practice Explainer · 27 November 2026',
  'sub'          => 'Order XXI CPC gives the decree-holder a toolkit — disclosure on oath, attachment, garnishee process, sale and arrest — and recent practice adds strict timelines for using it.',
  'date'         => '2026-11-27',
  'date_display' => '27 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A money decree from a Commercial Court is a document, not a payment. Converting it into recovery is a distinct phase of litigation with its own strategy, and in Delhi it rewards preparation: knowing where the judgment-debtor&rsquo;s assets sit before filing, choosing the right mode of execution, and anticipating the objections that stall enforcement. This explainer walks through the execution of commercial money decrees &mdash; the machinery of Order XXI of the Code of Civil Procedure as it operates in the District Commercial Courts and the Commercial Division of the High Court of Delhi.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'property-disputes.php' => 'Property Disputes', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Where is a commercial decree executed?', 'By the court that passed it, or by the court to which it is transferred for execution — typically where the judgment-debtor or its assets are located (Sections 38 and 39 CPC). Decrees of Delhi&rsquo;s Commercial Courts travel to other districts through transfer certificates; conversely, outstation decrees are received for execution against Delhi assets.'],
    ['What if the decree-holder does not know the debtor&rsquo;s assets?', 'Order XXI Rule 41 CPC allows examination of the judgment-debtor on oath about assets, and courts direct affidavits of assets in execution. The Supreme Court&rsquo;s execution directions require executing courts to take up asset disclosure early, and false or evasive affidavits invite coercive consequences — the disclosure stage is where most executions are won.'],
    ['Which mode of execution works fastest for money decrees?', 'Against companies and traders, attachment of bank accounts and receivables (garnishee process under Order XXI Rules 46 and 46A) usually produces results fastest, because it interrupts cash flow. Attachment and sale of movable or immovable property is slower but creates sustained pressure; arrest and civil-prison detention under Sections 51 and 55 to 59 CPC requires proof of means and refusal or neglect to pay, and is used sparingly.'],
    ['Can the judgment-debtor reopen the case in execution?', 'No. Section 47 CPC confines execution questions to execution, discharge and satisfaction of the decree; the executing court cannot go behind the decree. Third-party claims to attached property are adjudicated under Order XXI Rules 58 and 97 to 101 within the execution itself — as the Delhi High Court reiterated this week in the Order XXI Rule 97 context — and these determinations carry decree force with their own appeals.'],
  ],
  'sources'      => [
    ['label' => 'Reema Verma v. Deepali Ghosh, CM(M) 1258/2026, Delhi High Court — on Rule 97 objections in execution (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/108784761/'],
  ],
];
$BODY = <<<'HTML'
<h2>Before filing: the asset map</h2>
<p>The most consequential execution work happens before the petition is drafted. For a corporate judgment-debtor: bank accounts named in the contract and invoices, GST and MCA filings indicating operational entities, receivables from identifiable customers, immovable property in the company&rsquo;s name, and group entities that received funds. The execution petition should propose specific modes against specific assets &mdash; a petition that asks the court to find the assets starts a year behind one that tells it where they are.</p>

<h2>The toolkit, mode by mode</h2>
<table class="law">
  <tr><th>Mode</th><th>Provision</th><th>Best used when</th></tr>
  <tr><td>Disclosure on oath</td><td>Order XXI Rule 41</td><td>Asset picture incomplete; sets up perjury and detention consequences for evasion</td></tr>
  <tr><td>Bank attachment / garnishee</td><td>Order XXI Rules 46, 46A-46I</td><td>Operating accounts and receivables known; interrupts cash flow immediately</td></tr>
  <tr><td>Attachment and sale of property</td><td>Order XXI Rules 54, 64-73</td><td>Immovable or valuable movable assets identified; pressure over time</td></tr>
  <tr><td>Arrest and detention</td><td>Sections 51(c), 55-59</td><td>Proven means plus refusal or neglect; a last-resort lever requiring the Section 51 proviso inquiry</td></tr>
  <tr><td>Appointment of receiver</td><td>Order XXI Rule 11(2)(j), Order XL</td><td>Income-producing assets — rents, tolls, business receipts</td></tr>
</table>

<h2>The timetable courts now expect</h2>
<div class="flow">
  <div class="fstep"><strong>Immediate executability.</strong> There is no automatic stay of a money decree pending appeal; the appellate court grants stay on terms, commonly deposit of all or part of the decretal amount. File execution promptly — the pendency of an appeal without stay is no answer to it.</div>
  <div class="fstep"><strong>Disclosure first, coercion next.</strong> Executing courts front-load the asset affidavit, then move to attachment on the disclosed or discovered assets.</div>
  <div class="fstep"><strong>Objections on a clock.</strong> The Supreme Court&rsquo;s execution-reform directions ask executing courts to dispose of executions expeditiously — a standard the Delhi High Court invoked this week in directing a contested execution to be decided preferably within six months despite third-party objections.</div>
</div>

<h2>Defending an execution, legitimately</h2>
<div class="tiles">
  <div class="tile"><strong>Section 47 questions.</strong> Payment, adjustment, satisfaction — recorded under Order XXI Rule 2 — and executability objections belong in execution; merits of the decree do not.</div>
  <div class="tile"><strong>Third-party rights.</strong> Genuine claimants to attached property should intervene under Rules 58 or 97-101 with documents, not through collateral suits the Code bars.</div>
  <div class="tile"><strong>Negotiated satisfaction.</strong> Instalment orders under Order XX Rule 11(2) require the decree-holder&rsquo;s consent after decree — which makes a credible payment plan, offered early, the debtor&rsquo;s best procedural currency.</div>
</div>
<div class="note">This explainer describes the execution framework in general terms for information. It is not legal advice; execution strategy must be built on the specific decree and the judgment-debtor&rsquo;s asset position.</div>
HTML;
include __DIR__ . '/post-layout.php';
