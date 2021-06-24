<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Chat Room</title>
  <link rel="stylesheet" href="css/style.css">
  <!--  <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css"/>-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="css/emojionearea.css">
  <link rel="stylesheet" href="css/simple-scrollbar.css">
  <script src="js/simple-scrollbar.js"></script>
  <!--  <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>-->
</head>

<body>
  <!--<div class="container">-->
  <div class="chat-container">

    <!--    <div class="search-container">-->
    <!--      <input class="input-custom search transparent" type="text" placeholder="Search"> <i class="material-icons inner">search</i>-->
    <!--    </div>-->

    <div class="item1">
      <div class="person-info">
        <div class="person list item active">
          <div class="img-face mr-12"><img class="img-rounded img-contain" src="img/about.jpg" alt=""></div><span class="name">
            <h4>Abid Al Wassie</h4>
          </span>
        </div>
      </div>
      <div class="menu-options-holder">
        <ul class="chat-actions v-list">
          <li><a href="javascript:void(0)"><i class="material-icons blue mid">call</i></a></li>
          <li><a href="javascript:void(0)"><i class="material-icons blue mid">videocam</i></a></li>
          <li><a href="javascript:void(0)"><i class="material-icons blue mid">info</i></a></li>
        </ul>
      </div>
    </div>
    <div class="item2 c-blue1">
      <div class="user-options-holder">
        <h2 class="header-left">Chats</h2>
        <ul class="user-actions v-list">
          <li><a href="javascript:void(0)"><i class="material-icons white round mid">settings</i></a></li>
          <li><a href="javascript:void(0)"><i class="material-icons white round mid">group_add</i></a></li>
          <li><a href="javascript:void(0)"><i class="material-icons white round mid">create</i></a></li>
        </ul>
      </div>
    </div>
    <div class="item3 c-blue1 search-container"><input class="input-custom round fw search transparent" type="text" placeholder="Search"> <i class="material-icons inner">search</i></div>


    <div class="item4 c-blue1" ss-container>
      <ul class="conversation list" data-simplebar>

        <?php
        include "templates/demo_people.php";
        ?>

      </ul>
    </div>
    <div class="item5" ss-container>
      <div class="chat-messages" id="chatRoot" data-simplebar>

        <?php
        include "templates/demo_text.php";
        ?>

      </div>
    </div>
    <div class="item6">More options</div>
    <div class="item7">
      <form id="chat-form" class="input-container">
        <a href="javascript:void(0)" draggable="false"><i class="material-icons outer round ml-10">add</i></a>
        <input id="msg" type="text" placeholder="Type text" required autocomplete="off" class="input-custom round fw text grey">
        <a href="" draggable="false"><i class="material-icons outer round  mr-10">send</i></a>
      </form>
    </div>

  </div>
  <!--</div>-->
  <!--<script src="js/simplebar.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/emojionearea.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#msg").emojioneArea();
    });

    const SimpleScrollbar = require('simple-scrollbar');
    require('simple-scrollbar/simple-scrollbar.css');

    // window.onload = function () {
    //
    //   var msg = document.getElementById("msg");
    //   msg.emojioneArea();
    //   // function msg.emojioneArea(msg) {
    //   //
    //   // }
    //   // msg.emojioneArea();
    // }
  </script>
  <script src="js/socket.io.min.js"></script>
  <script src="js/app.js"></script>
</body>

</html>