<?php
$P = [
  'slug'         => 'msefc-territorial-jurisdiction-supplier-location.php',
  'title'        => 'Which Facilitation Council Has Jurisdiction? – Advocate Manish Jha',
  'meta'         => 'Section 18(4) MSMED Act gives the Facilitation Council where the supplier is located jurisdiction over delayed payment claims — even against outstation buyers.',
  'h1'           => 'The Supplier\'s Home Advantage: Territorial Jurisdiction of MSE Facilitation Councils',
  'crumb'        => 'MSME — Council Jurisdiction',
  'kicker'       => 'Practice Explainer · Section 18(4) MSMED Act',
  'sub'          => 'A micro or small enterprise files its delayed-payment reference where it is located — and Section 18(4) empowers that Council to act against buyers anywhere in India, overriding contractual forum clauses that point elsewhere.',
  'date'         => '2026-09-21',
  'date_display' => '21 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">For a small supplier chasing payment from a buyer three states away, the first practical question is geographic: where does the fight happen? The Micro, Small and Medium Enterprises Development Act, 2006 answers it in the supplier\'s favour. Section 18(4) confers jurisdiction on the Micro and Small Enterprises Facilitation Council of the place where the supplier is located, and arms it to act as arbitrator or conciliator in disputes with buyers "located anywhere in India". That one subsection reverses the usual economics of debt recovery, where distance is a weapon of the defaulting buyer.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'banking-fraud.php' => 'Banking Disputes'],
  'faqs'         => [
    ['Which Council does a Delhi supplier approach against a buyer in another state?', 'The Council of the place where the supplier is located — for a Delhi-registered enterprise, the Delhi MSEFC — regardless of where the buyer sits. Section 18(4) expressly gives the Council of the supplier\'s location jurisdiction to act as arbitrator or conciliator in a dispute between a supplier located within its jurisdiction and a buyer located anywhere in India.'],
    ['Can a contract\'s exclusive jurisdiction clause override Section 18(4)?', 'The MSMED Act operates notwithstanding anything inconsistent in any other law or instrument: Section 24 gives Sections 15 to 23 overriding effect. A forum-selection or arbitration clause pointing to the buyer\'s city does not deprive the supplier\'s home Council of its statutory jurisdiction over a delayed-payment reference under Section 18.'],
    ['What is the sequence once a reference is filed?', 'The Council first takes up conciliation (itself or through an institution); if conciliation fails, the dispute proceeds to arbitration under Section 18(3), to which the Arbitration and Conciliation Act, 1996 applies as if there were an arbitration agreement between the parties. Section 18(5) requires every reference to be decided within ninety days — a timeline honoured unevenly in practice, but a useful lever for the supplier.'],
    ['Where does the buyer challenge an adverse award?', 'By an application under Section 34 of the Arbitration and Conciliation Act — but Section 19 of the MSMED Act bars entertainment of that application unless the buyer deposits seventy-five per cent of the awarded amount. The challenge is filed in the court competent under the arbitration law; the pre-deposit applies wherever it is filed.'],
  ],
  'sources'      => [ ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — official text (India Code)', 'url' => 'https://www.indiacode.nic.in/'], ['label' => 'MSME Samadhaan — Delayed Payment Monitoring Portal (Govt of India)', 'url' => 'https://samadhaan.msme.gov.in/'] ],
];
$BODY = <<<'HTML'
<h2>The statutory anchor</h2>
<p>Section 18(1) allows any party to a dispute over amounts due under Section 17 — principal plus the compound interest mandated by Section 16 — to make a reference to the Micro and Small Enterprises Facilitation Council. Section 18(4) then supplies the geography: the Council "of the place where the supplier is located" has jurisdiction to act, in conciliation and in arbitration, against a buyer located anywhere in India. Filed through the online Samadhaan portal, the reference thus lands before the supplier\'s home Council, and it is the outstation buyer who must engage there.</p>

<h2>Why the buyer\'s objections usually fail</h2>
<div class="tiles">
<div class="tile"><h4>"Our contract says courts at our city"</h4><p>Section 24 gives Sections 15 to 23 effect notwithstanding anything inconsistent contained in any other law or instrument. A jurisdiction clause is such an instrument; it cannot displace the Council\'s statutory jurisdiction over the reference.</p></div>
<div class="tile"><h4>"We have our own arbitration clause"</h4><p>Once a Section 18 reference is made, the statutory mechanism applies — conciliation first, then arbitration by or through the Council under Section 18(3), the 1996 Act applying as if by agreement. The private clause does not oust the Council\'s process for a delayed-payment dispute.</p></div>
<div class="tile"><h4>"The Council is biased toward its suppliers"</h4><p>The design is deliberate legislative protection, and the buyer\'s remedies are preserved: participation on merits, counter-evidence before the Council, and a Section 34 challenge — on depositing 75% of the award under Section 19.</p></div>
</div>

<h2>Locating the "supplier" correctly</h2>
<p>The jurisdictional fact is the supplier\'s location, which in practice is tested against its Udyam registration and place of business. Enterprises with multiple units should file from the unit that made the supplies in question, and keep the registration, invoices and delivery documents aligned to it — a mismatch between the registered address and the supplying unit is the commonest source of maintainability skirmishes before Councils. The supplies must also postdate a valid registration as a micro or small enterprise for the Act\'s payment protections to attach to them.</p>

<h2>The Delhi angle</h2>
<div class="check">
<p>Delhi-based suppliers file before the Delhi MSEFC through the Samadhaan portal, annexing invoices, purchase orders, delivery challans and the ledger of the running account, with interest computed at three times the RBI bank rate, compounded monthly, from the appointed day.</p>
<p>Delhi buyers dragged before outstation Councils should participate rather than default: jurisdictional objections can be recorded and preserved, but an ex parte award followed by a 75% pre-deposit requirement is a far worse position than a contested reference.</p>
<p>Either way, the ninety-day mandate of Section 18(5) and the portal\'s tracking give both sides a procedural clock worth actively managing — silence is the only strategy the scheme punishes reliably.</p>
</div>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
