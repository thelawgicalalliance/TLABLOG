<?php
$P = [
  'slug'         => 'rfa-tenant-at-sufferance-mesne-profits-delhi.php',
  'title'        => 'Holding Over Has a Price – Advocate Manish Jha',
  'meta'         => 'Delhi High Court dismisses a tenant\'s RFA: one co-owner could terminate and sue, and holding over after lease expiry attracted mesne profits.',
  'h1'           => 'Tenant at Sufferance: RFA Dismissed Where Possession Outlived the Lease by Three Years',
  'crumb'        => 'RFA — Mesne Profits',
  'kicker'       => 'Delhi High Court · 21 September 2026',
  'sub'          => 'In U E Trade Corporation v. Dr Bhupesh Mangla, letters offering to vacate could not substitute for actual delivery of possession — and the rent meter kept running.',
  'date'         => '2026-09-30',
  'date_display' => '30 September 2026',
  'category'     => 'Civil & Property',
  'lead'         => '<p class="lead">A tenant who stays past the lease pays for the stay — at market rates, not the contractual rent. In <strong>U E Trade Corporation (India) Pvt Ltd v. Dr Bhupesh Mangla</strong> (RFA 566/2016, pronounced 21 September 2026), Justice Mini Pushkarna of the Delhi High Court dismissed a corporate tenant\'s first appeal against a decree for arrears and mesne profits, holding that a co-owner and court-appointed receiver could validly terminate the lease and sue alone; that correspondence offering to vacate did not amount to delivery of possession; and that the tenant, having remained in occupation from the lease\'s expiry in November 2006 until keys were handed over in court on 3 February 2010, was a tenant at sufferance liable for mesne profits throughout.</p>',
  'related'      => ['property-disputes.php' => 'Property Disputes', 'civil-law.php' => 'Civil Law', 'business-corporate-law.php' => 'Business & Corporate Law', 'delhi-high-court.php' => 'Delhi High Court'],
  'faqs'         => [
    ['Can one co-owner alone terminate a lease and sue the tenant?', 'Yes. A co-owner can institute eviction and recovery proceedings on his own behalf and as agent of the other co-owners, whose consent is presumed unless they actively oppose the suit. A tenant cannot resist a co-owner-landlord\'s claim by pointing to the existence of other co-owners who have raised no objection.'],
    ['What is a tenant at sufferance and why does the label matter?', 'A tenant whose lease has expired but who continues in possession without the landlord\'s consent holds as a tenant at sufferance — a bare possession without right. The label matters financially: such an occupant owes mesne profits, measured by the market letting value of the premises, which usually exceeds the old contractual rent and rises over time.'],
    ['Does writing to the landlord offering to vacate stop mesne profits?', 'No. Liability ends with actual delivery of vacant and peaceful possession, not with expressions of intent. In this case the tenant\'s letters claiming vacation from November 2006 failed; the court found possession was delivered only when the keys were formally handed over in court on 3 February 2010, and mesne profits ran until then.'],
    ['Who must prove the date of vacation?', 'The tenant who asserts it. Vacation and the premises lying vacant are facts within the tenant\'s special knowledge, so the evidentiary burden lies on the tenant to prove them affirmatively — through delivery of keys, joint inspection, or the landlord\'s acknowledgment — and mere correspondence does not discharge it.'],
  ],
  'sources'      => [ ['label' => 'U E Trade Corporation (India) Pvt Ltd v. Dr Bhupesh Mangla — Delhi High Court (Indian Kanoon)', 'url' => 'https://indiankanoon.org/doc/40911070/'] ],
];
$BODY = <<<'HTML'
<h2>The lease and the default</h2>
<p>The respondent — a co-owner of a Delhi flat and its court-appointed receiver in a pending partition suit — let the flat to the appellant company for three years, November 2003 to November 2006, at ₹20,125 per month. After the initial deposits, the rent stopped. The tenant\'s justification was the partition suit itself: with several co-owners at war, it professed uncertainty about whom to pay. The landlord terminated the lease by notice dated 17 April 2006 for non-payment, and sued.</p>
<p>The tenant\'s defence ran on two rails: the terminating co-owner lacked authority to act without the other co-owners\' consent, and the premises had in any event been vacated at the lease\'s natural expiry in November 2006. The trial court rejected both and decreed arrears, mesne profits at escalating rates (₹51,000 to ₹80,125 per month across the holdover period), interest and costs. The first appeal under Section 96 CPC challenged all of it.</p>

<h2>The three holdings</h2>
<div class="flow">
  <div class="fstep"><strong>One co-owner suffices.</strong> A co-owner may sue for eviction and recovery "on his own behalf in his own right and as an agent of the other co-owners"; consent of the rest is presumed absent active opposition. The receiver appointment reinforced, rather than undercut, his authority.</div>
  <div class="fstep"><strong>Termination was valid.</strong> Non-payment breached an express condition, and the notice of 17 April 2006 validly determined the lease under Section 111(g) of the Transfer of Property Act.</div>
  <div class="fstep"><strong>Possession ended in 2010, not 2006.</strong> Despite letters asserting vacation on 2 November 2006, the court found vacant and peaceful possession was delivered only on 3 February 2010, when the keys changed hands in court. For the intervening thirty-nine months the appellant held as a tenant at sufferance and owed mesne profits.</div>
</div>

<h2>Uncertain whom to pay? That is what deposit remedies are for</h2>
<p>The tenant\'s core equity — genuine confusion amid a partition war — had a lawful outlet it never used: depositing rent, whether with the receiver, in court, or under the statutory deposit mechanism, and interpleading where necessary. A tenant who neither pays nor deposits, but simply stays, converts a payment dispute into a possession liability. The judgment is a textbook consequence.</p>
<table class="law">
  <tr><th>Tenant\'s position</th><th>Right course</th><th>Wrong course (this case)</th></tr>
  <tr><td>Rival claimants to rent</td><td>Deposit in court / with receiver; seek directions</td><td>Stop paying altogether</td></tr>
  <tr><td>Lease expiring</td><td>Deliver possession against acknowledgment; record it</td><td>Write letters, retain keys</td></tr>
  <tr><td>Disputed vacation date</td><td>Joint inspection, key handover in court</td><td>Assert vacation without proof</td></tr>
</table>

<h2>Takeaways</h2>
<div class="check">
  <p><strong>For commercial tenants:</strong> possession is a fact proved by delivery, not by correspondence. On expiry, hand over keys against a signed receipt or in court, and photograph the vacated premises. Every month of ambiguity is billed at market rates.</p>
  <p><strong>For landlords and receivers:</strong> claim mesne profits with escalation and interest — Delhi courts grant them, and over multi-year holdovers they dwarf the contractual rent. A co-ownership dispute in the background is no bar to one co-owner acting.</p>
</div>
<div class="note"><p>Mesne profits are compensation for wrongful occupation, assessed on the property\'s letting value with periodic enhancement. In long litigations, the final figure routinely exceeds what timely surrender would have cost the tenant several times over.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
