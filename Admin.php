<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'stdout');
require_once "config.php";

$db = new config("localhost", "u711777167_db", "3306", "u711777167_alicia573", "Emily0801");
$db->checkConnectionToDatabase();

session_start();
if(isset($_SESSION["username"]))
{
    echo '<link rel="stylesheet" href="style.css">';
    ?>
    <div id="wrapper">
        <style>
            #table{
                border: 1px solid navajowhite;
                width: 100%;
                margin-top: 100px;
                margin-bottom: 150px;
                border-collapse: collapse;
                font-family: monospace;
                text-align: left;
                font-size: 16px;
            }
            #table th{
                color: navajowhite ;
                background-color: cadetblue;
                border-right: 1px solid navajowhite;
            
            }
            #table td{
                color: cadetblue ;
                background: navajowhite;
                border-right: 1px solid cadetblue;
            }
        </style>
    <?php
    echo '<h4>Welcome - '.$_SESSION["username"].'</h4>';
    echo '<h2>Admin Area</h2>';
    echo '<a href="logout.php"><button type="button">Logout</button></a>';
   ?>
   <link rel="stylesheet" href="style.css">

    <table id="table">
        <tr id="table_">
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone-number</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

 <?php
   foreach ($db->getTableByName('messages') as $row){

?>
        <tbody id="table_info">
             <tr>
     <?php
           echo "<td>"; echo $row["id"]; echo "</td>";
           echo "<td>"; echo $row["name"]; echo "</td>";
           echo "<td>"; echo $row["email"]; echo "</td>";
           echo "<td>"; echo $row["tel"]; echo "</td>";
           echo "<td>"; echo $row["subject"]; echo "</td>";
           echo "<td>"; echo $row["text"]; echo "</td>";
       } ?>
            </tr>
         </tbody>
    </table>
    </div>
<?php
    }
    else
    {
        header("location:logout.php");
        echo'error';

    }

?>

