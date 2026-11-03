<?php
$P = [
  'slug'         => 'ndps-bail-foreign-national-four-years-delhi.php',
  'title'        => 'NDPS Bail for Foreign National – Advocate Manish Jha',
  'meta'         => 'Delhi High Court grants bail to a Ugandan national after 4.5 years in custody in a commercial quantity NDPS case, reading Section 37 with Article 21. Case explained.',
  'h1'           => 'Four and a Half Years Without a Verdict: Delhi High Court Grants NDPS Bail to a Foreign National',
  'crumb'        => 'NDPS Bail',
  'kicker'       => 'Delhi High Court · 2 November 2026',
  'sub'          => 'With only 6 of 33 prosecution witnesses examined after four and a half years of custody, and documented lapses in seal handling and Section 52A sampling, the Delhi High Court holds that the Section 37 embargo must yield to Article 21 — with a structured set of safeguards for a foreign national accused.',
  'date'         => '2026-11-03',
  'date_display' => '3 November 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">The Narcotic Drugs and Psychotropic Substances Act, 1985 makes bail in commercial quantity cases nearly impossible by design: Section 37 requires the court to find reasonable grounds to believe the accused is not guilty. But incarceration without trial has constitutional limits. In <em>John Seruwu v. Customs</em>, BAIL APPL. 3387/2026, decided on 2 November 2026, Justice Sanjeev Narula granted regular bail to a Ugandan national who had spent over four and a half years in custody in a cocaine-swallowing case at IGI Airport, with the trial barely begun. The order is notable both for its Article 21 reasoning and for the detailed conditions it builds for foreign national accused.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Does Section 37 NDPS Act permit bail purely on grounds of delay?', 'The Supreme Court has repeatedly held that prolonged pre-trial incarceration with no prospect of early conclusion can justify bail notwithstanding Section 37, because the statute cannot become a vehicle for indefinite detention. Courts read the embargo together with Article 21 rather than treating either as absolute.'],
    ['What evidentiary lapses mattered in this case?', 'Admitted discrepancies in the seal description, a recovery handled by an officer whose role was not recorded in the panchnamas, case property kept in a drawer instead of the Malkhana, and Section 52A sampling done nearly four months after the capsules were cut open. Together these gave prima facie reasonable grounds for the first Section 37 limb, strictly for bail purposes.'],
    ['Can foreign nationals get bail in NDPS cases?', 'Yes. Article 21 protects every person, not only citizens. Courts address the genuine flight-risk concern through conditions: passport deposit, FRRO registration, verified local residence, surety verification, restriction to the NCR, monthly police attendance, and written intimation to the accused\'s High Commission.'],
    ['Does this order decide the merits of the recovery?', 'No. The court said its prima facie assessment was for bail only and does not determine the evidentiary value of the recovery at trial. Observations in bail orders do not bind the trial court.'],
  ],
  'sources'      => [
    ['label' => 'John Seruwu v. Customs, BAIL APPL. 3387/2026 — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/174179288/'],
  ],
];
$BODY = <<<'HTML'
<h2>The prosecution case</h2>
<p>The applicant arrived at IGI Airport from Addis Ababa on 5 April 2022. On interception he allegedly disclosed that he had swallowed capsules of narcotics; six were recovered at the airport and seventy-nine more at Dr. RML Hospital, totalling about 1,088 grams of cocaine — well above the commercial quantity threshold. He was arrested on 10 April 2022; the complaint was filed that October and charges framed in March 2023. By the time the bail application was heard, he had been in custody for over four years and six months, and only 6 of the 33 cited prosecution witnesses had been examined.</p>

<h2>How the court worked through Section 37</h2>
<div class="flow">
  <div class="fstep"><strong>1. The delay baseline.</strong> Relying on the Supreme Court's line of authority from <em>Mohd. Muslim</em> onwards, the court noted that long incarceration with a distant trial engages Article 21 even in commercial quantity cases.</div>
  <div class="fstep"><strong>2. The first limb on the recorded evidence.</strong> Cross-examination had already produced admitted discrepancies in the seal description, an unrecorded officer handling the capsules, case property kept in a drawer rather than deposited in the Malkhana, and Section 52A samples drawn on 5 August 2022 though the capsules were opened on 9 April 2022. These were held to give prima facie reasonable grounds, for bail purposes only.</div>
  <div class="fstep"><strong>3. The second limb.</strong> Clean antecedents, a satisfactory nominal roll and no other case supported the finding that he was unlikely to offend on bail.</div>
  <div class="fstep"><strong>4. The foreign-national overlay.</strong> Flight risk was treated as a management problem, not a disqualification — addressed through the structured conditions below.</div>
</div>

<h2>The conditions architecture</h2>
<table class="law">
  <tr><th>Concern</th><th>Condition imposed</th></tr>
  <tr><td>Identity and availability</td><td>Verifiable Delhi address, verified within three days; residence fixed during trial; operational Indian mobile number on record</td></tr>
  <tr><td>Flight risk</td><td>Deposit of passport (including expired passports); no departure from India without leave; movement restricted to the NCR</td></tr>
  <tr><td>Regulatory status</td><td>FRRO registration within a week of release, with intimation to the IO and trial court</td></tr>
  <tr><td>Sureties</td><td>Two sureties of ₹50,000 each, verified for identity, address and financial capacity, with a lien over surety property; the trial court may relax the two-surety rule by reasoned order</td></tr>
  <tr><td>Oversight</td><td>Monthly attendance at the local police station; written intimation of the case and bail to the High Commission of Uganda and the FRRO</td></tr>
</table>

<h2>Why the order matters</h2>
<p>Foreign nationals are a significant share of the NDPS docket at IGI Airport, and the practical reality has long been that Section 37 plus flight risk equals indefinite custody. This order treats the two problems separately: the statutory embargo is answered on the recorded evidence and the delay, while the flight risk is answered through verifiable, auditable conditions. For practitioners, two lessons stand out. First, cross-examination of the seizure witnesses before the bail hearing can transform the Section 37 analysis — the discrepancies here were not alleged but admitted on the record. Second, an applicant who arrives with a concrete compliance plan — an address that can be verified, sureties whose capacity is documented, a passport ready to be deposited — makes it far easier for the court to choose conditions over custody.</p>

<div class="note">
<p><strong>Practice note:</strong> The court directed the trial court to conclude proceedings expeditiously and preserved the prosecution's right to seek cancellation on any breach. Bail orders of this architecture are increasingly standardised for foreign nationals in Delhi; replicating the condition set in the application itself, rather than resisting it, is usually the faster route to liberty.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
