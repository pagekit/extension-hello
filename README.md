# Hello Extension

A blueprint to develop your own extensions. 

This code showcases the available possibilities for extension developers. This is not an extension that attempts anything useful for the user. It is merely intended as an example for developers to copy and paste. We have tried to write extensive comments in the code. Pull requests for improvements are always appreciated.

Basically, you can use this extension in 3 different ways:

1. To use this extension as a starting point for your own package, copy it into your vendor folder inside the packages directory, i.e. from `packages/pagekit/extension-hello` to `packages/your-vendor/my-extension` (details in [the documentation](https://pagekit.com/docs/developer-guides/todo-extension#where-to-put-your-package-files)). From the code that you now have, you can remove anything that you do not need.
2. Create an extension from scratch and just copy and paste any snippets you want.
3. Just browse this code to understand how developing for Pagekit works.

When you get started with extension development, make sure to also read the [Extension Guide](https://pagekit.com/docs/developer-guides/extensions) in the Pagekit documentation.

This extension showcases a variety of things you can do with an extension inside Pagekit. Some of these are:

- Register a controller to a static route
- Register a controller to a dynamic node for the Site Tree
- Add a menu item to the admin interface
- Create a settings screen
- Work with module configuration
- Create a Vue component
- Work with permissions
- Run install, uninstall and update scripts: `scripts.php`
