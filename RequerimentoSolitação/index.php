

		
<!DOCTYPE html>
<html>
<head>
	<title>Requerimento</title>
	<title>Requeriemnto</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<style> 
		legend{
			box-shadow:0 1px 15px #666;
			-noz-box-shadow:0 1px 16px #666;
			-webkit-box-shadow:0 1px 16px #666;
			padding: 2px;
			font: bold;15px "Trebuchet Ms",Arial;
		}
		
		label span{
			font: bold:12px "Trebuchet Ms",Arial;
		}

		

		table{page-break-inside: auto; width: 100%; margin: 20px;}
		tr{
			page-break-inside: avoid;
			page-break-after: auto
		}
		thead{
			display: table-header-group;
		}
		{page-break-inside: auto; width: 100px; margin: 2px;}


</style>
</head>
<body>

	
		<strong>
		<img src="img/images" width="20%">
	   		<div style="text-align: right;"><b>GUIA DE REQUERIMENTO</b></div>
		<hr>

		<fieldset >
			<legend>Informações Pessoais</legend>
			<label>
				
			<form enctype="multipart/form-data" action="dados.php" method="POST">
				<span>REQUERENTE:</span>
				<input type="text" name="nome" required ><br>

			</label>
		
				<label>
					<span>Nº MATRICULA:</span>
				 <input type="text" name="matricula" required><br>

				</label>

				<label>

					<span>Data Nascimento:</span>
					 <input type="date" name="nascimento" required><br>

				</label>

				<label>

					<span>Naturalidade:</span>
				 <input type="text" name="naturalidade" required><br>

				</label>

				<label > 

					<span>Mãe:</span>
					<input type="text" name="mae" required><br>

				</label>

				<label > 

					<span>Pai :</span>
					<input type="text" name="pai" required><br>

				</label>
				
	</label>
				<span>Curso</span>
				<input type="tex" name="curso" required="">
				<br>
				<span>Periodo:</span>
						
				<select name="periodo" zize=1 required  >
					<option >Manhã
					<option>Tarde
					<option>Noite
				</select>
				<br>
				
				<label >
					<span>Telefone 1:</span>
					<input type="tel"name="telefone" required><br>
				 </label>
				 <label >
					<span>Telefone 2:</span>
					<input type="tel"name="fone" placeholder="Opcional" ><br>
				 </label>
				<label > 
					<span> E-mail:</span>
					<input type="email" name="email" required placeholder="Digite seu E-mail"><br>
				</label>
			
			
		</fieldset>
		
		<!--<fieldset>-->

			<div >
			<fieldset >
			<legend>Assinale</legend>
		
		<form action="dados.php" method="POST">		
			<table align-self:  >
				
				<thead>
			<tr>
				<td>
					01 - 2º Via (especificar) | CAA <input type="radio" name="cadastro" value="Via"  >
				</td>
				<td>
					12 - Trancamento de Disciplina (especificar) <input type="radio" name="cadastro" value="trancamento_Disciplina" >
				</td>
			</tr>
			
			<tr>
			
				</td>		
			</tr>
		
			
				<tr>
					<td>
						02 - Aproveitamento de Disciplina | Coord Curso: <br><h>(anexar Histórico Escolar e Programa</h4>
da Disciplina) <input type="radio" name="cadastro" value="aproveitamento_Disciplina">	
						</td>
						<td>
							13- Trancamento de Matrícula (anexar documentação comprobatória) |Coord Pedg <input type="radio" name="cadastro">
						</td>
					
					<tr>
					<td>
						03 - Matrícula fora do prazo (justificar) | CCA <input type="radio" name="cadastro"><br>
					</td>
					<td>
						14 - Transferência para outra instituição | CCA <input type="radio" name="cadastro"><br>
					</td>
				</tr>
				<tr>
					<td>
						04 - Cancelamento da Matrícula | CCA <input type="radio" name="cadastro">
					</td>
					<td>
						15 - Validação de Conhecimento (especificar) | Coord Cursos <input type="radio" name="cadastro"><br>
					</td>
				</tr>
				<tr>
					<td>
						05 - Colação de Grau / Colação Especial (justificar) | CCA <input type="radio" name="cadastro">
					</td>
					<td>
						16 - Reajuste | CAA <input type="radio" name="cadastro"><br>
					</td>
				</tr>
				<tr>
					<td>
						06 - Declaração (especificar) | CCA <input type="radio" name="cadastro">
					</td>
					<td>
						17 - Recorreção de Prova | Coord. Curso <input type="radio" name="cadastro">
					</td>
				</tr>
				<tr>
					<td>
						07 - Diploma (especificar) | CCA <input type="radio" name="cadastro">
					</td>
					<td>
						18 - AUXÍLIO - Transporte | Serviço Social <input type="radio" name="cadastro">
					</td>
				</tr>
				<tr>
					<td>
						08 - Histórico Escolar | CCA <input type="radio" name="cadastro"><br>
					</td>
					<td>
						19 - AUXÍLIO - Moradia | Serviço Social <input type="radio" name="cadastro"><br>
					</td>
				</tr>

				<tr>
					<td>
						09 - Reabertura de Matrícula | CCA <input type="radio" name="cadastro">
					</td>
					<td>
						20 - AUXÍLIO - Óculos | Serviço Social <input type="radio" name="cadastro">
					</td>
				</tr>
				<tr>
					<td>
						
						10 - Segunda Chamada (anexar justificativa e especificar) | coord Curso <input type="radio" name="cadastro">
					</td>
					<td>
						21 - AUXÍLIO - Pais e Mães |Serviço Social <input type="radio" name="cadastro">
					</td>
				</tr>

				<tr>
					<td>
						11 - Reingresso | CCA <input type="radio" name="cadastro"><br>
					</td>
					<td>
						22 - Outros (especificar) |  <input type="radio" name="cadastro"><br>
					</td>
				</tr>

			</tr>	

			</thead>
				
			</table>

		<br>
		</fieldset><br>

		Anexo:
	 <input type="file" name="arquivos"/>
	 <br><br>
		
		ESPECIFICAR: <input type="text" name="especificar" size="155" maxlength="155" height="35"><br>
		JUSTIFICAR:   <input type="text" name="justificar" size="155" maxlength="157" height="40" ><br><br>
		<center><b>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</b><br><br></center>
	<center>
			
	 	REQUERENTE: <input type="text" name="requerente" size="30" required="" >
	 	FUNCIONÁRIO: <input type="text" name="funcionario" size="30" required="">
	 	<br><br>
	 	<label>

					<span>CEDRO-CE </span>
					 <input type="date" name="data" required><br>

				</label>

	 		<br>
	 	</center>
	<fieldset>
			<center>	

		<span>VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</span>
				<br>
				<strong>Escolha à opção :</strong> 
				<select name="biblioteca" zize=1  required>
					<option>O requerente NÃO deve chave de armário
					<option>O requerente deve chave do armário
				</select><br><br>
				<span>Responsavel :</span>
				<input type="text" name="coordenador" required><br>

			<br> <br>
		
				<span>VISTO (BIBLIOTECA)</span>
				<br>
					<strong>Escolha à opção :</strong>
		<select name="biblioteca" zize=1  required checked>
					<option>O requerente NÃO deve livros na biblioteca
					<option>O requerente deve livros na biblioteca:
				</select><br><br>
				<span>Responsavel</span> 
				<input type="text" name="func" required><br>
			<br> 
			</center>
		 
	
		

	 </fieldset>
<br>
	 	
	<!--Anexo: <form action="<php echo $_SERVER['PHP_SELF'];" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivos"><br>-->
	<br>
	
	 <input type="submit" value="Enviar"/>
	</form>


		<center>- Todos os Direitos Reservados-</center>
	
</body>
</html>