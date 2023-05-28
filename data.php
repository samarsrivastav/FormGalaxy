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

    <div class="container">
        <img src="logo.png" class="logo" alt="logo">
        <h1 style="color:white; text-align:center;">Entered data</h1>
        <?php
        $sql = "SELECT * FROM `form`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $row['sno'];
            $name = $row['name'];
            echo '
        <form action="landing.php" method="post">
            <div class="entry">
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            ' . $sno .'     '. $name . '
                            <a class="r" style="
                            text-decoration: none;
                            color: white;
                            position: absolute;
                            right: 13%;" 
                            href="/INTERNSHIP/datalist.php?catid='.$sno.'">More details ➡</a>
                        </label>

                    </div>
                </div>
            </div>
        </form>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>