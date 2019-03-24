<script src="theme/js/validator.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on("submit", "#selectbox_validate", function() {
            if ($("div#maindiv").hasClass("has-error")) {
                $(this).find(".bootstrap-select")
                    .after("<h6 class='has-error' style='color:red;'>please select any value from options.</h6>");
            }
        });
        $("#select").on("changed.bs.select", function(e) {
            if (!$("div#maindiv").hasClass("has-error")) {
                $("#selectbox_validate").find("h6.has-error").hide();
            }
        });
    });
</script>