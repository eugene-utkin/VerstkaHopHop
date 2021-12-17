requice_once 'header.php';

if (!$loggedin) die("</div></body></html>");

if (isset($_GET['view'])) $view = sanitizeString($_GET['view']);
else:                     $view = $user;

if (isset($_POST['text'])
{
  $text = sanitizeString($_POST['text']);

  if ($text != "")
  {
    $pm = substr(sanitizeString($_POST['pm']),0,1);
    $time = time();
    queryMysql("INSERT INTO messages VALUES(NULL, '$user',
      '$view', '$pm', $time, '$text')");
  }
}

if ($view != "")
{
  if ($view == $user) $name1 = $name2 = "Your";
  else
  {
    $name1 = "<a href='members.php?view=$view'>$view</a>'s";
    $name2 = "$view's";
  }

  echo "<h3>$name1 Messages</h3>";
  showProfile($view);

  echo <<<_END
    <form method='post' action='messages.php?view=$view'>
      <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Type here to leave a message</legend>
        <input type='radio' name='pm' id='public' value='0' checked='checked'>
        <label for="public">Public</label>
        <input type='radio' name='pm' id='private' value='1'>
        <label for="private">Private</label>
      </fieldset>
}
