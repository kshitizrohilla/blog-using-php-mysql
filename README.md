# A Simple Blog Using PHP And MySQL

This simple blog application provides a user-friendly platform for bloggers to publish their posts online. It is built using PHP on the server-side and uses MySQL for storing blog posts. The application allows bloggers to write blog posts, add images and publish them on the blog.

This application can be used as a starting point for developers who want to build a blog application using PHP and MySQL. 

	
## Setup

- Start the Apache and MySQL server from the XAMPP control panel.

- Extract the downloaded git project folder in the htdocs folder(present in the XAMPP folder). Generally during installation the XAMPP is installed in the C: Drive of your computer.

- A common file structure might looks like this:

```
C:
|----XAMPP
     |----htdocs
          |----blog-using-php-mysql-main
               |----styles
                    |----style.css
               |----media
               |----images
               |----scripts
                    |----script.js
               |----blog_post_process.php
               |----index.html
               |----index.php
               |----README.md
```

- To create client's database go to: <http://localhost/phpmyadmin>

- Start by creating a new database from the left sidebar named as 'blog_db' with the default server connection collation settings.

- After creating the database create a table named as 'blog_table' with 4 columns for id, topic_title, topic_date and topic_para.

- The first column is 'id' which is an integer. Check the Auto Increment checkbox which will also make this field the primary key.

- The next column will be for the 'Post Title' and we'll make this a text type field.

- The next column is for the 'Date of the Created Post' which we'll make a text type field.

- The next column will be of 'Post Paragraph' which we'll make a text type field.

- After creating the database table you may test it by visiting this link in your browser: <http://localhost/blog-using-php-mysql-main/>

- On the `index.php` page all the created posts will be displayed. There is also a `Write a New Post` button on the bottom of the page from where you will be redirected to post creation page `index.html`.

## Features

- On the home page `index.php` all the created posts are displayed.

- Current date and time will be automatically inserted into the post during the time of post creation.

- Major feature of user account creation and displaying dynamic content for each user is pending.

- More features like post deletion, editing existing post and more will be addded soon.

## Screenshots

![blog-using-php-mysql](https://raw.githubusercontent.com/kshitizrohilla/blog-using-php-mysql/main/media/screenshot1.jpg)
![blog-using-php-mysql](https://raw.githubusercontent.com/kshitizrohilla/blog-using-php-mysql/main/media/screenshot2.jpg)
![blog-using-php-mysql](https://raw.githubusercontent.com/kshitizrohilla/blog-using-php-mysql/main/media/screenshot3.jpg)