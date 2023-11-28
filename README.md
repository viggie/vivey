# vivey
Flat File CMS - Simple, fast, secure - from Mejura
### Version 0.0.3

## Install
Just unzip or upload to web server.  Edit site-config.php in main folder with suitable values & start access the website through browser.  Content files need to be edited directly & uploaded.

## Content Location
Pages 
* Page info such as title, keyword, description, URL etc will go to a JSON file `src/json/content-json.php`.
* Content body should go to `content` folder.

### To add a page
* Create page content as .txt file in `content` folder.
* Add a json entry in `src/json/content-json.php` with the file name as key value
* URL should be same as json key value (for now)

Blog is removed for now.  It needs some major revision.  Will make a comeback in a future version.
<!-- * Blog info - title, URL, keyword, descriptin etc will be in `src/json/blog-json.php`.
 * Blog content will exist as txt files in `blog-posts` folder.-->

## Theme
Theme files have header, footer as functions. Themes is a single file `src/theme.php` 
Uses Bootstrap 5.3.2 & Bootstrap Icons 1.11.2 in CDN.  
You can change it to your preferrred CSS framework.  Just be sure to modify the class names in html as necessary.
Edit this theme as necessary to change.

## File Structure
~~~
/         - Main Site
/assets/  - CSS, Images folders
/content/    - Content pages
/src/        - Source code related to internal functioning of Website
    json/    - Holds JSON values for Pages
~~~
