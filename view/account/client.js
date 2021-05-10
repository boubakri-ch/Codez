

const init = function(){
   
   
    document.getElementById('button-cancel-prod').addEventListener('click', reset_prod);
    document.getElementById('button-ajouter').addEventListener('click', send);


}
const reset_prod=function(ev)
{
    ev.preventDefault();
    // programmatically we can reset it 
    document.getElementById('create_customer').reset();
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
        document.getElementById('create_customer').submit();
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
    let nom = document.getElementById('FirstName');

    let prenom = document.getElementById('LastName');
    let mail=document.getElementById('Email');
    let pswd=document.getElementById('CreatePassword');
    //.value, .defaultValue, length of value
    if(nom.value==="")
    {
        failures.push({input:'FirstName', msg:'Champs requis!'})
  
    }
    else
    if(prenom.value==="")
    {
        failures.push({input:'LastName', msg:'Champs requis!'})
  
    }
    else
    if(mail.value==="")
    {
        failures.push({input:'Email', msg:'Champs requis!'})

    }
    else
  
    
    if(pswd.value==="")
    {        failures.push({input:'CreatePassword', msg:'champ requis!'})
}
    //return a boolean || an object with details about the failures
    return failures;
}

   
      
   


document.addEventListener('DOMContentLoaded', init);
