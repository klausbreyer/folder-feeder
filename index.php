<?php
header('Content-Type: application/rss+xml; charset=utf-8');

// Base URL of this folder, e.g. https://example.com/music/
$base_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['SCRIPT_NAME']);
$base_url = rtrim($base_url, '/') . '/';
$logo_url = $base_url . 'logo.png';

$media_types = array(
	"mp3" => "audio/mpeg",
	"m4a" => "audio/mp4",
	"mp4" => "video/mp4",
	"wav" => "audio/wav",
);

// Escape text for XML element content and attribute values.
function xml($text) {
	return htmlspecialchars($text, ENT_QUOTES | ENT_XML1, 'UTF-8');
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">
	<channel>
		<title>Folder Feeder</title>
		<link><?php echo xml($base_url); ?></link>
		<description>A simple podcast feed from the current folder.</description>
		<itunes:image href="<?php echo xml($logo_url); ?>"/>
		<image>
			<url><?php echo xml($logo_url); ?></url>
			<title>Folder Feeder</title>
			<link><?php echo xml($base_url); ?></link>
		</image>
		<?php
		if ($handle = opendir('.')) {
			while (false !== ($entry = readdir($handle))) {
				$file_parts = pathinfo($entry);
				$extension = isset($file_parts['extension']) ? strtolower($file_parts['extension']) : '';

				if (isset($media_types[$extension])) {
					$file_url = $base_url . rawurlencode($entry);
					$pub_date = date(DATE_RFC2822, filemtime($entry));
					echo "<item>\n";
					echo "<title>" . xml($file_parts['filename']) . "</title>\n";
					echo "<link>" . xml($file_url) . "</link>\n";
					echo "<guid isPermaLink=\"true\">" . xml($file_url) . "</guid>\n";
					echo "<enclosure url=\"" . xml($file_url) . "\" length=\"" . filesize($entry) . "\" type=\"" . $media_types[$extension] . "\"/>\n";
					echo "<pubDate>" . $pub_date . "</pubDate>\n";
					echo "<description>Datei: " . xml($entry) . "</description>\n";
					echo "</item>\n";
				}
			}
			closedir($handle);
		}
		?>
	</channel>
</rss>
