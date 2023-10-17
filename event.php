<?php include("header.php") ?>
<?php include("connect/connect.php") ?>
<main>
    <div class="event-top text-center">
        EVENT
    </div>
    <div class="event-key-text text-center">
        Search by keyword
    </div>
    <div class="row event-key-1 text-center">
        <div class="col col-key">
            <a href="event.php?query=annual%20event">
                <button>
                    annual event
                </button>
            </a>
        </div>
        <div class="col col-key">
            <a href="event.php?query=irregular%20event">
                <button>
                    irregular event
                </button>
            </a>
        </div>
        <div class="col col-key">
            <a href="event.php?query=regular%20event">
                <button>
                    regular event
                </button>
            </a>
        </div>
    </div>
    <div class="row event-key-2 text-center">
        <div class="col col-key-2">
            <a href="event.php?query2=fukuoka">
                <button>
                    #fukuoka
                </button>
            </a>
        </div>
        <div class="col col-key-2">
            <a href="event.php?query2=kumamoto">
                <button>
                    #kumamoto
                </button>
            </a>
        </div>
        <div class="col col-key-2">
            <a href="event.php?query2=saga">
                <button>
                    #saga
                </button>
            </a>
        </div>
        <div class="col col-key-2">
            <a href="event.php?query2=nagasaki">
                <button>
                    #nagasaki
                </button>
            </a>
        </div>
        <div class="col col-key-2">
            <a href="event.php?query2=oita">
                <button>
                    #oita
                </button>
            </a>
        </div>
        <div class="col col-key-2">
            <a href="event.php?query2=miyazaki">
                <button>
                    #miyazaki
                </button>
            </a>
        </div>
        <div class="col col-key-2">
            <a href="event.php?query2=kagoshima">
                <button>
                    #kagoshima
                </button>
            </a>
        </div>
    </div>
    <div class="row event-key-3 text-center">
        <div class="col col-key-3">
            <a href="event.php?query3=January">
                <button>
                    January
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=February">
                <button>
                    February
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=March">
                <button>
                    March
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=April">
                <button>
                    April
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=May">
                <button>
                    May
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=June">
                <button>
                    June
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=July">
                <button>
                    July
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=August">
                <button>
                    August
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=September">
                <button>
                    September
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=October">
                <button>
                    October
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=November">
                <button>
                    November
                </button>
            </a>
        </div>
        <div class="col col-key-3">
            <a href="event.php?query3=December">
                <button>
                    December
                </button>
            </a>
        </div>
    </div>
    <div class="event-text-event text-center">
        Events
    </div>
    <div class="container con-event">
        <div class="row row-event">
            <?php
            if (isset($_GET["query"])) {
                $query = $_GET["query"];
                $sql = "SELECT ID,e_title,e_desc,e_address,e_access,MONTHNAME(e_period),e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link FROM event WHERE tag1 = '$query' ORDER BY id DESC";
            } else if (isset($_GET["query2"])) {
                $query = $_GET["query2"];
                $sql = "SELECT ID,e_title,e_desc,e_address,e_access,MONTHNAME(e_period),e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link FROM event WHERE tag2= '$query' ORDER BY id DESC";
            } else if (isset($_GET["query3"])) {
                $query = $_GET["query3"];
                $sql = "SELECT ID,e_title,e_desc,e_address,e_access,MONTHNAME(e_period),e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link FROM event WHERE tag3 = '$query' ORDER BY id DESC";
            } else {
                $sql = "SELECT ID,e_title,e_desc,e_address,e_access,MONTHNAME(e_period),e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link FROM event ORDER BY id DESC";
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <a href='event-detail.php?ID=" . $row["ID"] . "'>
                <div class='col-4 col-event text-center'>
                    <img src=" . $row["image_link"] . ">
                
                <div class='event-title text-left'>"
                        . $row["e_title"] .
                        "</div>
                <div class='event-address text-left'>
                <i class='fa-solid fa-location-dot'></i>　"
                        . $row["e_address"] .
                        "</div>
                        <div class='event-tag text-left'>
                            <span class='tag-1'>"
                        . $row["tag1"] .
                        "</span>
                         <span class='tag-2'>"
                        . $row["tag2"] .
                        "</span>
                         <span class='tag-3'>"
                        . $row["tag3"] .
                        "</span>
                        </div>
                        </div>
                        </a>
                ";
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>
</main>

<?php include("footer.php") ?>