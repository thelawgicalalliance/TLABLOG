<?php
$P = [
  'slug'         => 'section-29a-msefc-arbitration-exclusive-jurisdiction-calcutta-high-court.php',
  'title'        => 'Section 29A and MSEFC Arbitrations – Advocate Manish Jha',
  'meta'         => 'Calcutta High Court holds that an exclusive jurisdiction clause governs Section 29A extension petitions even where a Facilitation Council arbitrated the dispute.',
  'h1'           => 'The Council Sits in Kolkata, the Courts Sit in Delhi: Section 29A Meets an Exclusive Jurisdiction Clause',
  'crumb'        => 'Section 29A & MSEFC',
  'kicker'       => 'Calcutta High Court · 10 September 2026',
  'sub'          => 'The statutory character of Facilitation Council arbitration overrides contractual procedure — but it does not decide which court supervises the arbitration under Section 29A.',
  'date'         => '2026-09-13',
  'date_display' => '13 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">In <em>Innovel Energy Services Pvt. Ltd. (formerly Environ Solar Pvt. Ltd.) v. Elevar Digitel Infrastructure Pvt. Ltd.</em>, AP-COM 385 of 2026 (decided 10 September 2026), the Commercial Division of the Calcutta High Court, per Justice Gaurang Kanth, dismissed a petition under Section 29A of the Arbitration and Conciliation Act, 1996 seeking an extension of the tribunal\'s mandate in an arbitration conducted by the West Bengal Micro Small Enterprises Facilitation Council. The petition failed not on merits but on territorial jurisdiction: the parties\' contract conferred exclusive jurisdiction on the courts at Delhi, and the Court held that the clause governed court proceedings connected with the arbitration even though the Council itself sat at Kolkata under the MSMED Act, 2006.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['What does Section 29A of the Arbitration Act do?', 'Section 29A fixes the time within which a domestic arbitral tribunal must make its award — twelve months from completion of pleadings, extendable by six months by consent — and requires a court order for any further extension. The mandate of the tribunal stands suspended, and can be revived, only through such an application.'],
    ['Which court hears a Section 29A application?', 'The "court" for arbitration purposes is identified under Section 2(1)(e) of the 1996 Act, and where parties have validly agreed that courts of a particular place alone will have jurisdiction, that agreement ordinarily channels all court proceedings connected with the arbitration to that place.'],
    ['Does arbitration before an MSME Facilitation Council displace the contract\'s dispute clause?', 'The statutory reference under Section 18 of the MSMED Act overrides the contractual arbitration procedure — the Council arbitrates regardless of what the contract says about arbitrator appointment. But this ruling holds that the contract\'s exclusive jurisdiction clause continues to govern which courts supervise and entertain proceedings around that arbitration.'],
    ['What should parties to MSEFC arbitrations take from this?', 'Check the underlying contract before filing any court application connected with a Council arbitration — under Sections 29A, 34 or otherwise. The seat of the Council is not automatically the seat of court supervision, and a petition filed where the Council sits may be returned for want of territorial jurisdiction.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Innovel Energy Services Pvt. Ltd. v. Elevar Digitel Infrastructure Pvt. Ltd., Calcutta High Court, 10 September 2026 (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/157558628/'],
  ],
];
$BODY = <<<'HTML'
<h2>How the question arose</h2>
<p>The petitioner, an enterprise registered under the MSMED Act, 2006, had taken its delayed-payment claim to the West Bengal Micro Small Enterprises Facilitation Council under Section 18. Conciliation failed and the Council took up the dispute in arbitration, as the statute directs, at Kolkata. When the timeline under Section 29A of the Arbitration and Conciliation Act, 1996 became an obstacle, the supplier applied to the Calcutta High Court for an extension of the tribunal's mandate.</p>
<p>The respondent met the petition with a threshold objection. The commercial contract between the parties contained an exclusive jurisdiction clause in favour of the courts at Delhi. If court proceedings connected with the arbitration belonged to Delhi, the Calcutta High Court could not entertain the Section 29A application — however convenient Kolkata might be as the place where the Council actually conducted the proceedings.</p>

<h2>The Court's reasoning</h2>
<div class="compare">
<div class="col old"><h3>What the MSMED Act displaces</h3><p>The statutory scheme of Section 18 overrides the contract's <em>arbitral procedure</em>. Parties cannot contract out of the Facilitation Council's jurisdiction to conciliate and arbitrate a registered supplier's delayed-payment claim; the Council's authority flows from the statute, not from the arbitration clause.</p></div>
<div class="arrow">→</div>
<div class="col new"><h3>What survives the statute</h3><p>The choice of <em>supervisory courts</em> is a different matter. The exclusive jurisdiction clause governs post-award and arbitration-connected court proceedings. The location of the Council does not, by itself, confer territorial jurisdiction on the courts of that city.</p></div>
</div>
<p>On that footing the Court dismissed the petition for want of territorial jurisdiction, leaving the petitioner to pursue its Section 29A remedy before the courts identified in the contract.</p>

<h2>Why the point matters</h2>
<p>MSEFC arbitrations occupy an unusual position: the reference is statutory, the procedure is institutional, but the underlying relationship remains contractual. Three practical consequences follow from this decision.</p>
<div class="flow">
<div class="fstep"><strong>1. Map the forums at the outset.</strong> A supplier invoking Samadhaan should identify, before the award, which courts the contract designates — because Section 29A extensions, Section 34 challenges (with the Section 19 MSMED pre-deposit) and execution may each have to travel there.</div>
<div class="fstep"><strong>2. Diarise the Section 29A clock.</strong> Council arbitrations are as much subject to the twelve-month mandate as private references. An extension application filed in the wrong High Court can consume months and leave the mandate in suspense.</div>
<div class="fstep"><strong>3. Draft jurisdiction clauses deliberately.</strong> Buyers and suppliers negotiating supply contracts should understand that an exclusive jurisdiction clause will likely survive a statutory reference and dictate where the court-side litigation happens.</div>
</div>

<div class="note">
<p>The judgment is from the Calcutta High Court, but the logic operates wherever MSEFC arbitrations and exclusive jurisdiction clauses collide — including references before the Delhi Council with contracts choosing courts elsewhere, and vice versa. It sits alongside the settled rule that the Council located where the supplier is registered conducts the arbitration under Section 18(4).</p>
</div>

<h2>The takeaway</h2>
<p>Statutory arbitration does not erase the contract. The MSMED Act commandeers the arbitral process, but the parties' bargain about courts keeps its force — and a petition filed at the Council's doorstep, rather than the contract's chosen forum, risks dismissal without any examination of the merits.</p>
HTML;
include __DIR__ . '/post-layout.php';
