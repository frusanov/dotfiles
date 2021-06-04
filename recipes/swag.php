<?php
task('swag:create', function () {
  run(`docker create \
		--name=swag \
		--cap-add=NET_ADMIN \
		-e PUID=$PUID \
		-e PGID=$GUID \
		-e TZ=$TZ \
		-e URL=$URL \
		-e SUBDOMAINS=www, \
		-e VALIDATION=http \
		-e EMAIL=$EMAIL  \
		-e ONLY_SUBDOMAINS=false  \
		-e EXTRA_DOMAINS=$EXTRA_DOMAINS  \
		-e STAGING=false  \
		-p 443:443 \
		-p 80:80  \
		-v ./.config/swag:/config \
		--restart unless-stopped \
		ghcr.io/linuxserver/swag`);
});

task('swag:remove', function () {
  run(`docker container rm swag`);
});
