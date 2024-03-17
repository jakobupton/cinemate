Cinemate is a mock movie ticket booking website that allows users to book tickets for movies at their local theatres. Users can view showtimes, book tickets, and view information about movies. The website also has an admin panel that allows the admin to add movies to the database.

To start, ensure you're running an apache webserver with MySQL and PHPMyAdmin to manage the databases.

Move the cinemate folder into the root folder of the webserver, either /html/ or /htdocs/

Import the cinemate.sql database into phpmyadmin

The current user login is
username: mgs_user
password: pa55word
so ensure that user is setup or change the database user account in cinemate/private/model/db_credentials.php to match a user with read write privileges

Navigate to the cinemate directory on your apache webserver in the browser, for example mine is hosted at 10.0.0.140/cinemate.

Thank you
