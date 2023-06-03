<?php

if(isset($_POST['doing']))
{
    require '../config.php';

    $title = $_POST['doing'];

    if(empty($title))
    {
        header("Location: ../index.php?mess=error");
    }
    else
    {
        $stmt = $conn->prepare("INSERT INTO todo(doing) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res)
        {
            header("Location: ../index.php?mess=success");
        }
        else
        {
            header("Location: ../index.php");
        }
        $conn = null;
        exit();
        
    }
}
else
{
    header("Location: ../index.php?mess=error");
}