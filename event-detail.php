<?php include("header.php") ?>
<?php $ID = $_GET["ID"]; ?>
<div class="container con-event-detail">
    <?php
    include("connect/connect.php");
    $sql = "SELECT ID,e_title,e_desc,e_address,e_access,MONTHNAME(e_period),e_reservation,e_fee,e_HP,tag1,tag2,tag3,image_link  FROM event WHERE ID='$ID' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "
                    
                <div class='event-detail text-center'>
                   
                <div class='event-title'>"
                . $row["e_title"] .
                "</div>
                
                        
                        </div>
                        
                ";
        }
    } else {
        echo "0 results";
    }
    ?>
</div>
<?php include("footer.php") ?>