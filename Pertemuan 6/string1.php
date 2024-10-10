<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quo autem corporis vitae quisquam ut architecto, odio sunt aut totam numquam. Quas sit pariatur totam nihil rem! Debitis et obcaecati modi delectus aperiam saepe, error voluptas, nulla omnis magni ad hic mollitia cum impedit, unde doloribus tenetur. Totam accusantium aliquam numquam! Quos facere eligendi similique suscipit earum! Distinctio, quos voluptatem? Ratione minus officia, ipsum excepturi blanditiis deleniti dolores in debitis velit a nemo, maxime, aut neque. Amet alias voluptas vel neque debitis vero, quas laudantium ullam voluptates laborum voluptatibus hic, aut assumenda, quae doloribus ab quibusdam magnam iusto blanditiis numquam.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
echo "Panjang kata : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>