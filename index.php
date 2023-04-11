<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <!-- Inclusion de la feuille de style Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
  <div class="max-w-5xl mx-auto py-12">
    <h1 class="text-3xl font-bold text-center mb-6">Menu</h1>
    <h2 class="text-2xl font-semibold text-center mb-4">Pizza</h2>
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
      <?php require('import.php'); ?>
      <?php foreach ($menu as $index => $item) { ?>
        <?php if ($index > 0 && !empty($item[0])) { ?>
          <div class="bg-white rounded-lg shadow-md">
            <div class="px-4 py-5 sm:p-6 flex">
              <div class="w-3/4">
                <h2 class="text-xl font-bold mb-4"><?php echo $item[0]; ?></h2>
                <p class="text-gray-700 mb-4"><?php echo $item[1]; ?></p>
              </div>
              <div class="w-1/4 text-right">
                <p class="text-red-700 font-bold text-xl"><?php echo '<span class="font-bold">' . number_format(floatval($item[2]), 2, ',', '') . ' €</span>'; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</body>

</html>