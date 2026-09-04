<?php
$P = [
  'slug'         => 'ndps-bail-quantity-small-intermediate-commercial.php',
  'title'        => 'NDPS Bail by Quantity – Advocate Manish Jha',
  'meta'         => 'How small, intermediate and commercial quantity decide NDPS bail — when the Section 37 twin conditions apply and when ordinary bail principles govern.',
  'h1'           => 'NDPS Bail by Quantity: Small, Intermediate and Commercial Explained',
  'crumb'        => 'NDPS Bail by Quantity',
  'kicker'       => 'Practice Guide · 4 September 2026',
  'sub'          => 'In narcotics cases the single most important fact for bail is the quantity alleged — it decides which legal test the court applies.',
  'date'         => '2026-09-04',
  'date_display' => '4 September 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">Bail under the Narcotic Drugs and Psychotropic Substances Act, 1985 is not one regime but three. The Act classifies contraband into small quantity, commercial quantity, and the unnamed middle band practitioners call intermediate quantity — and the classification determines whether the forbidding twin conditions of Section 37 apply or whether the ordinary bail principles of the Bharatiya Nagarik Suraksha Sanhita govern. Many NDPS bail applications are won or lost on this threshold question before the merits are ever reached.</p>',
  'related'      => ['bail-lawyer-in-delhi.php' => 'Bail Matters', 'criminal-law.php' => 'Criminal Law', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['What makes commercial quantity cases so difficult for bail?', 'Section 37 requires the court to be satisfied that there are reasonable grounds for believing the accused is not guilty and that he is not likely to commit any offence while on bail — over and above the ordinary considerations. These twin conditions apply to commercial quantity offences and certain specified offences, and courts have described the threshold as a high one.'],
    ['Do the twin conditions apply to intermediate quantity?', 'No. For quantities above small but below commercial, bail is considered on ordinary principles — gravity, antecedents, role, risk of flight and tampering — without the Section 37 embargo. This is why precisely establishing the quantity, including disputes about weighing and sampling, matters so much.'],
    ['How is quantity determined when drugs are mixed with other substances?', 'The Supreme Court has held that the entire weight of the mixture, including neutral substances, counts towards quantity — not just the pure drug content. This makes seizure memos, sampling procedure and the forensic report central battlegrounds in NDPS litigation.'],
    ['Is bail realistic in small quantity cases?', 'Small quantity offences carry punishment up to one year and are treated far less severely. Bail is ordinarily granted, and prolonged custody in a small quantity case is itself a strong ground. The real fights are in the intermediate and commercial bands.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>Three bands, three legal regimes</h2>
<p>The Central Government notifies, drug by drug, what constitutes small quantity and commercial quantity. Everything between the two is the intermediate band. The consequences cascade through the statute: punishment under Sections 20 to 22 is graded by band, and the bail embargo of Section 37 attaches only at the top band and to certain specified offences (such as those under Sections 19, 24 and 27A).</p>
<table class="law">
  <tr><th>Band</th><th>Typical punishment range</th><th>Bail test</th></tr>
  <tr><td>Small quantity</td><td>Up to 1 year rigorous imprisonment or fine or both</td><td>Ordinary bail principles; bail commonly granted</td></tr>
  <tr><td>Intermediate (more than small, less than commercial)</td><td>Up to 10 years and fine</td><td>Ordinary bail principles under the BNSS</td></tr>
  <tr><td>Commercial quantity</td><td>10 to 20 years and fine</td><td>Section 37 twin conditions apply</td></tr>
</table>
<p>Illustratively, under the notified table heroin has a small quantity of 5 grams and a commercial quantity of 250 grams; ganja 1 kilogram and 20 kilograms; cocaine 2 grams and 100 grams. A seizure of 40 grams of heroin therefore falls in the intermediate band — serious, but outside the Section 37 embargo.</p>

<h2>What Section 37 actually demands</h2>
<p>For commercial quantity, bail requires two cumulative satisfactions: reasonable grounds to believe the accused is <em>not guilty</em>, and that he is <em>not likely to reoffend</em> on bail. Courts reach the first satisfaction, where they do, through identifiable defects: non-compliance with the safeguards of Sections 42, 50 and 52A on search, personal search and sampling; broken links in the seizure-to-FSL chain; absence of recovery from the accused personally; or reliance solely on a co-accused's statement. Prolonged incarceration with no prospect of early trial has also been recognised as a factor that can tip the balance, because the embargo cannot become a sentence before verdict.</p>

<div class="compare">
  <div class="col old"><h3>Commercial quantity</h3><p>Twin conditions; detailed scrutiny of compliance with statutory safeguards; bail exceptional.</p></div>
  <div class="arrow">→</div>
  <div class="col new"><h3>Intermediate quantity</h3><p>Ordinary principles; role, antecedents, custody period and trial progress dominate; bail realistic.</p></div>
</div>

<h2>The quantity battle itself</h2>
<p>Because the band decides the regime, the defence scrutinises how the quantity was arrived at. Recurring issues include: weighing the whole seized substance versus representative sampling; mixtures and neutral material, where the settled position is that the entire mixture weight counts; multiple small recoveries aggregated to cross a threshold; and discrepancies between the seizure memo, the FSL report and the chargesheet. A successful challenge that brings the alleged quantity below the commercial line changes the bail analysis entirely — often the most valuable single victory available at the pre-trial stage.</p>

<div class="tiles">
  <div class="tile"><strong>Sampling and Section 52A.</strong> Inventory, certification and sampling before a Magistrate are statutory safeguards; deviations feature prominently in successful bail applications.</div>
  <div class="tile"><strong>Conscious possession.</strong> Recovery from a vehicle, parcel or premises raises questions of knowledge and control, particularly for drivers, co-passengers and consignees.</div>
  <div class="tile"><strong>Delay and custody.</strong> Where trial has not progressed for years, courts weigh Article 21 even in commercial quantity cases.</div>
  <div class="tile"><strong>Antecedents.</strong> A clean record assists everywhere; prior NDPS involvement makes the second twin condition difficult.</div>
</div>

<div class="note"><p>The BNSS now supplies the general bail machinery — Section 480 for Magistrate bail, Section 483 for the Sessions Court and High Court — but Section 37 NDPS, being special law, continues to override for the offences it covers. Delhi NDPS matters are tried before designated Special Courts, and bail applications in commercial quantity cases go to the Special Court and the High Court.</p></div>

<h2>Takeaways</h2>
<div class="check">
  <p>Fix the band first: everything about the bail application flows from it.</p>
  <p>In commercial cases, build the application on statutory non-compliance, not sympathy.</p>
  <p>In intermediate cases, argue ordinary principles and custody period squarely.</p>
  <p>Interrogate the weighing, sampling and FSL chain in every case.</p>
</div>
<p>This article is general information about NDPS bail practice and is not legal advice in any individual case.</p>
HTML;
include __DIR__ . '/post-layout.php';
