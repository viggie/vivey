# vivey
Flat File CMS - Simple, fast, secure - from Mejura
### Version 0.0.1

## Install
Just unzip or upload to web server.  Edit site-config.php in main folder with suitable values & start access the website through browser.  Content files need to be edited directly & uploaded.

## Content Location
Pages 
* Page info such as title, keyword, description, URL etc will go to a JSON file `src/json/content-json.php`.
* Content body should go to `content` folder.

Blog
* Blog info - title, URL, keyword, descriptin etc will be in `src/json/blog-json.php`.
* Blog content will exist as txt files in `blog-posts` folder.

## Theme
Theme files have header, footer, sidebar as functions. Themes is a single file `src/theme.php` 

## File Structure
~~~
/         - Main Site
/assets/  - CSS, Images folders
/blog-posts/ - Blog posts
/content/    - Content pages
/src/        - Source code related to internal functioning of Website
    json/    - Holds JSON values for Pages & Blog
~~~
