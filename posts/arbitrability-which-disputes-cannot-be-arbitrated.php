<?php
$P = [
  'slug'         => 'arbitrability-which-disputes-cannot-be-arbitrated.php',
  'title'        => 'Which Disputes Cannot Be Arbitrated? – Advocate Manish Jha',
  'meta'         => 'Arbitrability in Indian law: rights in rem vs in personam, the excluded categories — crimes, matrimonial, insolvency, tenancy under rent control — and fraud.',
  'h1'           => 'Arbitrability: The Disputes an Arbitration Clause Cannot Capture',
  'crumb'        => 'Arbitrability of Disputes',
  'kicker'       => 'Explainer · Arbitration',
  'sub'          => 'An arbitration clause, however widely drafted, cannot send every dispute to a private tribunal. Indian law reserves certain categories for courts and specialised forums — and the tests for that reservation surface at the Section 8, Section 11 and Section 34 stages alike.',
  'date'         => '2026-09-01',
  'date_display' => '1 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">"All disputes arising out of or in connection with this agreement shall be referred to arbitration" — the clause appears in nearly every commercial contract signed in Delhi. Yet when the dispute arrives, a threshold question can displace the clause entirely: is this dispute arbitrable at all? Arbitrability is about the subject matter, not the drafting; it decides applications to refer parties to arbitration, challenges to appointments, and the survival of awards. The working framework is settled in outline, contested at its edges.</p>',
  'related'      => ['business-corporate-law.php' => 'Commercial & Corporate', 'property-disputes.php' => 'Property Disputes', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'delhi-high-court.php' => 'Delhi High Court Practice'],
  'faqs'         => [
    ['What is the basic test of arbitrability?', 'The traditional touchstone distinguishes rights in personam — enforceable against particular persons, presumptively arbitrable — from rights in rem, which operate against the world and are reserved for public fora. Refinements ask whether the dispute\'s adjudication requires centralised state processes, affects third parties or the public at large, or is expressly or by necessary implication reserved to a specific forum by statute.'],
    ['Are fraud allegations arbitrable?', 'Allegations of fraud between parties to a contract are, in the contemporary position, arbitrable — a bare plea of fraud does not oust the tribunal. The carve-out is narrow: where the fraud goes to the validity of the arbitration agreement itself, or has public ramifications extending beyond the parties (as where criminal machinery is genuinely engaged on serious public wrongs), courts retain the matter.'],
    ['Can tenancy disputes be arbitrated?', 'Depends on the statute governing the tenancy. Tenancies under ordinary contract and the Transfer of Property Act framework are arbitrable between the parties. Tenancies governed by rent control legislation that confers exclusive jurisdiction on special forums are not — the statutory protection regime cannot be waived into private adjudication.'],
    ['Where is arbitrability decided — court or tribunal?', 'At more than one gate. At the referral and appointment stages the court makes a prima facie screening, leaving deeper questions to the tribunal under the kompetenz-kompetenz principle of Section 16; the tribunal rules on its own jurisdiction; and non-arbitrability survives as a ground at the Section 34 stage, where an award on a non-arbitrable subject is vulnerable.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why some disputes are reserved for courts</h2>

<p>Arbitration is adjudication by consent, and consent has limits: two parties cannot, by agreement, dispose of rights that belong to others or to the public. That is the deep structure beneath the arbitrability doctrine. Where a dispute's resolution operates only between the parties — payment, quality, breach, damages — private adjudication is unobjectionable. Where its resolution alters status against the world, engages a statutory protective scheme, or requires the state's centralised machinery, the legislature's chosen forum prevails over the parties' chosen one.</p>

<h2>The recognised excluded categories</h2>

<table class="law">
  <tr><th>Category</th><th>Why excluded</th><th>Forum instead</th></tr>
  <tr><td>Criminal offences</td><td>Public wrongs prosecuted by the State; not disposable by private consent</td><td>Criminal courts</td></tr>
  <tr><td>Matrimonial status — divorce, restitution, judicial separation</td><td>Adjudication of status operating in rem, within protective statutory schemes</td><td>Family Courts</td></tr>
  <tr><td>Guardianship and custody</td><td>Parens patriae jurisdiction over persons who cannot consent</td><td>Guardianship / Family Courts</td></tr>
  <tr><td>Insolvency and winding up</td><td>Collective proceedings affecting all creditors; centralised by statute</td><td>NCLT / insolvency framework</td></tr>
  <tr><td>Testamentary matters — probate, letters of administration</td><td>Grants operate in rem</td><td>Probate courts</td></tr>
  <tr><td>Tenancies under rent control statutes</td><td>Special protective regimes with exclusive forums</td><td>Rent controllers / special courts</td></tr>
  <tr><td>Disputes reserved to specific statutory forums</td><td>Express or necessarily implied exclusion — e.g. matters entrusted exclusively to particular tribunals</td><td>The designated forum</td></tr>
</table>

<p>Consumer disputes occupy a pragmatic middle ground: the consumer's statutory remedy before the consumer commissions is a choice the arbitration clause cannot extinguish, though the consumer may elect arbitration. Trusts disputes under the Indian Trusts Act have likewise been held to belong to the courts contemplated by that statute.</p>

<h2>The fraud question, tamed</h2>

<p>For two decades, "fraud" was the incantation by which unwilling parties escaped their clauses. The modern position has narrowed it to two genuine carve-outs: fraud that infects the arbitration agreement itself — for then there is no valid reference to arbitrate — and fraud whose adjudication transcends the parties, engaging public wrongs. Everything else — fabricated invoices, misrepresented accounts, dishonest performance — is a dispute between parties that a tribunal can competently try. The forensic consequence: a party resisting reference on fraud grounds must locate its allegation within the carve-outs, not merely brandish the word.</p>

<h2>Where and when the fight happens</h2>

<div class="flow">
  <div class="fstep"><h3>Section 8 / Section 45</h3><p>A suit is filed despite the clause; the applicant seeks reference. The court screens arbitrability prima facie — manifest non-arbitrability defeats reference.</p></div>
  <div class="fstep"><h3>Section 11</h3><p>At appointment, the court's examination is confined but includes the same prima facie screen; doubtful questions go to the tribunal.</p></div>
  <div class="fstep"><h3>Section 16</h3><p>Kompetenz-kompetenz: the tribunal rules on its own jurisdiction, including arbitrability objections raised before it.</p></div>
  <div class="fstep"><h3>Section 34 / 48</h3><p>The last gate: an award on a non-arbitrable subject matter is open to challenge, and enforcement of a foreign award may be resisted on the same ground.</p></div>
</div>

<div class="note">
  <p><strong>Drafting and strategy note:</strong> Transactions that straddle arbitrable and non-arbitrable terrain — a family settlement with probate elements, a lease within a rent-control regime, a shareholder dispute trending toward oppression claims — should be structured with parallel tracks in mind: an arbitration clause for the in-personam disputes, and clear-eyed advice that the reserved categories will proceed in their statutory forums regardless. Pretending the clause covers everything produces the worst of both worlds — jurisdictional battles at every gate and, at the end, an award vulnerable on subject matter.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
