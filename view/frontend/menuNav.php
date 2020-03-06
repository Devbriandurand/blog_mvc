		
		<nav>
		    <h1><a id="title1" href="http://localhost/blog_mvc/">JEAN FORTEROCHE - ÉCRIVAIN</a></h1>
		    <span>
		        <ul>
					<li id="containerLiMenuNav"><a id="link1" href="index.php">Blog</a></li>

					<?php if(!isset($_SESSION['admin'])) : ?>
						<li id="containerLiMenuNav"><a id="link1" href="index.php?action=connexion">Connexion</a></li>
					<?php endif; ?>

					<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1 ) : ?>
						<li id="containerLiMenuNav"><a id="link1" href="index.php?action=administration">Administration</a></li>
						<li id="containerLiMenuNav"><a id="link1" href="index.php?action=deconnexion"><strong>Déconnexion</strong></a></li>
					<?php endif; ?>
					
					<?php if (isset($_SESSION['admin']) && $_SESSION['admin']  < 1 ) : ?>
						<li id="containerLiMenuNav"><a id="link1" href="index.php?action=profil">Profil</a></li>
						<li id="containerLiMenuNav""><a id="link1" href="index.php?action=deconnexion"><strong>Déconnexion</strong></a></li>
					<?php endif; ?>

					<li id="containerLiMenuNav"><a id="link1" href="contactView.php">Contact</a></li>
					
		        </ul>
		    </span>
		</nav>