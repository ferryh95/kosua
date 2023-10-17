<?php include("header.php") ?>
<?php include("connect/connect.php"); ?>
<?php $ID = $_GET["ID"]; ?>
<main>
    <div class="event-detail-top text-center">
        EVENT
    </div>

    <div class="event-detail-main">
        <div class="event-detail-top-1 text-center">
            Event
        </div>
        <div class="event-white">
            <div class="container con-event-detail">
                <?php
                $sql = "SELECT ID,e_title,e_desc,e_address,e_access,e_period,e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link  FROM event WHERE ID='$ID' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class='d-tag'>
                            <span class='d-tag-1'>" . $row["tag1"] . "</span>
                            <span class='d-tag-2'>" . $row["tag2"] . "</span>
                            <span class='d-tag-3'>" . $row["tag3"] . "</span>
                        </div>  
                        <div class='d-title'>
                            " . $row["e_title"] . "
                        </div>   
                        <div class='d-address'>
                            <i class='fa-solid fa-location-dot'></i>　" . $row["e_address"] . "
                        </div>  
                        <div class='d-img'>
                            <img src='" . $row["image_link"] . "'>
                        </div> 
                        <div class='d-detail'>
                            " . $row["e_desc"] . "
                        </div>
                        <div class='d-info-tab'>
                            <div class='row'>
                                <div class='col'>
                                <hr>
                                </div>
                                <div class='col d-col-2 text-center'>
                                event information
                                </div>
                                <div class='col'>
                                <hr>
                                </div>
                            </div>
                            <div class='d-info-table'>
                                <table>
                                    <tr class='d-info-table-1'>
                                        <td class='d-table-left'>
                                            Address
                                        </td>
                                        <td>
                                            " . $row["e_address"] . "
                                        </td>
                                    </tr>
                                    <tr class='d-info-table-1'>
                                        <td class='d-table-left'>
                                            Access
                                        </td>
                                        <td>
                                            " . $row["e_access"] . "
                                        </td>
                                    </tr>
                                    <tr class='d-info-table-1'>
                                        <td class='d-table-left'>
                                            Event Period
                                        </td>
                                        <td>
                                            " . $row["e_period"] . "
                                        </td>
                                    </tr>
                                    <tr class='d-info-table-1'>
                                        <td class='d-table-left'>
                                            Reservation
                                        </td>
                                        <td>
                                            " . $row["e_reservation"] . "
                                        </td>
                                    </tr>
                                    <tr class='d-info-table-1'>
                                        <td class='d-table-left'>
                                            Fee
                                        </td>
                                        <td>
                                            " . $row["e_fee"] . "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='d-table-left'>
                                            HP
                                        </td>
                                        <td>
                                            " . $row["e_HP"] . "
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                        </div>
                ";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        <div class="d-ret-button text-center">
            <a href="event.php">
                <button>
                    Back to Event List
                </button>
            </a>
        </div>
    </div>

</main>
<?php include("footer.php") ?>