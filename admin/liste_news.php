<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Title -->
        <title>Projet GIT | Liste des articles </title>
        <?php include('incl/header.php') ?>
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Liste des articles</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Accueil</a></li>
                            <li><a href="#">News</a></li>
                            <li class="active">Liste des articles</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                   <div class="table-responsive">
                                   <a href="redaction_news.php" class="btn btn-info">Ajouter un article</a>
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Statut</th>
                                                <th>Rubrique</th>
                                                <th>Titre</th>
                                                <th>Date</th>
                                                <th>Modifier</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Publié</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Non publié</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Brouillon</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Publié</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <div class="cd-overlay"></div>
	
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/meteor.min.js"></script>
        <script src="assets/js/pages/table-data.js"></script>
        
    </body>
</html>