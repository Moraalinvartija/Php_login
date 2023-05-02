
    <?php 
    include_once "header.php"
    ?>
    
            <?php 
            if (isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                require_once 'includes/dbh.inc.php';
                $user = $_SESSION["useruid"];
                $sql = "SELECT usersFname, usersLname, usersEmail, usersUid FROM users 
                WHERE usersUid = '$user' ";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
            
                if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $firstName = $row['usersFname'];
                    $lastName = $row['usersLname'];
                    $Email = $row['usersEmail'];
                    $userID = $row['usersUid'];
                    echo '<div class="wrapper"> 
                    <div class="mt-2 mb-4 text-center name">
                            <h2>Profile page</h2>
                        </div>
                        <hr> <div class="mt-2 mb-4 text-center name">
                    <h3>User info</h3></div>
                    <div class="mt-2 mb-4 name">
                    <p> First name: ',$firstName,'<br>
                    Last name: ',$lastName,' <br>
                    Email: ',$Email,'<br>
                    User ID: ',$userID,'</p>
                    </div>';
                    
                  }
                }
            } 
            ?>
        </section>
    </div>
</body>
<?php
include_once "footer.php" 
?>