<?php
$P = [
  'slug'         => 'mact-uninsured-mcd-vehicle-full-compensation-delhi.php',
  'title'        => 'Uninsured MCD Truck, Full Liability – Advocate Manish Jha',
  'meta'         => 'Delhi High Court: a government owner of an uninsured vehicle must pay the full MACT award; the exemption from insurance is no immunity from liability.',
  'h1'           => 'Government Vehicles Without Insurance: Delhi High Court Makes MCD Pay the Full MACT Award',
  'crumb'        => 'MACT — Government Vehicles',
  'kicker'       => 'Delhi High Court · 15 October 2026',
  'sub'          => 'In Rohtash Kumar v. Sangeeta Verma (MAC.APP. 402/2023, decided 15 October 2026), Justice Anish Dayal held that the Corporation, as owner of an uninsured truck driven by its employee in the course of employment, must pay the entire compensation of Rs 22.05 lakh with interest; execution against the driver was set aside, with departmental remedies left open.',
  'date'         => '2026-10-25',
  'date_display' => '25 October 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">Government vehicles are exempt from compulsory third-party insurance under Section 146 of the Motor Vehicles Act, 1988, provided a fund is maintained to meet accident liabilities. What the exemption does not do is shift the burden onto the employee at the wheel. In MAC.APP. 402/2023, decided on 15 October 2026, the Delhi High Court allowed a driver\'s appeal against a Motor Accident Claims Tribunal award that had been executed against him personally, and directed the Municipal Corporation of Delhi to pay the full compensation of Rs 22,05,000 with 9% interest to the family of a 26-year-old service technician killed in a 2014 collision in Dwarka. A government owner, the court held, cannot wash its hands of the liability to pay compensation.</p>',
  'related'      => ['mact-lawyer-in-delhi.php' => 'Motor Accident Claims', 'civil-law.php' => 'Civil Litigation', 'delhi-high-court.php' => 'Delhi High Court Practice', 'blog.php' => 'All Updates'],
  'faqs'         => [
    ['Why was the vehicle uninsured at all?', 'Section 146(2) and (3) of the Motor Vehicles Act exempt vehicles owned by the Central and State Governments and certain local authorities from the compulsory insurance requirement of Section 146(1), on the premise that public owners maintain a fund to satisfy accident claims. The MCD truck fell within this class.'],
    ['Who pays when an exempt vehicle causes an accident?', 'The owner, in full. The court reasoned that the exemption exists so claimants are not left without compensation — it protects the claimant, it does not immunise the owner. Vicarious liability for an employee driving in the course of employment follows ordinary principles, so the award is recoverable from the owner.'],
    ['Could liability be split between the driver and the Corporation?', 'The Corporation proposed bearing only half. The court rejected the apportionment as inconsistent with vicarious liability: where the driver acted in the course of employment, the employer answers for the whole award to the claimants. The employer may, separately, proceed against the driver under its service and conduct rules.'],
    ['What happens to the execution against the driver?', 'It was set aside. The court directed MCD to pay the compensation with accrued interest to the claimants within four weeks, leaving the Corporation free to take internal action against its employee in accordance with its rules.'],
  ],
  'sources'      => [
    ['label' => 'Judgment — Rohtash Kumar v. Sangeeta Verma, MAC.APP. 402/2023, Delhi High Court (15.10.2026)', 'url' => 'https://indiankanoon.org/doc/63518409/'],
    ['label' => 'High Court of Delhi — official website', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The accident and the award</h2>

<p>On 18 December 2014, an MCD truck struck a motorcycle from behind near a school in Dwarka. The rider, a 26-year-old service technician, died; the driver fled, and FIR No. 834/2014 was registered at PS Dwarka (South). The Motor Accident Claims Tribunal, South West District, awarded Rs 22,05,000 with 9% interest in January 2023, holding the driver and the owner — the Municipal Corporation of Delhi — jointly and severally liable. When execution proceedings reached the driver personally, he appealed on apportionment: he was the Corporation's employee, driving its vehicle on its work.</p>

<h2>The court's reasoning</h2>

<div class="flow">
  <div class="fstep"><h3>Undisputed foundations</h3><p>Negligence and course of employment were not contested in the appeal; the only live question was who bears the award.</p></div>
  <div class="fstep"><h3>The exemption's purpose</h3><p>Section 146's carve-out for government vehicles presupposes a fund to meet claims — it ensures claimants are paid, it does not relieve the owner.</p></div>
  <div class="fstep"><h3>Vicarious liability</h3><p>The employer answers in full for the employee's negligent driving in the course of employment; a 50:50 split would hollow out the doctrine.</p></div>
  <div class="fstep"><h3>The direction</h3><p>MCD to pay the entire compensation with accrued interest within four weeks; execution against the driver set aside; departmental action under service rules left open.</p></div>
</div>

<h2>The statutory scheme at a glance</h2>

<table class="law">
  <tr><th>Provision</th><th>Content</th></tr>
  <tr><td>Section 146(1), MV Act</td><td>No vehicle may be used in a public place without third-party insurance</td></tr>
  <tr><td>Section 146(2)–(3), MV Act</td><td>Exemption for government and specified public vehicles, subject to a fund to meet liabilities</td></tr>
  <tr><td>Section 166, MV Act</td><td>Claim for compensation before the MACT</td></tr>
  <tr><td>Central Motor Vehicles Rules, 1989</td><td>Rules 148 and 151–158 — the machinery around exemptions and funds</td></tr>
</table>

<h2>What claimants and government employees should note</h2>

<p>For claimants, the practical message is to implead the owner-department and press the award against it: the absence of an insurer in a government-vehicle case is not a dead end, and tribunals and courts will direct the public owner to pay. Delay in identifying the correct department — municipal corporation, State transport undertaking, or a contractor operating a hired vehicle — is the common source of execution trouble, so the ownership trail should be established early through the registration certificate and departmental records.</p>

<p>For drivers employed by public bodies, the judgment confirms that the claimants' award is not meant to be executed out of the employee's salary or property where the employer's vicarious liability is established. The employer's remedy against a negligent employee lies in its own service and conduct rules — a separate proceeding with its own safeguards — not in redirecting the MACT award.</p>

<div class="note"><p>This article summarises a Delhi High Court motor accident appeal for general information. Liability in accident claims depends on the evidence of negligence, employment and ownership in each case; nothing here is legal advice.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
