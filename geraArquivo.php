<?php 

$bl_01_01 = $_POST['bl_01_01'];
$bl_01_02 = $_POST['bl_01_02'];
$bl_01_03 = $_POST['bl_01_03'];

$bl_02_01 = $_POST['bl_02_01'];
$bl_02_02 = $_POST['bl_02_02'];
$bl_02_03 = $_POST['bl_02_03'];

$bl_03_01 = $_POST['bl_03_01'];
$bl_03_02 = $_POST['bl_03_02'];
$bl_03_03 = $_POST['bl_03_03'];

$xxx1 = $_POST['xxx1'];
$xxx2 = $_POST['xxx2'];
$xxx3 = $_POST['xxx3'];

$bl_ipv6 = $_POST['bl_ipv6'];

$dominio = $_POST['dominio'];

$ns13 = $_POST['ns1-3'];
$ns14 = $_POST['ns1-4'];

$ns23 = $_POST['ns2-3'];
$ns24 = $_POST['ns2-4'];

//Pega os dados do arquivo
$dataFile = file_get_contents("named.conf.local_default.txt","r");

//Altera os dados do arquivo (agora com as novas variáveis)

$dataFile = str_replace("{{bl_01_01}}",$bl_01_01, $dataFile);
$dataFile = str_replace("{{bl_01_02}}",$bl_01_02, $dataFile);
$dataFile = str_replace("{{bl_01_03}}",$bl_01_03, $dataFile);

$dataFile = str_replace("{{bl_02_01}}",$bl_02_01, $dataFile);
$dataFile = str_replace("{{bl_02_02}}",$bl_02_02, $dataFile);
$dataFile = str_replace("{{bl_02_03}}",$bl_02_03, $dataFile);

$dataFile = str_replace("{{bl_03_01}}",$bl_03_01, $dataFile);
$dataFile = str_replace("{{bl_03_02}}",$bl_03_02, $dataFile);
$dataFile = str_replace("{{bl_03_03}}",$bl_03_03, $dataFile);

$dataFile = str_replace("{{xxx1}}",$xxx1, $dataFile);
$dataFile = str_replace("{{xxx2}}",$xxx2, $dataFile);
$dataFile = str_replace("{{xxx3}}",$xxx3, $dataFile);

$dataFile = str_replace("{{bl_ipv6}}",$bl_ipv6, $dataFile);

$dataFile = str_replace("{{dominio}}",$dominio, $dataFile);
//Cria um novo arquivo
$novoArquivo = fopen("named.conf.local", "w+");

/////////////////////////////////////////////////////////////////////////////////
//Pega os dados do arquivo
$dataFile2 = file_get_contents("dominio.net.br.zone_default.txt","r");

$dataFile2 = str_replace("{{bl_ipv6}}",$bl_ipv6, $dataFile2);

$dataFile2 = str_replace("{{bl_01_01}}",$bl_01_01, $dataFile2);
$dataFile2 = str_replace("{{bl_01_02}}",$bl_01_02, $dataFile2);
$dataFile2 = str_replace("{{ns13}}",$ns13, $dataFile2);
$dataFile2 = str_replace("{{ns14}}",$ns14, $dataFile2);
$dataFile2 = str_replace("{{ns23}}",$ns23, $dataFile2);
$dataFile2 = str_replace("{{ns24}}",$ns24, $dataFile2);

$dataFile2 = str_replace("{{dominio}}",$dominio, $dataFile2);

//Cria um novo arquivo
$novoArquivo2 = fopen(''.$dominio.'.zone', 'w+');

///////////////////////////////////////////////////////////////////////////////

if($novoArquivo){
    //Se o arquivo realmente foi criado, é escrito o novo script nele
    if(fwrite($novoArquivo, $dataFile)){
        print_r("Arquivo criado com sucesso");
    }else{
        print_r("Não consegui criar o arquivo");
    }
}

if($novoArquivo2){
    //Se o arquivo realmente foi criado, é escrito o novo script nele
    if(fwrite($novoArquivo2, $dataFile2)){
        print_r("Arquivo2 criado com sucesso");
    }else{
        print_r("Não consegui criar o arquivo2");
    }
}

?>