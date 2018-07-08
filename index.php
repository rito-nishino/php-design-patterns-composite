<?php
require_once 'autoload.php';

use App\Composite\Dir;
use App\Leaf\File;

$root_dir = new Dir('/');   // ルートディレクトリ

$file_1 = new File('file_01.txt');
$root_dir->add($file_1);
    // => /file_01.txt

$file_2 = new File('file_02.txt');
$root_dir->add($file_2);
    // => /file_02.txt

$dir_1 = new Dir('dir01/');
$root_dir->add($dir_1);
    // => /dir01/

$dir_2 = new Dir('dir02/');
$dir_2->add(new File('file_03.txt'));
$root_dir->add($dir_2);
    // => /dir02/
    // => /dir02/file_03.txt

$dir_3 = new Dir('dir03/');
$dir_3->add(new File('file_04.txt'));
$dir_3->add(new File('file_05.txt'));
$dir_3->add(new File('file_06.txt'));

$dir_4 = new Dir('dir04/');
$dir_4->add(new File('file_07.txt'));
$dir_3->add($dir_4);

$root_dir->add($dir_3);
    // => /dir03/
    // => /dir03/file_04.txt
    // => /dir03/file_05.txt
    // => /dir03/file_06.txt
    // => /dir03/dir04/
    // => /dir03/dir04/file_07.txt

// 出力
$root_dir->display();

//echo'<pre>'; print_r($root_dir); echo'<pre>';