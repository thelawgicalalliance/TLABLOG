<?php
$P = [
  'slug'         => 'exemption-from-surrender-criminal-slp.php',
  'title'        => 'Exemption from Surrender in SLPs – Advocate Manish Jha',
  'meta'         => 'Criminal SLPs against conviction require the petitioner to surrender or seek exemption under Order XXII of the Supreme Court Rules, 2013. The practice explained.',
  'h1'           => 'Surrender and Exemption in Criminal SLPs: The Order XXII Discipline',
  'crumb'        => 'SLP: Surrender & Exemption',
  'kicker'       => 'Explainer · Supreme Court Practice',
  'sub'          => 'A convicted petitioner cannot ordinarily ask the Supreme Court for discretion while evading the sentence — unless the Court itself excuses surrender first.',
  'date'         => '2026-08-26',
  'date_display' => '26 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">Article 136 relief is discretionary, and the Supreme Court has long insisted that a person sentenced to imprisonment who invokes that discretion must first submit to the law — by surrendering to custody — or obtain an order exempting him from doing so. The requirement is codified in Order XXII of the Supreme Court Rules, 2013: a petition against conviction and sentence must state whether the petitioner has surrendered, and if he has not, it will not be listed unless an application for exemption from surrender is filed and granted. This explainer covers how the rule operates, how exemption applications are framed, and the connected practice of seeking bail and suspension of sentence from the Supreme Court.</p>',
  'related'      => ['criminal-law.php' => 'Criminal Law', 'bail-lawyer-in-delhi.php' => 'Bail Matters', 'delhi-high-court.php' => 'Delhi High Court', 'bns-converter.php' => 'BNS Converter'],
  'faqs'         => [
    ['When does the surrender requirement apply?', 'When the SLP challenges a conviction with a sentence of imprisonment — typically after the High Court has dismissed the appeal or revision, or has reversed an acquittal — and the petitioner is not already in custody. It does not apply to petitions against orders where no sentence of imprisonment is operating against the petitioner, such as bail rejections or interlocutory orders.'],
    ['What happens if the petitioner neither surrenders nor obtains exemption?', 'The Registry treats the petition as not in order for listing. In practice the petition is not posted before the Court until the surrender proof is filed or an exemption application is moved and allowed; a petition pursued in defiance of the requirement risks outright dismissal on that ground alone.'],
    ['On what grounds is exemption from surrender granted?', 'The discretion is the Court\'s, exercised on the facts: serious medical conditions of the petitioner, advanced age or infirmity, the shortness of the sentence remaining, the fact that the petitioner remained on bail throughout trial and appeal without misuse, and the arguable nature of the challenge are the recurring considerations. Exemption is an indulgence, not a right, and suppression in the application is fatal.'],
    ['If the SLP is entertained, does the petitioner get bail automatically?', 'No. Exemption from surrender only removes the listing bar. Release pending the appeal requires a separate prayer — suspension of sentence and bail — which the Court considers on settled principles once notice is issued or leave granted. Interim exemption is frequently continued in the meanwhile.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — Supreme Court of India', 'url' => 'https://www.sci.gov.in/'],
    ['label' => 'Supreme Court of India — Case status and e-filing', 'url' => 'https://www.sci.gov.in/case-status-case-no/'],
  ],
];
$BODY = <<<'HTML'
<h2>The rule and its rationale</h2>
<p>Order XXII of the Supreme Court Rules, 2013 governs special leave petitions in criminal proceedings. Its scheme on surrender has two working parts: the petition must disclose whether the petitioner has surrendered to the sentence, and where he has not, the petition is not listed for hearing unless the Court, on a separate application, exempts him from surrendering. The rationale is institutional self-respect as much as procedure: the extraordinary jurisdiction under Article 136 is not to be invoked by a person who simultaneously declines to submit to the criminal process whose outcome he challenges. The requirement also protects the Court's eventual order from futility — a petitioner absconding from sentence is beyond the reach of both dismissal and conditions.</p>

<h2>The filing sequence in practice</h2>
<div class="flow">
  <div class="fstep"><strong>Judgment below.</strong> The High Court dismisses the appeal or enhances/reverses to conviction; the sentence becomes executable. Any suspension granted by the High Court for a limited period starts the clock.</div>
  <div class="fstep"><strong>Choice point.</strong> Either the petitioner surrenders — and the SLP is filed with the custody certificate — or the SLP is filed with an application for exemption from surrender, supported by an affidavit disclosing the sentence, custody undergone, bail history and the grounds for indulgence.</div>
  <div class="fstep"><strong>Registry scrutiny.</strong> Defects on the surrender disclosure are among the Registry's standard objections; the petition is listed only when the requirement is satisfied or the exemption application accompanies it for orders.</div>
  <div class="fstep"><strong>Orders.</strong> The Court may grant exemption (often initially for a limited period), require surrender within a fixed time, or decline — after which surrender is the condition of prosecution of the petition. On notice or leave, prayers for suspension of sentence and bail are taken up.</div>
</div>

<h2>Framing the exemption application</h2>
<div class="check">
<ul>
  <li>State the sentence, the portion undergone, and the conduct on bail during trial and appeal — years of unblemished liberty are the strongest single fact.</li>
  <li>Place medical material with records, not adjectives; the Court can and does verify through jail and medical reports.</li>
  <li>Address the merits briefly: an arguable, document-backed challenge to the conviction supports indulgence; the application is not the place to argue the appeal.</li>
  <li>Disclose everything — prior SLPs, pending proceedings, any non-appearance below. Concealment converts a discretionary indulgence into a dismissal with observations.</li>
  <li>Pray in the alternative: exemption; in the alternative, time to surrender; with liberty to seek suspension of sentence upon notice.</li>
</ul>
</div>

<h2>Related strands of criminal SLP practice</h2>
<p>The surrender discipline sits alongside two adjacent bodies of practice. First, suspension of sentence: for sentences the High Court has affirmed, the Supreme Court applies familiar considerations — nature of the offence, sentence length, custody undergone, delay in the appeal's likely hearing — and its orders commonly pair bail with conditions mirroring those below. Second, the treatment of absconders: a petitioner who has evaded process below approaches Article 136 with a nearly insuperable burden, and courts at every level treat non-surrender as disentitling conduct. The consistent thread is that liberty pending challenge is earned by submission to the process, never by flight from it.</p>

<h2>Timing traps</h2>
<p>Limitation for criminal SLPs is sixty days from the impugned judgment (ninety in certain certificate situations), and time spent arranging surrender does not stop it: the condonation application must explain the whole period on ordinary principles. Where the High Court grants time-bound protection — for instance, suspending the sentence for a few weeks to enable approach to the Supreme Court — diarise both dates. The petition should be filed, with the exemption application, within the protective window; filing after it lapses turns an orderly exemption request into an application by a person already in default.</p>

<div class="note">
<p><strong>Practice note:</strong> Prepare the surrender paragraph of the SLP with literal accuracy — custody status, dates, and the order under which the petitioner is at liberty. It is the first paragraph the Registry reads and the last one a bench forgives errors in.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
