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
            <button>
                annual event
            </button>
        </div>
        <div class="col col-key">
            <button>
                irregular event
            </button>
        </div>
        <div class="col col-key">
            <button>
                regular event
            </button>
        </div>
    </div>
    <div class="row event-key-2 text-center">
        <div class="col col-key-2">
            <button>
                #fukuoka
            </button>
        </div>
        <div class="col col-key-2">
            <button>
                #kumamoto
            </button>
        </div>
        <div class="col col-key-2">
            <button>
                #saga
            </button>
        </div>
        <div class="col col-key-2">
            <button>
                #nagasaki
            </button>
        </div>
        <div class="col col-key-2">
            <button>
                #oita
            </button>
        </div>
        <div class="col col-key-2">
            <button>
                #miyazaki
            </button>
        </div>
        <div class="col col-key-2">
            <button>
                #kagoshima
            </button>
        </div>
    </div>
    <div class="row event-key-3 text-center">
        <div class="col col-key-3">
            <button>
                January
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                February
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                March
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                April
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                May
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                June
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                July
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                August
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                September
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                October
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                November
            </button>
        </div>
        <div class="col col-key-3">
            <button>
                December
            </button>
        </div>
    </div>
    <div class="event-text-event text-center">
        Events
    </div>
    <div class="container con-event">
        <div class="row row-event">
            <?php
            $sql = "SELECT ID,e_title,e_desc,e_address,e_access,MONTHNAME(e_period),e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link FROM event ORDER BY id DESC";
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