<?php
session_start();
session_destroy();
unset($_SESSION['login']);
unset($_SESSION['senha']);
unset($_SESSION['tipo_usuario']);

include "includeHeader.php";
?>

<article>
	<header>
		<h1>Ianus</h1>
		<p>If history is to change, let it change. If the world is to be destroyed, so be it.<br/> If my fate is to die, I must simply laugh.<br/>
			Because of my knowledge I was able to convince the queen I was a mighty oracle, but no history book could have prepared me for what happened here.</p>
		</header>
		<section>
			<h2>Belthasar</h2>
			<p>All life begins with Nu and ends with Nu... This is the truth! This is my belief. At least for now...</p>
		</section>
		<section>
			<h2>Sora</h2>
			<p>"A scattered dream that's like a far-off memory. A far-off memory that's like a scattered dream. I wanna line the pieces up. Yours... and mine."</p>
		</section>
	</article>

<?php
include "includeLogin.php";
include "includeFooter.php";
?>