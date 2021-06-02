<div class="book" id="book">
    <div class="container">
        <div class="book__search">
            <form method="post" action="search.php#book" class = "form">
                <input name="search" type="text" class="search" placeholder="Пошук товара" required>
                <input type="submit" name="submit" value="Пошук" class="book__btn">
            </form>
        </div>
        <div class="book__inner">
            <?php
            require_once "db_conect.php";
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM table_book WHERE id_book = '1' OR id_book = '2' OR id_book = '3' OR id_book = '4'OR id_book = '5'OR id_book = '6' OR id_book = '7' OR id_book = '8' OR id_book = '9'";
            $result = $conn->query($sql);

            $conn->close();

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    echo '
        <div class = "book__elements">
			<div class = "img">
				<img src = "img/book/' . $row["img"] . '" alt = ""/>
            </div>
            <div class = book__content>
				<p class = "author">' . $row["author"] . '</p>
                <p class = "title">' . $row["title"] . '</p>
                <p class = "description"> ' . $row["description"] . '</p>
            <div class="edition__block">
				<p class = "editions"> ' . $row["edition"] . '</p>
                <p class = "year_edition"> ' . $row["year_edition"] . '</p>
            </div>
                <p class = "price">' . $row["price"] . ' грн. </p>
            </div>
        </div>
				';
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>
</div>