<?php
$P = [
  'slug'         => 'treds-msme-receivables-discounting.php',
  'title'        => 'TReDS and MSME Receivables – Advocate Manish Jha',
  'meta'         => 'TReDS lets MSMEs discount invoices drawn on large buyers without recourse. How the platforms work, who must onboard, and how TReDS interacts with the MSMED Act.',
  'h1'           => 'TReDS: Invoice Discounting for MSMEs and the Buyers Obliged to Join',
  'crumb'        => 'TReDS & MSME Payments',
  'kicker'       => 'Explainer · MSME',
  'sub'          => 'The Trade Receivables Discounting System turns an unpaid invoice into early cash for the MSME — and turns buyer delay into a visible, priced event.',
  'date'         => '2026-08-26',
  'date_display' => '26 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Delayed payment is the defining legal problem of the MSME sector, and the Micro, Small and Medium Enterprises Development Act, 2006 attacks it after the fact — with mandatory interest under Sections 15 to 17 and Facilitation Council remedies under Section 18. The Trade Receivables Discounting System, TReDS, attacks it before the fact. On a TReDS platform, an MSME uploads its invoice on a large corporate buyer, the buyer accepts it, and financiers bid to purchase the receivable — paying the MSME upfront, typically without recourse to it. This explainer covers the architecture, the onboarding obligations imposed on large buyers, and how TReDS interacts with the MSMED Act remedies that this chamber regularly handles.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'banking-fraud.php' => 'Banking Disputes'],
  'faqs'         => [
    ['What exactly is TReDS?', 'TReDS is an electronic platform regime authorised by the Reserve Bank of India under the Payment and Settlement Systems Act, 2007 for financing and discounting trade receivables of MSMEs drawn on corporate and other buyers, including government departments and PSUs, through multiple financiers. Operational platforms include RXIL, M1xchange and Invoicemart.'],
    ['Which buyers are required to onboard TReDS?', 'By notifications of the Ministry of MSME under Section 9 of the MSMED Act — first in November 2018 for companies with turnover above ₹500 crore and all Central Public Sector Enterprises, and thereafter extended in November 2024 to companies with turnover above ₹250 crore — such buyers are required to register themselves on a TReDS platform. Onboarding is an obligation of registration; the discounting of any particular invoice still requires the buyer\'s acceptance.'],
    ['Does using TReDS waive the MSME\'s rights under the MSMED Act?', 'No. TReDS is a financing mechanism, not a dispute forum. Where an invoice is not accepted on the platform, or a buyer defaults on a factored obligation, the statutory framework — interest under Section 16 and the Facilitation Council remedy under Section 18 (MSME Samadhaan) — remains available for what is owed to the supplier, and factored receivables are governed by the Factoring Regulation Act, 2011.'],
    ['Is discounting on TReDS with recourse to the MSME?', 'The model is generally without recourse to the supplier once the buyer has accepted the invoice: the financier takes the buyer\'s credit risk. That acceptance is the pivotal act — an accepted, factored invoice becomes very difficult for the buyer to dispute later on merits it chose not to raise at acceptance.'],
  ],
  'sources'      => [
    ['label' => 'Ministry of Micro, Small and Medium Enterprises — TReDS notifications', 'url' => 'https://msme.gov.in/'],
    ['label' => 'Reserve Bank of India — TReDS guidelines', 'url' => 'https://www.rbi.org.in/'],
    ['label' => 'MSME Samadhaan — Delayed Payment Monitoring Portal', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>How a TReDS transaction runs</h2>
<div class="flow">
  <div class="fstep"><strong>Onboarding.</strong> The MSME seller, the buyer and financiers (banks, NBFC-factors) register on a platform after KYC.</div>
  <div class="fstep"><strong>Upload.</strong> The seller (or, in reverse factoring, the buyer) uploads the invoice as a factoring unit.</div>
  <div class="fstep"><strong>Acceptance.</strong> The buyer accepts the invoice on the platform — the legally pivotal step.</div>
  <div class="fstep"><strong>Bidding.</strong> Financiers bid discount rates; the seller accepts the best bid.</div>
  <div class="fstep"><strong>Payment.</strong> The financier pays the seller upfront; on the due date the buyer pays the financier through the platform's settlement mechanism.</div>
</div>
<p>For the MSME, the commercial effect is immediate liquidity at a rate priced on the buyer's credit, not its own. For the buyer, the platform converts informal delay into a formal, dated obligation to a regulated financier.</p>

<h2>The onboarding mandate</h2>
<table class="law">
  <tr><th>Instrument</th><th>Obligation</th></tr>
  <tr><td>Notification of November 2018 (Ministry of MSME, under Section 9 MSMED Act)</td><td>Companies with turnover above ₹500 crore, and all CPSEs, to get themselves onboarded on a TReDS platform</td></tr>
  <tr><td>Notification of November 2024</td><td>Threshold extended to companies with turnover above ₹250 crore, with a compliance window for registration</td></tr>
  <tr><td>Companies Act framework</td><td>Companies obtaining supplies from micro and small enterprises file half-yearly returns of outstanding dues with reasons for delay (MSME Form-1 regime), making payment behaviour reportable</td></tr>
</table>
<p>The mandate is registration; it does not compel a buyer to accept any given invoice for discounting. But a registered buyer that routinely declines acceptance while sitting on supplies invites the inference, in later Section 18 proceedings, that the delay was strategy rather than dispute.</p>

<h2>TReDS and the MSMED Act: parallel tracks</h2>
<div class="check">
<ul>
  <li><strong>Section 15:</strong> the buyer must pay within the agreed period, which cannot exceed 45 days from acceptance or deemed acceptance — TReDS does not extend this.</li>
  <li><strong>Section 16:</strong> delayed payment attracts compound interest with monthly rests at three times the bank rate, by force of statute, regardless of contract.</li>
  <li><strong>Section 18:</strong> the supplier can take an unpaid claim to the Micro and Small Enterprises Facilitation Council — conciliation first, then arbitration — through the MSME Samadhaan portal.</li>
  <li><strong>Factored invoices:</strong> once a financier has purchased the receivable, recovery of that receivable is the financier's cause; the supplier's statutory remedies operate for what remains owed to it.</li>
</ul>
</div>

<h2>Disputes that actually arise</h2>
<p>Three patterns dominate. First, buyers who refuse platform acceptance citing quality disputes raised for the first time after months of silence — the timing of the objection, against the 15-day acceptance architecture of Section 2(b) of the MSMED Act, becomes the battleground. Second, buyers who accept and then default against the financier, generating proceedings under the factoring and payment-systems framework in which the supplier is a witness more than a party. Third, suppliers who discount some invoices and litigate others: nothing forbids it, but pleadings before the Facilitation Council must carefully separate the discounted receivables from the claim.</p>

<div class="note">
<p><strong>Practice note:</strong> For MSME clients, the platform record is evidentiary gold. Uploads, acceptances, rejections and their stated reasons are timestamped and admissible, and they neutralise the usual defence that invoices were never received or always disputed. Sellers should upload every eligible invoice even when discounting is not intended — the buyer's response, either way, builds the record that wins the Section 18 reference.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
