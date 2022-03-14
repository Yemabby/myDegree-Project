<html>
<body>
<?php
    $con=mysql_connect('localhost','root','') or die('Connection error');
    mysql_select_db('test',$con);
    $result=mysql_query("SELECT name, regno FROM  studentreg WHERE course='Mvideo'");

 ?>
    <table>
        <form method='post' action='#'>

                <tr><td>Name</td><td>Attend</td></tr>
                <?php
                    while($row=mysql_fetch_array($result))
                    {
                        echo "<tr><td>".$row['name']."</td>
                            <td>
                            <select name='status_".$row['regno']."'>
                            <option value='present'>Present</option><option value='Absent'>absent</option>
                            </select>
                            </td></tr>";
                    }
                 ?>

            <tr><td><input type='submit'></td></tr>
        </form>
    </table>
    <?php
        if(isset($_POST) )
        { 
            $result2=mysql_query("SELECT name, regno FROM  studentreg WHERE course='Mvideo'");

            while($row=mysql_fetch_array($result2))
            {
                $status=$_POST['status_'.$row['regno']];
                $comment=$_POST['comment_'.$row['regno']];
                echo $qry="INSERT INTO attendance( name, regno, comments) VALUES($status, $row[id], $comment)";
            }

        }
     ?>
</body>
</html>