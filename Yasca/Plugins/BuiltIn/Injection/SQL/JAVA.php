<?
declare(encoding='UTF-8');
namespace Yasca\Plugins\BuiltIn\Injection\SQL;
// use \Yasca\Plugins\BuiltIn\Injection\SourceSink;
// use \Yasca\Plugins\BuiltIn\Injection\SourceRegexJava;

final class JAVA extends \Yasca\Plugin {
	// use Base, SourceSink, SourceRegexJava;
	use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;
	// protected function getSinkRegexFragment(){return <<<'EOT'
	protected function getRegex(){return <<<'EOT'
((?xi)
	
	(
		"(select|delete)\s.*from\s.*		|
		"insert\s+into\.*\s.*				|
		"update.*set.*					|
		".*call\s.*\"\s*	|
		prepareCall.*".*call\s.*"\s*\+\s*[a-zA-Z0-9_]+
	)
)
EOT;
	}
}
