# Projeto PBE (Programação Backend)

Este repositório contém diversos projetos e atividades desenvolvidos no âmbito de Programação Backend e Lógica de Programação.

## Estrutura do Repositório

O repositório está organizado nas seguintes pastas principais:

### 📁 [confeccaoTB](./confeccaoTB)
Um sistema administrativo completo desenvolvido em **Laravel**. Este projeto foca na gestão de uma confecção, incluindo controle de estoque, pedidos e parceiros.

*   **Funcionalidades Principais:**
    *   **Gestão de Clientes:** CRUD completo para cadastro e manutenção de clientes.
    *   **Gestão de Fornecedores:** Controle de parceiros e fornecedores de matéria-prima.
    *   **Controle de Produtos:** Cadastro de itens produzidos ou comercializados.
    *   **Estoque:** Movimentação e controle de saldo de produtos.
    *   **Pedidos:** Registro e acompanhamento de ordens de venda/serviço.
*   **Tecnologias:** Laravel, PHP, Blade Engines, Tailwind CSS.

### 📁 [FormativaMat02](./FormativaMat02)
Segundo projeto em **Laravel**, focado em atividades formativas. Assim como o anterior, utiliza a estrutura padrão do framework para gerenciar lógicas de backend.

*   **Conteúdo:** Estrutura base de uma aplicação Laravel (App, Config, Database, Resources, Routes).
*   **Objetivo:** Desenvolvimento de competências específicas de roteamento, controladores e migrações de banco de dados.

### 📁 [cruzamento seguro](./cruzamento%20seguro)
Pasta dedicada à lógica de controle de tráfego e segurança viária.

*   **Arquivos:**
    *   `fluxograma_semaforo.png`: Representação visual da lógica de um semáforo inteligente.
    *   `cruzamento seguro.md`: Documentação detalhada sobre o funcionamento do projeto.
    *   `27.docx`: Documento complementar com especificações ou relatórios.
*   **Contexto:** Provavelmente um estudo de caso ou projeto de automação focado em segurança em cruzamentos.

---

## Como Executar os Projetos Laravel

Para os projetos `confeccaoTB` e `FormativaMat02`, siga os passos abaixo:

1.  Navegue até a pasta do projeto:
    ```bash
    cd confeccaoTB  # ou cd FormativaMat02
    ```
2.  Instale as dependências do PHP:
    ```bash
    composer install
    ```
3.  Instale as dependências do Node.js:
    ```bash
    npm install
    ```
4.  Configure o arquivo `.env` (copie do `.env.example` se necessário).
5.  Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```
6.  Execute as migrações do banco de dados:
    ```bash
    php artisan migrate
    ```
7.  Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```
