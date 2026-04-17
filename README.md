# Projet docker-compose
## Arborescence

	docker-compose/
		 README.md
		docker-compose.yml
		php/
			Dockerfile
		apache/
			my-vhost.conf
		src/
			index.php

---
## Evolution
```mermaid
gitGraph
	commit "First commit"
	commit "update"
	branch test
	checkout test
	commit "New branch"
	commit "test"
	commit "DEBUG SELinux problem"
	checkout main
	merge test
	commit "merge"
	commit "UPDATE README.md"
```
--- 
## Test
<img width="1919" height="1078" alt="image" src="https://github.com/user-attachments/assets/70a44515-7e42-48c5-8e8a-a6d52a6ebe39" />
