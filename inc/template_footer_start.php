<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>
<script src="assets/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/jquery.validate.min.js"></script>
<!-- custom script -->
<script src="assets/script.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/select2.min.js"></script>
<script src="assets/form-wizard.js"></script>
<script src="assets/bootstrap-select.js"></script>
<script>
    $(document).ready(function () {
        $("#event-date").datepicker();
        FormWizard.init();
        $.ajax({
            type:'POST',
            url:'scripts/reviews.php',
            dataType:'json',
            success:function(json){
                var varHtml="";
                var i=0;
                $.each(json, function( key, value ) {
                    if(i==0){
                        varHtml+=' <div class="item active animated bounceInRight row"><div class="animated slideInLeft col-xs-2">' +
                            '<img alt="portfolio" src="images/team/1.jpg"width="100" class="img-circle img-responsive"></div> <div class="col-xs-10"><p>'+value.review+'</p><span>'+value.name+'<b></b></span></div></div>';
                    }
                    else{
                        varHtml+=' <div class="item animated bounceInRight row"><div class="animated slideInLeft col-xs-2">' +
                            '<img alt="portfolio" src="images/team/1.jpg"width="100" class="img-circle img-responsive"></div> <div class="col-xs-10"><p>'+value.review+'</p><span>'+value.name+'<b></b></span></div></div>';
                    }
                    i+=1;

                });
                $('#reviews').html(varHtml);
            }
        });
    });
    $(document).on('focus', '#searchBox', function () {
        $("#searchBox").removeClass('error');
    });
    $(document).on('click', '#search', function () {
        $("#searchBox").removeClass('error');
        if ($("#searchBox").val() != "") {
            $("#myModal").modal('show');
            $("#header-modal").show();
            $(".question").hide();
            var inputtext = $('input[name=radios]').val().toLowerCase();
            var teststring = $("#searchBox").val().toLowerCase();
            //alert(inputtext + ' ' + teststring)
            if (inputtext.indexOf(teststring) > -1) {
                var x = $("input[name=radios]").val();
                $('input[name=radios][value=' + x + ']').attr('checked', true);
            }
            else {
                $('input[name=radios][value=others]').attr('checked', true);
                $('#others2').val($("#searchBox").val());
            }
        }
        else {
            $("#searchBox").addClass('error');
        }

    });

    $("input[name='extra']").change(function () {
        if ($(this).val() === 'yes') {
            $("#extras").show();
        }
        else if ($(this).val() === 'no') {
            $("#extras").hide();
        }
        else {
            $("#extras").hide();
        }
    });
    function showBack(id) {
        var prev = id - 1;
        $("#modal" + id).hide();
        $("#modal" + prev).show();
        var prev_width = 10 * prev;
        $(".progress-bar").css('width', prev_width + "%");
        $(".progress-bar").attr('aria-valuenow', prev_width);
    }
    $("input[type='radio']").change(function () {
        $("#others").val("");
        $(".modal-footer > .failure > span").hide();
    });
    $(".form-control").click(function () {
        $(".modal-footer > .failure > span").hide();
        $(".modal-body > .content >.container >.row >.failure").hide();
    });
    $("#event-date").click(function () {
        $("#day >.failure").hide();
    });
    $("#event-time").click(function () {
        $("#time>.failure").hide();
    });
    $("#event-duration").click(function () {
        $("#duration>.failure").hide();
    });
    $("#extras >.form-control").click(function () {
        $("#extras>.failure").hide();
    });
    function showNext2(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("input[name='radios']").is(':checked')) {
            if ($("input[name='radios'][value='others']").is(':checked')) {
                if ($("#others" + id).val() == "") {
                    $(tmp).html("Specify details");
                    $(tmp).show();
                }
                else {

                    var next = id + 1;
                    $("#modal" + id).hide();
                    $("#modal" + next).show();
                    var next_width = 10 * id;
                    $(".progress-bar").css('width', next_width + "%");
                    $(".progress-bar").attr('aria-valuenow', next_width);
                    $(tmp).hide();
                }
            }
            else {

                var next = id + 1;
                $("#modal" + id).hide();
                $("#modal" + next).show();
                var next_width = 10 * id;
                $(".progress-bar").css('width', next_width + "%");
                $(".progress-bar").attr('aria-valuenow', next_width);
                $(tmp).hide();
            }
        }
        else {
            $(tmp).html("Select an option");
            $(tmp).show();
        }
    }
    function showNext3(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("input[name='peoples'][class=" + id + "]").is(':checked')) {
            if ($("input[name='peoples'][value='others']").is(':checked')) {
                if ($("#others" + id).val() == "" || !$("#others" + id).val().match(/^\d+$/)) {
                    $(tmp).html("Specify correct details");
                    $(tmp).show();
                }
                else {

                    var next = id + 1;
                    $("#modal" + id).hide();
                    $("#modal" + next).show();
                    var next_width = 10 * id;
                    $(".progress-bar").css('width', next_width + "%");
                    $(".progress-bar").attr('aria-valuenow', next_width);
                    $(tmp).hide();
                }
            }
            else {

                var next = id + 1;
                $("#modal" + id).hide();
                $("#modal" + next).show();
                var next_width = 10 * id;
                $(".progress-bar").css('width', next_width + "%");
                $(".progress-bar").attr('aria-valuenow', next_width);
                $(tmp).hide();
            }

        }
        else {
            $(tmp).html("Select an option");
            $(tmp).show();
        }

    }
    function showNext4(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("input[name='locations'][class=" + id + "]").is(':checked')) {
            if ($("input[name='locations'][value='others']").is(':checked')) {
                if ($("#others" + id).val() == "") {
                    $(tmp).html("Specify correct details");
                    $(tmp).show();
                }
                else {

                    var next = id + 1;
                    $("#modal" + id).hide();
                    $("#modal" + next).show();
                    var next_width = 10 * id;
                    $(".progress-bar").css('width', next_width + "%");
                    $(".progress-bar").attr('aria-valuenow', next_width);
                    $(tmp).hide();
                }
            }
            else {

                var next = id + 1;
                $("#modal" + id).hide();
                $("#modal" + next).show();
                var next_width = 10 * id;
                $(".progress-bar").css('width', next_width + "%");
                $(".progress-bar").attr('aria-valuenow', next_width);
                $(tmp).hide();
            }

        }
        else {
            $(tmp).html("Select an option");
            $(tmp).show();
        }

    }
    function showNext5(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("input[name='amounts'][class=" + id + "]").is(':checked')) {
            if ($("input[name='amounts'][value='others']").is(':checked')) {
                if ($("#others" + id).val() == "" || $("#others" + id).val().match(/^\d{0,4}(\.\d{0,2})?$/) == false) {
                    $(tmp).html("Specify correct details");
                    $(tmp).show();
                }
                else {

                    var next = id + 1;
                    $("#modal" + id).hide();
                    $("#modal" + next).show();
                    var next_width = 10 * id;
                    $(".progress-bar").css('width', next_width + "%");
                    $(".progress-bar").attr('aria-valuenow', next_width);
                    $(tmp).hide();
                }
            }
            else {

                var next = id + 1;
                $("#modal" + id).hide();
                $("#modal" + next).show();
                var next_width = 10 * id;
                $(".progress-bar").css('width', next_width + "%");
                $(".progress-bar").attr('aria-valuenow', next_width);
                $(tmp).hide();
            }

        }
        else {
            $(tmp).html("Select an option");
            $(tmp).show();
        }

    }
    function showNext6(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        var dateflag = false;
        var timeflag = false;
        var durationflag = false;
        if ($("#event-date").val() == "") {
            dateflag = false;
            $("#day > .failure>span").html("Select a date");
            $("#day > .failure").show();
        }
        else {
            dateflag = true;
        }
        if ($("#event-time").val() == "") {
            timeflag = false;
            $("#time > .failure >span").html("Enter time");
            $("#time > .failure").show();
        }
        else {
            timeflag = true;
        }
        if ($("#event-duration").val() == "" || !$("#event-duration").val().match(/^\d+$/)) {
            durationflag = false;
            $("#duration > .failure>span").html("Enter hours");
            $("#duration > .failure").show();
        }
        else {
            durationflag = true;
        }
        if (dateflag && timeflag && durationflag) {
            var next = id + 1;
            $("#modal" + id).hide();
            $("#modal" + next).show();
            var next_width = 10 * id;
            $(".progress-bar").css('width', next_width + "%");
            $(".progress-bar").attr('aria-valuenow', next_width);
            $(tmp).hide();
        }

    }
    function showNext7(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("#photographers").val()!="" && $("#num-photos").val()!="" && $("#photo-size").val()!="") {

            var next = id + 1;
            $("#modal" + id).hide();
            $("#modal" + next).show();
            var next_width = 10 * id;
            $(".progress-bar").css('width', next_width + "%");
            $(".progress-bar").attr('aria-valuenow', next_width);

        }
        else {
            $(tmp).html("Select an option");
            $(tmp).show();
        }

    }
    function showNext8(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("#zip-code").val().match(/^\d{5}(-\d{4})?$/)) {
            var next = id + 1;
            $("#modal" + id).hide();
            $("#modal" + next).show();
            var next_width = 10 * id;
            $(".progress-bar").css('width', next_width + "%");
            $(".progress-bar").attr('aria-valuenow', next_width);
        }
        else {

            $(tmp).html("Enter Valid US Zipcode");
            $(tmp).show();
        }

    }
    function showNext9(id) {
        var tmp = "#modal" + id + " > .modal-footer > .failure > span";
        if ($("input[name='delivery'][class=" + id + "]").is(':checked')) {
            var next = id + 1;
            $("#modal" + id).hide();
            $("#modal" + next).show();
            var next_width = 10 * id;
            $(".progress-bar").css('width', next_width + "%");
            $(".progress-bar").attr('aria-valuenow', next_width);
            $(tmp).hide();

        }
        else {
            $(tmp).html("Select an option");
            $(tmp).show();
        }

    }
    $('#usrname').click(function(){
        $('usrerror').hide();

    });
    $('#login').click(function(){
        $("input[id=user]").val($("#usrname").val());

    });
    $('#pwd').click(function(){
        $('pwderror').html("Incorrect Password");
    });
    $('#formlogin').validate({

        submitHandler: function(form) {
            //alert(<?php $_SESSION["favcolor"]?>);

            $('#usrerror').hide();
            $('#pwderror').hide();

            $.ajax({
                url: 'scripts/verify.php',
                type: form.method,
                data: $(form).serialize(),
            }).done(function(data) {
                if(data=='true'){
                    $("#formdiv").hide();
                    $("#success").html('Login Successful Click Submit to Proceed');
                    $("#modal10 >.modal-body>.modal-footer").html('<button type="submit" id="submit-questions" class="btn ' +
                        'btn-primary">Submit</button>');
                }
                else{
                    $('#usrerror>span').html("Incorrect Username");
                    $('#pwderror>span').html("Incorrect Password");
                    $('#usrerror').show();
                    $('#pwderror').show();
                }
                //   $("#usr").val('@Request.RequestContext.HttpContext.Session["email"]');

            });

        }
    });
    $(document).on('click','#submit-questions',function(){
        var user=$('#user').val();
        var eventNm="";
        if ($("input[name=radios][value=others]").is(':checked')){
            eventNm=$('#others2').val();
        }
        else{
            eventNm=$('input[name=radios]:checked + label').text()
        }
        var noOfPeoples="";
        if ($("input[name=peoples][value=others]").is(':checked')){
            noOfPeoples=$('#others2').val();
        }
        else{
            noOfPeoples=$('input[name=peoples]:checked + label').text()
        }
        var locations= "";
        if ($("input[name=locations][value=others]").is(':checked')){
            locations=$('#others2').val();
        }
        else{
            locations=$('input[name=locations]:checked + label').text()
        }
        var amounts= "";
        if ($("input[name=amounts][value=others]").is(':checked')){
            amounts=$('#others2').val();
        }
        else{
            amounts=$('input[name=amounts]:checked + label').text()
        }
        var eventdate =$('#event-date').val();
        var eventtime= $('#event-time').val();
        var eventduration=$('#event-duration').val();
        var numphotographers=$('#photographers option:selected').text();
        var numphotos=$('#num-photos option:selected').text();
        var photosize=$('#photo-size option:selected').text();
        var deliverytype=$('input[name=delivery]:checked + label').text()
        var url = 'scripts/order_submit.php?customer='+user+'&event='+eventNm+'&people='+noOfPeoples+'&amount' +
            '='+amounts+'&date='+eventdate+'&time='+eventtime+'&duration='+eventduration+'&photographers='+numphotographers+'&photos='+numphotos+'&size='+photosize+'&type='+deliverytype;
        var form = $('<form action="' + url + '" method="post"></form>');
        $('body').append(form);
        form.submit();
    })
    /*$('#mainlogin').validate({

        submitHandler: function(form) {
            $('#mainusr').hide();
            $('#mainpwd').hide();

            $.ajax({
                url: 'scripts/verify.php',
                type: form.method,
                data: $(form).serialize(),
            }).done(function(data) {
                if(data=='true'){

                }
                else{
                    $('#mainusr').html("Incorrect Username");
                    $('#mainusr').html("Incorrect Password");
                    $('#mainusr').show();
                    $('#mainusr').show();
                }
                //   $("#usr").val('@Request.RequestContext.HttpContext.Session["email"]');

            });

        }
    });*/

</script>
</body>
</html>