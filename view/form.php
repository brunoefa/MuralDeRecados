<?php 
    $titulo = "Deixe seu recado";
    $botao = "Voltar para o mural de recados";
    $url = "list.php";
    include 'meta.php';
    include 'cabecalho.php'; 
?>

    <div class="container marketing">

        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Qual o título do seu recado?">
                </div>
                <div class="form-group">
                    <label for="recado">Recado</label>
                    <textarea class="form-control" id="recado" placeholder="Deixe seu recado para o mundo" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" placeholder="Quem é você?">
                </div>
                <div class="btn-form">
                    <a href="#" >Cancelar</a>&nbsp;<button type="submit" class="btn-lg btn-success">Salvar</button>
                </div>
            </form>
        </div>
        
        <hr class="featurette-divider">
  
    </div><!-- /.container -->
    
<?php include 'rodape.php'; ?>