

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
    let id_client = document.getElementById('input-id');
    let adresse=document.getElementById('input-adresse');
    let num_c=document.getElementById('input-num_c');
   
    //.value, .defaultValue, length of value
    if( id_client.value==="")
    {
        failures.push({input:'input-id', msg:'remplissez le type!'})
            
    } 
    else
    if(adresse.value==="")
    {
        failures.push({input:'input-adresse', msg:'Champs requis!'})
  
    }
    else
    if(num_c.value==="")
    {
        failures.push({input:'input-num_c', msg:'Champs requis!'})

    }
 
    //return a boolean || an object with details about the failures
    return failures;
}

   
      
    
    


document.addEventListener('DOMContentLoaded', init);
