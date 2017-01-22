<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Title -->
        <title>Projet GIT</title>
        
<?php include('incl/header.php') ?>

            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Rédaction d'un article</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Accueil</a></li>
                            <li><a href="liste_news.php">Liste des articles</a></li>
                            <li class="active">Rédaction d'un article</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form action="liste_news.php" method="POST" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Titre de l'article</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default" name="titre" placeholder="Titre de l'article" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Rubrique</label>
                                            <div class="col-sm-10">
                                                <select class="form-control m-b-sm" name="rubrique">
                                                    <option value="Actualité">Actualité</option>
                                                    <option value="Interviews">Interviews</option>
                                                    <option value="Dossiers">Dossiers</option>
                                                    <option value="Faits Divers">Faits Divers</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Date de publication</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control date-picker" name="date" value="">
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Heure de publication</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-append bootstrap-timepicker">
                                                    <input id="timepicker1" class="form-control" type="text" name="time">
                                                    <span class="input-group-addon add-on"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                            </div>
                                        </div>                                     
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" placeholder="Upload de l'image de une" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contenu de l'article</label>
                                            <div class="col-sm-10">
                                                <div class="summernote"></div>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="col-sm-10 control-label"></label>
                                            <div class="col-sm-2">
                                            <button class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
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
        <script src="assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/js/meteor.min.js"></script>
        <script src="assets/js/pages/form-elements.js"></script>
        
    </body>
</html>