# 📖 Buku Tamu Web App

**Buku Tamu** is a simple web-based guestbook application built with **Laravel**, allowing users to register their visit, upload files, and manage entries through a clean interface.

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-76.3%25-blue?style=flat-square&logo=php)
![Blade](https://img.shields.io/badge/Blade-22.4%25-red?style=flat-square&logo=laravel)

---

## ✨ Features

- 📝 Guest entry form with validation
- 📂 File upload support
- 🧾 Guest list with modal-based delete confirmation
- 🔐 Basic authentication (Laravel)
- 📦 Lightweight and easy to deploy

---

## 🗂️ Project Structure

| Folder        | Description                               |
|---------------|--------------------------------------------|
| `app/`        | Core logic: controllers, models             |
| `resources/`  | Views (Blade templates)                     |
| `routes/`     | Web route definitions                       |
| `database/`   | Migrations and seeders                      |
| `public/`     | Public-facing assets and entry point        |

---

## 🚀 Getting Started

```bash
git clone https://github.com/IlhamNur/bukutamu.git
cd bukutamu

# Install dependencies
composer install
cp .env.example .env
php artisan key:generate

# Migrate database
php artisan migrate

# Start development server
php artisan serve
```

---

## 🧠 Tech Stack

- **Framework**: Laravel
- **Templating**: Blade
- **Language**: PHP
- **Database**: MySQL

---

## 🙋 About the Developer

**Ilham Nur Romdoni**  
🔖 Personal brand: `hmnr`  
📬 [LinkedIn](https://www.linkedin.com/in/ilham-nur-romdoni-167263206/) • 📩 romdhoninuril@gmail.com

---

> Give this repo a ⭐ if you find it helpful or inspiring!
