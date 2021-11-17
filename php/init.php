<?php

try {
	$db = new pdo("mysql:host=localhost;dbname=id8542067_loankart","id8542067_loankart","loankart");
} catch (Exception $e) {
	die($e->getMessage());
}
