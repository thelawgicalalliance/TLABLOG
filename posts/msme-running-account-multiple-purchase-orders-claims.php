<?php
$P = [
  'slug'         => 'msme-running-account-multiple-purchase-orders-claims.php',
  'title'        => 'MSME Claims on Running Accounts – Advocate Manish Jha',
  'meta'         => 'Framing an MSME delayed-payment claim on a running account or multiple purchase orders: invoice-wise due dates, interest computation and documents.',
  'h1'           => 'Framing MSME Delayed-Payment Claims on Running Accounts and Multiple Purchase Orders',
  'crumb'        => 'MSME Running Accounts',
  'kicker'       => 'Practice Explainer · Commercial Law',
  'sub'          => 'When supplies run on a continuous account or a string of purchase orders, the MSMED Act clock still runs supply by supply, and the claim should be framed accordingly.',
  'date'         => '2026-09-15',
  'date_display' => '15 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Many micro and small enterprises do not supply against one neat contract. Goods move month after month on a running account, or against dozens of purchase orders issued over years, with payments coming in irregularly and being adjusted against the oldest bills. When such a supplier takes its delayed-payment claim to the Micro and Small Enterprises Facilitation Council, the shape of the claim matters. The MSMED Act, 2006 computes liability and interest by reference to each supply, so a consolidated claim must still be built invoice by invoice.</p>',
  'related'      => [
    'business-corporate-law.php' => 'Business & Corporate Law',
    'legal-notice-replies.php'   => 'Legal Notices',
    'civil-law.php'              => 'Civil Law',
  ],
  'faqs'         => [
    ['Can we file one MSEFC reference for dues under many purchase orders?', 'Yes. A supplier may consolidate its outstanding dues against one buyer in a single reference through the MSME Samadhaan portal. What matters is that the claim remains capable of invoice-wise verification: each supply should be traceable to a purchase order or the running account, with its own date of acceptance, due date and interest computation, so the Council can test every component.'],
    ['What is the deemed acceptance rule for goods and services?', 'Under the MSMED scheme, if the buyer does not raise a written objection to the goods or services within fifteen days of delivery or rendering, acceptance is deemed to have taken place. The day of that actual or deemed acceptance anchors the appointed day from which the payment period, capped at forty-five days, is counted for that supply.'],
    ['How are part payments adjusted when interest has accrued?', 'The MSMED scheme treats the statutory interest as part of the amount due, and payments made by the buyer are appropriated first towards the interest that has accrued and only thereafter towards the principal. A supplier preparing its claim chart should therefore apply each receipt against accrued interest before reducing principal, and show that working transparently.'],
    ['Does a quality dispute raised by the buyer defeat the claim?', 'Not automatically. A genuine, contemporaneous written objection within fifteen days can postpone acceptance and affect the computation. Objections raised for the first time after the reference is filed, without any written trail, are typically treated as afterthoughts. The Council examines whether the dispute is real and documented, and set-off claims are tested on their own evidence.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>One buyer, many supplies: why the structure of the claim matters</h2>
<p>Chapter V of the MSMED Act, 2006 is built around individual supplies. Section 15 obliges the buyer to pay for goods supplied or services rendered on or before the date agreed in writing, and where no period is agreed, before the appointed day; in no case may the agreed credit period exceed forty-five days from the day of acceptance or deemed acceptance. Section 16 then attaches compound interest, with monthly rests, at three times the bank rate notified by the Reserve Bank of India, running from the appointed day or the agreed date for each unpaid amount.</p>
<p>Nothing in this scheme changes because the parties maintained a running account. A running account is a bookkeeping convenience; it does not merge dozens of supplies into a single obligation with a single due date. Each consignment delivered, and each tranche of services rendered, generates its own acceptance, its own due date and its own interest stream. A claim before the Facilitation Council under Section 18 should reflect that architecture.</p>

<h2>The clock runs invoice by invoice</h2>
<table class="law">
<tr><th>Event</th><th>Consequence under the MSMED scheme</th></tr>
<tr><td>Goods delivered or services rendered</td><td>The fifteen-day window for the buyer to object in writing opens for that supply.</td></tr>
<tr><td>No written objection within fifteen days</td><td>Acceptance is deemed for that supply; the appointed day is anchored to it.</td></tr>
<tr><td>Credit period agreed in writing</td><td>Payment is due by the agreed date, which cannot exceed forty-five days from acceptance or deemed acceptance.</td></tr>
<tr><td>No agreed period</td><td>Payment is due before the appointed day for that supply.</td></tr>
<tr><td>Payment not made by the due date</td><td>Compound interest with monthly rests at three times the notified bank rate begins to run on that invoice under Section 16.</td></tr>
</table>
<p>The practical consequence is that a buyer may be within time on last month's invoices while being years in default on earlier ones. Interest accrues at different rates of accumulation on different invoices depending on when each fell due. A single global figure, computed on the closing balance of the ledger from one notional date, will almost always be wrong, and it invites avoidable attack.</p>

<h2>The fifteen-day objection window and deemed acceptance</h2>
<p>The deemed-acceptance rule is the quiet engine of most delayed-payment claims. Buyers frequently resist references by asserting, long after the event, that goods were defective or services deficient. The statutory scheme requires the objection to be made in writing within fifteen days of delivery or rendering. Where the record shows delivery challans signed without protest, goods consumed or resold, and no contemporaneous written complaint, councils treat acceptance as complete and the payment clock as having run. The supplier's file should therefore prove two things for every supply: the fact and date of delivery, and the absence of any timely written objection.</p>

<h2>Consolidated claim, invoice-wise chart</h2>
<p>A supplier is not required to file a separate reference for every invoice. A consolidated reference covering the entire outstanding position against a buyer is the norm on the MSME Samadhaan portal. But consolidation at the level of the claim should never mean aggregation at the level of proof. The reference should annex an invoice-wise chart setting out, for each supply: the purchase order or account reference, the invoice number and date, the delivery date, the date of acceptance or deemed acceptance, the due date, the principal outstanding, part payments received with dates, and the interest computed under Section 16 up to a stated cut-off, with the computation continuing until payment.</p>
<div class="note"><p>Part payments deserve particular care. Under the MSMED scheme the buyer remains liable for the statutory interest, and amounts paid are appropriated first towards accrued interest and only then towards principal. A chart that credits every receipt straight against principal understates the claim and misstates the statutory position. Show the appropriation working receipt by receipt.</p></div>

<h2>Documents that carry the reference</h2>
<div class="tiles">
<div class="tile"><h4>Udyam certificate</h4><p>Registration as a micro or small enterprise grounds the claim under Chapter V and should be placed first.</p></div>
<div class="tile"><h4>Purchase orders and invoices</h4><p>Every purchase order or work order, matched to the invoices raised against it, establishes the supplies claimed.</p></div>
<div class="tile"><h4>Delivery challans and acceptance trail</h4><p>Signed challans, transporter receipts, gate entries or completion certificates fix delivery dates and start the fifteen-day window.</p></div>
<div class="tile"><h4>Ledger and correspondence</h4><p>The running-account ledger, reconciliation emails, demand notices and any replies show the balance, part payments and admissions.</p></div>
</div>

<h2>Common buyer defences and how councils approach them</h2>
<p>The defences that recur are quality disputes, set-off and reconciliation objections. On quality, the decisive question is timing and writing: a documented rejection within fifteen days postpones acceptance for that supply; a bare assertion raised after the reference is generally discounted. On set-off, buyers point to debit notes, alleged short supplies or claims under other transactions. Councils examine whether the counter-demand is supported by its own contemporaneous record, and Section 24 gives the delayed-payment provisions overriding effect over inconsistent arrangements. On reconciliation, an invoice-wise chart of the kind described above usually answers the objection before it is made: the buyer must then engage with each line item rather than attack a lump sum.</p>
<p>Framed this way, a running-account claim loses none of its convenience and gains the precision the statute assumes. The Council can conciliate on real numbers, and if the matter proceeds to arbitration under Section 18(3), the tribunal has before it a computation it can test and adopt.</p>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
