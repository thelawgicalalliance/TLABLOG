<?php
$P = [
  'slug'         => 'appropriation-of-payments-msme-claims-interest-first.php',
  'title'        => 'Part Payments In MSME Claims – Advocate Manish Jha',
  'meta'         => 'How part payments are appropriated in MSME delayed-payment claims: Contract Act Sections 59-61, the interest-first principle, and computing the Section 16 claim correctly.',
  'h1'           => 'Appropriation Of Part Payments In MSME Claims: Why The Order Of Adjustment Decides The Award',
  'crumb'        => 'MSME — Procedure',
  'kicker'       => 'Practice Explainer · MSMED Act, 2006 · Indian Contract Act, 1872',
  'sub'          => 'When a buyer pays in dribbles against a running account, the legal question is not only how much was paid but what each payment extinguished — principal or interest. The appropriation rules of Sections 59 to 61 of the Contract Act, applied to the mandatory interest of Sections 15 to 17 MSMED, often double or halve the final figure.',
  'date'         => '2026-10-05',
  'date_display' => '5 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Most MSME delayed-payment disputes are not about whether money was paid — buyers usually paid something — but about arithmetic: against which invoice, and against which component, did each part payment count? The Micro, Small and Medium Enterprises Development Act, 2006 makes interest mandatory and compounding; the Indian Contract Act, 1872 supplies the appropriation rules; and the interaction between the two frequently matters more to the final award than any dispute on the merits. A claim computed with payments adjusted first to interest can be several times the figure produced by a principal-first spreadsheet.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'delhi-high-court.php' => 'Delhi High Court', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters'],
  'faqs'         => [
    ['What do Sections 59 to 61 of the Contract Act provide?', 'Section 59: where the debtor indicates that a payment is to be applied to a particular debt, it must be applied accordingly. Section 60: where the debtor gives no indication, the creditor may apply the payment to any lawful debt due, even one that is time-barred. Section 61: where neither party appropriates, payments are applied in order of time. These default rules govern running accounts between buyers and suppliers unless the contract says otherwise.'],
    ['Where does the "interest first" principle come from?', 'It is the settled rule of accounting between debtor and creditor that, in the absence of a contrary agreement or appropriation, a payment on a debt carrying interest is applied first towards the interest due and then towards principal. Applied to MSMED claims — where Section 16 interest accrues by force of statute from the appointed day — unappropriated part payments reduce accumulated interest before touching principal, keeping the principal alive and compounding.'],
    ['Can the buyer defeat this by marking payments "against principal"?', 'A debtor who appropriates at the time of payment — on the instrument, the covering letter or the remittance advice — engages Section 59, and the express appropriation governs that payment. But the marking must be contemporaneous; retrospective appropriation in a reply to the claim is ineffective, and the statutory interest itself cannot be contracted away, given Section 24\'s overriding effect.'],
    ['How should a supplier compute the Samadhaan claim?', 'Invoice-wise: for each invoice, fix the day of acceptance or deemed acceptance, run interest under Section 16 at three times the bank rate with monthly compounding from the appointed day, credit each part payment on its actual date — first to interest then to principal unless validly appropriated otherwise — and carry forward. The computation sheet, with its assumptions stated, should be annexed to the reference; councils and arbitrators adopt a transparent sheet far more readily than a bald total.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — official text (India Code)', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan — delayed payment portal', 'url' => 'https://samadhaan.msme.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why appropriation is the hidden battleground</h2>
<p>Take a supplier owed Rs 10 lakh in principal, with statutory interest accumulating under Section 16 of the MSMED Act. The buyer pays Rs 6 lakh over two years in irregular instalments, never saying what the payments are for. On a principal-first computation, Rs 4 lakh of principal survives, and interest runs on a shrinking base. On the interest-first rule, the instalments are consumed by the accrued interest, the principal remains substantially intact, and compounding continues on the larger base. Same payments, radically different awards — which is why the appropriation question deserves a pleaded answer in every reference and every reply, not an afterthought in rejoinder.</p>

<h2>The hierarchy of rules</h2>
<div class="flow">
<div class="fstep"><strong>Contract first:</strong> an agreed appropriation clause — common in facility and settlement agreements — governs, except that MSMED interest itself cannot be waived or diluted in advance.</div>
<div class="fstep"><strong>Debtor's appropriation (Section 59):</strong> a contemporaneous direction with the payment binds the creditor for that payment.</div>
<div class="fstep"><strong>Creditor's appropriation (Section 60):</strong> absent direction, the supplier may apply the payment to any lawful due — including older or even time-barred invoices.</div>
<div class="fstep"><strong>Default (Section 61) and the interest-first rule:</strong> where no one appropriates, payments apply in order of time, and within an interest-bearing debt, to interest before principal.</div>
</div>

<h2>Interaction with the MSMED scheme</h2>
<p>Three features of the MSMED Act sharpen the ordinary rules. The interest is statutory — it accrues under Section 16 whether or not invoiced, so a buyer cannot argue that interest &ldquo;was never demanded&rdquo; and route payments to principal by default. The interest is compound with monthly rests, so the sequencing of credits changes the base month after month, magnifying small differences. And Section 24 gives Sections 15 to 23 overriding effect, so contractual devices that would launder the statutory interest out of the account — payment-in-full-and-final endorsements extracted as a condition of releasing part payment included — are scrutinised, and councils regularly look past them where financial duress is shown. The supplier&rsquo;s ledger, the buyer&rsquo;s remittance advices and the bank statements together decide most of these fights; the law supplies the sorting rule.</p>

<h2>Drafting and evidence discipline</h2>
<p>Suppliers should issue interest debit notes periodically and reflect the statutory interest in the running ledger, so the interest-first application is visible account entry by account entry rather than reconstructed for litigation. Buyers who intend payments for principal must say so on each remittance, contemporaneously, and keep the proof. Both sides should treat the computation sheet as a pleading: assumptions on acceptance dates, bank rate slabs and appropriation stated on its face, invoice-wise, so that the tribunal&rsquo;s only task is to pick between two transparent methodologies instead of auditing a black box.</p>

<div class="note"><p>Practice pointer: in replies on behalf of buyers, attack the computation before the liability — an unexplained lump-sum claim with no invoice-wise sheet is the commonest curable defect in Samadhaan references, and pointing it out early often shrinks the claim more than any merits defence.</p></div>
<p>This article is for general information only and is not legal advice or a solicitation.</p>
HTML;
include __DIR__ . '/post-layout.php';
