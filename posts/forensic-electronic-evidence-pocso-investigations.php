<?php
$P = [
  'slug'         => 'forensic-electronic-evidence-pocso-investigations.php',
  'title'        => 'Forensic Evidence in POCSO Cases – Advocate Manish Jha',
  'meta'         => 'Forensic and electronic evidence in POCSO matters: sampling and DNA, chain of custody, the Section 63 BSA certificate for chats, and how gaps affect the trial.',
  'h1'           => 'Forensic and electronic evidence in POCSO investigations and trials',
  'crumb'        => 'Criminal Law — POCSO',
  'kicker'       => 'Explainer · POCSO',
  'sub'          => 'A POCSO trial is usually anchored in the child’s testimony, but forensic sampling, DNA work, call records and chat logs decide how much weight that anchor must carry — and each comes with its own statutory discipline.',
  'date'         => '2026-10-27',
  'date_display' => '27 October 2026',
  'category'     => 'Criminal Law',
  'lead'         => '<p class="lead">In most prosecutions under the POCSO Act, 2012, the central evidence is the child’s own account. What varies from case to case is the scientific and electronic material that surrounds it: swabs and clothing sent for DNA profiling, the medical officer’s sampling at the Section 27 examination, mobile phones carrying grooming chats, and call detail records. This material travels a long road — collection, sealing, forwarding, laboratory analysis, certification and proof — and the statutes govern every leg of it. An explainer on how forensic and electronic evidence is gathered, proved and weighed across the life of a POCSO case.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'cyber-law.php' => 'Cyber Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Is DNA evidence necessary for a POCSO conviction?', 'No statute makes it indispensable. A conviction can rest on the child’s testimony if the court finds it reliable, and the presumptions under Sections 29 and 30 POCSO operate once the foundational facts of the offence are established by the prosecution. Forensic material matters because it corroborates or contradicts that account: a matching DNA profile strengthens the case, while unexplained gaps in sampling or custody become grounds the defence legitimately presses.'],
    ['Who conducts the medical examination and sampling of a girl victim?', 'Section 27 POCSO requires that where the victim is a girl, the medical examination be conducted by a woman doctor, in the presence of a parent or another person the child trusts, and in line with the general framework for examining victims of sexual offences now contained in the Bharatiya Nagarik Suraksha Sanhita, 2023, which proceeds on the consent of the victim or of a person competent to consent on her behalf. The examination may be conducted even before the FIR is registered.'],
    ['What is the Section 63 BSA certificate and when is it needed?', 'Under Section 63 of the Bharatiya Sakshya Adhiniyam, 2023 — the successor to Section 65B of the Evidence Act, 1872 — a copy or printout of an electronic record, such as a chat export, call detail record or CCTV clip, is admissible only if accompanied by the prescribed certificate identifying the record and the device and confirming the conditions of its production. Prosecutions relying on grooming chats or CDRs must secure this certification; its absence is a recurring point of challenge at trial.'],
    ['Do delays in sending samples to the FSL affect the case?', 'They can. The value of biological material depends on prompt, properly sealed collection and an unbroken, documented chain of custody from the examining doctor to the forensic science laboratory. Delay or unexplained breaks invite the argument that the sample was degraded or tampered with. The effect is case-specific: the court weighs the deficiency against the remaining evidence, foremost the child’s testimony and the statutory presumptions.'],
  ],
  'sources'      => [
    ['label' => 'Protection of Children from Sexual Offences Act, 2012 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Bharatiya Sakshya Adhiniyam, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Where science sits in a POCSO case</h2>
<p>POCSO trials are built around the child. The Act’s procedures for recording the child’s statement, and the presumptions it raises, all point the same way: a credible child witness can sustain a conviction. Forensic and electronic evidence occupies the space around that testimony. It can corroborate the child on the act, the identity of the offender and the timeline; it can fix an online offender whom the child never met; and, when it is missing or mishandled, it supplies the defence its most concrete material. Understanding how this evidence is collected and proved is therefore essential on both sides of a POCSO brief.</p>

<h2>Sampling at the medical examination</h2>
<p>The gateway is Section 27 POCSO. It directs that the medical examination of a child victim be conducted in accordance with the general statutory framework for examining victims of sexual offences — formerly Section 164A of the Code of Criminal Procedure, 1973, now carried into the Bharatiya Nagarik Suraksha Sanhita, 2023 — and it adds child-specific safeguards: where the victim is a girl, the examination must be by a <strong>woman doctor</strong>; it must take place in the presence of a parent or another person the child trusts; and where no such person is available, in the presence of a woman nominated by the head of the medical institution. The examination can proceed even before an FIR is registered, and the underlying framework rests on consent — of the victim or of a person competent to consent on the child’s behalf.</p>
<p>For present purposes, the examination’s significance is what leaves the room with the doctor: swabs, nail clippings, clothing, and other biological material, each to be described in the medico-legal report, sealed, labelled and handed over for forwarding to the forensic science laboratory. Time matters biologically — the evidentiary value of such material diminishes rapidly — which is why early reporting and prompt examination serve the prosecution as much as the child.</p>

<h2>FSL, DNA and the chain of custody</h2>
<p>Between the hospital and the courtroom, the sample’s integrity is everything. DNA profiling can place the accused with a precision no oral account offers, but only if the exhibit the laboratory tested is demonstrably the exhibit the doctor sealed. That is the chain of custody, and it is proved link by link:</p>
<div class="flow">
<div class="fstep"><h4>1. Collection and sealing</h4><p>The examining doctor collects, seals and labels each sample, recording seal impressions in the MLC.</p></div>
<div class="fstep"><h4>2. Custody and transit</h4><p>The investigating officer takes charge of the sealed parcels, deposits them in the malkhana, and forwards them to the FSL; registers record every movement and every hand.</p></div>
<div class="fstep"><h4>3. Laboratory examination</h4><p>The FSL confirms the seals were intact, analyses the material, and issues a report comparing profiles where reference samples of the accused were taken.</p></div>
<div class="fstep"><h4>4. Proof at trial</h4><p>The doctor, the carriers and the analyst prove their links; the scientific report is weighed as expert opinion under the Bharatiya Sakshya Adhiniyam, 2023.</p></div>
</div>
<p>The BNSS has also strengthened the scene-of-crime end of this chain: for offences carrying seven years’ imprisonment or more — which covers the graver POCSO offences — it provides for forensic experts to visit the crime scene and collect evidence, with the process recorded electronically. An unexplained break anywhere in the chain does not automatically destroy the prosecution, but it converts a scientific certainty into a contested inference.</p>

<h2>Electronic evidence: grooming, chats and call records</h2>
<p>A growing share of POCSO work involves offences committed or begun online — sexual harassment of a child through electronic means, showing a child obscene material, and the use of children in pornographic material, read with the offences under the Information Technology Act, 2000 concerning child sexual abuse material. Here the case is largely electronic: chat exports, social-media account data, images recovered from devices, call detail records and tower location data.</p>
<div class="compare">
<div class="col old"><h4>Then: Section 65B, Evidence Act, 1872</h4><p>Secondary evidence of an electronic record required a Section 65B(4) certificate identifying the record and device and confirming the conditions of production.</p></div>
<div class="arrow">→</div>
<div class="col new"><h4>Now: Section 63, Bharatiya Sakshya Adhiniyam, 2023</h4><p>The same certification discipline continues for electronic records, with the certificate in the prescribed form — including authentication by the person in charge of the device or process and an expert.</p></div>
</div>
<p>The practical consequences are concrete. Seized phones and storage media must be seized, sealed and sent for forensic imaging rather than browsed casually; printouts of chats tendered without the Section 63 certificate are vulnerable to objection; and call detail records obtained from service providers need certification by the responsible official. For the defence, the certificate, the hash values and the handling of the device between seizure and imaging are the natural points of scrutiny.</p>

<h2>Forensic gaps and the statutory presumptions</h2>
<p>What happens when the science is thin — no DNA match, a delayed examination, an uncertified chat log — but the child’s account stands? Sections 29 and 30 POCSO raise presumptions in the prosecution’s favour: once the foundational facts of the offence are established by legally admissible evidence, the Special Court presumes commission of the offence and the culpable mental state, leaving the accused to rebut. The presumptions are not a substitute for proof of those foundational facts, and forensic deficiencies are weighed in deciding whether that threshold is crossed and whether the defence has raised a probable rebuttal. In short: gaps do not doom a prosecution resting on credible testimony, but they move real weight onto that testimony, and both sides prepare accordingly.</p>

<h2>Timelines across the case</h2>
<p>Speed is itself part of the forensic scheme, because samples degrade and devices disappear. The BNSS requires investigation in child sexual offence cases to be completed within two months of the information being recorded. On the trial side, Section 35 POCSO directs that the child’s evidence be recorded within thirty days of the Special Court taking cognizance and that the trial be completed, as far as possible, within one year — windows within which FSL reports and Section 63 certificates must realistically be in hand.</p>

<div class="note">
<p>A working rule for any POCSO brief: map the exhibits before the witnesses. Where each sample was taken, who sealed it, when it reached the laboratory, which electronic record carries a certificate and which does not — that map tells both prosecution and defence where the trial will actually be fought, long before the child enters the witness box.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
