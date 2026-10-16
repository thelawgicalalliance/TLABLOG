<?php
$P = [
  'slug'         => 'gst-paper-trail-msme-delayed-payment-claims.php',
  'title'        => 'The GST Trail in MSME Claims – Advocate Manish Jha',
  'meta'         => 'E-invoices, e-way bills and GSTR filings can prove supply, delivery and acceptance in MSME delayed-payment claims. Using the GST trail before the MSEFC.',
  'h1'           => 'Proving Supply Without a Signed Delivery Challan: The GST Paper Trail in MSME Delayed-Payment Claims',
  'crumb'        => 'MSME — Evidence',
  'kicker'       => 'Practice Explainer · MSMED Act',
  'sub'          => 'Buyers resisting a Samadhaan claim usually dispute delivery or acceptance. The supplier\'s best answer often sits in the GST system the buyer itself operates — e-invoices it accepted, e-way bills that tracked the goods, and input tax credit it claimed on the very invoices it now disputes.',
  'date'         => '2026-10-16',
  'date_display' => '16 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Delayed-payment proceedings under the MSMED Act, 2006 are document-driven: the supplier must establish supply of goods or services, the date of acceptance or deemed acceptance, and the amount outstanding. Twenty years ago that meant purchase orders, signed challans and ledger confirmations — documents the buyer controls and can decline to sign. Today, a parallel evidentiary record exists that neither side can quietly rewrite: the GST ecosystem. E-invoices carry government-issued reference numbers; e-way bills record the movement of goods; and the buyer\'s own returns show whether it claimed input tax credit on the disputed invoices. Used properly, this trail answers the standard defences before the Facilitation Council.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate Law', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'banking-fraud.php' => 'Banking & Financial Disputes'],
  'faqs'         => [
    ['Why does GST documentation matter in an MSEFC claim?', 'Because it is third-party-verifiable. An e-invoice bears an Invoice Reference Number generated through the government portal; an e-way bill records consignor, consignee, vehicle and route; the buyer\'s GSTR-2B reflects the invoice and its ITC claim. A buyer who claimed credit on an invoice has difficulty telling the Council the supply never happened.'],
    ['Does claiming input tax credit amount to admitting the debt?', 'It is strong corroboration rather than a conclusive admission. ITC on an invoice is consistent with receipt of the goods or services, and GST law itself requires reversal of credit where the supplier is not paid within 180 days — so continued retention of credit sits awkwardly with a claim that nothing is payable. Quality disputes raised for the first time after months of silence lose force against this record.'],
    ['What should a supplier compile before filing on Samadhaan?', 'Udyam registration; purchase orders or the correspondence constituting the contract; tax invoices with IRNs; e-way bills for goods; proof of delivery or performance; the ledger of account; GSTR-1 extracts showing the invoices were reported; and the demand notice. The claim is only as strong as the reconciliation between these documents.'],
    ['Can the buyer rely on the GST record too?', 'Yes, and well-advised buyers do: debit notes and credit notes reported in the GST system, invoices the supplier never uploaded, or mismatches between claimed supplies and e-way bill data all support a genuine defence. The GST trail is neutral — it rewards whichever side\'s commercial story matches the contemporaneous record.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 (India Code)', 'url' => 'https://www.indiacode.nic.in/handle/123456789/2013'],
    ['label' => 'MSME Samadhaan — Delayed Payment Monitoring System (Ministry of MSME)', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>What the supplier must prove — and where the trail fits</h2>
<p>Under Sections 15 to 17 of the MSMED Act, the buyer\'s liability to pay statutory compound interest is triggered by failure to pay by the appointed day — at most forty-five days from the day of acceptance or deemed acceptance. Each element has a GST-era counterpart. The fact of supply is corroborated by the e-invoice and its IRN, generated before or at supply for covered businesses. Delivery of goods is corroborated by the e-way bill, which records the consignment\'s journey. The absence of any objection within fifteen days — which converts delivery into deemed acceptance — is corroborated by the buyer\'s silence in the same period during which it reported the invoice in its returns and, typically, claimed input tax credit. The ledger and bank statements then establish what remains unpaid.</p>

<h2>Meeting the standard defences</h2>
<div class="compare">
<div class="col old"><strong>The defence says</strong><p>"Goods were never delivered." "We rejected the supplies for quality." "There was no concluded contract." "The invoices are inflated or fabricated."</p></div>
<div class="arrow">→</div>
<div class="col new"><strong>The trail answers</strong><p>E-way bills show delivery to the buyer\'s premises. No debit note, rejection memo or GST credit note exists from the relevant period. The buyer reported the invoices in GSTR-2B and claimed ITC. The IRN timestamps make later fabrication implausible.</p></div>
</div>
<p>None of this is magic: a Council still weighs the whole record, and genuine quality disputes supported by contemporaneous debit notes remain a real defence. What the GST trail removes is the cheap defence — the bare denial of supply or receipt, made for the first time in reply to a Samadhaan reference years after the buyer\'s own tax filings told the opposite story.</p>

<h2>The 180-day ITC reversal point</h2>
<p>One feature of GST law deserves particular attention in delayed-payment disputes. A registered buyer who fails to pay the supplier\'s invoice within 180 days of its date is required to reverse the input tax credit availed on it, with the credit restored upon payment. A buyer who has quietly retained credit beyond that period while refusing payment faces an uncomfortable choice of narratives: either the supply occurred (supporting the claim) or the credit was wrongly retained (a tax problem of its own). Suppliers\' counsel should seek disclosure on this point in the Council proceedings; buyers\' counsel should ensure the client\'s GST treatment and its litigation stance tell the same story.</p>

<h2>Practical assembly of the claim file</h2>
<p>Reconcile before you file. The Samadhaan application should present a table mapping each invoice to its IRN, e-way bill number, delivery date, deemed-acceptance date, due date and interest computation under Section 16 — compound interest with monthly rests at three times the bank rate notified by the RBI. Attach the Udyam certificate and confirm the registration predates the supplies, since the Act\'s delayed-payment remedy attaches to supplies made by a registered enterprise. Where services rather than goods are involved, substitute performance records — completion certificates, time sheets, acceptance emails — for e-way bills, with the e-invoice and returns trail doing the same corroborative work. A claim assembled this way frequently settles at the conciliation stage under Section 18(2), because the buyer\'s advisers can read the record as well as the Council can.</p>

<div class="note">
<p>This is a general explainer on evidence in proceedings under the Micro, Small and Medium Enterprises Development Act, 2006 and is not legal or tax advice. GST compliance questions, including input tax credit reversal, have consequences beyond the payment dispute and should be assessed with a tax adviser.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
