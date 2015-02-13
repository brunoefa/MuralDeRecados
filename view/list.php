<?php 
    $titulo = "Mural de recados";
    $botao = "Deixe seu recado agora";
    $url = "recado.php?action=criar";
    include '../view/meta.php';
    include '../view/cabecalho.php'; 
?>
    
    <?php foreach ($listaRecados as $recado): ?>

    <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading"><?php echo $recado->titulo; ?></span></h2>
          <p class="lead"><?php echo $recado->texto; ?></p>
          <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a> <?php echo $recado->likes; ?> - <?php echo $recado->autor; ?>
        </div>
      </div>
      
      <hr class="featurette-divider">  
    <?php endforeach ?>
      
    </div><!-- /.container -->
    
<?php include '../view/rodape.php'; ?>