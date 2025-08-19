# PWII-Airton-Ronaldo

Aulas de Programação Web III com o professor João Siles 😁

### AULA 01 📝
Hoje mergulhamos agora na documentação dos nossos próximos projetos, onde o **Laravel** será a estrela onde será focaremos, vou explorar esta ferramenta excepcional através da documentação [**Laravel**](https://laravel.com/docs/12.x/installation#creating-a-laravel-project).
### Aula 02 📝
Hoje criaremos um projeto com o nome da pasta **aula02** para a criação do projeto eu basicamente fui na documentação
#### passo I 
O primeiro passo para fazer uma aplicação de Laravel é botar o PHP, o Composer e o instalador do Laravel no PC. 
Foi os requisitos que na documentação de **laravel** pede para a criação de um projeto. e importante que os códigos à continuação sejam executados na terminal. antes de iniciar tudo antes que nada a amquina debe ter o xamp instalado e abrir e logo de depois ativar as duas opções seguindo o desenho abaixo.

>⭕ Apache --------------------|start |
>⭕ Mysql----------------------|start |
-----------------------------------------------------
ativamos os dois carinhas 
>✅ Apache --------------------|stop |
>✅ Mysql----------------------|stop |

Bem seguindo o documento, há várias formas de colocar os comandos nesses programas:
• Em macOS, Windows ou Linux, você pode usar comandos 
##### macOS
Em caso se temos o sistema operacional macOS o comando e o seguinte:

       /bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)" 
  ##### Windows PowerShell
  Passando para o sistyema operacional Windows e importante saber que o laravel pede abrir o PowerShell em modo **administrador**
 
• Se você já tem PHP e Composer, pode colocar o instalador do Laravel pelo mundo via Composer com composer global require laravel/installer.
• Outra opção é o Laravel Herd, que dá um jeito fácil e todo junto para pôr e olhar PHP e Laravel.

![](<img/powershell.png>)

Uma vez que abrimos o terminal em administrador colocamos o seguinte comando a seguir:

    # Run em modo administrator...
	Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

 seguindo com o ultimo sistema operacional 
##### Linux
Em caso se temos o sistema operacional macOS o comando e o seguinte:

    /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

mais neste caso utilizarei o sistema operacional Windows utilizando o comando e abrindo o terminal em modo administrador.
#### Passo II
Neste passo criaremos o projeto seguindo com a documentação, Laravel nos da um comando para criar e colocar o nome para nosso projeto.

    laravel new example-app
no meu caso eu coloquei da seguinte forma 

>   laravel new aula02

Feito isso entramos na pasta.
 
Feito isso entramos na pasta. e colocamos o comando para instalar as dependencias de javascript e mais um comando para a maquina entender os arquivos de javascript

comando para entrar

    cd example-app
dependencias de java
	
    npm install && npm run build

iniciando o projeto 
	composer run dev

 
• Se você já tem PHP e Composer, pode colocar o instalador do Laravel pelo mundo via Composer com composer global require laravel/installer.
• Outra opção é o Laravel Herd, que dá um jeito fácil e todo junto para pôr e olhar PHP e Laravel.
