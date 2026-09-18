<?php
$P = [
  'slug'         => 'repeat-arbitrators-no-bias-sail-british-marine-delhi.php',
  'title'        => 'Repeat Arbitrators, No Bias: HC – Advocate Manish Jha',
  'meta'         => 'Delhi High Court dismisses SAIL\'s appeal against a maritime arbitration award: repeat appointments from a specialised pool do not create justifiable doubts of bias.',
  'h1'           => 'A Small Pool Is Not a Tainted Pool: Arbitrator Challenges and the SAIL–British Marine Award',
  'crumb'        => 'Arbitration — Arbitrator Bias',
  'kicker'       => 'Delhi High Court · 17 September 2026',
  'sub'          => 'In Steel Authority of India Ltd v. British Marine Plc, a Division Bench upheld an award in an international commercial arbitration, rejecting bias objections to arbitrators who had sat in a related maritime dispute and holding the challenge waived in any event.',
  'date'         => '2026-09-18',
  'date_display' => '18 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Specialised arbitration draws on specialised people, and the same names recur. Whether that recurrence creates "justifiable doubts" about independence under the Arbitration and Conciliation Act, 1996 was at the centre of <em>Steel Authority of India Limited v. British Marine Plc</em>, FAO(OS) (COMM) 17/2026, decided on 17 September 2026 by a Division Bench of the High Court of Delhi comprising Justice Prathiba M. Singh and Justice Vikas Mahajan. The Bench dismissed SAIL\'s appeal under Section 37 read with Section 13 of the Commercial Courts Act, upholding a 2018 arbitral award in favour of the shipowner arising from a contract of affreightment for coking coal — and with it, a Single Judge\'s 2025 rejection of the Section 34 challenge.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['When is an arbitrator disqualified for bias under the 1996 Act?', 'The Fifth Schedule lists circumstances that may give rise to justifiable doubts, and the Seventh Schedule lists relationships that disqualify outright. Prior service as arbitrator in another matter involving one of the parties is a disclosure-relevant circumstance, but it does not automatically disqualify — the court asks whether a fair-minded observer would apprehend real likelihood of bias.'],
    ['What is the time limit for challenging an arbitrator?', 'Section 13(2) requires the challenge within fifteen days of becoming aware of the tribunal\'s constitution or of the circumstances founding the challenge. A party that sits on the knowledge and proceeds with the arbitration is treated as having waived the objection — as SAIL was here.'],
    ['Can "patent illegality" be argued against an international commercial arbitration award?', 'No. The patent illegality ground in Section 34(2A) is expressly unavailable for international commercial arbitrations. Such awards can be attacked only on the narrower grounds, chiefly conflict with the fundamental policy of Indian law or basic notions of morality and justice.'],
    ['How were damages measured for the failed shipments?', 'By the classic contract measure: the difference between the contractual freight rates and prevailing spot market rates for the shipments never declared, consistent with Section 73 of the Indian Contract Act — a methodology both the tribunal and the courts found appropriate.'],
  ],
  'sources'      => [ ['label' => 'Steel Authority of India Ltd v. British Marine Plc — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/110318435/'] ],
];
$BODY = <<<'HTML'
<h2>The dispute</h2>
<p>Under a contract of affreightment dated 5 December 2007, British Marine was to carry three million metric tonnes of coking coal for SAIL over five years. When the global freight market collapsed in late 2008, SAIL stopped declaring shipment orders (STEMs) and in March 2010 invoked the contract's default clause — Clause 62 — to terminate. The shipowner claimed damages for the undeclared shipments. A three-member tribunal held SAIL in breach and awarded damages in 2018; a Single Judge dismissed SAIL's Section 34 petition in October 2025; and SAIL appealed to the Division Bench.</p>

<h2>The bias challenge</h2>
<p>SAIL's lead objection was that two members of the tribunal had served in a related maritime arbitration involving SAIL and another shipowner, which — it argued — created justifiable doubts about their independence under the Fifth and Sixth Schedules. The Bench rejected the challenge on principle and on procedure:</p>
<div class="tiles">
<div class="tile"><h4>The specialised-pool reality</h4><p>Maritime arbitration draws from a limited pool of experienced arbitrators. Prior service in a dispute raising similar issues, without more, does not create a real likelihood of bias in the eyes of a fair-minded observer.</p></div>
<div class="tile"><h4>Prior award ≠ prejudgment</h4><p>That an arbitrator has rendered an award in a previous arbitration between the same or related parties does not, by itself, disqualify him from a later reference.</p></div>
<div class="tile"><h4>Waiver by delay</h4><p>The challenge came beyond the fifteen-day window under Section 13. A party cannot bank an objection, await the award, and deploy the objection only against an adverse result.</p></div>
</div>

<h2>Clause 62 and the merits</h2>
<p>On the contract, the tribunal had held that the default clause did not confer a right of unilateral termination without cause, and that SAIL's cessation of STEM declarations — without invoking the force majeure clause that the contract did contain — was itself the breach. The Bench found this interpretation well within the tribunal's province: construction of contractual terms belongs to the arbitrator, and a plausible construction is beyond the reach of Section 34, let alone Section 37. The damages methodology — contractual rates versus spot rates — and the interest structure (6% from breach to award, 9% thereafter) were likewise upheld.</p>
<div class="note"><p>Because the arbitration was an international commercial arbitration, the Bench reiterated that the "patent illegality" ground was unavailable altogether: the award could be tested only against the fundamental policy of Indian law and basic notions of justice — a threshold SAIL's objections did not approach.</p></div>

<h2>What the judgment settles for practice</h2>
<p>Three working rules emerge. First, arbitrator-bias objections must be raised the moment the founding facts are known, in the Section 13 channel, or they are lost — the fifteen-day clock is not decorative. Second, in specialised fields — maritime, construction, commodities — repeat appointments are a feature of the market, and challenges built on repetition alone will fail unless the Seventh Schedule is engaged or a specific prejudgment is shown. Third, the review hierarchy is now firmly tiered: tribunal, Section 34 court, Section 37 bench — each narrower than the last, with foreign-seated and international awards enjoying the narrowest review of all.</p>

<h2>For contract managers in public enterprises</h2>
<p>The commercial lesson predates the legal one. A party facing a collapsed market has the options its contract gives it: renegotiation, force majeure if the clause covers the event, or a negotiated exit. Terminating under a default clause that does not confer the right, while leaving the force majeure clause uninvoked, converts a market problem into a liability in damages — and no amount of post-award litigation through two tiers of review is likely to undo it.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
