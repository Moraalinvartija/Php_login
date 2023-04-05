# Php_login
<h2> Info </h2>
<div>PHP login system made as school project. All the functionality is there, but no styling sadly </div>


<h2> Example video</h2>


https://user-images.githubusercontent.com/100047926/230224918-c882802d-c6aa-497f-b761-4b6494ac62eb.mp4


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

<h3> Structure </h3>
<h4>footer.php </h4>
<div> Footer for the website.</div>

<h4> header.php</h4>
<div>Header for the website, session is also started here </div>

<h4> index.php</h4>
<div>Main websites body that has header.php and footer.php included</div>

<h4> login.php</h4>
<div>Login websites body that has header.php and footer.php included</div>

<h4> profile.php</h4>
<div>Logged in users profile websites body that has header.php and footer.php included</div>

<h4> signup.php</h4>
<div>Signup websites body that has header.php and footer.php included. Here is our sign up form where we check errors and display messages accordind to errors.</div>

<h4> pdv.inc.php</h4>
<div>Connection to database is established here.</div>

<h4> login.inc.php</h4>
<div>Here we check if submit button pressed in login.php section -> and with emptyInputLogin we check that input fields are not empty when form is submitted. </div>

<h4> signup.inc.php</h4>
<div>All the functionality for signing up new user is done. We get every user given input into parameters -> check that there is no empty inputs, username doesnt contain unwanted characters, email is valid, password matches with password again input and lastly check that user given username or email are not being used by another user (check if they already exists in database). </div>
<div> If all is ok and no errors are displayed -> new user is created, inserted into database </div>



<h4> functions.inc.php</h4>
<div>All our funtions that are gonna be used in the code are here. We include this file to everyother part of the code, where we need these functions (functions are explained below in the next section </div>

<h3> Functions </h3>
<div> Detailed explanation for function made by php</div>

<h4> function emptyInputSignup </h4>
<div>Check that user has filled all inputs for sigh up form so there is no empty fields.</div>

<h4> function invalidUid() </h4>
<div>Check that user given username only contains allowed characters in sign up form.</div>

<h4> function invaliEmail() </h4>
<div>Check that user given email is valid in sign up form.</div>

<h4> pwdMatchl() </h4>
<div>Check that user given password and password repeat are same in sign up form.</div>

<h4> uidExists() </h4>
<div>Check that user given username is not in use / already in database.</div>

<h4> function createUser() </h4>
<div>User is created into database with user given parameters. Parameters binded to prevent SQL injection. Password is also hashed into database for security reasons.</div>

<h4> emptyInputLogin()</h4>
<div>Checking that input in log in form are filled if user tries to log in.</div>

<h4>loginUser </h4>
<div> Function to log in user where we check if either user given username or email they want to check in exists and user given password matches the given username/email.</div>
