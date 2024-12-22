<h1 align='center'>📋 Projeto CRUD Showcase</h1>

---

# 🌟 Descrição
Este projeto é um exemplo completo de uma aplicação CRUD (Criar, Ler, Atualizar, Excluir) desenvolvida em **PHP** com integração ao banco de dados **MySQL** e um design moderno utilizando o template **AdminLTE**. Ele abrange funcionalidades de gerenciamento de clientes, pedidos e produtos, além de um sistema de autenticação para controle de acesso.

---

# 🛠️ Funcionalidades

## 👥 Gerenciamento de Clientes
- **Criação de Clientes**:
  - Arquivo: `addCliente.php`
  - Descrição: Processa o envio de formulários para criar novos clientes no banco de dados.
  - Lógica: Utiliza validação de entrada e insere os dados na tabela de clientes.
- **Edição de Clientes**:
  - Arquivo: `editarCliente.php`
  - Descrição: Gera um formulário com os dados existentes de um cliente para edição e salva as alterações no banco de dados.
- **Exclusão de Clientes**:
  - Arquivo: `deletarCliente.php`
  - Descrição: Realiza a exclusão de um cliente selecionado com base no ID.
- **Listagem de Clientes**:
  - Arquivo: `listaClientes.php`
  - Descrição: Exibe uma tabela interativa com todos os clientes cadastrados, incluindo opções de edição e exclusão.

## 🛍️ Gerenciamento de Produtos
- **Criação de Produtos**:
  - Arquivo: `addProduto.php`
  - Descrição: Permite a adição de novos produtos ao inventário.
- **Edição de Produtos**:
  - Arquivo: `editarProduto.php`
  - Descrição: Edita as informações de um produto existente no banco de dados.
- **Exclusão de Produtos**:
  - Arquivo: `deletarProduto.php`
  - Descrição: Remove um produto específico do inventário.
- **Listagem de Produtos**:
  - Arquivo: `listaProdutos.php`
  - Descrição: Mostra uma tabela interativa com os produtos cadastrados, permitindo filtragem e visualização detalhada.

## 📦 Gerenciamento de Pedidos
- **Criação de Pedidos**:
  - Arquivo: `addPedido.php`
  - Descrição: Registra novos pedidos, vinculando clientes e produtos.
- **Edição de Pedidos**:
  - Arquivo: `editarPedido.php`
  - Descrição: Atualiza os detalhes de pedidos existentes no sistema.
- **Exclusão de Pedidos**:
  - Arquivo: `deletarPedido.php`
  - Descrição: Exclui pedidos selecionados com base no ID.
- **Listagem de Pedidos**:
  - Arquivo: `listaPedidos.php`
  - Descrição: Exibe uma lista detalhada de pedidos, incluindo opções de edição e exclusão.

## 🔐 Sistema de Autenticação
- **Login**:
  - Arquivo: `conexaoDB.php`
  - Descrição: Realiza a conexão ao banco de dados para autenticação do usuário.
- **Segurança**:
  - Arquivo: `segurancaUsuario.php`
  - Descrição: Verifica se o usuário está autenticado antes de acessar páginas protegidas.
- **Registro de Usuários**:
  - Arquivo: `criarConta.php`
  - Descrição: Permite o cadastro de novos usuários no sistema.

---

# 🚀 Instalação
1. Clone o repositório:
   ```bash
   git clone <url-do-repositorio>
   ```
2. Navegue até o diretório do projeto:
   ```bash
   cd crud-showcase-main
   ```
3. Configure o banco de dados:
   - Importe o arquivo `CRUD_SQL.sql` para o seu servidor MySQL.
   - Atualize as credenciais do banco de dados no arquivo `conexaoDB.php`.
4. Sirva os arquivos PHP usando um servidor local como XAMPP, WAMP ou o servidor embutido do PHP:
   ```bash
   php -S localhost:8000
   ```

---

# 📂 Estrutura do Projeto
- `index.php`: Ponto de entrada da aplicação.
- `pages/`: Contém os módulos principais:
  - **Clientes**: CRUD de clientes.
  - **Produtos**: CRUD de produtos.
  - **Pedidos**: CRUD de pedidos.
  - **Login**: Sistema de autenticação.
- `AdminLTE/`: Template para interface do usuário.
- `images/`: Recursos visuais, como logos.

---

# 🖼️ Capturas de Tela
Foo

---

# 🤝 Contribuição
1. Faça um fork do repositório.

2. Crie um novo branch:
   ```bash
   git checkout -b minha-funcionalidade
   ```

3. Commit suas alterações:
   ```bash
   git commit -m "Minha funcionalidade"
   ```

4. Faça o push para o branch:
   ```bash
   git push origin minha-funcionalidade
   ```

5. Pronto! Já pode abrir seu Pull Request.

---

# 📜 Licença
Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](AdminLTE/LICENSE) para mais detalhes.

## 🙌 Agradecimentos
- [AdminLTE Template](https://adminlte.io/) pelo design de interface moderna.

