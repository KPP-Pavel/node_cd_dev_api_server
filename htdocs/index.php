<?php
// print_r(json_decode('[{"id":1,"name":"hello"},{"id":2,"name":"hello2"}]'));
error_reporting(E_ERROR | E_PARSE);
// echo "<PRE>";
// 	print_r(getallheaders()['Content-Type']);
// echo "</PRE>";
// die; 

if (getallheaders()['content-type'] == 'application/json;charset=UTF-8') {
	$_POST = json_decode(file_get_contents('php://input'), true);
}
// echo '<PRE>';
// print_r(getallheaders()) ;
// echo '</PRE>';
// die;
////////////////////////////
// $_POST = json_decode(file_get_contents('php://input'), true);

if ($_POST['getListClients']) {
	echo json_encode(
		[
			['title' => 'The Shawshank Redemption', 'gid' => 1994],
			['title' => 'The Godfather', 'gid' => 1972],
			['title' => 'The Godfather: Part II', 'gid' => 1974],
			['title' => 'The Dark Knight', 'gid' => 2008],
			['title' => '12 Angry Men', 'gid' => 1957],
			['title' => "Schindler's List", 'gid' => 1993],
			['title' => 'Pulp Fiction', 'gid' => 1994],
			['title' => 'The Lord of the Rings: The Return of the King', 'gid' => 2003],
			['title' => 'The Good, the Bad and the Ugly', 'gid' => 1966],
			['title' => 'Fight Club', 'gid' => 1999],
			['title' => 'The Lord of the Rings: The Fellowship of the Ring', 'gid' => 2001],
			['title' => 'Star Wars: Episode V - The Empire Strikes Back', 'gid' => 1980],
			['title' => 'Forrest Gump', 'gid' => 1994],
			['title' => 'Inception', 'gid' => 2010],
			['title' => 'The Lord of the Rings: The Two Towers', 'gid' => 2002],
			['title' => "One Flew Over the Cuckoo's Nest", 'gid' => 1975],
			['title' => 'Goodfellas', 'gid' => 1990],
			['title' => 'The Matrix', 'gid' => 1999],
			['title' => 'Seven Samurai', 'gid' => 1954],
			['title' => 'Star Wars: Episode IV - A New Hope', 'gid' => 1977],
			['title' => 'City of God', 'gid' => 2002],
			['title' => 'Se7en', 'gid' => 1995],
			['title' => 'The Silence of the Lambs', 'gid' => 1991],
			['title' => "It's a Wonderful Life", 'gid' => 1946],
			['title' => 'Life Is Beautiful', 'gid' => 1997],
			['title' => 'The Usual Suspects', 'gid' => 1995],
			['title' => 'L??on: The Professional', 'gid' => 1994],
			['title' => 'Spirited Away', 'gid' => 2001],
			['title' => 'Saving Private Ryan', 'gid' => 1998],
			['title' => 'Once Upon a Time in the West', 'gid' => 1968],
			['title' => 'American History X', 'gid' => 1998],
			['title' => 'Interstellar', 'gid' => 2014],
			['title' => 'Casablanca', 'gid' => 1942],
			['title' => 'City Lights', 'gid' => 1931],
			['title' => 'Psycho', 'gid' => 1960],
			['title' => 'The Green Mile', 'gid' => 1999],
			['title' => 'The Intouchables', 'gid' => 2011],
			['title' => 'Modern Times', 'gid' => 1936],
			['title' => 'Raiders of the Lost Ark', 'gid' => 1981],
			['title' => 'Rear Window', 'gid' => 1954],
			['title' => 'The Pianist', 'gid' => 2002],
			['title' => 'The Departed', 'gid' => 2006],
			['title' => 'Terminator 2: Judgment Day', 'gid' => 1991],
			['title' => 'Back to the Future', 'gid' => 1985],
			['title' => 'Whiplash', 'gid' => 2014],
			['title' => 'Gladiator', 'gid' => 2000],
			['title' => 'Memento', 'gid' => 2000],
			['title' => 'The Prestige', 'gid' => 2006],
			['title' => 'The Lion King', 'gid' => 1994],
			['title' => 'Apocalypse Now', 'gid' => 1979],
			['title' => 'Alien', 'gid' => 1979],
			['title' => 'Sunset Boulevard', 'gid' => 1950],
			['title' => 'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 'gid' => 1964],
			['title' => 'The Great Dictator', 'gid' => 1940],
			['title' => 'Cinema Paradiso', 'gid' => 1988],
			['title' => 'The Lives of Others', 'gid' => 2006],
			['title' => 'Grave of the Fireflies', 'gid' => 1988],
			['title' => 'Paths of Glory', 'gid' => 1957],
			['title' => 'Django Unchained', 'gid' => 2012],
			['title' => 'The Shining', 'gid' => 1980],
			['title' => 'WALL??E', 'gid' => 2008],
			['title' => 'American Beauty', 'gid' => 1999],
			['title' => 'The Dark Knight Rises', 'gid' => 2012],
			['title' => 'Princess Mononoke', 'gid' => 1997],
			['title' => 'Aliens', 'gid' => 1986],
			['title' => 'Oldboy', 'gid' => 2003],
			['title' => 'Once Upon a Time in America', 'gid' => 1984],
			['title' => 'Witness for the Prosecution', 'gid' => 1957],
			['title' => 'Das Boot', 'gid' => 1981],
			['title' => 'Citizen Kane', 'gid' => 1941],
			['title' => 'North by Northwest', 'gid' => 1959],
			['title' => 'Vertigo', 'gid' => 1958],
			['title' => 'Star Wars: Episode VI - Return of the Jedi', 'gid' => 1983],
			['title' => 'Reservoir Dogs', 'gid' => 1992],
			['title' => 'Braveheart', 'gid' => 1995],
			['title' => 'M', 'gid' => 1931],
			['title' => 'Requiem for a Dream', 'gid' => 2000],
			['title' => 'Am??lie', 'gid' => 2001],
			['title' => 'A Clockwork Orange', 'gid' => 1971],
			['title' => 'Like Stars on Earth', 'gid' => 2007],
			['title' => 'Taxi Driver', 'gid' => 1976],
			['title' => 'Lawrence of Arabia', 'gid' => 1962],
			['title' => 'Double Indemnity', 'gid' => 1944],
			['title' => 'Eternal Sunshine of the Spotless Mind', 'gid' => 2004],
			['title' => 'Amadeus', 'gid' => 1984],
			['title' => 'To Kill a Mockingbird', 'gid' => 1962],
			['title' => 'Toy Story 3', 'gid' => 2010],
			['title' => 'Logan', 'gid' => 2017],
			['title' => 'Full Metal Jacket', 'gid' => 1987],
			['title' => 'Dangal', 'gid' => 2016],
			['title' => 'The Sting', 'gid' => 1973],
			['title' => '2001: A Space Odyssey', 'gid' => 1968],
			['title' => "Singin' in the Rain", 'gid' => 1952],
			['title' => 'Toy Story', 'gid' => 1995],
			['title' => 'Bicycle Thieves', 'gid' => 1948],
			['title' => 'The Kid', 'gid' => 1921],
			['title' => 'Inglourious Basterds', 'gid' => 2009],
			['title' => 'Snatch', 'gid' => 2000],
			['title' => '3 Idiots', 'gid' => 2009],
			['title' => 'Monty Python and the Holy Grail', 'gid' => 1975],
		]
	);

	die;
}
if ($_POST['getListMVP']) {
	echo json_encode(
		[
			['title' => 'The Shawshank Redemption MVP', 'id' => 1994],
			['title' => 'The Godfather MVP', 'id' => 1972],
			['title' => 'The Godfather: Part II MVP', 'id' => 1974],
			['title' => 'The Dark Knight MVP', 'id' => 2008],
			['title' => '12 Angry Men MVP', 'id' => 1957],
			['title' => "Schindler's List", 'id' => 1993],
			['title' => 'Pulp Fiction MVP', 'id' => 1994],
			['title' => 'The Lord of the Rings: The Return of the King MVP', 'id' => 2003],
			['title' => 'The Good, the Bad and the Ugly MVP', 'id' => 1966],
			['title' => 'Fight Club MVP', 'id' => 1999],
			['title' => 'The Lord of the Rings: The Fellowship of the Ring MVP', 'id' => 2001],
			['title' => 'Star Wars: Episode V - The Empire Strikes Back MVP', 'id' => 1980],
			['title' => 'Forrest Gump MVP', 'id' => 1994],
			['title' => 'Inception MVP', 'id' => 2010],
			['title' => 'The Lord of the Rings: The Two Towers MVP', 'id' => 2002],
			['title' => "One Flew Over the Cuckoo's Nest", 'id' => 1975],
			['title' => 'Goodfellas MVP', 'id' => 1990],
			['title' => 'The Matrix MVP', 'id' => 1999],
			['title' => 'Seven Samurai MVP', 'id' => 1954],
			['title' => 'Star Wars: Episode IV - A New Hope MVP', 'id' => 1977],
			['title' => 'City of God MVP', 'id' => 2002],
			['title' => 'Se7en MVP', 'id' => 1995],
			['title' => 'The Silence of the Lambs MVP', 'id' => 1991],
			['title' => "It's a Wonderful Life", 'id' => 1946],
			['title' => 'Life Is Beautiful MVP', 'id' => 1997],
			['title' => 'The Usual Suspects MVP', 'id' => 1995],
			['title' => 'L??on: The Professional MVP', 'id' => 1994],
			['title' => 'Spirited Away MVP', 'id' => 2001],
			['title' => 'Saving Private Ryan MVP', 'id' => 1998],
			['title' => 'Once Upon a Time in the West MVP', 'id' => 1968],
			['title' => 'American History X MVP', 'id' => 1998],
			['title' => 'Interstellar MVP', 'id' => 2014],
			['title' => 'Casablanca MVP', 'id' => 1942],
			['title' => 'City Lights MVP', 'id' => 1931],
			['title' => 'Psycho MVP', 'id' => 1960],
			['title' => 'The Green Mile MVP', 'id' => 1999],
			['title' => 'The Intouchables MVP', 'id' => 2011],
			['title' => 'Modern Times MVP', 'id' => 1936],
			['title' => 'Raiders of the Lost Ark MVP', 'id' => 1981],
			['title' => 'Rear Window MVP', 'id' => 1954],
			['title' => 'The Pianist MVP', 'id' => 2002],
			['title' => 'The Departed MVP', 'id' => 2006],
			['title' => 'Terminator 2: Judgment Day MVP', 'id' => 1991],
			['title' => 'Back to the Future MVP', 'id' => 1985],
			['title' => 'Whiplash MVP', 'id' => 2014],
			['title' => 'Gladiator MVP', 'id' => 2000],
			['title' => 'Memento MVP', 'id' => 2000],
			['title' => 'The Prestige MVP', 'id' => 2006],
			['title' => 'The Lion King MVP', 'id' => 1994],
			['title' => 'Apocalypse Now MVP', 'id' => 1979],
			['title' => 'Alien MVP', 'id' => 1979],
			['title' => 'Sunset Boulevard MVP', 'id' => 1950],
			['title' => 'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb MVP', 'id' => 1964],
			['title' => 'The Great Dictator MVP', 'id' => 1940],
			['title' => 'Cinema Paradiso MVP', 'id' => 1988],
			['title' => 'The Lives of Others MVP', 'id' => 2006],
			['title' => 'Grave of the Fireflies MVP', 'id' => 1988],
			['title' => 'Paths of Glory MVP', 'id' => 1957],
			['title' => 'Django Unchained MVP', 'id' => 2012],
			['title' => 'The Shining MVP', 'id' => 1980],
			['title' => 'WALL??E MVP', 'id' => 2008],
			['title' => 'American Beauty MVP', 'id' => 1999],
			['title' => 'The Dark Knight Rises MVP', 'id' => 2012],
			['title' => 'Princess Mononoke MVP', 'id' => 1997],
			['title' => 'Aliens MVP', 'id' => 1986],
			['title' => 'Oldboy MVP', 'id' => 2003],
			['title' => 'Once Upon a Time in America MVP', 'id' => 1984],
			['title' => 'Witness for the Prosecution MVP', 'id' => 1957],
			['title' => 'Das Boot MVP', 'id' => 1981],
			['title' => 'Citizen Kane MVP', 'id' => 1941],
			['title' => 'North by Northwest MVP', 'id' => 1959],
			['title' => 'Vertigo MVP', 'id' => 1958],
			['title' => 'Star Wars: Episode VI - Return of the Jedi MVP', 'id' => 1983],
			['title' => 'Reservoir Dogs MVP', 'id' => 1992],
			['title' => 'Braveheart MVP', 'id' => 1995],
			['title' => 'M MVP', 'id' => 1931],
			['title' => 'Requiem for a Dream MVP', 'id' => 2000],
			['title' => 'Am??lie MVP', 'id' => 2001],
			['title' => 'A Clockwork Orange MVP', 'id' => 1971],
			['title' => 'Like Stars on Earth MVP', 'id' => 2007],
			['title' => 'Taxi Driver MVP', 'id' => 1976],
			['title' => 'Lawrence of Arabia MVP', 'id' => 1962],
			['title' => 'Double Indemnity MVP', 'id' => 1944],
			['title' => 'Eternal Sunshine of the Spotless Mind MVP', 'id' => 2004],
			['title' => 'Amadeus MVP', 'id' => 1984],
			['title' => 'To Kill a Mockingbird MVP', 'id' => 1962],
			['title' => 'Toy Story 3 MVP', 'id' => 2010],
			['title' => 'Logan MVP', 'id' => 2017],
			['title' => 'Full Metal Jacket MVP', 'id' => 1987],
			['title' => 'Dangal MVP', 'id' => 2016],
			['title' => 'The Sting MVP', 'id' => 1973],
			['title' => '2001: A Space Odyssey MVP', 'id' => 1968],
			['title' => "Singin' in the Rain", 'id' => 1952],
			['title' => 'Toy Story MVP', 'id' => 1995],
			['title' => 'Bicycle Thieves MVP', 'id' => 1948],
			['title' => 'The Kid MVP', 'id' => 1921],
			['title' => 'Inglourious Basterds MVP', 'id' => 2009],
			['title' => 'Snatch MVP', 'id' => 2000],
			['title' => '3 Idiots MVP', 'id' => 2009],
			['title' => 'Monty Python and the Holy Grail MVP', 'id' => 1975],
		]
	);

	die;
}
if ($_POST['getListServices']) {
	echo json_encode(
		[
			['title' => "The Shawshank Redemption {$_POST['MVP']}", 'id' => 1994],
			['title' => "The Godfather {$_POST['MVP']}", 'id' => 1972],
			['title' => "The Godfather: Part II {$_POST['MVP']}", 'id' => 1974],
			['title' => "The Dark Knight {$_POST['MVP']}", 'id' => 2008],
			['title' => "12 Angry Men {$_POST['MVP']}", 'id' => 1957],
			['title' => "Schindler's List", 'id' => 1993],
			['title' => "Pulp Fiction {$_POST['MVP']}", 'id' => 1994],
			['title' => "The Lord of the Rings: The Return of the King {$_POST['MVP']}", 'id' => 2003],
			['title' => "The Good, the Bad and the Ugly {$_POST['MVP']}", 'id' => 1966],
			['title' => "Fight Club {$_POST['MVP']}", 'id' => 1999],
			['title' => "The Lord of the Rings: The Fellowship of the Ring {$_POST['MVP']}", 'id' => 2001]
		]
	);

	die;
}

if ($_POST['getManager']) {
	echo json_encode(
		[
			'mailManager' => ["{$_POST['idMVP']}@MVP.ru","{$_POST['idMVP']}2@MVP.ru"],
			'copyMailManager' => ["{$_POST['idService']}@Service.ru","{$_POST['idService']}2@Service.ru"]
		]
	);

	die;
}
if ($_POST['sendData']) {
	echo json_encode([
		'client'=>$_POST['client'],
		'newTasks'=>$_POST['newTasks'],
		'files'=>$_FILES
	]);
	// echo 'https://yandex.ru/';
	die;
}

////////////////////////

if ($_POST['sendClarify']) {
	echo $_POST['text'];
	echo $_POST['idTask'];

	die;
}

if ($_POST['getRights']) {
	echo true;
	die;
}
if ($_POST['getListTemplateDoc']) {
	$data = [
		[
			'id' => '1',
			'name' => 'template1'
		],
		[
			'id' => '2',
			'name' => 'template2'
		],
		[
			'id' => '3',
			'name' => 'template3'
		]
	];
	echo json_encode((array)$data);
	die;
}
if ($_POST['getManagerDO']) {
	echo "Manager DO GID({$_POST['gid']})";
	die;
}

if ($_POST['getuserslist']) {
	$data = [
		[
			'id' => '1',
			'name' => 'KPP'
		],
		[
			'id' => '2',
			'name' => 'TDI'
		],
		[
			'id' => '3',
			'name' => 'ZYY'
		]
	];
	echo json_encode((array)$data);
	die;
}

if ($_POST['senddata']) {
	//echo json_encode($_POST['data']);
	//echo json_encode($_FILES);
	echo 123;
	die;
}

if ($_POST['getListservicesByGid']) {
	$data = [
		[
			'id' => 1,
			'idDocument' => $_POST['gid'] . "_1",
			'parentId' => $_POST['gid'] . "_1",
			'codeService' => 'CBA.5_' . $_POST['typeService'],
			'numDoc' => '22/12364-??',
			'statusDoc' => '????????????????',
			'dateBegeen' => '01.01.2021',
			'dateEnd' => '31.12.2021'
		],
		[
			'id' => 2,
			'idDocument' => $_POST['gid'] . "_2",
			'parentId' => $_POST['gid'] . "_2",
			'codeService' => 'CBA.5',
			'numDoc' => '22/12364-??',
			'statusDoc' => '????????????????',
			'dateBegeen' => '01.01.2021',
			'dateEnd' => '31.12.2021'
		],
		[
			'id' => 3,
			'idDocument' => $_POST['gid'] . "_3",
			'parentId' => $_POST['gid'] . "_3",
			'codeService' => 'CBA.5',
			'numDoc' => '22/12364-??',
			'statusDoc' => '????????????????',
			'dateBegeen' => '01.01.2021',
			'dateEnd' => '31.12.2021'
		],
		[
			'id' => 4,
			'idDocument' => $_POST['gid'] . "_4",
			'parentId' => $_POST['gid'] . "_4",
			'codeService' => 'CBA.5',
			'numDoc' => '22/12364-??',
			'statusDoc' => '????????????????',
			'dateBegeen' => '01.01.2021',
			'dateEnd' => '31.12.2021'
		]
	];
	echo json_encode($data);
	die;
}

if ($_POST['getStatusUser']) {
	//echo 'Admin';
	//echo 'ManagerPP';
	echo 'ManagerCD';
	die;
}

if ($_POST['getTask']) {
	if ($_POST['idTask']) {
		$data = '{"idTask":321,"taskActualization": "1", "taskActualizationNumber": null,"statusTask":null,"TypeDoc":"1","Dep":"2","TypeService":"2","MainCP":[{"id":"2","name":"KPP2"}],"num_doc_parent":{"id":"","number":""},"PerActService":"2","DateStart":"2021-04-01","DateEnd":"2021-04-16","DateText":"","selectedServices":[{"id":"3","name":"CBA.4"},{"id":"2","name":"CBA.3"},{"id":"1","name":"CBA.2"}],"SubjectContract":"CBA.4, CBA.3, CBA.2","AdditionalConditional":"????????????, ?? ????????.","signerClient":"?????????????????? ???? ?????????????? ??????????????????????","ContactManagerGA":"???????????????? ???? ?????????????? ??????????????????????","ContactsCp":"???????????????? ???? ?????????????? ??????????????????","systemsClient":"?? ?????????? ???????????????? ?????????????????? ?????????????????? ???????????? ?????? ???????????????? ??????????","CommentCD":"?????????????????????? ????","boxServiceBool":"1","coExecutorBool":"1","worcClientAreaBool":"1","TransferAreaBool":"1","TransferToolsBool":"1","templateDoc":"","FileSU":[{"ref":"#","name":"CBA.2"},{"ref":"#","name":"CBA.3"}],"FilePrice":[],"fileListService":[],"FileExplanatoryNote":[],"FileApplication":[],"FileEdit":[],"FileUS":[],"FileOther":[],"fileScanContract":[],"aditionalFilesDO":[],"selectAddService":"3"}';
		echo $data;
		//echo json_encode($data);
		die;
	}
	echo null;
	die;
}
if ($_POST['getListTask']) {
	$data = [
		[
			'idtask' => 123,
			'dateTask' => '01.02.2020',
			'authorTask' => '???????????? ??.',
			'statusTask' => '???? ????????????????????????',
			'datelastiteration' => '',
			'idpk' => '',
			'managerDO' => '?????????????????? ??.',
			'department' => '??????',
			'typeContract' => '????',
			'typedoc' => '??????????????',
			'GID' => '16',
			'nameClient' => '????????',
			'subjectTask' => '????????????',
			'comment' => '??????'
		],
		[
			'idtask' => 124,
			'dateTask' => '01.02.2020',
			'authorTask' => '???????????? ??.',
			'statusTask' => '???? ????????????????????????',
			'datelastiteration' => '03.03.2021',
			'idpk' => '',
			'managerDO' => '?????????????????? ??.',
			'department' => '??????',
			'typeContract' => '????',
			'typedoc' => '??????????????',
			'GID' => '16',
			'nameClient' => '????????',
			'subjectTask' => '????????????',
			'comment' => '??????'
		],
		[
			'idtask' => 125,
			'dateTask' => '01.02.2020',
			'authorTask' => '???????????? ??.',
			'statusTask' => '???? ????????????????????????',
			'datelastiteration' => '',
			'idpk' => '',
			'managerDO' => '?????????????????? ??.',
			'department' => '??????',
			'typeContract' => '????',
			'typedoc' => '??????????????',
			'GID' => '16',
			'nameClient' => '????????',
			'subjectTask' => '????????????',
			'comment' => '??????'
		]
	];
	echo json_encode($data);
	die;
}
if ($_POST['getContracts']) {
	$gid = $_POST['GID'];
	$idTypeContract = $_POST['idTypeContract'];
	$data = [
		[
			'id' => 2021000123,
			'numberContract' => '22/12123-??',
			'dateContract' => '01.02.2021',
			'subject' => "gid:$gid, idTypeContract:$idTypeContract"
		],
		[
			'id' => 2021000124,
			'numberContract' => '22/12124-??',
			'dateContract' => '04.02.2021',
			'subject' => "gid:$gid, idTypeContract:$idTypeContract"
		],
		[
			'id' => 2021000125,
			'numberContract' => '22/12125-??',
			'dateContract' => '05.02.2021',
			'subject' => "gid:$gid, idTypeContract:$idTypeContract"
		],
		[
			'id' => 2021000126,
			'numberContract' => '22/12126-??',
			'dateContract' => '06.02.2021',
			'subject' => "gid:$gid, idTypeContract:$idTypeContract"
		],
		[
			'id' => 2021000127,
			'numberContract' => '22/12127-??',
			'dateContract' => '07.02.2021',
			'subject' => "gid:$gid, idTypeContract:$idTypeContract"
		],
		[
			'id' => 2021000128,
			'numberContract' => '22/12128-??',
			'dateContract' => '08.02.2021',
			'subject' => "gid:$gid, idTypeContract:$idTypeContract"
		]
	];
	echo json_encode($data);
	die;
}
if ($_POST['newService']) {
	$data = json_decode($_POST['newService']);
	$data->nameService = 'hello';
	echo json_encode($data);
	die;
}
if ($_POST['newClient']) {
	$data = json_decode($_POST['newClient']);
	$data->contects = 'hello';
	echo json_encode([$data]);
	die;
}
if ($_POST['getSY']) {
	$data = [
		['id' => 1, 'name' => 'hello????.xlsx', 'ref' => 'hello/hello/????.xlsx'],
		['id' => 2, 'name' => 'hello1????.xlsx', 'ref' => 'hello/hello/????1.xlsx'],
		['id' => 3, 'name' => 'hello2????.xlsx', 'ref' => 'hello/hello/????2.xlsx'],
		['id' => 4, 'name' => 'hello3????.xlsx', 'ref' => 'hello/hello/????3.xlsx']
	];

	echo json_encode([$data[$_POST['getSY']]]);
	die;
}

if ($_POST['getEOSZ']) {
	$data = [
		['id' => 1, 'name' => '2.1'],
		['id' => 2, 'name' => '2.2'],
		['id' => 3, 'name' => '2.3'],
		['id' => 4, 'name' => '2.4'],
		['id' => 5, 'name' => '2.5']
	];

	echo json_encode($data);
	die;
}


if ($_POST['getServices']) {
	$data = [
		['id' => 1, 'name' => 'CBA.2'],
		['id' => 2, 'name' => 'CBA.3'],
		['id' => 3, 'name' => 'CBA.4'],
		['id' => 4, 'name' => 'CBA.5'],
		['id' => 5, 'name' => 'CBA.6'],
		['id' => 6, 'name' => 'CBA.7'],
		['id' => 7, 'name' => 'CBA.8'],
		['id' => 8, 'name' => 'CBA.9'],
		['id' => 9, 'name' => 'CBA.10'],
		['id' => 10, 'name' => 'CBA.11']
	];

	if (!$_POST['name']) {
		echo json_encode($data);
		die;
	}
	if ($_POST['name']) {
		$dataResponse = [];
		foreach ($data as $val) {
			if ($val['name'] == $_POST['name']) {
				$dataResponse[] = $val;
			}
		}
	}
	echo json_encode($dataResponse);
	die;
}

if ($_POST['getPeriodsAct']) {
	$data = [
		[
			'id' => 1,
			'name' => '????????????????????'
		],
		[
			'id' => 2,
			'name' => '??????????????????????????'
		],
		[
			'id' => 3,
			'name' => '???? ??????????'
		],
		[
			'id' => 4,
			'name' => '???? ????????????'
		],
		[
			'id' => 5,
			'name' => '??????????????'
		]
	];
	echo json_encode($data);
	die;
}

if ($_POST['getdepartments']) {
	$data = [
		[
			'id' => 1,
			'name' => '??????',
			'filter' => 2
		],
		[
			'id' => 2,
			'name' => '??????',
			'filter' => 1
		],
		[
			'id' => 3,
			'name' => '??????',
			'filter' => 1
		],
		[
			'id' => 4,
			'name' => '??????',
			'filter' => 1
		],
		[
			'id' => 5,
			'name' => '??????',
			'filter' => 4
		]
	];
	if (!$_POST['filter']) {
		echo json_encode($data);
		die;
	}

	$dataResponse = [];
	foreach ($data as $val) {
		if ($val['filter'] == $_POST['filter']) {
			$dataResponse[] = $val;
		}
	}
	echo json_encode($dataResponse);
	die;
}

if ($_POST['gettypesContract']) {
	$data = [
		[
			'id' => 1,
			'name' => '????'
		],
		[
			'id' => 2,
			'name' => '????????'
		],
		[
			'id' => 3,
			'name' => '??????'
		],
		[
			'id' => 4,
			'name' => '????'
		],
		[
			'id' => 5,
			'name' => '????????'
		]
	];
	$data[] = [
		'id' => $_POST['data'],
		'name' => '????????_' . $_POST['data']
	];

	echo json_encode($data);
	die;
}
if ($_POST['getClients']) {
	//echo 'helloUsers';
	$data = [
		[
			'id' => 1,
			'name' => '??????'
		],
		[
			'id' => 2,
			'name' => '???? ??????'
		],
		[
			'id' => 3,
			'name' => '????????'
		],
		[
			'id' => 4,
			'name' => '??????'
		],
		[
			'id' => 5,
			'name' => '????'
		],
		[
			'id' => 6,
			'name' => '??????'
		],
		[
			'id' => 7,
			'name' => '???? ??????'
		],
		[
			'id' => 8,
			'name' => '????????'
		],
		[
			'id' => 9,
			'name' => '??????2'
		],
		[
			'id' => 10,
			'name' => '????1'
		]
	];

	if (!$_POST['gid'] && !$_POST['name']) {
		echo json_encode($data);
		die;
	}
	if ($_POST['gid']) {
		$dataResponse = [];
		foreach ($data as $val) {
			if ($val['id'] == $_POST['gid']) {
				$dataResponse[] = $val;
			}
		}
	}

	if ($_POST['name']) {
		$dataResponse = [];
		foreach ($data as $val) {
			if ($val['name'] == $_POST['name']) {
				$dataResponse[] = $val;
			}
		}
	}

	echo json_encode($dataResponse);
	die;
}

if ($_POST['updateDirs']) {
	$sqlText = "SELECT 
					`id`,
					`text` as 'name'
				FROM `dir_tytetask` 
				WHERE `active`=?";
	$connect = new mysqli('localhost', 'root', '', 'db_do'); // ?????????????????????????? ?????????????????????? ?? ????
	$stmt = $connect->prepare($sqlText); // ???????????????????????????? ?????? ????????????
	$arg = 1;
	$stmt->bind_param('i', $arg);
	$stmt->execute();
	$result = $stmt->get_result();
	$arr['dir_tyteTasks'] = $result->fetch_all(MYSQLI_ASSOC);

	$sqlText = "SELECT 
		`id`,
		`name`
	FROM `dir_executors` 
	WHERE `active`=?";
	$stmt = $connect->prepare($sqlText); // ???????????????????????????? ?????? ????????????
	$arg = 1;
	$stmt->bind_param('i', $arg);
	$stmt->execute();
	$result = $stmt->get_result();
	$arr['dir_executors'] = $result->fetch_all(MYSQLI_ASSOC);


	$jsonArr = json_encode($arr);
	echo json_encode($jsonArr);
	$result->free(); // ?????????????? ??????????????????
	$stmt->close(); // ?????????????????? ???????????????????????????? ????????????
	$connect->close(); // ?????????????????? ??????????????????????
	die;
}
if ($_POST['addTask']) {
	$data = json_decode($_POST['addTask']);
	//print_r($data);
	$sqlText = "INSERT INTO `tasks_inside`
		( 
			`dateCreate`, 
			`dateBegeen`, 
			`dateEnd`, 
			`executor_id`, 
			`task`, 
			`result`, 
			`tyteTask_id`, 
			`dateComplete`, 
			`textComplete`, 
			`statusTask`
		) 
	VALUES (
			?,
			?,
			?,
			?,
			?,
			?,
			?,
			?,
			?,
			?
			)";
	$connect = new mysqli('localhost', 'root', '', 'db_do'); // ?????????????????????????? ?????????????????????? ?? ????
	$stmt = $connect->prepare($sqlText); // ???????????????????????????? ?????? ????????????
	$stmt->bind_param(
		'ssssssssss',
		$data->dateCreate,
		$data->dateBegeen,
		$data->dateEnd,
		$data->executor_id,
		$data->task,
		$data->result,
		$data->tyteTask_id,
		$data->dateComplete,
		$data->textComplete,
		$data->statusTask
	);
	$stmt->execute();
	$result = $stmt->get_result();

	$id = mysqli_insert_id($connect);

	$sqlText = "SELECT 
			`tasks_inside`.`id`,
			`tasks_inside`.`dateCreate`,
			`tasks_inside`.`dateBegeen`,
			`tasks_inside`.`dateEnd`,
			`tasks_inside`.`executor_id`,
			`dir_executors`.`name` as 'executor_name',
			`tasks_inside`.`task`,
			`tasks_inside`.`result`,
			`tasks_inside`.`tyteTask_id`,
			`dir_tytetask`.`text` as 'tyteTask_name',
			`tasks_inside`.`dateComplete`,
			`tasks_inside`.`textComplete`,
			`tasks_inside`.`statusTask`,
			1 as 'saved'
			FROM `tasks_inside`
				LEFT JOIN `dir_executors`
					ON `tasks_inside`.`executor_id`=`dir_executors`.`id`
				LEFT JOIN `dir_tytetask`
					ON `dir_tytetask`.`id`=`tasks_inside`.`tyteTask_id`
			WHERE `tasks_inside`.id=?";
	$stmt = $connect->prepare($sqlText);
	$stmt->bind_param('i', $id);
	$stmt->execute();
	$result = $stmt->get_result();

	$arr = $result->fetch_all(MYSQLI_ASSOC);
	$jsonArr = json_encode($arr);

	echo json_encode($jsonArr);
	$result->free(); // ?????????????? ??????????????????
	$stmt->close(); // ?????????????????? ???????????????????????????? ????????????
	$connect->close(); // ?????????????????? ??????????????????????

	//echo mysqli_errno($connect);

	die;
}
if ($_POST['updateTask']) {
	$data = json_decode($_POST['updateTask']);

	//print_r(json_decode($_POST['updateTask']));
	$sqlText = "UPDATE `tasks_inside` SET 
						`id`=?,
						`dateCreate`=?,
						`dateBegeen`=?,
						`dateEnd`=?,
						`executor_id`=?,
						`task`=?,
						`result`=?,
						`tyteTask_id`=?,
						`dateComplete`=?,
						`textComplete`=?,
						`statusTask`=?
					WHERE `id`=?";
	$connect = new mysqli('localhost', 'root', '', 'db_do'); // ?????????????????????????? ?????????????????????? ?? ????
	$query = $sqlText; // ?????????????????? ???????????????????? ?? ????????????????
	$stmt = $connect->prepare($query); // ???????????????????????????? ?????? ????????????
	$stmt->bind_param(
		'ssssssssssss',
		$data->id,
		$data->dateCreate,
		$data->dateBegeen,
		$data->dateEnd,
		$data->executor_id,
		$data->task,
		$data->result,
		$data->tyteTask_id,
		$data->dateComplete,
		$data->textComplete,
		$data->statusTask,
		$data->id
	);
	$stmt->execute();
	$result = $stmt->get_result();
	//echo mysqli_errno($connect);

	$sqlText = "SELECT 
			`tasks_inside`.`id`,
			`tasks_inside`.`dateCreate`,
			`tasks_inside`.`dateBegeen`,
			`tasks_inside`.`dateEnd`,
			`tasks_inside`.`executor_id`,
			`dir_executors`.`name` as 'executor_name',
			`tasks_inside`.`task`,
			`tasks_inside`.`result`,
			`tasks_inside`.`tyteTask_id`,
			`dir_tytetask`.`text` as 'tyteTask_name',
			`tasks_inside`.`dateComplete`,
			`tasks_inside`.`textComplete`,
			`tasks_inside`.`statusTask`,
			1 as 'saved'
			FROM `tasks_inside`
				LEFT JOIN `dir_executors`
					ON `tasks_inside`.`executor_id`=`dir_executors`.`id`
				LEFT JOIN `dir_tytetask`
					ON `dir_tytetask`.`id`=`tasks_inside`.`tyteTask_id`
			WHERE `tasks_inside`.id=?";
	$stmt = $connect->prepare($sqlText);
	$stmt->bind_param('i', $data->id);
	$stmt->execute();
	$result = $stmt->get_result();

	$arr = $result->fetch_all(MYSQLI_ASSOC);
	$jsonArr = json_encode($arr);

	echo json_encode($jsonArr);
	$result->free(); // ?????????????? ??????????????????
	$stmt->close(); // ?????????????????? ???????????????????????????? ????????????
	$connect->close(); // ?????????????????? ??????????????????????
	die;
}

echo "<PRE>";
print_r($_FILES);
echo "</PRE>";
echo "<PRE>";
print_r(json_decode($_POST['data']));
echo "</PRE>";
die;

$sqlText = "SELECT 
	`tasks_inside`.`id`,
	`tasks_inside`.`dateCreate`,
	`tasks_inside`.`dateBegeen`,
	`tasks_inside`.`dateEnd`,
	`tasks_inside`.`executor_id`,
	`dir_executors`.`name` as 'executor_name',
	`tasks_inside`.`task`,
	`tasks_inside`.`result`,
	`tasks_inside`.`tyteTask_id`,
	`dir_tytetask`.`text` as 'tyteTask_name',
	`tasks_inside`.`dateComplete`,
	`tasks_inside`.`textComplete`,
	`tasks_inside`.`statusTask`,
	1 as 'saved'
	FROM `tasks_inside`
		LEFT JOIN `dir_executors`
			ON `tasks_inside`.`executor_id`=`dir_executors`.`id`
		LEFT JOIN `dir_tytetask`
			ON `dir_tytetask`.`id`=`tasks_inside`.`tyteTask_id`
	WHERE ?";
/* $link=mysqli_connect('localhost', 'root', '', 'db_do');
print_r($link); */

$connect = new mysqli('localhost', 'root', '', 'db_do'); // ?????????????????????????? ?????????????????????? ?? ????
$query = $sqlText; // ?????????????????? ???????????????????? ?? ????????????????
$stmt = $connect->prepare($query); // ???????????????????????????? ?????? ????????????
$arg = 1;
$stmt->bind_param('i', $arg); // ?????????????????????? ?????????????? ? ?? ?????????????? ???????????????? ?? ?????????? ???????????? s (string)
$stmt->execute(); // ?????????????????? ???????????????????????????? ????????????
$result = $stmt->get_result(); // ???????????????? ?????????????????? ???? ?????????????????????????????? ??????????????
$rows = $result->num_rows; // ???????????????? ??????-???? ?????????? ?? ???????????????????? ???????????????????? ???? ??????????????
$arr = $result->fetch_all(MYSQLI_ASSOC);
$jsonArr = json_encode($arr)
	/* echo $rows;
	echo "<pre>";
		print_r($arr);
	echo "<pre>" */;

echo json_encode($jsonArr);
$result->free(); // ?????????????? ??????????????????
$stmt->close(); // ?????????????????? ???????????????????????????? ????????????
$connect->close(); // ?????????????????? ??????????????????????