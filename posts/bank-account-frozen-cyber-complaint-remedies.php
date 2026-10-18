<?php
$P = [
  'slug'         => 'bank-account-frozen-cyber-complaint-remedies.php',
  'title'        => 'Account Frozen by Cyber Cell? – Advocate Manish Jha',
  'meta'         => 'Bank account frozen over a cybercrime complaint you know nothing about? The legal basis under Section 106 BNSS, lien marks on disputed amounts, and the remedies to unfreeze.',
  'h1'           => 'When the Bank Says "Frozen on Police Instructions": Cyber-Complaint Freezes and the Road Back',
  'crumb'        => 'Frozen Accounts: Remedies',
  'kicker'       => 'Explainer · Cyber Fraud',
  'sub'          => 'Thousands of accounts are frozen every month because a credit in them traces back to someone else\'s fraud complaint. The power comes from Section 106 BNSS (formerly Section 102 CrPC); the remedies run through the police, the magistrate and, where freezes are disproportionate, the High Court.',
  'date'         => '2026-10-18',
  'date_display' => '18 October 2026',
  'category'     => 'Cyber & Fraud',
  'lead'         => '<p class="lead">A trader receives payment from a customer; the customer\'s own payer turns out to have been defrauded; weeks later the trader\'s account is frozen — often in a police district a thousand kilometres away, on a complaint the account-holder has never seen. The freeze typically arrives without notice, through the bank, citing a cybercrime complaint number. This explainer sets out the legal source of that power, the difference between a full freeze and a lien on a disputed amount, and the remedies available to an account-holder whose funds are locked.</p>',
  'related'      => ['cyber-law.php' => 'Cyber Law', 'banking-fraud.php' => 'Banking Fraud', 'online-fraud-lawyer-in-delhi.php' => 'Online Fraud', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Under what power do police freeze a bank account?', 'Section 106 of the Bharatiya Nagarik Suraksha Sanhita, 2023 — the successor to Section 102 CrPC — empowers a police officer to seize property suspected to be stolen or found in circumstances creating suspicion of an offence, and the settled position is that this power extends to bank accounts, which are "property" for this purpose. The officer must report the seizure to the magistrate having jurisdiction, and the bank acts on the police instruction by debit-freezing the account or marking a lien.'],
    ['Is there a difference between a full freeze and a lien on part of the balance?', 'Yes, and it matters. A lien or hold limited to the disputed amount — the sum traced from the complainant\'s transfer — leaves the rest of the account operational. A blanket debit freeze locks everything, including salary or working capital unconnected to the allegation. A first, often-successful ask is conversion of a full freeze into a lien confined to the traced amount, which law-enforcement agencies and courts increasingly treat as the proportionate course.'],
    ['What are the remedies, in order?', 'First, a written representation to the investigating officer and the nodal cyber cell that issued the instruction, with documents showing the source and legitimacy of the credits. Second, an application to the jurisdictional magistrate — the court to which the Section 106 seizure is reported — seeking release of the account or of amounts beyond the disputed sum, on such conditions as the court fixes, including undertakings or security. Third, where the freeze is wholly disproportionate, imposed without reporting to the magistrate, or left unresolved indefinitely, a writ petition before the High Court challenging the action.'],
    ['Will I become an accused because a tainted credit landed in my account?', 'Receiving a payment that is later traced to fraud does not by itself make the recipient an offender; liability requires dishonest knowledge or participation. Genuine sellers and service providers routinely receive such credits. The account-holder\'s task is documentary: show the underlying transaction — invoices, delivery records, correspondence — that explains the credit as consideration received in good faith.'],
  ],
  'sources'      => [
    ['label' => 'Bharatiya Nagarik Suraksha Sanhita, 2023 — India Code (official text)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/20063?view_type=browse'],
    ['label' => 'National Cyber Crime Reporting Portal — Ministry of Home Affairs', 'url' => 'https://cybercrime.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>How the freeze happens</h2>
<p>When a victim reports an online fraud on the 1930 helpline or the National Cyber Crime Reporting Portal, the system traces the defrauded money hop by hop through the accounts it passed. Every account in that chain — the first mule account, and often the second, third and fourth layers where funds were split — receives a freeze or lien instruction routed through the banks\' nodal officers. The legal engine is the seizure power now housed in Section 106 BNSS: property "found under circumstances which create suspicion of the commission of any offence" may be seized by police, with a mandatory report of the seizure to the jurisdictional magistrate. The account-holder usually learns of all this only when a payment bounces.</p>

<h2>The account-holder\'s position</h2>
<p>The freeze regime pursues money, not guilt: at the moment of freezing, no finding exists against the account-holder. But the practical burden shifts immediately — the account-holder must explain the credit. Three situations recur:</p>
<div class="tiles">
  <div class="tile"><h3>The genuine recipient</h3><p>A seller, service provider or employee who received the sum as real consideration. The cure is documentation of the underlying transaction and prompt engagement with the IO and, where needed, the magistrate.</p></div>
  <div class="tile"><h3>The layered account</h3><p>An account several hops downstream, frozen for a credit far smaller than the balance locked. The proportionality argument — lien on the traced amount, not a blanket freeze — is at its strongest here.</p></div>
  <div class="tile"><h3>The rented account</h3><p>Accounts lent for a commission to move others\' funds. Here the exposure is real: mule-account holders face investigation as facilitators, and banks increasingly close such accounts and flag the holder.</p></div>
</div>

<h2>The remedial ladder</h2>
<div class="flow">
  <div class="fstep"><strong>1. Find the source of the instruction.</strong> Obtain from the bank the freeze reference: the complaint/acknowledgement number, the police unit and the date. This identifies the IO and the State whose cyber cell acted.</div>
  <div class="fstep"><strong>2. Represent to the IO and nodal cell.</strong> Send a documented representation explaining each disputed credit, and ask for release of the account or restriction of the hold to the traced amount.</div>
  <div class="fstep"><strong>3. Move the magistrate.</strong> The magistrate to whom the Section 106 seizure is reportable can order release of the seized property — the account or the excess balance — on appropriate terms, including a bond or an undertaking to produce the amount if required.</div>
  <div class="fstep"><strong>4. Writ jurisdiction.</strong> Where the freeze is indefinite, unreported, or grossly disproportionate — an entire current account locked for a small traced credit — the High Court can be moved for appropriate directions.</div>
</div>

<h2>What strengthens a release application</h2>
<div class="check">
  <p>Carry the complete paper trail: bank statement highlighting the disputed credit; the underlying contract, invoice or communication explaining it; KYC and business registration showing the account\'s genuine use; proof of hardship where salaries or statutory dues are blocked; and a precise prayer — full de-freeze, or operation of the account with a lien limited to the specific amount. Courts respond to precision: an applicant who concedes a hold on the traced sum while seeking the rest of the account back is asking for something a magistrate can comfortably grant.</p>
</div>

<h2>Prevention for businesses</h2>
<p>Businesses that take payments from unknown counterparties — resellers, exporters, crypto-adjacent traders, high-volume marketplaces — carry structural exposure to downstream freezes. The mitigations are mundane but effective: know the payer, paper every transaction at the time it happens, avoid accepting third-party payments on another\'s behalf, and keep operating funds distributed rather than concentrated in a single account whose freeze would stop the business. This article is for general information only and is not legal advice.</p>
HTML;
include __DIR__ . '/post-layout.php';
