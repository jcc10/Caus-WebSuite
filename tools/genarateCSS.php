<?php
function ListThem() {
	$listoffiles = scandir("./THEME-JSON/");
	foreach ($listoffiles as $file) {
		if (($file == ".") or ($file == "..")) {
			Null;
		} else {
			preg_match("/(.{1,})(.json)/", $file, $RegExFile);
			if (count($RegExFile) >= 1){
				if ($RegExFile[2] == ".json") {
					echo("<option value='" . $RegExFile[1] . "'>" . $RegExFile[1] . "</option>\n");
				}
			}
		}
	}
}
?>
<h3>Select what CSS you want to view.</h3>
<form action="./CSS-GEN.php" method="get"  class="end">
<select name="style" required>
<?php ListThem(); ?>
</select>
<input type="submit" value="Submit">
</form>