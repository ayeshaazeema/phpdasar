<?php

require 'functions.php';

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
    <script>
    alert('Data successfully erased!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data failed to be erased!');
    document.location.href = 'index.php';
    </script>
    ";
}