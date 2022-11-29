# My Wordpress Theme Template

This is a start theme automated with Gulp to accelerate the development.

- Follow the instructions and install Wordpress, Plugins and all dependencies.

## Setup

1. Download/Install Wordpress locally
2. Setup local web server
3. Setup database (see below for details for Displayhost)
4. Download all necessary Plugins (Se bellow)
5. Create a project folder in Teams and set the Credencials to Database, Wordpress logings and every important information about the project.
6. Copy this theme inside of Theme folder and in Admin Page activate it.

# INSTALL PLUGINS

<p>1- Yoast: SEO plugin https://yoast.com/</p>
<p>2- Translate: Translate Press https://translatepress.com/</p>
<p>3- ACF: https://www.advancedcustomfields.com/</p>
<p>4- Ecommerce: Woocommerce https://woocommerce.com/</p>
<p>5- Ninja Form: https://sv.wordpress.org/plugins/ninja-forms/</p>
<p>6- WP Migrate DB: https://sv.wordpress.org/plugins/wp-migrate-db/</p>
<p>7- Wordpress To Static Pages. (not needed for developers) Generates static HTML files from the Wordpress setup. These files are used for production. Developed by Isobar, see developer-modules subgroup in GIT.</p>

# Install Gulp

## Requirement: Install Node Package in your computer. https://nodejs.org/en/download/

=> Install GULP globally using this command: run-> npm uninstall -g gulp (first) then npm install gulp-cli -g

=> It will allow you to use npm command.

## Follow this steps:

- Open the terminal in the theme folder "isobartheme". (In Visual Studio, left click in folder and choose 'open in integrated terminal')
- In the terminal write: 'npm install' and then ENTER
  => It will take a time and install all dependencies in your project.
- A node_modules folder will be created and a package-lock.json file.
- After that in the same terminal you write: 'gulp' and press ENTER.
- Gulp will run and open a browser with a template sajte.
- Gulp will identify any change in SCSS files, Javascript files and PHP files.
- After identifying, Gulp will reload the browser and display the last changes.
  PS: If nothing of this works, try to go back and follow the steps again, maybe you missed something. Otherwise talk to Paulo.

## If you have any problems contact Paulo.

# Dependencies

<hr>

<h2>Install Dependencies </h2>
<ul>
  <ul>  
  <li>browser-sync</li>
  <li>cssnano</li>
  <li>gulp</li>
  <li>gulp-postcss</li>
  <li>gulp-sass</li>
  <li>gulp-terser</li>
  <li>postcss</li>  
  <li>sass</li>
</ul>
</ul>

<code>npm install --save-dev gulp-sass browser-sync cssnano gulp gulp-postcss gulp-terser postcss sass</code>

<br>
<p>We’ll use gulp-sass to compile things and gulp-clean-css to minify. Then, gulp-if will allow us to conditionally run functions which, In our case, will check if we are in production or development modes before those tasks run and then execute accordingly.</p>
<br>

# IMPORTANT

- Structure in assets folder kan not be changed, otherwise gulp will not work.
- Take a time to read all files in our theme and understand the content.
- You can add or delete any scss file in Sass folder, images, fonts and js folders.
- You can add or delete any php file.
- You cannot rename or delete any existing FOLDER.
