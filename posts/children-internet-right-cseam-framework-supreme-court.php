<?php
$P = [
  'slug'         => 'children-internet-right-cseam-framework-supreme-court.php',
  'title'        => 'Children\'s Internet Right & CSEAM – Advocate Manish Jha',
  'meta'         => 'In Just Rights for Children Alliance v. S. Harish (2026 INSC 1149), the Supreme Court affirms children\'s right to internet access and frames a CSEAM detection and takedown regime.',
  'h1'           => 'Access With Armour: The Supreme Court on Children, the Internet and CSEAM Takedown',
  'crumb'        => 'Children, Internet & CSEAM',
  'kicker'       => 'Supreme Court · 15 October 2026',
  'sub'          => 'Rejecting blanket age-based bans, the Court treats internet access as a facet of Articles 21 and 19(1)(a) for every individual including children — while tightening the machinery for detecting and removing child sexual exploitation material.',
  'date'         => '2026-10-21',
  'date_display' => '21 October 2026',
  'category'     => 'Cyber & Fraud',
  'lead'         => '<p class="lead">Can children be banned from the internet for their own protection? In <em>Just Rights for Children Alliance &amp; Anr. v. S. Harish &amp; Ors.</em>, 2026 INSC 1149, decided on 15 October 2026 on miscellaneous applications in its 2024 CSEAM appeals, a bench of Justice J.B. Pardiwala and Justice K.V. Chandran answered no. The right to access and use the internet is a fundamental right of every individual — children included — under Article 21 read with Article 19(1)(a), and blanket age-based bans are not the constitutional answer to online harm. The protection, the Court held, must come instead from calibrated safeguards and a far stronger system for detecting, removing and reporting child sexual exploitation and abuse material (CSEAM).</p>',
  'related'      => ['cyber-law.php' => 'Cyber Law', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud', 'criminal-law.php' => 'Criminal Law', 'child-custody.php' => 'Child Custody & Welfare'],
  'faqs'         => [
    ['What exactly did the Supreme Court hold about children and the internet?', 'The Court held that the right to access and use the internet is a fundamental right of every individual, including children, flowing from Article 21 read with Article 19(1)(a). It rejected blanket age-based bans on children\'s internet or social media use, reasoning that such bans push children to unregulated spaces, deter them from reporting exploitation, and force intrusive age-verification that endangers personal data.'],
    ['Does that mean no restrictions at all on children online?', 'No. The Court accepted that age-appropriate safeguards are needed and left their design to the Union Government. The measures discussed include parental consent and oversight for social media access by younger children, a dedicated child mode, accounts private by default, limits on contact from unknown adults, moderated content and advertising, and restrictions on inherently harmful content such as adult websites.'],
    ['What is the CSEAM framework proposed in the judgment?', 'The Court set out a detection and takedown architecture for the Union to operationalise: a national hash and URL database holding only identifiers of verified CSEAM, multi-tier verification with human review and audit trails before any entry, automatic removal by intermediaries of content matching the database with consolidated weekly reporting, and removal-plus-reporting of newly detected material, with a two-hour timeline for unknown-origin content and a standard complaint category and dedicated grievance officers on every platform.'],
    ['What are intermediaries\' reporting duties under POCSO after this ruling?', 'The order reiterates the 2024 Just Rights holding: intermediaries must report CSEAM to the Special Juvenile Police Unit or local police under Sections 19 and 20 of the POCSO Act read with Rule 11 of the POCSO Rules — reporting only to foreign bodies such as NCMEC is not compliance. Failure to comply imperils the safe-harbour protection under Section 79 of the IT Act.'],
  ],
  'sources'      => [
    ['label' => 'Judgment, Just Rights for Children Alliance v. S. Harish — Supreme Court of India (2026 INSC 1149)', 'url' => 'https://www.sci.gov.in/view-pdf/?diary_no=410282026&type=j&order_date=2026-10-15&from=latest_judgements_order'],
    ['label' => 'Protection of Children from Sexual Offences Act, 2012 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The backdrop: the 2024 CSEAM judgment and what remained</h2>
<p>In September 2024, the Supreme Court\'s judgment in the Just Rights for Children Alliance appeals settled that viewing, possessing and storing child sexual exploitation material attracts the POCSO Act and the IT Act, and recast the vocabulary of the field — "child pornography" giving way to CSEAM, a term that names the abuse rather than implying consent. The miscellaneous applications decided on 15 October 2026 carried that project forward: from defining the offence to engineering the ecosystem that detects and removes the material, and to answering a policy question with constitutional stakes — whether children should simply be kept off the internet.</p>

<h2>Why a blanket ban fails children</h2>
<p>The Court\'s refusal to endorse age-based prohibition rests on practical, child-centred reasoning rather than technological optimism.</p>
<div class="tiles">
  <div class="tile"><h4>Bans displace, they do not protect</h4><p>Children excluded from mainstream platforms migrate to unregulated corners of the internet where no moderation, reporting or safety tooling exists.</p></div>
  <div class="tile"><h4>Bans silence victims</h4><p>A child using the internet in breach of a prohibition is far less likely to report grooming or exploitation, for fear of admitting the use itself.</p></div>
  <div class="tile"><h4>Verification endangers data</h4><p>Enforcing an age ban requires intrusive age-verification of everyone, creating fresh risks of misuse of personal data — a cure with its own disease.</p></div>
</div>
<p>In place of prohibition, the Court pointed the Union toward graduated safeguards: parental consent and oversight calibrated to age, a dedicated child mode, default-private accounts for minors, restrictions on contact from unknown adults, and curated content and advertising — with the state retaining full power to block inherently harmful content such as adult websites for children.</p>

<h2>The CSEAM detection and takedown architecture</h2>
<p>The operational heart of the order is a national machinery for identifying and eliminating CSEAM, which the Union has been asked to frame through a standard operating procedure and guidelines.</p>
<div class="flow">
  <div class="fstep"><strong>A national hash and URL database.</strong> A designated authority maintains identifiers — hashes and URLs — of verified CSEAM, never the material itself.</div>
  <div class="fstep"><strong>Multi-tier verification.</strong> Software screening followed by independent human review by multiple analysts, with digital signatures, access logs and periodic audits before anything enters the database.</div>
  <div class="fstep"><strong>Automatic removal of known content.</strong> Intermediaries must remove content matching the database and file consolidated weekly reports of such removals.</div>
  <div class="fstep"><strong>Rapid handling of new content.</strong> Unknown-origin CSEAM detected on a platform — through due diligence, a complaint, or a court or government order — is to be removed on a two-hour timeline and reported to the database authority, with a notice stating the basis of removal.</div>
  <div class="fstep"><strong>Accessible reporting.</strong> Every platform needs a distinct, easy-to-use CSEAM reporting category, a standard reporting form and dedicated grievance officers.</div>
</div>

<h2>The compliance stakes for platforms</h2>
<p>The order restates, with renewed force, the reporting obligations declared in 2024: CSEAM found on a platform must be reported to the Special Juvenile Police Unit or the local police under Sections 19 and 20 of the POCSO Act read with Rule 11 of the POCSO Rules. Routing reports exclusively to foreign clearinghouses does not discharge the Indian statutory duty. The sanction is structural rather than merely penal — an intermediary that fails to comply places its Section 79 IT Act safe harbour at risk, exposing itself to liability for the content itself.</p>

<h2>What this means on the ground</h2>
<div class="check">
  <ul>
    <li><strong>For parents and schools:</strong> the constitutional settlement is access with supervision, not prohibition — digital literacy and reporting channels matter more than confiscating devices.</li>
    <li><strong>For platforms and their counsel:</strong> compliance programmes should anticipate the database regime: hash-matching capability, the two-hour unknown-origin workflow, weekly reporting, and POCSO-compliant escalation to Indian authorities.</li>
    <li><strong>For criminal practice:</strong> takedown notices, platform reports and database matches will increasingly supply the documentary spine of POCSO and IT Act prosecutions, and defence scrutiny of that chain — verification, audit logs, human review — will matter correspondingly.</li>
  </ul>
</div>
<p>The judgment\'s message is deliberately double-edged: the internet belongs to children too, and precisely for that reason, the machinery that purges it of their exploitation must finally be built to scale.</p>
<div class="note"><p>This article is for general information only and is not legal advice. Several measures in the order are framed for the Union Government to operationalise, and implementing rules should be tracked.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
