<?php
$P = [
  'slug'         => 'msefc-claims-identifying-the-buyer-group-companies.php',
  'title'        => 'MSME Claims: Who Is the Real Buyer? – Advocate Manish Jha',
  'meta'         => 'MSEFC claims fail when aimed at the wrong group entity. How the MSMED Act defines the buyer, why purchase-order identity controls, and drafting habits that protect suppliers.',
  'h1'           => 'Suing the Group Is Not Suing the Buyer: Entity Identity in MSEFC Claims',
  'crumb'        => 'MSME: Identifying the Buyer',
  'kicker'       => 'Explainer · MSME Recovery',
  'sub'          => 'Suppliers deal with brands; the MSMED Act deals with buyers. When the purchase order, the deliveries and the payments point to different companies in one group, the Section 18 reference must still name the entity the statute recognises.',
  'date'         => '2026-11-19',
  'date_display' => '19 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">A recurring and avoidable failure in delayed-payment recoveries runs like this: the supplier negotiated with one group company, received purchase orders from a second, delivered to a third&rsquo;s warehouse, and was paid — while payments lasted — from a fourth&rsquo;s account. When the money stops and a reference is filed under Section 18 of the MSMED Act, 2006, the respondent named is the brand everyone knows; the entity that actually &ldquo;bought&rdquo; within the meaning of the Act is someone else, and the claim stumbles at the threshold. The Facilitation Council&rsquo;s jurisdiction is built on the statutory pair of &ldquo;supplier&rdquo; and &ldquo;buyer&rdquo;, and group affiliation is not a substitute for being the buyer.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT & Insolvency'],
  'faqs'         => [
    ['Who is the &ldquo;buyer&rdquo; under the MSMED Act?', 'Section 2(d) defines the buyer as whoever buys goods or receives services from a supplier for consideration. The obligation to pay within the Section 15 window, the Section 16 interest liability and the Section 17 recovery all attach to that entity — the one that placed the order and incurred the price obligation, evidenced ordinarily by the purchase order, the contract and the invoicing instructions it issued.'],
    ['Can a parent or sister company be made liable for a subsidiary&rsquo;s purchases?', 'Not merely because of the group relationship. Each company is a separate legal person; liability follows contract. A group entity can be liable on ordinary principles — if it was itself a contracting party, if it guaranteed the dues, or if the arrangement makes it a receiver of the services for consideration — but those are facts to be pleaded and proved, not presumed from a shared logo.'],
    ['What should the supplier do when orders come from multiple group entities?', 'Treat each ordering entity as a distinct buyer: separate ledgers, invoices raised on the entity named in each purchase order, and — critically — separate quantification in any demand notice and Section 18 reference. A consolidated claim lumping several buyers invites jurisdictional objections from each of them and gives the group&rsquo;s counsel an easy first argument.'],
    ['Does GST documentation help establish the buyer&rsquo;s identity?', 'Considerably. The GSTIN on the purchase order, the entity named in e-invoices and e-way bills, input-credit claims, and the deductor&rsquo;s TAN on any TDS all identify who, in the transaction&rsquo;s own records, received the supply for consideration. A supplier whose GST trail is consistent rarely loses the identity argument; one whose invoices name a different entity than the purchase orders has a problem to explain.'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the issue decides cases</h2>
<p>The MSEFC process is summary by design: conciliation under Section 18(2), then institutional arbitration under Section 18(3), inside the ninety-day aspiration of Section 18(5). Summary processes are unforgiving about foundations. The respondent&rsquo;s first affidavit in a mis-aimed reference does not argue quality or quantum — it argues identity: &ldquo;the applicant supplied, if at all, to a different company; we placed no order and received nothing.&rdquo; If the record bears that out, no amount of group-level correspondence rescues the claim, and limitation may meanwhile erode the claim against the right entity.</p>

<h2>Mapping the transaction before filing</h2>
<div class="flow">
  <div class="fstep"><strong>Who ordered?</strong> Collect every purchase order and identify the issuing entity, its CIN/GSTIN and registered office — these fix the primary respondent and, through Section 18(4), reinforce the supplier-location Council&rsquo;s jurisdiction.</div>
  <div class="fstep"><strong>Who received?</strong> Delivery challans and e-way bills may name a different consignee; a pure logistics recipient is not thereby the buyer, but a receiver of services for consideration can be — plead the role accurately.</div>
  <div class="fstep"><strong>Who paid?</strong> Bank credits from a group treasury company do not transfer the debt; they evidence payment on the buyer&rsquo;s behalf. Reconcile payments to the buyer&rsquo;s ledger, not to whoever remitted.</div>
  <div class="fstep"><strong>Who promised?</strong> Emails of comfort from group executives bind their own employer only if authority and intention to contract are shown; treat them as supporting colour, not as the cause of action.</div>
</div>

<h2>When more than one entity is properly joined</h2>
<p>There are legitimate multi-entity references. Where two group companies each issued purchase orders in a single commercial programme, each is a buyer for its own orders, and parallel references (or one reference carefully segregating the claims) are proper. Where a group company executed a guarantee or an on-demand payment undertaking, its liability is contractual and can be pursued — though whether the Council is the forum for a pure guarantee claim is itself contestable, and the civil court or arbitration under the guarantee may be the cleaner route. And where the structure is a sham — orders routed through a shell with no substance, to insulate the real recipient — the supplier can plead the realities, but should do so with documents, knowing the veil-piercing argument is the hardest road in the book.</p>

<table class="law">
  <tr><th>Document</th><th>What it proves on identity</th></tr>
  <tr><td>Purchase order / rate contract</td><td>The contracting buyer; the paying obligor</td></tr>
  <tr><td>Invoice (as raised by supplier)</td><td>Supplier&rsquo;s own identification of the buyer — keep it consistent with the PO</td></tr>
  <tr><td>E-invoice, e-way bill, GSTIN trail</td><td>The entity receiving supply for consideration in the tax record</td></tr>
  <tr><td>Payment advices / TDS certificates</td><td>Who discharged (or deducted against) the price obligation</td></tr>
  <tr><td>Guarantees / comfort letters</td><td>Additional obligors, on their own terms</td></tr>
</table>

<h2>Drafting habits that prevent the dispute</h2>
<div class="check">
  <p>Mirror the purchase order&rsquo;s entity on every invoice; where the group asks for billing changes mid-stream, record the novation in writing signed by both entities.</p>
  <p>In the Udyam-referenced demand notice under the Act, name the buyer entity precisely and separately state each entity&rsquo;s outstanding where several exist.</p>
  <p>Ask for a written guarantee from the parent at onboarding — group comfort is worth exactly what is signed.</p>
  <p>Keep delivery acknowledgements entity-tagged; warehouse staff signatures without entity stamps are the identity dispute&rsquo;s raw material.</p>
  <p>If the buyer entity changes its name or merges, obtain and file the fresh incorporation/merger record with the Council so the award names an existing, executable respondent.</p>
</div>
<div class="note">This explainer sets out general principles for information only. Entity-liability questions turn on the documents in each supply relationship, and advice should be taken before filing.</div>
HTML;
include __DIR__ . '/post-layout.php';
