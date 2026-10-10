<?php
$P = [
  'slug'         => 'supreme-court-legal-aid-sclsc.php',
  'title'        => 'Legal Aid For SLPs: The SCLSC – Advocate Manish Jha',
  'meta'         => 'How the Supreme Court Legal Services Committee works: who qualifies for free legal aid in SLPs and appeals, the application process, and the middle-income scheme.',
  'h1'           => 'Reaching the Supreme Court Without Means: Legal Aid Through the SCLSC',
  'crumb'        => 'Supreme Court Practice — Access',
  'kicker'       => 'Practice Explainer · Legal Services Authorities Act, 1987',
  'sub'          => 'The distance between a High Court defeat and a Supreme Court challenge is measured in money as much as law. The Supreme Court Legal Services Committee exists to close that gap for eligible litigants — and a separate society serves the middle-income litigant.',
  'date'         => '2026-10-10',
  'date_display' => '10 October 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">For a litigant who has lost in the High Court, the Supreme Court can seem structurally out of reach: an Advocate-on-Record must file, specialised drafting is needed, and Delhi may be a thousand kilometres away. The Legal Services Authorities Act, 1987 answers this through the Supreme Court Legal Services Committee (SCLSC), which provides free representation — drafting, filing and argument — to eligible persons in Supreme Court matters. Knowing who qualifies and how the process runs lets advocates across the country route deserving clients to it, and lets litigants pursue meritorious challenges that fees would otherwise foreclose.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'civil-law.php' => 'Civil Law', 'delhi-high-court.php' => 'Delhi High Court', 'blog.php' => 'All Articles'],
  'faqs'         => [
    ['Who is entitled to free legal services under the Act?', 'Section 12 of the Legal Services Authorities Act lists the categories: members of Scheduled Castes and Scheduled Tribes; victims of trafficking in human beings or begar; women and children; persons with disabilities; victims of mass disaster, ethnic violence, caste atrocity, flood, drought, earthquake or industrial disaster; industrial workmen; persons in custody, including protective homes and juvenile homes; and persons whose annual income is below the limit notified for Supreme Court matters by the Central Government. Entitlement under a category does not depend on the merits label a lower court attached to the case.'],
    ['What does SCLSC assistance actually include?', 'The Committee maintains panels of Advocates-on-Record and senior advocates who act without charging the litigant. Assistance covers advice on whether a petition is worth filing, drafting of the SLP or appeal or defence, court fees and preparation costs as per the scheme, filing through a panel AOR, and argument. Prisoners\' matters — appeals against conviction, remission issues — form a substantial share of the Committee\'s docket, with jail superintendents forwarding applications.'],
    ['How does one apply?', 'By application to the SCLSC with the judgment under challenge, the applicant\'s eligibility material (category proof or income affidavit/certificate) and the case papers. The Committee has the matter examined — including an assessment of whether a reasonable case for filing exists — and assigns panel counsel accordingly. A litigant refused aid can still proceed privately; conversely, aid can be sought by respondents who must defend hard-won decrees against SLPs filed by better-resourced opponents.'],
    ['What about litigants who are not poor enough for Section 12?', 'The Middle Income Group Legal Aid Society — a scheme operating for Supreme Court matters with its own income ceilings — provides representation at fixed, moderated charges for litigants above the legal aid line but unable to bear market costs. Between Section 12 aid and the MIG scheme, few meritorious Supreme Court matters need die for want of funds, which is also the professional answer to the client who asks whether an SLP is "only for the rich".'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Legal Services Committee / Supreme Court of India', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Legal Services Authorities Act, 1987 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The statutory frame</h2>
<p>The Legal Services Authorities Act builds a pyramid — taluk and district committees, State authorities, the National Legal Services Authority — and places the SCLSC at its apex forum, constituted under Section 3A for cases before the Supreme Court. Two ideas drive the scheme. Eligibility is categorical and income-based (Section 12), not charity: the listed classes are entitled. And the service is real representation, through panels of Advocates-on-Record and seniors, not a diluted substitute.</p>

<h2>The path of an aided matter</h2>
<div class="flow">
<div class="fstep"><strong>Application.</strong> To the SCLSC, with the impugned judgment, case papers and eligibility proof — income affidavit or certificate for the income route, category documents otherwise. Prisoners apply through jail authorities, who are obliged to forward.</div>
<div class="fstep"><strong>Scrutiny.</strong> The Committee evaluates whether the matter merits filing — a safeguard for the fund and for the litigant, since a hopeless SLP helps no one. Border-line assessments lean towards access, particularly in liberty matters.</div>
<div class="fstep"><strong>Assignment.</strong> A panel AOR takes over: certified copies, drafting, translation where the record is not in English, court fees and process as the scheme provides, and filing within limitation — the ninety-day clock runs for aided litigants too, and early application to the Committee protects it.</div>
<div class="fstep"><strong>Hearing.</strong> Panel counsel, and in appropriate matters senior counsel, argue without charge to the litigant. The Court also appoints amicus curiae from panels where an unrepresented party needs one, especially in criminal appeals.</div>
</div>

<div class="note">
<p>For advocates in district and High Court practice, the referral itself is the service: a convict whose appeal failed, a tenant or workman facing a well-funded SLP, a woman litigant in a matrimonial appeal — each may qualify categorically, and the practical kindness is to send the complete file: judgment, orders below, and the eligibility documents, with the limitation date flagged in bold.</p>
</div>

<h2>What aided litigants should know</h2>
<div class="tiles">
<div class="tile"><strong>It covers defence too</strong><p>Aid is not only for filing SLPs. Respondents served with notice in the Supreme Court can seek representation to defend the judgment in their favour — a frequent and underused facility.</p></div>
<div class="tile"><strong>Women and children qualify as such</strong><p>Section 12 lists women and children categorically, without an income test — directly relevant in maintenance, custody and matrimonial SLPs.</p></div>
<div class="tile"><strong>Custody is a category</strong><p>Persons in custody qualify, which covers the bulk of criminal appellate aid: appeals against conviction, sentence matters, and petitions concerning treatment in custody.</p></div>
<div class="tile"><strong>Merit review is not an appeal</strong><p>A Committee opinion that a case is not fit for filing is advice on prospects, not an adjudication; the litigant\'s right to approach the Court privately is untouched.</p></div>
</div>

<h2>Honest expectations</h2>
<p>Legal aid equalises representation; it does not change Article 136&rsquo;s character. A special leave petition remains a discretionary, exceptional remedy, and the aided petitioner faces the same thresholds as the paying one — concurrent findings, delay, and the Court&rsquo;s selectivity. What the SCLSC removes is the obstacle the Constitution never intended: that the question whether the Supreme Court will consider a case should be decided by the litigant&rsquo;s bank balance rather than the case&rsquo;s substance.</p>
HTML;
include __DIR__ . '/post-layout.php';
