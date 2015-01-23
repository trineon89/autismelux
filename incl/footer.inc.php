<footer id="footer">
	<div id="footerback">
		 <!-- Orange Section -->
			<ul>
				<div class="orangecontainer"><li><a href="page.php?page=actualites">Actualités</a></li>
					<article>
						<p class="oheader">Personalfeier 2013</p>
						<p>AutismeLuxembourg fête!</p>
						<footer><a href="page.php?page=actualites">lire la suite</a></footer>
					</article>
				</div>
				<div class="orangecontainer"><li><a href="page.php?page=agenda">Agenda</a></li>
				<article>
						<p class="agendaheader">nos prochains rendez-vous</p>
						<p>21. septembre - Maart</p>
							<p>Schlassmaart à Koerich vous invite à visiter.</p>
						<p>23. decembre - Fête</p>
							<p>Une grande fête au coeur du luxembourg</p>
						<footer><a href="page.php?page=agenda">voir tout l'agenda</a></footer>
					</article>
				</div>
				<div class="orangecontainer"><li><a href="page.php?page=media">Médias</a></li>
				<article>
						<p class="oheader">Kulturfabrik</p>
						<p>présentation de la Keramikfabrik à l'aide de la Kulturfabrik</p>
						<footer><a href="page.php?page=media">voir tous les médias</a></footer>
					</article>
				</div>
				<div class="orangecontainer"><li><a href="page.php?page=jobs">Jobs</a></li>
				<article>
						<p class="oheader">Jobs</p>
						<p>Restez informez pour toute offre d'emploi à partir de AutismeLuxembourg</p>
						<footer><a href="page.php?page=jobs">voir jobs</a></footer>
					</article>
				</div>
				<div class="orangecontainer"><li><a href="page.php?page=takeaway">Take away</a></li>
				<article>
						<p class="takeawayheader">Profitez de nôtre service Takeaway pour acheter nos produits à Beckerich!</p>
						<?php /* if Menu then show daily */
							require_once("functions.inc.php");
							if (daily_menu_exists())
							{
								echo "<p>Ajourd'hui, on vous propose:</p><p class=\"takeawayheader\" style=\"height:auto;padding-top:5px;\">".daily_menu()."</p>";
						/* else show menu link */
							} else {
								echo "<p>voyez nôtre menu de la semaine qu'on vous propose <a href=\"page.php?page=takeaway\">ici</a>!</p>";
							}
						?>
						<footer><a href="page.php?page=takeaway">voir takeaway</a></footer>
					</article>
				</div>
				<div class="orangecontainer"><li><a href="page.php?page=prodact">Produit actuelle</a></li>
				<article>
						<p class="oheader">Le produit actuelle</p>
						<p>Notre meilleur produit</p>
						<footer><a href="page.php?page=prodact">voir tous les nouveautés</a></footer>
					</article>
				</div>
			</ul>
		
	</div>
	</footer>