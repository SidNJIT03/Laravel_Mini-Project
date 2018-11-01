@extends('layouts.app')

@section('content')
    <h1>About Laravel</h1>
    <p class="lead">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the
        development of web applications following the model–view–controller (MVC) architectural pattern and based on
        Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager,
        different ways for accessing relational databases, utilities that aid in application deployment and maintenance,
        and its orientation toward syntactic sugar.<br>

        The source code of Laravel is hosted on GitHub and licensed under the terms of MIT License.</p>
    <h2><b>History</b></h2>
    <p class="lead">Taylor Otwell created Laravel as an attempt to provide a more advanced alternative to the
        CodeIgniter framework, which did not provide certain features such as built-in support for user authentication
        and authorization. Laravel's first beta release was made available on June 9, 2011, followed by the Laravel 1
        release later in the same month. Laravel 1 included built-in support for authentication, localisation, models,
        views, sessions, routing and other mechanisms, but lacked support for controllers that prevented it from being a
        true MVC framework. <br><br> Laravel 2 was released in September 2011, bringing various improvements from the
        author and community. Major new features included the support for controllers, which made Laravel 2 a fully
        MVC-compliant framework, built-in support for the inversion of control (IoC) principle, and a templating system
        called Blade. As a downside, support for third-party packages was removed in Laravel 2.<br><br>

        Laravel 3 was released in February 2012 with a set of new features including the command-line interface (CLI)
        named Artisan, built-in support for more database management systems, database migrations as a form of version
        control for database layouts, support for handling events, and a packaging system called Bundles. An increase of
        Laravel's userbase and popularity lined up with the release of Laravel 3.<br><br>

        Laravel 4, codenamed Illuminate, was released in May 2013. It was made as a complete rewrite of the Laravel
        framework, migrating its layout into a set of separate packages distributed through Composer, which serves as an
        application-level package manager. Such a layout improved the extensibility of Laravel 4, which was paired with
        its official regular release schedule spanning six months between minor point releases. Other new features in
        the Laravel 4 release include database seeding for the initial population of databases, support for message
        queues, built-in support for sending different types of email, and support for delayed deletion of database
        records called soft deletion.<br><br>

        Laravel 5 was released in February 2015 as a result of internal changes that ended up in renumbering the
        then-future Laravel 4.3 release. New features in the Laravel 5 release include support for scheduling
        periodically executed tasks through a package called Scheduler, an abstraction layer called Flysystem that
        allows remote storage to be used in the same way as local file systems, improved handling of package assets
        through Elixir, and simplified externally handled authentication through the optional Socialite package. Laravel
        5 also introduced a new internal directory tree structure for developed applications.<br><br>

        In March 2015, a SitePoint survey listed Laravel as the most popular PHP framework.<br><br>

        Laravel 5.1, released in June 2015, is the first release of Laravel to receive long-term support (LTS), with
        planned availability of bug fixes for two years and security patches for three years. LTS releases of Laravel
        are planned to be released every two years.<br><br>

        Laravel 5.3, released in August 23, 2016. The new features in 5.3 are focused on improving developer speed by
        adding additional out of the box improvements for common tasks.<br><br>

        Laravel 5.4, released in January 24, 2017. This release had many new features, like Laravel Dusk, Laravel Mix,
        Blade Components and Slots, Markdown Emails, Automatic Facades, Route Improvements, Higher Order Messaging for
        Collections, and many others.<br><br>

        Laravel 5.5, released on August 30, 2017.<br><br>

        Laravel 5.6, released on February 7, 2018.<br><br>

        Laravel 5.7, released on September 4, 2018.</p>
    <h2><b>Features</b></h2>
    <p class="lead">The following features serve as Laravel's key design points (where not specifically noted,
        descriptions refer to the features of Laravel<br>
        <ul>
        <li>Bundles provide a modular packaging system since the release of Laravel 3, with bundled features already
        available for easy addition to applications. Furthermore, Laravel 4 uses Composer as a dependency manager to add
        framework-agnostic and Laravel-specific PHP packages available from the Packagist repository.</li><br>
        <li>Eloquent ORM (object-relational mapping) is an advanced PHP implementation of the active record pattern,
        providing at the same time internal methods for enforcing constraints on the relationships between database
        objects. Following the active record pattern, Eloquent ORM presents database tables as classes, with their
        object instances tied to single table rows.</li><br>
        <li>Query builder, available since Laravel 3, provides a more direct database access alternative to the Eloquent
        ORM. Instead of requiring SQL queries to be written directly, Laravel's query builder provides a set of classes
        and methods capable of building queries programmatically. It also allows selectable caching of the results of
        executed queries.</li><br>
        <li>Application logic is an integral part of developed applications, implemented either by using controllers or as
        part of the route declarations. The syntax used to define application logic is similar to the one used by
        Sinatra framework.</li><br>
        <li>Reverse routing defines a relationship between the links and routes, making it possible for later changes to
        routes to be automatically propagated into relevant links. When the links are created by using names of existing
        routes, the appropriate uniform resource identifiers (URIs) are automatically created by Laravel.
        Restful controllers provide an optional way for separating the logic behind serving HTTP GET and POST requests.
        Class auto loading provides automated loading of PHP classes without the need for manual maintenance of
        inclusion paths. On-demand loading prevents inclusion of unnecessary components, so only the actually used
        components are loaded.</li><br>
        <li>View composers serve as customizable logical code units that can be executed when a view is loaded.
        Blade templating engine combines one or more templates with a data model to produce resulting views, doing that
        by transpiling the templates into cached PHP code for improved performance. Blade also provides a set of its own
        control structures such as conditional statements and loops, which are internally mapped to their PHP
        counterparts. Furthermore, Laravel services may be called from Blade templates, and the templating engine itself
        can be extended with custom directives.</li><br>
        <li>IoC containers make it possible for new objects to be generated by following the inversion of control (IoC)
        principle, in which the framework calls into the application- or task-specific code, with optional instantiating
        and referencing of new objects as singletons.</li><br>
        <li>Migrations provide a version control system for database schemas, making it possible to associate changes in the
        application's codebase and required changes in the database layout. As a result, this feature simplifies the
        deployment and updating of Laravel-based applications.</li><br>
        <li>Database seeding provides a way to populate database tables with selected default data that can be used for
        application testing or be performed as part of the initial application setup.</li><br>
        <li>Unit testing is provided as an integral part of Laravel, which itself contains unit tests that detect
        and prevent regressions in the framework. Unit tests can be run through the provided artisan command-line
        utility.</li><br>
        <li>Automatic pagination simplifies the task of implementing pagination, replacing the usual manual implementation
        approaches with automated methods integrated into Laravel.</li><br>
        <li>Form request is a feature of Laravel 5 that serves as the base for form input validation by internally binding
        event listeners, resulting in automated invoking of the form validation methods and generation of the actual
        form.</li><br>
        <li>Homestead - a Vagrant virtual machine that provides Laravel developers with all the tools necessary to develop
        Laravel straight out of the box, including, Ubuntu, Gulp , Bower and other development tools that are useful in
        developing full scale web applications.</li></ul></p>
    <h2><b>Artisan CLI</b></h2>
    <p class="lead">Laravel's command-line interface (CLI), called Artisan, was initially introduced in Laravel 3 with a
        limited set of capabilities. Laravel's later migration to a Composer-based architecture allowed Artisan to
        incorporate different components from the Symfony framework, resulting in the availability of additional Artisan
        features in Laravel 4.<br><br>

        The features of Artisan are mapped to different subcommands of the Artisan command-line utility, providing
        functionality that aids in managing and building Laravel-based applications. Common uses of Artisan include
        managing database migrations and seeding, publishing package assets, and generating boilerplate code for new
        controllers and migrations; the latter frees the developer from creating proper code skeletons. The
        functionality and capabilities of Artisan can also be expanded by implementing new custom commands, which, for
        example, may be used to automate application-specific recurring tasks.</p>
@endsection
