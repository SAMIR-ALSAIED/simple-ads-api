# 🚀 Ads API Project (Laravel)

A RESTful API built with Laravel for managing classified ads, including authentication, categories, messaging, and location-based features.

---

## 📌 Features

* 🔐 Authentication (Register, Login, Logout)
* 📢 Ads Management (CRUD)
* 📂 Categories Management
* 💬 Messaging System between users
* 🌍 Cities & Districts
* 🔍 Search Ads
* 📄 Pagination Support
* ⚙️ Settings Endpoint

---

## 🛠 Tech Stack

* PHP (Laravel)
* MySQL
* Laravel Sanctum (Authentication)
* RESTful API Architecture

---

## ⚙️ Installation

1. Clone the repository:

```bash
git clone https://github.com/SAMIR-ALSAIED/ads-api-project.git
cd ads-api-project
```

2. Install dependencies:

```bash
composer install
```

3. Copy `.env` file:

```bash
cp .env.example .env
```

4. Configure your database in `.env`

5. Generate app key:

```bash
php artisan key:generate
```

6. Run migrations:

```bash
php artisan migrate
```

7. Start the server:

```bash
php artisan serve
```

---

## 🔗 Base URL

```
http://localhost:8000/api
```

---

## 🔐 Authentication

### Register

`POST /api/register`

### Login

`POST /api/login`

### Logout

`POST /api/logout`

> Use Bearer Token for protected routes:

```
Authorization: Bearer YOUR_TOKEN
```

---

## 📢 Ads Endpoints

| Method | Endpoint     | Description   |
| ------ | ------------ | ------------- |
| GET    | /ads         | Get all ads   |
| GET    | /ads/{id}    | Get single ad |
| POST   | /ads         | Create ad     |
| PUT    | /ads/{id}    | Update ad     |
| DELETE | /ads/{id}    | Delete ad     |
| GET    | /ads?search= | Search ads    |

---

## 📂 Categories

| Method | Endpoint         |
| ------ | ---------------- |
| GET    | /categories      |
| GET    | /categories/{id} |
| POST   | /categories      |
| PUT    | /categories/{id} |
| DELETE | /categories/{id} |

---

## 💬 Messages

| Method | Endpoint  |
| ------ | --------- |
| POST   | /messages |
| GET    | /messages |

---

## 🌍 Location

| Method | Endpoint             |
| ------ | -------------------- |
| GET    | /cities              |
| GET    | /districts/{city_id} |

---

## ⚙️ Settings

| Method | Endpoint  |
| ------ | --------- |
| GET    | /settings |

---

## 🧪 Testing

You can test the API using:

* Postman
* Thunder Client

---

## 📦 Example Response

```json
{
  "status": true,
  "message": "success",
  "data": []
}
```

---

## ❗ Error Response

```json
{
  "status": false,
  "message": "Validation error",
  "errors": {
    "field": ["Error message"]
  }
}

## 🔒 Authentication

This API uses **Laravel Sanctum** for authentication.



