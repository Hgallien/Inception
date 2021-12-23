
build:
	docker-compose up -d --build
attach:
	docker-compose up  --build
kill:
	docker-compose down
clean:
	docker-compose down --rmi all -v
fclean: clean
	docker system prune -f --all --volume
