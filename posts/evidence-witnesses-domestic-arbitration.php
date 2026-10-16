<?php
$P = [
  'slug'         => 'evidence-witnesses-domestic-arbitration.php',
  'title'        => 'Evidence in Arbitration Hearings – Advocate Manish Jha',
  'meta'         => 'How evidence actually works in domestic arbitration: Section 19, affidavits of evidence, cross-examination, experts, and court assistance under Section 27.',
  'h1'           => 'Proving Your Case Before an Arbitrator: Evidence and Witnesses in Domestic Arbitration',
  'crumb'        => 'Arbitration — Evidence',
  'kicker'       => 'Practice Explainer · Arbitration',
  'sub'          => 'The Evidence Act does not bind an arbitral tribunal — but that freedom is procedural, not a licence to decide on no evidence. How documents, witness statements, cross-examination and experts operate under the Arbitration and Conciliation Act, 1996.',
  'date'         => '2026-10-16',
  'date_display' => '16 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Section 19 of the Arbitration and Conciliation Act, 1996 states that the arbitral tribunal is not bound by the Code of Civil Procedure or the Indian Evidence Act (now the Bharatiya Sakshya Adhiniyam). First-time parties sometimes read this as informality; experienced counsel know it means the tribunal designs its own evidentiary procedure — and that the design, once set, is enforced. Between the statutory anchors of equal treatment (Section 18), party autonomy on procedure (Section 19(2)), hearings (Section 24), experts (Section 26) and court assistance in taking evidence (Section 27), domestic arbitration has developed a fairly settled evidentiary rhythm. Knowing it is the difference between a record that wins and a record that cannot.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court Practice'],
  'faqs'         => [
    ['If the Evidence Act does not apply, can the tribunal admit anything?', 'The tribunal has wide discretion over admissibility, relevance, materiality and weight — but it must observe natural justice, treat parties equally and give each a full opportunity to present its case. An award that rests on no evidence, or on material one side never saw, is vulnerable under Section 34. Freedom from the Evidence Act changes the filters, not the requirement of proof.'],
    ['How is witness evidence usually taken?', 'By affidavit of evidence-in-chief, followed by oral cross-examination at hearings fixed under Section 24. The witness who does not appear for cross-examination usually finds the affidavit discarded or discounted. Tribunals increasingly permit video-conference cross-examination, with safeguards about who is present in the room and what documents the witness can access.'],
    ['Can an arbitrator summon an unwilling third-party witness?', 'Not directly — an arbitral tribunal has no power to compel strangers. Section 27 bridges the gap: the tribunal, or a party with its approval, applies to the court for assistance in taking evidence, and the court can issue the same processes to witnesses as in suits, including summons to testify or produce documents. Non-compliance invites the penalties of contempt-like consequences through the court.'],
    ['What about expert evidence?', 'Section 26 lets the tribunal appoint its own expert on specific issues, require parties to give the expert access to documents and property, and — if a party requests or the tribunal thinks fit — have the expert attend a hearing for questioning. Party-appointed experts remain common; the tribunal weighs competing reports as it would any evidence.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — Sections 18, 19, 24, 26 and 27 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
  ],
];
$BODY = <<<'HTML'
<h2>The procedural frame the parties can build</h2>
<p>Section 19(2) lets the parties agree on the procedure for the tribunal to follow; failing agreement, Section 19(3) lets the tribunal conduct the proceedings as it considers appropriate, including determining the admissibility, relevance, materiality and weight of any evidence. In practice the frame is set at the first procedural hearing: a procedural order fixes the pleading schedule, the mode of filing documents, whether statements of claim will be accompanied by all relied-upon documents, the affidavit format for witness evidence, hearing dates for cross-examination, and transcription arrangements. Institutional rules, where they apply, supply defaults. The strategic point is that this first hearing is not ministerial — the party whose counsel shapes the procedural order shapes the trial.</p>

<h2>Documents: the heart of commercial arbitration</h2>
<p>Most domestic commercial arbitrations are decided on documents — contracts, correspondence, measurement records, accounts. Three working rules matter. First, file complete and legible documents with the pleadings; tribunals take late introduction seriously, and ambush is penalised in costs if not excluded. Second, authenticity objections must be raised early and specifically: a document admitted without objection is usually treated as proved for the arbitration\'s purposes, since formal proof in the Evidence Act sense is not required. Third, electronic records — emails, messages, system logs — should be produced with enough metadata or covering affidavit to meet an authenticity challenge; the tribunal is free of the statutory certificate regime, but it still needs a reason to trust the printout the other side disputes.</p>

<h2>Witnesses and cross-examination</h2>
<div class="flow">
<div class="fstep"><strong>Affidavit in chief</strong><p>Evidence-in-chief comes by affidavit, mapped to the documents; new facts beyond the pleadings invite objection.</p></div>
<div class="fstep"><strong>Cross-examination</strong><p>Oral hearings under Section 24 — a party\'s request for an oral hearing cannot be refused where the agreement permits it; cross is confined but real.</p></div>
<div class="fstep"><strong>Re-examination and tribunal questions</strong><p>Arbitrators question witnesses freely; clarity for the decision-maker, not theatre, is the objective.</p></div>
<div class="fstep"><strong>Weight, not admissibility</strong><p>Most objections go to weight; the tribunal records them and assigns value in the award.</p></div>
</div>

<h2>Section 27: borrowing the court\'s compulsion</h2>
<p>The tribunal\'s one structural weakness is the unwilling outsider — the former employee with the records, the bank officer, the government engineer who measured the works. Section 27 lets the tribunal, or a party with its approval, seek the court\'s assistance in taking evidence: the court may order attendance, production or examination according to its ordinary processes, and persons failing to comply face the same disadvantages, penalties and punishments as in suits. Applications should be precise — the witness, the documents, the relevance — because courts police Section 27 against fishing. Used well, it closes the only real evidentiary gap between arbitration and litigation.</p>

<h2>Building a record that survives Section 34</h2>
<p>The award\'s durability is built during evidence. Challenges under Section 34 cannot reappreciate evidence, but they can reach an award ignoring vital evidence, relying on material supplied behind a party\'s back, or denying a party the opportunity to deal with the case against it. Counsel should therefore paper the record deliberately: written objections to procedure when made, applications rather than oral grievances, and closing submissions that map each claim to its evidence. The tribunal\'s freedom under Section 19 is ultimately the parties\' opportunity — the side that treats arbitral evidence with trial-level discipline usually holds both the award and its defence.</p>

<div class="note">
<p>This is a general explainer on evidentiary practice in India-seated domestic arbitrations under the Arbitration and Conciliation Act, 1996 and is not legal advice. Institutional rules and the tribunal\'s procedural orders govern particular references.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
