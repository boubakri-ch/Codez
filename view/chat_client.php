<?php 
  include "C:/wamp64/www/web/core/loginOps.php";
 



?>
<head>
<link rel="stylesheet" href="style_chat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
   <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id =$_GET['user_id'];
          $login=new loginOps();
          $liste_4=$login->selectmessage($user_id);
    
          $db = config::getConnexion();

          
           
        ?>

        <a href="user_chat_client.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <?php
        foreach($liste_4 as $row4)
        {
            ?>
        <div class="details">
          <span><?php echo $row4['fname']. " " . $row4['lname']?></span>
          <p><?php echo $row4['statut']; ?></p>
        </div>
        
        <?php }?>
      </header>
      <div class="chat-box">


      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
        

      </form>
  
    </section>
  </div>
<script>
const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

inputField.focus();
inputField.onkeyup = ()=>{
    if(inputField.value != ""){
        sendBtn.classList.add("active");
    }else{
        sendBtn.classList.remove("active");
    }
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              inputField.value = "";
              scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}
setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","get_chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
}, 500);
function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}
</script>

</body>
</html>
