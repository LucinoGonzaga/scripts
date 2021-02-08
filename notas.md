# ###########################################################################
# Esse é um arquivo pessoal onde irei registrar alguns comandos importantes #
# ###########################################################################

=============================================================================
Preparando ambiente de trabalho
=============================================================================

# instalar o docker, docker-compose e git
sudo apt-get install docker docker-compose git

# Clonar repositório do Laradock para o seu computador em qualquer local
git clone https://github.com/laradock/laradock.git

# Acessar o diretório raiz e criar arquivo .env e escolher a versão do PHP
cp .env.example .env 
gedit .env
	# Accepted values: 7.4 - 7.3 - 7.2 - 7.1 - 7.0 - 5.6
	PHP_VERSION=7.1 

# Verificar se existe algum container rodando ou se existe algum conflito
docker ps

# Verificar se o docker-compose foi instalado
docker-compose

# Limpar terminal
cls

# Sair do diretório do laradock para configurar diretorio inicialização do nginx 
cd ..
mkdir html
chmod 777 -R html
gedit laradock/nginx/sites/default.conf
# (nesse caso eu criei o diretório html e o diretório public é do laravel. Caso  exista mais de um projeto é possível editar o nome localhost para o nome do projeto, assim é necessário editar o arquivo
hosts para criar o direcionamento...)
    server_name localhost; 
    root /var/www/html/public;

# Iniciar os containers
docker-compose up -d nginx phpmyadmin mysql

=============================================================================
Comandos para o Github
=============================================================================
1º Criei o repositório no Github, atribui o tipo de licença e configurei o gitignore.
2º Executei os comandos no meu computador:
	git clone https://github.com/LucinoGonzaga/curso_laravel_5.3.git
	git status
	git add .
	git commit -m “mensagem necessária”
	git status
	git push

=============================================================================
Cursos do professor professor Guilherme Ferreira
=============================================================================
Aula 2 - Instalação e configuração:
Um dos arquivos principais é o .env onde define o banco de dados, configurações de e-mail.

O arquivo .gitignore ignora o envio de alguns arquivos para a produção.
Além disso, quando subir para a produção o arquivo que vai ficar valendo é o config/app.php

Aula 3 - Estrutura do framework:
No diretório principal do framework é o app onde será encontrado os models.
No diretório http é encontrado o controllers.php que segue os parâmetros MVC.
No diretório bootstrap é o local onde fica a inicialização do framework.
No diretório public é onde o servidor vai exibir para o usuário.
	
Aula 5 - Artisan Console
php artisan -V 		:	 visualizar versão do framework php
=============================================================================
Comandos para o Docker:
=============================================================================
# Visualiza os containers em execução
sudo docker container ls

# Inspeciona os dados de um container (ip, mac, portas)
docker container inspect 5e7a935fc552

# Realiza o acesso ao terminal do container
sudo docker exec -it 5e7a935fc552 bash

# Reiniciar os container
docker-compose restart

# Após mudar a versão do PHP executar
sudo docker-compose build --no-cache php-fpm
