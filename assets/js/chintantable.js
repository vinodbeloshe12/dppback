var globalfilldata = {};

function generatejquery(url,getVar) {
    //console.log("ABCD");
    var isselectalldone = false;
    $(document).ready(function () {

        var search = $(".chintantablesearch").val();
        var pageno = 1;
        var orderby = "";
        var orderorder = "";
        var maxrow = 10;
        $(".drawchintantable .maxrow").val(maxrow);





        function fillchintandata() {
            $(".drawchintantable tr th input[id='chintanselectall']").prop("checked", false);
            $(".drawchintantable .loader").show();
            var getObj = {
                search: search,
                pageno: pageno,
                orderby: orderby,
                orderorder: orderorder,
                maxrow: maxrow
            };
            console.log(getVar);
            if(getVar && getVar.length>0)
            {
                console.log(getVar);
                for(var i=0;i<getVar.length;i++) {
                    console.log(i);
                    getObj[$(getVar[i]).attr("varName")] = $(getVar[i]).val();
                }
            }
            $.getJSON(url,getObj , function (data) {

                $(".drawchintantable table tbody").html("");
                var result = data.queryresult;

                var appendval = $(".drawchintantable thead tr th[data-selectall='true']").attr('data-field');

                for (var i = 0; i < result.length; i++) {
                    var appendtext = drawtable(result[i]);
                    var whatappend = result[i][appendval];
                    if (appendval) {
                        appendtext = appendtext.replace("<tr>", "<tr><td><input type='checkbox' data-id='" + whatappend + "' name='chintansideselect' id='chintansideselect" + whatappend + "' /><label for='chintansideselect" + whatappend + "'></label></td>");
                    }
//                    console.log(appendtext);
                    $(".drawchintantable table tbody").append(appendtext);
                }

                $(".chintantablepagination ul.pagination").html("");
                if (data.pageno != 1) {
                    $(".chintantablepagination ul.pagination").append('<li class="waves-effect"><a href="#" data-page="' + (data.pageno - 1) + '"><span aria-hidden="true">&laquo;</span></a></li>');
                } else {
                    $(".chintantablepagination ul.pagination").append('<li class="disabled"><a href="#" data-page="' + (data.pageno) + '"><span aria-hidden="true">&laquo;</span></a></li>');
                }

                for (var i = 0; i < data.lastpage; i++) {
                    if ((i + 1) == data.pageno)
                        $(".chintantablepagination ul.pagination").append('<li class="active" ><a href="#" data-page="' + (i + 1) + '">' + (i + 1) + '</a>');
                    else
                        $(".chintantablepagination ul.pagination").append('<li class="waves-effect"><a href="#" data-page="' + (i + 1) + '">' + (i + 1) + '</a>');
                }
                if (data.pageno != data.lastpage) {
                    $(".chintantablepagination ul.pagination").append('<li class="waves-effect"><a href="#" data-page="' + (data.pageno + 1) + '"><span aria-hidden="true">&raquo;</span></a></li>');
                } else {
                    $(".chintantablepagination ul.pagination").append('<li class="disabled"><a href="#" data-page="' + (data.pageno) + '"><span aria-hidden="true">&raquo;</span></a></li>');
                }

                $(".chintantablepagination ul.pagination li").click(function () {
                    $(this).children("a").trigger("click");
                });

                $(".chintantablepagination ul.pagination li a").click(function () {
                    var liattr = $(this).parent("li").hasClass("disabled");
                    var liactive = $(this).parent("li").hasClass("active");
                    if (!liattr && !liactive) {
                        pageno = parseInt($(this).attr("data-page"));
                        fillchintandata();
                    }
                    return false;

                });
                var allpages = $(".chintantablepagination ul.pagination li a");
                var totalwidth = 0;
                console.log("Length: " + allpages.length);
                for (var i = 0; i < allpages.length; i++) {
                    totalwidth += $(allpages).eq(i).width() + 26;
                }
                $(".chintantablepagination ul.pagination").width(totalwidth);
                //                    $(".chintantablepagination").css({"overflow-x": "scroll","height": "72px","overflow-y": "hidden"});

                for (var i = 0; i < data.elements.length; i++) {
                    var element = data.elements[i];
                    $(".drawchintantable thead tr th[data-field='" + element.alias + "']").html(element.header);

                    var isselectall = $(".drawchintantable thead tr th[data-field='" + element.alias + "']").attr("data-selectall");
                    if (isselectall == "true" && !isselectalldone) {
                        var tablehtml = $(".drawchintantable thead tr").html();
                        tablehtml = "<th><input type='checkbox' name='chintanselectall' id='chintanselectall' /><label for='chintanselectall' onClick='chintanselectallcall();'></label></th>" + tablehtml;
                        $(".drawchintantable").append("<a href='#' onClick='chintandeleteselected()' class='red btn less-pad z-depth-0 waves-effect waves-light'><i class='material-icons'>delete</i></a>");
                        isselectalldone = true;
                        $(".drawchintantable thead tr").html(tablehtml);
                    }



                    if (element.sort == "ASC") {
                        $(".drawchintantable thead tr th[data-field='" + element.alias + "']").append("<button data-sort='DESC' class='btn chisorting text-blue waves-effect waves-blue z-depth-0'><i class='material-icons'>keyboard_arrow_down</i></button>");
                    } else if (element.sort == "DESC") {
                        $(".drawchintantable thead tr th[data-field='" + element.alias + "']").append("<button data-sort='ASC' class='btn chisorting text-blue waves-effect waves-blue z-depth-0'><i class='material-icons'>keyboard_arrow_up</i></button>");
                    } else if (element.sort == "1") {
                        $(".drawchintantable thead tr th[data-field='" + element.alias + "']").append("<button data-sort='ASC' class='btn chisorting text-blue waves-effect waves-blue z-depth-0'><i class='material-icons'>swap_vert</i></button>");
                    }
                }

                $(".drawchintantable .chisorting").click(function () {
                    orderby = $(this).parents("th").attr("data-field");
                    orderorder = $(this).attr("data-sort");
                    maxrow = $(".drawchintantable select.maxrow").val();
                    fillchintandata();
                });


                $(".drawchintantable .loader").hide();
                    $('.tooltipped').tooltip({
                    delay: 50
                });
            });




        };

        $('.drawchintantable .chintantablesearch').keypress(function (e) {
            var key = e.which;
            if (key == 13) // the enter key code
            {
                $(".chintantablesearchgo").trigger("click");
            }
        });

        $(".chintantablesearchgo").click(function () {
            search = $(".chintantablesearch").val();
            pageno = 1;
            maxrow = $(".drawchintantable select.maxrow").val();
            fillchintandata();
        });

        $(".chintantablesearchgo").click(function () {
            search = $(".chintantablesearch").val();
            pageno = 1;
            maxrow = $(".drawchintantable select.maxrow").val();
            fillchintandata();
        });
        $(".drawchintantable .maxrow").change(function () {
            search = $(".chintantablesearch").val();
            pageno = 1;
            maxrow = $(".drawchintantable select.maxrow").val();
            fillchintandata();
        });

        globalfilldata = fillchintandata;
        fillchintandata();





    });
}


function generateorder(url) {
    //console.log("ABCD");
    var isselectalldone = false;
    $(document).ready(function () {

        var search = $(".chintantablesearch").val();
        var pageno = 1;
        var orderby = "";
        var orderorder = "";
        var maxrow = 10;
        $(".drawchintantable .maxrow").val(maxrow);





        function fillchintandata() {
            $(".drawchintantable .loader").show();
            $.getJSON(url, {
                search: search,
                pageno: pageno,
                orderby: orderby,
                orderorder: orderorder,
                maxrow: maxrow
            }, function (data) {

                $(".drawchintantable").html("");
                var result = data.queryresult;

                var appendval = $(".drawchintantable thead tr th[data-selectall='true']").attr('data-field');

                for (var i = 0; i < result.length; i++) {
                    var appendtext = drawtable(result[i]);
                    console.log(appendtext);
                    $(".drawchintantable").html($(".drawchintantable").html() + appendtext);
                }

                $(".chintantablepagination ul.pagination").html("");
                if (data.pageno != 1) {
                    $(".chintantablepagination ul.pagination").append('<li class="waves-effect"><a href="#" data-page="' + (data.pageno - 1) + '"><span aria-hidden="true">&laquo;</span></a></li>');
                } else {
                    $(".chintantablepagination ul.pagination").append('<li class="disabled"><a href="#" data-page="' + (data.pageno) + '"><span aria-hidden="true">&laquo;</span></a></li>');
                }

                for (var i = 0; i < data.lastpage; i++) {
                    if ((i + 1) == data.pageno)
                        $(".chintantablepagination ul.pagination").append('<li class="active" ><a href="#" data-page="' + (i + 1) + '">' + (i + 1) + '</a>');
                    else
                        $(".chintantablepagination ul.pagination").append('<li class="waves-effect"><a href="#" data-page="' + (i + 1) + '">' + (i + 1) + '</a>');
                }
                if (data.pageno != data.lastpage) {
                    $(".chintantablepagination ul.pagination").append('<li class="waves-effect"><a href="#" data-page="' + (data.pageno + 1) + '"><span aria-hidden="true">&raquo;</span></a></li>');
                } else {
                    $(".chintantablepagination ul.pagination").append('<li class="disabled"><a href="#" data-page="' + (data.pageno) + '"><span aria-hidden="true">&raquo;</span></a></li>');
                }

                $(".chintantablepagination ul.pagination li").click(function () {
                    $(this).children("a").trigger("click");
                });

                $(".chintantablepagination ul.pagination li a").click(function () {
                    var liattr = $(this).parent("li").hasClass("disabled");
                    var liactive = $(this).parent("li").hasClass("active");
                    if (!liattr && !liactive) {
                        pageno = parseInt($(this).attr("data-page"));
                        fillchintandata();
                    }
                    return false;

                });
                var allpages = $(".chintantablepagination ul.pagination li a");
                var totalwidth = 0;
                console.log("Length: " + allpages.length);
                for (var i = 0; i < allpages.length; i++) {
                    totalwidth += $(allpages).eq(i).width() + 26;
                }
                $(".chintantablepagination ul.pagination").width(totalwidth);
                //                    $(".chintantablepagination").css({"overflow-x": "scroll","height": "72px","overflow-y": "hidden"});

                for (var i = 0; i < data.elements.length; i++) {
                    var element = data.elements[i];
                    $(".drawchintantable thead tr th[data-field='" + element.alias + "']").html(element.header);

                    var isselectall = $(".drawchintantable thead tr th[data-field='" + element.alias + "']").attr("data-selectall");
                    if (isselectall == "true" && !isselectalldone) {
                        var tablehtml = $(".drawchintantable thead tr").html();
                        tablehtml = "<th><input type='checkbox' name='chintanselectall' id='chintanselectall' /><label for='chintanselectall' onClick='chintanselectallcall();'></label></th>" + tablehtml;
                        $(".drawchintantable").append("<a href='#' onClick='chintandeleteselected()' class='red btn less-pad z-depth-0 waves-effect waves-light'><i class='material-icons'>delete</i></a>");
                        isselectalldone = true;
                        $(".drawchintantable thead tr").html(tablehtml);
                    }



                    if (element.sort == "ASC") {
                        $(".drawchintantable thead tr th[data-field='" + element.alias + "']").append("<button data-sort='DESC' class='btn chisorting text-blue waves-effect waves-blue z-depth-0'><i class='material-icons'>keyboard_arrow_down</i></button>");
                    } else if (element.sort == "DESC") {
                        $(".drawchintantable thead tr th[data-field='" + element.alias + "']").append("<button data-sort='ASC' class='btn chisorting text-blue waves-effect waves-blue z-depth-0'><i class='material-icons'>keyboard_arrow_up</i></button>");
                    } else if (element.sort == "1") {
                        $(".drawchintantable thead tr th[data-field='" + element.alias + "']").append("<button data-sort='ASC' class='btn chisorting text-blue waves-effect waves-blue z-depth-0'><i class='material-icons'>swap_vert</i></button>");
                    }
                }

                $(".drawchintantable .chisorting").click(function () {
                    orderby = $(this).parents("th").attr("data-field");
                    orderorder = $(this).attr("data-sort");
                    maxrow = $(".drawchintantable select.maxrow").val();
                    fillchintandata();
                });


                $(".drawchintantable .loader").hide();

            });




        };

        $('.drawchintantable .chintantablesearch').keypress(function (e) {
            var key = e.which;
            if (key == 13) // the enter key code
            {
                $(".chintantablesearchgo").trigger("click");
            }
        });

        $(".chintantablesearchgo").click(function () {
            search = $(".chintantablesearch").val();
            pageno = 1;
            maxrow = $(".drawchintantable select.maxrow").val();
            fillchintandata();
        });

        $(".chintantablesearchgo").click(function () {
            search = $(".chintantablesearch").val();
            pageno = 1;
            maxrow = $(".drawchintantable select.maxrow").val();
            fillchintandata();
        });
        $(".drawchintantable .maxrow").change(function () {
            search = $(".chintantablesearch").val();
            pageno = 1;
            maxrow = $(".drawchintantable select.maxrow").val();
            fillchintandata();
        });

        globalfilldata = fillchintandata;
        fillchintandata();





    });
}


function generatepiechart(texttitle, target, value) {
    $(target).highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1, //null,
            plotShadow: false
        },
        title: {
            text: texttitle
        },
        tooltip: {
            pointFormat: '<b>{point.name}</b>:{point.y}  ({point.percentage:.1f} %)'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>:{point.y}  ({point.percentage:.1f} %)',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: value
    }]
    });
}

function filljsoninput(fromdiv, todiv) {

    var $from = $(fromdiv);
    var fromjson = JSON.parse($from.val());
    var $to = $(todiv);
    for (var i = 0; i < fromjson.length; i++) {
        var fromj = fromjson[i];
        switch (fromj.type) {
        case "text":
            $to.append("<div class='form-group genfromjson'><label class='col-sm-2 control-label' for='normal-field'>" + fromj.label + "</label><div class='col-sm-4'><input type='text' json-type='" + fromj.type + "' json-class='" + fromj.classes + "' id='normal-field' placeholder='" + fromj.placeholder + "' class='form-control jsonelement " + fromj.classes + "' value='" + fromj.value + "'></div></div>");
            break;
        case "textarea":
            $to.append("<div class='form-group genfromjson'><label class='col-sm-2 control-label' for='normal-field'>" + fromj.label + "</label><div class='col-sm-4'><textarea id='normal-field' json-type='" + fromj.type + "' json-class='" + fromj.classes + "' placeholder='" + fromj.placeholder + "' class='form-control jsonelement " + fromj.classes + "' >" + fromj.value + "</textarea></div></div>");
            break;

        }

    }
}

function jsonsubmit(todiv, fromdiv) {
    var $from = $(fromdiv).children(".genfromjson");
    var tojson = [];
    for (var i = 0; i < $from.length; i++) {
        var $fromsin = $from.eq(i);
        var tosin = {};
        //console.log($fromsin.html());
        tosin.label = $fromsin.children("label").text();
        console.log($fromsin.children("div").children(".jsonelement").attr("json-type"));
        tosin.type = $fromsin.children("div").children(".jsonelement").attr("json-type");
        tosin.classes = $fromsin.children("div").children(".jsonelement").attr("json-class");
        tosin.placeholder = $fromsin.children("div").children(".jsonelement").attr("placeholder");
        tosin.value = $fromsin.children("div").children(".jsonelement").val();
        tojson.push(tosin);
    }
    //console.log(tojson);
    $(todiv).val(JSON.stringify(tojson));
}



function chintanselectallcall() {
    var isselectall = !$(".drawchintantable tr th input[id='chintanselectall']").prop("checked");
    if (isselectall) {
        $(".drawchintantable tr td input[name='chintansideselect']").prop("checked", true);
    } else {
        $(".drawchintantable tr td input[name='chintansideselect']").prop("checked", false);
    }
}

function chintandeleteselected() {
    var confirmval = confirm("Are you sure you want to delete the selected items");
    var deleteselectedurl = $(".drawchintantable tr th[data-delete-selected]").attr("data-delete-selected");
    if (confirmval) {
        var deletedarr = [];
        var $selecteddelete = $(".drawchintantable tr td input[name='chintansideselect']");
        for (var i = 0; i < $selecteddelete.length; i++) {
            if ($selecteddelete.eq(i).prop("checked")) {
                deletedarr.push($selecteddelete.eq(i).attr("data-id"));
            }
        }
        deletedarr = deletedarr.join();
        $.getJSON(deleteselectedurl, {
            selected: deletedarr
        }).success(function () {
            globalfilldata();
        });
    }
}


function getDragDropOrdering(base_url, orderfield, tablename, where) {
    $(document).ready(function () {
        $.getJSON(base_url, {
            orderby: orderfield,
            orderorder: "ASC",
            maxrow: 1000
        }, function (data) {
            console.log(data.queryresult[1]);
            $(".getordering").html("");
            for (var i = 0; i < data.queryresult.length; i++) {
                $(".getordering").append(drawtable(data.queryresult[i]));
            }

            $(".getordering").sortable();
            $(".getordering").disableSelection();
        });

        $(".saveOrdering").click(function () {
            var idarr = "";
            $orders = $(".getordering li");
            idarr = $orders.map(function (i, n) {
                return $(n).attr('data-id');
            }).get().join(',');

            $.getJSON(admin_url + "index.php/site/getOrderingDone", {
                ids: idarr,
                orderby: orderfield,
                tablename: tablename,
                where: where
            }, function (data) {
                console.log(data);
                Materialize.toast("Order Stored", 3000, 'green');
            });

        });

    });
}


function getStringtoJson(str) {
    var myjson={};
    try {
        myjson=JSON.parse(str);
    } catch (e) {
        console.log(e);
    }
    return myjson;
}