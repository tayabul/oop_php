
<?php

    $month = [
        'jan-'=> '31',
        'feb-'=> '28',
        'mar-' => '31',
        'apr-' => '30',
        'may-' => '31',
        'jun-' => '30',
        'jul-' => '31',
        'aug-' => '31',
        'sep-' => '30',
        'oct-' => '31',
        'nov-' => '30',
        'dec-' => '31',
    ];

    if(isset($_POST['btn'])){
        function monthName(){
            $value = $_POST['month'];
            
        }
        monthName();
        echo '<br/>';
    }
        

?>


<form action="" method="POST">
    <table>
        <tr>
            <td>This Month is :</td>
            <td>
                <select name="month" id="">
                    <?php
                        foreach($month as $key=>$value){
                        echo "<option value=".$key.">$key</option>";
                        }
                    ?>
                </select>
                <input type="submit" name="btn">
            </td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
    </table>
</form>