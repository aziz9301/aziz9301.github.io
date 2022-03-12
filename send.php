<?php
if (isset($_POST['ya'])) {
    $no_Wa =$_POST['no'];
    $pesan =$_POST['gas'];
    header("location:https://api.whatsapp.com/send?phone=$no_Wa&text=$pesan");
}elseif (isset($_POST['tidak'])) {
    $no_Wa =$_POST['no'];
    $pesan =$_POST['skip'];
    header("location:https://api.whatsapp.com/send?phone=$no_Wa&text=$pesan");
}elseif (isset($_POST['tanya'])) {
    $no_Wa =$_POST['no'];
    $pesan =$_POST['tanya1'];
    header("location:https://api.whatsapp.com/send?phone=$no_Wa&text=$pesan");
}else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}
?>