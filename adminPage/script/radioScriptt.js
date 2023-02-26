  document.getElementById("category").addEventListener("change", function() {
  var selectedValue = this.value;
  var radioButtonsContainer = document.getElementById("radio-div");
  radioButtonsContainer.innerHTML = "";

  if (selectedValue === "world") {
    var radioButton1 = document.createElement("input");
    radioButton1.type = "radio";
    radioButton1.name = "radio-button-group";
    radioButton1.value = "around-the-world";
    radioButton1.id = "radio-button-1";

    var radioButton1Label = document.createElement("label");
    radioButton1Label.htmlFor = "radio-button-1";
    radioButton1Label.innerText = "Around the world";

    radioButtonsContainer.appendChild(radioButton1);
    radioButtonsContainer.appendChild(radioButton1Label);
    


    var radioButton2 = document.createElement("input");
    radioButton2.type = "radio";
    radioButton2.name = "radio-button-group";
    radioButton2.value = "featured-sections";
    radioButton2.id = "radio-button-2";
    radioButton2.style.marginLeft = "25px";

    var radioButton2Label = document.createElement("label");
    radioButton2Label.htmlFor = "radio-button-2";
    radioButton2Label.innerText = "Featured sections";
    

    radioButtonsContainer.appendChild(radioButton2);
    radioButtonsContainer.appendChild(radioButton2Label);



    var radioButton3 = document.createElement("input");
    radioButton3.type = "radio";
    radioButton3.name = "radio-button-group";
    radioButton3.value = "special-feature";
    radioButton3.id = "radio-button-3";
    radioButton3.style.marginLeft = "25px";

    var radioButton3Label = document.createElement("label");
    radioButton3Label.htmlFor = "radio-button-3";
    radioButton3Label.innerText = "Special Feature";
    

    radioButtonsContainer.appendChild(radioButton3);
    radioButtonsContainer.appendChild(radioButton3Label);
  }else if(selectedValue === "news"){
    var radioButton1 = document.createElement("input");
    radioButton1.type = "radio";
    radioButton1.name = "radio-button-group";
    radioButton1.value = "head";
    radioButton1.id = "radio-button-1";

    var radioButton1Label = document.createElement("label");
    radioButton1Label.htmlFor = "radio-button-1";
    radioButton1Label.innerText = "Top of News";

    radioButtonsContainer.appendChild(radioButton1);
    radioButtonsContainer.appendChild(radioButton1Label);


    var radioButton2 = document.createElement("input");
    radioButton2.type = "radio";
    radioButton2.name = "radio-button-group";
    radioButton2.value = "news";
    radioButton2.id = "radio-button-2";
    radioButton2.style.marginLeft = "25px";

    var radioButton2Label = document.createElement("label");
    radioButton2Label.htmlFor = "radio-button-2";
    radioButton2Label.innerText = "Reguar News";
    

    radioButtonsContainer.appendChild(radioButton2);
    radioButtonsContainer.appendChild(radioButton2Label);
  }else if(selectedValue === "sport"){
    var radioButton1 = document.createElement("input");
    radioButton1.type = "radio";
    radioButton1.name = "radio-button-group";
    radioButton1.value = "more-than-a-game";
    radioButton1.id = "radio-button-1";

    var radioButton1Label = document.createElement("label");
    radioButton1Label.htmlFor = "radio-button-1";
    radioButton1Label.innerText = "More Than A Game";

    radioButtonsContainer.appendChild(radioButton1);
    radioButtonsContainer.appendChild(radioButton1Label);



    var radioButton2 = document.createElement("input");
    radioButton2.type = "radio";
    radioButton2.name = "radio-button-group";
    radioButton2.value = "beyond-the-white-line";
    radioButton2.id = "radio-button-2";
    radioButton2.style.marginLeft = "25px";

    var radioButton2Label = document.createElement("label");
    radioButton2Label.htmlFor = "radio-button-2";
    radioButton2Label.innerText = "Beyond The White Line";
    

    radioButtonsContainer.appendChild(radioButton2);
    radioButtonsContainer.appendChild(radioButton2Label);
  }
    });