 <?php  if (isset($_SESSION['username'])) : ?>
            <p>
                Welcome
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>
            <p>
                <a href="index.php?logout='1'" style="color: red;">
                    Click here to Logout
                </a>
            </p>
        <?php endif ?>