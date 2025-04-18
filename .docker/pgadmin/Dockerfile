FROM dpage/pgadmin4:latest

USER root

# Cria o diretório de certificados (se não existir)
RUN mkdir -p /certs

# Copia o entrypoint customizado
COPY entrypoint.sh /custom-entrypoint.sh
RUN chmod +x /custom-entrypoint.sh

# Configura a utilização de HTTPS
ENV PGADMIN_ENABLE_TLS=True
ENV PGADMIN_TLS_CERT=/certs/selfsigned.crt
ENV PGADMIN_TLS_KEY=/certs/selfsigned.key

# Usar nosso entrypoint
ENTRYPOINT ["/custom-entrypoint.sh"]
