
    <?php 
    include_once "header.php"
    ?>
    <div class="wrapper"> 
        <section > 
            <h2> Profile page</h2>
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
                    echo ' <h3> Käyttäjätiedot </h3>
                    <p> First name: ',$firstName,'<br>
                    Last name: ',$lastName,' <br>
                    Email name: ',$Email,'<br>
                    User ID name: ',$userID,'</p>';
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