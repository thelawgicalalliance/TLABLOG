<?php
$P = [
  'slug'         => 'jail-appeals-filing-from-custody-delhi.php',
  'title'        => 'Jail Appeals: Appealing from Custody – Advocate Manish Jha',
  'meta'         => 'How a convict in custody files a criminal appeal through the jail superintendent, how legal aid counsel is appointed, and how jail appeals proceed in Delhi.',
  'h1'           => 'The Appeal That Starts Inside the Prison: Jail Appeals and Legal Aid in Delhi\'s Criminal Courts',
  'crumb'        => 'Criminal — Appeals',
  'kicker'       => 'Practice Explainer · Criminal Appeals',
  'sub'          => 'A convict does not need a lawyer, a court visit or even a typed memo to set an appeal in motion. The petition handed to the jail superintendent is a complete, lawful appeal — and a large share of Delhi High Court\'s criminal appellate docket begins exactly that way.',
  'date'         => '2026-10-17',
  'date_display' => '17 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">The criminal procedure code has always contained a quiet guarantee: a person in custody may present an appeal through the officer in charge of the jail, who is bound to forward it to the appellate court. Section 383 of the CrPC carried that rule, and the BNSS carries it forward for post-2024 cases. Around this provision, Delhi has built a working machinery — jail legal aid clinics, the Delhi State Legal Services Authority, and the High Court\'s own legal services committee — that converts a handwritten petition from Tihar into a fully argued appeal. This explainer maps that machinery and what families can do to make it work faster.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court Practice', 'bail-lawyer-in-delhi.php' => 'Bail & Sentence Suspension', 'blog.php' => 'Legal Updates'],
  'faqs'         => [
    ['How does a jail appeal actually get filed?', 'The convict gives the appeal petition — even handwritten — with a copy of the judgment to the jail superintendent, who forwards it to the appellate court. Presentation to the superintendent counts for limitation, so time stops running when the petition is handed over inside the jail, not when it reaches the court. The jail\'s legal aid clinic and the paralegal volunteers posted there routinely assist in drafting.'],
    ['Who argues a jail appeal if the convict has no lawyer?', 'The court assigns counsel through the legal services machinery — the Delhi High Court Legal Services Committee for appeals in the High Court, and the District Legal Services Authority for sessions-level appeals. Legal aid in criminal appeals is a right flowing from Article 21 and the Legal Services Authorities Act, 1987; the convict pays nothing. The family may also engage private counsel at any stage, and the two routes can be switched.'],
    ['Can bail be sought in a jail appeal?', 'Yes. Suspension of sentence and bail pending appeal is available in a jail appeal exactly as in a counsel-filed appeal. In practice, assigned counsel moves the suspension application once the record is ready; where the sentence is short or substantially served, that application is often the most important event in the appeal.'],
    ['Is there a time limit for appealing from jail?', 'The ordinary limitation for criminal appeals applies — computed with the benefit of the time taken to obtain the judgment copy — but delay in jail appeals is treated generously, since the convict\'s access to documents and advice is limited. Courts routinely condone delay in jail appeals where the explanation is the logistics of custody itself; even so, the safest course is to hand in the petition immediately after the judgment copy reaches the convict.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — appeals chapter (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20099'],
    ['label' => 'Legal Services Authorities Act, 1987 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi State Legal Services Authority — official website', 'url' => 'https://dslsa.org/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the provision exists</h2>
<p>An appeal is the convict's statutory right, but the convict is, by definition, the litigant least able to exercise it: no liberty, often no money, sometimes no literacy. The jail-appeal provision answers that asymmetry by making the State's own custodian the conduit. The superintendent is not a gatekeeper — there is no power to screen, sit on or return the petition — only a forwarding duty. Paired with free legal aid, the scheme means that in law, no conviction in Delhi becomes final merely because the convict was too poor or too isolated to appeal.</p>

<h2>The path of a jail appeal in Delhi</h2>
<div class="flow">
<div class="fstep"><strong>Judgment copy</strong><p>The trial court supplies the convict a certified copy of the judgment free of cost; limitation is computed with this in mind.</p></div>
<div class="fstep"><strong>Petition to the superintendent</strong><p>The convict hands in the appeal petition at the jail; the jail's legal aid clinic assists with drafting and the covering documents.</p></div>
<div class="fstep"><strong>Forwarding and registration</strong><p>The superintendent transmits the petition to the appellate court — the Sessions Court for Magistrate-court convictions, the High Court for Sessions convictions — where it is registered as a jail appeal.</p></div>
<div class="fstep"><strong>Legal aid assignment</strong><p>The court calls for the trial record and assigns counsel through DHCLSC or the DLSA, who files the paper book, any condonation application, and the suspension-of-sentence application.</p></div>
</div>

<h2>Jail appeal versus counsel-filed appeal</h2>
<div class="compare">
<div class="col old"><h3>Jail appeal</h3><p>Filed through the superintendent; grounds often skeletal at first; counsel assigned by the court; costs nothing; limitation treated with latitude.</p></div>
<div class="arrow">→</div>
<div class="col new"><h3>Counsel-filed appeal</h3><p>Filed in the registry with a settled memo of grounds; counsel chosen by the family; moves on the family's timeline; both forms carry identical legal weight once registered.</p></div>
</div>
<p>The two routes converge quickly: once a jail appeal is registered and counsel appears, it proceeds exactly like any other appeal. Nothing prevents a family from engaging private counsel in a registered jail appeal — the vakalatnama is simply filed in the existing matter, which preserves the original filing date and any limitation advantage.</p>

<h2>What families outside can usefully do</h2>
<p>First, obtain the case details — appeal number or at least the trial court case number and jail particulars — because every later step hangs on them. Second, if the convict has handed in a petition, verify through the court's online case status that it has been registered; forwarding lapses are rare but not unknown, and a letter to the DSLSA or the jail visiting advocate resolves them. Third, decide early between legal aid and private counsel so the record and the suspension application are handled by one hand. Fourth, assemble the material that suspension-of-sentence hearings turn on: the sentence served, conduct in custody, the convict's medical condition, and the family's circumstances. An appeal filed from jail is not a lesser appeal — but like every appeal, it rewards preparation over drift.</p>

<div class="note">
<p>This is a general explainer on jail appeals and legal aid in criminal appellate practice in Delhi, under the appeals chapter of the BNSS (which carries forward the CrPC scheme, including the old Section 383) and the Legal Services Authorities Act, 1987. It is informational only and is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
