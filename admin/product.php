<html lang="en">

<head>
    <title>Neelam Admin | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <form action="addproduct.php" method="post">

        ProductDesignId<input type="text" name="ProductDesignId"><br></br>
        ProductName<input type="text" name="ProductName"><br><br />
        ProductCategory<input type="text" name="ProductCategory"><br><br />
        ProductImageLink<input type="text" name="imglink"><br><br />
        IsTrending<select name="isTrending">
            <option>Yes</option>
            <option>No</option>
        </select>
        <br></br>
        <input type="submit" value="Add Product">
    </form>
</body>

</html>