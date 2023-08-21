var gate = false;

function showsidebar() {
  
    if (gate == false){
        console.log ("false");
        document.getElementById("sidenavbar").style.width = "250px";
        gate = true;
      
    } else {
      console.log ("true");
       document.getElementById("sidenavbar").style.width = "0";
      gate = false;

    }
  
};

const education_resources = [
  /*Education*/
    /*Maths*/
  "https://www.mathsisfun.com/",
    /* Chem */
  "https://pubchem.ncbi.nlm.nih.gov/",
    /*Languages */
  "https://www.duolingo.com/"
  /*Careers*/

];

function display(){

  const searched_input = document.getElementById("search_input").value;
  console.log (searched_input);
  const element = document.getElementById("searches");
  results_yn = false;
  element.innerHTML = "";
  for (let i = 0; i < education_resources.length; i++) {
    if (education_resources[i].includes(searched_input)){
      results_yn = true;

    }
  }

  if (results_yn && searched_input != ''){
    element.innerHTML += "<div class = 'buffer_top'></div>";
    
      for (let i = 0; i < education_resources.length; i++) {
        if (education_resources[i].includes(searched_input)){

          element.innerHTML += "<a href='" + education_resources[i] + "'><div class = 'single_result'>" + education_resources[i] + "</div></a>";
        }
      }
    element.innerHTML += "<div class = 'buffer_bottom'></div>";
  }
  
  
};


