<?php

namespace MWStake\NewPageCSS;

use MediaWiki\MediaWikiServices;
use Sanitizer;

class CSSTag {

	/**
	 * Handle the css tag
	 *
	 * @param string $content of the css tag
	 * @return string empty
	 */
	public static function handler( string $content ): string {
		$parser = MediaWikiServices::getInstance()->getParser();

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
