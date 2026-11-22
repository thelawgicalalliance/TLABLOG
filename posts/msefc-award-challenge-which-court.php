<?php
$P = [
  'slug'         => 'msefc-award-challenge-which-court.php',
  'title'        => 'Challenging an MSEFC Award: Where? – Advocate Manish Jha',
  'meta'         => 'A buyer facing a Facilitation Council award must clear the 75% deposit and pick the right court. How Section 19 MSMED and Section 34 of the Arbitration Act interact.',
  'h1'           => 'After the Council Rules: Where and How an MSEFC Award Is Challenged',
  'crumb'        => 'MSME: Challenging Awards',
  'kicker'       => 'Practice Explainer · MSMED Act',
  'sub'          => 'The challenge is a Section 34 application with a statutory toll-gate bolted on: no court touches the award until seventy-five per cent of it is deposited — and choosing the wrong court can consume the limitation period.',
  'date'         => '2026-11-22',
  'date_display' => '22 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">When a Micro and Small Enterprises Facilitation Council — or the institution it refers the dispute to — makes an award for a supplier&rsquo;s delayed payments, the buyer&rsquo;s challenge does not travel the ordinary arbitration route unmodified. Section 19 of the MSMED Act, 2006 interposes a condition that has no parallel elsewhere in Indian arbitration: no application for setting aside the award shall be entertained by any court unless the applicant has deposited seventy-five per cent of the awarded amount. Around that toll-gate sit the usual questions of a Section 34 challenge — limitation, grounds, and, often the hardest fought, which court has jurisdiction.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Is the 75% deposit negotiable?', 'The requirement itself is mandatory — courts cannot waive it, and an application unaccompanied by the deposit cannot be entertained. What the court retains is procedural discretion in suitable cases about how the deposit is furnished, and the proviso to Section 19 lets the court release a portion of the deposited amount to the supplier during the challenge, on such conditions as it deems necessary.'],
    ['What are the grounds of challenge?', 'Those of Section 34 of the Arbitration and Conciliation Act, 1996: the restricted public-policy grounds and, for domestic awards, patent illegality. Buyers commonly also attack the Council&rsquo;s jurisdiction — supplier registration questions, whether the claim falls under the Act — but these too arrive via the Section 34 framework once an award exists.'],
    ['Which court hears the challenge?', 'The &ldquo;court&rdquo; for Section 34 purposes — for commercial disputes of the requisite value, the Commercial Court or Commercial Division having jurisdiction. Identifying the territorial court can be contentious: the statutory venue of the Council&rsquo;s proceedings, the seat of the arbitration, and any exclusive jurisdiction clause in the contract may point in different directions, and the answer can determine whether a challenge filed at the deadline survives. The question deserves specific advice on the documents before filing.'],
    ['What is the limitation period?', 'Three months from receipt of the award, extendable by a maximum of thirty further days on sufficient cause, under Section 34(3) — a hard outer limit. Assembling the 75% deposit takes buyers time, and the limitation clock does not wait for board approvals, so the decision to challenge must be made early.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The road to an award</h2>
<p>Under Section 18 of the MSMED Act, a supplier&rsquo;s reference first goes to conciliation before the Facilitation Council; failing settlement, the Council takes up the dispute itself as arbitrator or refers it to an institution, and the Arbitration and Conciliation Act, 1996 applies as if there were an arbitration agreement under Section 7(1) of that Act. The award that results — for principal and the compounded statutory interest under Sections 15 to 17 — is an arbitral award, enforceable as a decree once challenge rights are exhausted.</p>

<h2>Section 19: the deposit that gates the courtroom</h2>
<div class="flow">
  <div class="fstep"><strong>The condition.</strong> No application to set aside the award or decree is entertained by any court without a deposit of seventy-five per cent of the amount in terms of the award. The provision exists because the Act&rsquo;s whole object — prompt payment to micro and small suppliers — would be defeated by years of unsecured challenge litigation.</div>
  <div class="fstep"><strong>The release proviso.</strong> Pending the challenge, the court shall order that such percentage of the deposited amount as it considers reasonable be paid to the supplier, on conditions it deems necessary — so the deposit is not merely parked; part of it typically flows to the supplier during the case.</div>
  <div class="fstep"><strong>The planning consequence.</strong> A buyer weighing a challenge must price it realistically: 75% of the award locked up (with part released to the other side), plus the costs of the litigation, against the prospects under Section 34&rsquo;s narrow grounds.</div>
</div>

<h2>Getting the forum right</h2>
<p>Three signposts compete for attention when identifying the court. The MSMED Act fixes the Council&rsquo;s own jurisdiction by the supplier&rsquo;s location. The Arbitration Act allocates challenges to the court of the seat. And commercial contracts routinely contain exclusive jurisdiction clauses naming a particular city&rsquo;s courts. Where these point the same way, no difficulty arises; where they diverge, buyers have lost precious limitation time filing in a court later held to lack jurisdiction. Two practical rules reduce the risk: fix the question deliberately, on the contract and the award&rsquo;s recitals, before filing rather than after an objection; and where genuine doubt persists near the limitation deadline, file where the stronger case lies and be ready to seek transfer-related protection under the general law that preserves time spent prosecuting in good faith in the wrong forum.</p>

<h2>The buyer&rsquo;s and supplier&rsquo;s checklists</h2>
<table class="law">
  <tr><th>Buyer challenging</th><th>Supplier defending</th></tr>
  <tr><td>Diarise the three-month limitation from receipt of the award; begin deposit arrangements immediately.</td><td>Calendar the challenge window; on its expiry without challenge, move execution without delay.</td></tr>
  <tr><td>Confine the petition to genuine Section 34 grounds; a merits re-argument invites dismissal with costs.</td><td>Apply under the Section 19 proviso for release of a substantial part of the deposit at the first hearing.</td></tr>
  <tr><td>Raise jurisdictional objections to the Council&rsquo;s process precisely — registration, supplier status, the goods or services covered.</td><td>Support the award&rsquo;s findings on these points with the record built before the Council; gaps there are the usual target.</td></tr>
  <tr><td>Consider settlement seriously: the deposit requirement plus statutory interest accruing makes time the supplier&rsquo;s ally.</td><td>Remember interest under the Act continues to compound; quantify it accurately at every stage.</td></tr>
</table>
<div class="note">Appeals from Section 34 outcomes go under Section 37 of the Arbitration Act, and the commercial-courts framework applies its own discipline to both. The interaction of the MSMED Act with arbitration agreements and with registration timing questions is an evolving area in which the Supreme Court has recently been active, so current advice on the specific documents should always be taken before choosing a course. This article is general information only.</div>
HTML;
include __DIR__ . '/post-layout.php';
