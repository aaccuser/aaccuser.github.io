<?php 
 $pages = array(
   0 => array('title' => 'Первая страница', 'body' => 'Первый текст'),
   1 => array('title' => 'Вторая страница', 'body' => 'Второй текст')
 );
 $page_id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0; //возьмем номер из запроса
 if (!isset($pages[$page_id])) $page_id = 0; //проверим что такая страница есть - если нет - 0 по умолчанию
 $page  = $pages[$page_id]; 
?>
<html>
 <head>
  <title><?php echo $page['title'];?></title>
 </head>
 <body>
  <a href="?id=0">Главная</a>
  <a href="?id=1">Вторая</a>
  <?php echo $page['body'];?>
 </body>
</html>
