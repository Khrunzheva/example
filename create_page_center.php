<!DOCTYPE HTML>
<head>
  <script type="text/javascript" src="\javascript\jquery-1.2.6.pack.js"></script>
  <script type="text/javascript" src="\javascript\add_field.js"></script>
  <script type="text/html" charset="utf-8"></script>
</head>
<body>
  <div class="title">
    <h2>Создание анкеты</h2>
    <h2>Метод СМАРТ</h2>
  </div>
  <form method="post" action="Smart_analis.php">
    <div class="container">
      <table id="table_container">
        <tr>
          <td width="100px" colspan="2">
            <h3>Критерии и оценка важности</h3>
          </td>
        </tr>
      </table>
      <?php $n=2;?>
      <div class="plus">
      <a href="#" onclick="return add_new_image();">
        <img src="\images\plus.png" width="30px" height="30px">
      </a>
      <?php
        $keyk = array_keys($_POST);
      ?>
      </div>
    </div>
    <div class="container">  
      <table id="table_container1">
        <tr>
          <td width="100px" colspan="2">
            <h3>Варианты решения</h3>
          </td>
        </tr>
      </table>
      <?php $m=1;?>
      <div class="plus">
      <a href="#" onclick="return add_new_image1();">
        <img src="\images\plus.png" width="30px" height="30px">
      </a>
      <?php
        $keyv = array_keys($_POST);
      ?>
      </div>
    </div>
    <div class="but">
      <input name="ok" type="submit" />
    </div>
  </form>
</body>