<?php
// savecsv.php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // 改行を削除
    $_POST['contact'] = preg_replace('/\n|\r|\r\n/', '', $_POST['contact']);
    
    
    if(!$fp = fopen('test.csv','ab'))
    {
        echo 'ファイルが開けませんでした。';
        return;
    }

    if(flock($fp, LOCK_EX) == false)
    {
        echo 'ファイルがロック出来ませんでした。';
        return;
    }

    fputcsv($fp, $_POST);

    flock($fp, LOCK_UN);
    fclose($fp);

    echo '送信完了';
    print_r($_POST);
    header( "refresh:2;url=index.php" );
    exit();
}
