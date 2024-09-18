# Dockerfile
FROM wordpress:latest

# Install ping (iputils-ping)
RUN apt-get update && apt-get install -y iputils-ping

# Ensure the image continues to use the default entrypoint
CMD ["apache2-foreground"]