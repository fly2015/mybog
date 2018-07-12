</div>
<footer>
</footer>
<!-- jQuery -->
<script src="assets/js/jquery-3.1.0.js" type="text/javascript"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- CK Editor -->
<script src="assets/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- Custom -->
<script src="assets/js/custom.js" type="text/javascript"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1', {});
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
</body>
</html>