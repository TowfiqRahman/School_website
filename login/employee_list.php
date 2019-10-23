<?php include "html/bootstrap.html" ?>
<?php include "html/navbar.html"; ?>

<!doctype html>
<html>
<head>
    <?php
    include("connect.php");

    $rowperpage = 15;
    $row = 0;

    // Previous Button
    if(isset($_POST['but_prev'])){
        $row = $_POST['row'];
        $row -= $rowperpage;
        if( $row < 0 ){
            $row = 0;
        }
    }

    // Next Button
    if(isset($_POST['but_next'])){
        $row = $_POST['row'];
        $allcount = $_POST['allcount'];

        $val = $row + $rowperpage;
        if( $val < $allcount ){
            $row = $val;
        }
    }

    // generating orderby and sort url for table header
    function sortorder($fieldname){
        $sorturl = "?order_by=".$fieldname."&sort=";
        $sorttype = "asc";
        if(isset($_GET['order_by']) && $_GET['order_by'] == $fieldname){
            if(isset($_GET['sort']) && $_GET['sort'] == "asc"){
                $sorttype = "asc";
            }
        }
        $sorturl .= $sorttype;
        return $sorturl;
    }
    ?>
</head>
<body>
<div class="row row-offcanvas row-offcanvas-left">

<div class="container-fluid">
    
        <?php include "html/sidebar.html" ?>
		<br><h3>Employee List</h3><br>  
<div class="row">
<div class="col-6 col-sm-6 col-lg-8">
<div id="content">
	<?php include "search.html" ?>
    <table border='2' width="100%" id="emp_table" border="0">
        <tr class="tr_header">
            <th align='center'><a href="<?php echo sortorder('ID'); ?>" class="sort">Employee ID</a></th>
            <th >Name</th>
            <th ><a href="<?php echo sortorder('Salary'); ?>" class="sort">Salary</a></th>
			<th align="center">View Details</th>
        </tr>
        <?php
        // count total number of rows
        $sql = "SELECT COUNT(*) AS cntrows FROM `employee`";
        $result = mysqli_query($db,$sql);
        $fetchresult = mysqli_fetch_array($result);
        $allcount = $fetchresult['cntrows'];

        // selecting rows
        $orderby = " ORDER BY ID DESC ";
        if(isset($_GET['order_by']) && isset($_GET['sort'])){
            $orderby = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
        }
        
        // fetch rows
        $sql = "SELECT * FROM `employee` ".$orderby." limit $row,".$rowperpage;
        $result = mysqli_query($db,$sql);
        $sno = $row + 1;
        while($fetch = mysqli_fetch_array($result)){
            $name = $fetch['First Name']." ".$fetch['Last Name'];
            $salary = $fetch['Salary'];
            
            $id = $fetch['ID'];
            
            ?>
            <tr>
                
                <td align='center'><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td align='center'><?php echo $salary; ?></td>
				<td><a href="jobdetails.php?id=<?php echo $id; ?>">View Details</a></td>
                
            </tr>
            <?php
            $sno ++;
        }
        ?>
    </table>
    <form method="post" action="">
        <div id="div_pagination">
		<br>
            <input type="hidden" name="row" value="<?php echo $row; ?>">
            <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
            <input type="submit" class="button" name="but_prev" value="Previous">
            <input type="submit" class="button" name="but_next" value="Next">
        </div>
    </form>
</div>
	<?php include "html/footer.html"; ?>
</div>
   </div>
                <!--/span-->

                <!--/span-->
            
			</div>
			</div>
	
</body>
</html>