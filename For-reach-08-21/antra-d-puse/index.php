<!-- ----------------------Asociatyvūs masyvai-----------------
24. Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre -->
<?php
$book1 = [
    'title' => 'Alisa',
    'author' => 'Lewis Carroll',
    'year' => 1865,
    'genre' => ['Adventure', 'Drama', 'Fantasy']
];

print $book1['year'];
print $book1['genre'][1];

?>

<hr />

<!-- 25. Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas -->
<?php
$book1 = [
    'title' => 'Alisa',
    'author' => 'Lewis Carroll',
    'year' => 1865,
    'genre' => ['Adventure', 'Drama', 'Fantasy']
];

$book2 = [
    'title' => 'Melisa',
    'author' => 'Carroll Lewis ',
    'year' => 1999,
    'genre' => ['Adsadsa', 'Papa']
];

$book3 = [
    'title' => 'Shmelisa',
    'author' => 'Kewis Cobs',
    'year' => 1890,
    'genre' => ['Mura']
];

$book4 = [
    'title' => 'Patrick',
    'author' => 'The Starfish',
    'year' => 2010,
    'genre' => ['Kids', 'Scy-fy', 'Miau']
];

//ir tadaaa


$books = [
    [
        'title' => 'Alisa',
        'author' => 'Lewis Carroll',
        'year' => 1865,
        'genre' => ['Adventure', 'Drama', 'Fantasy']
    ],    
    [
        'title' => 'Melisa',
        'author' => 'Carroll Lewis ',
        'year' => 1999,
        'genre' => ['Adsadsa', 'Papa']
    ],    
    [
        'title' => 'Shmelisa',
        'author' => 'Kewis Cobs',
        'year' => 1890,
        'genre' => ['Mura']
    ],    
    [
        'title' => 'Patrick',
        'author' => 'The Starfish',
        'year' => 2010,
        'genre' => ['Kids', 'Scy-fy', 'Miau']
    ],
];

var_dump($books);
?>

<hr />
<!-- 26. Išvesti visus knygų masyvo elementus su var_dump; -->
<?php
foreach ($books as $book) {
    var_dump($book);
}
?>
<!-- Išvesti visus knygų pavadinimus su var_dump -->
<?php
foreach ($books as $book) {
    var_dump($book['title']);
}
?>

<hr />

<!-- Išvesti visus knygų pavadinimus, atskirtus kableliu ir tarpu su var_dump -->
<?php
foreach ($books as $index => $book) {
    print $index;
    //1 be kablelio gale
    print $book['title'] . ($index === count($books) -1 ? '': ', ');
}
?>

<hr />

<!-- 27. Išvesti visus knygų masyvo elementus lentele; -->
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    td,
    th {
        background: lightcyan;
        border: 1px solid black;
        padding: 5px;
    }
</style>

<?php
$rowsView = '';
foreach ($books as $book) {
    $rowView = '<tr>';
    $rowView .= '<td>' . $book['title'] . '</td>';
    $rowView .= '<td>' . $book['author'] . '</td>';
    $rowView .= '<td>' . $book['year'] . '</td>';
    $rowView .= '<td>' . join(', ', $book['genre']) . '</td>';
    $rowView .= '</tr>';
    $rowsView .= $rowView;
}

?>

<table class="table table--book">
    <thead>
        <tr>
            <th>Pavadinimas</th>
            <th>Autorius</th>
            <th>Metai</th>
            <th>Zanras</th>
        </tr>
    </thead>
    <tbody>
        <?= $rowsView ?>
    </tbody>
</table>

<hr />
<hr />
<hr />
<hr />

<table class="table table--book">
    <thead>
        <tr>
            <th>Pavadinimas</th>
            <th>Autorius</th>
            <th>Metai</th>
            <th>Zanras</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book) : ?>
        <tr>
            <td><?= $book['title'] ?></td>
            <td><?= $book['author'] ?></td>
            <td><?= $book['year'] ?></td>
            <td><?= join(', ', $book['genre']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<hr />
<hr />
<!-- 28. Išvesti visų visų knygų metų vidurkį; -->

<?php
$sum = 0;
foreach ($books as $book) {
    // var_dump($book['year']);
    $sum += $book['year'];
}
$yearAvg = $sum / count($books);
?>
<div><?= $yearAvg ?></div>


<hr />
<hr />




<!-- 29. Išrikiuoti masyvą pagal metus; -->
<!-- 30. Išrikiuoti masyvą pagal pavadinimus -->