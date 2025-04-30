
![todolist_1000x670_1](https://github.com/user-attachments/assets/62f5cc29-c061-4465-b815-b38576079d1d)

# Todo-List - PHP / Laravel Exercise

In this practice project, goal was to explore the structure and functionality of the PHP Laravel framework. Laravel is a very powerful and popular platform, and there are many different add-ons and starter kits available for it. In addition, it offers useful tools for developing web applications, such as a built-in authentication system and the Blade templating engine for creating page layouts. Laravel is alsoheavily integrated to work with Tailwind CSS. Personally, I still find its usage to be a bit tricky, but of course its possible to use plain CSS alongside it.

## 💻 Application
As an experiment, I created a simple browser-based Todo list application. The user can input a task through an input field, which is then saved to an SQL database. The user interface also allows marking a task as completed, and it becomes to crossed out. Additionally completed tasks can be removed from view entirely using a trash icon. The database contains a column called is_completed, which can have the values 0 (=incomplete), 1 (=complete and visible), or 2 (=complete and hidden). The controller script uses this value to determine which tasks to display on the page.

## 🔧 About
Laravel is a relatively heavy tool and a bit overkill for building this type of simple application, but its still a good exercise in creating a basic CRUD-application. For me it took some time to fully realize the MVC model and especially how Laravels internal routing works. I also used Vite for the frontend, and integrating the stylesheets from the development version into the production build required some tweaking.

## 🔑 Notes
Installing Laravel and setting up the development environment also took a bit of time. Im used to working with XAMPP or LAMP stacks in development, but when using Vite those alone are not enough, you also need to run Laravels own development server during development.

Deploying the project didn’t work on my shared hosting provider, as Laravel is better suited for isolated environments or on a dedicated virtual server. Laravels routing does not function correctly if the project is installed in a subdirectory, it should always be placed in the root document directory. However I managed to publish it using a subdomain, which required some modifications to the server configuration to ensure incoming traffic was routed correctly.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
