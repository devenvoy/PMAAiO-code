<?php 

include("utils/constants.php");

echo "<h3> For loop</h3>";
for ($i = 0; $i < 10; $i++) {
    echo "num : $i".newline;
}

echo "<h3> While loop</h3>";
$x = 0;
while($x < 10){
    echo "num : $x".newline;
$x++;
}

echo "<h3> do While loop</h3>";
do {
    echo "num : $x".newline;
$x--;
}
while ($x > 0);

echo "<h3> for each loop</h3>";

$posts = array("first post", "second post", "third post", "fourth post", "fifth post", "sixth post");
echo "Simple array : " . newline.newline;
foreach ($posts as $post) {
    echo $post.newline;
}

echo newline.newline;
echo "Associative array : " . newline.newline;
foreach ($posts as $index => $post) {
        echo $index." = ".$post.newline;
}