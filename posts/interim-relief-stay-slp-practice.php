<?php
$P = [
  'slug'         => 'interim-relief-stay-slp-practice.php',
  'title'        => 'Stay and Interim Relief in SLPs – Advocate Manish Jha',
  'meta'         => 'Filing an SLP does not stay the judgment below. How the Supreme Court grants stay and interim relief, the conditions it imposes, and how caveats shape the first day.',
  'h1'           => 'Stay and Interim Relief in SLP Practice: What Filing Does and Does Not Achieve',
  'crumb'        => 'SLP: Stay & Interim Relief',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'The judgment under challenge remains fully operative until the Supreme Court says otherwise — and what it says is usually conditional.',
  'date'         => '2026-08-26',
  'date_display' => '26 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">A persistent misconception in litigation is that filing a special leave petition "stays" the judgment of the High Court. It does not. Until the Supreme Court passes an order, the decree can be executed, the demand recovered, the possession taken, the sentence enforced. Interim relief in the Supreme Court is a distinct, discretionary grant — sought by specific prayer, tested against settled principles, and very often conditioned on deposits, undertakings or security. This explainer covers how stay applications in SLPs work, the standards applied in civil and criminal matters, the role of caveats, and the consequences that follow when the petition is ultimately dismissed.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'business-corporate-law.php' => 'Business & Corporate'],
  'faqs'         => [
    ['Does filing an SLP automatically stay execution of the decree?', 'No. There is no automatic stay at any stage — not on filing, not on Registry numbering, not even on notice unless the order says so. A separate application for stay or interim relief is filed with the petition, and only the Court\'s order operates. Until then, the respondent may lawfully execute, and prudent petitioners move quickly precisely for this reason.'],
    ['What does the Supreme Court consider while granting stay in civil matters?', 'The familiar triad — prima facie case, balance of convenience and irreparable harm — applied with an appellate overlay: the petitioner has already lost, often twice, so courts lean towards protecting the fruits of the decree. Money-decree stays are routinely conditioned on deposit of all or part of the amount; possession and demolition matters attract status quo orders; and interim protection is frequently limited "until further orders" with early return dates.'],
    ['How does interim relief work in criminal SLPs?', 'Through tailored orders: suspension of sentence and bail where conviction is challenged; exemption from surrender pending consideration; stay of non-bailable warrants; and, rarely and in exceptional circumstances, stay of trial proceedings. Protection is almost always conditioned on cooperation and conduct, and it lapses with the petition\'s dismissal.'],
    ['What is the effect of a caveat on interim relief?', 'A caveat under Section 148A CPC lodged by the respondent ensures no ex parte interim order is passed without hearing the caveator. In heavily contested matters, respondents lodge caveats immediately after the High Court judgment, so the first listing becomes a contested interim hearing rather than an ex parte grant.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court of India — Rules and practice', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Supreme Court of India — Case status', 'url' => 'https://www.sci.gov.in/case-status-case-no/'],
  ],
];
$BODY = <<<'HTML'
<h2>The default rule: the judgment below operates</h2>
<p>Article 136 confers a power to grant leave; it carries no suspensory effect of its own. The consequences are practical and immediate. In civil matters, execution can be levied the day after the High Court's judgment; in tax and recovery matters, coercive steps can proceed; in tenancy and possession matters, dispossession can occur; in criminal matters, an affirmed sentence is enforceable and surrender obligations run. Every SLP strategy therefore begins with two questions: what can the respondent lawfully do tomorrow, and which interim order prevents exactly that.</p>

<h2>The interim application, done properly</h2>
<div class="check">
<ul>
  <li><strong>Pray specifically.</strong> "Stay of operation of the impugned judgment" is often the wrong prayer — what is needed may be stay of execution, status quo on possession, restraint on encashment of a bank guarantee, or suspension of sentence. The order tracks the prayer.</li>
  <li><strong>Offer the condition before it is imposed.</strong> A petitioner who volunteers deposit, security or an undertaking frames the discretion instead of suffering it.</li>
  <li><strong>Disclose execution status.</strong> If execution has begun or concluded, say so; interim orders obtained by silence about supervening events rarely survive the respondent's first appearance.</li>
  <li><strong>Ask for protection of restitution.</strong> Where money must be paid out or possession handed over despite the SLP, seek terms that preserve restitution under Section 144 CPC if the petition succeeds.</li>
</ul>
</div>

<h2>Patterns of interim orders</h2>
<table class="law">
  <tr><th>Matter type</th><th>Typical interim order</th><th>Typical condition</th></tr>
  <tr><td>Money decree / arbitral award enforcement</td><td>Stay of execution</td><td>Deposit of the whole or substantial part; bank guarantee for the balance</td></tr>
  <tr><td>Possession / demolition / dispossession</td><td>Status quo as on date</td><td>Undertaking not to create third-party rights</td></tr>
  <tr><td>Recovery / tax demands</td><td>Stay of coercive recovery</td><td>Part-payment; continuation of any deposit made below</td></tr>
  <tr><td>Conviction and sentence</td><td>Suspension of sentence, bail; exemption from surrender</td><td>Bonds, travel restraint, cooperation with the process</td></tr>
  <tr><td>Interlocutory civil orders</td><td>Limited protection confined to the specific act</td><td>Expedition; no equities from the interim order</td></tr>
</table>

<h2>The life and death of interim protection</h2>
<p>Interim orders in SLPs are creatures of the petition. If leave is granted, they commonly continue "until further orders" through the appeal; if the petition is dismissed, they dissolve instantly, and time obtained under them is not a legal accomplishment but a spent indulgence. Two doctrines complete the picture. First, dismissal of an SLP in limine does not merge the High Court's order into any Supreme Court order or amount to affirmation on merits — the judgment below simply continues as before, interim protection gone. Second, restitution: a party that resisted execution through interim orders and ultimately fails can be required to restore the respondent to the position he would have occupied, with interest and costs — the interim order is not a free option on delay.</p>

<h2>The respondent's playbook</h2>
<p>For decree-holders and successful parties below, the counterpart practice is equally defined: lodge the caveat immediately after the judgment; appear on the first day and oppose ex parte relief; where stay is unavoidable, convert it into money — deposits with liberty to withdraw against security, timelines, and dismissal-in-default clauses; and press for early final disposal, since a contested interim order is often the whole battle. Where the petitioner obtained protection by suppressing execution events, an application for vacation with costs is the direct remedy.</p>

<div class="note">
<p><strong>Practice note:</strong> Diarise the interim order's own language. Protection granted "till the next date" dies on the next date unless extended in terms; protection "until further orders" survives adjournments. More interim protection has been lost in the Supreme Court to unread order-sheets than to opposing counsel.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
