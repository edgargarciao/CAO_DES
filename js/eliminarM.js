
  var selecteds =[];
  var k = 0;

  $(document).ready(function(){
  $("#Cursos #checkall").click(function () {
          if ($("#Cursos #checkall").is(':checked')) {
              $("#Cursos input[type=checkbox]").each(function () {
                  $(this).prop("checked", true);
              });

          } else {
              $("#Cursos input[type=checkbox]").each(function () {
                  $(this).prop("checked", false);
              });
          }
      });
      
      $("[data-toggle=tooltip]").tooltip();      
      var f = document.getElementById("TM");
      buscarTiposDeMatriculas(f.options[f.selectedIndex].value);
      getState("");
      printPags();
      cargarEstudiantes();
  });

  function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("Cursos");
    tr = table.getElementsByTagName("tr");
    var x = false;
    if(filter.length == 0){
        for(var i = 1;i<tr.length;i++){                  
              tr[i].style.display = "none";
        } 
        var ulPages = document.getElementById("pags");
        var ulLis   = ulPages.getElementsByTagName("li");
        for(var i = 0;i<ulLis.length;i++){
          if(ulLis[i].getAttribute("class") == 'active'){
                  var limit = ((i-1)*15);
                  for (k = limit+1; k <= (limit+15) && k < tr.length; k++) {
                    tr[k].style.display = "";
                  }   
        }
    }   
      
    }else{
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[2];
      if (td) {    
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else { 
          tr[i].style.display = "none";
        }
      }
     }
    }
  }

      $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        if(date_input == null){
          date_input=$('input[name="finalDdate"]');
        }
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
          format: 'mm/dd/yyyy',
          container: container,
          todayHighlight: true,
          autoclose: true,
        };
        date_input.datepicker(options);
      })


function printPags(){

  /******************************
  * HIDDEN TABLE ITEMS
  ******************************/
    var tableCourses, tr, td, i;
    tableCourses = document.getElementById("tboCourses");
    tr = tableCourses.getElementsByTagName("tr");
    for (i = 15; i < tr.length; i++) {
      tr[i].style.display = "none";
    }

    
  /******************************
  * ADD PAGES NUMBERS
  ******************************/

    var canPags = Math.ceil(tr.length / 15);
    var ulPages = document.getElementById("pags");
      
    /******************************
    * ADD PREVIOUS BUTTON
    ******************************/
    
    var iLiPrevious = document.createElement('li');
    iLiPrevious.setAttribute('class', 'disabled');
    iLiPrevious.setAttribute('onclick', 'previousPage('+canPags+')');  
    iLiPrevious.setAttribute('id', 'previous');
    var iSpan = document.createElement('span');
    iSpan.setAttribute('class', 'glyphicon glyphicon-chevron-left');
    iLiPrevious.appendChild(iSpan);
    pags.appendChild(iLiPrevious);
   
    /******************************
    * ADD NUMBER BUTTON
    ******************************/
    for(var j = 0;j < canPags;j++){
        var ili = document.createElement('li');
        ili.setAttribute('id', 'pg-'+(j+1));
        ili.setAttribute('onclick', 'changePage(this.id,'+canPags+')');
        if (j == 0){
            ili.setAttribute('class', 'active');
        }
        var iSpanLi = document.createElement('span');
        var nodeValueLi = document.createTextNode(j+1);
        iSpanLi.appendChild(nodeValueLi);
        ili.appendChild(iSpanLi);
        pags.appendChild(ili);
    }

    /******************************
    * ADD NEXT BUTTON
    ******************************/

    var iLiNext = document.createElement('li');
    iLiNext.setAttribute('id', 'next');
    iLiNext.setAttribute('onclick', 'nextPage('+canPags+')');
    if (canPags == 1){
        iLiNext.setAttribute('class', 'disabled');
    }
    var iSpanNext = document.createElement('span');
    iSpanNext.setAttribute('class', 'glyphicon glyphicon-chevron-right');
    iLiNext.appendChild(iSpanNext);
    pags.appendChild(iLiNext);

}

  function previousPage(canPags){
    var ulPages = document.getElementById("pags");
    var ulLis   = ulPages.getElementsByTagName("li");
    for(var i = 0;i<ulLis.length;i++){
      if(ulLis[i].getAttribute("class") == 'active'){      
        var idLi = ulLis[i].id.split("-")[1];
        if (idLi == 1){
          return;
        }
        ulLis[i].removeAttribute('class');
        ulLis[i-1].setAttribute('class', 'active');

        if(idLi == 2){       
          // Disable the next button
          document.getElementById("previous").setAttribute('class', 'disabled'); 
        }
        document.getElementById("next").removeAttribute('class');

        /******************************
        * HIDDEN TABLE ITEMS
        ******************************/
        var tableCourses, tr, k;
        tableCourses = document.getElementById("Cursos");
        tr = tableCourses.getElementsByTagName("tr");    
        var initIndex =  ((idLi-1)*15); 
        var endIndex = (  ((idLi)*15) > tr.length ) ? ( (initIndex) + (tr.length%15) - 1): ((idLi)*15) ;

        for (k = initIndex; k <= endIndex; k++) {
          tr[k].style.display = "none";
        }

        /******************************
        * SHOW TABLE ITEMS
        ******************************/

        for (k = initIndex;k > (initIndex - 15); k--) {         
          tr[k].style.display = "";
        }
        break;
      }
    }
  }

  function nextPage(canPags){
    var ulPages = document.getElementById("pags");
    var ulLis   = ulPages.getElementsByTagName("li");
    for(var i = 0;i<ulLis.length;i++){
      if(ulLis[i].getAttribute("class") == 'active'){      
        var idLi = ulLis[i].id.split("-")[1];
        // If select the same page then exit
        if (idLi == canPags){
            return; 
        }
        // Quit the select on the now number
        ulLis[i].removeAttribute('class');      
        // Add the select on the next number
        ulLis[i+1].setAttribute('class', 'active');

        // If the next page is the end page
        if(idLi == (canPags-1)){       
          // Disable the next button
          document.getElementById("next").setAttribute('class', 'disabled'); 
        }
        // Enable the previous button
        document.getElementById("previous").removeAttribute('class');

        /******************************
        * HIDDEN TABLE ITEMS
        ******************************/
        var tableCourses, tr, k;
        tableCourses = document.getElementById("Cursos");
        tr = tableCourses.getElementsByTagName("tr");
        var limit = ((idLi-1)*15);
        for (k = limit+1; k <= (limit+15) && k < tr.length; k++) {
          tr[k].style.display = "none";
        }
        /******************************
        * SHOW TABLE ITEMS
        ******************************/
        limit = k + 14;
        for (;k <= (limit) && k < tr.length; k++) {
          tr[k].style.display = "";
        }
        break;
      }
    }
  }

  function changePage(idPage,canPags){

        var idLi = idPage.split("-")[1];
        var iLi = document.getElementById(idPage);   
        if(iLi.getAttribute("class") == 'active'){
          return;
        }   

        if(idLi == (canPags)){  
          // Disable the next button
          document.getElementById("next").setAttribute('class', 'disabled'); 
          if(canPags > 1){
              document.getElementById("previous").removeAttribute('class');
          }              
        }

        if(idLi == 1){       
          // Disable the previous button
          document.getElementById("previous").setAttribute('class', 'disabled'); 
          if(canPags > 1){
              document.getElementById("next").removeAttribute('class');
          }              
        }

        /******************************
        * SHOW TABLE ITEMS
        ******************************/
        var tableCourses, tr, k;
        tableCourses = document.getElementById("Cursos");
        tr = tableCourses.getElementsByTagName("tr");
        var limit = ((idLi-1)*15);
        
        for (k = limit+1; k <= (limit+15) && k < tr.length; k++) {
          tr[k].style.display = "";
        }
      
       /******************************
        * HIDDEN TABLE ITEMS
        ******************************/

        var ulPages = document.getElementById("pags");
        var ulLis   = ulPages.getElementsByTagName("li");
        for(var i = 0;i<ulLis.length;i++){

            if(ulLis[i].getAttribute("class") == 'active'){
                var idLih = ulLis[i].id.split("-")[1];
                if(i != 0){
                  ulLis[i].removeAttribute('class') ;         
                }  
                var initIndex =  ((idLih-1)*15); 
                var endIndex = (  ((idLih)*15) > tr.length ) ? ( (initIndex) + (tr.length%15)): ((idLih)*15) ;

                for (k = initIndex + 1; k <= endIndex && k < tr.length  ; k++) {
                  tr[k].style.display = "none";
                }

                break;
            }
        }
              iLi.setAttribute('class', 'active');
  }

function getState(val) {
  var tipoMatricula = $("#tiposDeMatricula").val();
  $.ajax({
  type: "POST",
  url: "get_cursos.php",
  data: {
          'categoria':val,
          'tipoDeMatricula':tipoMatricula

        },
  success: function(data){

    document.getElementById("tboCourses").innerHTML = data;
    var element =  document.getElementById('previous');
    if (typeof(element) != 'undefined' && element != null)
    {
          var myNode = document.getElementById("pags");
          myNode.innerHTML = '';
    }
    printPags();
    checkToogles();
  }
  });
}

function cargarEstudiantes() {
  var tipoMatricula = $("#tiposDeMatricula").val();
  $.ajax({
  type: "POST",
  url: "get_estudiantes.php",
  data: {
          'tipoDeMatricula':tipoMatricula
        },
  success: function(data){
    document.getElementById("tboEstudiante").innerHTML = data; 
    //checkTooglesE();  
  }
  });
}

function onClickHandler(idCheck){
    var chk=document.getElementById(idCheck).checked;
    if(!chk && !isCheckInList('ch-'+idCheck.split('-')[1])){
      selecteds.push('ch-'+idCheck.split('-')[1]);
    }
    if(chk){
      var index = selecteds.indexOf(('ch-'+idCheck.split('-')[1]));
      selecteds.splice(index, 1);
    }
}

function isCheckInList(idCheck){
    for(var j = 0;j<=selecteds.length;j++){
      if(selecteds[j] == idCheck){
        return true;
      }
    }
    return false;
}


function checkToogles(){
  for(var j = 0;j<=selecteds.length;j++){
    if(document.getElementById(selecteds[j])){
     document.getElementById(selecteds[j]).click();
    }
    
  }
}

$(document).ready(function(){
  $("#submit").click(function(){
    // Obtengo el tipo de matricula
    var tipoMatricula = $("#tiposDeMatricula").val();
    // Obtengo el rol
    var rol = $("#rol").val();
    // Obtengo la fecha inicial de matricula
    var initDate = $("#initDate").val();
    // Obtengo la fecha final de matriucla
    var finalDate = $("#finalDate").val();

    // Obtengo los chips donde estan los ID's de los usuarios
    var divEstudiantes = document.getElementById("chipsUsers").getElementsByTagName("div");

    // Guardo los Id´s de los usuarios
    var estudiantes = "";
    for (var i = 0; i < divEstudiantes.length; i++) {
        // Extraigo el Id del usuario y lo voy almacenando
        estudiantes += ((divEstudiantes[i].id+"").split("-")[2]) + ",";
    }

    // Guardo los Id´s de los cursos a donde se matricularan los estudiantes
    var infoCourses = "";
    for(var j = 0;j<=selecteds.length;j++){
      if(typeof selecteds[j] != 'undefined'){
        infoCourses += ((selecteds[j]+"").split("-")[1]) + ",";
      }
    }
    
    // Creo una variable con la fecha actual
    var now = new Date();
    now.setHours(0, 0, 0, 0);

    // Creo una variable con la fecha inicial pero sin horas.
    var dateI = new Date(initDate);
    dateI.setHours(0, 0, 0, 0);

    // Valido los datos
    if(tipoMatricula==''|| rol==''||initDate==''||finalDate==''){
      alert("Por favor digite todos los campos");
    }    
    else if( (dateI) < (now)){
      alert("La fecha inicial debe ser mayor que la fecha actual.");
    }else if((Date.parse(initDate)) > (Date.parse(finalDate))){
      alert("La fecha inicial debe ser menor que la fecha final.");
    }else if(estudiantes == ""){
      alert("Debe seleccionar por lo menos un estudiante");
    }
    else if(selecteds.length == 0){
      alert("Debe seleccionar por lo menos un curso");
    }
    else
    {
        // AJAX Code To Submit Form.
        $.ajax({
        type: "POST",
        url: "ProcessRegistrarM.php",
        data:
        {
          TipoMatricula: tipoMatricula,
          rol: rol,
          estudiantes: estudiantes,
          initDate: initDate,
          finalDate:finalDate,
          infoCourses: infoCourses
        },
        cache: false,
                success: function(result){             
                  if(result.trim() == 'Registro exitoso'){                   
                    $('#formRTM').trigger("reset"); 
                    alert(result.trim());
                    location.pathname = "CAO_DES/VerM.php";
                  }else{
                    alert(result.trim());
                  }                  
                }
        });
    }
    return false;
  });
});
         
function buscarTiposDeMatriculas(tipoRegistro){
  
  $.ajax({
  type: "POST",
  url: "get_tps.php",
  data:'idTM='+tipoRegistro,
  async: false,
  success: function(data){
    document.getElementById("tiposDeMatricula").innerHTML = data;
    var cat = $("#CAT").val();
    getState(cat);
  }
  });

}

function cargarCursos(tipoDeMatricula){
    var cat = $("#CAT").val();
    getState(cat);
}
