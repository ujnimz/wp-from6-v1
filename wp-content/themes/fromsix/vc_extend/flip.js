!function($) {

    function addJsonParam(it,paramName,value) {
        var el = $(it).closest(".styled_text_block").find(".styled_text_field,.styled_textarea_field");

        var v = el.val()?el.val():"{}";
        v = v.replace(/\\n/g, "\\n")
            .replace(/\\'/g, "\\'")
            .replace(/\\"/g, '\\"')
            .replace(/\\&/g, "\\&")
            .replace(/\\r/g, "\\r")
            .replace(/\\t/g, "\\t")
            .replace(/\\b/g, "\\b")
            .replace(/\\f/g, "\\f");
        v = v.replace(/[\u0000-\u0019]+/g,"");
        console.log("value "+v);
        var json = JSON.parse(v);

        json[paramName] = value;

        el.val(JSON.stringify(json));
    }

    function removeJsonParam(it,paramName) {
        var el = $(it).closest(".styled_text_block").find(".styled_text_field,.styled_textarea_field");

        var v = el.val()?el.val():"{}";
        var json = JSON.parse(v);

        delete json[paramName];

        el.val(JSON.stringify(json));
    }

    $('.styled_text_block input,.styled_text_block textarea').on( "focusout", function() {
        addJsonParam(this,$(this).attr("param"),$(this).val());
    } );

    $(".styled_text_block .mce-btn").on("click",function(){

            if($(this).hasClass("mce-active")) {
                $(this).removeClass("mce-active");
                removeJsonParam(this,$(this).attr("param"));
            } else {
                $(this).parent().children().removeClass("mce-active");
                $(this).addClass("mce-active");
                addJsonParam(this,$(this).attr("param"),$(this).attr("val"));
            }


        }
    );
    $('.styled_text_block select').on('change', function() {
        addJsonParam(this,$(this).attr("param"),this.value);
    });

    $( '.cpa-color-picker' ).wpColorPicker({change: function (event, ui) {
        var element = event.target;
        var color = ui.color.toString();
            addJsonParam(element,"color",color);
    }
    });

}(window.jQuery); 