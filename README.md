# Projeto Cinema-Planet

Para rodar esse sistema é necessario ter o [XAMPP](https://www.apachefriends.org/xampp-files/7.3.6/xampp-windows-x64-7.3.6-1-VC15-installer.exe), [composer](https://getcomposer.org/Composer-Setup.exe) e o [Git](https://git-scm.com/download/win) for Windows instalado em sua máquina e criar um banco de dado chamado **cinema** no MySQL WorkBench em seguida é necessario acessar a pasta:

Por fim é só abrir o arquivo **httpd-vhosts** do apache na pasta

>C:\xampp\apache\conf\extra

e adicionar as linhas de código abaixo no final do aquivo

```
# Cinema Cross

<VirtualHost *:80>
	ServerAdmin roneyjoab@gmail.com
    DocumentRoot "C:/xampp/htdocs/cinema-planet/backend/web"
    ServerName cinemaplanet.adm.localhost
    ErrorLog "logs/cinemaplanet.log"
    CustomLog "logs/cinemaplanet.log" common
</VirtualHost>

<VirtualHost *:80>
	ServerAdmin roneyjoab@gmail.com
    DocumentRoot "C:/xampp/htdocs/cinema-planet/frontend/web"
    ServerName cinemaplanet.localhost
    ErrorLog "logs/cinemaplanet.log"
    CustomLog "logs/cinemaplanet.log" common
</VirtualHost>
```

>C:\xampp\htdocs

e clonar o repositorio. Tendo o repositorio sido clonado, basta acessar a pasta do 
repositorio em seu computador abrir o console git Bash e inserir as seguintes comandos:


```
composer require fxp/composer-asset-plugin
composer isntall
```

em seguida executar o comando

```
php init
```

e escolher a opção "0 - Develouper" e em seguida "Yes".

após o comando php init ser finalizado, basta inserir os seguintes comandos:

```
php yii migrate all

```

em seguida 

```
php yii seeder
```
por fim é só startar o Apache e o MySQL no XAMPP, abrir o navegador acessar o site [cinemaplanet.adm.localhost](cinemaplanet.adm.localhost)
e fazer o login:

> login: professor@gmail.com
> senha: admin


espero que dê certo.
