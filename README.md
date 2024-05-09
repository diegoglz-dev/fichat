# FI-Chat

Sistema asistente virtual de la Facultad de Informática de la UNLP alimentado con LLM (IA) desarrollado con Laravel Framework 11.7.0

## Paquetes instalados

-   Livewire

## Instalación

-   Dentro de la carpeta correr el comando `docker-compose up -d` - Esto creará un contenedor de docker el cúal posee Ollama, junto al modelo de LLM que deseemos descargar, por default es phi3 [para más info. visitar Github de Ollama](https://github.com/ollama/ollama?tab=readme-ov-file), el mismo se puede configurar dentro del archivo `docker-compose.yaml`. Luego seguir los pasos indicados en dicho archivo.
-   Para instalar FI-Chat, dentro la carpeta correr el comando `composer install`.
-   Configurar archivo `.env` se puede copiar de `.env.example`
