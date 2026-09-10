<?php
$P = [
  'slug'         => 'cheque-bounce-arrest-appearance-bail-ni-act.php',
  'title'        => 'Arrest and Bail in Cheque Bounce Cases – Advocate Manish Jha',
  'meta'         => 'Are you arrested in a cheque bounce case? How appearance, bail bonds and exemption work in Section 138 NI Act prosecutions before Delhi courts, explained.',
  'h1'           => 'Cheque Bounce Cases: Arrest, Appearance and Bail Explained',
  'crumb'        => 'NI Act — Appearance &amp; Bail',
  'kicker'       => 'Procedure &amp; Practice · Negotiable Instruments Act',
  'sub'          => 'A Section 138 case is a summons-trial prosecution — the accused is not arrested by police, but appearance, bonds and conduct before the Magistrate follow rules worth knowing.',
  'date'         => '2026-09-10',
  'date_display' => '10 September 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Few questions are asked of criminal practitioners in Delhi more often than this: "A cheque I signed has bounced and a case has been filed — will I be arrested?" The short answer is that an offence under Section 138 of the Negotiable Instruments Act, 1881 is bailable and triable as a summons case, so there is no police arrest, no FIR and no custodial investigation. But the process that does follow — summons, appearance, bail bonds, and the consequences of ignoring them — has real teeth, and accused persons who treat the case casually can find themselves facing non-bailable warrants and even declaration as proclaimed persons. This explainer sets out how appearance and bail actually operate in cheque bounce prosecutions.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'legal-notice-replies.php' => 'Legal Notices', 'business-corporate-law.php' => 'Commercial &amp; Corporate', 'criminal-law.php' => 'Criminal Law'],
  'faqs'         => [
    ['Can the police arrest me in a cheque bounce case?', 'No. Section 138 NI Act is a non-cognizable, bailable offence prosecuted on a complaint before the Magistrate — not on an FIR. Police do not investigate or arrest. The court issues summons, and the accused appears and is admitted to bail on furnishing a bond, ordinarily without any custody at all.'],
    ['What happens on the first appearance before the Magistrate?', 'The accused appears in response to summons, is formally admitted to bail on a personal bond (with or without surety, as the court directs), receives a copy of the complaint and documents, and the notice of accusation under Section 251 CrPC / Section 274 BNSS is put when the case reaches that stage. The plea of the accused is recorded and the matter proceeds to defence and evidence.'],
    ['Can I be exempted from appearing on every date?', 'Yes. Courts routinely allow applications for permanent exemption from personal appearance in NI Act cases, permitting counsel to appear instead, subject to conditions such as appearing when specifically directed and not disputing identity. Given the volume of cheque cases in Delhi, exemption is the norm for outstation and busy litigants.'],
    ['What if I ignore the summons?', 'The court can issue bailable and then non-bailable warrants, and ultimately proceed to declare the accused a proclaimed person. Bail once granted can be cancelled and the bond forfeited. Non-appearance converts a manageable summons-trial into a fugitive problem — and is the single most common self-inflicted wound in cheque litigation.'],
  ],
  'sources'      => [
    ['label' => 'Negotiable Instruments Act, 1881 — Section 138 (Indian Kanoon, statute text)', 'url' => 'https://indiankanoon.org/doc/1823824/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why there is no arrest</h2>
<p>Section 138 creates an offence punishable with imprisonment up to two years or fine up to twice the cheque amount, or both. But the offence is non-cognizable: it is set in motion only by a written complaint by the payee or holder in due course under Section 142, filed before the Magistrate after the statutory notice-and-waiting sequence. There is no FIR, no police file, and no investigation in the ordinary sense. The accused first learns of the case through court summons — and because the offence is bailable, admission to bail on appearance is a matter of right on furnishing the bond fixed by the court.</p>

<h2>The appearance sequence</h2>
<div class="flow">
<div class="fstep"><strong>Summons.</strong> On taking cognizance, the Magistrate issues summons — in Delhi, service by post and electronic modes is common alongside ordinary process.</div>
<div class="fstep"><strong>First appearance and bail bond.</strong> The accused appears, furnishes a personal bond in the amount fixed by the court (surety may be asked for), and is released on bail. Custody is not a feature of the ordinary case.</div>
<div class="fstep"><strong>Notice of accusation.</strong> The substance of the accusation is put to the accused under the summons-trial procedure; the plea is recorded.</div>
<div class="fstep"><strong>Interim compensation.</strong> Under Section 143A, the court may direct the accused to pay interim compensation up to 20% of the cheque amount during the trial — a discretionary but increasingly invoked provision.</div>
<div class="fstep"><strong>Trial.</strong> Complainant evidence is often by affidavit under Section 145; cross-examination, defence evidence and judgment follow the summary/summons procedure.</div>
</div>

<h2>Exemption from personal appearance</h2>
<p>Because a single business dispute can generate dozens of cheque cases across different courts, Magistrates in Delhi routinely grant exemption from personal appearance, allowing representation through counsel. Conditions typically include an undertaking not to dispute identity, appearance whenever the court specifically directs (for the notice of accusation, statement of the accused, and judgment in particular), and no dilatory use of the concession. An accused who secures exemption and honours its conditions can conduct an entire Section 138 defence with only a handful of personal appearances.</p>

<h2>Where accused persons go wrong</h2>
<div class="tiles">
<div class="tile"><strong>Ignoring summons.</strong> Non-appearance invites bailable warrants, then non-bailable warrants, then proclamation. Each escalation makes the eventual regularisation harder and costlier.</div>
<div class="tile"><strong>Letting the bond lapse.</strong> Failure to appear after bail is granted can forfeit the bond and expose sureties. Fresh bonds and cancellation applications consume dates that should have gone to the defence.</div>
<div class="tile"><strong>Confusing bail with the merits.</strong> Easy bail does not mean a weak case. The presumption under Section 139 places a real evidential burden on the accused; the defence must be built through cross-examination and rebuttal evidence, not assumed.</div>
</div>

<h2>The appellate stage is different</h2>
<p>The relaxed regime applies to trial. On conviction, the calculus changes: an appeal against a Section 138 conviction ordinarily requires suspension of sentence, and appellate courts routinely condition suspension on deposit of a portion of the compensation under Section 148 of the Act. Accused persons planning an appeal should budget for that deposit rather than expect the trial-stage informality to continue.</p>
<div class="note">
<p>This article states the general procedural position in cheque bounce prosecutions and is not advice on any specific case. Timelines and bond practices vary between courts, and the governing procedure for post-1 July 2024 complaints is supplied by the BNSS 2023 in place of the CrPC.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
