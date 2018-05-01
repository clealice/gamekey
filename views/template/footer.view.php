
</body>
<script>
    var show_no = 0;
    $( "#search_show" ).click(function() {
        if($("#search").css('display') == "none") {
            $( "#search" ).slideDown( "slow", function() {
            });
        } else {
            $( "#search" ).slideToggle( "slow", function() {
            });
        }
    });
    $(window).scroll(function () {

        if($(window).scrollTop() == $(document).height() - $(window).height()) {

            $.ajax({

                url: "ajax.php?lastid="+ $("article:last").attr("id"),
                success : function (html) {
                    if(html) {
                        $("#articles_infinie").append(html);
                    } else {
                        if(show_no == 0) {
                            $("#loader").hide();
                            $("#articles_infinie").append("<div class='section'>Malheureusement vous êtes tout en bas de la liste...</section>");
                            show_no++;
                        }

                    }

                }


            });

        }

    })
</script>
</html>