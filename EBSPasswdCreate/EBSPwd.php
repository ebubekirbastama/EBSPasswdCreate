<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body {
                background-image: url(https://images.pexels.com/photos/3137052/pexels-photo-3137052.jpeg);
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <title>Secure Password Generator | Ebubekir Bastama</title>
    </head>
    <body>
    <div class="container mt-3">
        <form action="" method="post">

            <h2>Secure Password Paneli</h2>
            <p>Please Enter Your Password </p>

            <input type="password" name="Ebsktgrurl" class="form-control" placeholder="Password"></input><br/>
            <p>Secure Password</p>
            <?php
            $passwdsecury1 = "";
            $passwdsecury2 = "";
            if (isset($_POST['EBSButton'])) {
                $passwd = $_POST['Ebsktgrurl'];

                foreach (str_split($passwd) as $key => $value) {
                    $passwdsecury1 .= "^#" . $value;
                }

                for ($x = 0; $x <= count(str_split(md5($passwdsecury1))) - 1; $x++) {
                    if ($x < 5) {
                        $passwdsecury2 .= strtoupper(str_split(md5($passwdsecury1))[$x]);
                    } else {
                        if ($x == 7) {
                            $passwdsecury2 .= str_split(md5($passwdsecury1))[$x] . "?";
                        }
                        if ($x == 8) {
                            $passwdsecury2 .= str_split(md5($passwdsecury1))[$x] . "x";
                        }
                        if ($x == 9) {
                            $passwdsecury2 .= str_split(md5($passwdsecury1))[$x] . "&";
                        }
                        if ($x == 10) {
                            $passwdsecury2 .= str_split(md5($passwdsecury1))[$x] . "£";
                        } else {
                            $passwdsecury2 .= str_split(md5($passwdsecury1))[$x];
                        }
                    }
                }
                echo '<input type="text" class="form-control" placeholder="Created Password" value="' . $passwdsecury2 . '"></input><br/>';
            }
            ?>

            <button type="submit" name="EBSButton" class="btn btn-outline-success">Güvenli Şifre Oluştur</button>
        </form>
    </div>


</body>
</html>
