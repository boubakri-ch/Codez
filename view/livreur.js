
object.addEventListener("click", val)
const init = function(){
   
   
    document.getElementById('button-cancel-prod').addEventListener('click', reset_prod);
    document.getElementById('button-ajouter').addEventListener('click', send);


}
const reset_prod=function(ev)
{
    ev.preventDefault();
    // programmatically we can reset it 
    document.getElementById('form-product').reset();
    //if you want to do anything else...
}

const send = function(ev){
    ev.preventDefault(); 
    ev.stopPropagation();
    //or the click will travel to the form and the form will submit
    let fails = validate();
    //IF we wanted to do some async things then use a Promise with .then and .catch
    if(fails.length === 0){
        //good to go
        document.getElementById('form-product').submit();
    }else{
        //there are some errors to display
        //bad user
        //let err = document.querySelector('.error');
        //let input = err.querySelector('input');
        //err.setAttribute('data-errormsg', ` ... Missing ${input.placeholder}`);
        fails.forEach(function(obj){
            let field = document.getElementById(obj.input);
            field.parentElement.classList.add('error');
            field.parentElement.setAttribute('data-errormsg', obj.msg);
        })
    }
}

const validate = function(ev){
    //let valid = true;
    let failures = [];
    //checkbox (or radio buttons grouped by name)
  

    

    //inputs for text, email, tel, color, number...
    let code_livreur = document.getElementById('input-code_livreur');
    let nom=document.getElementById('input-nom');
    let prenom=document.getElementById('input-prenom');
    let mail=document.getElementById('input-mail');
    let num_tel=document.getElementById('input-num_tel');
   
    //.value, .defaultValue, length of value
    if( code_livreur.value==="")
    {
        failures.push({input:'input-code_livreur', msg:'remplissez le type!'})
            
    } 
    else
    if(nom.value==="")
    {
        failures.push({input:'input-nom', msg:'Champs requis!'})
  
    }
    else
    if(prenom.value==="")
    {
        failures.push({input:'input-prenom', msg:'Champs requis!'})
  
    }
    else
    if(mail.value==="")
    {
        failures.push({input:'input-mail', msg:'Champs requis!'})
  
    }
    else
    if(num_tel.value==="")
    {
        failures.push({input:'input-num_tel', msg:'Champs requis!'})

    }
 
    //return a boolean || an object with details about the failures
    return failures;
}
function verifmail()
{
mail=document.form.mail.value;
message="";
valide=false;
for(var i=1;i<(mail.length);i++){
    if(mail.charAt(i)=='@'){
        if(i<(mail.length-4)){
            for(var k=i;k<(mail.length-2);k++){
                if(mail.charAt(k)=='.') value=true;
            }
        }
    }
}


if(valide==false) message+=("veuilleez saisir une adresse mail correcte ");
return message;


}
object.onclick = function val(){


   swal({
    title: "Good job!",
    text: "Livreur Ajouter!",
    icon: "success",
  }); 
/*function num(){

if(num_tel.length !=8)
message("veuillez sasir 8 chifre");
}
  
*/

 }  
      
    
    


document.addEventListener('DOMContentLoaded', init);
