const init = function(){
   
   
    document.getElementById('button-cancel').addEventListener('click', reset_prod);
    document.getElementById('button-ajouter').addEventListener('click', send);


}
const reset_prod=function(ev)
{
    ev.preventDefault();
    // programmatically we can reset it 
    document.getElementById('form-categorie').reset();
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
        document.getElementById('form-categorie').submit();
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
    let libelle=document.getElementById('input-libelle');
    
    //.value, .defaultValue, length of value

    if(libelle.value==="")
    {
        failures.push({input:'input-libelle', msg:'Champs requis!'})
  
    }
    
    //return a boolean || an object with details about the failures
    return failures;
}

    


document.addEventListener('DOMContentLoaded', init);
