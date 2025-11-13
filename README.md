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
- 📁 **Gerenciamento de cadastros:**  
  - Marcas  
  - Modelos  
  - Cores  
  - Veículos  

Cada veículo deve conter:  
- Mínimo de **3 fotos** (armazenadas como **links**, não upload real);  
- Campos obrigatórios: **ano**, **quilometragem** e **valor**.  

O administrador pode:  
- ➕ **Adicionar** novos veículos;  
- ✏️ **Editar** veículos existentes;  
- ❌ **Excluir** registros.  

---

## 🎨 Template e Layout  

O site utiliza um **template visual base** com o uso correto de **@section** e **@yield** no Laravel.  

> ⚠️ Trabalhos sem template **não serão corrigidos**.  

Critérios de avaliação visual:  
- Estética agradável e organizada;  
- Identidade visual coerente;  
- Uso de **frameworks CSS** (ex: Bootstrap, Tailwind, etc.) é permitido.  

---

## ⚙️ Tecnologias e Requisitos  

- **Framework:** Laravel  
- **Banco de Dados:** MySQL  
- **Autenticação:** Login e senha (padrão Laravel)  
- **Estilização:** Bootstrap ou outro framework CSS  
- **Imagens:** Somente via **links (URLs)** válidos, sem upload real  

---

🚀 Como Rodar o Projeto

Clone este repositório:

git clone https://github.com/seu-usuario/sistema-venda-veiculos.git


Acesse a pasta do projeto:

cd sistema-venda-veiculos


Instale as dependências:

composer install
npm install && npm run dev


Configure o arquivo .env:

cp .env.example .env
php artisan key:generate


Configure o banco de dados no .env e rode as migrações:

php artisan migrate --seed


Inicie o servidor local:

php artisan serve

🔑 Acesso ao Sistema

Usuário Administrador:

E-mail: admin@admin.com
Senha: admin123

🖼️ Prints do Sistema

Páginas:

Página Inicial	

Detalhes do Veículo	

Login	

Área Admin	

Cadastro de Veículo	

👨‍💻 Autor(es)

Nome do Aluno: [Seu Nome Aqui]
Curso: Desenvolvimento Web / Programação para Internet
Instituição: [Nome da Instituição]
