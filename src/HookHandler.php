<?php

namespace MWStake\NewPageCSS;

use MediaWiki\Hook\ParserFirstCallInitHook;

class HookHandler implements ParserFirstCallInitHook {
	/**
	 * @inheritDoc
	 */
	public function onParserFirstCallInit( $parser ) {
		$parser->setHook( "css", "MWStake\\NewPageCSS\\CSSTag::handler" );
	}
}
