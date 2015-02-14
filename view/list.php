<?php 
    $titulo = "Mural de recados";
    $botao = "Deixe seu recado agora";
    $url = "recado.php?action=criar";
    include '../view/meta.php';
    include '../view/cabecalho.php'; 
?>
    
    <?php foreach ($listaRecados as $r): ?>

    <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading"><?php echo $r->titulo; ?></span></h2>
          <p class="lead"><?php echo $r->texto; ?></p>
          <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a> <?php echo $r->likes; ?> - <?php echo $r->autor; ?>
        </div>
      </div>
      
      <hr class="featurette-divider">  
    <?php endforeach ?>
      
    </div><!-- /.container -->
    
<?php include '../view/rodape.php'; ?>