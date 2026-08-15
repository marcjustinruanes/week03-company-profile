# Company Profile Website using Laravel MVC

## 1. Introduction

### What is a Company Profile Website?

A Company Profile Website is a website that provides information about a company, its services, background, team, and contact details. It serves as the company's online presence and allows visitors to learn about the organization and the services it provides.

### Why Businesses Need a Company Profile Website

Businesses need a company profile website to establish a professional online presence and make important information easily accessible to customers. A well-designed website can help a company introduce its services, build credibility, communicate with potential clients, and provide convenient ways for people to get in touch.

### Purpose of This Project

This project was developed as part of the Week 3 laboratory activity for ITST 302 – Client-Server Technologies. The purpose is to develop a professional multi-page company profile website using Laravel's Model-View-Controller (MVC) architecture.

The project demonstrates the use of Laravel routing, controllers, Blade templates, reusable layouts, and organized project structures. The website contains four main pages: Home, About, Services, and Contact.

---

## 2. Objectives

The main objectives accomplished in this project are:

- Create a professional multi-page company profile website using Laravel.
- Implement Laravel routes for different pages.
- Create a `CompanyController` to handle client requests.
- Use Blade templates to create dynamic web pages.
- Create a reusable Blade layout for consistent website structure.
- Create reusable navbar and footer components.
- Apply the MVC architecture in organizing the application.
- Develop a responsive and professional user interface.
- Display company information, services, team information, and contact details.
- Practice Git version control and maintain the project using a GitHub repository.
---

## 3. MVC Architecture

### What is MVC?

MVC stands for Model-View-Controller. It is a software architecture pattern that separates an application into three main parts: the Model, View, and Controller.

In Laravel, the **Model** is responsible for working with application data and the database. The **View** is responsible for displaying the user interface, while the **Controller** handles requests and determines which response or view should be returned.

For this company profile project, the main application logic is handled through routes and the `CompanyController`, while the website pages are created using Blade views.

### Why Laravel Uses MVC

Laravel uses the MVC architecture to organize application code into separate responsibilities. This makes the application easier to understand, develop, maintain, and update.

Instead of placing routing, application logic, and HTML in one file, Laravel allows each part of the application to have a specific purpose.

### Advantages of MVC

Using MVC provides several advantages:

- **Separation of concerns** – Each part of the application has a specific responsibility.
- **Better organization** – Files are arranged according to their purpose.
- **Reusability** – Components and layouts can be reused across multiple pages.
- **Maintainability** – Changes to one part of the application are easier to manage.
- **Scalability** – The structure can support larger applications as more features are added.

### Laravel Request Flow

The request flow used in this project can be summarized as:

```text
Client (Browser)
       │
       ▼
Route (web.php)
       │
       ▼
CompanyController
       │
       ▼
Blade View
       │
       ▼
HTML Response
       │
       ▼
Browser
```

The architecture diagram is also included in:

`documentation/laravel-mvc-architecture.png`

---

## 4. Laravel Routing

### What is Routing?

Routing determines how Laravel responds to requests made to specific URLs. A route connects a URL and HTTP request method to the appropriate controller method.

The routes for this project are defined in:

`routes/web.php`

### GET Requests

The project uses `Route::get()` to handle GET requests. These requests are used when a user accesses a page through a web browser.

For example:

```php
Route::get('/about', [CompanyController::class, 'about'])->name('about');
```

When the user visits `/about`, Laravel calls the `about()` method in `CompanyController`.

### Named Routes

Named routes allow the application to refer to a route using a specific name instead of repeatedly using its URL.

For example:

```php
Route::get('/about', [CompanyController::class, 'about'])->name('about');
```

The route can then be referenced in a Blade template using:

```blade
<a href="{{ route('about') }}">About</a>
```

This project uses named routes for the Home, About, Services, and Contact pages.

### Route Definitions

The main routes in this project are:

```php
Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

These routes connect each website URL to its corresponding method in `CompanyController`.

### Route Screenshot

The route definitions can be viewed in:

`screenshots/routes_web.png`
