<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('_header_pano.php'); ?>
  <?php
  $scene = '';
  $scene = $_GET['scene'];
  ?>
  <script>
    var base_url =
      "./index.php?s=";
    var main_url = '<?php echo _PANO_ ?>/';
    var assets_url = '<?php echo _ASSET_ ?>/';
    $(document).ready(function() {
      if (window.matchMedia("(max-width: 767px)").matches) {
        device = 'mobile';
      } else if (window.matchMedia("(max-width: 1280px)").matches) {
        device = 'tablet';
      } else {
        device = 'desktop';
      }
    });
  </script>
</head>

<body class="pano">
  <div class="home d-none">
    <div class="content"></div>
    <div class="cloud cloud_1"></div>
    <div class="cloud cloud_2"></div>
    <div class="cloud cloud_3"></div>
  </div>
  <div id="container"></div>
  <div id="videosCutScene">
    <video src="" muted></video>
  </div>
  <div id="videosInfo">
    <div class="boxVideo animate__backInDown animate__animated">
      <div class="close" onclick="btn_close_video()">
        <img src="<?php echo _IMG_ ?>/icons/close.png" alt="">
      </div>
      <video src="" controls></video>
    </div>
  </div>
  <div id="imageCutScene" style="display: none;">
    <div class="box animate__backInDown animate__animated">
      <div class="floor"></div>
      <div class="text_title"></div>
      <div class="btn_ex mt-3">
        <img src="<?php echo _IMG_ ?>/btn.png" alt="">
        <div class="text">explore</div>
      </div>
    </div>
    <div class="cloud cloud_1">
      <img src="<?php echo _IMG_ ?>/cloud_1.png" alt="">
    </div>
    <div class="cloud cloud_2">
      <img src="<?php echo _IMG_ ?>/cloud_1.png" alt="">
    </div>
    <div class="cloud cloud_3">
      <img src="<?php echo _IMG_ ?>/cloud_1.png" alt="">
    </div>
  </div>
  <div id="imageCutSceneFirst" style="background-image:url(<?php echo _IMG_ ?>/cutScene/first.jpg);display: none;">
    <div class="box animate__backInDown animate__animated">
      <div class="logo">
        <img src="<?php echo _IMG_ ?>/logo.png" alt="">
      </div>
      <div class="floor mt-lg-4">Virtual Tour</div>
      <div class="text_title">
        ศูนย์การเรียนรู้<br>
        ธนาคารแห่งประเทศไทย</div>
      <div class="btn_ex mt-lg-5">
        <img src="<?php echo _IMG_ ?>/btn2.png" alt="">
        <div class="text">explore</div>
      </div>
      <div class="subText mt-3">
        คลิก Enter เพื่อเข้าสู่ Virtual tour
      </div>
    </div>
  </div>
  <div id="infomation" class="detail_obj" style="display: none;">
    <div class="box__ animate__animated animate__backInDown">
      <div class="close" onclick="btn_close_detail_obj()">
        <img src="<?php echo _IMG_ ?>/icons/close.png" alt="">
      </div>
      <div class="title"></div>
      <div class="image">
        <img src="" alt="">
      </div>
      <div class="des">
        <p></p>
      </div>
    </div>
  </div>
  <!-- <button id="toggle_camera_rotate" class="btn">TOGGLE CAMERA ROTATE</button> -->
  <div class="menu left">
    <a href="<?php echo _HOMEURL_ ?>/home">
      <div class="lists">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.334 30.337">
          <path id="home" d="M30.019,13.194l0,0L17.642.818a2.792,2.792,0,0,0-3.95,0L1.323,13.186l-.012.013a2.792,2.792,0,0,0,1.858,4.758c.029,0,.057,0,.086,0h.493v9.107a3.272,3.272,0,0,0,3.269,3.269h4.842a.889.889,0,0,0,.889-.889v-7.14a1.493,1.493,0,0,1,1.491-1.491h2.856a1.493,1.493,0,0,1,1.491,1.491v7.14a.889.889,0,0,0,.889.889h4.842a3.272,3.272,0,0,0,3.269-3.269V17.961h.457a2.793,2.793,0,0,0,1.977-4.767ZM28.76,15.886a1.009,1.009,0,0,1-.718.3H26.7a.889.889,0,0,0-.889.889v10a1.493,1.493,0,0,1-1.491,1.491H20.364V22.308a3.272,3.272,0,0,0-3.269-3.269H14.239a3.273,3.273,0,0,0-3.269,3.269v6.251H7.017a1.493,1.493,0,0,1-1.491-1.491v-10a.889.889,0,0,0-.889-.889H3.314l-.042,0a1.014,1.014,0,0,1-.7-1.732h0L14.949,2.074a1.015,1.015,0,0,1,1.435,0L28.757,14.446l.006.006a1.017,1.017,0,0,1,0,1.434Zm0,0" transform="translate(-0.5 0.001)" />
        </svg>
        <div class="name_menu animate__animated animate__bounceIn">หน้าหลัก</div>
      </div>
    </a>
    <div class="lists" name="map">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26.269" height="26.241" viewBox="0 0 26.269 26.241">
        <defs>
          <clipPath id="clip-path">
            <rect id="Rectangle_39651" data-name="Rectangle 39651" width="26.269" height="26.241" />
          </clipPath>
        </defs>
        <g id="Group_170281" data-name="Group 170281" transform="translate(0 0)">
          <g id="Group_170280" data-name="Group 170280" transform="translate(0 0)" clip-path="url(#clip-path)">
            <path id="Path_52226" data-name="Path 52226" d="M0,25.566V4.518a7.721,7.721,0,0,1,.994-.809,16.533,16.533,0,0,1,1.534-.7L9.241,0h.308c.024.024.042.058.071.071,2.6,1.153,5.2,2.3,7.8,3.462a.842.842,0,0,0,.812-.031c1.168-.6,2.346-1.175,3.516-1.766C22.887,1.162,24.02.579,25.155,0h.411a1.42,1.42,0,0,1,.7,1.406q-.026,9.851,0,19.7a1.473,1.473,0,0,1-.949,1.512c-2.246,1.085-4.475,2.206-6.695,3.345A1.612,1.612,0,0,1,17.081,26c-2.361-1.075-4.743-2.106-7.1-3.182a1.3,1.3,0,0,0-1.2.009c-2.347,1.067-4.708,2.1-7.065,3.151C.775,26.4.582,26.35,0,25.566m1.84-1.649c.235-.089.409-.144.574-.217,1.842-.815,3.676-1.645,5.526-2.442a.768.768,0,0,0,.551-.83C8.473,14.612,8.478,8.8,8.477,2.98c0-.182-.015-.363-.026-.6-.216.082-.374.133-.525.2C6.07,3.4,4.218,4.236,2.355,5.045a.737.737,0,0,0-.527.791q.026,8.749.012,17.5v.582M16.9,23.9c.018-.164.042-.278.042-.39q0-8.9.01-17.808a.571.571,0,0,0-.422-.6c-1.908-.836-3.807-1.689-5.711-2.534-.147-.066-.3-.108-.491-.172-.016.181-.037.3-.037.413q0,8.879-.009,17.756a.605.605,0,0,0,.449.635c1.893.826,3.776,1.674,5.663,2.512.151.067.31.115.505.186m1.851-.039c.262-.117.417-.181.568-.255,1.544-.771,3.081-1.555,4.634-2.307a.771.771,0,0,0,.507-.813q-.023-8.725-.011-17.448c0-.178-.015-.357-.026-.6-.231.1-.4.17-.567.251-1.527.764-3.047,1.543-4.585,2.283a.8.8,0,0,0-.532.851q.024,8.7.011,17.4Z" transform="translate(0 0)" />
          </g>
        </g>
      </svg>
      <div class="name_menu animate__animated animate__bounceIn">ผังนิทรรศการ 3 มิติ</div>
    </div>
    <div class="lists" name="image">
      <svg xmlns="http://www.w3.org/2000/svg" width="30.103" height="27.594" viewBox="0 0 30.103 27.594">
        <g id="image-gallery" transform="translate(0 -2)">
          <g id="Group_108952" data-name="Group 108952" transform="translate(0 11.659)">
            <path id="Path_44292" data-name="Path 44292" d="M21.891,27.636a2.5,2.5,0,0,1-.64-.083L1.856,22.359A2.531,2.531,0,0,1,.083,19.286L2.53,10.165a.627.627,0,0,1,1.212.324L1.3,19.607a1.273,1.273,0,0,0,.891,1.541L21.573,26.34a1.249,1.249,0,0,0,1.526-.883l.98-3.63a.627.627,0,1,1,1.212.326l-.978,3.625a2.505,2.505,0,0,1-2.422,1.858Z" transform="translate(0 -9.701)" fill="" />
          </g>
          <g id="Group_108953" data-name="Group 108953" transform="translate(5.017 2)">
            <path id="Path_44293" data-name="Path 44293" d="M26.577,22.068H6.509A2.511,2.511,0,0,1,4,19.56V4.509A2.511,2.511,0,0,1,6.509,2H26.577a2.511,2.511,0,0,1,2.509,2.509V19.56A2.511,2.511,0,0,1,26.577,22.068ZM6.509,3.254A1.256,1.256,0,0,0,5.254,4.509V19.56a1.256,1.256,0,0,0,1.254,1.254H26.577a1.256,1.256,0,0,0,1.254-1.254V4.509a1.256,1.256,0,0,0-1.254-1.254Z" transform="translate(-4 -2)" fill="" />
          </g>
          <g id="Group_108954" data-name="Group 108954" transform="translate(8.78 5.763)">
            <path id="Path_44294" data-name="Path 44294" d="M9.509,10.017a2.509,2.509,0,1,1,2.509-2.509A2.511,2.511,0,0,1,9.509,10.017Zm0-3.763a1.254,1.254,0,1,0,1.254,1.254A1.256,1.256,0,0,0,9.509,6.254Z" transform="translate(-7 -5)" fill="" />
          </g>
          <g id="Group_108955" data-name="Group 108955" transform="translate(5.104 8.961)">
            <path id="Path_44295" data-name="Path 44295" d="M4.7,19.315a.627.627,0,0,1-.444-1.07l5.924-5.924a1.928,1.928,0,0,1,2.66,0L14.6,14.085l4.882-5.857a1.884,1.884,0,0,1,1.432-.677h.014a1.88,1.88,0,0,1,1.429.656l6.56,7.654a.627.627,0,0,1-.952.817l-6.56-7.654a.62.62,0,0,0-.477-.218.666.666,0,0,0-.482.226l-5.322,6.385a.625.625,0,0,1-.454.225.6.6,0,0,1-.472-.183l-2.249-2.249a.644.644,0,0,0-.887,0L5.14,19.132a.625.625,0,0,1-.443.183Z" transform="translate(-4.07 -7.55)" fill="" />
          </g>
        </g>
      </svg>
      <div class="name_menu animate__animated animate__bounceIn">รูปภาพ</div>
    </div>
    <div class="lists" name="game">
      <svg xmlns="http://www.w3.org/2000/svg" width="37.147" height="24.398" viewBox="0 0 37.147 24.398">
        <g id="console" transform="translate(0 -55.109)">
          <g id="Group_108937" data-name="Group 108937" transform="translate(0 55.109)">
            <g id="Group_108936" data-name="Group 108936" transform="translate(0 0)">
              <path id="Path_44286" data-name="Path 44286" d="M37.128,71.983a34.675,34.675,0,0,0-1.018-6.709,25.749,25.749,0,0,0-2.082-5.645c-3.239-5.691-6.755-4.812-10.966-3.7a30.139,30.139,0,0,1-4.257.833h-.463a30.139,30.139,0,0,1-4.257-.833c-4.21-1.064-7.727-1.99-10.966,3.748A23.587,23.587,0,0,0,1.038,65.32,34.675,34.675,0,0,0,.02,72.029,12.607,12.607,0,0,0,.668,77.3a3.507,3.507,0,0,0,2.221,2.082,4.524,4.524,0,0,0,2.961-.324,21.747,21.747,0,0,0,5.922-4.21c1.434-1.388,4.118-2.082,6.8-2.082s5.367.694,6.8,2.082a21.747,21.747,0,0,0,5.922,4.21,4.84,4.84,0,0,0,2.961.324,3.457,3.457,0,0,0,2.221-2.128A12.371,12.371,0,0,0,37.128,71.983Zm-2.221,4.627a1.835,1.835,0,0,1-1.11,1.157,3.2,3.2,0,0,1-1.9-.231,18.869,18.869,0,0,1-5.367-3.84c-1.758-1.758-4.858-2.637-7.958-2.637s-6.2.879-8,2.545A19.225,19.225,0,0,1,5.2,77.442a2.87,2.87,0,0,1-1.9.231,1.835,1.835,0,0,1-1.11-1.157,10.941,10.941,0,0,1-.463-4.442A31.915,31.915,0,0,1,2.7,65.69a22.077,22.077,0,0,1,1.943-5.228c2.545-4.581,5.506-3.84,9.022-2.915a27.142,27.142,0,0,0,4.534.879H18.9a26.806,26.806,0,0,0,4.581-.879c3.516-.879,6.478-1.666,9.022,2.915a21.335,21.335,0,0,1,1.943,5.228,35.02,35.02,0,0,1,.972,6.385A10.706,10.706,0,0,1,34.907,76.609Z" transform="translate(0 -55.109)" fill="" />
            </g>
          </g>
          <g id="Group_108939" data-name="Group 108939" transform="translate(4.786 59.721)">
            <g id="Group_108938" data-name="Group 108938" transform="translate(0 0)">
              <path id="Path_44287" data-name="Path 44287" d="M50.9,98.22a2.811,2.811,0,0,0-1.666-.787,2.633,2.633,0,0,0-.74-1.619l-.046-.046a2.621,2.621,0,0,0-1.9-.787,2.732,2.732,0,0,0-1.9.787,2.689,2.689,0,0,0-.787,1.666,2.756,2.756,0,0,0-1.666.74l-.046.046a2.621,2.621,0,0,0-.787,1.9,2.732,2.732,0,0,0,.787,1.9,2.58,2.58,0,0,0,1.712.787,2.468,2.468,0,0,0,.787,1.666,2.621,2.621,0,0,0,1.9.787,2.732,2.732,0,0,0,1.9-.787,2.811,2.811,0,0,0,.787-1.666,2.468,2.468,0,0,0,1.666-.787,2.621,2.621,0,0,0,.787-1.9A2.732,2.732,0,0,0,50.9,98.22Zm-1.157,2.591a.942.942,0,0,1-.694.278h-.648a.879.879,0,0,0-.879.879v.6a.972.972,0,1,1-1.943,0v-.648a.879.879,0,0,0-.879-.879h-.648a.949.949,0,0,1-.694-1.619l.046-.046a1.105,1.105,0,0,1,.648-.231H44.7a.879.879,0,0,0,.879-.879v-.648a.982.982,0,0,1,1.666-.694l.046.046a1.105,1.105,0,0,1,.231.648v.648a.879.879,0,0,0,.879.879h.648a.982.982,0,0,1,.694,1.666Z" transform="translate(-41.373 -94.981)" fill="" />
            </g>
          </g>
          <g id="Group_108941" data-name="Group 108941" transform="translate(25.005 59.953)">
            <g id="Group_108940" data-name="Group 108940" transform="translate(0 0)">
              <circle id="Ellipse_1460" data-name="Ellipse 1460" cx="1.619" cy="1.619" r="1.619" fill="" />
            </g>
          </g>
          <g id="Group_108943" data-name="Group 108943" transform="translate(25.005 66.523)">
            <g id="Group_108942" data-name="Group 108942" transform="translate(0 0)">
              <circle id="Ellipse_1461" data-name="Ellipse 1461" cx="1.619" cy="1.619" r="1.619" fill="" />
            </g>
          </g>
          <g id="Group_108945" data-name="Group 108945" transform="translate(21.72 63.238)">
            <g id="Group_108944" data-name="Group 108944" transform="translate(0 0)">
              <circle id="Ellipse_1462" data-name="Ellipse 1462" cx="1.619" cy="1.619" r="1.619" fill="" />
            </g>
          </g>
          <g id="Group_108947" data-name="Group 108947" transform="translate(28.29 63.238)">
            <g id="Group_108946" data-name="Group 108946" transform="translate(0 0)">
              <circle id="Ellipse_1463" data-name="Ellipse 1463" cx="1.619" cy="1.619" r="1.619" fill="" />
            </g>
          </g>
        </g>
      </svg>
      <div class="name_menu animate__animated animate__bounceIn">เกม</div>
    </div>
    <div class="lists" name="videos">
      <svg xmlns="http://www.w3.org/2000/svg" width="29.929" height="18.659" viewBox="0 0 29.929 18.659">
        <path id="video-camera" d="M29.544,98.429a.877.877,0,0,0-.817-.088l-8.189,3.276V99.155A2.758,2.758,0,0,0,17.782,96.4H2.755A2.758,2.758,0,0,0,0,99.155V112.3a2.758,2.758,0,0,0,2.755,2.755H17.782a2.758,2.758,0,0,0,2.755-2.755v-2.462l8.189,3.276a.877.877,0,0,0,1.2-.814V99.155A.877.877,0,0,0,29.544,98.429ZM18.784,112.3a1,1,0,0,1-1,1H2.755a1,1,0,0,1-1-1V99.155a1,1,0,0,1,1-1H17.782a1,1,0,0,1,1,1Zm9.392-1.3-7.638-3.055v-4.448l7.638-3.055Z" transform="translate(0 -96.4)" fill="" />
      </svg>
      <div class="name_menu animate__animated animate__bounceIn">วิดีโอ</div>
    </div>
    <div class="lists" name="models">
      <svg xmlns="http://www.w3.org/2000/svg" width="32.279" height="28.593" viewBox="0 0 32.279 28.593">
        <path id="Union_17" data-name="Union 17" d="M312.13-7885.748c-3.2-1.611-6.4-3.2-9.6-4.811a.584.584,0,0,0-.592,0c-1.482.747-2.969,1.479-4.455,2.216-.06.03-.115.062-.175.087a.519.519,0,0,1-.747-.208.513.513,0,0,1,.284-.719c.518-.264,1.043-.519,1.565-.777,1-.5,2-1,3.013-1.488a.408.408,0,0,0,.272-.433c-.006-4.215,0-8.43-.014-12.644a.811.811,0,0,1,.512-.833c3.2-1.589,6.4-3.2,9.605-4.789a.407.407,0,0,0,.274-.435c-.014-.961-.006-1.922-.006-2.886,0-.411.191-.644.516-.647s.518.234.52.644c0,.484,0,.971,0,1.458s.01.951-.006,1.426a.4.4,0,0,0,.27.439c3.192,1.585,6.374,3.19,9.569,4.769a.87.87,0,0,1,.552.9c-.016,4.183-.006,8.366-.016,12.549a.432.432,0,0,0,.286.459c1.47.721,2.93,1.46,4.393,2.195a1.631,1.631,0,0,1,.308.175.471.471,0,0,1,.145.633.477.477,0,0,1-.624.254,1.957,1.957,0,0,1-.294-.137q-2.229-1.111-4.451-2.23a.522.522,0,0,0-.532-.006c-3.214,1.615-6.433,3.218-9.645,4.834a1.053,1.053,0,0,1-.476.128A1,1,0,0,1,312.13-7885.748Zm-7.935-6.5a.531.531,0,0,1-.26.709,1.907,1.907,0,0,0-.491.286l8.628,4.314c0-4.08,0-8.1.006-12.118,0-.216-.117-.268-.264-.342L303-7903.807c-.079-.04-.149-.125-.244-.089v11.778c.258-.125.487-.243.721-.348a.69.69,0,0,1,.28-.064A.475.475,0,0,1,304.2-7892.251Zm18.136-11.625q-4.52,2.258-9.043,4.513c-.181.091-.179.208-.179.361q0,5.9,0,11.8c0,.078-.042.169.048.24l8.646-4.322c-.193-.1-.332-.171-.469-.246a.515.515,0,0,1-.282-.7.522.522,0,0,1,.743-.227c.213.1.419.2.646.314v-11.772A.972.972,0,0,0,322.332-7903.876Zm-18.942-.908c.1.054.133.076.173.1q4.418,2.21,8.835,4.425a.425.425,0,0,0,.443-.03q4.335-2.172,8.672-4.338c.081-.042.163-.085.29-.153l-8.692-4.346c0,.776.006,1.5,0,2.225a.513.513,0,0,1-.715.522.53.53,0,0,1-.32-.548c0-.717,0-1.436,0-2.195C309.167-7907.674,306.3-7906.242,303.389-7904.784Zm16.543,12.563a9.1,9.1,0,0,1-1.009-.5.484.484,0,0,1-.181-.673.463.463,0,0,1,.626-.238c.346.147.683.314,1.015.489a.465.465,0,0,1,.256.451.511.511,0,0,1-.507.511A.53.53,0,0,1,319.932-7892.221Zm-15.294-.306a.459.459,0,0,1,.2-.592,11.215,11.215,0,0,1,1.071-.519.449.449,0,0,1,.582.21.436.436,0,0,1-.042.592,4.524,4.524,0,0,1-1.229.646h-.03A.5.5,0,0,1,304.639-7892.527Zm2.379-1.041a.441.441,0,0,1,.046-.594,5.21,5.21,0,0,1,1.214-.64c.35,0,.52.121.6.342a.46.46,0,0,1-.2.59,11.11,11.11,0,0,1-1.071.519.466.466,0,0,1-.181.039A.481.481,0,0,1,307.018-7893.568Zm10.644.219a7.751,7.751,0,0,1-1.1-.532.455.455,0,0,1-.153-.652.47.47,0,0,1,.632-.236,9.924,9.924,0,0,1,1.011.493.464.464,0,0,1,.25.455.5.5,0,0,1-.481.5A.454.454,0,0,1,317.662-7893.349Zm-2.385-1.146a9.758,9.758,0,0,1-1.011-.5.493.493,0,0,1-.2-.669.483.483,0,0,1,.649-.242c.346.149.681.318,1.015.488a.468.468,0,0,1,.252.457.5.5,0,0,1-.5.5A.537.537,0,0,1,315.277-7894.5Zm-5.962-.266a.508.508,0,0,1,.258-.682c.314-.163.632-.324.959-.46a.5.5,0,0,1,.7.46.507.507,0,0,1-.31.489c-.3.147-.6.3-.9.433a.637.637,0,0,1-.255.056A.488.488,0,0,1,309.314-7894.761Zm3.265-6.388a.52.52,0,0,1-.5-.493c0-.022,0-.042,0-.063v-.485h0c0-.185-.01-.367,0-.55a.508.508,0,0,1,.51-.481.5.5,0,0,1,.514.475,11.288,11.288,0,0,1,0,1.13.5.5,0,0,1-.51.467Zm.008-2.594a.511.511,0,0,1-.51-.516c-.012-.171,0-.344,0-.517s-.01-.365,0-.548a.509.509,0,0,1,.5-.491.5.5,0,0,1,.526.5c.016.355.014.711,0,1.064a.507.507,0,0,1-.514.508Z" transform="translate(-296.455 7914.167)" fill="" stroke="" stroke-miterlimit="10" stroke-width="0.1" />
      </svg>
      <div class="name_menu animate__animated animate__bounceIn">วัตถุ 360 ˚</div>
    </div>
    <div class="lists" name="noteStamp">
      <svg xmlns="http://www.w3.org/2000/svg" width="24.064" height="28.493" viewBox="0 0 24.064 28.493">
        <path id="Union_14" data-name="Union 14" d="M209.951-7887.924c-.087-.03-.175-.06-.264-.087a2.632,2.632,0,0,1-1.868-2.5q-.006-9.867,0-19.736a2.627,2.627,0,0,1,2.17-2.563,4.292,4.292,0,0,1,.858-.048l.25,0c.2,0,.29-.071.282-.276-.008-.232-.006-.465,0-.7a2.638,2.638,0,0,1,2.654-2.591q7.605-.006,15.207,0a2.622,2.622,0,0,1,2.634,2.63c0,.548,0,1.095,0,1.641q0,8.994,0,17.986a2.634,2.634,0,0,1-2.229,2.652,4.052,4.052,0,0,1-.791.04c-.087,0-.175,0-.262,0-.2,0-.288.075-.282.28.008.23.01.463,0,.693a2.659,2.659,0,0,1-1.281,2.215,4.232,4.232,0,0,1-.842.354Zm15.445-1.683a1.041,1.041,0,0,0,1.178-1.16c-.024-3.2-.008-6.4-.008-9.592v-8.312c0-.528.006-1.057-.008-1.585a.858.858,0,0,0-.83-.844c-.111-.006-.223-.006-.334-.006H210.741c-.139,0-.278,0-.417.012a.866.866,0,0,0-.745.719,3.29,3.29,0,0,0-.02.443v19.129a3.641,3.641,0,0,0,.014.389.845.845,0,0,0,.62.741,1.6,1.6,0,0,0,.523.062h7.34Q221.726-7889.614,225.4-7889.607Zm.207-23.245a2.6,2.6,0,0,1,2.279,1.212,2.8,2.8,0,0,1,.435,1.609q0,8.13,0,16.262c0,.1,0,.2,0,.3-.006.177.079.256.252.252.089,0,.181,0,.27,0,.169,0,.34,0,.509-.008a.854.854,0,0,0,.773-.749,4.183,4.183,0,0,0,.016-.473q0-4.753,0-9.5v-9.479c0-.149,0-.3-.012-.445a.867.867,0,0,0-.675-.787,2.007,2.007,0,0,0-.523-.046H214.336a1.718,1.718,0,0,0-.578.063.852.852,0,0,0-.614.749c-.026.266-.008.537-.01.8,0,.165.077.238.238.232.093,0,.187,0,.278,0h5.977Q222.615-7912.854,225.6-7912.852Zm-7.56,21.39q-2.831,0-5.666,0a.86.86,0,0,1-.956-.671.83.83,0,0,1,.644-1.027,2.465,2.465,0,0,1,.5-.046q5.5,0,11,0a2.527,2.527,0,0,1,.443.036.8.8,0,0,1,.709.878.826.826,0,0,1-.753.82,2.294,2.294,0,0,1-.266.01c-.032,0-.064,0-.1,0Zm-.532-3.3q-2.772-1.615-5.559-3.208a1.048,1.048,0,0,1-.574-1c.01-1.064,0-2.129,0-3.194s.006-2.114,0-3.169a1.06,1.06,0,0,1,.59-1.015q2.775-1.586,5.535-3.195a1,1,0,0,1,1.1-.012q2.8,1.625,5.607,3.237a1,1,0,0,1,.54.934v6.447a1.024,1.024,0,0,1-.554.954q-2.8,1.6-5.583,3.222a1.076,1.076,0,0,1-.547.164A1.082,1.082,0,0,1,217.51-7894.767Zm.28-12.946q-2.2,1.285-4.4,2.543a.452.452,0,0,0-.26.441q.009,2.572,0,5.142a.432.432,0,0,0,.238.425q2.232,1.275,4.452,2.569a.42.42,0,0,0,.485,0q2.22-1.293,4.45-2.569a.447.447,0,0,0,.25-.447c-.01-.853,0-1.705,0-2.557,0-.833-.01-1.667.006-2.5a.524.524,0,0,0-.3-.528q-2.184-1.246-4.355-2.513a.573.573,0,0,0-.288-.092A.536.536,0,0,0,217.791-7907.712Zm-.485,9.1c-.674-1-1.335-2-2.007-3a.9.9,0,0,1,0-1.087q1.013-1.511,2.021-3.028a.848.848,0,0,1,.757-.411.807.807,0,0,1,.713.381q1.037,1.547,2.066,3.1a.855.855,0,0,1-.01,1.015c-.676,1.019-1.347,2.041-2.036,3.052a.9.9,0,0,1-.739.43A.928.928,0,0,1,217.306-7898.609Zm.614-4.9c-.258.4-.519.787-.785,1.176a.276.276,0,0,0,0,.354c.266.39.528.779.785,1.176.119.185.195.139.294-.014.25-.39.511-.771.767-1.157a1.541,1.541,0,0,0,.1-.177,1.39,1.39,0,0,0-.083-.173c-.264-.4-.534-.8-.8-1.2-.051-.079-.093-.113-.134-.113S217.971-7903.588,217.92-7903.51Z" transform="translate(-207.816 7916.417)" fill="" />
      </svg>
      <div class="name_menu animate__animated animate__bounceIn">สมุดสะสมแสตมป์</div>
    </div>
  </div>
  <div class="menu right">
    <div class="lists">
      <svg xmlns="http://www.w3.org/2000/svg" width="23.883" height="24.033" viewBox="0 0 23.883 24.033">
        <g id="Group_170291" data-name="Group 170291" transform="translate(0 0)">
          <g id="Rectangle_39653" data-name="Rectangle 39653" transform="translate(6.588 5.353) rotate(-45)" fill="" stroke="" stroke-width="1">
            <rect width="7.571" height="7.571" stroke="none" />
            <rect x="0.5" y="0.5" width="6.571" height="6.571" fill="none" />
          </g>
          <g id="Rectangle_39654" data-name="Rectangle 39654" transform="translate(13.176 12.091) rotate(-45)" fill="" stroke="" stroke-width="1">
            <rect width="7.571" height="7.571" stroke="none" />
            <rect x="0.5" y="0.5" width="6.571" height="6.571" fill="none" />
          </g>
          <g id="Rectangle_39655" data-name="Rectangle 39655" transform="translate(0 12.091) rotate(-45)" fill="" stroke="" stroke-width="1">
            <rect width="7.571" height="7.571" stroke="none" />
            <rect x="0.5" y="0.5" width="6.571" height="6.571" fill="none" />
          </g>
          <g id="Rectangle_39656" data-name="Rectangle 39656" transform="translate(6.588 18.679) rotate(-45)" fill="" stroke="" stroke-width="1">
            <rect width="7.571" height="7.571" stroke="none" />
            <rect x="0.5" y="0.5" width="6.571" height="6.571" fill="none" />
          </g>
        </g>
      </svg>

      <div class="sub animate__animated">
        <div class="items">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.646 25.646">
            <g id="Group_170288" data-name="Group 170288" transform="translate(0 0)">
              <path id="Path_6" data-name="Path 6" d="M837.1,254.31h4.168l8.721,7.127a.888.888,0,0,0,.951.11.921.921,0,0,0,.507-.826V236.908a.921.921,0,0,0-.507-.826.879.879,0,0,0-.949.11l-8.723,7.127H837.1a1.816,1.816,0,0,0-1.793,1.832v7.328A1.816,1.816,0,0,0,837.1,254.31Zm12.554,4.5-7.174-5.861v-8.276l7.174-5.861ZM837.1,245.15h3.587v7.328H837.1Z" transform="translate(-835.304 -235.991)" fill="" />
              <path id="Path_7" data-name="Path 7" d="M863.479,258.687a.883.883,0,0,0,1.268.006,9.282,9.282,0,0,0,0-12.952.883.883,0,0,0-1.268.007.93.93,0,0,0,.007,1.3,7.425,7.425,0,0,1,0,10.35A.927.927,0,0,0,863.479,258.687Z" transform="translate(-845.322 -239.395)" fill="" />
              <path id="Path_8" data-name="Path 8" d="M868.692,241.715a.884.884,0,0,0-1.268.005.93.93,0,0,0,.006,1.3,11.1,11.1,0,0,1,0,15.515.93.93,0,0,0-.006,1.3.883.883,0,0,0,1.268.005,12.959,12.959,0,0,0,0-18.115Z" transform="translate(-846.737 -237.95)" fill="" />
            </g>
          </svg>
          <div class="name">เสียงบรรยาย</div>
        </div>
        <div class="items">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.895 20.895">
            <g id="Group_170289" data-name="Group 170289" transform="translate(0 0)">
              <g id="Group_14" data-name="Group 14" transform="translate(0 0)">
                <g id="Group_13" data-name="Group 13">
                  <path id="Path_9" data-name="Path 9" d="M788.847,214.8l5.476,5.484a.578.578,0,0,1,0,.816h0a.576.576,0,0,1-.817,0l-5.479-5.486.156,4.268a.588.588,0,0,1-.56.6.6.6,0,0,1-.6-.56l-.225-6.359,6.344.231a.592.592,0,0,1,.559.6.584.584,0,0,1-.6.56Z" transform="translate(-786.8 -213.56)" fill="" />
                </g>
              </g>
              <g id="Group_16" data-name="Group 16" transform="translate(13.607 0)">
                <g id="Group_15" data-name="Group 15">
                  <path id="Path_10" data-name="Path 10" d="M817.681,213.56l-.231,6.359a.562.562,0,0,1-.173.387.61.61,0,0,1-.427.173.583.583,0,0,1-.554-.6l.15-4.268-5.072,5.079a.575.575,0,0,1-.813,0h0a.577.577,0,0,1,0-.814l5.072-5.079-4.256.156a.581.581,0,0,1-.04-1.161Z" transform="translate(-810.393 -213.56)" fill="" />
                </g>
              </g>
              <g id="Group_18" data-name="Group 18" transform="translate(0 13.229)">
                <g id="Group_17" data-name="Group 17">
                  <path id="Path_11" data-name="Path 11" d="M794.285,237.456l-5.438,5.44,4.256-.15a.578.578,0,1,1,.04,1.155l-6.344.231.225-6.353a.581.581,0,0,1,.179-.387.552.552,0,0,1,.421-.173.584.584,0,0,1,.56.6l-.156,4.262,5.439-5.446a.579.579,0,0,1,.819,0h0A.58.58,0,0,1,794.285,237.456Z" transform="translate(-786.8 -236.466)" fill="" />
                </g>
              </g>
              <g id="Group_20" data-name="Group 20" transform="translate(13.647 13.637)">
                <g id="Group_19" data-name="Group 19">
                  <path id="Path_12" data-name="Path 12" d="M817.711,244.431l-6.344-.231a.578.578,0,1,1,.04-1.155l4.256.15-5.032-5.039a.577.577,0,0,1,0-.814h0a.575.575,0,0,1,.813,0l5.032,5.039-.15-4.262a.579.579,0,0,1,.554-.6.564.564,0,0,1,.427.173.55.55,0,0,1,.173.387Z" transform="translate(-810.463 -237.173)" fill="" />
                </g>
              </g>
            </g>
          </svg>

          <div class="name">เต็มจอ</div>
        </div>
      </div>
    </div>
  </div>
  <div class="logo">
    <img src="<?php echo _IMG_ ?>/logoPano/1.png" alt="">
  </div>

  <div class="listBar" menuActive="">
    <div class="box__">
      <div class="inner">
        <div class="listBox allPoint"></div>
        <div class="listBox image d-none"></div>
        <div class="listBox game d-none"></div>
        <div class="listBox videos d-none"></div>
        <div class="listBox models d-none"></div>
      </div>
      <div class="btn_hide">
        <img src="<?php echo _IMG_ ?>/hide_btn.png" alt="">
      </div>
    </div>
  </div>

  <!-- <div class="detail_obj container-fluid" style="display: none;">
    <div class="row">
      <div class="col-8 d-flex justify-content-center">
        <div class="model_box" id="model3D">

        </div>
      </div>
      <div class="col-4 mt-5">
        <div class="row">
          <div class="col title">
            <h1>xxxxxxxxxxxx</h1>
          </div>
        </div>
        <div class="row">
          <div class="col description">
            <p>xxxxxxxxxxxx</p>
          </div>
        </div>
      </div>
    </div>

    <div class="close_btn" onclick="btn_close_detail_obj()"><img src="<?php echo _PANO_ ?>/images/icons/cancel.png" /></div>
    <div class="control_sound p-2 d-none">
      <div class="btn_pp" onclick="click_sound(this)" status="play">
        <img src="<?php echo _PANO_ ?>/images/icons/pause.png" alt="">
      </div>
      <div class="btn_re" onclick="click_sound(this)" status="restart">
        <img src="<?php echo _PANO_ ?>/images/icons/restart.png" alt="">
      </div>
    </div>
  </div> -->
  <div class="load_spin" style="display: none;">
    <div class="spin">
      <img src="<?php echo _PANO_ ?>/images/icons/loading.png" alt="">
    </div>
    <!-- <video id="video2" width="800" src="./vdo/test.mp4"muted autoplay loop style="opacity: 0;"></video>
			<canvas id="output-canvas" width="800" height="450" ></canvas> -->
  </div>
  <div class="modal fade modal-ebook" id="ebookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="solid-container"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade modal-picture" id="pictureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-img splide_modal" id="modalMuseumdataMultiimage">
            <div class="splide splide--modal" id="splideImage">
              <div class="splide__track">
                <ul class="splide__list"></ul>
              </div>
            </div>
          </div>
          <div class="modal-img splide_modal" id="modalMuseumdataSingleimage">
            <div class="full-image" id="singleImage"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo _PANO_ ?>/js/pano_show.js?version=<?= uniqid() ?>" type="module"></script>
</body>
<script type="module">
  window.urlHome = '<?php echo _HOMEURL_ ?>';
  let secne_active = '<?php echo $scene ?>';
  var splideImage = new Splide('#splideImage', {
    // arrows: false,
    drag: false
  });
  $(document).ready(function() {
    get_list_scene(secne_active);
    $('#videosCutScene video').on('ended', function() {
      $('#videosCutScene').fadeOut('slow');
    });
    $('#pictureModal').on('shown.bs.modal', function() {
      splideImage.mount()
      // $('#splideImage').css('opacity', 1)
      $.each($('#splideImage .splide__slide > img'), function(e, i) {
        var image = $('#splideImage .splide__slide > img')[0];
        var viewer = new ImageViewer(image);
      });
      let imageS = $('#singleImage > img');
      if (imageS.length > 0) {
        if (imageS.width() / imageS.height() >= 1) {
          imageS.addClass('landscape');
        } else {
          imageS.addClass('portrait');
        }
        var image = imageS[0];
        var viewer = new ImageViewer(image);
      }
    })
    $('#pictureModal').on('hide.bs.modal', function() {
      $('#splideImage').find('.splide__list').empty()
      $('#singleImage').empty()
      $('.splide__arrow--next').removeClass('d-none')
      $('.splide__arrow--prev').addClass('d-none')
      splideImage.destroy()
    })
  });


  $('#imageCutScene .btn_ex').click(function() {
    $('#imageCutScene').fadeOut('slow')
  })
  $('#imageCutSceneFirst .btn_ex').click(function() {
    $('#imageCutSceneFirst').fadeOut('slow')
  })
  $('.btn_hide').click(function() {
    $('.listBar').toggleClass('active');
    $('.listBar .box__ .listBox').addClass('d-none')
    $('.listBar .box__ .listBox.allPoint').removeClass('d-none')
    $('.listBar').attr('menuActive','');
    $('.menu.left .lists').removeClass('active');
  })
  $('.menu.left .lists').click(function() {
    let name = $(this).attr('name');
    if($(this).hasClass('active')){
      $(this).removeClass('active');
    }else{
      $('.menu.left .lists').removeClass('active');
      $(this).addClass('active');
    }
    if($('.listBar').attr('menuActive') == name){
      $('.listBar').attr('menuActive','');
      swapMenu(name)
    }else if($('.listBar').attr('menuActive') == ''){
      $('.listBar').attr('menuActive',name);
      swapMenu(name)
    }else{
      $('.listBar').toggleClass('active');
      setTimeout(function(){
        $('.listBar').attr('menuActive',name);
        swapMenu(name);
      },1000)
    }
    function swapMenu(name){
      $('.listBar .box__ .listBox').addClass('d-none')
      $('.listBar .box__ .listBox.' + name).removeClass('d-none')
      $('.listBar').toggleClass('active');
    }
  })
</script>

</html>