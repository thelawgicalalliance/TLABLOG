<?php
$P = [
  'slug'         => 'interim-bail-when-courts-grant-it.php',
  'title'        => 'Interim Bail: When Courts Grant It – Advocate Manish Jha',
  'meta'         => 'Interim bail in Delhi courts — how it differs from regular bail and parole, medical and family grounds, conditions, extension, and the duty to surrender.',
  'h1'           => 'Interim Bail: Short-Term Liberty While the Main Application Is Decided',
  'crumb'        => 'Interim Bail',
  'kicker'       => 'Practice Explainer · Bail',
  'sub'          => 'Interim bail is a bridge — release for a limited period, on defined grounds, without deciding the regular bail application on merits.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Between arrest and the final decision on a regular bail application lies a stretch of custody that can outlast the very emergency that makes release urgent — a surgery, a funeral, a daughter\'s wedding, a collapsing business. Interim bail is the law\'s answer: release for a limited, defined period while the main application awaits hearing, or to meet a pressing human necessity, without any final adjudication on the merits of bail. This explainer sets out how the jurisdiction works in Delhi\'s courts and how applications are framed and opposed.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bns-converter.php' => 'IPC–BNS Converter'],
  'faqs'         => [
    ['How is interim bail different from regular bail and parole?', 'Regular bail releases the accused for the duration of the trial; interim bail releases him for a fixed short period, after which he must surrender unless it is extended or regular bail is granted. Parole and furlough, by contrast, are executive remissions of custody for convicts under the prison rules, not judicial bail at all.'],
    ['On what grounds is interim bail usually granted?', 'Serious illness of the accused requiring treatment not adequately available in custody, death or critical illness in the immediate family, marriage of a child or sibling, and comparable pressing necessities. Courts also grant interim protection while a regular bail application awaits the status report or a first hearing, where custody in the meantime would be unjust.'],
    ['What happens if the accused does not surrender when interim bail expires?', 'Non-surrender is a serious breach: the court cancels the concession, issues process — including non-bailable warrants — and the conduct weighs heavily against the accused in every future bail application. Sureties face forfeiture proceedings on the bond.'],
    ['Can interim bail be converted into regular bail?', 'Yes, in the sense that the regular application remains pending and is decided on its own merits; conduct during interim release — punctual surrender, no tampering, cooperation with investigation — is a factor courts legitimately consider in the accused\'s favour when the main application is heard.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
    ['label' => 'High Court of Delhi — case status and orders', 'url' => 'https://delhihighcourt.nic.in/web/'],
  ],
];
$BODY = <<<'HTML'
<h2>The source of the power</h2>

<p>The BNSS, like the CrPC before it, does not contain a section headed "interim bail". The power inheres in the bail jurisdiction itself: a court competent to grant bail under Section 480 BNSS (Section 437 CrPC), or the Sessions Court and High Court under Section 483 BNSS (Section 439 CrPC), can grant the lesser relief of temporary release while it considers the greater. The Supreme Court has long recognised that the power to grant bail includes the power to grant it for a limited duration pending final consideration. Anticipatory bail practice knows the same device — interim protection under Section 482 BNSS while notice is issued to the State.</p>

<h2>The two typical situations</h2>

<div class="tiles">
  <div class="tile"><h3>Pending consideration</h3><p>The regular bail application is filed; the court calls for a status report returnable in one or two weeks. Where custody in the interregnum would work injustice — a first-time accused, a bailable-adjacent offence, completed investigation — interim bail bridges the gap.</p></div>
  <div class="tile"><h3>Humanitarian necessity</h3><p>A defined event requires the accused's presence: medical treatment, a death or serious illness in the family, a child's marriage, board examinations. Release is tailored to the event — dates, place, and often escort or reporting conditions.</p></div>
</div>

<h2>What the application must establish</h2>

<p>Interim bail applications succeed on specificity. The event must be real, proximate and documented; the period sought must match the necessity; and the accused must show that the purpose cannot be served by lesser means — custody parole, under the Delhi Prison Rules, permits a short escorted visit for a funeral or a marriage, and courts will ask why that does not suffice. The strength of the application is inversely proportional to how much it argues the merits: interim bail is not a preview of the regular bail hearing.</p>

<div class="check">
<p>Supporting papers that matter: medical records from a government hospital or a direction for examination by a medical board, where illness is the ground; the death certificate or wedding card with proof of relationship; proof of residence and roots in Delhi; the custody certificate and details of the pending regular application.</p>
</div>

<h2>Conditions and duration</h2>

<p>Interim bail orders are conditional by design: a fixed period with a stated surrender date; personal bond with sureties; restrictions on travel; no contact with witnesses; sometimes reporting to the investigating officer. The conditions attached must remain within the limits the law sets for bail conditions generally — they secure presence and protect the investigation, they do not punish. Extensions are possible on application before expiry, supported by fresh material — an unfinished course of treatment, a postponed surgery — but courts treat repeated extensions with suspicion, and an extension application is not an opportunity to relitigate.</p>

<h2>The jurisprudential foundation</h2>

<p>Two principles animate the jurisdiction. First, the presumption of innocence and the rule that bail is not to be withheld as punishment: where the final decision will take time through no fault of the accused, temporary liberty can be the just interim arrangement. Second, proportionality: custody must serve a purpose — securing presence, protecting evidence — and where a short, supervised release does not endanger any of those purposes, refusing it serves none. Against these stand the State's legitimate concerns: flight, tampering, and the gravity of the offence. Interim bail is where those considerations are balanced at their finest grain — days and conditions, rather than liberty or custody at large.</p>

<div class="note">
<p>Interim bail granted by the Sessions Court does not bar the High Court's consideration of the regular application, and vice versa; the orders operate in their own spheres. What every court will examine is conduct on earlier interim releases — the accused who surrendered punctually has written the best paragraph of his next bail application.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
