<html>
<head>
	<style>
		body {
			background-color: #1a1a1a;
			margin: 0;
			padding: 0;
		}
		ul {
			list-style-type: none;
			background-color: #338EFF;
			margin: 0;
			padding: 0;
		}
		li {
			padding: 14px;
		}
		textarea {
			width: 200px;
			height: 60px;
		}
		button {
			width: 80px;
			height: 30px;
			margin: 5%;
		}
	</style>
</head>
<body>
	<center>
		<ul>
			<li>ADMIN_LOGIN</li>
		</ul>

	<div id="insert">
		<button id="btnInsert" onclick="insertQuery()">Insert</button><br>
	</div>
	
	<div id="del">
		<button id="btndel" onclick="deleteQuery()">Delete</button><br>
	</div>
	</center>

</body>
<script>
	function runQuery()
	{
		var query = document.getElementById("query").value;
		window.location = 'adminloginAction.php?variable=' + query;
	}

	function insertQuery() {
		var insert = document.getElementById('insert');
		var btnInsert = document.getElementById('btnInsert');
		btnInsert.removeAttribute("onclick");

		var query = document.createElement('textarea');
		query.textContent = "INSERT INTO 'TABLE' values()";
		query.setAttribute("id","query");

		var run = document.createElement('input');
		run.setAttribute("type","button");
		run.setAttribute("value","Run sql");
		run.setAttribute("onclick","runQuery()")

		var cancel = document.createElement('input');
		cancel.setAttribute("type","button");
		cancel.setAttribute("value","close");
		cancel.setAttribute("id","c1");
		cancel.setAttribute("onclick","destroyInsert()")

		var br1 = document.createElement("br");
		var br2 = document.createElement("br");
		var hr = document.createElement("hr");

		insert.appendChild(query);
		insert.appendChild(br1);
		insert.appendChild(br2);
		insert.appendChild(run);
		insert.appendChild(hr);
	}

	function deleteQuery() {
		var del = document.getElementById('del');
		var btndel = document.getElementById('btndel');

		var query = document.createElement('textarea');
		query.textContent = "DELETE FROM 'TABLE' WHERE 'KEY'=''";
		query.setAttribute("id","query");

		var run = document.createElement('input');
		run.setAttribute("type","button");
		run.setAttribute("value","Run sql");
		run.setAttribute("onclick","runQuery()")
		

		var br1 = document.createElement("br");
		var br2 = document.createElement("br");
		var hr = document.createElement("hr");

		del.appendChild(query);
		del.appendChild(br1);
		del.appendChild(br2);
		del.appendChild(run);
		del.appendChild(hr);
		btndel.removeAttribute("onclick");
	}
	
	
</script>
</html>








