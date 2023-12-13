# vivey
Flat File CMS - Simple, fast, secure - from Mejura
### Version 0.0.3

## Install
Just unzip or upload to web server.  And ccess the website through browser

## Basic Configuration
1. Edit site-json.php in content/json folder with suitable values.
2. Layout & design can be edited in `themes.php` file in main folder.
3. Edit content-json.php in content/json folder for content page title, keywords etc.
4. Edit content in .txt files in `content` folder.

## Content Location
Pages 
* Page info such as title, keyword, description, URL etc will go to a JSON file `content/json/content-json.php`.
* Content body should go to `content` folder as .txt file.

### To add a page
* Create page content as .txt file in `content` folder.
* Add a json entry in `content/json/content-json.php` with the file name as key value
* URL should be same as json key value (for now)

Blog is removed for now.  It needs some major revision.  Will make a comeback in a future version.
<!-- * Blog info - title, URL, keyword, descriptin etc will be in `src/json/blog-json.php`.
 * Blog content will exist as txt files in `blog-posts` folder.-->

## Theme
Theme files have header, footer as functions. Themes is a single file `theme.php` 
Uses Bootstrap 5.3.2 & Bootstrap Icons 1.11.2 in CDN.  
You can change it to your preferrred CSS framework.  Just be sure to modify the class names in html as necessary.
Edit this theme as necessary to change.

## File Structure
~~~
/         - Main Site
/assets/  - CSS, Images folders
/content/    - Content pages
    json/    - Holds JSON values for Pages
/src/        - Source code related to internal functioning of Website
~~~
