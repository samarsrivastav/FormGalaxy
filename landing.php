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
    // echo $_SERVER["REQUEST_METHOD"] ;
    $showAlert = false;
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mnumber = $_POST['mnumber'];
        $wnumber = $_POST['wnumber'];
        $intro = $_POST['intro'];
        $gyear = $_POST['gyear'];
        $sql = "INSERT INTO `form` (`name`, `email`, `gyear`, `mnumber`, `wnumber`, `introduction`) VALUES
    ('$name', '$email', '$gyear', '$mnumber', '$wnumber',  '$intro');";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {

            header("location:exitPage.php");


        }
    }
    ?>
    <div class="container">
        <img src="logo.png" class="logo" alt="logo">
        <h1 style="color:white; text-align:center;">Enter the Data Below</h1>
        <form action="landing.php" method="post">
            <div class="entry">
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">1.Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">2.Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">3.Graduation Year</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="gyear"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">4.Mobile Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="mnumber"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">5.Whatsapp Number</label>
                        <input type=" text" class="form-control" id="exampleInputEmail1" name="wnumber"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="entrydata">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">6.Short introduction</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="intro"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <button type="submit" class="btn "> SUBMIT✔️
                </button>
            </div>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>