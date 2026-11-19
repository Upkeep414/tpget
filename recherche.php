<?php
$motCle = $_GET["q"] ?? "";
echo "Vous avez cherché : " . htmlspecialchars($motCle);