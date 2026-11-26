<p align="center">
  <img src="banner.svg" width="100%" alt="VivaBem"/>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.0-1C1C1C?style=for-the-badge&logo=php&logoColor=48C9B0"/>
  <img src="https://img.shields.io/badge/Laravel-9-1C1C1C?style=for-the-badge&logo=laravel&logoColor=48C9B0"/>
  <img src="https://img.shields.io/badge/MySQL-1C1C1C?style=for-the-badge&logo=mysql&logoColor=48C9B0"/>
  <img src="https://img.shields.io/badge/Bootstrap-1C1C1C?style=for-the-badge&logo=bootstrap&logoColor=48C9B0"/>
</p>

---

## <img src="https://img.shields.io/badge/-%20-48C9B0?style=flat-square" height="15" align="absmiddle"/> Sobre o projeto

O **VivaBem** é uma aplicação web para academias, desenvolvida em **Laravel**. O sistema reúne o site institucional, com a apresentação das modalidades e o contato com a academia, e áreas restritas para **administradores, instrutores e alunos**.

---

## <img src="https://img.shields.io/badge/-%20-48C9B0?style=flat-square" height="15" align="absmiddle"/> Funcionalidades

**Site institucional**
- Páginas de início, sobre, blog, treinos e orçamento
- Catálogo de modalidades: musculação, treino de peso, aeróbico, lutas, natação e meditação
- Formulário de contato com registro no banco de dados e envio por e-mail

**Áreas restritas**
- Login de usuários
- Painel do administrador
- Painel do instrutor
- Painel do aluno

---

## <img src="https://img.shields.io/badge/-%20-48C9B0?style=flat-square" height="15" align="absmiddle"/> Identidade visual

| Cor | Hex | Uso |
|:---:|:---:|:---|
| <img src="https://img.shields.io/badge/-%20%20%20%20%20%20-48C9B0?style=flat-square"/> | `#48C9B0` | Cor principal (tema) |
| <img src="https://img.shields.io/badge/-%20%20%20%20%20%20-FFB539?style=flat-square"/> | `#FFB539` | Destaque secundário |
| <img src="https://img.shields.io/badge/-%20%20%20%20%20%20-1C1C1C?style=flat-square"/> | `#1C1C1C` | Títulos e fundos escuros |
| <img src="https://img.shields.io/badge/-%20%20%20%20%20%20-F3F3F3?style=flat-square"/> | `#F3F3F3` | Fundos claros |

**Tipografia:** Poppins

---

## <img src="https://img.shields.io/badge/-%20-48C9B0?style=flat-square" height="15" align="absmiddle"/> Como executar

**Pré-requisitos:** PHP 8.0+, Composer e MySQL.

```bash
# Clonar o repositório
git clone https://github.com/GustavoHermogenes/academia.git
cd academia/vivaBem

# Instalar as dependências
composer install

# Configurar o ambiente
cp .env.example .env
php artisan key:generate
# Ajuste as credenciais do banco de dados e do e-mail no arquivo .env

# Criar as tabelas
php artisan migrate

# Iniciar o servidor
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`.

---

## <img src="https://img.shields.io/badge/-%20-48C9B0?style=flat-square" height="15" align="absmiddle"/> Autor

<p>
  <b>Gustavo Hermogenes</b> — Desenvolvedor Full Stack<br/><br/>
  <a href="https://github.com/GustavoHermogenes" target="_blank"><img src="https://img.shields.io/badge/GitHub-1C1C1C?style=for-the-badge&logo=github&logoColor=48C9B0"/></a>
  <a href="https://www.linkedin.com/in/gustavohermogenes/" target="_blank"><img src="https://img.shields.io/badge/LinkedIn-1C1C1C?style=for-the-badge&logo=linkedin&logoColor=48C9B0"/></a>
</p>

<p align="center">
  <img src="https://capsule-render.vercel.app/api?type=waving&color=0:48C9B0,100:1C1C1C&height=100&section=footer" width="100%"/>
</p>
