Project details:
Project title: BookMyBook/BMB. It is a Online Book rental store in Full Stack PHP
technology under live project of Online internship program.
Duration: 2 months
Project Overview:
An Online Bookstore System is a comprehensive e-commerce platform designed to
facilitate the buying and selling of books over the internet. This system provides a
user-friendly interface for customers to browse, search, and purchase books, while also
offering administrative features for managing inventory and orders.
Key Features and Advantages of the Software:
1. User Registration and Profiles:
a. Allow users to create accounts with personal profiles.
2. Book Catalog and Search Functionality:
a. Display a well-organized catalog of books with details such as title, author,
category and cover images.
b. Implement robust search options for users to easily find specific books.
3. Product Pages:a. Provide detailed product pages for each book, including a synopsis, author
information, category, pricing, and user reviews.
4. Rental Cart and Checkout:
a. Enable users to add books to a rental cart, review their selections, and
proceed to a secure rent process.
b. Support various payment methods, including credit/debit cards, digital
wallets, and other online payment options.
5. Secure Payment Gateway:
a. Implement a secure payment gateway to ensure the confidentiality and
integrity of financial transactions.
6. Inventory Management:
a. Keep track of book inventory, automatically updating product availability
based on purchases and returns.
Implementing an Online Book Rental store System provides a convenient and efficient
platform for both customers and administrators, fostering a dynamic online
marketplace for books while enhancing the overall shopping experience.
Scope of Work
The intern needs to develop some incomplete features/capabilities in this software.
Technologies involved:
1. PHP/CodeIgniter
2. MySQL DB (8.0.32 )
3. AWS
Project:
Interns need to develop this web app software in Full Stack PHP.
Homepage:
Header will have below Menu Items:
1. Logo
2. Search Bar: Users can search by book title. OnClick Search button, Book
(Product) listing page appears as search result.
3. Books: On hover , Categories listing page will open.
4. 4. Login : On click, the login/register page will come .
5. Register : Onclick, login/register page will come .
6. Cart :
a. When the user is not logged in , the cart shows the number of items in it 0
( zero) . Onclick , new webpage will be open and message will come as
below :
“Your cart is empty” If you already have an account, Sign In to see your
Cart or SignUp.
b. When the user is logged in : Cart shows number of items in it . OnClick ,
Added Books detail list will come with “Remove from cart” alongside
individual items. CTA “Proceed” will appear at above.
Body will have below sections:
Banner, About us, How it works, Popular Categories, Popular books
Banner:
Single banner will be shown in the background . No slider.
Text will appear “More than 30,000 books to rent from”.
About us:
Content: Online Book Rental Site
How it works:
Popular books:
Publisher
3 CTAs : “See the book” , “Rent Now” and “Add to cart”
Footer :
3 columns footer as per design
Book Listing page:
Category wise Book listing page appears on click on Books->Categories Men
1. Each book item consists of
a. Book cover page : OnClick, book detail page comes with url :
a. Book title
b. Book Author
c. Book publisher
d. Book category: not specified category goes in “uncategorized” category.
e. Quantity available
f. Add to Cart has 2 states :
i. Already Rented : If the book is already rented, the button doesn’t
appear.
ii. Rent Now: Count in cart symbol in Navigation menu gets increased.

Book details are added to the cart list. “Add to cart” button
disappears and “Rent Now” button text will change into “Rented
Now”
g. Rent Now button has 3 states :
i. Already Rented : If the book is already rented , “Rent Now” Button
will be disabled with “Already Rented” text on it.
ii. Rented Now : If book is ordered in current session . Button will
toggle between Rented Now and Rent Now. Item count in cart icon
increases.
iii. Rent Now: Book is ready to be rented
h. Unavailable : Book is currently unavailable or out of stock. Disabled
Unavailable button appears .
Book Detail page
Book detail page consists of
1. Book cover page
2. Book title
3. Book Author
4. Book category
5. Quantity available
6. Book description : First 120 characters will be shown as a brief description.
a. If the description will have less than 120 characters then “show
more” button doesn’t appear and all content appears.
b. If the description has more than 120 characters , “Show more”
button appears. OnClick “Show more” button , the page scrolls
down to the description section.
c. If there is no description “No description” text will appear.
7. Delivery details
8. Specification of book :
a. ISBN
b. Publisher
c. Laguage
d. Binding
Add to Cart has 2 states :
1. Already Rented : If the book is already rented , the button doesn’t appear.
2. Rented Now : Count in cart symbol in Navigation menu gets increased. Book
details are added to the cart list. “Add to cart” button disappears and “Rent Now”
button text will change into “Rented Now”
Rent Now button has 3 states :
1. Already Rented : If the book is already rented , “Rent Now” Button will be
disabled with “Already Rented” text on it.
2. Rented Now : If book is ordered in current session . Button will toggle between
Rented Now and Rent Now. Item count in
3. Rent Now: Book is ready to be rented
Unavailable : Book is currently unavailable or out of stock. Disabled Unavailable
button appears .
Browse Plan ( Membership Plan page ):
1. When the user clicks on “Browse plan” button in Navigation Menu and user is
logged in, Membership page will come .
Once a user chooses any plan, it connects to a PayUMoney payment gateway. After
payment , navigate back to the homepage.
2. When the user is NOT logged in , the login / registration page will come. Once a user
   is logged in, the Membership plan page appears. Once a user chooses any plan, it
connects to PayUMoney payment gateway. After payment , navigate back to the
homepage .
In the Navigation menu, Once a user is logged in, User title appears instead of login /
register buttons. Dropdown menu appears below the user title to show rest of the
menu
1. My Account : Membership details with change plan, User basic info , favorites.
2. My orders : Enlist all current as well as past orders . tabbed menu.
3. My wishlists : Enlist all books liked by users.
4. My membership : Membership details with change plan
5. Rented book : Enlist all books rented by the user. This list has CTA “return book”
which will send mail notification to admin@jhamobi.com with return book
information like Customer title, Address , Phone number , Note if any . On “return
book” click : alert window appears for return book.
6. Settings : Change password
When a user is not logged in , the login/register screen comes by default. On click of
each menu , the login/register screen comes.
Change Membership plan :
Users can upgrade / downgrade membership plans at point of time. Paid amount
adjusts accordingly. Extra charge in case of upgradation :
Illustration : Customer wants to upgrade plans after 4 months of subscription from Plan
Classic to Family .
Amount paid : Rs. 2500
Monthly paid : Rs. 2500/12
Payment due : 2500X4/12
Need to pay for rest of tenure : 4500X8/12
So , customer will pay :
( 4500X8/12 - 2500X4/12)
Admin Backend:
Admin: Categories Menu:
1. Add Category
i. Category title ( Adventure stories, Classics, Crime, Fairy tales, fables, and
folk tales, Fantasy, Historical fiction, Horror, Humour and satire )
j. Number of books
k. Created date
2. Category list
a. Category list with title, number of books, created date
3. Add book into category
