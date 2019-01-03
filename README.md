# Yii 2 Tutorial

This is a simple Yii 2 tutorial. It is build from the Yii 2 Basic Project template described as being best for rapidly creating small projects. In this tutorial I created a gallery using bootstrap 4. You can add items to the gallery, edit, view and delete. You can login and logout to view different changes.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

You can see the walk-through via - https://wftutorials.wordpress.com/2019/01/02/the-yii2-tutorial/

### Preview

![https://wftutorials.files.wordpress.com/2019/01/yii_gallery_screenshot_3.png](https://wftutorials.files.wordpress.com/2019/01/yii_gallery_screenshot_3.png)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.



INSTALLATION
------------

Clone or Download the application to your desktop.

```
git clone https://github.com/wyntonfranklin/yii-tutorial.git
```

Run this command from the directory in which you want to install the tutorial. This will download all the composer dependencies.

```
php composer.phar install
```

You'll want to:

- Point your virtual host document root to your new application's `web/` directory.
- Ensure `assets/` is web writable and that `runtime/`is writable.



## Features

- Create new gallery item
- Edit gallery item
- View gallery item
- Delete gallery item
- Login and Logout



## Topics Covered

- Creating tables using migrations
- Create models and controllers using Gii
- Create a user identity for login and authentication
- Using twig views
- Using components like db and url manager
- Application setup and base directory
- Yii Helpers
- Forms
- Assets
- Flash
- Access Control



### Resources

Bootstrap template - https://v4-alpha.getbootstrap.com/examples/album/