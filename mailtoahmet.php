<?php

$to="ahmetgelal@gmail.com";
        $subject="Lutfen Mail Adresini Dogrula";
        $message="Merhaba $ad Asagidaki linki tiklayarak mail adresini aktif edebilirsin 
        http//kiralahepsini.com/aktifet.php?mail=$mailadres&code=$code";
        $sender="From:<ag.softwaredeveloper@gmail.com>";
        $gonder=mail($to,$subject,$message,$sender);
        if ($gonder)
        {echo(" evet mail gitti");
        }
        else{
            echo("mail yok gitmedi");
        }
        

?>