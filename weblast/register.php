<html>
<head>
<title>Register</title>
<!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","https://s.bookcdn.com//css/cl/bw-cl-120x45.css?v=0.0.1"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_6_305716521"><div style="width:130px; height:45px; margin: 0 auto;"><a href="https://hotelmix.co.th/time/ban-khlong-bang-chak-438132">Ban Khlong Bang Chak</a><br/></div></div> <script type="text/javascript"> function setWidgetData_305716521(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_305716521 = -1; widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=1171;type=6;id=305716521;scode=24410;city_id=438132;wlangid=30;mode=1;details=0;background=ffffff;border_color=ffffff;color=333333;add_background=a0a1a1;add_color=08488d;head_color=333333;border=0;transparent=0"; var widgetUrl = location.href; widgetSrc += '&ref=' + widgetUrl; var wstrackId = ""; if (wstrackId) { widgetSrc += ';wstrackId=' + wstrackId + ';' } var timeBookedScript = document.createElement("script"); timeBookedScript.setAttribute("type", "text/javascript"); timeBookedScript.src = widgetSrc; document.body.appendChild(timeBookedScript); </script>
<!-- clock widget end -->

<link rel="stylesheet" href="allpaint.css">
<link rel="stylesheet" href="test.css">
<style>
  body{
    background-image : url(background_white.jpg);
    background-size:cover;
  }

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<form name="form2" method="post" action="save_register.php">
  

<table width="400"  style="width: 0px" >
    <div style="padding: 6rem; ">
    
	
		<div class="header" style="margin-top:-20rem; color:  #0066cc">
			<div style="font-size :40px; font-weight: bold;">REGIS<span>TER </span></div>
		</div>
    </div>
    <tbody style=" position: relative; position: absolute;  left: 30%; ">
      <tr>
        <td width="125" style="color: black;  font-size: 30px;"> &nbsp;Username</td>
        <td width="180" style="width: 2rem; font-size: 30px; " >
          <input name="txtUsername" type="text" id="txtUsername" size="20"pattern="[A-Za-z0-9]{8,20} style="height: 2rem;font-size: 20px;">
        </td>
      </tr>
      <tr>
        <td style="color: black;  font-size: 30px;"> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword" size="20"pattern="[A-Za-z0-9]{8,20} style="height: 2rem; font-size: 20px ;">
        </td>
      </tr>
      <tr>
        <td style="color: black;  font-size: 30px;"> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword" size="20"pattern="[A-Za-z0-9]{8,20} style="height: 2rem; font-size: 20px;">
        </td>
      </tr>
      <tr>
        <td style="color: black;  font-size: 30px;">&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="20"pattern="[A-Z a-z] style="height: 2rem;font-size: 20px;"></td>
      </tr>
      <tr>
      <td style="color: black;  font-size: 30px;">&nbsp;Surname</td>
        <td><input name="txtSurname" type="text" id="txtSurname" size="20"pattern="[A-Z a-z] style="height: 2rem;font-size: 20px;"></td>
    </div>
    </tr>
      <tr>
        <td style="color: black;  font-size: 30px;"> &nbsp;Age</td>
        <td><input name="txtAge" type="text" id="txtAge" size="20"pattern="[0-9] style="height: 2rem;font-size: 20px;"></td>
      </tr>
      <tr>
      <td style="color: black;  font-size: 30px;">&nbsp;Gender</td>
      <td>
        <input type="radio" name="txtGender" id="" value="male"> Male <br>
        <input type="radio" name="txtGender" id="" value="female"> Female 
      </td>
      </tr>  
    </tbody>
  </table>
  <br>
  <div style="padding: 25rem;">
    <input class ="hoverlink" type="submit" name="Submit" value="Save" style=" color : black;background-color :white;position: relative; position: absolute; left: 57%;  padding: 1.5rem; ">
    <input class ="hoverlink" type="button" name="Submit" onclick='location.replace("index.php")' value="Back" style=" color : black;background-color :white;position: relative; position: absolute; left: 32%  ;  padding: 1.5rem; ">
  </div>
  
  
</form>
</body>
</html>