<?php

namespace MWStake\NewPageCSS;

use Parser;
use Sanitizer;

class CSSTag {

	/**
	 * Handle the css tag
	 *
	 * @param string $content of the css tag
	 * @param array $params unused
	 * @param Parser $parser Parser to convert wikitext to html
	 * @return string
	 */
	public static function handler( string $content, array $params, Parser $parser ): string {
		$css = htmlspecialchars( trim( Sanitizer::checkCss( $content ) ) );
		$parser->getOutput()->addHeadItem(
			<<<EOT
<style type="text/css">
/*<![CDATA[*/
{$css}
/*]]>*/
</style>
EOT
		);
		return '';
	}
}
