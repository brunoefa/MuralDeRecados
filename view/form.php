<?php 
    $titulo = "Deixe seu recado";
    $botao = "Voltar para o mural de recados";
    $url = "recado.php?action=listar";
    include '../view/meta.php';
    include '../view/cabecalho.php'; 
?>
    <div class="container marketing">

        <div class="col-md-12">
            <form action="recado.php" method="post">
                <input type="hidden" name="action" id="action" value="salvar">
                <input type="hidden" name="id" id="id" value="">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Qual o título do seu recado?">
                </div>
                <div class="form-group">
                    <label for="recado">Recado</label>
                    <textarea class="form-control" name="texto" id="texto" placeholder="Deixe seu recado para o mundo" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor" class="form-control" id="autor" placeholder="Quem é você?">
                </div>
                <div class="btn-form">
                    <a href="#" >Cancelar</a>&nbsp;<button type="submit" class="btn-lg btn-success">Salvar</button>
                </div>
            </form>
        </div>
        
        <hr class="featurette-divider">
  
    </div><!-- /.container -->
    
<?php include '../view/rodape.php'; ?>