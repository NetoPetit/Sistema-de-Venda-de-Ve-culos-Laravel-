# 🚗 Sistema de Venda de Veículos – Laravel    

---

## 🧩 Descrição Geral  

Este projeto consiste em um **Sistema de Venda de Veículos** desenvolvido em **Laravel**, com autenticação de usuários e divisão entre **área pública** e **área administrativa**.  

O sistema simula um site de classificados automotivos, inspirado em portais como **Carros.com.br**, **iCarros** e **Webmotors**.  

---

## 🌐 Áreas do Sistema  

### 🏠 Área Pública  
Visão aberta para todos os visitantes, onde é possível:  
- Visualizar todos os veículos cadastrados.  
- Acessar a página de **detalhes** de cada veículo.  

Cada veículo exibe:  
- 🖼️ **Foto principal** (imagem via link);  
- 🚘 **Marca, modelo e cor**;  
- 📅 **Ano de fabricação**;  
- 📏 **Quilometragem atual**;  
- 💵 **Valor total**;  
- 📝 **Descrição detalhada**.  

Ao clicar em um veículo, o visitante acessa a página com **todas as informações** e **demais fotos**.  

---

### 🔐 Área Administrativa  
Acesso restrito a **usuários autenticados (admin)**.  

Funcionalidades:  
- 📁 **Gerenciamento de cadastro:**  
  - Marca  
  - Modelo  
  - Cor
  - Ano
  - Km  
  - Preço
  - Descrição   

O administrador pode:  
- ➕ **Adicionar** novos veículos;  
- ✏️ **Editar** veículos existentes;  
- ❌ **Excluir** registros.  

---

## 🎨 Template e Layout  

O site utiliza um **template visual base** com o uso de **@section** e **@yield** no Laravel.  
 
---

## ⚙️ Tecnologias  

- **Framework:** Laravel  
- **Banco de Dados:** MySQL  
- **Autenticação:** Login e senha (padrão Laravel)  
- **Estilização:** Bootstrap ou outro framework CSS  
- **Imagens:** Somente via **links (URLs)** válidos, sem upload real  

---

## 🚀 Como Rodar o Projeto

### 🔹 1. Clone este repositório

```bash
git clone https://github.com/seu-usuario/sistema-venda-veiculos.git
```

### 🔹 2. Acesse a pasta do projeto
```bash
cd sistema-venda-veiculos
```
### 🔹 3. Instale as dependências do PHP e JavaScript
```bash
composer install
npm install && npm run dev
```
### 🔹 4. Configure o arquivo .env
```bash
cp .env.example .env
php artisan key:generate
```
### 🔹 5. Configure o banco de dados no .env e rode as migrações + seeders
```bash
php artisan migrate --seed
```
### 🔹 6. Inicie o servidor local
```bash
php artisan serve
```

## 🔑 Acesso ao Sistema

### 👤 Usuário Administrador (via Seeder)


E-mail: admin@carrosonline.com


Senha: 12345678



O projeto já vem com dados prontos para teste:
### ✔️ Usuário Admin
### ✔️ Carros pré-cadastrados
### ✔️ Dashboard funcional


## 🖼️ Prints do Sistema

### 📌 Páginas Incluídas


### Página Inicial

![Página Inicial](public/img/paginicial1.png)
![Página Inicial](public/img/paginicial2.png)

### Detalhes do Veículo

![Detalhes do Veículo](public/img/detalhes.png)

### Cadastro de Usuário

![Cadastro de Usuário](public/img/cadastrousuario.png)

### Login

![Login](public/img/login.png)

### Recuperar Senha

![Recuperar Senha](public/img/esqueceusenha.png)

### Área Admin

![Área Admin](public/img/paineladm.png)
![Área Admin](public/img/paineladm2.png)

### Cadastro de Veículo

![Cadastro de Veículo](public/img/cadastrocarro1.png)
![Cadastro de Veículo](public/img/cadastrocarro2.png)
