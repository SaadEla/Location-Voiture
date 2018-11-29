
<?php
    $db = mysqli_connect("localhost", "root", "", "locationvoiture");
    if(isset($_POST['Input'])) {
        //$Kode = $_POST['Kode'];
        //$Tipe = $_POST['Tipe'];


        for($x=0; $x<count($_FILES['images1']['tmp_name']); $x++ ) {

            $file_name = $_FILES['images1']['name'][$x];
            $file_size = $_FILES['images1']['size'][$x];
            $file_tmp  = $_FILES['images1']['tmp_name'][$x];

            $t = explode(".", $file_name);
            $t1 = end($t);
            $file_ext = strtolower(end($t));

            $ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");

            if(in_array($file_ext, $ext_boleh)) {
                $sumber = $file_tmp;
                $tujuan = "images/" . $file_name;
                move_uploaded_file($sumber, $tujuan);

                //$sql = "insert into images values ('$Kode' , '$Tipe' , '$tujuan')";
				$sql = "INSERT INTO images (images1,images2,images3) VALUES ('$tujuan')";
               mysqli_query($db, $sql);
            }else  {
                echo "Only Images can be store!";
            }
        } // endfor
    }
?>