<html>
<head>
	<style>
		.content{
			width:800px;
			margin: 20px auto;
		}
		.convert {
			background-color: #EFEFEF;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="content">
		<form method="post">
			<h2>Convert temperature</h2>
			<div class="convert">
				<table>
				<tr>
				<td>
				<label>Temperature</label>
				</td>
				<td>
				<input type="text" name="input" value="<?php echo $input ?>">
				</td>
				</tr>
				</tr>
					<tr>
						<td>
							<label>from</label>
						</td>
						<td>
							<select name='unit-from'>
								<option value="">Select</option>
								<option <?php if ($unitFrom=='fahrenheit') echo 'selected' ?> value="fahrenheit">fahrenheit</option>
								<option <?php if ($unitFrom=='celcius') echo 'selected' ?> value="celcius">celcius</option>
								<option <?php if ($unitFrom=='Kelvin') echo 'selected' ?> value="Kelvin">Kelvin</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label>To</label>
						</td><td>
						<select name='unit-to'>
							<option value="">Select</option>
							<option <?php if ($unitTo=='fahrenheit') echo 'selected' ?> value="fahrenheit">fahrenheit</option>
							<option <?php if ($unitTo=='celcius') echo 'selected' ?> value="celcius">celcius</option>
							<option <?php if ($unitTo=='Kelvin') echo 'selected' ?> value="Kelvin">Kelvin</option>
						</select>
					</td>
				</tr><tr>
				<td>
					<label>Result</label>
				</td><td>
				<input name="result" value="<?php echo $result ?>">
			</td></tr>
		</table>
	</div>

	<p>
	<input type="submit" name="submit" />
	</p>
</form>
</div>
</body>
</html>
