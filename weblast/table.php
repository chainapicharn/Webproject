<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `account` WHERE CONCAT(`Cid`, `ID`, `FName`, `LName`, `age`, `gender`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `account`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "datab");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    var size = 14;
        function decrease(){
            size--;
            document.getElementById('p1').style = font-size: ${size}px
        }
        function increase(){
            size++;
            document.getElementById('p1').style = font-size: ${size}px
        }
    </script>
<!DOCTYPE html>
<html>
    <head>
        <title>รายชื่อสมาชิก</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
                table-layout: fixed;
                width: 180px;
            
            }
            h1{
    text-align: center;
    font-size: 50px;
    color:black;
  }
  img.center {

display: block;

margin-left: auto;

margin-right: auto;

margin-top: 20px;
width: 350px;

}

input#menu {
    display: none;
}

.menu-content {
    max-height: 0;
    overflow: hidden;
    font-family: 'Oswald', sans-serif;
    padding: 0 0 0 50px;
}
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
background:#212121;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#999;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
}
/*.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}*/
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}
p {
    color: black;
    font-size: 20px;
  margin-top: 10px;
  margin-bottom: 70px;
  text-align: center;
}
h1 {
    color: black;
    font-size: 50px;
    text-align: center;
    margin-top: -40px;
}
        </style>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
<title>Register</title>
<!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","https://s.bookcdn.com//css/cl/bw-cl-120x45.css?v=0.0.1"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_6_305716521"><div style="width:130px; height:45px; margin: 0 auto;"><a href="https://hotelmix.co.th/time/ban-khlong-bang-chak-438132">Ban Khlong Bang Chak</a><br/></div></div> <script type="text/javascript"> function setWidgetData_305716521(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_305716521 = -1; widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=1171;type=6;id=305716521;scode=24410;city_id=438132;wlangid=30;mode=1;details=0;background=ffffff;border_color=ffffff;color=333333;add_background=a0a1a1;add_color=08488d;head_color=333333;border=0;transparent=0"; var widgetUrl = location.href; widgetSrc += '&ref=' + widgetUrl; var wstrackId = ""; if (wstrackId) { widgetSrc += ';wstrackId=' + wstrackId + ';' } var timeBookedScript = document.createElement("script"); timeBookedScript.setAttribute("type", "text/javascript"); timeBookedScript.src = widgetSrc; document.body.appendChild(timeBookedScript); </script>
<!-- clock widget end -->
<link rel="stylesheet" href="allpaint.css">
<link rel="stylesheet" href="test.css">

<style>
  body{
    background-image : url(background2.jpg);
    background-size:cover;
  } 
      ::placeholder {
        color: black;
        text-align: center;


        Right: 20px;

         top: 0px;
      }
        
        </style>
    </head>
    <body>
        
        <form action="table.php" method="post">
   ........................<input type="text" name="valueToSearch" placeholder="Search">
            <input type="submit" name="search" value="Filter"><br><br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th>


                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Cid'];?></td>
                    <td><?php echo $row['FName'];?></td>
                    <td><?php echo $row['LName'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td> <button type="button" name="button" onclick = "deletedata(<?php echo $row['Cid']; ?>);">Delete</button> </td>
                </tr>
                <?php endwhile;?>
            </table>
            <div style="padding: 25rem;">
    <input class ="hoverlink" type="button" name="Submit" onclick='location.replace("link.php")' value="Back" style=" color : black;background-color :white;position: relative; position: absolute; left: 32%  ;  padding: 1.5rem; ">
  </div>
        </form>

        <script type="text/javascript">
      // Function
      function deletedata(Cid){
        $(document).ready(function(){
          $.ajax({
            // Action
            url: 'delete.php',
            // Method
            type: 'POST',
            data: {
              // Get value
              Cid: Cid,
              action: "delete"
            },
            success:function(response){
              // Response is the output of action file
              if(response == 1){
                alert("Data Deleted Successfully");
                document.getElementById(Cid).style.display = "none";
              }
              else if(response == 0){
                alert("Data Cannot Be Deleted");
              }
            }
          });
        });
      }
    </script>
    <body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="menu1.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            ท่าแก้ปวดคอ
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="menu2.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                        ท่าแก้ปวดบ่า
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="menu3.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                        ท่าแก้ปวดไหล่
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="menu4.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                        ท่าแก้ปวดหลังล่าง
                        </span>
                    </a>
                   
                </li>

                <li>
                    <a href="table.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                        รายชื่อสมาชิก
                        </span>
                    </a>
                </li>
                <li>
                    <a href="menu5.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                        ผู้จัดทำ
                        </span>
                    </a>
                </li>
                

            <ul class="logout">
                <li>
                   <a href="index.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
                
            </ul>
    </body>
</html>
