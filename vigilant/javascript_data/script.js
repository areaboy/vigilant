
// ChatGPT/Gemini AI for Phishing Sites Starts

$(document).ready(function(){
$(".phishing_btn").click(function(){

var chatbot_ai = $(".chatbot_ai:checked").val();
var content = $('#content').val();
if(chatbot_ai==undefined){
alert('Please Select/Checkbox AI above to be used for AI Analysis.Select Either ChatGPT/OpenAI or Google Gemini AI');
return false;
}
if(content ==''){
alert('Site Url to be Analyze for Phishing Detection cannot be empty');
return false;
}




$("#loader_phishing").fadeIn(400).html('<span style="color:black;background:#ddd;padding:4px;"><img src="loader.gif">&nbsp;Please Wait, Analyzing Contents for Site URL Phishing Sites Detection....</span>');

        $.ajax({
            url: 'backend/phishing_openai_geminiai.php',
            type: 'post',
            data: {content:content,chatbot_ai:chatbot_ai},
            dataType: 'html',
            success: function(data){
$("#loader_phishing").hide();
$("#result_phishing").html(marked.parse(data));
$('#alerts_phishing').delay(5000).fadeOut('slow');
$('#alerts_phishing').delay(5000).fadeOut('slow');
$("#content").val('');
 }
 });

});
});

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_phishing').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.clear_res').empty();  
 console.log("modal closed and content cleared");
 });
});

// ChatGPT/Gemini AI for Phishing Sites Starts






// ChatGPT/Gemini AI for Scam Mail Starts

$(document).ready(function(){
$(".scam_mail_btn").click(function(){

var chatbot_ai = $(".chatbot_ai2:checked").val();
var content = $('#content2').val();
if(chatbot_ai==undefined){
alert('Please Select/Checkbox AI above to be used for AI Analysis.Select Either ChatGPT/OpenAI or Google Gemini AI');
return false;
}
if(content ==''){
alert('Text Message to be Analyze for Scamming cannot be empty');
return false;
}




$("#loader_scam_mail").fadeIn(400).html('<span style="color:black;background:#ddd;padding:4px;"><img src="loader.gif">&nbsp;Please Wait, Analyzing Text Message for Scam Detection....</span>');

        $.ajax({
            url: 'backend/scam_text_openai_geminiai.php',
            type: 'post',
            data: {content:content,chatbot_ai:chatbot_ai},
            dataType: 'html',
            success: function(data){
$("#loader_scam_mail").hide();
$("#result_scam_mail").html(marked.parse(data));
$('#alerts_scam_mail').delay(5000).fadeOut('slow');
$('#alerts_scam_mail').delay(5000).fadeOut('slow');
$("#content2").val('');
 }
 });

});
});

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_scam_mail').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.clear_res').empty();  
 console.log("modal closed and content cleared");
 });
});

// ChatGPT/Gemini AI for Spam Mail Starts




// ChatGPT/Gemini AI for Bias Starts

$(document).ready(function(){
$(".bias_btn").click(function(){

var chatbot_ai = $(".chatbot_ai3:checked").val();
var content = $('#content3').val();
if(chatbot_ai==undefined){
alert('Please Select/Checkbox AI above to be used for AI Analysis.Select Either ChatGPT/OpenAI or Google Gemini AI');
return false;
}
if(content ==''){
alert('Text Content to be Analyze for Biasness cannot be empty');
return false;
}




$("#loader_bias").fadeIn(400).html('<span style="color:black;background:#ddd;padding:4px;"><img src="loader.gif">&nbsp;Please Wait, Analyzing Text Message for Bias Detection....</span>');

        $.ajax({
            url: 'backend/bias_text_openai_geminiai.php',
            type: 'post',
            data: {content:content,chatbot_ai:chatbot_ai},
            dataType: 'html',
            success: function(data){
$("#loader_bias").hide();
$("#result_bias").html(marked.parse(data));
$('#alerts_bias').delay(5000).fadeOut('slow');
$('#alerts_bias').delay(5000).fadeOut('slow');
$("#content3").val('');
 }
 });

});
});

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_bias').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.clear_res').empty();  
 console.log("modal closed and content cleared");
 });
});

// ChatGPT/Gemini AI for Bias Starts






// ChatGPT/Gemini AI for chat Starts

$(document).ready(function(){
$(".chat_btn").click(function(){

var chatbot_ai = $(".chatbot_ai6:checked").val();
var content = $('#chat_msg').val();

if(chatbot_ai==undefined){
alert('Please Select/Checkbox AI above to be used for AI Analysis.Select Either ChatGPT/OpenAI or Google Gemini AI');
return false;
}
if(content ==''){
alert('Chat Text Message cannot be empty');
return false;
}



$("#loader_chat").fadeIn(400).html('<span style="color:black;background:#ddd;padding:4px;"><img src="loader.gif">&nbsp;Please Wait, Sending Chat Message....</span>');

        $.ajax({
            url: 'backend/chat_text_openai_geminiai.php',
            type: 'post',
            data: {content:content,chatbot_ai:chatbot_ai},
            dataType: 'html',
            success: function(data){
$("#loader_chat").hide();
//$("#result_chat").html(marked.parse(data));
$('#result_chat').fadeIn('slow').prepend(marked.parse(data));
$('#alerts_chat').delay(5000).fadeOut('slow');
$('#alerts_chata').delay(5000).fadeOut('slow');
$("#chat_msg").val('');
 }
 });

});
});

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_chat').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.clear_res').empty();  
 console.log("modal closed and content cleared");
 });
});

// ChatGPT/Gemini AI for Chats Starts


$(document).ready(function(){
//$(".clear_btn").click(function(){
$(document).on( 'click', '.clear_btn', function(){ 

$('.clear_res').empty();  
alert('AI Responses Cleared Successfully..');

});
});