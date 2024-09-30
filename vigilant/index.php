<?php 
//error_reporting(0);
include('backend/settings.php');

//Check if OpenAI ChatGPT API Key has been Set
if($chatgpt_accesstoken == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Contact Admin to Set  OpenAi ChatGPT API Key at
<b>(backend/settings.php)</b> File</div>";
exit();
}


// Check if Google Gemini API Key has been Set
if($google_gimini_apikey == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Contact Admin to Set Google Gemin API Key at
<b>(backend/settings.php)</b> File</div>";
exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Vigilant</title>
  <meta name="description" content="" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bootstraps/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="bootstraps/bootstrap.min.js"></script>
 <script src="markdown/marked.min.js"></script>

<script src="javascript_data/script.js"></script>
</head>
<body>
  <nav>
<h2 style='color:white;'>Vigilant</h2>
 
    <ul style='display:none;'>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>


<br><br><br><br>

  <div class="containerx">

    <div class="content">
      <h1 style='font-size:36px'>Vigilant</h1>
      <p style='font-size:20px'>An Interactive System that Detects, Protects and analyze <b>Phishing Sites, Scam Email Messages and 
Message Content Biasness etc.</b> Powered by <span style='color:purple'>ChatGPT/OpenAI and Google Gemini AI</span></b></p>


<p  class="col-sm-12">
<button  style='cursor:pointer;font-size:16px' class="button" data-toggle="modal" data-target="#myModal_phishing">
<b>Detect Phishing Sites</b></button>
</p>

<p  class="col-sm-12">
<button  style='cursor:pointer;font-size:16px' class="button" data-toggle="modal" data-target="#myModal_scam_mail">
<b>Detect & Analyze Scam Email/Text Messages</b></button>
</p>


<p  class="col-sm-12">
<button  style='cursor:pointer;font-size:16px' class="button" data-toggle="modal" data-target="#myModal_bias">
<b>Detect & Analyze Text Content for Biasness</b></button>
</p>


<br><br>
<div class='well col-sm-12'>
You still have questions about Online Security, <B>Ask ChatGPT/OpenAI Or Google Gemini AI</b>
<br><br>
<p  class="col-sm-12">
<button  style='cursor:pointer;font-size:16px' class="button" data-toggle="modal" data-target="#myModal_chat">
<b>Chat with ChatGPT/OpenAI Or Google Gemini AI</b></button>
</p>
</div>



    </div>
  </div>







<!-- AI Phishing Detection Modal starts here -->


<div class="containerx">

  <div class="modal fade" id="myModal_phishing" role="dialog">
    <div class="modal-dialog modal-lg  modal-appear-center1 pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h3 class="modal-title">Detect and Analyze Phishing Sites</h3>

        </div>
        <div class="modal-body">

<b>Phishing Attack:</b> is normally an attack perform by Hackers in an attempt to steal sensitive information such as 
<b>usernames, passwords, credit card numbers etc.</b> <br>

This Attack is normally carried out where an attacker lured the victim into clicking a <b>Fake/Malicious site url links eg. from an Email.</b>

<br> On landing on the fake site, Users sensitive data
might be stolen by filling a certain form for sensitive Data. <br><br>

Sometimes on landing to the fake or malicious, <b> Virus or Trojan horse</b> may be automatically downloaded
on the users system without the user knowing it and this can lead to the Users Systems and Data Compromise.
<br><br>

<b>Google Gemini AI and ChatGPT/OpenAI</b> to the rescue...<br><br>

<!-- start-->

<h2 style='color:#8B0000'> Detect If the Site you are about to access is a phishing Site or Not and why?</h2>


<div class="form-group">
<label style="">Select AI to be used for Analysis ..</label><br>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai" name="chatbot_ai" value="Open_AI" class="chatbot_ai"/>
ChatGPT/OpenAI<br>
</div>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai" name="chatbot_ai" value="Gemini_AI" class="chatbot_ai"/>
Google Gemini AI<br>
</div>
<br>
<div class="form-group">
<label>Enter Site URl. (Eg. https://devpost.com)</label>
<input type='text' id='content' class='form-control col-sm-12' placeholder='Enter Site URl. (Eg. https://devpost.com)'/>
</div>

</div>

<br><br>
<div class="row">

<div class="col-sm-12">

<div class='' id="loader_phishing"></div>
<div class='clear_res' id="result_phishing"></div>
<div class='phishing_btn btn_css' >Analyze This Site For Phishing Detection</div><br>


</div>
</div>

<!-- end -->





        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- AI Phishing Detection Modal Ends here -->






<!-- AI Scam Mail Detection Modal starts here -->


<div class="containerx">

  <div class="modal fade" id="myModal_scam_mail" role="dialog">
    <div class="modal-dialog modal-lg  modal-appear-center1 pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h3 class="modal-title">Detect and Analyze Scam Email/Text Messages</h3>

        </div>
        <div class="modal-body">

<b>Scammers Attack:</b> is normally an attack perform by Hackers in an attempt to steal sensitive information such as 
<b>usernames, passwords, credit card numbers etc.</b> <br>

This Attack is normally carried out where an attacker lured the victim by sending a fake text messages to trick you into given out your Sensitive Data...


<b>Google Gemini AI and ChatGPT/OpenAI</b> to the rescue...<br><br>

<!-- start-->

<h2 style='color:#8B0000'> Detect If the Text Message is a Scam or Not and why?</h2>


<div class="form-group">
<label style="">Select AI to be used for Analysis ..</label><br>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai2" name="chatbot_ai2" value="Open_AI" class="chatbot_ai2"/>
ChatGPT/OpenAI<br>
</div>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai2" name="chatbot_ai2" value="Gemini_AI" class="chatbot_ai2"/>
Google Gemini AI<br>
</div>
<br>
<div class="form-group">
<label>Enter Email/Text Message. <span style='color:red'>(Copy and Paste Here)</span></label>
<input type='' id='content2' class='form-control col-sm-12' placeholder='Enter Email/Text Message' />
</div>

</div>

<br><br>
<div class="row">

<div class="col-sm-12">

<div class='' id="loader_scam_mail"></div>
<div class='clear_res' id="result_scam_mail"></div>
<div class='scam_mail_btn btn_css' >Analyze This Text Message for Scam</div><br>


</div>
</div>

<!-- end -->





        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>


<!-- AI Scam Mail Detection Modal ends here -->




<!-- AI Bias Detection Modal starts here -->


<div class="containerx">

  <div class="modal fade" id="myModal_bias" role="dialog">
    <div class="modal-dialog modal-lg  modal-appear-center1 pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h3 class="modal-title">Detect and Analyze Biasness in a Text Contents</h3>

        </div>
        <div class="modal-body">



<!-- start-->

<h3 style='color:#8B0000'> Detect If the Text Content is Bias or Not and why?. Offer transparency and suggests fairer alternatives.</h3>


<div class="form-group">
<label style="">Select AI to be used for Analysis ..</label><br>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai3" name="chatbot_ai3" value="Open_AI" class="chatbot_ai3"/>
ChatGPT/OpenAI<br>
</div>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai3" name="chatbot_ai3" value="Gemini_AI" class="chatbot_ai3"/>
Google Gemini AI<br>
</div>
<br>
<div class="form-group">
<label>Enter Text Content. <span style='color:red'>(Copy and Paste Here)</span></label>
<input type='' id='content3' class='form-control col-sm-12' placeholder='Enter Text Content' />
</div>

</div>

<br><br>
<div class="row">

<div class="col-sm-12">

<div class='' id="loader_bias"></div>
<div class='clear_res' id="result_bias"></div>
<div class='bias_btn btn_css' >Analyze This Text Message for Biasness</div><br>


</div>
</div>

<!-- end -->





        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>


<!-- AI Bias Detection Modal ends here -->










<!-- AI Chat Modal starts here -->


<div class="containerx">

  <div class="modal fade" id="myModal_chat" role="dialog">
    <div class="modal-dialog modal-lg  modal-appear-center1 pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h3 class="modal-title">Chat With ChatGPT/OpenAI or Google Gemini AI</h3>

        </div>
        <div class="modal-body">



<!-- start-->

<h4 style='color:#8B0000'>Chat With ChatGPT/OpenAI or Google Gemini AI on Online Security and Online Threats Preventions</h4>


<div class="form-group">
<label style="">Select AI to be used for Analysis ..</label><br>

<div class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai6" name="chatbot_ai6" value="Gemini_AI" class="chatbot_ai6"/>
Google Gemini AI<br>
</div>

<div  class='col-sm-6 ai_css'>
<input type="radio" id="chatbot_ai6" name="chatbot_ai6" value="Open_AI" class="chatbot_ai6"/>
ChatGPT/OpenAI<br>
</div>






</div>

<br><br>
<div class="row">

<div class="col-sm-12">


<div class='clear_res' id="result_chat"></div>
<div class='' id="loader_chat"></div>

<br>
<div class="form-group">
<label>Enter Chat Message</label>
<textarea id='chat_msg' cols='3' rows='3' class='form-control col-sm-12' placeholder='Enter Chat Message'></textarea>
</div>


<div class='chat_btn btn_css  col-sm-12' >Chat Now!</div><br>


</div>
</div>

<!-- end -->





        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>


<!-- AI Chat Modal ends here -->











</body>
</html>