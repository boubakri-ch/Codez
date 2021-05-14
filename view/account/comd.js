

const init = function(){
   
   
    document.getElementById('button-cancel').addEventListener('click', reset_prod);
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
    let nom_commande = document.getElementById('nom_commande');
    let prix = document.getElementById('prix');
    let etat = document.getElementById('etat');
  
    //.value, .defaultValue, length of value
    if(nom_commande.value==="")
    {
        failures.push({input:'nom_commande', msg:'Champs requis!'})
  
    }

    else
    
    if(prix.value==="")
    {
        failures.push({input:'prix', msg:'Champs requis!'})
  
    }

    else

    if(etat.value==="")
    {
        failures.push({input:'etat', msg:'Champs requis!'})
  
    }
    //return a boolean || an object with details about the failures
    return failures;
}

   
      
   


document.addEventListener('DOMContentLoaded', init);
