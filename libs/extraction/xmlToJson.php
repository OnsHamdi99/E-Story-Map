
<?php

class XmlToJson {

	public function Parse ($url) {

		$fileContents= file_get_contents($url);

		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

		$fileContents = trim(str_replace('"', "'", $fileContents));

		$simpleXml = simplexml_load_string($fileContents);

		$json = json_encode($simpleXml);

		return $json;

	}


}

?>


<?php

include 'XmlToJson.php';

print XmlToJson::Parse("http://www.nfl.com/liveupdate/scorestrip/ss.xml");

?>

</article>
