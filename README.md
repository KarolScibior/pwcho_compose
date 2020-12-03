**Sprawozdanie z docker compose**

**Zamiast portu 6666 użyłem 8888**

Na projekt składają się dockerfile (apache2 + mysql + php) i docker-compose.yml

Apache2 - dzięki ProxyPassMatch udało się prawidłowo proxować request do proxy php. Załadowanie odpowiednich bibliotek do httpd.conf pozwoliło na użycie proxymatcha i vhostów. Kontener należy do sieci frontend i backend, a z proxy php łączy się po aliasie.

MySQL - w docker-compose ustawione jest hasło dla roota. Kontener łączy się z siecią backend. W celu zachowania danych z bazy został podłączony wolumen mapujący folder z systemu macierzystegodo lokalizacji danych wewnątrz kontenera z bazą.

PHP - żeby front nie nasłuchiwał na ipv6 trzeba było użyć customowego poola, przypisanego do portu 7777. Kontekst aplikacji został umieszczony w /srv/app. Kontener łaczy się z siecią backend, sprawdza połączenie do bazy i korzysta z aliasu dla kontenera z bazą.

Uruchamianie

```
cd docker
docker-compose down && docker-compose build --no-cache && docker-compose up
```
