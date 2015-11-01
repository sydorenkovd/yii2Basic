<b>Comments</b>
<ul>
<?php
foreach($comments as $comment){
    echo "<li>". $comment->name ." : ".$comment->text . "</li>";
}
?>