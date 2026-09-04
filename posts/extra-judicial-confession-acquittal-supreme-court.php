<?php
$P = [
  'slug'         => 'extra-judicial-confession-acquittal-supreme-court.php',
  'title'        => 'Confession & Acquittal: SC Ruling – Advocate Manish Jha',
  'meta'         => 'Sahab Singh v. State of Haryana (2026 INSC 945): the Supreme Court acquits a man after sixteen years, holding the extra-judicial confession uncorroborated.',
  'h1'           => 'Sixteen Years, Then Acquittal: Sahab Singh v. State of Haryana on Extra-Judicial Confessions',
  'crumb'        => 'Sahab Singh Acquittal',
  'kicker'       => 'Supreme Court · 2 September 2026',
  'sub'          => 'The Supreme Court reiterates that an extra-judicial confession is weak evidence which cannot sustain a conviction without independent corroboration.',
  'date'         => '2026-09-04',
  'date_display' => '4 September 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">On 2 September 2026, the Supreme Court in <em>Sahab Singh alias Sat Pal v. State of Haryana</em>, 2026 INSC 945, set aside concurrent findings of the trial court and the High Court and acquitted a man who had spent over sixteen years in prison for the murder of a six-year-old child. The judgment, delivered by a Bench of Justices Sanjay Kumar and Sanjeev Sachdeva, is a sobering study in how circumstantial cases fail — and a restatement of the law on last-seen evidence and extra-judicial confessions that every appellate practitioner should note.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court', 'bail-lawyer-in-delhi.php' => 'Bail Matters'],
  'faqs'         => [
    ['What was the prosecution case?', 'A six-year-old boy went missing during a village wedding in March 2007 and was found dead in a well the next morning. The prosecution alleged the accused had bought snacks and tablets from a shop while with the child, committed sexual assault and murder, and later confessed before the village sarpanch, leading to his arrest.'],
    ['Why did the Supreme Court acquit?', 'The Court found the chain of circumstances incomplete: the last-seen theory was not conclusively supported by the witnesses, the alleged extra-judicial confession suffered from material inconsistencies, no DNA analysis connected the forensic material to the accused, and the recovery of the snack packet appeared contrived. With each link doubtful, the conviction could not stand.'],
    ['What does the judgment say about extra-judicial confessions?', 'It reiterates the settled position that an extra-judicial confession is inherently weak evidence. Absent independent, reliable corroboration, it cannot form the basis of a conviction — particularly where the person to whom it was allegedly made, and the circumstances of its making, do not inspire confidence.'],
    ['Where can the judgment be read?', 'The full text of the decision in Criminal Appeal No. 4158 of 2026, dated 2 September 2026, is available on Indian Kanoon at the link in the sources below.'],
  ],
  'sources'      => [
    ['label' => 'Sahab Singh alias Sat Pal v. State of Haryana, 2026 INSC 945 — full text', 'url' => 'https://indiankanoon.org/doc/80924772/'],
  ],
];
$BODY = <<<'HTML'
<h2>A circumstantial case, link by link</h2>
<p>No one saw the child killed. The prosecution's case was a chain: the child was last seen with the accused near a shop where snacks and cold tablets were bought; the body was recovered from a well; the accused allegedly confessed two days later before the village sarpanch; and a snack packet was seized in supposed corroboration. The trial court convicted, and the High Court affirmed. The Supreme Court took up the appeal years later — by which time the appellant had served more than sixteen years.</p>
<p>The Court applied the classical discipline of circumstantial evidence: every circumstance relied upon must be fully established, the circumstances must form a complete chain consistent only with guilt, and any doubtful link breaks the chain. On examination, the Court found not one weak link but several.</p>

<h2>Where the chain broke</h2>
<div class="tiles">
  <div class="tile"><strong>Last seen.</strong> The witness testimony did not conclusively establish that the child was last in the company of the accused at a time proximate to the death — the foundational requirement for the last-seen circumstance to carry weight.</div>
  <div class="tile"><strong>The confession.</strong> The alleged extra-judicial confession before the sarpanch was riddled with material inconsistencies as to when, how and in whose presence it was made. The Court reiterated that such confessions are weak evidence requiring independent corroboration, which was absent.</div>
  <div class="tile"><strong>The forensic gap.</strong> Biological material was available, yet no DNA analysis was undertaken to link it to the accused — an omission the Court found telling in a case with no direct evidence.</div>
  <div class="tile"><strong>The seizure.</strong> The recovery of the snack packet, presented as corroboration, appeared to the Court to be an afterthought designed to prop up the story rather than genuine investigative yield.</div>
</div>

<h2>The law restated</h2>
<p>The judgment does not invent doctrine; its value lies in enforcement. Three propositions emerge clearly. First, suspicion — however grave, and the murder of a child generates the gravest — cannot substitute for proof. Second, an extra-judicial confession is a fragile foundation: courts must examine the credibility of the person to whom it was made, the circumstances in which it surfaced, and the presence of independent corroboration before giving it any weight. Third, investigative omissions matter: where science could have spoken and was never asked, the silence counts against the prosecution, not the accused.</p>

<div class="note"><p>For appellate practice, the case is also a reminder that concurrent findings are not a wall. Where the chain of circumstances is demonstrably incomplete, the Supreme Court will interfere under Article 136 even after two courts have convicted — though the sixteen years the appellant spent in custody before that correction is its own commentary on the cost of error.</p></div>

<h2>Relevance for practice in Delhi</h2>
<p>Circumstantial prosecutions built on last-seen testimony and belated confessions are a staple of the Sessions Courts. This decision arms the defence with a current, authoritative restatement — and cautions prosecutors that convictions built on unexamined forensic material and convenient seizures do not survive scrutiny. For appeals pending before the High Court of Delhi on similar evidence, the judgment's link-by-link methodology is the template to follow.</p>
<p>The judgment in Criminal Appeal No. 4158 of 2026 was delivered on 2 September 2026; the full text is linked below. This case note is an informational summary and not legal advice.</p>
HTML;
include __DIR__ . '/post-layout.php';
