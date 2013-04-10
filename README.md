Single Friend Recipes Sangwook Park and Paul Kim
Note: This project was done in pair.
1. Abstract
1.1. Document Purpose:
This document is to explain technical and functional requirements of an online shopping list that recommends list of products for singles. The website will provide recommendations for daily meals and recipes for fast cooking. In addition, the users will be able to see nutrition information of a given recipe.
1.2. Definitions: None
1.3. Background/Motivation:
There are a lot of singles staying in one room apartments either at a university campus or city, but it is not easy to efficiently spend money on food. You could be busy or it is sometimes difficult and cooking generally takes a long time. The number of single people is increasing. I believe that demand for such a single shopping list will be constantly increasing. Of course, there are not many websites that provide such lists and tips specifically towards singles.
2. Technical Specifications
2.1. Platform: Web-Based
2.2. Programming Languages: PHP
2.3. Coding Standard: Pear (http://pear.php.net/manual/en/standards.php) 2.4. SDK: LAMP
2.5. IDE: Sublime Text 2
2.6. Interface: Google Chrome to view the website 2.7. Other Technical Details:
3. Functional Specifications 3.1. Affordances:
3.1.1. Users able to log in with username and password
3.1.2. Users able to choose specific products listed
3.1.3. Users able to see saved products that they chose after login 3.1.4. Users able to see information about each product
3.1.5. Users able to see nutrition distribution of the chosen products 3.1.6. Users able to choose certain product and see recipes
3.1.7. Users able to search location of chosen product
3.1.8. Users able to see daily recommendation of products combination 3.1.9. Users able to comment on certain products
3.1.10. Users able to post and share their own knowhow
3.2. Features:
3.2.1. Users able to create an account that will be saved inside the server 3.2.2. Users able to chose certain products by using checkbox buttons
and click save button to be loaded on the MySQL database by PHP 3.2.3. Use jQuery to dynamically add comments on products and slide up
and down a product’s information
3.2.4. Provide location service by creating JSON data and send it to
Google Map to pinpoint it using a dot.
3.2.5. Use AJAX to request nutrition distribution information from another
PHP file and show it on the same page refreshed
3.2.6. Periodically show recent articles about nutrition and health by
creating lists of article source on different PHP page
3.3. Scope:
Anyone may create an account via register form.
3.4. Prospective Look/Mockup:
￼4. Timeline
• Week 1: Basic Setup Interface
§ Paul
o Ability to register users
o Ability to view the list of product
o Ability to leave comments on the product
§ Sangwook
o Ability to view product info
o Ability to view the recent articles about nutrition and health o Ability to view available recipes using the product
o Ability to view Google Map
• Week 2: Implementation step1 § Paul
o Ability to provide location service using Google Map
o Ability to add multiple selected products into MySQL database o Ability to show tooltip on clickable objects
§ Sangwook
o Ability to switch between tabs with a mouse click o Ability to provide rating for each product
o Ability to show provide threaded comments
• Week 3: Implementation step2 § Paul
o Ability to request nutrition distribution information using AJAX o Ability to compare current nutrition distribution with
recommended one from Nutrition.gov o Ability to deactivate account
§ Sangwook
o Ability to hide and show product info using jQuery
o Ability to grant newly registered users an access to post their
own knowhow, product and its info o Ability to provide logout feature
• Week 4: Coolify § Paul
o Ability to provide advanced view of nutrition distribution o Ability to make advanced searches for products
o Ability to provide personal page for each user
§ Sangwook
o Ability to show most popular product
o Ability to provide dropdown menu on common topic
o Ability to show most recent products on the front page
5. Future Enhancement
If the website does well, I would like to provide delivery service for those who live far away from such products at affordable cost.
