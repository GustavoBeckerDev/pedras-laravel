# Nome do Seu Projeto

Uma breve descrição sobre o que seu projeto faz. Por exemplo: "Aplicação web construída com Laravel 10 e Vite para demonstrar um CRUD (Create, Read, Update, Delete) completo de [Nome do Recurso, ex: Pedras]."

## ✨ Funcionalidades Principais

*   **Listagem de Itens:** Visualização de todos os registros com paginação.
*   **Criação de Itens:** Formulário para adicionar novos registros no banco de dados.
*   **Visualização de Item:** Página de detalhes para um registro específico.
*   **Edição de Itens:** Formulário para atualizar um registro existente.
*   **Exclusão de Itens:** Funcionalidade para remover um registro do banco de dados.

## 🚀 Tecnologias Utilizadas

Este projeto foi construído utilizando um conjunto de tecnologias modernas para desenvolvimento web:

*   **Backend:**
    *   PHP 8.1+
    *   Laravel 10 - Um framework PHP robusto e elegante.
    *   MySQL - Como banco de dados relacional.

*   **Frontend:**
    *   Vite - Ferramenta de build para o frontend, oferecendo um desenvolvimento rápido.
    *   Blade - O motor de templates simples e poderoso do Laravel.
    *   Tailwind CSS (Opcional, se você usou) - Um framework CSS utility-first.
    *   JavaScript

*   **Ambiente de Desenvolvimento:**
    *   Composer - Gerenciador de dependências para PHP.
    *   Node.js e NPM - Para gerenciamento de pacotes frontend e execução do Vite.

## 📋 Pré-requisitos

Antes de começar, você vai precisar ter as seguintes ferramentas instaladas em sua máquina:
*   PHP (versão 8.1 ou superior)
*   Composer
*   Node.js e NPM
*   Um servidor de banco de dados (MySQL, MariaDB, etc.)

## ⚙️ Instalação e Configuração

Siga os passos abaixo para configurar o ambiente de desenvolvimento:

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/seu-usuario/seu-repositorio.git
    ```

2.  **Navegue até o diretório do projeto:**
    ```bash
    cd seu-repositorio
    ```

3.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

4.  **Instale as dependências do Node.js:**
    ```bash
    npm install
    ```

5.  **Configure o arquivo de ambiente:**
    *   Copie o arquivo de exemplo `.env.example` para `.env`.
    ```bash
    cp .env.example .env
    ```
    *   Abra o arquivo `.env` e configure as variáveis do banco de dados (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

6.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

7.  **Execute as migrações do banco de dados:**
    *   Este comando criará as tabelas necessárias.
    ```bash
    php artisan migrate
    ```

8.  **(Opcional) Popule o banco de dados com dados de teste:**
    *   Se você criou seeders, execute o comando abaixo.
    ```bash
    php artisan db:seed
    ```

## ▶️ Executando o Projeto

Para rodar a aplicação, você precisará iniciar tanto o servidor de backend do Laravel quanto o servidor de desenvolvimento do Vite.

1.  **Inicie o servidor de desenvolvimento do Vite:**
    *   Este comando irá compilar os assets do frontend e ficará observando por alterações.
    ```bash
    npm run dev
    ```

2.  **Em um novo terminal, inicie o servidor do Laravel:**
    ```bash
    php artisan serve
    ```

3.  **Acesse a aplicação:**
    *   Abra seu navegador e acesse: http://127.0.0.1:8000
