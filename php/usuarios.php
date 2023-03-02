<html>

<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/layoutU.css" />
    <link rel="stylesheet" href="../css/body.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    
    </script>


    <script>
    function cadastro() {
        alert("CADASTRO REALIZADO");

    }
    </script>
</head>

<body>

    <section id="corpo">
        <nav id="menu">
            <ol>
                <li><a href="http://localhost/Eryka.gs/PHP/USERS_CADASTROS/cadastro_usuarios/html/index.html">Home</li>
                <br></a>
                <li><a href="http://localhost/Eryka.gs/PHP/USERS_CADASTROS/cadastro_usuarios/php/usuarios.php">Usuários
                </li></a><br>
                <li><a href="http://localhost/Eryka.gs/PHP/USERS_CADASTROS/cadastro_usuarios/phtml/cadastro.html">Cadastramento
                </li><br></a>
            </ol>


            <hgroup id="imagem">
                <IMG SRC="../imagens/asoec.jpg">
            </hgroup>
        </nav>
    </section>

    <aside>
        <hgroup id="informacoes">
            <h1>Usuários</h1>
        </hgroup>
        <br>
        </h4>
        </hgroup>
    </aside>
    </pre>
    </form>



    <?php 
    include('../phtml/conecta_mysql.inc.php'); // caminho do seu arquivo de conexão ao banco de dados //
    $sql = "SELECT * FROM cadastro"; 

   //resultado
   $res = $conexao->query($sql);

   //quantidade
   $qtd = $res->num_rows;

   if ($qtd > 0) {
    //Retornar todos os cadastro dentro da variavel res (resultado)


  
    print "<table id='ctnr'>";
        print "<thead>";
                print "<tr>";
                    print "<th scope='col'>".'Nome'; 
                    print "<th scope='col'>".'E-mail';
                    print "<th scope='col'>".'CPF';
                    print "<th scope='col'>".'Estado';
                    print "<th scope='col'>".'Endereço';
                    print "<th scope='col'>".'Número';
                    print "<th scope='col'>".'Cidade';
                    
                    
                print "</tr>";
            print "</thead>";
    while ($row = $res->fetch_object()) {
        
        print "<tr>";
            print "<td >".$row->nome;
            print "<td >".$row->email;
            print "<td >".$row->CPF;
            print "<td >".$row->estado;
            print "<td >".$row->endereco;
            print "<td >".$row->numero;
            print "<td >".$row->cidade;
            
           
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}


?>


</body>

</html>