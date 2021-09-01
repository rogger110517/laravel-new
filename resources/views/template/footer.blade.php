<footer>
    </footer>
    <script>
        $(window).scroll(function() {
            if ($("#header").offset().top > 56) {
                $("#header").addClass("header-color");

            } else {
                $("#header").removeClass("header-color");
            }

        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/4ca23cb350.js" crossorigin="anonymous"></script>
    <script src="header.js"></script>
</body>
</html>