🎨 Sistema de Gerenciamento - Teste Prático Laravel
<p align="center"> <img src="https://img.shields.io/badge/Laravel-10.x-red" alt="Laravel 10.x"> <img src="https://img.shields.io/badge/MySQL-8.0-blue" alt="MySQL 8.0"> <img src="https://img.shields.io/badge/Bootstrap-5.x-purple" alt="Bootstrap 5.x"> <img src="https://img.shields.io/badge/Status-Completed-brightgreen" alt="Status Completed"> </p>
Um sistema de gerenciamento criado como teste prático para a vaga de programador PHP Laravel na Santa Casa de Porto Alegre.
Este projeto visa demonstrar habilidades em Laravel, organização de código e boas práticas

---

## ⚙️ Funcionalidades

Usuários e Permissões:

✅ CRUD completo para Usuários e Permissões.<br /> 
✅ Apenas administradores têm acesso a essas funcionalidades.<br /> 
Acesso Diferenciado:

**Administradores:** Acesso a usuários e permissões.<br /> 
**Operadores:** Acesso a produtos, categorias e marcas.<br /> 
<br /> 
**Segurança:**<br /> 
🔒 Controle de acesso baseado em roles (funções).<br /> 
Interface Estética:<br /> 
🎨 Layout moderno utilizando Bootstrap.<br /> 
📱 Design responsivo para melhor experiência.<br /> 

## 🛠 Tecnologias Utilizadas

**Laravel 10:** Framework PHP para construção de aplicações modernas.<br /> 
**MySQL:** Banco de dados relacional para armazenamento de dados.<br /> 
**Bootstrap 5:** Framework CSS para estilização e responsividade.<br /> 
**GitHub:** Para versionamento do projeto.<br /> 
**PHP 8.1+:** Versão mínima necessária para compatibilidade.<br /> 

## 📂 Estrutura do Projeto
```plaintext
/teste_pratico
├── app/
│   ├── Controllers/
│   │   ├── UserController.php
│   │   ├── PermissionController.php
│   │   ├── ProdutoController.php
│   │   ├── CategoriaController.php
│   │   ├── MarcaController.php
│   │
│   ├── Models/
│   │   ├── User.php
│   │   ├── Role.php
│   │   ├── Permission.php
│   │
├── resources/
│   ├── views/
│   │   ├── usuarios/
│   │   ├── permissions/
│   │   ├── produtos/
│   │   ├── categorias/
│   │   ├── marcas/
│   │   ├── layouts/
│   │   └── welcome.blade.php
│
├── routes/
│   ├── web.php
│
├── public/
│   ├── index.php
│
└── README.md

```
## 🚀 Passo a Passo para Instalação
Pré-requisitos<br />
Certifique-se de ter os seguintes softwares instalados:<br />

PHP (>= 8.1)<br />
Composer<br />
MySQL<br />
XAMPP ou outro servidor local.<br />
Git<br />

## Clonar o Repositório
```
git clone https://github.com/(repositorio)
cd repositorio
```

## Configurar o Banco de Dados
Inicie o XAMPP e ative o servidor MySQL.<br />
Acesse o phpMyAdmin e crie um banco de dados chamado teste_pratico.<br />
Configure o arquivo .env:<br />
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_pratico
DB_USERNAME=root
DB_PASSWORD=
```

## Instalar Dependências
```
composer install
npm install
npm run build
```

## Configurar as Tabelas
```
php artisan migrate
```

## Configurar Banco de dados (IMPORTANTE)
Adicione os seguintes registros diretamente no banco:<br />

Tabela (roles)
```
INSERT INTO roles (id, name, created_at, updated_at) VALUES 
(1, 'Administrador', NOW(), NOW()),
(2, 'Operador', NOW(), NOW());
```

Tabela (permissions)
```
INSERT INTO permissions (id, name, created_at, updated_at) VALUES 
(1, 'view_users', NOW(), NOW()),
(2, 'edit_users', NOW(), NOW()),
(3, 'delete_users', NOW(), NOW());
```

Usuário Administrador
```
INSERT INTO users (name, email, password, role_id, created_at, updated_at) VALUES 
('Admin User', 'admin@example.com', '$2y$10$hashed_password_here', 1, NOW(), NOW());
```
Usuário Operador
```
INSERT INTO users (name, email, password, role_id, created_at, updated_at) VALUES 
('Operator User', 'operator@example.com', '$2y$10$hashed_password_here', 2, NOW(), NOW());
```

## 🖥️ Como Usar
Acesso ao Sistema<br />
Abra o navegador e acesse: http://localhost/(projeto)/public/.<br />
Faça login com as credenciais:<br />
## Administrador
Usuário admin@example.com	<br />	
Senha admin123<br />

## Operador
Usuário operator@example.com<br />
Senha	operator123<br />




