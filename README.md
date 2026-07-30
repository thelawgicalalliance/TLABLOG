# TLABLOG — automated article store for advocatemanishjha.com

This repository holds articles published automatically to
**https://advocatemanishjha.com/blog.php**

| Path | Purpose |
|---|---|
| `posts/<slug>.php` | One file per article. Each defines `$P` (metadata) and `$BODY` (HTML) and includes `post-layout.php`. |
| `posts.json` | Manifest read hourly by `blog-sync.php` on the web server. |

**How it works.** A scheduled Claude task researches Supreme Court and Delhi High Court
judgments each morning, verifies every citation against the court's own website, writes the
articles and commits them here. The web server pulls new entries within the hour.

Nothing confidential is stored here — every file is destined for publication.

To remove a published article: delete it from `posts/`, remove its entry from `posts.json`,
and delete the corresponding file from the web server.
