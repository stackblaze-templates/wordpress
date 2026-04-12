# WordPress

WordPress CMS with custom plugin development support.

## Local Development

```bash
docker compose up
```

Visit `http://localhost:8080` to complete WordPress setup.

## Plugin Development

Custom plugins go in `wp-content/plugins/`. A starter plugin is included at `wp-content/plugins/starter-plugin/`.

The plugin adds a REST API endpoint at `/wp-json/starter/v1/hello`.

## Deploy on StackBlaze

This template includes a `stackblaze.yaml` that provisions WordPress with a MySQL database.
