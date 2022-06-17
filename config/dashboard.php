<?php
    require_once './connection.php';

    if(isset($_POST['eventBtn'])){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $pic_1_name = $_FILES['pic_1']['name'];
            $pic_1_path = $_FILES['pic_1']['full_path'];
            $pic_1_type = $_FILES['pic_1']['type'];
            $pic_1_tmp_name = $_FILES['pic_1']['tmp_name'];
            $pic_1_error = $_FILES['pic_1']['error'];
            $pic_1_size = $_FILES['pic_1']['size'];

            $pic_2_name = $_FILES['pic_2']['name'];
            $pic_2_path = $_FILES['pic_2']['full_path'];
            $pic_2_type = $_FILES['pic_2']['type'];
            $pic_2_tmp_name = $_FILES['pic_2']['tmp_name'];
            $pic_2_error = $_FILES['pic_2']['error'];
            $pic_2_size = $_FILES['pic_2']['size'];

            $pic_3_name = $_FILES['pic_3']['name'];
            $pic_3_path = $_FILES['pic_3']['full_path'];
            $pic_3_type = $_FILES['pic_3']['type'];
            $pic_3_tmp_name = $_FILES['pic_3']['tmp_name'];
            $pic_3_error = $_FILES['pic_3']['error'];
            $pic_3_size = $_FILES['pic_3']['size'];

            $pic_1 = "event_pic".rand(0, 1000).'.'.(explode('/' ,$pic_1_type)[1]);
            $pic_2 = "event_pic".rand(0, 1000).'.'.(explode('/' ,$pic_2_type)[1]);
            $pic_3 = "event_pic".rand(0, 1000).'.'.(explode('/' ,$pic_3_type)[1]);

            move_uploaded_file($pic_1_tmp_name, '../img/events/' . $pic_1);
            move_uploaded_file($pic_2_tmp_name, '../img/events/' . $pic_2);
            move_uploaded_file($pic_3_tmp_name, '../img/events/' . $pic_3);

            $sql_cmd = 'INSERT INTO eventinfo(img_1, img_2, img_3, discr, dateline)VALUE("'.$pic_1.'", "'.$pic_2.'", "'.$pic_3.'", "'.$_POST['discription'].'", "'.$_POST['date'].'")';
            $conn->exec($sql_cmd);
        }
    }elseif(isset($_POST['programBtn'])){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = $_POST['title'];
            $discr = $_POST['programDiscr'];
            $pic_tmp_name = $_FILES['program_pic']['tmp_name'];
            $pic_type = $_FILES['program_pic']['type'];
            $pic_name = $_FILES['program_pic']['name'];

            $pic_m = "program_pic".rand(0, 1000).'.'.(explode('/' ,$pic_type)[1]);

            move_uploaded_file($pic_tmp_name, '../img/program/' . $pic_m);

            $sql = "INSERT INTO programinfo(`title`, `discr`, `image`)VALUE('". $title . "', '" .$discr. "', '" .$pic_m. "');";
            $conn->exec($sql);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel='stylesheet' href='../css/bootstrap.css'/> 
    <link rel="stylesheet" href="../css/dashboardSytle.css">
    <?php 
        if($_GET['part'] === 'addevent'){
    ?>
    <style>
        #programPart {
            display: none;
        }
        .list.addevent{
            background-color: rgba(0, 0, 139, 0.753);
            color: #fff;
            border-color: #fff;
        }
    </style>
    <?php
        }elseif($_GET['part'] === 'addprogram'){
    ?>
    <style>
            #programPart {
                display: block;
            }
            #eventPart {
                display: none;
            }
            .list.addprog{
            background-color: rgba(0, 0, 139, 0.753);
            color: #fff;
            border-color: #fff;
        }
    </style>
    <?php
        }
    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <ul>
                    <a href="?part=addevent"><li class="list addevent">Add Event</li></a>
                    <a href="?part=addprogram"> <li class="list addprog">Add Summer Program</li></a>
                </ul>
            </div>
            <div class="col-lg-8" id="eventPart">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <textarea name="discription" placeholder="Write your description here..."></textarea><br>
                    <input type="date" name="date"><br><br>
                    <input type="file" name="pic_1"><br><br>
                    <input type="file" name="pic_2"><br><br>
                    <input type="file" name="pic_3"><br><br>
                    <input type="submit" name="eventBtn" value="Add Event">
                </form>
            </div>

            <div class="col-lg-8" id="programPart">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Write here program title"><br><br>
                    <textarea name="programDiscr" placeholder="Write somthing her..."></textarea><br>
                    <br>
                    <label for="miniator" style="font-weight: 700;">Miniature : </label>
                    <input type="file" name="program_pic" id="miniator"><br><br>
                    <input type="submit" name="programBtn" value="Add Program">
                </form>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
    <script>
        var addtimeBtn = document.querySelector('.addtimes');
        var dayselect = document.getElementById('day');
        var startselect = document.getElementById('start');
        var endselect = document.getElementById('end');
        addtimeBtn.addEventListener('click', function(){
            alert(dayselect.value + '/' + startselect.value + '/' + endselect.value);
        })
    </script>
</body>
</html>