		
		<nav>
		    <h1><a id="title1" href="http://localhost/blog_mvc/">JEAN FORTEROCHE - ÉCRIVAIN</a></h1>
		    <span id="spanMenuNav">
		        <ul>
					<?php if (isset($_SESSION['admin'])  && $_SESSION['admin'] ==1 ) : ?>
					<li><a id="link1" href="index.php?action=administration">Administration</a></li>
					<?php endif; ?>
					
					<li><a id="link1" href="contactView.php">Contact</a></li>
					<li><a id="link1" href="index.php">Blog</a></li>

					<?php if(!isset($_SESSION['pseudo'])) : ?>
					<li><a id="link1" href="index.php?action=connexion">Connexion</a></li>
					<?php endif; ?>
		        </ul>
		    </span>
		</nav>