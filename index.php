<?php
    $handler = opendir('data');
    while (($filename = readdir($handler)) !== false) {
        if ($filename != "." && $filename != "..") {
            $list[] = explode(".txt",$filename)[0];
        }
    }
    $index=array_rand($list);
    $target=$list[$index];
    $content=file_get_contents(dirname(__FILE__)."/data/$target.txt");
?>
<style>
    div {
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    p {
        font-size: 5rem;
        margin: 0;
        text-align: center;
    }
</style>
<div>
    <p><?php echo $content.'<br>——'.$target; ?></p>
</div>