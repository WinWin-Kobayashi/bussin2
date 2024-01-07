<style>
        .claim-status {
            color: white;
            font-weight: bold;
            padding: 8px;
            border-radius: 5px;
        }

        .claim-status-claim {
          
            color: green;
            border-radius: 10px;
            align-items: center;
            text-align: center;
            font-size: bold;
        }

        .claim-status-unclaim {
            
            color: red;
            border-radius: 10px;
            text-align: center;
        }
    </style>

<table>
            <thead>
        <tr>
            <th scope="col">BUS NO.</th>
            <th scope="col">DRIVERS NAME</th>
            <th scope="col">CONDUCTORS NAME</th>
            <th scope="col">ITEM DESCRIPTION</th>
            <th scope="col">DATE LOST</th>
            <th scope="col">STATUS</th>
        </tr>
            </thead>
                <tbody>
                <?php 
                    include 'table-connection.php';
                    $sql = "SELECT *FROM lost_tb";

                    $result = mysqli_query($conn,$sql);

                    while($row = mysqli_fetch_assoc($result)) {

                        $statusClass = ($row['status'] == 'claim') ? 'claim-status-claim' : 'claim-status-unclaim';
                        
                        $bus_no = $row['bus_no'];
                        $dname = $row['drivers_name'];
                        $cname = $row['conductors_name'];
                        $item = $row['item'];
                        $date = $row['date'];

                        // Format the date using the date() and strtotime() functions
                        $formatted_date = date("F j, Y", strtotime($date));

                        echo '
                        <tr>
                    
                        <td>'.$bus_no.'</td>
                        <td>'.$dname.'</td>
                        <td>'.$cname.'</td>
                        <td>'.$item.'</td>
                        <td>'.$formatted_date.'</td> <!-- Use the formatted date variable -->
                        <td class="' . $statusClass . '">' . $row['status'] . '</td>
                        
                        </tr>
                        ';
                }
            ?>

                    
                
    </tbody>
</table>
