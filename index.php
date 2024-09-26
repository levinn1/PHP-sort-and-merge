<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../../static/styles/normalize.css">
<link rel="stylesheet" href="../../static/styles/styles.css">
<title><?php echo $greeting; ?></title>
</head>
<body>
<main>

<form method="post">
        <label for="nums1">nums1:</label><br>
        <input type="text" id="nums1" name="nums1" placeholder="cth: 1,2,3,4"><br><br>

        <label for="m">m:</label><br>
        <input type="number" id="m" name="m" placeholder="cth: 3"><br><br>

        <label for="nums2">nums2:</label><br>
        <input type="text" id="nums2" name="nums2" placeholder="cth 2,5,6,7"><br><br>

        <label for="n">n:</label><br>
        <input type="number" id="n" name="n" placeholder="cth: 3"><br><br>

        <input type="submit" value="Merge and Sort">
    </form>

<p>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nums1 = explode(',', $_POST['nums1']);
    $m = intval($_POST['m']);
    $nums2 = explode(',', $_POST['nums2']);
    $n = intval($_POST['n']);

    $nums1 = array_map('intval', $nums1);
    $nums2 = array_map('intval', $nums2);

    $nums1 = array_slice($nums1, 0, $m);

    function mergeArrays($arr1, $arr2) {
        return array_merge($arr1, $arr2);
    }

    function sortArray(&$arr) {
        sort($arr);
    }

    $mergedArray = mergeArrays($nums1, $nums2);
    sortArray($mergedArray);
    $output = "(" . implode(',', $mergedArray) . ")";
    echo "Hasil: " . $output;
}
?>



</p>
</main>
</body>
</html>
