<html>

<body>
    <form method="get" action="">
        <table>
            <tr>
                <td>Name </td>
                <td><input type="radio" name="fname" value="male">Male <input type="radio" name="fname" value="female">Female</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit"><input type="reset" value="reset"></td>
               
            </tr>
           
        </table>

    </form>
    <?php
     if (isset($_GET['fname'])) {
       $a = $_GET['fname'];
       echo $a;
     }else {
         echo "NO data";
     }
     ?>
</body>

</html>