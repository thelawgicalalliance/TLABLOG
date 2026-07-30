<?php
$P = [
  'slug'         => 'pipeline-live-test.php',
  'title'        => 'Publishing Pipeline — Live Test – Advocate Manish Jha',
  'meta'         => 'A one-off technical test confirming that articles committed to the repository are pulled and published on advocatemanishjha.com automatically.',
  'h1'           => 'Publishing Pipeline: Live Test',
  'crumb'        => 'Pipeline Live Test',
  'kicker'       => 'System Test',
  'sub'          => 'Delete this page once the first genuine article has been published.',
  'date'         => '2026-07-30',
  'date_display' => '30 July 2026',
  'category'     => 'Procedure & Practice',
  'lead'         => '<p class="lead">This page was written into the repository and collected by the website without anyone touching a file. It exists only to prove the connection works, and can be deleted.</p>',
  'related'      => ['blog.php' => 'All Articles'],
  'faqs'         => [['Can this page be deleted?', 'Yes. Delete it from public_html, remove its entry from blog/posts.json, and delete posts/pipeline-live-test.php from the GitHub repository.']],
];
$BODY = <<<'HTML'
<h2>Connection confirmed</h2>
<p>The article store, the manifest, the hourly pull and the shared layout are all working together.</p>
HTML;
include __DIR__ . '/post-layout.php';
