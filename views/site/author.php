<?php
$this->title = "Victor Sydorenko";

$this->registerMetaTag([
	'name' => 'description',
	'content' => 'About blog\'s authors Victor Sydorenko.'
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => 'об авторе, Victor Sydorenko, sydorenkovd'
])
?>

<div id="custom">
	<h2>Об авторе</h2>
	<hr />
		<?php include "likes.php"; ?>
	<div class="post_text">
		<p class="center">
			<img src="/web/images/author.jpg" alt="Об авторе" />
		</p>

		<p>Victor Sydorenko bio</p>
	</div>
</div>