
{navdata}
    <li id="{id}"><a href="/{link}">{name}</a></li>
{/navdata}

<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Role<b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="/roles/actor/guest">Guest</a></li>
        <li><a href="/roles/actor/worker">Worker</a></li>
		<li><a href="/roles/actor/supervisor">Supervisor</a></li>
		<li><a href="/roles/actor/boss">Boss</a></li>
    </ul>
</li>

<script type="text/javascript">
$("#" + window.location.pathname.substring(1,3) + "li").attr("class", "active");
</script>