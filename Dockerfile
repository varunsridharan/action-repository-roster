FROM varunsridharan/actions-alpine-php:latest

COPY entrypoint.sh /entrypoint.sh

COPY src/ /action-repository-roster/

RUN chmod +x /entrypoint.sh

RUN chmod -R 777 /action-repository-roster/

ENTRYPOINT ["/entrypoint.sh"]