<!-- Scripts Placed at the end of the document so the pages load faster -->
<!--================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>

<script
    src="https://code.jquery.com/jquery-1.11.3.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script>   

    $(document).ready(function() {
      
        
        $('.pickoption').click(function(event){
            event.preventDefault(); 
            $(this).parents('form:first').submit();
            $('#left').toggleClass('bounceInLeft bounceOutRight');
//            $(this).find('img').removeClass('bounceInLeft bounceInRight').addClass('hinge');
            $('#right').toggleClass('bounceInRight bounceOutLeft');
        });
    });
</script>