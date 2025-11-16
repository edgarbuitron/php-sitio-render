# ... (líneas anteriores)

# 3. Copiar todos tus archivos PHP, CSS, y scripts al contenedor
COPY . /app/

# NUEVA LÍNEA: Convertir finales de línea de DOS/Windows (CRLF) a Unix (LF)
RUN sed -i 's/\r$//' /app/start.sh

# 4. Asegurarse de que el script start.sh sea ejecutable
RUN chmod +x /app/start.sh

# 5. Definir el comando de inicio usando la ruta absoluta
CMD ["/app/start.sh"]
