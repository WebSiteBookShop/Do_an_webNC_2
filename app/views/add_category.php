<form autocomplete="off" action="<?php echo BASE_URL?> category/inset_category" method="POST"> 

    <?php
        if(isset($msg)){
            echo '<span style= "color: blue; font-weight: bold;" >'.$msg. '</span>';
        }
    ?>
    <table>

        <tr>
            <td>Name</td>
            <td><input type="text" required="1" name="name"></td>
        </tr>
        <tr>
            <td>Desc</td>
            <td><input type="text" required="1" name="desc"></td>
        </tr>
        <tr>
            <td><input type="submit" name="addcategory" value="insert"></td>
        </tr>
    </table>
</form>