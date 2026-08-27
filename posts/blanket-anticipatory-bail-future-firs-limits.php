<?php
$P = [
  'slug'         => 'blanket-anticipatory-bail-future-firs-limits.php',
  'title'        => 'No Blanket Anticipatory Bail – Advocate Manish Jha',
  'meta'         => 'Anticipatory bail protects against arrest in a specific accusation — not all future FIRs. Why courts refuse blanket orders, and how multiple FIRs are handled.',
  'h1'           => 'One Accusation, One Order: Why There Is No Blanket Anticipatory Bail',
  'crumb'        => 'No Blanket Anticipatory Bail',
  'kicker'       => 'Practice Explainer · Anticipatory Bail',
  'sub'          => 'Section 482 BNSS requires a reason to believe arrest is imminent in a non-bailable accusation. That anchor to a specific case is why courts will not grant protection against unknown, future or unspecified FIRs.',
  'date'         => '2026-08-27',
  'date_display' => '27 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">A person embroiled in a business collapse or a family war often asks for protection "against whatever cases they file". The law does not offer that product. Anticipatory bail under Section 482 of the Bharatiya Nagarik Suraksha Sanhita, 2023 — the successor to Section 438 CrPC — is anchored to a "reason to believe that he may be arrested on an accusation of having committed a non-bailable offence". The accusation must be identifiable; the apprehension must be real, not speculative. From that statutory anchor flows a settled position: no blanket orders covering unregistered, future or unspecified FIRs.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', '498-lawyer-in-delhi.php' => 'Section 498A / BNS 85', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud'],
  'faqs'         => [
    ['Why do courts refuse blanket anticipatory bail?', 'Because the statute conditions the power on a concrete accusation. A blanket order — "no arrest in any case whatsoever" — would immunise a person from the ordinary process of law in matters no court has examined, and would leave the police unable to investigate offences that have not yet occurred or surfaced. The order must identify the FIR or, pre-registration, the specific accusation apprehended.'],
    ['What if I fear multiple FIRs from the same transaction?', 'Each FIR requires its own application, but courts recognise the reality of split or successive FIRs arising from one transaction — for instance, complaints by multiple investors. The first order\'s reasoning often guides the later ones, and where a fresh FIR is substantially the same transaction, that is a strong ground in the new application. What cannot be done is stretching one order to cover a different FIR by assertion.'],
    ['Can anticipatory bail be granted before an FIR is registered?', 'Yes. Registration of an FIR is not a precondition — a concrete, demonstrable apprehension founded on a complaint, notice or credible threat of accusation suffices. But the application must still identify the accusation feared; a generalised anxiety that "someone may file something" is exactly what the blanket-order prohibition excludes.'],
    ['Does an anticipatory bail order expire after some time?', 'Not by default. The protection, once granted on a specific accusation, ordinarily continues till the end of trial unless the order itself is time-limited or is cancelled. Duration and blanket-ness are different questions: an order may last, but only within the case it names.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 (Section 482) — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
    ['label' => 'High Court of Delhi — case status and orders', 'url' => 'https://delhihighcourt.nic.in/web/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory anchor</h2>

<p>Section 482(1) BNSS opens with the operative condition: "Where any person has reason to believe that he may be arrested on accusation of having committed a non-bailable offence…". Three consequences follow. The belief must be the applicant\'s but must rest on objective material a court can evaluate. The accusation must be of a non-bailable offence — protection is unnecessary for bailable ones, where bail is a right. And the accusation must exist as a specific, identifiable apprehension: a named FIR, a complaint under inquiry, a notice, or a demonstrable threat of implication in a defined matter.</p>

<h2>What "blanket" refusals actually refuse</h2>

<div class="tiles">
  <div class="tile"><h3>Future offences</h3><p>No order can protect conduct not yet committed. Protection that travels forward in time would amount to a licence, and courts have always declined it.</p></div>
  <div class="tile"><h3>Unspecified cases</h3><p>"Any FIR that may be registered by X" fails because the court cannot weigh gravity, role or evidence of an accusation it cannot see. The Section 482 discretion is exercised case-wise or not at all.</p></div>
  <div class="tile"><h3>Other jurisdictions</h3><p>An order of the Delhi courts operates within the case it addresses; a separate FIR in another State needs its own application there — with transit anticipatory bail as the recognised bridge for the journey.</p></div>
</div>

<h2>The serial-FIR problem, handled lawfully</h2>

<p>The legitimate concern behind blanket requests is real: financial disputes and matrimonial conflicts do generate successive FIRs, sometimes strategically. The lawful toolkit is narrower but adequate. First, disclosure: each application should candidly list all existing and apprehended proceedings, because suppression is the surest route to cancellation. Second, consolidation arguments: where multiple FIRs replicate one transaction, the accused can seek clubbing or rely on the first-order reasoning in each successive application. Third, speed: transit protection and urgent mentioning manage the gap between a new FIR surfacing and the proper court being reached. Fourth, in genuinely oppressive campaigns of litigation, quashing under Section 528 BNSS addresses the abuse directly rather than through a standing shield.</p>

<h2>Drafting the apprehension correctly</h2>

<div class="check">
  <ul>
    <li>Identify the accusation: FIR number, or the complaint/notice/threat founding the apprehension, with dates and copies.</li>
    <li>Plead the source of belief — not "the applicant apprehends" but the facts from which the apprehension arises.</li>
    <li>Confine the prayer to that accusation; a precise prayer is granted more readily than an ambitious one.</li>
    <li>Disclose antecedents and parallel proceedings; the order survives only as long as the candour behind it.</li>
    <li>Where more FIRs are genuinely feared, say so specifically and seek liberty to apply — not blanket cover.</li>
  </ul>
</div>

<div class="note">
<p>The refusal of blanket protection is not hostility to liberty; it is the price of a discretionary, case-specific remedy that courts guard from becoming an immunity. A well-anchored application on a real accusation remains one of the most effective protections in criminal practice — precisely because it is specific.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
