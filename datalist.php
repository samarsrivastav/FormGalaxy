<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Survey Hearts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="style1.css" />
</head>

<body>
    <?php
    include '_dbconnect.php';
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'post') {
        $checkbox1 = $_POST['techno'];
        $chk = "";
        foreach ($checkbox1 as $chk1) {
            $chk .= $chk1 . ",";
        }
        $in_ch = mysqli_query($conn, "insert into form(checkbox) values ('$chk')");
        // if ($in_ch == 1) {
        //     echo '<script>alert("Inserted Successfully")</script>';
        // } else {
        //     echo '<script>alert("Failed To Insert")</script>';
        // }
    }
    ?>
    <?php
    // echo $_SERVER["REQUEST_METHOD"] ;
    $showAlert = false;
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        // $checkbox1 = $_POST['techno'];
        // $chk = "";
        // foreach ($checkbox1 as $chk1) {
        //     $chk .= $chk1 . ",";
        // }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mnumber = $_POST['mnumber'];
        $wnumber = $_POST['wnumber'];
        $intro = $_POST['intro'];
        $gyear = $_POST['gyear'];
        $sql = "INSERT INTO `form` (`name`, `email`, `gyear`, `mnumber`, `wnumber`, `introduction`, `file`) VALUES
    ('$name', '$email', '$gyear', '$mnumber', '$wnumber',  '$intro', '');";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
                   
            header("location:exitPage.php");


        }
    }
    ?>
    <div class="container">
        <img src="logo.png" class="logo" alt="logo">

        <?php
        $id=$_GET['catid'];
        $sql = "SELECT * FROM `form` where sno=$id";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
        $email = $row['email'];
        $mnumber = $row['mnumber'];
        $wnumber = $row['wnumber'];
        $intro = $row['introduction'];
        $gyear = $row['gyear'];
    }
            echo '
            <h1 style="color:white; text-align:center;">Details of '.$id.'   '.$name.'</h1>
        <form action="landing.php" method="post">
            <div class="entry">
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">1.Name  ➡ '.$name.'</label>
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">2.Email address  ➡ '.$email.'</label>
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">3.Graduation Year  ➡ '.$gyear.'</label>
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">4.Mobile Number  ➡ '.$mnumber.'</label>
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">5.Whatsapp Number  ➡ '.$wnumber.'</label>
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">7.Short introduction   ➡ '.$intro.'</label>
                    </div>
                </div>
            </div>
        </form>';
        
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>