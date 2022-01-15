<?php
    include 'config.php';
    mysqli_select_db($con,'madmusic');

    $work = $_POST['post'];
    $sname = $_POST['sname'];
    $stype = $_POST['stype'];

    if (isset($work)) {
            echo "<pre>", print_r($_FILES['music']['name']),"</pre>";
            $music = $_FILES['music']['name'];
            $path = 'music/';
            if (!file_exists($path)) {
                mkdir($path, 0777,true);
            }
    } 
    $target = 'music/'. $music;
    move_uploaded_file($_FILES['music']['tmp_name'], $target);
            
    mysqli_query($con,"insert into music (sname, stype, music) values ('$sname','$stype','$music')") or die("failed to query database");
            
    echo '<script type ="text/javascript"> alert("Upload Successfully");window.location= "index.html"</script>';
?>