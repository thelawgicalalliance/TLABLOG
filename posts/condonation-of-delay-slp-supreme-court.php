<?php
$P = [
  'slug'         => 'condonation-of-delay-slp-supreme-court.php',
  'title'        => 'Delay in Filing an SLP: Condonation – Advocate Manish Jha',
  'meta'         => 'Limitation for SLPs — the 90-day period, drafting condonation applications with complete chronologies, and the stricter view taken of government delay.',
  'h1'           => 'Condonation of Delay in SLPs: The 90 Days and What Comes After',
  'crumb'        => 'SLP — Delay & Condonation',
  'kicker'       => 'Practice Explainer · Supreme Court Practice',
  'sub'          => 'The Supreme Court\'s discretion under Article 136 begins with a clock — and an unexplained gap in the chronology is the commonest reason petitions fail unheard.',
  'date'         => '2026-08-21',
  'date_display' => '21 August 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">A special leave petition must ordinarily be filed within ninety days of the judgment challenged — sixty where the challenge is to a High Court\'s refusal of a certificate of fitness. The Supreme Court can condone delay of any length for sufficient cause, and routinely does for short, well-explained gaps. But the condonation application has become a threshold merits test of its own: petitions with strong grounds are dismissed on delay alone, and government petitioners in particular have faced pointed judicial impatience with mechanical explanations. This explainer covers the framework and the drafting discipline that survives it.</p>',
  'related'      => ['delhi-high-court.php' => 'Delhi High Court', 'civil-law.php' => 'Civil Law', 'criminal-law.php' => 'Criminal Law', 'legal-notice-replies.php' => 'Legal Notices & Replies'],
  'faqs'         => [
    ['When does limitation start running for an SLP?', 'From the date of the judgment or final order challenged. Time spent obtaining the certified copy is excluded under the limitation framework, which is why the dates of applying for and receiving the copy belong in every chronology. A review filed before the High Court alters the sequence: the SLP against the main judgment should account for that interval accurately.'],
    ['What counts as sufficient cause?', 'Causes outside the petitioner\'s control, explained with dates: illness, misplaced papers located later, bona fide pursuit of a wrong remedy, delays in obtaining records or legal aid. The court applies a liberal standard where the explanation is honest and the delay short, and a stricter one as the gap grows — with each unexplained block of time weighing against condonation.'],
    ['Are government departments given more latitude?', 'Less, in current practice. The Supreme Court has repeatedly criticised routine condonation applications citing file movement between departments, and has dismissed state appeals with costs where the delay reflected indifference rather than genuine impediment. "Certificate cases" — appeals filed only to obtain a dismissal certificate — attract particular censure.'],
    ['If delay is condoned, is the SLP admitted?', 'No. Condonation only opens the door to consideration under Article 136; the petition must still persuade the court that the case merits special leave. Conversely, some benches examine merits and delay together, refusing condonation where the petition would fail anyway — so the SLP must be drafted to succeed on both fronts simultaneously.'],
  ],
  'sources'      => [
    ['label' => 'Supreme Court Rules, 2013 — Supreme Court of India', 'url' => 'https://www.sci.gov.in/rules-2/'],
    ['label' => 'Supreme Court of India — e-filing and case status', 'url' => 'https://www.sci.gov.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>The limitation architecture</h2>

<p>The periods come from the Supreme Court Rules, 2013: ninety days from the judgment or order sought to be appealed from, and sixty days where the petition follows a High Court's refusal to grant a certificate of fitness. Two exclusions do consistent work in practice — the time requisite for obtaining a certified copy, and, for petitioners proceeding in forma pauperis or through legal services authorities, the time consumed in those processes when properly documented. Everything else is condonation territory.</p>

<h2>The anatomy of a condonation application</h2>

<p>The application is an affidavit-supported narrative with one obligation: continuity. The chronology must run from the date of the impugned judgment to the date of filing without unexplained islands of time. The standard structure:</p>

<div class="flow">
  <div class="fstep"><strong>Judgment and knowledge</strong> — when the judgment was pronounced and when the petitioner learnt of it, if later, with how.</div>
  <div class="fstep"><strong>Certified copy</strong> — dates of application and receipt; this interval is excluded, but only if pleaded and proved.</div>
  <div class="fstep"><strong>The cause</strong> — the specific events occupying each block of the remaining delay: illness with medical records, counsel transitions, departmental steps with file dates, settlement efforts.</div>
  <div class="fstep"><strong>Diligence resumed</strong> — when papers reached Supreme Court counsel and the filing steps that followed, showing the petitioner moved promptly once able.</div>
</div>

<p>Round-figure delays ("about 200 days"), adjectival explanations ("due to unavoidable circumstances"), and gaps attributed to nothing at all are the classic failure modes. The longer the delay, the more granular the explanation must become — for delays running past a year, effectively day-by-day accounting of each stage is expected.</p>

<h2>The special scrutiny of state delay</h2>

<p>A substantial share of condonation jurisprudence concerns government petitioners, and the direction of travel is unmistakable: impersonal file movement is not sufficient cause, the law of limitation binds the state as it binds citizens, and costs — sometimes recoverable from erring officers — accompany dismissals of stale state appeals. At the same time, genuine institutional impediments honestly explained still succeed; what the court penalises is the assumption that condonation is a formality. For private parties opposing a delayed state SLP, a counter-affidavit that dissects the chronology date by date is often the most productive filing in the case.</p>

<h2>Delay, merits and the interplay</h2>

<div class="tiles">
  <div class="tile"><h3>Strong case, long delay</h3><p>Merits do not cure delay by themselves, but courts weigh the injustice of leaving a plainly wrong judgment intact; an honest explanation plus strong grounds remains a viable petition.</p></div>
  <div class="tile"><h3>Weak case, short delay</h3><p>Condonation may be granted and the SLP dismissed the same morning; or the bench short-circuits both. The condonation application cannot rescue a petition Article 136 would not entertain.</p></div>
</div>

<h2>Practical notes</h2>

<p>Diarise limitation from the day judgment is pronounced, not the day the certified copy arrives — the exclusion helps only when the copy was actually applied for promptly. Where a review is contemplated before the High Court, plan the sequence deliberately, since time continues to run against the main judgment while a review is pending and the petition must explain the full interval. In criminal matters, petitions by convicts in custody receive understanding on delay attributable to incarceration and legal aid — the chronology should say so plainly. And in every case, verify the dates against the record before filing: an inaccurate chronology discovered at the hearing converts a curable delay problem into an incurable credibility problem.</p>

<div class="note">
<p>An SLP dismissed on delay alone is a dismissal without merger of the judgment below, and what remedies survive elsewhere follow the ordinary doctrine on the effect of SLP dismissals — covered in the companion explainer on this site.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
