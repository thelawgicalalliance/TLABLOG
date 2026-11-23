# Know Your Law — advocatemeghajha.com

Articles for www.advocatemeghajha.com are published here by the daily scheduled task.
- `posts/<slug>.php` — one article per file (includes `_layout.php` on the server)
- `posts.json` — manifest, newest first

The website's `insights-sync.php` (hourly cron) pulls new files from this folder into `/insights/`.
This folder is separate from the root `posts/` folder used by another website; topics must not repeat across the two.
