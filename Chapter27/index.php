<?php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to Robin's Nest,";
                                  // Добро пожаловать в сообщество Робина
  if ($loggedin) echo " $user, you are logged in";
                                  // Вы вошли в приложение
  else echo ' please sign up or log in';
                                  // Пожалуйста, зарегистрируйтесь или войдите
echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
      <h4>Web App from <i><a href='http://lpmj.net/5thedition' target='_blank'>Learning PHP MySQL & JavaScript Ed. 5</a></i></h4>
    </div>
  </body>
</html>
_END;
?>
