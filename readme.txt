This is a laravel assignment from code.io

Step 0 : Front End Design
Firsty I had to choose the right front end design but primary focus was on backend. So I used bootstrap for all the front end design and also some custom themes available on bootstrap website.

Step 1: Database Desgin
Firsty I created two migration tables i.e films , comments and the already provided users table.Along with these migration I created their respective models and also the controllers. Then I associated the tables with each other by making their relations.
users table was in one to many relationship with comments table.
films table was in one to many relationship with comments table.
no relationship for films and users table but IDs of both tables was included as foriegn key in comments table.

Step 2 : Authentication System
Development of authentication system was easy as laravel has boiler plate auth system already provided for users table. So I just ran the make:auth command and the corresponding view and authentication system was generated. So users have to be authenticated to comment on the movies and also add movies. If user is not authenticated he can only view the comments on the movies by other users and also cannot add a movie. So authentication system implementation was a breeze thanks to Laravel's auth system.

Step 3: Database Seeding
Three films as mentioned were seeded into the database. This task took most of my time because I was not able to figure out how to figure to seed a file image through seeding. It took my a lot of time to finally figure out and and when I found it out the it seemed a lot easier.

Step 4 : Testing 
Although I have the habit of testing all my work along with development but still after doing the task I spent a lot of time intesting different things on website including working of routes and improvement of interfaces.