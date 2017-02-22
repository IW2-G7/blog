<nav class="light-green">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=dashboard" class="brand-logo">Le Meilleur de l'Actualité</a>
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                            <li class="<?php echo ($page=="write")?"active" : ""; ?>"><a href="index.php?page=write"><i class="material-icons">edit</i></a></li>
                        <li><a href="../index.php?page=home">Quitter</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-menu">
                        <li class="<?php echo ($page=="dashboard")?"active" : ""; ?>"><a href="index.php?page=dashboard">Tableau de bord</a></li>
                                <li class="<?php echo ($page=="write")?"active" : ""; ?>"><a href="index.php?page=write">Publier un article</a></li>
                        <li><a href="../index.php?page=home">Quitter</a></li>
                    </ul>
        </div>
    </div>
</nav>
