<?php
$P = [
  'slug'         => 'dv-act-complaint-where-to-file-section-27.php',
  'title'        => 'Where to File a DV Act Complaint – Advocate Manish Jha',
  'meta'         => 'Section 27 DV Act lets an aggrieved woman file where she permanently or temporarily resides, works, or where the cause of action arose. Jurisdiction explained.',
  'h1'           => 'The Widest Jurisdiction Clause in Family Law: Where a Domestic Violence Application Can Be Filed',
  'crumb'        => 'DV Jurisdiction',
  'kicker'       => 'Explainer · Domestic Violence Act',
  'sub'          => 'A woman forced out of her matrimonial home rarely stays there — and Section 27 of the DV Act is drafted for exactly that reality, allowing her to approach the Magistrate where she now lives, even temporarily. Here is how the provision works, what the Supreme Court has said, and how objections to jurisdiction are dealt with.',
  'date'         => '2026-11-03',
  'date_display' => '3 November 2026',
  'category'     => 'Matrimonial & Family',
  'lead'         => '<p class="lead">The first question in any case is where to file it, and the Protection of Women from Domestic Violence Act, 2005 answers it more generously than almost any other statute. Section 27 confers jurisdiction on the Judicial Magistrate of the first class or Metropolitan Magistrate within whose local limits the aggrieved person permanently <em>or temporarily</em> resides or carries on business or is employed, where the respondent resides or works, or where the cause of action arose. The Supreme Court confirmed the breadth of this choice in <em>Shyamlal Devda v. Parimala</em> (Criminal Appeal No. 141 of 2020, decided 22 January 2020), upholding the jurisdiction of the Bengaluru Magistrate because the aggrieved woman was residing with her parents there — though the marriage and much of the alleged conduct lay elsewhere.</p>',
  'related'      => ['domestic-violence.php' => 'Domestic Violence', 'matrimonial-lawyer-in-delhi.php' => 'Matrimonial & Family Law', '498-lawyer-in-delhi.php' => 'Section 498A Defence', 'child-custody.php' => 'Child Custody'],
  'faqs'         => [
    ['Can a woman file a DV application in the city where she moved after leaving the matrimonial home?', 'Yes. Section 27(1)(a) covers the place where she permanently or temporarily resides. In Shyamlal Devda the Supreme Court held that residence with her parents within the Magistrate\'s territorial limits was sufficient, rejecting the jurisdictional objection outright.'],
    ['Does "temporarily resides" invite forum shopping?', 'Courts require residence in fact — an actual, existing stay, typically with parents or relatives after leaving the shared household — not a fleeting visit engineered to create jurisdiction. The pleading should state when and why the aggrieved person came to the place and with whom she lives.'],
    ['Can the respondent challenge jurisdiction at the threshold?', 'An objection can be raised, but since jurisdiction under Section 27 turns on where the aggrieved person resides, a bona fide stated residence ordinarily settles the issue. The more productive respondent-side challenge is usually to vague arraying of distant relatives, which the Supreme Court in the same case quashed for want of specific allegations.'],
    ['Where are DV orders enforced if the parties are in different cities?', 'Section 27(2) makes orders under the Act enforceable throughout India. A protection or residence order from one State binds the respondent everywhere, and breach is punishable wherever it occurs.'],
  ],
  'sources'      => [
    ['label' => 'Shyamlal Devda v. Parimala, Crl. Appeal 141/2020 — Supreme Court of India (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/41851528/'],
    ['label' => 'Protection of Women from Domestic Violence Act, 2005 — India Code', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2031'],
  ],
];
$BODY = <<<'HTML'
<h2>The three anchors of Section 27</h2>
<table class="law">
  <tr><th>Anchor</th><th>What it covers</th><th>Typical use</th></tr>
  <tr><td>Aggrieved person\'s place</td><td>Where she permanently or temporarily resides, carries on business or is employed</td><td>The parental home she returned to; the city of her new job</td></tr>
  <tr><td>Respondent\'s place</td><td>Where the respondent resides, carries on business or is employed</td><td>Filing at the matrimonial base when she still lives nearby</td></tr>
  <tr><td>Cause of action</td><td>Where the domestic violence occurred</td><td>The shared household; a place where a specific incident happened</td></tr>
</table>
<p>The applicant chooses among the three. The choice belongs to her, not the respondent; convenience of the respondent is not a Section 27 consideration, though transfer jurisprudence under general law remains available in genuinely oppressive cases.</p>

<h2>What "temporarily resides" means in practice</h2>
<p>The phrase does the heavy lifting in most contested cases, because a woman who has left the shared household is, almost by definition, living somewhere new. In <em>Shyamlal Devda</em>, the marriage was performed in Rajasthan, the parties had lived in Chennai and Mumbai, and the aggrieved woman had moved to her parents\' home in Bengaluru; the Supreme Court held in terms that there was "no merit in the contention raising objection as to the jurisdiction of the Metropolitan Magistrate Court at Bengaluru." The test is the fact of residence when the application is presented — not its duration, not its permanence, and not whether the respondent ever lived there.</p>

<h2>Drafting the jurisdiction paragraph</h2>
<div class="check">
<ul>
  <li><strong>State the anchor expressly:</strong> identify which limb of Section 27(1) is invoked, with the address and the date from which the aggrieved person has resided or worked there.</li>
  <li><strong>Explain the move:</strong> one sentence on when and why she left the shared household forecloses the "manufactured residence" argument.</li>
  <li><strong>Plead incidents with place:</strong> where the cause-of-action limb is also available, tie at least one incident to the chosen jurisdiction.</li>
  <li><strong>Array respondents with care:</strong> jurisdiction may be wide, but liability is not — the same Supreme Court decision quashed the case against eleven distant relatives named without specific allegations. Breadth of forum is no substitute for specificity of pleading.</li>
</ul>
</div>

<h2>The Delhi picture</h2>
<p>In Delhi, applications under Section 12 are filed before the Mahila Courts of the district where the Section 27 anchor lies, and the district boundaries follow the police-station jurisdiction of the residence. A woman who has returned to her parents in Delhi after a marriage in another State can file in Delhi; conversely, a respondent served from another State cannot defeat the Delhi proceedings by pointing to the place of marriage. Because orders travel nationwide under Section 27(2), the practical battleground is almost never enforcement but the initial choice of a forum the aggrieved person can actually attend, hearing after hearing — which is precisely the convenience the provision was designed to secure.</p>

<div class="note">
<p><strong>Practice note:</strong> Respondents facing a distant forum should weigh the cost of a jurisdictional fight they will likely lose against seeking exemption from personal appearance and appearing through counsel, or applying for transfer in an appropriate case. Aggrieved persons should resist the temptation to add every in-law: the jurisdictional generosity of Section 27 is matched by judicial strictness about vague, omnibus arraying.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
