## Magento 2 Abstract Columns Widget

Manage a 2 columns cms component as a Magento 2 widget.

 - a column with an image
 - a column with title, text and a cta
 
Options:

 - left or right image image alignment
 - background color


#### TODOS:

 **1. check admin url from media library**
 
 Media urls are under protected paths, so in frontend we can't see them if not logged.
 
 The current solution:
 In /etc/di.xml we call /Model/Widget.php where we intercept media paths and we change it accordingly to public paths.

 Todo solution: Check how to get the public url as the core functionality of Insert Image button of Magento. (let's check for example: /vendor/magento/framework/Data/Form/Element/Editor)


 **2. create a color picker field**
 
 Now the color picker is just a text field.
 
 
 **3. create a depedency with custom field types**
 
 In order to use it with other custom widgets.
 
