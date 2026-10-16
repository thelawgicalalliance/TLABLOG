<?php
$P = [
  'slug'         => 'interest-commercial-recovery-suits.php',
  'title'        => 'Interest in Recovery Suits – Advocate Manish Jha',
  'meta'         => 'Pre-suit, pendente lite and post-decree interest in commercial recovery suits: Section 34 CPC, the Interest Act 1978, contract rates and pleading traps.',
  'h1'           => 'The Three Lives of Interest in a Commercial Recovery Suit: Before the Suit, During It, and After the Decree',
  'crumb'        => 'Commercial — Recovery',
  'kicker'       => 'Practice Explainer · Commercial Disputes',
  'sub'          => 'In a money claim, interest is often worth more than the principal by the time the decree is executed. Yet it is pleaded in a single careless line. How the three phases of interest are actually governed — and how to plead each one.',
  'date'         => '2026-10-16',
  'date_display' => '16 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A recovery suit that takes six years from institution to realisation — not unusual even in commercial courts — can see the interest component overtake the principal. The law divides that interest into three distinct phases with three distinct sources: interest before the suit, governed by the contract, trade usage or the Interest Act, 1978; interest pendente lite, governed by the court\'s discretion under Section 34 of the Code of Civil Procedure; and interest from decree to payment, also under Section 34, with its own ceiling rules for non-commercial transactions. Each phase must be separately pleaded and proved. Treating them as one undifferentiated prayer is the most common — and most expensive — drafting error in recovery litigation.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'property-disputes.php' => 'Property Disputes', 'banking-fraud.php' => 'Banking & Financial Disputes'],
  'faqs'         => [
    ['Can a court award pre-suit interest if the contract is silent?', 'Yes, within limits. The Interest Act, 1978 permits interest from the date a written demand for payment gives notice that interest will be claimed, at a rate not exceeding the current rate of interest. Trade usage and statutes such as the MSMED Act can also supply pre-suit interest. What the plaintiff cannot do is claim it without a foundation — a pleaded contract term, notice, usage or statute.'],
    ['What rate applies during the suit and after decree?', 'Section 34 CPC gives the court discretion over pendente lite and future interest. For decrees arising out of commercial transactions, the rate of further interest may exceed six per cent per annum and may be referenced to the contractual rate or bank lending rates; otherwise the six per cent ceiling for post-decree interest applies. Courts increasingly align both phases with commercial reality rather than awarding token rates.'],
    ['Is compound interest recoverable?', 'Only with a specific foundation: an express contract term, a statute (such as the MSMED Act\'s compound interest with monthly rests), or an established usage. Section 34 CPC itself speaks of simple interest-style computation on the principal sum adjudged; a prayer for compounding without a contractual or statutory basis will ordinarily fail.'],
    ['What must the plaint actually contain?', 'The contractual interest clause verbatim; the demand notice claiming interest with its date; a computation table showing principal, rate, period and amount for pre-suit interest (which forms part of the specified value and court fee); and separate prayers for pendente lite and future interest at stated rates. Vague prayers invite the court\'s default discretion — usually downward.'],
  ],
  'sources'      => [
    ['label' => 'Code of Civil Procedure, 1908 — Section 34 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2191'],
    ['label' => 'Interest Act, 1978 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1335'],
  ],
];
$BODY = <<<'HTML'
<h2>Phase one: interest before the suit</h2>
<p>Pre-suit interest is a matter of substantive entitlement, not procedural discretion. It arises from four possible sources, in descending order of strength. A contractual term — an interest clause in the agreement, purchase order or invoice accepted by conduct — governs both entitlement and rate. A statute may override or supplement the contract: the MSMED Act\'s Section 16 is the sharpest example, mandating compound interest at three times the RBI-notified bank rate for registered suppliers. Trade usage can support interest where dealings between the parties or in the market establish it. Failing all three, the Interest Act, 1978 allows the court to award interest from the date of a written notice demanding payment with interest — which is why every recovery matter should begin with a properly drafted legal notice that expressly claims interest at a stated rate. Pre-suit interest is capitalised into the suit amount: it forms part of the specified value for jurisdiction under the Commercial Courts Act and attracts court fee.</p>

<h2>Phase two: pendente lite</h2>
<p>From institution to decree, Section 34 CPC puts the matter in the court\'s discretion: interest on the principal sum adjudged, at a rate the court deems reasonable. Discretion does not mean lottery. Courts are guided by the contract rate, prevailing lending rates, the nature of the transaction and the parties\' conduct — a defendant who prolonged the trial can expect the discretion exercised against it, and a plaintiff who inflated claims can expect moderation. The practical lesson is to give the court materials for the discretion: plead the rate at which the plaintiff borrows working capital, exhibit the sanction letters, and connect the withheld money to actual financing cost.</p>

<h2>Phase three: decree to realisation</h2>
<div class="tiles">
<div class="tile"><strong>Commercial transactions</strong><p>Where the liability arises out of a commercial transaction, further interest may exceed six per cent and can track the contractual rate — the proviso to Section 34 CPC exists precisely for business debts.</p></div>
<div class="tile"><strong>Other decrees</strong><p>Outside commercial transactions, post-decree interest is capped at six per cent per annum on the principal adjudged.</p></div>
<div class="tile"><strong>Deemed refusal</strong><p>Where the decree is silent on future interest, it is taken as refused — a drafting reason to ensure the decree expressly carries interest to realisation.</p></div>
<div class="tile"><strong>Execution leverage</strong><p>A realistic post-decree rate is the judgment debtor\'s incentive to pay rather than litigate execution; a token rate finances the debtor\'s delay.</p></div>
</div>

<h2>Common drafting failures</h2>
<p>Four errors recur. First, the single composite prayer — "interest at 18% from due date till realisation" — without separating the three phases, which leaves the court free to award one blended, usually lower, rate. Second, claiming a contractual rate without proving the contract term: invoices bearing an interest stipulation the buyer never accepted require evidence of acceptance by conduct. Third, forgetting that pre-suit interest is part of the claim for valuation: understating it saves court fee and costs recovery. Fourth, in suits on running accounts, failing to appropriate payments between principal and interest in the computation — the appropriation sequence changes the outstanding dramatically over long periods. In commercial courts, where the statement of truth and strict case-management discipline apply, these are not curable afterthoughts; the computation filed with the plaint is the computation the trial will test.</p>

<div class="note">
<p>This is a general explainer on interest in money recovery litigation under the Code of Civil Procedure, 1908, the Interest Act, 1978 and allied statutes, and is not legal advice. Specific transactions — negotiable instruments, MSME supplies, secured lending — carry their own interest regimes.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
