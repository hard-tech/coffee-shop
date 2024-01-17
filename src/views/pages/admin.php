<?php

$title = 'admin';

ob_start();


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Handle add, update, or delete product form submission

//     if (isset($_POST['delete'])) {
//         // Handle delete product form submission
//         $id = $_POST['id'];

//         // Process the data or call your update function
//         // updateDataOnDb("", "DELETE", $apiUrl . $id);
//     } else {
//         // Handle add or update product form submission
//         $id = isset($_POST['id']) ? $_POST['id'] : null;
//         $name = $_POST['name'];
//         $pictureProd = $_POST['pictureProd'];
//         $price = $_POST['price'];
//         $inStock = isset($_POST['inStock']) ? true : false;

//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             // Process the data or call your update function
//             // updateDataOnDb(json_encode(...), "POST", $apiUrl);
//         } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
//             // Process the data or call your update function
//             // updateDataOnDb(json_encode(...), "PUT", $apiUrl . $id);
//         }
//     }
// } 




$props = [
    [1, "Caffé Capsule Carte l'or", 23, "https://media.carrefour.fr/medias/e12fed5bfd1039e2adffc3acdce74704/p_540x540/08711000360835-c1n1-s05.jpg"],
    [1, "Caffé Capsule Carte l'or", 23, "https://media.carrefour.fr/medias/e12fed5bfd1039e2adffc3acdce74704/p_540x540/08711000360835-c1n1-s05.jpg"]
];

?> 

<div id='manage-prod'>
    <div id="product">
        <?php foreach ($props as $Prod): ?>
            <form action="" method='POST' class='add-prod'>
                <h2 class='text-center my-2'>Product ID : <?php echo $Prod[0]; ?> </h2>
                <input type="text" value="<?php echo $Prod[1]; ?>">
                <input type="text" value="<?php echo $Prod[2]; ?>">
                <!-- <img src="<?php echo $Prod[3]; ?>" alt=""> -->
                <input type="text" value="<?php echo $Prod[3]; ?>">
                <button class='my-2 mt-3 btn btn-outline-primary' type='submit'>Modify</button>
                <button class='my-2 btn btn-outline-danger' name='delete' type='submit'>Delete</button>
            </form>
        <?php endforeach; ?>
    </div>

    <!-- Include your HTML/PHP code for the footer here -->
    <footer>
        <!-- Your footer content goes here -->
    </footer>
</div>

<?php
$page_content = ob_get_clean();
?>