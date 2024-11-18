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
(1, 'Administrador', NOW(), NOW()),
(2, 'Operador', NOW(), NOW()),
(4, 'view_produtos', NOW(), NOW()),
(5, 'view_categorias', NOW(), NOW()),
(6, 'view_marcas', NOW(), NOW());

```
Tabela (role_permission)
```
INSERT INTO role_permission (id, role_id, permission_id) VALUES 
(1, 1, 1),  -- Administrador com permissão de Administrador
(2, 1, 2),  -- Administrador com permissão de Operador
(4, 2, 1),  -- Operador com permissão de Administrador
(5, 2, 2),  -- Operador com permissão de Operador
(7, 2, 4),  -- Operador com permissão de visualizar produtos
(8, 2, 5),  -- Operador com permissão de visualizar categorias
(9, 2, 6);  -- Operador com permissão de visualizar marcas
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
Substitua $2y$10$hashed_password_here pela senha hash gerada do valor desejado. Por exemplo, para a senha 123456, você pode gerar o hash utilizando:
```
php artisan tinker
>>> bcrypt('123456')
```

## 🖥️ Como Usar
Acesso ao Sistema<br />
Abra o navegador e acesse: http://localhost/(projeto)/public/.<br />
Faça login com as credenciais:<br />
## Administrador
Usuário admin@example.com	<br />	
Senha (Você define)<br />

## Operador
Usuário operator@example.com<br />
Senha	(Você define)<br />




