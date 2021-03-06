<?php 
    $titulo = "Mural de recados";
    $botao = "Deixe seu recado agora";
    $url = "recado.php?action=criar";
    include '../view/meta.php';
    include '../view/cabecalho.php'; 
?>

<div class="container marketing">
    
    <?php foreach ($listaRecados as $r): ?>
      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading"><?php echo $r->titulo; ?></span></h2>
          <p class="lead"><?php echo $r->texto; ?></p>
          <a href="recado.php?action=excluir&id=<?php echo $r->id; ?>"><span class="glyphicon glyphicon-trash"></span></a>
          <a href="recado.php?action=curtir&id=<?php echo $r->id; ?>"><span class="glyphicon glyphicon-thumbs-up"></span></a> <?php echo $r->likes; ?> - <?php echo $r->autor; ?>
        </div>
      </div>
      
      <hr class="featurette-divider">  
    <?php endforeach ?>
      
    </div><!-- /.container -->
    
<?php include '../view/rodape.php'; ?>