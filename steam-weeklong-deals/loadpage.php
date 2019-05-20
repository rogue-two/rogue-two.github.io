<?php

$page = file_get_contents('https://store.steampowered.com/search/?filter=weeklongdeals&page='.$_GET['page']);

echo $page;