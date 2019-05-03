$(document).ready(function () {
    $(document).ready(function() {
		$(".img-center").fancybox();
	});

    $('select').material_select();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $linearcontainer = $("div.linear-icon ul.dropdown-content li");
    for (var i = 0; i < $linearcontainer.length; i++) {
        console.log(i);
        var oldcon = $linearcontainer.eq(i).children("span").html();
        var icontxt = $linearcontainer.eq(i).children("span").text();
        var newcontent = "<span class='" + icontxt + "'></span> &nbsp;" + oldcon;
        $linearcontainer.eq(i).children("span").html(newcontent);
    }

    tinymce.init({
        selector: "textarea#some-textarea",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [{
            title: 'Bold text',
            inline: 'b'
        }, {
            title: 'Red text',
            inline: 'span',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Red header',
            block: 'h1',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
        }, {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
        }, {
            title: 'Table styles'
        }, {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
        }]
    });

    //sidemenu
    $('.button-collapse').sideNav();

});