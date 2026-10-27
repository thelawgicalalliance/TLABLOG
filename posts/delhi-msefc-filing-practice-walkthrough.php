<?php
$P = [
  'slug'         => 'delhi-msefc-filing-practice-walkthrough.php',
  'title'        => 'MSEFC Claim Filing in Delhi – Advocate Manish Jha',
  'meta'         => 'Stage-by-stage guide to a delayed-payment claim before the Delhi MSEFC: eligibility, interest under the MSMED Act, Samadhaan filing, arbitration and award.',
  'h1'           => 'Pursuing a delayed-payment claim before the Delhi MSEFC: a practice walkthrough',
  'crumb'        => 'MSEFC filing walkthrough',
  'kicker'       => 'Explainer · MSME Recovery',
  'sub'          => 'A stage-by-stage look at how a Delhi supplier takes a delayed-payment claim from Udyam verification and interest computation through Samadhaan filing, conciliation, arbitration and execution of the award.',
  'date'         => '2026-10-27',
  'date_display' => '27 October 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">The Micro, Small and Medium Enterprises Development Act, 2006 gives micro and small suppliers a dedicated statutory route for recovering delayed payments, with interest that accrues by operation of law. This explainer walks through the claim in the order a Delhi supplier actually encounters it — the preconditions, the computation, the MSME Samadhaan filing, the stages before the Facilitation Council, the award and its execution.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices', 'nclt-lawyer-in-delhi.php' => 'NCLT Matters', 'blog.php' => 'Blog'],
  'faqs'         => [
    ['Can a medium enterprise file a delayed-payment reference before the MSEFC?', 'No. The delayed-payment chapter of the MSMED Act protects a “supplier”, which the Act defines with reference to micro and small enterprises. A medium enterprise may hold Udyam registration for other purposes, but the Sections 15 to 18 recovery mechanism is available to micro and small suppliers alone.'],
    ['Is a written contract necessary before approaching the Council?', 'No. Where there is a written agreement, payment must be made by the agreed date, which cannot exceed forty-five days from the day of acceptance or deemed acceptance. Where there is no agreed date, payment falls due before the appointed day fixed by the Act. Invoices, purchase orders and delivery records can establish the supply.'],
    ['How long does an MSEFC reference take?', 'Section 18(5) directs that every reference be decided within ninety days from the date of making it. In practice the conciliation and arbitration stages, service on the buyer and exchange of pleadings can extend the timeline, but the ninety-day mark remains the statutory objective the Council works towards.'],
    ['Can the buyer simply appeal against the award?', 'There is no appeal as such. The buyer may apply to set aside the award, but Section 19 of the MSMED Act bars any court from entertaining that application unless seventy-five per cent of the awarded amount is first deposited, part of which can be released to the supplier during the challenge.'],
  ],
  'sources'      => [
    ['label' => 'Micro, Small and Medium Enterprises Development Act, 2006 — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'MSME Samadhaan — Delayed Payment Monitoring Portal', 'url' => 'https://samadhaan.msme.gov.in/'],
    ['label' => 'District Courts of Delhi', 'url' => 'https://delhidistrictcourts.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Who may invoke the Council, and for what</h2>
<p>The claimant must be a <strong>supplier</strong> as the MSMED Act defines the term — a micro or small enterprise that has registered itself, which today means holding a <strong>Udyam registration</strong>. The claim must arise from goods actually supplied or services actually rendered to a buyer, evidenced in the ordinary course by purchase orders, invoices, delivery challans or completion records. Medium enterprises fall outside the delayed-payment chapter, so the first question in every brief is the enterprise classification on the Udyam certificate.</p>
<p>Acceptance matters. Where the buyer raises no written objection to the goods or services within fifteen days of delivery or rendering, the Act treats them as accepted on the day of actual delivery or rendering — the concept of <em>deemed acceptance</em>. A pre-filing demand notice is often sent and its drafting is discussed in a separate explainer on this site. Territorial jurisdiction is straightforward and is covered elsewhere: the Facilitation Council of the place where the supplier is located can entertain the reference even against a buyer situated anywhere in India.</p>

<h2>Computing the claim: Sections 15 to 17</h2>
<p>Section 15 fixes the due date. Where the parties agreed on a payment date in writing, that date governs, but it cannot exceed <strong>forty-five days</strong> from the day of acceptance or deemed acceptance. Where nothing was agreed, payment must be made before the <em>appointed day</em>, which the Act pegs to the expiry of fifteen days from acceptance or deemed acceptance.</p>
<p>Section 16 then supplies the teeth. From the appointed day or the agreed date, the buyer is liable to pay <strong>compound interest with monthly rests at three times the bank rate notified by the Reserve Bank of India</strong>, and this liability arises notwithstanding anything in the agreement or in any other law. Section 17 makes the buyer liable for the principal together with this interest, and it is this composite amount that forms the subject of the reference. A carefully prepared computation sheet — invoice-wise principal, due date, periodic bank rates and month-by-month compounding — should accompany the claim, because the Council and any executing court will work from it. The Act also provides that interest paid or payable under it is not deductible for income-tax purposes, a point buyers often overlook when weighing settlement.</p>

<h2>Filing on the MSME Samadhaan portal</h2>
<p>References are lodged online on the MSME Samadhaan portal using the Udyam number and registered credentials. The application identifies the buyer, itemises the unpaid invoices and states the principal and interest claimed. Uploads are size-limited, so documents should be legible, consolidated and indexed.</p>
<div class="check"><ul>
<li>Udyam registration certificate of the supplier enterprise</li>
<li>Invoices forming the claim, invoice-wise and dated</li>
<li>Purchase orders, work orders or the written agreement, if any</li>
<li>Proof of delivery or of services rendered — challans, receipts, completion certificates, e-mail confirmations</li>
<li>Ledger or statement of account showing part payments and the running balance</li>
<li>Interest computation sheet under Sections 15 and 16</li>
<li>Any demand correspondence and the buyer’s replies</li>
</ul></div>

<h2>From filing to award: the statutory path</h2>
<div class="flow">
<div class="fstep"><h4>1. Application</h4><p>Online reference on MSME Samadhaan with Udyam details, invoices and the computation.</p></div>
<div class="fstep"><h4>2. Registration</h4><p>The application travels to the jurisdictional Facilitation Council and is registered as a reference; the buyer is put on notice.</p></div>
<div class="fstep"><h4>3. Conciliation</h4><p>Section 18(2): the Council conducts conciliation itself or refers the parties to an institution for the purpose.</p></div>
<div class="fstep"><h4>4. Arbitration</h4><p>Section 18(3): if conciliation fails, the dispute is taken up as arbitration, as if under an arbitration agreement.</p></div>
<div class="fstep"><h4>5. Award</h4><p>A reasoned award on principal and Section 16 interest; Section 18(5) sets a ninety-day aim for decision.</p></div>
<div class="fstep"><h4>6. Execution</h4><p>The award is enforced like any arbitral award; a challenge requires the Section 19 pre-deposit.</p></div>
</div>

<h2>Conciliation, then arbitration</h2>
<p>Conciliation under Section 18(2) is a mandatory first stage and has been examined in detail in a separate piece; in short, the Council explores settlement and records either a settlement or the failure of conciliation. On failure, Section 18(3) requires the Council either to take up the dispute for arbitration itself or to refer it to an institution providing alternate dispute resolution services, and the Arbitration and Conciliation Act, 1996 then applies as if the arbitration were under an agreement referred to in Section 7(1) of that Act. Section 18(5) directs that every reference be decided within ninety days of being made — an objective rather than a guarantee, but one counsel can legitimately press at each hearing.</p>

<h2>Hearings, written submissions and the award</h2>
<p>Once arbitration commences, the matter proceeds much like an ordinary arbitral reference: a statement of claim with documents, the buyer’s reply and any counter-contentions, a rejoinder where permitted, and oral hearings. Written submissions should track the statutory scheme — supply, acceptance or deemed acceptance, due date under Section 15, computation under Section 16 — because the Council’s award must rest on those findings. Defences commonly raised include quality disputes and alleged non-delivery; contemporaneous records of acceptance are therefore the heart of the supplier’s file. The award, when made, states the principal, the interest to the date of the award and the continuing interest thereafter.</p>

<h2>Execution and the buyer’s challenge</h2>
<p>The award is enforceable in the same manner as an arbitral award, through execution before the competent court once it attains finality. If the buyer applies to set it aside, Section 19 bars the court from entertaining the application unless seventy-five per cent of the awarded amount is deposited, and the court may direct payment of a reasonable portion of that deposit to the supplier pending the challenge — a subject treated in a companion explainer. The overriding effect given to Sections 15 to 23 by Section 24 means contrary contractual stipulations do not dilute these rights.</p>

<div class="note"><p>The claims that move fastest before the Council are the ones filed with a clean paper trail: a current Udyam certificate, invoice-wise computation, proof of delivery matched to each invoice and a ledger that reconciles part payments. Time spent assembling that bundle before filing on Samadhaan is rarely wasted.</p></div>
HTML;
include __DIR__ . '/post-layout.php';
