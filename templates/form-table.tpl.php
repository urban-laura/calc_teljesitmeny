<head>
<link rel='stylesheet' type='text/css' href='css/teljesitmeny.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/teljesitmeny.js"></script>
</head>

<body>

<table class='title'>
<tr>
<td>Személyautó teljesítményadó</td>
</tr>
</table>

<table class='center'>

<form name='calculator' method='post' class='calc-form'>
<tr>
<td class='years'>
Évjárat:
<select name='year' id='year' class='date'>
	###year-options###
</select>
</td>
</tr>

<tr>
<td class='padding-top'>
Teljesítmény:
<input type='number' name='teljesitmeny' id='power' class='date' value='###teljesitmeny###'>
<select name='or' class='or'>
	###or-options###
</select>
</td>
</tr>

<tr id='error'>
<td>###error###</td>
</tr>

</table>

<table class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<tr>
<td><input type='submit' id='submit' value='Számol' class='form-submit'></td>
</tr>
</table>

</form>

<table id='sum' class='###sum-visibility###'>	

<tr>
<td>Éves teljesítményadó összege: ###sum### Ft</td>
</tr>

</table>	

<table class='zero'>
<tr>
<td></td>
</tr>
</table>
</body>
