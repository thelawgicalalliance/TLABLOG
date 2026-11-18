<?php
$P = [
  'slug'         => 'section-32-termination-arbitral-proceedings.php',
  'title'        => 'When Arbitral Proceedings End: Section 32 – Advocate Manish Jha',
  'meta'         => 'Section 32 of the Arbitration Act fixes how proceedings terminate — by final award or by order — and when the tribunal&rsquo;s mandate dies. Why the distinction matters in practice.',
  'h1'           => 'The Tribunal&rsquo;s Last Day: Termination of Proceedings Under Section 32',
  'crumb'        => 'Arbitration: Section 32 Termination',
  'kicker'       => 'Explainer · Arbitration & Conciliation Act, 1996',
  'sub'          => 'Arbitral proceedings end by final award, or by an order of termination in the three situations Section 32(2) defines. This explainer maps the provision, its interaction with Sections 33 and 34(4), and the traps around premature termination.',
  'date'         => '2026-11-18',
  'date_display' => '18 November 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Every arbitration has a birth certificate — the Section 21 notice — and a death certificate, which is Section 32 of the Arbitration and Conciliation Act, 1996. The provision answers two questions that recur in practice with surprising frequency: when exactly do the proceedings end, and what, if anything, can the tribunal still do afterwards? Getting the answers wrong produces orphaned claims, functus officio objections and avoidable litigation under Section 34.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['How do arbitral proceedings terminate?', 'Two ways under Section 32(1) and (2): by the final arbitral award, or by an order of the tribunal where the claimant withdraws the claim (unless the respondent objects and shows a legitimate interest in a decision on merits), where the parties agree to terminate, or where the tribunal finds continuation has become unnecessary or impossible.'],
    ['What happens to the tribunal&rsquo;s mandate on termination?', 'Section 32(3) provides that the mandate of the arbitral tribunal terminates with the termination of the proceedings — subject to Section 33 (correction, interpretation and additional awards) and Section 34(4) (resumption to eliminate grounds for setting aside). Those two provisions are the only statutory after-life the tribunal has.'],
    ['Can a claimant who withdrew start afresh?', 'Withdrawal under Section 32(2)(a) terminates those proceedings, but whether the claim can be re-agitated depends on the terms of withdrawal, limitation and the respondent&rsquo;s objection at the time. A respondent with a legitimate interest in a merits decision — for instance, to bury the claim forever — should object to withdrawal and insist on adjudication.'],
    ['What is a termination for impossibility?', 'Section 32(2)(c) covers situations where continuation has become unnecessary — the dispute has settled or disappeared — or impossible, such as sustained non-prosecution. Because such orders end the reference without a merits decision, tribunals record reasons carefully, and wrongly terminated proceedings generate challenge litigation.'],
  ],
  'sources'      => [
    ['label' => 'Arbitration and Conciliation Act, 1996 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/1978'],
  ],
];
$BODY = <<<'HTML'
<h2>The two exits</h2>
<p>Section 32(1) states the ordinary exit: the arbitral proceedings shall be terminated by the final arbitral award. Everything the parties referred has been decided; what remains is the post-award machinery — Section 33 before the tribunal, Sections 34 and 36 before the court.</p>
<p>Section 32(2) states the extraordinary exits, by order of the tribunal:</p>
<div class="tiles">
  <div class="tile"><strong>(a) Withdrawal.</strong> The claimant withdraws the claim — unless the respondent objects and the tribunal recognises its legitimate interest in obtaining a final settlement of the dispute.</div>
  <div class="tile"><strong>(b) Agreement.</strong> The parties agree on termination — the consensual burial, often following a settlement recorded outside the reference (a settlement inside it can instead become a consent award under Section 30).</div>
  <div class="tile"><strong>(c) Unnecessary or impossible.</strong> The tribunal finds that continuation of the proceedings has for any other reason become unnecessary or impossible — the residual clause covering settled disputes, abandoned references and sustained non-prosecution.</div>
</div>

<h2>Functus officio — and its two statutory exceptions</h2>
<p>Section 32(3) ties the tribunal&rsquo;s mandate to the proceedings: when they terminate, so does it. The arbitrator cannot thereafter revisit findings, entertain fresh claims or supplement the award — subject to exactly two statutory windows. Section 33 permits, within its timelines, correction of computation and clerical errors, interpretation of a part of the award where the parties agree, and an additional award on claims presented but omitted. Section 34(4) permits the court hearing a challenge, where appropriate and on a party&rsquo;s request, to adjourn and give the tribunal an opportunity to resume the proceedings or take action that eliminates the grounds for setting aside. Outside these windows, the functus officio objection is close to absolute, which is why parties who spot omissions must act within the Section 33 clock rather than writing letters to a tribunal that no longer exists in law.</p>

<h2>The traps in practice</h2>
<div class="flow">
  <div class="fstep"><strong>Unconsidered withdrawal consents.</strong> Respondents who silently accept a withdrawal lose the chance to force a merits decision — and may face the same claim again. If finality is the goal, object under Section 32(2)(a) and ask the tribunal to decide.</div>
  <div class="fstep"><strong>Settlements left outside the reference.</strong> A settlement recorded as a consent award under Section 30 is enforceable as a decree; a bare termination under Section 32(2)(b) leaves the parties with only a contract. Choose deliberately.</div>
  <div class="fstep"><strong>Premature impossibility findings.</strong> Terminating for non-prosecution without clear warnings and recorded opportunities invites challenge; tribunals should build the record before pulling the plug, and parties facing such orders should act immediately.</div>
  <div class="fstep"><strong>Post-termination requests.</strong> Applications to a terminated tribunal — beyond Sections 33 and 34(4) — achieve nothing. The remedy, where the termination itself is disputed, lies before the court.</div>
</div>

<h2>Why the provision rewards attention</h2>
<p>Section 32 looks like housekeeping, but it allocates real rights: the respondent&rsquo;s right to insist on a merits decision, the parties&rsquo; choice between an enforceable consent award and a mere termination, and the hard boundary of the tribunal&rsquo;s authority. Counsel who treat the end of an arbitration with the same care as its beginning — confirming what terminated, when, by award or order, and what windows remain open — spare their clients the most avoidable species of post-award litigation.</p>
<div class="note">This explainer describes the general statutory scheme for information. The consequences of termination in any given arbitration depend on its record, the terms of any settlement and the applicable timelines.</div>
HTML;
include __DIR__ . '/post-layout.php';
