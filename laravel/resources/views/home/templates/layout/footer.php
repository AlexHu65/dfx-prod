    <img src="assets/img/footer_entix.png" width="100%" >
    <img src="assets/img/footerdigitalsignage.png" width="100%" >
</section>
<script src="assets/js/jquery.min.js"></script>
<script src="//twemoji.maxcdn.com/2/twemoji.min.js?11.0"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/xmlToJson.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jqueryCountTo.js"></script>
<script src="assets/js/main.js"></script>
<script>
$( document ).ready(function() {
    var str = document.getElementById("fulltexttwitter").innerHTML;
    var res = str.replace(/#[a-z0-9A-Záéíóú_]+|@[a-z0-9A-Záéíóú_]+/gi,'<span style="color: #22605c;">$&</span>').replace(/https:[a-z0-9A-Záéíóú_/.]+/gi,'<span style="color: #61adde;">$&</span>');
    document.getElementById("fulltexttwitter").innerHTML = res;
    twemoji.parse(document.body);
 });

</script>
</body>
</html>
