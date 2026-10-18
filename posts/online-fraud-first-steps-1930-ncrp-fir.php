<?php
$P = [
  'slug'         => 'online-fraud-first-steps-1930-ncrp-fir.php',
  'title'        => 'Online Fraud: The First 48 Hours – Advocate Manish Jha',
  'meta'         => 'Defrauded online? The sequence that saves money: 1930 helpline, the National Cyber Crime Reporting Portal, bank notification under RBI\'s zero-liability rules, and the FIR.',
  'h1'           => 'After an Online Fraud: The First Forty-Eight Hours, Step by Step',
  'crumb'        => 'Online Fraud: First Steps',
  'kicker'       => 'Explainer · Cyber Fraud',
  'sub'          => 'Recovery in cyber fraud is a race against layering: money moves through mule accounts within hours. The victim\'s odds are set less by the eventual trial than by what is done — in parallel — on the first day.',
  'date'         => '2026-10-18',
  'date_display' => '18 October 2026',
  'category'     => 'Cyber & Fraud',
  'lead'         => '<p class="lead">UPI fraud, phishing links, fake investment apps, OTP compromises, marketplace cons — the modus changes monthly, but the aftermath is the same problem everywhere: defrauded money begins moving through a chain of accounts within minutes, and every passing hour erodes what can be frozen. Indian enforcement has built a dedicated interception machinery for exactly this — the 1930 helpline and the National Cyber Crime Reporting Portal — but it works at the speed of the victim\'s reporting. This explainer lays out the first forty-eight hours in order of priority, and the legal follow-through after them.</p>',
  'related'      => ['online-fraud-lawyer-in-delhi.php' => 'Online Fraud', 'cyber-law.php' => 'Cyber Law', 'banking-fraud.php' => 'Banking Fraud', 'legal-notice-replies.php' => 'Legal Notices'],
  'faqs'         => [
    ['Why is 1930 the first call, before even the bank?', 'The helpline feeds the Citizen Financial Cyber Fraud Reporting and Management System, which connects police and the banks in the transaction chain on one platform. A prompt report lets holds be placed on the money as it sits in intermediate accounts — the only stage at which it is realistically recoverable. The bank should be informed immediately after, in writing, but the interception machinery is triggered through 1930 and the portal.'],
    ['Does reporting on the portal replace an FIR?', 'No. The portal complaint initiates tracing and freezing, but the criminal investigation — and several downstream remedies, including release of frozen amounts and insurance or liability claims — are anchored to an FIR. If the local police station hesitates, remember that cyber offences can be reported at any police station (the Zero FIR route) for transfer to the jurisdictional cyber police station, and e-FIR facilities exist for certain categories.'],
    ['What do the RBI\'s zero-liability rules actually say?', 'For unauthorised electronic transactions — where the customer did not authorise the debit at all — RBI\'s customer-protection framework provides zero liability where the fraud results from the bank\'s own deficiency or a third-party breach and the customer notifies the bank within three working days of learning of the transaction; limited liability applies for delayed notification, and the loss burden grows with delay. Transactions the customer was deceived into authorising are treated differently, which is why the facts of how the money moved must be recorded accurately from the start.'],
    ['Is the money ever actually recovered?', 'Yes — when freezing beats layering. Amounts intercepted in the chain are held under orders of the criminal courts, and victims can apply to the court concerned for release of the traced funds against proof that the frozen credits correspond to their debits. The success rate falls steeply with reporting delay, which is the whole case for treating the first day as decisive.'],
  ],
  'sources'      => [
    ['label' => 'National Cyber Crime Reporting Portal — Ministry of Home Affairs', 'url' => 'https://cybercrime.gov.in/'],
    ['label' => 'Reserve Bank of India — official website (customer protection framework on unauthorised electronic transactions)', 'url' => 'https://www.rbi.org.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The first day, in order</h2>
<div class="flow">
  <div class="fstep"><strong>1. Dial 1930 at once.</strong> Report every fraudulent transaction with amounts, timestamps and UTR/transaction IDs. Note the acknowledgement number given.</div>
  <div class="fstep"><strong>2. File on cybercrime.gov.in.</strong> Complete the portal complaint under the financial fraud category, upload statements and screenshots, and preserve the acknowledgement — it is the thread tying together every later proceeding.</div>
  <div class="fstep"><strong>3. Notify the bank in writing.</strong> Email the bank\'s fraud desk and branch the same day: identify the transactions, state they were unauthorised or induced by fraud, seek recall and blocking of beneficiary accounts, and ask for the card/UPI credentials to be reset. The three-working-day clock in the RBI framework makes the date of this notice critical.</div>
  <div class="fstep"><strong>4. Secure the devices and accounts.</strong> Change passwords from a clean device, revoke suspicious UPI mandates and app permissions, and if malware or a screen-sharing app was involved, keep the device as it is — it is evidence.</div>
  <div class="fstep"><strong>5. Lodge the FIR.</strong> Approach the cyber police station of the district — or any police station via Zero FIR — with a written complaint annexing the portal acknowledgement, statements and screenshots.</div>
</div>

<h2>What to preserve, and why</h2>
<table class="law">
  <thead>
    <tr><th>Evidence</th><th>What it later proves</th></tr>
  </thead>
  <tbody>
    <tr><td>Bank statements with UTR numbers</td><td>The debit trail matched against credits frozen in mule accounts — the basis for seeking release of funds</td></tr>
    <tr><td>Call recordings, numbers, chat screenshots</td><td>Inducement and personation; identification of the fraud infrastructure</td></tr>
    <tr><td>Phishing links, APK files, fake app pages</td><td>The IT Act offences and the modus; takedown requests to intermediaries</td></tr>
    <tr><td>Portal and 1930 acknowledgements</td><td>Promptness of reporting — relevant to bank liability and to any insurance claim</td></tr>
    <tr><td>The written bank notification and its timestamp</td><td>Position under the RBI zero/limited-liability framework</td></tr>
  </tbody>
</table>

<h2>The offences in play</h2>
<p>Most online frauds engage cheating under Section 318 of the Bharatiya Nyaya Sanhita, 2023 (formerly Section 420 IPC) and cheating by personation under Section 319 BNS, alongside the Information Technology Act, 2000 — Section 66C for identity theft (misuse of passwords, OTPs and credentials) and Section 66D for cheating by personation using a computer resource. Forged payment pages and documents add the BNS forgery provisions, and organised rackets can attract Section 111 BNS. For the victim, the precise sections matter less at the start than the completeness of the factual record handed to the investigator — sections can be added; lost hours cannot.</p>

<h2>After the first week</h2>
<p>Once tracing reports arrive, the dispute typically moves on three tracks. On the criminal track, the investigation proceeds against the account operators and the racket, and the victim\'s role is to supply the matching documentation promptly. On the recovery track, the victim applies — through counsel, before the magistrate seized of the frozen-account reports — for release of amounts frozen in the chain that correspond to the victim\'s debits. On the banking track, the customer pursues the bank\'s liability determination under the RBI framework where the transactions were unauthorised, escalating through the bank\'s internal grievance machinery to the RBI Integrated Ombudsman if the response is inadequate. A victim who has papered the first forty-eight hours properly walks into all three tracks with the record already made.</p>

<div class="check">
  <p><strong>What not to do:</strong> do not keep engaging the fraudster to "negotiate a refund"; do not pay "release fees" to anyone promising recovery — recovery-agent frauds specifically target recent victims; do not delete chats or reset the compromised device; and do not wait for the bank\'s response before reporting to 1930 and the portal — the tracks run in parallel, not in sequence.</p>
</div>

<div class="note">
  <p><strong>Practice note:</strong> in cyber fraud, the client\'s best lawyer on day one is a complete, timestamped paper trail. Everything that follows — freezing, release applications, bank liability — is built on it. This article is for general information only and is not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
