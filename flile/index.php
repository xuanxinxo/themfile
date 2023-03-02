<?php
    session_start();
?>
<html>
    <body>
        <table border="1px solid black">
            <thead>
                <tr>
                    <td>name</td>
                    <td>passwark</td>
                    <td>file</td>
                </td>
            </thead>
            <tbody>
                    <?php
                        for($i=0;$i<count($_SESSION['array']);$i++) {

                    ?>
                <tr>
                    
                    <td><?php echo $_SESSION['array'][$i]['name'] ?></td>
                    <td><?php echo $_SESSION['array'][$i]['pass'] ?></td>
                    <td>
                        <img src=" <?php echo $_SESSION['array'][$i]['file'] ?>" alt="" width="50px" height="50px">
                    </td>
                </tr>
                <?php
                            
                        }
                    ?>
            </tbody>
        </table>
    </body>
</html>