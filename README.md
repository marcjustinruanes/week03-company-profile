# Company Profile Website using Laravel MVC

---

## 1. Introduction

### What is a Company Profile Website?

A Company Profile Website is a website that provides information about a company, its services, background, team, and contact details. It serves as the company's online presence and allows visitors to learn about the organization and the services it provides.

### Why Businesses Need a Company Profile Website

Businesses need a company profile website to establish a professional online presence and make important information easily accessible to customers. A well-designed website helps a company introduce its services, build credibility, communicate with potential clients, and provide convenient ways for people to get in touch. Without an online presence, businesses risk losing visibility and trust in a digital-first world.

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

MVC stands for Model-View-Controller. It is a software architecture pattern that separates an application into three main components, each with a distinct responsibility.

- The **Model** manages the application's data and business logic. It communicates with the database and returns data to the Controller.
- The **View** is responsible for displaying the user interface. It presents data to the user in a readable format using HTML and Blade templates.
- The **Controller** acts as the middleman between the Model and the View. It receives requests from the browser, processes them, and decides which View to return.

For this company profile project, the main logic is handled through the `CompanyController`, while the pages are built using Blade views. No database models were needed since the content is static.

### Why Laravel Uses MVC

Laravel uses MVC because it promotes clean, organized, and maintainable code. Instead of mixing routing logic, application logic, and HTML in a single file, MVC separates each concern into its own layer. This makes it easier for developers to work on one part of the application without affecting the others. It also makes the codebase easier to read, test, and scale over time.

### Advantages of MVC

Using MVC provides several advantages:

- **Separation of concerns** – Each component has a single, well-defined responsibility.
- **Better organization** – Files are grouped by their role, making the project easier to navigate.
- **Reusability** – Layouts and components can be shared across multiple pages without duplication.
- **Maintainability** – Updating one part of the application is easier without affecting unrelated parts.
- **Scalability** – The structure can support growth as new features are added.
- **Team collaboration** – Developers can work on different parts of the application independently.

### Laravel Request Flow

```text
Browser
   │
   ▼
Route (web.php)
   │
   ▼
Controller (CompanyController)
   │
   ▼
Blade View (pages/home.blade.php)
   │
   ▼
HTML Response
   │
   ▼
Browser
```

---

## 4. Laravel Routing

### What is Routing?

Routing is the mechanism that determines how an application responds to a specific URL and HTTP request method. In Laravel, routes are defined in routes/web.php and connect a URL path to a controller method or a closure.

When a user accesses a URL in the browser, Laravel checks the route definitions to find a matching route and then executes the associated controller method.

### GET Requests

This project uses `Route::get()` to handle GET requests. A GET request is made when a user navigates to a page in the browser. It retrieves and displays content without modifying any data.

Example:

```php
Route::get('/about', [CompanyController::class, 'about'])->name('about');
```

When the user visits `/about`, Laravel calls the `about()` method in `CompanyController`, which returns the About page view.

### Named Routes

Named routes allow a route to be referenced by a name instead of its URL. This is useful because if the URL ever changes, only the route definition needs to be updated — not every link in the application.

Example definition:

```php
Route::get('/services', [CompanyController::class, 'services'])->name('services');
```

Example usage in a Blade template:

```blade
<a href="{{ route('services') }}">Services</a>
```

### Route Definitions

```php
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

### Route Screenshot

`screenshots/routes_web.png`

---

## 5. Controllers

### Purpose of Controllers

A controller receives HTTP requests forwarded by the router and determines what response should be returned. It keeps application logic out of the route file and out of the views, acting as the coordinator between the two.

The controller for this project is located at:

`app/Http/Controllers/CompanyController.php`

### Benefits of Controllers

- Keeps route definitions clean and readable.
- Centralizes page logic in one organized class.
- Separates request handling from the HTML presentation layer.
- Makes it easy to add logic such as passing data to views in the future.
- Allows related methods to be grouped together in a single file.

### Controller Methods

```php
<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
```

Each method returns a Blade view from the `resources/views/pages/` directory.

### Controller Screenshot

`screenshots/company_controller.png`

---

## 6. Blade Templating Engine

Blade is Laravel's built-in templating engine. It allows developers to create HTML views using Blade directives and Laravel's template syntax. Blade files use the `.blade.php` extension.

This project uses Blade to create the four main pages and reusable website layouts and components.

### Blade Layouts

A Blade layout is a reusable template that defines the common structure of multiple pages. Instead of repeating the same HTML structure on every page, this project uses one shared layout.

The main layout is located at:

`resources/views/layouts/app.blade.php`

The layout contains the common website structure, including the navigation bar, main content area, footer, CSS, and JavaScript.

### Blade Components

Blade components are reusable parts of the user interface. They help reduce code duplication by allowing common elements to be created once and reused throughout the website.

This project uses the following components:

- `resources/views/components/navbar.blade.php` — contains the navigation bar and navigation links.
- `resources/views/components/footer.blade.php` — contains the footer, copyright information, and other footer content.

### @extends

The `@extends` directive allows a Blade page to use an existing layout.

```blade
@extends('layouts.app')
```

This tells Laravel that the page should use:

 `resources/views/layouts/app.blade.php`

 The individual page then provides the content that will be inserted into the layout.

### @section

The `@section` directive defines content that will be placed into a corresponding `@yield` layout.

```blade
@section('title', 'Home — NexaWorks')

@section('content')
    <h1>Welcome</h1>
@endsection
```

### @yield

The `@yield` directive is placed inside the layout file. It marks the location where a child view's `@section` content will be inserted.

```blade
<title>@yield('title', 'NexaWorks')</title>

<main>
    @yield('content')
</main>
```

### @include

The `@include` directive inserts another Blade file into the current view. It is used in the layout to include the navbar and footer components.

```blade
@include('components.navbar')
@include('components.footer')
```

### Blade Layout Screenshot

`screenshots/blade_layout.png`

---

## 7. Laravel Folder Structure

| Folder | Purpose |
|---|---|
| `app/` | Contains the core application code including Controllers and Models. The `CompanyController.php` is located inside `app/Http/Controllers/`. |
| `routes/` | Contains all route definition files. `web.php` defines the routes for browser-accessible pages. |
| `resources/` | Contains views, raw CSS, and JavaScript. Blade templates are stored inside `resources/views/`. |
| `public/` | The web server's document root. Contains compiled assets, `index.php` (the application entry point), `css/company.css`, and `js/company.js`. |
| `bootstrap/` | Contains the application bootstrapping files that initialize the Laravel framework on each request. |
| `config/` | Contains all configuration files for the application such as database settings, mail, cache, and session configuration. |

---

## 8. Screenshots

| Screenshot | File |
|---|---|
| Home Page | `screenshots/home_page.png` |
| About Page | `screenshots/about_page.png` |
| Services Page | `screenshots/services_page.png` |
| Contact Page | `screenshots/contact_page.png` |
| Navigation Bar | `screenshots/navbar.png` |
| Footer | `screenshots/footer.png` |
| Route Definitions | `screenshots/routes_web.png` |
| Controller | `screenshots/company_controller.png` |
| Blade Layout | `screenshots/blade_layout.png` |

---

## 9. Problems Encountered

### Problem 1: Route Not Found (404 Error)

When first setting up the project, visiting `/home` or `/about` returned a 404 error. The browser could not find the requested page.

### Problem 2: View Not Found Error

After creating the controller, Laravel threw a `View [pages.home] not found` error when trying to load the home page.

### Problem 3: Navbar Active Link Not Highlighting

The active navigation link was not being highlighted when visiting different pages. All links appeared the same regardless of the current page.

---

## 10. Solutions

### Solution 1: Route Not Found

The issue was that the default `routes/web.php` still pointed to the `welcome` view using a closure instead of the `CompanyController`. The fix was to replace the default route with the proper controller-based routes:

```php
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

### Solution 2: View Not Found

The error occurred because the `resources/views/pages/` directory did not exist yet. The fix was to create the `pages/` folder inside `resources/views/` and place the Blade view files (`home.blade.php`, `about.blade.php`, `services.blade.php`, `contact.blade.php`) inside it. Laravel uses dot notation to locate views, so `pages.home` maps to `resources/views/pages/home.blade.php`.

### Solution 3: Navbar Active Link

The navbar was using static HTML with no way to detect the current route. The fix was to use Laravel's `request()->routeIs()` helper inside the Blade component to conditionally apply the `active` CSS class:

```blade
<a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
```

This checks the current route name and applies the `active` class only when the user is on that page.

---

## 11. Reflection

Developing this company profile website using Laravel's MVC architecture was a valuable learning experience that deepened my understanding of how modern web applications are structured and why that structure matters.

Before this project, I had a general idea of what MVC meant, but working through it hands-on made the concept much clearer. The Model handles data, the View handles presentation, and the Controller handles the logic that connects the two. In this project, since the content is static, there was no need for Models or database interaction. The focus was on understanding how routes, controllers, and Blade views work together to serve pages to the browser.

One of the most important things I learned is the value of separation of concerns. When each part of the application has a single, well-defined responsibility, the code becomes easier to read, easier to debug, and easier to change. For example, if I wanted to update the layout of every page, I only needed to edit `layouts/app.blade.php` — not every individual page file. If I wanted to change a URL, I only needed to update `web.php`. This kind of isolation prevents small changes from causing unexpected problems elsewhere in the application.

I also learned how routes, controllers, and views work together as a pipeline. A request from the browser enters through a route, which passes it to a controller method, which then returns a Blade view as the response. Understanding this flow made it much easier to trace errors and understand where each piece of logic belongs.

The use of Blade directives like `@extends`, `@section`, `@yield`, and `@include` showed me how templating engines reduce code duplication. Instead of copying the same navbar and footer HTML into every page, I wrote them once as components and included them in the shared layout. This is a practical application of the DRY principle — Don't Repeat Yourself.

Looking ahead, I can see how this architecture scales to larger enterprise systems. In a real-world application, the Model layer would connect to a database, controllers would handle authentication, form validation, and business rules, and views would display dynamic data. The same MVC structure that works for four static pages can support hundreds of routes, dozens of controllers, and complex data relationships — because the separation of concerns keeps each layer manageable regardless of how large the system grows.

This project gave me a solid foundation in Laravel and MVC thinking that I can build on in future projects.

---

## 12. References

Laravel LLC. (2024). *Laravel 11.x documentation*. Laravel. https://laravel.com/docs

PHP Group. (2024). *PHP manual*. PHP. https://www.php.net/manual/en/

Mozilla Developer Network. (2024). *MDN web docs*. Mozilla. https://developer.mozilla.org

Otwell, T. (2024). *Blade templates — Laravel*. Laravel. https://laravel.com/docs/blade

Otwell, T. (2024). *Routing — Laravel*. Laravel. https://laravel.com/docs/routing

Otwell, T. (2024). *Controllers — Laravel*. Laravel. https://laravel.com/docs/controllers
