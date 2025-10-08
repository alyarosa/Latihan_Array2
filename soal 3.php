<?php
$produk = [
    [
        "nama" => "Headphone Bluetooth",
        "kategori" => "Elektronik",
        "harga" => 250000,
        "rating" => 4.6
    ],
    [
        "nama" => "Kaos Oversize",
        "kategori" => "Fashion",
        "harga" => 120000,
        "rating" => 4.3
    ],
    [
        "nama" => "Smartwatch Pro",
        "kategori" => "Gadget",
        "harga" => 350000,
        "rating" => 4.8
    ]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

echo "Produk dengan harga tertinggi:<br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
