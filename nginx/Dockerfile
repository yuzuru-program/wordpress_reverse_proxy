FROM nginx:alpine

RUN adduser -D -H worker

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./conf.d/default.conf /etc/nginx/conf.d/default.conf

# ディレクトリオーナーを変更
RUN touch /var/run/nginx.pid && \
  chown -R worker:worker /var/run/nginx.pid && \
  chown -R worker:worker /var/cache/nginx

USER worker

CMD ["nginx"]