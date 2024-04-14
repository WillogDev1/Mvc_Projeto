# X-Mvc - Framework Simples para Projetos Iniciais

<p align="center">
<img src="https://img.shields.io/badge/version-1.0-blue"/>
<img src="https://img.shields.io/badge/-Php-green"/>
<img src="https://img.shields.io/badge/-HTML-green"/>
<img src="https://img.shields.io/badge/-CSS-green"/>
<img src="https://img.shields.io/badge/-JavaScript-green"/>
</p>

# Índice

- [Título e Imagem de capa](#X-Mvc-Framework-Simples-para-Projetos-Iniciais)
- [Descrição do Projeto](#Sobre-o-projeto)
- [Status do Projeto](#status-do-Projeto)
- [Funcionalidades e Demonstração da Aplicação](#Funcionalidades-do-projeto)
- [Acesso ao Projeto](#acesso-ao-projeto)
- [Tecnologias utilizadas](#tecnologias-utilizadas)
- [Pessoas Desenvolvedoras do Projeto](#pessoas-desenvolvedoras)

# Sobre o projeto

Criando uma "Framework" baseado em MVC para agilidade em projetos de pequeno porte e quem sabe médio porte, pensando em sites de hospedagem como Hostinger e Hostgator, que aceitam PHP. 
Inúmeras vezes tentei iniciar meus estudos com os frameworks do momento, e inúmeras vezes falhei em entender não só o complexo, mas o básico. 
Este projeto tem como objetivo principal o estudo e aprimoramento das minhas habilidades como desenvolvedor.
Como objetivo secundario estarei usando essa estrutura para criação de meus projetos para testar e descobrir novas funcionalidades que posso implementar.

A Proposta inicial que tenho em mente é trabalhar em forma de Modulos e Submodulos. Assim ficando mais facil estruturar fisicamente e até mentalmente os arquivos, exemplo:

    - Login
        - RecuperarSenha
        - PrimeiroAcesso
    Administrativo
        - RH
            - Setor 1
            - Setor 2
        - Almoxarifado
            - Setor 1
            - Setor 2

Algo dessa forma, assim podemos trabalhar em um Modulo, e dentro deste Modulo em seus Submodulos, podemos dividir melhor a criação.

Obs:
A ideia inicial é essa, talvez mude com o tempo. Lembrando isso tudo aqui é uma aventura, talvez haja algum problema muito grande na estrutura que impossibilite alguma função.

Lembrando a ideia é poder rodar tudo em sites como Hostinger. Futuramente( Logo ) Quero criar algo para Amazom, onde podemos ter nossa aplicação mais livre, usar um Socket :)
# Status do Projeto

<h4 align="center"> 
    :construction:  Projeto em construção mas já pode ser usado:construction:
</h4>

# :hammer: Funcionalidades do projeto

- `Funcionalidade 1`: 
    - Gerenciamento de Rotas.
    - Setar/Criar rotas
    - Setar/Criar Subrotas
    - Verificar se Rotas existem
- `Funcionalidade 2`: 
    - Renderizar Controller, Model e View Dinamicamente.
    - Baseado na rota carregar o Controller, Model e View.
    - Renderizar Model dinamicamente (Dados são carregados ao chamar o render)
- `Funcionalidade 3`: 
    - Controle de Acesso.
    - Verificar se usuario está logado ou não.
    - Definir quais paginas precisam de login ou não.
- `Funcionalidade 4`: 
    - Criador de Modulo que nos proporciona
    - Arquivos iniciais bem como suas pastas no MVC
    - Pasta de tests
    - Rotas
    - Ready to action
- `Funcionalidade 5`:
    - Modulo de Testes Unitarios com PHP Unit
    - Criação Inicial do Teste Unitario automatica

# 🛠️ Abrir e rodar o projeto

**Instale PHP, Composer, PHPUnit e Dotenv**
    - Crie a pasta do seu projeto
    - Instale Apache( Ou Instale XAMPP e rode o Apache de lá, ou melhor, crie um Docker)
    - Instale Composer
    - Instale Php
    - Crie ou Copiei o arquivo composer.json
    - Rode: composer install
    - Rode: composer dump-autoload
    - Rode: composer require --dev phpunit/phpunit ^11
    - Rode: composer dump-autoload
    - Reinicie a Aplicação/Apache/Server
    Obs:
        A Pasta App deve ser esse nome, caso queria trocar mude em composer.json psr-4.

# Tecnologias utilizadas

- `PHP`
- `Html`
- `CSS`
- `JavaScript`

# Pessoas Desenvolvedoras do Projeto

| [<img src="https://avatars.githubusercontent.com/u/97992826?v=4" width=115><br><sub>William Omar Gibram</sub>](https://github.com/WillogDev1) |
