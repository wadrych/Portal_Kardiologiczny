<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="UTF-8">
	<title>Protal kardiologiczny</title>

	<meta name="descricption" content="Portal ułatwiający kontakt pomiędzy lekarzami, a chirurgami."/>
	<meta name="keywords" content="lekarze, kariochirurg, kardiolog, pacjent, choroba, serce, medycyna">
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" type = "text/css"/>

	<link rel="stylesheet" href="style_admi.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="admin_patient_data.js"></script>

</head> 
<body>
	
	<div>
		<ul id="test">
			<li><a href="administrator_main.php" id="active">Główna</a></li>
			<li><a href="#">Kardiolodzy</a></li>
			<li><a href="#">Pacjenci</a></li>
			<li style="float:right"><a href="#">Wyloguj</a></li>
		</ul>
	</div>

	<div class="main">

		<h3>Pacjenci zaakceptowani</h1>

		<table id="patient">
			<thead>
				<tr>
					<th>
						<div class="btn" data-panelid="1">
							<table>
								<tr>
									<th><b>Imię: </b>Jan</th> 
									<th><b>Nazwisko: </b>Kowalski</th>
									<th><b>Status: </b> <b style="color: green;">Zaakceptowano</b></th>
								</tr>
							</table>
						</div>

						<div class="data" id="data1">
							<table>
								<thead>
									<tr>
										<th><b>Data urodzenia:</b></th>
										<th>12.06.1978</th>
									</tr>
									<tr>
										<th><b>Adres:</b></th>
										<th>ul.Wiejska 13 83-000 Gdańsk</th>
									</tr>
									<tr>
										<th><b>Ropoznanie:</b></th>
										<th>Chory ma niesprawne serce.</th>
									</tr>
									<tr>
										<th colspan="2">TU BĘDZIE MOŻNA POBRAĆ PLIK</th>
									</tr>
									<tr>
										<th colspan="2">
											<b>Status:</b>

											<form action="change_status.php" method="post">
												<input type="radio" name="status" value="Oczekiwanie na zaakceptowanie">Oczekiwanie na zaakceptowanie
												<input type="radio" name="status" value="Zaakceptowano">Zaakceptowano
												<input type="radio" name="status" value="Badania">Badania
												<input type="radio" name="status" value="Oczekiwanie na operacje">Oczekiwanie na operacje <br>
												<input type="submit" value="Zmień">
											</form>
										</th>
									</tr>
								</thead>
							</table>
						</div>
					</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th>
						<div class="btn" data-panelid="2">
							<table>
								<tr>
									<th><b>Imię: </b>Jan</th> 
									<th><b>Nazwisko: </b>Kowalski</th>
									<th><b>Status: </b> <b style="color: orange;">Oczekiwanie na zaakceptowanie</b></th>
								</tr>
							</table>
						</div>

						<div class="data" id="data2">
							<table>
								<thead>
									<tr>
										<th><b>Data urodzenia:</b></th>
										<th>12.06.1978</th>
									</tr>
									<tr>
										<th><b>Adres:</b></th>
										<th>ul.Wiejska 13 83-000 Gdańsk</th>
									</tr>
									<tr>
										<th><b>Ropoznanie:</b></th>
										<th>Chory ma niesprawne serce.</th>
									</tr>
									<tr>
										<th colspan="2">TU BĘDZIE MOŻNA POBRAĆ PLIK</th>
									</tr>
									<tr>
										<th colspan="2">
											<b>Status:</b>

											<form action="change_status.php" method="post">
												<input type="radio" name="status" value="Oczekiwanie na zaakceptowanie">Oczekiwanie na zaakceptowanie
												<input type="radio" name="status" value="Zaakceptowano">Zaakceptowano
												<input type="radio" name="status" value="Badania">Badania
												<input type="radio" name="status" value="Oczekiwanie na operacje">Oczekiwanie na operacje <br>
												<input type="submit" value="Zmień">
											</form>
										</th>
									</tr>
								</thead>
							</table>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	
</body>
</html>
