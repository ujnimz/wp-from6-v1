!function($) {

    function getJson(el) {
        var val = el.val()?el.val():"{}";
        val = val.replace(/\\n/g, "\\n")
            .replace(/\\'/g, "\\'")
            .replace(/\\"/g, '\\"')
            .replace(/\\&/g, "\\&")
            .replace(/\\r/g, "\\r")
            .replace(/\\t/g, "\\t")
            .replace(/\\b/g, "\\b")
            .replace(/\\f/g, "\\f");
        val = val.replace(/[\u0000-\u0019]+/g,"");

        return JSON.parse(val);
    }
    function saveJson(el,json) {
        el.val(JSON.stringify(json).replace(new RegExp('"}',"g"),'" }'));
    }


    /* FAQs code */
    function addNewQuestion(block,title,value) {

        $("<div class='question'>" +
                "<h5>"+title+"</h5>"+
                "<div>"+value+"</div>"+
                "<div class='remove dashicons dashicons-minus'></div>"+
            "</div>").insertBefore(block.find(".new_question"));

        var position = block.attr("tabi");
        var json = getJson($(".wpb_el_type_faq_element .faq_element_field"));

        if(!json["tabs"][position]["questions"]) {
            json["tabs"][position]["questions"] = [];
        }
        json["tabs"][position]["questions"].push({"title" : title,"desc":value});
        saveJson($(".wpb_el_type_faq_element .faq_element_field"),json);
    }

    function addNewTab(block ,name) {
        $('.field_faq .questions,.field_faq .tab').removeClass('active');
        var count = $('.field_faq .tabs .tab').length -1 ;
        $('.field_faq .new_tab')
            .before("<div class='tab active'  tabi="+count+"> " +
                                "<div class='head'>"+name+"</div>" +
                            "</div>");
        $(".field_faq .questions_block").append(
            "<div class='questions active tab_"+count+"'  tabi="+count+">"+
                "<div class='new_question'>" +
                    "<input type='text' placeholder='New questions'/> " +
                    "<textarea  placeholder='Text' />" +
                    "<span class='add_new_question dashicons dashicons-plus'></span>" +
                "</div>"+
                "<div class='delete_tab'>Delete tab</div>"+
            "</div>");

        var json = getJson($(".wpb_el_type_faq_element .faq_element_field"));
        if(!json["tabs"]) {
            json["tabs"] = [];
        }
        json["tabs"].push({"name":name});
        saveJson($(".wpb_el_type_faq_element .faq_element_field"),json);
    }

    $(".field_faq .add_new_tab").on("click",function(){
            $(".wpb_el_type_faq_element .dialog").show();
        }
    );

    $(".wpb_el_type_faq_element .dialog .button").on("click",function(){
            $(".wpb_el_type_faq_element .dialog").hide();
            var input = $(".wpb_el_type_faq_element .dialog input");
            addNewTab($(this).closest(".tab"),input.val());
            input.val("");
        }
    );

    $(".field_faq").on("click",".tab",function(){
        if(!$(this).hasClass("new_tab"))
            $(".wpb_el_type_faq_element .dialog").hide();
        $('.field_faq .questions,.field_faq .tab').removeClass('active');
        $(this).addClass('active');
        $('.field_faq .questions.tab_'+$(this).attr("tabi")).addClass('active');
    });

    $(".field_faq").on("click",".add_new_question",function(){

            var title = $(this).parent().find("input");
            var desc = $(this).parent().find("textarea");
            var block = $(this).closest(".questions");

            addNewQuestion(block,title.val(),desc.val());
            title.val("");
            desc.val("") ;
        }
    );

    $(".field_faq").on("click",".questions .remove",function(){

            var index = $(this).parent().index();
            var position = $(this).parent().parent().attr("tabi");
            $(this).parent().remove();

            var json = getJson($(".wpb_el_type_faq_element .faq_element_field"));

            json["tabs"][position]["questions"].splice(index,1);
            saveJson($(".wpb_el_type_faq_element .faq_element_field"),json);
        }
    );

    $(".field_faq").on("click",".delete_tab",function(){

            var index = $(this).parent().index();
            $(this).parent().remove();
            $(".field_faq .tabs .tab").get(index).remove();
            var json = getJson($(".wpb_el_type_faq_element .faq_element_field"));

            json["tabs"].splice(index,1);
            saveJson($(".wpb_el_type_faq_element .faq_element_field"),json);
        }
    );


    /* Locations code */

    function addNewLocationTab(parent,title) {
        var indexForNewTab =  parent.index();
        $('.field_locations .location,.field_locations .tab').removeClass('active');

        parent.before("<div class='tab active'  tabi="+indexForNewTab+"> " +
                "<div class='head'>"+title+"</div>" +
                "</div>");

        $(".field_locations .locations_block").append(
            "<div class='location active tab_"+indexForNewTab+"'  tabi="+indexForNewTab+">"+
                "<label for='address'>Address</label><textarea placeholder='Address' name='address' class='address'></textarea>"+
                "<label for='landmark'>Landmark</label><textarea placeholder='Landmark' name='landmark' class='landmark'></textarea>" +
                "<label for='telephone'>Telephone</label><textarea placeholder='Telephone' name='telephone' class='telephone'></textarea>" +
                "<label for='branch_timing'>Branch timing</label><textarea placeholder='Branch timing' name='branch_timing' class='branch_timing'></textarea>" +
                "<label for='fax'>Fax</label><textarea placeholder='Fax' name='fax' class='fax'></textarea>"+
                "<label for='email'>Email</label><input type='text' placeholder='Email' name='email' class='email'/>" +
            "<label for='map'>Google map code</label><textarea placeholder='Google map code' name='map' class='map'></textarea>"+
                        "<div class='delete_tab'>Delete tab</div>"+
                    "</div>");

        var dataHolder = $(".wpb_el_type_locations_element .locations_element_field");
        var json = getJson(dataHolder);
        if(!json["tabs"]) {
            json["tabs"] = [];
        }
        json["tabs"].push({"name":title});
        saveJson(dataHolder,json);

    }

    function addLocationField(index,paramName,value) {
        var dataHolder = $(".wpb_el_type_locations_element .locations_element_field");
        var json = getJson(dataHolder);
        console.log(index+" "+paramName+" "+value);
        json['tabs'][index][paramName] = value;
        saveJson(dataHolder,json);
    }

    $(".field_locations .new_tab_location .button").on("click",function(){

            var input = $(this).parent().find("input");
            addNewLocationTab($(".field_locations .new_tab"),input.val());
            input.val("");
        }
    );

    $(".field_locations").on("click",".tab",function(){

        $('.field_locations .location,.field_locations .tab').removeClass('active');
        $(this).addClass('active');
        $('.field_locations .location.tab_'+$(this).attr("tabi")).addClass('active');
        if($(this).hasClass("new_tab")) {
            $('.field_locations .new_tab_location').addClass('active');
        }
    });

    $('.field_locations .locations_block').on( "focusout","textarea,input", function(e) {
        if (!$(e.target).hasClass("plus")) {
            addLocationField($(this).parent().attr("tabi"),$(this).attr("class"),$(this).val());
        }

    } );
    $('.field_locations .locations_block').on( "click",".delete_tab", function(e) {


            var index = $(this).parent().attr("tabi");
            $(this).parent().remove();
            $(".field_locations .tabs .tab[tabi='"+index+"']").remove();
            var dataHolder = $(".wpb_el_type_locations_element .locations_element_field");
            var json = getJson(dataHolder);
            json["tabs"].splice(index,1);
            saveJson(dataHolder,json);

    } );
    //delete_tab

}(window.jQuery);