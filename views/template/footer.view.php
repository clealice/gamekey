
</body>
<script>
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

                url: "test.view.php",
                success : function (html) {
                    if(html) {
                        $("#articles_infinie").append(html);
                    } else {
                        alert("Erreur");
                    }

                }


            });

        }

    })
</script>
</html>