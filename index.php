<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.terabitconsultoria.com/imagens/icon-terabit.png" />
</head>
<body>
    <center><a href="https://www.terabitconsultoria.com/" target="_blank"><img src="https://www.terabitconsultoria.com/imagens/logo-terabit.png" alt="Terabit Consultoria"></a>
    <center><h2>Bind Script Generator v1.0</h2>        
    <title>BSG v1.0</title>    
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <div class="content">
        <form action="geraArquivo.php" method="POST">

             <div class="dominioVariavel">
                <label> Domínio </label>                
                <input type="text" placeholder='  sem "www"' name="dominio" size="42">               
            </div><br/>
			
            <div class="ns1Variavel">
                <label> NS1 </label>
				<label>xxx.xxx.</label>
                <input type="text" name="ns1-3" size="5">
                <input type="text" name="ns1-4" size="5">
                <label>.</label>				

            </div><br/>			
			
            <div class="ns2Variavel">
                <label> NS2 </label>
				<label>xxx.xxx.</label>
                <input type="text" name="ns2-3" size="5">
                <input type="text" name="ns2-4" size="5">
                <label>.</label>				

            </div><br/>	

            <div class="primeiraVariavel">
                <label> Bloco /24 - 01 </label>
                <input type="text" name="bl_01_01" size="5">          
                <label> . </label>
                <input type="text" name="bl_01_02" size="5">             
                <label> . </label>
                <input type="text" name="bl_01_03" size="5">             
                <label> .0/24 </label>
            </div><br/>

            <div class="segundaVariavel">
                <label> Bloco /24 - 02 </label>
                <input type="text" name="bl_02_01" size="5">          
                <label> . </label>
                <input type="text" name="bl_02_02" size="5">             
                <label> . </label>
                <input type="text" name="bl_02_03" size="5">             
                <label> .0/24 </label>
            </div><br/>

            <div class="terceiraVariavel">                
                <label> Bloco /24 - 03 </label>
                <input type="text" name="bl_03_01" size="5">          
                <label> . </label>
                <input type="text" name="bl_03_02" size="5">             
                <label> . </label>
                <input type="text" name="bl_03_03" size="5">             
                <label> .0/24 </label>
            </div><br/>

            <div class="quartaVariavel">
                <label> Bloco /24 - 04 </label>
                <input type="text" name="xxx1" size="5">          
                <label> . </label>
                <input type="text" name="xxx2" size="5">             
                <label> . </label>
                <input type="text" name="xxx3" size="5">             
                <label> .0/24 </label>
            </div><br/>

            <div class="quintaVariavel">
                <label> Bloco IPv6/32 </label>
                <label><b>2804: </label></b>
                <input type="text" name="bl_ipv6" size="5">                 
                <label> ::/32 </label>
            </div><br/>

            <div class="dnsVariavel">
                <label> Registro </label>
                <input type="text" size="5">          
                <label> Tipo </label>
                     <select id="dns">
                        <option name="A" value="tipoA">A</option>
                        <option name="CNAME" value="cname">CNAME</option>
                        <option name="TXT" value="txt">TXT</option>
                        <option name="MX" value="mx">MX</option>
                      </select>                            
                <label> Dados </label>
                <input type="text" size="10">             
                <label>  </label>
            </div><br/>

            <div class="dnsVariavel">
                <label> Registro </label>
                <input type="text" size="5">          
                <label> Tipo </label>
                     <select id="dns">
                        <option name="A" value="tipoA">A</option>
                        <option name="CNAME" value="cname">CNAME</option>
                        <option name="TXT" value="txt">TXT</option>
                        <option name="MX" value="mx">MX</option>
                      </select>                            
                <label> Dados </label>
                <input type="text" size="10">             
                <label>  </label>
            </div><br/>

            <div class="dnsVariavel">
                <label> Registro </label>
                <input type="text" size="5">          
                <label> Tipo </label>
                     <select id="dns">
                        <option name="A" value="tipoA">A</option>
                        <option name="CNAME" value="cname">CNAME</option>
                        <option name="TXT" value="txt">TXT</option>
                        <option name="MX" value="mx">MX</option>
                      </select>                            
                <label> Dados </label>
                <input type="text" size="10">             
                <label>  </label>
            </div><br/>
            <button type="submit"> Enviar </button>
        </form> 
    </div>
</body>
</html>