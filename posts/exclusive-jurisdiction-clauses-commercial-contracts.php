<?php
$P = [
  'slug'         => 'exclusive-jurisdiction-clauses-commercial-contracts.php',
  'title'        => 'Exclusive Jurisdiction Clauses – Advocate Manish Jha',
  'meta'         => 'When a "courts at Delhi alone" clause binds the parties: Section 20 CPC, the Swastik Gases rule, drafting standards and enforcement in commercial suits.',
  'h1'           => 'Exclusive Jurisdiction Clauses in Commercial Contracts: What Binds and What Does Not',
  'crumb'        => 'Jurisdiction Clauses',
  'kicker'       => 'Commercial Litigation · Contract Drafting',
  'sub'          => 'Parties cannot create jurisdiction where none exists, but they can choose among competent courts — and the choice is enforced even without the word "exclusive".',
  'date'         => '2026-09-09',
  'date_display' => '9 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Nearly every commercial agreement carries a jurisdiction clause, and nearly every jurisdictional battle in a commercial suit begins with it. Two propositions govern the field. First, parties cannot by consent confer jurisdiction on a court that lacks it under Section 20 of the Code of Civil Procedure, 1908 — jurisdiction is created by law, not by contract. Second, where two or more courts are competent, parties may validly bind themselves to one of them, and the Supreme Court held in <em>Swastik Gases (P) Ltd. v. Indian Oil Corporation Ltd.</em> (Civil Appeal No. 5086 of 2013, decided 3 July 2013) that such a choice excludes the other courts even where the clause omits words like "only", "alone" or "exclusive".</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'property-disputes.php' => 'Property Disputes', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['Can a contract give jurisdiction to a court that otherwise has none?', 'No. A clause choosing a city with which the contract has no connection — no cause of action, no defendant residence or business — is ineffective, because parties cannot confer jurisdiction that the CPC does not give. The clause operates only as a selection among courts that are already competent.'],
    ['Is a clause without the word "exclusive" still binding?', 'Yes. In Swastik Gases the Supreme Court held that a clause stating the agreement "shall be subject to jurisdiction of the courts at Kolkata" impliedly excluded other competent courts, applying the maxim expressio unius est exclusio alterius. The absence of "only" or "alone" is not decisive; the inclusion of the clause itself signals the parties\' intention.'],
    ['How does a defendant enforce such a clause in a Delhi commercial suit?', 'By taking the objection at the earliest — in an application under Order VII Rule 10 CPC for return of the plaint for presentation to the chosen court, and in any event in the written statement. In commercial suits the objection should be raised before or with the written statement within the strict 120-day regime, since jurisdiction objections lose force once the defendant submits to the forum.'],
    ['Do jurisdiction clauses cover arbitration as well?', 'A jurisdiction clause and an arbitration clause do different work. In arbitration, the designation of a seat carries exclusive supervisory jurisdiction consequences of its own. Where a contract has both, careful drafting should align the seat and the chosen courts to avoid the mismatch litigation that inconsistent clauses regularly generate.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Swastik Gases (P) Ltd. v. Indian Oil Corporation Ltd. (Supreme Court, 3 July 2013), Indian Kanoon', 'url' => 'https://indiankanoon.org/doc/23112747/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory baseline: Section 20 CPC</h2>
<p>Section 20 CPC allows a suit to be instituted where the defendant resides or carries on business, or where the cause of action arises wholly or in part. Commercial transactions — negotiated in one city, performed in another, paid for from a third — commonly generate several competent forums at once. The jurisdiction clause exists to eliminate that multiplicity in advance. Its validity rests on a settled distinction: an agreement choosing one competent court among several is lawful; an agreement purporting to oust all courts, or to vest jurisdiction in a court having none, is not.</p>

<h2>The Swastik Gases rule</h2>
<p>In <em>Swastik Gases</em>, the clause read that the agreement "shall be subject to jurisdiction of the courts at Kolkata", without exclusionary words. The Supreme Court held that the parties had nonetheless impliedly excluded other competent courts: by providing for Kolkata, they expressed an intention that disputes go there and nowhere else — <em>expressio unius est exclusio alterius</em>. The practical consequence is that a defendant sued in a different competent forum can insist on the chosen one, and the plaint is liable to be returned for presentation to the proper court.</p>
<div class="compare">
<div class="col old"><strong>Ineffective clause</strong><p>"Courts at Shimla shall have exclusive jurisdiction" — where no part of the cause of action arose in Shimla and no defendant is there. The chosen court lacks jurisdiction; the clause cannot create it.</p></div>
<div class="arrow">→</div>
<div class="col new"><strong>Effective clause</strong><p>"Courts at Delhi shall have jurisdiction" — where Delhi is one of the competent forums under Section 20. The clause binds, and it excludes the others even without the word "exclusive".</p></div>
</div>

<h2>Where the fights actually happen</h2>
<div class="tiles">
<div class="tile"><strong>Battle of forms.</strong> Purchase orders, invoices and quotations often carry conflicting jurisdiction endorsements. Which document constitutes the contract becomes the real question; a printed line on an invoice raised after the contract is concluded rarely displaces the negotiated clause.</div>
<div class="tile"><strong>Part-of-cause-of-action pleading.</strong> Plaintiffs sued out of the chosen forum sometimes plead a sliver of cause of action at their preferred venue. Courts examine whether the chosen forum was competent and whether the clause covers the dispute, not merely whether some connection to the alternative venue can be asserted.</div>
<div class="tile"><strong>Consumer and statutory claims.</strong> Certain statutory forums follow their own venue rules, and a contractual clause cannot always override them. The clause governs the contractual action; it does not necessarily travel to every statutory remedy between the same parties.</div>
</div>

<h2>Drafting and enforcement checklist</h2>
<div class="check">
<p><strong>Anchor the choice.</strong> Choose a forum with a real connection to the transaction — place of execution, performance or payment — so competence under Section 20 is beyond argument.</p>
<p><strong>Say it expressly anyway.</strong> Although Swastik Gases saves clauses without exclusionary words, drafting "the courts at New Delhi alone shall have exclusive jurisdiction" removes the interpretive step entirely.</p>
<p><strong>Align with the arbitration clause.</strong> If the contract arbitrates, match the seat and the chosen courts; mismatches breed satellite litigation over which court supervises the arbitration.</p>
<p><strong>Object early.</strong> A defendant relying on the clause should move under Order VII Rule 10 CPC at the threshold; in commercial suits, the compressed timelines make a late objection practically worthless.</p>
</div>
<div class="note">
<p>For suits above the specified value governed by the Commercial Courts Act, 2015, the jurisdiction clause determines the district or High Court whose commercial division will take the matter; it does not alter the pecuniary thresholds or the mandatory pre-institution mediation requirement, which apply wherever the suit is ultimately filed.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
