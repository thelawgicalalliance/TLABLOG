<?php
$P = [
  'slug'         => 'enforcing-guarantees-suits-defences.php',
  'title'        => 'Enforcing Guarantees in Court – Advocate Manish Jha',
  'meta'         => 'How personal and corporate guarantees are enforced through suits in Delhi — co-extensive liability, the surety\'s statutory defences, and limitation traps.',
  'h1'           => 'Enforcing Personal and Corporate Guarantees: Suits, Defences and Limitation',
  'crumb'        => 'Enforcing Guarantees',
  'kicker'       => 'Practice Guide · 4 September 2026',
  'sub'          => 'A guarantee is only as strong as its drafting and its invocation — and a surety has more defences than creditors assume, but fewer than sureties hope.',
  'date'         => '2026-09-04',
  'date_display' => '4 September 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Almost every credit transaction in commerce — bank facilities, supplier credit, lease commitments, franchise arrangements — is propped up by a guarantee: a promoter\'s personal guarantee, a group company\'s corporate guarantee, or a director\'s continuing guarantee. When the principal debtor defaults, the guarantee becomes the creditor\'s most direct route to recovery. This article explains how guarantees are enforced through civil and commercial suits in Delhi, the defences genuinely available to sureties under the Indian Contract Act, 1872, and the limitation traps on both sides.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'banking-fraud.php' => 'Banking Disputes', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['Must a creditor sue the borrower before suing the guarantor?', 'No. Section 128 of the Contract Act makes the surety\'s liability co-extensive with the principal debtor\'s, and it is settled that the creditor may proceed against the surety without first exhausting remedies against the borrower. A clause making the guarantor liable "as principal debtor" reinforces this, though even without it the creditor\'s choice of defendant is free.'],
    ['What is the limitation period for a suit on a guarantee?', 'Generally three years, but the starting point depends on the guarantee\'s terms. Where liability arises on demand, time typically runs from the demand and its refusal or non-compliance; in a continuing guarantee securing a running account, each transaction and acknowledgment affects the computation. Careful drafting of the invocation notice therefore shapes limitation itself.'],
    ['When is a surety discharged?', 'Principally where the creditor, without the surety\'s consent, varies the terms of the contract with the principal debtor (Section 133), releases the principal debtor (Section 134), or compounds with, gives time to, or agrees not to sue the principal debtor (Section 135) — and where the creditor loses or parts with security held for the debt (Section 141), to the extent of its value. Mere forbearance to sue, however, does not discharge the surety (Section 137).'],
    ['Can a guarantee be enforced as a summary suit?', 'Yes. Suits on written guarantees for liquidated sums fall within Order XXXVII CPC, and in qualifying commercial disputes the Commercial Courts regime with summary judgment under Order XIII-A offers an even faster track where the surety has no real prospect of defending.'],
  ],
  'sources'      => [],
];
$BODY = <<<'HTML'
<h2>The anatomy of enforcement</h2>
<p>A contract of guarantee under Section 126 of the Contract Act involves three parties — creditor, principal debtor and surety — and enforcement begins long before the plaint. The creditor establishes the default, invokes the guarantee strictly in accordance with its terms, and demands payment. The invocation letter is the hinge document: courts scrutinise whether the demand matched the contractual mechanism, whether it quantified the liability, and whether it was served on the surety as the guarantee required. A defective invocation can postpone or complicate an otherwise unanswerable claim.</p>

<h2>Choosing the suit</h2>
<div class="tiles">
  <div class="tile"><strong>Commercial suit.</strong> Where the guarantee arises from a commercial transaction and the specified value threshold is met, the Commercial Courts Act applies — with its strict pleading, disclosure and timeline discipline, and access to summary judgment.</div>
  <div class="tile"><strong>Summary suit under Order XXXVII.</strong> For written guarantees of liquidated amounts, the summary procedure puts the surety to leave to defend; a surety without a triable defence faces a decree without full trial.</div>
  <div class="tile"><strong>Ordinary recovery suit.</strong> Where the amounts need accounting or the transaction is layered, the ordinary track allows fuller pleading and evidence.</div>
  <div class="tile"><strong>Alongside other remedies.</strong> A suit against the surety can co-exist with arbitration against the borrower, SARFAESI measures over security, or insolvency proceedings — subject to avoiding double recovery of the same amount.</div>
</div>

<h2>The surety's real defences</h2>
<table class="law">
  <tr><th>Defence</th><th>Provision</th><th>What it requires</th></tr>
  <tr><td>Variance in the principal contract</td><td>Section 133</td><td>A material alteration without the surety's consent, made after the guarantee</td></tr>
  <tr><td>Release of principal debtor</td><td>Section 134</td><td>Creditor's act or omission that discharges the borrower discharges the surety</td></tr>
  <tr><td>Composition or time given to debtor</td><td>Section 135</td><td>A binding arrangement with the borrower without the surety's assent</td></tr>
  <tr><td>Loss of security</td><td>Section 141</td><td>Creditor loses or parts with security; discharge to the extent of its value</td></tr>
  <tr><td>No valid invocation / no demand</td><td>Contract terms</td><td>Demand-based guarantees require the contractual trigger to be pulled correctly</td></tr>
  <tr><td>Fraud or misrepresentation in obtaining the guarantee</td><td>Sections 142-143</td><td>Guarantee obtained by misrepresentation or concealment by the creditor</td></tr>
</table>
<p>Equally important are the defences that fail. Mere forbearance to sue the borrower does not discharge the surety. The borrower's insolvency does not extinguish the surety's liability. And modern guarantee drafting routinely contains consent-in-advance clauses by which the surety agrees to variations and indulgences — clauses that substantially narrow Sections 133 and 135 in practice, and which courts have generally enforced according to their terms.</p>

<div class="note"><p>Continuing guarantees deserve special attention. Under Section 130 a continuing guarantee can be revoked as to future transactions by notice; the surety remains bound for advances already made. Sureties exiting a business relationship should serve a written revocation and preserve proof — silence keeps the exposure alive as the account keeps running.</p></div>

<h2>The surety's rights after payment</h2>
<p>A surety who pays steps into the creditor's shoes: subrogation to the creditor's rights and securities (Section 140), a right of indemnity against the principal debtor (Section 145), and contribution from co-sureties (Sections 146-147). These rights convert the guarantee suit's aftermath into recovery litigation of its own, and a paying surety should obtain from the creditor an assignment of documents and securities to make subrogation effective.</p>

<h2>Practical checklist for creditors</h2>
<div class="check">
  <p>Invoke strictly per the guarantee — mechanism, addressee, quantification.</p>
  <p>Plead the guarantee, default and demand with documents; annex the account statement.</p>
  <p>Track limitation from the demand, and use acknowledgments to keep claims alive.</p>
  <p>Preserve securities; releasing them mid-stream discharges the surety pro tanto.</p>
  <p>Consider summary and commercial tracks before defaulting to an ordinary suit.</p>
</div>
<p>This article is general information about guarantee enforcement in Delhi courts and is not legal advice in any individual matter.</p>
HTML;
include __DIR__ . '/post-layout.php';
