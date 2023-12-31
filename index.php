<?php
header('Content-Type: application/rss+xml; charset=utf-8');

$base_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$media_extensions = array("mp3", "m4a", "mp4", "wav");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0">
	<channel>
		<title>Folder Feeder</title>
		<link>
		<?php echo $base_url; ?>
		</link>
		<description>A simple podcast feed from the current folder.</description>
		<?php
		if ($handle = opendir('.')) {
			while (false !== ($entry = readdir($handle))) {
				$file_parts = pathinfo($entry);

				if (isset($file_parts['extension']) && in_array($file_parts['extension'], $media_extensions)) {
					$file_time = filemtime($entry);
					$pub_date = date(DATE_RFC2822, $file_time);
					echo "<item>\n";
					echo "<title>" . $file_parts['filename'] . "</title>\n";
					echo "<link>" . $base_url . $entry . "</link>\n";
					echo "<enclosure url=\"" . $base_url . $entry . "\" type=\"audio/mpeg\"/>\n";
					echo "<pubDate>" . $pub_date . "</pubDate>\n";
					echo "<description>Datei: " . $entry . "</description>\n";
					echo "</item>\n";
				}
			}
			closedir($handle);
		}
		?>

	</channel>
</rss>
