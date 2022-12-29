$(document).ready(function(){

    $('input').attr('autocomplete', 'off');

    $(".input").click(function(){
      $(".search-result").show();
  });

    document.addEventListener('click', function handleClickOutsideBox(event) {
        const input = document.getElementById('input-search');
        const box = document.getElementById('box');
        if (!input.contains(event.target)) {
          box.style.display = 'none';
      }
  });


    input_search = document.getElementById("input-search");
    box_suggestions = document.getElementById("suggestions");
    input_search.addEventListener("keyup", function(event) {
        search_in_page(event.target.value);

        if (input_search.value.length == 0) {
            box_suggestions.style.display = 'none';
        }else{
            box_suggestions.style.display = 'block';
        }

    });

    function search_in_page(text){
        if(text == ''){
            return false;
        }
        window.suggestion = [];
        window.id_suggestion = [];
        search_text = document.getElementsByClassName("search-text");
        for(key in search_text){
            if(search_text[key].classList){
                titleText = search_text[key].innerText;
                if(compare_text(text, titleText)){
                    window.suggestion.push(titleText);
                    window.id_suggestion.push(search_text[key].id);
                }
            }
        }
        show_suggestions();
    }

    function compare_text(text, titleText){
        return titleText.toLowerCase().indexOf(text.toLowerCase()) !== -1;
    }

    function add_suggestion(text){
        window.suggestion.push(text);
    }

    function show_suggestions(){
        space_suggestion = document.getElementById("suggestions");
        html= "";
        suggestions= window.suggestion.slice(0, 3);
        for (let index = 0; index < suggestions.length; index++) {
           idTitle= window.id_suggestion[index];
           html+='<h5 onclick="redirect_suggestion('+ idTitle +')" ><i class="search icon"></i>'+ window.suggestion[index] +'</h5>'
       }

       space_suggestion.innerHTML= html;
   }
});

function redirect_suggestion(idTitle){
    title= window.id_suggestion.indexOf(String(idTitle));
    title = window.suggestion[title];
    request_create_historic(title, idTitle);
    window.location.replace('#' + idTitle);
    window.location.reload(true);
}

function redirect_historic(idTitle){
    window.location.replace('#' + idTitle);
}

function request_create_historic(title, id_title){
    $.get("/create?id_titulo="+id_title+"&texto="+title,
    {

    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
});
}
