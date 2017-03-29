
<ul class='nav nav-pills'>
    <!--{nav}
    <li><a href="{link}">{page}</a></li>
    {/nav}-->
    <li id="holi"><a href="welcome">Home</a></li>
    <li id="pali"><a href="parts">Parts</a></li>
    <li id="asli"><a href="assembly">Assemble</a></li>
    <li id="hili"><a href="history">History</a></li>
    <li id="abli"><a href="about">About</a></li>
</ul>

<script type="text/javascript">
$("#" + window.location.pathname.substring(1,3) + "li").attr("class", "active");
</script>