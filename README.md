# Php_login
<h2> Info </h2>
<div>PHP login system made as school project.</div>
<div>SQL file that makes table with keys so that they match with code that is used in this project. Just make database named "phplogin" where you insert the SQL file so that it matches the data in the connection info (db.inc.php) </div>


<h2> Example video</h2>


https://user-images.githubusercontent.com/100047926/230641668-2ed23e17-530d-44ae-a858-84e451815dae.mp4


<hr>
<h3>Description </h3>
<div> School project was to make an login system with procedural php. Here are the features that I included to this school work: </div>
<div>1. User can make new account if they dont already have one.</div>
<div>2. Logging with either account name or email if account already exists in the database.</div>
<div>3. All form inputs must be filled. Different warning messages for invalid or missing inputs</div>
<div>4. Users password is hashed to the database</div>
<div>5. User inserted inputs are binded to parameters to avoid SQL injection</div>
<div>6. Header and footer are their own separe php files for easier website updating</div>
<div>7. New account cant be created if username or email is already in use (in database taken by another user).No multiple accounts to same email</div>
<div>8. Elements from navbar are different if user is logged in or not. </div> <div>(Replace default Sign up and Log in with Profile and Sign out when user is logged in)  </div>
<hr>
<h2> Structure </h2>
<h3>footer.php </h3>
<div> Footer for the website.</div>
<h3> header.php</h3>
<div>Header for the website, session is also started here </div>

<h3> index.php</h3>
<div>Main websites body that has header.php and footer.php included</div>

<h3> login.php</h3>
<div>Login websites body that has header.php and footer.php included</div>

<h3> profile.php</h3>
<div>Logged in users profile websites body that has header.php and footer.php included</div>

<h3> signup.php</h3>
<div>Signup websites body that has header.php and footer.php included. Here is our sign up form where we check errors and display messages accordind to errors.</div>

<h3> dbh.inc.php</h3>
<div>Connection to database is established here.</div>

<h3> login.inc.php</h3>
<div>Here we check if submit button pressed in login.php section -> and with emptyInputLogin we check that input fields are not empty when form is submitted. </div>

<h3> signup.inc.php</h3>
<div>All the functionality for signing up new user is done. We get every user given input into parameters -> check that there is no empty inputs, username doesnt contain unwanted characters, email is valid, password matches with password again input and lastly check that user given username or email are not being used by another user (check if they already exists in database). </div>
<div> If all is ok and no errors are displayed -> new user is created, inserted into database </div>

<h3> functions.inc.php</h3>
<div>All our funtions that are gonna be used in the code are here. We include this file to everyother part of the code, where we need these functions (functions are explained below in the next section </div>
<hr>
<h2> Functions </h2>
<div> Detailed explanation for function made by php</div>

<h3> function emptyInputSignup </h3>
<div>Check that user has filled all inputs for sigh up form so there is no empty fields.</div>

<h3> function invalidUid() </h3>
<div>Check that user given username only contains allowed characters in sign up form.</div>

<h3> function invaliEmail() </h3>
<div>Check that user given email is valid in sign up form.</div>

<h3> pwdMatchl() </h3>
<div>Check that user given password and password repeat are same in sign up form.</div>

<h3> uidExists() </h3>
<div>Check that user given username is not in use / already in database.</div>

<h3> function createUser() </h3>
<div>User is created into database with user given parameters. Parameters binded to prevent SQL injection. Password is also hashed into database for security reasons.</div>

<h3> emptyInputLogin()</h3>
<div>Checking that input in log in form are filled if user tries to log in.</div>

<h3>loginUser </h3>
<div> Function to log in user where we check if either user given username or email they want to check in exists and user given password matches the given username/email.</div>
