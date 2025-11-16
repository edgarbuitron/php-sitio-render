# 1. Usar una imagen base de PHP ligera
FROM php:8.2-cli-alpine

# 2. Establecer el directorio de trabajo donde estará tu código
WORKDIR /app

# 3. Copiar todos tus archivos PHP, CSS, y scripts al contenedor
COPY . /app/

# 4. Asegurarse de que el script start.sh sea ejecutable
RUN chmod +x /app/start.sh

# 5. Definir el comando de inicio usando la ruta absoluta
CMD ["/app/start.sh"]
