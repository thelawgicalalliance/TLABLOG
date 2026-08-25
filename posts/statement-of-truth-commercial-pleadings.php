<?php
$P = [
  'slug'         => 'statement-of-truth-commercial-pleadings.php',
  'title'        => 'The Statement of Truth in Pleadings – Advocate Manish Jha',
  'meta'         => 'Order VI Rule 15A CPC requires commercial-suit pleadings to be verified by a Statement of Truth. What it contains, who signs it, and what non-compliance costs.',
  'h1'           => 'The Statement of Truth: Verification of Pleadings in Commercial Suits',
  'crumb'        => 'Statement of Truth',
  'kicker'       => 'Explainer · Commercial Courts',
  'sub'          => 'In commercial disputes, the casual verification clause of the ordinary suit is replaced by a sworn Statement of Truth — and a pleading not verified in that manner may be struck out and cannot be relied on as evidence.',
  'date'         => '2026-08-25',
  'date_display' => '25 August 2026',
  'category'     => 'Commercial & Corporate',
  'lead'         => '<p class="lead">Commercial litigation reform in India rests on an unglamorous premise: pleadings should be true. The Commercial Courts Act, 2015 wrote that premise into the Code of Civil Procedure through Order VI Rule 15A, which requires every pleading in a commercial dispute to be verified by an affidavit in the form of a Statement of Truth set out in the Appendix to the Code. The signatory swears to personal knowledge and belief, to the sources of information, and to the absence of false statements — on pain of the pleading being struck off and denied evidentiary use. This explainer covers the mechanics and the consequences, as applied in Delhi\'s commercial courts.</p>',
  'related'      => ['business-corporate-law.php' => 'Business & Corporate', 'legal-notice-replies.php' => 'Legal Notices & Replies', 'delhi-high-court.php' => 'Delhi High Court', 'property-disputes.php' => 'Property Disputes'],
  'faqs'         => [
    ['How is the Statement of Truth different from ordinary verification under Order VI Rule 15?', 'Ordinary verification is a short endorsement identifying which paragraphs are true to knowledge and which to information and belief. The Statement of Truth is a full affidavit in a prescribed form: the deponent swears the facts are true to knowledge or to information received and believed, that no false statement or concealment is made, and that documents relied on are true copies. It converts the pleading into a sworn account.'],
    ['Who can sign the Statement of Truth for a company?', 'A person acquainted with the facts and duly authorised — typically a director, officer or constituted attorney with knowledge of the transaction, supported by a board resolution or authorisation. Courts look past designations to actual acquaintance with the facts, and a deponent with no personal connection to the record weakens the pleading and the eventual evidence.'],
    ['What happens if a pleading lacks a proper Statement of Truth?', 'Order VI Rule 15A(4) permits the court to strike out a pleading not verified by a Statement of Truth, and Rule 15A(5) bars a party from relying on any pleading as evidence unless so verified. In practice courts allow curable defects to be rectified, but the cure consumes time in a regime where the written-statement clock is unforgiving.'],
    ['Does a false Statement of Truth attract prosecution?', 'It can. A false affidavit invites proceedings for perjury and interference with justice under the applicable provisions of the Bharatiya Nyaya Sanhita read with the court\'s procedural powers, apart from costs and adverse findings in the suit itself. The prescribed form exists precisely to make falsehood in commercial pleadings personally consequential for the deponent.'],
  ],
  'sources'      => [
    ['label' => 'Commercial Courts Act, 2015 (Schedule amending the CPC) — India Code', 'url' => 'https://www.indiacode.nic.in/'],
    ['label' => 'Delhi High Court — Original Side Rules and practice directions', 'url' => 'https://delhihighcourt.nic.in/'],
  ],
];
$BODY = <<<'HTML'
<h2>Why the reform targeted verification</h2>
<p>Pleadings drafted to conceal, deny the undeniable and plead the untrue were among the chief causes of the delay the Commercial Courts Act set out to cure. The Act's answer was to raise the personal stakes of signing a pleading. The Statement of Truth works alongside the Act's other truth-forcing devices — the Order XI duty to disclose all documents in a party's power and possession including those against its interest, the admission-denial affidavit, and costs under the substituted Section 35 — to make the commercial suit a documents-and-candour regime rather than a pleadings game.</p>

<h2>What the deponent actually swears</h2>
<div class="check">
<ul>
  <li>That he or she is a party, or authorised by a party, and is acquainted with the facts of the case;</li>
  <li>That the statements in the identified paragraphs are true to personal knowledge, and those in other identified paragraphs are based on information received and believed to be true;</li>
  <li>That the pleading makes no false statement and conceals no material fact or document;</li>
  <li>That documents filed with the pleading are true copies, and that nothing is stated outside the deponent's knowledge, information and belief as disclosed.</li>
</ul>
</div>
<p>The paragraph-mapping requirement deserves emphasis. A Statement of Truth that lumps the entire pleading into a single omnibus assertion of truth defeats the form's purpose and draws objections at admission-denial and cross-examination. The careful drafter maps knowledge paragraphs and information paragraphs separately, and identifies the source of information where it is not the deponent's own.</p>

<h2>Consequences of non-compliance</h2>
<div class="compare">
  <div class="col old">
    <h3>Defective or absent verification</h3>
    <p>The court may strike out the pleading (Rule 15A(4)); the party cannot rely on it as evidence (Rule 15A(5)); opposing counsel will press the defect at the case management hearing; time lost to cure counts against unforgiving limits like the 120-day written statement ceiling.</p>
  </div>
  <div class="arrow">→</div>
  <div class="col new">
    <h3>Proper Statement of Truth</h3>
    <p>The pleading stands as a sworn account; admission-denial proceeds cleanly; the deponent's credibility is a litigable asset; and interlocutory applications (summary judgment, interim relief) can draw directly on the verified pleading.</p>
  </div>
</div>

<h2>Recurring practice questions in Delhi</h2>
<p>Three situations recur. First, amendments: an amended pleading requires a fresh Statement of Truth covering the amended content — the original affidavit does not stretch over words it never verified. Second, multiple plaintiffs or defendants: each party must verify, or the deponent must be authorised by and acquainted with the facts for all whom the pleading serves; group verifications by a single unconnected deponent invite the striking-out power. Third, applications and replies: the discipline extends beyond plaints and written statements to the pleadings in interlocutory applications in commercial suits, and Delhi's commercial courts expect the form to be followed there as well.</p>

<h2>The tactical dimension</h2>
<p>For the opposing side, the Statement of Truth is a cross-examination resource. A deponent who swore personal knowledge of paragraphs later shown to be outside his knowledge has donated a credibility point that colours the whole defence. Counsel preparing witnesses should therefore treat the Statement of Truth as the witness's first deposition — because that is exactly how it will be used at trial.</p>

<div class="note">
<p><strong>Note:</strong> The Statement of Truth requirement applies to commercial disputes governed by the Commercial Courts Act, 2015. Ordinary suits continue under Order VI Rule 15 CPC, though Delhi practice increasingly expects affidavit-backed verification there too. General information, not legal advice.</p>
</div>
HTML;
include __DIR__ . '/post-layout.php';
